<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'emr-serverless-spark',
        'version' => '2023-08-08',
    ],
    'directories' => [
        [
            'id' => 192452,
            'title' => 'SQL Compute管理',
            'type' => 'directory',
            'children' => [
                'TerminateSqlStatement',
                'CreateSqlStatement',
                'GetSqlStatement',
                'ListSessionClusters',
            ],
        ],
        [
            'id' => 192431,
            'title' => '工作空间管理',
            'type' => 'directory',
            'children' => [
                'ListWorkspaces',
                'ListWorkspaceQueues',
            ],
        ],
        [
            'id' => 192428,
            'title' => 'Spark版本管理',
            'type' => 'directory',
            'children' => [
                'ListReleaseVersions',
            ],
        ],
        [
            'id' => 192430,
            'title' => 'Spark任务管理',
            'type' => 'directory',
            'children' => [
                'CancelJobRun',
                'ListJobRuns',
                'GetJobRun',
                'StartJobRun',
            ],
        ],
        [
            'id' => 192589,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GrantRoleToUsers',
                'AddMembers',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'Artifact' => [
                'type' => 'object',
                'properties' => [
                    'gmtModified' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'title' => '创建者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'title' => '最后更新时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'title' => '最后更新者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'bizId' => [
                        'title' => '资源文件业务id',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'title' => '资源文件名称',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'location' => [
                        'title' => '资源文件地址',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'credential' => [
                        'title' => '资源文件访问密钥',
                        '$ref' => '#/components/schemas/Credential',
                    ],
                ],
            ],
            'Category' => [
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '目录类型',
                        'type' => 'string',
                        'required' => true,
                        'default' => 'TASK',
                        'enum' => [
                            'TASK',
                            'ARTIFACT',
                        ],
                    ],
                    'gmtModified' => [
                        'title' => '最后更新时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'title' => '创建者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'title' => '最后更新者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'bizId' => [
                        'title' => '目录业务id',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'title' => '目录名臣',
                        'type' => 'string',
                        'required' => true,
                        'maxLength' => 64,
                        'minLength' => 1,
                    ],
                    'parentBizId' => [
                        'title' => '父目录业务id',
                        'type' => 'string',
                    ],
                ],
            ],
            'Configuration' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'configFileName' => [
                        'title' => '配置文件名称',
                        'type' => 'string',
                    ],
                    'configItemKey' => [
                        'title' => '配置项名称',
                        'type' => 'string',
                    ],
                    'configItemValue' => [
                        'title' => '配置项值',
                        'type' => 'string',
                    ],
                ],
            ],
            'ConfigurationOverrides' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'configurations' => [
                        'title' => 'configurations',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'configFileName' => [
                                    'title' => 'configFileName',
                                    'type' => 'string',
                                ],
                                'configItemKey' => [
                                    'title' => 'configItemKey',
                                    'type' => 'string',
                                ],
                                'configItemValue' => [
                                    'title' => 'configItemValue',
                                    'type' => 'string',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Credential' => [
                'type' => 'object',
                'properties' => [
                    'securityToken' => [
                        'title' => 'sts token',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'policy' => [
                        'title' => 'oss访问策略',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'expire' => [
                        'title' => '超时时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'accessId' => [
                        'title' => 'sts ak',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'signature' => [
                        'title' => 'oss访问签名',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'host' => [
                        'title' => 'oss域名',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'dir' => [
                        'title' => 'oss路径',
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'JobDriver' => [
                'title' => 'A short description of struct',
                'description' => 'jobDriver',
                'type' => 'object',
                'properties' => [
                    'sparkSubmit' => [
                        'title' => 'sparkSubmit',
                        'type' => 'object',
                        'properties' => [
                            'entryPoint' => [
                                'title' => 'entryPoint',
                                'type' => 'string',
                            ],
                            'entryPointArguments' => [
                                'title' => 'entryPointArguments',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'sparkSubmitParameters' => [
                                'title' => 'sparkSubmitParameters',
                                'type' => 'string',
                            ],
                        ],
                    ],
                ],
            ],
            'PrincipalAction' => [
                'title' => 'A short description of struct',
                'description' => 'PrincipalAction',
                'type' => 'object',
                'properties' => [
                    'principalArn' => [
                        'title' => '主体Arn',
                        'type' => 'string',
                        'example' => 'acs:emr::workspaceId:user/237593691541622267',
                    ],
                    'actionArn' => [
                        'title' => '行为Arn',
                        'type' => 'string',
                        'example' => 'acs:emr::workspaceId:action/create_queue',
                    ],
                ],
            ],
            'ReleaseVersionImage' => [
                'title' => 'A short description of struct',
                'description' => '主版本镜像',
                'type' => 'object',
                'properties' => [
                    'runtimeEngineType' => [
                        'title' => 'runtimeEngineType',
                        'type' => 'string',
                    ],
                    'cpuArchitecture' => [
                        'title' => 'cpuArchitecture',
                        'type' => 'string',
                    ],
                    'imageId' => [
                        'title' => 'imageId',
                        'type' => 'string',
                    ],
                ],
            ],
            'RunLog' => [
                'title' => 'A short description of struct',
                'description' => 'runLog',
                'type' => 'object',
                'properties' => [
                    'driverStdOut' => [
                        'title' => 'driverStdOut',
                        'type' => 'string',
                    ],
                    'driverStdError' => [
                        'title' => 'driverStdError',
                        'type' => 'string',
                    ],
                    'driverSyslog' => [
                        'title' => 'driverSyslog',
                        'type' => 'string',
                    ],
                    'driverStartup' => [
                        'title' => 'driverStartup',
                        'type' => 'string',
                    ],
                ],
            ],
            'SparkConf' => [
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'title' => 'spark conf value',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'key' => [
                        'title' => 'spark conf key',
                        'type' => 'string',
                        'required' => true,
                    ],
                ],
            ],
            'SqlOutput' => [
                'title' => '结果集',
                'type' => 'object',
                'properties' => [
                    'schema' => [
                        'title' => '结果集结构',
                        'type' => 'object',
                        'properties' => [
                            'fields' => [
                                'title' => '结果集',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'name' => [
                                            'title' => '名称',
                                            'type' => 'string',
                                        ],
                                        'type' => [
                                            'title' => '类型',
                                            'type' => 'string',
                                        ],
                                        'nullable' => [
                                            'title' => '是否可空',
                                            'type' => 'boolean',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                    'rows' => [
                        'title' => '行',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'values' => [
                                    'title' => '值列表',
                                    'type' => 'array',
                                    'items' => [
                                        'type' => 'string',
                                    ],
                                    'example' => 'null',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'Tag' => [
                'type' => 'object',
                'properties' => [
                    'key' => [
                        'title' => '标签key值。',
                        'description' => '标签key值。',
                        'type' => 'string',
                        'example' => 'workflowId',
                    ],
                    'value' => [
                        'title' => '标签key值。',
                        'description' => '标签key值。',
                        'type' => 'string',
                        'example' => 'wf-123test',
                    ],
                ],
            ],
            'Task' => [
                'type' => 'object',
                'properties' => [
                    'sparkArgs' => [
                        'title' => 'spark参数',
                        'type' => 'string',
                        'example' => '100',
                    ],
                    'sparkDriverMemory' => [
                        'title' => 'spark driver内存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkVersion' => [
                        'title' => 'spark版本',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkExecutorMemory' => [
                        'title' => 'spark executor内存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkLogLevel' => [
                        'title' => 'spark日志级别',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkEntrypoint' => [
                        'title' => 'spark主类入口',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'gmtModified' => [
                        'title' => '最后创建时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'hasCommited' => [
                        'title' => '是否已提交',
                        'type' => 'boolean',
                        'required' => true,
                    ],
                    'sparkLogPath' => [
                        'title' => 'spark日志',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'title' => '创建者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'name' => [
                        'title' => 'task名称',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkDriverCores' => [
                        'title' => 'spark driver核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'type' => [
                        'title' => 'task类型',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkExecutorCores' => [
                        'title' => 'spark executor核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'content' => [
                        'title' => 'spark作业内容',
                        'type' => 'string',
                        'required' => false,
                    ],
                    'extraArtifactIds' => [
                        'title' => 'spark额外资源id',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => false,
                    ],
                    'lastRunResourceQueueId' => [
                        'title' => '最后一次运行的资源队列id',
                        'type' => 'string',
                    ],
                    'modifier' => [
                        'title' => '最后一次更新者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkConf' => [
                        'title' => 'spark配置列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SparkConf',
                        ],
                    ],
                    'bizId' => [
                        'title' => '业务id',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'categoryBizId' => [
                        'title' => '目录业务id',
                        'type' => 'string',
                    ],
                    'artifactUrl' => [
                        'title' => '资源文件访问临时url',
                        'type' => 'string',
                    ],
                    'defaultResourceQueueId' => [
                        'title' => 'task默认队列id',
                        'type' => 'string',
                    ],
                    'tags' => [
                        'title' => '任务标签',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => '标签键',
                        ],
                    ],
                    'defaultDatabase' => [
                        'title' => '默认数据库',
                        'type' => 'string',
                    ],
                    'hasChanged' => [
                        'title' => '最后一次提交后是否变更',
                        'type' => 'boolean',
                    ],
                    'pyFiles' => [
                        'title' => 'spark pyspark依赖pyfiles',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                        'required' => false,
                    ],
                    'defaultCatalogId' => [
                        'title' => '默认catalog id',
                        'type' => 'string',
                    ],
                    'defaultSqlComputeId' => [
                        'title' => '默认sql session id',
                        'type' => 'string',
                    ],
                    'jars' => [
                        'title' => '--jars参数',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'archives' => [
                        'title' => '--archives参数',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'files' => [
                        'title' => '--files参数',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                    'extraSparkSubmitParams' => [
                        'title' => '自定义spark submit配置参数',
                        'type' => 'string',
                    ],
                    'deploymentId' => [
                        'title' => 'streaming任务部署id',
                        'type' => 'string',
                    ],
                    'isStreaming' => [
                        'title' => '是否是streaming任务',
                        'type' => 'boolean',
                    ],
                    'sparkSubmitClause' => [
                        'title' => 'spark submit任务提交语句',
                        'type' => 'string',
                    ],
                ],
            ],
            'TaskInstance' => [
                'type' => 'object',
                'properties' => [
                    'taskInfo' => [
                        'title' => '任务详细信息',
                        'required' => false,
                        '$ref' => '#/components/schemas/Task',
                    ],
                    'workspaceBizId' => [
                        'title' => '工作空间id',
                        'type' => 'string',
                    ],
                    'taskBizId' => [
                        'title' => '任务业务id',
                        'type' => 'string',
                    ],
                    'taskStatus' => [
                        'title' => '任务实例状态',
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'title' => '任务实例业务id',
                        'type' => 'string',
                    ],
                    'fenixRunId' => [
                        'title' => 'fenix run id',
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'creator' => [
                        'title' => '创建者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                ],
            ],
            'TaskSnapshot' => [
                'type' => 'object',
                'properties' => [
                    'commiter' => [
                        'title' => '提交者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                    ],
                    'item' => [
                        'title' => '任务信息',
                        '$ref' => '#/components/schemas/Task',
                    ],
                    'taskBizId' => [
                        'title' => '任务业务id',
                        'type' => 'string',
                    ],
                    'message' => [
                        'title' => '提交信息',
                        'type' => 'string',
                    ],
                    'version' => [
                        'title' => '提交版本',
                        'type' => 'string',
                    ],
                    'gmtCreated' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'bizId' => [
                        'title' => '业务id',
                        'type' => 'string',
                    ],
                ],
            ],
            'Template' => [
                'type' => 'object',
                'properties' => [
                    'sparkDriverCores' => [
                        'title' => 'spark driver核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'sparkDriverMemory' => [
                        'title' => 'spark driver内存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkExecutorMemory' => [
                        'title' => 'spark executor内存',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkVersion' => [
                        'title' => 'spark内部release版本',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkLogLevel' => [
                        'title' => 'spark日志级别',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkExecutorCores' => [
                        'title' => 'spark executor核数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                    ],
                    'gmtModified' => [
                        'title' => '最后更新时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'sparkLogPath' => [
                        'title' => 'spark日志路径',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'creator' => [
                        'title' => '创建者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'gmtCreated' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'required' => true,
                    ],
                    'modifier' => [
                        'title' => '最后更新者uid',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                    ],
                    'sparkConf' => [
                        'title' => 'spark conf',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/SparkConf',
                        ],
                    ],
                    'templateType' => [
                        'title' => '模板类型',
                        'type' => 'string',
                    ],
                ],
            ],
            'TimeRange' => [
                'title' => '时间范围',
                'type' => 'object',
                'properties' => [
                    'startTime' => [
                        'title' => '时间范围开始时间。',
                        'description' => '时间范围开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1688370894339',
                    ],
                    'endTime' => [
                        'title' => '时间范围结束时间。',
                        'description' => '时间范围结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1688370894339',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'TerminateSqlStatement' => [
            'summary' => '终止 session statement',
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}/terminate',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '224753',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-d2d82aa09155****',
                    ],
                ],
                [
                    'name' => 'statementId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '交互式查询ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'st-abcadfadf12****',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                                'description' => '请求ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '终止SQL查询',
        ],
        'CreateSqlStatement' => [
            'summary' => '使用session运行SQL',
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement',
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
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '224750',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'A short description of struct',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-26ca1703f6d****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'flat',
                    'schema' => [
                        'description' => '创建SQL查询请求体。',
                        'type' => 'object',
                        'properties' => [
                            'codeContent' => [
                                'description' => 'SQL代码。允许传入一条或多条SQL语句进行执行。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'SHOW TABLES',
                            ],
                            'defaultDatabase' => [
                                'description' => '默认数据库名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default',
                            ],
                            'limit' => [
                                'description' => 'limit值，取值范围：1~10000。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1000',
                                'default' => '1000',
                            ],
                            'defaultCatalog' => [
                                'description' => '默认DLF Catalog ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'default_catalog',
                            ],
                            'sqlComputeId' => [
                                'description' => 'SQL Compute ID。需要在EMR Serverless Spark工作空间的Compute模块内创建。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'sc-dfahdfjafhajd****',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'statementId' => [
                                        'description' => 'SQL查询ID。',
                                        'type' => 'string',
                                        'example' => 'st-1231dfafadfa***',
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'description' => '请求ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": {\\n    \\"statementId\\": \\"st-1231dfafadfa***\\"\\n  },\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '创建SQL查询',
        ],
        'GetSqlStatement' => [
            'summary' => '获取Sql Statement状态',
            'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '224752',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-d2d82aa09155****',
                    ],
                ],
                [
                    'name' => 'statementId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '交互式查询ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'st-2dadfhajk11cv****',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'statementId' => [
                                        'description' => '查询ID。',
                                        'type' => 'string',
                                        'example' => 'st-1231311abadfaa',
                                    ],
                                    'state' => [
                                        'description' => '查询状态。',
                                        'type' => 'string',
                                        'enumValueTitles' => [
                                            'running' => 'running',
                                            'available' => 'available',
                                            'cancelled' => 'cancelled',
                                            'error' => 'error',
                                            'cancelling' => 'cancelling',
                                        ],
                                        'example' => 'running',
                                        'enum' => [
                                            'running',
                                            'error',
                                            'waiting',
                                            'cancelling',
                                            'cancelled',
                                            'available',
                                            'success',
                                        ],
                                    ],
                                    'sqlOutputs' => [
                                        'description' => 'SQL查询结果列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '单个SQL查询结果',
                                            'type' => 'object',
                                            'properties' => [
                                                'rows' => [
                                                    'description' => '查询数据，格式为经过JSON序列化的字符串。',
                                                    'type' => 'string',
                                                    'example' => '[{\\"values\\":[\\"test_db\\",\\"test_table\\",false]}',
                                                ],
                                                'schema' => [
                                                    'description' => 'Schema的详细信息，格式为经过JSON序列化的字符串。',
                                                    'type' => 'string',
                                                    'example' => '{\\"type\\":\\"struct\\",\\"fields\\":[{\\"name\\":\\"namespace\\",\\"type\\":\\"string\\",\\"nullable\\":false,\\"metadata\\":{}},{\\"name\\":\\"tableName\\",\\"type\\":\\"string\\",\\"nullable\\":false,\\"metadata\\":{}},{\\"name\\":\\"isTemporary\\",\\"type\\":\\"boolean\\",\\"nullable\\":false,\\"metadata\\":{}}]}',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'sqlErrorCode' => [
                                        'description' => 'SQL查询错误码。',
                                        'type' => 'string',
                                        'example' => 'ERROR-102',
                                    ],
                                    'sqlErrorMessage' => [
                                        'description' => 'SQL查询错误信息。',
                                        'type' => 'string',
                                        'example' => 'error message',
                                    ],
                                    'executionTime' => [
                                        'description' => 'SQL查询耗时列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '每个SQL查询消耗时间，单位毫秒。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1717138731701',
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'description' => '请求ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": {\\n    \\"statementId\\": \\"st-1231311abadfaa\\",\\n    \\"state\\": \\"running\\",\\n    \\"sqlOutputs\\": [\\n      {\\n        \\"rows\\": \\"[{\\\\\\\\\\\\\\"values\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"test_db\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"test_table\\\\\\\\\\\\\\",false]}\\",\\n        \\"schema\\": \\"{\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"struct\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"fields\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"namespace\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"nullable\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"metadata\\\\\\\\\\\\\\":{}},{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"tableName\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"nullable\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"metadata\\\\\\\\\\\\\\":{}},{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"isTemporary\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"boolean\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"nullable\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"metadata\\\\\\\\\\\\\\":{}}]}\\"\\n      }\\n    ],\\n    \\"sqlErrorCode\\": \\"ERROR-102\\",\\n    \\"sqlErrorMessage\\": \\"error message\\",\\n    \\"executionTime\\": [\\n      1717138731701\\n    ]\\n  },\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '获取SQL查询详情',
        ],
        'ListSessionClusters' => [
            'summary' => '查询run列表',
            'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '202905',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '标记当前开始读取的位置。',
                        'description' => '标记当前开始读取的位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '一次获取的最大记录数。',
                        'description' => '一次获取的最大记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '工作空间id。',
                        'description' => '工作空间id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-1234abcd',
                    ],
                ],
                [
                    'name' => 'sessionClusterId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '作业名称。',
                        'description' => '作业名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'emr-spark-demo-job',
                    ],
                ],
                [
                    'name' => 'queueName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '队列名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'root',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'sessionClusters' => [
                                'description' => 'SQL Compute列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'SQL Compute详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'workspaceId' => [
                                            'title' => '工作空间id。',
                                            'description' => '工作空间id。',
                                            'type' => 'string',
                                            'example' => 'w-1234abcd',
                                        ],
                                        'sessionClusterId' => [
                                            'title' => '交互式作业会话id。',
                                            'description' => 'SQL Compute id',
                                            'type' => 'string',
                                            'example' => 'sc-123131',
                                        ],
                                        'userId' => [
                                            'title' => '任务实例ID。',
                                            'description' => '用户id',
                                            'type' => 'string',
                                            'example' => '123131',
                                        ],
                                        'queueName' => [
                                            'title' => '作业实例名称。',
                                            'description' => 'SQL Compute运行队列名称',
                                            'type' => 'string',
                                            'example' => 'dev_queue',
                                        ],
                                        'state' => [
                                            'title' => '作业状态。',
                                            'description' => 'SQL Compute状态',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'stateChangeReason' => [
                                            'description' => 'SQL Compute最近一次状态变化详情',
                                            'type' => 'object',
                                            'properties' => [
                                                'code' => [
                                                    'description' => '状态变化编码',
                                                    'type' => 'string',
                                                    'example' => '200',
                                                ],
                                                'message' => [
                                                    'description' => '状态变化消息',
                                                    'type' => 'string',
                                                    'example' => 'ok',
                                                ],
                                            ],
                                        ],
                                        'autoStartConfiguration' => [
                                            'description' => '自动启动配置',
                                            'type' => 'object',
                                            'properties' => [
                                                'enable' => [
                                                    'description' => '是否开启自动启动',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                            ],
                                        ],
                                        'autoStopConfiguration' => [
                                            'description' => '自动终止配置',
                                            'type' => 'object',
                                            'properties' => [
                                                'enable' => [
                                                    'description' => '是否允许自动终止',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'idleTimeoutMinutes' => [
                                                    'description' => 'SQL Compute空闲指定分钟数后自动终止',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '45',
                                                ],
                                            ],
                                        ],
                                        'applicationConfigs' => [
                                            'description' => 'SQL Compute配置，等价于背后运行的spark job的配置',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'configFileName' => [
                                                        'description' => '配置文件名',
                                                        'type' => 'string',
                                                        'example' => 'spark-default.conf',
                                                    ],
                                                    'configItemKey' => [
                                                        'description' => '配置键',
                                                        'type' => 'string',
                                                        'example' => 'spark.app.name',
                                                    ],
                                                    'configItemValue' => [
                                                        'description' => '配置值',
                                                        'type' => 'string',
                                                        'example' => 'test_application',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'name' => [
                                            'description' => 'SQL Compute名称',
                                            'type' => 'string',
                                            'example' => 'adhoc_query',
                                        ],
                                        'userName' => [
                                            'description' => '用户名',
                                            'type' => 'string',
                                            'example' => 'test_user',
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'title' => '返回读取到的数据位置。',
                                'description' => '返回读取到的数据位置。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
                            ],
                            'maxResults' => [
                                'title' => '本次请求所返回的最大记录条数。',
                                'description' => '本次请求所返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'totalCount' => [
                                'title' => '本次请求条件下的数据总量。',
                                'description' => '本次请求条件下的数据总量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"sessionClusters\\": [\\n    {\\n      \\"workspaceId\\": \\"w-1234abcd\\",\\n      \\"sessionClusterId\\": \\"sc-123131\\",\\n      \\"userId\\": \\"123131\\",\\n      \\"queueName\\": \\"dev_queue\\",\\n      \\"state\\": \\"Running\\",\\n      \\"stateChangeReason\\": {\\n        \\"code\\": \\"200\\",\\n        \\"message\\": \\"ok\\"\\n      },\\n      \\"autoStartConfiguration\\": {\\n        \\"enable\\": true\\n      },\\n      \\"autoStopConfiguration\\": {\\n        \\"enable\\": false,\\n        \\"idleTimeoutMinutes\\": 45\\n      },\\n      \\"applicationConfigs\\": [\\n        {\\n          \\"configFileName\\": \\"spark-default.conf\\",\\n          \\"configItemKey\\": \\"spark.app.name\\",\\n          \\"configItemValue\\": \\"test_application\\"\\n        }\\n      ],\\n      \\"name\\": \\"adhoc_query\\",\\n      \\"userName\\": \\"test_user\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C89568980\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
            'title' => '获取SQL Compute列表',
        ],
        'ListWorkspaces' => [
            'summary' => '调用ListWorkspaces获取工作空间列表。',
            'path' => '/api/v1/workspaces',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'abilityTreeCode' => '192019',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '标记当前开始读取的位置。',
                        'description' => '标记当前开始读取的位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '一次获取的最大记录数。',
                        'description' => '一次获取的最大记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '根据工作空间名称模糊搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_workspace',
                    ],
                ],
                [
                    'name' => 'state',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间状态',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'running',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回数据',
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'workspaces' => [
                                'description' => '工作空间列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作空间详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'workspaceId' => [
                                            'title' => 'Workspace Id。',
                                            'description' => 'Workspace ID。',
                                            'type' => 'string',
                                            'example' => 'w-******',
                                        ],
                                        'workspaceName' => [
                                            'title' => '工作空间名称。',
                                            'description' => '工作空间名称。',
                                            'type' => 'string',
                                            'example' => 'spark批作业空间-1',
                                        ],
                                        'resourceSpec' => [
                                            'title' => '资源规格。',
                                            'description' => '资源规格。',
                                            'type' => 'string',
                                            'example' => '100cu',
                                        ],
                                        'storage' => [
                                            'title' => 'oss 路径。',
                                            'description' => 'OSS路径。',
                                            'type' => 'string',
                                            'example' => 'spark-result',
                                        ],
                                        'dlfCatalogId' => [
                                            'title' => 'dlf catalog 信息。',
                                            'description' => 'DLF Catalog信息。',
                                            'type' => 'string',
                                            'example' => 'default',
                                        ],
                                        'paymentType' => [
                                            'title' => '付费类型。',
                                            'description' => '付费类型。',
                                            'type' => 'string',
                                            'example' => 'PayAsYouGo or Subscription',
                                        ],
                                        'paymentDurationUnit' => [
                                            'title' => '订购周期(pre付费类型必须)。',
                                            'description' => '订购周期（pre付费类型必填）。',
                                            'type' => 'string',
                                            'example' => 'YEAR, MONTH, WEEK, DAY, HOUR, MINUTE',
                                        ],
                                        'duration' => [
                                            'title' => '订购周期数量(pre付费类型必须)。',
                                            'description' => '订购周期数量（pre付费类型必填）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'autoRenew' => [
                                            'title' => '是否自动续费(pre付费类型必须)。',
                                            'description' => '是否自动续费（pre付费类型必填）。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'autoRenewPeriod' => [
                                            'title' => '自动续费时长(pre付费类型必须)。',
                                            'description' => '自动续费时长（pre付费类型必填）。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'autoRenewPeriodUnit' => [
                                            'title' => '自动续费周期(pre付费类型必须)。',
                                            'description' => '自动续费周期（pre付费类型必填）。',
                                            'type' => 'string',
                                            'example' => 'YEAR, MONTH, WEEK, DAY, HOUR, MINUTE',
                                        ],
                                        'workspaceStatus' => [
                                            'title' => '工作空间状态。',
                                            'description' => '工作空间状态。',
                                            'type' => 'string',
                                            'example' => 'STARTING,RUNNING,TERMINATED',
                                        ],
                                        'failReason' => [
                                            'title' => '失败原因。',
                                            'description' => '失败原因。',
                                            'type' => 'string',
                                            'example' => 'out of stock',
                                        ],
                                        'paymentStatus' => [
                                            'title' => '支付状态。',
                                            'description' => '支付状态。',
                                            'type' => 'string',
                                            'example' => 'PAID/UNPAID',
                                        ],
                                        'regionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-shanghai',
                                        ],
                                        'createTime' => [
                                            'description' => '工作空间创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1684115879955',
                                        ],
                                        'endTime' => [
                                            'description' => '工作空间释放时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1687103999999',
                                        ],
                                        'stateChangeReason' => [
                                            'description' => '工作空间状态的变更信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'code' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'message' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'Success',
                                                ],
                                            ],
                                        ],
                                        'releaseType' => [
                                            'description' => '工作空间释放原因。',
                                            'type' => 'string',
                                            'example' => 'SERVICE_RELEASE',
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'title' => '下一页TOKEN。',
                                'description' => '下一页TOKEN。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'maxResults' => [
                                'title' => '一次获取的最大记录数。',
                                'description' => '一次获取的最大记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'totalCount' => [
                                'title' => '记录总数。',
                                'description' => '记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"workspaces\\": [\\n    {\\n      \\"workspaceId\\": \\"w-******\\",\\n      \\"workspaceName\\": \\"spark批作业空间-1\\",\\n      \\"resourceSpec\\": \\"100cu\\",\\n      \\"storage\\": \\"spark-result\\",\\n      \\"dlfCatalogId\\": \\"default\\",\\n      \\"paymentType\\": \\"PayAsYouGo or Subscription\\",\\n      \\"paymentDurationUnit\\": \\"YEAR, MONTH, WEEK, DAY, HOUR, MINUTE\\",\\n      \\"duration\\": 1,\\n      \\"autoRenew\\": true,\\n      \\"autoRenewPeriod\\": 1,\\n      \\"autoRenewPeriodUnit\\": \\"YEAR, MONTH, WEEK, DAY, HOUR, MINUTE\\",\\n      \\"workspaceStatus\\": \\"STARTING,RUNNING,TERMINATED\\",\\n      \\"failReason\\": \\"out of stock\\",\\n      \\"paymentStatus\\": \\"PAID/UNPAID\\",\\n      \\"regionId\\": \\"cn-shanghai\\",\\n      \\"createTime\\": 1684115879955,\\n      \\"endTime\\": 1687103999999,\\n      \\"stateChangeReason\\": {\\n        \\"code\\": \\"0\\",\\n        \\"message\\": \\"Success\\"\\n      },\\n      \\"releaseType\\": \\"SERVICE_RELEASE\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"1\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
            'title' => '获取工作空间列表',
        ],
        'ListWorkspaceQueues' => [
            'summary' => '查看工作空间队列列表',
            'path' => '/api/v1/workspaces/{workspaceId}/queues',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'abilityTreeCode' => '192786',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '工作空间ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'w-26ca1703f6d71e6e',
                    ],
                ],
                [
                    'name' => 'environment',
                    'in' => 'query',
                    'schema' => [
                        'description' => '环境类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'dev' => 'dev',
                            'production' => 'production',
                        ],
                        'example' => 'production',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'queues' => [
                                'description' => '队列列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '队列详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'regionId' => [
                                            'title' => 'regionId。',
                                            'description' => 'regionId。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'queueName' => [
                                            'title' => '队列名称。',
                                            'description' => '队列名称。',
                                            'type' => 'string',
                                            'example' => 'dev_queue',
                                        ],
                                        'workspaceId' => [
                                            'title' => '工作空间id。',
                                            'description' => '工作空间id。',
                                            'type' => 'string',
                                            'example' => 'w-1234abcd',
                                        ],
                                        'queueType' => [
                                            'title' => '队列类型',
                                            'description' => '队列类型',
                                            'type' => 'string',
                                            'example' => 'instance, instanceChildren',
                                        ],
                                        'properties' => [
                                            'title' => '队列Label',
                                            'description' => '队列Label',
                                            'type' => 'string',
                                            'example' => 'dev_queue',
                                        ],
                                        'queueScope' => [
                                            'title' => '队列架构',
                                            'description' => '队列架构',
                                            'type' => 'string',
                                            'example' => '{"arch": "x86"}',
                                        ],
                                        'maxResource' => [
                                            'title' => '队列资源最大容量',
                                            'description' => '队列资源最大容量',
                                            'type' => 'string',
                                            'example' => '{"cpu": "2","memory": "2Gi"}',
                                        ],
                                        'minResource' => [
                                            'title' => '队列资源最小容量',
                                            'description' => '队列资源最小容量',
                                            'type' => 'string',
                                            'example' => '{"cpu": "2","memory": "2Gi"}',
                                        ],
                                        'usedResource' => [
                                            'title' => '队列资源使用容量',
                                            'description' => '队列资源使用容量',
                                            'type' => 'string',
                                            'example' => '{"cpu": "2","memory": "2Gi"}',
                                        ],
                                        'queueStatus' => [
                                            'description' => '队列状态',
                                            'type' => 'string',
                                            'example' => 'RUNNING',
                                        ],
                                        'creator' => [
                                            'description' => '创建用户UID。',
                                            'type' => 'string',
                                            'example' => '237109',
                                        ],
                                        'allowActions' => [
                                            'title' => '队列允许的操作',
                                            'description' => '队列允许的操作列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '队列允许的操作',
                                                'type' => 'object',
                                                'properties' => [
                                                    'actionArn' => [
                                                        'title' => '行为 arn。',
                                                        'description' => '行为 arn。',
                                                        'type' => 'string',
                                                        'example' => 'acs:emr::workspaceId:action/create_queue',
                                                    ],
                                                    'actionName' => [
                                                        'title' => '权限名称。',
                                                        'description' => '权限名称。',
                                                        'type' => 'string',
                                                        'example' => 'view',
                                                    ],
                                                    'displayName' => [
                                                        'title' => '权限展示名称。',
                                                        'description' => '权限展示名称。',
                                                        'type' => 'string',
                                                        'example' => '文件目录遍历、文件浏览',
                                                    ],
                                                    'description' => [
                                                        'title' => 'action 描述。',
                                                        'description' => 'action 描述。',
                                                        'type' => 'string',
                                                        'example' => '文件目录遍历、文件浏览',
                                                    ],
                                                    'dependencies' => [
                                                        'title' => 'action 依赖列表。',
                                                        'description' => 'action 依赖列表。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'description' => 'action依赖',
                                                            'type' => 'string',
                                                            'example' => 'view',
                                                        ],
                                                        'example' => '["view"]',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'environments' => [
                                            'description' => '队列环境类型列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '队列环境类型',
                                                'type' => 'string',
                                                'example' => 'production',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'title' => '下一页TOKEN。',
                                'description' => '下一页TOKEN。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'maxResults' => [
                                'title' => '一次获取的最大记录数。',
                                'description' => '一次获取的最大记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'totalCount' => [
                                'title' => '记录总数。',
                                'description' => '记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"queues\\": [\\n    {\\n      \\"regionId\\": \\"cn-hangzhou\\",\\n      \\"queueName\\": \\"dev_queue\\",\\n      \\"workspaceId\\": \\"w-1234abcd\\",\\n      \\"queueType\\": \\"instance, instanceChildren\\",\\n      \\"properties\\": \\"dev_queue\\",\\n      \\"queueScope\\": \\"{\\\\\\"arch\\\\\\": \\\\\\"x86\\\\\\"}\\",\\n      \\"maxResource\\": \\"{\\\\\\"cpu\\\\\\": \\\\\\"2\\\\\\",\\\\\\"memory\\\\\\": \\\\\\"2Gi\\\\\\"}\\",\\n      \\"minResource\\": \\"{\\\\\\"cpu\\\\\\": \\\\\\"2\\\\\\",\\\\\\"memory\\\\\\": \\\\\\"2Gi\\\\\\"}\\",\\n      \\"usedResource\\": \\"{\\\\\\"cpu\\\\\\": \\\\\\"2\\\\\\",\\\\\\"memory\\\\\\": \\\\\\"2Gi\\\\\\"}\\",\\n      \\"queueStatus\\": \\"RUNNING\\",\\n      \\"creator\\": \\"237109\\",\\n      \\"allowActions\\": [\\n        {\\n          \\"actionArn\\": \\"acs:emr::workspaceId:action/create_queue\\",\\n          \\"actionName\\": \\"view\\",\\n          \\"displayName\\": \\"文件目录遍历、文件浏览\\",\\n          \\"description\\": \\"文件目录遍历、文件浏览\\",\\n          \\"dependencies\\": [\\n            \\"view\\"\\n          ]\\n        }\\n      ],\\n      \\"environments\\": [\\n        \\"production\\"\\n      ]\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"1\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
            'title' => '获取工作空间队列列表',
        ],
        'ListReleaseVersions' => [
            'summary' => '获取发布版本列表',
            'path' => '/api/v1/releaseVersions',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'releaseVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'serverless spark版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)',
                    ],
                ],
                [
                    'name' => 'releaseVersionStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本状态',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'ONLINE' => 'ONLINE',
                            'OFFLINE' => 'OFFLINE',
                        ],
                        'example' => 'ONLINE',
                    ],
                ],
                [
                    'name' => 'releaseType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '版本类型',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'stable' => 'stable',
                            'beta' => 'beta',
                        ],
                        'example' => 'stable',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'releaseVersions' => [
                                'description' => '版本列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本详情',
                                    'type' => 'object',
                                    'properties' => [
                                        'releaseVersion' => [
                                            'description' => '版本号',
                                            'type' => 'string',
                                            'example' => 'esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)',
                                        ],
                                        'state' => [
                                            'description' => '版本状态',
                                            'type' => 'string',
                                            'example' => 'ONLINE',
                                        ],
                                        'type' => [
                                            'description' => '版本类型',
                                            'type' => 'string',
                                            'example' => 'stable',
                                        ],
                                        'iaasType' => [
                                            'description' => 'iaas层类型',
                                            'type' => 'string',
                                            'example' => 'ASI',
                                        ],
                                        'gmtCreate' => [
                                            'description' => '创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1716215854101',
                                        ],
                                        'scalaVersion' => [
                                            'description' => 'scala版本',
                                            'type' => 'string',
                                            'example' => '2.12',
                                        ],
                                        'communityVersion' => [
                                            'description' => '社区spark版本号',
                                            'type' => 'string',
                                            'example' => 'Spark 3.3.1',
                                        ],
                                        'cpuArchitectures' => [
                                            'description' => 'cpu架构列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => 'cpu架构',
                                                'type' => 'string',
                                                'example' => 'x86',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'title' => '下一页TOKEN。',
                                'description' => '下一页TOKEN。',
                                'type' => 'string',
                                'example' => '1',
                            ],
                            'maxResults' => [
                                'title' => '一次获取的最大记录数。',
                                'description' => '一次获取的最大记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'totalCount' => [
                                'title' => '记录总数。',
                                'description' => '记录总数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"releaseVersions\\": [\\n    {\\n      \\"releaseVersion\\": \\"esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)\\",\\n      \\"state\\": \\"ONLINE\\",\\n      \\"type\\": \\"stable\\",\\n      \\"iaasType\\": \\"ASI\\",\\n      \\"gmtCreate\\": 1716215854101,\\n      \\"scalaVersion\\": \\"2.12\\",\\n      \\"communityVersion\\": \\"Spark 3.3.1\\",\\n      \\"cpuArchitectures\\": [\\n        \\"x86\\"\\n      ]\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"1\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
            'title' => '获取spark版本列表',
        ],
        'CancelJobRun' => [
            'summary' => '调用CancelJobRun终止正在运行的Spark任务。',
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
            ],
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '215798',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '工作空间id。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-d2d82aa09155****',
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '任务实例ID。',
                        'description' => '任务运行ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'jr-f09a8fda2396****',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'jobRunId' => [
                                'description' => '任务运行ID。',
                                'type' => 'string',
                                'example' => 'jr-f09a8fda2396****',
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRunId\\": \\"jr-f09a8fda2396****\\",\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '终止Spark任务',
        ],
        'ListJobRuns' => [
            'summary' => '调用ListJobRuns获取Spark任务列表。',
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '215800',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'nextToken',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '标记当前开始读取的位置。',
                        'description' => '标记当前开始读取的位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
                    ],
                ],
                [
                    'name' => 'maxResults',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '一次获取的最大记录数。',
                        'description' => '一次获取的最大记录数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '工作空间id。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-d2d82aa09155****',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '作业名称。',
                        'description' => '任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'emr-spark-demo-job',
                    ],
                ],
                [
                    'name' => 'creator',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '创建用户Uid。',
                        'description' => '创建用户UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '150978934701****',
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '作业id。',
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'j-xxx',
                    ],
                ],
                [
                    'name' => 'tags',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'title' => '标签。',
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签对象。',
                            'type' => 'object',
                            'properties' => [
                                'key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag_key',
                                ],
                                'value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'value',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'states',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'style' => 'json',
                    'schema' => [
                        'title' => '作业状态。',
                        'description' => '任务状态。',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务状态。取值范围：'."\n"
                                .'- Submitted：已提交。'."\n"
                                .'- Pending：待处理。'."\n"
                                .'- Running：运行中。'."\n"
                                .'- Success：成功。'."\n"
                                .'- Failed：失败。'."\n"
                                .'- Cancelling：取消中。'."\n"
                                .'- Cancelled：已取消。'."\n"
                                .'- CancelFailed：取消失败。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'Running',
                        ],
                        'required' => false,
                        'example' => '["Running","Submitted"]',
                    ],
                ],
                [
                    'name' => 'startTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '任务开始时间范围。',
                        'type' => 'object',
                        'properties' => [
                            'startTime' => [
                                'description' => '任务开始时间范围的起点。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1709740800000',
                            ],
                            'endTime' => [
                                'description' => '任务开始时间范围的终点。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1710432000000',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'endTime',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '任务结束时间范围。',
                        'type' => 'object',
                        'properties' => [
                            'startTime' => [
                                'description' => '任务结束时间范围的起点。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1709740800000',
                            ],
                            'endTime' => [
                                'description' => '任务结束时间范围的终点。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1710432000000',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'resourceQueueId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Spark任务运行的资源队列名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dev_queue',
                    ],
                ],
                [
                    'name' => 'jobRunDeploymentId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'jobRuns' => [
                                'description' => 'Spark任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Spark任务对象。',
                                    'type' => 'object',
                                    'properties' => [
                                        'workspaceId' => [
                                            'title' => '工作空间id。',
                                            'description' => '工作空间ID。',
                                            'type' => 'string',
                                            'example' => 'w-d2d82aa09155****',
                                        ],
                                        'jobRunId' => [
                                            'title' => '任务实例ID。',
                                            'description' => '任务ID。',
                                            'type' => 'string',
                                            'example' => 'jr-231231',
                                        ],
                                        'name' => [
                                            'title' => '作业实例名称。',
                                            'description' => '任务名称。',
                                            'type' => 'string',
                                            'example' => 'jobName',
                                        ],
                                        'state' => [
                                            'title' => '作业状态。',
                                            'description' => '任务状态。',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'stateChangeReason' => [
                                            'description' => '状态变化原因。',
                                            'type' => 'object',
                                            'properties' => [
                                                'code' => [
                                                    'description' => '错误码。',
                                                    'type' => 'string',
                                                    'example' => '0',
                                                ],
                                                'message' => [
                                                    'description' => '错误信息。',
                                                    'type' => 'string',
                                                    'example' => 'connection refused'."\n",
                                                ],
                                            ],
                                        ],
                                        'submitTime' => [
                                            'title' => '作业提交时间。',
                                            'description' => '任务提交时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1684119314000',
                                        ],
                                        'endTime' => [
                                            'title' => '作业结束时间。',
                                            'description' => '任务结束时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1684119314000',
                                        ],
                                        'codeType' => [
                                            'title' => '作业代码类型。',
                                            'description' => '任务代码类型。取值范围：'."\n"
                                                ."\n"
                                                .'SQL'."\n"
                                                ."\n"
                                                .'JAR'."\n"
                                                ."\n"
                                                .'PYTHON',
                                            'type' => 'string',
                                            'example' => 'SQL',
                                        ],
                                        'webUI' => [
                                            'title' => '作业web ui。',
                                            'description' => '作业Web UI。',
                                            'type' => 'string',
                                            'example' => 'http://spark-ui',
                                        ],
                                        'executionTimeoutSeconds' => [
                                            'title' => '运行超时时间。',
                                            'description' => '运行超时时间。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '3600',
                                        ],
                                        'creator' => [
                                            'title' => '创建用户Uid。',
                                            'description' => '创建用户UID。',
                                            'type' => 'string',
                                            'example' => '150978934701****',
                                        ],
                                        'tags' => [
                                            'title' => '标签。',
                                            'description' => '标签。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '任务标签.',
                                                '$ref' => '#/components/schemas/Tag',
                                            ],
                                        ],
                                        'log' => [
                                            'description' => '运行日志路径。',
                                            '$ref' => '#/components/schemas/RunLog',
                                        ],
                                        'releaseVersion' => [
                                            'description' => '运行任务的Spark引擎版本。',
                                            'type' => 'string',
                                            'example' => 'esr-native-3.4.0',
                                        ],
                                        'jobDriver' => [
                                            'description' => 'Spark Driver相关信息。',
                                            '$ref' => '#/components/schemas/JobDriver',
                                        ],
                                        'configurationOverrides' => [
                                            'description' => 'Spark高级配置。',
                                            'type' => 'object',
                                            'properties' => [
                                                'configurations' => [
                                                    'description' => 'Spark Conf列表。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => 'Spark Conf对象。',
                                                        '$ref' => '#/components/schemas/Configuration',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                            'nextToken' => [
                                'title' => '返回读取到的数据位置。',
                                'description' => '返回读取到的数据位置。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
                            ],
                            'maxResults' => [
                                'title' => '本次请求所返回的最大记录条数。',
                                'description' => '本次请求所返回的最大记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'totalCount' => [
                                'title' => '本次请求条件下的数据总量。',
                                'description' => '本次请求条件下的数据总量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRuns\\": [\\n    {\\n      \\"workspaceId\\": \\"w-d2d82aa09155****\\",\\n      \\"jobRunId\\": \\"jr-231231\\",\\n      \\"name\\": \\"jobName\\",\\n      \\"state\\": \\"Running\\",\\n      \\"stateChangeReason\\": {\\n        \\"code\\": \\"0\\",\\n        \\"message\\": \\"connection refused\\\\n\\"\\n      },\\n      \\"submitTime\\": 1684119314000,\\n      \\"endTime\\": 1684119314000,\\n      \\"codeType\\": \\"SQL\\",\\n      \\"webUI\\": \\"http://spark-ui\\",\\n      \\"executionTimeoutSeconds\\": 3600,\\n      \\"creator\\": \\"150978934701****\\",\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"workflowId\\",\\n          \\"value\\": \\"wf-123test\\"\\n        }\\n      ],\\n      \\"log\\": {\\n        \\"driverStdOut\\": \\"\\",\\n        \\"driverStdError\\": \\"\\",\\n        \\"driverSyslog\\": \\"\\",\\n        \\"driverStartup\\": \\"\\"\\n      },\\n      \\"releaseVersion\\": \\"esr-native-3.4.0\\",\\n      \\"jobDriver\\": {\\n        \\"sparkSubmit\\": {\\n          \\"entryPoint\\": \\"\\",\\n          \\"entryPointArguments\\": [\\n            \\"\\"\\n          ],\\n          \\"sparkSubmitParameters\\": \\"\\"\\n        }\\n      },\\n      \\"configurationOverrides\\": {\\n        \\"configurations\\": [\\n          {\\n            \\"configFileName\\": \\"\\",\\n            \\"configItemKey\\": \\"\\",\\n            \\"configItemValue\\": \\"\\"\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C89568980\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
            'title' => '获取Spark任务列表',
        ],
        'GetJobRun' => [
            'summary' => '调用GetJobRun获取任务详情。',
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
                'abilityTreeCode' => '215794',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '工作空间id。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-d2d82aa09155****',
                    ],
                ],
                [
                    'name' => 'jobRunId',
                    'in' => 'path',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '任务实例ID。',
                        'description' => '任务运行ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'jr-93d98d2f7061****',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'jobRun' => [
                                'description' => '任务详情。',
                                'type' => 'object',
                                'properties' => [
                                    'workspaceId' => [
                                        'title' => '工作空间id。',
                                        'description' => '工作空间ID。',
                                        'type' => 'string',
                                        'example' => 'w-d2d82aa09155****',
                                    ],
                                    'jobRunId' => [
                                        'title' => '任务实例ID。',
                                        'description' => '任务运行ID。',
                                        'type' => 'string',
                                        'example' => 'jr-93d98d2f7061****',
                                    ],
                                    'name' => [
                                        'title' => '作业实例名称。',
                                        'description' => '任务名称。',
                                        'type' => 'string',
                                        'example' => 'jobName',
                                    ],
                                    'state' => [
                                        'title' => '作业状态。',
                                        'description' => '任务状态。',
                                        'type' => 'string',
                                        'example' => 'Running',
                                    ],
                                    'stateChangeReason' => [
                                        'description' => '状态变化原因。',
                                        'type' => 'object',
                                        'properties' => [
                                            'code' => [
                                                'description' => '错误码。',
                                                'type' => 'string',
                                                'example' => 'ERR-100000',
                                            ],
                                            'message' => [
                                                'description' => '错误信息。',
                                                'type' => 'string',
                                                'example' => 'connection refused',
                                            ],
                                        ],
                                    ],
                                    'submitTime' => [
                                        'title' => '作业提交时间。',
                                        'description' => '任务提交时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1684119314000',
                                    ],
                                    'endTime' => [
                                        'title' => '作业结束时间。',
                                        'description' => '任务结束时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1684122914000',
                                    ],
                                    'codeType' => [
                                        'title' => '作业代码类型。',
                                        'description' => '任务代码类型。可能值：'."\n"
                                            ."\n"
                                            .'- SQL'."\n"
                                            ."\n"
                                            .'- JAR'."\n"
                                            ."\n"
                                            .'- PYTHON',
                                        'type' => 'string',
                                        'example' => 'SQL',
                                    ],
                                    'webUI' => [
                                        'title' => '作业web ui。',
                                        'description' => '作业Web UI。',
                                        'type' => 'string',
                                        'example' => 'http://spark-ui',
                                    ],
                                    'executionTimeoutSeconds' => [
                                        'title' => '运行超时时间。',
                                        'description' => '运行超时时间。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3600',
                                    ],
                                    'resourceOwnerId' => [
                                        'title' => '创建用户Uid。',
                                        'description' => '创建用户UID。',
                                        'type' => 'string',
                                        'example' => '150978934701****',
                                    ],
                                    'tags' => [
                                        'title' => '标签。',
                                        'description' => '标签列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签。',
                                            '$ref' => '#/components/schemas/Tag',
                                        ],
                                    ],
                                    'log' => [
                                        'description' => '运行日志路径。',
                                        '$ref' => '#/components/schemas/RunLog',
                                    ],
                                    'releaseVersion' => [
                                        'description' => '运行任务的Spark引擎版本。',
                                        'type' => 'string',
                                        'example' => 'esr-3.3.1',
                                    ],
                                    'resourceQueueId' => [
                                        'description' => '运行任务的队列名称。',
                                        'type' => 'string',
                                        'example' => 'root_queue',
                                    ],
                                    'jobDriver' => [
                                        'description' => 'Spark Driver相关信息。',
                                        '$ref' => '#/components/schemas/JobDriver',
                                    ],
                                    'configurationOverrides' => [
                                        'description' => 'Spark任务配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'configurations' => [
                                                'description' => '配置列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '配置信息。',
                                                    '$ref' => '#/components/schemas/Configuration',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRun\\": {\\n    \\"workspaceId\\": \\"w-d2d82aa09155****\\",\\n    \\"jobRunId\\": \\"jr-93d98d2f7061****\\",\\n    \\"name\\": \\"jobName\\",\\n    \\"state\\": \\"Running\\",\\n    \\"stateChangeReason\\": {\\n      \\"code\\": \\"ERR-100000\\",\\n      \\"message\\": \\"connection refused\\"\\n    },\\n    \\"submitTime\\": 1684119314000,\\n    \\"endTime\\": 1684122914000,\\n    \\"codeType\\": \\"SQL\\",\\n    \\"webUI\\": \\"http://spark-ui\\",\\n    \\"executionTimeoutSeconds\\": 3600,\\n    \\"resourceOwnerId\\": \\"150978934701****\\",\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"workflowId\\",\\n        \\"value\\": \\"wf-123test\\"\\n      }\\n    ],\\n    \\"log\\": {\\n      \\"driverStdOut\\": \\"\\",\\n      \\"driverStdError\\": \\"\\",\\n      \\"driverSyslog\\": \\"\\",\\n      \\"driverStartup\\": \\"\\"\\n    },\\n    \\"releaseVersion\\": \\"esr-3.3.1\\",\\n    \\"resourceQueueId\\": \\"root_queue\\",\\n    \\"jobDriver\\": {\\n      \\"sparkSubmit\\": {\\n        \\"entryPoint\\": \\"\\",\\n        \\"entryPointArguments\\": [\\n          \\"\\"\\n        ],\\n        \\"sparkSubmitParameters\\": \\"\\"\\n      }\\n    },\\n    \\"configurationOverrides\\": {\\n      \\"configurations\\": [\\n        {\\n          \\"configFileName\\": \\"\\",\\n          \\"configItemKey\\": \\"\\",\\n          \\"configItemValue\\": \\"\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '获取Spark任务详情',
        ],
        'StartJobRun' => [
            'summary' => '调用StartJobRun启动Spark任务。',
            'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '215792',
                'abilityTreeNodes' => [
                    'FEATUREemapreduceTW58EL',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'Spark任务请求体。',
                        'type' => 'object',
                        'properties' => [
                            'releaseVersion' => [
                                'description' => 'Spark引擎版本号。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'esr-3.3.1',
                            ],
                            'jobId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'jr-12345',
                            ],
                            'name' => [
                                'description' => '任务名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'spark_job_name',
                            ],
                            'resourceQueueId' => [
                                'description' => 'Spark任务运行的资源队列。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'dev_queue',
                            ],
                            'codeType' => [
                                'description' => '任务类型。取值范围：'."\n"
                                    ."\n"
                                    .'- SQL'."\n"
                                    ."\n"
                                    .'- JAR'."\n"
                                    ."\n"
                                    .'- PYTHON',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'SQL',
                            ],
                            'executionTimeoutSeconds' => [
                                'description' => '任务超时时间。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                            'configurationOverrides' => [
                                'description' => 'Spark高级配置。',
                                'type' => 'object',
                                'properties' => [
                                    'configurations' => [
                                        'description' => 'Spark Conf列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'Spark Conf对象。',
                                            'type' => 'object',
                                            'properties' => [
                                                'configFileName' => [
                                                    'description' => 'Spark Conf所属配置文件。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'spark-default.conf',
                                                ],
                                                'configItemKey' => [
                                                    'description' => 'Spark Conf键。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'spark.app.name',
                                                ],
                                                'configItemValue' => [
                                                    'description' => 'Spark Conf值。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'test_app',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => false,
                            ],
                            'tags' => [
                                'description' => '任务标签列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '标签对象。',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/Tag',
                                ],
                                'required' => false,
                            ],
                            'clientToken' => [
                                'description' => '幂等校验TOKEN。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '8e6aae2810c8f67229ca70bb31cd****',
                            ],
                            'jobDriver' => [
                                'description' => 'Spark Driver相关信息。',
                                'required' => false,
                                '$ref' => '#/components/schemas/JobDriver',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'workspaceId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'w-d2d82aa09155****',
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
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
                            'jobRunId' => [
                                'description' => '任务运行ID。',
                                'type' => 'string',
                                'example' => 'jr-f09a8fda2396****',
                            ],
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRunId\\": \\"jr-f09a8fda2396****\\",\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '启动Spark任务',
        ],
        'GrantRoleToUsers' => [
            'summary' => '调用GrantRoleToUsers为用户授予指定角色权限。',
            'path' => '/api/v1/auth/roles/grant',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '193394',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce8QU4HW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'roleArn' => [
                                'description' => '角色Arn。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'acs:emr::w-975bcfda9625****:role/Owner',
                            ],
                            'userArns' => [
                                'type' => 'array',
                                'items' => [
                                    'description' => '用户Arn。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'acs:emr::w-975bcfda96258dd7:member/20468369839086****',
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '请求返回体。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '赋予用户角色',
        ],
        'AddMembers' => [
            'summary' => '调用AddMembers将RAM用户或RAM角色添加到工作空间作为新成员。',
            'path' => '/api/v1/auth/members',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'systemTags' => [
                'abilityTreeCode' => '193369',
                'abilityTreeNodes' => [
                    'FEATUREemapreduce8QU4HW',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'workspaceId' => [
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'w-975bcfda9625****',
                            ],
                            'memberArns' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'Ram User示例值：acs:ram::113545727984****:user/20468369839086****'."\n"
                                        ."\n"
                                        .'Ram Role示例值：acs:ram::113545727984****:role/aliyunemrsparkjobrundefaultrole',
                                ],
                                'required' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'regionId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '区域ID。',
                        'description' => '区域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-hangzhou',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '请求返回体。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
            'title' => '添加成员',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'emr-serverless-spark.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'emr-serverless-spark.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'emr-serverless-spark.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'emr-serverless-spark.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'emr-serverless-spark.cn-shenzhen.aliyuncs.com',
        ],
    ],
];
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'ververica',
        'version' => '2022-07-18',
    ],
    'directories' => [
        [
            'id' => 175173,
            'title' => '变量',
            'type' => 'directory',
            'children' => [
                'ListVariables',
                'DeleteVariable',
                'CreateVariable',
            ],
        ],
        [
            'id' => 175177,
            'title' => '快照',
            'type' => 'directory',
            'children' => [
                'GetSavepoint',
                'DeleteSavepoint',
                'CreateSavepoint',
                'ListSavepoints',
            ],
        ],
        [
            'id' => 175182,
            'title' => '作业实例',
            'type' => 'directory',
            'children' => [
                'StopJob',
                'StartJobWithParams',
                'StartJob',
                'GetJob',
                'DeleteJob',
                'ListJobs',
            ],
        ],
        [
            'id' => 175188,
            'title' => '作业部署目标',
            'type' => 'directory',
            'children' => [
                'ListDeploymentTargets',
            ],
        ],
        [
            'id' => 175190,
            'title' => '已部署作业',
            'type' => 'directory',
            'children' => [
                'UpdateDeployment',
                'DeleteDeployment',
                'ListDeployments',
                'GetDeployment',
                'CreateDeployment',
            ],
        ],
        [
            'id' => 187374,
            'title' => '成员管理',
            'type' => 'directory',
            'children' => [
                'CreateMember',
                'DeleteMember',
                'GetMember',
                'ListMembers',
                'UpdateMember',
            ],
        ],
        [
            'id' => 193273,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'ValidateSqlStatement',
                'GenerateResourcePlanWithFlinkConfAsync',
                'GetGenerateResourcePlanResult',
                'FlinkApiProxy',
                'ListEngineVersionMetadata',
                'GetLatestJobStartLog',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'Artifact' => [
                'title' => '作业内容模版',
                'description' => 'Artifact承载了用户启动一个已部署作业所必需的用户侧信息，没有Artifact信息已部署作业无法创建。对于SQL作业是SQL文本以及依赖的udf/connector等，对于JAR作业是使用到的全部的JAR包和依赖文件，对于Python作业是要使用到的py文件以及zip包。',
                'type' => 'object',
                'properties' => [
                    'sqlArtifact' => [
                        'title' => 'SQL作业',
                        'description' => 'SQL作业必填信息。',
                        '$ref' => '#/components/schemas/SqlArtifact',
                    ],
                    'jarArtifact' => [
                        'title' => 'Jar作业',
                        'description' => 'JAR作业必填信息。',
                        '$ref' => '#/components/schemas/JarArtifact',
                    ],
                    'pythonArtifact' => [
                        'title' => 'Python作业',
                        'description' => 'Python作业必填信息。',
                        '$ref' => '#/components/schemas/PythonArtifact',
                    ],
                    'kind' => [
                        'title' => '生效作业类型',
                        'description' => '生效作业类型，必填，创建后无法修改。'."\n"
                            .'- SQLSCRIPT：SQL作业。'."\n"
                            .'- JAR：JAR作业。'."\n"
                            .'- PYTHON：Python作业。',
                        'type' => 'string',
                        'example' => 'SQLSCRIPT',
                        'enum' => [
                            'SQLSCRIPT',
                            'JAR',
                            'PYTHON',
                        ],
                    ],
                ],
            ],
            'AsyncResourcePlanOperationResult' => [
                'title' => '细粒度资源异步操作结果',
                'description' => '本数据结构代表专家模式的资源配置计划。',
                'type' => 'object',
                'properties' => [
                    'ticketStatus' => [
                        'title' => '执行状态',
                        'description' => '异步工单状态。'."\n"
                            .'- EXECUTING：执行中。'."\n"
                            .'- FINISHED：执行完成。'."\n"
                            .'- FAILED：执行失败。',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'EXECUTING' => 'EXECUTING',
                            'FAILED' => 'FAILED',
                            'FINISHED' => 'FINISHED',
                        ],
                        'example' => 'FINISHED',
                        'enum' => [
                            'INIT',
                            'EXECUTING',
                            'FINISHED',
                            'FAILED',
                        ],
                    ],
                    'plan' => [
                        'title' => '细粒度资源值',
                        'description' => '专家模式的资源配置计划，ticketStatus状态为FINISHED时返回。',
                        'type' => 'string',
                        'example' => '{\\"ssgProfiles\\":[{\\"name\\":\\"default\\",\\"cpu\\":1.13,\\"heap\\":\\"1 gb\\",\\"offHeap\\":\\"32 mb\\",\\"managed\\":{},\\"extended\\":{}}],\\"nodes\\":[{\\"id\\":1,\\"type\\":\\"StreamExecTableSourceScan\\",\\"desc\\":\\"Source: datagen_source[78]\\",\\"profile\\":{\\"group\\":\\"default\\",\\"parallelism\\":1,\\"maxParallelism\\":32768,\\"minParallelism\\":1}},{\\"id\\":2,\\"type\\":\\"StreamExecSink\\",\\"desc\\":\\"Sink: blackhole_sink[79]\\",\\"profile\\":{\\"group\\":\\"default\\",\\"parallelism\\":1,\\"maxParallelism\\":32768,\\"minParallelism\\":1}}],\\"edges\\":[{\\"source\\":1,\\"target\\":2,\\"mode\\":\\"PIPELINED\\",\\"strategy\\":\\"FORWARD\\"}],\\"vertices\\":{\\"717c7b8afebbfb7137f6f0f99beb2a94\\":[1,2]}}',
                    ],
                    'message' => [
                        'title' => '错误信息',
                        'description' => '工单信息，ticketStatus为FAILED或EXECUTING状态时返回。',
                        'type' => 'string',
                        'example' => '"create resource plan failed"',
                    ],
                ],
            ],
            'BasicResourceSetting' => [
                'title' => '作业通用资源设置',
                'description' => '本数据结构表示用户使用的社区版本常用的基础模式资源配置，有别于商业版本提供的专家模式资源配置。',
                'type' => 'object',
                'properties' => [
                    'parallelism' => [
                        'title' => '并发度',
                        'description' => '并发度。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4',
                    ],
                    'jobmanagerResourceSettingSpec' => [
                        'title' => 'JobManager资源设置',
                        'description' => 'JobManager资源设置。',
                        '$ref' => '#/components/schemas/BasicResourceSettingSpec',
                    ],
                    'taskmanagerResourceSettingSpec' => [
                        'title' => 'TaskManager资源设置',
                        'description' => 'TaskManager资源设置。',
                        '$ref' => '#/components/schemas/BasicResourceSettingSpec',
                    ],
                ],
            ],
            'BasicResourceSettingSpec' => [
                'title' => '作业基础源',
                'description' => '本数据结构表示对作业使用CPU和内存资源的包装，依据本数据结构可以生成对JM/TM资源的粗粒度的描述。',
                'type' => 'object',
                'properties' => [
                    'cpu' => [
                        'title' => 'CPU',
                        'description' => 'CPU核数。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '2.0',
                    ],
                    'memory' => [
                        'title' => '内存',
                        'description' => '内存，单位GiB。',
                        'type' => 'string',
                        'example' => '4 GiB',
                    ],
                ],
            ],
            'BatchResourceSetting' => [
                'title' => '批作业资源设置',
                'description' => '本数据结构代表批模式资源设置信息。',
                'type' => 'object',
                'properties' => [
                    'maxSlot' => [
                        'title' => '最大slot数',
                        'description' => '最大slot数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                    'basicResourceSetting' => [
                        'title' => '基础资源设置',
                        'description' => '基础模式资源设置。',
                        '$ref' => '#/components/schemas/BasicResourceSetting',
                    ],
                ],
            ],
            'BriefDeploymentTarget' => [
                'title' => 'A short description of struct',
                'description' => '本数据结构用在Deployment数据结构中，用来描述perjob类型的部署目标。',
                'type' => 'object',
                'properties' => [
                    'mode' => [
                        'title' => 'mode',
                        'description' => '部署模式。',
                        'type' => 'string',
                        'example' => 'PER_JOB',
                        'enum' => [
                            'PER_JOB',
                        ],
                    ],
                    'name' => [
                        'title' => 'name',
                        'description' => '部署队列名称。',
                        'type' => 'string',
                        'example' => 'vvp-workload',
                    ],
                ],
            ],
            'BriefResourceSetting' => [
                'title' => '作业资源设置',
                'description' => '本数据结构用来描述作业在流/批两种模式下能使用的资源情况。',
                'type' => 'object',
                'properties' => [
                    'flinkConf' => [
                        'title' => 'flink配置设置',
                        'description' => 'Flink配置。',
                        'type' => 'object',
                        'example' => '“execution.checkpointing.interval: 180s”',
                    ],
                    'batchResourceSetting' => [
                        'title' => '批作业资源设置',
                        'description' => '运行批模式的资源设置，选择批模式时必填。',
                        '$ref' => '#/components/schemas/BatchResourceSetting',
                    ],
                    'streamingResourceSetting' => [
                        'title' => '流作业资源设置',
                        'description' => '运行流模式的资源设置，选择流模式时必填。',
                        '$ref' => '#/components/schemas/StreamingResourceSetting',
                    ],
                ],
            ],
            'Deployment' => [
                'title' => '作业信息',
                'description' => '本数据结构用来描述一个完整的已部署作业的数据结构。',
                'type' => 'object',
                'properties' => [
                    'deploymentId' => [
                        'title' => '作业ID',
                        'description' => '已部署作业ID。',
                        'type' => 'string',
                        'example' => '00000000-0000-0000-0000-0000012312****',
                    ],
                    'namespace' => [
                        'title' => '项目空间',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'example' => 'default-namespace',
                    ],
                    'name' => [
                        'title' => '作业名称',
                        'description' => '已部署作业名称。',
                        'type' => 'string',
                        'example' => 'deploymentName',
                    ],
                    'engineVersion' => [
                        'title' => '引擎版本',
                        'description' => '引擎版本。',
                        'type' => 'string',
                        'example' => 'vvr-6.0.0-flink-1.15',
                    ],
                    'description' => [
                        'title' => '描述信息',
                        'description' => '描述信息。',
                        'type' => 'string',
                        'example' => 'this is a deployment description',
                    ],
                    'creator' => [
                        'title' => '创建者',
                        'description' => '创建者。',
                        'type' => 'string',
                        'example' => '27846363877456****',
                    ],
                    'creatorName' => [
                        'title' => '创建者名称',
                        'description' => '创建者名称。',
                        'type' => 'string',
                        'example' => '****@streamcompute.onaliyun.com',
                    ],
                    'modifier' => [
                        'title' => '修改者',
                        'description' => '修改者。',
                        'type' => 'string',
                        'example' => '27846363877456****',
                    ],
                    'modifierName' => [
                        'title' => '修改者名称',
                        'description' => '修改者名称。',
                        'type' => 'string',
                        'example' => '****@streamcompute.onaliyun.com',
                    ],
                    'deploymentHasChanged' => [
                        'title' => '作业启动后是否被修改',
                        'description' => '已部署作业启动后是否被修改。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'artifact' => [
                        'title' => 'artifact',
                        'description' => '用户启动已部署作业必填的数据结构。',
                        '$ref' => '#/components/schemas/Artifact',
                    ],
                    'flinkConf' => [
                        'title' => 'Flink配置',
                        'description' => 'Flink配置。',
                        'type' => 'object',
                        'example' => '{"taskmanager.numberOfTaskSlots":"1"}',
                    ],
                    'logging' => [
                        'title' => '日志配置',
                        'description' => '日志配置。',
                        '$ref' => '#/components/schemas/Logging',
                    ],
                    'jobSummary' => [
                        'title' => '实例信息汇总',
                        'description' => '已部署作业下的作业实例信息汇总。',
                        '$ref' => '#/components/schemas/JobSummary',
                    ],
                    'deploymentTarget' => [
                        'title' => '部署目标',
                        'description' => '部署目标。',
                        '$ref' => '#/components/schemas/BriefDeploymentTarget',
                    ],
                    'executionMode' => [
                        'title' => '执行模式，支持STREAMING或者BATCH',
                        'description' => '执行模式。'."\n"
                            .'- STREAMING：流模式。'."\n"
                            .'- BATCH：批模式。',
                        'type' => 'string',
                        'example' => 'STREAMING',
                        'enum' => [
                            'STREAMING',
                            'BATCH',
                        ],
                    ],
                    'streamingResourceSetting' => [
                        'title' => '流作业资源设置',
                        'description' => '流作业资源设置。',
                        '$ref' => '#/components/schemas/StreamingResourceSetting',
                    ],
                    'batchResourceSetting' => [
                        'title' => '批作业资源设置',
                        'description' => '批作业资源设置。',
                        '$ref' => '#/components/schemas/BatchResourceSetting',
                    ],
                    'localVariables' => [
                        'title' => '作业变量',
                        'description' => '作业变量',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                    'workspace' => [
                        'title' => '工作空间',
                        'description' => '工作空间',
                        'type' => 'string',
                        'example' => 'edcef******b4f',
                    ],
                    'createdAt' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'string',
                        'example' => '1714058507'."\n",
                    ],
                    'modifiedAt' => [
                        'title' => '修改时间',
                        'description' => '修改时间',
                        'type' => 'string',
                        'example' => '1714058843',
                    ],
                ],
            ],
            'DeploymentRestoreStrategy' => [
                'title' => '作业启动位点',
                'description' => '本数据结构代表已部署作业的启动策略。',
                'type' => 'object',
                'properties' => [
                    'kind' => [
                        'title' => '启动位点类型',
                        'description' => '启动位点类型。'."\n"
                            .'- NONE：无状态启动。'."\n"
                            .'- LATEST_SAVEPOINT：最新的作业快照启动。'."\n"
                            .'- FROM_SAVEPOINT：从指定快照启动。'."\n"
                            .'- LATEST_STATE：最新状态启动'."\n"
                            ."\n\n",
                        'type' => 'string',
                        'example' => 'LATEST_STATE',
                        'enum' => [
                            'NONE',
                            'LATEST_SAVEPOINT',
                            'FROM_SAVEPOINT',
                            'LATEST_STATE',
                        ],
                    ],
                    'allowNonRestoredState' => [
                        'title' => '是否无状态启动',
                        'description' => '允许忽略部分算子状态。仅当Python类型或者Jar类型作业选择有状态恢复时需要设置。',
                        'type' => 'boolean',
                        'example' => 'TRUE',
                    ],
                    'jobStartTimeInMs' => [
                        'title' => '无状态启动时间，当选择无状态启动时，可以设置本参数让所有支持startTime 的源表均从该时刻开始读取数据',
                        'description' => '无状态启动时间，需输入13位时间戳。当选择无状态启动时，可以设置本参数让所有支持startTime的源表均从该时刻开始读取数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1660293803155',
                    ],
                    'savepointId' => [
                        'title' => '启动作业快照ID',
                        'description' => '启动作业快照ID，启动策略为FROM_SAVEPOINT时必填。',
                        'type' => 'string',
                        'example' => '354dde66-a3ae-463e-967a-0b4107fd****',
                    ],
                ],
            ],
            'DeploymentTarget' => [
                'title' => '作业部署目标详情',
                'description' => '本数据结构用来描述集群中设置的perjob类型的部署目标相关信息。',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '部署目标名称',
                        'description' => 'perjob类型部署目标名称。',
                        'type' => 'string',
                        'example' => 'deployment target',
                    ],
                    'namespace' => [
                        'title' => '项目空间名称',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'example' => 'namespace',
                    ],
                ],
            ],
            'EditableNamespace' => [
                'title' => '有编辑权限的项目空间对象',
                'type' => 'object',
                'properties' => [
                    'Role' => [
                        'title' => '用户角色',
                        'type' => 'string',
                    ],
                    'WorkspaceId' => [
                        'title' => '工作空间ID',
                        'type' => 'string',
                    ],
                    'Namespace' => [
                        'title' => '项目空间名字',
                        'type' => 'string',
                    ],
                ],
            ],
            'EngineVersionMetadata' => [
                'title' => '引擎版本基础信息。',
                'description' => '本数据结构代表作业引擎版本的基础信息。',
                'type' => 'object',
                'properties' => [
                    'engineVersion' => [
                        'title' => '引擎版本名称。',
                        'description' => '引擎版本名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vvr-6.0.0-flink-1.15',
                    ],
                    'status' => [
                        'title' => '该引擎版本状态。',
                        'description' => '该引擎版本状态。'."\n"
                            ."\n"
                            .'- STABLE：稳定版本。'."\n"
                            .'- BETA：测试版本。'."\n"
                            .'- DEPRECATED：废弃版本。'."\n"
                            .'- EXPIRED：过期版本。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'STABLE',
                        'enum' => [
                            'STABLE',
                            'BETA',
                            'DEPRECATED',
                            'EXPIRED',
                        ],
                    ],
                    'features' => [
                        'title' => '该引擎版本所支持的特性。',
                        'description' => '该引擎版本所支持的特性。',
                        '$ref' => '#/components/schemas/EngineVersionSupportedFeatures',
                    ],
                ],
            ],
            'EngineVersionMetadataIndex' => [
                'title' => '引擎版本的总体信息。',
                'description' => '本数据结构代表作业引擎版本的汇总信息。',
                'type' => 'object',
                'properties' => [
                    'defaultEngineVersion' => [
                        'title' => '默认使用的引擎版本。',
                        'description' => '默认使用的引擎版本。',
                        'type' => 'string',
                        'example' => 'vvr-6.0.1-flink-1.15',
                    ],
                    'engineVersionMetadata' => [
                        'title' => '所有支持的引擎版本信息。',
                        'description' => '所有支持的引擎版本信息。',
                        'type' => 'array',
                        'items' => [
                            'description' => '引擎版本基础信息。',
                            '$ref' => '#/components/schemas/EngineVersionMetadata',
                        ],
                    ],
                ],
            ],
            'EngineVersionSupportedFeatures' => [
                'title' => '引擎版本所支持的特性。',
                'description' => '本数据结构代表该引擎版本支持的特性描述。',
                'type' => 'object',
                'properties' => [
                    'useForSqlDeployments' => [
                        'title' => '该引擎版本是否具备提交Sql作业能力。',
                        'description' => '该引擎版本是否具备提交SQL作业能力。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'supportNativeSavepoint' => [
                        'title' => '该引擎版本是否具备支持native savepoint的能力。',
                        'description' => '该引擎版本是否具备支持原生快照的能力。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                ],
            ],
            'ErrorDetails' => [
                'title' => 'Sql作业代码校验错误细节',
                'description' => 'Sql作业代码校验错误细节',
                'type' => 'object',
                'properties' => [
                    'lineNumber' => [
                        'title' => '错误开始行数',
                        'type' => 'string',
                    ],
                    'columnNumber' => [
                        'title' => '错误开始列数',
                        'type' => 'string',
                    ],
                    'endLineNumber' => [
                        'title' => '错误结束行数',
                        'type' => 'string',
                    ],
                    'endColumnNumber' => [
                        'title' => '错误结束列数',
                        'type' => 'string',
                    ],
                    'message' => [
                        'title' => '错误信息',
                        'type' => 'string',
                    ],
                    'invalidflinkConf' => [
                        'title' => '无效flink conf',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                        ],
                    ],
                ],
            ],
            'ExpertResourceSetting' => [
                'title' => '细粒度资源设置',
                'description' => '本数据结构代表作业专家模式资源配置的信息。',
                'type' => 'object',
                'properties' => [
                    'jobmanagerResourceSettingSpec' => [
                        'title' => 'JobManager基础资源设置',
                        'description' => 'JobManager基础资源设置。',
                        '$ref' => '#/components/schemas/BasicResourceSettingSpec',
                    ],
                    'resourcePlan' => [
                        'title' => '细粒度资源计划',
                        'description' => '专家模式资源配置计划。',
                        'type' => 'string',
                        'example' => '{\\"ssgProfiles\\":[{\\"name\\":\\"default\\",\\"cpu\\":1.13,\\"heap\\":\\"1 gb\\",\\"offHeap\\":\\"32 mb\\",\\"managed\\":{},\\"extended\\":{}}],\\"nodes\\":[{\\"id\\":1,\\"type\\":\\"StreamExecTableSourceScan\\",\\"desc\\":\\"Source: datagen_source[78]\\",\\"profile\\":{\\"group\\":\\"default\\",\\"parallelism\\":1,\\"maxParallelism\\":32768,\\"minParallelism\\":1}},{\\"id\\":2,\\"type\\":\\"StreamExecSink\\",\\"desc\\":\\"Sink: blackhole_sink[79]\\",\\"profile\\":{\\"group\\":\\"default\\",\\"parallelism\\":1,\\"maxParallelism\\":32768,\\"minParallelism\\":1}}],\\"edges\\":[{\\"source\\":1,\\"target\\":2,\\"mode\\":\\"PIPELINED\\",\\"strategy\\":\\"FORWARD\\"}],\\"vertices\\":{\\"717c7b8afebbfb7137f6f0f99beb2a94\\":[1,2]}}',
                    ],
                ],
            ],
            'FlinkConf' => [
                'title' => 'Flink conf',
                'description' => 'flink配置参数',
                'type' => 'object',
                'example' => '{"taskmanager.numberOfTaskSlots":"1","table.exec.state.ttl":"128000s"}'."\n",
            ],
            'JarArtifact' => [
                'title' => 'Jar作业结构',
                'description' => '本数据结构代表JAR类型作业必填的信息。',
                'type' => 'object',
                'properties' => [
                    'jarUri' => [
                        'title' => 'Jar作业URL全路径',
                        'description' => 'JAR作业URL全路径。',
                        'type' => 'string',
                        'example' => 'https://oss/bucket/test.jar',
                    ],
                    'entryClass' => [
                        'title' => '启动类，需要填写类的全称',
                        'description' => '启动类，需要填写类的全称。',
                        'type' => 'string',
                        'example' => 'org.apapche.flink.test',
                    ],
                    'mainArgs' => [
                        'title' => '启动类所需参数',
                        'description' => '启动类所需参数。',
                        'type' => 'string',
                        'example' => 'start from main',
                    ],
                    'additionalDependencies' => [
                        'title' => '附加依赖URL全路径，可以将Jar需要使用的其他依赖在这里填写',
                        'description' => '附加依赖的URL全路径，可以将JAR需要使用的其他依赖在这里填写。',
                        'type' => 'array',
                        'items' => [
                            'description' => '附加依赖文件的URL全路径。',
                            'type' => 'string',
                            'example' => 'https://oss/bucket/addition.jar',
                        ],
                    ],
                ],
            ],
            'Job' => [
                'title' => '作业运行实例',
                'description' => '本数据结构代表已部署作业生成的实例详情。',
                'type' => 'object',
                'properties' => [
                    'jobId' => [
                        'title' => '实例ID',
                        'description' => '作业实例ID。',
                        'type' => 'string',
                        'example' => '354dde66-a3ae-463e-967a-0b4107fd****',
                    ],
                    'deploymentId' => [
                        'title' => '作业ID',
                        'description' => '已部署作业ID。',
                        'type' => 'string',
                        'example' => '354dde66-a3ae-463e-967a-0b4107fd****',
                    ],
                    'deploymentName' => [
                        'title' => '作业名称',
                        'description' => '已部署作业名称。',
                        'type' => 'string',
                        'example' => 'flinktest',
                    ],
                    'namespace' => [
                        'title' => '项目空间名称',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'example' => 'namespacetest',
                    ],
                    'executionMode' => [
                        'title' => '实例运行模式',
                        'description' => '作业实例运行模式。'."\n"
                            .'- STREAM：流模式。'."\n"
                            .'- BATCH：批模式。',
                        'type' => 'string',
                        'example' => 'BATCH',
                        'enum' => [
                            'STREAMING',
                            'BATCH',
                        ],
                    ],
                    'creator' => [
                        'title' => '创建者',
                        'description' => '创建者。',
                        'type' => 'string',
                        'example' => '27846363877456****',
                    ],
                    'creatorName' => [
                        'title' => '创建者名称',
                        'description' => '创建者名称。',
                        'type' => 'string',
                        'example' => '****@streamcompute.onaliyun.com',
                    ],
                    'modifier' => [
                        'title' => '修改者',
                        'description' => '修改者。',
                        'type' => 'string',
                        'example' => '27846363877456****',
                    ],
                    'modifierName' => [
                        'title' => '修改者名称',
                        'description' => '修改者名称。',
                        'type' => 'string',
                        'example' => '****@streamcompute.onaliyun.com',
                    ],
                    'startTime' => [
                        'title' => '实例启动时间',
                        'description' => '作业实例启动时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1660190835',
                    ],
                    'endTime' => [
                        'title' => '实例结束时间',
                        'description' => '作业实例结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1660277235',
                    ],
                    'engineVersion' => [
                        'title' => '作业引擎版本',
                        'description' => '作业引擎版本。',
                        'type' => 'string',
                        'example' => 'vvr-4.0.14-flink-1.13',
                    ],
                    'flinkConf' => [
                        'title' => '作业配置',
                        'description' => '作业实例全量参数配置。',
                        'type' => 'object',
                        'example' => '{execution.checkpointing.unaligned: false}',
                    ],
                    'status' => [
                        'title' => '实例状态',
                        'description' => '作业实例状态。',
                        '$ref' => '#/components/schemas/JobStatus',
                    ],
                    'metric' => [
                        'title' => '实例资源信息',
                        'description' => '作业实例资源信息。',
                        '$ref' => '#/components/schemas/JobMetric',
                    ],
                    'sessionClusterName' => [
                        'title' => 'session集群名称',
                        'description' => '如果作业实例运行在Session集群，展示该Session集群名称，否则为null。',
                        'type' => 'string',
                        'example' => 'null',
                    ],
                    'artifact' => [
                        'title' => '作业内容模版',
                        'description' => '作业实例内容模版。',
                        '$ref' => '#/components/schemas/Artifact',
                    ],
                    'logging' => [
                        'title' => '作业日志配置',
                        'description' => '作业实例日志配置。',
                        '$ref' => '#/components/schemas/Logging',
                    ],
                    'batchResourceSetting' => [
                        'title' => 'batchResourceSetting',
                        'description' => '批模式资源设置。',
                        '$ref' => '#/components/schemas/BatchResourceSetting',
                    ],
                    'streamingResourceSetting' => [
                        'title' => '批作业资源设置',
                        'description' => '流模式资源设置。',
                        '$ref' => '#/components/schemas/StreamingResourceSetting',
                    ],
                    'restoreStrategy' => [
                        'title' => '流作业资源设置',
                        'description' => '作业实例启动策略。',
                        '$ref' => '#/components/schemas/DeploymentRestoreStrategy',
                    ],
                    'userFlinkConf' => [
                        'title' => '用户作业配置',
                        'description' => '用户作业参数配置。',
                        '$ref' => '#/components/schemas/FlinkConf',
                    ],
                    'localVariables' => [
                        'title' => '作业变量',
                        'description' => '作业变量。',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                    'workspace' => [
                        'title' => '工作空间',
                        'description' => '工作空间。',
                        'type' => 'string',
                        'example' => 'edcef******b4f',
                    ],
                    'createdAt' => [
                        'title' => '创建时间',
                        'description' => '创建时间。',
                        'type' => 'string',
                        'example' => '1714058507',
                    ],
                    'modifiedAt' => [
                        'title' => '修改时间',
                        'description' => '修改时间。',
                        'type' => 'string',
                        'example' => '1714058800',
                    ],
                ],
            ],
            'JobFailure' => [
                'title' => '实例失败信息',
                'description' => '本数据结构代表作业失败信息。',
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'title' => '失败信息详情',
                        'description' => '失败信息详情。',
                        'type' => 'string',
                        'example' => 'Kubernetes deployment resource with name job-8b7db913-5b1f-4ac5-a332-8d50f342**** is not progressing.',
                    ],
                    'reason' => [
                        'title' => '失败原因',
                        'description' => '失败原因。',
                        'type' => 'string',
                        'example' => 'KubernetesDeploymentNotProgressing',
                    ],
                    'failedAt' => [
                        'title' => '失败时间',
                        'description' => '失败时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1660120062',
                    ],
                ],
            ],
            'JobMetric' => [
                'title' => '作业运行指标',
                'description' => '本数据结构表示作业运行实例上资源的指标信息。',
                'type' => 'object',
                'properties' => [
                    'totalMemoryByte' => [
                        'title' => '内存，单位是Byte',
                        'description' => '内存，单位是Byte。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4096',
                    ],
                    'totalCpu' => [
                        'title' => 'CPU',
                        'description' => 'CPU。',
                        'type' => 'number',
                        'format' => 'double',
                        'example' => '2',
                    ],
                ],
            ],
            'JobStartParameters' => [
                'title' => '启动运行实例参数',
                'description' => '启动作业参数',
                'type' => 'object',
                'properties' => [
                    'deploymentId' => [
                        'title' => '作业ID',
                        'description' => '作业ID',
                        'type' => 'string',
                        'example' => '737d0921-c5ac-47fc-9ba9-07a1e0b4****',
                    ],
                    'restoreStrategy' => [
                        'title' => '作业启动位点设置',
                        'description' => '作业启动位点设置',
                        '$ref' => '#/components/schemas/DeploymentRestoreStrategy',
                    ],
                    'resourceQueueName' => [
                        'title' => '作业运行的资源队列',
                        'description' => '作业运行的资源队列',
                        'type' => 'string',
                        'example' => 'default-queue',
                    ],
                    'localVariables' => [
                        'title' => '作业变量',
                        'description' => '作业变量',
                        'type' => 'array',
                        'items' => [
                            'description' => '作业变量',
                            '$ref' => '#/components/schemas/LocalVariable',
                        ],
                    ],
                ],
            ],
            'JobStatus' => [
                'title' => '实例状态',
                'description' => '本数据结构代表作业下生成实例的状态。',
                'type' => 'object',
                'properties' => [
                    'currentJobStatus' => [
                        'title' => '当前实例的运行状态',
                        'description' => '当前实例的状态。'."\n"
                            .'- STARTING：启动中。'."\n"
                            .'- RUNNING：运行中。'."\n"
                            .'- CANCELLING：停止中。'."\n"
                            .'- FAILED：已失败。'."\n"
                            .'- CANCELLED：已停止。'."\n"
                            .'- FINISHED：已完成。',
                        'type' => 'string',
                        'example' => 'RUNNING',
                        'enum' => [
                            'STARTING',
                            'RUNNING',
                            'CANCELLING',
                            'FAILED',
                            'CANCELLED',
                            'FINISHED',
                        ],
                    ],
                    'failure' => [
                        'title' => '实例失败信息',
                        'description' => '实例失败信息。当作业状态为FAILED的时候，该数据结构有值。',
                        '$ref' => '#/components/schemas/JobFailure',
                    ],
                    'running' => [
                        'title' => '实例运行信息',
                        'description' => '实例运行信息。当作业状态为RUNNING的时候，该数据结构有值。',
                        '$ref' => '#/components/schemas/JobStatusRunning',
                    ],
                ],
            ],
            'JobStatusRunning' => [
                'title' => '实例运行信息',
                'description' => '本数据结构表示实例的运行状态。',
                'type' => 'object',
                'properties' => [
                    'observedFlinkJobRestarts' => [
                        'title' => '实力重启次数',
                        'description' => '实例重启次数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '4',
                    ],
                    'observedFlinkJobStatus' => [
                        'title' => '当前Flink作业状态',
                        'description' => '当前Flink实例状态。',
                        'type' => 'string',
                        'example' => 'RUNNING',
                    ],
                ],
            ],
            'JobSummary' => [
                'title' => '实例汇总信息',
                'description' => '本数据结构代表作业下所有实例状态的汇总。',
                'type' => 'object',
                'properties' => [
                    'starting' => [
                        'title' => '启动中实例数',
                        'description' => '启动中实例数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'running' => [
                        'title' => '运行中实例数',
                        'description' => '运行中实例数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                    ],
                    'cancelling' => [
                        'title' => '停止中实例数',
                        'description' => '停止中实例数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                    ],
                    'cancelled' => [
                        'title' => '已停止实例数',
                        'description' => '已停止实例数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '5',
                    ],
                    'finished' => [
                        'title' => '已完成实例数',
                        'description' => '已完成实例数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '4',
                    ],
                    'failed' => [
                        'title' => '已失败实例数',
                        'description' => '已失败实例数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '6',
                    ],
                ],
            ],
            'LocalVariable' => [
                'title' => 'A short description of struct',
                'description' => '作业变量',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '作业变量名称',
                        'description' => '作业变量名称',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'value' => [
                        'title' => '作业变量值',
                        'description' => '作业变量值',
                        'type' => 'string',
                        'example' => 'datagen',
                    ],
                ],
            ],
            'Log4jLogger' => [
                'title' => '日志log4j的配置',
                'description' => '本数据结构代表作业实例上日志输出的相关配置信息。',
                'type' => 'object',
                'properties' => [
                    'loggerName' => [
                        'title' => '输出日志的累的名称',
                        'description' => '输出日志的类的名称。',
                        'type' => 'string',
                        'example' => 'StdOutErrConsoleAppender',
                    ],
                    'loggerLevel' => [
                        'title' => '输出日志的级别',
                        'description' => '输出日志的级别。',
                        'type' => 'string',
                        'example' => 'ERROR',
                        'enum' => [
                            'TRACE',
                            'DEBUG',
                            'INFO',
                            'WARN',
                            'ERROR',
                        ],
                    ],
                ],
            ],
            'LogReservePolicy' => [
                'title' => '日志保存策略',
                'description' => '本数据结构代表作业实例上日志保存的相关配置。',
                'type' => 'object',
                'properties' => [
                    'openHistory' => [
                        'title' => '是否开启日志保存',
                        'description' => '是否开启日志保存。',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'expirationDays' => [
                        'title' => '开启日志保存后，日志保存天数',
                        'description' => '开启日志保存后，日志保存天数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '7',
                    ],
                ],
            ],
            'Logging' => [
                'title' => '作业日志配置',
                'description' => '本数据结构代表作业日志配置的相关信息。',
                'type' => 'object',
                'properties' => [
                    'loggingProfile' => [
                        'title' => '系统日志模版类型',
                        'description' => '系统日志模版类型。'."\n"
                            .'- default：默认模版。'."\n"
                            .'- oss：投递到oss。',
                        'type' => 'string',
                        'example' => 'oss',
                        'enum' => [
                            'default',
                            'oss',
                        ],
                    ],
                    'log4j2ConfigurationTemplate' => [
                        'title' => '自定义日志模版',
                        'description' => '自定义日志模版。',
                        'type' => 'string',
                        'example' => 'xml格式文本',
                    ],
                    'log4jLoggers' => [
                        'title' => 'log4j配置',
                        'description' => 'log4j配置。',
                        'type' => 'array',
                        'items' => [
                            'description' => '作业实例上日志输出相关配置信息。',
                            '$ref' => '#/components/schemas/Log4jLogger',
                        ],
                    ],
                    'logReservePolicy' => [
                        'title' => '日志保存策略',
                        'description' => '日志保存策略。',
                        '$ref' => '#/components/schemas/LogReservePolicy',
                    ],
                ],
            ],
            'Member' => [
                'title' => '成员',
                'description' => '成员数据结构。',
                'type' => 'object',
                'properties' => [
                    'member' => [
                        'title' => '成员名称',
                        'description' => '成员UID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user: 181319557522****',
                    ],
                    'role' => [
                        'title' => '成员角色',
                        'description' => '成员角色',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'EDITOR' => 'EDITOR',
                            'VIEWER' => 'VIEWER',
                            'ADMIN' => 'ADMIN',
                        ],
                        'example' => 'VIEWER',
                    ],
                ],
            ],
            'PythonArtifact' => [
                'title' => 'python作业结构',
                'description' => '本数据结构代表Python类型作业必填的信息。',
                'type' => 'object',
                'properties' => [
                    'pythonArtifactUri' => [
                        'title' => 'python作业URL全路径',
                        'description' => 'Python类型作业URL全路径。',
                        'type' => 'string',
                        'example' => 'https://oss/bucket/test.py',
                    ],
                    'mainArgs' => [
                        'title' => '启动参数',
                        'description' => '启动参数。',
                        'type' => 'string',
                        'example' => 'start from main',
                    ],
                    'entryModule' => [
                        'title' => 'python的启动模块',
                        'description' => 'Python的启动模块。',
                        'type' => 'string',
                        'example' => 'test.py',
                    ],
                    'additionalDependencies' => [
                        'title' => '其他附件依赖文件URL路径',
                        'description' => '其他附件依赖文件URL路径。',
                        'type' => 'array',
                        'items' => [
                            'description' => '依赖文件URL路径。',
                            'type' => 'string',
                            'example' => 'https://oss/bucket/addition.py',
                        ],
                    ],
                    'additionalPythonLibraries' => [
                        'title' => '依赖的python lib文件URL路径',
                        'description' => '依赖的Python lib文件。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Python lib文件的URL路径。',
                            'type' => 'string',
                            'example' => 'https://oss/bucket/additionlib.py',
                        ],
                    ],
                    'additionalPythonArchives' => [
                        'title' => '依赖的python archives文件URL路径',
                        'description' => '依赖的Python archives文件。',
                        'type' => 'array',
                        'items' => [
                            'description' => 'Python archive文件的URL路径。',
                            'type' => 'string',
                            'example' => 'https://oss/bucket/additionArchives.zip',
                        ],
                    ],
                ],
            ],
            'Savepoint' => [
                'title' => '作业快照信息',
                'description' => '本数据结构代表作业快照相关信息。',
                'type' => 'object',
                'properties' => [
                    'savepointId' => [
                        'title' => '作业快照ID',
                        'description' => '作业快照ID。',
                        'type' => 'string',
                        'example' => '354dde66-a3ae-463e-967a-0b4107fd****',
                    ],
                    'deploymentId' => [
                        'title' => '作业ID',
                        'description' => '已部署作业ID。',
                        'type' => 'string',
                        'example' => '1d716b22-6aad-4be2-85c2-50cfc757****',
                    ],
                    'jobId' => [
                        'title' => '实例ID',
                        'description' => '作业实例ID。',
                        'type' => 'string',
                        'example' => '5af678c0-7db0-4650-94c2-d2604f0a****',
                    ],
                    'namespace' => [
                        'title' => '项目空间名称',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'example' => 'namespacetest',
                    ],
                    'savepointOrigin' => [
                        'title' => '作业快照生成方式',
                        'description' => '作业快照生成方式。'."\n"
                            .'- `USER_REQUEST`：用户手动生成。'."\n"
                            .'- `STOP_WITH_SAVEPOINT`：停止作业生成。'."\n"
                            .'- `RETAINED_CHECKPOINT`：返回的系统检查点。',
                        'type' => 'string',
                        'example' => 'USER_REQUEST',
                        'enum' => [
                            'USER_REQUEST',
                            'STOP_WITH_SAVEPOINT',
                            'RETAINED_CHECKPOINT',
                            'AUTO_TRIGGERED',
                        ],
                    ],
                    'nativeFormat' => [
                        'title' => '作业快照是否原生模式',
                        'description' => '作业快照是否原生模式。',
                        'type' => 'boolean',
                        'example' => 'TRUE',
                    ],
                    'description' => [
                        'title' => '作业快照描述',
                        'description' => '作业快照描述。',
                        'type' => 'string',
                        'example' => '作业快照1',
                    ],
                    'stopWithDrainEnabled' => [
                        'title' => '是否使用stop-with-drain模式',
                        'description' => '是否使用stop-with-drain模式。',
                        'type' => 'boolean',
                        'example' => 'TRUE',
                    ],
                    'savepointLocation' => [
                        'title' => '作业快照存储路径',
                        'description' => '作业快照存储路径。',
                        'type' => 'string',
                        'example' => 'https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf60782c81/checkpoints/sp-3285',
                    ],
                    'status' => [
                        'title' => '作业快照状态',
                        'description' => '作业快照状态。',
                        '$ref' => '#/components/schemas/SavepointStatus',
                    ],
                    'createdAt' => [
                        'title' => 'savepoint创建时间',
                        'description' => '作业快照创建时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1659066711',
                    ],
                    'modifiedAt' => [
                        'title' => 'savepoint最新修改时间',
                        'description' => '作业快照最新修改时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1659069473',
                    ],
                ],
            ],
            'SavepointFailure' => [
                'title' => '作业快照失败详情',
                'description' => '本数据结构代表作业快照失败的相关信息。',
                'type' => 'object',
                'properties' => [
                    'message' => [
                        'title' => '失败信息',
                        'description' => '失败信息。',
                        'type' => 'string',
                        'example' => 'create savepoint failed',
                    ],
                    'reason' => [
                        'title' => '失败原因',
                        'description' => '失败原因。',
                        'type' => 'string',
                        'example' => 'IO Exception',
                    ],
                    'failedAt' => [
                        'title' => '失败时间点',
                        'description' => '失败时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1655006835',
                    ],
                ],
            ],
            'SavepointStatus' => [
                'title' => '作业快照状态信息',
                'description' => '本数据结构代表作业快照的状态信息。',
                'type' => 'object',
                'properties' => [
                    'state' => [
                        'title' => '作业快照状态',
                        'description' => '作业快照状态。'."\n"
                            .'- STARTED：生成中。'."\n"
                            .'- COMPLETED：已完成。'."\n"
                            .'- FAILED：已失败。',
                        'type' => 'string',
                        'example' => 'COMPLETED',
                        'enum' => [
                            'STARTED',
                            'COMPLETED',
                            'FAILED',
                        ],
                    ],
                    'failure' => [
                        'title' => '作业快照失败详情',
                        'description' => '作业快照失败详情。',
                        '$ref' => '#/components/schemas/SavepointFailure',
                    ],
                ],
            ],
            'SqlArtifact' => [
                'title' => 'SQL作业结构',
                'description' => '本数据结构代表SQL类型作业必填的信息。',
                'type' => 'object',
                'properties' => [
                    'sqlScript' => [
                        'title' => 'SQL作业文本内容',
                        'description' => 'SQL作业文本内容。',
                        'type' => 'string',
                        'example' => 'CREATE TEMPORARY TABLE datagen_source(   name VARCHAR ) WITH (   \'connector\' = \'datagen\' ); CREATE TEMPORARY TABLE blackhole_sink(   name  VARCHAR ) with (   \'connector\' = \'blackhole\' ); INSERT INTO blackhole_sink SELECT name from datagen_source;',
                    ],
                    'additionalDependencies' => [
                        'title' => '附加文件URL全路径地址，如果您要是用未在VVP平台上注册的UDF/Connector/Format等依赖时，需要使用该方式添加，已注册的内容不需要使用本方式关联',
                        'description' => '附加依赖文件，如果您要是用未在VVP平台上注册的UDF/Connector/Format等依赖时，需要使用该方式添加，已注册的内容不需要使用本方式关联。',
                        'type' => 'array',
                        'items' => [
                            'description' => '附加依赖文件的URL地址。',
                            'type' => 'string',
                            'example' => 'https://oss/bucket/addition.jar',
                        ],
                    ],
                ],
            ],
            'SqlStatementValidationResult' => [
                'title' => 'Sql作业代码校验结果',
                'description' => 'Sql作业代码校验结果',
                'type' => 'object',
                'properties' => [
                    'success' => [
                        'title' => '校验是否通过',
                        'type' => 'boolean',
                    ],
                    'message' => [
                        'title' => '校验信息',
                        'type' => 'string',
                    ],
                    'validationResult' => [
                        'title' => '校验结果',
                        'type' => 'string',
                        'enum' => [
                            'VALIDATION_RESULT_INVALID',
                            'VALIDATION_RESULT_INVALID_QUERY',
                            'VALIDATION_RESULT_UNSUPPORTED_QUERY',
                            'VALIDATION_RESULT_INVALID_CONNECTOR_CONFIG',
                            'VALIDATION_RESULT_VALID_INSERT_QUERY',
                            'VALIDATION_RESULT_VALID_SELECT_QUERY',
                            'VALIDATION_RESULT_VALID_DDL_STATEMENT',
                            'VALIDATION_RESULT_VALID_COMMAND_STATEMENT',
                            'VALIDATION_RESULT_INVALID_FLINK_CONFIG',
                        ],
                    ],
                    'errorDetails' => [
                        'title' => '校验错误信息',
                        '$ref' => '#/components/schemas/ErrorDetails',
                    ],
                ],
            ],
            'SqlStatementWithContext' => [
                'title' => '作业代码相关信息',
                'description' => '作业代码内容',
                'type' => 'object',
                'properties' => [
                    'statement' => [
                        'title' => '代码内容',
                        'description' => '代码内容',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'CREATE TEMPORARY TABLE datagen_source ('."\n"
                            .'    name VARCHAR,'."\n"
                            .'    score BIGINT'."\n"
                            .') WITH ('."\n"
                            .'   \'connector\' = \'datagen\''."\n"
                            .');'."\n"
                            .'CREATE TEMPORARY TABLE print_table ('."\n"
                            .'   name VARCHAR,'."\n"
                            .'   score BIGINT'."\n"
                            .') WITH ('."\n"
                            .'  \'connector\'=\'print\','."\n"
                            .'  \'logger\'=\'true\''."\n"
                            .');'."\n"
                            ."\n"
                            .'INSERT INTO print_table'."\n"
                            .'select * from datagen_source;',
                    ],
                    'flinkConfiguration' => [
                        'title' => 'Flink配置',
                        'description' => 'Flink配置',
                        'type' => 'object',
                    ],
                    'batchMode' => [
                        'title' => '是否为批作业',
                        'description' => '是否为批作业',
                        'type' => 'boolean',
                        'required' => true,
                        'example' => 'false',
                    ],
                    'versionName' => [
                        'title' => '引擎版本',
                        'description' => '引擎版本',
                        'type' => 'string',
                        'example' => 'vvr-8.0.6-flink-1.17',
                    ],
                    'additionalDependencies' => [
                        'title' => '附加依赖',
                        'description' => '附加依赖',
                        'type' => 'array',
                        'items' => [
                            'description' => '附加依赖文件的URL地址。',
                            'type' => 'string',
                            'example' => '"oss://xxx"',
                        ],
                    ],
                ],
            ],
            'StartJobRequestBody' => [
                'title' => '作业启动结构体',
                'description' => '本数据结构代表作业启动的相关信息。',
                'type' => 'object',
                'properties' => [
                    'deploymentId' => [
                        'title' => '作业ID',
                        'description' => '已部署作业ID。',
                        'type' => 'string',
                        'example' => '5a19a71b-1c42-4f34-94fd-86cf6078****',
                    ],
                    'resourceSettingSpec' => [
                        'title' => '作业资源设置',
                        'description' => '作业资源设置。',
                        '$ref' => '#/components/schemas/BriefResourceSetting',
                    ],
                    'restoreStrategy' => [
                        'title' => '作业启动位点设置',
                        'description' => '作业实例启动位点设置。',
                        '$ref' => '#/components/schemas/DeploymentRestoreStrategy',
                    ],
                ],
            ],
            'StopJobRequestBody' => [
                'title' => '作业停止结构',
                'description' => '本数据结构代表停止作业的请求信息。',
                'type' => 'object',
                'properties' => [
                    'stopStrategy' => [
                        'title' => '作业停止策略',
                        'description' => '作业停止策略。'."\n"
                            .'- `NONE`：直接停止。'."\n"
                            .'- `STOP_WITH_SAVEPOINT`：生成作业快照后停止。'."\n"
                            .'-  `STOP_WITH_DRAIN`：以drain的方式停止。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'NONE',
                        'enum' => [
                            'NONE',
                            'STOP_WITH_SAVEPOINT',
                            'STOP_WITH_DRAIN',
                        ],
                    ],
                ],
            ],
            'StreamingResourceSetting' => [
                'title' => '流作业资源设置',
                'description' => '本数据结构代表作业运行流模式时的资源设置。',
                'type' => 'object',
                'properties' => [
                    'resourceSettingMode' => [
                        'title' => '流作业资源模式',
                        'description' => '流模式使用的资源模式。'."\n"
                            .'- EXPERT：专家模式。'."\n"
                            .'- BASIC：基础模式。'."\n",
                        'type' => 'string',
                        'example' => 'EXPERT',
                        'enum' => [
                            'BASIC',
                            'EXPERT',
                        ],
                    ],
                    'expertResourceSetting' => [
                        'title' => '细粒度资源设置',
                        'description' => '专家模式资源设置。',
                        '$ref' => '#/components/schemas/ExpertResourceSetting',
                    ],
                    'basicResourceSetting' => [
                        'title' => '基础资源设置',
                        'description' => '基础模式资源设置。',
                        '$ref' => '#/components/schemas/BasicResourceSetting',
                    ],
                ],
            ],
            'Variable' => [
                'title' => '变量替换结构',
                'description' => '本数据结构代表变量配置设置的信息。',
                'type' => 'object',
                'properties' => [
                    'kind' => [
                        'title' => '变量类型',
                        'description' => '变量类型。当前仅支持类型Plain。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Plain',
                        'enum' => [
                            'Plain',
                        ],
                    ],
                    'name' => [
                        'title' => '变量名称',
                        'description' => '变量名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mysqlPassword',
                        'pattern' => '^[a-zA-Z0-9_-]{1,64}$',
                    ],
                    'value' => [
                        'title' => '变量值',
                        'description' => '变量值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'myPassword',
                    ],
                    'description' => [
                        'title' => '变量描述',
                        'description' => '变量描述信息。',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'ListVariables' => [
            'summary' => '获取变量列表。',
            'path' => '/api/v2/namespaces/{namespace}/variables',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bda1c4a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，所请求页码的元素数量，最大值为100，默认值为10。',
                        'description' => '分页参数，表示所请求页码元素数量，最大值为100，最小值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'description' => '分页参数，页码索引，表示所请求页码，最小值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-ABCF-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'pageSize' => [
                                'title' => '分页参数，所请求页码的元素数量。',
                                'description' => '分页参数，表示所请求页码元素数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'pageIndex' => [
                                'title' => '分页参数，页码索引，表示所请求页码。',
                                'description' => '分页参数，页码索引，表示所请求页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'totalSize' => [
                                'title' => '满足查询条件的所有元素的数量。',
                                'description' => '满足查询条件的所有元素的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '当success为true，返回满足查询条件的所有变量；当success为false，该值为空。',
                                'description' => '- 当success为true，返回满足查询条件的变量列表；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '变量数据。',
                                    'description' => '变量数据。',
                                    '$ref' => '#/components/schemas/Variable',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-ABCF-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"pageSize\\": 10,\\n  \\"pageIndex\\": 1,\\n  \\"totalSize\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"kind\\": \\"Plain\\",\\n      \\"name\\": \\"variableName\\",\\n      \\"value\\": \\"variableValue\\",\\n      \\"description\\": \\"This is a variable description\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListVariablesResponse>\\n    <requestId>CBC799F0-ABCF-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <pageSize>10</pageSize>\\n    <pageIndex>1</pageIndex>\\n    <totalSize>1</totalSize>\\n    <data>\\n        <kind>Plain</kind>\\n        <name>variableName</name>\\n        <value>variableValue</value>\\n        <description>This is a variable description</description>\\n    </data>\\n</ListVariablesResponse>","errorExample":""}]',
            'title' => '获取变量列表',
        ],
        'DeleteVariable' => [
            'summary' => '删除变量。',
            'path' => '/api/v2/namespaces/{namespace}/variables/{name}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '变量名称。',
                        'description' => '需要删除的变量名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'variableName',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteVariableResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n</DeleteVariableResponse>","errorExample":""}]',
            'title' => '删除变量',
        ],
        'CreateVariable' => [
            'summary' => '创建变量。',
            'path' => '/api/v2/namespaces/{namespace}/variables',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bda1c4a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '创建变量的数据内容。',
                        'description' => '创建变量的数据内容。',
                        'required' => true,
                        '$ref' => '#/components/schemas/Variable',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-ABCD-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回创建的变量；当success为false，该值为空。',
                                'description' => '- 当success为true，返回创建的变量；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Variable',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-ABCD-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"kind\\": \\"Plain\\",\\n    \\"name\\": \\"variableName\\",\\n    \\"value\\": \\"variableValue\\",\\n    \\"description\\": \\"This is a variable description\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateVariableResponse>\\n    <requestId>CBC799F0-ABCD-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <kind>Plain</kind>\\n        <name>variableName</name>\\n        <value>variableValue</value>\\n        <description>This is a variable description</description>\\n    </data>\\n</CreateVariableResponse>","errorExample":""}]',
            'title' => '创建变量',
        ],
        'GetSavepoint' => [
            'summary' => '获取快照详细信息。',
            'path' => '/api/v2/namespaces/{namespace}/savepoints/{savepointId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'savepointId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Savepoint ID。',
                        'description' => 'Savepoint ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '88a8fc49-e090-430a-85d8-3ee8c79c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => 'Savepoint信息。',
                                'description' => '- 当success为true，返回快照信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Savepoint',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentId\\": \\"1d716b22-6aad-4be2-85c2-50cfc757****\\",\\n    \\"jobId\\": \\"5af678c0-7db0-4650-94c2-d2604f0a****\\",\\n    \\"namespace\\": \\"namespacetest\\",\\n    \\"savepointOrigin\\": \\"USER_REQUEST\\",\\n    \\"nativeFormat\\": true,\\n    \\"description\\": \\"\\",\\n    \\"stopWithDrainEnabled\\": true,\\n    \\"savepointLocation\\": \\"https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf60782c81/checkpoints/sp-3285\\",\\n    \\"status\\": {\\n      \\"state\\": \\"COMPLETED\\",\\n      \\"failure\\": {\\n        \\"message\\": \\"\\",\\n        \\"reason\\": \\"\\",\\n        \\"failedAt\\": 1655006835\\n      }\\n    },\\n    \\"createdAt\\": 1659066711,\\n    \\"modifiedAt\\": 1659069473\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetSavepointResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode> </errorCode>\\n    <errorMessage> </errorMessage>\\n    <data>\\n        <savepointId>354dde66-a3ae-463e-967a-0b4107fd****</savepointId>\\n        <deploymentId>1d716b22-6aad-4be2-85c2-50cfc757****</deploymentId>\\n        <jobId>5af678c0-7db0-4650-94c2-d2604f0a****</jobId>\\n        <namespace>namespacetest</namespace>\\n        <savepointOrigin>USER_REQUEST</savepointOrigin>\\n        <nativeFormat>true</nativeFormat>\\n        <stopWithDrainEnabled>true</stopWithDrainEnabled>\\n        <savepointLocation>https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf6078****/checkpoints/sp-3285</savepointLocation>\\n        <status>\\n            <state>COMPLETED</state>\\n        </status>\\n        <createdAt>1659066711</createdAt>\\n        <modifiedAt>1659069473</modifiedAt>\\n    </data>\\n</GetSavepointResponse>","errorExample":""}]',
            'title' => '获取快照',
        ],
        'DeleteSavepoint' => [
            'summary' => '删除快照。',
            'path' => '/api/v2/namespaces/{namespace}/savepoints/{savepointId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'savepointId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '需要删除的savepoint ID。',
                        'description' => '需要删除的Savepoint ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '907a8f0e-4f6c-412b-8a5e-7d4a065b****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteSavepointResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n</DeleteSavepointResponse>","errorExample":""}]',
            'title' => '删除快照',
            'extraInfo' => '补充。',
        ],
        'CreateSavepoint' => [
            'summary' => '创建快照。',
            'path' => '/api/v2/namespaces/{namespace}/savepoints',
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
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '触发savepoint参数。',
                        'description' => '触发savepoint参数。',
                        'type' => 'object',
                        'properties' => [
                            'deploymentId' => [
                                'title' => '作业ID。',
                                'description' => '作业ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '58718c99-3b29-4c5e-93bb-c9fc4ec6****',
                            ],
                            'description' => [
                                'title' => 'savepoint描述信息。',
                                'description' => 'savepoint描述信息。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '作业快照描述',
                            ],
                            'nativeFormat' => [
                                'title' => '是否使用nativeFormat模式。',
                                'description' => '是否使用nativeFormat模式：'."\n"
                                    ."\n"
                                    .'- true：使用'."\n"
                                    ."\n"
                                    .'- false：不使用',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回触发成功的savepoint信息；当success为false，该值为空。',
                                'description' => '- 当success为true，返回触发成功的savepoint信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Savepoint',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentId\\": \\"1d716b22-6aad-4be2-85c2-50cfc757****\\",\\n    \\"jobId\\": \\"5af678c0-7db0-4650-94c2-d2604f0a****\\",\\n    \\"namespace\\": \\"namespacetest\\",\\n    \\"savepointOrigin\\": \\"USER_REQUEST\\",\\n    \\"nativeFormat\\": true,\\n    \\"description\\": \\"\\",\\n    \\"stopWithDrainEnabled\\": true,\\n    \\"savepointLocation\\": \\"https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf60782c81/checkpoints/sp-3285\\",\\n    \\"status\\": {\\n      \\"state\\": \\"COMPLETED\\",\\n      \\"failure\\": {\\n        \\"message\\": \\"\\",\\n        \\"reason\\": \\"\\",\\n        \\"failedAt\\": 1655006835\\n      }\\n    },\\n    \\"createdAt\\": 1659066711,\\n    \\"modifiedAt\\": 1659069473\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateSavepointResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <savepointId>354dde66-a3ae-463e-967a-0b4107fd****</savepointId>\\n        <deploymentId>1d716b22-6aad-4be2-85c2-50cfc757****</deploymentId>\\n        <jobId>5af678c0-7db0-4650-94c2-d2604f0a****</jobId>\\n        <namespace>namespacetest</namespace>\\n        <savepointOrigin>USER_REQUEST</savepointOrigin>\\n        <nativeFormat>true</nativeFormat>\\n        <stopWithDrainEnabled>true</stopWithDrainEnabled>\\n        <savepointLocation>https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf6078****/checkpoints/sp-3285</savepointLocation>\\n        <status>\\n            <state>COMPLETED</state>\\n        </status>\\n        <createdAt>1659066711</createdAt>\\n        <modifiedAt>1659069473</modifiedAt>\\n    </data>\\n</CreateSavepointResponse>","errorExample":""}]',
            'title' => '创建快照',
        ],
        'ListSavepoints' => [
            'summary' => '获取作业快照列表。',
            'path' => '/api/v2/namespaces/{namespace}/savepoints',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。',
                        'description' => '作业ID，非必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '88a8fc49-e090-430a-85d8-3ee8c79c****',
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '实例ID，非必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '99a8fc49-e090-430a-85d8-3ee8c79c****',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，所请求页码的元素数量，默认值为10，最大值100。',
                        'description' => '分页参数，表示所请求页码元素数量，最大值为100，最小值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'description' => '分页参数，页码索引，表示所请求页码，最小值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'pageSize' => [
                                'title' => '分页参数，所请求页码的元素数量。',
                                'description' => '分页参数，所请求页码的元素数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'pageIndex' => [
                                'title' => '分页参数，页码索引，表示所请求页码。',
                                'description' => '分页参数，页码索引，表示所请求页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'totalSize' => [
                                'title' => '满足查询条件的所有元素的数量。',
                                'description' => '满足查询条件的所有元素的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '当success为true，返回满足查询条件的savepoint列表；当success为false，该值为空。',
                                'description' => '- 当success为true，返回满足查询条件的快照列表；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'array',
                                'items' => [
                                    'title' => 'savepoint数据。',
                                    'description' => '快照数据。',
                                    '$ref' => '#/components/schemas/Savepoint',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"pageSize\\": 10,\\n  \\"pageIndex\\": 1,\\n  \\"totalSize\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n      \\"deploymentId\\": \\"1d716b22-6aad-4be2-85c2-50cfc757****\\",\\n      \\"jobId\\": \\"5af678c0-7db0-4650-94c2-d2604f0a****\\",\\n      \\"namespace\\": \\"namespacetest\\",\\n      \\"savepointOrigin\\": \\"USER_REQUEST\\",\\n      \\"nativeFormat\\": true,\\n      \\"description\\": \\"\\",\\n      \\"stopWithDrainEnabled\\": true,\\n      \\"savepointLocation\\": \\"https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf60782c81/checkpoints/sp-3285\\",\\n      \\"status\\": {\\n        \\"state\\": \\"COMPLETED\\",\\n        \\"failure\\": {\\n          \\"message\\": \\"\\",\\n          \\"reason\\": \\"\\",\\n          \\"failedAt\\": 1655006835\\n        }\\n      },\\n      \\"createdAt\\": 1659066711,\\n      \\"modifiedAt\\": 1659069473\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListSavepointsResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <pageSize>100</pageSize>\\n    <pageIndex>1</pageIndex>\\n    <totalSize>500</totalSize>\\n    <data>\\n        <savepointId>354dde66-a3ae-463e-967a-0b4107fd****</savepointId>\\n        <deploymentId>1d716b22-6aad-4be2-85c2-50cfc757****</deploymentId>\\n        <jobId>5af678c0-7db0-4650-94c2-d2604f0a****</jobId>\\n        <namespace>namespacetest</namespace>\\n        <savepointOrigin>USER_REQUEST</savepointOrigin>\\n        <nativeFormat>true</nativeFormat>\\n        <stopWithDrainEnabled>true</stopWithDrainEnabled>\\n        <savepointLocation>https://oss/bucket/flink/flink-jobs/namespaces/vvp-team/deployments/5a19a71b-1c42-4f34-94fd-86cf6078****/checkpoints/sp-3285</savepointLocation>\\n        <status>\\n            <state>COMPLETED</state>\\n        </status>\\n        <createdAt>1659066711</createdAt>\\n        <modifiedAt>1659069473</modifiedAt>\\n    </data>\\n</ListSavepointsResponse>","errorExample":""}]',
            'title' => '获取作业快照列表',
        ],
        'StopJob' => [
            'summary' => '停止一个作业实例。',
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}:stop',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '作业实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '88a8fc49-e090-430a-85d8-3ee8c79c****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '启动实例参数。',
                        'description' => '停止作业实例参数。',
                        'required' => true,
                        '$ref' => '#/components/schemas/StopJobRequestBody',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '启动生成的实例数据。',
                                'description' => '- 当success为true，返回被停止实例的数据；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Job',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"jobId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentName\\": \\"flinktest\\",\\n    \\"namespace\\": \\"namespacetest\\",\\n    \\"executionMode\\": \\"BATCH\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"startTime\\": 1660190835,\\n    \\"endTime\\": 1660277235,\\n    \\"engineVersion\\": \\"vvr-4.0.14-flink-1.13\\",\\n    \\"flinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"status\\": {\\n      \\"currentJobStatus\\": \\"RUNNING\\",\\n      \\"failure\\": {\\n        \\"message\\": \\"\\",\\n        \\"reason\\": \\"\\",\\n        \\"failedAt\\": 1660120062\\n      },\\n      \\"running\\": {\\n        \\"observedFlinkJobRestarts\\": 4,\\n        \\"observedFlinkJobStatus\\": \\"RUNNING\\"\\n      }\\n    },\\n    \\"metric\\": {\\n      \\"totalMemoryByte\\": 4096,\\n      \\"totalCpu\\": 2\\n    },\\n    \\"sessionClusterName\\": \\"preview\\",\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"restoreStrategy\\": {\\n      \\"kind\\": \\"LATEST_STATE\\",\\n      \\"allowNonRestoredState\\": true,\\n      \\"jobStartTimeInMs\\": 1660293803155,\\n      \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\"\\n    },\\n    \\"userFlinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StopJobResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <jobId>354dde66-a3ae-463e-967a-0b4107fd****</jobId>\\n        <deploymentId>354dde66-a3ae-463e-967a-0b4107fd****</deploymentId>\\n        <deploymentName>flinktest</deploymentName>\\n        <namespace>namespacetest</namespace>\\n        <executionMode>BATCH</executionMode>\\n        <startTime>1660190835</startTime>\\n        <endTime>1660277235</endTime>\\n        <engineVersion>vvr-4.0.14-flink-1.13</engineVersion>\\n        <status>\\n            <currentJobStatus>RUNNING</currentJobStatus>\\n            <running>\\n                <observedFlinkJobRestarts>4</observedFlinkJobRestarts>\\n                <observedFlinkJobStatus>RUNNING</observedFlinkJobStatus>\\n            </running>\\n        </status>\\n        <metric>\\n            <totalMemoryByte>4096</totalMemoryByte>\\n            <totalCpu>2</totalCpu>\\n        </metric>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>JAR</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <batchResourceSetting>\\n            <maxSlot>10</maxSlot>\\n            <basicResourceSetting>\\n                <parallelism>4</parallelism>\\n                <jobmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </jobmanagerResourceSettingSpec>\\n                <taskmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </taskmanagerResourceSettingSpec>\\n            </basicResourceSetting>\\n        </batchResourceSetting>\\n        <restoreStrategy>\\n            <kind>LATEST_STATE</kind>\\n            <allowNonRestoredState>true</allowNonRestoredState>\\n            <jobStartTimeInMs>1660293803155</jobStartTimeInMs>\\n            <savepointId>354dde66-a3ae-463e-967a-0b4107fd****</savepointId>\\n        </restoreStrategy>\\n    </data>\\n</StopJobResponse>","errorExample":""}]',
            'title' => '停止作业实例',
        ],
        'StartJobWithParams' => [
            'summary' => '启动一个作业实例。',
            'path' => '/api/v2/namespaces/{namespace}/jobs:start',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****'."\n",
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace'."\n",
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '作业实例启动参数。',
                        'description' => '作业实例启动参数。',
                        'required' => false,
                        '$ref' => '#/components/schemas/JobStartParameters',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据结构。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****'."\n",
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true'."\n",
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'description' => '本数据结构代表已部署作业生成的实例详情。',
                                '$ref' => '#/components/schemas/Job',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\\\n\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"jobId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentName\\": \\"flinktest\\",\\n    \\"namespace\\": \\"namespacetest\\",\\n    \\"executionMode\\": \\"BATCH\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"startTime\\": 1660190835,\\n    \\"endTime\\": 1660277235,\\n    \\"engineVersion\\": \\"vvr-4.0.14-flink-1.13\\",\\n    \\"flinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"status\\": {\\n      \\"currentJobStatus\\": \\"RUNNING\\",\\n      \\"failure\\": {\\n        \\"message\\": \\"\\",\\n        \\"reason\\": \\"\\",\\n        \\"failedAt\\": 1660120062\\n      },\\n      \\"running\\": {\\n        \\"observedFlinkJobRestarts\\": 4,\\n        \\"observedFlinkJobStatus\\": \\"RUNNING\\"\\n      }\\n    },\\n    \\"metric\\": {\\n      \\"totalMemoryByte\\": 4096,\\n      \\"totalCpu\\": 2\\n    },\\n    \\"sessionClusterName\\": \\"preview\\",\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"restoreStrategy\\": {\\n      \\"kind\\": \\"LATEST_STATE\\",\\n      \\"allowNonRestoredState\\": true,\\n      \\"jobStartTimeInMs\\": 1660293803155,\\n      \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\"\\n    },\\n    \\"userFlinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '启动作业实例',
        ],
        'StartJob' => [
            'summary' => '创建并启动一个作业实例。',
            'path' => '/api/v2/namespaces/{namespace}/jobs',
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
            'deprecated' => true,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '启动实例参数。',
                        'required' => true,
                        '$ref' => '#/components/schemas/StartJobRequestBody',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'description' => '- 当success为true，返回创建的实例信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Job',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'substitutions' => [
                    'ververica::2022-07-18::StartJobWithParams',
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"jobId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentName\\": \\"flinktest\\",\\n    \\"namespace\\": \\"namespacetest\\",\\n    \\"executionMode\\": \\"BATCH\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"startTime\\": 1660190835,\\n    \\"endTime\\": 1660277235,\\n    \\"engineVersion\\": \\"vvr-4.0.14-flink-1.13\\",\\n    \\"flinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"status\\": {\\n      \\"currentJobStatus\\": \\"RUNNING\\",\\n      \\"failure\\": {\\n        \\"message\\": \\"\\",\\n        \\"reason\\": \\"\\",\\n        \\"failedAt\\": 1660120062\\n      },\\n      \\"running\\": {\\n        \\"observedFlinkJobRestarts\\": 4,\\n        \\"observedFlinkJobStatus\\": \\"RUNNING\\"\\n      }\\n    },\\n    \\"metric\\": {\\n      \\"totalMemoryByte\\": 4096,\\n      \\"totalCpu\\": 2\\n    },\\n    \\"sessionClusterName\\": \\"preview\\",\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"restoreStrategy\\": {\\n      \\"kind\\": \\"LATEST_STATE\\",\\n      \\"allowNonRestoredState\\": true,\\n      \\"jobStartTimeInMs\\": 1660293803155,\\n      \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\"\\n    },\\n    \\"userFlinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<StartJobResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <jobId>354dde66-a3ae-463e-967a-0b4107fd****</jobId>\\n        <deploymentId>354dde66-a3ae-463e-967a-0b4107fd****</deploymentId>\\n        <deploymentName>flinktest</deploymentName>\\n        <namespace>namespacetest</namespace>\\n        <executionMode>BATCH</executionMode>\\n        <startTime>1660190835</startTime>\\n        <endTime>1660277235</endTime>\\n        <engineVersion>vvr-4.0.14-flink-1.13</engineVersion>\\n        <status>\\n            <currentJobStatus>RUNNING</currentJobStatus>\\n            <running>\\n                <observedFlinkJobRestarts>4</observedFlinkJobRestarts>\\n                <observedFlinkJobStatus>RUNNING</observedFlinkJobStatus>\\n            </running>\\n        </status>\\n        <metric>\\n            <totalMemoryByte>4096</totalMemoryByte>\\n            <totalCpu>2</totalCpu>\\n        </metric>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>JAR</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <batchResourceSetting>\\n            <maxSlot>10</maxSlot>\\n            <basicResourceSetting>\\n                <parallelism>4</parallelism>\\n                <jobmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </jobmanagerResourceSettingSpec>\\n                <taskmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </taskmanagerResourceSettingSpec>\\n            </basicResourceSetting>\\n        </batchResourceSetting>\\n        <restoreStrategy>\\n            <kind>LATEST_STATE</kind>\\n            <allowNonRestoredState>true</allowNonRestoredState>\\n            <jobStartTimeInMs>1660293803155</jobStartTimeInMs>\\n            <savepointId>354dde66-a3ae-463e-967a-0b4107fd****</savepointId>\\n        </restoreStrategy>\\n    </data>\\n</StartJobResponse>","errorExample":""}]',
            'title' => '启动作业实例（废弃）',
        ],
        'GetJob' => [
            'summary' => '获取作业实例的详细信息。',
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '作业实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5af678c0-7db0-4650-94c2-d2604f0a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回查询的实例；当success为false，该值为空。',
                                'description' => '- 当success为true，返回查询的实例信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Job',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"jobId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n    \\"deploymentName\\": \\"flinktest\\",\\n    \\"namespace\\": \\"namespacetest\\",\\n    \\"executionMode\\": \\"BATCH\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"startTime\\": 1660190835,\\n    \\"endTime\\": 1660277235,\\n    \\"engineVersion\\": \\"vvr-4.0.14-flink-1.13\\",\\n    \\"flinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"status\\": {\\n      \\"currentJobStatus\\": \\"RUNNING\\",\\n      \\"failure\\": {\\n        \\"message\\": \\"\\",\\n        \\"reason\\": \\"\\",\\n        \\"failedAt\\": 1660120062\\n      },\\n      \\"running\\": {\\n        \\"observedFlinkJobRestarts\\": 4,\\n        \\"observedFlinkJobStatus\\": \\"RUNNING\\"\\n      }\\n    },\\n    \\"metric\\": {\\n      \\"totalMemoryByte\\": 4096,\\n      \\"totalCpu\\": 2\\n    },\\n    \\"sessionClusterName\\": \\"preview\\",\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"restoreStrategy\\": {\\n      \\"kind\\": \\"LATEST_STATE\\",\\n      \\"allowNonRestoredState\\": true,\\n      \\"jobStartTimeInMs\\": 1660293803155,\\n      \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\"\\n    },\\n    \\"userFlinkConf\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetJobResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <jobId>354dde66-a3ae-463e-967a-0b4107fd****</jobId>\\n        <deploymentId>354dde66-a3ae-463e-967a-0b4107fd****</deploymentId>\\n        <deploymentName>flinktest</deploymentName>\\n        <namespace>namespacetest</namespace>\\n        <executionMode>BATCH</executionMode>\\n        <startTime>1660190835</startTime>\\n        <endTime>1660277235</endTime>\\n        <engineVersion>vvr-4.0.14-flink-1.13</engineVersion>\\n        <status>\\n            <currentJobStatus>RUNNING</currentJobStatus>\\n            <running>\\n                <observedFlinkJobRestarts>4</observedFlinkJobRestarts>\\n                <observedFlinkJobStatus>RUNNING</observedFlinkJobStatus>\\n            </running>\\n        </status>\\n        <metric>\\n            <totalMemoryByte>4096</totalMemoryByte>\\n            <totalCpu>2</totalCpu>\\n        </metric>\\n        <sessionClusterName>preview</sessionClusterName>\\n        <artifact>\\n            <sqlArtifact>\\n                <sqlScript>CREATE TEMPORARY TABLE datagen_source(   name VARCHAR ) WITH (   \'connector\' = \'datagen\' ); CREATE TEMPORARY TABLE blackhole_sink(   name  VARCHAR ) with (   \'connector\' = \'blackhole\' ); INSERT INTO blackhole_sink SELECT name from datagen_source;</sqlScript>\\n            </sqlArtifact>\\n            <kind>SQLSCRIPT</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <batchResourceSetting>\\n            <maxSlot>10</maxSlot>\\n            <basicResourceSetting>\\n                <parallelism>4</parallelism>\\n                <jobmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </jobmanagerResourceSettingSpec>\\n                <taskmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </taskmanagerResourceSettingSpec>\\n            </basicResourceSetting>\\n        </batchResourceSetting>\\n        <restoreStrategy>\\n            <kind>LATEST_STATE</kind>\\n            <allowNonRestoredState>true</allowNonRestoredState>\\n            <jobStartTimeInMs>1660293803155</jobStartTimeInMs>\\n            <savepointId>354dde66-a3ae-463e-967a-0b4107fd****</savepointId>\\n        </restoreStrategy>\\n    </data>\\n</GetJobResponse>","errorExample":""}]',
            'title' => '获取作业实例',
        ],
        'DeleteJob' => [
            'summary' => '删除一个作业下非运行状态的作业实例信息。',
            'path' => '/api/v2/namespaces/{namespace}/jobs/{jobId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间ID。',
                        'description' => '项目空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'jobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID。',
                        'description' => '作业实例ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5af678c0-7db0-4650-94c2-d2604f0a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteJobResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n</DeleteJobResponse>","errorExample":""}]',
            'title' => '删除作业实例',
        ],
        'ListJobs' => [
            'summary' => '获取到某个已部署作业下所有作业实例的信息。',
            'path' => '/api/v2/namespaces/{namespace}/jobs',
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
                'operationType' => 'list',
                'abilityTreeCode' => '146903',
                'abilityTreeNodes' => [
                    'FEATUREscB9XR98',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'description' => '分页参数，页码索引，表示所请求页码，最小值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，所请求页码的元素数量，默认值为10，最大值100。',
                        'description' => '分页参数，表示所请求页码元素数量，最大值为100，最小值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业ID。',
                        'description' => '已部署作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '58718c99-3b29-4c5e-93bb-c9fc4ec6****',
                    ],
                ],
                [
                    'name' => 'sortName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序规则。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmt_create',
                        'enum' => [
                            'gmt_create',
                            'job_id',
                            'status',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'pageIndex' => [
                                'title' => '分页参数，页码索引，表示所请求页码。',
                                'description' => '分页参数，页码索引，表示所请求页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '分页参数，所请求页码的元素数量。',
                                'description' => '分页参数，表示所请求页码元素数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'totalSize' => [
                                'title' => '满足查询条件的所有元素的数量。',
                                'description' => '满足查询条件的所有元素的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '当success为true，返回所有满足条件的实例信息；当success为false，该值为空。',
                                'description' => '- 当success为true，返回所有满足条件的实例信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '实例数据。',
                                    'description' => '实例数据。',
                                    '$ref' => '#/components/schemas/Job',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"pageIndex\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalSize\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"jobId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n      \\"deploymentId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\",\\n      \\"deploymentName\\": \\"flinktest\\",\\n      \\"namespace\\": \\"namespacetest\\",\\n      \\"executionMode\\": \\"BATCH\\",\\n      \\"creator\\": \\"27846363877456****\\",\\n      \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n      \\"modifier\\": \\"27846363877456****\\",\\n      \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n      \\"startTime\\": 1660190835,\\n      \\"endTime\\": 1660277235,\\n      \\"engineVersion\\": \\"vvr-4.0.14-flink-1.13\\",\\n      \\"flinkConf\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"status\\": {\\n        \\"currentJobStatus\\": \\"RUNNING\\",\\n        \\"failure\\": {\\n          \\"message\\": \\"\\",\\n          \\"reason\\": \\"\\",\\n          \\"failedAt\\": 1660120062\\n        },\\n        \\"running\\": {\\n          \\"observedFlinkJobRestarts\\": 4,\\n          \\"observedFlinkJobStatus\\": \\"RUNNING\\"\\n        }\\n      },\\n      \\"metric\\": {\\n        \\"totalMemoryByte\\": 4096,\\n        \\"totalCpu\\": 2\\n      },\\n      \\"sessionClusterName\\": \\"preview\\",\\n      \\"artifact\\": {\\n        \\"sqlArtifact\\": {\\n          \\"sqlScript\\": \\"\\",\\n          \\"additionalDependencies\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"jarArtifact\\": {\\n          \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n          \\"entryClass\\": \\"org.apapche.flink.test\\",\\n          \\"mainArgs\\": \\"\\",\\n          \\"additionalDependencies\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"pythonArtifact\\": {\\n          \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n          \\"mainArgs\\": \\"\\",\\n          \\"entryModule\\": \\"\\",\\n          \\"additionalDependencies\\": [\\n            \\"\\"\\n          ],\\n          \\"additionalPythonLibraries\\": [\\n            \\"\\"\\n          ],\\n          \\"additionalPythonArchives\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"kind\\": \\"SQLSCRIPT\\"\\n      },\\n      \\"logging\\": {\\n        \\"loggingProfile\\": \\"oss\\",\\n        \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n        \\"log4jLoggers\\": [\\n          {\\n            \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n            \\"loggerLevel\\": \\"ERROR\\"\\n          }\\n        ],\\n        \\"logReservePolicy\\": {\\n          \\"openHistory\\": true,\\n          \\"expirationDays\\": 7\\n        }\\n      },\\n      \\"batchResourceSetting\\": {\\n        \\"maxSlot\\": 10,\\n        \\"basicResourceSetting\\": {\\n          \\"parallelism\\": 4,\\n          \\"jobmanagerResourceSettingSpec\\": {\\n            \\"cpu\\": 2,\\n            \\"memory\\": \\"4Gi\\"\\n          },\\n          \\"taskmanagerResourceSettingSpec\\": {\\n            \\"cpu\\": 2,\\n            \\"memory\\": \\"4Gi\\"\\n          }\\n        }\\n      },\\n      \\"streamingResourceSetting\\": {\\n        \\"resourceSettingMode\\": \\"EXPERT\\",\\n        \\"expertResourceSetting\\": {\\n          \\"jobmanagerResourceSettingSpec\\": {\\n            \\"cpu\\": 2,\\n            \\"memory\\": \\"4Gi\\"\\n          },\\n          \\"resourcePlan\\": \\"\\"\\n        },\\n        \\"basicResourceSetting\\": {\\n          \\"parallelism\\": 4\\n        }\\n      },\\n      \\"restoreStrategy\\": {\\n        \\"kind\\": \\"LATEST_STATE\\",\\n        \\"allowNonRestoredState\\": true,\\n        \\"jobStartTimeInMs\\": 1660293803155,\\n        \\"savepointId\\": \\"354dde66-a3ae-463e-967a-0b4107fd****\\"\\n      },\\n      \\"userFlinkConf\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"localVariables\\": [\\n        {\\n          \\"name\\": \\"test\\",\\n          \\"value\\": \\"datagen\\"\\n        }\\n      ],\\n      \\"workspace\\": \\"edcef******b4f\\",\\n      \\"createdAt\\": \\"\\",\\n      \\"modifiedAt\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListJobsResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <httpCode>200</httpCode>\\n    <pageIndex>1</pageIndex>\\n    <pageSize>10</pageSize>\\n    <totalSize>1</totalSize>\\n    <data>\\n        <jobId>354dde66-a3ae-463e-967a-0b4107fd****</jobId>\\n        <deploymentId>354dde66-a3ae-463e-967a-0b4107fd****</deploymentId>\\n        <deploymentName>flinktest</deploymentName>\\n        <namespace>namespacetest</namespace>\\n        <executionMode>BATCH</executionMode>\\n        <startTime>1660190835</startTime>\\n        <endTime>1660277235</endTime>\\n        <engineVersion>vvr-4.0.14-flink-1.13</engineVersion>\\n        <status>\\n            <currentJobStatus>RUNNING</currentJobStatus>\\n            <running>\\n                <observedFlinkJobRestarts>4</observedFlinkJobRestarts>\\n                <observedFlinkJobStatus>RUNNING</observedFlinkJobStatus>\\n            </running>\\n        </status>\\n        <metric>\\n            <totalMemoryByte>4096</totalMemoryByte>\\n            <totalCpu>2</totalCpu>\\n        </metric>\\n        <sessionClusterName>preview</sessionClusterName>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>JAR</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <batchResourceSetting>\\n            <maxSlot>10</maxSlot>\\n            <basicResourceSetting>\\n                <parallelism>4</parallelism>\\n                <jobmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </jobmanagerResourceSettingSpec>\\n                <taskmanagerResourceSettingSpec>\\n                    <cpu>2</cpu>\\n                    <memory>4Gi</memory>\\n                </taskmanagerResourceSettingSpec>\\n            </basicResourceSetting>\\n        </batchResourceSetting>\\n    </data>\\n</ListJobsResponse>","errorExample":""}]',
            'title' => '获取作业实例列表',
        ],
        'ListDeploymentTargets' => [
            'summary' => '获取作业可部署目标的列表，部署目标是session集群或者perjob集群。',
            'path' => '/api/v2/namespaces/{namespace}/deployment-targets',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，所请求页码的元素数量，默认值为10，最大值1000。',
                        'description' => '分页参数，表示所请求页码元素数量，最大值为100，最小值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'description' => '分页参数，页码索引，表示所请求页码，最小值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'pageSize' => [
                                'title' => '分页参数，所请求页码的元素数量。',
                                'description' => '分页参数，表示所请求页码元素数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'pageIndex' => [
                                'title' => '页参数，页码索引，表示所请求页码。',
                                'description' => '分页参数，页码索引，表示所请求页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'totalSize' => [
                                'title' => '满足查询条件的所有元素的数量。',
                                'description' => '满足查询条件的所有元素的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '当success为true，返回所有满足条件的幕布目标信息；当success为false，该值为空。',
                                'description' => '- 当success为true，返回满足查询条件的部署目标列表；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '部署目标信息。',
                                    'description' => '部署目标信息。',
                                    '$ref' => '#/components/schemas/DeploymentTarget',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"pageSize\\": 10,\\n  \\"pageIndex\\": 1,\\n  \\"totalSize\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"name\\": \\"deployment target\\",\\n      \\"namespace\\": \\"namespace\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListDeploymentTargetsResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <pageSize>10</pageSize>\\n    <pageIndex>1</pageIndex>\\n    <totalSize>1</totalSize>\\n    <data>\\n        <name>deployment target</name>\\n        <namespace>namespace</namespace>\\n    </data>\\n</ListDeploymentTargetsResponse>","errorExample":""}]',
            'title' => '获取部署目标列表',
        ],
        'UpdateDeployment' => [
            'summary' => '更新已部署作业的信息。',
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID。',
                        'description' => '作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '58718c99-3b29-4c5e-93bb-c9fc4ec6****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '需要更新的作业内容。',
                        'description' => '需要更新的作业内容。',
                        'required' => true,
                        '$ref' => '#/components/schemas/Deployment',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回更新后的作业内容；当success为false，该值为空。',
                                'description' => '- 当success为true，返回更新后的作业信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Deployment',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"deploymentId\\": \\"00000000-0000-0000-0000-000000000001\\",\\n    \\"namespace\\": \\"default-namespace\\",\\n    \\"name\\": \\"deploymentName\\",\\n    \\"engineVersion\\": \\"vvr-6.0.0-flink-1.15\\",\\n    \\"description\\": \\"this is a deployment description\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"deploymentHasChanged\\": true,\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"flinkConf\\": {\\n      \\"taskmanager.numberOfTaskSlots\\": \\"1\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"jobSummary\\": {\\n      \\"starting\\": 1,\\n      \\"running\\": 1,\\n      \\"cancelling\\": 1,\\n      \\"cancelled\\": 1,\\n      \\"finished\\": 1,\\n      \\"failed\\": 1\\n    },\\n    \\"deploymentTarget\\": {\\n      \\"mode\\": \\"\\",\\n      \\"name\\": \\"\\"\\n    },\\n    \\"executionMode\\": \\"STREAMING | BATCH\\",\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<UpdateDeploymentResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <deploymentId>00000000-0000-0000-0000-00000000****</deploymentId>\\n        <namespace>default-namespace</namespace>\\n        <name>deploymentName</name>\\n        <engineVersion>vvr-6.0.0-flink-1.15</engineVersion>\\n        <description>this is a deployment description</description>\\n        <deploymentHasChanged>true</deploymentHasChanged>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>JAR</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <jobSummary>\\n            <starting>1</starting>\\n            <running>1</running>\\n            <cancelling>1</cancelling>\\n            <cancelled>1</cancelled>\\n            <finished>1</finished>\\n            <failed>1</failed>\\n        </jobSummary>\\n        <deploymentTarget>\\n            <mode>PER_JOB</mode>\\n            <name>vvp-workload</name>\\n        </deploymentTarget>\\n        <executionMode>STREAMING</executionMode>\\n    </data>\\n</UpdateDeploymentResponse>","errorExample":""}]',
            'title' => '更新已部署作业',
        ],
        'DeleteDeployment' => [
            'summary' => '根据已部署作业ID删除已部署作业。',
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID。',
                        'description' => '作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5737ef81-d2f1-49cf-8752-30910809****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteDeploymentResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n</DeleteDeploymentResponse>","errorExample":""}]',
            'title' => '删除已部署作业',
        ],
        'ListDeployments' => [
            'summary' => '获取所有已部署作业的信息。',
            'path' => '/api/v2/namespaces/{namespace}/deployments',
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
                'operationType' => 'list',
                'abilityTreeCode' => '146799',
                'abilityTreeNodes' => [
                    'FEATUREscB9XR98',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，所请求页码的元素数量，默认值为10，最大值100。',
                        'description' => '分页参数，表示所请求页码元素数量，最大值为100，最小值为1，默认值为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'description' => '分页参数，页码索引，表示所请求页码，最小值为1，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'deployment名称。',
                        'description' => 'deployment名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vvp_ds_0522',
                    ],
                ],
                [
                    'name' => 'executionMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'deployment执行模式。',
                        'description' => 'deployment执行模式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'STREAMING',
                        'enum' => [
                            'BATCH',
                            'STREAMING',
                        ],
                    ],
                ],
                [
                    'name' => 'status',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'deployment最新作业状态。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'CANCELLED' => 'CANCELLED',
                            'FAILED' => 'FAILED',
                            'RUNNING' => 'RUNNING',
                            'TRANSITIONING' => 'TRANSITIONING',
                            'FINISHED' => 'FINISHED',
                        ],
                        'example' => 'RUNNING',
                    ],
                ],
                [
                    'name' => 'creator',
                    'in' => 'query',
                    'schema' => [
                        'description' => '创建者UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '183899668*******',
                    ],
                ],
                [
                    'name' => 'modifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '修改者UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '183899668*******',
                    ],
                ],
                [
                    'name' => 'labelKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'key',
                    ],
                ],
                [
                    'name' => 'labelValueArray',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签值，多个值使用分号隔开。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'value1,value2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'pageIndex' => [
                                'title' => '分页参数，页码索引，表示所请求页码。',
                                'description' => '分页参数，页码索引，表示所请求页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '分页参数，所请求页码的元素数量。',
                                'description' => '分页参数，表示所请求页码元素数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'totalSize' => [
                                'title' => '满足查询条件的所有元素的数量。',
                                'description' => '满足查询条件的所有元素的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '当success为true，返回满足条件的作业列表；当success为false，该值为空。',
                                'description' => '- 当success为true，返回满足查询条件的作业列表；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '作业数据。',
                                    'description' => '作业数据。',
                                    '$ref' => '#/components/schemas/Deployment',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"pageIndex\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalSize\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"deploymentId\\": \\"00000000-0000-0000-0000-000000000001\\",\\n      \\"namespace\\": \\"default-namespace\\",\\n      \\"name\\": \\"deploymentName\\",\\n      \\"engineVersion\\": \\"vvr-6.0.0-flink-1.15\\",\\n      \\"description\\": \\"this is a deployment description\\",\\n      \\"creator\\": \\"27846363877456****\\",\\n      \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n      \\"modifier\\": \\"27846363877456****\\",\\n      \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n      \\"deploymentHasChanged\\": true,\\n      \\"artifact\\": {\\n        \\"sqlArtifact\\": {\\n          \\"sqlScript\\": \\"\\",\\n          \\"additionalDependencies\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"jarArtifact\\": {\\n          \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n          \\"entryClass\\": \\"org.apapche.flink.test\\",\\n          \\"mainArgs\\": \\"\\",\\n          \\"additionalDependencies\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"pythonArtifact\\": {\\n          \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n          \\"mainArgs\\": \\"\\",\\n          \\"entryModule\\": \\"\\",\\n          \\"additionalDependencies\\": [\\n            \\"\\"\\n          ],\\n          \\"additionalPythonLibraries\\": [\\n            \\"\\"\\n          ],\\n          \\"additionalPythonArchives\\": [\\n            \\"\\"\\n          ]\\n        },\\n        \\"kind\\": \\"SQLSCRIPT\\"\\n      },\\n      \\"flinkConf\\": {\\n        \\"taskmanager.numberOfTaskSlots\\": \\"1\\"\\n      },\\n      \\"logging\\": {\\n        \\"loggingProfile\\": \\"oss\\",\\n        \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n        \\"log4jLoggers\\": [\\n          {\\n            \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n            \\"loggerLevel\\": \\"ERROR\\"\\n          }\\n        ],\\n        \\"logReservePolicy\\": {\\n          \\"openHistory\\": true,\\n          \\"expirationDays\\": 7\\n        }\\n      },\\n      \\"jobSummary\\": {\\n        \\"starting\\": 1,\\n        \\"running\\": 1,\\n        \\"cancelling\\": 1,\\n        \\"cancelled\\": 1,\\n        \\"finished\\": 1,\\n        \\"failed\\": 1\\n      },\\n      \\"deploymentTarget\\": {\\n        \\"mode\\": \\"\\",\\n        \\"name\\": \\"\\"\\n      },\\n      \\"executionMode\\": \\"STREAMING | BATCH\\",\\n      \\"streamingResourceSetting\\": {\\n        \\"resourceSettingMode\\": \\"EXPERT\\",\\n        \\"expertResourceSetting\\": {\\n          \\"jobmanagerResourceSettingSpec\\": {\\n            \\"cpu\\": 2,\\n            \\"memory\\": \\"4Gi\\"\\n          },\\n          \\"resourcePlan\\": \\"\\"\\n        },\\n        \\"basicResourceSetting\\": {\\n          \\"parallelism\\": 4,\\n          \\"jobmanagerResourceSettingSpec\\": {\\n            \\"cpu\\": 2,\\n            \\"memory\\": \\"4Gi\\"\\n          },\\n          \\"taskmanagerResourceSettingSpec\\": {\\n            \\"cpu\\": 2,\\n            \\"memory\\": \\"4Gi\\"\\n          }\\n        }\\n      },\\n      \\"batchResourceSetting\\": {\\n        \\"maxSlot\\": 10,\\n        \\"basicResourceSetting\\": {\\n          \\"parallelism\\": 4\\n        }\\n      },\\n      \\"localVariables\\": [\\n        {\\n          \\"name\\": \\"test\\",\\n          \\"value\\": \\"datagen\\"\\n        }\\n      ],\\n      \\"workspace\\": \\"edcef******b4f\\",\\n      \\"createdAt\\": \\"\\",\\n      \\"modifiedAt\\": \\"\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListDeploymentsResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <pageIndex>10</pageIndex>\\n    <pageSize>1</pageSize>\\n    <totalSize>1</totalSize>\\n    <data>\\n        <deploymentId>00000000-0000-0000-0000-00000000****</deploymentId>\\n        <namespace>default-namespace</namespace>\\n        <name>deploymentName</name>\\n        <engineVersion>vvr-6.0.0-flink-1.15</engineVersion>\\n        <description>this is a deployment description</description>\\n        <deploymentHasChanged>true</deploymentHasChanged>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>JAR</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <jobSummary>\\n            <starting>1</starting>\\n            <running>1</running>\\n            <cancelling>1</cancelling>\\n            <cancelled>1</cancelled>\\n            <finished>1</finished>\\n            <failed>1</failed>\\n        </jobSummary>\\n        <deploymentTarget>\\n            <mode>PER_JOB</mode>\\n            <name>vvp-workload</name>\\n        </deploymentTarget>\\n        <executionMode>STREAMING</executionMode>\\n    </data>\\n</ListDeploymentsResponse>","errorExample":""}]',
            'title' => '获取已部署作业列表',
        ],
        'GetDeployment' => [
            'summary' => '获取已部署作业的详细信息。',
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID。',
                        'description' => '作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '58718c99-3b29-4c5e-93bb-c9fc4ec6****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回根据ID查询的作业；当success为false，该值为空。',
                                'description' => '- 当success为true，返回查询的作业信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Deployment',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"deploymentId\\": \\"00000000-0000-0000-0000-000000000001\\",\\n    \\"namespace\\": \\"default-namespace\\",\\n    \\"name\\": \\"deploymentName\\",\\n    \\"engineVersion\\": \\"vvr-6.0.0-flink-1.15\\",\\n    \\"description\\": \\"this is a deployment description\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"deploymentHasChanged\\": true,\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"flinkConf\\": {\\n      \\"taskmanager.numberOfTaskSlots\\": \\"1\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"jobSummary\\": {\\n      \\"starting\\": 1,\\n      \\"running\\": 1,\\n      \\"cancelling\\": 1,\\n      \\"cancelled\\": 1,\\n      \\"finished\\": 1,\\n      \\"failed\\": 1\\n    },\\n    \\"deploymentTarget\\": {\\n      \\"mode\\": \\"\\",\\n      \\"name\\": \\"\\"\\n    },\\n    \\"executionMode\\": \\"STREAMING | BATCH\\",\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetDeploymentResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <deploymentId>00000000-0000-0000-0000-00000000****</deploymentId>\\n        <namespace>default-namespace</namespace>\\n        <name>deploymentName</name>\\n        <engineVersion>vvr-6.0.0-flink-1.15</engineVersion>\\n        <description>this is a deployment description</description>\\n        <deploymentHasChanged>true</deploymentHasChanged>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>SQLSCRIPT</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <jobSummary>\\n            <starting>1</starting>\\n            <running>1</running>\\n            <cancelling>1</cancelling>\\n            <cancelled>1</cancelled>\\n            <finished>1</finished>\\n            <failed>1</failed>\\n        </jobSummary>\\n        <deploymentTarget>\\n            <mode>PER_JOB</mode>\\n            <name>vvp-workload</name>\\n        </deploymentTarget>\\n        <executionMode>STREAMING</executionMode>\\n    </data>\\n</GetDeploymentResponse>","errorExample":""}]',
            'title' => '获取已部署作业',
        ],
        'CreateDeployment' => [
            'summary' => '创建一个已部署作业。',
            'path' => '/api/v2/namespaces/{namespace}/deployments',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => 'Deployment内容。',
                        'description' => 'Deployment内容。',
                        'required' => true,
                        '$ref' => '#/components/schemas/Deployment',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => '当success为true，返回创建的作业；当success为false，该值为空。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '响应数据。',
                                'description' => '- 当success为true，返回创建的作业信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/Deployment',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"deploymentId\\": \\"00000000-0000-0000-0000-000000000001\\",\\n    \\"namespace\\": \\"default-namespace\\",\\n    \\"name\\": \\"deploymentName\\",\\n    \\"engineVersion\\": \\"vvr-6.0.0-flink-1.15\\",\\n    \\"description\\": \\"this is a deployment description\\",\\n    \\"creator\\": \\"27846363877456****\\",\\n    \\"creatorName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"modifier\\": \\"27846363877456****\\",\\n    \\"modifierName\\": \\"****@streamcompute.onaliyun.com\\",\\n    \\"deploymentHasChanged\\": true,\\n    \\"artifact\\": {\\n      \\"sqlArtifact\\": {\\n        \\"sqlScript\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"jarArtifact\\": {\\n        \\"jarUri\\": \\"https://oss//bucket//test.jar\\",\\n        \\"entryClass\\": \\"org.apapche.flink.test\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"pythonArtifact\\": {\\n        \\"pythonArtifactUri\\": \\"https://oss//bucket//test.py\\",\\n        \\"mainArgs\\": \\"\\",\\n        \\"entryModule\\": \\"\\",\\n        \\"additionalDependencies\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonLibraries\\": [\\n          \\"\\"\\n        ],\\n        \\"additionalPythonArchives\\": [\\n          \\"\\"\\n        ]\\n      },\\n      \\"kind\\": \\"SQLSCRIPT\\"\\n    },\\n    \\"flinkConf\\": {\\n      \\"taskmanager.numberOfTaskSlots\\": \\"1\\"\\n    },\\n    \\"logging\\": {\\n      \\"loggingProfile\\": \\"oss\\",\\n      \\"log4j2ConfigurationTemplate\\": \\"xml格式文本\\",\\n      \\"log4jLoggers\\": [\\n        {\\n          \\"loggerName\\": \\"StdOutErrConsoleAppender\\",\\n          \\"loggerLevel\\": \\"ERROR\\"\\n        }\\n      ],\\n      \\"logReservePolicy\\": {\\n        \\"openHistory\\": true,\\n        \\"expirationDays\\": 7\\n      }\\n    },\\n    \\"jobSummary\\": {\\n      \\"starting\\": 1,\\n      \\"running\\": 1,\\n      \\"cancelling\\": 1,\\n      \\"cancelled\\": 1,\\n      \\"finished\\": 1,\\n      \\"failed\\": 1\\n    },\\n    \\"deploymentTarget\\": {\\n      \\"mode\\": \\"\\",\\n      \\"name\\": \\"\\"\\n    },\\n    \\"executionMode\\": \\"STREAMING | BATCH\\",\\n    \\"streamingResourceSetting\\": {\\n      \\"resourceSettingMode\\": \\"EXPERT\\",\\n      \\"expertResourceSetting\\": {\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"resourcePlan\\": \\"\\"\\n      },\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4,\\n        \\"jobmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        },\\n        \\"taskmanagerResourceSettingSpec\\": {\\n          \\"cpu\\": 2,\\n          \\"memory\\": \\"4Gi\\"\\n        }\\n      }\\n    },\\n    \\"batchResourceSetting\\": {\\n      \\"maxSlot\\": 10,\\n      \\"basicResourceSetting\\": {\\n        \\"parallelism\\": 4\\n      }\\n    },\\n    \\"localVariables\\": [\\n      {\\n        \\"name\\": \\"test\\",\\n        \\"value\\": \\"datagen\\"\\n      }\\n    ],\\n    \\"workspace\\": \\"edcef******b4f\\",\\n    \\"createdAt\\": \\"\\",\\n    \\"modifiedAt\\": \\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<CreateDeploymentResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <deploymentId>00000000-0000-0000-0000-00000000****</deploymentId>\\n        <namespace>default-namespace</namespace>\\n        <name>deploymentName</name>\\n        <engineVersion>vvr-6.0.0-flink-1.15</engineVersion>\\n        <description>this is a deployment description</description>\\n        <deploymentHasChanged>true</deploymentHasChanged>\\n        <artifact>\\n            <jarArtifact>\\n                <jarUri>https://oss//bucket//test.jar</jarUri>\\n                <entryClass>org.apapche.flink.test</entryClass>\\n            </jarArtifact>\\n            <kind>JAR</kind>\\n        </artifact>\\n        <logging>\\n            <loggingProfile>oss</loggingProfile>\\n            <log4j2ConfigurationTemplate>xml格式文本</log4j2ConfigurationTemplate>\\n            <log4jLoggers>\\n                <loggerName>StdOutErrConsoleAppender</loggerName>\\n                <loggerLevel>ERROR</loggerLevel>\\n            </log4jLoggers>\\n            <logReservePolicy>\\n                <openHistory>true</openHistory>\\n                <expirationDays>7</expirationDays>\\n            </logReservePolicy>\\n        </logging>\\n        <jobSummary>\\n            <starting>1</starting>\\n            <running>1</running>\\n            <cancelling>1</cancelling>\\n            <cancelled>1</cancelled>\\n            <finished>1</finished>\\n            <failed>1</failed>\\n        </jobSummary>\\n        <deploymentTarget>\\n            <mode>PER_JOB</mode>\\n            <name>vvp-workload</name>\\n        </deploymentTarget>\\n        <executionMode>STREAMING</executionMode>\\n    </data>\\n</CreateDeploymentResponse>","errorExample":""}]',
            'title' => '创建已部署作业',
        ],
        'CreateMember' => [
            'summary' => '将一个用户添加到对应项目空间下并授予对应权限。',
            'path' => '/gateway/v2/namespaces/{namespace}/members',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ca84d539167d4d',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'u-gs3rgla9-default',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '成员内容。',
                        'description' => '成员账号和权限对应关系。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Member',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'F989CA70-2925-5A94-92B7-20F5762B71C8',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回创建的成员；当success为false，该值为空。',
                                'description' => '- 当success为false，返回空值；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回授权信息。',
                                '$ref' => '#/components/schemas/Member',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"F989CA70-2925-5A94-92B7-20F5762B71C8\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"member\\": \\"user: 181319557522****\\",\\n    \\"role\\": \\"VIEWER\\"\\n  }\\n}","type":"json"}]',
            'title' => '新增成员授权',
        ],
        'DeleteMember' => [
            'summary' => '删除指定的用户权限信息。',
            'path' => '/gateway/v2/namespaces/{namespace}/members/{member}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '710d6a64d8c34d',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'member',
                    'in' => 'path',
                    'schema' => [
                        'title' => '成员名称。',
                        'description' => '成员UID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user:223769',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\"\\n}","type":"json"}]',
            'title' => '删除用户权限',
        ],
        'GetMember' => [
            'summary' => '查看用户授权详情。',
            'path' => '/gateway/v2/namespaces/{namespace}/members/{member}',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'member',
                    'in' => 'path',
                    'schema' => [
                        'title' => '成员名称。',
                        'description' => '成员名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'user:223769',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回成员信息；当success为false，该值为空。',
                                'description' => '- 当success为false，返回空值；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回授权信息。',
                                '$ref' => '#/components/schemas/Member',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"member\\": \\"user: 181319557522****\\",\\n    \\"role\\": \\"VIEWER\\"\\n  }\\n}","type":"json"}]',
            'title' => '查看成员授权信息',
        ],
        'ListMembers' => [
            'summary' => '查看特定项目下用户UID和授权的对应关系。',
            'path' => '/gateway/v2/namespaces/{namespace}/members',
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
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'pageIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'description' => '分页参数，页码索引，表示所请求页码，默认值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页参数，所请求页码的元素数量，默认值为10，最大值100。',
                        'description' => '分页参数，所请求页码的元素数量，默认值为10，最大值100。',
                        'type' => 'integer',
                        'format' => 'int32',
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
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'pageIndex' => [
                                'title' => '分页参数，页码索引，表示所请求页码。',
                                'description' => '分页参数，页码索引，表示所请求页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '分页参数，所请求页码的元素数量。',
                                'description' => '分页参数，所请求页码的元素数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'totalSize' => [
                                'title' => '满足查询条件的所有元素的数量。',
                                'description' => '满足查询条件的所有元素的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '50',
                            ],
                            'data' => [
                                'title' => '当success为true，返回所有满足条件的成员信息；当success为false，该值为空。',
                                'description' => '- 当success为false，返回空值；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回授权信息。',
                                'type' => 'array',
                                'items' => [
                                    'title' => '成员数据。',
                                    'description' => '成员数据。',
                                    '$ref' => '#/components/schemas/Member',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"pageIndex\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalSize\\": 50,\\n  \\"data\\": [\\n    {\\n      \\"member\\": \\"user: 181319557522****\\",\\n      \\"role\\": \\"VIEWER\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '查看项目下成员授权列表',
        ],
        'UpdateMember' => [
            'summary' => '更新特定项目空间下某个或某些用户的权限。',
            'path' => '/gateway/v2/namespaces/{namespace}/members',
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
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '成员信息。',
                        'description' => '成员授权信息详情。',
                        'required' => false,
                        '$ref' => '#/components/schemas/Member',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回创建的成员；当success为false，该值为空。',
                                'description' => '当success为true，返回创建的成员；当success为false，该值为空。',
                                '$ref' => '#/components/schemas/Member',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"member\\": \\"user: 181319557522****\\",\\n    \\"role\\": \\"VIEWER\\"\\n  }\\n}","type":"json"}]',
            'title' => '更新用户授权信息',
        ],
        'ValidateSqlStatement' => [
            'summary' => '校验sql作业代码。',
            'path' => '/api/v2/namespaces/{namespace}/sql-statement/validate',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '206207',
                'abilityTreeNodes' => [
                    'FEATUREscWKZGIA',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => 'Deployment内容。',
                        'description' => '待验证的sql内容。',
                        'required' => true,
                        '$ref' => '#/components/schemas/SqlStatementWithContext',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '当success为true，返回创建的作业；当success为false，该值为空。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-****-1D30-8A4F-882ED4DD5E02',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'description' => '本数据结构代表sql验证结果详情。',
                                '$ref' => '#/components/schemas/SqlStatementValidationResult',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-****-1D30-8A4F-882ED4DD5E02\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"success\\": true,\\n    \\"message\\": \\"\\",\\n    \\"validationResult\\": \\"\\",\\n    \\"errorDetails\\": {\\n      \\"lineNumber\\": \\"\\",\\n      \\"columnNumber\\": \\"\\",\\n      \\"endLineNumber\\": \\"\\",\\n      \\"endColumnNumber\\": \\"\\",\\n      \\"message\\": \\"\\",\\n      \\"invalidflinkConf\\": [\\n        \\"\\"\\n      ]\\n    }\\n  }\\n}","type":"json"}]',
            'title' => '验证sql语句',
        ],
        'GenerateResourcePlanWithFlinkConfAsync' => [
            'summary' => '提交异步生成resource plan工单，返回一个异步工单ID用于查询工单结果。',
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}/resource-plan:asyncGenerate',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'deploymentId信息，deployment唯一标识。',
                        'description' => 'deploymentId，deployment的唯一标识。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '737d0921-c5ac-47fc-9ba9-07a1e0b4****',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'description' => '生成resource plan需要的Flink configuration。',
                        'required' => false,
                        '$ref' => '#/components/schemas/FlinkConf',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'description' => '- 当success为true，返回异步操作结果信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'object',
                                'properties' => [
                                    'ticketId' => [
                                        'title' => '异步工单ID，可以使用该ID查询异步操作结果。	',
                                        'description' => '异步工单ID，用于查询异步操作结果。',
                                        'type' => 'string',
                                        'example' => 'b3dcdb25-bf36-457d-92ba-a36077e8****',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"ticketId\\": \\"b3dcdb25-bf36-457d-92ba-a36077e8****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GenerateResourcePlanWithFlinkConfAsyncResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <ticketId>b3dcdb25-bf36-457d-92ba-a36077e8****</ticketId>\\n    </data>\\n</GenerateResourcePlanWithFlinkConfAsyncResponse>","errorExample":""}]',
            'title' => '异步生成细粒度资源',
        ],
        'GetGenerateResourcePlanResult' => [
            'summary' => '根据异步工单ID获取异步生成细粒度资源结果。',
            'path' => '/api/v2/namespaces/{namespace}/deployments/tickets/{ticketId}/resource-plan:asyncGenerate',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'ticketId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '异步工单ID，可以通过提交异步操作获取。',
                        'description' => '异步工单ID，可以通过提交异步操作获取。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '88a8fc49-e090-430a-85d8-3ee8c79c****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '异步操作结果。',
                                'description' => '- 当success为true，返回异步操作结果；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/AsyncResourcePlanOperationResult',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"ticketStatus\\": \\"FINISHED\\",\\n    \\"plan\\": \\"{\\\\\\\\\\\\\\"ssgProfiles\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"default\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"cpu\\\\\\\\\\\\\\":1.13,\\\\\\\\\\\\\\"heap\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"1 gb\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"offHeap\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"32 mb\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"managed\\\\\\\\\\\\\\":{},\\\\\\\\\\\\\\"extended\\\\\\\\\\\\\\":{}}],\\\\\\\\\\\\\\"nodes\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"StreamExecTableSourceScan\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"desc\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Source: datagen_source[78]\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"profile\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"group\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"default\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"parallelism\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"maxParallelism\\\\\\\\\\\\\\":32768,\\\\\\\\\\\\\\"minParallelism\\\\\\\\\\\\\\":1}},{\\\\\\\\\\\\\\"id\\\\\\\\\\\\\\":2,\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"StreamExecSink\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"desc\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"Sink: blackhole_sink[79]\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"profile\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"group\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"default\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"parallelism\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"maxParallelism\\\\\\\\\\\\\\":32768,\\\\\\\\\\\\\\"minParallelism\\\\\\\\\\\\\\":1}}],\\\\\\\\\\\\\\"edges\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"source\\\\\\\\\\\\\\":1,\\\\\\\\\\\\\\"target\\\\\\\\\\\\\\":2,\\\\\\\\\\\\\\"mode\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"PIPELINED\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"strategy\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"FORWARD\\\\\\\\\\\\\\"}],\\\\\\\\\\\\\\"vertices\\\\\\\\\\\\\\":{\\\\\\\\\\\\\\"717c7b8afebbfb7137f6f0f99beb2a94\\\\\\\\\\\\\\":[1,2]}}\\",\\n    \\"message\\": \\"\\\\\\"\\\\\\"\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetGenerateResourcePlanResultResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <ticketStatus>FINISHED</ticketStatus>\\n        <plan>{\\\\\\"ssgProfiles\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"default\\\\\\",\\\\\\"cpu\\\\\\":1.13,\\\\\\"heap\\\\\\":\\\\\\"1 gb\\\\\\",\\\\\\"offHeap\\\\\\":\\\\\\"32 mb\\\\\\",\\\\\\"managed\\\\\\":{},\\\\\\"extended\\\\\\":{}}],\\\\\\"nodes\\\\\\":[{\\\\\\"id\\\\\\":1,\\\\\\"type\\\\\\":\\\\\\"StreamExecTableSourceScan\\\\\\",\\\\\\"desc\\\\\\":\\\\\\"Source: datagen_source[78]\\\\\\",\\\\\\"profile\\\\\\":{\\\\\\"group\\\\\\":\\\\\\"default\\\\\\",\\\\\\"parallelism\\\\\\":1,\\\\\\"maxParallelism\\\\\\":32768,\\\\\\"minParallelism\\\\\\":1}},{\\\\\\"id\\\\\\":2,\\\\\\"type\\\\\\":\\\\\\"StreamExecSink\\\\\\",\\\\\\"desc\\\\\\":\\\\\\"Sink: blackhole_sink[79]\\\\\\",\\\\\\"profile\\\\\\":{\\\\\\"group\\\\\\":\\\\\\"default\\\\\\",\\\\\\"parallelism\\\\\\":1,\\\\\\"maxParallelism\\\\\\":32768,\\\\\\"minParallelism\\\\\\":1}}],\\\\\\"edges\\\\\\":[{\\\\\\"source\\\\\\":1,\\\\\\"target\\\\\\":2,\\\\\\"mode\\\\\\":\\\\\\"PIPELINED\\\\\\",\\\\\\"strategy\\\\\\":\\\\\\"FORWARD\\\\\\"}],\\\\\\"vertices\\\\\\":{\\\\\\"717c7b8afebbfb7137f6f0f99beb2a94\\\\\\":[1,2]}}</plan>\\n        <message>\\"\\"</message>\\n    </data>\\n</GetGenerateResourcePlanResultResponse>","errorExample":""}]',
            'title' => '获取异步生成细粒度资源结果',
        ],
        'FlinkApiProxy' => [
            'summary' => '代理Flink请求，获取请求结果。',
            'path' => '/flink-ui/v2/proxy',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'query',
                    'schema' => [
                        'title' => '项目空间名称。',
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'resourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型，支持以下类型：'."\n"
                            .'-jobs',
                        'description' => '资源类型，支持以下类型：'."\n"
                            .'<ul>'."\n"
                            .'<li>'."\n"
                            .'jobs'."\n"
                            .'</li>'."\n"
                            .'<li>'."\n"
                            .'sessionclusters'."\n"
                            .'</li>'."\n"
                            .'</ul>',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'jobs',
                    ],
                ],
                [
                    'name' => 'resourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源ID。',
                        'description' => '资源ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5a27a3aa-c5b9-4dc1-8c86-be57d2d6****',
                    ],
                ],
                [
                    'name' => 'flinkApiPath',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'flink-ui路径。',
                        'description' => 'flink-ui路径。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '/jobs/4df35f8e54554b23bf7dcd38a151****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => 'Flink请求的返回值。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'httpCode' => [
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'success' => [
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回代理请求结果；当success为false，该值为空。',
                                'description' => '- 当success为true，返回代理请求结果；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                'type' => 'string',
                                'example' => '{ "jobs": [ { "jid": "4df35f8e54554b23bf7dcd38a151****", "name": "69d001d5-419a-4bfc-9c2e-849cacd3****", "state": "RUNNING", "start-time": 1659154942068, "end-time": -1, "duration": 188161756, "last-modification": 1659154968305, "tasks": { "total": 2, "created": 0, "scheduled": 0, "deploying": 0, "running": 2, "finished": 0, "canceling": 0, "canceled": 0, "failed": 0, "reconciling": 0, "initializing": 0 } } ] }',
                            ],
                        ],
                        'example' => '{   "jobs": [     {       "jid": "4df35f8e54554b23bf7dcd38a15135f4",       "name": "69d001d5-419a-4bfc-9c2e-849cacd31658",       "state": "RUNNING",       "start-time": 1659154942068,       "end-time": -1,       "duration": 188161756,       "last-modification": 1659154968305,       "tasks": {         "total": 2,         "created": 0,         "scheduled": 0,         "deploying": 0,         "running": 2,         "finished": 0,         "canceling": 0,         "canceled": 0,         "failed": 0,         "reconciling": 0,         "initializing": 0       }     }   ] }',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"httpCode\\": 200,\\n  \\"success\\": true,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": \\"{ \\\\\\"jobs\\\\\\": [ { \\\\\\"jid\\\\\\": \\\\\\"4df35f8e54554b23bf7dcd38a151****\\\\\\", \\\\\\"name\\\\\\": \\\\\\"69d001d5-419a-4bfc-9c2e-849cacd3****\\\\\\", \\\\\\"state\\\\\\": \\\\\\"RUNNING\\\\\\", \\\\\\"start-time\\\\\\": 1659154942068, \\\\\\"end-time\\\\\\": -1, \\\\\\"duration\\\\\\": 188161756, \\\\\\"last-modification\\\\\\": 1659154968305, \\\\\\"tasks\\\\\\": { \\\\\\"total\\\\\\": 2, \\\\\\"created\\\\\\": 0, \\\\\\"scheduled\\\\\\": 0, \\\\\\"deploying\\\\\\": 0, \\\\\\"running\\\\\\": 2, \\\\\\"finished\\\\\\": 0, \\\\\\"canceling\\\\\\": 0, \\\\\\"canceled\\\\\\": 0, \\\\\\"failed\\\\\\": 0, \\\\\\"reconciling\\\\\\": 0, \\\\\\"initializing\\\\\\": 0 } } ] }\\"\\n}","errorExample":""},{"type":"xml","example":"<FlinkApiProxyResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <httpCode>200</httpCode>\\n    <success>true</success>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>{ \\"jobs\\": [ { \\"jid\\": \\"4df35f8e54554b23bf7dcd38a151****\\", \\"name\\": \\"69d001d5-419a-4bfc-9c2e-849cacd3****\\", \\"state\\": \\"RUNNING\\", \\"start-time\\": 1659154942068, \\"end-time\\": -1, \\"duration\\": 188161756, \\"last-modification\\": 1659154968305, \\"tasks\\": { \\"total\\": 2, \\"created\\": 0, \\"scheduled\\": 0, \\"deploying\\": 0, \\"running\\": 2, \\"finished\\": 0, \\"canceling\\": 0, \\"canceled\\": 0, \\"failed\\": 0, \\"reconciling\\": 0, \\"initializing\\": 0 } } ] }</data>\\n</FlinkApiProxyResponse>","errorExample":""}]',
            'title' => 'Flink请求代理',
        ],
        'ListEngineVersionMetadata' => [
            'summary' => '获取系统支持的引擎版本列表。',
            'path' => '/api/v2/engine-version-meta.json',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'title' => '工作空间ID。',
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '固定值200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误码；'."\n"
                                    .' '."\n"
                                    .'- 当success为true，返回空值。 ',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '- 当success为false，返回业务错误信息；'."\n"
                                    ."\n"
                                    .'- 当success为true，返回空值。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'title' => '当success为true，返回系统支持的引擎版本总体信息；当success为false，该值为空。',
                                'description' => '- 当success为true，返回系统支持的引擎版本总体信息；'."\n"
                                    ."\n"
                                    .'- 当success为false，返回空值。',
                                '$ref' => '#/components/schemas/EngineVersionMetadataIndex',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"defaultEngineVersion\\": \\"vvr-6.0.1-flink-1.15\\",\\n    \\"engineVersionMetadata\\": [\\n      {\\n        \\"engineVersion\\": \\"vvr-6.0.0-flink-1.15\\",\\n        \\"status\\": \\"STABLE\\",\\n        \\"features\\": {\\n          \\"useForSqlDeployments\\": true,\\n          \\"supportNativeSavepoint\\": true\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListEngineVersionMetadataResponse>\\n    <requestId>CBC799F0-AS7S-1D30-8A4F-882ED4DD****</requestId>\\n    <success>true</success>\\n    <httpCode>200</httpCode>\\n    <errorCode>\\"\\"</errorCode>\\n    <errorMessage>\\"\\"</errorMessage>\\n    <data>\\n        <defaultEngineVersion>vvr-6.0.1-flink-1.15</defaultEngineVersion>\\n        <engineVersionMetadata>\\n            <engineVersion>vvr-6.0.0-flink-1.15</engineVersion>\\n            <status>STABLE</status>\\n            <features>\\n                <useForSqlDeployments>true</useForSqlDeployments>\\n                <supportNativeSavepoint>true</supportNativeSavepoint>\\n            </features>\\n        </engineVersionMetadata>\\n    </data>\\n</ListEngineVersionMetadataResponse>","errorExample":""}]',
            'title' => '获取引擎版本列表',
        ],
        'GetLatestJobStartLog' => [
            'summary' => '获取作业实例最新的启动日志。',
            'path' => '/api/v2/namespaces/{namespace}/deployments/{deploymentId}/latest_jobmanager_start_log',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '206199',
                'abilityTreeNodes' => [
                    'FEATUREscIA7S9T',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'workspace',
                    'in' => 'header',
                    'schema' => [
                        'description' => '工作空间ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'a14bd5d90a****',
                    ],
                ],
                [
                    'name' => 'namespace',
                    'in' => 'path',
                    'schema' => [
                        'description' => '项目空间名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'default-namespace',
                    ],
                ],
                [
                    'name' => 'deploymentId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '已部署作业ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '58718c99-3b29-4c5e-93bb-c9fc4ec6****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '响应数据。',
                        'description' => '响应数据。',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CBC799F0-AS7S-1D30-8A4F-882ED4DD****',
                            ],
                            'success' => [
                                'title' => '表示业务请求是否成功。',
                                'description' => '表示业务请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'httpCode' => [
                                'title' => '业务状态码，统一为200；使用success表示业务请求是否成功。',
                                'description' => '业务状态码，统一为200。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'errorCode' => [
                                'title' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'description' => '当success为false时，该值不为空，表示业务错误码；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'errorMessage' => [
                                'title' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'description' => '当success为false时，该值不为空，表示业务错误信息；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'description' => '当success为false时，该值不为空，表示最新作业运行日志；当success为true时，该值为空。',
                                'type' => 'string',
                                'example' => '"[main] INFO  org.apache.flink.runtime.entrypoint.ClusterEntrypoint        [] - --------------------------------------------------------------------------------\\n2024-05-22 11:46:39,871 [main] INFO  org.apache.flink.runtime.entrypoint.ClusterEntrypoint"',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"CBC799F0-AS7S-1D30-8A4F-882ED4DD****\\",\\n  \\"success\\": true,\\n  \\"httpCode\\": 200,\\n  \\"errorCode\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"errorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": \\"\\\\\\"[main] INFO  org.apache.flink.runtime.entrypoint.ClusterEntrypoint        [] - --------------------------------------------------------------------------------\\\\\\\\n2024-05-22 11:46:39,871 [main] INFO  org.apache.flink.runtime.entrypoint.ClusterEntrypoint\\\\\\"\\"\\n}","type":"json"}]',
            'title' => '获取最新作业实例的启动日志',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'ververica.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'ververica.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'ververica.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'ververica.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'ververica.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ververica.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'ververica.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'ververica.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'ververica.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'ververica.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'ververica.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'ververica.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'ververica.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'ververica.us-east-1.aliyuncs.com',
        ],
    ],
];
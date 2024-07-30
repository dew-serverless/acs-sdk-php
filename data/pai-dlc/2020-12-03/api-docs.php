<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'pai-dlc',
        'version' => '2020-12-03',
    ],
    'directories' => [
        [
            'id' => 169743,
            'title' => '任务',
            'type' => 'directory',
            'children' => [
                'CreateJob',
                'DeleteJob',
                'UpdateJob',
                'StopJob',
                'ListJobs',
                'GetJob',
                'GetJobSanityCheckResult',
                'ListJobSanityCheckResults',
                'GetPodLogs',
                'GetPodEvents',
                'GetJobMetrics',
                'GetJobEvents',
                'ListEcsSpecs',
                'GetWebTerminal',
                'GetToken',
            ],
        ],
        [
            'id' => 169755,
            'title' => 'Tensorboard',
            'type' => 'directory',
            'children' => [
                'CreateTensorboard',
                'DeleteTensorboard',
                'StartTensorboard',
                'UpdateTensorboard',
                'StopTensorboard',
                'ListTensorboards',
                'GetTensorboard',
                'GetTensorboardSharedUrl',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'AIMasterMessage' => [
                'title' => 'AIMaster消息',
                'description' => 'AIMaster消息内容',
                'type' => 'object',
                'properties' => [
                    'MessageEvent' => [
                        'title' => '消息事件',
                        'type' => 'string',
                    ],
                    'MessageContent' => [
                        'title' => '消息内容',
                        'type' => 'string',
                    ],
                    'Extended' => [
                        'title' => '消息扩展内容',
                        'type' => 'string',
                    ],
                    'JobRestartCount' => [
                        'title' => '作业重启次数',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                    ],
                    'RestartType' => [
                        'title' => '重启类型',
                        'type' => 'string',
                    ],
                    'MessageVersion' => [
                        'title' => '消息版本号',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                ],
            ],
            'AliyunAccounts' => [
                'title' => 'A short description of struct',
                'description' => 'aliyunaccounts',
                'type' => 'object',
                'properties' => [
                    'AliyunUid' => [
                        'title' => 'Aliyun账号的UID',
                        'type' => 'string',
                    ],
                    'EmployeeId' => [
                        'title' => '弹内用户的工号',
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'title' => '这条记录的创建时间',
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'title' => '这条记录的上次修改时间',
                        'type' => 'string',
                    ],
                ],
            ],
            'CodeSourceItem' => [
                'title' => '代码源配置的内容',
                'description' => '一个CodeSource的描述，用于ListCodeSources',
                'type' => 'object',
                'properties' => [
                    'CodeSourceId' => [
                        'title' => '代码源ID',
                        'description' => '代码源ID',
                        'type' => 'string',
                        'example' => 'code-20210111103721-********',
                    ],
                    'DisplayName' => [
                        'title' => '代码源配置的名字',
                        'description' => '代码源名称',
                        'type' => 'string',
                        'example' => 'MyCodeSourceName1',
                    ],
                    'Description' => [
                        'title' => '代码源详细描述',
                        'description' => '代码源详细文字描述',
                        'type' => 'string',
                        'example' => 'code source of dlc examples',
                    ],
                    'CodeRepo' => [
                        'title' => '代码仓库地址',
                        'description' => '代码仓库地址',
                        'type' => 'string',
                        'example' => 'https://code.aliyun.com/pai-dlc/examples.git',
                    ],
                    'CodeBranch' => [
                        'title' => '代码分支',
                        'description' => '代码仓库分支；在CreateJob时可以被覆盖。',
                        'type' => 'string',
                        'example' => 'master',
                    ],
                    'CodeCommit' => [
                        'title' => '代码Commit ID',
                        'description' => '代码CommitID，调用CreateJob时可以覆盖。',
                        'type' => 'string',
                        'example' => '44da109b59f8596152987eaa8f3b2487bb72ea63',
                    ],
                    'CodeRepoUserName' => [
                        'title' => '访问代码仓库的用户名',
                        'description' => '代码仓库访问的用户名，用于访问私有仓库。',
                        'type' => 'string',
                        'example' => 'user',
                    ],
                    'CodeRepoAccessToken' => [
                        'title' => '访问代码仓库所用的AccessToken',
                        'description' => '访问代码仓库的AccessToken。',
                        'type' => 'string',
                        'example' => 'xxxx',
                    ],
                    'UserId' => [
                        'title' => '代码源配置的用户ID',
                        'description' => '代码源创建者的阿里云用户UID。',
                        'type' => 'string',
                        'example' => '115729017166****',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-18T12:52:15Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间',
                        'description' => '修改时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-18T12:52:15Z',
                    ],
                ],
            ],
            'ContainerSpec' => [
                'title' => 'ContainerSpec',
                'description' => '容器参数',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => '容器名称',
                        'description' => '容器名称',
                        'type' => 'string',
                        'example' => 'data-init',
                    ],
                    'Image' => [
                        'title' => '容器镜像地址',
                        'description' => '容器镜像地址',
                        'type' => 'string',
                        'example' => 'registry.cn-hangzhou.aliyuncs.com/pai-dlc/curl:v1.0.0',
                    ],
                    'Command' => [
                        'title' => '用户命令',
                        'description' => '用户命令',
                        'type' => 'array',
                        'items' => [
                            'description' => '命令行',
                            'type' => 'string',
                            'example' => 'curl www.aliyun.com',
                        ],
                    ],
                    'Args' => [
                        'title' => '命令参数',
                        'description' => '命令参数',
                        'type' => 'array',
                        'items' => [
                            'description' => '参数',
                            'type' => 'string',
                        ],
                    ],
                    'WorkingDir' => [
                        'title' => '容器内工作目录',
                        'description' => '容器内工作目录',
                        'type' => 'string',
                        'example' => '/root',
                    ],
                    'Env' => [
                        'title' => '环境变量',
                        'description' => '环境变量',
                        'type' => 'array',
                        'items' => [
                            'description' => '环境变量列表',
                            '$ref' => '#/components/schemas/EnvVar',
                        ],
                    ],
                    'Resources' => [
                        'title' => '容器资源',
                        'description' => '容器资源',
                        '$ref' => '#/components/schemas/ResourceRequirements',
                    ],
                ],
            ],
            'DataSourceItem' => [
                'title' => '数据源详情',
                'description' => '数据源详情',
                'type' => 'object',
                'properties' => [
                    'DataSourceType' => [
                        'title' => '数据源类型',
                        'description' => '数据源类型，仅支持nas；其他类型正在添加中，敬请期待。',
                        'type' => 'string',
                        'example' => 'nas',
                    ],
                    'DataSourceId' => [
                        'title' => '数据源Id',
                        'description' => '数据源ID',
                        'type' => 'string',
                        'example' => 'data-20210114104214-xxxxxxx',
                    ],
                    'DisplayName' => [
                        'title' => '数据源显示名称',
                        'description' => '数据源名称',
                        'type' => 'string',
                        'example' => 'nas-data',
                    ],
                    'Description' => [
                        'title' => '数据源描述',
                        'description' => '数据源详细描述',
                        'type' => 'string',
                        'example' => 'data source of dlc examples',
                    ],
                    'FileSystemId' => [
                        'title' => '阿里云NAS文件系统Id',
                        'description' => '阿里云NAS文件系统ID，请参考[阿里云文档](https://help.aliyun.com/document_detail/185212.html)。',
                        'type' => 'string',
                        'example' => '1ca404****',
                    ],
                    'Path' => [
                        'title' => '阿里云OSS文件系统路径',
                        'description' => '阿里云OSS文件系统路径',
                        'type' => 'string',
                        'example' => 'oss://mybucket/path/to/dir',
                    ],
                    'Endpoint' => [
                        'title' => '阿里云OSS文件系统服务端点',
                        'description' => '阿里云OSS文件系统服务端点',
                        'type' => 'string',
                        'example' => 'oss-cn-beijing-internal.aliyuncs.com',
                    ],
                    'Options' => [
                        'title' => '阿里云OSS文件系统配置选项',
                        'description' => '阿里云OSS文件系统配置选项',
                        'type' => 'string',
                        'example' => '{"key": "value"}',
                    ],
                    'MountPath' => [
                        'title' => '本地挂载目录',
                        'description' => '挂载到任务运行时的容器的本地路径',
                        'type' => 'string',
                        'example' => '/root/data/',
                    ],
                    'UserId' => [
                        'title' => '创建人Id',
                        'description' => '数据源创建者的阿里云用户ID',
                        'type' => 'string',
                        'example' => '123456789',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间（UTC）',
                        'description' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:00Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间（UTC）',
                        'description' => '最后修改时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:00Z',
                    ],
                ],
            ],
            'DebuggerConfig' => [
                'title' => 'debugger参数配置项',
                'description' => 'debug配置参数项',
                'type' => 'object',
                'properties' => [
                    'DebuggerConfigId' => [
                        'title' => '系统生成的debug config唯一ID',
                        'type' => 'string',
                        'example' => 'dc-vf9lowjt3pso',
                    ],
                    'DisplayName' => [
                        'title' => '模板配置项名称',
                        'type' => 'string',
                        'example' => 'Pytorch Experiment Config',
                    ],
                    'Description' => [
                        'title' => '配置项描述',
                        'type' => 'string',
                        'example' => '这是一个Pytorch的基础配置模板',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:00Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:00Z',
                    ],
                    'Content' => [
                        'title' => '配置项细节，json结构',
                        'type' => 'string',
                        'example' => '{\\"description\\":\\"这是一个新的pytorchjob模板\\"}',
                    ],
                ],
            ],
            'DebuggerJob' => [
                'title' => 'debugger分析任务',
                'description' => 'debug分析任务',
                'type' => 'object',
                'properties' => [
                    'DebuggerJobId' => [
                        'title' => 'debugger分析作业ID',
                        'type' => 'string',
                        'example' => 'dlc20210126170216-mtl37ge7gkvdz',
                    ],
                    'DisplayName' => [
                        'title' => '作业显示名',
                        'type' => 'string',
                        'example' => 'dlc debugger test',
                    ],
                    'UserId' => [
                        'title' => '用户ID',
                        'type' => 'string',
                        'example' => '12344556',
                    ],
                    'Status' => [
                        'title' => '作业运行状态',
                        'type' => 'string',
                        'example' => 'Running',
                    ],
                    'WorkspaceId' => [
                        'title' => '作业所属的运行工作空间',
                        'type' => 'string',
                        'example' => 'workspace01',
                    ],
                    'Duration' => [
                        'title' => '作业运行的时长（单位秒）',
                        'type' => 'string',
                        'example' => '2932',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:00Z',
                    ],
                    'GmtSubmittedTime' => [
                        'title' => '提交时间（UTC）',
                        'type' => 'string',
                    ],
                    'GmtRunningTime' => [
                        'title' => '运行开始时间（UTC）',
                        'type' => 'string',
                    ],
                    'GmtSucceedTime' => [
                        'title' => '成功结束时间（UTC）',
                        'type' => 'string',
                    ],
                    'GmtStoppedTime' => [
                        'title' => '结束时间（UTC）',
                        'type' => 'string',
                    ],
                    'GmtFailedTime' => [
                        'title' => '失败时间（UTC）',
                        'type' => 'string',
                    ],
                    'GmtFinishTime' => [
                        'title' => '任务完成时间（UTC）',
                        'type' => 'string',
                    ],
                    'WorkspaceName' => [
                        'title' => '作业所属的运行工作空间名称',
                        'type' => 'string',
                        'example' => 'public',
                    ],
                ],
            ],
            'DebuggerJobIssue' => [
                'title' => 'debugger过程中触发的event',
                'description' => 'debug过程中触发的event',
                'type' => 'object',
                'properties' => [
                    'JobDebuggerIssueId' => [
                        'title' => 'event的全局唯一ID',
                        'type' => 'string',
                        'example' => 'de-826ca1bcfba30',
                    ],
                    'JobId' => [
                        'title' => '作业ID',
                        'type' => 'string',
                        'example' => 'dlc-20210126170216-mtl37ge7gkvdz',
                    ],
                    'RuleName' => [
                        'title' => '规则名称',
                        'type' => 'string',
                        'example' => 'ProfileReport',
                    ],
                    'ReasonCode' => [
                        'title' => '规则触发原因的编码',
                        'type' => 'string',
                        'example' => '1002300',
                    ],
                    'ReasonMessage' => [
                        'title' => '规则触发的原因',
                        'type' => 'string',
                        'example' => 'GPU利用率低',
                    ],
                    'DebuggerJobIssue' => [
                        'title' => '规则报告的具体json描述',
                        'type' => 'string',
                        'example' => '{"Name": "CPUBottleneck",  "Triggered": 10, "Violations": 2,  "Details": "{}"}',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:00Z',
                    ],
                ],
            ],
            'DebuggerResult' => [
                'title' => 'debugger评估报告',
                'description' => 'debug生成的评估报告',
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'title' => '作业ID',
                        'type' => 'string',
                        'example' => 'dlc-20210126170216-mtl37ge7gkvdz',
                    ],
                    'JobDisplayName' => [
                        'title' => '作业显示名',
                        'type' => 'string',
                        'example' => 'dlc debugger test',
                    ],
                    'JobUserId' => [
                        'title' => '用户ID',
                        'type' => 'string',
                        'example' => '12344556',
                    ],
                    'DebuggerJobStatus' => [
                        'title' => 'debugger job运行状态描述',
                        'type' => 'string',
                        'example' => '{"Running": 1, "Failed": 1, "Succeeded": 2}',
                    ],
                    'DebuggerReportURL' => [
                        'title' => '报告文件下载地址',
                        'type' => 'string',
                        'example' => 'http://xxx.com/debug/report/download/new_xxxx.html',
                    ],
                    'DebuggerJobIssues' => [
                        'title' => '规则报告细节信息',
                        'type' => 'string',
                        'example' => '{ "ProfileReport": { "Name": "CPUBottleneck","Triggered": 10,"Violations": 2,"Details": "{}"}, "LowCPU": { "Name": "CPUBottleneck","Triggered": 10,"Violations": 2,"Details": "{}"}}',
                    ],
                    'DebuggerConfigContent' => [
                        'title' => '配置项细节，json结构',
                        'type' => 'string',
                        'example' => '{\\"description\\":\\"这是一个新的pytorchjob模板\\"}',
                    ],
                ],
            ],
            'EcsSpec' => [
                'title' => 'A short description of struct',
                'description' => 'ECS规格',
                'type' => 'object',
                'properties' => [
                    'InstanceType' => [
                        'title' => '规格类型',
                        'description' => '规格类型',
                        'type' => 'string',
                        'example' => 'ecs.gn6e-c12g1.3xlarge',
                    ],
                    'AcceleratorType' => [
                        'title' => '加速器类型',
                        'description' => '加速器类型',
                        'type' => 'string',
                        'example' => 'GPU',
                    ],
                    'Cpu' => [
                        'title' => 'cpu数量',
                        'description' => 'cpu数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '12',
                    ],
                    'Gpu' => [
                        'title' => 'gpu数量',
                        'description' => 'gpu数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'GpuType' => [
                        'title' => 'gpu类型',
                        'description' => 'gpu类型',
                        'type' => 'string',
                        'example' => 'NVIDIA v100',
                    ],
                    'Memory' => [
                        'title' => 'Memory数量',
                        'description' => '内存大小，单位为Mi或Gi',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '92',
                    ],
                    'IsAvailable' => [
                        'title' => '是否有库存',
                        'description' => '是否有库存',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'ResourceType' => [
                        'title' => '资源类型，可选值：ECS, Lingjun',
                        'description' => '资源类型，可选值：ECS, Lingjun',
                        'type' => 'string',
                        'example' => 'ECS',
                    ],
                    'DefaultGPUDriver' => [
                        'title' => '默认GPU驱动版本',
                        'description' => '默认GPU驱动版本',
                        'type' => 'string',
                        'example' => '470.199.02',
                    ],
                    'SupportedGPUDrivers' => [
                        'title' => '支持的GPU驱动版本列表',
                        'description' => '支持的GPU驱动版本列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => '["470.199.02", "535.54.03"]',
                        ],
                    ],
                    'SpotStockStatus' => [
                        'title' => '抢占式实例库存状态',
                        'description' => '抢占式实例库存状态',
                        'type' => 'string',
                        'example' => 'WithStock',
                    ],
                    'NonProtectSpotDiscount' => [
                        'title' => '抢占式实例当前价格折扣',
                        'description' => '抢占式实例当前价格折扣',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '0.1',
                    ],
                    'PaymentTypes' => [
                        'title' => '支持的付费类型列表',
                        'description' => '支持的付费类型列表',
                        'type' => 'array',
                        'items' => [
                            'type' => 'string',
                            'example' => '["Spot","PostPaid"]',
                        ],
                    ],
                ],
            ],
            'EnvVar' => [
                'title' => 'EnvVar',
                'description' => 'Definition of Environment variable',
                'type' => 'object',
                'properties' => [
                    'Name' => [
                        'title' => '环境变量名称',
                        'description' => '环境变量名称',
                        'type' => 'string',
                        'example' => 'ENABLE_DEBUG',
                    ],
                    'Value' => [
                        'title' => '环境变量值',
                        'description' => '环境变量值',
                        'type' => 'string',
                        'example' => 'true',
                    ],
                ],
            ],
            'EventInfo' => [
                'title' => 'A short description of struct',
                'description' => 'DLC任务的事件信息',
                'type' => 'object',
                'properties' => [
                    'PodId' => [
                        'title' => '事件所属的Pod的Id',
                        'type' => 'string',
                    ],
                    'PodUid' => [
                        'title' => '事件所属的Pod的Uid',
                        'type' => 'string',
                    ],
                    'Id' => [
                        'title' => '事件的ID信息，用于获取相关上下文',
                        'type' => 'string',
                    ],
                    'Time' => [
                        'title' => '事件的时间戳信息，该时间为UTC时间',
                        'type' => 'string',
                    ],
                    'Content' => [
                        'title' => '事件的文本内容',
                        'type' => 'string',
                    ],
                ],
            ],
            'ExtraPodSpec' => [
                'title' => 'ExtraPodSpec',
                'description' => 'Definition of ExtraPodSpec',
                'type' => 'object',
                'properties' => [
                    'SideCarContainers' => [
                        'title' => '伴随容器',
                        'description' => '伴随容器',
                        'type' => 'array',
                        'items' => [
                            'description' => '容器配置',
                            '$ref' => '#/components/schemas/ContainerSpec',
                        ],
                    ],
                    'InitContainers' => [
                        'title' => '初始化容器',
                        'description' => '初始化容器',
                        'type' => 'array',
                        'items' => [
                            'description' => '容器配置',
                            '$ref' => '#/components/schemas/ContainerSpec',
                        ],
                    ],
                    'PodLabels' => [
                        'title' => 'Pod标签',
                        'description' => 'Pod标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                        ],
                    ],
                    'PodAnnotations' => [
                        'title' => 'Pod注解',
                        'description' => 'Pod注解',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '注解',
                            'type' => 'string',
                        ],
                    ],
                    'SharedVolumeMountPaths' => [
                        'title' => '容器间共享的本地目录',
                        'description' => '容器间共享的本地目录',
                        'type' => 'array',
                        'items' => [
                            'description' => '共享的本地目录',
                            'type' => 'string',
                            'example' => '/root/share/',
                        ],
                    ],
                ],
            ],
            'FreeResourceClusterControlItem' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'FreeResourceClusterControlId' => [
                        'title' => '超卖资源集群控制Id',
                        'type' => 'string',
                        'example' => 'frcc-whateversth',
                    ],
                    'RegionID' => [
                        'title' => '区域id',
                        'type' => 'string',
                    ],
                    'ClusterID' => [
                        'title' => '集群ID',
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'title' => '集群名',
                        'type' => 'string',
                    ],
                    'EnableFreeResource' => [
                        'title' => '是否打开集群超卖',
                        'type' => 'boolean',
                    ],
                    'CrossClusters' => [
                        'title' => '是否允许跨集群超卖',
                        'type' => 'boolean',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间',
                        'type' => 'string',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间',
                        'type' => 'string',
                    ],
                ],
            ],
            'FreeResourceDetail' => [
                'title' => 'A short description of struct',
                'description' => '超卖资源细节',
                'type' => 'object',
                'properties' => [
                    'ResourceType' => [
                        'title' => '资源类型',
                        'type' => 'string',
                        'example' => 'CPU',
                    ],
                    'Amount' => [
                        'title' => '资源数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '2',
                    ],
                ],
            ],
            'FreeResourceItem' => [
                'title' => '空闲资源信息',
                'type' => 'object',
                'properties' => [
                    'FreeResourceId' => [
                        'title' => '空闲资源Id',
                        'type' => 'string',
                        'example' => 'freeres-whateversth',
                    ],
                    'RegionID' => [
                        'title' => '域Id',
                        'type' => 'string',
                        'example' => 'inner',
                    ],
                    'ClusterID' => [
                        'title' => '集群Id',
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'title' => '集群名',
                        'type' => 'string',
                    ],
                    'ResourceType' => [
                        'title' => '资源类型',
                        'type' => 'string',
                        'example' => 'cpu',
                    ],
                    'AvailableNumber' => [
                        'title' => '资源数量',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '2',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'example' => '2021-01-18T12:52:15Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间',
                        'type' => 'string',
                        'example' => '2021-01-18T12:52:15Z',
                    ],
                ],
            ],
            'GPUDetail' => [
                'title' => 'A short description of struct',
                'description' => 'GPU详情',
                'type' => 'object',
                'properties' => [
                    'GPU' => [
                        'title' => 'GPU卡数',
                        'type' => 'string',
                    ],
                    'GPUType' => [
                        'title' => 'GPU卡型',
                        'type' => 'string',
                        'example' => 'Tesla-V100-32G',
                    ],
                    'GPUTypeFullName' => [
                        'title' => 'GPU卡型全名',
                        'type' => 'string',
                        'example' => 'nvidia.com/gpu-tesla-v100-sxm2-16gb',
                    ],
                ],
            ],
            'ImageConfig' => [
                'title' => 'A short description of struct',
                'description' => '私有镜像信息配置',
                'type' => 'object',
                'properties' => [
                    'DockerRegistry' => [
                        'title' => '镜像仓库地址',
                        'description' => '镜像仓库地址',
                        'type' => 'string',
                        'example' => 'docker****registry.com',
                    ],
                    'Username' => [
                        'title' => '镜像仓库用户名',
                        'description' => '镜像仓库用户名',
                        'type' => 'string',
                        'example' => ' username',
                    ],
                    'Password' => [
                        'title' => '镜像仓库密码',
                        'description' => '镜像仓库密码',
                        'type' => 'string',
                        'example' => 'password',
                    ],
                    'Auth' => [
                        'title' => '镜像仓库认证信息',
                        'description' => '镜像仓库认证信息',
                        'type' => 'string',
                    ],
                ],
            ],
            'ImageItem' => [
                'title' => 'Docker image详情',
                'description' => 'Docker Image详情',
                'type' => 'object',
                'properties' => [
                    'ImageTag' => [
                        'title' => '镜像Tag',
                        'description' => 'Docker镜像的Tag',
                        'type' => 'string',
                        'example' => 'tensorflow-training:2.3-cpu-py36-ubuntu18.04',
                    ],
                    'ImageUrl' => [
                        'title' => '镜像地址',
                        'description' => '镜像URL地址',
                        'type' => 'string',
                        'example' => 'registry.cn-beijing.aliyuncs.com/pai-dlc/tensorflow-training:2.3-cpu-py36-ubuntu18.04',
                    ],
                    'ImageUrlVpc' => [
                        'title' => '镜像vpc地址',
                        'description' => '镜像URL的阿里云VPC地址，访问速度更快。',
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-beijing.aliyuncs.com/pai-dlc/tensorflow-training:2.3-cpu-py36-ubuntu18.04',
                    ],
                    'ImageProviderType' => [
                        'title' => '镜像类型',
                        'description' => '镜像类型，枚举值：'."\n"
                            ."\n"
                            .'- Community: 社区'."\n"
                            .'- PAI: PAI平台优化',
                        'type' => 'string',
                        'example' => 'Community',
                    ],
                    'AcceleratorType' => [
                        'title' => '加速器类型',
                        'description' => '镜像加速器类型，枚举型：'."\n"
                            ."\n"
                            .'- cpu'."\n"
                            .'- gpu',
                        'type' => 'string',
                        'example' => 'gpu',
                    ],
                    'Framework' => [
                        'title' => '镜像包含的框架类型',
                        'description' => '镜像封装的计算框架，枚举型：'."\n"
                            ."\n"
                            .'- TFJob'."\n"
                            .'- PyTorchJob',
                        'type' => 'string',
                        'example' => 'PyTorchJob',
                    ],
                    'AuthorId' => [
                        'title' => '镜像作者',
                        'description' => '镜像作者',
                        'type' => 'string',
                        'example' => 'ken',
                    ],
                ],
            ],
            'JobDebuggerConfig' => [
                'title' => 'job的debugger配置信息',
                'type' => 'object',
                'properties' => [
                    'DebuggerConfigId' => [
                        'title' => 'debugger配置项ID',
                        'type' => 'string',
                    ],
                    'JobId' => [
                        'title' => '作业ID',
                        'type' => 'string',
                    ],
                    'DebuggerConfigContent' => [
                        'title' => 'debugger配置信息',
                        'type' => 'string',
                    ],
                    'GmtCreateTime' => [
                        'title' => 'debugger配置创建的时间',
                        'type' => 'string',
                    ],
                ],
            ],
            'JobElasticSpec' => [
                'title' => '弹性任务参数',
                'type' => 'object',
                'properties' => [
                    'EnableElasticTraining' => [
                        'title' => '打开弹性训练',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'MinParallelism' => [
                        'title' => '最小并行度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'MaxParallelism' => [
                        'title' => '最大并行度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '8',
                    ],
                    'AIMasterType' => [
                        'title' => 'aimaster角色使用的资源规格',
                        'type' => 'string',
                    ],
                    'AIMasterDockerImage' => [
                        'title' => 'aimaster docker镜像',
                        'type' => 'string',
                    ],
                    'EnablePsJobElasticWorker' => [
                        'title' => '是否开启弹性Worker对于PS作业',
                        'type' => 'boolean',
                    ],
                    'EnableAIMaster' => [
                        'title' => '是否打开AIMaster',
                        'type' => 'boolean',
                    ],
                    'EnablePsResourceEstimate' => [
                        'title' => '是否打开PS资源预估',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'EnablePsJobElasticPS' => [
                        'title' => '是否打开弹性PS功能',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'PSMinParallelism' => [
                        'title' => 'PS最小并行度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '4',
                    ],
                    'PSMaxParallelism' => [
                        'title' => 'PS最大并行度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                    ],
                    'ElasticStrategy' => [
                        'title' => '弹性训练策略',
                        'type' => 'string',
                    ],
                    'EnableEDP' => [
                        'title' => '是否打开EDP',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'EDPMaxParallelism' => [
                        'title' => 'EDP最大并行度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '16',
                    ],
                    'EDPMinParallelism' => [
                        'title' => 'EDP最小并行度',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '8',
                    ],
                ],
            ],
            'JobItem' => [
                'title' => '作业详情信息',
                'description' => '作业详情信息',
                'type' => 'object',
                'properties' => [
                    'JobId' => [
                        'title' => '作业Id',
                        'description' => '作业ID',
                        'type' => 'string',
                        'example' => 'dlc-20210126170216-********',
                    ],
                    'JobType' => [
                        'title' => '作业类型',
                        'description' => '作业类型',
                        'type' => 'string',
                        'example' => 'TFJob',
                    ],
                    'DisplayName' => [
                        'title' => '作业显示名称',
                        'description' => '作业名称',
                        'type' => 'string',
                        'example' => 'tf-mnist-test',
                    ],
                    'UserId' => [
                        'title' => '作业提交人Id',
                        'description' => '作业所属用户的UID',
                        'type' => 'string',
                        'example' => '123456789',
                    ],
                    'Username' => [
                        'title' => '作业提交用户名',
                        'description' => '作业提交用户名',
                        'type' => 'string',
                        'example' => 'pai-dlc-role',
                    ],
                    'Status' => [
                        'title' => '作业状态',
                        'description' => '作业状态',
                        'type' => 'string',
                        'example' => 'Stopped',
                    ],
                    'WorkspaceId' => [
                        'title' => '作业所属工作空间ID',
                        'description' => '作业所属工作空间ID',
                        'type' => 'string',
                        'example' => '268',
                    ],
                    'WorkspaceName' => [
                        'title' => '作业所属工作空间名称',
                        'description' => '作业所属工作空间名称',
                        'type' => 'string',
                        'example' => 'dlc-workspace',
                    ],
                    'ResourceId' => [
                        'title' => '作业运行所在的资源组ID',
                        'description' => '作业运行所在的资源组ID',
                        'type' => 'string',
                        'example' => 'dlc-quota',
                    ],
                    'ResourceLevel' => [
                        'title' => '作业运行时的资源级别',
                        'description' => '作业运行时的资源级别',
                        'type' => 'string',
                        'example' => 'L0',
                    ],
                    'ReasonCode' => [
                        'title' => '状态详情码',
                        'description' => '作业进入当前状态的缘由Code',
                        'type' => 'string',
                        'example' => 'JobStoppedByUser',
                    ],
                    'ReasonMessage' => [
                        'title' => '状态详情',
                        'description' => '作业进入当前状态的缘由详细描述',
                        'type' => 'string',
                        'example' => 'Job is stopped by user.',
                    ],
                    'JobSpecs' => [
                        'title' => '作业规格配置',
                        'description' => '作业运行时的节点配置',
                        'type' => 'array',
                        'items' => [
                            'description' => '节点配置',
                            '$ref' => '#/components/schemas/JobSpec',
                        ],
                    ],
                    'UserCommand' => [
                        'title' => '用户命令',
                        'description' => '作业每个节点运行的启动命令',
                        'type' => 'string',
                        'example' => 'python /root/code/mnist.py',
                    ],
                    'DataSources' => [
                        'title' => '数据源配置列表',
                        'description' => '本作业使用的所有数据源配置列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '数据源列表',
                            'type' => 'object',
                            'properties' => [
                                'DataSourceId' => [
                                    'title' => '数据源Id',
                                    'description' => '数据源配置ID',
                                    'type' => 'string',
                                    'example' => 'data-20210114104214-********',
                                ],
                                'MountPath' => [
                                    'title' => '本地挂载路径',
                                    'description' => '本地挂载路径',
                                    'type' => 'string',
                                    'example' => '/mnt/data',
                                ],
                            ],
                        ],
                    ],
                    'CodeSource' => [
                        'title' => '代码源配置',
                        'description' => '次作业使用的代码源配置',
                        'type' => 'object',
                        'properties' => [
                            'CodeSourceId' => [
                                'title' => '代码源Id',
                                'description' => '代码源配置ID',
                                'type' => 'string',
                                'example' => 'code-20210111103721-********',
                            ],
                            'Branch' => [
                                'title' => '代码分支',
                                'description' => '代码仓库分支',
                                'type' => 'string',
                                'example' => 'master',
                            ],
                            'Commit' => [
                                'title' => '代码Commit',
                                'description' => '此次作业使用的代码仓库的CommitID',
                                'type' => 'string',
                                'example' => '44da109b59f8596152987eaa8f3b2487bb******',
                            ],
                            'MountPath' => [
                                'title' => '本地挂载路径',
                                'description' => '本地挂载路径',
                                'type' => 'string',
                                'example' => '/mnt/data',
                            ],
                        ],
                    ],
                    'ThirdpartyLibs' => [
                        'title' => '三方库配置列表',
                        'description' => '作业的运行之前安装的第三方Python库列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '一个Python三方库',
                            'type' => 'string',
                            'example' => 'numpy==1.16.1',
                        ],
                    ],
                    'ThirdpartyLibDir' => [
                        'title' => '三方库(requirements.txt)文件路径',
                        'description' => '三方库文件Requirements.txt所在目录。',
                        'type' => 'string',
                        'example' => '/root/code/',
                    ],
                    'Envs' => [
                        'title' => '环境变量配置',
                        'description' => '作业运行时被注入的环境变量',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '环境变量的Key和Value',
                            'type' => 'string',
                            'example' => 'ENABLE_DEBUG_MODE',
                        ],
                    ],
                    'GmtCreateTime' => [
                        'title' => '作业创建时间（UTC）',
                        'description' => '作业创建时间， UTC',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:01Z',
                    ],
                    'GmtSubmittedTime' => [
                        'title' => '作业提交时间（UTC）',
                        'description' => '作业提交时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:01Z',
                    ],
                    'GmtRunningTime' => [
                        'title' => '作业开始运行时间（UTC）',
                        'description' => '作业开始运行时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:01Z',
                    ],
                    'GmtSuccessedTime' => [
                        'title' => '作业成功完成时间（UTC）',
                        'description' => '作业成功完成时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:01Z',
                    ],
                    'GmtStoppedTime' => [
                        'title' => '作业停止时间（UTC）',
                        'description' => '作业停止时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:01Z',
                    ],
                    'GmtFailedTime' => [
                        'title' => '作业失败时间（UTC）',
                        'description' => '作业失败时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:01Z',
                    ],
                    'GmtFinishTime' => [
                        'title' => '作业结束时间（UTC）',
                        'description' => '作业结束时间，UTC',
                        'type' => 'string',
                        'example' => '2021-01-12T15:36:08Z',
                    ],
                    'Duration' => [
                        'title' => '作业运行时长，单位：秒',
                        'description' => '作业运行时长，单位：秒',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '3602',
                    ],
                    'Settings' => [
                        'title' => '作业额外参数',
                        'description' => '作业额外参数',
                        '$ref' => '#/components/schemas/JobSettings',
                    ],
                    'EnabledDebugger' => [
                        'title' => '是否开启了debugger分析',
                        'description' => '是否开启了debugger分析',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'ResourceName' => [
                        'title' => '作业运行的资源名称',
                        'description' => '作业运行的资源名称',
                        'type' => 'string',
                        'example' => 'my_resource_group',
                    ],
                    'Priority' => [
                        'title' => '任务优先级',
                        'description' => '任务优先级',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'SubStatus' => [
                        'title' => '作业子状态，如抢占重试状态',
                        'description' => '作业子状态，如抢占重试状态',
                        'type' => 'string',
                        'example' => 'Restarting',
                    ],
                    'UseOversoldResource' => [
                        'title' => '作业是否使用闲时资源',
                        'description' => '作业是否使用闲时资源',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'ResourceType' => [
                        'title' => '资源类型，可选值：ECS、Lingjun、ACS等',
                        'description' => '资源类型，可选值：ECS、Lingjun、ACS等',
                        'type' => 'string',
                        'example' => 'ECS',
                    ],
                ],
            ],
            'JobSettings' => [
                'title' => '作业额外参数配置',
                'description' => '任务额外参数配置',
                'type' => 'object',
                'properties' => [
                    'BusinessUserId' => [
                        'title' => '作业关联用户ID',
                        'description' => '作业关联用户ID',
                        'type' => 'string',
                        'example' => '16****',
                    ],
                    'Caller' => [
                        'title' => '调用方',
                        'description' => '调用方',
                        'type' => 'string',
                        'example' => 'SilkFlow',
                    ],
                    'Tags' => [
                        'title' => '自定义标签',
                        'description' => '自定义标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                        ],
                    ],
                    'PipelineId' => [
                        'title' => '工作流ID',
                        'description' => '工作流ID',
                        'type' => 'string',
                        'example' => 'pid-123456',
                    ],
                    'EnableTideResource' => [
                        'title' => '允许作业使用潮汐资源',
                        'description' => '允许任务使用潮汐资源',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'EnableErrorMonitoringInAIMaster' => [
                        'title' => '允许打开作业容错监控',
                        'description' => '允许打开作业容错监控',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'ErrorMonitoringArgs' => [
                        'title' => '用户指定容错监控的配置参数，比如指定是否启动基于log hang的检测',
                        'description' => '用户指定容错监控的配置参数，比如指定是否启动基于log hang的检测',
                        'type' => 'string',
                        'example' => '--enable-log-hang-detection true',
                    ],
                    'EnableRDMA' => [
                        'title' => '允许作业使用RDMA',
                        'description' => '允许作业使用RDMA',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'EnableOssAppend' => [
                        'title' => '运行oss追加写',
                        'description' => '运行OSS追加写',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'OversoldType' => [
                        'title' => '作业的超卖资源使用方式（不接受/可接受/只接受）',
                        'description' => '作业的超卖资源使用方式（不接受/可接受/只接受）',
                        'type' => 'string',
                        'example' => 'AcceptQuotaOverSold',
                    ],
                    'AdvancedSettings' => [
                        'title' => '额外高级参数配置',
                        'description' => '额外高级参数配置',
                        'type' => 'object',
                    ],
                    'Driver' => [
                        'title' => 'NVIDAI驱动配置',
                        'description' => 'NVIDAI驱动配置',
                        'type' => 'string',
                        'example' => '535.54.03',
                    ],
                    'EnableSanityCheck' => [
                        'title' => '允许作业开启算力健康检测',
                        'description' => '允许作业开启算力健康检测',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'SanityCheckArgs' => [
                        'title' => '算力健康检测的配置参数',
                        'description' => '算力健康检测的配置参数',
                        'type' => 'string',
                        'example' => '--sanity-check-timing=AfterJobFaultTolerant --sanity-check-timeout-ops=MarkJobFai',
                    ],
                    'JobReservedMinutes' => [
                        'title' => '作业结束后保留的时长，单位分钟',
                        'description' => '作业结束后保留的时长，单位分钟',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '30',
                    ],
                    'JobReservedPolicy' => [
                        'title' => '作业结束后保留的策略',
                        'description' => '作业结束后保留的策略',
                        'type' => 'string',
                        'example' => 'Always',
                        'enum' => [
                            'Always',
                            'OnFailure',
                            'OnSucceed',
                        ],
                    ],
                ],
            ],
            'JobSpec' => [
                'title' => 'JobSpec',
                'description' => '描述一种类型的Worker的详细配置，包括硬件规格，运行镜像，副本数量等。',
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'title' => '类型',
                        'description' => 'Type与Job Type紧密相关，不同Job Type支持不同的Worker Type。'."\n"
                            ."\n"
                            .'- **TFJob**：支持Chief, PS, Worker, Evaluator, GraphLearn'."\n"
                            ."\n"
                            .'- **PyTorchJob**: 支持Worker, Master'."\n"
                            ."\n"
                            .'- **XGBoostJob**: 支持Worker, Master'."\n"
                            ."\n"
                            .'PyTorchJob 与 XGBoostJob 中的Master是可选的；若Master没有指定，系统会自动把第一个Worker节点当作Master节点。',
                        'type' => 'string',
                        'example' => 'Worker',
                    ],
                    'Image' => [
                        'title' => '镜像',
                        'description' => '此类Worker的运行镜像地址，可以调用 ListImages 获取PAI平台提供的社区和PAI优化过的镜像。也可以指定第三方公开的镜像。',
                        'type' => 'string',
                        'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com/cloud-dsw/tensorflow:1.12PAI-gpu-py36-cu101-ubuntu18.04',
                    ],
                    'ImageConfig' => [
                        'title' => '私有镜像配置',
                        'description' => '私有镜像配置。',
                        '$ref' => '#/components/schemas/ImageConfig',
                    ],
                    'PodCount' => [
                        'title' => '实例数量',
                        'description' => '副本数量。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'EcsSpec' => [
                        'title' => 'Ecs实例规格',
                        'description' => 'Worker的硬件规格，请访问 [PAI-DLC计费说明](https://help.aliyun.com/document_detail/171758.html?spm=a2c4g.11186623.6.557.61396005ZYTcba) 获取详细规格列表。请注意，不同规格的价格会有区别。',
                        'type' => 'string',
                        'example' => 'ecs.c6.large',
                    ],
                    'ExtraPodSpec' => [
                        'title' => '额外的Pod配置',
                        'description' => '额外的Pod配置',
                        '$ref' => '#/components/schemas/ExtraPodSpec',
                    ],
                    'ResourceConfig' => [
                        'title' => '资源配置',
                        'description' => '资源配置',
                        '$ref' => '#/components/schemas/ResourceConfig',
                    ],
                    'UseSpotInstance' => [
                        'title' => '是否使用竞价实例',
                        'description' => '是否使用竞价实例',
                        'type' => 'boolean',
                        'example' => 'false',
                    ],
                    'SpotSpec' => [
                        'title' => '抢占式实例配置',
                        'description' => '抢占式实例配置',
                        '$ref' => '#/components/schemas/SpotSpec',
                    ],
                ],
            ],
            'LogInfo' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'PodId' => [
                        'title' => '日志所属的Pod的Id',
                        'type' => 'string',
                    ],
                    'PodUid' => [
                        'title' => '日志所属的Pod的Uid',
                        'type' => 'string',
                    ],
                    'Id' => [
                        'title' => '日志的ID信息，用于获取相关上下文',
                        'type' => 'string',
                    ],
                    'Time' => [
                        'title' => '日志的时间戳信息，该时间为UTC时间',
                        'type' => 'string',
                    ],
                    'Content' => [
                        'title' => '日志的文本内容',
                        'type' => 'string',
                    ],
                    'Source' => [
                        'title' => '日志的来源',
                        'type' => 'string',
                        'example' => 'stderr, stdout',
                    ],
                ],
            ],
            'Member' => [
                'title' => 'A short description of struct',
                'description' => '工作空间成员',
                'type' => 'object',
                'properties' => [
                    'MemberId' => [
                        'title' => '成员id',
                        'type' => 'string',
                        'example' => 'ken_12345',
                    ],
                    'MemberType' => [
                        'title' => '成员角色',
                        'type' => 'string',
                        'example' => 'WorkspaceAdmin',
                    ],
                ],
            ],
            'Metric' => [
                'title' => '监控指标样本',
                'description' => '监控指标。',
                'type' => 'object',
                'properties' => [
                    'Time' => [
                        'title' => '时间戳（毫秒）',
                        'description' => '时间戳（Unix Timestamp），单位为毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1616987726587',
                    ],
                    'Value' => [
                        'title' => '样本值',
                        'description' => '监控数据的值。',
                        'type' => 'number',
                        'format' => 'float',
                        'example' => '23.45',
                    ],
                ],
            ],
            'NodeMetric' => [
                'title' => '节点监控指标',
                'description' => '节点监控指标',
                'type' => 'object',
                'properties' => [
                    'NodeName' => [
                        'title' => '节点名称',
                        'type' => 'string',
                        'example' => 'asi_xxx',
                    ],
                    'Metrics' => [
                        'title' => '监控指标样本序列',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                ],
            ],
            'PodItem' => [
                'title' => 'A short description of struct',
                'description' => 'Pod的详细信息',
                'type' => 'object',
                'properties' => [
                    'Type' => [
                        'title' => 'Pod类型',
                        'type' => 'string',
                        'example' => 'Worker',
                    ],
                    'PodId' => [
                        'title' => 'Pod Id',
                        'type' => 'string',
                        'example' => 'dlc-20210126170216-mtl37ge7gkvdz-worker-0',
                    ],
                    'PodUid' => [
                        'title' => 'Pod Uid',
                        'type' => 'string',
                        'example' => 'fe846462-af2c-4521-bd6f-96787a57591d',
                    ],
                    'Status' => [
                        'title' => 'Pod状态',
                        'type' => 'string',
                        'example' => 'Stopped',
                    ],
                    'Ip' => [
                        'title' => 'Pod Ip',
                        'type' => 'string',
                        'example' => '10.0.1.2',
                    ],
                    'GmtCreateTime' => [
                        'title' => 'Pod创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:01Z',
                    ],
                    'GmtStartTime' => [
                        'title' => 'Pod启动时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:05Z',
                    ],
                    'GmtFinishTime' => [
                        'title' => 'Pod结束时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T15:36:05Z',
                    ],
                    'HistoryPods' => [
                        'title' => '历史Pods',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/PodItem',
                        ],
                    ],
                ],
            ],
            'PodMetric' => [
                'title' => 'Pod监控指标',
                'description' => '任务监控数据。',
                'type' => 'object',
                'properties' => [
                    'PodId' => [
                        'title' => 'Pod编号',
                        'description' => '节点ID。',
                        'type' => 'string',
                        'example' => 'dlc-20210329110128-******-worker-0',
                    ],
                    'Metrics' => [
                        'title' => '监控指标样本序列',
                        'description' => '监控数据列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '监控数据。',
                            '$ref' => '#/components/schemas/Metric',
                        ],
                    ],
                ],
            ],
            'Quota' => [
                'title' => '资源配额',
                'description' => '资源配额详情',
                'type' => 'object',
                'properties' => [
                    'QuotaId' => [
                        'title' => '资源配额id',
                        'type' => 'string',
                        'example' => 'quotamtl37ge7gkvdz',
                    ],
                    'QuotaName' => [
                        'title' => '资源配额名称',
                        'type' => 'string',
                        'example' => 'dlc-quota',
                    ],
                    'QuotaType' => [
                        'title' => '资源配额类型',
                        'type' => 'string',
                        'example' => 'asiquota',
                    ],
                    'UsedQuota' => [
                        'title' => '资源用量',
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'TotalQuota' => [
                        'title' => '资源总量',
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'ClusterId' => [
                        'title' => '集群id',
                        'type' => 'string',
                    ],
                    'ClusterName' => [
                        'title' => '集群名称',
                        'type' => 'string',
                    ],
                    'TotalTideQuota' => [
                        'title' => '潮汐资源总量',
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'UsedTideQuota' => [
                        'title' => '潮汐资源用量',
                        '$ref' => '#/components/schemas/QuotaDetail',
                    ],
                    'QuotaConfig' => [
                        'title' => '资源配额设置',
                        '$ref' => '#/components/schemas/QuotaConfig',
                    ],
                ],
            ],
            'QuotaConfig' => [
                'title' => '资源配额度设置',
                'description' => '资源组配置',
                'type' => 'object',
                'properties' => [
                    'EnableTideResource' => [
                        'title' => '是否使用潮汐资源',
                        'type' => 'boolean',
                    ],
                    'ResourceLevel' => [
                        'title' => '资源级别(L0, L1)',
                        'type' => 'string',
                    ],
                    'AllowedMaxPriority' => [
                        'title' => '允许的最大优先级',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'EnableDLC' => [
                        'title' => '是否开启DLC',
                        'type' => 'boolean',
                    ],
                    'EnableDSW' => [
                        'title' => '是否开启DSW',
                        'type' => 'boolean',
                    ],
                ],
            ],
            'QuotaDetail' => [
                'title' => 'A short description of struct',
                'description' => '资源配额详情',
                'type' => 'object',
                'properties' => [
                    'CPU' => [
                        'title' => 'CPU核数',
                        'type' => 'string',
                        'example' => '2',
                    ],
                    'Memory' => [
                        'title' => '内存容量',
                        'type' => 'string',
                        'example' => '10Gi',
                    ],
                    'GPU' => [
                        'title' => 'GPU卡数',
                        'type' => 'string',
                        'example' => '5',
                    ],
                    'GPUType' => [
                        'title' => 'GPU卡型',
                        'type' => 'string',
                        'example' => 'Tesla-V100',
                    ],
                    'GPUTypeFullName' => [
                        'title' => 'GPU卡型全名',
                        'type' => 'string',
                        'example' => 'nvidia.com/gpu',
                    ],
                    'GPUDetails' => [
                        'title' => 'GPU详情',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/GPUDetail',
                        ],
                    ],
                ],
            ],
            'ResourceConfig' => [
                'title' => '资源配置',
                'description' => '资源配置',
                'type' => 'object',
                'properties' => [
                    'CPU' => [
                        'title' => 'CPU核心数',
                        'description' => 'CPU核心数',
                        'type' => 'string',
                        'example' => '10',
                    ],
                    'GPU' => [
                        'title' => 'GPU核心数',
                        'description' => 'GPU核心数',
                        'type' => 'string',
                        'example' => '3',
                    ],
                    'Memory' => [
                        'title' => '内存容量',
                        'description' => '内存容量',
                        'type' => 'string',
                        'example' => '10Gi',
                    ],
                    'SharedMemory' => [
                        'title' => '共享内存容量',
                        'description' => '共享内存容量',
                        'type' => 'string',
                        'example' => '5Gi',
                    ],
                    'GPUType' => [
                        'title' => '显卡类型',
                        'description' => 'GPU类型',
                        'type' => 'string',
                        'example' => 'Tesla-V100-16G',
                    ],
                ],
            ],
            'ResourceRequirements' => [
                'title' => 'ResourceRequirements',
                'description' => '容器资源',
                'type' => 'object',
                'properties' => [
                    'Limits' => [
                        'title' => '资源限制',
                        'description' => '资源限制',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => '{\'cpu\': \'1\', \'memory\': \'1000Mi\'}',
                        ],
                    ],
                    'Requests' => [
                        'title' => '资源需求',
                        'description' => '资源需求',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => '{\'cpu\': \'1\', \'memory\': \'1000Mi\'}',
                        ],
                    ],
                ],
            ],
            'Resources' => [
                'title' => 'A short description of struct',
                'description' => '资源量',
                'type' => 'object',
                'properties' => [
                    'CPU' => [
                        'title' => 'CPU核心数',
                        'type' => 'string',
                        'example' => '10',
                    ],
                    'GPU' => [
                        'title' => 'GPU卡数',
                        'type' => 'string',
                        'example' => '8',
                    ],
                    'Memory' => [
                        'title' => '内存大小',
                        'type' => 'string',
                        'example' => '1024（单位GB）',
                    ],
                ],
            ],
            'SanityCheckResultItem' => [
                'title' => 'SanityCheck检测结果条目',
                'description' => 'SanityCheck检测结果结果',
                'type' => 'object',
                'properties' => [
                    'Phase' => [
                        'title' => '所在的检测阶段',
                        'type' => 'string',
                        'example' => 'CheckInit',
                    ],
                    'Message' => [
                        'title' => '检测结果具体信息',
                        'type' => 'string',
                    ],
                    'Status' => [
                        'title' => '检测状态',
                        'type' => 'string',
                        'example' => 'Succeeded',
                    ],
                    'StartedAt' => [
                        'title' => '检测开始时间',
                        'type' => 'string',
                        'example' => '”2023-11-30T16:47:30.343005+08:00“',
                    ],
                    'FinishedAt' => [
                        'title' => '检测结束时间',
                        'type' => 'string',
                        'example' => '”2023-11-30T16:47:30.378817+08:00"',
                    ],
                    'CheckNumber' => [
                        'title' => '第几次检测',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'SmartCache' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'SmartCacheId' => [
                        'title' => 'SmartCacheId',
                        'type' => 'string',
                        'example' => 'smartcache-20210114104214-vf9lowjt3pso',
                    ],
                    'DisplayName' => [
                        'title' => 'SmartCache 名称',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'Description' => [
                        'title' => 'SmartCache 描述',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'UserId' => [
                        'title' => '创建者Id',
                        'type' => 'string',
                        'example' => '189xxx',
                    ],
                    'MountPath' => [
                        'title' => '数据源本地挂载目录',
                        'type' => 'string',
                        'example' => '/root/data/',
                    ],
                    'Type' => [
                        'title' => '挂载的数据类型',
                        'type' => 'string',
                        'example' => 'oss',
                    ],
                    'FileSystemId' => [
                        'title' => '阿里云的NAS文件系统ID',
                        'type' => 'string',
                        'example' => '1ca404****',
                    ],
                    'Path' => [
                        'title' => 'OSS数据源路径',
                        'type' => 'string',
                        'example' => 'oss://buc/path/to/dir',
                    ],
                    'Endpoint' => [
                        'title' => 'OSS Endpoint',
                        'type' => 'string',
                        'example' => 'oss-cn-beijing-internal.aliyuncs.com',
                    ],
                    'Status' => [
                        'title' => '运行状态',
                        'type' => 'string',
                        'example' => 'Running',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:01Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T23:36:01Z',
                    ],
                    'Duration' => [
                        'title' => '已运行时长',
                        'type' => 'string',
                        'example' => '123456',
                    ],
                    'Options' => [
                        'title' => '可选的超参数',
                        'type' => 'string',
                        'example' => '{"num_threads": 32}',
                    ],
                    'CacheWorkerSize' => [
                        'title' => '每个cache worker的cache大小单位是GB',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                    ],
                    'CacheWorkerNum' => [
                        'title' => 'cache worker的数量单位是个',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '10',
                    ],
                ],
            ],
            'SpotSpec' => [
                'title' => '抢占式实例规格',
                'description' => '抢占式实例配置',
                'type' => 'object',
                'properties' => [
                    'SpotStrategy' => [
                        'title' => '抢占式实例抢占策略',
                        'type' => 'string',
                    ],
                    'SpotDiscountLimit' => [
                        'title' => '抢占式实例最高价格折扣上限',
                        'type' => 'number',
                        'format' => 'float',
                    ],
                ],
            ],
            'StatusTransitionItem' => [
                'title' => '作业状态信息流转条目',
                'description' => '作业流转状态信息条目',
                'type' => 'object',
                'properties' => [
                    'Status' => [
                        'title' => '作业状态',
                        'type' => 'string',
                    ],
                    'StartTime' => [
                        'title' => '此状态开始时间',
                        'type' => 'string',
                    ],
                    'EndTime' => [
                        'title' => '此状态结束时间',
                        'type' => 'string',
                    ],
                    'ReasonCode' => [
                        'title' => '出现此状态的原因码',
                        'type' => 'string',
                    ],
                    'ReasonMessage' => [
                        'title' => '出现此状态的具体信息',
                        'type' => 'string',
                    ],
                ],
            ],
            'Tensorboard' => [
                'title' => 'A short description of struct',
                'description' => 'tensorboard',
                'type' => 'object',
                'properties' => [
                    'TensorboardId' => [
                        'title' => 'Tensorboard Id',
                        'description' => 'Tensorboard Id',
                        'type' => 'string',
                        'example' => 'tensorboard-xxx',
                    ],
                    'TensorboardUrl' => [
                        'title' => 'Tensorboard URL',
                        'description' => 'Tensorboard URL',
                        'type' => 'string',
                        'example' => 'http://xxxxxx',
                    ],
                    'Status' => [
                        'title' => '状态',
                        'description' => '状态',
                        'type' => 'string',
                        'example' => 'running',
                    ],
                    'Duration' => [
                        'title' => '运行时长',
                        'description' => '运行时长，单位秒。',
                        'type' => 'string',
                        'example' => '1234567',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间（UTC）',
                        'description' => '创建时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:35:00Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '修改时间（UTC）',
                        'description' => '修改时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:00Z',
                    ],
                    'GmtFinishTime' => [
                        'title' => '结束时间（UTC）',
                        'description' => '结束时间（UTC）',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:00Z',
                    ],
                    'RequestId' => [
                        'title' => '请求Id',
                        'description' => '请求Id',
                        'type' => 'string',
                        'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                    ],
                    'DisplayName' => [
                        'title' => '展示名称',
                        'description' => '展示名称',
                        'type' => 'string',
                        'example' => 'test',
                    ],
                    'DataSourceId' => [
                        'title' => '数据源Id',
                        'description' => '数据源Id',
                        'type' => 'string',
                        'example' => 'datasource-test',
                    ],
                    'SummaryPath' => [
                        'title' => '文件路径',
                        'description' => '文件路径',
                        'type' => 'string',
                        'example' => '/root/data',
                    ],
                    'UserId' => [
                        'title' => '创建者',
                        'description' => '创建者',
                        'type' => 'string',
                        'example' => 'lycxxxxx',
                    ],
                    'Username' => [
                        'title' => '创建者的用户名',
                        'description' => '创建者的用户名',
                        'type' => 'string',
                        'example' => 'tensorboard.pai',
                    ],
                    'ReasonCode' => [
                        'title' => '状态详情码',
                        'description' => '状态详情码',
                        'type' => 'string',
                        'example' => 'Delete by user',
                    ],
                    'ReasonMessage' => [
                        'title' => '状态详情',
                        'description' => '状态详情',
                        'type' => 'string',
                        'example' => 'Tensorboard is deleted',
                    ],
                    'JobId' => [
                        'title' => '任务Id',
                        'description' => '任务Id',
                        'type' => 'string',
                        'example' => 'dlc-20210114104214-vf9lowjt3pso',
                    ],
                    'TensorboardDataSources' => [
                        'title' => 'Tensorboard任务挂载的数据集',
                        'description' => 'Tensorboard任务挂载的数据集',
                        'type' => 'array',
                        'items' => [
                            'required' => false,
                            '$ref' => '#/components/schemas/TensorboardDataSourceSpec',
                        ],
                    ],
                    'TensorboardSpec' => [
                        'title' => 'Tensorboard任务的后付费配置',
                        'description' => 'Tensorboard任务的后付费配置',
                        '$ref' => '#/components/schemas/TensorboardSpec',
                    ],
                ],
            ],
            'TensorboardDataSourceSpec' => [
                'title' => 'Tensorboard的DataSource配置',
                'description' => 'Tensorboard的数据集配置描述',
                'type' => 'object',
                'properties' => [
                    'DirectoryName' => [
                        'title' => 'DataSource在Tensorboard内的目录前缀',
                        'description' => '数据集在Tensorboard任务内的目录前缀。',
                        'type' => 'string',
                        'example' => 'dlcJobName',
                    ],
                    'Name' => [
                        'title' => 'DataSource名称',
                        'description' => '数据集配置的名称。通常为数据集名称，或者任务名称。',
                        'type' => 'string',
                        'example' => 'dlcJobName',
                    ],
                    'Id' => [
                        'title' => 'DataSource Id',
                        'description' => '数据集配置的Id。通常为数据集ID，或者任务ID。',
                        'type' => 'string',
                        'example' => 'd-vf2fdhxxxxxx',
                    ],
                    'DataSourceType' => [
                        'title' => 'DataSource数据集类型',
                        'description' => '数据集配置的Uri对应文件类型。',
                        'type' => 'string',
                        'example' => 'OSS',
                    ],
                    'Uri' => [
                        'title' => 'DataSourceType对应的文件系统Uri',
                        'description' => '数据集配置中的文件系统Uri。',
                        'type' => 'string',
                        'example' => 'oss://.oss-cn-shanghai-finance-1.aliyuncs.com/',
                    ],
                    'SourceType' => [
                        'title' => 'DataSource的类型',
                        'description' => '数据集的类型，当前可选值为：datasource和dlcjob。datasource代表按数据集类型配置，dlcjob代表按任务类型配置。',
                        'type' => 'string',
                        'example' => 'datasource',
                    ],
                    'SummaryPath' => [
                        'title' => 'Tensorboard Summary文件路径',
                        'description' => 'Summary目录路径。',
                        'type' => 'string',
                        'example' => '/tensorboard/run1',
                    ],
                    'FullSummaryPath' => [
                        'title' => 'Tensorboard Summary文件的最终路径',
                        'description' => 'Summary目录的最终路径。',
                        'type' => 'string',
                        'example' => 'oss://xxxxx/tensorboard/run1',
                    ],
                ],
            ],
            'TensorboardSpec' => [
                'title' => 'Tensorboard任务后付费配置',
                'description' => '后付费的Tensorboard任务相关配置。',
                'type' => 'object',
                'properties' => [
                    'VpcId' => [
                        'title' => 'VPC的Id信息',
                        'description' => '后付费Tensorboard任务配置的VPC的ID。',
                        'type' => 'string',
                        'example' => 'vpc-xxxx',
                    ],
                    'EcsType' => [
                        'title' => 'ECS规格',
                        'description' => '后付费Tensorboard任务配置的ECS的规格。',
                        'type' => 'string',
                        'example' => 'ecs.g6.large',
                    ],
                    'SecurityGroupId' => [
                        'title' => '安全组的Id信息',
                        'description' => '后付费Tensorboard任务配置的安全组的ID。',
                        'type' => 'string',
                        'example' => 'sg-xxxxx',
                    ],
                    'SwitchId' => [
                        'title' => 'VSwitch的Id信息',
                        'description' => '后付费Tensorboard任务配置的vSwitch的ID。',
                        'type' => 'string',
                        'example' => 'vsw-xxxx',
                    ],
                ],
            ],
            'Workspace' => [
                'title' => 'A short description of struct',
                'description' => '工作空间',
                'type' => 'object',
                'properties' => [
                    'WorkspaceId' => [
                        'title' => '工作空间id',
                        'type' => 'string',
                        'example' => 'ws-20210126170216-mtl37ge7gkvdz',
                    ],
                    'WorkspaceName' => [
                        'title' => '工作空间名称',
                        'type' => 'string',
                        'example' => 'dlc-workspace',
                    ],
                    'Creator' => [
                        'title' => '创建者',
                        'type' => 'string',
                        'example' => 'ken',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建时间',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:01Z',
                    ],
                    'GmtModifyTime' => [
                        'title' => '最近修改时间',
                        'type' => 'string',
                        'example' => '2021-01-12T14:36:01Z',
                    ],
                    'Quotas' => [
                        'title' => '资源配额列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Quota',
                        ],
                    ],
                    'TotalResources' => [
                        'title' => '资源总量',
                        '$ref' => '#/components/schemas/Resources',
                    ],
                    'Members' => [
                        'title' => '成员列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Member',
                        ],
                    ],
                    'WorkspaceAdmins' => [
                        'title' => '管理员列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/Member',
                        ],
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateJob' => [
            'summary' => '创建一个任务到集群中运行。您可以指定数据源配置、代码源配置、启动命令以及任务运行的每个节点的计算资源配置等信息。',
            'path' => '/api/v1/jobs',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body参数。',
                        'type' => 'object',
                        'properties' => [
                            'DisplayName' => [
                                'title' => '作业显示名称',
                                'description' => '任务的名称，命名格式如下：'."\n"
                                    .'- 名称长度不超过256个字符。'."\n"
                                    .'- 允许数字、字母、下划线（_）、英文句号（.）和短横线（-）。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'tf-mnist-test',
                                'maxLength' => 1024,
                                'minLength' => 1,
                            ],
                            'JobType' => [
                                'title' => '作业类型',
                                'description' => '任务类型，大小写敏感。当前支持的任务类型：'."\n"
                                    .'- TFJob'."\n"
                                    .'- PyTorchJob'."\n"
                                    .'- XGBoostJob'."\n"
                                    .'- OneFlowJob'."\n"
                                    .'- ElasticBatch',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'TFJob',
                                'maxLength' => 32,
                                'minLength' => 1,
                            ],
                            'JobSpecs' => [
                                'title' => '作业规格配置',
                                'description' => '**JobSpecs**描述任务运行时的各种配置，诸如镜像地址、启动命令、节点资源申明、副本数量等。'."\n"
                                    ."\n"
                                    .'DLC任务由不同类型的节点组成，同一类型的节点拥有完全相同的配置，这种配置被称为一个JobSpec。**JobSpecs**描述所有类型节点的配置，是JobSpec的数组。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务的运行时配置。',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/JobSpec',
                                ],
                                'required' => true,
                                'minItems' => 1,
                            ],
                            'UserCommand' => [
                                'title' => '作业命令',
                                'description' => '任务所有节点的启动命令。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'python /root/code/mnist.py',
                            ],
                            'DataSources' => [
                                'title' => '数据源配置列表',
                                'description' => '任务运行所使用的数据源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '本任务使用的所有数据源列表。按照数据源中的配置mount到每一个节点所在的容器本地目录上（本地目录由数据源中的配置MountPath指定）。'."\n"
                                        ."\n"
                                        .'任务的启动命令中的进程以MountPath为路径直接访问每一个数据源代表的分布式文件系统。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DataSourceId' => [
                                            'title' => '数据源Id',
                                            'description' => '数据源的ID。如何查看数据源ID，请参见[ListDatasets](~~457222~~)。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'd-cn9dl*******',
                                        ],
                                        'MountPath' => [
                                            'title' => '本地挂载路径',
                                            'description' => '本任务需要挂载的路径，可选参数，默认使用数据源中的挂载路径。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '/root/data',
                                        ],
                                        'Uri' => [
                                            'title' => '数据源路径',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'oss://bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'CodeSource' => [
                                'title' => '代码源配置',
                                'description' => '本任务使用的代码源。任务的节点启动之前，DLC会自动下载代码源中配置好的代码，并Mount到容器的本地目录。',
                                'type' => 'object',
                                'properties' => [
                                    'CodeSourceId' => [
                                        'title' => '代码源Id',
                                        'description' => '代码源ID。如何获取代码源ID，请参见[ListCodeSources ](~~459922~~)。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'code-20210111103721-xxxxxxx',
                                    ],
                                    'Branch' => [
                                        'title' => '代码分支',
                                        'description' => '本任务运行时，引用的代码仓库的分支，可选参数，默认使用代码源中的配置分支字段。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'master',
                                    ],
                                    'Commit' => [
                                        'title' => '代码Commit',
                                        'description' => '本任务需要下载的代码Commit ID，可选参数，默认使用代码源中的CommitID配置。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '44da109b5******',
                                    ],
                                    'MountPath' => [
                                        'title' => '本地挂载路径',
                                        'description' => '本次任务需要挂载的路径，可选参数，默认使用代码源中配置挂载路径。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '/root/data',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'UserVpc' => [
                                'title' => '用户VPC',
                                'description' => '用户VPC配置。',
                                'type' => 'object',
                                'properties' => [
                                    'VpcId' => [
                                        'title' => '用户VPC的id',
                                        'description' => '用户VPC的ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vpc-abcdef****',
                                    ],
                                    'SwitchId' => [
                                        'title' => '用户交换机的id',
                                        'description' => '用户交换机的ID，可选参数'."\n"
                                            .'- 参数值为空时系统会根据库存情况自动选择合适的交换机；'."\n"
                                            .'- 也可以自己指定交换机ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'vs-abcdef****',
                                    ],
                                    'SecurityGroupId' => [
                                        'title' => '用户安全组的id',
                                        'description' => '用户安全组的ID。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'sg-abcdef****',
                                    ],
                                    'ExtendedCIDRs' => [
                                        'title' => '扩展网段',
                                        'description' => '扩展网段'."\n"
                                            .'- 当交换机ID为空时，此参数可以不提供，系统会自动获取VPC下的所有网段；'."\n"
                                            .'- 当交换机ID不为空时，此参数必须提供，建议填写VPC下的所有网段。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '扩展网段。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '192.168.0.1/24',
                                        ],
                                        'required' => false,
                                    ],
                                    'DefaultRoute' => [
                                        'description' => '默认路由。取值如下：'."\n"
                                            .'- eth0：表示使用默认网卡，通过公共网关访问外部网络。'."\n"
                                            .'- eth1：表示使用用户弹性网卡，通过私有网关访问外部网络。具体配置方法，请参考[配置DSW实例通过专有公网网关访问公网](~~2525343~~)。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => 'eth0',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'ThirdpartyLibs' => [
                                'title' => '三方库配置列表',
                                'description' => '待安装的Python三方库列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '指定一个第三方Python库和对应版本要求，例如：`numpy==1.16.1`。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'numpy==1.16.1',
                                ],
                                'required' => false,
                            ],
                            'ThirdpartyLibDir' => [
                                'title' => '三方库(requirements.txt)文件路径',
                                'description' => 'Python三方库（requirements.txt）文件所在文件夹名称；每个节点在运行指定的UserCommand之前，PAI-DLC会从指定文件夹取出requirements.txt文件，并调用`pip install -r`安装。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/root/code/',
                            ],
                            'Envs' => [
                                'title' => '环境变量配置',
                                'description' => '环境变量配置。',
                                'type' => 'object',
                                'required' => false,
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'ENABLE_DEBUG_MODE',
                                    'description' => '一个环境变量，格式：`Key=Value`。',
                                ],
                            ],
                            'JobMaxRunningTimeMinutes' => [
                                'title' => '作业最大运行时间',
                                'description' => '作业最长运行时长，单位为分钟。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'minimum' => '1',
                                'example' => '1024',
                            ],
                            'WorkspaceId' => [
                                'title' => '工作空间编号',
                                'description' => '工作空间ID，如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ws-20210126170216-xxxxxxx',
                            ],
                            'ResourceId' => [
                                'title' => '资源组编号',
                                'description' => '资源组ID，可选参数。'."\n"
                                    .'- 参数值为空表示提交到公共资源组。'."\n"
                                    .'- 如果当前工作空间已经绑定专有资源组，此处可以指定对应的资源组ID；如何创建专有资源组、查询专有资源组ID，详情请参见[准备及管理DLC资源组集群](https://help.aliyun.com/document_detail/202827.html#section-yhx-u5z-nh8)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'rs-xxx',
                            ],
                            'Priority' => [
                                'title' => '作业优先级',
                                'description' => '任务的优先级，可选参数，默认值1，参数值的范围是1~9。其中：'."\n"
                                    ."\n"
                                    .'- 1为最低优先级。'."\n"
                                    .'- 9为最高优先级。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '8',
                            ],
                            'Settings' => [
                                'description' => '作业额外参数配置。',
                                'required' => false,
                                '$ref' => '#/components/schemas/JobSettings',
                            ],
                            'ElasticSpec' => [
                                'description' => '该参数暂未支持，无需关注。',
                                'required' => false,
                                '$ref' => '#/components/schemas/JobElasticSpec',
                            ],
                            'DebuggerConfigContent' => [
                                'title' => 'debugger参数',
                                'description' => '该参数暂未支持，无需关注。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '“”',
                            ],
                            'Options' => [
                                'description' => '本任务的额外配置，通过此参数可以调整挂载的数据源的一些行为。如任务有挂载OSS类型的数据源时，可以通过将此参数配置为 `fs.oss.download.thread.concurrency=4,fs.oss.download.queue.size=16` ，覆盖JindoFS的默认参数。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'key1=value1,key2=value2',
                            ],
                            'SuccessPolicy' => [
                                'description' => '分布式多机任务的成功策略，目前只有Tensorflow的多机任务支持。'."\n"
                                    .'- ChiefWorker：当指定为这个值的时候，只要Chief的pod成功结束，那么就认为整个任务成功结束。'."\n"
                                    .'- AllWorkers（默认值）：必须是所有的Worker全部成功，才会认为整个任务成功。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'AllWorkers',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回JSON格式字符串。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业Id',
                                'description' => '此次调用创建的任务ID。',
                                'type' => 'string',
                                'example' => 'dlc7*******',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '本次请求的ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-xxxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc7*******\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-xxxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<不支持/>","errorExample":""}]',
            'title' => '创建任务',
            'description' => '请确保在使用该接口前，已充分了解PAI-DLC产品的收费方式和[价格](https://help.aliyun.com/document_detail/171758.html)。',
        ],
        'DeleteJob' => [
            'summary' => '删除一个运行结束（或者已停止）的任务。',
            'path' => '/api/v1/jobs/{JobId}',
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
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业Id',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc*************',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业Id',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc*************',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc*************\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"< 不支持 />","errorExample":""}]',
            'title' => '删除任务',
        ],
        'UpdateJob' => [
            'summary' => '更新一个任务的配置信息，例如修改一个排队中任务的优先级。',
            'path' => '/api/v1/jobs/{JobId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc*************',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '任务配置。',
                        'type' => 'object',
                        'properties' => [
                            'Priority' => [
                                'title' => '设置优先级',
                                'description' => '任务的优先级，值的范围是1~9：'."\n"
                                    .'- 1为最低优先级。'."\n"
                                    .'- 9为最高优先级。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '5',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回内容。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业ID',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc*************',
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc*************\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"< 不支持 />","errorExample":""}]',
            'title' => '更新任务配置',
        ],
        'StopJob' => [
            'summary' => '停止一个正在运行的任务。',
            'path' => '/api/v1/jobs/{JobId}/stop',
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业Id',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-20210126170216-xxxxxx',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回内容。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业Id',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-xxxxxxx',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-xxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-xxxxxxx\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-xxxxxx\\"\\n}","errorExample":""},{"type":"xml","example":"<不支持/>","errorExample":""}]',
            'title' => '停止任务',
        ],
        'ListJobs' => [
            'summary' => '获取任务列表，支持分页、排序和按条件过滤。',
            'path' => '/api/v1/jobs',
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
            ],
            'parameters' => [
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业显示名称，支持模糊查询',
                        'description' => '任务名称，支持模糊查询，大小写不敏感，不支持通配符。'."\n"
                            .'例如：输入test，可以匹配test-job1、job-test、job-test2或job-Test；但是不能匹配job-t1。'."\n"
                            .'默认为空，代表任意任务名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tf-mnist-test',
                        'maxLength' => 1024,
                    ],
                ],
                [
                    'name' => 'JobType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业类型',
                        'description' => '任务类型，可以查询任意任务类型。默认为空，代表所有类型。支持的任务类型如下：'."\n"
                            .'- TFJob'."\n"
                            .'- PyTorchJob'."\n"
                            .'- XGBoostJob'."\n"
                            .'- OneFlowJob'."\n"
                            .'- ElasticBatchJob',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TFJob',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业状态',
                        'description' => '任务状态；默认为空，代表任意状态。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                        'maxLength' => 32,
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间',
                        'description' => '查询区间的起始时间；使用任务的创建时间来过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间',
                        'description' => '查询区间的截止时间；使用任务的创建时间来过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-09T14:45:00Z',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页',
                        'description' => '分页查询，指定当前需要返回的页码，起始值为1，默认为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页返回的作业数',
                        'description' => '分页查询中，指定每页返回的任务数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按返回字段排序',
                        'description' => '返回任务列表的排序字段，枚举型：'."\n"
                            ."\n"
                            .'- DisplayName'."\n"
                            .'- JobType'."\n"
                            .'- Status'."\n"
                            .'- GmtCreateTime'."\n"
                            .'- GmtFinishTime',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序顺序',
                        'description' => '排列顺序，枚举类型：'."\n"
                            ."\n"
                            .'- desc：降序。'."\n"
                            .'- asc：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                        'default' => 'desc',
                    ],
                ],
                [
                    'name' => 'ShowOwn',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否只返回当前登录者所提交的作业',
                        'description' => '是否只查询当前用户提交的任务列表。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1****',
                    ],
                ],
                [
                    'name' => 'ResourceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组ID',
                        'description' => '资源组ID。如何查询专有资源组ID，详情请参见[准备及管理DLC资源组集群](https://help.aliyun.com/document_detail/202827.html#section-yhx-u5z-nh8)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'r*****',
                    ],
                ],
                [
                    'name' => 'BusinessUserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作业关联用户ID',
                        'description' => '任务关联用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '16****',
                    ],
                ],
                [
                    'name' => 'Caller',
                    'in' => 'query',
                    'schema' => [
                        'title' => '调用方',
                        'description' => '调用方。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'local',
                    ],
                ],
                [
                    'name' => 'Tags',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '自定义标签',
                        'description' => '用于过滤的标签。',
                        'type' => 'object',
                        'required' => false,
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'recommandation',
                            'description' => '单个标签。',
                        ],
                    ],
                ],
                [
                    'name' => 'PipelineId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作流ID',
                        'description' => '过滤指定工作流ID创建的任务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flow-*******',
                    ],
                ],
                [
                    'name' => 'FromAllWorkspaces',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否跨工作空间获取任务列表，需要配合`ShowOwn=true`参数使用，可以查询当前用户最近提交的任务列表。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID，不支持模糊查询，对大小写不敏感。不支持通配符。'."\n"
                            .'默认为空，代表任意任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc********',
                    ],
                ],
                [
                    'name' => 'UserIdForFilter',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用于过滤的用户ID',
                        'description' => '用于过滤的用户ID',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'title' => '提交作业用户名，支持模糊匹配',
                        'description' => '提交作业用户名，支持模糊匹配',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'ResourceQuotaName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源组名称',
                        'description' => '资源组名称',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '任务列表。',
                        'type' => 'object',
                        'properties' => [
                            'Jobs' => [
                                'title' => '作业列表',
                                'description' => '任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '单个任务。',
                                    '$ref' => '#/components/schemas/JobItem',
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '符合过滤条件的总作业数',
                                'description' => '符合过滤条件的总任务数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Jobs\\": [\\n    {\\n      \\"JobId\\": \\"dlc-20210126170216-mtl37ge7gkvdz\\",\\n      \\"JobType\\": \\"TFJob\\",\\n      \\"DisplayName\\": \\"tf-mnist-test\\",\\n      \\"UserId\\": \\"123456789\\",\\n      \\"Username\\": \\"pai-dlc-role\\",\\n      \\"Status\\": \\"Stopped\\",\\n      \\"WorkspaceId\\": \\"268\\",\\n      \\"WorkspaceName\\": \\"dlc-workspace\\",\\n      \\"ResourceId\\": \\"dlc-quota\\",\\n      \\"ResourceLevel\\": \\"L0\\",\\n      \\"ReasonCode\\": \\"JobStoppedByUser\\",\\n      \\"ReasonMessage\\": \\"Job is stopped by user.\\",\\n      \\"JobSpecs\\": [\\n        {\\n          \\"Type\\": \\"Worker\\",\\n          \\"Image\\": \\"registry.cn-hangzhou.aliyuncs.com/pai-dlc/tensorflow-training:1.12.2PAI-cpu-py27-ubuntu16.04\\",\\n          \\"ImageConfig\\": {\\n            \\"DockerRegistry\\": \\"registry.cn-hangzhou.aliyuncs.com\\",\\n            \\"Username\\": \\"\\",\\n            \\"Password\\": \\"\\",\\n            \\"Auth\\": \\"\\"\\n          },\\n          \\"PodCount\\": 1,\\n          \\"EcsSpec\\": \\"ecs.c6.large\\",\\n          \\"ExtraPodSpec\\": {\\n            \\"SideCarContainers\\": [\\n              {\\n                \\"Name\\": \\"data-init\\",\\n                \\"Image\\": \\"registry.cn-hangzhou.aliyuncs.com/pai-dlc/curl:v1.0.0\\",\\n                \\"Command\\": [\\n                  \\"curl www.aliyun.com\\"\\n                ],\\n                \\"Args\\": [\\n                  \\"\\"\\n                ],\\n                \\"WorkingDir\\": \\"/root\\",\\n                \\"Env\\": [\\n                  {\\n                    \\"Name\\": \\"ENABLE_DEBUG\\",\\n                    \\"Value\\": \\"true\\"\\n                  }\\n                ],\\n                \\"Resources\\": {\\n                  \\"Limits\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"Requests\\": {\\n                    \\"key\\": \\"\\"\\n                  }\\n                }\\n              }\\n            ],\\n            \\"InitContainers\\": [\\n              {\\n                \\"Name\\": \\"data-init\\",\\n                \\"Image\\": \\"registry.cn-hangzhou.aliyuncs.com/pai-dlc/curl:v1.0.0\\",\\n                \\"Command\\": [\\n                  \\"curl www.aliyun.com\\"\\n                ],\\n                \\"Args\\": [\\n                  \\"\\"\\n                ],\\n                \\"WorkingDir\\": \\"/root\\",\\n                \\"Env\\": [\\n                  {\\n                    \\"Name\\": \\"ENABLE_DEBUG\\",\\n                    \\"Value\\": \\"true\\"\\n                  }\\n                ],\\n                \\"Resources\\": {\\n                  \\"Limits\\": {\\n                    \\"key\\": \\"\\"\\n                  },\\n                  \\"Requests\\": {\\n                    \\"key\\": \\"\\"\\n                  }\\n                }\\n              }\\n            ],\\n            \\"PodLabels\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"PodAnnotations\\": {\\n              \\"key\\": \\"\\"\\n            },\\n            \\"SharedVolumeMountPaths\\": [\\n              \\"/root/share/\\"\\n            ]\\n          },\\n          \\"ResourceConfig\\": {\\n            \\"CPU\\": \\"10\\",\\n            \\"GPU\\": \\"3\\",\\n            \\"Memory\\": \\"10Gi\\",\\n            \\"SharedMemory\\": \\"5Gi\\",\\n            \\"GPUType\\": \\"Tesla-V100-16G\\"\\n          },\\n          \\"UseSpotInstance\\": false,\\n          \\"SpotSpec\\": {\\n            \\"SpotStrategy\\": \\"\\",\\n            \\"SpotDiscountLimit\\": 0\\n          }\\n        }\\n      ],\\n      \\"UserCommand\\": \\"python /root/code/mnist.py\\",\\n      \\"DataSources\\": [\\n        {\\n          \\"DataSourceId\\": \\"data-20210114104214-vf9lowjt3pso\\",\\n          \\"MountPath\\": \\"/mnt/data\\"\\n        }\\n      ],\\n      \\"CodeSource\\": {\\n        \\"CodeSourceId\\": \\"code-20210111103721-85qz78ia96lu\\",\\n        \\"Branch\\": \\"master\\",\\n        \\"Commit\\": \\"44da109b59f8596152987eaa8f3b2487bb72ea63\\",\\n        \\"MountPath\\": \\"/mnt/data\\"\\n      },\\n      \\"ThirdpartyLibs\\": [\\n        \\"numpy==1.16.1\\"\\n      ],\\n      \\"ThirdpartyLibDir\\": \\"/root/code/\\",\\n      \\"Envs\\": {\\n        \\"key\\": \\"ENABLE_DEBUG_MODE\\"\\n      },\\n      \\"GmtCreateTime\\": \\"2021-01-12T14:35:01Z\\",\\n      \\"GmtSubmittedTime\\": \\"2021-01-12T14:35:01Z\\",\\n      \\"GmtRunningTime\\": \\"2021-01-12T14:35:01Z\\",\\n      \\"GmtSuccessedTime\\": \\"2021-01-12T14:35:01Z\\",\\n      \\"GmtStoppedTime\\": \\"2021-01-12T14:35:01Z\\",\\n      \\"GmtFailedTime\\": \\"2021-01-12T14:35:01Z\\",\\n      \\"GmtFinishTime\\": \\"2021-01-12T15:36:08Z\\",\\n      \\"Duration\\": 3602,\\n      \\"Settings\\": {\\n        \\"BusinessUserId\\": \\"166924\\",\\n        \\"Caller\\": \\"SilkFlow\\",\\n        \\"Tags\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"PipelineId\\": \\"pid-123456\\",\\n        \\"EnableTideResource\\": true,\\n        \\"EnableErrorMonitoringInAIMaster\\": false,\\n        \\"ErrorMonitoringArgs\\": \\"--enable-log-hang-detection true\\",\\n        \\"EnableRDMA\\": true,\\n        \\"EnableOssAppend\\": true,\\n        \\"OversoldType\\": \\"AcceptQuotaOverSold\\",\\n        \\"AdvancedSettings\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Driver\\": \\"535.54.03\\",\\n        \\"EnableSanityCheck\\": true,\\n        \\"SanityCheckArgs\\": \\"--sanity-check-timing=AfterJobFaultTolerant --sanity-check-timeout-ops=MarkJobFai\\",\\n        \\"JobReservedMinutes\\": 30,\\n        \\"JobReservedPolicy\\": \\"Always\\"\\n      },\\n      \\"EnabledDebugger\\": false,\\n      \\"ResourceName\\": \\"my_resource_group\\",\\n      \\"Priority\\": 1,\\n      \\"SubStatus\\": \\"Restarting\\",\\n      \\"UseOversoldResource\\": false,\\n      \\"ResourceType\\": \\"ECS\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 2,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<不支持/>","errorExample":""}]',
            'title' => '获取任务列表',
        ],
        'GetJob' => [
            'summary' => '获取一个任务的详细配置和运行时信息。',
            'path' => '/api/v1/jobs/{JobId}',
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
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业Id',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc*******',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'NeedDetail',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否返回作业详情信息，默认为true',
                        'description' => '是否返回作业详情信息，默认为true',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'JSON格式的字符串。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业Id',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc*******',
                            ],
                            'JobType' => [
                                'title' => '作业类型',
                                'description' => '任务类型。由[CreateJob](~~459672~~) API中的JobType指定。',
                                'type' => 'string',
                                'example' => 'TFJob',
                            ],
                            'DisplayName' => [
                                'title' => '作业显示名称',
                                'description' => '任务名称。',
                                'type' => 'string',
                                'example' => 'tf-mnist-test',
                            ],
                            'UserId' => [
                                'title' => '作业提交人Id',
                                'description' => '任务提交人的阿里云UID。',
                                'type' => 'string',
                                'example' => '12*********',
                            ],
                            'Status' => [
                                'title' => '作业状态',
                                'description' => '任务运行状态，可能值：'."\n"
                                    ."\n"
                                    .'- Created'."\n"
                                    .'- Creating'."\n"
                                    .'- Queuing'."\n"
                                    .'- Dequeued'."\n"
                                    .'- Running'."\n"
                                    .'- Stopping'."\n"
                                    .'- Succeeded'."\n"
                                    .'- Failed'."\n"
                                    .'- Stopped',
                                'type' => 'string',
                                'example' => 'Stopped',
                            ],
                            'WorkspaceId' => [
                                'title' => '作业所属工作空间ID',
                                'description' => '任务所属工作空间ID。',
                                'type' => 'string',
                                'example' => '268',
                            ],
                            'WorkspaceName' => [
                                'title' => '作业所属工作空间名称',
                                'description' => '任务所属工作空间名称。',
                                'type' => 'string',
                                'example' => 'dlc-workspace',
                            ],
                            'ResourceId' => [
                                'title' => '作业运行所在的资源组ID',
                                'description' => '任务运行所在的资源组ID。',
                                'type' => 'string',
                                'example' => 'r******',
                            ],
                            'ResourceLevel' => [
                                'title' => '作业运行时使用的资源级别',
                                'description' => '任务运行时使用的资源级别。',
                                'type' => 'string',
                                'example' => 'L0',
                            ],
                            'ReasonCode' => [
                                'title' => '状态详情码',
                                'description' => '状态详情码，对当前状态（Status）下的子状态的一个分类。',
                                'type' => 'string',
                                'example' => 'JobStoppedByUser',
                            ],
                            'ReasonMessage' => [
                                'title' => '状态详情',
                                'description' => '状态详情的详细描述。',
                                'type' => 'string',
                                'example' => 'Job is stopped by user.',
                            ],
                            'JobSpecs' => [
                                'title' => '作业规格配置',
                                'description' => '任务中的节点配置，参考CreateJob API中的**JobSpecs**。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '描述一种节点类型的详细配置。',
                                    '$ref' => '#/components/schemas/JobSpec',
                                ],
                            ],
                            'UserCommand' => [
                                'title' => '用户命令',
                                'description' => '每个节点的启动命令。',
                                'type' => 'string',
                                'example' => 'python /root/code/mnist.py',
                            ],
                            'DataSources' => [
                                'title' => '数据源配置列表',
                                'description' => '数据源列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据源。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DataSourceId' => [
                                            'title' => '数据源Id',
                                            'description' => '数据源ID。',
                                            'type' => 'string',
                                            'example' => 'd*******',
                                        ],
                                        'MountPath' => [
                                            'title' => '本地挂载路径',
                                            'description' => '本地挂载路径，可选参数，默认为空（表示使用数据源中挂载路径）。',
                                            'type' => 'string',
                                            'example' => '/mnt/data/',
                                        ],
                                        'Uri' => [
                                            'title' => '数据源路径',
                                            'description' => '数据源路径',
                                            'type' => 'string',
                                            'example' => 'oss://bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/',
                                        ],
                                    ],
                                ],
                            ],
                            'CodeSource' => [
                                'title' => '代码源配置',
                                'description' => '代码源。',
                                'type' => 'object',
                                'properties' => [
                                    'CodeSourceId' => [
                                        'title' => '代码源Id',
                                        'description' => '代码源ID。',
                                        'type' => 'string',
                                        'example' => 'code******',
                                    ],
                                    'Branch' => [
                                        'title' => '代码分支',
                                        'description' => '代码分支。',
                                        'type' => 'string',
                                        'example' => 'master',
                                    ],
                                    'Commit' => [
                                        'title' => '代码Commit',
                                        'description' => '代码CommitID。',
                                        'type' => 'string',
                                        'example' => '44da109b59f8596152987eaa8f3b2487xxxxxx',
                                    ],
                                    'MountPath' => [
                                        'title' => '本地挂载路径',
                                        'description' => '本地挂载路径。',
                                        'type' => 'string',
                                        'example' => '/mnt/data',
                                    ],
                                ],
                            ],
                            'ThirdpartyLibs' => [
                                'title' => '三方库配置列表',
                                'description' => '需要安装的Python三方库列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '第三方Python库。',
                                    'type' => 'string',
                                    'example' => 'numpy==1.16.1',
                                ],
                            ],
                            'ThirdpartyLibDir' => [
                                'title' => '三方库(requirements.txt)文件路径',
                                'description' => '三方库（requirements.txt）文件所在文件夹。',
                                'type' => 'string',
                                'example' => '/root/code/',
                            ],
                            'Envs' => [
                                'title' => '环境变量配置',
                                'description' => '环境变量配置。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'example' => 'ENABLE_DEBUG_MODE',
                                    'description' => '环境变量Key和Value。',
                                ],
                            ],
                            'GmtCreateTime' => [
                                'title' => '作业创建时间（UTC）',
                                'description' => '任务创建时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:35:01Z',
                            ],
                            'GmtSubmittedTime' => [
                                'description' => '任务提交到集群的时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:01Z',
                            ],
                            'GmtRunningTime' => [
                                'description' => '任务开始运行的时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T14:36:21Z',
                            ],
                            'GmtSuccessedTime' => [
                                'description' => '任务正常结束的时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T15:36:08Z',
                            ],
                            'GmtStoppedTime' => [
                                'description' => '任务停止的时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T15:36:08Z',
                            ],
                            'GmtFailedTime' => [
                                'description' => '任务运行失败的时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T15:36:08Z',
                            ],
                            'GmtFinishTime' => [
                                'title' => '作业结束时间（UTC）',
                                'description' => '任务结束时间（UTC）。',
                                'type' => 'string',
                                'example' => '2021-01-12T15:36:08Z',
                            ],
                            'Duration' => [
                                'title' => '作业运行时长（s）',
                                'description' => '任务运行时长，单位：秒。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3602',
                            ],
                            'Pods' => [
                                'title' => '作业所以运行Pod列表',
                                'description' => '任务运行中的所有节点。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '节点数组。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'title' => 'Pod类型',
                                            'description' => '节点类型，与CreateJob中的JobSpecs中的某个JobSpec对应。',
                                            'type' => 'string',
                                            'example' => 'Worker',
                                        ],
                                        'PodId' => [
                                            'title' => 'Pod Id',
                                            'description' => '节点ID，可用于GetPodLogs和GetPodEvents API获取节点的详细日志和事件。',
                                            'type' => 'string',
                                            'example' => 'Worker',
                                        ],
                                        'PodUid' => [
                                            'title' => 'Pod UId',
                                            'description' => 'Pod UID。',
                                            'type' => 'string',
                                            'example' => 'fe846462-af2c-4521-bd6f-96787a57591d',
                                        ],
                                        'Status' => [
                                            'title' => 'Pod状态',
                                            'description' => '节点状态。可能值：'."\n"
                                                ."\n"
                                                .'- Pending'."\n"
                                                .'- Running'."\n"
                                                .'- Succeeded'."\n"
                                                .'- Failed'."\n"
                                                .'- Unknown',
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'Ip' => [
                                            'title' => 'Pod Ip',
                                            'description' => '节点的网络IP地址。',
                                            'type' => 'string',
                                            'example' => '10.0.1.2',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => 'Pod创建时间（UTC）',
                                            'description' => 'Pod创建时间（UTC）。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'GmtStartTime' => [
                                            'title' => 'Pod启动时间（UTC）',
                                            'description' => '节点启动时间（UTC）。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T14:36:01Z',
                                        ],
                                        'GmtFinishTime' => [
                                            'title' => 'Pod结束时间（UTC）',
                                            'description' => '节点结束时间（UTC）。',
                                            'type' => 'string',
                                            'example' => '2021-01-12T15:36:05Z',
                                        ],
                                        'HistoryPods' => [
                                            'title' => '历史Pods',
                                            'description' => '历史Pods。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '历史Pod数组。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Type' => [
                                                        'title' => 'Pod类型',
                                                        'description' => 'Pod类型。',
                                                        'type' => 'string',
                                                        'example' => 'Worker',
                                                    ],
                                                    'PodId' => [
                                                        'title' => 'Pod Id',
                                                        'description' => 'Pod ID。',
                                                        'type' => 'string',
                                                        'example' => 'Worker',
                                                    ],
                                                    'PodUid' => [
                                                        'title' => 'Pod UId',
                                                        'description' => 'Pod UID。',
                                                        'type' => 'string',
                                                        'example' => 'fe846462-af2c-4521-bd6f-96787a57591d',
                                                    ],
                                                    'Status' => [
                                                        'title' => 'Pod状态',
                                                        'description' => 'Pod状态。',
                                                        'type' => 'string',
                                                        'example' => 'Failed',
                                                    ],
                                                    'Ip' => [
                                                        'title' => 'Pod Ip',
                                                        'description' => 'Pod IP。',
                                                        'type' => 'string',
                                                        'example' => '10.0.1.3',
                                                    ],
                                                    'GmtCreateTime' => [
                                                        'title' => 'Pod创建时间（UTC）',
                                                        'description' => 'Pod创建时间（UTC）。',
                                                        'type' => 'string',
                                                        'example' => '2021-01-12T14:36:01Z',
                                                    ],
                                                    'GmtStartTime' => [
                                                        'title' => 'Pod启动时间（UTC）',
                                                        'description' => 'Pod启动时间（UTC）。',
                                                        'type' => 'string',
                                                        'example' => '2021-01-12T14:36:01Z',
                                                    ],
                                                    'GmtFinishTime' => [
                                                        'title' => 'Pod结束时间（UTC）',
                                                        'description' => 'Pod结束时间（UTC）。',
                                                        'type' => 'string',
                                                        'example' => '2021-01-12T14:36:01Z',
                                                    ],
                                                    'SubStatus' => [
                                                        'title' => 'Pod子状态，如抢占状态',
                                                        'description' => 'Pod子状态，例如抢占状态。取值如下：'."\n"
                                                            .'- Normal'."\n"
                                                            .'- Evicted',
                                                        'type' => 'string',
                                                        'example' => 'Normal',
                                                    ],
                                                    'ResourceType' => [
                                                        'title' => 'Pod资源使用类型',
                                                        'description' => 'Pod资源使用类型。',
                                                        'type' => 'string',
                                                        'example' => 'Normal',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'SubStatus' => [
                                            'title' => 'Pod子状态，如抢占状态',
                                            'description' => 'Pod子状态，例如抢占状态。取值如下：'."\n"
                                                .'- Normal'."\n"
                                                .'- Evicted',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                        'ResourceType' => [
                                            'title' => 'Pod资源使用类型',
                                            'description' => 'Pod资源使用类型。',
                                            'type' => 'string',
                                            'example' => 'Normal',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-xxxxxxxx',
                            ],
                            'Settings' => [
                                'title' => '作业额外参数配置',
                                'description' => '作业额外参数配置。',
                                '$ref' => '#/components/schemas/JobSettings',
                            ],
                            'ClusterId' => [
                                'title' => '集群ID',
                                'description' => '集群ID。',
                                'type' => 'string',
                                'example' => 'a*****',
                            ],
                            'ElasticSpec' => [
                                'title' => '弹性任务参数',
                                'description' => '弹性任务参数。',
                                '$ref' => '#/components/schemas/JobElasticSpec',
                            ],
                            'EnabledDebugger' => [
                                'title' => '是否开启debugger任务',
                                'description' => '是否开启debugger任务。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'Priority' => [
                                'title' => '任务的优先级',
                                'description' => '任务的优先级。可能值为1~9。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'SubStatus' => [
                                'title' => '作业子状态，如抢占重试状态',
                                'description' => '作业子状态，例如抢占重试状态。',
                                'type' => 'string',
                                'example' => 'Restarting',
                            ],
                            'RestartTimes' => [
                                'title' => '作业已使用的重试次数和最大重试次数',
                                'description' => '作业已使用的重试次数和最大重试次数。',
                                'type' => 'string',
                                'example' => '0/10',
                            ],
                            'StatusHistory' => [
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/StatusTransitionItem',
                                ],
                            ],
                            'TenantId' => [
                                'type' => 'string',
                            ],
                            'ResourceType' => [
                                'title' => '资源类型，可选值：ECS，Lingjun，ACS',
                                'description' => '资源类型，可选值：ECS，Lingjun，ACS',
                                'type' => 'string',
                                'example' => 'ECS',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc*******\\",\\n  \\"JobType\\": \\"TFJob\\",\\n  \\"DisplayName\\": \\"tf-mnist-test\\",\\n  \\"UserId\\": \\"12*********\\",\\n  \\"Status\\": \\"Stopped\\",\\n  \\"WorkspaceId\\": \\"268\\",\\n  \\"WorkspaceName\\": \\"dlc-workspace\\",\\n  \\"ResourceId\\": \\"r******\\",\\n  \\"ResourceLevel\\": \\"L0\\",\\n  \\"ReasonCode\\": \\"JobStoppedByUser\\",\\n  \\"ReasonMessage\\": \\"Job is stopped by user.\\",\\n  \\"JobSpecs\\": [\\n    {\\n      \\"Type\\": \\"Worker\\",\\n      \\"Image\\": \\"registry.cn-hangzhou.aliyuncs.com/pai-dlc/tensorflow-training:1.12.2PAI-cpu-py27-ubuntu16.04\\",\\n      \\"ImageConfig\\": {\\n        \\"DockerRegistry\\": \\"registry.cn-hangzhou.aliyuncs.com\\",\\n        \\"Username\\": \\"\\",\\n        \\"Password\\": \\"\\",\\n        \\"Auth\\": \\"\\"\\n      },\\n      \\"PodCount\\": 1,\\n      \\"EcsSpec\\": \\"ecs.c6.large\\",\\n      \\"ExtraPodSpec\\": {\\n        \\"SideCarContainers\\": [\\n          {\\n            \\"Name\\": \\"data-init\\",\\n            \\"Image\\": \\"registry.cn-hangzhou.aliyuncs.com/pai-dlc/curl:v1.0.0\\",\\n            \\"Command\\": [\\n              \\"curl www.aliyun.com\\"\\n            ],\\n            \\"Args\\": [\\n              \\"\\"\\n            ],\\n            \\"WorkingDir\\": \\"/root\\",\\n            \\"Env\\": [\\n              {\\n                \\"Name\\": \\"ENABLE_DEBUG\\",\\n                \\"Value\\": \\"true\\"\\n              }\\n            ],\\n            \\"Resources\\": {\\n              \\"Limits\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Requests\\": {\\n                \\"key\\": \\"\\"\\n              }\\n            }\\n          }\\n        ],\\n        \\"InitContainers\\": [\\n          {\\n            \\"Name\\": \\"data-init\\",\\n            \\"Image\\": \\"registry.cn-hangzhou.aliyuncs.com/pai-dlc/curl:v1.0.0\\",\\n            \\"Command\\": [\\n              \\"curl www.aliyun.com\\"\\n            ],\\n            \\"Args\\": [\\n              \\"\\"\\n            ],\\n            \\"WorkingDir\\": \\"/root\\",\\n            \\"Env\\": [\\n              {\\n                \\"Name\\": \\"ENABLE_DEBUG\\",\\n                \\"Value\\": \\"true\\"\\n              }\\n            ],\\n            \\"Resources\\": {\\n              \\"Limits\\": {\\n                \\"key\\": \\"\\"\\n              },\\n              \\"Requests\\": {\\n                \\"key\\": \\"\\"\\n              }\\n            }\\n          }\\n        ],\\n        \\"PodLabels\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"PodAnnotations\\": {\\n          \\"key\\": \\"\\"\\n        },\\n        \\"SharedVolumeMountPaths\\": [\\n          \\"/root/share/\\"\\n        ]\\n      },\\n      \\"ResourceConfig\\": {\\n        \\"CPU\\": \\"10\\",\\n        \\"GPU\\": \\"3\\",\\n        \\"Memory\\": \\"10Gi\\",\\n        \\"SharedMemory\\": \\"5Gi\\",\\n        \\"GPUType\\": \\"Tesla-V100-16G\\"\\n      },\\n      \\"UseSpotInstance\\": false,\\n      \\"SpotSpec\\": {\\n        \\"SpotStrategy\\": \\"\\",\\n        \\"SpotDiscountLimit\\": 0\\n      }\\n    }\\n  ],\\n  \\"UserCommand\\": \\"python /root/code/mnist.py\\",\\n  \\"DataSources\\": [\\n    {\\n      \\"DataSourceId\\": \\"d*******\\",\\n      \\"MountPath\\": \\"/mnt/data/\\",\\n      \\"Uri\\": \\"oss://bucket.oss-cn-hangzhou-internal.aliyuncs.com/path/\\"\\n    }\\n  ],\\n  \\"CodeSource\\": {\\n    \\"CodeSourceId\\": \\"code******\\",\\n    \\"Branch\\": \\"master\\",\\n    \\"Commit\\": \\"44da109b59f8596152987eaa8f3b2487xxxxxx\\",\\n    \\"MountPath\\": \\"/mnt/data\\"\\n  },\\n  \\"ThirdpartyLibs\\": [\\n    \\"numpy==1.16.1\\"\\n  ],\\n  \\"ThirdpartyLibDir\\": \\"/root/code/\\",\\n  \\"Envs\\": {\\n    \\"key\\": \\"ENABLE_DEBUG_MODE\\"\\n  },\\n  \\"GmtCreateTime\\": \\"2021-01-12T14:35:01Z\\",\\n  \\"GmtSubmittedTime\\": \\"2021-01-12T14:36:01Z\\",\\n  \\"GmtRunningTime\\": \\"2021-01-12T14:36:21Z\\",\\n  \\"GmtSuccessedTime\\": \\"2021-01-12T15:36:08Z\\",\\n  \\"GmtStoppedTime\\": \\"2021-01-12T15:36:08Z\\",\\n  \\"GmtFailedTime\\": \\"2021-01-12T15:36:08Z\\",\\n  \\"GmtFinishTime\\": \\"2021-01-12T15:36:08Z\\",\\n  \\"Duration\\": 3602,\\n  \\"Pods\\": [\\n    {\\n      \\"Type\\": \\"Worker\\",\\n      \\"PodId\\": \\"Worker\\",\\n      \\"PodUid\\": \\"fe846462-af2c-4521-bd6f-96787a57591d\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Ip\\": \\"10.0.1.2\\",\\n      \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"GmtStartTime\\": \\"2021-01-12T14:36:01Z\\",\\n      \\"GmtFinishTime\\": \\"2021-01-12T15:36:05Z\\",\\n      \\"HistoryPods\\": [\\n        {\\n          \\"Type\\": \\"Worker\\",\\n          \\"PodId\\": \\"Worker\\",\\n          \\"PodUid\\": \\"fe846462-af2c-4521-bd6f-96787a57591d\\",\\n          \\"Status\\": \\"Failed\\",\\n          \\"Ip\\": \\"10.0.1.3\\",\\n          \\"GmtCreateTime\\": \\"2021-01-12T14:36:01Z\\",\\n          \\"GmtStartTime\\": \\"2021-01-12T14:36:01Z\\",\\n          \\"GmtFinishTime\\": \\"2021-01-12T14:36:01Z\\",\\n          \\"SubStatus\\": \\"Normal\\",\\n          \\"ResourceType\\": \\"Normal\\"\\n        }\\n      ],\\n      \\"SubStatus\\": \\"Normal\\",\\n      \\"ResourceType\\": \\"Normal\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-xxxxxxxx\\",\\n  \\"Settings\\": {\\n    \\"BusinessUserId\\": \\"166924\\",\\n    \\"Caller\\": \\"SilkFlow\\",\\n    \\"Tags\\": {\\n      \\"key\\": \\"\\"\\n    },\\n    \\"PipelineId\\": \\"pid-123456\\",\\n    \\"EnableTideResource\\": true,\\n    \\"EnableErrorMonitoringInAIMaster\\": false,\\n    \\"ErrorMonitoringArgs\\": \\"--enable-log-hang-detection true\\",\\n    \\"EnableRDMA\\": true,\\n    \\"EnableOssAppend\\": true,\\n    \\"OversoldType\\": \\"AcceptQuotaOverSold\\",\\n    \\"AdvancedSettings\\": {\\n      \\"test\\": \\"test\\",\\n      \\"test2\\": 1\\n    },\\n    \\"Driver\\": \\"535.54.03\\",\\n    \\"EnableSanityCheck\\": true,\\n    \\"SanityCheckArgs\\": \\"--sanity-check-timing=AfterJobFaultTolerant --sanity-check-timeout-ops=MarkJobFai\\",\\n    \\"JobReservedMinutes\\": 30,\\n    \\"JobReservedPolicy\\": \\"Always\\"\\n  },\\n  \\"ClusterId\\": \\"a*****\\",\\n  \\"ElasticSpec\\": {\\n    \\"EnableElasticTraining\\": true,\\n    \\"MinParallelism\\": 1,\\n    \\"MaxParallelism\\": 8,\\n    \\"AIMasterType\\": \\"\\",\\n    \\"AIMasterDockerImage\\": \\"\\",\\n    \\"EnablePsJobElasticWorker\\": true,\\n    \\"EnableAIMaster\\": true,\\n    \\"EnablePsResourceEstimate\\": true,\\n    \\"EnablePsJobElasticPS\\": true,\\n    \\"PSMinParallelism\\": 4,\\n    \\"PSMaxParallelism\\": 10,\\n    \\"ElasticStrategy\\": \\"\\",\\n    \\"EnableEDP\\": true,\\n    \\"EDPMaxParallelism\\": 16,\\n    \\"EDPMinParallelism\\": 8\\n  },\\n  \\"EnabledDebugger\\": false,\\n  \\"Priority\\": 1,\\n  \\"SubStatus\\": \\"Restarting\\",\\n  \\"RestartTimes\\": \\"0/10\\",\\n  \\"StatusHistory\\": [\\n    {\\n      \\"Status\\": \\"\\",\\n      \\"StartTime\\": \\"\\",\\n      \\"EndTime\\": \\"\\",\\n      \\"ReasonCode\\": \\"\\",\\n      \\"ReasonMessage\\": \\"\\"\\n    }\\n  ],\\n  \\"TenantId\\": \\"\\",\\n  \\"ResourceType\\": \\"ECS\\"\\n}","errorExample":""},{"type":"xml","example":"<不支持/>","errorExample":""}]',
            'title' => '获取任务详情',
        ],
        'GetJobSanityCheckResult' => [
            'summary' => '获取DLC任务某次算力健康检测结果。',
            'path' => '/api/v1/jobs/{JobId}/sanitycheckresult',
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
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlcl5qxoxxxxx5iq',
                    ],
                ],
                [
                    'name' => 'SanityCheckNumber',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '任务第几次算力健康检测。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'SanityCheckPhase',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '算力健康检测的检测阶段：'."\n"
                            .'- CheckInit：检测环境准备。'."\n"
                            .'- DeviceCheck：单卡算力检测。'."\n"
                            .'- SingleNodeCommCheck：单节点内部通信检测。'."\n"
                            .'- TwoNodeCommCheck：两节点间通信检测。'."\n"
                            .'- AllNodeCommCheck：所有节点通信检测。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DeviceCheck',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务分享令牌中的Token信息。如何获取，请参见[GetToken](~~2557812~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJhbG******zI1NiIsInR5cCI6IkpXVCJ9.eyJle****jE3MDk1Mzk0NDIsImlhdCI6MTcwODkzNDY0MiwidXNlcl9pZCI6IjE3NTgwNTQxNjI0Mzg2NTUiLCJ0YXJnZXRfaWQiOiJkbGM1OGh1a2xyYzZwdGMyIiwidGFyZ2V0X3R5cGUiOiJqb2IifQ.GNL7jo6****mgKKv0QeGIYgvBufSU-PH_EQttX****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '单次算力健康检测结果。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-xxxxxx',
                            ],
                            'SanityCheckResult' => [
                                'description' => '算力健康检测的检测结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '一个检测阶段的算力健康检测结果。返回值各字段说明：'."\n"
                                        .'- Phase：检测阶段。'."\n"
                                        .'- Message：检测结果信息。'."\n"
                                        .'- StartedAt: 检测开始时间。'."\n"
                                        .'- FinishedAt：检测结束时间。'."\n"
                                        .'- Status：检测状态。'."\n"
                                        .'- CheckNumber：第几次检测。',
                                    '$ref' => '#/components/schemas/SanityCheckResultItem',
                                ],
                            ],
                            'RequestID' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'B3789344-F1xxxBE-5xx2-A04D-xxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-xxxxxx\\",\\n  \\"SanityCheckResult\\": [\\n    {\\n      \\"Phase\\": \\"CheckInit\\",\\n      \\"Message\\": \\"\\",\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StartedAt\\": \\"”2023-11-30T16:47:30.343005+08:00“\\",\\n      \\"FinishedAt\\": \\"”2023-11-30T16:47:30.378817+08:00\\\\\\"\\",\\n      \\"CheckNumber\\": 1\\n    }\\n  ],\\n  \\"RequestID\\": \\"B3789344-F1xxxBE-5xx2-A04D-xxxxx\\"\\n}","type":"json"}]',
            'title' => '获取任务某次算力健康检测结果',
        ],
        'ListJobSanityCheckResults' => [
            'summary' => '获取某个DLC任务所有算力健康检测的检测结果。',
            'path' => '/api/v1/jobs/{JobId}/sanitycheckresults',
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
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc-20210114104214-xxxx',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排列顺序：'."\n"
                            .'- desc：降序。'."\n"
                            .'- asc：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '任务所有的算力健康检测结果。',
                        'type' => 'object',
                        'properties' => [
                            'SanityCheckResults' => [
                                'description' => '所有的算力健康检测的检测结果。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '一条完整的算力健康检测的检测结果。',
                                    'type' => 'array',
                                    'items' => [
                                        'description' => '单个检测阶段的算力健康检测结果。返回值各字段说明如下：'."\n"
                                            .'- Phase：检测阶段。'."\n"
                                            .'- Message：检测结果信息。'."\n"
                                            .'- StartedAt：检测开始时间。'."\n"
                                            .'- FinishedAt：检测结束时间。'."\n"
                                            .'- Status：检测状态。'."\n"
                                            .'- CheckNumber：第几次检测。',
                                        '$ref' => '#/components/schemas/SanityCheckResultItem',
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '符合过滤条件的总SanityCheck检测结果数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'RequestID' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1AC9xxx-3xxx-5xxx2-xxxx-FA5',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SanityCheckResults\\": [\\n    [\\n      {\\n        \\"Phase\\": \\"CheckInit\\",\\n        \\"Message\\": \\"\\",\\n        \\"Status\\": \\"Succeeded\\",\\n        \\"StartedAt\\": \\"”2023-11-30T16:47:30.343005+08:00“\\",\\n        \\"FinishedAt\\": \\"”2023-11-30T16:47:30.378817+08:00\\\\\\"\\",\\n        \\"CheckNumber\\": 1\\n      }\\n    ]\\n  ],\\n  \\"TotalCount\\": 10,\\n  \\"RequestID\\": \\"1AC9xxx-3xxx-5xxx2-xxxx-FA5\\"\\n}","type":"json"}]',
            'title' => '获取任务所有算力健康检测结果',
        ],
        'GetPodLogs' => [
            'summary' => '获取（或者下载）任务某个节点的日志，日志来源于系统和用户脚本的stdout和stderr。',
            'path' => '/api/v1/jobs/{JobId}/pods/{PodId}/logs',
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
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc-20210126170216-*****',
                    ],
                ],
                [
                    'name' => 'PodId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '实例ID',
                        'description' => '节点ID。如何获取节点ID，请参见[GetJob](~~459677~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc-20210126170216-*****-chief-0',
                    ],
                ],
                [
                    'name' => 'PodUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点UID；如何获取节点UID，请参见[GetJob](~~459677~~)。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [],
                        'example' => 'fe846462-af2c-4521-bd6f-96787a57****',
                    ],
                ],
                [
                    'name' => 'MaxLines',
                    'in' => 'query',
                    'schema' => [
                        'title' => '返回的日志的最大行数，默认值：2000。',
                        'description' => '返回的日志的最大行数，默认值：2000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询的起始时间，默认值：7天前。',
                        'description' => '查询的起始时间，默认值：7天前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询的截止时间，默认值：当前。',
                        'description' => '查询的截止时间，默认值：当前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T17:00:00Z',
                    ],
                ],
                [
                    'name' => 'DownloadToFile',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否下载日志文件，默认：false。',
                        'description' => '是否下载日志文件。取值如下：'."\n"
                            .'- false（默认）：表示不下载日志文件。'."\n"
                            .'- true：开始下载日志文件。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回值',
                        'description' => '返回值。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业ID',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-******',
                            ],
                            'PodId' => [
                                'title' => '实例ID',
                                'description' => '节点ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-****-chief-0',
                            ],
                            'PodUid' => [
                                'title' => '实例UID',
                                'description' => '实例UID。',
                                'type' => 'string',
                                'example' => '94a7cc7c-0033-48b5-85bd-71c63592c268',
                            ],
                            'Logs' => [
                                'title' => '日志列表',
                                'description' => '日志列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '日志列表。',
                                    'type' => 'string',
                                    'example' => '2021-01-28 14:07:45  My Job started.',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '此次调用的请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-******\\",\\n  \\"PodId\\": \\"dlc-20210126170216-****-chief-0\\",\\n  \\"PodUid\\": \\"94a7cc7c-0033-48b5-85bd-71c63592c268\\",\\n  \\"Logs\\": [\\n    \\"2021-01-28 14:07:45  My Job started.\\"\\n  ],\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<JobId>dlc-20210126170216-******</JobId>\\n<PodId>dlc-20210126170216-****-chief-0</PodId>\\n<Logs>2021-01-28 14:07:45  My Job started.</Logs>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>","errorExample":""}]',
            'title' => '获取任务中某个节点的日志',
        ],
        'GetPodEvents' => [
            'summary' => '获取一个任务中某个节点的系统事件。',
            'path' => '/api/v1/jobs/{JobId}/pods/{PodId}/events',
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
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '作业ID',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc-20210126170216-*****',
                    ],
                ],
                [
                    'name' => 'PodId',
                    'in' => 'path',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '运行实例ID',
                        'description' => '节点ID。如何获取节点ID，请参见[GetJob](~~459677~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc-20210126170216-mtl37ge7gkvdz-chief-0',
                    ],
                ],
                [
                    'name' => 'PodUid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '运行实例UID',
                        'description' => '节点UID。如何获取节点UID，请参见[GetJob](~~459677~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-20210126170216-*****-chief-0',
                    ],
                ],
                [
                    'name' => 'MaxEventsNum',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '返回的事件最大数量',
                        'description' => '返回的事件最大数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间',
                        'description' => '起始时间（UTC）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间',
                        'description' => '截止时间（UTC）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-09T16:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回的任务事件的信息。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业ID',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-*****',
                            ],
                            'PodId' => [
                                'title' => '运行示例ID',
                                'description' => '节点ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'dlc-20210126170216-*****-chief-0',
                            ],
                            'PodUid' => [
                                'description' => '实例UID。',
                                'type' => 'string',
                                'example' => '94a7cc7c-0033-48b5-85bd-71c63592c268',
                            ],
                            'Events' => [
                                'title' => '事件列表',
                                'description' => '事件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '事件列表。',
                                    'type' => 'string',
                                    'example' => '2021-01-28 14:07:45 Successfully pulled image.',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '本次调用的请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-*****\\",\\n  \\"PodId\\": \\"dlc-20210126170216-*****-chief-0\\",\\n  \\"PodUid\\": \\"94a7cc7c-0033-48b5-85bd-71c63592c268\\",\\n  \\"Events\\": [\\n    \\"2021-01-28 14:07:45 Successfully pulled image.\\"\\n  ],\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<JobId>dlc-20210126170216-*****</JobId>\\n<PodId>dlc-20210126170216-*****-chief-0</PodId>\\n<Events>2021-01-28 14:07:45 Successfully pulled image.</Events>\\n<RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>","errorExample":""}]',
            'title' => '获取任务中某个节点的系统事件',
        ],
        'GetJobMetrics' => [
            'summary' => '获取一个任务的监控数据，包括CPU、GPU、Memory的使用率、Network、Disk读写速率等。',
            'path' => '/api/v1/jobs/{JobId}/metrics',
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
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID',
                        'description' => '任务ID。您可以调用[ListJobs](~~203116~~)获取所有任务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'dlc-20210126170216-*******',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间',
                        'description' => '查询监控数据的时间区间的起始时间（UTC），默认值是1小时前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间',
                        'description' => '查询监控数据的时间区间的截止时间（UTC），默认值是当前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-09T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'TimeStep',
                    'in' => 'query',
                    'schema' => [
                        'title' => '时间间隔',
                        'description' => '返回监控数据的时间间隔，默认值是5分钟。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5m',
                    ],
                ],
                [
                    'name' => 'MetricType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '指标类型',
                        'description' => '查询监控数据的指标类型，取值如下：'."\n"
                            ."\n"
                            .'- GpuCoreUsage：GPU使用率。'."\n"
                            ."\n"
                            .'- GpuMemoryUsage：GPU Memory使用率。'."\n"
                            ."\n"
                            .'- CpuCoreUsage：CPU使用率。'."\n"
                            ."\n"
                            .'- MemoryUsage：Memory使用率。'."\n"
                            ."\n"
                            .'- NetworkInputRate：网络写入速率。'."\n"
                            ."\n"
                            .'- NetworkOutputRate：网络写出速率。'."\n"
                            ."\n"
                            .'- DiskReadRate：磁盘读取速率。'."\n"
                            ."\n"
                            .'- DiskWriteRate：磁盘写入速率。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'GpuMemoryUsage',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Token',
                        'description' => '用于鉴权的临时令牌。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyXXXX-XXXX.XXXXX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '作业监控指标',
                        'description' => '任务监控数据信息。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业ID',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-*******',
                            ],
                            'PodMetrics' => [
                                'title' => '任务监控指标序列集合',
                                'description' => '任务监控数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '任务监控数据。',
                                    '$ref' => '#/components/schemas/PodMetric',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '本次调用的请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-*******\\",\\n  \\"PodMetrics\\": [\\n    {\\n      \\"PodId\\": \\"dlc-20210329110128-746bf7cl47pr8-worker-0\\",\\n      \\"Metrics\\": [\\n        {\\n          \\"Time\\": 1616987726587,\\n          \\"Value\\": 23.45\\n        }\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<GetJobMetricsResponse>\\n    <JobId>dlc-20210126170216-*******</JobId>\\n    <PodMetrics>\\n        <PodId>dlc-20210329110128-******-worker-0</PodId>\\n        <Metrics>\\n            <Time>1616987726587</Time>\\n            <Value>23.45</Value>\\n        </Metrics>\\n    </PodMetrics>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</GetJobMetricsResponse>","errorExample":""}]',
            'title' => '获取任务的监控数据',
        ],
        'GetJobEvents' => [
            'summary' => '获取一个任务的系统事件。',
            'path' => '/api/v1/jobs/{JobId}/events',
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
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '作业ID',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'dlc-20210126170216-*******',
                    ],
                ],
                [
                    'name' => 'MaxEventsNum',
                    'in' => 'query',
                    'schema' => [
                        'title' => '获取事件的最大数目，默认值：2000',
                        'description' => '获取事件的最大数目，默认值：2000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '100',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询事件的时间区间的起始时间，默认值是7天前。',
                        'description' => '查询事件的时间区间的起始时间（UTC），默认值是7天前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询事件的时间区间的截止时间，默认值是当前。',
                        'description' => '查询事件的时间区间的截止时间（UTC），默认值是当前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T18:00:00Z',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回作业的系统事件信息。',
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '作业ID',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-******',
                            ],
                            'Events' => [
                                'title' => '事件',
                                'description' => '事件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '事件信息内容。',
                                    'type' => 'string',
                                    'example' => '2021-01-28 14:07:24 Created pod: dlc-20210128140506-oms3s46wcfl6g-worker-0',
                                ],
                            ],
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '本次调用的请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '78F6FCE2-278F-4C4A-A6B7-DD8ECEA9C456',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-******\\",\\n  \\"Events\\": [\\n    \\"2021-01-28 14:07:24 Created pod: dlc-20210128140506-oms3s46wcfl6g-worker-0\\"\\n  ],\\n  \\"RequestId\\": \\"78F6FCE2-278F-4C4A-A6B7-DD8ECEA9C456\\"\\n}","errorExample":""},{"type":"xml","example":"<JobId>dlc-20210126170216-******</JobId>\\n<Events>2021-01-28 14:07:24 Created pod: dlc-20210128140506-oms3s46wcfl6g-worker-0</Events>","errorExample":""}]',
            'title' => '获取任务的系统事件',
        ],
        'ListEcsSpecs' => [
            'summary' => '查询当前支持的机器资源配置列表。',
            'path' => '/api/v1/ecsspecs',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AcceleratorType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按加速器类型过滤',
                        'description' => '按加速器类型过滤。取值如下：'."\n"
                            .'- CPU'."\n"
                            .'- GPU',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GPU',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按返回字段排序，可选值：Cpu, Gpu, Memory, InstanceType, ResourceType, GpuType, AcceleratorType',
                        'description' => '按返回字段排序。取值如下：'."\n"
                            .'- CPU'."\n"
                            .'- GPU'."\n"
                            .'- Memory'."\n"
                            .'- GmtCreateTime',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Gpu',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序顺序，可选值：desc, asc',
                        'description' => '排序顺序，取值如下：'."\n"
                            .'- desc：逆序排列。'."\n"
                            .'- asc 升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询第几页数据',
                        'description' => '查询第几页数据，起始值为1。',
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
                        'title' => '设置查询的分页大写',
                        'description' => '分页查询时设置的每页显示的数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'InstanceTypes',
                    'in' => 'query',
                    'schema' => [
                        'title' => '需要查询机器规格列表，以逗号分隔',
                        'description' => '需要查询机器规格列表，以逗号分隔',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ecs.g6.large,ecs.g6.xlarge',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资源类型，可选值：ECS、Lingjun',
                        'description' => '资源类型，可选值：ECS、Lingjun',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ECS',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'EcsSpecs' => [
                                'title' => 'ECS规格列表',
                                'description' => 'ECS规格列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '机器资源的配置列表。',
                                    '$ref' => '#/components/schemas/EcsSpec',
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '符合过滤条件的总数量',
                                'description' => '符合过滤条件的总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"EcsSpecs\\": [\\n    {\\n      \\"InstanceType\\": \\"ecs.gn6e-c12g1.3xlarge\\",\\n      \\"AcceleratorType\\": \\"GPU\\",\\n      \\"Cpu\\": 12,\\n      \\"Gpu\\": 1,\\n      \\"GpuType\\": \\"NVIDIA v100\\",\\n      \\"Memory\\": 92,\\n      \\"IsAvailable\\": true,\\n      \\"ResourceType\\": \\"ECS\\",\\n      \\"DefaultGPUDriver\\": \\"470.199.02\\",\\n      \\"SupportedGPUDrivers\\": [\\n        \\"[\\\\\\"470.199.02\\\\\\", \\\\\\"535.54.03\\\\\\"]\\"\\n      ],\\n      \\"SpotStockStatus\\": \\"WithStock\\",\\n      \\"NonProtectSpotDiscount\\": 0.1,\\n      \\"PaymentTypes\\": [\\n        \\"[\\\\\\"Spot\\\\\\",\\\\\\"PostPaid\\\\\\"]\\"\\n      ]\\n    }\\n  ],\\n  \\"TotalCount\\": 10\\n}","errorExample":""},{"type":"xml","example":"<不支持/>","errorExample":""}]',
            'title' => '查询机器资源配置列表',
        ],
        'GetWebTerminal' => [
            'summary' => '获取进入容器的连接。',
            'path' => '/api/v1/jobs/{JobId}/pods/{PodId}/webterminal',
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
            ],
            'parameters' => [
                [
                    'name' => 'JobId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-20210126170216-******',
                    ],
                ],
                [
                    'name' => 'PodId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '任务Pod ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-20210126170216-****-chief-0',
                    ],
                ],
                [
                    'name' => 'PodUid',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Pod UID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '94a7cc7c-0033-48b5-85bd-71c63592c268',
                    ],
                ],
                [
                    'name' => 'IsShared',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否创建用于分享的进入容器链接。'."\n"
                            ."\n"
                            .'若为是，返回用于分享的进入容器链接，链接在三十秒内失效且仅可被使用一次。进入容器链接被使用一次后，其他使用该链接的进入容器请求将无效。'."\n"
                            ."\n"
                            .'若为否，返回普通的进入容器链接，链接在三十秒内失效。使用该链接需进行阿里云身份认证。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
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
                                'description' => '此次调用的请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'WebTerminalUrl' => [
                                'description' => '进入容器的链接。链接为WebSocket URL。用户需构建WebSocket客户端。'."\n"
                                    .'客户端中关于WebSocket的通信格式可参考以下代码：'."\n"
                                    ."\n"
                                    .'  ```'."\n"
                                    .'  ws = new WebSocket('."\n"
                                    .'      `wss://xxxxx`,'."\n"
                                    .'    );'."\n"
                                    .'    ws.onopen = function open() {'."\n"
                                    .'      console.warn(\'connected\');'."\n"
                                    .'      term.write(\'\\r\');'."\n"
                                    .'    };'."\n"
                                    ."\n"
                                    .'    ws.onclose = function close() {'."\n"
                                    .'      console.warn(\'disconnected\');'."\n"
                                    .'      term.write(\'Connection closed\');'."\n"
                                    .'    };'."\n"
                                    ."\n"
                                    .'    // 收到后端返回'."\n"
                                    .'    ws.onmessage = function incoming(event) {'."\n"
                                    .'      const msg = JSON.parse(event.data);'."\n"
                                    .'      console.warn(msg);'."\n"
                                    .'      if (msg.operation === \'stdout\') {'."\n"
                                    .'        term.write(msg.data);'."\n"
                                    .'      } else {'."\n"
                                    .'        console.warn(\'invalid msg operation: \' + msg);'."\n"
                                    .'      }'."\n"
                                    .'    };'."\n"
                                    ."\n"
                                    .'    // 控制台输入'."\n"
                                    .'    term.onData(data => {'."\n"
                                    .'      const msg = { operation: \'stdin\', data: data };'."\n"
                                    .'      ws.send(JSON.stringify(msg));'."\n"
                                    .'    });'."\n"
                                    ."\n"
                                    .'    term.onResize(size => {'."\n"
                                    .'      const msg = { operation: \'resize\', cols: size.cols, rows: size.rows };'."\n"
                                    .'      setTimeout(() => ws.send(JSON.stringify(msg)), 15000);'."\n"
                                    .'    });'."\n"
                                    ."\n"
                                    .'    fitAddon.fit();'."\n"
                                    .'  };'."\n"
                                    .'```',
                                'type' => 'string',
                                'example' => 'wss://*****',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"WebTerminalUrl\\": \\"wss://*****\\"\\n}","type":"json"}]',
            'title' => '获取进入容器的链接',
        ],
        'GetToken' => [
            'summary' => '获取用户Token。',
            'path' => '/api/v1/tokens',
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
            'parameters' => [
                [
                    'name' => 'TargetType',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TargetType',
                        'description' => '分享的任务类型，只可指定job或者tensorboard',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'job',
                    ],
                ],
                [
                    'name' => 'TargetId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TargetId',
                        'description' => '等待分享的任务的ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc*******',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'ExpireTime',
                        'description' => '分享链接过期时间（默认为604800秒），最小值为0',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'RequestId',
                                'description' => '请求ID，用于诊断和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-xxxxxxxx',
                            ],
                            'Token' => [
                                'title' => 'Token',
                                'description' => '任务分享令牌，可作为API GetJob的参数Token，查看分享的任务的信息',
                                'type' => 'string',
                                'example' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9*****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-xxxxxxxx\\",\\n  \\"Token\\": \\"eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9*****\\"\\n}","type":"json"}]',
            'title' => '获取任务分享令牌',
        ],
        'CreateTensorboard' => [
            'summary' => '创建一个Tensorboard，可以通过一个任务或者指定数据源配置来创建。',
            'path' => '/api/v1/tensorboards',
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
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '18654',
                'abilityTreeNodes' => [
                    'FEATURElearnVD2RKE',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数。',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123***',
                            ],
                            'JobId' => [
                                'title' => '任务Id',
                                'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'dlc-20210126170216-mtl37ge7gkvdz',
                            ],
                            'DataSourceId' => [
                                'title' => 'DataSource Id',
                                'description' => '数据集ID，如何获取数据集ID，请参见[ListDatasets](~~457222~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'd-xxxxxxxx',
                            ],
                            'DataSourceType' => [
                                'description' => '数据集类型，取值如下：'."\n"
                                    .'- OSS'."\n"
                                    .'- NAS',
                                'type' => 'string',
                                'required' => false,
                                'enumValueTitles' => [],
                                'example' => 'OSS',
                            ],
                            'Uri' => [
                                'description' => '数据集的URI：'."\n"
                                    .'- 当DataSourceType为OSS时，格式为：`oss://[oss-bucket].[endpoint]/[path]`。'."\n"
                                    .'- 当DataSourceType为NAS时，格式为：`nas://[nas-filesystem-id].[region]/[path]`。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'oss://.oss-cn-shanghai-finance-1.aliyuncs.com/',
                            ],
                            'Options' => [
                                'description' => '数据集的扩展字段为JSON格式，当前支持MountPath：自定义数据集挂载的路径。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"mountpath":"/root/data/"}',
                            ],
                            'SummaryPath' => [
                                'title' => 'Summary 目录',
                                'description' => 'Summary目录。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/root/data/',
                            ],
                            'SummaryRelativePath' => [
                                'description' => 'Summary相对目录。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/summary/',
                            ],
                            'DisplayName' => [
                                'title' => 'Tensorboard名称',
                                'description' => 'Tensorboard名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'tensorboard',
                            ],
                            'SourceType' => [
                                'description' => '来源类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'job',
                            ],
                            'SourceId' => [
                                'description' => '来源ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'dlc-xxxxxx',
                            ],
                            'MaxRunningTimeMinutes' => [
                                'title' => '最长运行时长',
                                'description' => '最长运行时长，单位为：分钟。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '240',
                            ],
                            'DataSources' => [
                                'description' => '数据源配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据源信息。',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/DataSourceItem',
                                ],
                                'required' => false,
                            ],
                            'Cpu' => [
                                'description' => 'CPU核数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1',
                            ],
                            'Memory' => [
                                'description' => '内存大小，单位为：GB。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1000',
                            ],
                            'TensorboardDataSources' => [
                                'description' => 'Tensorboard任务挂载的数据集配置列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Tensorboard数据源配置信息，用于Tensorboard挂载多数据集功能。目前支持按数据集配置（datasource）和按任务配置（dlc）。当Tensorboard数据源配置信息不为空时，DataSourceId配置，Uri, DataSourceType等参数不生效',
                                    'required' => false,
                                    '$ref' => '#/components/schemas/TensorboardDataSourceSpec',
                                ],
                                'required' => false,
                            ],
                            'TensorboardSpec' => [
                                'description' => 'Tensorboard后付费配置信息，用于创建使用后付费资源的Tensorboard任务。',
                                'required' => false,
                                '$ref' => '#/components/schemas/TensorboardSpec',
                            ],
                        ],
                        'required' => false,
                        'example' => '380',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'JobId' => [
                                'title' => '任务Id',
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => 'dlc-20210126170216-xxxxxxxx',
                            ],
                            'DataSourceId' => [
                                'title' => 'DataSourceId',
                                'description' => '数据集ID。',
                                'type' => 'string',
                                'example' => 'ds-20210126170216-xxxxxxxx',
                            ],
                            'TensorboardId' => [
                                'title' => 'Tensorboard id',
                                'description' => 'Tensorboard ID。',
                                'type' => 'string',
                                'example' => 'tbxxxxxxxx',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"JobId\\": \\"dlc-20210126170216-xxxxxxxx\\",\\n  \\"DataSourceId\\": \\"ds-20210126170216-xxxxxxxx\\",\\n  \\"TensorboardId\\": \\"tbxxxxxxxx\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<CreateTensorboardResponse>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</CreateTensorboardResponse>","errorExample":""}]',
            'title' => '创建Tensorboard',
        ],
        'DeleteTensorboard' => [
            'summary' => '删除一个已经停止的Tensorboard。',
            'path' => '/api/v1/tensorboards/{TensorboardId}',
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
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46099',
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Tensorboad Id',
                        'description' => 'Tensorboard ID。如何获取Tensorboard ID，请参见[ListTensorboards](~~459689~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tensorboard-20210114104214-xxxxxxxx',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TensorboardId' => [
                                'title' => 'Tensorboad Id',
                                'description' => 'Tensorboard ID。',
                                'type' => 'string',
                                'example' => 'tensorboard-20210114104214-vf9lowjt3pso',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TensorboardId\\": \\"tensorboard-20210114104214-vf9lowjt3pso\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<DeleteTensorboardResponse>\\n    <TensorboardId>tensorboard-20210114104214-vf9lowjt3pso</TensorboardId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</DeleteTensorboardResponse>","errorExample":""}]',
            'title' => '删除Tensorboard',
        ],
        'StartTensorboard' => [
            'summary' => '启动一个Tensorboard。',
            'path' => '/api/v1/tensorboards/{TensorboardId}/start',
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '380',
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Tensorboad Id',
                        'description' => 'Tensorboard ID。如何获取Tensorboard ID，请参见[ListTensorboards](~~459689~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tensorboard-20210114104214-vf9lowjt3pso',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TensorboardId' => [
                                'title' => 'Tensorboad Id',
                                'description' => 'Tensorboard ID。',
                                'type' => 'string',
                                'example' => 'tensorboard-20210114104214-vf9lowjt3pso',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TensorboardId\\": \\"tensorboard-20210114104214-vf9lowjt3pso\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<StartTensorboardResponse>\\n    <TensorboardId>tensorboard-20210114104214-vf9lowjt3pso</TensorboardId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</StartTensorboardResponse>","errorExample":""}]',
            'title' => '启动Tensorboard',
        ],
        'UpdateTensorboard' => [
            'summary' => '更新一个Tensorboard。',
            'path' => '/api/v1/tensorboards/{TensorboardId}',
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '380',
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Tensorboad Id',
                        'description' => 'Tensorboard ID。如何获取Tensorboard ID，请参见[ListTensorboards](~~459689~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tensorboard-20210114104214-vf9lowjt3pso',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'MaxRunningTimeMinutes',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'MaxRunningTimeMinutes',
                        'description' => '最长运行时长，单位为：分钟。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TensorboardId' => [
                                'title' => 'Tensorboad Id',
                                'description' => 'Tensorboard ID。',
                                'type' => 'string',
                                'example' => 'tensorboard-20210114104214-xxxxxxxx',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TensorboardId\\": \\"tensorboard-20210114104214-xxxxxxxx\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<UpdateTensorboardResponse>\\n    <TensorboardId>tensorboard-20210114104214-xxxxxxxx</TensorboardId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</UpdateTensorboardResponse>","errorExample":""}]',
            'title' => '更新Tensorboard',
        ],
        'StopTensorboard' => [
            'summary' => '停止一个Tensorboard。',
            'path' => '/api/v1/tensorboards/{TensorboardId}/stop',
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
            'operationType' => 'write',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '380',
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Tensorboad Id',
                        'description' => 'Tensorboard ID。如何获取Tensorboard ID，请参见[ListTensorboards](~~459689~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tensorboard-20210114104214-vf9lowjt3pso',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TensorboardId' => [
                                'title' => 'Tensorboad Id',
                                'description' => 'Tensorboard ID。',
                                'type' => 'string',
                                'example' => 'tensorboard-20210114104214-xxxxxxxx',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TensorboardId\\": \\"tensorboard-20210114104214-xxxxxxxx\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<StopTensorboardResponse>\\n    <TensorboardId>tensorboard-20210114104214-xxxxxxxx</TensorboardId>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</StopTensorboardResponse>","errorExample":""}]',
            'title' => '停止Tensorboard',
        ],
        'ListTensorboards' => [
            'summary' => '查询已创建的Tensorboard列表。',
            'path' => '/api/v1/tensorboards',
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
                    'APP' => [],
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
                'abilityTreeCode' => '20382',
                'abilityTreeNodes' => [
                    'FEATURElearnVD2RKE',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否显示详情',
                        'description' => '是否显示详情。取值如下：'."\n"
                            .'- true：显示详情。'."\n"
                            .'- false：不显示详情。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。根据工作空间ID来获取Tensorboard列表。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '380',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据来源。目前仅支持DLC训练任务，即job。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'job',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据来源ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-xxxxxx',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '展示名称',
                        'description' => 'Tensorboard展示名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TestTensorboard',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '根据状态过滤',
                        'description' => 'Tensorboard状态，取值如下：'."\n"
                            .'- Creating：创建中。'."\n"
                            .'- Running：运行中。'."\n"
                            .'- Stopped：已停止。'."\n"
                            .'- Succeeded：已成功。'."\n"
                            .'- Failed：已失败。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Running',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '起始时间',
                        'description' => '查询区间的起始时间。使用Tensorboard的创建UTC时间来过滤。若为空，则默认为当前时间的7天之前。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-08T16:00:00Z',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '截止时间',
                        'description' => '查询区间的截止时间。使用Tensorboard的创建UTC时间来过滤。若为空，则默认为当前时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-11-09T14:45:00Z',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '按返回字段排序',
                        'description' => '按返回的以下字段排序。'."\n"
                            .'- DisplayName：任务名称。'."\n"
                            .'- GmtCreateTime：任务创建时间。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页',
                        'description' => '分页查询，指定当前需要返回的页码，起始值为1。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页返回的作业数',
                        'description' => '分页查询中，指定每页返回的Tensorboard数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '50',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序顺序',
                        'description' => '排序顺序。取值如下：'."\n"
                            .'- desc：降序。'."\n"
                            .'- asc：升序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'JobId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'JobId',
                        'description' => '根据DLC任务ID来过滤Tensorboard任务。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-xxx',
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'TensorboardId',
                        'description' => '根据Tensorboard ID，来过滤Tensorboard列表。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tensorboard-xxx',
                    ],
                ],
                [
                    'name' => 'ShowOwn',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否只返回当前登录者所创建的Tensorboard',
                        'description' => '是否只返回当前登录者所创建的Tensorboard',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                        'default' => 'true',
                    ],
                ],
                [
                    'name' => 'PaymentType',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Tensorboard任务的付费类型。Free代表使用了免费资源的Tensorboard任务。Postpaid代表使用了后付费资源的Tensorboard任务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Postpaid',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
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
                            'Tensorboards' => [
                                'title' => 'Tensorboard 列表',
                                'description' => 'Tensorboard列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'Tensorboard详情。',
                                    '$ref' => '#/components/schemas/Tensorboard',
                                ],
                            ],
                            'TotalCount' => [
                                'title' => '符合条件的数据源总数量',
                                'description' => '符合条件的数据源总数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'title' => '请求Id',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Tensorboards\\": [\\n    {\\n      \\"TensorboardId\\": \\"tensorboard-xxx\\",\\n      \\"TensorboardUrl\\": \\"http://xxxxxx\\",\\n      \\"Status\\": \\"running\\",\\n      \\"Duration\\": \\"1234567\\",\\n      \\"GmtCreateTime\\": \\"2021-01-12T14:35:00Z\\",\\n      \\"GmtModifyTime\\": \\"2021-01-12T14:36:00Z\\",\\n      \\"GmtFinishTime\\": \\"2021-01-12T14:36:00Z\\",\\n      \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n      \\"DisplayName\\": \\"test\\",\\n      \\"DataSourceId\\": \\"datasource-test\\",\\n      \\"SummaryPath\\": \\"/root/data\\",\\n      \\"UserId\\": \\"lycxxxxx\\",\\n      \\"Username\\": \\"tensorboard.pai\\",\\n      \\"ReasonCode\\": \\"Delete by user\\",\\n      \\"ReasonMessage\\": \\"Tensorboard is deleted\\",\\n      \\"JobId\\": \\"dlc-20210114104214-vf9lowjt3pso\\",\\n      \\"TensorboardDataSources\\": [\\n        {\\n          \\"DirectoryName\\": \\"dlcJobName\\",\\n          \\"Name\\": \\"dlcJobName\\",\\n          \\"Id\\": \\"d-vf2fdhxxxxxx\\",\\n          \\"DataSourceType\\": \\"OSS\\",\\n          \\"Uri\\": \\"oss://.oss-cn-shanghai-finance-1.aliyuncs.com/\\",\\n          \\"SourceType\\": \\"datasource\\",\\n          \\"SummaryPath\\": \\"/tensorboard/run1\\",\\n          \\"FullSummaryPath\\": \\"oss://xxxxx/tensorboard/run1\\"\\n        }\\n      ],\\n      \\"TensorboardSpec\\": {\\n        \\"VpcId\\": \\"vpc-xxxx\\",\\n        \\"EcsType\\": \\"ecs.g6.large\\",\\n        \\"SecurityGroupId\\": \\"sg-xxxxx\\",\\n        \\"SwitchId\\": \\"vsw-xxxx\\"\\n      }\\n    }\\n  ],\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\"\\n}","errorExample":""},{"type":"xml","example":"<ListTensorboardsResponse>\\n    <Tensorboards/>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n</ListTensorboardsResponse>","errorExample":""}]',
            'title' => '查询Tensorboard列表',
        ],
        'GetTensorboard' => [
            'summary' => '获取一个Tensorboard的详细信息。',
            'path' => '/api/v1/tensorboards/{TensorboardId}',
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
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '工作空间ID',
                        'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '46099',
                    ],
                ],
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'TensorboardId Id',
                        'description' => 'TensorboardId ID。如何获取Tensorboard ID，请参见[ListTensorboards](~~459689~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tb-20210114104214-xxxxx',
                        'maxLength' => 256,
                        'minLength' => 1,
                    ],
                ],
                [
                    'name' => 'JodId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'JodId',
                        'description' => '任务ID。如何获取任务ID，请参见[ListJobs](~~459676~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dlc-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分享令牌信息，填入该参数可利用分享令牌信息获得查看某个Tensorboard任务的权限。可通过执行[GetTensorboardSharedUrl](~~2557813~~)，在获得的链接中提取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.e'."\n"
                            .'yJleHAiOjE2OTUyODA0NTMsImlhdCI6MTY5NTE5NDA1MywidXNlcl9pZCI6IjExN'."\n"
                            .'Tc3MDMyNzA5OTQ5MDEiLCJ0YXJnZXRfaWQiOiJ0YjRrOGxjNXhmdTM2b3B0Iiw'."\n"
                            .'idGFyZ2V0X3R5cGUiOiJ0ZW5zb3Jib2FyZCJ9.6eT68J-KMBwwfN2d7fj7u6vyPcf0erfqYeizd2N****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => 'Tensorboard详情。',
                        '$ref' => '#/components/schemas/Tensorboard',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TensorboardId\\": \\"tensorboard-xxx\\",\\n  \\"TensorboardUrl\\": \\"http://xxxxxx\\",\\n  \\"Status\\": \\"running\\",\\n  \\"Duration\\": \\"1234567\\",\\n  \\"GmtCreateTime\\": \\"2021-01-12T14:35:00Z\\",\\n  \\"GmtModifyTime\\": \\"2021-01-12T14:36:00Z\\",\\n  \\"GmtFinishTime\\": \\"2021-01-12T14:36:00Z\\",\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"DisplayName\\": \\"test\\",\\n  \\"DataSourceId\\": \\"datasource-test\\",\\n  \\"SummaryPath\\": \\"/root/data\\",\\n  \\"UserId\\": \\"lycxxxxx\\",\\n  \\"Username\\": \\"tensorboard.pai\\",\\n  \\"ReasonCode\\": \\"Delete by user\\",\\n  \\"ReasonMessage\\": \\"Tensorboard is deleted\\",\\n  \\"JobId\\": \\"dlc-20210114104214-vf9lowjt3pso\\",\\n  \\"TensorboardDataSources\\": [\\n    {\\n      \\"DirectoryName\\": \\"dlcJobName\\",\\n      \\"Name\\": \\"dlcJobName\\",\\n      \\"Id\\": \\"d-vf2fdhxxxxxx\\",\\n      \\"DataSourceType\\": \\"OSS\\",\\n      \\"Uri\\": \\"oss://.oss-cn-shanghai-finance-1.aliyuncs.com/\\",\\n      \\"SourceType\\": \\"datasource\\",\\n      \\"SummaryPath\\": \\"/tensorboard/run1\\",\\n      \\"FullSummaryPath\\": \\"oss://xxxxx/tensorboard/run1\\"\\n    }\\n  ],\\n  \\"TensorboardSpec\\": {\\n    \\"VpcId\\": \\"vpc-xxxx\\",\\n    \\"EcsType\\": \\"ecs.g6.large\\",\\n    \\"SecurityGroupId\\": \\"sg-xxxxx\\",\\n    \\"SwitchId\\": \\"vsw-xxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTensorboardResponse>\\n    <TensorboardId>tensorboard-xxx</TensorboardId>\\n    <TensorboardUrl>http://xxxxxx</TensorboardUrl>\\n    <Status>running</Status>\\n    <Duration>1234567</Duration>\\n    <GmtCreateTime>2021-01-12T14:35:00Z</GmtCreateTime>\\n    <GmtModifyTime>2021-01-12T14:36:00Z</GmtModifyTime>\\n    <RequestId>473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E</RequestId>\\n    <DisplayName>test</DisplayName>\\n    <DataSourceId>datasource-test</DataSourceId>\\n    <SummaryPath>/root/data</SummaryPath>\\n    <UserId>lycxxxxx</UserId>\\n    <ReasonCode>Delete by user</ReasonCode>\\n    <ReasonMessage>Tensorboard is deleted</ReasonMessage>\\n    <JobId>dlc-20210114104214-vf9lowjt3pso</JobId>\\n</GetTensorboardResponse>","errorExample":""}]',
            'title' => '获取Tensorboard详情',
        ],
        'GetTensorboardSharedUrl' => [
            'summary' => '获得Tensorboard的分享链接。该链接中包含数字令牌。使用该分享链接可以访问被分享的Tensorboard任务。',
            'path' => '/api/v1/tensorboards/{TensorboardId}/sharedurl',
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
            ],
            'parameters' => [
                [
                    'name' => 'TensorboardId',
                    'in' => 'path',
                    'schema' => [
                        'description' => 'Tensorboard任务的ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tbxxxxxx',
                    ],
                ],
                [
                    'name' => 'ExpireTimeSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分享链接的有效时长，单位：秒。最大值为604800。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '86400',
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
                                'description' => 'Request ID。用于问题查询和答疑。',
                                'type' => 'string',
                                'example' => '473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E',
                            ],
                            'TensorboardSharedUrl' => [
                                'description' => 'Tensorboard的任务分享链接。',
                                'type' => 'string',
                                'example' => 'http://pai-dlc-proxy-xxx.alicyuncs.com/xxx/xxx/token/',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-AA6F-4DC5-B3DB-A3DC0DE3C83E\\",\\n  \\"TensorboardSharedUrl\\": \\"http://pai-dlc-proxy-xxx.alicyuncs.com/xxx/xxx/token/\\"\\n}","type":"json"}]',
            'title' => '获得Tensorboard任务的分享链接',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'pai-dlc.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'pai-dlc.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pai-dlc.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pai-dlc.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pai-dlc.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'pai-dlc.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'pai-dlc.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'pai-dlc.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'pai-dlc.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'pai-dlc.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];
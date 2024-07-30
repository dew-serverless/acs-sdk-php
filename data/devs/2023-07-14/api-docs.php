<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'Devs',
        'version' => '2023-07-14',
    ],
    'directories' => [
        [
            'id' => 190560,
            'title' => '项目',
            'type' => 'directory',
            'children' => [
                'CreateProject',
                'DeleteProject',
                'UpdateProject',
                'PutProject',
                'ListProjects',
                'GetProject',
            ],
        ],
        [
            'id' => 190562,
            'title' => '环境',
            'type' => 'directory',
            'children' => [
                'CreateEnvironment',
                'DeleteEnvironment',
                'UpdateEnvironment',
                'PutEnvironment',
                'ListEnvironments',
                'GetEnvironment',
            ],
        ],
        [
            'id' => 190564,
            'title' => '身份绑定',
            'type' => 'directory',
            'children' => [
                'CreateConnection',
                'DeleteConnection',
                'ListConnections',
                'GetConnection',
                'RefreshConnection',
            ],
        ],
        [
            'id' => 190567,
            'title' => '仓库绑定',
            'type' => 'directory',
            'children' => [
                'CreateRepository',
                'DeleteRepository',
                'ListRepositories',
                'GetRepository',
            ],
        ],
        [
            'id' => 190589,
            'title' => '流水线触发器',
            'type' => 'directory',
            'children' => [
                'CreatePipelineTrigger',
                'DeletePipelineTrigger',
                'UpdatePipelineTrigger',
                'PutPipelineTrigger',
                'ListPipelineTriggers',
                'GetPipelineTrigger',
            ],
        ],
        [
            'id' => 190591,
            'title' => '流水线触发事件',
            'type' => 'directory',
            'children' => [
                'CreatePipelineTriggerEvent',
                'DeletePipelineTriggerEvent',
                'ListPipelineTriggerEvents',
                'GetPipelineTriggerEvent',
            ],
        ],
        [
            'id' => 190596,
            'title' => '流水线',
            'type' => 'directory',
            'children' => [
                'CreatePipeline',
                'ListPipelines',
                'GetPipeline',
                'StartPipeline',
                'CancelPipeline',
                'PutPipelineStatus',
            ],
        ],
        [
            'id' => 190601,
            'title' => '流水线任务',
            'type' => 'directory',
            'children' => [
                'CreateTask',
                'ListTasks',
                'GetTask',
                'StartTask',
                'RetryTask',
                'ResumeTask',
                'CancelTask',
                'PutTaskStatus',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'Checkout' => [
                'title' => '代码拉取信息',
                'description' => '拉取代码所需信息',
                'type' => 'object',
                'properties' => [
                    'remote' => [
                        'title' => '拉取代码时所需的仓库信息',
                        'description' => '拉取代码时所需的仓库信息',
                        'type' => 'string',
                        'example' => 'https:/your_token/@github.com/buptwzj/test-initRepo4.git',
                    ],
                    'ref' => [
                        'title' => '拉取代码时所需的版本信息',
                        'description' => '拉取代码时所需的版本信息',
                        'type' => 'string',
                        'example' => '+001691d0768ca49e9550beeb59fbc163f33b7e88:refs/remotes/origin/master',
                    ],
                ],
            ],
            'CodeupEventPayload' => [
                'title' => 'A short description of struct',
                'description' => 'Code流水线触发事件消息体',
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'title' => 'Codeup原始消息体',
                        'description' => 'Codeup原始消息体',
                        'type' => 'string',
                        'format' => 'byte',
                        'example' => '{'."\n"
                            .'  "before": "03b7be6d28af70ab38ca2ce8b42c3533c622d925",'."\n"
                            .'  "checkout_sha": "baf09c10ee5f28b5f36cec35e5e0e5c0abdcfa8a",'."\n"
                            .'  "object_kind": "push",'."\n"
                            .'  "ref": "refs/heads/test",'."\n"
                            .'  "commits": ['."\n"
                            .'    {'."\n"
                            .'      "id": "baf09c10ee5f28b5f36cec35e5e0e5c0abdcfa8a",'."\n"
                            .'      "message": "fix:recommend\\n"'."\n"
                            .'    }'."\n"
                            .'  ],'."\n"
                            .'  "after": "baf09c10ee5f28b5f36cec35e5e0e5c0abdcfa8a"'."\n"
                            .'}'."\n"
                            .'-- 必须使用原始的codeup发出的webhook事件',
                    ],
                ],
            ],
            'Condition' => [
                'title' => '执行条件',
                'description' => '执行条件',
                'type' => 'object',
                'properties' => [
                    'expression' => [
                        'title' => '返回值为bool类型的表达式',
                        'description' => '返回值为bool类型的表达式',
                        'type' => 'string',
                        'example' => 'enable == true'."\n"
                            .'-- 表示ctx.data.enable的值为true时为真',
                    ],
                ],
            ],
            'Connection' => [
                'title' => '身份绑定',
                'description' => '项目',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'Connection',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-connection',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        'title' => '身份绑定配置',
                        'description' => '身份绑定配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/ConnectionSpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'key=value',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '描述信息',
                        'description' => '描述信息',
                        'type' => 'string',
                        'example' => 'test-description',
                    ],
                    'status' => [
                        'title' => '当前资源的状态信息，只读',
                        'description' => '当前资源的状态信息，只读',
                        '$ref' => '#/components/schemas/ConnectionStatus',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'ConnectionSpec' => [
                'title' => '身份绑定配置',
                'description' => '仓库配置',
                'type' => 'object',
                'properties' => [
                    'platform' => [
                        'title' => '第三方代码托管平台类型，目前支持：github/gitee/gitlab/codeup',
                        'description' => '第三方代码托管平台类型，目前支持：github/gitee/gitlab/codeup',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'github',
                    ],
                    'account' => [
                        'title' => '代码托管平台账号相关的信息',
                        'description' => '代码托管平台账号相关的信息',
                        '$ref' => '#/components/schemas/GitAccount',
                    ],
                    'gitlabConfig' => [
                        'title' => '连接GitLab代码托管平台所需配置',
                        'description' => '连接GitLab代码托管平台所需配置',
                        '$ref' => '#/components/schemas/GitLabConfig',
                    ],
                ],
            ],
            'ConnectionStatus' => [
                'title' => '身份绑定状态',
                'description' => '身份绑定的状态',
                'type' => 'object',
                'properties' => [
                    'installation' => [
                        'title' => '身份绑定流程的当前状态',
                        'description' => '身份绑定流程的当前状态',
                        '$ref' => '#/components/schemas/Installation',
                    ],
                ],
            ],
            'Context' => [
                'title' => 'A short description of struct',
                'description' => 'json字符串，存储执行上下文',
                'type' => 'object',
                'properties' => [
                    'data' => [
                        'title' => 'data是一个JSON结构的数据，描述执行的上下文数据',
                        'description' => 'data是一个JSON结构的数据，描述执行的上下文数据',
                        'type' => 'object',
                    ],
                ],
            ],
            'ContextSchema' => [
                'title' => 'Schema for context input.',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => 'Field type.',
                        'type' => 'string',
                        'example' => 'string',
                    ],
                    'description' => [
                        'title' => 'Field description.',
                        'type' => 'string',
                        'example' => '[git](https://git-scm.com/) address for [git clone](https://git-scm.com/docs/git-clone).',
                    ],
                    'required' => [
                        'title' => 'Field is required or not.',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'hint' => [
                        'title' => 'Field example.',
                        'type' => 'string',
                        'example' => 'git@gitlab.alibaba-inc.com:serverless/lambda.git',
                    ],
                    'name' => [
                        'title' => 'Field name.',
                        'type' => 'string',
                        'example' => 'gitRepoUrl',
                    ],
                ],
            ],
            'Environment' => [
                'title' => '环境定义',
                'description' => '环境可以与用于开发迭代的特定分支相关联，也可以与基础结构堆栈相关联，以便将服务部署到指定的环境。',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '环境名称，项目下唯一，不可修改',
                        'description' => '环境名称，项目下唯一，不可修改',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-env',
                    ],
                    'kind' => [
                        'title' => '当前资源的类型，只读',
                        'description' => '当前资源的类型，只读',
                        'type' => 'string',
                        'example' => 'Environment',
                    ],
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'createdTime' => [
                        'title' => '创建此对象时服务器的时间，只读',
                        'description' => '创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'description' => [
                        'title' => '资源描述',
                        'description' => '资源描述',
                        'type' => 'string',
                        'example' => 'test env',
                    ],
                    'spec' => [
                        'title' => '环境配置',
                        'description' => '环境配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/EnvironmentSpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'value to the label key.',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'status' => [
                        'title' => '当前环境的状态',
                        'description' => '当前环境的状态',
                        '$ref' => '#/components/schemas/EnvironmentStatus',
                    ],
                    'projectName' => [
                        'title' => '环境所属的项目名称，只读',
                        'description' => '环境所属的项目名称，只读',
                        'type' => 'string',
                        'example' => 'demo-project',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'EnvironmentSpec' => [
                'title' => '环境配置描述',
                'description' => '环境配置',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '环境类型，只能在testing、staging、production中选择',
                        'description' => '环境类型，只能在testing、staging、production中选择',
                        'type' => 'string',
                        'example' => 'Testing',
                        'default' => 'Production',
                        'enum' => [
                            'Testing',
                            'Staging',
                            'Production',
                        ],
                    ],
                    'alias' => [
                        'title' => '环境别名',
                        'description' => '环境别名',
                        'type' => 'string',
                        'example' => 'dev',
                    ],
                    'roleArn' => [
                        'title' => '环境角色',
                        'description' => '环境角色',
                        'type' => 'string',
                        'example' => 'acs:ram::*******:role/aliyundevsdefaultrole',
                    ],
                    'repositoryConfig' => [
                        'title' => '代码仓库配置，不可以和templateConfig同时设置。',
                        'description' => '代码仓库配置，不可以和templateConfig同时设置。',
                        '$ref' => '#/components/schemas/RepositoryConfig',
                    ],
                    'templateConfig' => [
                        'title' => '项目案例库模板配置，不能和repositoryConfig同时设置。',
                        'description' => '项目案例库模板配置，不能和repositoryConfig同时设置。',
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                    'infraStackConfig' => [
                        'title' => '基础设施堆栈配置',
                        'description' => '基础设施堆栈配置',
                        '$ref' => '#/components/schemas/InfraStackSpec',
                    ],
                    'serviceOverlay' => [
                        'title' => '服务在环境中的差异化配置，部署时会对指定资源描述文件的配置进行覆盖',
                        'description' => '服务在环境中的差异化配置，部署时会对指定资源描述文件的配置进行覆盖',
                        'type' => 'object',
                        'properties' => [
                            'resources' => [
                                'title' => '资源级覆盖配置',
                                'description' => '资源级覆盖配置',
                                'type' => 'object',
                                'example' => '{"dummyFunction":{"timeout":600}}',
                            ],
                            'components' => [
                                'title' => '组件级覆盖配置',
                                'description' => '组件级覆盖配置',
                                'type' => 'object',
                                'example' => '{"fc3":{"timeout":600}}',
                            ],
                        ],
                    ],
                    'isAutoDeploy' => [
                        'title' => '是否需要自动部署，默认为false。自动部署指的是在当前环境下使用默认的流水线模板创建并执行一次流水线',
                        'description' => '是否需要自动部署，默认为false。自动部署指的是在当前环境下使用默认的流水线模板创建并执行一次流水线',
                        'type' => 'boolean',
                        'default' => 'false',
                    ],
                ],
            ],
            'EnvironmentStatus' => [
                'title' => '环境状态',
                'description' => '环境状态',
                'type' => 'object',
                'properties' => [
                    'infraStackStatus' => [
                        'title' => '基础设施堆栈状态',
                        'description' => '基础设施堆栈状态',
                        '$ref' => '#/components/schemas/InfraStackStatus',
                    ],
                    'latestReleaseDetail' => [
                        'title' => '最近一次部署详情',
                        'description' => '最近一次部署详情',
                        '$ref' => '#/components/schemas/ReleaseDetail',
                    ],
                    'observedGeneration' => [
                        'title' => '系统最新观测到的资源generation',
                        'description' => '系统最新观测到的资源generation',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'observedTime' => [
                        'title' => '资源最近的一次状态更新时间',
                        'description' => '资源最近的一次状态更新时间',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                ],
            ],
            'EventFilterConfig' => [
                'title' => '事件过滤配置',
                'description' => '事件过滤配置',
                'type' => 'object',
                'properties' => [
                    'push' => [
                        'title' => '推送事件',
                        'description' => '推送事件',
                        '$ref' => '#/components/schemas/PushFilter',
                    ],
                    'pullRequest' => [
                        'title' => 'PR或MR事件',
                        'description' => 'PR或MR事件',
                        '$ref' => '#/components/schemas/PullRequestFilter',
                    ],
                ],
            ],
            'EventPayload' => [
                'title' => 'A short description of struct',
                'description' => '流水线触发事件消息体',
                'type' => 'object',
                'properties' => [
                    'github' => [
                        'description' => 'Github流水线触发事件消息体',
                        '$ref' => '#/components/schemas/GithubEventPayload',
                    ],
                    'gitlab' => [
                        'description' => 'Gitlab流水线触发事件消息体',
                        '$ref' => '#/components/schemas/GitlabEventPayload',
                    ],
                    'codeup' => [
                        'description' => 'Codeup流水线触发事件消息体',
                        '$ref' => '#/components/schemas/CodeupEventPayload',
                    ],
                    'gitee' => [
                        'description' => 'Gitee流水线触发事件消息体',
                        '$ref' => '#/components/schemas/GiteeEventPayload',
                    ],
                    'manual' => [
                        'description' => '手动触发流水线事件消息体',
                        '$ref' => '#/components/schemas/ManualEventPayload',
                    ],
                ],
            ],
            'GitAccount' => [
                'title' => 'A short description of struct',
                'description' => 'OAuth凭证',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '代码托管平台的登录账号名，在每种代码托管平台下唯一',
                        'description' => '代码托管平台的登录账号名，在每种代码托管平台下唯一',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'your_username',
                    ],
                    'displayName' => [
                        'title' => '代码托管平台中的昵称，可以为空且不唯一',
                        'description' => '代码托管平台中的昵称，可以为空且不唯一',
                        'type' => 'string',
                        'example' => 'your_displayname',
                    ],
                    'id' => [
                        'title' => '代码托管平台账号的ID，在每种代码托管平台下唯一',
                        'description' => '代码托管平台账号的ID，在每种代码托管平台下唯一',
                        'type' => 'string',
                        'example' => '1',
                    ],
                    'avatar' => [
                        'title' => '代码托管平台账号的头像链接',
                        'description' => '代码托管平台账号的头像链接',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://gitee.com/assets/no_portrait.png',
                    ],
                    'uri' => [
                        'title' => '代码托管平台的地址，仅在自建GitLab时使用',
                        'description' => '代码托管平台的地址，仅在自建GitLab时使用',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://gitlab.com',
                    ],
                ],
            ],
            'GitEventSnapshot' => [
                'title' => 'Git提交事件快照',
                'description' => 'Git事件快照',
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'title' => '本次发布关联的分支，如果是PR或MR事件，为源分支',
                        'description' => '本次发布关联的分支，如果是PR或MR事件，为源分支',
                        'type' => 'string',
                        'example' => 'main',
                    ],
                    'commitID' => [
                        'title' => '本次发布关联的commitID',
                        'description' => '本次发布关联的commitID',
                        'type' => 'string',
                        'example' => '12721ec262d03a93809ba2bbc717963cb298ceca',
                    ],
                    'tag' => [
                        'title' => '本次发布关联的tag',
                        'description' => '本次发布关联的tag',
                        'type' => 'string',
                        'example' => '1.0',
                    ],
                ],
            ],
            'GitLabConfig' => [
                'title' => 'A short description of struct',
                'description' => '描述连接GitLab代码托管平台所需的信息',
                'type' => 'object',
                'properties' => [
                    'uri' => [
                        'title' => 'GitLab的域名，默认为https://gitlab.com；当您使用自建GitLab时需要指定',
                        'description' => 'GitLab的域名，默认为https://gitlab.com；当您使用自建GitLab时需要指定',
                        'type' => 'string',
                        'example' => 'http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/',
                    ],
                    'token' => [
                        'title' => 'GitLab私有Token，参考以下文档在GitLab控制台获取：https://docs.gitlab.com/ee/user/profile/personal_access_tokens.html?spm=5176.fcnext.0.0.1aa378c8E3yBHw#create-a-personal-access-token',
                        'description' => 'GitLab私有Token，参考以下文档在GitLab控制台获取：https://docs.gitlab.com/ee/user/profile/personal_access_tokens.html?spm=5176.fcnext.0.0.1aa378c8E3yBHw#create-a-personal-access-token',
                        'type' => 'string',
                        'example' => 'your-token',
                    ],
                ],
            ],
            'GiteeEventPayload' => [
                'title' => 'A short description of struct',
                'description' => 'Gitee流水线触发事件消息体',
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'title' => 'gitee原始消息体',
                        'description' => 'gitee原始消息体',
                        'type' => 'string',
                        'format' => 'byte',
                        'example' => '{}{'."\n"
                            .'  "after": "75008ebafa504ffc6d3fe2236b780b1a04663fbb",'."\n"
                            .'  "before": "f4abefc293a6df4d3be23945c4474f9d54f67645",'."\n"
                            .'  "commits": ['."\n"
                            .'    {'."\n"
                            .'      "id": "75008ebafa504ffc6d3fe2236b780b1a04663fbb",'."\n"
                            .'      "message": "update\\\\n"'."\n"
                            .'    }'."\n"
                            .'  ],'."\n"
                            .'  "ref": "refs/heads/master"'."\n"
                            .'}'."\n"
                            .'-- 必须使用原始的gitee发出的webhook事件',
                    ],
                ],
            ],
            'GithubEventPayload' => [
                'title' => 'A short description of struct',
                'description' => 'Github流水线触发事件消息体',
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'title' => 'github事件原始消息体',
                        'description' => 'github事件原始消息体',
                        'type' => 'string',
                        'format' => 'byte',
                        'example' => '{'."\n"
                            .'  "ref": "refs/heads/master",'."\n"
                            .'  "before": "1d4344d7eeda61c26c8a6d945d83b205b422f3e3",'."\n"
                            .'  "after": "9f3221a7e63f979281e3926bf619b193646ff561",'."\n"
                            .'  "commits": ['."\n"
                            .'    {'."\n"
                            .'      "id": "9f3221a7e63f979281e3926bf619b193646ff561",'."\n"
                            .'      "message": "update"'."\n"
                            .'    }'."\n"
                            .'  ],'."\n"
                            .'  "head_commit": {'."\n"
                            .'    "id": "9f3221a7e63f979281e3926bf619b193646ff561",'."\n"
                            .'    "message": "update"'."\n"
                            .'  }'."\n"
                            .'}'."\n"
                            .'-- 必须使用原始的github发出的webhook事件',
                    ],
                ],
            ],
            'GitlabEventPayload' => [
                'title' => 'A short description of struct',
                'description' => 'Gitlab流水线触发事件消息体',
                'type' => 'object',
                'properties' => [
                    'originalPayload' => [
                        'title' => 'gitlab事件原始消息体',
                        'description' => 'gitlab事件原始消息体',
                        'type' => 'string',
                        'format' => 'byte',
                        'example' => '{'."\n"
                            .'  "object_kind": "push",'."\n"
                            .'  "event_name": "push",'."\n"
                            .'  "before": "a08b7d82ceaabc27394f526f35c22ff581a18a39",'."\n"
                            .'  "after": "787ef6aa092e4b9ed30fe29c7fc5c9cf4ac194d8",'."\n"
                            .'  "ref": "refs/heads/main",'."\n"
                            .'  "checkout_sha": "787ef6aa092e4b9ed30fe29c7fc5c9cf4ac194d8",'."\n"
                            .'  "commits": ['."\n"
                            .'    {'."\n"
                            .'      "id": "787ef6aa092e4b9ed30fe29c7fc5c9cf4ac194d8",'."\n"
                            .'      "message": "my message",'."\n"
                            .'      "title": "my message"'."\n"
                            .'    }'."\n"
                            .'  ]'."\n"
                            .'}'."\n"
                            .'-- 必须使用原始的gitlab发出的webhook事件',
                    ],
                ],
            ],
            'InfraStackResourceState' => [
                'title' => '基础设施堆栈资源状态',
                'description' => '基础设施堆栈资源状态',
                'type' => 'object',
                'properties' => [
                    'resources' => [
                        'title' => '资源列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourceDetail',
                        ],
                    ],
                    'resourceDrifts' => [
                        'title' => '资源漂移列表',
                        'type' => 'array',
                        'items' => [
                            '$ref' => '#/components/schemas/ResourceDrift',
                        ],
                    ],
                ],
            ],
            'InfraStackSpec' => [
                'title' => '基础设施堆栈配置',
                'description' => '基础设施堆栈配置',
                'type' => 'object',
                'properties' => [
                    'regionID' => [
                        'title' => '基础设施堆栈所部署的地域，不可修改',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'cn-hangzhou',
                    ],
                    'roleArn' => [
                        'title' => '基础设施堆栈操作资源时使用的服务角色。',
                        'type' => 'string',
                        'example' => 'acs:ram::1234567890:role/devs-role',
                    ],
                    'templateSpec' => [
                        'title' => '基础设施堆栈资源模板。不能和templateName同时设置',
                        'type' => 'object',
                        'properties' => [
                            'engine' => [
                                'title' => '资源执行引擎，目前只支持terraform',
                                'type' => 'string',
                                'example' => 'terrafrom',
                            ],
                            'content' => [
                                'title' => '资源模板内容，rawString。',
                                'type' => 'string',
                                'example' => '"\\nresource \\"alicloud_fc_service\\" \\"default\\" {\\n  name        = \\"xiliu-tf-test-srv4\\"\\n  description = \\"xiliu tf  test service \\"\\n}\\n\\n\\nresource \\"alicloud_oss_bucket\\" \\"default\\" {\\n  bucket = \\"xiliu-test-tf-bucket4\\"\\n  acl    = \\"private\\"\\n}\\n\\noutput \\"service_name\\" {\\n  value = alicloud_fc_service.default.name\\n}\\n\\noutput \\"oss_bucket\\" {\\n  value = alicloud_oss_bucket.default.bucket\\n}",',
                            ],
                        ],
                    ],
                    'templateVariables' => [
                        'title' => '基础设施堆栈模板变量的具体值',
                        'type' => 'object',
                        'example' => '{"testKey":"testValue"}',
                    ],
                    'templateName' => [
                        'title' => '基础设施堆栈模板名字。不能和templateSpec同时设置',
                        'type' => 'string',
                        'example' => 'serverless.devs.com/fc-builtin',
                    ],
                ],
                'required' => false,
            ],
            'InfraStackStatus' => [
                'title' => '基础设施堆栈状态',
                'description' => '基础设施堆栈状态',
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'title' => '基础设施堆栈部署状态',
                        'type' => 'string',
                        'example' => 'DeploySuccess',
                    ],
                    'message' => [
                        'title' => '基础设施堆栈信息详情',
                        'type' => 'string',
                        'example' => 'Success!',
                    ],
                    'observedGeneration' => [
                        'title' => '最新生效的generation',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '0',
                    ],
                    'observedTime' => [
                        'title' => '最新generation生效时间',
                        'type' => 'string',
                        'example' => '2021-10-08T23:14:16Z',
                    ],
                    'templateOutputs' => [
                        'title' => '资源堆栈模板输出信息',
                        'type' => 'object',
                        'example' => '{"vpcId":"vpc-xxx"}',
                    ],
                    'templateStatus' => [
                        'title' => '基础设施堆栈模板状态',
                        'type' => 'object',
                        'properties' => [
                            'variables' => [
                                'title' => '从模板内容解析出模板的输入变量的定义。',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/TerraformInputVariable',
                                ],
                                'required' => true,
                            ],
                            'outputs' => [
                                'title' => '从模板内容解析出的模板输出值的定义。',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/TerraformOutputValue',
                                ],
                                'required' => true,
                            ],
                        ],
                    ],
                    'resourceState' => [
                        'title' => '资源状态',
                        '$ref' => '#/components/schemas/InfraStackResourceState',
                    ],
                ],
            ],
            'Installation' => [
                'title' => '账号绑定流程',
                'description' => '指导用户完成OAuth授权流程',
                'type' => 'object',
                'properties' => [
                    'stage' => [
                        'title' => '账号绑定流程的当前阶段，包括：pending、finished、invalid',
                        'description' => '账号绑定流程的当前阶段，包括：pending、finished、invalid',
                        'type' => 'string',
                        'example' => 'finished',
                    ],
                    'message' => [
                        'title' => '账号绑定流程的指导信息，提示您如何完成账号绑定',
                        'description' => '账号绑定流程的指导信息，提示您如何完成账号绑定',
                        'type' => 'string',
                        'example' => 'Please click \'actionUri\' to complete the OAuth authorization process',
                    ],
                    'actionUri' => [
                        'title' => '完成账号绑定流程的当前步骤所需的链接',
                        'description' => '完成账号绑定流程的当前步骤所需的链接',
                        'type' => 'string',
                        'example' => 'https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo',
                    ],
                ],
            ],
            'ManualEventPayload' => [
                'title' => 'A short description of struct',
                'description' => '手动触发流水线事件消息体',
                'type' => 'object',
                'properties' => [
                    'commitID' => [
                        'title' => '本次触发的commitID',
                        'description' => '本次触发的commitID',
                        'type' => 'string',
                        'example' => '090e797efdabd2347b93b1cf331a9a3009df05c8',
                    ],
                    'branch' => [
                        'title' => '本次触发的分支名称',
                        'description' => '本次触发的分支名称',
                        'type' => 'string',
                        'example' => 'master',
                    ],
                    'tag' => [
                        'title' => '本次触发的tag名称',
                        'description' => '本次触发的tag名称',
                        'type' => 'string',
                        'example' => 'prod-v1',
                    ],
                    'templateConfig' => [
                        'title' => '本次触发的模板信息，比Git触发优先级更高',
                        'description' => '本次触发的模板信息，比Git触发优先级更高',
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                ],
            ],
            'OAuthCredential' => [
                'title' => '身份绑定凭证',
                'description' => 'OAuth凭证',
                'type' => 'object',
                'properties' => [
                    'token' => [
                        'title' => '代码托管平台访问凭证，开发平台使用该凭证访问第三方代码托管平台',
                        'description' => '代码托管平台访问凭证，开发平台使用该凭证访问第三方代码托管平台',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4e84246b6b3962cd3d207aad1ea2f911',
                    ],
                    'type' => [
                        'title' => '凭证的类型',
                        'description' => '凭证的类型',
                        'type' => 'string',
                        'example' => 'bearer',
                    ],
                    'scope' => [
                        'title' => '凭证包含的权限范围',
                        'description' => '凭证包含的权限范围',
                        'type' => 'string',
                        'example' => 'user_info projects pull_requests hook gists emails',
                    ],
                    'expiration' => [
                        'title' => '凭证到期时间，时间戳形式，-1表示永久有效',
                        'description' => '凭证到期时间，时间戳形式，-1表示永久有效',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1716263324603',
                    ],
                    'createdTime' => [
                        'title' => '凭证生成时间，时间戳形式',
                        'description' => '凭证生成时间，时间戳形式',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '1716176924603',
                    ],
                    'refreshToken' => [
                        'title' => '刷新凭证时所需的信息',
                        'description' => '刷新凭证时所需的信息',
                        'type' => 'string',
                        'example' => '4d77bfae284770d94ebeed6b0199ebfd65e3943ba4f1e44dc36d792a93ba0d13',
                    ],
                ],
            ],
            'Pipeline' => [
                'title' => 'A short description of struct',
                'description' => '流水线运行',
                'type' => 'object',
                'properties' => [
                    'spec' => [
                        'description' => '流水线配置',
                        '$ref' => '#/components/schemas/PipelineSpec',
                    ],
                    'status' => [
                        'description' => '流水线运行状态',
                        '$ref' => '#/components/schemas/PipelineStatus',
                    ],
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '流水线描述信息',
                        'description' => '流水线描述信息',
                        'type' => 'string',
                        'example' => 'Pipeline example.',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'Pipeline',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-pipeline',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                            'example' => 'value to the label key.',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'PipelineSpec' => [
                'title' => 'A short description of struct',
                'description' => '流水线配置',
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'title' => '流水线模板名称',
                        'description' => '流水线模板名称',
                        'type' => 'string',
                        'example' => 'my-pipeline-template',
                    ],
                    'context' => [
                        'title' => '流水线的执行上下文',
                        'description' => '流水线的执行上下文',
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'templateSpec' => [
                        'title' => '流水线执行流程的描述，优先级高于templateName，流水线执行不再需要预先创建PipelineTemplate',
                        'description' => '流水线执行流程的描述，优先级高于templateName，流水线执行不再需要预先创建PipelineTemplate',
                        '$ref' => '#/components/schemas/PipelineTemplateSpec',
                    ],
                ],
            ],
            'PipelineStatus' => [
                'title' => 'A short description of struct',
                'description' => '流水线运行状态',
                'type' => 'object',
                'properties' => [
                    'phase' => [
                        'title' => '当前流水线执行的阶段',
                        'description' => '当前流水线执行的阶段',
                        'type' => 'string',
                        'example' => 'Success',
                    ],
                    'latestExecError' => [
                        'title' => '流水线出现的最近一次任务异常',
                        'description' => '流水线出现的最近一次任务异常',
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                ],
            ],
            'PipelineTemplate' => [
                'title' => 'A short description of struct',
                'description' => '流水线模板',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '流水线模板描述信息',
                        'description' => '流水线模板描述信息',
                        'type' => 'string',
                        'example' => 'PipelineTemplate example.',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'PipelineTemplate',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-pipeline-template',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'deletionTime' => [
                        'title' => '资源删除时间，只读',
                        'description' => '资源删除时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'spec' => [
                        'description' => '流水线模板配置',
                        '$ref' => '#/components/schemas/PipelineTemplateSpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                            'example' => 'value to the label key.',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'PipelineTemplateSpec' => [
                'title' => 'A short description of struct',
                'description' => '任务模板配置',
                'type' => 'object',
                'properties' => [
                    'context' => [
                        'title' => '流水线的执行上下文',
                        'description' => '流水线的执行上下文',
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'tasks' => [
                        'title' => '任务执行列表',
                        'description' => '任务执行列表',
                        'type' => 'array',
                        'items' => [
                            'description' => '任务执行配置',
                            '$ref' => '#/components/schemas/TaskExec',
                        ],
                    ],
                ],
            ],
            'PipelineTrigger' => [
                'title' => '流水线触发器',
                'description' => '描述git事件触发流水线的规则',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '流水线触发器描述信息',
                        'description' => '流水线触发器描述信息',
                        'type' => 'string',
                        'example' => 'PipelineTrigger example.',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'PipelineTrigger',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-pipeline-trigger',
                        'maxLength' => 63,
                        'minLength' => 1,
                        'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
                    ],
                    'spec' => [
                        'description' => '流水线触发器配置',
                        '$ref' => '#/components/schemas/PipelineTriggerSpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                            'example' => 'value to the label key.',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'PipelineTriggerEvent' => [
                'title' => '流水线触发器触发事件',
                'description' => '记录触发器触发事件',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '流水线触发器触发事件的描述信息',
                        'description' => '流水线触发器触发事件的描述信息',
                        'type' => 'string',
                        'example' => 'PipelineTriggerEvent example.',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'PipelineTriggerEvent',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-pipeline-trigger',
                        'maxLength' => 63,
                        'minLength' => 1,
                        'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
                    ],
                    'status' => [
                        'title' => '触发器触发记录的状态',
                        'description' => '触发器触发记录的状态',
                        '$ref' => '#/components/schemas/PipelineTriggerEventStatus',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                            'example' => 'value to the label key.',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'spec' => [
                        'description' => '流水线触发配置',
                        '$ref' => '#/components/schemas/PipelineTriggerEventSpec',
                    ],
                ],
            ],
            'PipelineTriggerEventSpec' => [
                'title' => 'A short description of struct',
                'description' => '流水线触发事件详情',
                'type' => 'object',
                'properties' => [
                    'payload' => [
                        'description' => '流水线触发事件消息体',
                        '$ref' => '#/components/schemas/EventPayload',
                    ],
                    'triggerName' => [
                        'title' => '触发器名称',
                        'description' => '触发器名称',
                        'type' => 'string',
                        'example' => 'my-pipeline-trigger',
                    ],
                ],
            ],
            'PipelineTriggerEventStatus' => [
                'title' => '流水线触发器触发历史记录状态',
                'description' => '流水线触发器触发历史记录状态',
                'type' => 'object',
                'properties' => [
                    'status' => [
                        'title' => '触发器触发记录的状态',
                        'description' => '触发器触发记录的状态',
                        'type' => 'string',
                        'example' => 'Skipped,Fired,Running,Failed,Success',
                    ],
                    'firedPipelineName' => [
                        'title' => '触发器触发记录的流水线名称',
                        'description' => '触发器触发记录的流水线名称',
                        'type' => 'string',
                        'example' => 'my-pipeline',
                    ],
                    'releaseDetail' => [
                        'title' => '发布详情',
                        'description' => '发布详情',
                        '$ref' => '#/components/schemas/ReleaseDetail',
                    ],
                    'errorMessage' => [
                        'title' => '触发器触发的异常信息',
                        'description' => '触发器触发的异常信息',
                        'type' => 'string',
                        'example' => 'failed to create and start pipeline, error=message',
                    ],
                ],
            ],
            'PipelineTriggerSpec' => [
                'title' => '流水线触发器配置',
                'description' => '描述触发器的触发规则与运行的流水线',
                'type' => 'object',
                'properties' => [
                    'roleArn' => [
                        'title' => '触发器的roleArn，流水线触发与执行会采用配置的roleArn进行角色扮演',
                        'description' => '触发器的roleArn，流水线触发与执行会采用配置的roleArn进行角色扮演',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram::1431999****8149:role/aliyundevsdefaultrole',
                    ],
                    'eventFilter' => [
                        'title' => '事件过滤配置，只有满足条件的事件才可以触发流水线',
                        'description' => '事件过滤配置，只有满足条件的事件才可以触发流水线',
                        'required' => true,
                        '$ref' => '#/components/schemas/EventFilterConfig',
                    ],
                    'runPipeline' => [
                        'title' => '触发流水线执行配置',
                        'description' => '触发流水线执行配置',
                        '$ref' => '#/components/schemas/RunPipelineConfig',
                    ],
                ],
            ],
            'Project' => [
                'title' => '项目',
                'description' => '项目',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'Project',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-project',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        'title' => '项目配置',
                        'description' => '项目配置',
                        'required' => false,
                        '$ref' => '#/components/schemas/ProjectSpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'key=value',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '描述信息',
                        'description' => '描述信息',
                        'type' => 'string',
                        'example' => 'test-description',
                    ],
                    'status' => [
                        'title' => '当前资源的状态信息，只读',
                        'description' => '当前资源的状态信息，只读',
                        '$ref' => '#/components/schemas/ProjectStatus',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'ProjectSpec' => [
                'title' => '项目配置',
                'description' => '一键部署配置',
                'type' => 'object',
                'properties' => [
                    'templateConfig' => [
                        'title' => '项目的模板配置。非空时会自动创建默认环境，并完成自动部署',
                        'description' => '项目的模板配置。非空时会自动创建默认环境，并完成自动部署',
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                    'roleArn' => [
                        'title' => '开发平台部署您的项目时所需扮演的角色的Arn，默认为acs:ram::${your_main_account_ID}:role/aliyundevsdefaultrole',
                        'description' => '开发平台部署您的项目时所需扮演的角色的Arn，默认为acs:ram::${your_main_account_ID}:role/aliyundevsdefaultrole',
                        'type' => 'string',
                        'example' => 'acs:ram::1431999****8149:role/aliyundevsdefaultrole',
                    ],
                    'token' => [
                        'title' => '项目身份令牌，用于触发部署时的身份校验，只读',
                        'description' => '项目身份令牌，用于触发部署时的身份校验，只读',
                        'type' => 'string',
                        'example' => '9D72DE01-C732-49C0-8E85-FFD9D695436B',
                    ],
                ],
            ],
            'ProjectStatus' => [
                'title' => '项目状态',
                'description' => '一键部署配置',
                'type' => 'object',
                'properties' => [
                    'latestReleaseDetail' => [
                        'title' => '项目最近一次部署详情',
                        'description' => '项目最近一次部署详情',
                        '$ref' => '#/components/schemas/ReleaseDetail',
                    ],
                    'observedGeneration' => [
                        'title' => '项目最近一次状态变化时，项目的generation值',
                        'description' => '项目最近一次状态变化时，项目的generation值',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1',
                    ],
                    'observedTime' => [
                        'title' => '项目最近一次状态变化的服务器时间',
                        'description' => '项目最近一次状态变化的服务器时间',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                ],
            ],
            'PullRequestFilter' => [
                'title' => 'PR或MR事件过滤配置',
                'description' => 'PR或MR事件过滤配置',
                'type' => 'object',
                'properties' => [
                    'sourceBranch' => [
                        'title' => 'PR或MR的来源分支名称正则表达式，不填则表示所有分支',
                        'description' => 'PR或MR的来源分支名称正则表达式，不填则表示所有分支',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'feature-.*',
                    ],
                    'targetBranch' => [
                        'title' => 'PR或MR的目标分支名称正则表达式，不填则表示所有分支',
                        'description' => 'PR或MR的目标分支名称正则表达式，不填则表示所有分支',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'master',
                    ],
                    'types' => [
                        'title' => 'PR或MR的类型，为空则表示所有类型。TODO：场景类型',
                        'description' => 'PR或MR的类型，为空则表示所有类型。',
                        'type' => 'array',
                        'items' => [
                            'description' => '可枚举的类型。包括：(opened、closed、merged、reopened、updated）',
                            'type' => 'string',
                            'example' => 'opened',
                        ],
                    ],
                ],
            ],
            'PushFilter' => [
                'title' => '推送事件过滤配置',
                'description' => '推送事件过滤配置',
                'type' => 'object',
                'properties' => [
                    'branch' => [
                        'title' => '推送的分支名称正则表达式',
                        'description' => '推送的分支名称正则表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'master',
                    ],
                    'tag' => [
                        'title' => '推送的tag名称正则表达式',
                        'description' => '推送的tag名称正则表达式',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'prod-.*',
                    ],
                ],
            ],
            'ReleaseDetail' => [
                'title' => '流水线发布结果详情',
                'description' => '流水线发布结果的详情',
                'type' => 'object',
                'properties' => [
                    'pipelineTriggerEventName' => [
                        'title' => '本次发布对应的流水线触发事件名称',
                        'description' => '本次发布对应的流水线触发事件名称',
                        'type' => 'string',
                        'example' => 'p-codeup-1714271977972-pa4w',
                    ],
                    'bizStatus' => [
                        'title' => '本次发布的状态，受流水线与流水线任务执行状态影响。包括的状态以及含义如下：  Running: 部署中 HangUp: 挂起等待审批中 Finished: 部署完成 Failed: 部署失败 Canceled: 已取消',
                        'description' => '本次发布的状态，受流水线与流水线任务执行状态影响。包括的状态以及含义如下：  Running: 部署中 HangUp: 挂起等待审批中 Finished: 部署完成 Failed: 部署失败 Canceled: 已取消',
                        'type' => 'string',
                        'example' => 'Running',
                    ],
                    'pipelineName' => [
                        'title' => '本次发布对应的流水线名称',
                        'description' => '本次发布对应的流水线名称',
                        'type' => 'string',
                        'example' => 'p-1704952599751-wUOczb',
                    ],
                    'templateConfigSnapshot' => [
                        'title' => '本次发布所使用的模板配置快照。只有关联模板的项目存在该字段',
                        'description' => '本次发布所使用的模板配置快照。只有关联模板的项目存在该字段',
                        '$ref' => '#/components/schemas/TemplateConfig',
                    ],
                    'releaseOutputs' => [
                        'title' => '本次发布的输出结果。包含本次发布的资源信息等',
                        'description' => '本次发布的输出结果。包含本次发布的资源信息等',
                        'type' => 'object',
                        'example' => '{"framework":{"region":"cn-hangzhou","service":{"serviceName":"web-framework","description":"Serverless Devs Web Framework Service","role":"","logConfig":{"project":"","logstore":"","enableRequestMetrics":false,"enableInstanceMetrics":false,"logBeginRule":"None"},"serviceId":"4c9d0e79-16b8-4951-a6b8-169d2037d217","createdTime":"2021-12-07T09:24:08Z","lastModifiedTime":"2022-04-09T09:16:51Z","vpcConfig":{"vpcId":"","vSwitchIds":[],"securityGroupId":"","role":""},"internetAccess":true,"nasConfig":{"userId":-1,"groupId":-1,"mountPoints":[]},"tracingConfig":{},"name":"web-framework"},"function":{"functionId":"e81904f0-24d0-45df-bb53-06da64d01395","functionName":"todolist","description":"Serverless Devs Web Framework Function","runtime":"nodejs12","handler":"index.handler","timeout":60,"initializer":"","initializationTimeout":3,"codeSize":1757093,"codeChecksum":"7185648203525194222","memorySize":256,"environmentVariables":{},"createdTime":"2022-03-15T15:36:22Z","lastModifiedTime":"2022-04-09T09:16:50Z","instanceConcurrency":1,"instanceType":"e1","instanceLifecycleConfig":{"preFreeze":{"handler":"","timeout":3},"preStop":{"handler":"","timeout":3}},"name":"todolist"},"triggers":[{"triggerName":"httpTrigger","description":"","triggerId":"7f2373ce-df1a-4013-b4e5-899989d9b27e","triggerType":"http","triggerConfig":{"methods":["GET","POST"],"authType":"anonymous"},"createdTime":"2022-03-15T15:36:23Z","lastModifiedTime":"2022-04-09T09:16:51Z","name":"httpTrigger"}],"customDomains":[{"domainName":"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net","accountId":"1835799444022432","protocol":"HTTP","certConfig":{},"tlsConfig":{},"apiVersion":"2016-08-15","routeConfig":{"routes":[{"path":"/*","serviceName":"web-framework","functionName":"todolist","methods":["GET","POST"]}]},"createdTime":"2022-03-15T15:36:28Z","lastModifiedTime":"2022-04-09T09:17:00Z"}]}}',
                    ],
                    'finishedTime' => [
                        'title' => '本次发布的完成时间',
                        'description' => '本次发布的完成时间',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'repositorySnapshot' => [
                        'title' => '本次发布所使用的仓库配置快照。只有关联仓库的项目存在该字段',
                        'description' => '本次发布所使用的仓库配置快照。只有关联仓库的项目存在该字段',
                        '$ref' => '#/components/schemas/RepositorySpec',
                    ],
                    'gitEventSnapshot' => [
                        'title' => '本次发布的Git事件快照。只有关联仓库的项目存在该字段',
                        'description' => '本次发布的Git事件快照。只有关联仓库的项目存在该字段',
                        '$ref' => '#/components/schemas/GitEventSnapshot',
                    ],
                    'message' => [
                        'title' => '本次发布的信息',
                        'description' => '本次发布的信息',
                        'type' => 'string',
                        'example' => 'Triggered manually.',
                    ],
                    'latestTaskExecError' => [
                        'title' => '本次发布过程中，最近一次流水线任务执行失败的详情信息',
                        'description' => '本次发布过程中，最近一次流水线任务执行失败的详情信息',
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                    'envName' => [
                        'title' => '本次发布对应的环境名',
                        'description' => '本次发布对应的环境名',
                        'type' => 'string',
                        'example' => 'dev',
                    ],
                ],
            ],
            'Repository' => [
                'title' => '仓库绑定',
                'description' => '仓库绑定',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'Repository',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-repository',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'spec' => [
                        'title' => '仓库绑定配置',
                        'description' => '仓库绑定配置',
                        'required' => true,
                        '$ref' => '#/components/schemas/RepositorySpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'type' => 'string',
                            'example' => 'key=value',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '描述信息',
                        'description' => '描述信息',
                        'type' => 'string',
                        'example' => 'test-description',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'RepositoryConfig' => [
                'title' => 'A short description of struct',
                'description' => '代码仓库配置',
                'type' => 'object',
                'properties' => [
                    'repositoryName' => [
                        'title' => '关联的开发平台侧代码仓库实体的名称',
                        'description' => '关联的开发平台侧代码仓库实体的名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-repository',
                    ],
                    'branchName' => [
                        'title' => '仓库分支名',
                        'description' => '仓库分支名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'master',
                    ],
                    'manifest' => [
                        'title' => '指定资源描述文件(s.yaml)的文件名，该路径为代码仓库下的相对路径',
                        'description' => '指定资源描述文件(s.yaml)的文件名，该路径为代码仓库下的相对路径',
                        'type' => 'string',
                        'example' => 'src/s.yaml',
                    ],
                ],
            ],
            'RepositorySpec' => [
                'title' => '仓库绑定配置',
                'description' => '仓库配置',
                'type' => 'object',
                'properties' => [
                    'connectionName' => [
                        'title' => '仓库所使用的身份绑定信息。通过关联的Connection可以获取到代码托管平台账号和凭证等信息',
                        'description' => '仓库所使用的身份绑定信息。通过关联的Connection可以获取到代码托管平台账号和凭证等信息',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'awesome-connection',
                    ],
                    'cloneUrl' => [
                        'title' => '拉取仓库代码(git clone)所需的链接，支持HTTPS和SSH形式。',
                        'description' => '拉取仓库代码(git clone)所需的链接，支持HTTPS和SSH形式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://github.com/DDofDD/start-springboot-lfgy.git',
                    ],
                    'platform' => [
                        'title' => '只读，仓库所属代码托管平台的类型，支持github、gitee、gitlab、codeup',
                        'description' => '只读，仓库所属代码托管平台的类型，支持github、gitee、gitlab、codeup',
                        'type' => 'string',
                        'example' => 'github',
                    ],
                    'id' => [
                        'title' => '只读，代码托管平台中的仓库ID，平台内唯一',
                        'description' => '只读，代码托管平台中的仓库ID，平台内唯一',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '312649',
                    ],
                    'owner' => [
                        'title' => '只读，代码托管平台中仓库所属账号名或组织名',
                        'description' => '只读，代码托管平台中仓库所属账号名或组织名',
                        'type' => 'string',
                        'example' => 'my-org-name',
                    ],
                    'displayName' => [
                        'title' => '只读，代码托管平台中的仓库名',
                        'description' => '只读，代码托管平台中的仓库名',
                        'type' => 'string',
                        'example' => 'my-repo-name',
                    ],
                    'webUrl' => [
                        'title' => '只读，仓库主页链接',
                        'description' => '只读，仓库主页链接',
                        'type' => 'string',
                        'example' => 'https://github.com/my-org-name/my-repo-name',
                    ],
                ],
            ],
            'ResourceDetail' => [
                'title' => '资源设施堆栈资源详情',
                'type' => 'object',
                'properties' => [
                    'address' => [
                        'title' => '资源全局地址，可以唯一定位一个资源',
                        'type' => 'string',
                        'example' => 'alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd',
                    ],
                    'mode' => [
                        'title' => '纳管方式',
                        'type' => 'string',
                        'example' => 'managed',
                    ],
                    'type' => [
                        'title' => '资源类型',
                        'type' => 'string',
                        'example' => 'alicloud_fc_trigger',
                    ],
                    'name' => [
                        'title' => '资源名称',
                        'type' => 'string',
                        'example' => 'cn-shanghai-fc-stable-diffusion-sd',
                    ],
                    'attributeValues' => [
                        'title' => '资源属性详情',
                        'type' => 'object',
                        'example' => '{"config":"{\\"methods\\":[\\"GET\\",\\"POST\\",\\"PUT\\",\\"DELETE\\"],\\"authType\\":\\"anonymous\\",\\"disableURLInternet\\":true}","config_mns":null,"function":"sd","id":"fc-stable-diffusion:sd:defaultTrigger","last_modified":"2024-04-17T13:20:53Z","name":"defaultTrigger","name_prefix":null,"role":"","service":"fc-stable-diffusion","source_arn":"","trigger_id":"mock-trigger","type":"http"}',
                    ],
                ],
            ],
            'ResourceDrift' => [
                'title' => '基础设施堆栈资源漂移',
                'description' => '资源漂移',
                'type' => 'object',
                'properties' => [
                    'address' => [
                        'title' => '资源全局地址，可以唯一定位一个资源',
                        'description' => '资源全局地址，可以唯一定位一个资源',
                        'type' => 'string',
                        'example' => 'alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd',
                    ],
                    'mode' => [
                        'title' => '纳管方式',
                        'description' => '纳管方式',
                        'type' => 'string',
                        'example' => 'managed',
                    ],
                    'type' => [
                        'title' => '资源类型',
                        'description' => '资源类型',
                        'type' => 'string',
                        'example' => 'alicloud_fc_trigger',
                    ],
                    'name' => [
                        'title' => '资源名称',
                        'description' => '资源名称',
                        'type' => 'string',
                        'example' => 'cn-shanghai-fc-stable-diffusion-sd',
                    ],
                    'change' => [
                        'title' => '详细漂移结果',
                        'description' => '详细漂移结果',
                        'type' => 'object',
                        'properties' => [
                            'actions' => [
                                'title' => '漂移行为',
                                'description' => '漂移行为',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'example' => 'update',
                                ],
                            ],
                            'before' => [
                                'title' => '执行漂移检查之前的详情',
                                'description' => '执行漂移检查之前的详情',
                                'type' => 'any',
                                'example' => '{"description":"modelscope deployment","id":"fc-demo-model-scope","internet_access":true,"last_modified":"2024-04-17T13:20:56Z","log_config":[],"name":"fc-demo-model-scope","name_prefix":null,"nas_config":[{"group_id":0,"mount_points":[{"mount_dir":"/mnt/auto","server_addr":"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope"}],"user_id":0}],"publish":null,"role":"acs:ram::mock-role:role/aliyunfcdefaultrole","service_id":"mock-service","tags":null,"tracing_config":[],"version":null,"vpc_config":[{"security_group_id":"sg-mock","vpc_id":"vpc-mock","vswitch_ids":["vsw-mock"]}]}',
                            ],
                            'after' => [
                                'title' => '执行漂移检查之后的详情',
                                'description' => '执行漂移检查之后的详情',
                                'type' => 'any',
                                'example' => '{"description":"mock deployment","id":"fc-demo-model-scope","internet_access":true,"last_modified":"2024-04-17T13:20:56Z","log_config":[],"name":"fc-demo-model-scope","name_prefix":null,"nas_config":[{"group_id":0,"mount_points":[{"mount_dir":"/mnt/auto","server_addr":"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope"}],"user_id":0}],"publish":null,"role":"acs:ram::mock-role:role/aliyunfcdefaultrole","service_id":"mock-service","tags":null,"tracing_config":[],"version":null,"vpc_config":[{"security_group_id":"sg-mock","vpc_id":"vpc-mock","vswitch_ids":["vsw-mock"]}]}',
                            ],
                        ],
                    ],
                ],
            ],
            'RunAfter' => [
                'title' => '任务依赖，必须在依赖结束后执行',
                'description' => 'Describe dependencies',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '执行依赖的任务代称',
                        'description' => '执行依赖的任务代称',
                        'type' => 'string',
                        'example' => 'task-1',
                    ],
                ],
            ],
            'RunPipelineConfig' => [
                'title' => '触发后运行流水线配置',
                'description' => '触发后运行流水线配置',
                'type' => 'object',
                'properties' => [
                    'yamlFilePath' => [
                        'title' => '触发流水线执行的cicd.yaml在仓库中的位置，适用于DevOps的场景。此配置拥有最高优先级，所有流水线执行相关的配置都需要在cicd.yaml文件中定义，其他流水线执行配置均不生效。如果cicd.yaml不存在，则在触发执行时会出错。',
                        'description' => '触发流水线执行的cicd.yaml在仓库中的位置，适用于DevOps的场景。此配置拥有最高优先级，所有流水线执行相关的配置都需要在cicd.yaml文件中定义，其他流水线执行配置均不生效。如果cicd.yaml不存在，则在触发执行时会出错。',
                        'type' => 'string',
                        'example' => 'cd.yaml',
                    ],
                    'yamlFileContent' => [
                        'title' => '触发流水线执行的cicd.yaml的内容。此配置拥有仅次于yamlFilePath的优先级。所有流水线执行相关的配置都需要在cicd.yaml文件中定义，流水线执行配置均不生效。',
                        'description' => '触发流水线执行的cicd.yaml的内容。此配置拥有仅次于yamlFilePath的优先级。所有流水线执行相关的配置都需要在cicd.yaml文件中定义，流水线执行配置均不生效。',
                        'type' => 'string',
                        'example' => 'kind: Pipeline'."\n"
                            .'            # 流水线执行名称，需要全局唯一。如果流水线模板存在，则不能成功提交流水线执行'."\n"
                            .'            # 推荐使用commitID与时间戳构造唯一的名称'."\n"
                            .'            name: "p-<% .git.shortCommitId %>-<% .currentTimestampMs %>"'."\n"
                            .'            # 一些任意的描述信息'."\n"
                            .'            description: \'demo pipeline\''."\n"
                            .'            # 添加任意的labels，用于查询过滤'."\n"
                            .'            # 应用中心会在提交时也会添加其他labels'."\n"
                            .'            labels:'."\n"
                            .'              myLabel: my-cicd-example'."\n"
                            .'            spec:'."\n"
                            .'              context:'."\n"
                            .'                data:'."\n"
                            .'                  appName: <% .appName %>'."\n"
                            .'                  envName: <% .envName %>'."\n"
                            .'                  deployFile: s.yaml'."\n"
                            .'              templateSpec:'."\n"
                            .'                # 要执行的任务，默认所有任务会一同尝试执行'."\n"
                            .'                # 执行会满足runAfters引入的先后约束，任务必须在runAfters声明的任务执行完毕后才可以被执行'."\n"
                            .'                # 用户可以使用此特性，达到DAG描述的效果'."\n"
                            .'                tasks:'."\n"
                            .'                  # 构建前检查'."\n"
                            .'                  - name: pre-check'."\n"
                            .'                    context:'."\n"
                            .'                      data:'."\n"
                            .'                        displayName: "前置检查"'."\n"
                            .'                        # 打开任务执行，默认是关闭的'."\n"
                            .'                        enable: true'."\n"
                            .'                        # 同样可以在此处声明钉钉告警配置，修改告警模板'."\n"
                            .'                        # dingdingNotification:'."\n"
                            .'                        # 同样可以在此处声明或修改RunnerConfig'."\n"
                            .'                        # runnerConfig:'."\n"
                            .'                        # 执行步骤。下述步骤将会采用开源项目serverless-cd提供的engine进行执行'."\n"
                            .'                        steps:'."\n"
                            .'                          # 第一步，初始化s工具'."\n"
                            .'                          - plugin: "@serverless-cd/s-setup"'."\n"
                            .'                          # 第二步，checkout代码'."\n"
                            .'                          # 这里采用了plugin机制，运行serverless-cd社区的插件'."\n"
                            .'                          # @serverless-cd/checkout是一个社区提供的插件，它会将代码checkout到默认路径'."\n"
                            .'                          # 我们会陆续为社区提供更多的插件'."\n"
                            .'                          - plugin: "@serverless-cd/checkout"'."\n"
                            .'                            # 执行s-plan，并打印输出内容'."\n"
                            .'                            # 这里为了说明engine能力，将它拆分成了多个step执行'."\n"
                            .'                          - run: s plan -t ${{ ctx.data.deployFile || "s.yaml" }}'."\n"
                            .'                          - run: echo "s plan finished."'."\n"
                            .'                    # 任务模板。这里使用了内置的模板serverless-runner-task'."\n"
                            .'                    taskTemplate: serverless-runner-task'."\n"
                            .'                    # 执行顺序，当前任务执行依赖runAfters任务都执行成功'."\n"
                            .'                    runAfters: []'."\n"
                            .'                  # 构建并部署'."\n"
                            .'                  - name: build-and-deploy'."\n"
                            .'                    context:'."\n"
                            .'                      data:'."\n"
                            .'                        # 打开任务执行，默认是关闭的'."\n"
                            .'                        enable: true'."\n"
                            .'                        # 同样可以在此处声明钉钉告警配置，修改告警模板'."\n"
                            .'                        # dingdingNotification:'."\n"
                            .'                        # 同样可以在此处声明或修改RunnerConfig'."\n"
                            .'                        # runnerConfig:'."\n"
                            .'                        # 执行步骤。下述步骤将会采用开源项目serverless-cd提供的engine进行执行'."\n"
                            .'                        steps:'."\n"
                            .'                          # 每个Task都是独立运行的Serverless实例，需要再次初始化s工具'."\n"
                            .'                          - plugin: "@serverless-cd/s-setup"'."\n"
                            .'                          # 同理，需要重新checkout'."\n"
                            .'                          - plugin: "@serverless-cd/checkout"'."\n"
                            .'                          # 执行s-deploy'."\n"
                            .'                          - plugin: "@serverless-cd/s-deploy"'."\n"
                            .'                    taskTemplate: serverless-runner-task'."\n"
                            .'                    # 执行顺序，当前任务执行依赖runAfters任务都执行成功'."\n"
                            .'                    runAfters:'."\n"
                            .'                      # 在approval后执行'."\n"
                            .'                      - name: pre-check',
                    ],
                    'pipelineSpec' => [
                        'title' => '流水线执行的配置描述',
                        'description' => '流水线执行的配置描述',
                        '$ref' => '#/components/schemas/PipelineSpec',
                    ],
                    'variables' => [
                        'title' => '流水线环境变量，可以在流水线执行时引用',
                        'description' => '流水线环境变量，可以在流水线执行时引用',
                        'type' => 'array',
                        'items' => [
                            'description' => '变量',
                            '$ref' => '#/components/schemas/Variable',
                        ],
                    ],
                ],
            ],
            'ServiceSpec' => [
                'title' => 'Specification of the desired behavior of the Service.',
                'description' => 'Specification of the desired behavior of the Service.',
                'type' => 'object',
                'properties' => [
                    'environment' => [
                        'title' => 'The name of the associated Environment for the Service',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-env',
                    ],
                    'roleArn' => [
                        'title' => 'The ARN (Aliyun Resource Name) of the role designated by a user to allow the system to manage his Aliyun resources. If null, use roleArn of role AliyunFCDefaultRole.',
                        'type' => 'string',
                        'example' => 'acs:ram::1455541096306548:role/aliyunfcdefaultrole',
                    ],
                    'template' => [
                        'title' => 'The name of the template for the Service',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'serverless-devs.com/alicloud-multi-functions/service-single-function/deployment',
                    ],
                    'templateVariables' => [
                        'title' => 'Variables for specified template',
                        'type' => 'object',
                        'required' => true,
                    ],
                    'templateVersion' => [
                        'title' => 'The major version of the template. "1" by default.',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'Task' => [
                'title' => 'A short description of struct',
                'description' => '任务运行',
                'type' => 'object',
                'properties' => [
                    'spec' => [
                        'description' => '任务运行配置',
                        '$ref' => '#/components/schemas/TaskSpec',
                    ],
                    'status' => [
                        'description' => '任务运行状态',
                        '$ref' => '#/components/schemas/TaskStatus',
                    ],
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '任务描述信息',
                        'description' => '任务描述信息',
                        'type' => 'string',
                        'example' => 'Task example.',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'Task',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-task',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                            'example' => 'value to the label key.',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'TaskExec' => [
                'title' => 'A short description of struct',
                'description' => '任务执行',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '当前任务代称',
                        'description' => '当前任务代称',
                        'type' => 'string',
                        'example' => 'task-1',
                    ],
                    'context' => [
                        'title' => '执行上下文',
                        'description' => '执行上下文',
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'taskTemplate' => [
                        'title' => '任务模板名称',
                        'description' => '任务模板名称',
                        'type' => 'string',
                        'example' => 'serverless-runner',
                    ],
                    'runAfters' => [
                        'title' => '执行顺序，必须在所有依赖任务执行完毕后才能被执行',
                        'description' => '执行顺序，必须在所有依赖任务执行完毕后才能被执行',
                        'type' => 'array',
                        'items' => [
                            'description' => '执行依赖的任务代称。',
                            '$ref' => '#/components/schemas/RunAfter',
                        ],
                    ],
                ],
            ],
            'TaskExecError' => [
                'title' => '任务执行出现的异常描述',
                'description' => '任务执行异常',
                'type' => 'object',
                'properties' => [
                    'title' => [
                        'title' => '错误描述',
                        'description' => '错误描述',
                        'type' => 'string',
                        'example' => '权限不足错误',
                    ],
                    'message' => [
                        'title' => '错误信息',
                        'description' => '错误信息',
                        'type' => 'string',
                        'example' => '部署服务[_appcenter-xxx]失败，权限不足',
                    ],
                    'code' => [
                        'title' => '错误码',
                        'description' => '错误码',
                        'type' => 'string',
                        'example' => 'AccessDenied',
                    ],
                    'requestId' => [
                        'title' => '请求ID',
                        'description' => '请求ID',
                        'type' => 'string',
                        'example' => '1-26d1287xxxxx',
                    ],
                    'extraInfo' => [
                        'title' => '对解决错误有帮助的额外信息',
                        'description' => '对解决错误有帮助的额外信息',
                        'type' => 'string',
                        'example' => '部署辅助函数权限不足，需要添加额外的权限以解决问题',
                    ],
                ],
            ],
            'TaskInvocation' => [
                'title' => 'A short description of struct',
                'description' => '任务调用详情',
                'type' => 'object',
                'properties' => [
                    'invocationID' => [
                        'title' => '调用ID，任务在函数计算中的调用ID',
                        'description' => '调用ID，任务在函数计算中的调用ID',
                        'type' => 'string',
                        'example' => 'E099843B-10A2-4936-9964-4E0EE263D564',
                    ],
                    'requestID' => [
                        'title' => '请求ID，任务在函数计算中的请求ID',
                        'description' => '请求ID，任务在函数计算中的请求ID',
                        'type' => 'string',
                        'example' => '1B3058B1-F1C9-457C-B95C-2C250A4B3118',
                    ],
                    'invocationTarget' => [
                        'title' => '调用目标',
                        'description' => '调用目标',
                        'type' => 'string',
                        'example' => 'acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx',
                    ],
                    'status' => [
                        'title' => '上一次观测到的调用状态。',
                        'description' => '上一次观测到的调用状态。',
                        'type' => 'string',
                        'example' => 'success',
                    ],
                    'output' => [
                        'title' => '调用结果',
                        'description' => '调用结果',
                        'type' => 'string',
                        'example' => '{"key1":"value1","key2":"value2"}',
                    ],
                    'instanceID' => [
                        'title' => '调用命中的实例ID',
                        'description' => '调用命中的实例ID',
                        'type' => 'string',
                        'example' => 'c-nkj8shz7xxxx',
                    ],
                    'slsProject' => [
                        'title' => '日志投递到SLS产品的Project名称',
                        'description' => '日志投递到SLS产品的Project名称',
                        'type' => 'string',
                        'example' => 'my-sls-project',
                    ],
                    'slsLogStore' => [
                        'title' => '日志投递到SLS产品的Logstore名称',
                        'description' => '日志投递到SLS产品的Logstore名称',
                        'type' => 'string',
                        'example' => 'my-sls-logstore',
                    ],
                ],
            ],
            'TaskSpec' => [
                'title' => 'A short description of struct',
                'description' => '任务运行配置',
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'title' => '任务模板名称',
                        'description' => '任务模板名称',
                        'type' => 'string',
                        'example' => 'my-task-template',
                    ],
                    'context' => [
                        'title' => '任务的执行上下文',
                        'description' => '任务的执行上下文',
                        '$ref' => '#/components/schemas/Context',
                    ],
                ],
            ],
            'TaskStatus' => [
                'title' => 'A short description of struct',
                'description' => '任务运行状态',
                'type' => 'object',
                'properties' => [
                    'statusGeneration' => [
                        'title' => '状态版本号',
                        'description' => '状态版本号',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '123',
                    ],
                    'phase' => [
                        'title' => '当前执行阶段',
                        'description' => '当前执行阶段',
                        'type' => 'string',
                        'example' => 'Success',
                    ],
                    'executionDetails' => [
                        'title' => '执行详情',
                        'description' => '执行详情',
                        'type' => 'array',
                        'items' => [
                            'description' => '执行详情',
                            'type' => 'string',
                            'example' => 'step1: start task.',
                        ],
                    ],
                    'invocations' => [
                        'title' => '执行历史',
                        'description' => '执行历史',
                        'type' => 'array',
                        'items' => [
                            'description' => '调用的列表',
                            '$ref' => '#/components/schemas/TaskInvocation',
                        ],
                    ],
                    'latestExecError' => [
                        'title' => '最近一次任务执行错误',
                        'description' => '最近一次任务执行错误',
                        '$ref' => '#/components/schemas/TaskExecError',
                    ],
                ],
            ],
            'TaskTemplate' => [
                'description' => '任务模板',
                'type' => 'object',
                'properties' => [
                    'uid' => [
                        'title' => '当前阿里云主账号的ID，只读',
                        'description' => '当前阿里云主账号的ID，只读',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1455541096***548',
                    ],
                    'generation' => [
                        'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                    'description' => [
                        'title' => '任务模板描述信息',
                        'description' => '任务模板描述信息',
                        'type' => 'string',
                        'example' => 'TaskTemplate example.',
                    ],
                    'kind' => [
                        'title' => '当前资源的名称，只读',
                        'description' => '当前资源的名称，只读',
                        'type' => 'string',
                        'example' => 'TaskTemplate',
                    ],
                    'createdTime' => [
                        'title' => '表示创建此对象时服务器的时间，只读',
                        'description' => '表示创建此对象时服务器的时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'name' => [
                        'title' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'description' => '当前资源的名称。它需要是唯一的，且无法变更',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'my-task-template',
                        'maxLength' => 40,
                        'minLength' => 1,
                        'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
                    ],
                    'deletionTime' => [
                        'title' => '资源删除时间，只读',
                        'description' => '资源删除时间，只读',
                        'type' => 'string',
                        'example' => '2021-11-19T09:34:38Z',
                    ],
                    'spec' => [
                        'title' => '资源的配置属性',
                        'description' => '资源的配置属性',
                        '$ref' => '#/components/schemas/TaskTemplateSpec',
                    ],
                    'labels' => [
                        'title' => '资源的标签',
                        'description' => '资源的标签',
                        'type' => 'object',
                        'additionalProperties' => [
                            'description' => '标签',
                            'type' => 'string',
                            'example' => '资源标签的值',
                        ],
                    ],
                    'resourceVersion' => [
                        'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                    ],
                ],
            ],
            'TaskTemplateSpec' => [
                'title' => 'A short description of struct',
                'description' => '任务模板描述',
                'type' => 'object',
                'properties' => [
                    'description' => [
                        'title' => '任务执行的描述信息',
                        'description' => '任务执行的描述信息',
                        'type' => 'string',
                        'example' => 'build&deploy.',
                    ],
                    'worker' => [
                        'title' => '任务节点的描述',
                        'description' => '任务节点的描述',
                        '$ref' => '#/components/schemas/TaskWorker',
                    ],
                    'context' => [
                        'title' => '任务的执行上下文',
                        'description' => '任务的执行上下文',
                        '$ref' => '#/components/schemas/Context',
                    ],
                    'executeCondition' => [
                        'title' => '任务执行的条件',
                        'description' => '任务执行的条件',
                        '$ref' => '#/components/schemas/Condition',
                    ],
                ],
            ],
            'TaskWorker' => [
                'title' => 'A short description of struct',
                'description' => '描述任务执行方式',
                'type' => 'object',
                'properties' => [
                    'presetWorker' => [
                        'title' => '系统预设的任务类型。它会执行预设的逻辑。',
                        'description' => '系统预设的任务类型。它会执行预设的逻辑。',
                        'type' => 'string',
                        'example' => 'serverless-runner',
                    ],
                ],
            ],
            'TemplateConfig' => [
                'title' => '模板配置',
                'description' => '项目模板配置',
                'type' => 'object',
                'properties' => [
                    'templateName' => [
                        'title' => '模板名称',
                        'description' => '模板名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'start-springboot',
                    ],
                    'parameters' => [
                        'title' => '模板参数',
                        'description' => '模板参数',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"region":"cn-hangzhou"}',
                    ],
                ],
            ],
            'TerraformInputVariable' => [
                'title' => 'Terraform模板输入变量定义',
                'description' => 'Terraform模板输入变量定义',
                'type' => 'object',
                'properties' => [
                    'defaultJson' => [
                        'title' => '变量默认值的JSON字符串，可选。',
                        'type' => 'string',
                        'example' => '{"key":"value"}',
                    ],
                    'description' => [
                        'title' => '变量描述',
                        'type' => 'string',
                        'example' => 'test variable',
                    ],
                    'name' => [
                        'title' => '变量名称。可以包含字母、数字、下划线（_）和连字符（-）。名称第一个字符不能是数字，以避免文字数字的歧义。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'namePrefix',
                    ],
                    'nullable' => [
                        'title' => '变量是否可以为空，默认为true',
                        'type' => 'boolean',
                        'example' => 'true',
                        'default' => 'true',
                    ],
                    'sensitive' => [
                        'title' => '变量是否包含敏感信息，默认为false',
                        'type' => 'boolean',
                        'example' => 'false',
                        'default' => 'false',
                    ],
                    'type' => [
                        'title' => '变量参数类型',
                        'type' => 'string',
                        'example' => 'string',
                    ],
                ],
            ],
            'TerraformOutputValue' => [
                'title' => 'Terraform模板输出',
                'description' => 'Terraform模板输出，只读',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => '输出变量的名称。名称可以包含字母、数字、下划线（_）和连字符（-）。第一个字符不能是数字，以避免文字数字的歧义。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'vpcId',
                    ],
                    'description' => [
                        'title' => '输出变量的描述',
                        'type' => 'string',
                        'example' => 'The VPC ID where the resource is located.',
                    ],
                    'sensitive' => [
                        'title' => '输出变量是否大小写敏感，默认false',
                        'type' => 'boolean',
                        'example' => 'false',
                        'default' => 'false',
                    ],
                ],
            ],
            'Variable' => [
                'title' => '变量',
                'description' => '变量',
                'type' => 'object',
                'properties' => [
                    'value' => [
                        'title' => '变量的值',
                        'description' => '变量的值',
                        'type' => 'string',
                        'example' => 'object_value',
                    ],
                    'name' => [
                        'title' => '变量的关键字',
                        'description' => '变量的关键字',
                        'type' => 'string',
                        'example' => 'object_key',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreateProject' => [
            'summary' => '创建项目，并在指定模板配置时自动部署此项目。',
            'path' => '/2023-07-14/projects',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '计划创建的项目实体',
                        'required' => false,
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '成功创建的项目实体',
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '创建项目',
            'description' => '1. 当`Project.Spec.TemplateConfig`非空时：创建项目后，开发平台会使用您提供的模板信息异步地为您自动部署该项目（创建`Environment`、`PipelineTrigger`、`PipelineTriggerEvent`、`Pipeline`实体）'."\n"
                .'2. 当`Project.Spec.TemplateConfig`为空时：仅创建项目实体，需要您手动调用`Environment`、`PipelineTrigger`、`PipelineTriggerEvent`相关API完成部署。'."\n"
                ."\n"
                .'><notice>通过模板完成的项目部署流程完全免费，部署后项目模板所涉及的云资源将按照各云产品的计费方式计费></notice>',
        ],
        'DeleteProject' => [
            'summary' => '删除一个项目，并级联删除项目下的其他实体（包括环境、流水线触发器、流水线触发记录、流水线模板、流水线）。',
            'path' => '/2023-07-14/projects/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当项目下不存在任何环境或仅存在一个默认环境时，才允许删除该项目；而force可以强制删除项目并级联删除其下环境',
                        'description' => '是否强制删除。当项目中包含多个环境时，若force为true，则能够强制删除项目，并级联删除所有环境下的其他实体；若force为false，则抛出异常，需要您先删除环境',
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
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'D9A4CC0F-132B-5EDC-B252-5E11ADFA4B4E',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D9A4CC0F-132B-5EDC-B252-5E11ADFA4B4E\\"\\n}","type":"json"}]',
            'title' => '删除项目',
            'description' => '1. 若项目中不存在环境或仅包含一个默认环境：能够删除项目，并级联删除环境下的其他实体（包括流水线触发器、流水线触发记录、流水线模板、流水线）'."\n"
                .'2. 若项目中包含多个环境：若`force`为`true`，则能够强制删除项目，并级联删除所有环境下的其他实体；若`force`为`false`，则抛出异常，需要您先删除环境'."\n"
                ."\n"
                .'> 使用OpenAPI删除项目时，暂不支持删除项目下部署的云资源（例如函数、自定义域名等）',
        ],
        'UpdateProject' => [
            'summary' => '修改项目，并在模板参数变化时自动部署该项目。',
            'path' => '/2023-07-14/projects/{name}',
            'methods' => [
                'patch',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '计划更新的项目实体内容。您指定的可写字段将被更新，未指定的字段将保持不变',
                        'description' => '计划更新的项目实体内容。您指定的可写字段将被更新，未指定的字段将保持不变',
                        'required' => false,
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功更新后的项目实体',
                        'description' => '成功更新后的项目实体',
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '修改项目',
            'description' => '1. 使用修改（Update）相关的接口时，您指定的可写字段将被更新，未指定的字段将保持不变'."\n"
                .'2. 当且仅当模板参数（spec.templateConfig.parameters）发生变化时，才会触发自动部署'."\n"
                .'3. 使用环境（Environment）相关API修改默认环境（Default）配置后，不再支持更新项目',
        ],
        'PutProject' => [
            'summary' => '使用新的项目配置替换已有的项目配置，并在模板参数变化时自动部署该项目。',
            'path' => '/2023-07-14/projects/{name}',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '计划更新的项目实体内容。当前实体的可写字段将被您指定的实体完全替换',
                        'description' => '计划更新的项目实体内容。当前实体的可写字段将被您指定的实体完全替换',
                        'required' => false,
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '强制更新项目。由于更新项目时可能会触发自动部署，因此并发部署将被限制，您可以通过此参数强制更新',
                        'description' => '强制更新项目。由于更新项目时可能会触发自动部署，因此并发部署将被限制，您可以通过此参数强制更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功更新后的项目实体',
                        'description' => '成功更新后的项目实体',
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '替换项目',
            'description' => '1. 使用替换（Put）相关的接口时，当前实体的可写字段将被您指定的实体完全替换'."\n"
                .'2. 当且仅当模板参数（spec.templateConfig.parameters）发生变化时，才会触发自动部署'."\n"
                .'3. 使用环境（Environment）相关API修改默认环境（Default）配置后，不再支持更新项目',
        ],
        'ListProjects' => [
            'summary' => '批量查询满足条件的项目。',
            'path' => '/2023-07-14/projects',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'templateName=spring-boot-v3',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码，默认为1。页码从1开始。',
                        'description' => '当前页码，默认为1。页码从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页大小，默认为100。取值范围1~100',
                        'description' => '每页大小，默认为100。取值范围1~100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'spring-boot',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询的分页结果',
                        'description' => '查询的分页结果',
                        'type' => 'object',
                        'properties' => [
                            'pageNumber' => [
                                'title' => '当前页码',
                                'description' => '当前页码，默认为1。页码从1开始',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '每页大小',
                                'description' => '每页大小，默认为100。取值范围1~100',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'totalCount' => [
                                'title' => '查询到的结果数量',
                                'description' => '查询到的结果数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '查询的资源实体列表',
                                'description' => '查询的资源实体列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '查询的一个满足条件的项目实体',
                                    'description' => '查询的一个满足条件的项目实体',
                                    '$ref' => '#/components/schemas/Project',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 100,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"kind\\": \\"Project\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-project\\",\\n      \\"spec\\": {\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        },\\n        \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n        \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"key=value\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"description\\": \\"test-description\\",\\n      \\"status\\": {\\n        \\"latestReleaseDetail\\": {\\n          \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n          \\"bizStatus\\": \\"Running\\",\\n          \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n          \\"templateConfigSnapshot\\": {\\n            \\"templateName\\": \\"start-springboot\\",\\n            \\"parameters\\": {\\n              \\"region\\": \\"cn-hangzhou\\"\\n            }\\n          },\\n          \\"releaseOutputs\\": {\\n            \\"framework\\": {\\n              \\"region\\": \\"cn-hangzhou\\",\\n              \\"service\\": {\\n                \\"serviceName\\": \\"web-framework\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n                \\"role\\": \\"\\",\\n                \\"logConfig\\": {\\n                  \\"project\\": \\"\\",\\n                  \\"logstore\\": \\"\\",\\n                  \\"enableRequestMetrics\\": false,\\n                  \\"enableInstanceMetrics\\": false,\\n                  \\"logBeginRule\\": \\"None\\"\\n                },\\n                \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n                \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                \\"vpcConfig\\": {\\n                  \\"vpcId\\": \\"\\",\\n                  \\"vSwitchIds\\": [],\\n                  \\"securityGroupId\\": \\"\\",\\n                  \\"role\\": \\"\\"\\n                },\\n                \\"internetAccess\\": true,\\n                \\"nasConfig\\": {\\n                  \\"userId\\": -1,\\n                  \\"groupId\\": -1,\\n                  \\"mountPoints\\": []\\n                },\\n                \\"tracingConfig\\": {},\\n                \\"name\\": \\"web-framework\\"\\n              },\\n              \\"function\\": {\\n                \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n                \\"functionName\\": \\"todolist\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n                \\"runtime\\": \\"nodejs12\\",\\n                \\"handler\\": \\"index.handler\\",\\n                \\"timeout\\": 60,\\n                \\"initializer\\": \\"\\",\\n                \\"initializationTimeout\\": 3,\\n                \\"codeSize\\": 1757093,\\n                \\"codeChecksum\\": \\"7185648203525194222\\",\\n                \\"memorySize\\": 256,\\n                \\"environmentVariables\\": {},\\n                \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n                \\"instanceConcurrency\\": 1,\\n                \\"instanceType\\": \\"e1\\",\\n                \\"instanceLifecycleConfig\\": {\\n                  \\"preFreeze\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  },\\n                  \\"preStop\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  }\\n                },\\n                \\"name\\": \\"todolist\\"\\n              },\\n              \\"triggers\\": [\\n                {\\n                  \\"triggerName\\": \\"httpTrigger\\",\\n                  \\"description\\": \\"\\",\\n                  \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n                  \\"triggerType\\": \\"http\\",\\n                  \\"triggerConfig\\": {\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ],\\n                    \\"authType\\": \\"anonymous\\"\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                  \\"name\\": \\"httpTrigger\\"\\n                }\\n              ],\\n              \\"customDomains\\": [\\n                {\\n                  \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n                  \\"accountId\\": \\"1835799444022432\\",\\n                  \\"protocol\\": \\"HTTP\\",\\n                  \\"certConfig\\": {},\\n                  \\"tlsConfig\\": {},\\n                  \\"apiVersion\\": \\"2016-08-15\\",\\n                  \\"routeConfig\\": {\\n                    \\"routes\\": [\\n                      {\\n                        \\"path\\": \\"/*\\",\\n                        \\"serviceName\\": \\"web-framework\\",\\n                        \\"functionName\\": \\"todolist\\",\\n                        \\"methods\\": [\\n                          \\"GET\\",\\n                          \\"POST\\"\\n                        ]\\n                      }\\n                    ]\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n          \\"repositorySnapshot\\": {\\n            \\"connectionName\\": \\"awesome-connection\\",\\n            \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n            \\"platform\\": \\"github\\",\\n            \\"id\\": 312649,\\n            \\"owner\\": \\"my-org-name\\",\\n            \\"displayName\\": \\"my-repo-name\\",\\n            \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n          },\\n          \\"gitEventSnapshot\\": {\\n            \\"branch\\": \\"main\\",\\n            \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n            \\"tag\\": \\"1.0\\"\\n          },\\n          \\"message\\": \\"Triggered manually.\\",\\n          \\"latestTaskExecError\\": {\\n            \\"title\\": \\"权限不足错误\\",\\n            \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n            \\"code\\": \\"AccessDenied\\",\\n            \\"requestId\\": \\"1-26d1287xxxxx\\",\\n            \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n          },\\n          \\"envName\\": \\"dev\\"\\n        },\\n        \\"observedGeneration\\": 1,\\n        \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n      },\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询项目',
        ],
        'GetProject' => [
            'summary' => '查询一个项目。',
            'path' => '/2023-07-14/projects/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '查询的项目实体',
                        '$ref' => '#/components/schemas/Project',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '查询项目',
        ],
        'CreateEnvironment' => [
            'summary' => '创建项目下的环境，并可选地根据模板自动部署该环境。'."\n"
                .'服务会部署到指定的环境中，环境可以绑定代码仓库的某个分支或者某个项目模板。环境还可以设置基础设施堆栈，被环境下的所有服务所共享。',
            'path' => '/2023-07-14/projects/{project}/environments',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '环境实体',
                        'description' => '环境实体',
                        'required' => false,
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目名',
                        'description' => '项目名',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-project',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '环境实体',
                        'description' => '环境实体',
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '创建环境',
            'description' => '使用注意事项：'."\n"
                ."\n"
                .'- 当Environment.Spec.TemplateConfig非空时：创建环境后，开发平台会使用您提供的模板信息异步地为您自动部署该项目（创建PipelineTrigger、PipelineTriggerEvent、Pipeline实体）。'."\n"
                ."\n"
                .'- 当Environment.Spec.TemplateConfig为空时：仅创建环境实体，需要您手动调用PipelineTrigger、PipelineTriggerEvent相关API完成部署。'."\n"
                ."\n"
                .'<notice>通过模板完成的项目部署流程完全免费，部署后项目模板所涉及的云资源将按照各云产品的计费方式计费></notice>',
        ],
        'DeleteEnvironment' => [
            'summary' => '删除一个环境，并级联删除项目下的其他实体（包括流水线触发器、流水线触发记录、流水线模板、流水线）。',
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
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
                'riskType' => 'high',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目名称',
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-project',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '环境名称',
                        'description' => '环境名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-env',
                    ],
                ],
            ],
            'responses' => [],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
            'title' => '删除环境',
            'description' => '删除环境目前不支持删除环境下的云资源，您需要手动删除资源。',
        ],
        'UpdateEnvironment' => [
            'summary' => '修改环境，并在模板参数变化时自动部署该环境。',
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
            'methods' => [
                'patch',
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
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '环境实体。您指定的可写字段将被更新，未指定的字段将保持不变',
                        'description' => '环境实体。您指定的可写字段将被更新，未指定的字段将保持不变',
                        'required' => false,
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目名称',
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-project',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '环境名称',
                        'description' => '环境名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-env',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '环境实体',
                        'description' => '环境实体',
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '修改环境',
            'description' => '- 使用修改（Update）的接口时，您指定的可写字段将被更新，未指定的字段将保持不变'."\n"
                ."\n"
                .'- 当且仅当模板参数（spec.templateConfig.parameters）发生变化时，才会触发自动部署',
        ],
        'PutEnvironment' => [
            'summary' => '使用新的环境配置替换已有的环境配置；当开启自动部署时，会在模板参数变化时自动部署该环境。',
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
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
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '环境实体。当前实体的可写字段将被您指定的实体完全替换'."\n",
                        'description' => '环境实体。当前实体的可写字段将被您指定的实体完全替换',
                        'required' => false,
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目名称',
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => false,
                        'example' => 'demo-project',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '环境名称',
                        'description' => '环境名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-env',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
                        'description' => '是否强制更新。若为`false`，则需要保证即将替换的环境实体为最新的，否则将抛出并发修改冲突异常。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '环境实体',
                        'description' => '环境实体',
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '替换环境',
            'description' => '- 使用替换（Put）相关的接口时，当前实体的可写字段将被您指定的实体完全替换'."\n"
                ."\n"
                .'- 当开启自动部署时，会在模板参数（spec.templateConfig.parameters）发生变化时，触发自动部署',
        ],
        'ListEnvironments' => [
            'summary' => '批量查询满足条件的环境。',
            'path' => '/2023-07-14/projects/{project}/environments/',
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
            ],
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'branch=main',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目名称',
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-project',
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码，默认为1。页码从1开始',
                        'description' => '当前页码，默认为1。页码从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页大小，默认为100。取值范围1~100',
                        'description' => '每页大小，默认为100。取值范围1~100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'dev',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询的分页结果',
                        'description' => '查询的分页结果',
                        'type' => 'object',
                        'properties' => [
                            'pageNumber' => [
                                'title' => '当前页码',
                                'description' => '当前页码，默认为1。页码从1开始',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '每页大小',
                                'description' => '每页大小，默认为100。取值范围1~100',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '50',
                            ],
                            'totalCount' => [
                                'title' => '查询到的结果数量',
                                'description' => '查询到的结果数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'data' => [
                                'title' => '查询的资源实体列表',
                                'description' => '查询的资源实体列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '查询的一个满足条件的环境实体',
                                    'description' => '查询的一个满足条件的环境实体',
                                    '$ref' => '#/components/schemas/Environment',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 50,\\n  \\"totalCount\\": 100,\\n  \\"data\\": [\\n    {\\n      \\"name\\": \\"demo-env\\",\\n      \\"kind\\": \\"Environment\\",\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"description\\": \\"test env\\",\\n      \\"spec\\": {\\n        \\"type\\": \\"Testing\\",\\n        \\"alias\\": \\"dev\\",\\n        \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n        \\"repositoryConfig\\": {\\n          \\"repositoryName\\": \\"my-repository\\",\\n          \\"branchName\\": \\"master\\",\\n          \\"manifest\\": \\"src/s.yaml\\"\\n        },\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        },\\n        \\"infraStackConfig\\": {\\n          \\"regionID\\": \\"cn-hangzhou\\",\\n          \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n          \\"templateSpec\\": {\\n            \\"engine\\": \\"terrafrom\\",\\n            \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n          },\\n          \\"templateVariables\\": {\\n            \\"testKey\\": \\"testValue\\"\\n          },\\n          \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n        },\\n        \\"serviceOverlay\\": {\\n          \\"resources\\": {\\n            \\"dummyFunction\\": {\\n              \\"timeout\\": 600\\n            }\\n          },\\n          \\"components\\": {\\n            \\"fc3\\": {\\n              \\"timeout\\": 600\\n            }\\n          }\\n        },\\n        \\"isAutoDeploy\\": true\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"value to the label key.\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"status\\": {\\n        \\"infraStackStatus\\": {\\n          \\"phase\\": \\"DeploySuccess\\",\\n          \\"message\\": \\"Success!\\",\\n          \\"observedGeneration\\": 0,\\n          \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n          \\"templateOutputs\\": {\\n            \\"vpcId\\": \\"vpc-xxx\\"\\n          },\\n          \\"templateStatus\\": {\\n            \\"variables\\": [\\n              {\\n                \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n                \\"description\\": \\"test variable\\",\\n                \\"name\\": \\"namePrefix\\",\\n                \\"nullable\\": true,\\n                \\"sensitive\\": false,\\n                \\"type\\": \\"string\\"\\n              }\\n            ],\\n            \\"outputs\\": [\\n              {\\n                \\"name\\": \\"vpcId\\",\\n                \\"description\\": \\"The VPC ID where the resource is located.\\",\\n                \\"sensitive\\": false\\n              }\\n            ]\\n          },\\n          \\"resourceState\\": {\\n            \\"resources\\": [\\n              {\\n                \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"mode\\": \\"managed\\",\\n                \\"type\\": \\"alicloud_fc_trigger\\",\\n                \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"attributeValues\\": {\\n                  \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n                  \\"config_mns\\": null,\\n                  \\"function\\": \\"sd\\",\\n                  \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n                  \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n                  \\"name\\": \\"defaultTrigger\\",\\n                  \\"name_prefix\\": null,\\n                  \\"role\\": \\"\\",\\n                  \\"service\\": \\"fc-stable-diffusion\\",\\n                  \\"source_arn\\": \\"\\",\\n                  \\"trigger_id\\": \\"mock-trigger\\",\\n                  \\"type\\": \\"http\\"\\n                }\\n              }\\n            ],\\n            \\"resourceDrifts\\": [\\n              {\\n                \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"mode\\": \\"managed\\",\\n                \\"type\\": \\"alicloud_fc_trigger\\",\\n                \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"change\\": {\\n                  \\"actions\\": [\\n                    \\"update\\"\\n                  ],\\n                  \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n                  \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n                }\\n              }\\n            ]\\n          }\\n        },\\n        \\"latestReleaseDetail\\": {\\n          \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n          \\"bizStatus\\": \\"Running\\",\\n          \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n          \\"templateConfigSnapshot\\": {\\n            \\"templateName\\": \\"start-springboot\\",\\n            \\"parameters\\": {\\n              \\"region\\": \\"cn-hangzhou\\"\\n            }\\n          },\\n          \\"releaseOutputs\\": {\\n            \\"framework\\": {\\n              \\"region\\": \\"cn-hangzhou\\",\\n              \\"service\\": {\\n                \\"serviceName\\": \\"web-framework\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n                \\"role\\": \\"\\",\\n                \\"logConfig\\": {\\n                  \\"project\\": \\"\\",\\n                  \\"logstore\\": \\"\\",\\n                  \\"enableRequestMetrics\\": false,\\n                  \\"enableInstanceMetrics\\": false,\\n                  \\"logBeginRule\\": \\"None\\"\\n                },\\n                \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n                \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                \\"vpcConfig\\": {\\n                  \\"vpcId\\": \\"\\",\\n                  \\"vSwitchIds\\": [],\\n                  \\"securityGroupId\\": \\"\\",\\n                  \\"role\\": \\"\\"\\n                },\\n                \\"internetAccess\\": true,\\n                \\"nasConfig\\": {\\n                  \\"userId\\": -1,\\n                  \\"groupId\\": -1,\\n                  \\"mountPoints\\": []\\n                },\\n                \\"tracingConfig\\": {},\\n                \\"name\\": \\"web-framework\\"\\n              },\\n              \\"function\\": {\\n                \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n                \\"functionName\\": \\"todolist\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n                \\"runtime\\": \\"nodejs12\\",\\n                \\"handler\\": \\"index.handler\\",\\n                \\"timeout\\": 60,\\n                \\"initializer\\": \\"\\",\\n                \\"initializationTimeout\\": 3,\\n                \\"codeSize\\": 1757093,\\n                \\"codeChecksum\\": \\"7185648203525194222\\",\\n                \\"memorySize\\": 256,\\n                \\"environmentVariables\\": {},\\n                \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n                \\"instanceConcurrency\\": 1,\\n                \\"instanceType\\": \\"e1\\",\\n                \\"instanceLifecycleConfig\\": {\\n                  \\"preFreeze\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  },\\n                  \\"preStop\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  }\\n                },\\n                \\"name\\": \\"todolist\\"\\n              },\\n              \\"triggers\\": [\\n                {\\n                  \\"triggerName\\": \\"httpTrigger\\",\\n                  \\"description\\": \\"\\",\\n                  \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n                  \\"triggerType\\": \\"http\\",\\n                  \\"triggerConfig\\": {\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ],\\n                    \\"authType\\": \\"anonymous\\"\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                  \\"name\\": \\"httpTrigger\\"\\n                }\\n              ],\\n              \\"customDomains\\": [\\n                {\\n                  \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n                  \\"accountId\\": \\"1835799444022432\\",\\n                  \\"protocol\\": \\"HTTP\\",\\n                  \\"certConfig\\": {},\\n                  \\"tlsConfig\\": {},\\n                  \\"apiVersion\\": \\"2016-08-15\\",\\n                  \\"routeConfig\\": {\\n                    \\"routes\\": [\\n                      {\\n                        \\"path\\": \\"/*\\",\\n                        \\"serviceName\\": \\"web-framework\\",\\n                        \\"functionName\\": \\"todolist\\",\\n                        \\"methods\\": [\\n                          \\"GET\\",\\n                          \\"POST\\"\\n                        ]\\n                      }\\n                    ]\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n          \\"repositorySnapshot\\": {\\n            \\"connectionName\\": \\"awesome-connection\\",\\n            \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n            \\"platform\\": \\"github\\",\\n            \\"id\\": 312649,\\n            \\"owner\\": \\"my-org-name\\",\\n            \\"displayName\\": \\"my-repo-name\\",\\n            \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n          },\\n          \\"gitEventSnapshot\\": {\\n            \\"branch\\": \\"main\\",\\n            \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n            \\"tag\\": \\"1.0\\"\\n          },\\n          \\"message\\": \\"Triggered manually.\\",\\n          \\"latestTaskExecError\\": {\\n            \\"title\\": \\"权限不足错误\\",\\n            \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n            \\"code\\": \\"AccessDenied\\",\\n            \\"requestId\\": \\"1-26d1287xxxxx\\",\\n            \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n          },\\n          \\"envName\\": \\"dev\\"\\n        },\\n        \\"observedGeneration\\": 1,\\n        \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n      },\\n      \\"projectName\\": \\"demo-project\\",\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询环境',
        ],
        'GetEnvironment' => [
            'summary' => '查询一个环境。',
            'path' => '/2023-07-14/projects/{project}/environments/{name}',
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
            ],
            'parameters' => [
                [
                    'name' => 'project',
                    'in' => 'path',
                    'schema' => [
                        'title' => '项目名称',
                        'description' => '项目名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-project',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '环境名称',
                        'description' => '环境名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-env',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '环境实体',
                        'description' => '环境实体',
                        '$ref' => '#/components/schemas/Environment',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '查询环境',
        ],
        'CreateConnection' => [
            'summary' => '创建一个身份绑定，将阿里云主账号与一个第三方代码托管平台（GitHub、Gitee、Codeup、...）的账号建立关联。',
            'path' => '/2023-07-14/connections',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '计划创建的身份绑定实体',
                        'required' => false,
                        '$ref' => '#/components/schemas/Connection',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '成功创建的身份绑定实体',
                        '$ref' => '#/components/schemas/Connection',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Connection\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-connection\\",\\n  \\"spec\\": {\\n    \\"platform\\": \\"github\\",\\n    \\"account\\": {\\n      \\"name\\": \\"your_username\\",\\n      \\"displayName\\": \\"your_displayname\\",\\n      \\"id\\": \\"1\\",\\n      \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n      \\"uri\\": \\"https://gitlab.com\\"\\n    },\\n    \\"gitlabConfig\\": {\\n      \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n      \\"token\\": \\"your-token\\"\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"installation\\": {\\n      \\"stage\\": \\"finished\\",\\n      \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n      \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n    }\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '创建身份绑定',
            'description' => '使用注意事项：'."\n"
                ."\n"
                .'- GitHub、Gitee、Codeup：使用OAuth授权，需要您创建Connection实体后，点击status中的授权链接完成身份绑定'."\n"
                .'- GitLab：使用私人令牌，在创建Connection实体的同时完成身份绑定'."\n"
                ."\n"
                .'><notice>一个“阿里云主账号”不能重复绑定同一个“代码托管平台账号”'."\n"
                .'（即对于一个“代码托管平台账号”，至多存在一个已完成绑定的Connection实体）></notice>',
        ],
        'DeleteConnection' => [
            'summary' => '删除一个身份绑定。',
            'path' => '/2023-07-14/connections/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '若存在其他Repository实体关联了该Connection，则无法直接删除；指定force=true后可以强制删除Connection(但不级联删除Repository)',
                        'description' => '是否强制删除。若存在仓库绑定实体（Repository）关联了该身份绑定（Connection），则无法直接删除；您能够通过强制删除的方式删除该身份绑定'."\n"
                            ."\n"
                            .'><notice>删除身份绑定（Connection）时，不会级联删除关联的仓库绑定（Repository）></notice>',
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
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A5152937-1C8A-5260-90FA-520CEF028D2D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"A5152937-1C8A-5260-90FA-520CEF028D2D\\"\\n}","type":"json"}]',
            'title' => '删除身份绑定',
        ],
        'ListConnections' => [
            'summary' => '批量查询满足条件的身份绑定。',
            'path' => '/2023-07-14/connections',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'platform=github'."\n",
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码，默认为1。页码从1开始',
                        'description' => '当前页码，默认为1。页码从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页大小，默认为100。取值范围1~100',
                        'description' => '每页大小，默认为100。取值范围1~100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'auto-',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询的分页结果',
                        'description' => '查询的分页结果',
                        'type' => 'object',
                        'properties' => [
                            'pageNumber' => [
                                'title' => '当前页码',
                                'description' => '当前页码，默认为1。页码从1开始',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '每页大小',
                                'description' => '每页大小，默认为100。取值范围1~100',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'totalCount' => [
                                'title' => '查询到的结果数量',
                                'description' => '查询到的结果数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '查询的资源实体列表',
                                'description' => '查询的资源实体列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '查询的一个满足条件的身份绑定实体',
                                    'description' => '查询的一个满足条件的身份绑定实体',
                                    '$ref' => '#/components/schemas/Connection',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 100,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"kind\\": \\"Connection\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-connection\\",\\n      \\"spec\\": {\\n        \\"platform\\": \\"github\\",\\n        \\"account\\": {\\n          \\"name\\": \\"your_username\\",\\n          \\"displayName\\": \\"your_displayname\\",\\n          \\"id\\": \\"1\\",\\n          \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n          \\"uri\\": \\"https://gitlab.com\\"\\n        },\\n        \\"gitlabConfig\\": {\\n          \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n          \\"token\\": \\"your-token\\"\\n        }\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"key=value\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"description\\": \\"test-description\\",\\n      \\"status\\": {\\n        \\"installation\\": {\\n          \\"stage\\": \\"finished\\",\\n          \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n          \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n        }\\n      },\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询身份绑定',
        ],
        'GetConnection' => [
            'summary' => '查询一个身份绑定。',
            'path' => '/2023-07-14/connections/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '查询的身份绑定实体',
                        '$ref' => '#/components/schemas/Connection',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Connection\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-connection\\",\\n  \\"spec\\": {\\n    \\"platform\\": \\"github\\",\\n    \\"account\\": {\\n      \\"name\\": \\"your_username\\",\\n      \\"displayName\\": \\"your_displayname\\",\\n      \\"id\\": \\"1\\",\\n      \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n      \\"uri\\": \\"https://gitlab.com\\"\\n    },\\n    \\"gitlabConfig\\": {\\n      \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n      \\"token\\": \\"your-token\\"\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"installation\\": {\\n      \\"stage\\": \\"finished\\",\\n      \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n      \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n    }\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '查询身份绑定',
        ],
        'RefreshConnection' => [
            'summary' => '刷新身份绑定。检查并按需刷新身份绑定中的凭证信息和代码托管平台账号信息，若刷新失败，则将状态转换为不可用。',
            'path' => '/2023-07-14/connections/{name}/refresh',
            'methods' => [
                'patch',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '成功刷新后的身份绑定实体',
                        '$ref' => '#/components/schemas/Connection',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Connection\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-connection\\",\\n  \\"spec\\": {\\n    \\"platform\\": \\"github\\",\\n    \\"account\\": {\\n      \\"name\\": \\"your_username\\",\\n      \\"displayName\\": \\"your_displayname\\",\\n      \\"id\\": \\"1\\",\\n      \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n      \\"uri\\": \\"https://gitlab.com\\"\\n    },\\n    \\"gitlabConfig\\": {\\n      \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n      \\"token\\": \\"your-token\\"\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"installation\\": {\\n      \\"stage\\": \\"finished\\",\\n      \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n      \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n    }\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '刷新身份绑定',
        ],
        'CreateRepository' => [
            'summary' => '创建一个仓库绑定。将阿里云主账号与一个第三方代码托管平台（GitHub、Gitee、Codeup、...）的代码仓库建立关联。',
            'path' => '/2023-07-14/repositories',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '计划创建的仓库绑定实体',
                        'required' => false,
                        '$ref' => '#/components/schemas/Repository',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '成功创建的仓库绑定实体',
                        '$ref' => '#/components/schemas/Repository',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Repository\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-repository\\",\\n  \\"spec\\": {\\n    \\"connectionName\\": \\"awesome-connection\\",\\n    \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n    \\"platform\\": \\"github\\",\\n    \\"id\\": 312649,\\n    \\"owner\\": \\"my-org-name\\",\\n    \\"displayName\\": \\"my-repo-name\\",\\n    \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '创建仓库绑定',
        ],
        'DeleteRepository' => [
            'summary' => '删除一个仓库绑定实体。',
            'path' => '/2023-07-14/repositories/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '1EEC6F09-A0DA-5A0E-9C3A-DA90B4346B9A',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"1EEC6F09-A0DA-5A0E-9C3A-DA90B4346B9A\\"\\n}","type":"json"}]',
            'title' => '删除仓库绑定',
            'description' => '1. 当仓库绑定实体关联了项目（Project）时，需要先删除项目，再删除仓库绑定',
        ],
        'ListRepositories' => [
            'summary' => '批量查询满足条件的仓库绑定。',
            'path' => '/2023-07-14/repositories',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'cloneUrl=https://github.com/awesome-user/start-springboot-abcd.git',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码，默认为1。页码从1开始',
                        'description' => '当前页码，默认为1。页码从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页大小，默认为100。取值范围1~100',
                        'description' => '每页大小，默认为100。取值范围1~100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'repo-start-springboot',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '查询的分页结果',
                        'description' => '查询的分页结果',
                        'type' => 'object',
                        'properties' => [
                            'pageNumber' => [
                                'title' => '当前页码',
                                'description' => '当前页码，默认为1。页码从1开始',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '每页大小',
                                'description' => '每页大小，默认为100。取值范围1~100',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'totalCount' => [
                                'title' => '查询到的结果数量',
                                'description' => '查询到的结果数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '查询的资源实体列表',
                                'description' => '查询的资源实体列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '查询的一个满足条件的仓库绑定实体',
                                    'description' => '查询的一个满足条件的仓库绑定实体',
                                    '$ref' => '#/components/schemas/Repository',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 100,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"kind\\": \\"Repository\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-repository\\",\\n      \\"spec\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"key=value\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"description\\": \\"test-description\\",\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询仓库绑定',
        ],
        'GetRepository' => [
            'summary' => '查询一个仓库绑定实体。',
            'path' => '/2023-07-14/repositories/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '查询的仓库绑定实体',
                        '$ref' => '#/components/schemas/Repository',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Repository\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-repository\\",\\n  \\"spec\\": {\\n    \\"connectionName\\": \\"awesome-connection\\",\\n    \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n    \\"platform\\": \\"github\\",\\n    \\"id\\": 312649,\\n    \\"owner\\": \\"my-org-name\\",\\n    \\"displayName\\": \\"my-repo-name\\",\\n    \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
            'title' => '查询仓库绑定',
        ],
        'CreatePipelineTrigger' => [
            'summary' => '创建流水线触发器，描述流水线触发的条件以及触发后的执行行为。',
            'path' => '/2023-07-14/pipelinetriggers',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        'required' => false,
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '创建流水线触发器',
        ],
        'DeletePipelineTrigger' => [
            'summary' => '删除流水线触发器，删除后将不会有关联的流水线执行历史产生。',
            'path' => '/2023-07-14/pipelinetriggers/{name}',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A5152937-1C8A-5260-90FA-520CEF028D2D',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"A5152937-1C8A-5260-90FA-520CEF028D2D\\"\\n}","type":"json"}]',
            'title' => '删除流水线触发器',
        ],
        'UpdatePipelineTrigger' => [
            'summary' => '修改流水线触发器，您指定的可写字段将被更新，未指定或不可改的字段将保持不变。',
            'path' => '/2023-07-14/pipelinetriggers/{name}',
            'methods' => [
                'patch',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        'required' => false,
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '修改流水线触发器',
        ],
        'PutPipelineTrigger' => [
            'summary' => '使用新的流水线配置替换已有的流水线配置，不能修改的字段将被忽略。',
            'path' => '/2023-07-14/pipelinetriggers/{name}',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        'required' => false,
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '强制更新',
                        'description' => '强制更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '替换流水线触发器',
            'description' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
        ],
        'ListPipelineTriggers' => [
            'summary' => '批量查询流水线触发器。',
            'path' => '/2023-07-14/pipelinetriggers',
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
            'consumes' => [],
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
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'label_key1=value1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页码，默认为1。页码从1开始',
                        'description' => '当前页码，默认为1。页码从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页大小，默认为100。取值范围1~100',
                        'description' => '每页大小，默认为100。取值范围1~100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'pageNumber' => [
                                'title' => '分页页码',
                                'description' => '分页页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '每页大小',
                                'description' => '每页大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'totalCount' => [
                                'title' => '查询到的结果数量',
                                'description' => '查询到的结果数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '查询的资源实体列表',
                                'description' => '查询的资源实体列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '流水线触发器',
                                    'description' => '流水线触发器',
                                    '$ref' => '#/components/schemas/PipelineTrigger',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"generation\\": 1,\\n      \\"description\\": \\"PipelineTrigger example.\\",\\n      \\"kind\\": \\"PipelineTrigger\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-pipeline-trigger\\",\\n      \\"spec\\": {\\n        \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n        \\"eventFilter\\": {\\n          \\"push\\": {\\n            \\"branch\\": \\"master\\",\\n            \\"tag\\": \\"prod-.*\\"\\n          },\\n          \\"pullRequest\\": {\\n            \\"sourceBranch\\": \\"feature-.*\\",\\n            \\"targetBranch\\": \\"master\\",\\n            \\"types\\": [\\n              \\"MERGE_REQUEST\\"\\n            ]\\n          }\\n        },\\n        \\"runPipeline\\": {\\n          \\"yamlFilePath\\": \\"\\",\\n          \\"yamlFileContent\\": \\"\\",\\n          \\"pipelineSpec\\": {\\n            \\"templateName\\": \\"my-pipeline-template\\",\\n            \\"context\\": {\\n              \\"data\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            },\\n            \\"templateSpec\\": {\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"tasks\\": [\\n                {\\n                  \\"name\\": \\"task-1\\",\\n                  \\"context\\": {\\n                    \\"data\\": {\\n                      \\"test\\": \\"test\\",\\n                      \\"test2\\": 1\\n                    }\\n                  },\\n                  \\"taskTemplate\\": \\"serverless-runner\\",\\n                  \\"runAfters\\": [\\n                    {\\n                      \\"name\\": \\"task-1\\"\\n                    }\\n                  ]\\n                }\\n              ],\\n              \\"contextSchema\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            }\\n          },\\n          \\"variables\\": [\\n            {\\n              \\"value\\": \\"object_value\\",\\n              \\"name\\": \\"object_key\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"value to the label key.\\"\\n      },\\n      \\"resourceVersion\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询流水线触发器',
        ],
        'GetPipelineTrigger' => [
            'summary' => '查询流水线触发器。',
            'path' => '/2023-07-14/pipelinetriggers/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线触发器',
                        'description' => '流水线触发器',
                        '$ref' => '#/components/schemas/PipelineTrigger',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '查询流水线触发器',
        ],
        'CreatePipelineTriggerEvent' => [
            'summary' => '尝试提交流水线触发事件，不满足流水线触发器配置条件的触发事件将不会触发流水线运行。',
            'path' => '/2023-07-14/pipelinetriggerevents',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '流水线触发历史',
                        'description' => '流水线触发历史',
                        'required' => false,
                        '$ref' => '#/components/schemas/PipelineTriggerEvent',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线触发历史',
                        'description' => '流水线触发历史',
                        '$ref' => '#/components/schemas/PipelineTriggerEvent',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTriggerEvent example.\\",\\n  \\"kind\\": \\"PipelineTriggerEvent\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"status\\": {\\n    \\"status\\": \\"Skipped,Fired,Running,Failed,Success\\",\\n    \\"firedPipelineName\\": \\"my-pipeline\\",\\n    \\"releaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"errorMessage\\": \\"failed to create and start pipeline, error=message\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"spec\\": {\\n    \\"payload\\": {\\n      \\"github\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitlab\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"codeup\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitee\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"manual\\": {\\n        \\"commitID\\": \\"\\",\\n        \\"branch\\": \\"\\",\\n        \\"tag\\": \\"\\",\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"triggerName\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '提交流水线触发事件',
        ],
        'DeletePipelineTriggerEvent' => [
            'summary' => '删除流水线触发历史。',
            'path' => '/2023-07-14/pipelinetriggerevents/{name}',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'BD835E20-EA35-5EE9-A38E-15F9E4AC0B73',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"BD835E20-EA35-5EE9-A38E-15F9E4AC0B73\\"\\n}","type":"json"}]',
            'title' => '删除流水线触发历史',
        ],
        'ListPipelineTriggerEvents' => [
            'summary' => '批量查询流水线触发历史。',
            'path' => '/2023-07-14/pipelinetriggerevents',
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
            'consumes' => [],
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
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '只返回含有这些label的对象',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'label表达式，例如: appName=my-app',
                            'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'label_key1=value1',
                        ],
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'pageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页页码',
                        'description' => '当前页码，默认为1。页码从1开始',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'pageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页大小',
                        'description' => '每页大小，默认为100。取值范围1~100',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关键字',
                        'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo',
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
                            'pageNumber' => [
                                'title' => '分页页码',
                                'description' => '分页页码',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'pageSize' => [
                                'title' => '分页大小',
                                'description' => '每页大小',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'totalCount' => [
                                'title' => '总数',
                                'description' => '查询到的结果数量',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'data' => [
                                'title' => '返回结果列表',
                                'description' => '查询的资源实体列表',
                                'type' => 'array',
                                'items' => [
                                    'title' => '流水线触发历史',
                                    'description' => '流水线触发历史',
                                    '$ref' => '#/components/schemas/PipelineTriggerEvent',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"generation\\": 1,\\n      \\"description\\": \\"PipelineTriggerEvent example.\\",\\n      \\"kind\\": \\"PipelineTriggerEvent\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-pipeline-trigger\\",\\n      \\"status\\": {\\n        \\"status\\": \\"Skipped,Fired,Running,Failed,Success\\",\\n        \\"firedPipelineName\\": \\"my-pipeline\\",\\n        \\"releaseDetail\\": {\\n          \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n          \\"bizStatus\\": \\"Running\\",\\n          \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n          \\"templateConfigSnapshot\\": {\\n            \\"templateName\\": \\"start-springboot\\",\\n            \\"parameters\\": {\\n              \\"region\\": \\"cn-hangzhou\\"\\n            }\\n          },\\n          \\"releaseOutputs\\": {\\n            \\"framework\\": {\\n              \\"region\\": \\"cn-hangzhou\\",\\n              \\"service\\": {\\n                \\"serviceName\\": \\"web-framework\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n                \\"role\\": \\"\\",\\n                \\"logConfig\\": {\\n                  \\"project\\": \\"\\",\\n                  \\"logstore\\": \\"\\",\\n                  \\"enableRequestMetrics\\": false,\\n                  \\"enableInstanceMetrics\\": false,\\n                  \\"logBeginRule\\": \\"None\\"\\n                },\\n                \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n                \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                \\"vpcConfig\\": {\\n                  \\"vpcId\\": \\"\\",\\n                  \\"vSwitchIds\\": [],\\n                  \\"securityGroupId\\": \\"\\",\\n                  \\"role\\": \\"\\"\\n                },\\n                \\"internetAccess\\": true,\\n                \\"nasConfig\\": {\\n                  \\"userId\\": -1,\\n                  \\"groupId\\": -1,\\n                  \\"mountPoints\\": []\\n                },\\n                \\"tracingConfig\\": {},\\n                \\"name\\": \\"web-framework\\"\\n              },\\n              \\"function\\": {\\n                \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n                \\"functionName\\": \\"todolist\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n                \\"runtime\\": \\"nodejs12\\",\\n                \\"handler\\": \\"index.handler\\",\\n                \\"timeout\\": 60,\\n                \\"initializer\\": \\"\\",\\n                \\"initializationTimeout\\": 3,\\n                \\"codeSize\\": 1757093,\\n                \\"codeChecksum\\": \\"7185648203525194222\\",\\n                \\"memorySize\\": 256,\\n                \\"environmentVariables\\": {},\\n                \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n                \\"instanceConcurrency\\": 1,\\n                \\"instanceType\\": \\"e1\\",\\n                \\"instanceLifecycleConfig\\": {\\n                  \\"preFreeze\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  },\\n                  \\"preStop\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  }\\n                },\\n                \\"name\\": \\"todolist\\"\\n              },\\n              \\"triggers\\": [\\n                {\\n                  \\"triggerName\\": \\"httpTrigger\\",\\n                  \\"description\\": \\"\\",\\n                  \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n                  \\"triggerType\\": \\"http\\",\\n                  \\"triggerConfig\\": {\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ],\\n                    \\"authType\\": \\"anonymous\\"\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                  \\"name\\": \\"httpTrigger\\"\\n                }\\n              ],\\n              \\"customDomains\\": [\\n                {\\n                  \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n                  \\"accountId\\": \\"1835799444022432\\",\\n                  \\"protocol\\": \\"HTTP\\",\\n                  \\"certConfig\\": {},\\n                  \\"tlsConfig\\": {},\\n                  \\"apiVersion\\": \\"2016-08-15\\",\\n                  \\"routeConfig\\": {\\n                    \\"routes\\": [\\n                      {\\n                        \\"path\\": \\"/*\\",\\n                        \\"serviceName\\": \\"web-framework\\",\\n                        \\"functionName\\": \\"todolist\\",\\n                        \\"methods\\": [\\n                          \\"GET\\",\\n                          \\"POST\\"\\n                        ]\\n                      }\\n                    ]\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n          \\"repositorySnapshot\\": {\\n            \\"connectionName\\": \\"awesome-connection\\",\\n            \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n            \\"platform\\": \\"github\\",\\n            \\"id\\": 312649,\\n            \\"owner\\": \\"my-org-name\\",\\n            \\"displayName\\": \\"my-repo-name\\",\\n            \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n          },\\n          \\"gitEventSnapshot\\": {\\n            \\"branch\\": \\"main\\",\\n            \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n            \\"tag\\": \\"1.0\\"\\n          },\\n          \\"message\\": \\"Triggered manually.\\",\\n          \\"latestTaskExecError\\": {\\n            \\"title\\": \\"权限不足错误\\",\\n            \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n            \\"code\\": \\"AccessDenied\\",\\n            \\"requestId\\": \\"1-26d1287xxxxx\\",\\n            \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n          },\\n          \\"envName\\": \\"dev\\"\\n        },\\n        \\"errorMessage\\": \\"failed to create and start pipeline, error=message\\"\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"value to the label key.\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"spec\\": {\\n        \\"payload\\": {\\n          \\"github\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"gitlab\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"codeup\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"gitee\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"manual\\": {\\n            \\"commitID\\": \\"\\",\\n            \\"branch\\": \\"\\",\\n            \\"tag\\": \\"\\",\\n            \\"templateConfig\\": {\\n              \\"templateName\\": \\"start-springboot\\",\\n              \\"parameters\\": {\\n                \\"region\\": \\"cn-hangzhou\\"\\n              }\\n            }\\n          }\\n        },\\n        \\"triggerName\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量查询流水线触发历史',
        ],
        'GetPipelineTriggerEvent' => [
            'summary' => '查询流水线触发历史。',
            'path' => '/2023-07-14/pipelinetriggerevents/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线触发历史',
                        'description' => '流水线触发历史',
                        '$ref' => '#/components/schemas/PipelineTriggerEvent',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTriggerEvent example.\\",\\n  \\"kind\\": \\"PipelineTriggerEvent\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"status\\": {\\n    \\"status\\": \\"Skipped,Fired,Running,Failed,Success\\",\\n    \\"firedPipelineName\\": \\"my-pipeline\\",\\n    \\"releaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"errorMessage\\": \\"failed to create and start pipeline, error=message\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"spec\\": {\\n    \\"payload\\": {\\n      \\"github\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitlab\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"codeup\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitee\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"manual\\": {\\n        \\"commitID\\": \\"\\",\\n        \\"branch\\": \\"\\",\\n        \\"tag\\": \\"\\",\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"triggerName\\": \\"\\"\\n  }\\n}","type":"json"}]',
            'title' => '查询流水线触发历史',
        ],
        'CreatePipeline' => [
            'summary' => '创建流水线执行。流水线将被异步地执行，并按照配置，产生具体的流水线任务。',
            'path' => '/2023-07-14/pipelines',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '创建的流水线执行',
                        'description' => '创建的流水线执行',
                        'required' => false,
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '创建的流水线执行',
                        'description' => '创建的流水线执行',
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '创建流水线执行',
        ],
        'ListPipelines' => [
            'summary' => '批量查询流水线执行。请尽可能提供更多的查询条件以缩小查询范围。',
            'path' => '/2023-07-14/pipelines',
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
            'consumes' => [],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '只返回含有这些label的对象',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'label表达式，例如: appName=my-app',
                            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'label_key1=value1',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线执行列表',
                        'description' => '流水线执行列表',
                        'type' => 'array',
                        'items' => [
                            'title' => '流水线执行',
                            'description' => '流水线执行',
                            '$ref' => '#/components/schemas/Pipeline',
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"spec\\": {\\n      \\"templateName\\": \\"my-pipeline-template\\",\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"templateSpec\\": {\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"tasks\\": [\\n          {\\n            \\"name\\": \\"task-1\\",\\n            \\"context\\": {\\n              \\"data\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            },\\n            \\"taskTemplate\\": \\"serverless-runner\\",\\n            \\"runAfters\\": [\\n              {\\n                \\"name\\": \\"task-1\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"contextSchema\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    },\\n    \\"status\\": {\\n      \\"phase\\": \\"Success\\",\\n      \\"latestExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      }\\n    },\\n    \\"uid\\": \\"1455541096***548\\",\\n    \\"generation\\": 1,\\n    \\"description\\": \\"Pipeline example.\\",\\n    \\"kind\\": \\"Pipeline\\",\\n    \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n    \\"name\\": \\"my-pipeline\\",\\n    \\"labels\\": {\\n      \\"key\\": \\"value to the label key.\\"\\n    },\\n    \\"resourceVersion\\": 1\\n  }\\n]","type":"json"}]',
            'title' => '批量查询流水线执行',
        ],
        'GetPipeline' => [
            'summary' => '查询流水线执行。',
            'path' => '/2023-07-14/pipelines/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线执行',
                        'description' => '流水线执行',
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '查询流水线执行',
        ],
        'StartPipeline' => [
            'summary' => '启动流水线执行。',
            'path' => '/2023-07-14/pipelines/{name}/start',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线执行',
                        'description' => '流水线执行',
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '启动流水线执行',
        ],
        'CancelPipeline' => [
            'summary' => '取消流水线执行。流水线以及任务将被尽快取消执行。',
            'path' => '/2023-07-14/pipelines/{name}/cancel',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线执行',
                        'description' => '流水线执行',
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '取消流水线执行',
        ],
        'PutPipelineStatus' => [
            'summary' => '替换流水线执行状态。',
            'path' => '/2023-07-14/pipelines/{name}/status',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '流水线执行',
                        'description' => '流水线执行',
                        'required' => false,
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '强制更新',
                        'description' => '强制更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线执行',
                        'description' => '流水线执行',
                        '$ref' => '#/components/schemas/Pipeline',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '替换流水线执行状态',
            'description' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
        ],
        'CreateTask' => [
            'summary' => '创建流水线任务执行。',
            'path' => '/2023-07-14/tasks',
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
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        'required' => false,
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '创建流水线任务执行',
        ],
        'ListTasks' => [
            'summary' => '批量查询流水线任务执行。',
            'path' => '/2023-07-14/tasks',
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
            'consumes' => [],
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
                    'name' => 'labelSelector',
                    'in' => 'query',
                    'style' => 'simple',
                    'schema' => [
                        'title' => '只返回含有这些label的对象',
                        'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                        'type' => 'array',
                        'items' => [
                            'title' => 'label表达式，例如: appName=my-app',
                            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'label_key1=value1',
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务列表',
                        'description' => '流水线任务列表',
                        'type' => 'array',
                        'items' => [
                            'title' => '流水线任务',
                            'description' => '流水线任务',
                            '$ref' => '#/components/schemas/Task',
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"spec\\": {\\n      \\"templateName\\": \\"my-task-template\\",\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    },\\n    \\"status\\": {\\n      \\"statusGeneration\\": 123,\\n      \\"phase\\": \\"Success\\",\\n      \\"executionDetails\\": [\\n        \\"step1: start task.\\"\\n      ],\\n      \\"invocations\\": [\\n        {\\n          \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n          \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n          \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n          \\"status\\": \\"success\\",\\n          \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n          \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n          \\"slsProject\\": \\"my-sls-project\\",\\n          \\"slsLogStore\\": \\"my-sls-logstore\\"\\n        }\\n      ],\\n      \\"latestExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      }\\n    },\\n    \\"uid\\": \\"1455541096***548\\",\\n    \\"generation\\": 1,\\n    \\"description\\": \\"Task example.\\",\\n    \\"kind\\": \\"Task\\",\\n    \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n    \\"name\\": \\"my-task\\",\\n    \\"labels\\": {\\n      \\"key\\": \\"value to the label key.\\"\\n    },\\n    \\"resourceVersion\\": 1\\n  }\\n]","type":"json"}]',
            'title' => '批量查询流水线任务执行',
        ],
        'GetTask' => [
            'summary' => '查询流水线任务执行。',
            'path' => '/2023-07-14/tasks/{name}',
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
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '查询流水线任务执行',
        ],
        'StartTask' => [
            'summary' => '启动流水线任务执行。',
            'path' => '/2023-07-14/tasks/{name}/start',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '启动流水线任务执行',
        ],
        'RetryTask' => [
            'summary' => '重试流水线任务执行。',
            'path' => '/2023-07-14/tasks/{name}/retry',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '重试流水线任务执行',
        ],
        'ResumeTask' => [
            'summary' => '恢复流水线任务执行。',
            'path' => '/2023-07-14/tasks/{name}/resume',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '恢复流水线任务执行',
        ],
        'CancelTask' => [
            'summary' => '取消流水线任务执行。',
            'path' => '/2023-07-14/tasks/{name}/cancel',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '取消流水线任务执行',
        ],
        'PutTaskStatus' => [
            'summary' => '替换流水线任务执行状态。',
            'path' => '/2023-07-14/tasks/{name}/status',
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
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'path',
                    'schema' => [
                        'title' => '对象名称',
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-name',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        'required' => false,
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
                [
                    'name' => 'force',
                    'in' => 'query',
                    'schema' => [
                        'title' => '强制更新',
                        'description' => '强制更新',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '流水线任务',
                        'description' => '流水线任务',
                        '$ref' => '#/components/schemas/Task',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
            'title' => '替换流水线任务执行状态',
            'description' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'devs.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'Devs',
    'version' => '2023-07-14',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 190560,
      'title' => '项目',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateProject',
        1 => 'DeleteProject',
        2 => 'UpdateProject',
        3 => 'PutProject',
        4 => 'ListProjects',
        5 => 'GetProject',
      ),
    ),
    1 => 
    array (
      'id' => 190562,
      'title' => '环境',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateEnvironment',
        1 => 'DeleteEnvironment',
        2 => 'UpdateEnvironment',
        3 => 'PutEnvironment',
        4 => 'ListEnvironments',
        5 => 'GetEnvironment',
      ),
    ),
    2 => 
    array (
      'id' => 190564,
      'title' => '身份绑定',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateConnection',
        1 => 'DeleteConnection',
        2 => 'ListConnections',
        3 => 'GetConnection',
        4 => 'RefreshConnection',
      ),
    ),
    3 => 
    array (
      'id' => 190567,
      'title' => '仓库绑定',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRepository',
        1 => 'DeleteRepository',
        2 => 'ListRepositories',
        3 => 'GetRepository',
      ),
    ),
    4 => 
    array (
      'id' => 190589,
      'title' => '流水线触发器',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePipelineTrigger',
        1 => 'DeletePipelineTrigger',
        2 => 'UpdatePipelineTrigger',
        3 => 'PutPipelineTrigger',
        4 => 'ListPipelineTriggers',
        5 => 'GetPipelineTrigger',
      ),
    ),
    5 => 
    array (
      'id' => 190591,
      'title' => '流水线触发事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePipelineTriggerEvent',
        1 => 'DeletePipelineTriggerEvent',
        2 => 'ListPipelineTriggerEvents',
        3 => 'GetPipelineTriggerEvent',
      ),
    ),
    6 => 
    array (
      'id' => 190596,
      'title' => '流水线',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePipeline',
        1 => 'ListPipelines',
        2 => 'GetPipeline',
        3 => 'StartPipeline',
        4 => 'CancelPipeline',
        5 => 'PutPipelineStatus',
      ),
    ),
    7 => 
    array (
      'id' => 190601,
      'title' => '流水线任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTask',
        1 => 'ListTasks',
        2 => 'GetTask',
        3 => 'StartTask',
        4 => 'RetryTask',
        5 => 'ResumeTask',
        6 => 'CancelTask',
        7 => 'PutTaskStatus',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'Checkout' => 
      array (
        'title' => '代码拉取信息',
        'description' => '拉取代码所需信息',
        'type' => 'object',
        'properties' => 
        array (
          'remote' => 
          array (
            'title' => '拉取代码时所需的仓库信息',
            'description' => '拉取代码时所需的仓库信息',
            'type' => 'string',
            'example' => 'https:/your_token/@github.com/buptwzj/test-initRepo4.git',
          ),
          'ref' => 
          array (
            'title' => '拉取代码时所需的版本信息',
            'description' => '拉取代码时所需的版本信息',
            'type' => 'string',
            'example' => '+001691d0768ca49e9550beeb59fbc163f33b7e88:refs/remotes/origin/master',
          ),
        ),
      ),
      'CodeupEventPayload' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Code流水线触发事件消息体',
        'type' => 'object',
        'properties' => 
        array (
          'originalPayload' => 
          array (
            'title' => 'Codeup原始消息体',
            'description' => 'Codeup原始消息体',
            'type' => 'string',
            'format' => 'byte',
            'example' => '{
  "before": "03b7be6d28af70ab38ca2ce8b42c3533c622d925",
  "checkout_sha": "baf09c10ee5f28b5f36cec35e5e0e5c0abdcfa8a",
  "object_kind": "push",
  "ref": "refs/heads/test",
  "commits": [
    {
      "id": "baf09c10ee5f28b5f36cec35e5e0e5c0abdcfa8a",
      "message": "fix:recommend\\n"
    }
  ],
  "after": "baf09c10ee5f28b5f36cec35e5e0e5c0abdcfa8a"
}
-- 必须使用原始的codeup发出的webhook事件',
          ),
        ),
      ),
      'Condition' => 
      array (
        'title' => '执行条件',
        'description' => '执行条件',
        'type' => 'object',
        'properties' => 
        array (
          'expression' => 
          array (
            'title' => '返回值为bool类型的表达式',
            'description' => '返回值为bool类型的表达式',
            'type' => 'string',
            'example' => 'enable == true
-- 表示ctx.data.enable的值为true时为真',
          ),
        ),
      ),
      'Connection' => 
      array (
        'title' => '身份绑定',
        'description' => '项目',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'Connection',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-connection',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'spec' => 
          array (
            'title' => '身份绑定配置',
            'description' => '身份绑定配置',
            'required' => true,
            '$ref' => '#/components/schemas/ConnectionSpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => 'key=value',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息',
            'type' => 'string',
            'example' => 'test-description',
          ),
          'status' => 
          array (
            'title' => '当前资源的状态信息，只读',
            'description' => '当前资源的状态信息，只读',
            '$ref' => '#/components/schemas/ConnectionStatus',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'ConnectionSpec' => 
      array (
        'title' => '身份绑定配置',
        'description' => '仓库配置',
        'type' => 'object',
        'properties' => 
        array (
          'platform' => 
          array (
            'title' => '第三方代码托管平台类型，目前支持：github/gitee/gitlab/codeup',
            'description' => '第三方代码托管平台类型，目前支持：github/gitee/gitlab/codeup',
            'type' => 'string',
            'required' => true,
            'example' => 'github',
          ),
          'account' => 
          array (
            'title' => '代码托管平台账号相关的信息',
            'description' => '代码托管平台账号相关的信息',
            '$ref' => '#/components/schemas/GitAccount',
          ),
          'gitlabConfig' => 
          array (
            'title' => '连接GitLab代码托管平台所需配置',
            'description' => '连接GitLab代码托管平台所需配置',
            '$ref' => '#/components/schemas/GitLabConfig',
          ),
        ),
      ),
      'ConnectionStatus' => 
      array (
        'title' => '身份绑定状态',
        'description' => '身份绑定的状态',
        'type' => 'object',
        'properties' => 
        array (
          'installation' => 
          array (
            'title' => '身份绑定流程的当前状态',
            'description' => '身份绑定流程的当前状态',
            '$ref' => '#/components/schemas/Installation',
          ),
        ),
      ),
      'Context' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'json字符串，存储执行上下文',
        'type' => 'object',
        'properties' => 
        array (
          'data' => 
          array (
            'title' => 'data是一个JSON结构的数据，描述执行的上下文数据',
            'description' => 'data是一个JSON结构的数据，描述执行的上下文数据',
            'type' => 'object',
          ),
        ),
      ),
      'ContextSchema' => 
      array (
        'title' => 'Schema for context input.',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => 'Field type.',
            'type' => 'string',
            'example' => 'string',
          ),
          'description' => 
          array (
            'title' => 'Field description.',
            'type' => 'string',
            'example' => '[git](https://git-scm.com/) address for [git clone](https://git-scm.com/docs/git-clone).',
          ),
          'required' => 
          array (
            'title' => 'Field is required or not.',
            'type' => 'boolean',
            'example' => 'true',
          ),
          'hint' => 
          array (
            'title' => 'Field example.',
            'type' => 'string',
            'example' => 'git@gitlab.alibaba-inc.com:serverless/lambda.git',
          ),
          'name' => 
          array (
            'title' => 'Field name.',
            'type' => 'string',
            'example' => 'gitRepoUrl',
          ),
        ),
      ),
      'Environment' => 
      array (
        'title' => '环境定义',
        'description' => '环境可以与用于开发迭代的特定分支相关联，也可以与基础结构堆栈相关联，以便将服务部署到指定的环境。',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '环境名称，项目下唯一，不可修改',
            'description' => '环境名称，项目下唯一，不可修改',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-env',
          ),
          'kind' => 
          array (
            'title' => '当前资源的类型，只读',
            'description' => '当前资源的类型，只读',
            'type' => 'string',
            'example' => 'Environment',
          ),
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'createdTime' => 
          array (
            'title' => '创建此对象时服务器的时间，只读',
            'description' => '创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'description' => 
          array (
            'title' => '资源描述',
            'description' => '资源描述',
            'type' => 'string',
            'example' => 'test env',
          ),
          'spec' => 
          array (
            'title' => '环境配置',
            'description' => '环境配置',
            'required' => true,
            '$ref' => '#/components/schemas/EnvironmentSpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => 'value to the label key.',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'status' => 
          array (
            'title' => '当前环境的状态',
            'description' => '当前环境的状态',
            '$ref' => '#/components/schemas/EnvironmentStatus',
          ),
          'projectName' => 
          array (
            'title' => '环境所属的项目名称，只读',
            'description' => '环境所属的项目名称，只读',
            'type' => 'string',
            'example' => 'demo-project',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'EnvironmentSpec' => 
      array (
        'title' => '环境配置描述',
        'description' => '环境配置',
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '环境类型，只能在testing、staging、production中选择',
            'description' => '环境类型，只能在testing、staging、production中选择',
            'type' => 'string',
            'example' => 'Testing',
            'default' => 'Production',
            'enum' => 
            array (
              0 => 'Testing',
              1 => 'Staging',
              2 => 'Production',
            ),
          ),
          'alias' => 
          array (
            'title' => '环境别名',
            'description' => '环境别名',
            'type' => 'string',
            'example' => 'dev',
          ),
          'roleArn' => 
          array (
            'title' => '环境角色',
            'description' => '环境角色',
            'type' => 'string',
            'example' => 'acs:ram::*******:role/aliyundevsdefaultrole',
          ),
          'repositoryConfig' => 
          array (
            'title' => '代码仓库配置，不可以和templateConfig同时设置。',
            'description' => '代码仓库配置，不可以和templateConfig同时设置。',
            '$ref' => '#/components/schemas/RepositoryConfig',
          ),
          'templateConfig' => 
          array (
            'title' => '项目案例库模板配置，不能和repositoryConfig同时设置。',
            'description' => '项目案例库模板配置，不能和repositoryConfig同时设置。',
            '$ref' => '#/components/schemas/TemplateConfig',
          ),
          'infraStackConfig' => 
          array (
            'title' => '基础设施堆栈配置',
            'description' => '基础设施堆栈配置',
            '$ref' => '#/components/schemas/InfraStackSpec',
          ),
          'serviceOverlay' => 
          array (
            'title' => '服务在环境中的差异化配置，部署时会对指定资源描述文件的配置进行覆盖',
            'description' => '服务在环境中的差异化配置，部署时会对指定资源描述文件的配置进行覆盖',
            'type' => 'object',
            'properties' => 
            array (
              'resources' => 
              array (
                'title' => '资源级覆盖配置',
                'description' => '资源级覆盖配置',
                'type' => 'object',
                'example' => '{"dummyFunction":{"timeout":600}}',
              ),
              'components' => 
              array (
                'title' => '组件级覆盖配置',
                'description' => '组件级覆盖配置',
                'type' => 'object',
                'example' => '{"fc3":{"timeout":600}}',
              ),
            ),
          ),
          'isAutoDeploy' => 
          array (
            'title' => '是否需要自动部署，默认为false。自动部署指的是在当前环境下使用默认的流水线模板创建并执行一次流水线',
            'description' => '是否需要自动部署，默认为false。自动部署指的是在当前环境下使用默认的流水线模板创建并执行一次流水线',
            'type' => 'boolean',
            'default' => 'false',
          ),
        ),
      ),
      'EnvironmentStatus' => 
      array (
        'title' => '环境状态',
        'description' => '环境状态',
        'type' => 'object',
        'properties' => 
        array (
          'infraStackStatus' => 
          array (
            'title' => '基础设施堆栈状态',
            'description' => '基础设施堆栈状态',
            '$ref' => '#/components/schemas/InfraStackStatus',
          ),
          'latestReleaseDetail' => 
          array (
            'title' => '最近一次部署详情',
            'description' => '最近一次部署详情',
            '$ref' => '#/components/schemas/ReleaseDetail',
          ),
          'observedGeneration' => 
          array (
            'title' => '系统最新观测到的资源generation',
            'description' => '系统最新观测到的资源generation',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'observedTime' => 
          array (
            'title' => '资源最近的一次状态更新时间',
            'description' => '资源最近的一次状态更新时间',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
        ),
      ),
      'EventFilterConfig' => 
      array (
        'title' => '事件过滤配置',
        'description' => '事件过滤配置',
        'type' => 'object',
        'properties' => 
        array (
          'push' => 
          array (
            'title' => '推送事件',
            'description' => '推送事件',
            '$ref' => '#/components/schemas/PushFilter',
          ),
          'pullRequest' => 
          array (
            'title' => 'PR或MR事件',
            'description' => 'PR或MR事件',
            '$ref' => '#/components/schemas/PullRequestFilter',
          ),
        ),
      ),
      'EventPayload' => 
      array (
        'title' => 'A short description of struct',
        'description' => '流水线触发事件消息体',
        'type' => 'object',
        'properties' => 
        array (
          'github' => 
          array (
            'description' => 'Github流水线触发事件消息体',
            '$ref' => '#/components/schemas/GithubEventPayload',
          ),
          'gitlab' => 
          array (
            'description' => 'Gitlab流水线触发事件消息体',
            '$ref' => '#/components/schemas/GitlabEventPayload',
          ),
          'codeup' => 
          array (
            'description' => 'Codeup流水线触发事件消息体',
            '$ref' => '#/components/schemas/CodeupEventPayload',
          ),
          'gitee' => 
          array (
            'description' => 'Gitee流水线触发事件消息体',
            '$ref' => '#/components/schemas/GiteeEventPayload',
          ),
          'manual' => 
          array (
            'description' => '手动触发流水线事件消息体',
            '$ref' => '#/components/schemas/ManualEventPayload',
          ),
        ),
      ),
      'GitAccount' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'OAuth凭证',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '代码托管平台的登录账号名，在每种代码托管平台下唯一',
            'description' => '代码托管平台的登录账号名，在每种代码托管平台下唯一',
            'type' => 'string',
            'required' => false,
            'example' => 'your_username',
          ),
          'displayName' => 
          array (
            'title' => '代码托管平台中的昵称，可以为空且不唯一',
            'description' => '代码托管平台中的昵称，可以为空且不唯一',
            'type' => 'string',
            'example' => 'your_displayname',
          ),
          'id' => 
          array (
            'title' => '代码托管平台账号的ID，在每种代码托管平台下唯一',
            'description' => '代码托管平台账号的ID，在每种代码托管平台下唯一',
            'type' => 'string',
            'example' => '1',
          ),
          'avatar' => 
          array (
            'title' => '代码托管平台账号的头像链接',
            'description' => '代码托管平台账号的头像链接',
            'type' => 'string',
            'required' => false,
            'example' => 'https://gitee.com/assets/no_portrait.png',
          ),
          'uri' => 
          array (
            'title' => '代码托管平台的地址，仅在自建GitLab时使用',
            'description' => '代码托管平台的地址，仅在自建GitLab时使用',
            'type' => 'string',
            'required' => false,
            'example' => 'https://gitlab.com',
          ),
        ),
      ),
      'GitEventSnapshot' => 
      array (
        'title' => 'Git提交事件快照',
        'description' => 'Git事件快照',
        'type' => 'object',
        'properties' => 
        array (
          'branch' => 
          array (
            'title' => '本次发布关联的分支，如果是PR或MR事件，为源分支',
            'description' => '本次发布关联的分支，如果是PR或MR事件，为源分支',
            'type' => 'string',
            'example' => 'main',
          ),
          'commitID' => 
          array (
            'title' => '本次发布关联的commitID',
            'description' => '本次发布关联的commitID',
            'type' => 'string',
            'example' => '12721ec262d03a93809ba2bbc717963cb298ceca',
          ),
          'tag' => 
          array (
            'title' => '本次发布关联的tag',
            'description' => '本次发布关联的tag',
            'type' => 'string',
            'example' => '1.0',
          ),
        ),
      ),
      'GitLabConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => '描述连接GitLab代码托管平台所需的信息',
        'type' => 'object',
        'properties' => 
        array (
          'uri' => 
          array (
            'title' => 'GitLab的域名，默认为https://gitlab.com；当您使用自建GitLab时需要指定',
            'description' => 'GitLab的域名，默认为https://gitlab.com；当您使用自建GitLab时需要指定',
            'type' => 'string',
            'example' => 'http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/',
          ),
          'token' => 
          array (
            'title' => 'GitLab私有Token，参考以下文档在GitLab控制台获取：https://docs.gitlab.com/ee/user/profile/personal_access_tokens.html?spm=5176.fcnext.0.0.1aa378c8E3yBHw#create-a-personal-access-token',
            'description' => 'GitLab私有Token，参考以下文档在GitLab控制台获取：https://docs.gitlab.com/ee/user/profile/personal_access_tokens.html?spm=5176.fcnext.0.0.1aa378c8E3yBHw#create-a-personal-access-token',
            'type' => 'string',
            'example' => 'your-token',
          ),
        ),
      ),
      'GiteeEventPayload' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Gitee流水线触发事件消息体',
        'type' => 'object',
        'properties' => 
        array (
          'originalPayload' => 
          array (
            'title' => 'gitee原始消息体',
            'description' => 'gitee原始消息体',
            'type' => 'string',
            'format' => 'byte',
            'example' => '{}{
  "after": "75008ebafa504ffc6d3fe2236b780b1a04663fbb",
  "before": "f4abefc293a6df4d3be23945c4474f9d54f67645",
  "commits": [
    {
      "id": "75008ebafa504ffc6d3fe2236b780b1a04663fbb",
      "message": "update\\\\n"
    }
  ],
  "ref": "refs/heads/master"
}
-- 必须使用原始的gitee发出的webhook事件',
          ),
        ),
      ),
      'GithubEventPayload' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Github流水线触发事件消息体',
        'type' => 'object',
        'properties' => 
        array (
          'originalPayload' => 
          array (
            'title' => 'github事件原始消息体',
            'description' => 'github事件原始消息体',
            'type' => 'string',
            'format' => 'byte',
            'example' => '{
  "ref": "refs/heads/master",
  "before": "1d4344d7eeda61c26c8a6d945d83b205b422f3e3",
  "after": "9f3221a7e63f979281e3926bf619b193646ff561",
  "commits": [
    {
      "id": "9f3221a7e63f979281e3926bf619b193646ff561",
      "message": "update"
    }
  ],
  "head_commit": {
    "id": "9f3221a7e63f979281e3926bf619b193646ff561",
    "message": "update"
  }
}
-- 必须使用原始的github发出的webhook事件',
          ),
        ),
      ),
      'GitlabEventPayload' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'Gitlab流水线触发事件消息体',
        'type' => 'object',
        'properties' => 
        array (
          'originalPayload' => 
          array (
            'title' => 'gitlab事件原始消息体',
            'description' => 'gitlab事件原始消息体',
            'type' => 'string',
            'format' => 'byte',
            'example' => '{
  "object_kind": "push",
  "event_name": "push",
  "before": "a08b7d82ceaabc27394f526f35c22ff581a18a39",
  "after": "787ef6aa092e4b9ed30fe29c7fc5c9cf4ac194d8",
  "ref": "refs/heads/main",
  "checkout_sha": "787ef6aa092e4b9ed30fe29c7fc5c9cf4ac194d8",
  "commits": [
    {
      "id": "787ef6aa092e4b9ed30fe29c7fc5c9cf4ac194d8",
      "message": "my message",
      "title": "my message"
    }
  ]
}
-- 必须使用原始的gitlab发出的webhook事件',
          ),
        ),
      ),
      'InfraStackResourceState' => 
      array (
        'title' => '基础设施堆栈资源状态',
        'description' => '基础设施堆栈资源状态',
        'type' => 'object',
        'properties' => 
        array (
          'resources' => 
          array (
            'title' => '资源列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/ResourceDetail',
            ),
          ),
          'resourceDrifts' => 
          array (
            'title' => '资源漂移列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/ResourceDrift',
            ),
          ),
        ),
      ),
      'InfraStackSpec' => 
      array (
        'title' => '基础设施堆栈配置',
        'description' => '基础设施堆栈配置',
        'type' => 'object',
        'properties' => 
        array (
          'regionID' => 
          array (
            'title' => '基础设施堆栈所部署的地域，不可修改',
            'type' => 'string',
            'required' => true,
            'example' => 'cn-hangzhou',
          ),
          'roleArn' => 
          array (
            'title' => '基础设施堆栈操作资源时使用的服务角色。',
            'type' => 'string',
            'example' => 'acs:ram::1234567890:role/devs-role',
          ),
          'templateSpec' => 
          array (
            'title' => '基础设施堆栈资源模板。不能和templateName同时设置',
            'type' => 'object',
            'properties' => 
            array (
              'engine' => 
              array (
                'title' => '资源执行引擎，目前只支持terraform',
                'type' => 'string',
                'example' => 'terrafrom',
              ),
              'content' => 
              array (
                'title' => '资源模板内容，rawString。',
                'type' => 'string',
                'example' => '"\\nresource \\"alicloud_fc_service\\" \\"default\\" {\\n  name        = \\"xiliu-tf-test-srv4\\"\\n  description = \\"xiliu tf  test service \\"\\n}\\n\\n\\nresource \\"alicloud_oss_bucket\\" \\"default\\" {\\n  bucket = \\"xiliu-test-tf-bucket4\\"\\n  acl    = \\"private\\"\\n}\\n\\noutput \\"service_name\\" {\\n  value = alicloud_fc_service.default.name\\n}\\n\\noutput \\"oss_bucket\\" {\\n  value = alicloud_oss_bucket.default.bucket\\n}",',
              ),
            ),
          ),
          'templateVariables' => 
          array (
            'title' => '基础设施堆栈模板变量的具体值',
            'type' => 'object',
            'example' => '{"testKey":"testValue"}',
          ),
          'templateName' => 
          array (
            'title' => '基础设施堆栈模板名字。不能和templateSpec同时设置',
            'type' => 'string',
            'example' => 'serverless.devs.com/fc-builtin',
          ),
        ),
        'required' => false,
      ),
      'InfraStackStatus' => 
      array (
        'title' => '基础设施堆栈状态',
        'description' => '基础设施堆栈状态',
        'type' => 'object',
        'properties' => 
        array (
          'phase' => 
          array (
            'title' => '基础设施堆栈部署状态',
            'type' => 'string',
            'example' => 'DeploySuccess',
          ),
          'message' => 
          array (
            'title' => '基础设施堆栈信息详情',
            'type' => 'string',
            'example' => 'Success!',
          ),
          'observedGeneration' => 
          array (
            'title' => '最新生效的generation',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '0',
          ),
          'observedTime' => 
          array (
            'title' => '最新generation生效时间',
            'type' => 'string',
            'example' => '2021-10-08T23:14:16Z',
          ),
          'templateOutputs' => 
          array (
            'title' => '资源堆栈模板输出信息',
            'type' => 'object',
            'example' => '{"vpcId":"vpc-xxx"}',
          ),
          'templateStatus' => 
          array (
            'title' => '基础设施堆栈模板状态',
            'type' => 'object',
            'properties' => 
            array (
              'variables' => 
              array (
                'title' => '从模板内容解析出模板的输入变量的定义。',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/TerraformInputVariable',
                ),
                'required' => true,
              ),
              'outputs' => 
              array (
                'title' => '从模板内容解析出的模板输出值的定义。',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/TerraformOutputValue',
                ),
                'required' => true,
              ),
            ),
          ),
          'resourceState' => 
          array (
            'title' => '资源状态',
            '$ref' => '#/components/schemas/InfraStackResourceState',
          ),
        ),
      ),
      'Installation' => 
      array (
        'title' => '账号绑定流程',
        'description' => '指导用户完成OAuth授权流程',
        'type' => 'object',
        'properties' => 
        array (
          'stage' => 
          array (
            'title' => '账号绑定流程的当前阶段，包括：pending、finished、invalid',
            'description' => '账号绑定流程的当前阶段，包括：pending、finished、invalid',
            'type' => 'string',
            'example' => 'finished',
          ),
          'message' => 
          array (
            'title' => '账号绑定流程的指导信息，提示您如何完成账号绑定',
            'description' => '账号绑定流程的指导信息，提示您如何完成账号绑定',
            'type' => 'string',
            'example' => 'Please click \'actionUri\' to complete the OAuth authorization process',
          ),
          'actionUri' => 
          array (
            'title' => '完成账号绑定流程的当前步骤所需的链接',
            'description' => '完成账号绑定流程的当前步骤所需的链接',
            'type' => 'string',
            'example' => 'https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo',
          ),
        ),
      ),
      'ManualEventPayload' => 
      array (
        'title' => 'A short description of struct',
        'description' => '手动触发流水线事件消息体',
        'type' => 'object',
        'properties' => 
        array (
          'commitID' => 
          array (
            'title' => '本次触发的commitID',
            'description' => '本次触发的commitID',
            'type' => 'string',
            'example' => '090e797efdabd2347b93b1cf331a9a3009df05c8',
          ),
          'branch' => 
          array (
            'title' => '本次触发的分支名称',
            'description' => '本次触发的分支名称',
            'type' => 'string',
            'example' => 'master',
          ),
          'tag' => 
          array (
            'title' => '本次触发的tag名称',
            'description' => '本次触发的tag名称',
            'type' => 'string',
            'example' => 'prod-v1',
          ),
          'templateConfig' => 
          array (
            'title' => '本次触发的模板信息，比Git触发优先级更高',
            'description' => '本次触发的模板信息，比Git触发优先级更高',
            '$ref' => '#/components/schemas/TemplateConfig',
          ),
        ),
      ),
      'OAuthCredential' => 
      array (
        'title' => '身份绑定凭证',
        'description' => 'OAuth凭证',
        'type' => 'object',
        'properties' => 
        array (
          'token' => 
          array (
            'title' => '代码托管平台访问凭证，开发平台使用该凭证访问第三方代码托管平台',
            'description' => '代码托管平台访问凭证，开发平台使用该凭证访问第三方代码托管平台',
            'type' => 'string',
            'required' => true,
            'example' => '4e84246b6b3962cd3d207aad1ea2f911',
          ),
          'type' => 
          array (
            'title' => '凭证的类型',
            'description' => '凭证的类型',
            'type' => 'string',
            'example' => 'bearer',
          ),
          'scope' => 
          array (
            'title' => '凭证包含的权限范围',
            'description' => '凭证包含的权限范围',
            'type' => 'string',
            'example' => 'user_info projects pull_requests hook gists emails',
          ),
          'expiration' => 
          array (
            'title' => '凭证到期时间，时间戳形式，-1表示永久有效',
            'description' => '凭证到期时间，时间戳形式，-1表示永久有效',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1716263324603',
          ),
          'createdTime' => 
          array (
            'title' => '凭证生成时间，时间戳形式',
            'description' => '凭证生成时间，时间戳形式',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '1716176924603',
          ),
          'refreshToken' => 
          array (
            'title' => '刷新凭证时所需的信息',
            'description' => '刷新凭证时所需的信息',
            'type' => 'string',
            'example' => '4d77bfae284770d94ebeed6b0199ebfd65e3943ba4f1e44dc36d792a93ba0d13',
          ),
        ),
      ),
      'Pipeline' => 
      array (
        'title' => 'A short description of struct',
        'description' => '流水线运行',
        'type' => 'object',
        'properties' => 
        array (
          'spec' => 
          array (
            'description' => '流水线配置',
            '$ref' => '#/components/schemas/PipelineSpec',
          ),
          'status' => 
          array (
            'description' => '流水线运行状态',
            '$ref' => '#/components/schemas/PipelineStatus',
          ),
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '流水线描述信息',
            'description' => '流水线描述信息',
            'type' => 'string',
            'example' => 'Pipeline example.',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'Pipeline',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-pipeline',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'value to the label key.',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'PipelineSpec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '流水线配置',
        'type' => 'object',
        'properties' => 
        array (
          'templateName' => 
          array (
            'title' => '流水线模板名称',
            'description' => '流水线模板名称',
            'type' => 'string',
            'example' => 'my-pipeline-template',
          ),
          'context' => 
          array (
            'title' => '流水线的执行上下文',
            'description' => '流水线的执行上下文',
            '$ref' => '#/components/schemas/Context',
          ),
          'templateSpec' => 
          array (
            'title' => '流水线执行流程的描述，优先级高于templateName，流水线执行不再需要预先创建PipelineTemplate',
            'description' => '流水线执行流程的描述，优先级高于templateName，流水线执行不再需要预先创建PipelineTemplate',
            '$ref' => '#/components/schemas/PipelineTemplateSpec',
          ),
        ),
      ),
      'PipelineStatus' => 
      array (
        'title' => 'A short description of struct',
        'description' => '流水线运行状态',
        'type' => 'object',
        'properties' => 
        array (
          'phase' => 
          array (
            'title' => '当前流水线执行的阶段',
            'description' => '当前流水线执行的阶段',
            'type' => 'string',
            'example' => 'Success',
          ),
          'latestExecError' => 
          array (
            'title' => '流水线出现的最近一次任务异常',
            'description' => '流水线出现的最近一次任务异常',
            '$ref' => '#/components/schemas/TaskExecError',
          ),
        ),
      ),
      'PipelineTemplate' => 
      array (
        'title' => 'A short description of struct',
        'description' => '流水线模板',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '流水线模板描述信息',
            'description' => '流水线模板描述信息',
            'type' => 'string',
            'example' => 'PipelineTemplate example.',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'PipelineTemplate',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-pipeline-template',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'deletionTime' => 
          array (
            'title' => '资源删除时间，只读',
            'description' => '资源删除时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'spec' => 
          array (
            'description' => '流水线模板配置',
            '$ref' => '#/components/schemas/PipelineTemplateSpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'value to the label key.',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'PipelineTemplateSpec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务模板配置',
        'type' => 'object',
        'properties' => 
        array (
          'context' => 
          array (
            'title' => '流水线的执行上下文',
            'description' => '流水线的执行上下文',
            '$ref' => '#/components/schemas/Context',
          ),
          'tasks' => 
          array (
            'title' => '任务执行列表',
            'description' => '任务执行列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务执行配置',
              '$ref' => '#/components/schemas/TaskExec',
            ),
          ),
        ),
      ),
      'PipelineTrigger' => 
      array (
        'title' => '流水线触发器',
        'description' => '描述git事件触发流水线的规则',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '流水线触发器描述信息',
            'description' => '流水线触发器描述信息',
            'type' => 'string',
            'example' => 'PipelineTrigger example.',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'PipelineTrigger',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-pipeline-trigger',
            'maxLength' => 63,
            'minLength' => 1,
            'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
          ),
          'spec' => 
          array (
            'description' => '流水线触发器配置',
            '$ref' => '#/components/schemas/PipelineTriggerSpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'value to the label key.',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'PipelineTriggerEvent' => 
      array (
        'title' => '流水线触发器触发事件',
        'description' => '记录触发器触发事件',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '流水线触发器触发事件的描述信息',
            'description' => '流水线触发器触发事件的描述信息',
            'type' => 'string',
            'example' => 'PipelineTriggerEvent example.',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'PipelineTriggerEvent',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。在项目中，它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-pipeline-trigger',
            'maxLength' => 63,
            'minLength' => 1,
            'pattern' => '^(?![0-9]+$)(?!-)[a-zA-Z0-9-_]{0,63}(?<!-)$',
          ),
          'status' => 
          array (
            'title' => '触发器触发记录的状态',
            'description' => '触发器触发记录的状态',
            '$ref' => '#/components/schemas/PipelineTriggerEventStatus',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'value to the label key.',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'spec' => 
          array (
            'description' => '流水线触发配置',
            '$ref' => '#/components/schemas/PipelineTriggerEventSpec',
          ),
        ),
      ),
      'PipelineTriggerEventSpec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '流水线触发事件详情',
        'type' => 'object',
        'properties' => 
        array (
          'payload' => 
          array (
            'description' => '流水线触发事件消息体',
            '$ref' => '#/components/schemas/EventPayload',
          ),
          'triggerName' => 
          array (
            'title' => '触发器名称',
            'description' => '触发器名称',
            'type' => 'string',
            'example' => 'my-pipeline-trigger',
          ),
        ),
      ),
      'PipelineTriggerEventStatus' => 
      array (
        'title' => '流水线触发器触发历史记录状态',
        'description' => '流水线触发器触发历史记录状态',
        'type' => 'object',
        'properties' => 
        array (
          'status' => 
          array (
            'title' => '触发器触发记录的状态',
            'description' => '触发器触发记录的状态',
            'type' => 'string',
            'example' => 'Skipped,Fired,Running,Failed,Success',
          ),
          'firedPipelineName' => 
          array (
            'title' => '触发器触发记录的流水线名称',
            'description' => '触发器触发记录的流水线名称',
            'type' => 'string',
            'example' => 'my-pipeline',
          ),
          'releaseDetail' => 
          array (
            'title' => '发布详情',
            'description' => '发布详情',
            '$ref' => '#/components/schemas/ReleaseDetail',
          ),
          'errorMessage' => 
          array (
            'title' => '触发器触发的异常信息',
            'description' => '触发器触发的异常信息',
            'type' => 'string',
            'example' => 'failed to create and start pipeline, error=message',
          ),
        ),
      ),
      'PipelineTriggerSpec' => 
      array (
        'title' => '流水线触发器配置',
        'description' => '描述触发器的触发规则与运行的流水线',
        'type' => 'object',
        'properties' => 
        array (
          'roleArn' => 
          array (
            'title' => '触发器的roleArn，流水线触发与执行会采用配置的roleArn进行角色扮演',
            'description' => '触发器的roleArn，流水线触发与执行会采用配置的roleArn进行角色扮演',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram::1431999****8149:role/aliyundevsdefaultrole',
          ),
          'eventFilter' => 
          array (
            'title' => '事件过滤配置，只有满足条件的事件才可以触发流水线',
            'description' => '事件过滤配置，只有满足条件的事件才可以触发流水线',
            'required' => true,
            '$ref' => '#/components/schemas/EventFilterConfig',
          ),
          'runPipeline' => 
          array (
            'title' => '触发流水线执行配置',
            'description' => '触发流水线执行配置',
            '$ref' => '#/components/schemas/RunPipelineConfig',
          ),
        ),
      ),
      'Project' => 
      array (
        'title' => '项目',
        'description' => '项目',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'Project',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-project',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'spec' => 
          array (
            'title' => '项目配置',
            'description' => '项目配置',
            'required' => false,
            '$ref' => '#/components/schemas/ProjectSpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => 'key=value',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息',
            'type' => 'string',
            'example' => 'test-description',
          ),
          'status' => 
          array (
            'title' => '当前资源的状态信息，只读',
            'description' => '当前资源的状态信息，只读',
            '$ref' => '#/components/schemas/ProjectStatus',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'ProjectSpec' => 
      array (
        'title' => '项目配置',
        'description' => '一键部署配置',
        'type' => 'object',
        'properties' => 
        array (
          'templateConfig' => 
          array (
            'title' => '项目的模板配置。非空时会自动创建默认环境，并完成自动部署',
            'description' => '项目的模板配置。非空时会自动创建默认环境，并完成自动部署',
            '$ref' => '#/components/schemas/TemplateConfig',
          ),
          'roleArn' => 
          array (
            'title' => '开发平台部署您的项目时所需扮演的角色的Arn，默认为acs:ram::${your_main_account_ID}:role/aliyundevsdefaultrole',
            'description' => '开发平台部署您的项目时所需扮演的角色的Arn，默认为acs:ram::${your_main_account_ID}:role/aliyundevsdefaultrole',
            'type' => 'string',
            'example' => 'acs:ram::1431999****8149:role/aliyundevsdefaultrole',
          ),
          'token' => 
          array (
            'title' => '项目身份令牌，用于触发部署时的身份校验，只读',
            'description' => '项目身份令牌，用于触发部署时的身份校验，只读',
            'type' => 'string',
            'example' => '9D72DE01-C732-49C0-8E85-FFD9D695436B',
          ),
        ),
      ),
      'ProjectStatus' => 
      array (
        'title' => '项目状态',
        'description' => '一键部署配置',
        'type' => 'object',
        'properties' => 
        array (
          'latestReleaseDetail' => 
          array (
            'title' => '项目最近一次部署详情',
            'description' => '项目最近一次部署详情',
            '$ref' => '#/components/schemas/ReleaseDetail',
          ),
          'observedGeneration' => 
          array (
            'title' => '项目最近一次状态变化时，项目的generation值',
            'description' => '项目最近一次状态变化时，项目的generation值',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1',
          ),
          'observedTime' => 
          array (
            'title' => '项目最近一次状态变化的服务器时间',
            'description' => '项目最近一次状态变化的服务器时间',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
        ),
      ),
      'PullRequestFilter' => 
      array (
        'title' => 'PR或MR事件过滤配置',
        'description' => 'PR或MR事件过滤配置',
        'type' => 'object',
        'properties' => 
        array (
          'sourceBranch' => 
          array (
            'title' => 'PR或MR的来源分支名称正则表达式，不填则表示所有分支',
            'description' => 'PR或MR的来源分支名称正则表达式，不填则表示所有分支',
            'type' => 'string',
            'required' => false,
            'example' => 'feature-.*',
          ),
          'targetBranch' => 
          array (
            'title' => 'PR或MR的目标分支名称正则表达式，不填则表示所有分支',
            'description' => 'PR或MR的目标分支名称正则表达式，不填则表示所有分支',
            'type' => 'string',
            'required' => false,
            'example' => 'master',
          ),
          'types' => 
          array (
            'title' => 'PR或MR的类型，为空则表示所有类型。TODO：场景类型',
            'description' => 'PR或MR的类型，为空则表示所有类型。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '可枚举的类型。包括：(opened、closed、merged、reopened、updated）',
              'type' => 'string',
              'example' => 'opened',
            ),
          ),
        ),
      ),
      'PushFilter' => 
      array (
        'title' => '推送事件过滤配置',
        'description' => '推送事件过滤配置',
        'type' => 'object',
        'properties' => 
        array (
          'branch' => 
          array (
            'title' => '推送的分支名称正则表达式',
            'description' => '推送的分支名称正则表达式',
            'type' => 'string',
            'required' => false,
            'example' => 'master',
          ),
          'tag' => 
          array (
            'title' => '推送的tag名称正则表达式',
            'description' => '推送的tag名称正则表达式',
            'type' => 'string',
            'required' => false,
            'example' => 'prod-.*',
          ),
        ),
      ),
      'ReleaseDetail' => 
      array (
        'title' => '流水线发布结果详情',
        'description' => '流水线发布结果的详情',
        'type' => 'object',
        'properties' => 
        array (
          'pipelineTriggerEventName' => 
          array (
            'title' => '本次发布对应的流水线触发事件名称',
            'description' => '本次发布对应的流水线触发事件名称',
            'type' => 'string',
            'example' => 'p-codeup-1714271977972-pa4w',
          ),
          'bizStatus' => 
          array (
            'title' => '本次发布的状态，受流水线与流水线任务执行状态影响。包括的状态以及含义如下：  Running: 部署中 HangUp: 挂起等待审批中 Finished: 部署完成 Failed: 部署失败 Canceled: 已取消',
            'description' => '本次发布的状态，受流水线与流水线任务执行状态影响。包括的状态以及含义如下：  Running: 部署中 HangUp: 挂起等待审批中 Finished: 部署完成 Failed: 部署失败 Canceled: 已取消',
            'type' => 'string',
            'example' => 'Running',
          ),
          'pipelineName' => 
          array (
            'title' => '本次发布对应的流水线名称',
            'description' => '本次发布对应的流水线名称',
            'type' => 'string',
            'example' => 'p-1704952599751-wUOczb',
          ),
          'templateConfigSnapshot' => 
          array (
            'title' => '本次发布所使用的模板配置快照。只有关联模板的项目存在该字段',
            'description' => '本次发布所使用的模板配置快照。只有关联模板的项目存在该字段',
            '$ref' => '#/components/schemas/TemplateConfig',
          ),
          'releaseOutputs' => 
          array (
            'title' => '本次发布的输出结果。包含本次发布的资源信息等',
            'description' => '本次发布的输出结果。包含本次发布的资源信息等',
            'type' => 'object',
            'example' => '{"framework":{"region":"cn-hangzhou","service":{"serviceName":"web-framework","description":"Serverless Devs Web Framework Service","role":"","logConfig":{"project":"","logstore":"","enableRequestMetrics":false,"enableInstanceMetrics":false,"logBeginRule":"None"},"serviceId":"4c9d0e79-16b8-4951-a6b8-169d2037d217","createdTime":"2021-12-07T09:24:08Z","lastModifiedTime":"2022-04-09T09:16:51Z","vpcConfig":{"vpcId":"","vSwitchIds":[],"securityGroupId":"","role":""},"internetAccess":true,"nasConfig":{"userId":-1,"groupId":-1,"mountPoints":[]},"tracingConfig":{},"name":"web-framework"},"function":{"functionId":"e81904f0-24d0-45df-bb53-06da64d01395","functionName":"todolist","description":"Serverless Devs Web Framework Function","runtime":"nodejs12","handler":"index.handler","timeout":60,"initializer":"","initializationTimeout":3,"codeSize":1757093,"codeChecksum":"7185648203525194222","memorySize":256,"environmentVariables":{},"createdTime":"2022-03-15T15:36:22Z","lastModifiedTime":"2022-04-09T09:16:50Z","instanceConcurrency":1,"instanceType":"e1","instanceLifecycleConfig":{"preFreeze":{"handler":"","timeout":3},"preStop":{"handler":"","timeout":3}},"name":"todolist"},"triggers":[{"triggerName":"httpTrigger","description":"","triggerId":"7f2373ce-df1a-4013-b4e5-899989d9b27e","triggerType":"http","triggerConfig":{"methods":["GET","POST"],"authType":"anonymous"},"createdTime":"2022-03-15T15:36:23Z","lastModifiedTime":"2022-04-09T09:16:51Z","name":"httpTrigger"}],"customDomains":[{"domainName":"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net","accountId":"1835799444022432","protocol":"HTTP","certConfig":{},"tlsConfig":{},"apiVersion":"2016-08-15","routeConfig":{"routes":[{"path":"/*","serviceName":"web-framework","functionName":"todolist","methods":["GET","POST"]}]},"createdTime":"2022-03-15T15:36:28Z","lastModifiedTime":"2022-04-09T09:17:00Z"}]}}',
          ),
          'finishedTime' => 
          array (
            'title' => '本次发布的完成时间',
            'description' => '本次发布的完成时间',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'repositorySnapshot' => 
          array (
            'title' => '本次发布所使用的仓库配置快照。只有关联仓库的项目存在该字段',
            'description' => '本次发布所使用的仓库配置快照。只有关联仓库的项目存在该字段',
            '$ref' => '#/components/schemas/RepositorySpec',
          ),
          'gitEventSnapshot' => 
          array (
            'title' => '本次发布的Git事件快照。只有关联仓库的项目存在该字段',
            'description' => '本次发布的Git事件快照。只有关联仓库的项目存在该字段',
            '$ref' => '#/components/schemas/GitEventSnapshot',
          ),
          'message' => 
          array (
            'title' => '本次发布的信息',
            'description' => '本次发布的信息',
            'type' => 'string',
            'example' => 'Triggered manually.',
          ),
          'latestTaskExecError' => 
          array (
            'title' => '本次发布过程中，最近一次流水线任务执行失败的详情信息',
            'description' => '本次发布过程中，最近一次流水线任务执行失败的详情信息',
            '$ref' => '#/components/schemas/TaskExecError',
          ),
          'envName' => 
          array (
            'title' => '本次发布对应的环境名',
            'description' => '本次发布对应的环境名',
            'type' => 'string',
            'example' => 'dev',
          ),
        ),
      ),
      'Repository' => 
      array (
        'title' => '仓库绑定',
        'description' => '仓库绑定',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'Repository',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-repository',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'spec' => 
          array (
            'title' => '仓库绑定配置',
            'description' => '仓库绑定配置',
            'required' => true,
            '$ref' => '#/components/schemas/RepositorySpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => 'key=value',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '描述信息',
            'description' => '描述信息',
            'type' => 'string',
            'example' => 'test-description',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'RepositoryConfig' => 
      array (
        'title' => 'A short description of struct',
        'description' => '代码仓库配置',
        'type' => 'object',
        'properties' => 
        array (
          'repositoryName' => 
          array (
            'title' => '关联的开发平台侧代码仓库实体的名称',
            'description' => '关联的开发平台侧代码仓库实体的名称',
            'type' => 'string',
            'required' => true,
            'example' => 'my-repository',
          ),
          'branchName' => 
          array (
            'title' => '仓库分支名',
            'description' => '仓库分支名',
            'type' => 'string',
            'required' => true,
            'example' => 'master',
          ),
          'manifest' => 
          array (
            'title' => '指定资源描述文件(s.yaml)的文件名，该路径为代码仓库下的相对路径',
            'description' => '指定资源描述文件(s.yaml)的文件名，该路径为代码仓库下的相对路径',
            'type' => 'string',
            'example' => 'src/s.yaml',
          ),
        ),
      ),
      'RepositorySpec' => 
      array (
        'title' => '仓库绑定配置',
        'description' => '仓库配置',
        'type' => 'object',
        'properties' => 
        array (
          'connectionName' => 
          array (
            'title' => '仓库所使用的身份绑定信息。通过关联的Connection可以获取到代码托管平台账号和凭证等信息',
            'description' => '仓库所使用的身份绑定信息。通过关联的Connection可以获取到代码托管平台账号和凭证等信息',
            'type' => 'string',
            'required' => true,
            'example' => 'awesome-connection',
          ),
          'cloneUrl' => 
          array (
            'title' => '拉取仓库代码(git clone)所需的链接，支持HTTPS和SSH形式。',
            'description' => '拉取仓库代码(git clone)所需的链接，支持HTTPS和SSH形式。',
            'type' => 'string',
            'required' => true,
            'example' => 'https://github.com/DDofDD/start-springboot-lfgy.git',
          ),
          'platform' => 
          array (
            'title' => '只读，仓库所属代码托管平台的类型，支持github、gitee、gitlab、codeup',
            'description' => '只读，仓库所属代码托管平台的类型，支持github、gitee、gitlab、codeup',
            'type' => 'string',
            'example' => 'github',
          ),
          'id' => 
          array (
            'title' => '只读，代码托管平台中的仓库ID，平台内唯一',
            'description' => '只读，代码托管平台中的仓库ID，平台内唯一',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '312649',
          ),
          'owner' => 
          array (
            'title' => '只读，代码托管平台中仓库所属账号名或组织名',
            'description' => '只读，代码托管平台中仓库所属账号名或组织名',
            'type' => 'string',
            'example' => 'my-org-name',
          ),
          'displayName' => 
          array (
            'title' => '只读，代码托管平台中的仓库名',
            'description' => '只读，代码托管平台中的仓库名',
            'type' => 'string',
            'example' => 'my-repo-name',
          ),
          'webUrl' => 
          array (
            'title' => '只读，仓库主页链接',
            'description' => '只读，仓库主页链接',
            'type' => 'string',
            'example' => 'https://github.com/my-org-name/my-repo-name',
          ),
        ),
      ),
      'ResourceDetail' => 
      array (
        'title' => '资源设施堆栈资源详情',
        'type' => 'object',
        'properties' => 
        array (
          'address' => 
          array (
            'title' => '资源全局地址，可以唯一定位一个资源',
            'type' => 'string',
            'example' => 'alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd',
          ),
          'mode' => 
          array (
            'title' => '纳管方式',
            'type' => 'string',
            'example' => 'managed',
          ),
          'type' => 
          array (
            'title' => '资源类型',
            'type' => 'string',
            'example' => 'alicloud_fc_trigger',
          ),
          'name' => 
          array (
            'title' => '资源名称',
            'type' => 'string',
            'example' => 'cn-shanghai-fc-stable-diffusion-sd',
          ),
          'attributeValues' => 
          array (
            'title' => '资源属性详情',
            'type' => 'object',
            'example' => '{"config":"{\\"methods\\":[\\"GET\\",\\"POST\\",\\"PUT\\",\\"DELETE\\"],\\"authType\\":\\"anonymous\\",\\"disableURLInternet\\":true}","config_mns":null,"function":"sd","id":"fc-stable-diffusion:sd:defaultTrigger","last_modified":"2024-04-17T13:20:53Z","name":"defaultTrigger","name_prefix":null,"role":"","service":"fc-stable-diffusion","source_arn":"","trigger_id":"mock-trigger","type":"http"}',
          ),
        ),
      ),
      'ResourceDrift' => 
      array (
        'title' => '基础设施堆栈资源漂移',
        'description' => '资源漂移',
        'type' => 'object',
        'properties' => 
        array (
          'address' => 
          array (
            'title' => '资源全局地址，可以唯一定位一个资源',
            'description' => '资源全局地址，可以唯一定位一个资源',
            'type' => 'string',
            'example' => 'alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd',
          ),
          'mode' => 
          array (
            'title' => '纳管方式',
            'description' => '纳管方式',
            'type' => 'string',
            'example' => 'managed',
          ),
          'type' => 
          array (
            'title' => '资源类型',
            'description' => '资源类型',
            'type' => 'string',
            'example' => 'alicloud_fc_trigger',
          ),
          'name' => 
          array (
            'title' => '资源名称',
            'description' => '资源名称',
            'type' => 'string',
            'example' => 'cn-shanghai-fc-stable-diffusion-sd',
          ),
          'change' => 
          array (
            'title' => '详细漂移结果',
            'description' => '详细漂移结果',
            'type' => 'object',
            'properties' => 
            array (
              'actions' => 
              array (
                'title' => '漂移行为',
                'description' => '漂移行为',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'example' => 'update',
                ),
              ),
              'before' => 
              array (
                'title' => '执行漂移检查之前的详情',
                'description' => '执行漂移检查之前的详情',
                'type' => 'any',
                'example' => '{"description":"modelscope deployment","id":"fc-demo-model-scope","internet_access":true,"last_modified":"2024-04-17T13:20:56Z","log_config":[],"name":"fc-demo-model-scope","name_prefix":null,"nas_config":[{"group_id":0,"mount_points":[{"mount_dir":"/mnt/auto","server_addr":"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope"}],"user_id":0}],"publish":null,"role":"acs:ram::mock-role:role/aliyunfcdefaultrole","service_id":"mock-service","tags":null,"tracing_config":[],"version":null,"vpc_config":[{"security_group_id":"sg-mock","vpc_id":"vpc-mock","vswitch_ids":["vsw-mock"]}]}',
              ),
              'after' => 
              array (
                'title' => '执行漂移检查之后的详情',
                'description' => '执行漂移检查之后的详情',
                'type' => 'any',
                'example' => '{"description":"mock deployment","id":"fc-demo-model-scope","internet_access":true,"last_modified":"2024-04-17T13:20:56Z","log_config":[],"name":"fc-demo-model-scope","name_prefix":null,"nas_config":[{"group_id":0,"mount_points":[{"mount_dir":"/mnt/auto","server_addr":"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope"}],"user_id":0}],"publish":null,"role":"acs:ram::mock-role:role/aliyunfcdefaultrole","service_id":"mock-service","tags":null,"tracing_config":[],"version":null,"vpc_config":[{"security_group_id":"sg-mock","vpc_id":"vpc-mock","vswitch_ids":["vsw-mock"]}]}',
              ),
            ),
          ),
        ),
      ),
      'RunAfter' => 
      array (
        'title' => '任务依赖，必须在依赖结束后执行',
        'description' => 'Describe dependencies',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '执行依赖的任务代称',
            'description' => '执行依赖的任务代称',
            'type' => 'string',
            'example' => 'task-1',
          ),
        ),
      ),
      'RunPipelineConfig' => 
      array (
        'title' => '触发后运行流水线配置',
        'description' => '触发后运行流水线配置',
        'type' => 'object',
        'properties' => 
        array (
          'yamlFilePath' => 
          array (
            'title' => '触发流水线执行的cicd.yaml在仓库中的位置，适用于DevOps的场景。此配置拥有最高优先级，所有流水线执行相关的配置都需要在cicd.yaml文件中定义，其他流水线执行配置均不生效。如果cicd.yaml不存在，则在触发执行时会出错。',
            'description' => '触发流水线执行的cicd.yaml在仓库中的位置，适用于DevOps的场景。此配置拥有最高优先级，所有流水线执行相关的配置都需要在cicd.yaml文件中定义，其他流水线执行配置均不生效。如果cicd.yaml不存在，则在触发执行时会出错。',
            'type' => 'string',
            'example' => 'cd.yaml',
          ),
          'yamlFileContent' => 
          array (
            'title' => '触发流水线执行的cicd.yaml的内容。此配置拥有仅次于yamlFilePath的优先级。所有流水线执行相关的配置都需要在cicd.yaml文件中定义，流水线执行配置均不生效。',
            'description' => '触发流水线执行的cicd.yaml的内容。此配置拥有仅次于yamlFilePath的优先级。所有流水线执行相关的配置都需要在cicd.yaml文件中定义，流水线执行配置均不生效。',
            'type' => 'string',
            'example' => 'kind: Pipeline
            # 流水线执行名称，需要全局唯一。如果流水线模板存在，则不能成功提交流水线执行
            # 推荐使用commitID与时间戳构造唯一的名称
            name: "p-<% .git.shortCommitId %>-<% .currentTimestampMs %>"
            # 一些任意的描述信息
            description: \'demo pipeline\'
            # 添加任意的labels，用于查询过滤
            # 应用中心会在提交时也会添加其他labels
            labels:
              myLabel: my-cicd-example
            spec:
              context:
                data:
                  appName: <% .appName %>
                  envName: <% .envName %>
                  deployFile: s.yaml
              templateSpec:
                # 要执行的任务，默认所有任务会一同尝试执行
                # 执行会满足runAfters引入的先后约束，任务必须在runAfters声明的任务执行完毕后才可以被执行
                # 用户可以使用此特性，达到DAG描述的效果
                tasks:
                  # 构建前检查
                  - name: pre-check
                    context:
                      data:
                        displayName: "前置检查"
                        # 打开任务执行，默认是关闭的
                        enable: true
                        # 同样可以在此处声明钉钉告警配置，修改告警模板
                        # dingdingNotification:
                        # 同样可以在此处声明或修改RunnerConfig
                        # runnerConfig:
                        # 执行步骤。下述步骤将会采用开源项目serverless-cd提供的engine进行执行
                        steps:
                          # 第一步，初始化s工具
                          - plugin: "@serverless-cd/s-setup"
                          # 第二步，checkout代码
                          # 这里采用了plugin机制，运行serverless-cd社区的插件
                          # @serverless-cd/checkout是一个社区提供的插件，它会将代码checkout到默认路径
                          # 我们会陆续为社区提供更多的插件
                          - plugin: "@serverless-cd/checkout"
                            # 执行s-plan，并打印输出内容
                            # 这里为了说明engine能力，将它拆分成了多个step执行
                          - run: s plan -t ${{ ctx.data.deployFile || "s.yaml" }}
                          - run: echo "s plan finished."
                    # 任务模板。这里使用了内置的模板serverless-runner-task
                    taskTemplate: serverless-runner-task
                    # 执行顺序，当前任务执行依赖runAfters任务都执行成功
                    runAfters: []
                  # 构建并部署
                  - name: build-and-deploy
                    context:
                      data:
                        # 打开任务执行，默认是关闭的
                        enable: true
                        # 同样可以在此处声明钉钉告警配置，修改告警模板
                        # dingdingNotification:
                        # 同样可以在此处声明或修改RunnerConfig
                        # runnerConfig:
                        # 执行步骤。下述步骤将会采用开源项目serverless-cd提供的engine进行执行
                        steps:
                          # 每个Task都是独立运行的Serverless实例，需要再次初始化s工具
                          - plugin: "@serverless-cd/s-setup"
                          # 同理，需要重新checkout
                          - plugin: "@serverless-cd/checkout"
                          # 执行s-deploy
                          - plugin: "@serverless-cd/s-deploy"
                    taskTemplate: serverless-runner-task
                    # 执行顺序，当前任务执行依赖runAfters任务都执行成功
                    runAfters:
                      # 在approval后执行
                      - name: pre-check',
          ),
          'pipelineSpec' => 
          array (
            'title' => '流水线执行的配置描述',
            'description' => '流水线执行的配置描述',
            '$ref' => '#/components/schemas/PipelineSpec',
          ),
          'variables' => 
          array (
            'title' => '流水线环境变量，可以在流水线执行时引用',
            'description' => '流水线环境变量，可以在流水线执行时引用',
            'type' => 'array',
            'items' => 
            array (
              'description' => '变量',
              '$ref' => '#/components/schemas/Variable',
            ),
          ),
        ),
      ),
      'ServiceSpec' => 
      array (
        'title' => 'Specification of the desired behavior of the Service.',
        'description' => 'Specification of the desired behavior of the Service.',
        'type' => 'object',
        'properties' => 
        array (
          'environment' => 
          array (
            'title' => 'The name of the associated Environment for the Service',
            'type' => 'string',
            'required' => true,
            'example' => 'my-env',
          ),
          'roleArn' => 
          array (
            'title' => 'The ARN (Aliyun Resource Name) of the role designated by a user to allow the system to manage his Aliyun resources. If null, use roleArn of role AliyunFCDefaultRole.',
            'type' => 'string',
            'example' => 'acs:ram::1455541096306548:role/aliyunfcdefaultrole',
          ),
          'template' => 
          array (
            'title' => 'The name of the template for the Service',
            'type' => 'string',
            'required' => true,
            'example' => 'serverless-devs.com/alicloud-multi-functions/service-single-function/deployment',
          ),
          'templateVariables' => 
          array (
            'title' => 'Variables for specified template',
            'type' => 'object',
            'required' => true,
          ),
          'templateVersion' => 
          array (
            'title' => 'The major version of the template. "1" by default.',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'Task' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务运行',
        'type' => 'object',
        'properties' => 
        array (
          'spec' => 
          array (
            'description' => '任务运行配置',
            '$ref' => '#/components/schemas/TaskSpec',
          ),
          'status' => 
          array (
            'description' => '任务运行状态',
            '$ref' => '#/components/schemas/TaskStatus',
          ),
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '任务描述信息',
            'description' => '任务描述信息',
            'type' => 'string',
            'example' => 'Task example.',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'Task',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-task',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => 'value to the label key.',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'TaskExec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务执行',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '当前任务代称',
            'description' => '当前任务代称',
            'type' => 'string',
            'example' => 'task-1',
          ),
          'context' => 
          array (
            'title' => '执行上下文',
            'description' => '执行上下文',
            '$ref' => '#/components/schemas/Context',
          ),
          'taskTemplate' => 
          array (
            'title' => '任务模板名称',
            'description' => '任务模板名称',
            'type' => 'string',
            'example' => 'serverless-runner',
          ),
          'runAfters' => 
          array (
            'title' => '执行顺序，必须在所有依赖任务执行完毕后才能被执行',
            'description' => '执行顺序，必须在所有依赖任务执行完毕后才能被执行',
            'type' => 'array',
            'items' => 
            array (
              'description' => '执行依赖的任务代称。',
              '$ref' => '#/components/schemas/RunAfter',
            ),
          ),
        ),
      ),
      'TaskExecError' => 
      array (
        'title' => '任务执行出现的异常描述',
        'description' => '任务执行异常',
        'type' => 'object',
        'properties' => 
        array (
          'title' => 
          array (
            'title' => '错误描述',
            'description' => '错误描述',
            'type' => 'string',
            'example' => '权限不足错误',
          ),
          'message' => 
          array (
            'title' => '错误信息',
            'description' => '错误信息',
            'type' => 'string',
            'example' => '部署服务[_appcenter-xxx]失败，权限不足',
          ),
          'code' => 
          array (
            'title' => '错误码',
            'description' => '错误码',
            'type' => 'string',
            'example' => 'AccessDenied',
          ),
          'requestId' => 
          array (
            'title' => '请求ID',
            'description' => '请求ID',
            'type' => 'string',
            'example' => '1-26d1287xxxxx',
          ),
          'extraInfo' => 
          array (
            'title' => '对解决错误有帮助的额外信息',
            'description' => '对解决错误有帮助的额外信息',
            'type' => 'string',
            'example' => '部署辅助函数权限不足，需要添加额外的权限以解决问题',
          ),
        ),
      ),
      'TaskInvocation' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务调用详情',
        'type' => 'object',
        'properties' => 
        array (
          'invocationID' => 
          array (
            'title' => '调用ID，任务在函数计算中的调用ID',
            'description' => '调用ID，任务在函数计算中的调用ID',
            'type' => 'string',
            'example' => 'E099843B-10A2-4936-9964-4E0EE263D564',
          ),
          'requestID' => 
          array (
            'title' => '请求ID，任务在函数计算中的请求ID',
            'description' => '请求ID，任务在函数计算中的请求ID',
            'type' => 'string',
            'example' => '1B3058B1-F1C9-457C-B95C-2C250A4B3118',
          ),
          'invocationTarget' => 
          array (
            'title' => '调用目标',
            'description' => '调用目标',
            'type' => 'string',
            'example' => 'acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx',
          ),
          'status' => 
          array (
            'title' => '上一次观测到的调用状态。',
            'description' => '上一次观测到的调用状态。',
            'type' => 'string',
            'example' => 'success',
          ),
          'output' => 
          array (
            'title' => '调用结果',
            'description' => '调用结果',
            'type' => 'string',
            'example' => '{"key1":"value1","key2":"value2"}',
          ),
          'instanceID' => 
          array (
            'title' => '调用命中的实例ID',
            'description' => '调用命中的实例ID',
            'type' => 'string',
            'example' => 'c-nkj8shz7xxxx',
          ),
          'slsProject' => 
          array (
            'title' => '日志投递到SLS产品的Project名称',
            'description' => '日志投递到SLS产品的Project名称',
            'type' => 'string',
            'example' => 'my-sls-project',
          ),
          'slsLogStore' => 
          array (
            'title' => '日志投递到SLS产品的Logstore名称',
            'description' => '日志投递到SLS产品的Logstore名称',
            'type' => 'string',
            'example' => 'my-sls-logstore',
          ),
        ),
      ),
      'TaskSpec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务运行配置',
        'type' => 'object',
        'properties' => 
        array (
          'templateName' => 
          array (
            'title' => '任务模板名称',
            'description' => '任务模板名称',
            'type' => 'string',
            'example' => 'my-task-template',
          ),
          'context' => 
          array (
            'title' => '任务的执行上下文',
            'description' => '任务的执行上下文',
            '$ref' => '#/components/schemas/Context',
          ),
        ),
      ),
      'TaskStatus' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务运行状态',
        'type' => 'object',
        'properties' => 
        array (
          'statusGeneration' => 
          array (
            'title' => '状态版本号',
            'description' => '状态版本号',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '123',
          ),
          'phase' => 
          array (
            'title' => '当前执行阶段',
            'description' => '当前执行阶段',
            'type' => 'string',
            'example' => 'Success',
          ),
          'executionDetails' => 
          array (
            'title' => '执行详情',
            'description' => '执行详情',
            'type' => 'array',
            'items' => 
            array (
              'description' => '执行详情',
              'type' => 'string',
              'example' => 'step1: start task.',
            ),
          ),
          'invocations' => 
          array (
            'title' => '执行历史',
            'description' => '执行历史',
            'type' => 'array',
            'items' => 
            array (
              'description' => '调用的列表',
              '$ref' => '#/components/schemas/TaskInvocation',
            ),
          ),
          'latestExecError' => 
          array (
            'title' => '最近一次任务执行错误',
            'description' => '最近一次任务执行错误',
            '$ref' => '#/components/schemas/TaskExecError',
          ),
        ),
      ),
      'TaskTemplate' => 
      array (
        'description' => '任务模板',
        'type' => 'object',
        'properties' => 
        array (
          'uid' => 
          array (
            'title' => '当前阿里云主账号的ID，只读',
            'description' => '当前阿里云主账号的ID，只读',
            'type' => 'string',
            'required' => false,
            'example' => '1455541096***548',
          ),
          'generation' => 
          array (
            'title' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'description' => '当前配置的自增的序列号，由系统填充，只读。当spec更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
          'description' => 
          array (
            'title' => '任务模板描述信息',
            'description' => '任务模板描述信息',
            'type' => 'string',
            'example' => 'TaskTemplate example.',
          ),
          'kind' => 
          array (
            'title' => '当前资源的名称，只读',
            'description' => '当前资源的名称，只读',
            'type' => 'string',
            'example' => 'TaskTemplate',
          ),
          'createdTime' => 
          array (
            'title' => '表示创建此对象时服务器的时间，只读',
            'description' => '表示创建此对象时服务器的时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'name' => 
          array (
            'title' => '当前资源的名称。它需要是唯一的，且无法变更',
            'description' => '当前资源的名称。它需要是唯一的，且无法变更',
            'type' => 'string',
            'required' => true,
            'example' => 'my-task-template',
            'maxLength' => 40,
            'minLength' => 1,
            'pattern' => '[a-z](?!-)[a-z0-9-]{1,40}(?<!-)',
          ),
          'deletionTime' => 
          array (
            'title' => '资源删除时间，只读',
            'description' => '资源删除时间，只读',
            'type' => 'string',
            'example' => '2021-11-19T09:34:38Z',
          ),
          'spec' => 
          array (
            'title' => '资源的配置属性',
            'description' => '资源的配置属性',
            '$ref' => '#/components/schemas/TaskTemplateSpec',
          ),
          'labels' => 
          array (
            'title' => '资源的标签',
            'description' => '资源的标签',
            'type' => 'object',
            'additionalProperties' => 
            array (
              'description' => '标签',
              'type' => 'string',
              'example' => '资源标签的值',
            ),
          ),
          'resourceVersion' => 
          array (
            'title' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'description' => '当前状态的自增的序列号，由系统填充，只读。当资源更新时递增',
            'type' => 'integer',
            'format' => 'int32',
            'example' => '1',
          ),
        ),
      ),
      'TaskTemplateSpec' => 
      array (
        'title' => 'A short description of struct',
        'description' => '任务模板描述',
        'type' => 'object',
        'properties' => 
        array (
          'description' => 
          array (
            'title' => '任务执行的描述信息',
            'description' => '任务执行的描述信息',
            'type' => 'string',
            'example' => 'build&deploy.',
          ),
          'worker' => 
          array (
            'title' => '任务节点的描述',
            'description' => '任务节点的描述',
            '$ref' => '#/components/schemas/TaskWorker',
          ),
          'context' => 
          array (
            'title' => '任务的执行上下文',
            'description' => '任务的执行上下文',
            '$ref' => '#/components/schemas/Context',
          ),
          'executeCondition' => 
          array (
            'title' => '任务执行的条件',
            'description' => '任务执行的条件',
            '$ref' => '#/components/schemas/Condition',
          ),
        ),
      ),
      'TaskWorker' => 
      array (
        'title' => 'A short description of struct',
        'description' => '描述任务执行方式',
        'type' => 'object',
        'properties' => 
        array (
          'presetWorker' => 
          array (
            'title' => '系统预设的任务类型。它会执行预设的逻辑。',
            'description' => '系统预设的任务类型。它会执行预设的逻辑。',
            'type' => 'string',
            'example' => 'serverless-runner',
          ),
        ),
      ),
      'TemplateConfig' => 
      array (
        'title' => '模板配置',
        'description' => '项目模板配置',
        'type' => 'object',
        'properties' => 
        array (
          'templateName' => 
          array (
            'title' => '模板名称',
            'description' => '模板名称',
            'type' => 'string',
            'required' => true,
            'example' => 'start-springboot',
          ),
          'parameters' => 
          array (
            'title' => '模板参数',
            'description' => '模板参数',
            'type' => 'object',
            'required' => false,
            'example' => '{"region":"cn-hangzhou"}',
          ),
        ),
      ),
      'TerraformInputVariable' => 
      array (
        'title' => 'Terraform模板输入变量定义',
        'description' => 'Terraform模板输入变量定义',
        'type' => 'object',
        'properties' => 
        array (
          'defaultJson' => 
          array (
            'title' => '变量默认值的JSON字符串，可选。',
            'type' => 'string',
            'example' => '{"key":"value"}',
          ),
          'description' => 
          array (
            'title' => '变量描述',
            'type' => 'string',
            'example' => 'test variable',
          ),
          'name' => 
          array (
            'title' => '变量名称。可以包含字母、数字、下划线（_）和连字符（-）。名称第一个字符不能是数字，以避免文字数字的歧义。',
            'type' => 'string',
            'required' => true,
            'example' => 'namePrefix',
          ),
          'nullable' => 
          array (
            'title' => '变量是否可以为空，默认为true',
            'type' => 'boolean',
            'example' => 'true',
            'default' => 'true',
          ),
          'sensitive' => 
          array (
            'title' => '变量是否包含敏感信息，默认为false',
            'type' => 'boolean',
            'example' => 'false',
            'default' => 'false',
          ),
          'type' => 
          array (
            'title' => '变量参数类型',
            'type' => 'string',
            'example' => 'string',
          ),
        ),
      ),
      'TerraformOutputValue' => 
      array (
        'title' => 'Terraform模板输出',
        'description' => 'Terraform模板输出，只读',
        'type' => 'object',
        'properties' => 
        array (
          'name' => 
          array (
            'title' => '输出变量的名称。名称可以包含字母、数字、下划线（_）和连字符（-）。第一个字符不能是数字，以避免文字数字的歧义。',
            'type' => 'string',
            'required' => true,
            'example' => 'vpcId',
          ),
          'description' => 
          array (
            'title' => '输出变量的描述',
            'type' => 'string',
            'example' => 'The VPC ID where the resource is located.',
          ),
          'sensitive' => 
          array (
            'title' => '输出变量是否大小写敏感，默认false',
            'type' => 'boolean',
            'example' => 'false',
            'default' => 'false',
          ),
        ),
      ),
      'Variable' => 
      array (
        'title' => '变量',
        'description' => '变量',
        'type' => 'object',
        'properties' => 
        array (
          'value' => 
          array (
            'title' => '变量的值',
            'description' => '变量的值',
            'type' => 'string',
            'example' => 'object_value',
          ),
          'name' => 
          array (
            'title' => '变量的关键字',
            'description' => '变量的关键字',
            'type' => 'string',
            'example' => 'object_key',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreateProject' => 
    array (
      'summary' => '创建项目，并在指定模板配置时自动部署此项目。',
      'path' => '/2023-07-14/projects',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '计划创建的项目实体',
            'required' => false,
            '$ref' => '#/components/schemas/Project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '成功创建的项目实体',
            '$ref' => '#/components/schemas/Project',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '创建项目',
      'description' => '1. 当`Project.Spec.TemplateConfig`非空时：创建项目后，开发平台会使用您提供的模板信息异步地为您自动部署该项目（创建`Environment`、`PipelineTrigger`、`PipelineTriggerEvent`、`Pipeline`实体）
2. 当`Project.Spec.TemplateConfig`为空时：仅创建项目实体，需要您手动调用`Environment`、`PipelineTrigger`、`PipelineTriggerEvent`相关API完成部署。

><notice>通过模板完成的项目部署流程完全免费，部署后项目模板所涉及的云资源将按照各云产品的计费方式计费></notice>',
    ),
    'DeleteProject' => 
    array (
      'summary' => '删除一个项目，并级联删除项目下的其他实体（包括环境、流水线触发器、流水线触发记录、流水线模板、流水线）。',
      'path' => '/2023-07-14/projects/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
        1 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当项目下不存在任何环境或仅存在一个默认环境时，才允许删除该项目；而force可以强制删除项目并级联删除其下环境',
            'description' => '是否强制删除。当项目中包含多个环境时，若force为true，则能够强制删除项目，并级联删除所有环境下的其他实体；若force为false，则抛出异常，需要您先删除环境',
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
            'title' => 'Schema of Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'D9A4CC0F-132B-5EDC-B252-5E11ADFA4B4E',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D9A4CC0F-132B-5EDC-B252-5E11ADFA4B4E\\"\\n}","type":"json"}]',
      'title' => '删除项目',
      'description' => '1. 若项目中不存在环境或仅包含一个默认环境：能够删除项目，并级联删除环境下的其他实体（包括流水线触发器、流水线触发记录、流水线模板、流水线）
2. 若项目中包含多个环境：若`force`为`true`，则能够强制删除项目，并级联删除所有环境下的其他实体；若`force`为`false`，则抛出异常，需要您先删除环境

> 使用OpenAPI删除项目时，暂不支持删除项目下部署的云资源（例如函数、自定义域名等）',
    ),
    'UpdateProject' => 
    array (
      'summary' => '修改项目，并在模板参数变化时自动部署该项目。',
      'path' => '/2023-07-14/projects/{name}',
      'methods' => 
      array (
        0 => 'patch',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '计划更新的项目实体内容。您指定的可写字段将被更新，未指定的字段将保持不变',
            'description' => '计划更新的项目实体内容。您指定的可写字段将被更新，未指定的字段将保持不变',
            'required' => false,
            '$ref' => '#/components/schemas/Project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '成功更新后的项目实体',
            'description' => '成功更新后的项目实体',
            '$ref' => '#/components/schemas/Project',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '修改项目',
      'description' => '1. 使用修改（Update）相关的接口时，您指定的可写字段将被更新，未指定的字段将保持不变
2. 当且仅当模板参数（spec.templateConfig.parameters）发生变化时，才会触发自动部署
3. 使用环境（Environment）相关API修改默认环境（Default）配置后，不再支持更新项目',
    ),
    'PutProject' => 
    array (
      'summary' => '使用新的项目配置替换已有的项目配置，并在模板参数变化时自动部署该项目。',
      'path' => '/2023-07-14/projects/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '计划更新的项目实体内容。当前实体的可写字段将被您指定的实体完全替换',
            'description' => '计划更新的项目实体内容。当前实体的可写字段将被您指定的实体完全替换',
            'required' => false,
            '$ref' => '#/components/schemas/Project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
        2 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '强制更新项目。由于更新项目时可能会触发自动部署，因此并发部署将被限制，您可以通过此参数强制更新',
            'description' => '强制更新项目。由于更新项目时可能会触发自动部署，因此并发部署将被限制，您可以通过此参数强制更新',
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
            'title' => '成功更新后的项目实体',
            'description' => '成功更新后的项目实体',
            '$ref' => '#/components/schemas/Project',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '替换项目',
      'description' => '1. 使用替换（Put）相关的接口时，当前实体的可写字段将被您指定的实体完全替换
2. 当且仅当模板参数（spec.templateConfig.parameters）发生变化时，才会触发自动部署
3. 使用环境（Environment）相关API修改默认环境（Default）配置后，不再支持更新项目',
    ),
    'ListProjects' => 
    array (
      'summary' => '批量查询满足条件的项目。',
      'path' => '/2023-07-14/projects',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'type' => 'string',
              'required' => false,
              'example' => 'templateName=spring-boot-v3',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码，默认为1。页码从1开始。',
            'description' => '当前页码，默认为1。页码从1开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，默认为100。取值范围1~100',
            'description' => '每页大小，默认为100。取值范围1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'type' => 'string',
            'required' => false,
            'example' => 'spring-boot',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '查询的分页结果',
            'description' => '查询的分页结果',
            'type' => 'object',
            'properties' => 
            array (
              'pageNumber' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码，默认为1。页码从1开始',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'title' => '每页大小',
                'description' => '每页大小，默认为100。取值范围1~100',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'totalCount' => 
              array (
                'title' => '查询到的结果数量',
                'description' => '查询到的结果数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'data' => 
              array (
                'title' => '查询的资源实体列表',
                'description' => '查询的资源实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '查询的一个满足条件的项目实体',
                  'description' => '查询的一个满足条件的项目实体',
                  '$ref' => '#/components/schemas/Project',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 100,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"kind\\": \\"Project\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-project\\",\\n      \\"spec\\": {\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        },\\n        \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n        \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"key=value\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"description\\": \\"test-description\\",\\n      \\"status\\": {\\n        \\"latestReleaseDetail\\": {\\n          \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n          \\"bizStatus\\": \\"Running\\",\\n          \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n          \\"templateConfigSnapshot\\": {\\n            \\"templateName\\": \\"start-springboot\\",\\n            \\"parameters\\": {\\n              \\"region\\": \\"cn-hangzhou\\"\\n            }\\n          },\\n          \\"releaseOutputs\\": {\\n            \\"framework\\": {\\n              \\"region\\": \\"cn-hangzhou\\",\\n              \\"service\\": {\\n                \\"serviceName\\": \\"web-framework\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n                \\"role\\": \\"\\",\\n                \\"logConfig\\": {\\n                  \\"project\\": \\"\\",\\n                  \\"logstore\\": \\"\\",\\n                  \\"enableRequestMetrics\\": false,\\n                  \\"enableInstanceMetrics\\": false,\\n                  \\"logBeginRule\\": \\"None\\"\\n                },\\n                \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n                \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                \\"vpcConfig\\": {\\n                  \\"vpcId\\": \\"\\",\\n                  \\"vSwitchIds\\": [],\\n                  \\"securityGroupId\\": \\"\\",\\n                  \\"role\\": \\"\\"\\n                },\\n                \\"internetAccess\\": true,\\n                \\"nasConfig\\": {\\n                  \\"userId\\": -1,\\n                  \\"groupId\\": -1,\\n                  \\"mountPoints\\": []\\n                },\\n                \\"tracingConfig\\": {},\\n                \\"name\\": \\"web-framework\\"\\n              },\\n              \\"function\\": {\\n                \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n                \\"functionName\\": \\"todolist\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n                \\"runtime\\": \\"nodejs12\\",\\n                \\"handler\\": \\"index.handler\\",\\n                \\"timeout\\": 60,\\n                \\"initializer\\": \\"\\",\\n                \\"initializationTimeout\\": 3,\\n                \\"codeSize\\": 1757093,\\n                \\"codeChecksum\\": \\"7185648203525194222\\",\\n                \\"memorySize\\": 256,\\n                \\"environmentVariables\\": {},\\n                \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n                \\"instanceConcurrency\\": 1,\\n                \\"instanceType\\": \\"e1\\",\\n                \\"instanceLifecycleConfig\\": {\\n                  \\"preFreeze\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  },\\n                  \\"preStop\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  }\\n                },\\n                \\"name\\": \\"todolist\\"\\n              },\\n              \\"triggers\\": [\\n                {\\n                  \\"triggerName\\": \\"httpTrigger\\",\\n                  \\"description\\": \\"\\",\\n                  \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n                  \\"triggerType\\": \\"http\\",\\n                  \\"triggerConfig\\": {\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ],\\n                    \\"authType\\": \\"anonymous\\"\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                  \\"name\\": \\"httpTrigger\\"\\n                }\\n              ],\\n              \\"customDomains\\": [\\n                {\\n                  \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n                  \\"accountId\\": \\"1835799444022432\\",\\n                  \\"protocol\\": \\"HTTP\\",\\n                  \\"certConfig\\": {},\\n                  \\"tlsConfig\\": {},\\n                  \\"apiVersion\\": \\"2016-08-15\\",\\n                  \\"routeConfig\\": {\\n                    \\"routes\\": [\\n                      {\\n                        \\"path\\": \\"/*\\",\\n                        \\"serviceName\\": \\"web-framework\\",\\n                        \\"functionName\\": \\"todolist\\",\\n                        \\"methods\\": [\\n                          \\"GET\\",\\n                          \\"POST\\"\\n                        ]\\n                      }\\n                    ]\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n          \\"repositorySnapshot\\": {\\n            \\"connectionName\\": \\"awesome-connection\\",\\n            \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n            \\"platform\\": \\"github\\",\\n            \\"id\\": 312649,\\n            \\"owner\\": \\"my-org-name\\",\\n            \\"displayName\\": \\"my-repo-name\\",\\n            \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n          },\\n          \\"gitEventSnapshot\\": {\\n            \\"branch\\": \\"main\\",\\n            \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n            \\"tag\\": \\"1.0\\"\\n          },\\n          \\"message\\": \\"Triggered manually.\\",\\n          \\"latestTaskExecError\\": {\\n            \\"title\\": \\"权限不足错误\\",\\n            \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n            \\"code\\": \\"AccessDenied\\",\\n            \\"requestId\\": \\"1-26d1287xxxxx\\",\\n            \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n          },\\n          \\"envName\\": \\"dev\\"\\n        },\\n        \\"observedGeneration\\": 1,\\n        \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n      },\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询项目',
    ),
    'GetProject' => 
    array (
      'summary' => '查询一个项目。',
      'path' => '/2023-07-14/projects/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '查询的项目实体',
            '$ref' => '#/components/schemas/Project',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Project\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-project\\",\\n  \\"spec\\": {\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"token\\": \\"9D72DE01-C732-49C0-8E85-FFD9D695436B\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '查询项目',
    ),
    'CreateEnvironment' => 
    array (
      'summary' => '创建项目下的环境，并可选地根据模板自动部署该环境。
服务会部署到指定的环境中，环境可以绑定代码仓库的某个分支或者某个项目模板。环境还可以设置基础设施堆栈，被环境下的所有服务所共享。',
      'path' => '/2023-07-14/projects/{project}/environments',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '环境实体',
            'description' => '环境实体',
            'required' => false,
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目名',
            'description' => '项目名',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-project',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '环境实体',
            'description' => '环境实体',
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '创建环境',
      'description' => '使用注意事项：

- 当Environment.Spec.TemplateConfig非空时：创建环境后，开发平台会使用您提供的模板信息异步地为您自动部署该项目（创建PipelineTrigger、PipelineTriggerEvent、Pipeline实体）。

- 当Environment.Spec.TemplateConfig为空时：仅创建环境实体，需要您手动调用PipelineTrigger、PipelineTriggerEvent相关API完成部署。

<notice>通过模板完成的项目部署流程完全免费，部署后项目模板所涉及的云资源将按照各云产品的计费方式计费></notice>',
    ),
    'DeleteEnvironment' => 
    array (
      'summary' => '删除一个环境，并级联删除项目下的其他实体（包括流水线触发器、流水线触发记录、流水线模板、流水线）。',
      'path' => '/2023-07-14/projects/{project}/environments/{name}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '环境名称',
            'description' => '环境名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-env',
          ),
        ),
      ),
      'responses' => 
      array (
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{}","type":"json"}]',
      'title' => '删除环境',
      'description' => '删除环境目前不支持删除环境下的云资源，您需要手动删除资源。',
    ),
    'UpdateEnvironment' => 
    array (
      'summary' => '修改环境，并在模板参数变化时自动部署该环境。',
      'path' => '/2023-07-14/projects/{project}/environments/{name}',
      'methods' => 
      array (
        0 => 'patch',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '环境实体。您指定的可写字段将被更新，未指定的字段将保持不变',
            'description' => '环境实体。您指定的可写字段将被更新，未指定的字段将保持不变',
            'required' => false,
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-project',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '环境名称',
            'description' => '环境名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-env',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '环境实体',
            'description' => '环境实体',
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '修改环境',
      'description' => '- 使用修改（Update）的接口时，您指定的可写字段将被更新，未指定的字段将保持不变

- 当且仅当模板参数（spec.templateConfig.parameters）发生变化时，才会触发自动部署',
    ),
    'PutEnvironment' => 
    array (
      'summary' => '使用新的环境配置替换已有的环境配置；当开启自动部署时，会在模板参数变化时自动部署该环境。',
      'path' => '/2023-07-14/projects/{project}/environments/{name}',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '环境实体。当前实体的可写字段将被您指定的实体完全替换
',
            'description' => '环境实体。当前实体的可写字段将被您指定的实体完全替换',
            'required' => false,
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => false,
            'example' => 'demo-project',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '环境名称',
            'description' => '环境名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-env',
          ),
        ),
        3 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
            'description' => '是否强制更新。若为`false`，则需要保证即将替换的环境实体为最新的，否则将抛出并发修改冲突异常。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '环境实体',
            'description' => '环境实体',
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '替换环境',
      'description' => '- 使用替换（Put）相关的接口时，当前实体的可写字段将被您指定的实体完全替换

- 当开启自动部署时，会在模板参数（spec.templateConfig.parameters）发生变化时，触发自动部署',
    ),
    'ListEnvironments' => 
    array (
      'summary' => '批量查询满足条件的环境。',
      'path' => '/2023-07-14/projects/{project}/environments/',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'type' => 'string',
              'required' => false,
              'example' => 'branch=main',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'project',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-project',
          ),
        ),
        2 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码，默认为1。页码从1开始',
            'description' => '当前页码，默认为1。页码从1开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，默认为100。取值范围1~100',
            'description' => '每页大小，默认为100。取值范围1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'type' => 'string',
            'required' => false,
            'example' => 'dev',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '查询的分页结果',
            'description' => '查询的分页结果',
            'type' => 'object',
            'properties' => 
            array (
              'pageNumber' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码，默认为1。页码从1开始',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'title' => '每页大小',
                'description' => '每页大小，默认为100。取值范围1~100',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '50',
              ),
              'totalCount' => 
              array (
                'title' => '查询到的结果数量',
                'description' => '查询到的结果数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'data' => 
              array (
                'title' => '查询的资源实体列表',
                'description' => '查询的资源实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '查询的一个满足条件的环境实体',
                  'description' => '查询的一个满足条件的环境实体',
                  '$ref' => '#/components/schemas/Environment',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 50,\\n  \\"totalCount\\": 100,\\n  \\"data\\": [\\n    {\\n      \\"name\\": \\"demo-env\\",\\n      \\"kind\\": \\"Environment\\",\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"description\\": \\"test env\\",\\n      \\"spec\\": {\\n        \\"type\\": \\"Testing\\",\\n        \\"alias\\": \\"dev\\",\\n        \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n        \\"repositoryConfig\\": {\\n          \\"repositoryName\\": \\"my-repository\\",\\n          \\"branchName\\": \\"master\\",\\n          \\"manifest\\": \\"src/s.yaml\\"\\n        },\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        },\\n        \\"infraStackConfig\\": {\\n          \\"regionID\\": \\"cn-hangzhou\\",\\n          \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n          \\"templateSpec\\": {\\n            \\"engine\\": \\"terrafrom\\",\\n            \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n          },\\n          \\"templateVariables\\": {\\n            \\"testKey\\": \\"testValue\\"\\n          },\\n          \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n        },\\n        \\"serviceOverlay\\": {\\n          \\"resources\\": {\\n            \\"dummyFunction\\": {\\n              \\"timeout\\": 600\\n            }\\n          },\\n          \\"components\\": {\\n            \\"fc3\\": {\\n              \\"timeout\\": 600\\n            }\\n          }\\n        },\\n        \\"isAutoDeploy\\": true\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"value to the label key.\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"status\\": {\\n        \\"infraStackStatus\\": {\\n          \\"phase\\": \\"DeploySuccess\\",\\n          \\"message\\": \\"Success!\\",\\n          \\"observedGeneration\\": 0,\\n          \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n          \\"templateOutputs\\": {\\n            \\"vpcId\\": \\"vpc-xxx\\"\\n          },\\n          \\"templateStatus\\": {\\n            \\"variables\\": [\\n              {\\n                \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n                \\"description\\": \\"test variable\\",\\n                \\"name\\": \\"namePrefix\\",\\n                \\"nullable\\": true,\\n                \\"sensitive\\": false,\\n                \\"type\\": \\"string\\"\\n              }\\n            ],\\n            \\"outputs\\": [\\n              {\\n                \\"name\\": \\"vpcId\\",\\n                \\"description\\": \\"The VPC ID where the resource is located.\\",\\n                \\"sensitive\\": false\\n              }\\n            ]\\n          },\\n          \\"resourceState\\": {\\n            \\"resources\\": [\\n              {\\n                \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"mode\\": \\"managed\\",\\n                \\"type\\": \\"alicloud_fc_trigger\\",\\n                \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"attributeValues\\": {\\n                  \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n                  \\"config_mns\\": null,\\n                  \\"function\\": \\"sd\\",\\n                  \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n                  \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n                  \\"name\\": \\"defaultTrigger\\",\\n                  \\"name_prefix\\": null,\\n                  \\"role\\": \\"\\",\\n                  \\"service\\": \\"fc-stable-diffusion\\",\\n                  \\"source_arn\\": \\"\\",\\n                  \\"trigger_id\\": \\"mock-trigger\\",\\n                  \\"type\\": \\"http\\"\\n                }\\n              }\\n            ],\\n            \\"resourceDrifts\\": [\\n              {\\n                \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"mode\\": \\"managed\\",\\n                \\"type\\": \\"alicloud_fc_trigger\\",\\n                \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n                \\"change\\": {\\n                  \\"actions\\": [\\n                    \\"update\\"\\n                  ],\\n                  \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n                  \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n                }\\n              }\\n            ]\\n          }\\n        },\\n        \\"latestReleaseDetail\\": {\\n          \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n          \\"bizStatus\\": \\"Running\\",\\n          \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n          \\"templateConfigSnapshot\\": {\\n            \\"templateName\\": \\"start-springboot\\",\\n            \\"parameters\\": {\\n              \\"region\\": \\"cn-hangzhou\\"\\n            }\\n          },\\n          \\"releaseOutputs\\": {\\n            \\"framework\\": {\\n              \\"region\\": \\"cn-hangzhou\\",\\n              \\"service\\": {\\n                \\"serviceName\\": \\"web-framework\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n                \\"role\\": \\"\\",\\n                \\"logConfig\\": {\\n                  \\"project\\": \\"\\",\\n                  \\"logstore\\": \\"\\",\\n                  \\"enableRequestMetrics\\": false,\\n                  \\"enableInstanceMetrics\\": false,\\n                  \\"logBeginRule\\": \\"None\\"\\n                },\\n                \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n                \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                \\"vpcConfig\\": {\\n                  \\"vpcId\\": \\"\\",\\n                  \\"vSwitchIds\\": [],\\n                  \\"securityGroupId\\": \\"\\",\\n                  \\"role\\": \\"\\"\\n                },\\n                \\"internetAccess\\": true,\\n                \\"nasConfig\\": {\\n                  \\"userId\\": -1,\\n                  \\"groupId\\": -1,\\n                  \\"mountPoints\\": []\\n                },\\n                \\"tracingConfig\\": {},\\n                \\"name\\": \\"web-framework\\"\\n              },\\n              \\"function\\": {\\n                \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n                \\"functionName\\": \\"todolist\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n                \\"runtime\\": \\"nodejs12\\",\\n                \\"handler\\": \\"index.handler\\",\\n                \\"timeout\\": 60,\\n                \\"initializer\\": \\"\\",\\n                \\"initializationTimeout\\": 3,\\n                \\"codeSize\\": 1757093,\\n                \\"codeChecksum\\": \\"7185648203525194222\\",\\n                \\"memorySize\\": 256,\\n                \\"environmentVariables\\": {},\\n                \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n                \\"instanceConcurrency\\": 1,\\n                \\"instanceType\\": \\"e1\\",\\n                \\"instanceLifecycleConfig\\": {\\n                  \\"preFreeze\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  },\\n                  \\"preStop\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  }\\n                },\\n                \\"name\\": \\"todolist\\"\\n              },\\n              \\"triggers\\": [\\n                {\\n                  \\"triggerName\\": \\"httpTrigger\\",\\n                  \\"description\\": \\"\\",\\n                  \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n                  \\"triggerType\\": \\"http\\",\\n                  \\"triggerConfig\\": {\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ],\\n                    \\"authType\\": \\"anonymous\\"\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                  \\"name\\": \\"httpTrigger\\"\\n                }\\n              ],\\n              \\"customDomains\\": [\\n                {\\n                  \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n                  \\"accountId\\": \\"1835799444022432\\",\\n                  \\"protocol\\": \\"HTTP\\",\\n                  \\"certConfig\\": {},\\n                  \\"tlsConfig\\": {},\\n                  \\"apiVersion\\": \\"2016-08-15\\",\\n                  \\"routeConfig\\": {\\n                    \\"routes\\": [\\n                      {\\n                        \\"path\\": \\"/*\\",\\n                        \\"serviceName\\": \\"web-framework\\",\\n                        \\"functionName\\": \\"todolist\\",\\n                        \\"methods\\": [\\n                          \\"GET\\",\\n                          \\"POST\\"\\n                        ]\\n                      }\\n                    ]\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n          \\"repositorySnapshot\\": {\\n            \\"connectionName\\": \\"awesome-connection\\",\\n            \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n            \\"platform\\": \\"github\\",\\n            \\"id\\": 312649,\\n            \\"owner\\": \\"my-org-name\\",\\n            \\"displayName\\": \\"my-repo-name\\",\\n            \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n          },\\n          \\"gitEventSnapshot\\": {\\n            \\"branch\\": \\"main\\",\\n            \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n            \\"tag\\": \\"1.0\\"\\n          },\\n          \\"message\\": \\"Triggered manually.\\",\\n          \\"latestTaskExecError\\": {\\n            \\"title\\": \\"权限不足错误\\",\\n            \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n            \\"code\\": \\"AccessDenied\\",\\n            \\"requestId\\": \\"1-26d1287xxxxx\\",\\n            \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n          },\\n          \\"envName\\": \\"dev\\"\\n        },\\n        \\"observedGeneration\\": 1,\\n        \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n      },\\n      \\"projectName\\": \\"demo-project\\",\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询环境',
    ),
    'GetEnvironment' => 
    array (
      'summary' => '查询一个环境。',
      'path' => '/2023-07-14/projects/{project}/environments/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'project',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '项目名称',
            'description' => '项目名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-project',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '环境名称',
            'description' => '环境名称',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-env',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '环境实体',
            'description' => '环境实体',
            '$ref' => '#/components/schemas/Environment',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"demo-env\\",\\n  \\"kind\\": \\"Environment\\",\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"description\\": \\"test env\\",\\n  \\"spec\\": {\\n    \\"type\\": \\"Testing\\",\\n    \\"alias\\": \\"dev\\",\\n    \\"roleArn\\": \\"acs:ram::*******:role/aliyundevsdefaultrole\\",\\n    \\"repositoryConfig\\": {\\n      \\"repositoryName\\": \\"my-repository\\",\\n      \\"branchName\\": \\"master\\",\\n      \\"manifest\\": \\"src/s.yaml\\"\\n    },\\n    \\"templateConfig\\": {\\n      \\"templateName\\": \\"start-springboot\\",\\n      \\"parameters\\": {\\n        \\"region\\": \\"cn-hangzhou\\"\\n      }\\n    },\\n    \\"infraStackConfig\\": {\\n      \\"regionID\\": \\"cn-hangzhou\\",\\n      \\"roleArn\\": \\"acs:ram::1234567890:role/devs-role\\",\\n      \\"templateSpec\\": {\\n        \\"engine\\": \\"terrafrom\\",\\n        \\"content\\": \\"\\\\\\"\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_fc_service\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  name        = \\\\\\\\\\\\\\"xiliu-tf-test-srv4\\\\\\\\\\\\\\"\\\\\\\\n  description = \\\\\\\\\\\\\\"xiliu tf  test service \\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\n\\\\\\\\nresource \\\\\\\\\\\\\\"alicloud_oss_bucket\\\\\\\\\\\\\\" \\\\\\\\\\\\\\"default\\\\\\\\\\\\\\" {\\\\\\\\n  bucket = \\\\\\\\\\\\\\"xiliu-test-tf-bucket4\\\\\\\\\\\\\\"\\\\\\\\n  acl    = \\\\\\\\\\\\\\"private\\\\\\\\\\\\\\"\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"service_name\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_fc_service.default.name\\\\\\\\n}\\\\\\\\n\\\\\\\\noutput \\\\\\\\\\\\\\"oss_bucket\\\\\\\\\\\\\\" {\\\\\\\\n  value = alicloud_oss_bucket.default.bucket\\\\\\\\n}\\\\\\",\\"\\n      },\\n      \\"templateVariables\\": {\\n        \\"testKey\\": \\"testValue\\"\\n      },\\n      \\"templateName\\": \\"serverless.devs.com/fc-builtin\\"\\n    },\\n    \\"serviceOverlay\\": {\\n      \\"resources\\": {\\n        \\"dummyFunction\\": {\\n          \\"timeout\\": 600\\n        }\\n      },\\n      \\"components\\": {\\n        \\"fc3\\": {\\n          \\"timeout\\": 600\\n        }\\n      }\\n    },\\n    \\"isAutoDeploy\\": true\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"status\\": {\\n    \\"infraStackStatus\\": {\\n      \\"phase\\": \\"DeploySuccess\\",\\n      \\"message\\": \\"Success!\\",\\n      \\"observedGeneration\\": 0,\\n      \\"observedTime\\": \\"2021-10-08T23:14:16Z\\",\\n      \\"templateOutputs\\": {\\n        \\"vpcId\\": \\"vpc-xxx\\"\\n      },\\n      \\"templateStatus\\": {\\n        \\"variables\\": [\\n          {\\n            \\"defaultJson\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n            \\"description\\": \\"test variable\\",\\n            \\"name\\": \\"namePrefix\\",\\n            \\"nullable\\": true,\\n            \\"sensitive\\": false,\\n            \\"type\\": \\"string\\"\\n          }\\n        ],\\n        \\"outputs\\": [\\n          {\\n            \\"name\\": \\"vpcId\\",\\n            \\"description\\": \\"The VPC ID where the resource is located.\\",\\n            \\"sensitive\\": false\\n          }\\n        ]\\n      },\\n      \\"resourceState\\": {\\n        \\"resources\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"attributeValues\\": {\\n              \\"config\\": \\"{\\\\\\"methods\\\\\\":[\\\\\\"GET\\\\\\",\\\\\\"POST\\\\\\",\\\\\\"PUT\\\\\\",\\\\\\"DELETE\\\\\\"],\\\\\\"authType\\\\\\":\\\\\\"anonymous\\\\\\",\\\\\\"disableURLInternet\\\\\\":true}\\",\\n              \\"config_mns\\": null,\\n              \\"function\\": \\"sd\\",\\n              \\"id\\": \\"fc-stable-diffusion:sd:defaultTrigger\\",\\n              \\"last_modified\\": \\"2024-04-17T13:20:53Z\\",\\n              \\"name\\": \\"defaultTrigger\\",\\n              \\"name_prefix\\": null,\\n              \\"role\\": \\"\\",\\n              \\"service\\": \\"fc-stable-diffusion\\",\\n              \\"source_arn\\": \\"\\",\\n              \\"trigger_id\\": \\"mock-trigger\\",\\n              \\"type\\": \\"http\\"\\n            }\\n          }\\n        ],\\n        \\"resourceDrifts\\": [\\n          {\\n            \\"address\\": \\"alicloud_fc_trigger.cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"mode\\": \\"managed\\",\\n            \\"type\\": \\"alicloud_fc_trigger\\",\\n            \\"name\\": \\"cn-shanghai-fc-stable-diffusion-sd\\",\\n            \\"change\\": {\\n              \\"actions\\": [\\n                \\"update\\"\\n              ],\\n              \\"before\\": \\"{\\\\\\"description\\\\\\":\\\\\\"modelscope deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\",\\n              \\"after\\": \\"{\\\\\\"description\\\\\\":\\\\\\"mock deployment\\\\\\",\\\\\\"id\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"internet_access\\\\\\":true,\\\\\\"last_modified\\\\\\":\\\\\\"2024-04-17T13:20:56Z\\\\\\",\\\\\\"log_config\\\\\\":[],\\\\\\"name\\\\\\":\\\\\\"fc-demo-model-scope\\\\\\",\\\\\\"name_prefix\\\\\\":null,\\\\\\"nas_config\\\\\\":[{\\\\\\"group_id\\\\\\":0,\\\\\\"mount_points\\\\\\":[{\\\\\\"mount_dir\\\\\\":\\\\\\"/mnt/auto\\\\\\",\\\\\\"server_addr\\\\\\":\\\\\\"mock-addr.cn-shanghai.nas.aliyuncs.com:/fc-demo-model-scope\\\\\\"}],\\\\\\"user_id\\\\\\":0}],\\\\\\"publish\\\\\\":null,\\\\\\"role\\\\\\":\\\\\\"acs:ram::mock-role:role/aliyunfcdefaultrole\\\\\\",\\\\\\"service_id\\\\\\":\\\\\\"mock-service\\\\\\",\\\\\\"tags\\\\\\":null,\\\\\\"tracing_config\\\\\\":[],\\\\\\"version\\\\\\":null,\\\\\\"vpc_config\\\\\\":[{\\\\\\"security_group_id\\\\\\":\\\\\\"sg-mock\\\\\\",\\\\\\"vpc_id\\\\\\":\\\\\\"vpc-mock\\\\\\",\\\\\\"vswitch_ids\\\\\\":[\\\\\\"vsw-mock\\\\\\"]}]}\\"\\n            }\\n          }\\n        ]\\n      }\\n    },\\n    \\"latestReleaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"observedGeneration\\": 1,\\n    \\"observedTime\\": \\"2021-11-19T09:34:38Z\\"\\n  },\\n  \\"projectName\\": \\"demo-project\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '查询环境',
    ),
    'CreateConnection' => 
    array (
      'summary' => '创建一个身份绑定，将阿里云主账号与一个第三方代码托管平台（GitHub、Gitee、Codeup、...）的账号建立关联。',
      'path' => '/2023-07-14/connections',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '计划创建的身份绑定实体',
            'required' => false,
            '$ref' => '#/components/schemas/Connection',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '成功创建的身份绑定实体',
            '$ref' => '#/components/schemas/Connection',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Connection\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-connection\\",\\n  \\"spec\\": {\\n    \\"platform\\": \\"github\\",\\n    \\"account\\": {\\n      \\"name\\": \\"your_username\\",\\n      \\"displayName\\": \\"your_displayname\\",\\n      \\"id\\": \\"1\\",\\n      \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n      \\"uri\\": \\"https://gitlab.com\\"\\n    },\\n    \\"gitlabConfig\\": {\\n      \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n      \\"token\\": \\"your-token\\"\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"installation\\": {\\n      \\"stage\\": \\"finished\\",\\n      \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n      \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n    }\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '创建身份绑定',
      'description' => '使用注意事项：

- GitHub、Gitee、Codeup：使用OAuth授权，需要您创建Connection实体后，点击status中的授权链接完成身份绑定
- GitLab：使用私人令牌，在创建Connection实体的同时完成身份绑定

><notice>一个“阿里云主账号”不能重复绑定同一个“代码托管平台账号”
（即对于一个“代码托管平台账号”，至多存在一个已完成绑定的Connection实体）></notice>',
    ),
    'DeleteConnection' => 
    array (
      'summary' => '删除一个身份绑定。',
      'path' => '/2023-07-14/connections/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
        1 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '若存在其他Repository实体关联了该Connection，则无法直接删除；指定force=true后可以强制删除Connection(但不级联删除Repository)',
            'description' => '是否强制删除。若存在仓库绑定实体（Repository）关联了该身份绑定（Connection），则无法直接删除；您能够通过强制删除的方式删除该身份绑定

><notice>删除身份绑定（Connection）时，不会级联删除关联的仓库绑定（Repository）></notice>',
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
            'title' => 'Schema of Response',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A5152937-1C8A-5260-90FA-520CEF028D2D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"A5152937-1C8A-5260-90FA-520CEF028D2D\\"\\n}","type":"json"}]',
      'title' => '删除身份绑定',
    ),
    'ListConnections' => 
    array (
      'summary' => '批量查询满足条件的身份绑定。',
      'path' => '/2023-07-14/connections',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'type' => 'string',
              'required' => false,
              'example' => 'platform=github
',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码，默认为1。页码从1开始',
            'description' => '当前页码，默认为1。页码从1开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，默认为100。取值范围1~100',
            'description' => '每页大小，默认为100。取值范围1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'type' => 'string',
            'required' => false,
            'example' => 'auto-',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '查询的分页结果',
            'description' => '查询的分页结果',
            'type' => 'object',
            'properties' => 
            array (
              'pageNumber' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码，默认为1。页码从1开始',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'title' => '每页大小',
                'description' => '每页大小，默认为100。取值范围1~100',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'totalCount' => 
              array (
                'title' => '查询到的结果数量',
                'description' => '查询到的结果数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'data' => 
              array (
                'title' => '查询的资源实体列表',
                'description' => '查询的资源实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '查询的一个满足条件的身份绑定实体',
                  'description' => '查询的一个满足条件的身份绑定实体',
                  '$ref' => '#/components/schemas/Connection',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 100,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"kind\\": \\"Connection\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-connection\\",\\n      \\"spec\\": {\\n        \\"platform\\": \\"github\\",\\n        \\"account\\": {\\n          \\"name\\": \\"your_username\\",\\n          \\"displayName\\": \\"your_displayname\\",\\n          \\"id\\": \\"1\\",\\n          \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n          \\"uri\\": \\"https://gitlab.com\\"\\n        },\\n        \\"gitlabConfig\\": {\\n          \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n          \\"token\\": \\"your-token\\"\\n        }\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"key=value\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"description\\": \\"test-description\\",\\n      \\"status\\": {\\n        \\"installation\\": {\\n          \\"stage\\": \\"finished\\",\\n          \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n          \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n        }\\n      },\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询身份绑定',
    ),
    'GetConnection' => 
    array (
      'summary' => '查询一个身份绑定。',
      'path' => '/2023-07-14/connections/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '查询的身份绑定实体',
            '$ref' => '#/components/schemas/Connection',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Connection\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-connection\\",\\n  \\"spec\\": {\\n    \\"platform\\": \\"github\\",\\n    \\"account\\": {\\n      \\"name\\": \\"your_username\\",\\n      \\"displayName\\": \\"your_displayname\\",\\n      \\"id\\": \\"1\\",\\n      \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n      \\"uri\\": \\"https://gitlab.com\\"\\n    },\\n    \\"gitlabConfig\\": {\\n      \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n      \\"token\\": \\"your-token\\"\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"installation\\": {\\n      \\"stage\\": \\"finished\\",\\n      \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n      \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n    }\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '查询身份绑定',
    ),
    'RefreshConnection' => 
    array (
      'summary' => '刷新身份绑定。检查并按需刷新身份绑定中的凭证信息和代码托管平台账号信息，若刷新失败，则将状态转换为不可用。',
      'path' => '/2023-07-14/connections/{name}/refresh',
      'methods' => 
      array (
        0 => 'patch',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '成功刷新后的身份绑定实体',
            '$ref' => '#/components/schemas/Connection',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Connection\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-connection\\",\\n  \\"spec\\": {\\n    \\"platform\\": \\"github\\",\\n    \\"account\\": {\\n      \\"name\\": \\"your_username\\",\\n      \\"displayName\\": \\"your_displayname\\",\\n      \\"id\\": \\"1\\",\\n      \\"avatar\\": \\"https://gitee.com/assets/no_portrait.png\\",\\n      \\"uri\\": \\"https://gitlab.com\\"\\n    },\\n    \\"gitlabConfig\\": {\\n      \\"uri\\": \\"http://gitlab.c16194660f14898a0810408171302ac.cn-shanghai.alicontainer.com/\\",\\n      \\"token\\": \\"your-token\\"\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"status\\": {\\n    \\"installation\\": {\\n      \\"stage\\": \\"finished\\",\\n      \\"message\\": \\"Please click \'actionUri\' to complete the OAuth authorization process\\",\\n      \\"actionUri\\": \\"https://github.com/login/oauth/authorize?client_id=86059a1b2bb20d3e5fc3&scope=repo,repo:status,delete_repo\\"\\n    }\\n  },\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '刷新身份绑定',
    ),
    'CreateRepository' => 
    array (
      'summary' => '创建一个仓库绑定。将阿里云主账号与一个第三方代码托管平台（GitHub、Gitee、Codeup、...）的代码仓库建立关联。',
      'path' => '/2023-07-14/repositories',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '计划创建的仓库绑定实体',
            'required' => false,
            '$ref' => '#/components/schemas/Repository',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '成功创建的仓库绑定实体',
            '$ref' => '#/components/schemas/Repository',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Repository\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-repository\\",\\n  \\"spec\\": {\\n    \\"connectionName\\": \\"awesome-connection\\",\\n    \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n    \\"platform\\": \\"github\\",\\n    \\"id\\": 312649,\\n    \\"owner\\": \\"my-org-name\\",\\n    \\"displayName\\": \\"my-repo-name\\",\\n    \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '创建仓库绑定',
    ),
    'DeleteRepository' => 
    array (
      'summary' => '删除一个仓库绑定实体。',
      'path' => '/2023-07-14/repositories/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '1EEC6F09-A0DA-5A0E-9C3A-DA90B4346B9A',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"1EEC6F09-A0DA-5A0E-9C3A-DA90B4346B9A\\"\\n}","type":"json"}]',
      'title' => '删除仓库绑定',
      'description' => '1. 当仓库绑定实体关联了项目（Project）时，需要先删除项目，再删除仓库绑定',
    ),
    'ListRepositories' => 
    array (
      'summary' => '批量查询满足条件的仓库绑定。',
      'path' => '/2023-07-14/repositories',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'type' => 'string',
              'required' => false,
              'example' => 'cloneUrl=https://github.com/awesome-user/start-springboot-abcd.git',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码，默认为1。页码从1开始',
            'description' => '当前页码，默认为1。页码从1开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，默认为100。取值范围1~100',
            'description' => '每页大小，默认为100。取值范围1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'type' => 'string',
            'required' => false,
            'example' => 'repo-start-springboot',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '查询的分页结果',
            'description' => '查询的分页结果',
            'type' => 'object',
            'properties' => 
            array (
              'pageNumber' => 
              array (
                'title' => '当前页码',
                'description' => '当前页码，默认为1。页码从1开始',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'title' => '每页大小',
                'description' => '每页大小，默认为100。取值范围1~100',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'totalCount' => 
              array (
                'title' => '查询到的结果数量',
                'description' => '查询到的结果数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'data' => 
              array (
                'title' => '查询的资源实体列表',
                'description' => '查询的资源实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '查询的一个满足条件的仓库绑定实体',
                  'description' => '查询的一个满足条件的仓库绑定实体',
                  '$ref' => '#/components/schemas/Repository',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 100,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"kind\\": \\"Repository\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-repository\\",\\n      \\"spec\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"key=value\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"description\\": \\"test-description\\",\\n      \\"generation\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询仓库绑定',
    ),
    'GetRepository' => 
    array (
      'summary' => '查询一个仓库绑定实体。',
      'path' => '/2023-07-14/repositories/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '查询的仓库绑定实体',
            '$ref' => '#/components/schemas/Repository',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"kind\\": \\"Repository\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-repository\\",\\n  \\"spec\\": {\\n    \\"connectionName\\": \\"awesome-connection\\",\\n    \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n    \\"platform\\": \\"github\\",\\n    \\"id\\": 312649,\\n    \\"owner\\": \\"my-org-name\\",\\n    \\"displayName\\": \\"my-repo-name\\",\\n    \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"key=value\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"description\\": \\"test-description\\",\\n  \\"generation\\": 1\\n}","type":"json"}]',
      'title' => '查询仓库绑定',
    ),
    'CreatePipelineTrigger' => 
    array (
      'summary' => '创建流水线触发器，描述流水线触发的条件以及触发后的执行行为。',
      'path' => '/2023-07-14/pipelinetriggers',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            'required' => false,
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '创建流水线触发器',
    ),
    'DeletePipelineTrigger' => 
    array (
      'summary' => '删除流水线触发器，删除后将不会有关联的流水线执行历史产生。',
      'path' => '/2023-07-14/pipelinetriggers/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'A5152937-1C8A-5260-90FA-520CEF028D2D',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"A5152937-1C8A-5260-90FA-520CEF028D2D\\"\\n}","type":"json"}]',
      'title' => '删除流水线触发器',
    ),
    'UpdatePipelineTrigger' => 
    array (
      'summary' => '修改流水线触发器，您指定的可写字段将被更新，未指定或不可改的字段将保持不变。',
      'path' => '/2023-07-14/pipelinetriggers/{name}',
      'methods' => 
      array (
        0 => 'patch',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            'required' => false,
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '修改流水线触发器',
    ),
    'PutPipelineTrigger' => 
    array (
      'summary' => '使用新的流水线配置替换已有的流水线配置，不能修改的字段将被忽略。',
      'path' => '/2023-07-14/pipelinetriggers/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            'required' => false,
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
        1 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
        2 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '强制更新',
            'description' => '强制更新',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '替换流水线触发器',
      'description' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
    ),
    'ListPipelineTriggers' => 
    array (
      'summary' => '批量查询流水线触发器。',
      'path' => '/2023-07-14/pipelinetriggers',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'type' => 'string',
              'required' => false,
              'example' => 'label_key1=value1',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页码，默认为1。页码从1开始',
            'description' => '当前页码，默认为1。页码从1开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页大小，默认为100。取值范围1~100',
            'description' => '每页大小，默认为100。取值范围1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
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
              'pageNumber' => 
              array (
                'title' => '分页页码',
                'description' => '分页页码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'title' => '每页大小',
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'totalCount' => 
              array (
                'title' => '查询到的结果数量',
                'description' => '查询到的结果数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'data' => 
              array (
                'title' => '查询的资源实体列表',
                'description' => '查询的资源实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '流水线触发器',
                  'description' => '流水线触发器',
                  '$ref' => '#/components/schemas/PipelineTrigger',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"generation\\": 1,\\n      \\"description\\": \\"PipelineTrigger example.\\",\\n      \\"kind\\": \\"PipelineTrigger\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-pipeline-trigger\\",\\n      \\"spec\\": {\\n        \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n        \\"eventFilter\\": {\\n          \\"push\\": {\\n            \\"branch\\": \\"master\\",\\n            \\"tag\\": \\"prod-.*\\"\\n          },\\n          \\"pullRequest\\": {\\n            \\"sourceBranch\\": \\"feature-.*\\",\\n            \\"targetBranch\\": \\"master\\",\\n            \\"types\\": [\\n              \\"MERGE_REQUEST\\"\\n            ]\\n          }\\n        },\\n        \\"runPipeline\\": {\\n          \\"yamlFilePath\\": \\"\\",\\n          \\"yamlFileContent\\": \\"\\",\\n          \\"pipelineSpec\\": {\\n            \\"templateName\\": \\"my-pipeline-template\\",\\n            \\"context\\": {\\n              \\"data\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            },\\n            \\"templateSpec\\": {\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"tasks\\": [\\n                {\\n                  \\"name\\": \\"task-1\\",\\n                  \\"context\\": {\\n                    \\"data\\": {\\n                      \\"test\\": \\"test\\",\\n                      \\"test2\\": 1\\n                    }\\n                  },\\n                  \\"taskTemplate\\": \\"serverless-runner\\",\\n                  \\"runAfters\\": [\\n                    {\\n                      \\"name\\": \\"task-1\\"\\n                    }\\n                  ]\\n                }\\n              ],\\n              \\"contextSchema\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            }\\n          },\\n          \\"variables\\": [\\n            {\\n              \\"value\\": \\"object_value\\",\\n              \\"name\\": \\"object_key\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"value to the label key.\\"\\n      },\\n      \\"resourceVersion\\": 1\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询流水线触发器',
    ),
    'GetPipelineTrigger' => 
    array (
      'summary' => '查询流水线触发器。',
      'path' => '/2023-07-14/pipelinetriggers/{name}',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线触发器',
            'description' => '流水线触发器',
            '$ref' => '#/components/schemas/PipelineTrigger',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTrigger example.\\",\\n  \\"kind\\": \\"PipelineTrigger\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"spec\\": {\\n    \\"roleArn\\": \\"acs:ram::1431999****8149:role/aliyundevsdefaultrole\\",\\n    \\"eventFilter\\": {\\n      \\"push\\": {\\n        \\"branch\\": \\"master\\",\\n        \\"tag\\": \\"prod-.*\\"\\n      },\\n      \\"pullRequest\\": {\\n        \\"sourceBranch\\": \\"feature-.*\\",\\n        \\"targetBranch\\": \\"master\\",\\n        \\"types\\": [\\n          \\"MERGE_REQUEST\\"\\n        ]\\n      }\\n    },\\n    \\"runPipeline\\": {\\n      \\"yamlFilePath\\": \\"\\",\\n      \\"yamlFileContent\\": \\"\\",\\n      \\"pipelineSpec\\": {\\n        \\"templateName\\": \\"my-pipeline-template\\",\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"templateSpec\\": {\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"tasks\\": [\\n            {\\n              \\"name\\": \\"task-1\\",\\n              \\"context\\": {\\n                \\"data\\": {\\n                  \\"test\\": \\"test\\",\\n                  \\"test2\\": 1\\n                }\\n              },\\n              \\"taskTemplate\\": \\"serverless-runner\\",\\n              \\"runAfters\\": [\\n                {\\n                  \\"name\\": \\"task-1\\"\\n                }\\n              ]\\n            }\\n          ],\\n          \\"contextSchema\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        }\\n      },\\n      \\"variables\\": [\\n        {\\n          \\"value\\": \\"object_value\\",\\n          \\"name\\": \\"object_key\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '查询流水线触发器',
    ),
    'CreatePipelineTriggerEvent' => 
    array (
      'summary' => '尝试提交流水线触发事件，不满足流水线触发器配置条件的触发事件将不会触发流水线运行。',
      'path' => '/2023-07-14/pipelinetriggerevents',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '流水线触发历史',
            'description' => '流水线触发历史',
            'required' => false,
            '$ref' => '#/components/schemas/PipelineTriggerEvent',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线触发历史',
            'description' => '流水线触发历史',
            '$ref' => '#/components/schemas/PipelineTriggerEvent',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTriggerEvent example.\\",\\n  \\"kind\\": \\"PipelineTriggerEvent\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"status\\": {\\n    \\"status\\": \\"Skipped,Fired,Running,Failed,Success\\",\\n    \\"firedPipelineName\\": \\"my-pipeline\\",\\n    \\"releaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"errorMessage\\": \\"failed to create and start pipeline, error=message\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"spec\\": {\\n    \\"payload\\": {\\n      \\"github\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitlab\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"codeup\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitee\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"manual\\": {\\n        \\"commitID\\": \\"\\",\\n        \\"branch\\": \\"\\",\\n        \\"tag\\": \\"\\",\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"triggerName\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '提交流水线触发事件',
    ),
    'DeletePipelineTriggerEvent' => 
    array (
      'summary' => '删除流水线触发历史。',
      'path' => '/2023-07-14/pipelinetriggerevents/{name}',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
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
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => 'BD835E20-EA35-5EE9-A38E-15F9E4AC0B73',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"BD835E20-EA35-5EE9-A38E-15F9E4AC0B73\\"\\n}","type":"json"}]',
      'title' => '删除流水线触发历史',
    ),
    'ListPipelineTriggerEvents' => 
    array (
      'summary' => '批量查询流水线触发历史。',
      'path' => '/2023-07-14/pipelinetriggerevents',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '只返回含有这些label的对象',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'label表达式，例如: appName=my-app',
              'description' => 'labelSelector中的一条筛选条件，格式为${key}=${value}',
              'type' => 'string',
              'required' => false,
              'example' => 'label_key1=value1',
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'pageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页页码',
            'description' => '当前页码，默认为1。页码从1开始',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'pageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '分页大小',
            'description' => '每页大小，默认为100。取值范围1~100',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '关键字',
            'description' => '模糊搜索关键词。仅支持实体的name字段，且大小写不敏感',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结果',
            'description' => '返回结果',
            'type' => 'object',
            'properties' => 
            array (
              'pageNumber' => 
              array (
                'title' => '分页页码',
                'description' => '分页页码',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'pageSize' => 
              array (
                'title' => '分页大小',
                'description' => '每页大小',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'totalCount' => 
              array (
                'title' => '总数',
                'description' => '查询到的结果数量',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'data' => 
              array (
                'title' => '返回结果列表',
                'description' => '查询的资源实体列表',
                'type' => 'array',
                'items' => 
                array (
                  'title' => '流水线触发历史',
                  'description' => '流水线触发历史',
                  '$ref' => '#/components/schemas/PipelineTriggerEvent',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"pageNumber\\": 1,\\n  \\"pageSize\\": 10,\\n  \\"totalCount\\": 1,\\n  \\"data\\": [\\n    {\\n      \\"uid\\": \\"1455541096***548\\",\\n      \\"generation\\": 1,\\n      \\"description\\": \\"PipelineTriggerEvent example.\\",\\n      \\"kind\\": \\"PipelineTriggerEvent\\",\\n      \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"name\\": \\"my-pipeline-trigger\\",\\n      \\"status\\": {\\n        \\"status\\": \\"Skipped,Fired,Running,Failed,Success\\",\\n        \\"firedPipelineName\\": \\"my-pipeline\\",\\n        \\"releaseDetail\\": {\\n          \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n          \\"bizStatus\\": \\"Running\\",\\n          \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n          \\"templateConfigSnapshot\\": {\\n            \\"templateName\\": \\"start-springboot\\",\\n            \\"parameters\\": {\\n              \\"region\\": \\"cn-hangzhou\\"\\n            }\\n          },\\n          \\"releaseOutputs\\": {\\n            \\"framework\\": {\\n              \\"region\\": \\"cn-hangzhou\\",\\n              \\"service\\": {\\n                \\"serviceName\\": \\"web-framework\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n                \\"role\\": \\"\\",\\n                \\"logConfig\\": {\\n                  \\"project\\": \\"\\",\\n                  \\"logstore\\": \\"\\",\\n                  \\"enableRequestMetrics\\": false,\\n                  \\"enableInstanceMetrics\\": false,\\n                  \\"logBeginRule\\": \\"None\\"\\n                },\\n                \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n                \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                \\"vpcConfig\\": {\\n                  \\"vpcId\\": \\"\\",\\n                  \\"vSwitchIds\\": [],\\n                  \\"securityGroupId\\": \\"\\",\\n                  \\"role\\": \\"\\"\\n                },\\n                \\"internetAccess\\": true,\\n                \\"nasConfig\\": {\\n                  \\"userId\\": -1,\\n                  \\"groupId\\": -1,\\n                  \\"mountPoints\\": []\\n                },\\n                \\"tracingConfig\\": {},\\n                \\"name\\": \\"web-framework\\"\\n              },\\n              \\"function\\": {\\n                \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n                \\"functionName\\": \\"todolist\\",\\n                \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n                \\"runtime\\": \\"nodejs12\\",\\n                \\"handler\\": \\"index.handler\\",\\n                \\"timeout\\": 60,\\n                \\"initializer\\": \\"\\",\\n                \\"initializationTimeout\\": 3,\\n                \\"codeSize\\": 1757093,\\n                \\"codeChecksum\\": \\"7185648203525194222\\",\\n                \\"memorySize\\": 256,\\n                \\"environmentVariables\\": {},\\n                \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n                \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n                \\"instanceConcurrency\\": 1,\\n                \\"instanceType\\": \\"e1\\",\\n                \\"instanceLifecycleConfig\\": {\\n                  \\"preFreeze\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  },\\n                  \\"preStop\\": {\\n                    \\"handler\\": \\"\\",\\n                    \\"timeout\\": 3\\n                  }\\n                },\\n                \\"name\\": \\"todolist\\"\\n              },\\n              \\"triggers\\": [\\n                {\\n                  \\"triggerName\\": \\"httpTrigger\\",\\n                  \\"description\\": \\"\\",\\n                  \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n                  \\"triggerType\\": \\"http\\",\\n                  \\"triggerConfig\\": {\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ],\\n                    \\"authType\\": \\"anonymous\\"\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n                  \\"name\\": \\"httpTrigger\\"\\n                }\\n              ],\\n              \\"customDomains\\": [\\n                {\\n                  \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n                  \\"accountId\\": \\"1835799444022432\\",\\n                  \\"protocol\\": \\"HTTP\\",\\n                  \\"certConfig\\": {},\\n                  \\"tlsConfig\\": {},\\n                  \\"apiVersion\\": \\"2016-08-15\\",\\n                  \\"routeConfig\\": {\\n                    \\"routes\\": [\\n                      {\\n                        \\"path\\": \\"/*\\",\\n                        \\"serviceName\\": \\"web-framework\\",\\n                        \\"functionName\\": \\"todolist\\",\\n                        \\"methods\\": [\\n                          \\"GET\\",\\n                          \\"POST\\"\\n                        ]\\n                      }\\n                    ]\\n                  },\\n                  \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n                  \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n                }\\n              ]\\n            }\\n          },\\n          \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n          \\"repositorySnapshot\\": {\\n            \\"connectionName\\": \\"awesome-connection\\",\\n            \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n            \\"platform\\": \\"github\\",\\n            \\"id\\": 312649,\\n            \\"owner\\": \\"my-org-name\\",\\n            \\"displayName\\": \\"my-repo-name\\",\\n            \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n          },\\n          \\"gitEventSnapshot\\": {\\n            \\"branch\\": \\"main\\",\\n            \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n            \\"tag\\": \\"1.0\\"\\n          },\\n          \\"message\\": \\"Triggered manually.\\",\\n          \\"latestTaskExecError\\": {\\n            \\"title\\": \\"权限不足错误\\",\\n            \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n            \\"code\\": \\"AccessDenied\\",\\n            \\"requestId\\": \\"1-26d1287xxxxx\\",\\n            \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n          },\\n          \\"envName\\": \\"dev\\"\\n        },\\n        \\"errorMessage\\": \\"failed to create and start pipeline, error=message\\"\\n      },\\n      \\"labels\\": {\\n        \\"key\\": \\"value to the label key.\\"\\n      },\\n      \\"resourceVersion\\": 1,\\n      \\"spec\\": {\\n        \\"payload\\": {\\n          \\"github\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"gitlab\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"codeup\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"gitee\\": {\\n            \\"originalPayload\\": \\"\\"\\n          },\\n          \\"manual\\": {\\n            \\"commitID\\": \\"\\",\\n            \\"branch\\": \\"\\",\\n            \\"tag\\": \\"\\",\\n            \\"templateConfig\\": {\\n              \\"templateName\\": \\"start-springboot\\",\\n              \\"parameters\\": {\\n                \\"region\\": \\"cn-hangzhou\\"\\n              }\\n            }\\n          }\\n        },\\n        \\"triggerName\\": \\"\\"\\n      }\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量查询流水线触发历史',
    ),
    'GetPipelineTriggerEvent' => 
    array (
      'summary' => '查询流水线触发历史。',
      'path' => '/2023-07-14/pipelinetriggerevents/{name}',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线触发历史',
            'description' => '流水线触发历史',
            '$ref' => '#/components/schemas/PipelineTriggerEvent',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"PipelineTriggerEvent example.\\",\\n  \\"kind\\": \\"PipelineTriggerEvent\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline-trigger\\",\\n  \\"status\\": {\\n    \\"status\\": \\"Skipped,Fired,Running,Failed,Success\\",\\n    \\"firedPipelineName\\": \\"my-pipeline\\",\\n    \\"releaseDetail\\": {\\n      \\"pipelineTriggerEventName\\": \\"p-codeup-1714271977972-pa4w\\",\\n      \\"bizStatus\\": \\"Running\\",\\n      \\"pipelineName\\": \\"p-1704952599751-wUOczb\\",\\n      \\"templateConfigSnapshot\\": {\\n        \\"templateName\\": \\"start-springboot\\",\\n        \\"parameters\\": {\\n          \\"region\\": \\"cn-hangzhou\\"\\n        }\\n      },\\n      \\"releaseOutputs\\": {\\n        \\"framework\\": {\\n          \\"region\\": \\"cn-hangzhou\\",\\n          \\"service\\": {\\n            \\"serviceName\\": \\"web-framework\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Service\\",\\n            \\"role\\": \\"\\",\\n            \\"logConfig\\": {\\n              \\"project\\": \\"\\",\\n              \\"logstore\\": \\"\\",\\n              \\"enableRequestMetrics\\": false,\\n              \\"enableInstanceMetrics\\": false,\\n              \\"logBeginRule\\": \\"None\\"\\n            },\\n            \\"serviceId\\": \\"4c9d0e79-16b8-4951-a6b8-169d2037d217\\",\\n            \\"createdTime\\": \\"2021-12-07T09:24:08Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n            \\"vpcConfig\\": {\\n              \\"vpcId\\": \\"\\",\\n              \\"vSwitchIds\\": [],\\n              \\"securityGroupId\\": \\"\\",\\n              \\"role\\": \\"\\"\\n            },\\n            \\"internetAccess\\": true,\\n            \\"nasConfig\\": {\\n              \\"userId\\": -1,\\n              \\"groupId\\": -1,\\n              \\"mountPoints\\": []\\n            },\\n            \\"tracingConfig\\": {},\\n            \\"name\\": \\"web-framework\\"\\n          },\\n          \\"function\\": {\\n            \\"functionId\\": \\"e81904f0-24d0-45df-bb53-06da64d01395\\",\\n            \\"functionName\\": \\"todolist\\",\\n            \\"description\\": \\"Serverless Devs Web Framework Function\\",\\n            \\"runtime\\": \\"nodejs12\\",\\n            \\"handler\\": \\"index.handler\\",\\n            \\"timeout\\": 60,\\n            \\"initializer\\": \\"\\",\\n            \\"initializationTimeout\\": 3,\\n            \\"codeSize\\": 1757093,\\n            \\"codeChecksum\\": \\"7185648203525194222\\",\\n            \\"memorySize\\": 256,\\n            \\"environmentVariables\\": {},\\n            \\"createdTime\\": \\"2022-03-15T15:36:22Z\\",\\n            \\"lastModifiedTime\\": \\"2022-04-09T09:16:50Z\\",\\n            \\"instanceConcurrency\\": 1,\\n            \\"instanceType\\": \\"e1\\",\\n            \\"instanceLifecycleConfig\\": {\\n              \\"preFreeze\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              },\\n              \\"preStop\\": {\\n                \\"handler\\": \\"\\",\\n                \\"timeout\\": 3\\n              }\\n            },\\n            \\"name\\": \\"todolist\\"\\n          },\\n          \\"triggers\\": [\\n            {\\n              \\"triggerName\\": \\"httpTrigger\\",\\n              \\"description\\": \\"\\",\\n              \\"triggerId\\": \\"7f2373ce-df1a-4013-b4e5-899989d9b27e\\",\\n              \\"triggerType\\": \\"http\\",\\n              \\"triggerConfig\\": {\\n                \\"methods\\": [\\n                  \\"GET\\",\\n                  \\"POST\\"\\n                ],\\n                \\"authType\\": \\"anonymous\\"\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:23Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:16:51Z\\",\\n              \\"name\\": \\"httpTrigger\\"\\n            }\\n          ],\\n          \\"customDomains\\": [\\n            {\\n              \\"domainName\\": \\"todolist.web-framework.1835799444022432.cn-hangzhou.fc.devsapp.net\\",\\n              \\"accountId\\": \\"1835799444022432\\",\\n              \\"protocol\\": \\"HTTP\\",\\n              \\"certConfig\\": {},\\n              \\"tlsConfig\\": {},\\n              \\"apiVersion\\": \\"2016-08-15\\",\\n              \\"routeConfig\\": {\\n                \\"routes\\": [\\n                  {\\n                    \\"path\\": \\"/*\\",\\n                    \\"serviceName\\": \\"web-framework\\",\\n                    \\"functionName\\": \\"todolist\\",\\n                    \\"methods\\": [\\n                      \\"GET\\",\\n                      \\"POST\\"\\n                    ]\\n                  }\\n                ]\\n              },\\n              \\"createdTime\\": \\"2022-03-15T15:36:28Z\\",\\n              \\"lastModifiedTime\\": \\"2022-04-09T09:17:00Z\\"\\n            }\\n          ]\\n        }\\n      },\\n      \\"finishedTime\\": \\"2021-11-19T09:34:38Z\\",\\n      \\"repositorySnapshot\\": {\\n        \\"connectionName\\": \\"awesome-connection\\",\\n        \\"cloneUrl\\": \\"https://github.com/DDofDD/start-springboot-lfgy.git\\",\\n        \\"platform\\": \\"github\\",\\n        \\"id\\": 312649,\\n        \\"owner\\": \\"my-org-name\\",\\n        \\"displayName\\": \\"my-repo-name\\",\\n        \\"webUrl\\": \\"https://github.com/my-org-name/my-repo-name\\"\\n      },\\n      \\"gitEventSnapshot\\": {\\n        \\"branch\\": \\"main\\",\\n        \\"commitID\\": \\"12721ec262d03a93809ba2bbc717963cb298ceca\\",\\n        \\"tag\\": \\"1.0\\"\\n      },\\n      \\"message\\": \\"Triggered manually.\\",\\n      \\"latestTaskExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      },\\n      \\"envName\\": \\"dev\\"\\n    },\\n    \\"errorMessage\\": \\"failed to create and start pipeline, error=message\\"\\n  },\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1,\\n  \\"spec\\": {\\n    \\"payload\\": {\\n      \\"github\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitlab\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"codeup\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"gitee\\": {\\n        \\"originalPayload\\": \\"\\"\\n      },\\n      \\"manual\\": {\\n        \\"commitID\\": \\"\\",\\n        \\"branch\\": \\"\\",\\n        \\"tag\\": \\"\\",\\n        \\"templateConfig\\": {\\n          \\"templateName\\": \\"start-springboot\\",\\n          \\"parameters\\": {\\n            \\"region\\": \\"cn-hangzhou\\"\\n          }\\n        }\\n      }\\n    },\\n    \\"triggerName\\": \\"\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询流水线触发历史',
    ),
    'CreatePipeline' => 
    array (
      'summary' => '创建流水线执行。流水线将被异步地执行，并按照配置，产生具体的流水线任务。',
      'path' => '/2023-07-14/pipelines',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '创建的流水线执行',
            'description' => '创建的流水线执行',
            'required' => false,
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '创建的流水线执行',
            'description' => '创建的流水线执行',
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '创建流水线执行',
    ),
    'ListPipelines' => 
    array (
      'summary' => '批量查询流水线执行。请尽可能提供更多的查询条件以缩小查询范围。',
      'path' => '/2023-07-14/pipelines',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '只返回含有这些label的对象',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'label表达式，例如: appName=my-app',
              'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
              'type' => 'string',
              'required' => false,
              'example' => 'label_key1=value1',
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
            'title' => '流水线执行列表',
            'description' => '流水线执行列表',
            'type' => 'array',
            'items' => 
            array (
              'title' => '流水线执行',
              'description' => '流水线执行',
              '$ref' => '#/components/schemas/Pipeline',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"spec\\": {\\n      \\"templateName\\": \\"my-pipeline-template\\",\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"templateSpec\\": {\\n        \\"context\\": {\\n          \\"data\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"tasks\\": [\\n          {\\n            \\"name\\": \\"task-1\\",\\n            \\"context\\": {\\n              \\"data\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            },\\n            \\"taskTemplate\\": \\"serverless-runner\\",\\n            \\"runAfters\\": [\\n              {\\n                \\"name\\": \\"task-1\\"\\n              }\\n            ]\\n          }\\n        ],\\n        \\"contextSchema\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    },\\n    \\"status\\": {\\n      \\"phase\\": \\"Success\\",\\n      \\"latestExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      }\\n    },\\n    \\"uid\\": \\"1455541096***548\\",\\n    \\"generation\\": 1,\\n    \\"description\\": \\"Pipeline example.\\",\\n    \\"kind\\": \\"Pipeline\\",\\n    \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n    \\"name\\": \\"my-pipeline\\",\\n    \\"labels\\": {\\n      \\"key\\": \\"value to the label key.\\"\\n    },\\n    \\"resourceVersion\\": 1\\n  }\\n]","type":"json"}]',
      'title' => '批量查询流水线执行',
    ),
    'GetPipeline' => 
    array (
      'summary' => '查询流水线执行。',
      'path' => '/2023-07-14/pipelines/{name}',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线执行',
            'description' => '流水线执行',
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '查询流水线执行',
    ),
    'StartPipeline' => 
    array (
      'summary' => '启动流水线执行。',
      'path' => '/2023-07-14/pipelines/{name}/start',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线执行',
            'description' => '流水线执行',
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '启动流水线执行',
    ),
    'CancelPipeline' => 
    array (
      'summary' => '取消流水线执行。流水线以及任务将被尽快取消执行。',
      'path' => '/2023-07-14/pipelines/{name}/cancel',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线执行',
            'description' => '流水线执行',
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '取消流水线执行',
    ),
    'PutPipelineStatus' => 
    array (
      'summary' => '替换流水线执行状态。',
      'path' => '/2023-07-14/pipelines/{name}/status',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '流水线执行',
            'description' => '流水线执行',
            'required' => false,
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
        2 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '强制更新',
            'description' => '强制更新',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线执行',
            'description' => '流水线执行',
            '$ref' => '#/components/schemas/Pipeline',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-pipeline-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    },\\n    \\"templateSpec\\": {\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"tasks\\": [\\n        {\\n          \\"name\\": \\"task-1\\",\\n          \\"context\\": {\\n            \\"data\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"taskTemplate\\": \\"serverless-runner\\",\\n          \\"runAfters\\": [\\n            {\\n              \\"name\\": \\"task-1\\"\\n            }\\n          ]\\n        }\\n      ],\\n      \\"contextSchema\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"phase\\": \\"Success\\",\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Pipeline example.\\",\\n  \\"kind\\": \\"Pipeline\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-pipeline\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '替换流水线执行状态',
      'description' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
    ),
    'CreateTask' => 
    array (
      'summary' => '创建流水线任务执行。',
      'path' => '/2023-07-14/tasks',
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
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            'required' => false,
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '创建流水线任务执行',
    ),
    'ListTasks' => 
    array (
      'summary' => '批量查询流水线任务执行。',
      'path' => '/2023-07-14/tasks',
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
      'consumes' => 
      array (
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'labelSelector',
          'in' => 'query',
          'style' => 'simple',
          'schema' => 
          array (
            'title' => '只返回含有这些label的对象',
            'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
            'type' => 'array',
            'items' => 
            array (
              'title' => 'label表达式，例如: appName=my-app',
              'description' => '利用实体的labels字段进行筛选。精确匹配labelSelector数组中的所有条件，不同条件之间是“且”的关系',
              'type' => 'string',
              'required' => false,
              'example' => 'label_key1=value1',
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
            'title' => '流水线任务列表',
            'description' => '流水线任务列表',
            'type' => 'array',
            'items' => 
            array (
              'title' => '流水线任务',
              'description' => '流水线任务',
              '$ref' => '#/components/schemas/Task',
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"[\\n  {\\n    \\"spec\\": {\\n      \\"templateName\\": \\"my-task-template\\",\\n      \\"context\\": {\\n        \\"data\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    },\\n    \\"status\\": {\\n      \\"statusGeneration\\": 123,\\n      \\"phase\\": \\"Success\\",\\n      \\"executionDetails\\": [\\n        \\"step1: start task.\\"\\n      ],\\n      \\"invocations\\": [\\n        {\\n          \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n          \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n          \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n          \\"status\\": \\"success\\",\\n          \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n          \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n          \\"slsProject\\": \\"my-sls-project\\",\\n          \\"slsLogStore\\": \\"my-sls-logstore\\"\\n        }\\n      ],\\n      \\"latestExecError\\": {\\n        \\"title\\": \\"权限不足错误\\",\\n        \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n        \\"code\\": \\"AccessDenied\\",\\n        \\"requestId\\": \\"1-26d1287xxxxx\\",\\n        \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n      }\\n    },\\n    \\"uid\\": \\"1455541096***548\\",\\n    \\"generation\\": 1,\\n    \\"description\\": \\"Task example.\\",\\n    \\"kind\\": \\"Task\\",\\n    \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n    \\"name\\": \\"my-task\\",\\n    \\"labels\\": {\\n      \\"key\\": \\"value to the label key.\\"\\n    },\\n    \\"resourceVersion\\": 1\\n  }\\n]","type":"json"}]',
      'title' => '批量查询流水线任务执行',
    ),
    'GetTask' => 
    array (
      'summary' => '查询流水线任务执行。',
      'path' => '/2023-07-14/tasks/{name}',
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
      'produces' => 
      array (
        0 => 'application/json',
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
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '查询流水线任务执行',
    ),
    'StartTask' => 
    array (
      'summary' => '启动流水线任务执行。',
      'path' => '/2023-07-14/tasks/{name}/start',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '启动流水线任务执行',
    ),
    'RetryTask' => 
    array (
      'summary' => '重试流水线任务执行。',
      'path' => '/2023-07-14/tasks/{name}/retry',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '重试流水线任务执行',
    ),
    'ResumeTask' => 
    array (
      'summary' => '恢复流水线任务执行。',
      'path' => '/2023-07-14/tasks/{name}/resume',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '恢复流水线任务执行',
    ),
    'CancelTask' => 
    array (
      'summary' => '取消流水线任务执行。',
      'path' => '/2023-07-14/tasks/{name}/cancel',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '取消流水线任务执行',
    ),
    'PutTaskStatus' => 
    array (
      'summary' => '替换流水线任务执行状态。',
      'path' => '/2023-07-14/tasks/{name}/status',
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
      ),
      'consumes' => 
      array (
        0 => 'application/json',
      ),
      'produces' => 
      array (
        0 => 'application/json',
      ),
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'name',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '对象名称',
            'description' => '对象名称',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-name',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            'required' => false,
            '$ref' => '#/components/schemas/Task',
          ),
        ),
        2 => 
        array (
          'name' => 'force',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '强制更新',
            'description' => '强制更新',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '流水线任务',
            'description' => '流水线任务',
            '$ref' => '#/components/schemas/Task',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"spec\\": {\\n    \\"templateName\\": \\"my-task-template\\",\\n    \\"context\\": {\\n      \\"data\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"status\\": {\\n    \\"statusGeneration\\": 123,\\n    \\"phase\\": \\"Success\\",\\n    \\"executionDetails\\": [\\n      \\"step1: start task.\\"\\n    ],\\n    \\"invocations\\": [\\n      {\\n        \\"invocationID\\": \\"E099843B-10A2-4936-9964-4E0EE263D564\\",\\n        \\"requestID\\": \\"1B3058B1-F1C9-457C-B95C-2C250A4B3118\\",\\n        \\"invocationTarget\\": \\"acs:fc:cn-hangzhou:143xxxx:services/xxx.LATEST/functions/xxx\\",\\n        \\"status\\": \\"success\\",\\n        \\"output\\": \\"{\\\\\\"key1\\\\\\":\\\\\\"value1\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"value2\\\\\\"}\\",\\n        \\"instanceID\\": \\"c-nkj8shz7xxxx\\",\\n        \\"slsProject\\": \\"my-sls-project\\",\\n        \\"slsLogStore\\": \\"my-sls-logstore\\"\\n      }\\n    ],\\n    \\"latestExecError\\": {\\n      \\"title\\": \\"权限不足错误\\",\\n      \\"message\\": \\"部署服务[_appcenter-xxx]失败，权限不足\\",\\n      \\"code\\": \\"AccessDenied\\",\\n      \\"requestId\\": \\"1-26d1287xxxxx\\",\\n      \\"extraInfo\\": \\"部署辅助函数权限不足，需要添加额外的权限以解决问题。https://help.aliyun.com\\"\\n    }\\n  },\\n  \\"uid\\": \\"1455541096***548\\",\\n  \\"generation\\": 1,\\n  \\"description\\": \\"Task example.\\",\\n  \\"kind\\": \\"Task\\",\\n  \\"createdTime\\": \\"2021-11-19T09:34:38Z\\",\\n  \\"name\\": \\"my-task\\",\\n  \\"labels\\": {\\n    \\"key\\": \\"value to the label key.\\"\\n  },\\n  \\"resourceVersion\\": 1\\n}","type":"json"}]',
      'title' => '替换流水线任务执行状态',
      'description' => 'API提供了乐观锁机制，在不设置强制更新的场景下，需要基于最新的流水线触发器配置修改后提交，否则将触发提交冲突异常。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'devs.cn-hangzhou.aliyuncs.com',
    ),
  ),
);
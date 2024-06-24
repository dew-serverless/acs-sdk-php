<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'emr-serverless-spark',
    'version' => '2023-08-08',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 192452,
      'title' => 'SQL Compute管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'TerminateSqlStatement',
        1 => 'CreateSqlStatement',
        2 => 'GetSqlStatement',
        3 => 'ListSessionClusters',
      ),
    ),
    1 => 
    array (
      'id' => 192431,
      'title' => '工作空间管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListWorkspaces',
        1 => 'ListWorkspaceQueues',
      ),
    ),
    2 => 
    array (
      'id' => 192428,
      'title' => 'Spark版本管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListReleaseVersions',
      ),
    ),
    3 => 
    array (
      'id' => 192430,
      'title' => 'Spark任务管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CancelJobRun',
        1 => 'ListJobRuns',
        2 => 'GetJobRun',
        3 => 'StartJobRun',
      ),
    ),
    4 => 
    array (
      'id' => 192589,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GrantRoleToUsers',
        1 => 'AddMembers',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'Artifact' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'gmtModified' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'required' => true,
          ),
          'creator' => 
          array (
            'title' => '创建者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'gmtCreated' => 
          array (
            'title' => '最后更新时间',
            'type' => 'string',
            'required' => true,
          ),
          'modifier' => 
          array (
            'title' => '最后更新者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'bizId' => 
          array (
            'title' => '资源文件业务id',
            'type' => 'string',
            'required' => true,
          ),
          'name' => 
          array (
            'title' => '资源文件名称',
            'type' => 'string',
            'required' => true,
          ),
          'location' => 
          array (
            'title' => '资源文件地址',
            'type' => 'string',
            'required' => true,
          ),
          'credential' => 
          array (
            'title' => '资源文件访问密钥',
            '$ref' => '#/components/schemas/Credential',
          ),
        ),
      ),
      'Category' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'type' => 
          array (
            'title' => '目录类型',
            'type' => 'string',
            'required' => true,
            'default' => 'TASK',
            'enum' => 
            array (
              0 => 'TASK',
              1 => 'ARTIFACT',
            ),
          ),
          'gmtModified' => 
          array (
            'title' => '最后更新时间',
            'type' => 'string',
            'required' => true,
          ),
          'creator' => 
          array (
            'title' => '创建者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'gmtCreated' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'required' => true,
          ),
          'modifier' => 
          array (
            'title' => '最后更新者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'bizId' => 
          array (
            'title' => '目录业务id',
            'type' => 'string',
            'required' => true,
          ),
          'name' => 
          array (
            'title' => '目录名臣',
            'type' => 'string',
            'required' => true,
            'maxLength' => 64,
            'minLength' => 1,
          ),
          'parentBizId' => 
          array (
            'title' => '父目录业务id',
            'type' => 'string',
          ),
        ),
      ),
      'Configuration' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'configFileName' => 
          array (
            'title' => '配置文件名称',
            'type' => 'string',
          ),
          'configItemKey' => 
          array (
            'title' => '配置项名称',
            'type' => 'string',
          ),
          'configItemValue' => 
          array (
            'title' => '配置项值',
            'type' => 'string',
          ),
        ),
      ),
      'ConfigurationOverrides' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'configurations' => 
          array (
            'title' => 'configurations',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'configFileName' => 
                array (
                  'title' => 'configFileName',
                  'type' => 'string',
                ),
                'configItemKey' => 
                array (
                  'title' => 'configItemKey',
                  'type' => 'string',
                ),
                'configItemValue' => 
                array (
                  'title' => 'configItemValue',
                  'type' => 'string',
                ),
              ),
            ),
          ),
        ),
      ),
      'Credential' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'securityToken' => 
          array (
            'title' => 'sts token',
            'type' => 'string',
            'required' => true,
          ),
          'policy' => 
          array (
            'title' => 'oss访问策略',
            'type' => 'string',
            'required' => true,
          ),
          'expire' => 
          array (
            'title' => '超时时间',
            'type' => 'string',
            'required' => true,
          ),
          'accessId' => 
          array (
            'title' => 'sts ak',
            'type' => 'string',
            'required' => true,
          ),
          'signature' => 
          array (
            'title' => 'oss访问签名',
            'type' => 'string',
            'required' => true,
          ),
          'host' => 
          array (
            'title' => 'oss域名',
            'type' => 'string',
            'required' => true,
          ),
          'dir' => 
          array (
            'title' => 'oss路径',
            'type' => 'string',
            'required' => true,
          ),
        ),
      ),
      'JobDriver' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'jobDriver',
        'type' => 'object',
        'properties' => 
        array (
          'sparkSubmit' => 
          array (
            'title' => 'sparkSubmit',
            'type' => 'object',
            'properties' => 
            array (
              'entryPoint' => 
              array (
                'title' => 'entryPoint',
                'type' => 'string',
              ),
              'entryPointArguments' => 
              array (
                'title' => 'entryPointArguments',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'sparkSubmitParameters' => 
              array (
                'title' => 'sparkSubmitParameters',
                'type' => 'string',
              ),
            ),
          ),
        ),
      ),
      'PrincipalAction' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'PrincipalAction',
        'type' => 'object',
        'properties' => 
        array (
          'principalArn' => 
          array (
            'title' => '主体Arn',
            'type' => 'string',
            'example' => 'acs:emr::workspaceId:user/237593691541622267',
          ),
          'actionArn' => 
          array (
            'title' => '行为Arn',
            'type' => 'string',
            'example' => 'acs:emr::workspaceId:action/create_queue',
          ),
        ),
      ),
      'ReleaseVersionImage' => 
      array (
        'title' => 'A short description of struct',
        'description' => '主版本镜像',
        'type' => 'object',
        'properties' => 
        array (
          'runtimeEngineType' => 
          array (
            'title' => 'runtimeEngineType',
            'type' => 'string',
          ),
          'cpuArchitecture' => 
          array (
            'title' => 'cpuArchitecture',
            'type' => 'string',
          ),
          'imageId' => 
          array (
            'title' => 'imageId',
            'type' => 'string',
          ),
        ),
      ),
      'RunLog' => 
      array (
        'title' => 'A short description of struct',
        'description' => 'runLog',
        'type' => 'object',
        'properties' => 
        array (
          'driverStdOut' => 
          array (
            'title' => 'driverStdOut',
            'type' => 'string',
          ),
          'driverStdError' => 
          array (
            'title' => 'driverStdError',
            'type' => 'string',
          ),
          'driverSyslog' => 
          array (
            'title' => 'driverSyslog',
            'type' => 'string',
          ),
          'driverStartup' => 
          array (
            'title' => 'driverStartup',
            'type' => 'string',
          ),
        ),
      ),
      'SparkConf' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'value' => 
          array (
            'title' => 'spark conf value',
            'type' => 'string',
            'required' => true,
          ),
          'key' => 
          array (
            'title' => 'spark conf key',
            'type' => 'string',
            'required' => true,
          ),
        ),
      ),
      'SqlOutput' => 
      array (
        'title' => '结果集',
        'type' => 'object',
        'properties' => 
        array (
          'schema' => 
          array (
            'title' => '结果集结构',
            'type' => 'object',
            'properties' => 
            array (
              'fields' => 
              array (
                'title' => '结果集',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'name' => 
                    array (
                      'title' => '名称',
                      'type' => 'string',
                    ),
                    'type' => 
                    array (
                      'title' => '类型',
                      'type' => 'string',
                    ),
                    'nullable' => 
                    array (
                      'title' => '是否可空',
                      'type' => 'boolean',
                    ),
                  ),
                ),
              ),
            ),
          ),
          'rows' => 
          array (
            'title' => '行',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'values' => 
                array (
                  'title' => '值列表',
                  'type' => 'array',
                  'items' => 
                  array (
                    'type' => 'string',
                  ),
                  'example' => 'null',
                ),
              ),
            ),
          ),
        ),
      ),
      'Tag' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'key' => 
          array (
            'title' => '标签key值。',
            'description' => '标签key值。',
            'type' => 'string',
            'example' => 'workflowId',
          ),
          'value' => 
          array (
            'title' => '标签key值。',
            'description' => '标签key值。',
            'type' => 'string',
            'example' => 'wf-123test',
          ),
        ),
      ),
      'Task' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'sparkArgs' => 
          array (
            'title' => 'spark参数',
            'type' => 'string',
            'example' => '100',
          ),
          'sparkDriverMemory' => 
          array (
            'title' => 'spark driver内存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'sparkVersion' => 
          array (
            'title' => 'spark版本',
            'type' => 'string',
            'required' => true,
          ),
          'sparkExecutorMemory' => 
          array (
            'title' => 'spark executor内存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'sparkLogLevel' => 
          array (
            'title' => 'spark日志级别',
            'type' => 'string',
            'required' => true,
          ),
          'sparkEntrypoint' => 
          array (
            'title' => 'spark主类入口',
            'type' => 'string',
            'required' => false,
          ),
          'gmtModified' => 
          array (
            'title' => '最后创建时间',
            'type' => 'string',
            'required' => true,
          ),
          'hasCommited' => 
          array (
            'title' => '是否已提交',
            'type' => 'boolean',
            'required' => true,
          ),
          'sparkLogPath' => 
          array (
            'title' => 'spark日志',
            'type' => 'string',
            'required' => true,
          ),
          'creator' => 
          array (
            'title' => '创建者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'gmtCreated' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'required' => true,
          ),
          'name' => 
          array (
            'title' => 'task名称',
            'type' => 'string',
            'required' => true,
          ),
          'sparkDriverCores' => 
          array (
            'title' => 'spark driver核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
          ),
          'type' => 
          array (
            'title' => 'task类型',
            'type' => 'string',
            'required' => true,
          ),
          'sparkExecutorCores' => 
          array (
            'title' => 'spark executor核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
          ),
          'content' => 
          array (
            'title' => 'spark作业内容',
            'type' => 'string',
            'required' => false,
          ),
          'extraArtifactIds' => 
          array (
            'title' => 'spark额外资源id',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
          ),
          'lastRunResourceQueueId' => 
          array (
            'title' => '最后一次运行的资源队列id',
            'type' => 'string',
          ),
          'modifier' => 
          array (
            'title' => '最后一次更新者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'sparkConf' => 
          array (
            'title' => 'spark配置列表',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SparkConf',
            ),
          ),
          'bizId' => 
          array (
            'title' => '业务id',
            'type' => 'string',
            'required' => true,
          ),
          'categoryBizId' => 
          array (
            'title' => '目录业务id',
            'type' => 'string',
          ),
          'artifactUrl' => 
          array (
            'title' => '资源文件访问临时url',
            'type' => 'string',
          ),
          'defaultResourceQueueId' => 
          array (
            'title' => 'task默认队列id',
            'type' => 'string',
          ),
          'tags' => 
          array (
            'title' => '任务标签',
            'type' => 'object',
            'required' => false,
            'additionalProperties' => 
            array (
              'type' => 'string',
              'example' => '标签键',
            ),
          ),
          'defaultDatabase' => 
          array (
            'title' => '默认数据库',
            'type' => 'string',
          ),
          'hasChanged' => 
          array (
            'title' => '最后一次提交后是否变更',
            'type' => 'boolean',
          ),
          'pyFiles' => 
          array (
            'title' => 'spark pyspark依赖pyfiles',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
            'required' => false,
          ),
          'defaultCatalogId' => 
          array (
            'title' => '默认catalog id',
            'type' => 'string',
          ),
          'defaultSqlComputeId' => 
          array (
            'title' => '默认sql session id',
            'type' => 'string',
          ),
          'jars' => 
          array (
            'title' => '--jars参数',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'archives' => 
          array (
            'title' => '--archives参数',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'files' => 
          array (
            'title' => '--files参数',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'string',
            ),
          ),
          'extraSparkSubmitParams' => 
          array (
            'title' => '自定义spark submit配置参数',
            'type' => 'string',
          ),
          'deploymentId' => 
          array (
            'title' => 'streaming任务部署id',
            'type' => 'string',
          ),
          'isStreaming' => 
          array (
            'title' => '是否是streaming任务',
            'type' => 'boolean',
          ),
          'sparkSubmitClause' => 
          array (
            'title' => 'spark submit任务提交语句',
            'type' => 'string',
          ),
        ),
      ),
      'TaskInstance' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'taskInfo' => 
          array (
            'title' => '任务详细信息',
            'required' => false,
            '$ref' => '#/components/schemas/Task',
          ),
          'workspaceBizId' => 
          array (
            'title' => '工作空间id',
            'type' => 'string',
          ),
          'taskBizId' => 
          array (
            'title' => '任务业务id',
            'type' => 'string',
          ),
          'taskStatus' => 
          array (
            'title' => '任务实例状态',
            'type' => 'string',
          ),
          'bizId' => 
          array (
            'title' => '任务实例业务id',
            'type' => 'string',
          ),
          'fenixRunId' => 
          array (
            'title' => 'fenix run id',
            'type' => 'string',
          ),
          'gmtCreated' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'creator' => 
          array (
            'title' => '创建者uid',
            'type' => 'integer',
            'format' => 'int64',
          ),
        ),
      ),
      'TaskSnapshot' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'commiter' => 
          array (
            'title' => '提交者uid',
            'type' => 'integer',
            'format' => 'int64',
          ),
          'item' => 
          array (
            'title' => '任务信息',
            '$ref' => '#/components/schemas/Task',
          ),
          'taskBizId' => 
          array (
            'title' => '任务业务id',
            'type' => 'string',
          ),
          'message' => 
          array (
            'title' => '提交信息',
            'type' => 'string',
          ),
          'version' => 
          array (
            'title' => '提交版本',
            'type' => 'string',
          ),
          'gmtCreated' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
          ),
          'bizId' => 
          array (
            'title' => '业务id',
            'type' => 'string',
          ),
        ),
      ),
      'Template' => 
      array (
        'type' => 'object',
        'properties' => 
        array (
          'sparkDriverCores' => 
          array (
            'title' => 'spark driver核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
          ),
          'sparkDriverMemory' => 
          array (
            'title' => 'spark driver内存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'sparkExecutorMemory' => 
          array (
            'title' => 'spark executor内存',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'sparkVersion' => 
          array (
            'title' => 'spark内部release版本',
            'type' => 'string',
            'required' => true,
          ),
          'sparkLogLevel' => 
          array (
            'title' => 'spark日志级别',
            'type' => 'string',
            'required' => true,
          ),
          'sparkExecutorCores' => 
          array (
            'title' => 'spark executor核数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
          ),
          'gmtModified' => 
          array (
            'title' => '最后更新时间',
            'type' => 'string',
            'required' => true,
          ),
          'sparkLogPath' => 
          array (
            'title' => 'spark日志路径',
            'type' => 'string',
            'required' => true,
          ),
          'creator' => 
          array (
            'title' => '创建者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'gmtCreated' => 
          array (
            'title' => '创建时间',
            'type' => 'string',
            'required' => true,
          ),
          'modifier' => 
          array (
            'title' => '最后更新者uid',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
          ),
          'sparkConf' => 
          array (
            'title' => 'spark conf',
            'type' => 'array',
            'items' => 
            array (
              '$ref' => '#/components/schemas/SparkConf',
            ),
          ),
          'templateType' => 
          array (
            'title' => '模板类型',
            'type' => 'string',
          ),
        ),
      ),
      'TimeRange' => 
      array (
        'title' => '时间范围',
        'type' => 'object',
        'properties' => 
        array (
          'startTime' => 
          array (
            'title' => '时间范围开始时间。',
            'description' => '时间范围开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1688370894339',
          ),
          'endTime' => 
          array (
            'title' => '时间范围结束时间。',
            'description' => '时间范围结束时间。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1688370894339',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'TerminateSqlStatement' => 
    array (
      'summary' => '终止 session statement',
      'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}/terminate',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '224753',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'w-d2d82aa09155****',
          ),
        ),
        1 => 
        array (
          'name' => 'statementId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '交互式查询ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'st-abcadfadf12****',
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
                'description' => '请求ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '终止SQL查询',
    ),
    'CreateSqlStatement' => 
    array (
      'summary' => '使用session运行SQL',
      'path' => '/api/interactive/v1/workspace/{workspaceId}/statement',
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
        'operationType' => 'create',
        'abilityTreeCode' => '224750',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'A short description of struct',
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'w-26ca1703f6d****',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'flat',
          'schema' => 
          array (
            'description' => '创建SQL查询请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'codeContent' => 
              array (
                'description' => 'SQL代码。允许传入一条或多条SQL语句进行执行。',
                'type' => 'string',
                'required' => false,
                'example' => 'SHOW TABLES',
              ),
              'defaultDatabase' => 
              array (
                'description' => '默认数据库名。',
                'type' => 'string',
                'required' => false,
                'example' => 'default',
              ),
              'limit' => 
              array (
                'description' => 'limit值，取值范围：1~10000。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '1000',
                'default' => '1000',
              ),
              'defaultCatalog' => 
              array (
                'description' => '默认DLF Catalog ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'default_catalog',
              ),
              'sqlComputeId' => 
              array (
                'description' => 'SQL Compute ID。需要在EMR Serverless Spark工作空间的Compute模块内创建。',
                'type' => 'string',
                'required' => false,
                'example' => 'sc-dfahdfjafhajd****',
              ),
            ),
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'statementId' => 
                  array (
                    'description' => 'SQL查询ID。',
                    'type' => 'string',
                    'example' => 'st-1231dfafadfa***',
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": {\\n    \\"statementId\\": \\"st-1231dfafadfa***\\"\\n  },\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '创建SQL查询',
    ),
    'GetSqlStatement' => 
    array (
      'summary' => '获取Sql Statement状态',
      'path' => '/api/interactive/v1/workspace/{workspaceId}/statement/{statementId}',
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
        'operationType' => 'none',
        'abilityTreeCode' => '224752',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'w-d2d82aa09155****',
          ),
        ),
        1 => 
        array (
          'name' => 'statementId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '交互式查询ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'st-2dadfhajk11cv****',
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'statementId' => 
                  array (
                    'description' => '查询ID。',
                    'type' => 'string',
                    'example' => 'st-1231311abadfaa',
                  ),
                  'state' => 
                  array (
                    'description' => '查询状态。',
                    'type' => 'string',
                    'enumValueTitles' => 
                    array (
                      'running' => 'running',
                      'available' => 'available',
                      'cancelled' => 'cancelled',
                      'error' => 'error',
                      'cancelling' => 'cancelling',
                    ),
                    'example' => 'running',
                    'enum' => 
                    array (
                      0 => 'running',
                      1 => 'error',
                      2 => 'waiting',
                      3 => 'cancelling',
                      4 => 'cancelled',
                      5 => 'available',
                      6 => 'success',
                    ),
                  ),
                  'sqlOutputs' => 
                  array (
                    'description' => 'SQL查询结果列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '单个SQL查询结果',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'rows' => 
                        array (
                          'description' => '查询数据，格式为经过JSON序列化的字符串。',
                          'type' => 'string',
                          'example' => '[{\\"values\\":[\\"test_db\\",\\"test_table\\",false]}',
                        ),
                        'schema' => 
                        array (
                          'description' => 'Schema的详细信息，格式为经过JSON序列化的字符串。',
                          'type' => 'string',
                          'example' => '{\\"type\\":\\"struct\\",\\"fields\\":[{\\"name\\":\\"namespace\\",\\"type\\":\\"string\\",\\"nullable\\":false,\\"metadata\\":{}},{\\"name\\":\\"tableName\\",\\"type\\":\\"string\\",\\"nullable\\":false,\\"metadata\\":{}},{\\"name\\":\\"isTemporary\\",\\"type\\":\\"boolean\\",\\"nullable\\":false,\\"metadata\\":{}}]}',
                        ),
                      ),
                    ),
                  ),
                  'sqlErrorCode' => 
                  array (
                    'description' => 'SQL查询错误码。',
                    'type' => 'string',
                    'example' => 'ERROR-102',
                  ),
                  'sqlErrorMessage' => 
                  array (
                    'description' => 'SQL查询错误信息。',
                    'type' => 'string',
                    'example' => 'error message',
                  ),
                  'executionTime' => 
                  array (
                    'description' => 'SQL查询耗时列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '每个SQL查询消耗时间，单位毫秒。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1717138731701',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'description' => '请求ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"data\\": {\\n    \\"statementId\\": \\"st-1231311abadfaa\\",\\n    \\"state\\": \\"running\\",\\n    \\"sqlOutputs\\": [\\n      {\\n        \\"rows\\": \\"[{\\\\\\\\\\\\\\"values\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"test_db\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"test_table\\\\\\\\\\\\\\",false]}\\",\\n        \\"schema\\": \\"{\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"struct\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"fields\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"namespace\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"nullable\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"metadata\\\\\\\\\\\\\\":{}},{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"tableName\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"string\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"nullable\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"metadata\\\\\\\\\\\\\\":{}},{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"isTemporary\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"boolean\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"nullable\\\\\\\\\\\\\\":false,\\\\\\\\\\\\\\"metadata\\\\\\\\\\\\\\":{}}]}\\"\\n      }\\n    ],\\n    \\"sqlErrorCode\\": \\"ERROR-102\\",\\n    \\"sqlErrorMessage\\": \\"error message\\",\\n    \\"executionTime\\": [\\n      1717138731701\\n    ]\\n  },\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '获取SQL查询详情',
    ),
    'ListSessionClusters' => 
    array (
      'summary' => '查询run列表',
      'path' => '/api/v1/workspaces/{workspaceId}/sessionClusters',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '202905',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置。',
            'description' => '标记当前开始读取的位置。',
            'type' => 'string',
            'required' => false,
            'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
          ),
        ),
        1 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '一次获取的最大记录数。',
            'description' => '一次获取的最大记录数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '工作空间id。',
            'description' => '工作空间id。',
            'type' => 'string',
            'required' => false,
            'example' => 'w-1234abcd',
          ),
        ),
        3 => 
        array (
          'name' => 'sessionClusterId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '作业名称。',
            'description' => '作业名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'emr-spark-demo-job',
          ),
        ),
        4 => 
        array (
          'name' => 'queueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'root',
          ),
        ),
        5 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'sessionClusters' => 
              array (
                'description' => 'SQL Compute列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'SQL Compute详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'workspaceId' => 
                    array (
                      'title' => '工作空间id。',
                      'description' => '工作空间id。',
                      'type' => 'string',
                      'example' => 'w-1234abcd',
                    ),
                    'sessionClusterId' => 
                    array (
                      'title' => '交互式作业会话id。',
                      'description' => 'SQL Compute id',
                      'type' => 'string',
                      'example' => 'sc-123131',
                    ),
                    'userId' => 
                    array (
                      'title' => '任务实例ID。',
                      'description' => '用户id',
                      'type' => 'string',
                      'example' => '123131',
                    ),
                    'queueName' => 
                    array (
                      'title' => '作业实例名称。',
                      'description' => 'SQL Compute运行队列名称',
                      'type' => 'string',
                      'example' => 'dev_queue',
                    ),
                    'state' => 
                    array (
                      'title' => '作业状态。',
                      'description' => 'SQL Compute状态',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'stateChangeReason' => 
                    array (
                      'description' => 'SQL Compute最近一次状态变化详情',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'code' => 
                        array (
                          'description' => '状态变化编码',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'message' => 
                        array (
                          'description' => '状态变化消息',
                          'type' => 'string',
                          'example' => 'ok',
                        ),
                      ),
                    ),
                    'autoStartConfiguration' => 
                    array (
                      'description' => '自动启动配置',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'enable' => 
                        array (
                          'description' => '是否开启自动启动',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                    'autoStopConfiguration' => 
                    array (
                      'description' => '自动终止配置',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'enable' => 
                        array (
                          'description' => '是否允许自动终止',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'idleTimeoutMinutes' => 
                        array (
                          'description' => 'SQL Compute空闲指定分钟数后自动终止',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '45',
                        ),
                      ),
                    ),
                    'applicationConfigs' => 
                    array (
                      'description' => 'SQL Compute配置，等价于背后运行的spark job的配置',
                      'type' => 'array',
                      'items' => 
                      array (
                        'type' => 'object',
                        'properties' => 
                        array (
                          'configFileName' => 
                          array (
                            'description' => '配置文件名',
                            'type' => 'string',
                            'example' => 'spark-default.conf',
                          ),
                          'configItemKey' => 
                          array (
                            'description' => '配置键',
                            'type' => 'string',
                            'example' => 'spark.app.name',
                          ),
                          'configItemValue' => 
                          array (
                            'description' => '配置值',
                            'type' => 'string',
                            'example' => 'test_application',
                          ),
                        ),
                      ),
                    ),
                    'name' => 
                    array (
                      'description' => 'SQL Compute名称',
                      'type' => 'string',
                      'example' => 'adhoc_query',
                    ),
                    'userName' => 
                    array (
                      'description' => '用户名',
                      'type' => 'string',
                      'example' => 'test_user',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'title' => '返回读取到的数据位置。',
                'description' => '返回读取到的数据位置。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
              ),
              'maxResults' => 
              array (
                'title' => '本次请求所返回的最大记录条数。',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'totalCount' => 
              array (
                'title' => '本次请求条件下的数据总量。',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"sessionClusters\\": [\\n    {\\n      \\"workspaceId\\": \\"w-1234abcd\\",\\n      \\"sessionClusterId\\": \\"sc-123131\\",\\n      \\"userId\\": \\"123131\\",\\n      \\"queueName\\": \\"dev_queue\\",\\n      \\"state\\": \\"Running\\",\\n      \\"stateChangeReason\\": {\\n        \\"code\\": \\"200\\",\\n        \\"message\\": \\"ok\\"\\n      },\\n      \\"autoStartConfiguration\\": {\\n        \\"enable\\": true\\n      },\\n      \\"autoStopConfiguration\\": {\\n        \\"enable\\": false,\\n        \\"idleTimeoutMinutes\\": 45\\n      },\\n      \\"applicationConfigs\\": [\\n        {\\n          \\"configFileName\\": \\"spark-default.conf\\",\\n          \\"configItemKey\\": \\"spark.app.name\\",\\n          \\"configItemValue\\": \\"test_application\\"\\n        }\\n      ],\\n      \\"name\\": \\"adhoc_query\\",\\n      \\"userName\\": \\"test_user\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C89568980\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
      'title' => '获取SQL Compute列表',
    ),
    'ListWorkspaces' => 
    array (
      'summary' => '调用ListWorkspaces获取工作空间列表。',
      'path' => '/api/v1/workspaces',
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
      'systemTags' => 
      array (
        'abilityTreeCode' => '192019',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置。',
            'description' => '标记当前开始读取的位置。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '一次获取的最大记录数。',
            'description' => '一次获取的最大记录数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '根据工作空间名称模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'test_workspace',
          ),
        ),
        3 => 
        array (
          'name' => 'state',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间状态',
            'type' => 'string',
            'required' => false,
            'example' => 'running',
          ),
        ),
        4 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'workspaces' => 
              array (
                'description' => '工作空间列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作空间详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'workspaceId' => 
                    array (
                      'title' => 'Workspace Id。',
                      'description' => 'Workspace ID。',
                      'type' => 'string',
                      'example' => 'w-******',
                    ),
                    'workspaceName' => 
                    array (
                      'title' => '工作空间名称。',
                      'description' => '工作空间名称。',
                      'type' => 'string',
                      'example' => 'spark批作业空间-1',
                    ),
                    'resourceSpec' => 
                    array (
                      'title' => '资源规格。',
                      'description' => '资源规格。',
                      'type' => 'string',
                      'example' => '100cu',
                    ),
                    'storage' => 
                    array (
                      'title' => 'oss 路径。',
                      'description' => 'OSS路径。',
                      'type' => 'string',
                      'example' => 'spark-result',
                    ),
                    'dlfCatalogId' => 
                    array (
                      'title' => 'dlf catalog 信息。',
                      'description' => 'DLF Catalog信息。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                    'paymentType' => 
                    array (
                      'title' => '付费类型。',
                      'description' => '付费类型。',
                      'type' => 'string',
                      'example' => 'PayAsYouGo or Subscription',
                    ),
                    'paymentDurationUnit' => 
                    array (
                      'title' => '订购周期(pre付费类型必须)。',
                      'description' => '订购周期（pre付费类型必填）。',
                      'type' => 'string',
                      'example' => 'YEAR, MONTH, WEEK, DAY, HOUR, MINUTE',
                    ),
                    'duration' => 
                    array (
                      'title' => '订购周期数量(pre付费类型必须)。',
                      'description' => '订购周期数量（pre付费类型必填）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'autoRenew' => 
                    array (
                      'title' => '是否自动续费(pre付费类型必须)。',
                      'description' => '是否自动续费（pre付费类型必填）。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'autoRenewPeriod' => 
                    array (
                      'title' => '自动续费时长(pre付费类型必须)。',
                      'description' => '自动续费时长（pre付费类型必填）。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'autoRenewPeriodUnit' => 
                    array (
                      'title' => '自动续费周期(pre付费类型必须)。',
                      'description' => '自动续费周期（pre付费类型必填）。',
                      'type' => 'string',
                      'example' => 'YEAR, MONTH, WEEK, DAY, HOUR, MINUTE',
                    ),
                    'workspaceStatus' => 
                    array (
                      'title' => '工作空间状态。',
                      'description' => '工作空间状态。',
                      'type' => 'string',
                      'example' => 'STARTING,RUNNING,TERMINATED',
                    ),
                    'failReason' => 
                    array (
                      'title' => '失败原因。',
                      'description' => '失败原因。',
                      'type' => 'string',
                      'example' => 'out of stock',
                    ),
                    'paymentStatus' => 
                    array (
                      'title' => '支付状态。',
                      'description' => '支付状态。',
                      'type' => 'string',
                      'example' => 'PAID/UNPAID',
                    ),
                    'regionId' => 
                    array (
                      'description' => '地域ID。',
                      'type' => 'string',
                      'example' => 'cn-shanghai',
                    ),
                    'createTime' => 
                    array (
                      'description' => '工作空间创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1684115879955',
                    ),
                    'endTime' => 
                    array (
                      'description' => '工作空间释放时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1687103999999',
                    ),
                    'stateChangeReason' => 
                    array (
                      'description' => '工作空间状态的变更信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'code' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'message' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'Success',
                        ),
                      ),
                    ),
                    'releaseType' => 
                    array (
                      'description' => '工作空间释放原因。',
                      'type' => 'string',
                      'example' => 'SERVICE_RELEASE',
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'title' => '下一页TOKEN。',
                'description' => '下一页TOKEN。',
                'type' => 'string',
                'example' => '1',
              ),
              'maxResults' => 
              array (
                'title' => '一次获取的最大记录数。',
                'description' => '一次获取的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'totalCount' => 
              array (
                'title' => '记录总数。',
                'description' => '记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"workspaces\\": [\\n    {\\n      \\"workspaceId\\": \\"w-******\\",\\n      \\"workspaceName\\": \\"spark批作业空间-1\\",\\n      \\"resourceSpec\\": \\"100cu\\",\\n      \\"storage\\": \\"spark-result\\",\\n      \\"dlfCatalogId\\": \\"default\\",\\n      \\"paymentType\\": \\"PayAsYouGo or Subscription\\",\\n      \\"paymentDurationUnit\\": \\"YEAR, MONTH, WEEK, DAY, HOUR, MINUTE\\",\\n      \\"duration\\": 1,\\n      \\"autoRenew\\": true,\\n      \\"autoRenewPeriod\\": 1,\\n      \\"autoRenewPeriodUnit\\": \\"YEAR, MONTH, WEEK, DAY, HOUR, MINUTE\\",\\n      \\"workspaceStatus\\": \\"STARTING,RUNNING,TERMINATED\\",\\n      \\"failReason\\": \\"out of stock\\",\\n      \\"paymentStatus\\": \\"PAID/UNPAID\\",\\n      \\"regionId\\": \\"cn-shanghai\\",\\n      \\"createTime\\": 1684115879955,\\n      \\"endTime\\": 1687103999999,\\n      \\"stateChangeReason\\": {\\n        \\"code\\": \\"0\\",\\n        \\"message\\": \\"Success\\"\\n      },\\n      \\"releaseType\\": \\"SERVICE_RELEASE\\"\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"1\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
      'title' => '获取工作空间列表',
    ),
    'ListWorkspaceQueues' => 
    array (
      'summary' => '查看工作空间队列列表',
      'path' => '/api/v1/workspaces/{workspaceId}/queues',
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
      'systemTags' => 
      array (
        'abilityTreeCode' => '192786',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '工作空间ID',
            'type' => 'string',
            'required' => false,
            'example' => 'w-26ca1703f6d71e6e',
          ),
        ),
        1 => 
        array (
          'name' => 'environment',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '环境类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'dev' => 'dev',
              'production' => 'production',
            ),
            'example' => 'production',
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'queues' => 
              array (
                'description' => '队列列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '队列详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'regionId' => 
                    array (
                      'title' => 'regionId。',
                      'description' => 'regionId。',
                      'type' => 'string',
                      'example' => 'cn-hangzhou',
                    ),
                    'queueName' => 
                    array (
                      'title' => '队列名称。',
                      'description' => '队列名称。',
                      'type' => 'string',
                      'example' => 'dev_queue',
                    ),
                    'workspaceId' => 
                    array (
                      'title' => '工作空间id。',
                      'description' => '工作空间id。',
                      'type' => 'string',
                      'example' => 'w-1234abcd',
                    ),
                    'queueType' => 
                    array (
                      'title' => '队列类型',
                      'description' => '队列类型',
                      'type' => 'string',
                      'example' => 'instance, instanceChildren',
                    ),
                    'properties' => 
                    array (
                      'title' => '队列Label',
                      'description' => '队列Label',
                      'type' => 'string',
                      'example' => 'dev_queue',
                    ),
                    'queueScope' => 
                    array (
                      'title' => '队列架构',
                      'description' => '队列架构',
                      'type' => 'string',
                      'example' => '{"arch": "x86"}',
                    ),
                    'maxResource' => 
                    array (
                      'title' => '队列资源最大容量',
                      'description' => '队列资源最大容量',
                      'type' => 'string',
                      'example' => '{"cpu": "2","memory": "2Gi"}',
                    ),
                    'minResource' => 
                    array (
                      'title' => '队列资源最小容量',
                      'description' => '队列资源最小容量',
                      'type' => 'string',
                      'example' => '{"cpu": "2","memory": "2Gi"}',
                    ),
                    'usedResource' => 
                    array (
                      'title' => '队列资源使用容量',
                      'description' => '队列资源使用容量',
                      'type' => 'string',
                      'example' => '{"cpu": "2","memory": "2Gi"}',
                    ),
                    'queueStatus' => 
                    array (
                      'description' => '队列状态',
                      'type' => 'string',
                      'example' => 'RUNNING',
                    ),
                    'creator' => 
                    array (
                      'description' => '创建用户UID。',
                      'type' => 'string',
                      'example' => '237109',
                    ),
                    'allowActions' => 
                    array (
                      'title' => '队列允许的操作',
                      'description' => '队列允许的操作列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '队列允许的操作',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'actionArn' => 
                          array (
                            'title' => '行为 arn。',
                            'description' => '行为 arn。',
                            'type' => 'string',
                            'example' => 'acs:emr::workspaceId:action/create_queue',
                          ),
                          'actionName' => 
                          array (
                            'title' => '权限名称。',
                            'description' => '权限名称。',
                            'type' => 'string',
                            'example' => 'view',
                          ),
                          'displayName' => 
                          array (
                            'title' => '权限展示名称。',
                            'description' => '权限展示名称。',
                            'type' => 'string',
                            'example' => '文件目录遍历、文件浏览',
                          ),
                          'description' => 
                          array (
                            'title' => 'action 描述。',
                            'description' => 'action 描述。',
                            'type' => 'string',
                            'example' => '文件目录遍历、文件浏览',
                          ),
                          'dependencies' => 
                          array (
                            'title' => 'action 依赖列表。',
                            'description' => 'action 依赖列表。',
                            'type' => 'array',
                            'items' => 
                            array (
                              'description' => 'action依赖',
                              'type' => 'string',
                              'example' => 'view',
                            ),
                            'example' => '["view"]',
                          ),
                        ),
                      ),
                    ),
                    'environments' => 
                    array (
                      'description' => '队列环境类型列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '队列环境类型',
                        'type' => 'string',
                        'example' => 'production',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'title' => '下一页TOKEN。',
                'description' => '下一页TOKEN。',
                'type' => 'string',
                'example' => '1',
              ),
              'maxResults' => 
              array (
                'title' => '一次获取的最大记录数。',
                'description' => '一次获取的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'totalCount' => 
              array (
                'title' => '记录总数。',
                'description' => '记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"queues\\": [\\n    {\\n      \\"regionId\\": \\"cn-hangzhou\\",\\n      \\"queueName\\": \\"dev_queue\\",\\n      \\"workspaceId\\": \\"w-1234abcd\\",\\n      \\"queueType\\": \\"instance, instanceChildren\\",\\n      \\"properties\\": \\"dev_queue\\",\\n      \\"queueScope\\": \\"{\\\\\\"arch\\\\\\": \\\\\\"x86\\\\\\"}\\",\\n      \\"maxResource\\": \\"{\\\\\\"cpu\\\\\\": \\\\\\"2\\\\\\",\\\\\\"memory\\\\\\": \\\\\\"2Gi\\\\\\"}\\",\\n      \\"minResource\\": \\"{\\\\\\"cpu\\\\\\": \\\\\\"2\\\\\\",\\\\\\"memory\\\\\\": \\\\\\"2Gi\\\\\\"}\\",\\n      \\"usedResource\\": \\"{\\\\\\"cpu\\\\\\": \\\\\\"2\\\\\\",\\\\\\"memory\\\\\\": \\\\\\"2Gi\\\\\\"}\\",\\n      \\"queueStatus\\": \\"RUNNING\\",\\n      \\"creator\\": \\"237109\\",\\n      \\"allowActions\\": [\\n        {\\n          \\"actionArn\\": \\"acs:emr::workspaceId:action/create_queue\\",\\n          \\"actionName\\": \\"view\\",\\n          \\"displayName\\": \\"文件目录遍历、文件浏览\\",\\n          \\"description\\": \\"文件目录遍历、文件浏览\\",\\n          \\"dependencies\\": [\\n            \\"view\\"\\n          ]\\n        }\\n      ],\\n      \\"environments\\": [\\n        \\"production\\"\\n      ]\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"1\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
      'title' => '获取工作空间队列列表',
    ),
    'ListReleaseVersions' => 
    array (
      'summary' => '获取发布版本列表',
      'path' => '/api/v1/releaseVersions',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'releaseVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'serverless spark版本',
            'type' => 'string',
            'required' => false,
            'example' => 'esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)',
          ),
        ),
        1 => 
        array (
          'name' => 'releaseVersionStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本状态',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'ONLINE' => 'ONLINE',
              'OFFLINE' => 'OFFLINE',
            ),
            'example' => 'ONLINE',
          ),
        ),
        2 => 
        array (
          'name' => 'releaseType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '版本类型',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'stable' => 'stable',
              'beta' => 'beta',
            ),
            'example' => 'stable',
          ),
        ),
        3 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'releaseVersions' => 
              array (
                'description' => '版本列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本详情',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'releaseVersion' => 
                    array (
                      'description' => '版本号',
                      'type' => 'string',
                      'example' => 'esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)',
                    ),
                    'state' => 
                    array (
                      'description' => '版本状态',
                      'type' => 'string',
                      'example' => 'ONLINE',
                    ),
                    'type' => 
                    array (
                      'description' => '版本类型',
                      'type' => 'string',
                      'example' => 'stable',
                    ),
                    'iaasType' => 
                    array (
                      'description' => 'iaas层类型',
                      'type' => 'string',
                      'example' => 'ASI',
                    ),
                    'gmtCreate' => 
                    array (
                      'description' => '创建时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1716215854101',
                    ),
                    'scalaVersion' => 
                    array (
                      'description' => 'scala版本',
                      'type' => 'string',
                      'example' => '2.12',
                    ),
                    'communityVersion' => 
                    array (
                      'description' => '社区spark版本号',
                      'type' => 'string',
                      'example' => 'Spark 3.3.1',
                    ),
                    'cpuArchitectures' => 
                    array (
                      'description' => 'cpu架构列表',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => 'cpu架构',
                        'type' => 'string',
                        'example' => 'x86',
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'title' => '下一页TOKEN。',
                'description' => '下一页TOKEN。',
                'type' => 'string',
                'example' => '1',
              ),
              'maxResults' => 
              array (
                'title' => '一次获取的最大记录数。',
                'description' => '一次获取的最大记录数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'totalCount' => 
              array (
                'title' => '记录总数。',
                'description' => '记录总数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"releaseVersions\\": [\\n    {\\n      \\"releaseVersion\\": \\"esr-2.1 (Spark 3.3.1, Scala 2.12, Java Runtime)\\",\\n      \\"state\\": \\"ONLINE\\",\\n      \\"type\\": \\"stable\\",\\n      \\"iaasType\\": \\"ASI\\",\\n      \\"gmtCreate\\": 1716215854101,\\n      \\"scalaVersion\\": \\"2.12\\",\\n      \\"communityVersion\\": \\"Spark 3.3.1\\",\\n      \\"cpuArchitectures\\": [\\n        \\"x86\\"\\n      ]\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"1\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
      'title' => '获取spark版本列表',
    ),
    'CancelJobRun' => 
    array (
      'summary' => '调用CancelJobRun终止正在运行的Spark任务。',
      'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '215798',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '工作空间id。',
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'w-d2d82aa09155****',
          ),
        ),
        1 => 
        array (
          'name' => 'jobRunId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '任务实例ID。',
            'description' => '任务运行ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'jr-f09a8fda2396****',
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'jobRunId' => 
              array (
                'description' => '任务运行ID。',
                'type' => 'string',
                'example' => 'jr-f09a8fda2396****',
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRunId\\": \\"jr-f09a8fda2396****\\",\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '终止Spark任务',
    ),
    'ListJobRuns' => 
    array (
      'summary' => '调用ListJobRuns获取Spark任务列表。',
      'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '215800',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'nextToken',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '标记当前开始读取的位置。',
            'description' => '标记当前开始读取的位置。',
            'type' => 'string',
            'required' => false,
            'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
          ),
        ),
        1 => 
        array (
          'name' => 'maxResults',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '一次获取的最大记录数。',
            'description' => '一次获取的最大记录数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '工作空间id。',
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'w-d2d82aa09155****',
          ),
        ),
        3 => 
        array (
          'name' => 'name',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '作业名称。',
            'description' => '任务名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'emr-spark-demo-job',
          ),
        ),
        4 => 
        array (
          'name' => 'creator',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '创建用户Uid。',
            'description' => '创建用户UID。',
            'type' => 'string',
            'required' => false,
            'example' => '150978934701****',
          ),
        ),
        5 => 
        array (
          'name' => 'jobRunId',
          'in' => 'query',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '作业id。',
            'description' => '任务ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'j-xxx',
          ),
        ),
        6 => 
        array (
          'name' => 'tags',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'json',
          'schema' => 
          array (
            'title' => '标签。',
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签对象。',
              'type' => 'object',
              'properties' => 
              array (
                'key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag_key',
                ),
                'value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'value',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
          ),
        ),
        7 => 
        array (
          'name' => 'states',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'json',
          'schema' => 
          array (
            'title' => '作业状态。',
            'description' => '任务状态。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '任务状态。取值范围：
- Submitted：已提交。
- Pending：待处理。
- Running：运行中。
- Success：成功。
- Failed：失败。
- Cancelling：取消中。
- Cancelled：已取消。
- CancelFailed：取消失败。',
              'type' => 'string',
              'required' => false,
              'example' => 'Running',
            ),
            'required' => false,
            'example' => '["Running","Submitted"]',
          ),
        ),
        8 => 
        array (
          'name' => 'startTime',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '任务开始时间范围。',
            'type' => 'object',
            'properties' => 
            array (
              'startTime' => 
              array (
                'description' => '任务开始时间范围的起点。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1709740800000',
              ),
              'endTime' => 
              array (
                'description' => '任务开始时间范围的终点。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1710432000000',
              ),
            ),
            'required' => false,
          ),
        ),
        9 => 
        array (
          'name' => 'endTime',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '任务结束时间范围。',
            'type' => 'object',
            'properties' => 
            array (
              'startTime' => 
              array (
                'description' => '任务结束时间范围的起点。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1709740800000',
              ),
              'endTime' => 
              array (
                'description' => '任务结束时间范围的终点。',
                'type' => 'integer',
                'format' => 'int64',
                'required' => false,
                'example' => '1710432000000',
              ),
            ),
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'resourceQueueId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Spark任务运行的资源队列名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'dev_queue',
          ),
        ),
        11 => 
        array (
          'name' => 'jobRunDeploymentId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        12 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'jobRuns' => 
              array (
                'description' => 'Spark任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'Spark任务对象。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'workspaceId' => 
                    array (
                      'title' => '工作空间id。',
                      'description' => '工作空间ID。',
                      'type' => 'string',
                      'example' => 'w-d2d82aa09155****',
                    ),
                    'jobRunId' => 
                    array (
                      'title' => '任务实例ID。',
                      'description' => '任务ID。',
                      'type' => 'string',
                      'example' => 'jr-231231',
                    ),
                    'name' => 
                    array (
                      'title' => '作业实例名称。',
                      'description' => '任务名称。',
                      'type' => 'string',
                      'example' => 'jobName',
                    ),
                    'state' => 
                    array (
                      'title' => '作业状态。',
                      'description' => '任务状态。',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'stateChangeReason' => 
                    array (
                      'description' => '状态变化原因。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'code' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => '0',
                        ),
                        'message' => 
                        array (
                          'description' => '错误信息。',
                          'type' => 'string',
                          'example' => 'connection refused
',
                        ),
                      ),
                    ),
                    'submitTime' => 
                    array (
                      'title' => '作业提交时间。',
                      'description' => '任务提交时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1684119314000',
                    ),
                    'endTime' => 
                    array (
                      'title' => '作业结束时间。',
                      'description' => '任务结束时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1684119314000',
                    ),
                    'codeType' => 
                    array (
                      'title' => '作业代码类型。',
                      'description' => '任务代码类型。取值范围：

SQL

JAR

PYTHON',
                      'type' => 'string',
                      'example' => 'SQL',
                    ),
                    'webUI' => 
                    array (
                      'title' => '作业web ui。',
                      'description' => '作业Web UI。',
                      'type' => 'string',
                      'example' => 'http://spark-ui',
                    ),
                    'executionTimeoutSeconds' => 
                    array (
                      'title' => '运行超时时间。',
                      'description' => '运行超时时间。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '3600',
                    ),
                    'creator' => 
                    array (
                      'title' => '创建用户Uid。',
                      'description' => '创建用户UID。',
                      'type' => 'string',
                      'example' => '150978934701****',
                    ),
                    'tags' => 
                    array (
                      'title' => '标签。',
                      'description' => '标签。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '任务标签.',
                        '$ref' => '#/components/schemas/Tag',
                      ),
                    ),
                    'log' => 
                    array (
                      'description' => '运行日志路径。',
                      '$ref' => '#/components/schemas/RunLog',
                    ),
                    'releaseVersion' => 
                    array (
                      'description' => '运行任务的Spark引擎版本。',
                      'type' => 'string',
                      'example' => 'esr-native-3.4.0',
                    ),
                    'jobDriver' => 
                    array (
                      'description' => 'Spark Driver相关信息。',
                      '$ref' => '#/components/schemas/JobDriver',
                    ),
                    'configurationOverrides' => 
                    array (
                      'description' => 'Spark高级配置。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'configurations' => 
                        array (
                          'description' => 'Spark Conf列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => 'Spark Conf对象。',
                            '$ref' => '#/components/schemas/Configuration',
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
              'nextToken' => 
              array (
                'title' => '返回读取到的数据位置。',
                'description' => '返回读取到的数据位置。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C89568980',
              ),
              'maxResults' => 
              array (
                'title' => '本次请求所返回的最大记录条数。',
                'description' => '本次请求所返回的最大记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'totalCount' => 
              array (
                'title' => '本次请求条件下的数据总量。',
                'description' => '本次请求条件下的数据总量。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRuns\\": [\\n    {\\n      \\"workspaceId\\": \\"w-d2d82aa09155****\\",\\n      \\"jobRunId\\": \\"jr-231231\\",\\n      \\"name\\": \\"jobName\\",\\n      \\"state\\": \\"Running\\",\\n      \\"stateChangeReason\\": {\\n        \\"code\\": \\"0\\",\\n        \\"message\\": \\"connection refused\\\\n\\"\\n      },\\n      \\"submitTime\\": 1684119314000,\\n      \\"endTime\\": 1684119314000,\\n      \\"codeType\\": \\"SQL\\",\\n      \\"webUI\\": \\"http://spark-ui\\",\\n      \\"executionTimeoutSeconds\\": 3600,\\n      \\"creator\\": \\"150978934701****\\",\\n      \\"tags\\": [\\n        {\\n          \\"key\\": \\"workflowId\\",\\n          \\"value\\": \\"wf-123test\\"\\n        }\\n      ],\\n      \\"log\\": {\\n        \\"driverStdOut\\": \\"\\",\\n        \\"driverStdError\\": \\"\\",\\n        \\"driverSyslog\\": \\"\\",\\n        \\"driverStartup\\": \\"\\"\\n      },\\n      \\"releaseVersion\\": \\"esr-native-3.4.0\\",\\n      \\"jobDriver\\": {\\n        \\"sparkSubmit\\": {\\n          \\"entryPoint\\": \\"\\",\\n          \\"entryPointArguments\\": [\\n            \\"\\"\\n          ],\\n          \\"sparkSubmitParameters\\": \\"\\"\\n        }\\n      },\\n      \\"configurationOverrides\\": {\\n        \\"configurations\\": [\\n          {\\n            \\"configFileName\\": \\"\\",\\n            \\"configItemKey\\": \\"\\",\\n            \\"configItemValue\\": \\"\\"\\n          }\\n        ]\\n      }\\n    }\\n  ],\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\",\\n  \\"nextToken\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C89568980\\",\\n  \\"maxResults\\": 20,\\n  \\"totalCount\\": 200\\n}","type":"json"}]',
      'title' => '获取Spark任务列表',
    ),
    'GetJobRun' => 
    array (
      'summary' => '调用GetJobRun获取任务详情。',
      'path' => '/api/v1/workspaces/{workspaceId}/jobRuns/{jobRunId}',
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
        'abilityTreeCode' => '215794',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '工作空间id。',
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'w-d2d82aa09155****',
          ),
        ),
        1 => 
        array (
          'name' => 'jobRunId',
          'in' => 'path',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '任务实例ID。',
            'description' => '任务运行ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'jr-93d98d2f7061****',
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'jobRun' => 
              array (
                'description' => '任务详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'workspaceId' => 
                  array (
                    'title' => '工作空间id。',
                    'description' => '工作空间ID。',
                    'type' => 'string',
                    'example' => 'w-d2d82aa09155****',
                  ),
                  'jobRunId' => 
                  array (
                    'title' => '任务实例ID。',
                    'description' => '任务运行ID。',
                    'type' => 'string',
                    'example' => 'jr-93d98d2f7061****',
                  ),
                  'name' => 
                  array (
                    'title' => '作业实例名称。',
                    'description' => '任务名称。',
                    'type' => 'string',
                    'example' => 'jobName',
                  ),
                  'state' => 
                  array (
                    'title' => '作业状态。',
                    'description' => '任务状态。',
                    'type' => 'string',
                    'example' => 'Running',
                  ),
                  'stateChangeReason' => 
                  array (
                    'description' => '状态变化原因。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'code' => 
                      array (
                        'description' => '错误码。',
                        'type' => 'string',
                        'example' => 'ERR-100000',
                      ),
                      'message' => 
                      array (
                        'description' => '错误信息。',
                        'type' => 'string',
                        'example' => 'connection refused',
                      ),
                    ),
                  ),
                  'submitTime' => 
                  array (
                    'title' => '作业提交时间。',
                    'description' => '任务提交时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1684119314000',
                  ),
                  'endTime' => 
                  array (
                    'title' => '作业结束时间。',
                    'description' => '任务结束时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1684122914000',
                  ),
                  'codeType' => 
                  array (
                    'title' => '作业代码类型。',
                    'description' => '任务代码类型。可能值：

- SQL

- JAR

- PYTHON',
                    'type' => 'string',
                    'example' => 'SQL',
                  ),
                  'webUI' => 
                  array (
                    'title' => '作业web ui。',
                    'description' => '作业Web UI。',
                    'type' => 'string',
                    'example' => 'http://spark-ui',
                  ),
                  'executionTimeoutSeconds' => 
                  array (
                    'title' => '运行超时时间。',
                    'description' => '运行超时时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3600',
                  ),
                  'resourceOwnerId' => 
                  array (
                    'title' => '创建用户Uid。',
                    'description' => '创建用户UID。',
                    'type' => 'string',
                    'example' => '150978934701****',
                  ),
                  'tags' => 
                  array (
                    'title' => '标签。',
                    'description' => '标签列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签。',
                      '$ref' => '#/components/schemas/Tag',
                    ),
                  ),
                  'log' => 
                  array (
                    'description' => '运行日志路径。',
                    '$ref' => '#/components/schemas/RunLog',
                  ),
                  'releaseVersion' => 
                  array (
                    'description' => '运行任务的Spark引擎版本。',
                    'type' => 'string',
                    'example' => 'esr-3.3.1',
                  ),
                  'resourceQueueId' => 
                  array (
                    'description' => '运行任务的队列名称。',
                    'type' => 'string',
                    'example' => 'root_queue',
                  ),
                  'jobDriver' => 
                  array (
                    'description' => 'Spark Driver相关信息。',
                    '$ref' => '#/components/schemas/JobDriver',
                  ),
                  'configurationOverrides' => 
                  array (
                    'description' => 'Spark任务配置。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'configurations' => 
                      array (
                        'description' => '配置列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '配置信息。',
                          '$ref' => '#/components/schemas/Configuration',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRun\\": {\\n    \\"workspaceId\\": \\"w-d2d82aa09155****\\",\\n    \\"jobRunId\\": \\"jr-93d98d2f7061****\\",\\n    \\"name\\": \\"jobName\\",\\n    \\"state\\": \\"Running\\",\\n    \\"stateChangeReason\\": {\\n      \\"code\\": \\"ERR-100000\\",\\n      \\"message\\": \\"connection refused\\"\\n    },\\n    \\"submitTime\\": 1684119314000,\\n    \\"endTime\\": 1684122914000,\\n    \\"codeType\\": \\"SQL\\",\\n    \\"webUI\\": \\"http://spark-ui\\",\\n    \\"executionTimeoutSeconds\\": 3600,\\n    \\"resourceOwnerId\\": \\"150978934701****\\",\\n    \\"tags\\": [\\n      {\\n        \\"key\\": \\"workflowId\\",\\n        \\"value\\": \\"wf-123test\\"\\n      }\\n    ],\\n    \\"log\\": {\\n      \\"driverStdOut\\": \\"\\",\\n      \\"driverStdError\\": \\"\\",\\n      \\"driverSyslog\\": \\"\\",\\n      \\"driverStartup\\": \\"\\"\\n    },\\n    \\"releaseVersion\\": \\"esr-3.3.1\\",\\n    \\"resourceQueueId\\": \\"root_queue\\",\\n    \\"jobDriver\\": {\\n      \\"sparkSubmit\\": {\\n        \\"entryPoint\\": \\"\\",\\n        \\"entryPointArguments\\": [\\n          \\"\\"\\n        ],\\n        \\"sparkSubmitParameters\\": \\"\\"\\n      }\\n    },\\n    \\"configurationOverrides\\": {\\n      \\"configurations\\": [\\n        {\\n          \\"configFileName\\": \\"\\",\\n          \\"configItemKey\\": \\"\\",\\n          \\"configItemValue\\": \\"\\"\\n        }\\n      ]\\n    }\\n  },\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '获取Spark任务详情',
    ),
    'StartJobRun' => 
    array (
      'summary' => '调用StartJobRun启动Spark任务。',
      'path' => '/api/v1/workspaces/{workspaceId}/jobRuns',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '215792',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduceTW58EL',
        ),
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
            'description' => 'Spark任务请求体。',
            'type' => 'object',
            'properties' => 
            array (
              'releaseVersion' => 
              array (
                'description' => 'Spark引擎版本号。',
                'type' => 'string',
                'required' => false,
                'example' => 'esr-3.3.1',
              ),
              'jobId' => 
              array (
                'description' => '任务ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'jr-12345',
              ),
              'name' => 
              array (
                'description' => '任务名称。',
                'type' => 'string',
                'required' => false,
                'example' => 'spark_job_name',
              ),
              'resourceQueueId' => 
              array (
                'description' => 'Spark任务运行的资源队列。',
                'type' => 'string',
                'required' => false,
                'example' => 'dev_queue',
              ),
              'codeType' => 
              array (
                'description' => '任务类型。取值范围：

- SQL

- JAR

- PYTHON',
                'type' => 'string',
                'required' => false,
                'example' => 'SQL',
              ),
              'executionTimeoutSeconds' => 
              array (
                'description' => '任务超时时间。',
                'type' => 'integer',
                'format' => 'int32',
                'required' => false,
                'example' => '100',
              ),
              'configurationOverrides' => 
              array (
                'description' => 'Spark高级配置。',
                'type' => 'object',
                'properties' => 
                array (
                  'configurations' => 
                  array (
                    'description' => 'Spark Conf列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Spark Conf对象。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'configFileName' => 
                        array (
                          'description' => 'Spark Conf所属配置文件。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'spark-default.conf',
                        ),
                        'configItemKey' => 
                        array (
                          'description' => 'Spark Conf键。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'spark.app.name',
                        ),
                        'configItemValue' => 
                        array (
                          'description' => 'Spark Conf值。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'test_app',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
              'tags' => 
              array (
                'description' => '任务标签列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '标签对象。',
                  'required' => false,
                  '$ref' => '#/components/schemas/Tag',
                ),
                'required' => false,
              ),
              'clientToken' => 
              array (
                'description' => '幂等校验TOKEN。',
                'type' => 'string',
                'required' => false,
                'example' => '8e6aae2810c8f67229ca70bb31cd****',
              ),
              'jobDriver' => 
              array (
                'description' => 'Spark Driver相关信息。',
                'required' => false,
                '$ref' => '#/components/schemas/JobDriver',
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'workspaceId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作空间ID。',
            'type' => 'string',
            'required' => true,
            'example' => 'w-d2d82aa09155****',
          ),
        ),
        2 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回数据',
            'description' => '返回数据',
            'type' => 'object',
            'properties' => 
            array (
              'jobRunId' => 
              array (
                'description' => '任务运行ID。',
                'type' => 'string',
                'example' => 'jr-f09a8fda2396****',
              ),
              'requestId' => 
              array (
                'title' => '请求ID。',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DD6B1B2A-5837-5237-ABE4-FF0C8944****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"jobRunId\\": \\"jr-f09a8fda2396****\\",\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '启动Spark任务',
    ),
    'GrantRoleToUsers' => 
    array (
      'summary' => '调用GrantRoleToUsers为用户授予指定角色权限。',
      'path' => '/api/v1/auth/roles/grant',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '193394',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce8QU4HW',
        ),
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
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'roleArn' => 
              array (
                'description' => '角色Arn。',
                'type' => 'string',
                'required' => false,
                'example' => 'acs:emr::w-975bcfda9625****:role/Owner',
              ),
              'userArns' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '用户Arn。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:emr::w-975bcfda96258dd7:member/20468369839086****',
                ),
                'required' => false,
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
            'description' => '请求返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '赋予用户角色',
    ),
    'AddMembers' => 
    array (
      'summary' => '调用AddMembers将RAM用户或RAM角色添加到工作空间作为新成员。',
      'path' => '/api/v1/auth/members',
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
      'operationType' => 'read',
      'systemTags' => 
      array (
        'abilityTreeCode' => '193369',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREemapreduce8QU4HW',
        ),
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
            'description' => '请求体参数。',
            'type' => 'object',
            'properties' => 
            array (
              'workspaceId' => 
              array (
                'description' => '工作空间ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'w-975bcfda9625****',
              ),
              'memberArns' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'required' => false,
                  'example' => 'Ram User示例值：acs:ram::113545727984****:user/20468369839086****

Ram Role示例值：acs:ram::113545727984****:role/aliyunemrsparkjobrundefaultrole',
                ),
                'required' => true,
              ),
            ),
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'regionId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '区域ID。',
            'description' => '区域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
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
            'description' => '请求返回体。',
            'type' => 'object',
            'properties' => 
            array (
              'requestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"DD6B1B2A-5837-5237-ABE4-FF0C8944****\\"\\n}","type":"json"}]',
      'title' => '添加成员',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'emr-serverless-spark.cn-zhangjiakou.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'emr-serverless-spark.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'emr-serverless-spark.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'emr-serverless-spark.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'emr-serverless-spark.cn-shenzhen.aliyuncs.com',
    ),
  ),
);
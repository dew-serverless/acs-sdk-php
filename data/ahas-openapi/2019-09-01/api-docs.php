<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'ahas-openapi',
    'version' => '2019-09-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 43866,
      'title' => '服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeRegions',
        1 => 'GetActivityTask',
        2 => 'GetLicenseKey',
        3 => 'GetUserApplications',
        4 => 'ListActiveApps',
        5 => 'OpenAhasService',
      ),
    ),
    1 => 
    array (
      'id' => 43873,
      'title' => '演练',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CheckExperimentRunnable',
        1 => 'CreateExperiment',
        2 => 'ExecuteExperiment',
        3 => 'FinishExperimentTask',
        4 => 'GetExperimentMeta',
        5 => 'GetExperimentTask',
        6 => 'ListExperimentMetas',
        7 => 'PushExperimentTask',
        8 => 'UpdateExperiment',
        9 => 'UpdateExperimentBasicInfo',
      ),
    ),
    2 => 
    array (
      'id' => 43884,
      'title' => '监控',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'GetMetricsOfApp',
        1 => 'GetSentinelAppSumMetric',
        2 => 'GetMetricsOfResource',
      ),
    ),
    3 => 
    array (
      'id' => 43888,
      'title' => '流控规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFlowRule',
        1 => 'DeleteFlowRule',
        2 => 'EnableFlowRule',
        3 => 'DisableFlowRule',
        4 => 'ModifyFlowRule',
        5 => 'ListFlowRulesOfApp',
        6 => 'ListFlowRulesOfResource',
      ),
    ),
    4 => 
    array (
      'id' => 43896,
      'title' => '降级规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateDegradeRule',
        1 => 'DeleteDegradeRule',
        2 => 'EnableDegradeRule',
        3 => 'DisableDegradeRule',
        4 => 'ListDegradeRulesOfApp',
        5 => 'ListDegradeRulesOfResource',
        6 => 'ModifyDegradeRule',
      ),
    ),
    5 => 
    array (
      'id' => 43904,
      'title' => '隔离规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateIsolationRule',
        1 => 'DeleteIsolationRule',
        2 => 'EnableIsolationRule',
        3 => 'DisableIsolationRule',
        4 => 'ListIsolationRulesOfApp',
        5 => 'ListIsolationRulesOfResource',
        6 => 'ModifyIsolationRule',
      ),
    ),
    6 => 
    array (
      'id' => 43912,
      'title' => '系统规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSystemRule',
        1 => 'DeleteSystemRule',
        2 => 'EnableSystemRule',
        3 => 'DisableSystemRule',
        4 => 'ListSystemRules',
        5 => 'ModifySystemRule',
      ),
    ),
    7 => 
    array (
      'id' => 43919,
      'title' => '热点规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateHotParamRule',
        1 => 'CreateHotParamItems',
        2 => 'DeleteHotParamRule',
        3 => 'EnableHotParamRule',
        4 => 'DisableHotParamRule',
        5 => 'ListHotParamRulesOfApp',
        6 => 'ListHotParamRulesOfResource',
        7 => 'ModifyHotParamRule',
      ),
    ),
    8 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'PageableQueryExperimentTaskByExperimentId',
        1 => 'PageableQueryUserExperiment',
        2 => 'GetUserWorkspace',
        3 => 'PageableQueryExperimentTaskByClusterId',
        4 => 'GetUserApplicationGroups',
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
    'DescribeRegions' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
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
              'Message' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Regions' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'LocalName' => 
                    array (
                      'type' => 'string',
                    ),
                    'RegionEndpoint' => 
                    array (
                      'type' => 'string',
                    ),
                    'RegionId' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
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
      ),
      'responseDemo' => '',
    ),
    'GetActivityTask' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练任务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'ActivityTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点任务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        3 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'Hosts' => 
              array (
                'description' => '机器执行信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'HostIp' => 
                    array (
                      'description' => '节点机器IP',
                      'type' => 'string',
                      'example' => '192.168.0.1',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '节点机器任务结束时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609430400000',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '节点机器任务开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609430400000',
                    ),
                    'Data' => 
                    array (
                      'description' => '小程序返回值，页面以Pretty JSON String形式展示',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'ErrorMessage' => 
                    array (
                      'description' => '节点机器执行错误信息',
                      'type' => 'string',
                      'example' => '无',
                    ),
                    'ExpId' => 
                    array (
                      'description' => '节点机器任务执行ID',
                      'type' => 'string',
                      'example' => '3456****',
                    ),
                    'Result' => 
                    array (
                      'description' => '节点机器任务执行结果',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'State' => 
                    array (
                      'description' => '节点机器任务状态',
                      'type' => 'string',
                      'example' => 'FINISHED',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '节点任务实例ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                  ),
                ),
              ),
              'Phase' => 
              array (
                'description' => '节点所属阶段：

- PREPARE（准备阶段）
- ATTACK（注入阶段）
- CHECK（检查阶段）
- RECOVER（恢复阶段）',
                'type' => 'string',
                'example' => 'ATTACK',
              ),
              'EndTime' => 
              array (
                'description' => '节点任务结束时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1609430400000',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'ActivityName' => 
              array (
                'description' => '节点任务实例名称',
                'type' => 'string',
                'example' => 'CPU满载',
              ),
              'State' => 
              array (
                'description' => '节点任务状态：

- READY（就绪）
- RUNNING（正在执行）
- FINISHED（执行结束）',
                'type' => 'string',
                'example' => 'FINISHED',
              ),
              'ActivityId' => 
              array (
                'description' => '节点任务实例ID',
                'type' => 'string',
                'example' => '1234567890123456789',
              ),
              'ExperimentTaskId' => 
              array (
                'description' => '故障演练任务实例ID',
                'type' => 'string',
                'example' => '1234567890123456789',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'StartTime' => 
              array (
                'description' => '节点任务开始时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1609430400000',
              ),
              'RunResult' => 
              array (
                'description' => '节点任务执行结果：

- SUCCESS（成功）
- FAILED（失败）
- REJECTED（任务调过）
- ERROR（任务异常中断）
- STOPPED（任务被终止）
- SOPPED_FAILED（停止失败）',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Hosts\\": [\\n    {\\n      \\"HostIp\\": \\"192.168.0.1\\",\\n      \\"EndTime\\": 1609430400000,\\n      \\"StartTime\\": 1609430400000,\\n      \\"Data\\": \\"无\\",\\n      \\"ErrorMessage\\": \\"无\\",\\n      \\"ExpId\\": \\"3456****\\",\\n      \\"Result\\": \\"SUCCESS\\",\\n      \\"State\\": \\"FINISHED\\",\\n      \\"TaskId\\": \\"1234567890123456789\\"\\n    }\\n  ],\\n  \\"Phase\\": \\"ATTACK\\",\\n  \\"EndTime\\": 1609430400000,\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"ActivityName\\": \\"CPU满载\\",\\n  \\"State\\": \\"FINISHED\\",\\n  \\"ActivityId\\": \\"1234567890123456789\\",\\n  \\"ExperimentTaskId\\": \\"1234567890123456789\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"StartTime\\": 1609430400000,\\n  \\"RunResult\\": \\"SUCCESS\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetActivityTaskResponse>\\n    <Hosts>\\n        <HostIp>192.168.0.1</HostIp>\\n        <EndTime>1609430400000</EndTime>\\n        <StartTime>1609430400000</StartTime>\\n        <Data>无</Data>\\n        <ErrorMessage>无</ErrorMessage>\\n        <ExpId>3456****</ExpId>\\n        <Result>SUCCESS</Result>\\n        <State>FINISHED</State>\\n        <TaskId>1234567890123456789</TaskId>\\n    </Hosts>\\n    <Phase>ATTACK</Phase>\\n    <EndTime>1609430400000</EndTime>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <ActivityName>CPU满载</ActivityName>\\n    <State>FINISHED</State>\\n    <ActivityId>1234567890123456789</ActivityId>\\n    <ExperimentTaskId>1234567890123456789</ExperimentTaskId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <StartTime>1609430400000</StartTime>\\n    <RunResult>SUCCESS</RunResult>\\n    <Success>true</Success>\\n</GetActivityTaskResponse>","errorExample":""}]',
      'title' => '查询小程序任务',
      'summary' => '调用GetActivityTask接口查询节点任务详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetLicenseKey' => 
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
          'name' => 'Namespace',
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
          'name' => 'AhasRegionId',
          'in' => 'query',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'GetUserApplications' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户应用所在的命名空间（Namespace）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属Region。当且仅当用户为公网地域（Region）时需要填写，默认为public。',
            'type' => 'string',
            'required' => false,
            'example' => 'public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '接口返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '接口失败返回信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求的Request ID。',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'Http状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'AppNameAndIdPairs' => 
              array (
                'description' => '应用列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用元数据。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AppName' => 
                    array (
                      'description' => '应用名称。',
                      'type' => 'string',
                      'example' => '默认应用',
                    ),
                    'AppId' => 
                    array (
                      'description' => '应用ID。',
                      'type' => 'string',
                      'example' => '123456789',
                    ),
                    'ScopeType' => 
                    array (
                      'description' => '应用下机器的机器类型，0表示主机，2表示容器。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'AppType' => 
                    array (
                      'description' => '应用类型，0表示主机应用，1表示集群应用。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口反馈Code。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '请求成功标识。

- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"AppNameAndIdPairs\\": [\\n    {\\n      \\"AppName\\": \\"默认应用\\",\\n      \\"AppId\\": \\"123456789\\",\\n      \\"ScopeType\\": 0,\\n      \\"AppType\\": 0\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetUserApplicationsResponse>\\n    <Message>null</Message>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <AppNameAndIdPairs>\\n        <AppName>默认应用</AppName>\\n        <AppId>123456789</AppId>\\n        <ScopeType>0</ScopeType>\\n        <AppType>0</AppType>\\n    </AppNameAndIdPairs>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetUserApplicationsResponse>","errorExample":""}]',
      'title' => '查询用户下应用列表',
      'summary' => '获取用户应用列表。',
    ),
    'ListActiveApps' => 
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
          'name' => 'Namespace',
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
          'name' => 'AppType',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'maximum' => '2147483647',
            'minimum' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
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
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'AppName' => 
                    array (
                      'type' => 'string',
                    ),
                    'LastHealthPingTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'CurrentLevel' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'Namespace' => 
                    array (
                      'type' => 'string',
                    ),
                    'AppType' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'DirtyLevel' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int32',
                    ),
                    'AhasAppName' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '',
    ),
    'OpenAhasService' => 
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
          'APP' => 
          array (
          ),
        ),
        2 => 
        array (
          'PrivateKey' => 
          array (
          ),
        ),
        3 => 
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'OrderId' => 
              array (
                'description' => '服务开通订单号。',
                'type' => 'string',
                'example' => '212307989980192',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"OrderId\\": \\"212307989980192\\"\\n}","type":"json"}]',
      'title' => '开通AHAS服务',
      'summary' => '开通AHAS服务。',
    ),
    'CheckExperimentRunnable' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属Region，只有当Region为公网的时取值为public。',
            'type' => 'string',
            'required' => false,
            'example' => 'public',
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
                'description' => '异常提示信息，若成功则不返回任何数据。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'FAC4CE70-9ADF-5F8B-832F-XXXXXXXXX',
              ),
              'Code' => 
              array (
                'description' => '系统状态码，成功则不返回任何数据。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"FAC4CE70-9ADF-5F8B-832F-XXXXXXXXX\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CheckExperimentRunnableResponse>\\n    <Message>null</Message>\\n    <RequestId>FAC4CE70-9ADF-5F8B-832F-XXXXXXXXX</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CheckExperimentRunnableResponse>","errorExample":""}]',
      'title' => '检查演练是否可运行',
      'summary' => '校验演练是否可以执行。',
    ),
    'CreateExperiment' => 
    array (
      'summary' => '调用CreateExperiment接口新建一个故障演练。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Definition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练定义。更多信息，请参见[参数说明](~~203383~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"runMode":"SEQUENCE","duration":600,"flowGroups":[{"hosts":["192.168.0.1"],"flows":[{"attack":{"appCode":"chaos.cpu.fullload","userCheck":true,"arguments":{"cpu-percent":"100","namespcae":"default"}}}],"appName":"demo","appGroups":["demo-group"]}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '新建演练',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练描述。',
            'type' => 'string',
            'required' => false,
            'example' => '演练描述',
          ),
        ),
        3 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间（Namespace）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属Region。当且仅当用户为公网地域（Region）时需要填写，默认为public。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '演练标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '演练标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag',
            ),
            'required' => false,
            'example' => '标签',
            'maxItems' => 10,
          ),
        ),
        6 => 
        array (
          'name' => 'Workspaces',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '演练空间列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '演练空间ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'workspace',
            ),
            'required' => false,
            'docRequired' => false,
            'maxItems' => 10,
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
              'RequestId' => 
              array (
                'description' => '请求Request ID。',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Message' => 
              array (
                'description' => '接口报错信息。',
                'type' => 'string',
                'example' => '无',
              ),
              'ExperimentId' => 
              array (
                'description' => '故障演练ID。',
                'type' => 'string',
                'example' => '1234567890123456800',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '接口返回Code。',
                'type' => 'string',
                'example' => 'P_ERROR_****',
              ),
              'Success' => 
              array (
                'description' => '请求成功标识。

true：成功
false：失败',
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
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Message\\": \\"无\\",\\n  \\"ExperimentId\\": \\"1234567890123456800\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"P_ERROR_****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateExperimentResponse>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Message>无</Message>\\n    <ExperimentId>1234567890123456800</ExperimentId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>P_ERROR_****</Code>\\n    <Success>true</Success>\\n</CreateExperimentResponse>","errorExample":""}]',
      'title' => '创建演练权限',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ExecuteExperiment' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'Definition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练动态参数定义。更多信息，请参见[参数说明](~~203383~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '{"param":[{"groupId":"1234567890123456789","appName":"ahas-default-node","appGroups":["AHAS杭州预发环境"],"hosts":["192.168.0.205"],"activityParam":[{"flowId":"1234567890123456789","appCode":"chaos.cpu.fullload","arguments":{"cpu_count":"1","namespace":"default"}}]}]}',
          ),
        ),
        3 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'TaskId' => 
              array (
                'description' => '执行演练生成的演练任务实例ID',
                'type' => 'string',
                'example' => '1234567890123456789',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Code' => 
              array (
                'description' => '接口反馈错误编码',
                'type' => 'string',
                'example' => '无',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"TaskId\\": \\"1234567890123456789\\",\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Code\\": \\"无\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ExecuteExperimentResponse>\\n    <TaskId>1234567890123456789</TaskId>\\n    <Message>无</Message>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Code>无</Code>\\n    <Success>true</Success>\\n</ExecuteExperimentResponse>","errorExample":""}]',
      'title' => '执行演练权限',
      'summary' => '调用ExecuteExperiment接口执行故障演练。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'FinishExperimentTask' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练任务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Code' => 
              array (
                'description' => '接口错误编码',
                'type' => 'string',
                'example' => 'P_ERROR_****',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Code\\": \\"P_ERROR_****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<FinishExperimentTaskResponse>\\n    <Message>无</Message>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Code>P_ERROR_****</Code>\\n    <Success>true</Success>\\n</FinishExperimentTaskResponse>","errorExample":""}]',
      'title' => '结束演练任务',
      'summary' => '调用FinishExperimentTask接口停止故障演练任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetExperimentMeta' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户应用所在的命名空间（Namespace）。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
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
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '37cbf1a4-a7e8-4fff-93ac-XXXXXXXXXX',
              ),
              'Message' => 
              array (
                'description' => '异常提示信息，若成功则不返回任何数据。',
                'type' => 'string',
                'example' => 'null',
              ),
              'State' => 
              array (
                'description' => '演练状态。包括：

- INVISIBLE 不可见
- DRAFT 编辑中
- READY 就绪
- RUNNING 运行中
- FINISHED 已结束',
                'type' => 'string',
                'example' => 'READY',
              ),
              'ExperimentId' => 
              array (
                'description' => '故障演练ID。',
                'type' => 'string',
                'example' => '1234567890',
              ),
              'CreateTime' => 
              array (
                'description' => '演练创建时间。',
                'type' => 'string',
                'example' => '1649658306000',
              ),
              'Code' => 
              array (
                'description' => '系统状态码，若成功则不返回任何数据。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。

- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Tags' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'description' => '演练标签。',
                  'type' => 'string',
                  'example' => 'tag',
                ),
              ),
              'Name' => 
              array (
                'description' => '演练名称。',
                'type' => 'string',
                'example' => '测试演练',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"37cbf1a4-a7e8-4fff-93ac-XXXXXXXXXX\\",\\n  \\"Message\\": \\"null\\",\\n  \\"State\\": \\"READY\\",\\n  \\"ExperimentId\\": \\"1234567890\\",\\n  \\"CreateTime\\": \\"1649658306000\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"Tags\\": [\\n    \\"tag\\"\\n  ],\\n  \\"Name\\": \\"测试演练\\"\\n}","errorExample":""},{"type":"xml","example":"<GetExperimentMetaResponse>\\n    <RequestId>37cbf1a4-a7e8-4fff-93ac-XXXXXXXXXX</RequestId>\\n    <Message>null</Message>\\n    <State>READY</State>\\n    <ExperimentId>1234567890</ExperimentId>\\n    <CreateTime>1649658306000</CreateTime>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <Tags>tag</Tags>\\n    <Name>测试演练</Name>\\n</GetExperimentMetaResponse>","errorExample":""}]',
      'title' => '查询演练基本信息',
      'summary' => '获取演练基本数据信息。',
    ),
    'GetExperimentTask' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练任务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'Activities' => 
              array (
                'description' => '节点场景任务详情',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '节点任务结束时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609430400000',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '节点任务开始时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609430400000',
                    ),
                    'CheckState' => 
                    array (
                      'description' => '用户确认状态：

- USER_CHECK_STATE_WAITING（等待用户确认）
- USER_CHECK_STATE_PASSED（用户确认通过）
- USER_CHECK_STATE_FAILED（用户确认失败）',
                      'type' => 'string',
                      'example' => 'USER_CHECK_STATE_PASSED',
                    ),
                    'RunResult' => 
                    array (
                      'description' => '节点任务执行结果：

- SUCCESS（成功）
- FAILED（失败）
- REJECTED（任务调过）
- ERROR（任务异常中断）
- STOPPED（任务被终止）
- SOPPED_FAILED（停止失败）',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'State' => 
                    array (
                      'description' => '节点任务状态：

- READY（就绪）
- RUNNING（正在执行）
- FINISHED（执行结束）',
                      'type' => 'string',
                      'example' => 'READY',
                    ),
                    'ActivityId' => 
                    array (
                      'description' => '演练节点ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'Phase' => 
                    array (
                      'description' => '节点所属阶段：
- PREPARE（准备阶段）
- ATTACK（注入阶段）
- CHECK（检查阶段）
- RECOVER（恢复阶段）',
                      'type' => 'string',
                      'example' => 'ATTACK',
                    ),
                    'ActivityName' => 
                    array (
                      'description' => '演练节点任务名称',
                      'type' => 'string',
                      'example' => 'CPU满载',
                    ),
                    'ExperimentTaskId' => 
                    array (
                      'description' => '故障演练任务实例ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '节点任务实例ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                  ),
                ),
              ),
              'TaskId' => 
              array (
                'description' => '故障演练任务实例ID',
                'type' => 'string',
                'example' => '1234567890123456789',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'ExperimentName' => 
              array (
                'description' => '故障演练名称',
                'type' => 'string',
                'example' => '测试演练',
              ),
              'State' => 
              array (
                'description' => '演练任务状态',
                'type' => 'string',
                'example' => 'FINISHED',
              ),
              'ExperimentId' => 
              array (
                'description' => '故障演练任务ID',
                'type' => 'string',
                'example' => '1234567890123456789',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'StartTime' => 
              array (
                'description' => '演练任务开始时间',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1609430400000',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Result' => 
              array (
                'description' => '任务执行结果',
                'type' => 'string',
                'example' => 'SUCCESS',
              ),
              'Namespace' => 
              array (
                'description' => '命名空间',
                'type' => 'string',
                'example' => 'default',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Activities\\": [\\n    {\\n      \\"EndTime\\": 1609430400000,\\n      \\"StartTime\\": 1609430400000,\\n      \\"CheckState\\": \\"USER_CHECK_STATE_PASSED\\",\\n      \\"RunResult\\": \\"SUCCESS\\",\\n      \\"State\\": \\"READY\\",\\n      \\"ActivityId\\": \\"1234567890123456789\\",\\n      \\"Phase\\": \\"ATTACK\\",\\n      \\"ActivityName\\": \\"CPU满载\\",\\n      \\"ExperimentTaskId\\": \\"1234567890123456789\\",\\n      \\"TaskId\\": \\"1234567890123456789\\"\\n    }\\n  ],\\n  \\"TaskId\\": \\"1234567890123456789\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"ExperimentName\\": \\"测试演练\\",\\n  \\"State\\": \\"FINISHED\\",\\n  \\"ExperimentId\\": \\"1234567890123456789\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"StartTime\\": 1609430400000,\\n  \\"Success\\": true,\\n  \\"Result\\": \\"SUCCESS\\",\\n  \\"Namespace\\": \\"default\\"\\n}","errorExample":""},{"type":"xml","example":"<GetExperimentTaskResponse>\\n    <Activities>\\n        <EndTime>1609430400000</EndTime>\\n        <StartTime>1609430400000</StartTime>\\n        <CheckState>USER_CHECK_STATE_PASSED</CheckState>\\n        <RunResult>SUCCESS</RunResult>\\n        <State>READY</State>\\n        <ActivityId>1234567890123456789</ActivityId>\\n        <Phase>ATTACK</Phase>\\n        <ActivityName>CPU满载</ActivityName>\\n        <ExperimentTaskId>1234567890123456789</ExperimentTaskId>\\n        <TaskId>1234567890123456789</TaskId>\\n    </Activities>\\n    <TaskId>1234567890123456789</TaskId>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <ExperimentName>测试演练</ExperimentName>\\n    <State>FINISHED</State>\\n    <ExperimentId>1234567890123456789</ExperimentId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <StartTime>1609430400000</StartTime>\\n    <Success>true</Success>\\n    <Result>SUCCESS</Result>\\n    <Namespace>default</Namespace>\\n</GetExperimentTaskResponse>","errorExample":""}]',
      'title' => '获取演练任务信息',
      'summary' => '调用GetExperimentTask接口查询故障演练任务详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListExperimentMetas' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码（默认为1）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
            'default' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小（默认为10）',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
            'default' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'Pages' => 
              array (
                'description' => '页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '无',
              ),
              'PageSize' => 
              array (
                'description' => '分页大小',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Content' => 
              array (
                'description' => '演练列表信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'State' => 
                    array (
                      'description' => '故障演练当前状态',
                      'type' => 'string',
                      'example' => 'READY',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '演练创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1609430400000',
                    ),
                    'ExperimentId' => 
                    array (
                      'description' => '故障演练ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'Tags' => 
                    array (
                      'description' => '演练标签',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '故障演练标签',
                        'type' => 'string',
                        'example' => '标签',
                      ),
                    ),
                    'Name' => 
                    array (
                      'description' => '故障演练名称',
                      'type' => 'string',
                      'example' => '测试演练',
                    ),
                  ),
                ),
              ),
              'Total' => 
              array (
                'description' => '演练总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '123',
              ),
              'Code' => 
              array (
                'description' => '接口错误编码',
                'type' => 'string',
                'example' => '无',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Pages\\": 1,\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Message\\": \\"无\\",\\n  \\"PageSize\\": 10,\\n  \\"CurrentPage\\": 1,\\n  \\"Content\\": [\\n    {\\n      \\"State\\": \\"READY\\",\\n      \\"CreateTime\\": 1609430400000,\\n      \\"ExperimentId\\": \\"1234567890123456789\\",\\n      \\"Tags\\": [\\n        \\"标签\\"\\n      ],\\n      \\"Name\\": \\"测试演练\\"\\n    }\\n  ],\\n  \\"Total\\": 123,\\n  \\"Code\\": \\"无\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListExperimentMetasResponse>\\n    <Pages>1</Pages>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Message>无</Message>\\n    <PageSize>10</PageSize>\\n    <CurrentPage>1</CurrentPage>\\n    <Content>\\n        <State>READY</State>\\n        <CreateTime>1609430400000</CreateTime>\\n        <ExperimentId>1234567890123456789</ExperimentId>\\n        <Tags>标签</Tags>\\n        <Name>测试演练</Name>\\n    </Content>\\n    <Total>123</Total>\\n    <Code>无</Code>\\n    <Success>true</Success>\\n</ListExperimentMetasResponse>","errorExample":""}]',
      'title' => '分页查询演练基本信息',
      'summary' => '调用ListExperimentMetas接口分页查询演练列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PushExperimentTask' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练任务实例ID',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '无',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Code' => 
              array (
                'description' => '接口错误编码',
                'type' => 'string',
                'example' => '无',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Code\\": \\"无\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<PushExperimentTaskResponse>\\n    <Message>无</Message>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Code>无</Code>\\n    <Success>true</Success>\\n</PushExperimentTaskResponse>","errorExample":""}]',
      'title' => '推进演练',
      'summary' => '调用PushExperimentTask接口推进故障演练任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateExperiment' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Definition',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练流程定义。更多信息，请参见[参数说明](~~203383~~)。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '{"runMode":"SEQUENCE","duration":600,"flowGroups":[{"hosts":["192.168.0.1"],"flows":[{"attack":{"appCode":"chaos.cpu.fullload","userCheck":true,"arguments":{"cpu-percent":"100","namespcae":"default"}}}],"appName":"demo","appGroups":["demo-group"]}]}',
          ),
        ),
        1 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'CPU满载场景',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练描述。',
            'type' => 'string',
            'required' => false,
            'example' => '描述',
          ),
        ),
        3 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890123456789',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        6 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '故障演练标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签内容。',
              'type' => 'string',
              'required' => false,
              'example' => 'cn-hangzhou',
            ),
            'required' => false,
            'example' => '标签',
            'maxItems' => 10,
          ),
        ),
        7 => 
        array (
          'name' => 'Workspaces',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '工作空间ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '工作空间ID。',
              'type' => 'string',
              'required' => false,
              'example' => '1234567890',
            ),
            'deprecated' => false,
            'required' => false,
            'maxItems' => 10,
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
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '接口反馈编码。',
                'type' => 'string',
                'example' => 'P_ERROR_****',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识。',
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
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"P_ERROR_****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateExperimentResponse>\\n    <Message>null</Message>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>P_ERROR_****</Code>\\n    <Success>true</Success>\\n</UpdateExperimentResponse>","errorExample":""}]',
      'title' => '更新演练',
      'summary' => '调用UpdateExperiment接口编辑故障演练基本信息及流程定义。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'UpdateExperimentBasicInfo' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间（Namespace）。',
            'type' => 'string',
            'required' => true,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'CPU满载测试',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'CPU使用率提高至100%',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属Region。当且仅当用户为公网地域（Region）时需要填写，默认为public。',
            'type' => 'string',
            'required' => false,
            'example' => 'public',
          ),
        ),
        5 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '演练标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '演练标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag',
            ),
            'required' => false,
            'maxItems' => 100,
          ),
        ),
        6 => 
        array (
          'name' => 'Workspaces',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '演练空间列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '演练空间ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'workspace',
            ),
            'required' => false,
            'docRequired' => false,
            'maxItems' => 10,
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
                'description' => '接口报错信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求Request ID。',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '接口返回Code。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '请求成功标识。

- true：成功
- false：失败',
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
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdateExperimentBasicInfoResponse>\\n    <Message>null</Message>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdateExperimentBasicInfoResponse>","errorExample":""}]',
      'title' => '更新演练基本信息',
      'summary' => '修改演练基本信息。',
    ),
    'GetMetricsOfApp' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台具体应用的基本信息页签中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1596081600000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，单位毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1596081780000',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'InnerMetrics' => 
                  array (
                    'description' => '应用监控metrics数据',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RtP99' => 
                        array (
                          'description' => '应用RT 99分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'SuccessQpsAvg' => 
                        array (
                          'description' => '应用success QPS平均值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'PassedQpsP99' => 
                        array (
                          'description' => '应用paas QPS 99分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'RtAvg' => 
                        array (
                          'description' => '应用RT平均值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '6.5',
                        ),
                        'Count' => 
                        array (
                          'description' => '集群机器数',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ThreadStd' => 
                        array (
                          'description' => '应用并发数标准差值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'PassedQpsAvg' => 
                        array (
                          'description' => '应用paas QPS 平均值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ExceptionP95' => 
                        array (
                          'description' => '应用异常QPS 95分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'SuccessQpsMax' => 
                        array (
                          'description' => '应用success QPS最大值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'RtP95' => 
                        array (
                          'description' => '应用RT 95分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'BlockedQpsMin' => 
                        array (
                          'description' => '接口限流QPS最小值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'BlockedQps' => 
                        array (
                          'description' => '集群接口限流QPS',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '173',
                        ),
                        'Timestamp' => 
                        array (
                          'description' => '时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1596593014000',
                        ),
                        'ThreadP95' => 
                        array (
                          'description' => '应用并发数95分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'RtStd' => 
                        array (
                          'description' => '应用RT 标准差值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.7',
                        ),
                        'PassedQpsMin' => 
                        array (
                          'description' => '应用paas QPS 最小值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'BlockedQpsP99' => 
                        array (
                          'description' => '接口限流QPS 99分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'PassedQpsMax' => 
                        array (
                          'description' => '应用paas QPS 最大值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ExceptionMax' => 
                        array (
                          'description' => '应用异常QPS最大值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'SuccessQps' => 
                        array (
                          'description' => '应用集群success QPS',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '286',
                        ),
                        'SuccessQpsP75' => 
                        array (
                          'description' => '应用success QPS 75分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ThreadP75' => 
                        array (
                          'description' => '应用并发数75分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'SuccessQpsStd' => 
                        array (
                          'description' => '应用success QPS 标准差值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ExceptionMin' => 
                        array (
                          'description' => '应用异常QPS最小值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'PassedQpsP75' => 
                        array (
                          'description' => '应用paas QPS 75分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'PassedQps' => 
                        array (
                          'description' => '集群paas QPS',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '286',
                        ),
                        'ThreadMax' => 
                        array (
                          'description' => '应用并发数最大值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'SuccessQpsP99' => 
                        array (
                          'description' => '应用success QPS 99分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'SuccessQpsMin' => 
                        array (
                          'description' => '应用success QPS最小值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ThreadP99' => 
                        array (
                          'description' => '应用并发数99分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'ExceptionStd' => 
                        array (
                          'description' => '应用异常QPS 标准差值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'BlockedQpsP95' => 
                        array (
                          'description' => '接口限流QPS 95分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'Thread' => 
                        array (
                          'description' => '应用集群并发数',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '2',
                        ),
                        'ThreadMin' => 
                        array (
                          'description' => '应用并发数最小值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'RtMin' => 
                        array (
                          'description' => '应用RT最小值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'BlockedQpsAvg' => 
                        array (
                          'description' => '接口限流QPS平均值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'ThreadAvg' => 
                        array (
                          'description' => '应用并发数平均值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'BlockedQpsP75' => 
                        array (
                          'description' => '接口限流QPS 75分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'RtP75' => 
                        array (
                          'description' => '应用RT 75分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'ExceptionP99' => 
                        array (
                          'description' => '应用异常QPS 99分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ExceptionP75' => 
                        array (
                          'description' => '应用异常QPS 75分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'SuccessQpsP95' => 
                        array (
                          'description' => '应用success QPS 95分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'Rt' => 
                        array (
                          'description' => '应用集群平均RT',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '6.5',
                        ),
                        'PassedQpsP95' => 
                        array (
                          'description' => '应用paas QPS 95分位数值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'RtMax' => 
                        array (
                          'description' => '应用RT最大值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'BlockedQpsStd' => 
                        array (
                          'description' => '接口限流QPS 标准差值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'BlockedQpsMax' => 
                        array (
                          'description' => '接口限流QPS最大值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'Exception' => 
                        array (
                          'description' => '集群异常QPS',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ExceptionAvg' => 
                        array (
                          'description' => '应用异常QPS平均值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'PassedQpsStd' => 
                        array (
                          'description' => '应用paas QPS 标准差值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"InnerMetrics\\": [\\n      {\\n        \\"RtP99\\": 7,\\n        \\"SuccessQpsAvg\\": 143,\\n        \\"PassedQpsP99\\": 143,\\n        \\"RtAvg\\": 6.5,\\n        \\"Count\\": 0,\\n        \\"ThreadStd\\": 1,\\n        \\"PassedQpsAvg\\": 143,\\n        \\"ExceptionP95\\": 0,\\n        \\"SuccessQpsMax\\": 143,\\n        \\"RtP95\\": 7,\\n        \\"BlockedQpsMin\\": 86,\\n        \\"BlockedQps\\": 173,\\n        \\"Timestamp\\": 1596593014000,\\n        \\"ThreadP95\\": 1,\\n        \\"RtStd\\": 0.7,\\n        \\"PassedQpsMin\\": 143,\\n        \\"BlockedQpsP99\\": 86,\\n        \\"PassedQpsMax\\": 143,\\n        \\"ExceptionMax\\": 0,\\n        \\"SuccessQps\\": 286,\\n        \\"SuccessQpsP75\\": 143,\\n        \\"ThreadP75\\": 1,\\n        \\"SuccessQpsStd\\": 0,\\n        \\"ExceptionMin\\": 0,\\n        \\"PassedQpsP75\\": 143,\\n        \\"PassedQps\\": 286,\\n        \\"ThreadMax\\": 1,\\n        \\"SuccessQpsP99\\": 143,\\n        \\"SuccessQpsMin\\": 143,\\n        \\"ThreadP99\\": 1,\\n        \\"ExceptionStd\\": 0,\\n        \\"BlockedQpsP95\\": 86,\\n        \\"Thread\\": 2,\\n        \\"ThreadMin\\": 1,\\n        \\"RtMin\\": 7,\\n        \\"BlockedQpsAvg\\": 86,\\n        \\"ThreadAvg\\": 1,\\n        \\"BlockedQpsP75\\": 86,\\n        \\"RtP75\\": 7,\\n        \\"ExceptionP99\\": 0,\\n        \\"ExceptionP75\\": 0,\\n        \\"SuccessQpsP95\\": 143,\\n        \\"Rt\\": 6.5,\\n        \\"PassedQpsP95\\": 143,\\n        \\"RtMax\\": 7,\\n        \\"BlockedQpsStd\\": 0,\\n        \\"BlockedQpsMax\\": 86,\\n        \\"Exception\\": 0,\\n        \\"ExceptionAvg\\": 0,\\n        \\"PassedQpsStd\\": 143\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetMetricsOfAppResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <AppName>ahas-demo</AppName>\\n        <Namespace>default</Namespace>\\n        <InnerMetrics>\\n            <RtP99>7</RtP99>\\n            <SuccessQpsAvg>143</SuccessQpsAvg>\\n            <PassedQpsP99>143</PassedQpsP99>\\n            <RtAvg>6.5</RtAvg>\\n            <Count>0</Count>\\n            <ThreadStd>1</ThreadStd>\\n            <PassedQpsAvg>143</PassedQpsAvg>\\n            <ExceptionP95>0</ExceptionP95>\\n            <SuccessQpsMax>143</SuccessQpsMax>\\n            <RtP95>7</RtP95>\\n            <BlockedQpsMin>86</BlockedQpsMin>\\n            <BlockedQps>173</BlockedQps>\\n            <Timestamp>1596593014000</Timestamp>\\n            <ThreadP95>1</ThreadP95>\\n            <RtStd>0.7</RtStd>\\n            <PassedQpsMin>143</PassedQpsMin>\\n            <BlockedQpsP99>86</BlockedQpsP99>\\n            <PassedQpsMax>143</PassedQpsMax>\\n            <ExceptionMax>0</ExceptionMax>\\n            <SuccessQps>286</SuccessQps>\\n            <SuccessQpsP75>143</SuccessQpsP75>\\n            <ThreadP75>1</ThreadP75>\\n            <SuccessQpsStd>0</SuccessQpsStd>\\n            <ExceptionMin>0</ExceptionMin>\\n            <PassedQpsP75>143</PassedQpsP75>\\n            <PassedQps>286</PassedQps>\\n            <ThreadMax>1</ThreadMax>\\n            <SuccessQpsP99>143</SuccessQpsP99>\\n            <SuccessQpsMin>143</SuccessQpsMin>\\n            <ThreadP99>1</ThreadP99>\\n            <ExceptionStd>0</ExceptionStd>\\n            <BlockedQpsP95>86</BlockedQpsP95>\\n            <Thread>2</Thread>\\n            <ThreadMin>1</ThreadMin>\\n            <RtMin>7</RtMin>\\n            <BlockedQpsAvg>86</BlockedQpsAvg>\\n            <ThreadAvg>1</ThreadAvg>\\n            <BlockedQpsP75>86</BlockedQpsP75>\\n            <RtP75>7</RtP75>\\n            <ExceptionP99>0</ExceptionP99>\\n            <ExceptionP75>0</ExceptionP75>\\n            <SuccessQpsP95>143</SuccessQpsP95>\\n            <Rt>6.5</Rt>\\n            <PassedQpsP95>143</PassedQpsP95>\\n            <RtMax>7</RtMax>\\n            <BlockedQpsStd>0</BlockedQpsStd>\\n            <BlockedQpsMax>86</BlockedQpsMax>\\n            <Exception>0</Exception>\\n            <ExceptionAvg>0</ExceptionAvg>\\n            <PassedQpsStd>143</PassedQpsStd>\\n        </InnerMetrics>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetMetricsOfAppResponse>","errorExample":""}]',
      'title' => '获取应用监控指标',
      'summary' => '调用GetMetricsOfApp接口获取应用监控指标。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetSentinelAppSumMetric' => 
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AcceptLanguage',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
          ),
        ),
        2 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
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
          'name' => 'AhasRegionId',
          'in' => 'query',
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
              'MetricData' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'type' => 'string',
                  ),
                  'PassCount' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'MachineCount' => 
                  array (
                    'type' => 'integer',
                    'format' => 'int64',
                  ),
                  'AvgRt' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'UserId' => 
                  array (
                    'type' => 'string',
                  ),
                  'Namespace' => 
                  array (
                    'type' => 'string',
                  ),
                  'TotalCount' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                  'BlockCount' => 
                  array (
                    'type' => 'number',
                    'format' => 'float',
                  ),
                ),
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
    'GetMetricsOfResource' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleService',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间。支持的格式：

- Unix时间戳：从1970年1月1日开始所经过的毫秒数。
- Format格式：YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1596081600000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间。支持的格式：

- Unix时间戳：从1970年1月1日开始所经过的毫秒数。
- Format格式：YYYY-MM-DDThh:mm:ssZ。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1596081780000',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94E*****10',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名。',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'InnerMetrics' => 
                  array (
                    'description' => '资源Metric数据。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RtP99' => 
                        array (
                          'description' => '接口RT 99分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'SuccessQpsAvg' => 
                        array (
                          'description' => '接口Success QPS平均值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'PassedQpsP99' => 
                        array (
                          'description' => '接口Pass QPS 99分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'RtAvg' => 
                        array (
                          'description' => '接口RT平均值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '6.5',
                        ),
                        'Count' => 
                        array (
                          'description' => '机器数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'ThreadStd' => 
                        array (
                          'description' => '接口并发数标准差值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'PassedQpsAvg' => 
                        array (
                          'description' => '接口Pass QPS平均值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ExceptionP95' => 
                        array (
                          'description' => '接口异常QPS 95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'SuccessQpsMax' => 
                        array (
                          'description' => '接口Success QPS最大值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'RtP95' => 
                        array (
                          'description' => '接口RT 95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'BlockedQpsMin' => 
                        array (
                          'description' => '接口限流QPS最小值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'BlockedQps' => 
                        array (
                          'description' => '接口集群限流QPS。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '173',
                        ),
                        'Timestamp' => 
                        array (
                          'description' => '时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1596593014000',
                        ),
                        'ThreadP95' => 
                        array (
                          'description' => '接口并发数95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'RtStd' => 
                        array (
                          'description' => '接口RT标准差值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.7',
                        ),
                        'PassedQpsMin' => 
                        array (
                          'description' => '接口Pass QPS最小值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'BlockedQpsP99' => 
                        array (
                          'description' => '接口限流QPS 99分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'PassedQpsMax' => 
                        array (
                          'description' => '接口Pass QPS最大值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ExceptionMax' => 
                        array (
                          'description' => '接口异常QPS最大值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'SuccessQps' => 
                        array (
                          'description' => '接口集群Success QPS。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '286',
                        ),
                        'SuccessQpsP75' => 
                        array (
                          'description' => '接口Success QPS 75分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ThreadP75' => 
                        array (
                          'description' => '接口并发数75分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'SuccessQpsStd' => 
                        array (
                          'description' => '接口Success QPS 标准差值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ExceptionMin' => 
                        array (
                          'description' => '接口异常QPS最小值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'PassedQpsP75' => 
                        array (
                          'description' => '接口Pass QPS 75分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'PassedQps' => 
                        array (
                          'description' => '接口集群Pass QPS。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '286',
                        ),
                        'ThreadMax' => 
                        array (
                          'description' => '接口并发数最大值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'SuccessQpsP99' => 
                        array (
                          'description' => '接口Success QPS 95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'SuccessQpsMin' => 
                        array (
                          'description' => '接口Success QPS最小值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'ThreadP99' => 
                        array (
                          'description' => '接口并发数99分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'ExceptionStd' => 
                        array (
                          'description' => '接口异常QPS标准差值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'BlockedQpsP95' => 
                        array (
                          'description' => '接口限流QPS 95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'Thread' => 
                        array (
                          'description' => '接口集群并发数。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '2',
                        ),
                        'ThreadMin' => 
                        array (
                          'description' => '接口并发数最小值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'RtMin' => 
                        array (
                          'description' => '接口RT最小值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '6.5',
                        ),
                        'BlockedQpsAvg' => 
                        array (
                          'description' => '接口限流QPS平均值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'ThreadAvg' => 
                        array (
                          'description' => '接口并发数平均值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1',
                        ),
                        'BlockedQpsP75' => 
                        array (
                          'description' => '接口限流QPS 75分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'RtP75' => 
                        array (
                          'description' => '接口RT 75分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'ExceptionP99' => 
                        array (
                          'description' => '接口异常QPS 99分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ExceptionP75' => 
                        array (
                          'description' => '接口异常QPS 75分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'SuccessQpsP95' => 
                        array (
                          'description' => '接口Success QPS 95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'Rt' => 
                        array (
                          'description' => '接口集群平均RT。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '6.5',
                        ),
                        'PassedQpsP95' => 
                        array (
                          'description' => '接口Pass QPS 95分位数值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '143',
                        ),
                        'RtMax' => 
                        array (
                          'description' => '接口RT最大值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '7',
                        ),
                        'BlockedQpsStd' => 
                        array (
                          'description' => '接口限流QPS标准差值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'BlockedQpsMax' => 
                        array (
                          'description' => '接口限流QPS最大值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '86',
                        ),
                        'Exception' => 
                        array (
                          'description' => '接口集群异常QPS。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ExceptionAvg' => 
                        array (
                          'description' => '接口异常QPS平均值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'PassedQpsStd' => 
                        array (
                          'description' => '接口Pass QPS标准差值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94E*****10\\",\\n  \\"Data\\": {\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"Resource\\": \\"handleService\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"InnerMetrics\\": [\\n      {\\n        \\"RtP99\\": 7,\\n        \\"SuccessQpsAvg\\": 143,\\n        \\"PassedQpsP99\\": 143,\\n        \\"RtAvg\\": 6.5,\\n        \\"Count\\": 2,\\n        \\"ThreadStd\\": 0,\\n        \\"PassedQpsAvg\\": 143,\\n        \\"ExceptionP95\\": 0,\\n        \\"SuccessQpsMax\\": 143,\\n        \\"RtP95\\": 7,\\n        \\"BlockedQpsMin\\": 86,\\n        \\"BlockedQps\\": 173,\\n        \\"Timestamp\\": 1596593014000,\\n        \\"ThreadP95\\": 1,\\n        \\"RtStd\\": 0.7,\\n        \\"PassedQpsMin\\": 143,\\n        \\"BlockedQpsP99\\": 86,\\n        \\"PassedQpsMax\\": 143,\\n        \\"ExceptionMax\\": 0,\\n        \\"SuccessQps\\": 286,\\n        \\"SuccessQpsP75\\": 143,\\n        \\"ThreadP75\\": 1,\\n        \\"SuccessQpsStd\\": 0,\\n        \\"ExceptionMin\\": 0,\\n        \\"PassedQpsP75\\": 143,\\n        \\"PassedQps\\": 286,\\n        \\"ThreadMax\\": 1,\\n        \\"SuccessQpsP99\\": 143,\\n        \\"SuccessQpsMin\\": 143,\\n        \\"ThreadP99\\": 1,\\n        \\"ExceptionStd\\": 0,\\n        \\"BlockedQpsP95\\": 86,\\n        \\"Thread\\": 2,\\n        \\"ThreadMin\\": 1,\\n        \\"RtMin\\": 6.5,\\n        \\"BlockedQpsAvg\\": 86,\\n        \\"ThreadAvg\\": 1,\\n        \\"BlockedQpsP75\\": 86,\\n        \\"RtP75\\": 7,\\n        \\"ExceptionP99\\": 0,\\n        \\"ExceptionP75\\": 0,\\n        \\"SuccessQpsP95\\": 143,\\n        \\"Rt\\": 6.5,\\n        \\"PassedQpsP95\\": 143,\\n        \\"RtMax\\": 7,\\n        \\"BlockedQpsStd\\": 0,\\n        \\"BlockedQpsMax\\": 86,\\n        \\"Exception\\": 0,\\n        \\"ExceptionAvg\\": 0,\\n        \\"PassedQpsStd\\": 0\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetMetricsOfResourceResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94E*****10</RequestId>\\n    <Data>\\n        <AppName>ahas-demo</AppName>\\n        <Resource>handleService</Resource>\\n        <Namespace>default</Namespace>\\n        <InnerMetrics>\\n            <RtP99>7</RtP99>\\n            <SuccessQpsAvg>143</SuccessQpsAvg>\\n            <PassedQpsP99>143</PassedQpsP99>\\n            <RtAvg>6.5</RtAvg>\\n            <Count>2</Count>\\n            <ThreadStd>0</ThreadStd>\\n            <PassedQpsAvg>143</PassedQpsAvg>\\n            <ExceptionP95>0</ExceptionP95>\\n            <SuccessQpsMax>143</SuccessQpsMax>\\n            <RtP95>7</RtP95>\\n            <BlockedQpsMin>86</BlockedQpsMin>\\n            <BlockedQps>173</BlockedQps>\\n            <Timestamp>1596593014000</Timestamp>\\n            <ThreadP95>1</ThreadP95>\\n            <RtStd>0.7</RtStd>\\n            <PassedQpsMin>143</PassedQpsMin>\\n            <BlockedQpsP99>86</BlockedQpsP99>\\n            <PassedQpsMax>143</PassedQpsMax>\\n            <ExceptionMax>0</ExceptionMax>\\n            <SuccessQps>286</SuccessQps>\\n            <SuccessQpsP75>143</SuccessQpsP75>\\n            <ThreadP75>1</ThreadP75>\\n            <SuccessQpsStd>0</SuccessQpsStd>\\n            <ExceptionMin>0</ExceptionMin>\\n            <PassedQpsP75>143</PassedQpsP75>\\n            <PassedQps>286</PassedQps>\\n            <ThreadMax>1</ThreadMax>\\n            <SuccessQpsP99>143</SuccessQpsP99>\\n            <SuccessQpsMin>143</SuccessQpsMin>\\n            <ThreadP99>1</ThreadP99>\\n            <ExceptionStd>0</ExceptionStd>\\n            <BlockedQpsP95>86</BlockedQpsP95>\\n            <Thread>2</Thread>\\n            <ThreadMin>1</ThreadMin>\\n            <RtMin>6.5</RtMin>\\n            <BlockedQpsAvg>86</BlockedQpsAvg>\\n            <ThreadAvg>1</ThreadAvg>\\n            <BlockedQpsP75>86</BlockedQpsP75>\\n            <RtP75>7</RtP75>\\n            <ExceptionP99>0</ExceptionP99>\\n            <ExceptionP75>0</ExceptionP75>\\n            <SuccessQpsP95>143</SuccessQpsP95>\\n            <Rt>6.5</Rt>\\n            <PassedQpsP95>143</PassedQpsP95>\\n            <RtMax>7</RtMax>\\n            <BlockedQpsStd>0</BlockedQpsStd>\\n            <BlockedQpsMax>86</BlockedQpsMax>\\n            <Exception>0</Exception>\\n            <ExceptionAvg>0</ExceptionAvg>\\n            <PassedQpsStd>0</PassedQpsStd>\\n        </InnerMetrics>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetMetricsOfResourceResponse>","errorExample":""}]',
      'title' => '获取资源metric数据',
      'summary' => '调用GetMetricsOfResource接口获取资源metric数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateFlowRule' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'RelationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度。0表示当前接口，1表示关联接口，2表示链路入口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控规则的阈值，取值范围为≥0的整数。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'docRequired' => true,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则是否开启，默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名。不能超过1024个字符，且该资源名需要与接口详情页面的资源名称相对应。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleServiceA',
          ),
        ),
        6 => 
        array (
          'name' => 'LimitOrigin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源应用，默认为default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        7 => 
        array (
          'name' => 'RefResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联接口名、入口资源名。当统计维度relationStrategy值为1（关联接口）或2（链路入口）时，需要设置该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'handleServiceB',
          ),
        ),
        8 => 
        array (
          'name' => 'ControlBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'WarmUpPeriodSec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预热时间，单位秒。当controlBehavior值为1（预热启动）时，需要设置该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        10 => 
        array (
          'name' => 'MaxQueueingTimeMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时时间，单位毫秒。当controlBehavior值为2（排队等待）时，需要设置该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2000',
          ),
        ),
        11 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        12 => 
        array (
          'name' => 'ThresholdMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控阈值模式。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94E*****10',
              ),
              'Code' => 
              array (
                'description' => '返回码。返回200代表成功。',
                'type' => 'string',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、入口资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'ClusterFallbackThreshold' => 
                  array (
                    'description' => '退化单机阈值，当退化策略为退化到单机（ClusterFallbackStrategy=0）时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '集群模式下统计窗口时长，单位为毫秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'ClusterThresholdType' => 
                  array (
                    'description' => '阈值模式，0表示单机均摊阈值，1表示集群阈值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名。不能超过1024个字符，且该资源名需要与接口详情页面的资源名称相对应。',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'ClusterEstimatedMaxQps' => 
                  array (
                    'description' => '集群接口预估最大QPS。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '5000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '超时时间，单位毫秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'ClusterFallbackStrategy' => 
                  array (
                    'description' => '集群流控通信失败退化策略，0表示退化到单机，1表示直接通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'WarmUpPeriodSec' => 
                  array (
                    'description' => '预热时间，单位秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'ClusterMode' => 
                  array (
                    'description' => '是否为集群模式。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'ThresholdMode' => 
                  array (
                    'description' => '流控阈值模式。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '流控规则的阈值，取值范围为≥0的整数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '300',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.MaxQueueingTimeM',
            'errorMessage' => 'The specified MaxQueueingTimeMs is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.RefResource',
            'errorMessage' => 'The specified RefResource is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.RelationStrategy',
            'errorMessage' => 'The specified RelationStrategy is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalArgument.WarmUpPeriodSec',
            'errorMessage' => 'The specified WarmUpPeriodSec is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94E*****10\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Data\\": {\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"ClusterFallbackThreshold\\": 30,\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"StatDurationMs\\": 5000,\\n    \\"ClusterThresholdType\\": 0,\\n    \\"RuleId\\": 123,\\n    \\"RelationStrategy\\": 0,\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"ClusterEstimatedMaxQps\\": 5000,\\n    \\"ControlBehavior\\": 0,\\n    \\"MaxQueueingTimeMs\\": 2000,\\n    \\"ClusterFallbackStrategy\\": 0,\\n    \\"WarmUpPeriodSec\\": 30,\\n    \\"ClusterMode\\": true,\\n    \\"ThresholdMode\\": 2,\\n    \\"Threshold\\": 300,\\n    \\"Enable\\": true\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateFlowRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94E*****10</RequestId>\\n    <Code>200</Code>\\n    <Data>\\n        <RefResource>handleServiceB</RefResource>\\n        <ClusterFallbackThreshold>30</ClusterFallbackThreshold>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <StatDurationMs>5000</StatDurationMs>\\n        <ClusterThresholdType>0</ClusterThresholdType>\\n        <RuleId>123</RuleId>\\n        <RelationStrategy>0</RelationStrategy>\\n        <AppName>ahas-demo</AppName>\\n        <Resource>handleServiceA</Resource>\\n        <ClusterEstimatedMaxQps>5000</ClusterEstimatedMaxQps>\\n        <ControlBehavior>0</ControlBehavior>\\n        <MaxQueueingTimeMs>2000</MaxQueueingTimeMs>\\n        <ClusterFallbackStrategy>0</ClusterFallbackStrategy>\\n        <WarmUpPeriodSec>30</WarmUpPeriodSec>\\n        <ClusterMode>true</ClusterMode>\\n        <ThresholdMode>2</ThresholdMode>\\n        <Threshold>300</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Success>true</Success>\\n</CreateFlowRuleResponse>","errorExample":""}]',
      'title' => '创建流控规则',
      'summary' => '调用CreateFlowRule接口创建流控规则。',
      'requestParamsDescription' => ' 详细参数解释，请参见[配置流控规则](~~101077~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFlowRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RuleId\\": 123\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteFlowRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RuleId>123</RuleId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeleteFlowRuleResponse>","errorExample":""}]',
      'title' => '删除流控规则',
      'summary' => '调用DeleteFlowRule接口删除流控规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableFlowRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
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
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '流控规则数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、入口资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'ClusterFallbackThreshold' => 
                  array (
                    'description' => '退化单机阈值，当退化策略为退化到单机（ClusterFallbackStrategy=0）时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '集群模式下统计窗口时长。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'ClusterThresholdType' => 
                  array (
                    'description' => '阈值模式，0表示单机均摊阈值，1表示集群阈值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '流控规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '接口资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '超时时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ClusterEstimatedMaxQps' => 
                  array (
                    'description' => '集群接口预估最大QPS。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '3000',
                  ),
                  'WarmUpPeriodSec' => 
                  array (
                    'description' => '预热时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'ClusterFallbackStrategy' => 
                  array (
                    'description' => '集群流控通信失败退化策略，0表示退化到单机，1表示直接通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '流控阈值。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '50',
                  ),
                  'ClusterMode' => 
                  array (
                    'description' => '是否为集群模式。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启。',
                    'type' => 'boolean',
                    'example' => 'true',
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
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"ClusterFallbackThreshold\\": 30,\\n    \\"Namespace\\": \\"default\\",\\n    \\"StatDurationMs\\": 5000,\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"ClusterThresholdType\\": 0,\\n    \\"RuleId\\": 123,\\n    \\"RelationStrategy\\": 0,\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"MaxQueueingTimeMs\\": 2000,\\n    \\"ControlBehavior\\": 0,\\n    \\"ClusterEstimatedMaxQps\\": 3000,\\n    \\"WarmUpPeriodSec\\": 30,\\n    \\"ClusterFallbackStrategy\\": 1,\\n    \\"Threshold\\": 50,\\n    \\"ClusterMode\\": true,\\n    \\"Enable\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<EnableFlowRuleResponse>\\n<Message>null</Message>\\n<RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n<Data>\\n    <RefResource>handleServiceB</RefResource>\\n    <ClusterMode>true</ClusterMode>\\n    <RuleId>123</RuleId>\\n    <Resource>handleServiceA</Resource>\\n    <MaxQueueingTimeMs>2000</MaxQueueingTimeMs>\\n    <Namespace>default</Namespace>\\n    <AppName>ahas-demo</AppName>\\n    <WarmUpPeriodSec>30</WarmUpPeriodSec>\\n    <ClusterThresholdType>0</ClusterThresholdType>\\n    <ClusterFallbackStrategy>1</ClusterFallbackStrategy>\\n    <ControlBehavior>0</ControlBehavior>\\n    <ClusterFallbackThreshold>30</ClusterFallbackThreshold>\\n    <Enable>true</Enable>\\n    <RelationStrategy>0</RelationStrategy>\\n    <LimitOrigin>default</LimitOrigin>\\n    <ClusterEstimatedMaxQps>3000</ClusterEstimatedMaxQps>\\n    <Threshold>50</Threshold>\\n    <StatDurationMs>5000</StatDurationMs>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</EnableFlowRuleResponse>","errorExample":""}]',
      'title' => '开启流控规则',
      'summary' => '调用EnableFlowRule接口开启流控规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableFlowRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '流控规则数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、入口资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'ClusterFallbackThreshold' => 
                  array (
                    'description' => '退化单机阈值，当退化策略为退化到单机（ClusterFallbackStrategy=0）时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '集群模式下统计窗口时长。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'ClusterThresholdType' => 
                  array (
                    'description' => '阈值模式，0表示单机均摊阈值，1表示集群阈值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '流控规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '超时时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'ClusterEstimatedMaxQps' => 
                  array (
                    'description' => '集群接口预估最大QPS。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '5000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'WarmUpPeriodSec' => 
                  array (
                    'description' => '预热时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'ClusterFallbackStrategy' => 
                  array (
                    'description' => '集群流控通信失败退化策略，0表示退化到单机，1表示直接通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '300',
                  ),
                  'ClusterMode' => 
                  array (
                    'description' => '是否为集群模式。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Enable' => 
                  array (
                    'description' => '是否开启。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"ClusterFallbackThreshold\\": 30,\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"StatDurationMs\\": 5000,\\n    \\"ClusterThresholdType\\": 0,\\n    \\"RuleId\\": 123,\\n    \\"RelationStrategy\\": 0,\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"MaxQueueingTimeMs\\": 2000,\\n    \\"ClusterEstimatedMaxQps\\": 5000,\\n    \\"ControlBehavior\\": 0,\\n    \\"WarmUpPeriodSec\\": 30,\\n    \\"ClusterFallbackStrategy\\": 0,\\n    \\"Threshold\\": 300,\\n    \\"ClusterMode\\": true,\\n    \\"Enable\\": false\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableFlowRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RefResource>handleServiceB</RefResource>\\n        <ClusterFallbackThreshold>30</ClusterFallbackThreshold>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <StatDurationMs>5000</StatDurationMs>\\n        <ClusterThresholdType>0</ClusterThresholdType>\\n        <RuleId>123</RuleId>\\n        <RelationStrategy>0</RelationStrategy>\\n        <AppName>ahas-demo</AppName>\\n        <Resource>handleServiceA</Resource>\\n        <MaxQueueingTimeMs>2000</MaxQueueingTimeMs>\\n        <ClusterEstimatedMaxQps>5000</ClusterEstimatedMaxQps>\\n        <ControlBehavior>0</ControlBehavior>\\n        <WarmUpPeriodSec>30</WarmUpPeriodSec>\\n        <ClusterFallbackStrategy>0</ClusterFallbackStrategy>\\n        <Threshold>300</Threshold>\\n        <ClusterMode>true</ClusterMode>\\n        <Enable>false</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DisableFlowRuleResponse>","errorExample":""}]',
      'title' => '关闭流控规则',
      'summary' => '调用DisableFlowRule接口关闭流控规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyFlowRule' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'RelationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度。0表示当前接口，1表示关联接口，2表示链路入口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控阈值。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'LimitOrigin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源应用。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        5 => 
        array (
          'name' => 'RefResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联接口名、入口资源名。当统计维度relationStrategy值为1（关联接口）或2（链路入口）时，需要设置该字段。',
            'type' => 'string',
            'required' => false,
            'example' => 'handleServiceB',
          ),
        ),
        6 => 
        array (
          'name' => 'ControlBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'WarmUpPeriodSec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '预热时间。当controlBehavior值为1（预热启动）时，需要设置该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '30',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxQueueingTimeMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时时间。当controlBehavior值为2（排队等待）时，需要设置该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2000',
          ),
        ),
        9 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        10 => 
        array (
          'name' => 'ThresholdMode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控阈值模式。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94E*****10',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、入口资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'ClusterFallbackThreshold' => 
                  array (
                    'description' => '退化单机阈值，当退化策略为退化到单机（ClusterFallbackStrategy=0）时返回。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '集群模式下统计窗口时长。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ClusterThresholdType' => 
                  array (
                    'description' => '阈值模式，0表示单机均摊阈值，1表示集群阈值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'Resource' => 
                  array (
                    'description' => '接口资源名。',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '超时时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'ClusterEstimatedMaxQps' => 
                  array (
                    'description' => '集群接口预估最大QPS。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'WarmUpPeriodSec' => 
                  array (
                    'description' => '预热时间。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'ClusterFallbackStrategy' => 
                  array (
                    'description' => '集群流控通信失败退化策略，0表示退化到单机，1表示直接通过。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '流控阈值。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '50',
                  ),
                  'ThresholdMode' => 
                  array (
                    'description' => '流控阈值模式。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'ClusterMode' => 
                  array (
                    'description' => '是否为集群模式。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.ControlBehavior',
            'errorMessage' => 'The specified ControlBehavior is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.RefResource',
            'errorMessage' => 'The specified RefResource is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.RelationStrategy',
            'errorMessage' => 'The specified RelationStrategy is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalArgument.WarmUpPeriodSec',
            'errorMessage' => 'The specified WarmUpPeriodSec is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94E*****10\\",\\n  \\"Data\\": {\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"ClusterFallbackThreshold\\": 0,\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"StatDurationMs\\": 0,\\n    \\"ClusterThresholdType\\": 0,\\n    \\"RuleId\\": 123,\\n    \\"RelationStrategy\\": 0,\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"MaxQueueingTimeMs\\": 2000,\\n    \\"ClusterEstimatedMaxQps\\": 0,\\n    \\"ControlBehavior\\": 0,\\n    \\"WarmUpPeriodSec\\": 30,\\n    \\"ClusterFallbackStrategy\\": 0,\\n    \\"Threshold\\": 50,\\n    \\"ThresholdMode\\": 2,\\n    \\"ClusterMode\\": false,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyFlowRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94E*****10</RequestId>\\n    <Data>\\n        <RefResource>handleServiceB</RefResource>\\n        <ClusterFallbackThreshold>0</ClusterFallbackThreshold>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <StatDurationMs>0</StatDurationMs>\\n        <ClusterThresholdType>0</ClusterThresholdType>\\n        <RuleId>123</RuleId>\\n        <RelationStrategy>0</RelationStrategy>\\n        <AppName>ahas-demo</AppName>\\n        <Resource>handleServiceA</Resource>\\n        <MaxQueueingTimeMs>2000</MaxQueueingTimeMs>\\n        <ClusterEstimatedMaxQps>0</ClusterEstimatedMaxQps>\\n        <ControlBehavior>0</ControlBehavior>\\n        <WarmUpPeriodSec>30</WarmUpPeriodSec>\\n        <ClusterFallbackStrategy>0</ClusterFallbackStrategy>\\n        <Threshold>50</Threshold>\\n        <ThresholdMode>2</ThresholdMode>\\n        <ClusterMode>false</ClusterMode>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyFlowRuleResponse>","errorExample":""}]',
      'title' => '修改流控规则',
      'summary' => '调用ModifyFlowRule接口修改流控规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFlowRulesOfApp' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页返回数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RefResource' => 
                        array (
                          'description' => '关联接口名/入口资源名
',
                          'type' => 'string',
                          'example' => 'handleServiceB',
                        ),
                        'ClusterFallbackThreshold' => 
                        array (
                          'description' => '退化单机阈值，当退化策略为退化到单机（ClusterFallbackStrategy=0）时返回。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'LimitOrigin' => 
                        array (
                          'description' => '来源应用',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'StatDurationMs' => 
                        array (
                          'description' => '集群模式下统计窗口时长
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ClusterThresholdType' => 
                        array (
                          'description' => '阈值模式，0表示单机均摊阈值，1表示集群阈值',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'RelationStrategy' => 
                        array (
                          'description' => '统计维度
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'Resource' => 
                        array (
                          'description' => '接口资源名',
                          'type' => 'string',
                          'example' => 'handleServiceA',
                        ),
                        'ClusterEstimatedMaxQps' => 
                        array (
                          'description' => '集群接口预估最大QPS',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ControlBehavior' => 
                        array (
                          'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MaxQueueingTimeMs' => 
                        array (
                          'description' => '超时时间
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2000',
                        ),
                        'ClusterFallbackStrategy' => 
                        array (
                          'description' => '集群流控通信失败退化策略，0表示退化到单机，1表示直接通过',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'WarmUpPeriodSec' => 
                        array (
                          'description' => '预热时间',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'ClusterMode' => 
                        array (
                          'description' => '是否为集群模式',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ThresholdMode' => 
                        array (
                          'description' => '流控阈值类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '30',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '数据总条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"RefResource\\": \\"handleServiceB\\",\\n        \\"ClusterFallbackThreshold\\": 0,\\n        \\"Namespace\\": \\"default\\",\\n        \\"LimitOrigin\\": \\"default\\",\\n        \\"StatDurationMs\\": 0,\\n        \\"ClusterThresholdType\\": 0,\\n        \\"RuleId\\": 123,\\n        \\"RelationStrategy\\": 0,\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"Resource\\": \\"handleServiceA\\",\\n        \\"ClusterEstimatedMaxQps\\": 0,\\n        \\"ControlBehavior\\": 0,\\n        \\"MaxQueueingTimeMs\\": 2000,\\n        \\"ClusterFallbackStrategy\\": 0,\\n        \\"WarmUpPeriodSec\\": 30,\\n        \\"ClusterMode\\": false,\\n        \\"ThresholdMode\\": 2,\\n        \\"Threshold\\": 30,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListFlowRulesOfAppResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <RefResource>handleServiceB</RefResource>\\n            <ClusterFallbackThreshold>0</ClusterFallbackThreshold>\\n            <Namespace>default</Namespace>\\n            <LimitOrigin>default</LimitOrigin>\\n            <StatDurationMs>0</StatDurationMs>\\n            <ClusterThresholdType>0</ClusterThresholdType>\\n            <RuleId>123</RuleId>\\n            <RelationStrategy>0</RelationStrategy>\\n            <AppName>ahas-demo</AppName>\\n            <Resource>handleServiceA</Resource>\\n            <ClusterEstimatedMaxQps>0</ClusterEstimatedMaxQps>\\n            <ControlBehavior>0</ControlBehavior>\\n            <MaxQueueingTimeMs>2000</MaxQueueingTimeMs>\\n            <ClusterFallbackStrategy>0</ClusterFallbackStrategy>\\n            <WarmUpPeriodSec>30</WarmUpPeriodSec>\\n            <ClusterMode>false</ClusterMode>\\n            <Threshold>30</Threshold>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListFlowRulesOfAppResponse>","errorExample":""}]',
      'title' => '获取应用流控规则列表',
      'summary' => '调用ListFlowRulesOfApp接口获取应用流控规则列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListFlowRulesOfResource' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接口资源名。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleServiceA',
          ),
        ),
        3 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null ',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94E*****10',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RefResource' => 
                        array (
                          'description' => '关联接口名、入口资源名。
',
                          'type' => 'string',
                          'example' => 'handleServiceB',
                        ),
                        'ClusterFallbackThreshold' => 
                        array (
                          'description' => '退化单机阈值，当退化策略为退化到单机（ClusterFallbackStrategy=0）时返回。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'LimitOrigin' => 
                        array (
                          'description' => '来源应用。
',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'StatDurationMs' => 
                        array (
                          'description' => '集群模式下统计窗口时长。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'ClusterThresholdType' => 
                        array (
                          'description' => '阈值模式，0表示单机均摊阈值，1表示集群阈值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'RelationStrategy' => 
                        array (
                          'description' => '统计维度。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'Resource' => 
                        array (
                          'description' => '接口资源名。',
                          'type' => 'string',
                          'example' => 'handleServiceA',
                        ),
                        'ClusterEstimatedMaxQps' => 
                        array (
                          'description' => '集群接口预估最大QPS。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0',
                        ),
                        'ControlBehavior' => 
                        array (
                          'description' => '流控效果。0表示快速失败，1表示预热启动，2表示排队等待。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MaxQueueingTimeMs' => 
                        array (
                          'description' => '超时时间。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2000',
                        ),
                        'ClusterFallbackStrategy' => 
                        array (
                          'description' => '集群流控通信失败退化策略，0表示退化到单机，1表示直接通过。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'WarmUpPeriodSec' => 
                        array (
                          'description' => '预热时间。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '30',
                        ),
                        'ClusterMode' => 
                        array (
                          'description' => '是否为集群模式。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ThresholdMode' => 
                        array (
                          'description' => '流控阈值类型。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '阈值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '30',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数据量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null \\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94E*****10\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"RefResource\\": \\"handleServiceB\\",\\n        \\"ClusterFallbackThreshold\\": 0,\\n        \\"Namespace\\": \\"default\\",\\n        \\"LimitOrigin\\": \\"default\\",\\n        \\"StatDurationMs\\": 0,\\n        \\"ClusterThresholdType\\": 0,\\n        \\"RuleId\\": 123,\\n        \\"RelationStrategy\\": 0,\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"Resource\\": \\"handleServiceA\\",\\n        \\"ClusterEstimatedMaxQps\\": 0,\\n        \\"ControlBehavior\\": 0,\\n        \\"MaxQueueingTimeMs\\": 2000,\\n        \\"ClusterFallbackStrategy\\": 0,\\n        \\"WarmUpPeriodSec\\": 30,\\n        \\"ClusterMode\\": false,\\n        \\"ThresholdMode\\": 2,\\n        \\"Threshold\\": 30,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListFlowRulesOfResourceResponse>\\n    <Message>null </Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94E*****10</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <RefResource>handleServiceB</RefResource>\\n            <ClusterFallbackThreshold>0</ClusterFallbackThreshold>\\n            <Namespace>default</Namespace>\\n            <LimitOrigin>default</LimitOrigin>\\n            <StatDurationMs>0</StatDurationMs>\\n            <ClusterThresholdType>0</ClusterThresholdType>\\n            <RuleId>123</RuleId>\\n            <RelationStrategy>0</RelationStrategy>\\n            <AppName>ahas-demo</AppName>\\n            <Resource>handleServiceA</Resource>\\n            <ClusterEstimatedMaxQps>0</ClusterEstimatedMaxQps>\\n            <ControlBehavior>0</ControlBehavior>\\n            <MaxQueueingTimeMs>2000</MaxQueueingTimeMs>\\n            <ClusterFallbackStrategy>0</ClusterFallbackStrategy>\\n            <WarmUpPeriodSec>30</WarmUpPeriodSec>\\n            <ClusterMode>false</ClusterMode>\\n            <ThresholdMode>2</ThresholdMode>\\n            <Threshold>30</Threshold>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListFlowRulesOfResourceResponse>","errorExample":""}]',
      'title' => '获取资源对应的流控规则列表',
      'summary' => '调用ListFlowRulesOfResource接口获取资源对应的流控规则列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateDegradeRule' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'AHAS命名空间，默认为default，可以在控制台上创建不同namespace用于逻辑隔离。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名（避免中文命名），若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台具体应用的基本信息页签中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'REST或RPC接口名，需符合REST或RPC接口格式规范。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleService',
          ),
        ),
        3 => 
        array (
          'name' => 'Strategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阈值类型，即降级的策略，取值为0时表示按慢调用比例降级，取值为1时表示按异常比例降级。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阈值类型所对应的降级阈值，超过该值时会触发接口的降级。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'docRequired' => true,
            'example' => '0.6',
          ),
        ),
        5 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则是否开启。默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'RecoveryTimeoutMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '熔断时长。在该时间段内，该接口的请求都会快速失败，单位毫秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '5000',
          ),
        ),
        7 => 
        array (
          'name' => 'StatDurationMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计窗口时长，单位毫秒。默认值为1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2000',
          ),
        ),
        8 => 
        array (
          'name' => 'SlowRtMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢调用RT。请求的响应时间超过该值时统计为慢调用。阈值类型为“慢调用比例”时需设置该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2000',
          ),
        ),
        9 => 
        array (
          'name' => 'MinRequestAmount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发熔断的最小请求数目，若当前统计窗口请求数小于此值，即使达到熔断条件规则也不会触发。默认值为5。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        10 => 
        array (
          'name' => 'HalfOpenBaseAmountPerStep',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '熔断恢复每步最小通过数目，默认值为5。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        11 => 
        array (
          'name' => 'HalfOpenRecoveryStepNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '熔断恢复阶段数，默认值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        12 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求Request ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '规则数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'SlowRtMs' => 
                  array (
                    'description' => '慢调用RT。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'HalfOpenRecoveryStepNum' => 
                  array (
                    'description' => '熔断恢复阶段数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '统计窗口时长。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'Strategy' => 
                  array (
                    'description' => '阈值类型。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名。',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“具体应用>基本信息页签”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'HalfOpenBaseAmountPerStep' => 
                  array (
                    'description' => '熔断恢复每步最小通过数目，默认值为5。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'RecoveryTimeoutMs' => 
                  array (
                    'description' => '熔断时长。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'MinRequestAmount' => 
                  array (
                    'description' => '触发熔断的最小请求数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '降级阈值。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.HalfOpenBaseAmountPerStep',
            'errorMessage' => 'The specified HalfOpenBaseAmountPerStep is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.HalfOpenRecoveryStepNum',
            'errorMessage' => 'The specified HalfOpenRecoveryStepNum is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.MinRequestAmount',
            'errorMessage' => 'The specified MinRequestAmount is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.RecoveryTimeoutMs',
            'errorMessage' => 'The specified RecoveryTimeoutMs is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalArgument.SlowRtMS',
            'errorMessage' => 'The specified SlowRtMs is invalid.',
          ),
          8 => 
          array (
            'errorCode' => 'IllegalArgument.StatDurationMs',
            'errorMessage' => 'The specified StatDurationMs is invalid.',
          ),
          9 => 
          array (
            'errorCode' => 'IllegalArgument.Strategy',
            'errorMessage' => 'The specified Strategy is invalid.',
          ),
          10 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"SlowRtMs\\": 2000,\\n    \\"HalfOpenRecoveryStepNum\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"StatDurationMs\\": 2000,\\n    \\"RuleId\\": 1,\\n    \\"Strategy\\": 0,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"HalfOpenBaseAmountPerStep\\": 5,\\n    \\"RecoveryTimeoutMs\\": 5000,\\n    \\"MinRequestAmount\\": 10,\\n    \\"Threshold\\": 0.6,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateDegradeRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <SlowRtMs>2000</SlowRtMs>\\n        <HalfOpenRecoveryStepNum>1</HalfOpenRecoveryStepNum>\\n        <Namespace>default</Namespace>\\n        <StatDurationMs>2000</StatDurationMs>\\n        <RuleId>1</RuleId>\\n        <Strategy>0</Strategy>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <HalfOpenBaseAmountPerStep>5</HalfOpenBaseAmountPerStep>\\n        <RecoveryTimeoutMs>5000</RecoveryTimeoutMs>\\n        <MinRequestAmount>10</MinRequestAmount>\\n        <Threshold>0.6</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateDegradeRuleResponse>","errorExample":""}]',
      'title' => '创建降级规则',
      'summary' => '调用CreateDegradeRule接口创建降级规则。',
      'requestParamsDescription' => ' 详细参数说明参照文档[降级规则](https://help.aliyun.com/document_detail/101078.html)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteDegradeRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RuleId\\": 123\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteDegradeRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RuleId>123</RuleId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeleteDegradeRuleResponse>","errorExample":""}]',
      'title' => '删除降级规则',
      'summary' => '调用DeleteDegradeRule接口删除降级规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableDegradeRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '降级规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '降级规则数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SlowRtMs' => 
                  array (
                    'description' => '慢调用RT',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'HalfOpenRecoveryStepNum' => 
                  array (
                    'description' => '熔断恢复阶段数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '统计窗口时长',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '降级规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Strategy' => 
                  array (
                    'description' => '阈值类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '200',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'HalfOpenBaseAmountPerStep' => 
                  array (
                    'description' => '熔断恢复每步最小通过数目，默认值为5。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'RecoveryTimeoutMs' => 
                  array (
                    'description' => '熔断时长
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'MinRequestAmount' => 
                  array (
                    'description' => '触发熔断的最小请求数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '降级阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"SlowRtMs\\": 2000,\\n    \\"HalfOpenRecoveryStepNum\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"StatDurationMs\\": 2000,\\n    \\"RuleId\\": 123,\\n    \\"Strategy\\": 200,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"HalfOpenBaseAmountPerStep\\": 5,\\n    \\"RecoveryTimeoutMs\\": 5000,\\n    \\"MinRequestAmount\\": 10,\\n    \\"Threshold\\": 0.6,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableDegradeRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <SlowRtMs>2000</SlowRtMs>\\n        <HalfOpenRecoveryStepNum>1</HalfOpenRecoveryStepNum>\\n        <Namespace>default</Namespace>\\n        <StatDurationMs>2000</StatDurationMs>\\n        <RuleId>123</RuleId>\\n        <Strategy>200</Strategy>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <HalfOpenBaseAmountPerStep>5</HalfOpenBaseAmountPerStep>\\n        <RecoveryTimeoutMs>5000</RecoveryTimeoutMs>\\n        <MinRequestAmount>10</MinRequestAmount>\\n        <Threshold>0.6</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</EnableDegradeRuleResponse>","errorExample":""}]',
      'title' => '开启降级规则',
      'summary' => '调用EnableDegradeRule接口开启降级规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableDegradeRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '降级规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SlowRtMs' => 
                  array (
                    'description' => '慢调用RT',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'HalfOpenRecoveryStepNum' => 
                  array (
                    'description' => '熔断恢复阶段数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default ',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '统计窗口时长',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '降级规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Strategy' => 
                  array (
                    'description' => '阈值类型',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'HalfOpenBaseAmountPerStep' => 
                  array (
                    'description' => '熔断恢复每步最小通过数目',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'RecoveryTimeoutMs' => 
                  array (
                    'description' => '熔断时长',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'MinRequestAmount' => 
                  array (
                    'description' => '触发熔断的最小请求数目',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值类型所对应的降级阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否启用',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"SlowRtMs\\": 2000,\\n    \\"HalfOpenRecoveryStepNum\\": 1,\\n    \\"Namespace\\": \\"default \\",\\n    \\"StatDurationMs\\": 2000,\\n    \\"RuleId\\": 123,\\n    \\"Strategy\\": 0,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"HalfOpenBaseAmountPerStep\\": 5,\\n    \\"RecoveryTimeoutMs\\": 5000,\\n    \\"MinRequestAmount\\": 10,\\n    \\"Threshold\\": 0.6,\\n    \\"Enable\\": false\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableDegradeRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <SlowRtMs>2000</SlowRtMs>\\n        <HalfOpenRecoveryStepNum>1</HalfOpenRecoveryStepNum>\\n        <Namespace>default </Namespace>\\n        <StatDurationMs>2000</StatDurationMs>\\n        <RuleId>123</RuleId>\\n        <Strategy>0</Strategy>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <HalfOpenBaseAmountPerStep>5</HalfOpenBaseAmountPerStep>\\n        <RecoveryTimeoutMs>5000</RecoveryTimeoutMs>\\n        <MinRequestAmount>10</MinRequestAmount>\\n        <Threshold>0.6</Threshold>\\n        <Enable>false</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DisableDegradeRuleResponse>","errorExample":""}]',
      'title' => '关闭降级规则',
      'summary' => '调用DisableDegradeRule接口关闭降级规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDegradeRulesOfApp' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '降级规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SlowRtMs' => 
                        array (
                          'description' => '慢调用RT
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2000',
                        ),
                        'HalfOpenRecoveryStepNum' => 
                        array (
                          'description' => '熔断恢复阶段数
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'StatDurationMs' => 
                        array (
                          'description' => '统计窗口时长
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2000',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Strategy' => 
                        array (
                          'description' => '阈值类型
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Resource' => 
                        array (
                          'description' => '资源名',
                          'type' => 'string',
                          'example' => 'handleServiceA',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'HalfOpenBaseAmountPerStep' => 
                        array (
                          'description' => '熔断恢复每步最小通过数目，默认值为5。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'RecoveryTimeoutMs' => 
                        array (
                          'description' => '熔断时长
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5000',
                        ),
                        'MinRequestAmount' => 
                        array (
                          'description' => '触发熔断的最小请求数
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '降级阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.6',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数据量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"SlowRtMs\\": 2000,\\n        \\"HalfOpenRecoveryStepNum\\": 1,\\n        \\"Namespace\\": \\"default\\",\\n        \\"StatDurationMs\\": 2000,\\n        \\"RuleId\\": 123,\\n        \\"Strategy\\": 0,\\n        \\"Resource\\": \\"handleServiceA\\",\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"HalfOpenBaseAmountPerStep\\": 5,\\n        \\"RecoveryTimeoutMs\\": 5000,\\n        \\"MinRequestAmount\\": 10,\\n        \\"Threshold\\": 0.6,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListDegradeRulesOfAppResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <SlowRtMs>2000</SlowRtMs>\\n            <HalfOpenRecoveryStepNum>1</HalfOpenRecoveryStepNum>\\n            <Namespace>default</Namespace>\\n            <StatDurationMs>2000</StatDurationMs>\\n            <RuleId>123</RuleId>\\n            <Strategy>0</Strategy>\\n            <Resource>handleServiceA</Resource>\\n            <AppName>ahas-demo</AppName>\\n            <HalfOpenBaseAmountPerStep>5</HalfOpenBaseAmountPerStep>\\n            <RecoveryTimeoutMs>5000</RecoveryTimeoutMs>\\n            <MinRequestAmount>10</MinRequestAmount>\\n            <Threshold>0.6</Threshold>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDegradeRulesOfAppResponse>","errorExample":""}]',
      'title' => '获取应用降级规则',
      'summary' => '调用ListDegradeRulesOfApp接口获取应用降级规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListDegradeRulesOfResource' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleServiceA',
          ),
        ),
        3 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '降级规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SlowRtMs' => 
                        array (
                          'description' => '慢调用RT
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2000',
                        ),
                        'HalfOpenRecoveryStepNum' => 
                        array (
                          'description' => '熔断恢复阶段数
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'StatDurationMs' => 
                        array (
                          'description' => '统计窗口时长
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2000',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Strategy' => 
                        array (
                          'description' => '阈值类型
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Resource' => 
                        array (
                          'description' => '接口资源名',
                          'type' => 'string',
                          'example' => 'handleSerivice',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'HalfOpenBaseAmountPerStep' => 
                        array (
                          'description' => '熔断恢复每步最小通过数目，默认值为5。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'RecoveryTimeoutMs' => 
                        array (
                          'description' => '熔断时长
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5000',
                        ),
                        'MinRequestAmount' => 
                        array (
                          'description' => '触发熔断的最小请求数
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '10',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '降级阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.6',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '数据总数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"SlowRtMs\\": 2000,\\n        \\"HalfOpenRecoveryStepNum\\": 1,\\n        \\"Namespace\\": \\"default\\",\\n        \\"StatDurationMs\\": 2000,\\n        \\"RuleId\\": 123,\\n        \\"Strategy\\": 0,\\n        \\"Resource\\": \\"handleSerivice\\",\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"HalfOpenBaseAmountPerStep\\": 5,\\n        \\"RecoveryTimeoutMs\\": 5000,\\n        \\"MinRequestAmount\\": 10,\\n        \\"Threshold\\": 0.6,\\n        \\"Enable\\": false\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListDegradeRulesOfResourceResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <SlowRtMs>2000</SlowRtMs>\\n            <HalfOpenRecoveryStepNum>1</HalfOpenRecoveryStepNum>\\n            <Namespace>default</Namespace>\\n            <StatDurationMs>2000</StatDurationMs>\\n            <RuleId>123</RuleId>\\n            <Strategy>0</Strategy>\\n            <Resource>handleSerivice</Resource>\\n            <AppName>ahas-demo</AppName>\\n            <HalfOpenBaseAmountPerStep>5</HalfOpenBaseAmountPerStep>\\n            <RecoveryTimeoutMs>5000</RecoveryTimeoutMs>\\n            <MinRequestAmount>10</MinRequestAmount>\\n            <Threshold>0.6</Threshold>\\n            <Enable>false</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListDegradeRulesOfResourceResponse>","errorExample":""}]',
      'title' => '获取资源对应的降级规则',
      'summary' => '调用ListDegradeRulesOfResource接口获取资源对应的降级规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyDegradeRule' => 
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
          'name' => 'Strategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阈值类型，即降级的策略，取值为0时表示按慢调用比例降级，取值为1时表示按异常比例降级。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        1 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阈值类型所对应的降级阈值，超过该值时会触发接口的降级。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '0.5',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '降级规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        3 => 
        array (
          'name' => 'RecoveryTimeoutMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '熔断时长。在该时间段内，该接口的请求都会快速失败，单位毫秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2000',
          ),
        ),
        4 => 
        array (
          'name' => 'StatDurationMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计窗口时长，单位MS。默认值为1000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2000',
          ),
        ),
        5 => 
        array (
          'name' => 'SlowRtMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '慢调用RT。请求的响应时间超过该值时统计为慢调用。阈值类型为“慢调用比例”时需设置该字段。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3000',
          ),
        ),
        6 => 
        array (
          'name' => 'MinRequestAmount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发熔断的最小请求数目，若当前统计窗口请求数小于此值，即使达到熔断条件规则也不会触发。默认值为5。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        7 => 
        array (
          'name' => 'HalfOpenBaseAmountPerStep',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '熔断恢复每步最小通过数目，默认值为5。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3',
          ),
        ),
        8 => 
        array (
          'name' => 'HalfOpenRecoveryStepNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '熔断恢复阶段数，默认值为1。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        9 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'SlowRtMs' => 
                  array (
                    'description' => '慢调用RT
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5000',
                  ),
                  'HalfOpenRecoveryStepNum' => 
                  array (
                    'description' => '熔断恢复阶段数
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationMs' => 
                  array (
                    'description' => '统计窗口时长',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Strategy' => 
                  array (
                    'description' => '阈值类型
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'HalfOpenBaseAmountPerStep' => 
                  array (
                    'description' => '熔断恢复每步最小通过数目，默认值为5。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'RecoveryTimeoutMs' => 
                  array (
                    'description' => '熔断时长
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2000',
                  ),
                  'MinRequestAmount' => 
                  array (
                    'description' => '触发熔断的最小请求数
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.5',
                  ),
                  'Enable' => 
                  array (
                    'description' => '是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.HalfOpenBaseAmountPerStep',
            'errorMessage' => 'The specified HalfOpenBaseAmountPerStep is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.HalfOpenRecoveryStepNum',
            'errorMessage' => 'The specified HalfOpenRecoveryStepNum is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.MinRequestAmount',
            'errorMessage' => 'The specified MinRequestAmount is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.RecoveryTimeoutMs',
            'errorMessage' => 'The specified RecoveryTimeoutMs is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.SlowRtMS',
            'errorMessage' => 'The specified SlowRtMs is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalArgument.Strategy',
            'errorMessage' => 'The specified Strategy is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"SlowRtMs\\": 5000,\\n    \\"HalfOpenRecoveryStepNum\\": 2,\\n    \\"Namespace\\": \\"default\\",\\n    \\"StatDurationMs\\": 2000,\\n    \\"RuleId\\": 123,\\n    \\"Strategy\\": 0,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"HalfOpenBaseAmountPerStep\\": 3,\\n    \\"RecoveryTimeoutMs\\": 2000,\\n    \\"MinRequestAmount\\": 10,\\n    \\"Threshold\\": 0.5,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyDegradeRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <SlowRtMs>5000</SlowRtMs>\\n        <HalfOpenRecoveryStepNum>2</HalfOpenRecoveryStepNum>\\n        <Namespace>default</Namespace>\\n        <StatDurationMs>2000</StatDurationMs>\\n        <RuleId>123</RuleId>\\n        <Strategy>0</Strategy>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <HalfOpenBaseAmountPerStep>3</HalfOpenBaseAmountPerStep>\\n        <RecoveryTimeoutMs>2000</RecoveryTimeoutMs>\\n        <MinRequestAmount>10</MinRequestAmount>\\n        <Threshold>0.5</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyDegradeRuleResponse>","errorExample":""}]',
      'title' => '修改降级规则',
      'summary' => '调用ModifyDegradeRule接口修改降级规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateIsolationRule' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'RelationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，0表示当前接口，1表示关联接口，2表示链路入口。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '并发数阈值，取值范围为≥0的整数。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启，默认为false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名。不能超过1024个字符，且该资源名需要与接口详情页面的资源名称相对应。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleServiceA',
          ),
        ),
        6 => 
        array (
          'name' => 'LimitOrigin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源应用，默认为default。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        7 => 
        array (
          'name' => 'RefResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联接口名、callstack入口名，当统计维度为关联接口或链路入口时需设置该值。',
            'type' => 'string',
            'required' => false,
            'example' => 'handleServiceB',
          ),
        ),
        8 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '隔离规则数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '接口资源名',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、callstack入口名',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '并发数阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '10',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '隔离规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.RelationStrategy',
            'errorMessage' => 'The specified RelationStrategy is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.RefResource',
            'errorMessage' => 'The specified RefResource is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RelationStrategy\\": 0,\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"Threshold\\": 10,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateIsolationRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RelationStrategy>0</RelationStrategy>\\n        <Resource>handleServiceA</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <RefResource>handleServiceB</RefResource>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <Threshold>10</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateIsolationRuleResponse>","errorExample":""}]',
      'title' => '创建隔离规则',
      'summary' => '调用CreateIsolationRule接口创建隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteIsolationRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RuleId\\": 123\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteIsolationRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RuleId>123</RuleId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeleteIsolationRuleResponse>","errorExample":""}]',
      'title' => '删除隔离规则',
      'summary' => '调用DeleteIsolationRule接口删除隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableIsolationRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '9223372036854775807',
            'minimum' => '0',
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '接口资源名',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、callstack入口名
',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用
',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '并发数阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '30',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RelationStrategy\\": 0,\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"Threshold\\": 30,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableIsolationRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RelationStrategy>0</RelationStrategy>\\n        <Resource>handleServiceA</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <RefResource>handleServiceB</RefResource>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <Threshold>30</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</EnableIsolationRuleResponse>","errorExample":""}]',
      'title' => '开启隔离规则',
      'summary' => '调用EnableIsolationRule接口开启隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableIsolationRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'maximum' => '100000000000000',
            'minimum' => '0',
            'example' => '123',
            'isFileTransferUrl' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '隔离规则数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、callstack入口名',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '并发数阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '10',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '隔离规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否启用',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RelationStrategy\\": 0,\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"Threshold\\": 10,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": false\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableIsolationRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RelationStrategy>0</RelationStrategy>\\n        <Resource>handleServiceA</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <RefResource>handleServiceB</RefResource>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <Threshold>10</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>false</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DisableIsolationRuleResponse>","errorExample":""}]',
      'title' => '关闭隔离规则',
      'summary' => '调用DisableIsolationRule接口关闭隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListIsolationRulesOfApp' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
            'isFileTransferUrl' => false,
            'default' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
            'isFileTransferUrl' => false,
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '隔离规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RelationStrategy' => 
                        array (
                          'description' => '统计维度
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Resource' => 
                        array (
                          'description' => '接口资源名',
                          'type' => 'string',
                          'example' => 'handleServiceA',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'RefResource' => 
                        array (
                          'description' => '关联接口名、callstack入口名
',
                          'type' => 'string',
                          'example' => 'hanldeServiceB',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'LimitOrigin' => 
                        array (
                          'description' => '来源应用
',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '并发数阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数据量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"RelationStrategy\\": 0,\\n        \\"Resource\\": \\"handleServiceA\\",\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"RefResource\\": \\"hanldeServiceB\\",\\n        \\"Namespace\\": \\"default\\",\\n        \\"LimitOrigin\\": \\"default\\",\\n        \\"Threshold\\": 10,\\n        \\"RuleId\\": 123,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListIsolationRulesOfAppResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <RelationStrategy>0</RelationStrategy>\\n            <Resource>handleServiceA</Resource>\\n            <AppName>ahas-demo</AppName>\\n            <RefResource>hanldeServiceB</RefResource>\\n            <Namespace>default</Namespace>\\n            <LimitOrigin>default</LimitOrigin>\\n            <Threshold>10</Threshold>\\n            <RuleId>123</RuleId>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListIsolationRulesOfAppResponse>","errorExample":""}]',
      'title' => '获取应用隔离规则',
      'summary' => '调用ListIsolationRulesOfApp接口获取应用隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListIsolationRulesOfResource' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleServiceA',
          ),
        ),
        3 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '1',
            'isFileTransferUrl' => false,
            'default' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '2147483647',
            'minimum' => '0',
            'example' => '10',
            'isFileTransferUrl' => false,
            'default' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '隔离规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RelationStrategy' => 
                        array (
                          'description' => '统计维度
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Resource' => 
                        array (
                          'description' => '资源名',
                          'type' => 'string',
                          'example' => 'handleServiceA',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'RefResource' => 
                        array (
                          'description' => '关联接口名、callstack入口名
',
                          'type' => 'string',
                          'example' => 'handleServiceB',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'LimitOrigin' => 
                        array (
                          'description' => '来源应用',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '并发数阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数据量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"RelationStrategy\\": 0,\\n        \\"Resource\\": \\"handleServiceA\\",\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"RefResource\\": \\"handleServiceB\\",\\n        \\"Namespace\\": \\"default\\",\\n        \\"LimitOrigin\\": \\"default\\",\\n        \\"Threshold\\": 10,\\n        \\"RuleId\\": 123,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListIsolationRulesOfResourceResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <RelationStrategy>0</RelationStrategy>\\n            <Resource>handleServiceA</Resource>\\n            <AppName>ahas-demo</AppName>\\n            <RefResource>handleServiceB</RefResource>\\n            <Namespace>default</Namespace>\\n            <LimitOrigin>default</LimitOrigin>\\n            <Threshold>10</Threshold>\\n            <RuleId>123</RuleId>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListIsolationRulesOfResourceResponse>","errorExample":""}]',
      'title' => '获取资源对应的隔离规则',
      'summary' => '调用ListIsolationRulesOfResource接口获取资源对应的隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyIsolationRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '隔离规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'RelationStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，0表示当前接口，1表示关联接口，2表示链路入口。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '并发数阈值。
',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'docRequired' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'LimitOrigin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '来源应用。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'RefResource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '关联接口名、callstack入口名，当统计维度为关联接口或链路入口时需设置该值。
',
            'type' => 'string',
            'required' => false,
            'example' => 'handleServiceB',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RelationStrategy' => 
                  array (
                    'description' => '统计维度
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleServiceA',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'RefResource' => 
                  array (
                    'description' => '关联接口名、callstack入口名
',
                    'type' => 'string',
                    'example' => 'handleServiceB',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间
',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'LimitOrigin' => 
                  array (
                    'description' => '来源应用
',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '并发数阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '10',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.RelationStrategy',
            'errorMessage' => 'The specified RelationStrategy is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.RefResource',
            'errorMessage' => 'The specified RefResource is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RelationStrategy\\": 0,\\n    \\"Resource\\": \\"handleServiceA\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"RefResource\\": \\"handleServiceB\\",\\n    \\"Namespace\\": \\"default\\",\\n    \\"LimitOrigin\\": \\"default\\",\\n    \\"Threshold\\": 10,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyIsolationRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RelationStrategy>0</RelationStrategy>\\n        <Resource>handleServiceA</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <RefResource>handleServiceB</RefResource>\\n        <Namespace>default</Namespace>\\n        <LimitOrigin>default</LimitOrigin>\\n        <Threshold>10</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyIsolationRuleResponse>","errorExample":""}]',
      'title' => '修改隔离规则',
      'summary' => '调用ModifyIsolationRule接口修改隔离规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateSystemRule' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，0表示Load，1表示入口平均RT，2表示线程数，3表示入口总QPS，4表示CPU使用率。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '4',
          ),
        ),
        3 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CPU阈值，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'docRequired' => true,
            'example' => '0.6',
          ),
        ),
        4 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则是否开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误消息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '业务数据',
                'type' => 'object',
                'properties' => 
                array (
                  'MetricType' => 
                  array (
                    'description' => '统计维度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.MetricType',
            'errorMessage' => 'The specified MetricType is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"MetricType\\": 4,\\n    \\"Threshold\\": 0.6,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateSystemRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <MetricType>4</MetricType>\\n        <Threshold>0.6</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateSystemRuleResponse>","errorExample":""}]',
      'title' => '创建系统规则',
      'summary' => '调用CreateSystemRule接口创建系统规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteSystemRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RuleId\\": 123\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteSystemRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RuleId>123</RuleId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeleteSystemRuleResponse>","errorExample":""}]',
      'title' => '删除系统规则',
      'summary' => '调用DeleteSystemRule接口删除系统规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableSystemRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'MetricType' => 
                  array (
                    'description' => '统计维度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"MetricType\\": 4,\\n    \\"Threshold\\": 0.6,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableSystemRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <MetricType>4</MetricType>\\n        <Threshold>0.6</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</EnableSystemRuleResponse>","errorExample":""}]',
      'title' => '开启系统规则',
      'summary' => '调用EnableSystemRule接口开启系统规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableSystemRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '系统规则数据',
                'type' => 'object',
                'properties' => 
                array (
                  'MetricType' => 
                  array (
                    'description' => '统计维度',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.6',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '系统规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"MetricType\\": 4,\\n    \\"Threshold\\": 0.6,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": false\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DisableSystemRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <MetricType>4</MetricType>\\n        <Threshold>0.6</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>false</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DisableSystemRuleResponse>","errorExample":""}]',
      'title' => '关闭系统规则',
      'summary' => '调用DisableSystemRule接口关闭系统规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSystemRules' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '系统规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'MetricType' => 
                        array (
                          'description' => '统计维度
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '4',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '0.6',
                        ),
                        'Enable' => 
                        array (
                          'description' => '是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数据量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"Namespace\\": \\"default\\",\\n        \\"MetricType\\": 4,\\n        \\"Threshold\\": 0.6,\\n        \\"Enable\\": true,\\n        \\"RuleId\\": 123\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListSystemRulesResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <AppName>ahas-demo</AppName>\\n            <Namespace>default</Namespace>\\n            <MetricType>4</MetricType>\\n            <Threshold>0.6</Threshold>\\n            <Enable>true</Enable>\\n            <RuleId>123</RuleId>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListSystemRulesResponse>","errorExample":""}]',
      'title' => '获取系统规则',
      'summary' => '调用ListSystemRules接口获取系统规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifySystemRule' => 
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
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'CPU阈值，取值范围0~1。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'docRequired' => true,
            'example' => '0.5',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '系统规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'MetricType' => 
                  array (
                    'description' => '统计维度
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '4',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0.5',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '系统规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Enable' => 
                  array (
                    'description' => '是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"MetricType\\": 4,\\n    \\"Threshold\\": 0.5,\\n    \\"RuleId\\": 123,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifySystemRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <MetricType>4</MetricType>\\n        <Threshold>0.5</Threshold>\\n        <RuleId>123</RuleId>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifySystemRuleResponse>","errorExample":""}]',
      'title' => '修改系统规则',
      'summary' => '调用ModifySystemRule接口修改系统规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHotParamRule' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，0表示并发数，1表示通过请求数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点规则中针对每个热点参数的阈值，取值范围为≥0的整数。',
            'type' => 'number',
            'format' => 'float',
            'required' => true,
            'docRequired' => true,
            'example' => '20',
          ),
        ),
        4 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启，默认false。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        5 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名。不能超过1024个字符，且该资源名需要与接口详情页面的资源名称相对应。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleService',
          ),
        ),
        6 => 
        array (
          'name' => 'ParamIdx',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数位置索引，埋点传入参数的索引位置。对应`SphU.entry(xxx,args)`中的参数索引位置。

例如：`SphU.entry(resourceName,Entry Type.IN,1,paramA,paramB)`埋点中，`paramA`的参数索引是0，`paramB`的参数索引是1。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        7 => 
        array (
          'name' => 'StatDurationSec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计周期时间，单位秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'ControlBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控效果，0表示快速失败，2表示排队等待。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        9 => 
        array (
          'name' => 'BurstCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '缓冲请求数，流控效果为快速失败时需要设置。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        10 => 
        array (
          'name' => 'MaxQueueingTimeMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时时间，流控效果为排队等待时需要设置，单位毫秒。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3000',
          ),
        ),
        11 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求Request ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '业务数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParamIdx' => 
                  array (
                    'description' => '参数位置索引。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'ParamFlowItemList' => 
                  array (
                    'description' => '热点参数例外项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemValue' => 
                        array (
                          'description' => '例外项参数值。',
                          'type' => 'string',
                          'example' => 'apple',
                        ),
                        'ItemType' => 
                        array (
                          'description' => '例外项类型。
',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '例外项阈值。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                  'StatDurationSec' => 
                  array (
                    'description' => '统计周期时间，单位秒。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'BurstCount' => 
                  array (
                    'description' => '缓冲请求数。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '热点规则ID。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名。不能超过1024个字符，且该资源名需要与接口详情页面的资源名称相对应。',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。
',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '流控效果为排队等待时对应的超时时间，单位毫秒。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果，0表示快速失败，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'MetricType' => 
                  array (
                    'description' => '统计维度，0表示并发数，1表示通过请求数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '单机阈值。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '20',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码、错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.BurstCount',
            'errorMessage' => 'The specified BurstCount is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.ControlBehavior',
            'errorMessage' => 'The specified ControlBehavior is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.DurationInSec',
            'errorMessage' => 'The specified DurationInSec is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.MaxQueueingTimeM',
            'errorMessage' => 'The specified MaxQueueingTimeMs is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.MetricType',
            'errorMessage' => 'The specified MetricType is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
          7 => 
          array (
            'errorCode' => 'IllegalArgument.ParamIdx',
            'errorMessage' => 'The specified ParamIdx is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"ParamIdx\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"ParamFlowItemList\\": [\\n      {\\n        \\"ItemValue\\": \\"apple\\",\\n        \\"ItemType\\": \\"String\\",\\n        \\"Threshold\\": 10\\n      }\\n    ],\\n    \\"StatDurationSec\\": 1,\\n    \\"BurstCount\\": 2,\\n    \\"RuleId\\": 123,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"MaxQueueingTimeMs\\": 3000,\\n    \\"ControlBehavior\\": 0,\\n    \\"MetricType\\": 0,\\n    \\"Threshold\\": 20,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateHotParamRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <ParamIdx>1</ParamIdx>\\n        <Namespace>default</Namespace>\\n        <ParamFlowItemList>\\n            <ItemValue>apple</ItemValue>\\n            <ItemType>String</ItemType>\\n            <Threshold>10</Threshold>\\n        </ParamFlowItemList>\\n        <StatDurationSec>1</StatDurationSec>\\n        <BurstCount>2</BurstCount>\\n        <RuleId>123</RuleId>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n        <ControlBehavior>0</ControlBehavior>\\n        <MetricType>0</MetricType>\\n        <Threshold>20</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateHotParamRuleResponse>","errorExample":""}]',
      'title' => '创建热点规则',
      'summary' => '调用CreateHotParamRule接口创建热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'CreateHotParamItems' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点规则ID',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'Items',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点例外项',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '[{"itemType":"String","itemValue":"apple","threshold":50.0},{"itemType":"String","itemValue":"orange","threshold":20.0}]',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求Request ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '数据',
                'type' => 'object',
                'properties' => 
                array (
                  'ParamIdx' => 
                  array (
                    'description' => '参数位置索引',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'ParamFlowItemList' => 
                  array (
                    'description' => '例外项',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemValue' => 
                        array (
                          'description' => '例外项参数值',
                          'type' => 'string',
                          'example' => 'apple',
                        ),
                        'ItemType' => 
                        array (
                          'description' => '例外项类型',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '例外项阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                  'StatDurationSec' => 
                  array (
                    'description' => '统计周期时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'BurstCount' => 
                  array (
                    'description' => '缓冲请求数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '流控效果为排队等待时对应的超时时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果，0表示快速失败，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'MetricType' => 
                  array (
                    'description' => '统计维度，0表示并发数，1表示通过请求数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '单机阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '50',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码，success=true时返回200，否则返回对应的错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.ParamItems',
            'errorMessage' => 'The specified Items is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"ParamIdx\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"ParamFlowItemList\\": [\\n      {\\n        \\"ItemValue\\": \\"apple\\",\\n        \\"ItemType\\": \\"String\\",\\n        \\"Threshold\\": 10\\n      }\\n    ],\\n    \\"StatDurationSec\\": 1,\\n    \\"BurstCount\\": 2,\\n    \\"RuleId\\": 123,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"MaxQueueingTimeMs\\": 3000,\\n    \\"ControlBehavior\\": 0,\\n    \\"MetricType\\": 1,\\n    \\"Threshold\\": 50,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreateHotParamItemsResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <ParamIdx>1</ParamIdx>\\n        <Namespace>default</Namespace>\\n        <ParamFlowItemList>\\n            <ItemValue>apple</ItemValue>\\n            <ItemType>String</ItemType>\\n            <Threshold>10</Threshold>\\n        </ParamFlowItemList>\\n        <StatDurationSec>1</StatDurationSec>\\n        <BurstCount>2</BurstCount>\\n        <RuleId>123</RuleId>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n        <ControlBehavior>0</ControlBehavior>\\n        <MetricType>1</MetricType>\\n        <Threshold>50</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreateHotParamItemsResponse>","errorExample":""}]',
      'title' => '创建热点规则例外项',
      'summary' => '调用CreateHotParamItems接口创建热点规则例外项。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteHotParamRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleId' => 
                  array (
                    'description' => '规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"RuleId\\": 123\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeleteHotParamRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <RuleId>123</RuleId>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeleteHotParamRuleResponse>","errorExample":""}]',
      'title' => '删除热点规则',
      'summary' => '调用DeleteHotParamRule接口删除热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'EnableHotParamRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'ParamIdx' => 
                  array (
                    'description' => '参数位置索引
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'ParamFlowItemList' => 
                  array (
                    'description' => '热点例外项',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemValue' => 
                        array (
                          'description' => '例外项参数值',
                          'type' => 'string',
                          'example' => 'apple',
                        ),
                        'ItemType' => 
                        array (
                          'description' => '例外项类型',
                          'type' => 'string',
                          'example' => 'String ',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '例外项阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                      ),
                    ),
                  ),
                  'StatDurationSec' => 
                  array (
                    'description' => '统计周期时间
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'BurstCount' => 
                  array (
                    'description' => '缓冲请求数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '热点规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '流控效果为排队等待时对应的超时时间',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果，0表示快速失败，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'MetricType' => 
                  array (
                    'description' => '	
统计维度，0表示并发数，1表示通过请求数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '单机阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '20',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"ParamIdx\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"ParamFlowItemList\\": [\\n      {\\n        \\"ItemValue\\": \\"apple\\",\\n        \\"ItemType\\": \\"String \\",\\n        \\"Threshold\\": 10\\n      }\\n    ],\\n    \\"StatDurationSec\\": 1,\\n    \\"BurstCount\\": 2,\\n    \\"RuleId\\": 123,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"MaxQueueingTimeMs\\": 3000,\\n    \\"ControlBehavior\\": 0,\\n    \\"MetricType\\": 0,\\n    \\"Threshold\\": 20,\\n    \\"Enable\\": true\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<EnableHotParamRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <ParamIdx>1</ParamIdx>\\n        <Namespace>default</Namespace>\\n        <ParamFlowItemList>\\n            <ItemValue>apple</ItemValue>\\n            <ItemType>String </ItemType>\\n            <Threshold>10</Threshold>\\n        </ParamFlowItemList>\\n        <StatDurationSec>1</StatDurationSec>\\n        <BurstCount>2</BurstCount>\\n        <RuleId>123</RuleId>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n        <ControlBehavior>0</ControlBehavior>\\n        <MetricType>0</MetricType>\\n        <Threshold>20</Threshold>\\n        <Enable>true</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</EnableHotParamRuleResponse>","errorExample":""}]',
      'title' => '开启热点规则',
      'summary' => '调用EnableHotParamRule接口开启热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DisableHotParamRule' => 
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
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
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
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '热点规则数据',
                'type' => 'object',
                'properties' => 
                array (
                  'ParamIdx' => 
                  array (
                    'description' => '参数位置索引',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'StatDurationSec' => 
                  array (
                    'description' => '统计周期时间',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'BurstCount' => 
                  array (
                    'description' => '缓冲请求数
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '热点规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果，0表示快速失败，2表示排队等待。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '流控效果为排队等待时对应的超时时间。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3000',
                  ),
                  'MetricType' => 
                  array (
                    'description' => '统计维度，0表示并发数，1表示通过请求数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '单机阈值',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '20',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否启用',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'ParamFlowItemList' => 
                  array (
                    'description' => '热点参数例外项',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemValue' => 
                        array (
                          'description' => '例外项参数值',
                          'type' => 'string',
                          'example' => 'apple',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '例外项阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                        'ItemType' => 
                        array (
                          'description' => '例外项类型',
                          'type' => 'string',
                          'example' => 'String',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'IllegalArgument',
            'errorMessage' => 'The specified parameter is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"200\\",\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"ParamIdx\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"StatDurationSec\\": 1,\\n    \\"BurstCount\\": 2,\\n    \\"RuleId\\": 123,\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"Resource\\": \\"handleService\\",\\n    \\"ControlBehavior\\": 0,\\n    \\"MaxQueueingTimeMs\\": 3000,\\n    \\"MetricType\\": 0,\\n    \\"Threshold\\": 20,\\n    \\"Enable\\": false,\\n    \\"ParamFlowItemList\\": [\\n      {\\n        \\"ItemValue\\": \\"apple\\",\\n        \\"Threshold\\": 10,\\n        \\"ItemType\\": \\"String\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<DisableHotParamRuleResponse>\\n<Message>null</Message>\\n<RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n<Data>\\n    <MetricType>0</MetricType>\\n    <RuleId>123</RuleId>\\n    <Resource>handleService</Resource>\\n    <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n    <Namespace>default</Namespace>\\n    <AppName>ahas-demo</AppName>\\n    <BurstCount>2</BurstCount>\\n    <ParamFlowItemList>\\n        <ItemValue>apple</ItemValue>\\n        <ItemType>String</ItemType>\\n        <Threshold>10</Threshold>\\n    </ParamFlowItemList>\\n    <ControlBehavior>0</ControlBehavior>\\n    <StatDurationSec>1</StatDurationSec>\\n    <Enable>false</Enable>\\n    <ParamIdx>1</ParamIdx>\\n    <Threshold>20</Threshold>\\n</Data>\\n<Code>200</Code>\\n<Success>true</Success>\\n</DisableHotParamRuleResponse>","errorExample":""}]',
      'title' => '关闭热点规则',
      'summary' => '调用DisableHotParamRule接口关闭热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHotParamRulesOfApp' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '热点规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParamIdx' => 
                        array (
                          'description' => '参数索引',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'ParamFlowItemList' => 
                        array (
                          'description' => '热点参数例外项
',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ItemValue' => 
                              array (
                                'description' => '例外项参数值
',
                                'type' => 'string',
                                'example' => 'apple',
                              ),
                              'ItemType' => 
                              array (
                                'description' => '例外项类型
',
                                'type' => 'string',
                                'example' => 'String',
                              ),
                              'Threshold' => 
                              array (
                                'description' => '例外项阈值
',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '20',
                              ),
                            ),
                          ),
                        ),
                        'StatDurationSec' => 
                        array (
                          'description' => '统计周期时间
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'BurstCount' => 
                        array (
                          'description' => '缓冲请求数
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Resource' => 
                        array (
                          'description' => '接口资源名',
                          'type' => 'string',
                          'example' => 'handleService',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'MaxQueueingTimeMs' => 
                        array (
                          'description' => '流控效果为排队等待时对应的超时时间。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3000',
                        ),
                        'ControlBehavior' => 
                        array (
                          'description' => '流控效果，0表示快速失败，2表示排队等待。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MetricType' => 
                        array (
                          'description' => '统计维度，0表示并发数，1表示通过请求数。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '单机阈值',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '20',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '数据总量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '    返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"ParamIdx\\": 1,\\n        \\"Namespace\\": \\"default\\",\\n        \\"ParamFlowItemList\\": [\\n          {\\n            \\"ItemValue\\": \\"apple\\",\\n            \\"ItemType\\": \\"String\\",\\n            \\"Threshold\\": 20\\n          }\\n        ],\\n        \\"StatDurationSec\\": 1,\\n        \\"BurstCount\\": 2,\\n        \\"RuleId\\": 123,\\n        \\"Resource\\": \\"handleService\\",\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"MaxQueueingTimeMs\\": 3000,\\n        \\"ControlBehavior\\": 0,\\n        \\"MetricType\\": 0,\\n        \\"Threshold\\": 20,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListHotParamRulesOfAppResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <ParamIdx>1</ParamIdx>\\n            <Namespace>default</Namespace>\\n            <ParamFlowItemList>\\n                <ItemValue>apple</ItemValue>\\n                <ItemType>String</ItemType>\\n                <Threshold>20</Threshold>\\n            </ParamFlowItemList>\\n            <StatDurationSec>1</StatDurationSec>\\n            <BurstCount>2</BurstCount>\\n            <RuleId>123</RuleId>\\n            <Resource>handleService</Resource>\\n            <AppName>ahas-demo</AppName>\\n            <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n            <ControlBehavior>0</ControlBehavior>\\n            <MetricType>0</MetricType>\\n            <Threshold>20</Threshold>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListHotParamRulesOfAppResponse>","errorExample":""}]',
      'title' => '获取应用热点规则',
      'summary' => '调用ListHotParamRulesOfApp接口获取应用热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListHotParamRulesOfResource' => 
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
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AppName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ahas-demo',
          ),
        ),
        2 => 
        array (
          'name' => 'Resource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源名',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'handleService',
          ),
        ),
        3 => 
        array (
          'name' => 'PageIndex',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前页码',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        4 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页数据条数',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'PageIndex' => 
                  array (
                    'description' => '当前页码',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Datas' => 
                  array (
                    'description' => '热点规则列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ParamIdx' => 
                        array (
                          'description' => '热点参数索引',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'Namespace' => 
                        array (
                          'description' => '命名空间',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'ParamFlowItemList' => 
                        array (
                          'description' => '热点参数例外项',
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'ItemValue' => 
                              array (
                                'description' => '例外项参数值
',
                                'type' => 'string',
                                'example' => 'apple',
                              ),
                              'ItemType' => 
                              array (
                                'description' => '例外项类型
',
                                'type' => 'string',
                                'example' => 'String',
                              ),
                              'Threshold' => 
                              array (
                                'description' => '例外项阈值
',
                                'type' => 'number',
                                'format' => 'float',
                                'example' => '10',
                              ),
                            ),
                          ),
                        ),
                        'StatDurationSec' => 
                        array (
                          'description' => '统计周期时间
',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'BurstCount' => 
                        array (
                          'description' => '缓冲请求数
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'RuleId' => 
                        array (
                          'description' => '规则ID',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '123',
                        ),
                        'Resource' => 
                        array (
                          'description' => '资源名',
                          'type' => 'string',
                          'example' => 'handleService',
                        ),
                        'AppName' => 
                        array (
                          'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                          'type' => 'string',
                          'example' => 'ahas-demo',
                        ),
                        'MaxQueueingTimeMs' => 
                        array (
                          'description' => '流控效果为排队等待时对应的超时时间。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3000',
                        ),
                        'ControlBehavior' => 
                        array (
                          'description' => '流控效果，0表示快速失败，2表示排队等待。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'MetricType' => 
                        array (
                          'description' => '统计维度，0表示并发数，1表示通过请求数。
',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '例外项阈值
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '10',
                        ),
                        'Enable' => 
                        array (
                          'description' => '规则是否开启',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                      ),
                    ),
                  ),
                  'TotalPage' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '每页数据条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总数据量',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '23',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功',
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
            'errorCode' => 'IllegalArgument.AppName',
            'errorMessage' => 'The specified AppName is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.Resource',
            'errorMessage' => 'The specified Resource is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Namespace',
            'errorMessage' => 'The specified Namespace is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"PageIndex\\": 1,\\n    \\"Datas\\": [\\n      {\\n        \\"ParamIdx\\": 1,\\n        \\"Namespace\\": \\"default\\",\\n        \\"ParamFlowItemList\\": [\\n          {\\n            \\"ItemValue\\": \\"apple\\",\\n            \\"ItemType\\": \\"String\\",\\n            \\"Threshold\\": 10\\n          }\\n        ],\\n        \\"StatDurationSec\\": 1,\\n        \\"BurstCount\\": 2,\\n        \\"RuleId\\": 123,\\n        \\"Resource\\": \\"handleService\\",\\n        \\"AppName\\": \\"ahas-demo\\",\\n        \\"MaxQueueingTimeMs\\": 3000,\\n        \\"ControlBehavior\\": 0,\\n        \\"MetricType\\": 0,\\n        \\"Threshold\\": 10,\\n        \\"Enable\\": true\\n      }\\n    ],\\n    \\"TotalPage\\": 3,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 23\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListHotParamRulesOfResourceResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <PageIndex>1</PageIndex>\\n        <Datas>\\n            <ParamIdx>1</ParamIdx>\\n            <Namespace>default</Namespace>\\n            <ParamFlowItemList>\\n                <ItemValue>apple</ItemValue>\\n                <ItemType>String</ItemType>\\n                <Threshold>10</Threshold>\\n            </ParamFlowItemList>\\n            <StatDurationSec>1</StatDurationSec>\\n            <BurstCount>2</BurstCount>\\n            <RuleId>123</RuleId>\\n            <Resource>handleService</Resource>\\n            <AppName>ahas-demo</AppName>\\n            <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n            <ControlBehavior>0</ControlBehavior>\\n            <MetricType>0</MetricType>\\n            <Threshold>10</Threshold>\\n            <Enable>true</Enable>\\n        </Datas>\\n        <TotalPage>3</TotalPage>\\n        <PageSize>10</PageSize>\\n        <TotalCount>23</TotalCount>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListHotParamRulesOfResourceResponse>","errorExample":""}]',
      'title' => '获取资源对应的热点规则',
      'summary' => '调用ListHotParamRulesOfResource接口获取资源对应的热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ModifyHotParamRule' => 
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
          'name' => 'MetricType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计维度，0表示并发数，1表示通过请求数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'Threshold',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '热点规则中针对每个热点参数的阈值，取值范围为≥0的整数。',
            'type' => 'number',
            'format' => 'float',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'Enable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则是否开启。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'RuleId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则ID。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '123',
          ),
        ),
        4 => 
        array (
          'name' => 'ParamIdx',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '参数位置索引，埋点传入参数的索引位置。对应`SphU.entry(xxx,args)`中的参数索引位置。

例如：`SphU.entry(resourceName,Entry Type.IN,1,paramA,paramB)`埋点中，`paramA`的参数索引是0，`paramB`的参数索引是1。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'StatDurationSec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '统计周期时间，单位秒。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        6 => 
        array (
          'name' => 'ControlBehavior',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流控效果，0表示快速失败，2表示排队等待。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'BurstCount',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '缓冲请求数，流控效果为快速失败时需要设置。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        8 => 
        array (
          'name' => 'MaxQueueingTimeMs',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '超时时间，单位秒。流控效果为排队等待时需要设置。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '3000',
          ),
        ),
        9 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '3FEEAD12-CE22-4EDE-A729-CE94EC070610',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParamIdx' => 
                  array (
                    'description' => '热点参数索引。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Namespace' => 
                  array (
                    'description' => '命名空间。',
                    'type' => 'string',
                    'example' => 'default',
                  ),
                  'ParamFlowItemList' => 
                  array (
                    'description' => '热点参数例外项。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ItemValue' => 
                        array (
                          'description' => '例外项参数值。',
                          'type' => 'string',
                          'example' => 'apple',
                        ),
                        'ItemType' => 
                        array (
                          'description' => '例外项类型。',
                          'type' => 'string',
                          'example' => 'String',
                        ),
                        'Threshold' => 
                        array (
                          'description' => '例外项阈值。
',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '20',
                        ),
                      ),
                    ),
                  ),
                  'StatDurationSec' => 
                  array (
                    'description' => '统计周期时间，单位秒。
',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'BurstCount' => 
                  array (
                    'description' => '缓冲请求数。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'RuleId' => 
                  array (
                    'description' => '热点规则ID',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '123',
                  ),
                  'Resource' => 
                  array (
                    'description' => '资源名。',
                    'type' => 'string',
                    'example' => 'handleService',
                  ),
                  'AppName' => 
                  array (
                    'description' => '应用名，若为EDAS应用，则AppName为EDAS中的App ID，可在EDAS控制台“应用管理>基本信息”中查看对应的ID。',
                    'type' => 'string',
                    'example' => 'ahas-demo',
                  ),
                  'MaxQueueingTimeMs' => 
                  array (
                    'description' => '流控效果为排队等待时对应的超时时间，单位毫秒。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '3000',
                  ),
                  'ControlBehavior' => 
                  array (
                    'description' => '流控效果，0表示快速失败，2表示排队等待。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'MetricType' => 
                  array (
                    'description' => '统计维度，0表示并发数，1表示通过请求数。
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'Threshold' => 
                  array (
                    'description' => '单机阈值。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '20',
                  ),
                  'Enable' => 
                  array (
                    'description' => '规则是否开启。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '返回码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '是否成功。',
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
            'errorCode' => 'IllegalArgument.RuleId',
            'errorMessage' => 'The specified RuleId is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'IllegalArgument.MetricType',
            'errorMessage' => 'The specified MetricType is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'IllegalArgument.Threshold',
            'errorMessage' => 'The specified Threshold is invalid.',
          ),
          3 => 
          array (
            'errorCode' => 'IllegalArgument.ParamIdx',
            'errorMessage' => 'The specified ParamIdx is invalid.',
          ),
          4 => 
          array (
            'errorCode' => 'IllegalArgument.ControlBehavior',
            'errorMessage' => 'The specified ControlBehavior is invalid.',
          ),
          5 => 
          array (
            'errorCode' => 'IllegalArgument.MaxQueueingTimeM',
            'errorMessage' => 'The specified MaxQueueingTimeMs is invalid.',
          ),
          6 => 
          array (
            'errorCode' => 'IllegalArgument.BurstCount',
            'errorMessage' => 'The specified BurstCount is invalid.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"3FEEAD12-CE22-4EDE-A729-CE94EC070610\\",\\n  \\"Data\\": {\\n    \\"ParamIdx\\": 1,\\n    \\"Namespace\\": \\"default\\",\\n    \\"ParamFlowItemList\\": [\\n      {\\n        \\"ItemValue\\": \\"apple\\",\\n        \\"ItemType\\": \\"String\\",\\n        \\"Threshold\\": 20\\n      }\\n    ],\\n    \\"StatDurationSec\\": 1,\\n    \\"BurstCount\\": 2,\\n    \\"RuleId\\": 123,\\n    \\"Resource\\": \\"handleService\\",\\n    \\"AppName\\": \\"ahas-demo\\",\\n    \\"MaxQueueingTimeMs\\": 3000,\\n    \\"ControlBehavior\\": 0,\\n    \\"MetricType\\": 1,\\n    \\"Threshold\\": 20,\\n    \\"Enable\\": false\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyHotParamRuleResponse>\\n    <Message>null</Message>\\n    <RequestId>3FEEAD12-CE22-4EDE-A729-CE94EC070610</RequestId>\\n    <Data>\\n        <ParamIdx>1</ParamIdx>\\n        <Namespace>default</Namespace>\\n        <ParamFlowItemList>\\n            <ItemValue>apple</ItemValue>\\n            <ItemType>String</ItemType>\\n            <Threshold>20</Threshold>\\n        </ParamFlowItemList>\\n        <StatDurationSec>1</StatDurationSec>\\n        <BurstCount>2</BurstCount>\\n        <RuleId>123</RuleId>\\n        <Resource>handleService</Resource>\\n        <AppName>ahas-demo</AppName>\\n        <MaxQueueingTimeMs>3000</MaxQueueingTimeMs>\\n        <ControlBehavior>0</ControlBehavior>\\n        <MetricType>1</MetricType>\\n        <Threshold>20</Threshold>\\n        <Enable>false</Enable>\\n    </Data>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyHotParamRuleResponse>","errorExample":""}]',
      'title' => '修改热点规则',
      'summary' => '调用ModifyHotParamRule接口修改热点规则。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PageableQueryExperimentTaskByExperimentId' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ExperimentId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '故障演练ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1234567890123456789',
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命名空间。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID（调用公网环境时使用）。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-public',
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
              'Pages' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'ExperimentTasks' => 
              array (
                'description' => '演练任务信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'description' => '演练任务结束时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1611835105000',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '演练任务开始时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1611835037000',
                    ),
                    'Result' => 
                    array (
                      'description' => '任务执行结果。',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'State' => 
                    array (
                      'description' => '演练任务状态。',
                      'type' => 'string',
                      'example' => 'FINISHED',
                    ),
                    'CurrentPhase' => 
                    array (
                      'description' => '当前执行阶段（运行中的任务属性）。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'ExperimentId' => 
                    array (
                      'description' => '故障演练ID。',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'Message' => 
                    array (
                      'description' => '任务执行错误信息。',
                      'type' => 'string',
                      'example' => 'null',
                    ),
                    'TaskId' => 
                    array (
                      'description' => '演练任务ID。',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'ExperimentName' => 
                    array (
                      'description' => '故障演练名称。',
                      'type' => 'string',
                      'example' => '故障演练',
                    ),
                    'ExtInfo' => 
                    array (
                      'description' => '演练其他信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SchedulerConfig' => 
                        array (
                          'description' => '演练定时执行信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FixedTime' => 
                            array (
                              'description' => '指定一次时间执行。',
                              'type' => 'string',
                              'example' => '1611835105000',
                            ),
                            'CronExpression' => 
                            array (
                              'description' => '定时任务表达式。',
                              'type' => 'string',
                              'example' => '0 0 1 * * ? *',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Creator' => 
                    array (
                      'description' => '创建人（执行人）。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SubUserId' => 
                        array (
                          'description' => 'RAM用户ID（主账号操作，该字段为空）。',
                          'type' => 'string',
                          'example' => '2XXXXXXXXXXXXX',
                        ),
                        'UserId' => 
                        array (
                          'description' => '阿里云账号ID。',
                          'type' => 'string',
                          'example' => '1XXXXXXXXXXXXX',
                        ),
                      ),
                    ),
                    'Namespace' => 
                    array (
                      'description' => '命名空间。',
                      'type' => 'string',
                      'example' => 'default',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Message' => 
              array (
                'description' => '接口异常信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'PageSize' => 
              array (
                'description' => '每页大小。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Total' => 
              array (
                'description' => '总数据数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '接口请求反馈编码。',
                'type' => 'string',
                'example' => 'P_ERROR_****',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Pages\\": 2,\\n  \\"ExperimentTasks\\": [\\n    {\\n      \\"EndTime\\": 1611835105000,\\n      \\"StartTime\\": 1611835037000,\\n      \\"Result\\": \\"SUCCESS\\",\\n      \\"State\\": \\"FINISHED\\",\\n      \\"CurrentPhase\\": \\"null\\",\\n      \\"ExperimentId\\": \\"1234567890123456789\\",\\n      \\"Message\\": \\"null\\",\\n      \\"TaskId\\": \\"1234567890123456789\\",\\n      \\"ExperimentName\\": \\"故障演练\\",\\n      \\"ExtInfo\\": {\\n        \\"SchedulerConfig\\": {\\n          \\"FixedTime\\": \\"1611835105000\\",\\n          \\"CronExpression\\": \\"0 0 1 * * ? *\\"\\n        }\\n      },\\n      \\"Creator\\": {\\n        \\"SubUserId\\": \\"2XXXXXXXXXXXXX\\",\\n        \\"UserId\\": \\"1XXXXXXXXXXXXX\\"\\n      },\\n      \\"Namespace\\": \\"default\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Message\\": \\"null\\",\\n  \\"PageSize\\": 10,\\n  \\"CurrentPage\\": 1,\\n  \\"Total\\": 20,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"P_ERROR_****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<PageableQueryExperimentTaskByExperimentIdResponse>\\n    <Pages>2</Pages>\\n    <ExperimentTasks>\\n        <EndTime>1611835105000</EndTime>\\n        <StartTime>1611835037000</StartTime>\\n        <Result>SUCCESS</Result>\\n        <State>FINISHED</State>\\n        <CurrentPhase>null</CurrentPhase>\\n        <ExperimentId>1234567890123456789</ExperimentId>\\n        <Message>null</Message>\\n        <TaskId>1234567890123456789</TaskId>\\n        <ExperimentName>故障演练</ExperimentName>\\n        <ExtInfo>\\n            <SchedulerConfig>\\n                <FixedTime>1611835105000</FixedTime>\\n                <CronExpression>0 0 1 * * ? *</CronExpression>\\n            </SchedulerConfig>\\n        </ExtInfo>\\n        <Creator>\\n            <SubUserId>2XXXXXXXXXXXXX</SubUserId>\\n            <UserId>1XXXXXXXXXXXXX</UserId>\\n        </Creator>\\n        <Namespace>default</Namespace>\\n    </ExperimentTasks>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Message>null</Message>\\n    <PageSize>10</PageSize>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>20</Total>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>P_ERROR_****</Code>\\n    <Success>true</Success>\\n</PageableQueryExperimentTaskByExperimentIdResponse>","errorExample":""}]',
      'title' => 'PageableQueryExperimentTaskByExperimentId',
      'summary' => '根据演练ID分页查询演练任务。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PageableQueryUserExperiment' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'SearchKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练检索关键字。',
            'type' => 'string',
            'required' => false,
            'example' => '演练名称检索',
          ),
        ),
        1 => 
        array (
          'name' => 'State',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练状态。包括：

- INVISIBLE 不可见
- DRAFT 编辑中
- READY 就绪
- RUNNING 运行中
- FINISHED 已结束',
            'type' => 'string',
            'required' => false,
            'example' => 'READY',
          ),
        ),
        2 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        4 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID（调用公网接口使用）。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-public',
          ),
        ),
        6 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练空间ID。若传入该字段则查询指定空间的演练列表，否则查询用户默认空间的演练列表。',
            'type' => 'string',
            'required' => false,
            'example' => '1234567890123456789',
          ),
        ),
        7 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-hangzhou',
          ),
        ),
        8 => 
        array (
          'name' => 'Tags',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '演练检索标签。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '演练检索标签。',
              'type' => 'string',
              'required' => false,
              'example' => 'tag',
            ),
            'required' => false,
            'example' => '演练标签',
            'maxItems' => 10,
          ),
        ),
        9 => 
        array (
          'name' => 'Results',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '演练最后一次任务运行结果。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '演练最后一次任务运行结果。',
              'type' => 'string',
              'required' => false,
              'example' => 'FINISHED',
            ),
            'required' => false,
            'example' => 'FINISHED',
            'maxItems' => 10,
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
              'Pages' => 
              array (
                'description' => '页数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'Message' => 
              array (
                'description' => '接口异常信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'PageSize' => 
              array (
                'description' => '每页数据条数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'CurrentPage' => 
              array (
                'description' => '当前页码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'Total' => 
              array (
                'description' => '数据总数',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '20',
              ),
              'ExperimentList' => 
              array (
                'description' => '演练列表',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '演练列表',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Permission' => 
                    array (
                      'description' => '当前账号对故障演练权限：

- 1：只读权限
- 2：编辑权限
- 4：执行权限
- 7：所有权限',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '7',
                    ),
                    'Result' => 
                    array (
                      'description' => '故障演练最后一次任务的执行结果：

- SUCCESS（成功）
- FAILED（失败）
- REJECTED（任务调过）
- ERROR（任务异常中断）
- STOPPED（任务被终止）
- SOPPED_FAILED（停止失败）',
                      'type' => 'string',
                      'example' => 'SUCCESS',
                    ),
                    'State' => 
                    array (
                      'description' => '演练状态：

- READY（就绪）
- RUNNING（正在执行）
- FINISHED（执行结束）',
                      'type' => 'string',
                      'example' => 'READY',
                    ),
                    'CreateTime' => 
                    array (
                      'description' => '演练创建时间',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1611835037000',
                    ),
                    'ExperimentId' => 
                    array (
                      'description' => '故障演练ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'Tags' => 
                    array (
                      'description' => '演练标签',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '故障演练标签',
                        'type' => 'string',
                        'example' => '演练标签',
                      ),
                    ),
                    'MiniApps' => 
                    array (
                      'description' => '故障演练有关的小程序',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '故障演练有关的小程序',
                        'type' => 'string',
                        'example' => 'cpu',
                      ),
                    ),
                    'Name' => 
                    array (
                      'description' => '故障演练名称',
                      'type' => 'string',
                      'example' => '演练名称',
                    ),
                    'Creator' => 
                    array (
                      'description' => '演练创建人UserID',
                      'type' => 'string',
                      'example' => '1XXXXXXXXXX',
                    ),
                  ),
                ),
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Code' => 
              array (
                'description' => '接口请求反馈编码',
                'type' => 'string',
                'example' => 'P_ERROR_****',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Pages\\": 2,\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"Message\\": \\"null\\",\\n  \\"PageSize\\": 10,\\n  \\"CurrentPage\\": 1,\\n  \\"Total\\": 20,\\n  \\"ExperimentList\\": [\\n    {\\n      \\"Permission\\": 7,\\n      \\"Result\\": \\"SUCCESS\\",\\n      \\"State\\": \\"READY\\",\\n      \\"CreateTime\\": 1611835037000,\\n      \\"ExperimentId\\": \\"1234567890123456789\\",\\n      \\"Tags\\": [\\n        \\"演练标签\\"\\n      ],\\n      \\"MiniApps\\": [\\n        \\"cpu\\"\\n      ],\\n      \\"Name\\": \\"演练名称\\",\\n      \\"Creator\\": \\"1XXXXXXXXXX\\"\\n    }\\n  ],\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"P_ERROR_****\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<PageableQueryUserExperimentResponse>\\n    <Pages>2</Pages>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <Message>null</Message>\\n    <PageSize>10</PageSize>\\n    <CurrentPage>1</CurrentPage>\\n    <Total>20</Total>\\n    <ExperimentList>\\n        <Permission>7</Permission>\\n        <Result>SUCCESS</Result>\\n        <State>READY</State>\\n        <CreateTime>1611835037000</CreateTime>\\n        <ExperimentId>1234567890123456789</ExperimentId>\\n        <Tags>演练标签</Tags>\\n        <MiniApps>cpu</MiniApps>\\n        <Name>演练名称</Name>\\n        <Creator>1XXXXXXXXXX</Creator>\\n    </ExperimentList>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>P_ERROR_****</Code>\\n    <Success>true</Success>\\n</PageableQueryUserExperimentResponse>","errorExample":""}]',
      'title' => 'PageableQueryUserExperiment',
      'summary' => '查询用户演练列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetUserWorkspace' => 
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
      'operationType' => 'read',
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属的命名空间',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '演练所属地域ID',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => 'null',
              ),
              'RequestId' => 
              array (
                'description' => 'RequestID',
                'type' => 'string',
                'example' => '0f7dd92f-4490-xxxx-b8bd-xxxxxxxxxxxxx',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'HTTP状态码',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'WorkspaceList' => 
              array (
                'description' => '演练空间信息列表',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '演练空间类型：

- 0：默认空间
- 1：用户空间',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '演练空间ID',
                      'type' => 'string',
                      'example' => '1234567890123456789',
                    ),
                    'Description' => 
                    array (
                      'description' => '演练空间描述',
                      'type' => 'string',
                      'example' => '演练空间描述',
                    ),
                    'Name' => 
                    array (
                      'description' => '演练空间名称',
                      'type' => 'string',
                      'example' => '演练空间名称',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口错误编码',
                'type' => 'string',
                'example' => 'P_ERROR_XXXXXXX',
              ),
              'Success' => 
              array (
                'description' => '接口请求成功标识',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"null\\",\\n  \\"RequestId\\": \\"0f7dd92f-4490-xxxx-b8bd-xxxxxxxxxxxxx\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"WorkspaceList\\": [\\n    {\\n      \\"Type\\": 0,\\n      \\"WorkspaceId\\": \\"1234567890123456789\\",\\n      \\"Description\\": \\"演练空间描述\\",\\n      \\"Name\\": \\"演练空间名称\\"\\n    }\\n  ],\\n  \\"Code\\": \\"P_ERROR_XXXXXXX\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetUserWorkspaceResponse>\\n    <Message>null</Message>\\n    <RequestId>0f7dd92f-4490-xxxx-b8bd-xxxxxxxxxxxxx</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <WorkspaceList>\\n        <Type>0</Type>\\n        <WorkspaceId>1234567890123456789</WorkspaceId>\\n        <Description>演练空间描述</Description>\\n        <Name>演练空间名称</Name>\\n    </WorkspaceList>\\n    <Code>P_ERROR_XXXXXXX</Code>\\n    <Success>true</Success>\\n</GetUserWorkspaceResponse>","errorExample":""}]',
      'title' => 'GetUserWorkspace',
      'summary' => '查询用户下所有演练空间，包括默认空间、管理空间和参与空间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'PageableQueryExperimentTaskByClusterId' => 
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ClusterId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'Page',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        2 => 
        array (
          'name' => 'Size',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Namespace',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        4 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        5 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        6 => 
        array (
          'name' => 'IncludeInvalidHost',
          'in' => 'query',
          'schema' => 
          array (
            'type' => 'boolean',
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
              'Pages' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'ExperimentTasks' => 
              array (
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'EndTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'StartTime' => 
                    array (
                      'type' => 'integer',
                      'format' => 'int64',
                    ),
                    'Result' => 
                    array (
                      'type' => 'string',
                    ),
                    'State' => 
                    array (
                      'type' => 'string',
                    ),
                    'CurrentPhase' => 
                    array (
                      'type' => 'string',
                    ),
                    'ExperimentId' => 
                    array (
                      'type' => 'string',
                    ),
                    'Message' => 
                    array (
                      'type' => 'string',
                    ),
                    'TaskId' => 
                    array (
                      'type' => 'string',
                    ),
                    'ExperimentName' => 
                    array (
                      'type' => 'string',
                    ),
                    'ExtInfo' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SchedulerConfig' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'FixedTime' => 
                            array (
                              'type' => 'string',
                            ),
                            'CronExpression' => 
                            array (
                              'type' => 'string',
                            ),
                          ),
                        ),
                      ),
                    ),
                    'Creator' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SubUserId' => 
                        array (
                          'type' => 'string',
                        ),
                        'UserId' => 
                        array (
                          'type' => 'string',
                        ),
                      ),
                    ),
                    'Namespace' => 
                    array (
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'type' => 'string',
              ),
              'Message' => 
              array (
                'type' => 'string',
              ),
              'PageSize' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'CurrentPage' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'Total' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
              'HttpStatusCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
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
    'GetUserApplicationGroups' => 
    array (
      'summary' => '查询用户应用。',
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
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApplicationId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1234567890',
          ),
        ),
        1 => 
        array (
          'name' => 'NameSpace',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用户应用所在的命名空间（Namespace）。',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
          ),
        ),
        2 => 
        array (
          'name' => 'AhasRegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所属Region。当且仅当用户为公网地域（Region）时需要填写，默认为public。',
            'type' => 'string',
            'required' => false,
            'example' => 'public',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '接口返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '接口Request ID。',
                'type' => 'string',
                'example' => '0f7dd92f-4490-****-b8bd-****',
              ),
              'HttpStatusCode' => 
              array (
                'description' => 'Http状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '请求成功标识。

- true：成功
- false：失败',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Message' => 
              array (
                'description' => '接口错误信息。',
                'type' => 'string',
                'example' => 'null',
              ),
              'Code' => 
              array (
                'description' => '接口请求Code。',
                'type' => 'string',
                'example' => '200',
              ),
              'AppGroups' => 
              array (
                'description' => '应用分组列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '应用分组名称。',
                  'type' => 'string',
                  'example' => 'app-group',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0f7dd92f-4490-****-b8bd-****\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Success\\": true,\\n  \\"Message\\": \\"null\\",\\n  \\"Code\\": \\"200\\",\\n  \\"AppGroups\\": [\\n    \\"app-group\\"\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<GetUserApplicationGroupsResponse>\\n    <RequestId>0f7dd92f-4490-****-b8bd-****</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Success>true</Success>\\n    <Message>null</Message>\\n    <Code>200</Code>\\n    <AppGroups>app-group</AppGroups>\\n</GetUserApplicationGroupsResponse>","errorExample":""}]',
      'title' => 'GetUserApplicationGroups',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ahas.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ahas.cn-zhangjiakou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ahas.cn-hangzhou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ahas.cn-shanghai.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ahas.cn-shenzhen.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ahas.ap-southeast-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ahas.cn-hongkong.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ahas.eu-central-1.aliyuncs.com',
    ),
  ),
);
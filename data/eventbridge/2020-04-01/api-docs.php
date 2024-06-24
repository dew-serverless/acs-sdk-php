<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'eventbridge',
    'version' => '2020-04-01',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 99576,
      'title' => '事件总线',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateEventBus',
        1 => 'DeleteEventBus',
        2 => 'UpdateEventBus',
        3 => 'GetEventBus',
        4 => 'ListEventBuses',
      ),
    ),
    1 => 
    array (
      'id' => 99587,
      'title' => '事件',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'QueryEvent',
        1 => 'QueryEventTraces',
        2 => 'QueryTracedEventByEventId',
        3 => 'QueryTracedEvents',
      ),
    ),
    2 => 
    array (
      'id' => 99600,
      'title' => '事件源',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListAliyunOfficialEventSources',
        1 => 'ListUserDefinedEventSources',
        2 => 'CreateEventSource',
        3 => 'DeleteEventSource',
        4 => 'UpdateEventSource',
      ),
    ),
    3 => 
    array (
      'id' => 99582,
      'title' => '事件目标',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DeleteTargets',
        1 => 'PutTargets',
      ),
    ),
    4 => 
    array (
      'id' => 99623,
      'title' => '事件规则',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateRule',
        1 => 'DeleteRule',
        2 => 'DisableRule',
        3 => 'EnableRule',
        4 => 'UpdateRule',
        5 => 'GetRule',
        6 => 'ListRules',
      ),
    ),
    5 => 
    array (
      'id' => 99593,
      'title' => '事件流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListEventStreamings',
        1 => 'DeleteEventStreaming',
        2 => 'PauseEventStreaming',
        3 => 'StartEventStreaming',
        4 => 'GetEventStreaming',
        5 => 'UpdateEventStreaming',
        6 => 'CreateEventStreaming',
      ),
    ),
    6 => 
    array (
      'id' => 177345,
      'title' => 'API端点',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'UpdateApiDestination',
        1 => 'CreateApiDestination',
        2 => 'CreateConnection',
        3 => 'DeleteApiDestination',
        4 => 'DeleteConnection',
        5 => 'GetApiDestination',
        6 => 'GetConnection',
        7 => 'ListApiDestinations',
        8 => 'ListConnections',
        9 => 'UpdateConnection',
      ),
    ),
    7 => 
    array (
      'id' => 183370,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateServiceLinkedRoleForProduct',
        1 => 'ListTargets',
        2 => 'TestEventPattern',
      ),
    ),
    8 => 
    array (
      'id' => 0,
      'title' => '其它',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'EventCenterCheckEnabledOnDefaultBus',
        1 => 'EventCenterDisableOnDefaultBus',
        2 => 'EventCenterEnableOnDefaultBus',
        3 => 'EventCenterQueryEvents',
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
    'CreateEventBus' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '38582',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeHELDSX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述信息',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
            'maxLength' => 255,
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
                'example' => 'The event bus [xxxx] not existed!',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'A995F07C-E503-5881-9962-9CECA8566876',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'EventBusARN' => 
                  array (
                    'description' => '事件总线在阿里云上的统一资源标识（ARN）。',
                    'type' => 'string',
                    'example' => 'acs:eventbridge:cn-hangzhou:123456789098****:eventbus/MyEventBus	',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功：true：调用成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event bus [xxxx] not existed!\\",\\n  \\"RequestId\\": \\"A995F07C-E503-5881-9962-9CECA8566876\\",\\n  \\"Data\\": {\\n    \\"EventBusARN\\": \\"acs:eventbridge:cn-hangzhou:123456789098****:eventbus/MyEventBus\\\\t\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建一个事件总线',
      'summary' => '创建一个事件总线。',
      'description' => '创建一个事件总线。',
    ),
    'DeleteEventBus' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '38578',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeHELDSX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线名称。',
            'docRequired' => true,
            'example' => 'MyEventBus',
            'required' => true,
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'example' => 'EventBusNotExist',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'example' => 'C229E140-1A5C-5D55-8904-CFC5BA4CAA98',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：200：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'example' => '200',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"C229E140-1A5C-5D55-8904-CFC5BA4CAA98\\",\\n  \\"Data\\": true,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '删除一个事件总线。',
      'summary' => '删除一个事件总线。',
      'title' => '删除一个事件总线',
    ),
    'UpdateEventBus' => 
    array (
      'summary' => '修改事件总线。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38610',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeHELDSX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eventTest',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
            'maxLength' => 255,
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
                'example' => 'The event bus [xxxx] not existed!',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'f2099962-1628-45f1-9782-2bf6daad823f',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：
- Success：表示成功。                                 
- 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event bus [xxxx] not existed!\\",\\n  \\"RequestId\\": \\"f2099962-1628-45f1-9782-2bf6daad823f\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '修改事件总线',
      'description' => '修改事件总线。',
    ),
    'GetEventBus' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '38576',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeHELDSX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
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
                'example' => 'EventBusNotExist',
              ),
              'RequestId' => 
              array (
                'description' => '请求id',
                'type' => 'string',
                'example' => 'd5bfc188-4452-4ba7-b73a-a9005e522439',
              ),
              'Data' => 
              array (
                'description' => '返回结果',
                'type' => 'object',
                'properties' => 
                array (
                  'EventBusARN' => 
                  array (
                    'description' => '事件总线在阿里云上的统一资源标识（ARN）。',
                    'type' => 'string',
                    'example' => 'acs:eventbridge:cn-hangzhou:123456789098****:eventbus/MyEventBus',
                  ),
                  'EventBusName' => 
                  array (
                    'description' => '事件总线名称。',
                    'type' => 'string',
                    'example' => 'MyEventBus',
                  ),
                  'Description' => 
                  array (
                    'description' => '事件总线的描述',
                    'type' => 'string',
                    'example' => 'demo',
                  ),
                  'CreateTimestamp' => 
                  array (
                    'description' => '创建时间戳',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1641781825000',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"d5bfc188-4452-4ba7-b73a-a9005e522439\\",\\n  \\"Data\\": {\\n    \\"EventBusARN\\": \\"acs:eventbridge:cn-hangzhou:123456789098****:eventbus/MyEventBus\\",\\n    \\"EventBusName\\": \\"MyEventBus\\",\\n    \\"Description\\": \\"demo\\",\\n    \\"CreateTimestamp\\": 1641781825000\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取一个事件总线的详细信息',
      'summary' => '获取一个事件总线的详细信息。',
      'description' => '获取一个事件总线的详细信息。',
    ),
    'ListEventBuses' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '38647',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeHELDSX',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索的事件总线名称前缀。',
            'type' => 'string',
            'required' => false,
            'example' => 'My',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和NextToken搭配使用实现翻页能力。

><notice>每次返回的最大条数不超过100。></notice>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定Limit时，如果还有多余的返回值则会返回NextToken。用户可以使用返回的NextToken配合Limit实现分页效果。',
            'type' => 'string',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'InvalidArgument',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'D1DCF64A-3F2C-5323-ADCB-3F4DF30F****',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'EventBuses' => 
                  array (
                    'description' => '查询到的事件总线（EventBus）列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '查询到的事件总线数据结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EventBusARN' => 
                        array (
                          'description' => '事件总线在阿里云上的统一资源标识（ARN）。',
                          'type' => 'string',
                          'example' => 'acs:eventbridge:cn-hangzhou:12345678909****:eventbus/default',
                        ),
                        'EventBusName' => 
                        array (
                          'description' => '事件总线的名称。',
                          'type' => 'string',
                          'example' => 'default',
                        ),
                        'Description' => 
                        array (
                          'description' => '描述信息。',
                          'type' => 'string',
                          'example' => 'bus_description',
                        ),
                        'CreateTimestamp' => 
                        array (
                          'description' => '创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1607071602000',
                        ),
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => '10',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：
- Success：表示成功。                                 
- 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"InvalidArgument\\",\\n  \\"RequestId\\": \\"D1DCF64A-3F2C-5323-ADCB-3F4DF30F****\\",\\n  \\"Data\\": {\\n    \\"EventBuses\\": [\\n      {\\n        \\"EventBusARN\\": \\"acs:eventbridge:cn-hangzhou:12345678909****:eventbus/default\\",\\n        \\"EventBusName\\": \\"default\\",\\n        \\"Description\\": \\"bus_description\\",\\n        \\"CreateTimestamp\\": 1607071602000\\n      }\\n    ],\\n    \\"NextToken\\": \\"10\\",\\n    \\"Total\\": 2\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询所有事件总线',
      'summary' => '查询所有事件总线。',
      'description' => '查询所有事件总线。',
    ),
    'QueryEvent' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '38577',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridge6VIARK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demo',
          ),
        ),
        1 => 
        array (
          'name' => 'EventId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1935debf-ddac-49dc-a090-d4f2857a046d',
          ),
        ),
        2 => 
        array (
          'name' => 'EventSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件源名称。

- 查询default总线事件时，需填写EventSource参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'testEventSourceName',
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
                'example' => 'EventBusNotExist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '580A938B-6107-586C-8EC7-F22EEBEDA9E6',
              ),
              'Data' => 
              array (
                'description' => 'CloudEvent事件内容。',
                'type' => 'object',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

200：表示成功。    

其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"580A938B-6107-586C-8EC7-F22EEBEDA9E6\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询事件内容',
      'summary' => '查询事件内容。',
      'description' => '查询事件内容。',
    ),
    'QueryEventTraces' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '38633',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridge6VIARK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
          ),
        ),
        1 => 
        array (
          'name' => 'EventId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1935debf-ddac-49dc-a090-d4f2857a046d
',
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
                'example' => 'EventBusNotExist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'BB934571-1F5A-5E17-91DD-E2BC3E1BFBFF',
              ),
              'Data' => 
              array (
                'description' => '事件轨迹信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件轨迹信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Action' => 
                    array (
                      'description' => '事件轨迹类型。取值说明如下：
PutEvent：投递事件。
FilterEvent：过滤事件。
PushEvent：推送事件。',
                      'type' => 'string',
                      'example' => 'PutEvent',
                    ),
                    'ReceivedTime' => 
                    array (
                      'description' => '事件投递到总线的时间。Action取值为PutEvent时的EventTrace属性。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1659495343896',
                    ),
                    'RuleMatchingTime' => 
                    array (
                      'description' => '事件规则匹配通过时间。Action取值为FilterEvent时的EventTrace属性。',
                      'type' => 'string',
                      'example' => '1659495343896',
                    ),
                    'ActionTime' => 
                    array (
                      'description' => '轨迹事件执行时间。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1659495343896',
                    ),
                    'NotifyStatus' => 
                    array (
                      'description' => '事件目标投递状态',
                      'type' => 'string',
                      'example' => '[200]Ok',
                    ),
                    'RuleName' => 
                    array (
                      'description' => '事件规则的名称',
                      'type' => 'string',
                      'example' => 'ramrolechange-mns',
                    ),
                    'EventId' => 
                    array (
                      'description' => '事件ID。',
                      'type' => 'string',
                      'example' => 'a5747e4f-2af2-40b6-b262-d0140e995bf7',
                    ),
                    'EventBusName' => 
                    array (
                      'description' => '事件总线的名称。',
                      'type' => 'string',
                      'example' => 'demo',
                    ),
                    'Endpoint' => 
                    array (
                      'description' => '事件目标的接入点。Action取值为PushEvent时的EventTrace属性。',
                      'type' => 'string',
                      'example' => 'acs:mns:cn-zhangjiakou:123456789098****:queues/testQueue',
                    ),
                    'NotifyLatency' => 
                    array (
                      'description' => '事件目标投递延迟。Action取值为PushEvent时的EventTrace属性。',
                      'type' => 'string',
                      'example' => '80',
                    ),
                    'NotifyTime' => 
                    array (
                      'description' => '事件目标投递时间。Action取值为PushEvent时的EventTrace属性。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1659495343896',
                    ),
                    'EventSource' => 
                    array (
                      'description' => '事件源名称。',
                      'type' => 'string',
                      'example' => 'cert-api',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

200：表示成功。    

其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"BB934571-1F5A-5E17-91DD-E2BC3E1BFBFF\\",\\n  \\"Data\\": [\\n    {\\n      \\"Action\\": \\"PutEvent\\",\\n      \\"ReceivedTime\\": 1659495343896,\\n      \\"RuleMatchingTime\\": \\"1659495343896\\",\\n      \\"ActionTime\\": 1659495343896,\\n      \\"NotifyStatus\\": \\"[200]Ok\\",\\n      \\"RuleName\\": \\"ramrolechange-mns\\",\\n      \\"EventId\\": \\"a5747e4f-2af2-40b6-b262-d0140e995bf7\\",\\n      \\"EventBusName\\": \\"demo\\",\\n      \\"Endpoint\\": \\"acs:mns:cn-zhangjiakou:123456789098****:queues/testQueue\\",\\n      \\"NotifyLatency\\": \\"80\\",\\n      \\"NotifyTime\\": 1659495343896,\\n      \\"EventSource\\": \\"cert-api\\"\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询事件轨迹推送详情',
      'summary' => '查询事件轨迹。',
      'description' => '查询事件轨迹。',
    ),
    'QueryTracedEventByEventId' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '38615',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridge6VIARK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'demo',
          ),
        ),
        1 => 
        array (
          'name' => 'EventSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件源名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'mse',
          ),
        ),
        2 => 
        array (
          'name' => 'EventId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1935debf-ddac-49dc-a090-d4f2857a046d',
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
                'example' => 'EventBusNotExist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'A5D7B9F4-BF96-51A9-90B1-928955FABB5B',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件轨迹信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NextToken' => 
                    array (
                      'description' => '如果还有多余的返回值则会返回NextToken。',
                      'type' => 'string',
                      'example' => '1000',
                    ),
                    'Events' => 
                    array (
                      'description' => '事件信息',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '事件信息',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'EventId' => 
                          array (
                            'description' => '事件ID。',
                            'type' => 'string',
                            'example' => '37C-1P6Yn6EM7TcH37Vod8w7rbSeimJ',
                          ),
                          'EventBusName' => 
                          array (
                            'description' => '事件总线的名称。',
                            'type' => 'string',
                            'example' => 'default',
                          ),
                          'EventReceivedTime' => 
                          array (
                            'description' => '事件投递到总线的时间。',
                            'type' => 'integer',
                            'format' => 'int64',
                            'example' => '1661773573100',
                          ),
                          'EventSource' => 
                          array (
                            'description' => '事件源的名称。',
                            'type' => 'string',
                            'example' => 'cert-api',
                          ),
                          'EventType' => 
                          array (
                            'description' => '事件类型。',
                            'type' => 'string',
                            'example' => 'eventbridge:Events:HTTPEvent',
                          ),
                        ),
                      ),
                    ),
                    'Total' => 
                    array (
                      'description' => '总条数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '18',
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

Success：表示成功。    

其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"A5D7B9F4-BF96-51A9-90B1-928955FABB5B\\",\\n  \\"Data\\": [\\n    {\\n      \\"NextToken\\": \\"1000\\",\\n      \\"Events\\": [\\n        {\\n          \\"EventId\\": \\"37C-1P6Yn6EM7TcH37Vod8w7rbSeimJ\\",\\n          \\"EventBusName\\": \\"default\\",\\n          \\"EventReceivedTime\\": 1661773573100,\\n          \\"EventSource\\": \\"cert-api\\",\\n          \\"EventType\\": \\"eventbridge:Events:HTTPEvent\\"\\n        }\\n      ],\\n      \\"Total\\": 18\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '获取事件轨迹基本信息',
      'summary' => '通过EventId查询事件轨迹。',
      'description' => '通过EventId查询事件轨迹。',
    ),
    'QueryTracedEvents' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '38619',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridge6VIARK',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索到事件的开始时间。单位为：ms',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1661773509000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '检索到事件的结束时间。单位为：ms',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1661773509000',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和NextToken搭配使用实现翻页能力。
><notice>每次返回的最大条数不超过100。></notice>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        4 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定Limit时，如果还有多余的返回值则会返回NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => '1000',
          ),
        ),
        5 => 
        array (
          'name' => 'EventSource',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件源名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'mse',
          ),
        ),
        6 => 
        array (
          'name' => 'EventType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件类型。',
            'type' => 'string',
            'required' => false,
            'example' => 'eventbridge:Events:HTTPEvent',
          ),
        ),
        7 => 
        array (
          'name' => 'MatchedRule',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '匹配的规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test-mnsrule',
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
                'example' => 'EventBusNotExist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'd9e4628b-8b34-4f33-82be-5aac50aac0ba',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => '1000',
                  ),
                  'Events' => 
                  array (
                    'description' => '事件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '事件信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'EventId' => 
                        array (
                          'description' => '事件ID。',
                          'type' => 'string',
                          'example' => '07E-1OCckaVzNB92BIFFh4xgydOF1wd',
                        ),
                        'EventBusName' => 
                        array (
                          'description' => '事件总线的名称。',
                          'type' => 'string',
                          'example' => 'test-custom-bus',
                        ),
                        'EventReceivedTime' => 
                        array (
                          'description' => '事件投递到总线的时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1661773573100',
                        ),
                        'EventSource' => 
                        array (
                          'description' => '事件源名称。',
                          'type' => 'string',
                          'example' => 'acs.resourcemanager',
                        ),
                        'EventType' => 
                        array (
                          'description' => '事件类型。',
                          'type' => 'string',
                          'example' => 'eventbridge:Events:HTTPEvent',
                        ),
                      ),
                    ),
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- Success：表示成功。    

- 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"d9e4628b-8b34-4f33-82be-5aac50aac0ba\\",\\n  \\"Data\\": {\\n    \\"NextToken\\": \\"1000\\",\\n    \\"Events\\": [\\n      {\\n        \\"EventId\\": \\"07E-1OCckaVzNB92BIFFh4xgydOF1wd\\",\\n        \\"EventBusName\\": \\"test-custom-bus\\",\\n        \\"EventReceivedTime\\": 1661773573100,\\n        \\"EventSource\\": \\"acs.resourcemanager\\",\\n        \\"EventType\\": \\"eventbridge:Events:HTTPEvent\\"\\n      }\\n    ],\\n    \\"Total\\": 6\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '通过时间范围查询事件轨迹',
      'summary' => '通过时间范围查询事件轨迹。',
      'description' => '通过时间范围查询事件轨迹。',
    ),
    'ListAliyunOfficialEventSources' => 
    array (
      'summary' => '查询所有阿里云官方事件源。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '43188',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeR7SE45',
        ),
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
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'InvalidArgument',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5f80e9b3-98d5-4f51-8412-c758818a03e4',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'EventSourceList' => 
                  array (
                    'description' => '事件源列表',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '事件源数据结构',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '查询到的事件源的名称。',
                          'type' => 'string',
                          'example' => 'acs.aliyuncvc',
                        ),
                        'FullName' => 
                        array (
                          'description' => '全名。',
                          'type' => 'string',
                          'example' => 'E-MapReduce',
                        ),
                        'Arn' => 
                        array (
                          'description' => '事件总线在阿里云上的统一资源标识（ARN）。',
                          'type' => 'string',
                          'example' => 'acs:eventbridge:cn-hangzhou:SYSTEM:eventsource/acs.aliyuncvc',
                        ),
                        'Status' => 
                        array (
                          'description' => '查询到的事件源的状态。
取值说明如下：
Activated：激活状态',
                          'type' => 'string',
                          'example' => 'Activated',
                        ),
                        'Type' => 
                        array (
                          'description' => '查询到的事件类型的名称。',
                          'type' => 'string',
                          'example' => '1',
                        ),
                        'Ctime' => 
                        array (
                          'description' => '查询到的事件源的创建时间。单位为毫秒级。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1607071602000',
                        ),
                        'Description' => 
                        array (
                          'description' => '查询到的事件源的描述。',
                          'type' => 'string',
                          'example' => '云视频会议',
                        ),
                        'EventTypes' => 
                        array (
                          'description' => '事件类型列表',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '事件类型数据结构',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'description' => '查询到的事件类型的全名。',
                                'type' => 'string',
                                'example' => 'aliyuncvc:MeetingEvent:MeetingStateEvent',
                              ),
                              'ShortName' => 
                              array (
                                'description' => '查询到的事件类型的短名称。',
                                'type' => 'string',
                                'example' => 'MeetingStateEvent',
                              ),
                              'GroupName' => 
                              array (
                                'description' => '查询到的事件类型所属群组的名称。',
                                'type' => 'string',
                                'example' => 'aliyuncvc:MeetingEvent',
                              ),
                              'EventSourceName' => 
                              array (
                                'description' => '事件源名称',
                                'type' => 'string',
                                'example' => 'name',
                              ),
                            ),
                          ),
                        ),
                        'EventBusName' => 
                        array (
                          'description' => '查询到的事件类型所属事件源的名称。',
                          'type' => 'string',
                          'example' => 'acs.aliyuncvc',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"InvalidArgument\\",\\n  \\"RequestId\\": \\"5f80e9b3-98d5-4f51-8412-c758818a03e4\\",\\n  \\"Data\\": {\\n    \\"EventSourceList\\": [\\n      {\\n        \\"Name\\": \\"acs.aliyuncvc\\",\\n        \\"FullName\\": \\"E-MapReduce\\",\\n        \\"Arn\\": \\"acs:eventbridge:cn-hangzhou:SYSTEM:eventsource/acs.aliyuncvc\\",\\n        \\"Status\\": \\"Activated\\",\\n        \\"Type\\": \\"1\\",\\n        \\"Ctime\\": 1607071602000,\\n        \\"Description\\": \\"云视频会议\\",\\n        \\"EventTypes\\": [\\n          {\\n            \\"Name\\": \\"aliyuncvc:MeetingEvent:MeetingStateEvent\\",\\n            \\"ShortName\\": \\"MeetingStateEvent\\",\\n            \\"GroupName\\": \\"aliyuncvc:MeetingEvent\\",\\n            \\"EventSourceName\\": \\"name\\"\\n          }\\n        ],\\n        \\"EventBusName\\": \\"acs.aliyuncvc\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询所有阿里云官方事件源',
      'description' => '查询所有阿里云官方事件源。',
    ),
    'ListUserDefinedEventSources' => 
    array (
      'summary' => '查询所有外部事件源。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '43251',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeR7SE45',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件源名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        1 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'testBus',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和NextToken搭配使用实现翻页能力。
注意每次返回的最大条数不超过100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定Limit时，如果还有多余的返回值则会返回NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => '100',
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
                'example' => 'InvalidArgument',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5169654A-7059-57E3-BFD9-33C7E012****',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '当指定 Limit 时，如果还有多余的返回值则会返回 NextToken。',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '18',
                  ),
                  'EventSourceList' => 
                  array (
                    'description' => '事件源列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '事件源数据结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Name' => 
                        array (
                          'description' => '查询到的事件源的名称。',
                          'type' => 'string',
                          'example' => 'rocketmq.source',
                        ),
                        'Arn' => 
                        array (
                          'description' => '查询到的事件源在阿里云上的统一资源标识（ARN）。',
                          'type' => 'string',
                          'example' => 'acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/myRocketMQ.source',
                        ),
                        'Status' => 
                        array (
                          'description' => '查询到的事件源的状态。
取值说明如下：
Activated：激活状态',
                          'type' => 'string',
                          'example' => 'Activated',
                        ),
                        'Type' => 
                        array (
                          'description' => '查询到的事件源的类型。
取值说明如下：
UserDefined：外部事件源',
                          'type' => 'string',
                          'example' => 'UserDefined',
                        ),
                        'Ctime' => 
                        array (
                          'description' => '创建时间戳。',
                          'type' => 'number',
                          'format' => 'float',
                          'example' => '1607071602000',
                        ),
                        'ExternalSourceType' => 
                        array (
                          'description' => '事件来源类型。',
                          'type' => 'string',
                          'example' => 'RabbitMQ',
                        ),
                        'EventBusName' => 
                        array (
                          'description' => '事件总线的名称。',
                          'type' => 'string',
                          'example' => 'test-custom-bus',
                        ),
                        'SourceMNSParameters' => 
                        array (
                          'description' => 'MNS事件源参数。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegionId' => 
                            array (
                              'description' => '消息服务MNS的队列所在的地域。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou',
                            ),
                            'QueueName' => 
                            array (
                              'description' => '消息服务MNS的Queue的名称。',
                              'type' => 'string',
                              'example' => 'queue.openapi-sign-callback',
                            ),
                            'IsBase64Decode' => 
                            array (
                              'description' => '是否开启Base64解码。默认为勾选，即开启Base64解码。',
                              'type' => 'boolean',
                              'example' => 'true',
                            ),
                          ),
                        ),
                        'SourceRocketMQParameters' => 
                        array (
                          'description' => '请求参数SourceRocketMQParameters。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegionId' => 
                            array (
                              'description' => '消息队列RocketMQ版的实例所属地域。',
                              'type' => 'string',
                              'example' => 'cn-shenzhen',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '消息队列RocketMQ版的实例ID。更多信息，请参见[使用限制](~~163289~~)。',
                              'type' => 'string',
                              'example' => 'bastionhost-cn-7mz293s9d1p',
                            ),
                            'Topic' => 
                            array (
                              'description' => '消息队列RocketMQ版实例的Topic名称。更多信息，请参见[使用限制](~~163289~~)。',
                              'type' => 'string',
                              'example' => 'migration_instance',
                            ),
                            'Tag' => 
                            array (
                              'description' => '消息的过滤标签。',
                              'type' => 'string',
                              'example' => 'dataact',
                            ),
                            'Offset' => 
                            array (
                              'description' => '消息的消费位点。取值说明如下：

- CONSUME_FROM_LAST_OFFSET：从最新位点开始消费。

- CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。

- CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。

默认值：CONSUME_FROM_LAST_OFFSET。',
                              'type' => 'string',
                              'example' => 'CONSUMEFROMLASTOFFSET',
                            ),
                            'Timestamp' => 
                            array (
                              'description' => '时间戳。仅当参数Offset取值为CONSUME_FROM_TIMESTAMP时，该参数有效。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '1664591760',
                            ),
                            'GroupId' => 
                            array (
                              'description' => '消息队列RocketMQ版的Group ID。',
                              'type' => 'string',
                              'example' => 'GID-test',
                            ),
                            'InstanceType' => 
                            array (
                              'description' => '实例类型。只能填写CLOUD_4（云上4.0实例）、CLOUD_5（云上5.0实例）和SELF_BUILT（自建MQ）。',
                              'type' => 'string',
                              'example' => 'CLOUD_5',
                            ),
                            'InstanceNetwork' => 
                            array (
                              'description' => '实例网络。',
                              'type' => 'string',
                              'example' => 'PublicNetwork',
                            ),
                            'InstanceVpcId' => 
                            array (
                              'description' => '专有网络VPC的ID。',
                              'type' => 'string',
                              'example' => 'vpc-***',
                            ),
                            'InstanceVSwitchIds' => 
                            array (
                              'description' => '交换机ID。',
                              'type' => 'string',
                              'example' => 'vsw-bp1iu***',
                            ),
                            'InstanceSecurityGroupId' => 
                            array (
                              'description' => '安全组ID。',
                              'type' => 'string',
                              'example' => 'eb-167adad548***',
                            ),
                            'AuthType' => 
                            array (
                              'description' => 'ACL或者不填。',
                              'type' => 'string',
                              'example' => 'ACL',
                            ),
                            'InstanceEndpoint' => 
                            array (
                              'description' => '实例接入点。',
                              'type' => 'string',
                              'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                            ),
                            'InstanceUsername' => 
                            array (
                              'description' => '实例用户名。',
                              'type' => 'string',
                              'example' => 'root',
                            ),
                            'InstancePassword' => 
                            array (
                              'description' => '实例密码。',
                              'type' => 'string',
                              'example' => '***',
                            ),
                          ),
                        ),
                        'SourceRabbitMQParameters' => 
                        array (
                          'description' => '请求参数SourceRabbitMQParameters。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RegionId' => 
                            array (
                              'description' => '消息队列RabbitMQ版实例所在的地域。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '消息队列RabbitMQ版的实例的ID。更多信息，请参见[使用限制](~~163289~~)。',
                              'type' => 'string',
                              'example' => 'bastionhost-cn-0ju2x28fj07',
                            ),
                            'VirtualHostName' => 
                            array (
                              'description' => '消息队列RabbitMQ版实例的Vhost的名称。更多信息，请参见[使用限制](~~163289~~)。',
                              'type' => 'string',
                              'example' => 'eb-connect',
                            ),
                            'QueueName' => 
                            array (
                              'description' => '消息队列RabbitMQ版实例的Queue的名称。更多信息，请参见[使用限制](~~163289~~)。',
                              'type' => 'string',
                              'example' => 'file-upload-queue',
                            ),
                          ),
                        ),
                        'SourceSLSParameters' => 
                        array (
                          'description' => '请求参数SourceSLSParameters。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Project' => 
                            array (
                              'description' => '日志服务SLS的日志项目。',
                              'type' => 'string',
                              'example' => 'VideoTestProject',
                            ),
                            'LogStore' => 
                            array (
                              'description' => '日志服务SLS的日志库。',
                              'type' => 'string',
                              'example' => 'cloudfirewall-logstore',
                            ),
                            'ConsumePosition' => 
                            array (
                              'description' => '起始消费位点，可以选择最早或最新位点，分别对应“begin”，“end”，也可以从指定时间开始消费，以秒为单位。',
                              'type' => 'string',
                              'example' => 'end',
                            ),
                            'RoleName' => 
                            array (
                              'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。此角色权限策略可参考自定义事件源日志服务SLS。',
                              'type' => 'string',
                              'example' => 'testRole',
                            ),
                          ),
                        ),
                        'SourceHttpEventParameters' => 
                        array (
                          'description' => '请求参数SourceHttpEventParameters。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'description' => '生成的Webhook支持的协议类型。取值说明如下：

- HTTP

- HTTPS

- HTTP&HTTPS',
                              'type' => 'string',
                              'example' => 'HTTPS',
                            ),
                            'Method' => 
                            array (
                              'description' => '生成的Webhook支持的HTTP请求方法。可多选，可选范围如下：

- GET

- POST

- PUT

- PATCH

- DELETE

- HEAD

- OPTIONS

- TRACE

- CONNECT',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '生成的Webhook支持的HTTP请求方法。可多选，可选范围如下：

- GET

- POST

- PUT

- PATCH

- DELETE

- HEAD

- OPTIONS

- TRACE

- CONNECT',
                                'type' => 'string',
                                'example' => 'GET',
                              ),
                            ),
                            'SecurityConfig' => 
                            array (
                              'description' => '选择安全配置的类型。可选范围如下：

- none：无需配置。

- ip：IP网段。

- referer：安全域名。',
                              'type' => 'string',
                              'example' => 'none',
                            ),
                            'Ip' => 
                            array (
                              'description' => 'IP网段安全配置。仅在SecurityConfig取值为ip时，需要设置该参数。可填写IP地址段或IP地址。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => 'IP网段安全配置。仅在SecurityConfig取值为ip时，需要设置该参数。可填写IP地址段或IP地址。',
                                'type' => 'string',
                                'example' => '8.212.139.16/32',
                              ),
                            ),
                            'Referer' => 
                            array (
                              'description' => '安全域名配置。仅在SecurityConfig取值为referer时，需要设置该参数。可填写域名。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '安全域名配置。仅在SecurityConfig取值为referer时，需要设置该参数。可填写域名。',
                                'type' => 'string',
                                'example' => 'aliyundoc.com	',
                              ),
                            ),
                            'PublicWebHookUrl' => 
                            array (
                              'description' => '公网请求URL。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '公网请求URL。',
                                'type' => 'string',
                                'example' => 'http://***.eventbridge.cn-hangzhou.aliyuncs.com/webhook/putEvents?token=***',
                              ),
                            ),
                            'VpcWebHookUrl' => 
                            array (
                              'description' => '内网请求URL。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '内网请求URL。',
                                'type' => 'string',
                                'example' => 'http://***.eventbridge.cn-hangzhou-vpc.aliyuncs.com/webhook/putEvents?token=0f6705c9253540e1a53e06db011a25b52068562ca50d4818828fffd61c5af***',
                              ),
                            ),
                          ),
                        ),
                        'SourceKafkaParameters' => 
                        array (
                          'description' => 'Kafka事件源参数。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'InstanceId' => 
                            array (
                              'description' => '实例ID。',
                              'type' => 'string',
                              'example' => 'i-2ze6kiwzkebf04s5h8ds',
                            ),
                            'ConsumerGroup' => 
                            array (
                              'description' => '订阅该Topic的消费者所对应的Group ID。',
                              'type' => 'string',
                              'example' => 'test-gid',
                            ),
                            'Topic' => 
                            array (
                              'description' => '主题名称。',
                              'type' => 'string',
                              'example' => 'topic_api_1674441611897',
                            ),
                            'OffsetReset' => 
                            array (
                              'description' => '消费位点。',
                              'type' => 'string',
                              'example' => 'earliest',
                            ),
                            'RegionId' => 
                            array (
                              'description' => '地域ID。',
                              'type' => 'string',
                              'example' => 'cn-hangzhou',
                            ),
                            'MaximumTasks' => 
                            array (
                              'description' => '并发配额（消费者数）。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '2',
                            ),
                            'Network' => 
                            array (
                              'description' => '网络配置 ：Default（默认网络）和PublicNetwork（自建网络）。',
                              'type' => 'string',
                              'example' => 'Default',
                            ),
                            'SecurityGroupId' => 
                            array (
                              'description' => '安全组ID。',
                              'type' => 'string',
                              'example' => 'sg-f8zatts5g97x0j***',
                            ),
                            'VpcId' => 
                            array (
                              'description' => 'VPC ID。',
                              'type' => 'string',
                              'example' => 'vpc-bp1kz3ohhzgrau2***',
                            ),
                            'VSwitchIds' => 
                            array (
                              'description' => '交换机ID。',
                              'type' => 'string',
                              'example' => 'vsw-bp1hcrxq3mkcik***e',
                            ),
                          ),
                        ),
                        'SourceScheduledEventParameters' => 
                        array (
                          'description' => '时间事件源参数。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Schedule' => 
                            array (
                              'description' => 'Cron 表达式',
                              'type' => 'string',
                              'example' => '0 1 * * * *',
                            ),
                            'TimeZone' => 
                            array (
                              'description' => 'Cron执行时区。',
                              'type' => 'string',
                              'example' => 'GMT+0:00',
                            ),
                            'UserData' => 
                            array (
                              'description' => 'JSON字符串',
                              'type' => 'string',
                              'example' => '{"a": "b"}',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- Success：表示成功。

- 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"InvalidArgument\\",\\n  \\"RequestId\\": \\"5169654A-7059-57E3-BFD9-33C7E012****\\",\\n  \\"Data\\": {\\n    \\"NextToken\\": \\"100\\",\\n    \\"Total\\": 18,\\n    \\"EventSourceList\\": [\\n      {\\n        \\"Name\\": \\"rocketmq.source\\",\\n        \\"Arn\\": \\"acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/myRocketMQ.source\\",\\n        \\"Status\\": \\"Activated\\",\\n        \\"Type\\": \\"UserDefined\\",\\n        \\"Ctime\\": 1607071602000,\\n        \\"ExternalSourceType\\": \\"RabbitMQ\\",\\n        \\"EventBusName\\": \\"test-custom-bus\\",\\n        \\"SourceMNSParameters\\": {\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"QueueName\\": \\"queue.openapi-sign-callback\\",\\n          \\"IsBase64Decode\\": true\\n        },\\n        \\"SourceRocketMQParameters\\": {\\n          \\"RegionId\\": \\"cn-shenzhen\\",\\n          \\"InstanceId\\": \\"bastionhost-cn-7mz293s9d1p\\",\\n          \\"Topic\\": \\"migration_instance\\",\\n          \\"Tag\\": \\"dataact\\",\\n          \\"Offset\\": \\"CONSUMEFROMLASTOFFSET\\",\\n          \\"Timestamp\\": 1664591760,\\n          \\"GroupId\\": \\"GID-test\\",\\n          \\"InstanceType\\": \\"CLOUD_5\\",\\n          \\"InstanceNetwork\\": \\"PublicNetwork\\",\\n          \\"InstanceVpcId\\": \\"vpc-***\\",\\n          \\"InstanceVSwitchIds\\": \\"vsw-bp1iu***\\",\\n          \\"InstanceSecurityGroupId\\": \\"eb-167adad548***\\",\\n          \\"AuthType\\": \\"ACL\\",\\n          \\"InstanceEndpoint\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com\\",\\n          \\"InstanceUsername\\": \\"root\\",\\n          \\"InstancePassword\\": \\"***\\"\\n        },\\n        \\"SourceRabbitMQParameters\\": {\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"InstanceId\\": \\"bastionhost-cn-0ju2x28fj07\\",\\n          \\"VirtualHostName\\": \\"eb-connect\\",\\n          \\"QueueName\\": \\"file-upload-queue\\"\\n        },\\n        \\"SourceSLSParameters\\": {\\n          \\"Project\\": \\"VideoTestProject\\",\\n          \\"LogStore\\": \\"cloudfirewall-logstore\\",\\n          \\"ConsumePosition\\": \\"end\\",\\n          \\"RoleName\\": \\"testRole\\"\\n        },\\n        \\"SourceHttpEventParameters\\": {\\n          \\"Type\\": \\"HTTPS\\",\\n          \\"Method\\": [\\n            \\"GET\\"\\n          ],\\n          \\"SecurityConfig\\": \\"none\\",\\n          \\"Ip\\": [\\n            \\"8.212.139.16/32\\"\\n          ],\\n          \\"Referer\\": [\\n            \\"aliyundoc.com\\\\t\\"\\n          ],\\n          \\"PublicWebHookUrl\\": [\\n            \\"http://***.eventbridge.cn-hangzhou.aliyuncs.com/webhook/putEvents?token=***\\"\\n          ],\\n          \\"VpcWebHookUrl\\": [\\n            \\"http://***.eventbridge.cn-hangzhou-vpc.aliyuncs.com/webhook/putEvents?token=0f6705c9253540e1a53e06db011a25b52068562ca50d4818828fffd61c5af***\\"\\n          ]\\n        },\\n        \\"SourceKafkaParameters\\": {\\n          \\"InstanceId\\": \\"i-2ze6kiwzkebf04s5h8ds\\",\\n          \\"ConsumerGroup\\": \\"test-gid\\",\\n          \\"Topic\\": \\"topic_api_1674441611897\\",\\n          \\"OffsetReset\\": \\"earliest\\",\\n          \\"RegionId\\": \\"cn-hangzhou\\",\\n          \\"MaximumTasks\\": 2,\\n          \\"Network\\": \\"Default\\",\\n          \\"SecurityGroupId\\": \\"sg-f8zatts5g97x0j***\\",\\n          \\"VpcId\\": \\"vpc-bp1kz3ohhzgrau2***\\",\\n          \\"VSwitchIds\\": \\"vsw-bp1hcrxq3mkcik***e\\"\\n        },\\n        \\"SourceScheduledEventParameters\\": {\\n          \\"Schedule\\": \\"0 1 * * * *\\",\\n          \\"TimeZone\\": \\"GMT+0:00\\",\\n          \\"UserData\\": \\"{\\\\\\"a\\\\\\": \\\\\\"b\\\\\\"}\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询所有外部事件源',
      'description' => '查询所有外部事件源。',
      'responseParamsDescription' => '返回示例 ：
`HTTP/1.1 200 OK
Server: AliyunEventBridge
Connection: keep-alive
Content-Type: application/json;charset=utf-8
Content-Length: 79
x-eventbridge-request-id: 608C6467-3195-42A3-97B5-C51FB976****
Date: Sat, 18 Apr 2020 05:30:41 GMT

{
    "code":"200",
    "data":{
        "RequestId":"608C6467-3195-42A3-97B5-C51FB976****",
        "Data":{
            "eventSourceList":[
                {
                    "Status":"Activated",
                    "Type":"UserDefined",
                    "Ctime":1626360902642,
                    "EventBusName": "demo-bus",
                    "SourceRocketMQParameters":{
                        "InstanceId":"MQ_INST_164901546557****_BXmr****",
                        "Tag":"",
                        "RegionId":"cn-hangzhou",
                        "Topic":"demo-topic",
                        "GroupID":"GID_SOURCE",
                        "Offset":"CONSUME_FROM_LAST_OFFSET"
                    },
                    "ARN":"acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/myRocketMQ.source",
                    "Name":"demo.source"
                }
            ]
        },
        "Code":"Success",
        "Success":true
    },
    "httpStatusCode":"200",
    "requestId":"608C6467-3195-42A3-97B5-C51FB976****",
    "successResponse":true
}`',
    ),
    'CreateEventSource' => 
    array (
      'summary' => '创建一个外部事件源。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '38588',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeR7SE45',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventSourceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件源名称。',
            'example' => 'myrabbitmq.sourc',
            'required' => true,
            'title' => '事件源英文code',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件源描述详情。',
            'example' => 'RabbitMQ事件源',
            'required' => false,
            'title' => '事件源描述详情',
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'LinkedExternalSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否连接外部数据源',
            'required' => false,
            'title' => '是否连接外部数据源',
            'type' => 'boolean',
          ),
        ),
        3 => 
        array (
          'name' => 'ExternalSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '外部数据源类型',
            'format' => 'byte',
            'required' => false,
            'title' => '外部数据源类型',
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'ExternalSourceConfig',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '外部数据源配置',
            'required' => false,
            'title' => '外部数据源配置',
            'type' => 'object',
          ),
        ),
        5 => 
        array (
          'name' => 'EventBusName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '与事件源绑定的事件总线的名称。',
            'example' => 'my-event-bus',
            'required' => true,
            'title' => '绑定的总线',
            'type' => 'string',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceMNSParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'MNS事件源参数。选择MNS事件源时RegionId、IsBase64Decode和QueueName都是必填参数。',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '消息服务MNS的队列所在的地域。
可以填写以下地域 ：cn-qingdao、cn-beijing、cn-zhangjiakou、cn-huhehaote、cn-wulanchabu、cn-hangzhou、cn-shanghai、cn-shenzhen、cn-guangzhou、cn-chengdu、cn-hongkong、ap-southeast-1、ap-southeast-2、ap-southeast-3、ap-southeast-5、ap-northeast-1、eu-central-1、us-west-1、us-east-1、ap-south-1、me-east-1和cn-north-2-gov-1',
                'example' => 'cn-hangzhou',
                'required' => false,
                'type' => 'string',
              ),
              'QueueName' => 
              array (
                'description' => '消息服务MNS的Queue的名称。',
                'example' => 'MyQueue',
                'required' => false,
                'type' => 'string',
              ),
              'IsBase64Decode' => 
              array (
                'description' => '是否开启Base64解码。填写为true，即开启Base64解码。只能填写true或者false。',
                'example' => 'true',
                'required' => false,
                'type' => 'boolean',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceRocketMQParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceRocketMQParameters。',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '消息队列RocketMQ版的实例所属地域。',
                'example' => 'cn-hangzhou',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceId' => 
              array (
                'description' => '消息队列RocketMQ版的实例ID。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'MQ_INST_164901546557****_BAAN****	',
                'required' => false,
                'type' => 'string',
              ),
              'Topic' => 
              array (
                'description' => '消息队列RocketMQ版实例的Topic名称。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'mytopic',
                'required' => false,
                'type' => 'string',
              ),
              'Tag' => 
              array (
                'description' => '消息的过滤标签。',
                'example' => 'test',
                'required' => false,
                'type' => 'string',
              ),
              'Offset' => 
              array (
                'description' => '消息的消费位点。取值说明如下：
CONSUME_FROM_LAST_OFFSET：从最新位点开始消费。
CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。
CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。
默认值：CONSUME_FROM_LAST_OFFSET。',
                'example' => 'CONSUME_FROM_LAST_OFFSET',
                'required' => false,
                'type' => 'string',
              ),
              'Timestamp' => 
              array (
                'description' => '时间戳。仅当参数Offset取值为CONSUME_FROM_TIMESTAMP时，该参数有效。',
                'example' => '1636597951964',
                'format' => 'int64',
                'required' => false,
                'type' => 'integer',
              ),
              'GroupID' => 
              array (
                'description' => '消息队列RocketMQ版的Group ID。',
                'example' => 'GID-test',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceType' => 
              array (
                'description' => '实例类型 ：

- 4.0实例填写：Cloud_4

- 5.0实例填写：Cloud_5',
                'example' => 'Cloud_4',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceNetwork' => 
              array (
                'description' => '无',
                'example' => '无',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceVpcId' => 
              array (
                'description' => '专有网络需要添加 ：vpcId',
                'example' => 'vpc-bp1a4gmlk31hyg6pt****',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceVSwitchIds' => 
              array (
                'description' => '专有网络需要添加 ：vSwitchId',
                'example' => 'vsw-bp10rbrt6rb6vrd89****',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceSecurityGroupId' => 
              array (
                'description' => '专有网络需要添加 ：securityGroupId',
                'example' => 'sg-catalog-eventlist****',
                'required' => false,
                'type' => 'string',
              ),
              'AuthType' => 
              array (
                'description' => 'ACL或者不填。',
                'example' => 'ACL',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceEndpoint' => 
              array (
                'description' => '实例接入点。',
                'example' => 'registry-vpc****.aliyuncs.com
',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceUsername' => 
              array (
                'description' => '实例用户名。',
                'example' => 'root',
                'required' => false,
                'type' => 'string',
              ),
              'InstancePassword' => 
              array (
                'description' => '实例密码。',
                'example' => '******',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceRabbitMQParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceRabbitMQParameters',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '消息队列RabbitMQ版实例所在的地域。',
                'example' => 'cn-hangzhou',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceId' => 
              array (
                'description' => '消息队列RabbitMQ版的实例的ID。更多信息，请参见使用限制。',
                'example' => 'amqp-cn-nif22u74****	',
                'required' => false,
                'type' => 'string',
              ),
              'VirtualHostName' => 
              array (
                'description' => '消息队列RabbitMQ版实例的Vhost的名称。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'eb-connect	',
                'required' => false,
                'type' => 'string',
              ),
              'QueueName' => 
              array (
                'description' => 'eb-connect	消息队列RabbitMQ版实例的Queue的名称。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'demo',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceSLSParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'SourceSLSParameters',
            'properties' => 
            array (
              'Project' => 
              array (
                'description' => '日志服务SLS的日志项目。',
                'example' => 'test-project	',
                'required' => false,
                'type' => 'string',
              ),
              'LogStore' => 
              array (
                'description' => '日志服务SLS的日志库。',
                'example' => 'test-logstore	',
                'required' => false,
                'type' => 'string',
              ),
              'ConsumePosition' => 
              array (
                'description' => '起始消费位点，可以选择最早或最新位点，分别对应“begin”，“end”，也可以从指定时间开始消费，以秒为单位。',
                'example' => 'end',
                'required' => false,
                'type' => 'string',
              ),
              'RoleName' => 
              array (
                'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。此角色权限策略可参考自定义事件源日志服务SLS。',
                'example' => 'testRole',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        10 => 
        array (
          'name' => 'SourceHttpEventParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceHttpEventParameters',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '生成的Webhook支持的协议类型。取值说明如下：
- HTTP
- HTTPS
- HTTP&HTTPS',
                'example' => 'HTTPS',
                'required' => false,
                'type' => 'string',
              ),
              'Method' => 
              array (
                'description' => '生成的Webhook支持的HTTP请求方法。可多选，可选范围如下：
- GET
- POST
- PUT
- PATCH
- DELETE
- HEAD
- OPTIONS
- TRACE
- CONNECT',
                'items' => 
                array (
                  'description' => '生成的Webhook支持的HTTP请求方法。可多选，可选范围如下：
- GET
- POST
- PUT
- PATCH
- DELETE
- HEAD
- OPTIONS
- TRACE
- CONNECT',
                  'example' => 'GET',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => false,
                'type' => 'array',
              ),
              'SecurityConfig' => 
              array (
                'description' => '选择安全配置的类型。可选范围如下：
- none：无需配置。
- ip：IP网段。
- referer：安全域名。',
                'example' => 'none',
                'required' => false,
                'type' => 'string',
              ),
              'Ip' => 
              array (
                'description' => 'IP网段安全配置。仅在SecurityConfig取值为ip时，需要设置该参数。可填写IP地址段或IP地址。',
                'items' => 
                array (
                  'description' => 'IP网段安全配置。仅在SecurityConfig取值为ip时，需要设置该参数。可填写IP地址段或IP地址。',
                  'example' => '10.0.0.0/8	',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => false,
                'type' => 'array',
              ),
              'Referer' => 
              array (
                'description' => '安全域名配置。仅在SecurityConfig取值为referer时，需要设置该参数。可填写域名。',
                'items' => 
                array (
                  'description' => '安全域名配置。仅在SecurityConfig取值为referer时，需要设置该参数。可填写域名。',
                  'example' => 'aliyundoc.com	',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => false,
                'type' => 'array',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceScheduledEventParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceScheduledEventParameters',
            'properties' => 
            array (
              'Schedule' => 
              array (
                'description' => 'Cron表达式。',
                'example' => '10 * * * * *',
                'required' => false,
                'type' => 'string',
              ),
              'TimeZone' => 
              array (
                'description' => 'Cron执行时区。',
                'example' => 'GMT+0:00',
                'required' => false,
                'type' => 'string',
              ),
              'UserData' => 
              array (
                'description' => 'JSON字符串',
                'example' => '{"a": "b"}
',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        12 => 
        array (
          'name' => 'SourceKafkaParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceKafkaParameters',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'example' => 'pc-2zehmg67txzuyuuwl****',
                'required' => false,
                'type' => 'string',
              ),
              'ConsumerGroup' => 
              array (
                'description' => '订阅该Topic的消费者所对应的Group ID。',
                'example' => 'wechat_peer_****',
                'required' => false,
                'type' => 'string',
              ),
              'Topic' => 
              array (
                'description' => 'Topic名称。',
                'example' => 'prod_ma_dispatch_center_call_re****',
                'required' => false,
                'type' => 'string',
              ),
              'OffsetReset' => 
              array (
                'description' => '消费位点。',
                'example' => 'latest',
                'required' => false,
                'type' => 'string',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'example' => 'cn-hangzhou',
                'required' => false,
                'type' => 'string',
              ),
              'MaximumTasks' => 
              array (
                'description' => '并发配额（消费者数）',
                'example' => '1',
                'format' => 'int32',
                'required' => false,
                'type' => 'integer',
              ),
              'Network' => 
              array (
                'description' => '网络配置 ：Default（默认网络）和PublicNetwork（自建网络）。',
                'example' => 'Default',
                'required' => false,
                'type' => 'string',
              ),
              'SecurityGroupId' => 
              array (
                'description' => '如果是自建网络需要添加：安全组id',
                'example' => 'sg-8vbf66aoyp0wfzrz****',
                'required' => false,
                'type' => 'string',
              ),
              'VSwitchIds' => 
              array (
                'description' => '如果是自建网络需要添加：vSwitchId',
                'example' => 'vsw-bp127azpeirmwu4q9****',
                'required' => false,
                'type' => 'string',
              ),
              'VpcId' => 
              array (
                'description' => '如果是自建网络需要添加：vpcId',
                'example' => 'vpc-2ze5ejm986a73qq3v****',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'example' => ' Remote error. requestId: [A8EFABD2-95B9-1C46-9E01-xxxx], error code: [CreateRelatedResourceFailed], message: [Create related resource failed, EntityNotExist.Role : The role not exists: xxxx. \\r\\nRequestId : xxxx-168C-54ED-8FEB-BF11CB70AEB7]   ',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'example' => '2922208e-e1c6-43ee-bfd1-aca50263bc8a',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'properties' => 
                array (
                  'EventSourceARN' => 
                  array (
                    'description' => '资源ARN。',
                    'example' => 'acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/mymns.source',
                    'title' => '资源ARN',
                    'type' => 'string',
                  ),
                ),
                'type' => 'object',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：
- Success：表示成功。                                 
- 其它：表示错误码。
错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\" Remote error. requestId: [A8EFABD2-95B9-1C46-9E01-xxxx], error code: [CreateRelatedResourceFailed], message: [Create related resource failed, EntityNotExist.Role : The role not exists: xxxx. \\\\\\\\r\\\\\\\\nRequestId : xxxx-168C-54ED-8FEB-BF11CB70AEB7]   \\",\\n  \\"RequestId\\": \\"2922208e-e1c6-43ee-bfd1-aca50263bc8a\\",\\n  \\"Data\\": {\\n    \\"EventSourceARN\\": \\"acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/mymns.source\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '创建一个外部事件源。',
      'requestParamsDescription' => '请求示例
`POST /openapi/createEventSource HTTP/1.1
Host: 164901546557****.eventbridge.cn-hangzhou.aliyuncs.com
Date: Sat, 18 Apr 2020 05:30:41 GMT
x-eventbridge-version: 2020-04-01
Authorization: acs vZ3VL0SuJdHi****:Jo2PbT******azYAYoYslKLvWzg=
Content-Type: application/json;charset=UTF-8
Content-Length: 26

{
    "EventSourceName":"myRabbitMQ.source",
    "Description":"RabbitMQ事件源",
    "SourceRabbitMQParameters":{
        "RegionId":"cn-hangzhou",
        "InstanceId":"amqp-cn-nif22u74****",
        "VirtualHostName":"eb-connect",
        "QueueName":"demo"
    },
    "EventBusName":"my-event-bus"
}`',
      'title' => '创建一个事件源',
    ),
    'DeleteEventSource' => 
    array (
      'summary' => '删除一个事件源。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '38603',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeR7SE45',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '绑定的总线',
            'description' => '绑定的总线',
            'type' => 'string',
            'required' => false,
          ),
        ),
        1 => 
        array (
          'name' => 'EventSourceName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '事件源名称',
            'description' => '事件源名称',
            'type' => 'string',
            'required' => true,
            'example' => 'myrabbitmq.source',
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
                'example' => 'Remote error. requestId: [78B66E68-E778-1F33-84BD-xxxx], error code: [EventSourceNotExist], message: [The event source in request is not exist! ]',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5f80e9b3-98d5-4f51-8412-c758818a03e4',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Remote error. requestId: [78B66E68-E778-1F33-84BD-xxxx], error code: [EventSourceNotExist], message: [The event source in request is not exist! ]\\",\\n  \\"RequestId\\": \\"5f80e9b3-98d5-4f51-8412-c758818a03e4\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除一个事件源',
      'description' => '删除一个事件源。',
    ),
    'UpdateEventSource' => 
    array (
      'summary' => '更新一个事件源的配置。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38634',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeR7SE45',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventSourceName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件源名称。',
            'example' => 'myrabbitmq.source',
            'required' => true,
            'title' => '事件源英文Code',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件源描述详情。',
            'example' => 'RabbitMQ事件源',
            'required' => false,
            'title' => '事件源描述详情',
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'LinkedExternalSource',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否连接外部数据源',
            'required' => false,
            'title' => '是否连接外部数据源',
            'type' => 'boolean',
          ),
        ),
        3 => 
        array (
          'name' => 'ExternalSourceType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '外部数据源类型',
            'required' => false,
            'title' => '外部数据源类型',
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'ExternalSourceConfig',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '外部数据源配置',
            'required' => false,
            'title' => '外部数据源配置',
            'type' => 'object',
          ),
        ),
        5 => 
        array (
          'name' => 'EventBusName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '绑定的总线。',
            'example' => 'my-event-bus
',
            'required' => true,
            'title' => '绑定的总线',
            'type' => 'string',
          ),
        ),
        6 => 
        array (
          'name' => 'SourceMNSParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'MNS事件源参数',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '消息服务MNS的队列所在的地域。',
                'example' => 'cn-beijing',
                'required' => false,
                'type' => 'string',
              ),
              'QueueName' => 
              array (
                'description' => '消息服务MNS的Queue的名称。',
                'example' => 'queue_api_bind_1672194645178',
                'required' => false,
                'type' => 'string',
              ),
              'IsBase64Decode' => 
              array (
                'description' => '是否开启Base64解码。默认为勾选，即开启Base64解码。',
                'example' => 'true',
                'required' => false,
                'type' => 'boolean',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        7 => 
        array (
          'name' => 'SourceRocketMQParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceRocketMQParameters',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '消息队列RocketMQ版的实例所属地域。',
                'example' => 'cn-zhangjiakou',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceId' => 
              array (
                'description' => '消息队列RocketMQ版的实例ID。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'dbaudit-cn-i7m2nx****',
                'required' => false,
                'type' => 'string',
              ),
              'Topic' => 
              array (
                'description' => '消息队列RocketMQ版实例的Topic名称。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'topic_default_195820716552192',
                'required' => false,
                'type' => 'string',
              ),
              'Tag' => 
              array (
                'description' => '消息的过滤标签。',
                'example' => 'KEY2',
                'required' => false,
                'type' => 'string',
              ),
              'Offset' => 
              array (
                'description' => '消息的消费位点。取值说明如下：

- CONSUME_FROM_LAST_OFFSET：从最新位点开始消费。

- CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。

- CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。

默认值：CONSUME_FROM_LAST_OFFSET。',
                'example' => 'CONSUMEFROMLASTOFFSET',
                'required' => false,
                'type' => 'string',
              ),
              'Timestamp' => 
              array (
                'description' => '时间戳。仅当参数Offset取值为CONSUME_FROM_TIMESTAMP时，该参数有效。',
                'example' => '1663555399032',
                'format' => 'int64',
                'required' => false,
                'type' => 'integer',
              ),
              'GroupID' => 
              array (
                'description' => '消息队列RocketMQ版的Group ID。',
                'example' => 'GID-test
',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceType' => 
              array (
                'description' => '实例类型 ：

- 4.0实例填写 ：Cloud_4

- 5.0实例填写 ：Cloud_5',
                'example' => 'Cloud_4',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceNetwork' => 
              array (
                'description' => '无',
                'example' => '无',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceVpcId' => 
              array (
                'description' => '专有网络需要添加 vpcId。',
                'example' => 'vpc-bp1a4gmlk31hyg6pt****',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceVSwitchIds' => 
              array (
                'description' => '专有网络需要添加 vSwitchId。',
                'example' => 'vsw-bp10rbrt6rb6vrd89****
',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceSecurityGroupId' => 
              array (
                'description' => '专有网络需要添加securityGroupId。',
                'example' => 'sg-catalog-eventlistener
',
                'required' => false,
                'type' => 'string',
              ),
              'AuthType' => 
              array (
                'description' => 'ACL或者不填。',
                'example' => 'ACL',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceEndpoint' => 
              array (
                'description' => '实例接入点。',
                'example' => 'registry-vpc****.aliyuncs.com
',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceUsername' => 
              array (
                'description' => '实例用户名。',
                'example' => 'root',
                'required' => false,
                'type' => 'string',
              ),
              'InstancePassword' => 
              array (
                'description' => '实例密码。',
                'example' => '******',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        8 => 
        array (
          'name' => 'SourceRabbitMQParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceRabbitMQParameters',
            'properties' => 
            array (
              'RegionId' => 
              array (
                'description' => '消息队列RabbitMQ版实例所在的地域。',
                'example' => 'cn-hangzhou',
                'required' => false,
                'type' => 'string',
              ),
              'InstanceId' => 
              array (
                'description' => '消息队列RabbitMQ版的实例的ID。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'bastionhost-cn-7mz2zky****',
                'required' => false,
                'type' => 'string',
              ),
              'VirtualHostName' => 
              array (
                'description' => '消息队列RabbitMQ版实例的Vhost的名称。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'amqp-cn-nif22u74****	
',
                'required' => false,
                'type' => 'string',
              ),
              'QueueName' => 
              array (
                'description' => 'eb-connect	消息队列RabbitMQ版实例的Queue的名称。更多信息，请参见[使用限制](~~163289~~)。',
                'example' => 'eb-connect',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        9 => 
        array (
          'name' => 'SourceSLSParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'SourceSLSParameters',
            'properties' => 
            array (
              'Project' => 
              array (
                'description' => '日志服务SLS的日志项目。',
                'example' => 'VideoTestProject',
                'required' => false,
                'type' => 'string',
              ),
              'LogStore' => 
              array (
                'description' => '日志服务SLS的日志库。',
                'example' => 'waf-logstore',
                'required' => false,
                'type' => 'string',
              ),
              'ConsumePosition' => 
              array (
                'description' => '起始消费位点，可以选择最早或最新位点，分别对应“begin”，“end”，也可以从指定时间开始消费，以秒为单位。',
                'example' => 'end',
                'required' => false,
                'type' => 'string',
              ),
              'RoleName' => 
              array (
                'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。此角色权限策略可参考自定义事件源日志服务SLS。',
                'example' => 'testRole',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        10 => 
        array (
          'name' => 'SourceScheduledEventParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceScheduledEventParameters',
            'properties' => 
            array (
              'Schedule' => 
              array (
                'description' => 'Cron表达式。',
                'example' => '10 * * * * *
',
                'required' => false,
                'type' => 'string',
              ),
              'TimeZone' => 
              array (
                'description' => 'Cron执行时区。',
                'example' => 'GMT+0:00
',
                'required' => false,
                'type' => 'string',
              ),
              'UserData' => 
              array (
                'description' => 'JSON字符串',
                'example' => '{"a": "b"}',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        11 => 
        array (
          'name' => 'SourceHttpEventParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceHttpEventParameters',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '生成的Webhook支持的协议类型。取值说明如下：

- HTTP

- HTTPS

- HTTP&HTTPS',
                'example' => 'HTTPS',
                'required' => false,
                'type' => 'string',
              ),
              'Method' => 
              array (
                'description' => '生成的Webhook支持的HTTP请求方法。可多选，可选范围如下：

- GET

- POST

- PUT

- PATCH

- DELETE

- HEAD

- OPTIONS

- TRACE

- CONNECT',
                'items' => 
                array (
                  'description' => '生成的Webhook支持的HTTP请求方法。可多选，可选范围如下：

- GET

- POST

- PUT

- PATCH

- DELETE

- HEAD

- OPTIONS

- TRACE

- CONNECT',
                  'example' => 'GET',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => false,
                'type' => 'array',
              ),
              'SecurityConfig' => 
              array (
                'description' => '选择安全配置的类型。可选范围如下：

- none：无需配置。

- ip：IP网段。

- referer：安全域名。',
                'example' => 'none',
                'required' => false,
                'type' => 'string',
              ),
              'Ip' => 
              array (
                'description' => 'IP网段安全配置。仅在SecurityConfig取值为ip时，需要设置该参数。可填写IP地址段或IP地址。',
                'items' => 
                array (
                  'description' => 'IP网段安全配置。仅在SecurityConfig取值为ip时，需要设置该参数。可填写IP地址段或IP地址。',
                  'example' => '47.252.126.0/24',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => false,
                'type' => 'array',
              ),
              'Referer' => 
              array (
                'description' => '安全域名配置。仅在SecurityConfig取值为referer时，需要设置该参数。可填写域名。',
                'items' => 
                array (
                  'description' => '安全域名配置。仅在SecurityConfig取值为referer时，需要设置该参数。可填写域名。',
                  'example' => 'aliyundoc.com	
',
                  'required' => false,
                  'type' => 'string',
                ),
                'required' => false,
                'type' => 'array',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        12 => 
        array (
          'name' => 'SourceKafkaParameters',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求参数SourceKafkaParameters',
            'properties' => 
            array (
              'InstanceId' => 
              array (
                'description' => '实例ID。',
                'example' => 'cbwp-bp1o3m66wcjgbkssm3****',
                'required' => false,
                'type' => 'string',
              ),
              'ConsumerGroup' => 
              array (
                'description' => '订阅该Topic的消费者所对应的Group ID。',
                'example' => 'dsp_online_ml_request',
                'required' => false,
                'type' => 'string',
              ),
              'Topic' => 
              array (
                'description' => 'Topic名称。',
                'example' => 'billing_notify',
                'required' => false,
                'type' => 'string',
              ),
              'OffsetReset' => 
              array (
                'description' => '消费位点。',
                'example' => 'latest',
                'required' => false,
                'type' => 'string',
              ),
              'RegionId' => 
              array (
                'description' => '地域ID。',
                'example' => 'cn-shanghai',
                'required' => false,
                'type' => 'string',
              ),
              'MaximumTasks' => 
              array (
                'description' => '并发配额（消费者数）。',
                'example' => '1',
                'format' => 'int32',
                'required' => false,
                'type' => 'integer',
              ),
              'Network' => 
              array (
                'description' => '网络配置 ：Default（默认网络）和PublicNetwork（自建网络）。',
                'example' => 'Default',
                'required' => false,
                'type' => 'string',
              ),
              'SecurityGroupId' => 
              array (
                'description' => '如果是自建网络需要添安全组ID。',
                'example' => 'sg-5wz3mjgo9wpvdnwpwnhkj****',
                'required' => false,
                'type' => 'string',
              ),
              'VpcId' => 
              array (
                'description' => '如果是自建网络需要添加vpcId。',
                'example' => 'vpc-2zefu4vfmx6sioguj****',
                'required' => false,
                'type' => 'string',
              ),
              'VSwitchIds' => 
              array (
                'description' => '如果是自建网络需要添加vSwitchId。',
                'example' => 'vsw-bp1xyntcxiwplhqxj****',
                'required' => false,
                'type' => 'string',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息',
                'example' => 'Remote error. requestId: [xxxx-9D10-65DFDFA3A75D], error code: [EventSourceNotExist], message: [The event source in request is not exist! ]',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'example' => 'c057d379-ea65-41ec-a8a8-90627a9****',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'description' => '更新结果',
                'example' => 'true',
                'type' => 'boolean',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- Success：表示成功。

- 其它：表示错误码。错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Remote error. requestId: [xxxx-9D10-65DFDFA3A75D], error code: [EventSourceNotExist], message: [The event source in request is not exist! ]\\",\\n  \\"RequestId\\": \\"c057d379-ea65-41ec-a8a8-90627a9****\\",\\n  \\"Data\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '更新一个事件源的配置。',
      'requestParamsDescription' => '请求示例 ：
`POST /openapi/updateEventSource HTTP/1.1
Host: 164901546557****.eventbridge.cn-hangzhou.aliyuncs.com
Date: Sat, 18 Apr 2020 05:30:41 GMT
x-eventbridge-version: 2020-04-01
Authorization: acs vZ3VL0SuJdHi****:Jo2PbT******azYAYoYslKLvWzg=
Content-Type: application/json;charset=UTF-8
Content-Length: 26

{
    "EventSourceName":"myRocketMQ.source",
    "Description":"RocketMQ事件源",
    "SourceRocketMQParameters":{
        "InstanceId":"MQ_INST_164901546557****_BAAN****",
        "GroupID":"GID_group1",
        "Topic":"mytopic",
        "Offset":"CONSUME_FROM_LAST_OFFSET",
        "Tag":"test",
        "RegionId":"cn-hangzhou"
    },
    "EventBusName":"my-event-bus"
}`',
      'title' => '更新一个事件源',
    ),
    'DeleteTargets' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '38579',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ramrolechange-mns',
          ),
        ),
        2 => 
        array (
          'name' => 'TargetIds',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '删除一个事件规则下的一个或多个投递目标。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '规则目标id

- 提示 ：通过GetRule查询获取事件目标Id',
              'type' => 'string',
              'required' => false,
              'example' => '12',
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
            'type' => 'object',
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'EventBusNotExist',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '78FA9EAC-F0C0-58B0-871E-9F9756CE1D29',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'ErrorEntriesCount' => 
                  array (
                    'description' => '处理失败的事件体数量。取值说明如下：
取值为0：所有事件均正常处理。
取值为除0以外的其他整数：处理失败的事件个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ErrorEntries' => 
                  array (
                    'description' => '处理失败的事件体信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '处理失败的事件体信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorMessage' => 
                        array (
                          'description' => '错误详细描述。',
                          'type' => 'string',
                          'example' => 'The id of event target is duplicate!',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码',
                          'type' => 'string',
                          'example' => 'EventRuleTargetIdDuplicate',
                        ),
                        'EntryId' => 
                        array (
                          'description' => '处理失败的事件体编号。',
                          'type' => 'string',
                          'example' => 'target5',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：200：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => '200',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventBusNotExist\\",\\n  \\"RequestId\\": \\"78FA9EAC-F0C0-58B0-871E-9F9756CE1D29\\",\\n  \\"Data\\": {\\n    \\"ErrorEntriesCount\\": 0,\\n    \\"ErrorEntries\\": [\\n      {\\n        \\"ErrorMessage\\": \\"The id of event target is duplicate!\\",\\n        \\"ErrorCode\\": \\"EventRuleTargetIdDuplicate\\",\\n        \\"EntryId\\": \\"target5\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除一个事件规则下的目标',
      'summary' => '删除一个事件规则下的一个或多个投递目标。',
      'description' => '删除一个事件规则下的一个或多个投递目标。',
      'requestParamsDescription' => '请求示例 ：
`POST /openapi/deleteTargets HTTP/1.1
Host: 123456789098****.eventbridge.cn-hangzhou.aliyuncs.com
Date: Sat, 18 Apr 2020 05:30:41 GMT
x-eventbridge-version: 2020-04-01
Authorization: acs vZ3VL0SuJdHi****:Jo2PbT*****4azYAYoYslKLvWzg=
Content-type: application/json;charset=UTF-8
Content-Length: 26

{ "EventBusName":"default", "RuleName":"myRule", "TargetIds": [
	"targetId1", "targetId2"
] }`',
    ),
    'PutTargets' => 
    array (
      'summary' => '在指定的规则下创建或更新事件目标。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '172379',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'eventTest',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ssr-send-to-vendor-test01
',
          ),
        ),
        2 => 
        array (
          'name' => 'Targets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '需要新增或更新的事件目标列表。更多信息，请参见[使用限制](~~163289~~)。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要新增或更新的事件目标。',
              'type' => 'object',
              'properties' => 
              array (
                'Id' => 
                array (
                  'description' => '自定义事件目标Id。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Mlm123456JHd2RsRoKw',
                ),
                'Type' => 
                array (
                  'description' => '事件目标类型。更多信息，请参见[事件目标参数](~~185887~~)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'acs.fc.function	',
                ),
                'Endpoint' => 
                array (
                  'description' => '投递端点链接。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:fc:cn-hangzhou:123456789098****:services/guide.LATEST/functions/HelloFC	',
                ),
                'PushRetryStrategy' => 
                array (
                  'description' => '推送重试策略。取值说明如下：

- **BACKOFF_RETRY**：退避重试策略。重试3次，每次重试的间隔时间是10秒到20秒之间的随机值。

- **EXPONENTIAL_DECAY_RETRY**：指数衰减重试。重试176次，每次重试的间隔时间指数递增至512秒，总计重试时间为1天；每次重试的具体间隔为：1，2，4，8，16，32，64，128，256，512，512...512秒（共167个512）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'BACKOFFRETRY',
                ),
                'DeadLetterQueue' => 
                array (
                  'description' => '死信队列。未处理或者超过重试次数的事件会被写入死信队列。当前死信队列支持的队列类型有消息队列RocketMQ版、消息服务MNS、消息队列Kafka版和EventBridge事件总线。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Arn' => 
                    array (
                      'description' => '死信队列的Arn，未处理或超过重试次数的事件会被写入死信队列。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'acs:mns:cn-hangzhou:123456789098****:/queues/deadletterqueue
或
acs:mq:cn-hangzhou:123456789098****:/instances/MQ_INST_123456789098****_BX8QbBPL/topic/deadlettertopic
或
acs:alikafka:cn-hangzhou:123456789098****:instance/alikafka_post-cn-123456/topic/deadlettertopic
或
acs:eventbridge:cn-hangzhou:123456789098****:eventbus/deadletterbus',
                    ),
                  ),
                  'required' => false,
                ),
                'ErrorsTolerance' => 
                array (
                  'description' => '容错策略。取值说明如下：

- **ALL**：允许容错。允许异常容错，当异常发生时不会阻塞执行，超过重试策略后会根据配置将消息投递至死信队列或直接丢弃。

- **NONE**：禁止容错。不允许容错，当异常发生并超过重试策略配置时会阻塞执行。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALL',
                ),
                'ParamList' => 
                array (
                  'description' => '事件目标的参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '事件目标的参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResourceKey' => 
                      array (
                        'description' => '事件目标的资源参数。更多信息，请参见[事件目标参数](~~185887~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'body',
                      ),
                      'Form' => 
                      array (
                        'description' => '事件目标参数的格式。更多信息，请参见[事件目标参数](~~185887~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TEMPLATE',
                      ),
                      'Value' => 
                      array (
                        'description' => '事件目标参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"key\\"=\\"value\\"}',
                      ),
                      'Template' => 
                      array (
                        'description' => '事件目标参数模板样式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'The value of ${key} is ${value}!	',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => true,
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
                'example' => 'The event rule not existed!',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '6FB52207-7621-5292-BDF2-A17E2E984160
',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ErrorEntriesCount' => 
                  array (
                    'description' => '处理失败的事件目标数量。取值说明如下：

- 取值为0：所有事件目标均正常处理。

- 取值为除0以外的其他整数：处理失败的事件目标个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'ErrorEntries' => 
                  array (
                    'description' => '处理失败的事件目标信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '处理失败的事件目标信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ErrorMessage' => 
                        array (
                          'description' => '错误详细描述。',
                          'type' => 'string',
                          'example' => 'The id of event target is duplicate!',
                        ),
                        'ErrorCode' => 
                        array (
                          'description' => '错误码。',
                          'type' => 'string',
                          'example' => 'EventRuleTargetIdDuplicate',
                        ),
                        'EntryId' => 
                        array (
                          'description' => '处理失败的事件目标Id。',
                          'type' => 'string',
                          'example' => 'Mlm123456JHd2RsRoKw',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- Success：表示成功。    
                          
- 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event rule not existed!\\",\\n  \\"RequestId\\": \\"6FB52207-7621-5292-BDF2-A17E2E984160\\\\n\\",\\n  \\"Data\\": {\\n    \\"ErrorEntriesCount\\": 0,\\n    \\"ErrorEntries\\": [\\n      {\\n        \\"ErrorMessage\\": \\"The id of event target is duplicate!\\",\\n        \\"ErrorCode\\": \\"EventRuleTargetIdDuplicate\\",\\n        \\"EntryId\\": \\"Mlm123456JHd2RsRoKw\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '在指定的规则下创建或更新事件目标',
      'description' => '在指定的规则下创建或更新事件目标。',
    ),
    'CreateRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '38627',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的描述',
            'type' => 'string',
            'required' => false,
            'example' => 'MNS的过滤规则',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MNSRule',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的状态。取值说明如下：
ENABLE：规则已启用。规则默认状态。
DISABLE：规则已禁用。',
            'type' => 'string',
            'required' => false,
            'example' => 'ENABLE',
          ),
        ),
        4 => 
        array (
          'name' => 'FilterPattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件模式，JSON格式。取值说明如下：
stringEqual模式。
stringExpression模式 。
每个field最多5个expression（map结构）。

每个field最多5个expression（map结构）。',
            'type' => 'string',
            'required' => true,
            'example' => '{\\"source\\": [{\\"prefix\\": \\"acs.\\"}],\\"type\\": [{\\"prefix\\":\\"oss:ObjectReplication\\"}],\\"subject\\":[{\\"prefix\\":\\"acs:oss:cn-hangzhou:123456789098****:my-movie-bucket/\\", \\"suffix\\":\\".txt\\"}]}',
          ),
        ),
        5 => 
        array (
          'name' => 'EventTargets',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '事件目标列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '事件目标。',
              'type' => 'object',
              'properties' => 
              array (
                'Id' => 
                array (
                  'description' => '自定义事件目标Id。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'Mlm123456JHd2RsRoKw
',
                ),
                'Type' => 
                array (
                  'description' => '事件目标类型。更多信息，请参见[事件目标参数](~~185887~~)。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'acs.mns.queue	',
                ),
                'Endpoint' => 
                array (
                  'description' => '投递端点链接。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'acs:mns:cn-hangzhou:123456789098****:queues/myqueue	',
                ),
                'PushRetryStrategy' => 
                array (
                  'description' => '推送重试策略。取值说明如下：
BACKOFF_RETRY：退避重试策略。重试3次，每次重试的间隔时间是10秒到20秒之间的随机值。
EXPONENTIAL_DECAY_RETRY：指数衰减重试。重试176次，每次重试的间隔时间指数递增至512秒，总计重试时间为1天；每次重试的具体间隔为：1，2，4，8，16，32，64，128，256，512，512...512秒（共167个512）。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'BACKOFF_RETRY',
                ),
                'DeadLetterQueue' => 
                array (
                  'description' => '死信队列。未处理或者超过重试次数的事件会被写入死信队列。当前死信队列支持的队列类型有消息队列RocketMQ版、消息服务MNS、消息队列Kafka版和EventBridge事件总线。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Arn' => 
                    array (
                      'description' => '死信队列的Arn，未处理或超过重试次数的事件会被写入死信队列。支持消息服务MNS和消息队列RocketMQ版。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'acs:mns:cn-hangzhou:123456789098****:/queues/deadletterqueue
或
acs:mq:cn-hangzhou:123456789098****:/instances/MQ_INST_123456789098****_BX8QbBPL/topic/deadlettertopic
或
acs:alikafka:cn-hangzhou:123456789098****:instance/alikafka_post-cn-123456/topic/deadlettertopic
或
acs:eventbridge:cn-hangzhou:123456789098****:eventbus/deadletterbus
',
                    ),
                  ),
                  'required' => false,
                ),
                'ErrorsTolerance' => 
                array (
                  'description' => '容错策略。取值说明如下：
ALL：允许容错。允许异常容错，当异常发生时不会阻塞执行，超过重试策略后会根据配置将消息投递至死信队列或直接丢弃。
NONE：禁止容错。不允许容错，当异常发生并超过重试策略配置时会阻塞执行。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ALL',
                ),
                'ParamList' => 
                array (
                  'description' => '事件目标的参数。',
                  'type' => 'array',
                  'items' => 
                  array (
                    'description' => '事件目标的参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ResourceKey' => 
                      array (
                        'description' => '事件目标的资源参数。更多信息，请参见[使用限制](~~163289~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'body',
                      ),
                      'Form' => 
                      array (
                        'description' => '事件目标参数的格式。更多信息，请参见[使用限制](~~163289~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'TEMPLATE',
                      ),
                      'Value' => 
                      array (
                        'description' => '事件目标参数的值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{\\"key\\"=\\"value\\"}',
                      ),
                      'Template' => 
                      array (
                        'description' => '事件目标参数模板样式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'The value of ${key} is ${value}!	',
                      ),
                    ),
                    'required' => false,
                  ),
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'docRequired' => true,
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
                'example' => 'Remote error. requestId: [xxxx], error code: [xxx], message: [The target in event rule is invalid! Endpoint is xxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1AD6D598-7506-5D2C-81EA-30E3241A903A',
              ),
              'Data' => 
              array (
                'description' => '返回数据',
                'type' => 'object',
                'properties' => 
                array (
                  'RuleARN' => 
                  array (
                    'description' => '事件规则的ARN，用于授权。',
                    'type' => 'string',
                    'example' => 'acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/MNSRule',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Remote error. requestId: [xxxx], error code: [xxx], message: [The target in event rule is invalid! Endpoint is xxx\\",\\n  \\"RequestId\\": \\"1AD6D598-7506-5D2C-81EA-30E3241A903A\\",\\n  \\"Data\\": {\\n    \\"RuleARN\\": \\"acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/MNSRule\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '创建一个事件规则',
      'summary' => '创建一个事件规则。',
      'description' => '创建一个事件规则。',
      'requestParamsDescription' => '请求示例

POST /openapi/createRule HTTP/1.1
Host: 123456789098****.eventbridge.cn-hangzhou.aliyuncs.com
Date: Sat, 18 Apr 2020 05:30:41 GMT
x-eventbridge-version: 2020-04-01
Authorization: acs vZ3VL0SuJdHi****:Jo2PbT******azYAYoYslKLvWzg=
Content-Type: application/json;charset=UTF-8
Content-Length: 26

{
    "EventBusName":"default",
    "RuleName":"MNSRule",
    "Description":"MNS的过滤规则",
    "Status":"ENABLE",
    "filterPattern":"{\\"source\\": [{\\"prefix\\": \\"acs.\\"}],\\"type\\": [{\\"prefix\\":\\"oss:ObjectReplication\\"}],\\"subject\\":[{\\"prefix\\":\\"acs:oss:cn-hangzhou:123456789098****:my-movie-bucket/\\", \\"suffix\\":\\".txt\\"}]}",
    "Targets":[
        {
            "Id":"1",
            "Type":"acs.mns.queue",
            "Endpoint":"acs:mns:cn-hangzhou:123456789098****:queues/myqueue",
            "PushRetryStrategy":"BACKOFF_RETRY",
            "DeadLetterQueue":{
            "Arn":"acs:mns:cn-hangzhou:123456789098****:/queues/rule-deadletterqueue"
            },
            "ParamList":[
                {
                    "resourceKey":"queue",
                    "form":"CONSTANT",
                    "value":"myqueue"
                },
                {
                    "resourceKey":"body",
                    "form":"TEMPLATE",
                    "value":"{\\"key\\"=\\"value\\"}",
                    "template":"The value of ${key} is ${value}!"
                }
            ]
        }
    ]
}',
    ),
    'DeleteRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '38586',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tf-testacc-event-bus',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '删除规则的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ramrolechange-mns',
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
                'example' => 'The event rule not existed!
',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'FF942675-F937-549C-A942-EB94FFE28DD3',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 Success表示成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '是否调用成功。true：调用成功。                                 false：调用失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event rule not existed!\\\\n\\",\\n  \\"RequestId\\": \\"FF942675-F937-549C-A942-EB94FFE28DD3\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除一个事件规则',
      'summary' => '删除一个事件规则。',
      'description' => '删除一个事件规则。',
    ),
    'DisableRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38645',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tf-testacc-rule',
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
                'example' => 'EventRuleNotExisted',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'C36345A1-75F3-5A1A-BFCF-33B82719****',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

- Success：表示成功。

- 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventRuleNotExisted\\",\\n  \\"RequestId\\": \\"C36345A1-75F3-5A1A-BFCF-33B82719****\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '禁用一个事件规则',
      'summary' => '禁用一个事件规则。',
      'description' => '禁用一个事件规则。',
    ),
    'EnableRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38583',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MyEventBus',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ramrolechange',
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
                'example' => 'EventRuleNotExisted',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '580A938B-6107-586C-8EC7-F22EEBEDA9E6',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventRuleNotExisted\\",\\n  \\"RequestId\\": \\"580A938B-6107-586C-8EC7-F22EEBEDA9E6\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '启用一个事件规则',
      'summary' => '启用一个事件规则。',
      'description' => '启用一个事件规则。',
    ),
    'UpdateRule' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38598',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'hw-test',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则的名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'tf-testacc-rule',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则的状态。取值说明如下：
ENABLE：规则已启用。规则默认状态。
DISABLE：规则已禁用。',
            'type' => 'string',
            'required' => false,
            'example' => 'ENABLE',
          ),
        ),
        4 => 
        array (
          'name' => 'FilterPattern',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件模式，JSON格式。取值说明如下：
stringEqual模式。
stringExpression模式 。
每个field最多5个expression（map结构）。

每个field最多5个expression（map结构）。',
            'type' => 'string',
            'required' => true,
            'example' => '{\\"source\\":[\\"acs.oss\\"],\\"type\\":[\\"oss:BucketQueried:GetBucketStat\\"]}',
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
                'example' => 'EventRuleFilterPatternSchemaError',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '7439944D-D9FC-5614-B65E-07A468988924',
              ),
              'Data' => 
              array (
                'description' => '更新结果',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventRuleFilterPatternSchemaError\\",\\n  \\"RequestId\\": \\"7439944D-D9FC-5614-B65E-07A468988924\\",\\n  \\"Data\\": true,\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '更新一个事件规则的配置',
      'summary' => '更新一个事件规则的配置。',
      'description' => '更新一个事件规则的配置。',
    ),
    'GetRule' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '38640',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'docRequired' => true,
            'example' => 'default',
            'required' => true,
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则名称。',
            'docRequired' => true,
            'example' => 'ram-changes',
            'required' => true,
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'example' => 'The event rule not existed!',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'example' => '2BC1857D-E633-5E79-B2C2-43EF5F7730D8',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '规则的状态。取值说明如下：
ENABLE：规则已启用。规则默认状态。
DISABLE：规则已禁用。',
                    'example' => 'ENABLE',
                    'type' => 'string',
                  ),
                  'EventBusName' => 
                  array (
                    'description' => '事件总线的名称。',
                    'example' => 'Housekeeping-Bus',
                    'type' => 'string',
                  ),
                  'RuleARN' => 
                  array (
                    'description' => '规则ARN。',
                    'example' => 'acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/myRule3',
                    'type' => 'string',
                  ),
                  'Description' => 
                  array (
                    'description' => '规则说明。',
                    'example' => 'test',
                    'type' => 'string',
                  ),
                  'Targets' => 
                  array (
                    'description' => '事件目标列表。',
                    'items' => 
                    array (
                      'description' => '事件目标。',
                      'properties' => 
                      array (
                        'DetailMap' => 
                        array (
                          'description' => '详细信息',
                          'type' => 'object',
                        ),
                        'Type' => 
                        array (
                          'description' => '事件目标类型。更多信息，请参见[事件目标参数](~~185887~~)。',
                          'example' => 'acs.mns.queue',
                          'type' => 'string',
                        ),
                        'Endpoint' => 
                        array (
                          'description' => '投递端点链接。',
                          'example' => 'acs:mns:cn-hangzhou:123456789098****:queues/myqueue',
                          'type' => 'string',
                        ),
                        'ParamList' => 
                        array (
                          'description' => '事件目标的参数列表。',
                          'items' => 
                          array (
                            'description' => '事件目标的参数。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '事件目标参数的值。',
                                'example' => '{\\"key\\"=\\"value\\"}',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '事件目标参数模板样式。',
                                'example' => 'The value of ${key} is ${value}!',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '事件目标参数的格式。更多信息，请参见[使用限制](~~163289~~)。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'ResourceKey' => 
                              array (
                                'description' => '事件目标的资源参数。更多信息，请参见[使用限制](~~163289~~)。',
                                'example' => 'body',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'type' => 'array',
                        ),
                        'PushSelector' => 
                        array (
                          'description' => '发布选择器',
                          'example' => 'PARAM_TRANSFORMER',
                          'type' => 'string',
                        ),
                        'Id' => 
                        array (
                          'description' => '自定义事件目标Id。',
                          'example' => 'Mlm123456JHd2RsRoKw
',
                          'type' => 'string',
                        ),
                        'DeadLetterQueue' => 
                        array (
                          'description' => '死信队列',
                          'properties' => 
                          array (
                            'Arn' => 
                            array (
                              'description' => '查询到的死信队列在阿里云上的统一资源标识（ARN）。',
                              'example' => 'acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/myRocketMQ.source',
                              'type' => 'string',
                            ),
                          ),
                          'type' => 'object',
                        ),
                        'PushRetryStrategy' => 
                        array (
                          'description' => '推送重试策略。取值说明如下：
BACKOFF_RETRY：退避重试策略。重试3次，每次重试的间隔时间是10秒到20秒之间的随机值。
EXPONENTIAL_DECAY_RETRY：指数衰减重试。重试176次，每次重试的间隔时间指数递增至512秒，总计重试时间为1天；每次重试的具体间隔为：1，2，4，8，16，32，64，128，256，512，512...512秒（共167个512）。',
                          'example' => 'BACKOFF_RETRY',
                          'type' => 'string',
                        ),
                        'ConcurrentConfig' => 
                        array (
                          'properties' => 
                          array (
                            'Concurrency' => 
                            array (
                              'format' => 'int64',
                              'type' => 'integer',
                            ),
                          ),
                          'type' => 'object',
                        ),
                        'ErrorsTolerance' => 
                        array (
                          'description' => '容错策略。取值说明如下： ALL：允许容错。允许异常容错，当异常发生时不会阻塞执行，超过重试策略后会根据配置将消息投递至死信队列或直接丢弃。 NONE：禁止容错。不允许容错，当异常发生并超过重试策略配置时会阻塞执行。',
                          'example' => 'ALL',
                          'type' => 'string',
                        ),
                      ),
                      'type' => 'object',
                    ),
                    'type' => 'array',
                  ),
                  'FilterPattern' => 
                  array (
                    'description' => '事件模式，JSON格式。取值说明如下：
stringEqual模式。
stringExpression模式 。
每个field最多5个expression（map结构）。

每个field最多5个expression（map结构）。',
                    'example' => '{\\"source\\":[\\"acs.oss\\"],\\"type\\":[\\"oss:BucketQueried:GetBucketStat\\"]}',
                    'type' => 'string',
                  ),
                  'CreatedTimestamp' => 
                  array (
                    'description' => '创建时间（时间戳）',
                    'example' => '1607071602000',
                    'format' => 'int64',
                    'type' => 'integer',
                  ),
                  'RuleName' => 
                  array (
                    'description' => '规则名称。',
                    'example' => 'ramrolechange-fc',
                    'type' => 'string',
                  ),
                ),
                'type' => 'object',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event rule not existed!\\",\\n  \\"RequestId\\": \\"2BC1857D-E633-5E79-B2C2-43EF5F7730D8\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"ENABLE\\",\\n    \\"EventBusName\\": \\"Housekeeping-Bus\\",\\n    \\"RuleARN\\": \\"acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/myRule3\\",\\n    \\"Description\\": \\"test\\",\\n    \\"Targets\\": [\\n      {\\n        \\"DetailMap\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Type\\": \\"acs.mns.queue\\",\\n        \\"Endpoint\\": \\"acs:mns:cn-hangzhou:123456789098****:queues/myqueue\\",\\n        \\"ParamList\\": [\\n          {\\n            \\"Value\\": \\"{\\\\\\\\\\\\\\"key\\\\\\\\\\\\\\"=\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\"}\\",\\n            \\"Template\\": \\"The value of ${key} is ${value}!\\",\\n            \\"Form\\": \\"TEMPLATE\\",\\n            \\"ResourceKey\\": \\"body\\"\\n          }\\n        ],\\n        \\"PushSelector\\": \\"PARAM_TRANSFORMER\\",\\n        \\"Id\\": \\"Mlm123456JHd2RsRoKw\\\\n\\",\\n        \\"DeadLetterQueue\\": {\\n          \\"Arn\\": \\"acs:eventbridge:cn-hangzhou:164901546557****:eventbus/my-event-bus/eventsource/myRocketMQ.source\\"\\n        },\\n        \\"PushRetryStrategy\\": \\"BACKOFF_RETRY\\",\\n        \\"ConcurrentConfig\\": {\\n          \\"Concurrency\\": 0\\n        },\\n        \\"ErrorsTolerance\\": \\"ALL\\"\\n      }\\n    ],\\n    \\"FilterPattern\\": \\"{\\\\\\\\\\\\\\"source\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"acs.oss\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"oss:BucketQueried:GetBucketStat\\\\\\\\\\\\\\"]}\\",\\n    \\"CreatedTimestamp\\": 1607071602000,\\n    \\"RuleName\\": \\"ramrolechange-fc\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '获取一个事件规则的详细信息。',
      'summary' => '获取一个事件规则的详细信息。',
      'title' => '获取一个事件规则的详细信息',
    ),
    'ListRules' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '38589',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RuleNamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '规则名称前缀。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和NextToken搭配使用实现翻页能力。
><notice>每次返回的最大条数不超过100。></notice>',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '50',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定Limit时，如果还有多余的返回值则会返回NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => '1000',
          ),
        ),
        3 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
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
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'Specified parameter Limit is not valid.',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'C7043799-F4DA-5290-9249-97C35987****',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => '1000',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'Rules' => 
                  array (
                    'description' => '规则列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '规则列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'DetailMap' => 
                        array (
                          'description' => '详细信息。',
                          'type' => 'object',
                        ),
                        'Status' => 
                        array (
                          'description' => '规则的状态。取值说明如下：

- ENABLE：规则已启用。规则默认状态。

- DISABLE：规则已禁用。',
                          'type' => 'string',
                          'example' => 'ENABLE',
                        ),
                        'EventBusName' => 
                        array (
                          'description' => '事件总线的名称。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'RuleARN' => 
                        array (
                          'description' => '规则ARN。',
                          'type' => 'string',
                          'example' => 'acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/myRule3',
                        ),
                        'Description' => 
                        array (
                          'description' => '规则描述。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'Targets' => 
                        array (
                          'description' => '事件目标列表。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '事件目标。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Type' => 
                              array (
                                'description' => '事件目标类型。更多信息，请参见[事件目标参数](~~185887~~)。',
                                'type' => 'string',
                                'example' => 'acs.mns.queue
',
                              ),
                              'Endpoint' => 
                              array (
                                'description' => '投递端点链接。',
                                'type' => 'string',
                                'example' => 'acs:mns:cn-hangzhou:123456789098****:queues/myqueue',
                              ),
                              'Id' => 
                              array (
                                'description' => '自定义事件目标Id。',
                                'type' => 'string',
                                'example' => 'Mlm123456JHd2Rs****',
                              ),
                              'PushSelector' => 
                              array (
                                'description' => '发布选择器',
                                'type' => 'string',
                                'example' => 'PARAM_TRANSFORMER',
                              ),
                              'ErrorsTolerance' => 
                              array (
                                'description' => '容错策略。取值说明如下： ALL：允许容错。允许异常容错，当异常发生时不会阻塞执行，超过重试策略后会根据配置将消息投递至死信队列或直接丢弃。 NONE：禁止容错。不允许容错，当异常发生并超过重试策略配置时会阻塞执行。',
                                'type' => 'string',
                                'example' => 'ALL',
                              ),
                            ),
                          ),
                        ),
                        'FilterPattern' => 
                        array (
                          'description' => '事件模式，JSON格式。取值说明如下：

- stringEqual模式：每个field最多5个expression（map结构）。


- stringExpression模式：每个field最多5个expression（map结构）。',
                          'type' => 'string',
                          'example' => '{\\"source\\":[\\"acs.oss\\"],\\"type\\":[\\"oss:BucketQueried:GetBucketStat\\"]}
',
                        ),
                        'CreatedTimestamp' => 
                        array (
                          'description' => '创建时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1607071602000',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '事件规则的名称',
                          'type' => 'string',
                          'example' => 'tf-testacc-rule',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Specified parameter Limit is not valid.\\",\\n  \\"RequestId\\": \\"C7043799-F4DA-5290-9249-97C35987****\\",\\n  \\"Data\\": {\\n    \\"NextToken\\": \\"1000\\",\\n    \\"Total\\": 6,\\n    \\"Rules\\": [\\n      {\\n        \\"DetailMap\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        },\\n        \\"Status\\": \\"ENABLE\\",\\n        \\"EventBusName\\": \\"demo\\",\\n        \\"RuleARN\\": \\"acs:eventbridge:cn-hangzhou:123456789098****:eventbus/default/rule/myRule3\\",\\n        \\"Description\\": \\"demo\\",\\n        \\"Targets\\": [\\n          {\\n            \\"Type\\": \\"acs.mns.queue\\\\n\\",\\n            \\"Endpoint\\": \\"acs:mns:cn-hangzhou:123456789098****:queues/myqueue\\",\\n            \\"Id\\": \\"Mlm123456JHd2Rs****\\",\\n            \\"PushSelector\\": \\"PARAM_TRANSFORMER\\",\\n            \\"ErrorsTolerance\\": \\"ALL\\"\\n          }\\n        ],\\n        \\"FilterPattern\\": \\"{\\\\\\\\\\\\\\"source\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"acs.oss\\\\\\\\\\\\\\"],\\\\\\\\\\\\\\"type\\\\\\\\\\\\\\":[\\\\\\\\\\\\\\"oss:BucketQueried:GetBucketStat\\\\\\\\\\\\\\"]}\\\\n\\",\\n        \\"CreatedTimestamp\\": 1607071602000,\\n        \\"RuleName\\": \\"tf-testacc-rule\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询一个事件总线的所有规则',
      'summary' => '查询一个事件总线的所有规则。',
      'description' => '查询一个事件总线的所有规则。',
    ),
    'ListEventStreamings' => 
    array (
      'summary' => '查询事件流。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '164761',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
          1 => 'FEATUREeventbridge70XW1X',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NamePrefix',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '名称。',
            'example' => 'name',
            'required' => false,
            'title' => '名称',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和NextToken搭配使用实现翻页能力。
><notice>每次返回的最大条数不超过100。></notice>',
            'example' => '10',
            'format' => 'int32',
            'required' => false,
            'type' => 'integer',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当指定Limit时，如果还有多余的返回值则会返回NextToken。',
            'example' => '10',
            'required' => false,
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'SourceArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件源Arn。',
            'example' => 'acs:alikafka:cn-hangzhou:118609547428****:instance/alikafka_pre-cn-zxu36kvi****/topic/test-topic',
            'required' => false,
            'type' => 'string',
          ),
        ),
        4 => 
        array (
          'name' => 'SinkArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件目标Arn。',
            'example' => 'acs:fc:cn-hangzhou:118609547428****:services/fw1.LATEST/functions/log1',
            'required' => false,
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'example' => 'The event streaming [xxxx] not existed!
',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'example' => '283FF852-C4B8-58C9-9777-F88A5A16****',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'description' => '事件流列表。',
                'properties' => 
                array (
                  'EventStreamings' => 
                  array (
                    'description' => '事件流列表。',
                    'items' => 
                    array (
                      'description' => '事件流实体。',
                      'properties' => 
                      array (
                        'EventStreamingName' => 
                        array (
                          'description' => '事件流名称。',
                          'example' => 'name',
                          'type' => 'string',
                        ),
                        'Description' => 
                        array (
                          'description' => '事件流描述信息。',
                          'example' => 'demo',
                          'type' => 'string',
                        ),
                        'Source' => 
                        array (
                          'description' => '事件提供方。',
                          'properties' => 
                          array (
                            'SourceMNSParameters' => 
                            array (
                              'description' => 'Source MNS Parameters',
                              'properties' => 
                              array (
                                'RegionId' => 
                                array (
                                  'description' => '地域ID。',
                                  'example' => 'cn-zhangjiakou',
                                  'type' => 'string',
                                ),
                                'QueueName' => 
                                array (
                                  'description' => '消息服务MNS的Queue的名称。',
                                  'example' => 'work4',
                                  'type' => 'string',
                                ),
                                'IsBase64Decode' => 
                                array (
                                  'description' => '是否开启Base64编码。',
                                  'example' => 'true',
                                  'type' => 'boolean',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceRabbitMQParameters' => 
                            array (
                              'description' => 'Source RabbitMQ Parameters',
                              'properties' => 
                              array (
                                'RegionId' => 
                                array (
                                  'description' => '地域ID。',
                                  'example' => 'cn-zhangjiakou',
                                  'type' => 'string',
                                ),
                                'InstanceId' => 
                                array (
                                  'description' => '消息队列RabbitMQ版的实例的ID。',
                                  'example' => 'dbaudit-cn-7mz2hqo****',
                                  'type' => 'string',
                                ),
                                'VirtualHostName' => 
                                array (
                                  'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                                  'example' => 'eb-connect
',
                                  'type' => 'string',
                                ),
                                'QueueName' => 
                                array (
                                  'description' => '消息队列RabbitMQ版实例的Queue的名称。',
                                  'example' => 'liuyang',
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceRocketMQParameters' => 
                            array (
                              'description' => 'Source RocketMQ Parameters',
                              'properties' => 
                              array (
                                'RegionId' => 
                                array (
                                  'description' => '消息队列RocketMQ版的地域ID。',
                                  'example' => 'cn-chengdu',
                                  'type' => 'string',
                                ),
                                'InstanceId' => 
                                array (
                                  'description' => '消息队列RocketMQ版的实例id。',
                                  'example' => 'i-f8zbher64dlm58pl****
',
                                  'type' => 'string',
                                ),
                                'Topic' => 
                                array (
                                  'description' => '消息的Topic。',
                                  'example' => 'topic_add_anima',
                                  'type' => 'string',
                                ),
                                'Tag' => 
                                array (
                                  'description' => '消息的过滤标签',
                                  'example' => 'v1',
                                  'type' => 'string',
                                ),
                                'Offset' => 
                                array (
                                  'description' => '消息的消费位点。取值说明如下：
CONSUMEFROMLASTOFFSET：从最新位点开始消费。
CONSUMEFROMFIRSTOFFSET：从最早位点开始消费。
CONSUMEFROMTIMESTAMP：从指定时间点的位点开始消费。',
                                  'example' => 'CONSUMEFROMTIMESTAMP',
                                  'type' => 'string',
                                ),
                                'GroupID' => 
                                array (
                                  'description' => '消息队列RocketMQ版的Group ID。',
                                  'example' => 'GID_group1',
                                  'type' => 'string',
                                ),
                                'Timestamp' => 
                                array (
                                  'description' => '时间戳。仅当参数Offset取值为CONSUMEFROMTIMESTAMP时，该参数有效。',
                                  'example' => '1670742074043',
                                  'format' => 'int64',
                                  'type' => 'integer',
                                ),
                                'InstanceType' => 
                                array (
                                  'description' => '实例类型。',
                                  'example' => '2',
                                  'type' => 'string',
                                ),
                                'InstanceEndpoint' => 
                                array (
                                  'description' => '实例接入点。',
                                  'example' => 'registry-vpc.cn-hangzhou.aliyuncs.com',
                                  'type' => 'string',
                                ),
                                'AuthType' => 
                                array (
                                  'description' => '鉴权类型。',
                                  'example' => 'ACL',
                                  'type' => 'string',
                                ),
                                'InstanceUsername' => 
                                array (
                                  'description' => '实例用户名。',
                                  'example' => 'admin**',
                                  'type' => 'string',
                                ),
                                'InstancePassword' => 
                                array (
                                  'description' => '实例密码。',
                                  'example' => '123',
                                  'type' => 'string',
                                ),
                                'InstanceVpcId' => 
                                array (
                                  'description' => '专有网络VPC的ID。',
                                  'example' => 'vpc-bp1a4gmlk31hy***l3ss',
                                  'type' => 'string',
                                ),
                                'InstanceVSwitchIds' => 
                                array (
                                  'description' => '实例交换机信息。',
                                  'example' => 'vsw-m5ev8asdc6h123456****
',
                                  'type' => 'string',
                                ),
                                'InstanceSecurityGroupId' => 
                                array (
                                  'description' => '实例安全组信息',
                                  'example' => 'sg-m5edtu24f12345****
',
                                  'type' => 'string',
                                ),
                                'InstanceNetwork' => 
                                array (
                                  'description' => '实例网络信息：
- PublicNetwork
- PrivateNetwork',
                                  'example' => 'PublicNetwork',
                                  'type' => 'string',
                                ),
                                'BodyDataType' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Network' => 
                                array (
                                  'type' => 'string',
                                ),
                                'FilterType' => 
                                array (
                                  'type' => 'string',
                                ),
                                'FilterSql' => 
                                array (
                                  'type' => 'string',
                                ),
                                'VpcId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'VSwitchIds' => 
                                array (
                                  'type' => 'string',
                                ),
                                'SecurityGroupId' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceKafkaParameters' => 
                            array (
                              'description' => 'Source Kafka Parameters',
                              'properties' => 
                              array (
                                'RegionId' => 
                                array (
                                  'description' => '实例所在地域id。',
                                  'example' => 'cn-chengdu',
                                  'type' => 'string',
                                ),
                                'InstanceId' => 
                                array (
                                  'description' => '实例id。',
                                  'example' => 'bastionhost-cn-i7m2gwt****',
                                  'type' => 'string',
                                ),
                                'Topic' => 
                                array (
                                  'description' => 'Topic名称。',
                                  'example' => 'topic_empower_1642473600414
',
                                  'type' => 'string',
                                ),
                                'ConsumerGroup' => 
                                array (
                                  'description' => '订阅该Topic的消费者所对应的Group ID。',
                                  'example' => 'GID_TEST',
                                  'type' => 'string',
                                ),
                                'OffsetReset' => 
                                array (
                                  'description' => '偏移量。',
                                  'example' => 'latest',
                                  'type' => 'string',
                                ),
                                'Network' => 
                                array (
                                  'description' => '网络配置 ：默认值Default，vpc网络是PublicNetwork。',
                                  'example' => 'Default',
                                  'type' => 'string',
                                ),
                                'VpcId' => 
                                array (
                                  'description' => '用户的VPC ID。',
                                  'example' => 'vpc-wz9ki1qdlx3cx5cbf****',
                                  'type' => 'string',
                                ),
                                'VSwitchIds' => 
                                array (
                                  'description' => '交换机ID。',
                                  'example' => 'vsw-bp1rmi8rind7eo50c****',
                                  'type' => 'string',
                                ),
                                'SecurityGroupId' => 
                                array (
                                  'description' => '安全组ID。',
                                  'example' => 'sg-5ud5f3p0rqqis69****eho7cp',
                                  'type' => 'string',
                                ),
                                'ValueDataType' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceMQTTParameters' => 
                            array (
                              'description' => 'Source MQTT源',
                              'properties' => 
                              array (
                                'RegionId' => 
                                array (
                                  'description' => '地域ID。',
                                  'example' => 'cn-qingdao',
                                  'type' => 'string',
                                ),
                                'InstanceId' => 
                                array (
                                  'description' => '实例id。',
                                  'example' => 'bastionhost-cn-zvp27kc****',
                                  'type' => 'string',
                                ),
                                'Topic' => 
                                array (
                                  'description' => 'Topic名称。',
                                  'example' => 'migration_instance',
                                  'type' => 'string',
                                ),
                                'BodyDataType' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceDTSParameters' => 
                            array (
                              'description' => 'Source DTS源',
                              'properties' => 
                              array (
                                'TaskId' => 
                                array (
                                  'description' => '任务id。',
                                  'example' => '1611b337285f44e2936a2c4170****',
                                  'type' => 'string',
                                ),
                                'BrokerUrl' => 
                                array (
                                  'description' => '数据订阅通道的网络地址及端口号信息。',
                                  'example' => '无',
                                  'type' => 'string',
                                ),
                                'Topic' => 
                                array (
                                  'description' => '数据订阅通道的订阅Topic。',
                                  'example' => 'TP_TEST_UNDERWRITE_ISSUE
',
                                  'type' => 'string',
                                ),
                                'Sid' => 
                                array (
                                  'description' => '消费组ID。',
                                  'example' => 'HG9',
                                  'type' => 'string',
                                ),
                                'Username' => 
                                array (
                                  'description' => '消费组的账号。',
                                  'example' => 'admin',
                                  'type' => 'string',
                                ),
                                'Password' => 
                                array (
                                  'description' => '消费组的账号密码。',
                                  'example' => '123456',
                                  'type' => 'string',
                                ),
                                'InitCheckPoint' => 
                                array (
                                  'description' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳。',
                                  'example' => '1620962769',
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceSLSParameters' => 
                            array (
                              'description' => 'Source SLS源',
                              'properties' => 
                              array (
                                'Project' => 
                                array (
                                  'description' => '日志服务SLS的日志项目。',
                                  'example' => 'dmmzk',
                                  'type' => 'string',
                                ),
                                'LogStore' => 
                                array (
                                  'description' => '日志服务SLS的日志库。',
                                  'example' => 'waf-logstore
',
                                  'type' => 'string',
                                ),
                                'ConsumerGroup' => 
                                array (
                                  'description' => '订阅该Topic的消费者所对应的Group ID。',
                                  'example' => 'go-dts-shelf-group',
                                  'type' => 'string',
                                ),
                                'ConsumePosition' => 
                                array (
                                  'description' => '起始消费位点，可以选择最早或最新位点，分别对应“begin”，“end”，也可以从指定时间开始消费，以秒为单位。',
                                  'example' => 'begin',
                                  'type' => 'string',
                                ),
                                'RoleName' => 
                                array (
                                  'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                                  'example' => 'testRole',
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourcePrometheusParameters' => 
                            array (
                              'properties' => 
                              array (
                                'RegionId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ClusterId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'DataType' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Labels' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceCustomizedKafkaParameters' => 
                            array (
                              'properties' => 
                              array (
                                'InstanceId' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceCustomizedKafkaConnectorParameters' => 
                            array (
                              'properties' => 
                              array (
                                'ConnectorPackageUrl' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ConnectorParameters' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Name' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Config' => 
                                    array (
                                      'type' => 'object',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'WorkerParameters' => 
                                array (
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SourceApacheKafkaParameters' => 
                            array (
                              'properties' => 
                              array (
                                'Bootstraps' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Topic' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ConsumerGroup' => 
                                array (
                                  'type' => 'string',
                                ),
                                'OffsetReset' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ValueDataType' => 
                                array (
                                  'type' => 'string',
                                ),
                                'VpcId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'VSwitchIds' => 
                                array (
                                  'type' => 'string',
                                ),
                                'SecurityGroupId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'NetworkType' => 
                                array (
                                  'type' => 'string',
                                ),
                                'SecurityProtocol' => 
                                array (
                                  'type' => 'string',
                                ),
                                'SaslMechanism' => 
                                array (
                                  'type' => 'string',
                                ),
                                'SaslUser' => 
                                array (
                                  'type' => 'string',
                                ),
                                'SaslPassword' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                          ),
                          'type' => 'object',
                        ),
                        'FilterPattern' => 
                        array (
                          'description' => '事件过滤规则，如果不指定表示匹配全部事件。',
                          'example' => '无',
                          'type' => 'string',
                        ),
                        'Transforms' => 
                        array (
                          'description' => 'Transform 相关配置',
                          'items' => 
                          array (
                            'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
                            'properties' => 
                            array (
                              'Arn' => 
                              array (
                                'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
                                'example' => 'acs:fc:cn-hangzhou:*****:services/demo-service.LATEST/functions/demo-func
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'type' => 'array',
                        ),
                        'Sink' => 
                        array (
                          'description' => '事件目标。',
                          'properties' => 
                          array (
                            'SinkMNSParameters' => 
                            array (
                              'description' => 'MNS事件目标。',
                              'properties' => 
                              array (
                                'QueueName' => 
                                array (
                                  'description' => '目标服务类型为消息服务MNS。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息服务MNS的Queue的名称。',
                                      'example' => 'MyQueue',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Body' => 
                                array (
                                  'description' => '消息内容。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'IsBase64Encode' => 
                                array (
                                  'description' => '是否开启Base64编码。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '开启Base64编码。',
                                      'example' => 'true',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkFcParameters' => 
                            array (
                              'description' => '函数目标。',
                              'properties' => 
                              array (
                                'ServiceName' => 
                                array (
                                  'description' => '服务的名称。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '服务的名称。',
                                      'example' => 'myService',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'FunctionName' => 
                                array (
                                  'description' => '函数名称。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '函数名称。',
                                      'example' => 'mFunction',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Concurrency' => 
                                array (
                                  'description' => '投递并发度，最小为1。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '投递并发度，最小为1。',
                                      'example' => '1',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Qualifier' => 
                                array (
                                  'description' => '函数所属服务的别名。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '函数所属服务的别名。',
                                      'example' => 'LATEST',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'InvocationType' => 
                                array (
                                  'description' => '同步或则异步。
- Sync：同步。
- Async：异步。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '同步或则异步。
- Sync：同步。
- Async：异步。',
                                      'example' => 'Async',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Body' => 
                                array (
                                  'description' => '发送给函数的内容体。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'title' => '函数目标',
                              'type' => 'object',
                            ),
                            'SinkRabbitMQParameters' => 
                            array (
                              'description' => 'Sink Rabbitmq的参数。',
                              'properties' => 
                              array (
                                'InstanceId' => 
                                array (
                                  'description' => '目标服务类型为消息队列RabbitMQ版。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息队列RabbitMQ版的实例ID。',
                                      'example' => 'si-296cd57939a1421b****',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'VirtualHostName' => 
                                array (
                                  'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                                      'example' => 'rabbit-host
',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'TargetType' => 
                                array (
                                  'description' => '目标类型。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '目标类型。取值说明如下：
Exchange：Exchange模式。
Queue：Queue模式。',
                                      'example' => 'Queue',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Exchange' => 
                                array (
                                  'description' => 'Exchange模式。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息队列RabbitMQ版实例的Exchange的名称。',
                                      'example' => 'a_exchange',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'RoutingKey' => 
                                array (
                                  'description' => '消息的路由规则。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息的路由规则。',
                                      'example' => 'housekeeping',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'QueueName' => 
                                array (
                                  'description' => 'Queue模式。
仅当参数TargetType配置为Queue时，需配置此参数。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '实例的Queue的名称。',
                                      'example' => 'MyQueue',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Body' => 
                                array (
                                  'description' => '消息内容。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'MessageId' => 
                                array (
                                  'description' => '消息ID。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Properties' => 
                                array (
                                  'description' => '过滤属性。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkKafkaParameters' => 
                            array (
                              'description' => 'Sink kafka参数。',
                              'properties' => 
                              array (
                                'InstanceId' => 
                                array (
                                  'description' => '目标服务类型为消息队列Kafka版。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '实例ID。',
                                      'example' => 'Defaut_1283278472_sad****',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Topic' => 
                                array (
                                  'description' => '主题名称。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '主题名称。',
                                      'example' => 'topic',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Acks' => 
                                array (
                                  'description' => '写入Kafka确认模式：
- acks=0：无需服务端的Response、性能较高、丢数据风险较大。
- acks=1：服务端主节点写成功即返回Response、性能中等、丢数据风险中等、主节点宕机可能导致数据丢失；
- acks=all：服务端主节点写成功且备节点同步成功才返回Response、性能较差、数据较为安全、主节点和备节点都宕机才会导致数据丢失。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '写入Kafka确认模式：
- acks=0：无需服务端的Response、性能较高、丢数据风险较大。
- acks=1：服务端主节点写成功即返回Response、性能中等、丢数据风险中等、主节点宕机可能导致数据丢失；
- acks=all：服务端主节点写成功且备节点同步成功才返回Response、性能较差、数据较为安全、主节点和备节点都宕机才会导致数据丢失。',
                                      'example' => '1',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Key' => 
                                array (
                                  'description' => '消息的标识。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息的标识。',
                                      'example' => 'key',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Value' => 
                                array (
                                  'description' => '消息体内容。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkRocketMQParameters' => 
                            array (
                              'description' => 'Sink RocketMQ Parameters',
                              'properties' => 
                              array (
                                'InstanceId' => 
                                array (
                                  'description' => '目标服务类型为消息队列RocketMQ版。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息队列RocketMQ版的实例ID。',
                                      'example' => 'MQ_INST_164901546557****_BAAN****
',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Topic' => 
                                array (
                                  'description' => '消息队列RocketMQ版实例的Topic。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '消息队列RocketMQ版实例的Topic。',
                                      'example' => 'topic',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Body' => 
                                array (
                                  'description' => '消息内容。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Properties' => 
                                array (
                                  'description' => '过滤属性。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Keys' => 
                                array (
                                  'description' => '过滤属性。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Tags' => 
                                array (
                                  'description' => '过滤属性。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkSLSParameters' => 
                            array (
                              'description' => 'Sink SLS Parameters',
                              'properties' => 
                              array (
                                'Project' => 
                                array (
                                  'description' => '日志服务SLS的日志项目。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '日志服务SLS的日志项目。',
                                      'example' => 'test-project
',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'LogStore' => 
                                array (
                                  'description' => '日志服务SLS的日志库。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '日志服务SLS的日志库。',
                                      'example' => 'test-logstore
',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Topic' => 
                                array (
                                  'description' => '日志所在的topic，对应SLS 保留字段“topic”。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '日志所在的topic，对应SLS 保留字段“topic”。',
                                      'example' => 'topic',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Body' => 
                                array (
                                  'description' => '发送给SLS的内容。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '转换前的值。',
                                      'example' => '{
      "key": "value"
}',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。',
                                      'example' => 'TEMPLATE',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => 'The value of ${key} is ${value}!
',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'RoleName' => 
                                array (
                                  'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                                      'example' => 'test-role',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '无',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'ContentType' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'ContentSchema' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkFnfParameters' => 
                            array (
                              'description' => 'Sink Fnf 参数',
                              'properties' => 
                              array (
                                'FlowName' => 
                                array (
                                  'description' => '流程名称',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '流程名称',
                                      'example' => 'test-streaming-fnf
',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'ExecutionName' => 
                                array (
                                  'description' => '执行名称',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '执行名称',
                                      'example' => '123',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Input' => 
                                array (
                                  'description' => '执行输入信息',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '执行输入信息',
                                      'example' => '123',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'RoleName' => 
                                array (
                                  'description' => '角色配置',
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'description' => '角色配置',
                                      'example' => 'Al****FNF-x****
',
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'description' => '转换的格式。默认为CONSTANT。',
                                      'example' => 'CONSTANT',
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'description' => '模板样式。',
                                      'example' => '无',
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkDataHubParameters' => 
                            array (
                              'properties' => 
                              array (
                                'Project' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Topic' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'TopicType' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'TopicSchema' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'Body' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'RoleName' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Value' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Form' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Template' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkCustomizedKafkaParameters' => 
                            array (
                              'properties' => 
                              array (
                                'InstanceId' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'SinkCustomizedKafkaConnectorParameters' => 
                            array (
                              'properties' => 
                              array (
                                'ConnectorPackageUrl' => 
                                array (
                                  'type' => 'string',
                                ),
                                'ConnectorParameters' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Name' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Config' => 
                                    array (
                                      'type' => 'object',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                                'WorkerParameters' => 
                                array (
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                          ),
                          'type' => 'object',
                        ),
                        'RunOptions' => 
                        array (
                          'description' => '运行环境参数。',
                          'properties' => 
                          array (
                            'MaximumTasks' => 
                            array (
                              'description' => '并发数。',
                              'example' => '2',
                              'format' => 'int32',
                              'type' => 'integer',
                            ),
                            'RetryStrategy' => 
                            array (
                              'description' => '事件推送失败时的重试策略。',
                              'properties' => 
                              array (
                                'PushRetryStrategy' => 
                                array (
                                  'description' => '重试策略：BACKOFF_RETRY（退避重试）和EXPONENTIAL_DECAY_RETRY（指数衰减重试）。',
                                  'example' => 'EXPONENTIAL_DECAY_RETRY',
                                  'type' => 'string',
                                ),
                                'MaximumEventAgeInSeconds' => 
                                array (
                                  'description' => '最大重试时间。',
                                  'example' => '512',
                                  'format' => 'float',
                                  'type' => 'number',
                                ),
                                'MaximumRetryAttempts' => 
                                array (
                                  'description' => '最大重试次数。',
                                  'example' => '2',
                                  'format' => 'float',
                                  'type' => 'number',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'ErrorsTolerance' => 
                            array (
                              'description' => '异常容忍策略：NONE（不容忍异常）、ALL（容忍所有异常）。',
                              'example' => 'ALL',
                              'type' => 'string',
                            ),
                            'DeadLetterQueue' => 
                            array (
                              'description' => '是否启用死信队列。默认不启用死信队列，超过重试策略后的消息将被丢弃。',
                              'properties' => 
                              array (
                                'Arn' => 
                                array (
                                  'description' => '死信队列ARN。',
                                  'example' => 'acs:ram::159787121179****:role/aliyunsaedefaultrole',
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'BatchWindow' => 
                            array (
                              'description' => '攒批窗口。',
                              'properties' => 
                              array (
                                'CountBasedWindow' => 
                                array (
                                  'description' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                                  'example' => '100',
                                  'format' => 'int32',
                                  'type' => 'integer',
                                ),
                                'TimeBasedWindow' => 
                                array (
                                  'description' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                                  'example' => '10',
                                  'format' => 'int32',
                                  'type' => 'integer',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'LogDelivery' => 
                            array (
                              'properties' => 
                              array (
                                'SLSLogParameters' => 
                                array (
                                  'items' => 
                                  array (
                                    'properties' => 
                                    array (
                                      'ProjectName' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'LogstoreName' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                    ),
                                    'type' => 'object',
                                  ),
                                  'type' => 'array',
                                ),
                                'KafkaLogParameters' => 
                                array (
                                  'items' => 
                                  array (
                                    'properties' => 
                                    array (
                                      'Endpoint' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'InstanceId' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'Topic' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                    ),
                                    'type' => 'object',
                                  ),
                                  'type' => 'array',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'ScaledObject' => 
                            array (
                              'properties' => 
                              array (
                                'MinReplicaCount' => 
                                array (
                                  'format' => 'int32',
                                  'type' => 'integer',
                                ),
                                'MaxReplicaCount' => 
                                array (
                                  'format' => 'int32',
                                  'type' => 'integer',
                                ),
                                'Triggers' => 
                                array (
                                  'items' => 
                                  array (
                                    'properties' => 
                                    array (
                                      'Type' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'Metadata' => 
                                      array (
                                        'properties' => 
                                        array (
                                          'Type' => 
                                          array (
                                            'type' => 'string',
                                          ),
                                          'Value' => 
                                          array (
                                            'format' => 'int32',
                                            'type' => 'integer',
                                          ),
                                        ),
                                        'type' => 'object',
                                      ),
                                    ),
                                    'type' => 'object',
                                  ),
                                  'type' => 'array',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'RoleName' => 
                            array (
                              'type' => 'string',
                            ),
                            'Network' => 
                            array (
                              'properties' => 
                              array (
                                'VpcId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'VSwitchIds' => 
                                array (
                                  'items' => 
                                  array (
                                    'type' => 'string',
                                  ),
                                  'type' => 'array',
                                ),
                                'SecurityGroupId' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'ResourceSpec' => 
                            array (
                              'properties' => 
                              array (
                                'Resources' => 
                                array (
                                  'items' => 
                                  array (
                                    'properties' => 
                                    array (
                                      'Type' => 
                                      array (
                                        'type' => 'string',
                                      ),
                                      'Value' => 
                                      array (
                                        'format' => 'int32',
                                        'type' => 'integer',
                                      ),
                                    ),
                                    'type' => 'object',
                                  ),
                                  'type' => 'array',
                                ),
                              ),
                              'type' => 'object',
                            ),
                          ),
                          'type' => 'object',
                        ),
                        'Status' => 
                        array (
                          'description' => '获取到的事件流的状态。',
                          'example' => 'RUNNING',
                          'type' => 'string',
                        ),
                      ),
                      'type' => 'object',
                    ),
                    'type' => 'array',
                  ),
                  'NextToken' => 
                  array (
                    'description' => '用来表示当前调用返回读取到的位置，空代表数据已经读取完毕。下次调用时，需要将此设置到入参NextToken中。',
                    'example' => '177',
                    'type' => 'string',
                  ),
                  'Total' => 
                  array (
                    'description' => '总共记录数。',
                    'example' => '10',
                    'format' => 'int32',
                    'type' => 'integer',
                  ),
                ),
                'type' => 'object',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

Success：表示成功。    

其它：表示错误码。错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event streaming [xxxx] not existed!\\\\n\\",\\n  \\"RequestId\\": \\"283FF852-C4B8-58C9-9777-F88A5A16****\\",\\n  \\"Data\\": {\\n    \\"EventStreamings\\": [\\n      {\\n        \\"EventStreamingName\\": \\"name\\",\\n        \\"Description\\": \\"demo\\",\\n        \\"Source\\": {\\n          \\"SourceMNSParameters\\": {\\n            \\"RegionId\\": \\"cn-zhangjiakou\\",\\n            \\"QueueName\\": \\"work4\\",\\n            \\"IsBase64Decode\\": true\\n          },\\n          \\"SourceRabbitMQParameters\\": {\\n            \\"RegionId\\": \\"cn-zhangjiakou\\",\\n            \\"InstanceId\\": \\"dbaudit-cn-7mz2hqo****\\",\\n            \\"VirtualHostName\\": \\"eb-connect\\\\n\\",\\n            \\"QueueName\\": \\"liuyang\\"\\n          },\\n          \\"SourceRocketMQParameters\\": {\\n            \\"RegionId\\": \\"cn-chengdu\\",\\n            \\"InstanceId\\": \\"i-f8zbher64dlm58pl****\\\\n\\",\\n            \\"Topic\\": \\"topic_add_anima\\",\\n            \\"Tag\\": \\"v1\\",\\n            \\"Offset\\": \\"CONSUMEFROMTIMESTAMP\\",\\n            \\"GroupID\\": \\"GID_group1\\",\\n            \\"Timestamp\\": 1670742074043,\\n            \\"InstanceType\\": \\"2\\",\\n            \\"InstanceEndpoint\\": \\"registry-vpc.cn-hangzhou.aliyuncs.com\\",\\n            \\"AuthType\\": \\"ACL\\",\\n            \\"InstanceUsername\\": \\"admin**\\",\\n            \\"InstancePassword\\": \\"123\\",\\n            \\"InstanceVpcId\\": \\"vpc-bp1a4gmlk31hy***l3ss\\",\\n            \\"InstanceVSwitchIds\\": \\"vsw-m5ev8asdc6h123456****\\\\n\\",\\n            \\"InstanceSecurityGroupId\\": \\"sg-m5edtu24f12345****\\\\n\\",\\n            \\"InstanceNetwork\\": \\"PublicNetwork\\",\\n            \\"BodyDataType\\": \\"\\",\\n            \\"Network\\": \\"\\",\\n            \\"FilterType\\": \\"\\",\\n            \\"FilterSql\\": \\"\\",\\n            \\"VpcId\\": \\"\\",\\n            \\"VSwitchIds\\": \\"\\",\\n            \\"SecurityGroupId\\": \\"\\"\\n          },\\n          \\"SourceKafkaParameters\\": {\\n            \\"RegionId\\": \\"cn-chengdu\\",\\n            \\"InstanceId\\": \\"bastionhost-cn-i7m2gwt****\\",\\n            \\"Topic\\": \\"topic_empower_1642473600414\\\\n\\",\\n            \\"ConsumerGroup\\": \\"GID_TEST\\",\\n            \\"OffsetReset\\": \\"latest\\",\\n            \\"Network\\": \\"Default\\",\\n            \\"VpcId\\": \\"vpc-wz9ki1qdlx3cx5cbf****\\",\\n            \\"VSwitchIds\\": \\"vsw-bp1rmi8rind7eo50c****\\",\\n            \\"SecurityGroupId\\": \\"sg-5ud5f3p0rqqis69****eho7cp\\",\\n            \\"ValueDataType\\": \\"\\"\\n          },\\n          \\"SourceMQTTParameters\\": {\\n            \\"RegionId\\": \\"cn-qingdao\\",\\n            \\"InstanceId\\": \\"bastionhost-cn-zvp27kc****\\",\\n            \\"Topic\\": \\"migration_instance\\",\\n            \\"BodyDataType\\": \\"\\"\\n          },\\n          \\"SourceDTSParameters\\": {\\n            \\"TaskId\\": \\"1611b337285f44e2936a2c4170****\\",\\n            \\"BrokerUrl\\": \\"无\\",\\n            \\"Topic\\": \\"TP_TEST_UNDERWRITE_ISSUE\\\\n\\",\\n            \\"Sid\\": \\"HG9\\",\\n            \\"Username\\": \\"admin\\",\\n            \\"Password\\": \\"123456\\",\\n            \\"InitCheckPoint\\": \\"1620962769\\"\\n          },\\n          \\"SourceSLSParameters\\": {\\n            \\"Project\\": \\"dmmzk\\",\\n            \\"LogStore\\": \\"waf-logstore\\\\n\\",\\n            \\"ConsumerGroup\\": \\"go-dts-shelf-group\\",\\n            \\"ConsumePosition\\": \\"begin\\",\\n            \\"RoleName\\": \\"testRole\\"\\n          },\\n          \\"SourcePrometheusParameters\\": {\\n            \\"RegionId\\": \\"\\",\\n            \\"ClusterId\\": \\"\\",\\n            \\"DataType\\": \\"\\",\\n            \\"Labels\\": \\"\\"\\n          },\\n          \\"SourceCustomizedKafkaParameters\\": {\\n            \\"InstanceId\\": \\"\\"\\n          },\\n          \\"SourceCustomizedKafkaConnectorParameters\\": {\\n            \\"ConnectorPackageUrl\\": \\"\\",\\n            \\"ConnectorParameters\\": {\\n              \\"Name\\": \\"\\",\\n              \\"Config\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            },\\n            \\"WorkerParameters\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          },\\n          \\"SourceApacheKafkaParameters\\": {\\n            \\"Bootstraps\\": \\"\\",\\n            \\"Topic\\": \\"\\",\\n            \\"ConsumerGroup\\": \\"\\",\\n            \\"OffsetReset\\": \\"\\",\\n            \\"ValueDataType\\": \\"\\",\\n            \\"VpcId\\": \\"\\",\\n            \\"VSwitchIds\\": \\"\\",\\n            \\"SecurityGroupId\\": \\"\\",\\n            \\"NetworkType\\": \\"\\",\\n            \\"SecurityProtocol\\": \\"\\",\\n            \\"SaslMechanism\\": \\"\\",\\n            \\"SaslUser\\": \\"\\",\\n            \\"SaslPassword\\": \\"\\"\\n          }\\n        },\\n        \\"FilterPattern\\": \\"无\\",\\n        \\"Transforms\\": [\\n          {\\n            \\"Arn\\": \\"acs:fc:cn-hangzhou:*****:services/demo-service.LATEST/functions/demo-func\\\\n\\"\\n          }\\n        ],\\n        \\"Sink\\": {\\n          \\"SinkMNSParameters\\": {\\n            \\"QueueName\\": {\\n              \\"Value\\": \\"MyQueue\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Body\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"IsBase64Encode\\": {\\n              \\"Value\\": \\"true\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            }\\n          },\\n          \\"SinkFcParameters\\": {\\n            \\"ServiceName\\": {\\n              \\"Value\\": \\"myService\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"FunctionName\\": {\\n              \\"Value\\": \\"mFunction\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Concurrency\\": {\\n              \\"Value\\": \\"1\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Qualifier\\": {\\n              \\"Value\\": \\"LATEST\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"InvocationType\\": {\\n              \\"Value\\": \\"Async\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Body\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            }\\n          },\\n          \\"SinkRabbitMQParameters\\": {\\n            \\"InstanceId\\": {\\n              \\"Value\\": \\"si-296cd57939a1421b****\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"VirtualHostName\\": {\\n              \\"Value\\": \\"rabbit-host\\\\n\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"TargetType\\": {\\n              \\"Value\\": \\"Queue\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Exchange\\": {\\n              \\"Value\\": \\"a_exchange\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"RoutingKey\\": {\\n              \\"Value\\": \\"housekeeping\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"QueueName\\": {\\n              \\"Value\\": \\"MyQueue\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Body\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"MessageId\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"Properties\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            }\\n          },\\n          \\"SinkKafkaParameters\\": {\\n            \\"InstanceId\\": {\\n              \\"Value\\": \\"Defaut_1283278472_sad****\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Topic\\": {\\n              \\"Value\\": \\"topic\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Acks\\": {\\n              \\"Value\\": \\"1\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Key\\": {\\n              \\"Value\\": \\"key\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Value\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            }\\n          },\\n          \\"SinkRocketMQParameters\\": {\\n            \\"InstanceId\\": {\\n              \\"Value\\": \\"MQ_INST_164901546557****_BAAN****\\\\n\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Topic\\": {\\n              \\"Value\\": \\"topic\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Body\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"Properties\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"Keys\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"Tags\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            }\\n          },\\n          \\"SinkSLSParameters\\": {\\n            \\"Project\\": {\\n              \\"Value\\": \\"test-project\\\\n\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"LogStore\\": {\\n              \\"Value\\": \\"test-logstore\\\\n\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Topic\\": {\\n              \\"Value\\": \\"topic\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Body\\": {\\n              \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n              \\"Form\\": \\"TEMPLATE\\",\\n              \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n            },\\n            \\"RoleName\\": {\\n              \\"Value\\": \\"test-role\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"ContentType\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            },\\n            \\"ContentSchema\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            }\\n          },\\n          \\"SinkFnfParameters\\": {\\n            \\"FlowName\\": {\\n              \\"Value\\": \\"test-streaming-fnf\\\\n\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"ExecutionName\\": {\\n              \\"Value\\": \\"123\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"Input\\": {\\n              \\"Value\\": \\"123\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            },\\n            \\"RoleName\\": {\\n              \\"Value\\": \\"Al****FNF-x****\\\\n\\",\\n              \\"Form\\": \\"CONSTANT\\",\\n              \\"Template\\": \\"无\\"\\n            }\\n          },\\n          \\"SinkDataHubParameters\\": {\\n            \\"Project\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            },\\n            \\"Topic\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            },\\n            \\"TopicType\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            },\\n            \\"TopicSchema\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            },\\n            \\"Body\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            },\\n            \\"RoleName\\": {\\n              \\"Value\\": \\"\\",\\n              \\"Form\\": \\"\\",\\n              \\"Template\\": \\"\\"\\n            }\\n          },\\n          \\"SinkCustomizedKafkaParameters\\": {\\n            \\"InstanceId\\": \\"\\"\\n          },\\n          \\"SinkCustomizedKafkaConnectorParameters\\": {\\n            \\"ConnectorPackageUrl\\": \\"\\",\\n            \\"ConnectorParameters\\": {\\n              \\"Name\\": \\"\\",\\n              \\"Config\\": {\\n                \\"test\\": \\"test\\",\\n                \\"test2\\": 1\\n              }\\n            },\\n            \\"WorkerParameters\\": {\\n              \\"test\\": \\"test\\",\\n              \\"test2\\": 1\\n            }\\n          }\\n        },\\n        \\"RunOptions\\": {\\n          \\"MaximumTasks\\": 2,\\n          \\"RetryStrategy\\": {\\n            \\"PushRetryStrategy\\": \\"EXPONENTIAL_DECAY_RETRY\\",\\n            \\"MaximumEventAgeInSeconds\\": 512,\\n            \\"MaximumRetryAttempts\\": 2\\n          },\\n          \\"ErrorsTolerance\\": \\"ALL\\",\\n          \\"DeadLetterQueue\\": {\\n            \\"Arn\\": \\"acs:ram::159787121179****:role/aliyunsaedefaultrole\\"\\n          },\\n          \\"BatchWindow\\": {\\n            \\"CountBasedWindow\\": 100,\\n            \\"TimeBasedWindow\\": 10\\n          },\\n          \\"LogDelivery\\": {\\n            \\"SLSLogParameters\\": [\\n              {\\n                \\"ProjectName\\": \\"\\",\\n                \\"LogstoreName\\": \\"\\"\\n              }\\n            ],\\n            \\"KafkaLogParameters\\": [\\n              {\\n                \\"Endpoint\\": \\"\\",\\n                \\"InstanceId\\": \\"\\",\\n                \\"Topic\\": \\"\\"\\n              }\\n            ]\\n          },\\n          \\"ScaledObject\\": {\\n            \\"MinReplicaCount\\": 0,\\n            \\"MaxReplicaCount\\": 0,\\n            \\"Triggers\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Metadata\\": {\\n                  \\"Type\\": \\"\\",\\n                  \\"Value\\": 0\\n                }\\n              }\\n            ]\\n          },\\n          \\"RoleName\\": \\"\\",\\n          \\"Network\\": {\\n            \\"VpcId\\": \\"\\",\\n            \\"VSwitchIds\\": [\\n              \\"\\"\\n            ],\\n            \\"SecurityGroupId\\": \\"\\"\\n          },\\n          \\"ResourceSpec\\": {\\n            \\"Resources\\": [\\n              {\\n                \\"Type\\": \\"\\",\\n                \\"Value\\": 0\\n              }\\n            ]\\n          }\\n        },\\n        \\"Status\\": \\"RUNNING\\"\\n      }\\n    ],\\n    \\"NextToken\\": \\"177\\",\\n    \\"Total\\": 10\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '查询事件流。',
      'title' => '查询事件流',
    ),
    'DeleteEventStreaming' => 
    array (
      'summary' => '删除一个事件流。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '38621',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventStreamingName',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '名称',
            'description' => '要删除的事件流的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rocketmq-sync',
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
                'example' => 'The event streaming [xxxx] not existed!',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '499A9ACF-70CD-5D43-87F3-1B60529EE446',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：

Success：表示成功。    

其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event streaming [xxxx] not existed!\\",\\n  \\"RequestId\\": \\"499A9ACF-70CD-5D43-87F3-1B60529EE446\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '删除一个事件流',
      'description' => '删除一个事件流。',
    ),
    'PauseEventStreaming' => 
    array (
      'summary' => '停用一个运行中的事件流。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38638',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventStreamingName',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '名称',
            'description' => '要停用的事件流的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rocketmq-sync',
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
                'example' => 'The event streaming [xxxx] not existed!
',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '72ce027c-546a-4231-9cf6-ec58766027f9',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event streaming [xxxx] not existed!\\\\n\\",\\n  \\"RequestId\\": \\"72ce027c-546a-4231-9cf6-ec58766027f9\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '停用一个运行中的事件流',
      'description' => '停用一个运行中的事件流。',
    ),
    'StartEventStreaming' => 
    array (
      'summary' => '启用一个已创建或已停用的事件流。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '38624',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
          1 => 'FEATUREeventbridge70XW1X',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventStreamingName',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'title' => '名称',
            'description' => '要启用的事件流的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'rocketmq-sync',
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
                'example' => 'The event streaming [xxxx] not existed!
',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '8CEAD24D-328D-5539-9D30-FD2D33204FBB',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event streaming [xxxx] not existed!\\\\n\\",\\n  \\"RequestId\\": \\"8CEAD24D-328D-5539-9D30-FD2D33204FBB\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '启用一个已创建或已停用的事件流',
      'description' => '启用一个已创建或已停用的事件流。',
    ),
    'GetEventStreaming' => 
    array (
      'summary' => '获取一个事件流的详细信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '38611',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
          1 => 'FEATUREeventbridge70XW1X',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventStreamingName',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '要获取信息的事件流的名称。',
            'example' => 'myeventstreaming',
            'required' => true,
            'title' => '名称',
            'type' => 'string',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'example' => 'The event streaming [xxxx] not existed!',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'example' => '7892F480-58C9-5067-AB35-8A7BEF****',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'properties' => 
                array (
                  'EventStreamingName' => 
                  array (
                    'description' => '获取到的事件流的名称。',
                    'example' => 'rocketmq-sync',
                    'type' => 'string',
                  ),
                  'Description' => 
                  array (
                    'description' => '获取到的事件流的描述。',
                    'example' => 'RocketMQ-to-RocketMQ',
                    'type' => 'string',
                  ),
                  'Source' => 
                  array (
                    'description' => '事件提供方。',
                    'properties' => 
                    array (
                      'SourceMNSParameters' => 
                      array (
                        'description' => 'Source MNS Parameters',
                        'properties' => 
                        array (
                          'RegionId' => 
                          array (
                            'description' => '地域ID。',
                            'example' => 'cn-hangzhou',
                            'type' => 'string',
                          ),
                          'QueueName' => 
                          array (
                            'description' => '消息服务MNS的Queue的名称。',
                            'example' => 'demo',
                            'type' => 'string',
                          ),
                          'IsBase64Decode' => 
                          array (
                            'description' => '是否开启Base64编码。',
                            'example' => 'true',
                            'type' => 'boolean',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceRabbitMQParameters' => 
                      array (
                        'description' => 'Source RabbitMQ Parameters',
                        'properties' => 
                        array (
                          'RegionId' => 
                          array (
                            'description' => '地域ID。',
                            'example' => 'cn-hangzhou',
                            'type' => 'string',
                          ),
                          'InstanceId' => 
                          array (
                            'description' => '消息队列RabbitMQ版的实例的ID。',
                            'example' => 'i-f8z9a9mcgwri1c1i****',
                            'type' => 'string',
                          ),
                          'VirtualHostName' => 
                          array (
                            'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                            'example' => 'eb-connect',
                            'type' => 'string',
                          ),
                          'QueueName' => 
                          array (
                            'description' => '消息队列RabbitMQ版实例的Queue的名称。',
                            'example' => 'comp',
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceRocketMQParameters' => 
                      array (
                        'description' => 'Source RocketMQ Parameters',
                        'properties' => 
                        array (
                          'RegionId' => 
                          array (
                            'description' => '消息队列RocketMQ版的地域ID。',
                            'example' => 'cn-hangzhou',
                            'type' => 'string',
                          ),
                          'InstanceId' => 
                          array (
                            'description' => '消息队列RocketMQ版的实例ID。',
                            'example' => 'i-f8zbher64dlm58pl****',
                            'type' => 'string',
                          ),
                          'Topic' => 
                          array (
                            'description' => '消息的Topic。',
                            'example' => 'topic_add_anima',
                            'type' => 'string',
                          ),
                          'Tag' => 
                          array (
                            'description' => '消息的过滤标签',
                            'example' => 'v1',
                            'type' => 'string',
                          ),
                          'Offset' => 
                          array (
                            'description' => '消息的消费位点。取值说明如下：
CONSUME_FROM_LAST_OFFSET：从最新位点开始消费。
CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。
CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。',
                            'example' => 'CONSUMEFROMLASTOFFSET',
                            'type' => 'string',
                          ),
                          'GroupID' => 
                          array (
                            'description' => '消息队列RocketMQ版的Group ID。',
                            'example' => 'GID_group1',
                            'type' => 'string',
                          ),
                          'Timestamp' => 
                          array (
                            'description' => '时间戳。仅当参数Offset取值为CONSUME_FROM_TIMESTAMP时，该参数有效。',
                            'example' => '1636597951964',
                            'format' => 'int64',
                            'type' => 'integer',
                          ),
                          'InstanceType' => 
                          array (
                            'description' => '实例类型',
                            'example' => '2',
                            'type' => 'string',
                          ),
                          'InstanceEndpoint' => 
                          array (
                            'description' => '实例接入点',
                            'example' => 'reg****-vpc.cn-zhangjiakou.aliyuncs.com
',
                            'type' => 'string',
                          ),
                          'AuthType' => 
                          array (
                            'description' => '鉴权类型。',
                            'example' => 'ACL',
                            'type' => 'string',
                          ),
                          'InstanceUsername' => 
                          array (
                            'description' => '实例用户名。',
                            'example' => 'xxxa',
                            'type' => 'string',
                          ),
                          'InstancePassword' => 
                          array (
                            'description' => '实例密码。',
                            'example' => 'xxxa',
                            'type' => 'string',
                          ),
                          'InstanceVpcId' => 
                          array (
                            'description' => '实例VPC信息。',
                            'example' => 'vpc-m5e3sv4b12345****
',
                            'type' => 'string',
                          ),
                          'InstanceVSwitchIds' => 
                          array (
                            'description' => '实例交换机信息。',
                            'example' => 'vsw-m5ev8asdc6h12****
',
                            'type' => 'string',
                          ),
                          'InstanceSecurityGroupId' => 
                          array (
                            'description' => '实例安全组信息。',
                            'example' => 'sg-m5edtu24f12345****
',
                            'type' => 'string',
                          ),
                          'InstanceNetwork' => 
                          array (
                            'description' => '实例网络信息：

PublicNetwork PrivateNetwork',
                            'example' => 'PublicNetwork',
                            'type' => 'string',
                          ),
                          'BodyDataType' => 
                          array (
                            'type' => 'string',
                          ),
                          'FilterType' => 
                          array (
                            'type' => 'string',
                          ),
                          'FilterSql' => 
                          array (
                            'type' => 'string',
                          ),
                          'VpcId' => 
                          array (
                            'type' => 'string',
                          ),
                          'VSwitchIds' => 
                          array (
                            'type' => 'string',
                          ),
                          'SecurityGroupId' => 
                          array (
                            'type' => 'string',
                          ),
                          'Network' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceKafkaParameters' => 
                      array (
                        'description' => 'Source Kafka Parameters',
                        'properties' => 
                        array (
                          'RegionId' => 
                          array (
                            'description' => '实例所在地域id。',
                            'example' => 'cn-hangzhou',
                            'type' => 'string',
                          ),
                          'InstanceId' => 
                          array (
                            'description' => '实例id。',
                            'example' => 'i-bp1fbtrnqmjvgq66****',
                            'type' => 'string',
                          ),
                          'Topic' => 
                          array (
                            'description' => 'Topic名称。',
                            'example' => 'topic_empower_1642473600414',
                            'type' => 'string',
                          ),
                          'ConsumerGroup' => 
                          array (
                            'description' => '订阅该Topic的消费者所对应的Group ID。',
                            'example' => 'GID_TEST',
                            'type' => 'string',
                          ),
                          'OffsetReset' => 
                          array (
                            'description' => '偏移量',
                            'example' => 'latest',
                            'type' => 'string',
                          ),
                          'Network' => 
                          array (
                            'description' => '网络配置 ：默认值Default，vpc网络是PublicNetwork',
                            'example' => 'Default',
                            'type' => 'string',
                          ),
                          'VpcId' => 
                          array (
                            'description' => 'VPC ID。',
                            'example' => 'vpc-2zehizpoendb3****',
                            'type' => 'string',
                          ),
                          'VSwitchIds' => 
                          array (
                            'description' => '虚拟交换机ID。',
                            'example' => 'vsw-wz9qqeovkwjxlu9uc****',
                            'type' => 'string',
                          ),
                          'SecurityGroupId' => 
                          array (
                            'description' => '安全组ID。',
                            'example' => 'sg-2vcgdxz7o1n9zapp****',
                            'type' => 'string',
                          ),
                          'ValueDataType' => 
                          array (
                            'description' => '编解码参数枚举值，有3个枚举值，命名如下
  a. Json：现有逻辑，bytes按utf8解码成字符串，解析为json
  b. Text：bytes按utf8解码成字符串，直接放入payload
  c. Binary：bytes按base64编码成字符串，放入payload',
                            'example' => 'Text',
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceMQTTParameters' => 
                      array (
                        'description' => 'Source MQTT源',
                        'properties' => 
                        array (
                          'RegionId' => 
                          array (
                            'description' => '地域ID。',
                            'example' => 'cn-shanghai',
                            'type' => 'string',
                          ),
                          'InstanceId' => 
                          array (
                            'description' => '实例id',
                            'example' => 'i-2ze06wqdwk0uq14k****',
                            'type' => 'string',
                          ),
                          'Topic' => 
                          array (
                            'description' => 'Topic 名称',
                            'example' => 'TOPIC-cainiao-pcs-wms-instock-noPrealertPrintLabel',
                            'type' => 'string',
                          ),
                          'BodyDataType' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceDTSParameters' => 
                      array (
                        'description' => 'Source DTS源',
                        'properties' => 
                        array (
                          'TaskId' => 
                          array (
                            'description' => '任务id。',
                            'example' => 'f86e5814-b223-482c-b768-3b873297****',
                            'type' => 'string',
                          ),
                          'BrokerUrl' => 
                          array (
                            'description' => '数据订阅通道的网络地址及端口号信息。',
                            'example' => '无',
                            'type' => 'string',
                          ),
                          'Topic' => 
                          array (
                            'description' => '数据订阅通道的订阅Topic。',
                            'example' => 'TP_TEST_UNDERWRITE_ISSUE',
                            'type' => 'string',
                          ),
                          'Sid' => 
                          array (
                            'description' => '消费组ID。',
                            'example' => 'HD1',
                            'type' => 'string',
                          ),
                          'Username' => 
                          array (
                            'description' => '消费组的账号。',
                            'example' => 'admin',
                            'type' => 'string',
                          ),
                          'Password' => 
                          array (
                            'description' => '消费组的账号密码',
                            'example' => 'admin',
                            'type' => 'string',
                          ),
                          'InitCheckPoint' => 
                          array (
                            'description' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳',
                            'example' => '1620962769',
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceSLSParameters' => 
                      array (
                        'description' => 'Source SLS源',
                        'properties' => 
                        array (
                          'Project' => 
                          array (
                            'description' => '日志服务SLS的日志项目。',
                            'example' => 'dmmzk',
                            'type' => 'string',
                          ),
                          'LogStore' => 
                          array (
                            'description' => '日志服务SLS的日志库。',
                            'example' => 'waf-logstore',
                            'type' => 'string',
                          ),
                          'ConsumerGroup' => 
                          array (
                            'description' => '消费组',
                            'example' => '无',
                            'type' => 'string',
                          ),
                          'ConsumePosition' => 
                          array (
                            'description' => '起始消费位点，可以选择最早或最新位点，分别对应“begin”，“end”，也可以从指定时间开始消费，以秒为单位。',
                            'example' => 'begin',
                            'type' => 'string',
                          ),
                          'RoleName' => 
                          array (
                            'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                            'example' => 'testRole',
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourcePrometheusParameters' => 
                      array (
                        'description' => 'Source Prometheus 事件源',
                        'properties' => 
                        array (
                          'RegionId' => 
                          array (
                            'type' => 'string',
                          ),
                          'ClusterId' => 
                          array (
                            'description' => '集群id',
                            'example' => 'c83555068b6******ad213f565f209
',
                            'type' => 'string',
                          ),
                          'DataType' => 
                          array (
                            'description' => '数据类型',
                            'example' => 'json',
                            'type' => 'string',
                          ),
                          'Labels' => 
                          array (
                            'description' => '标签',
                            'example' => '__name__=.*
',
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceCustomizedKafkaParameters' => 
                      array (
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceCustomizedKafkaConnectorParameters' => 
                      array (
                        'properties' => 
                        array (
                          'ConnectorPackageUrl' => 
                          array (
                            'type' => 'string',
                          ),
                          'ConnectorParameters' => 
                          array (
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'type' => 'string',
                              ),
                              'Config' => 
                              array (
                                'type' => 'object',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'WorkerParameters' => 
                          array (
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SourceApacheKafkaParameters' => 
                      array (
                        'properties' => 
                        array (
                          'Bootstraps' => 
                          array (
                            'type' => 'string',
                          ),
                          'Topic' => 
                          array (
                            'type' => 'string',
                          ),
                          'ConsumerGroup' => 
                          array (
                            'type' => 'string',
                          ),
                          'OffsetReset' => 
                          array (
                            'type' => 'string',
                          ),
                          'ValueDataType' => 
                          array (
                            'type' => 'string',
                          ),
                          'VpcId' => 
                          array (
                            'type' => 'string',
                          ),
                          'VSwitchIds' => 
                          array (
                            'type' => 'string',
                          ),
                          'SecurityGroupId' => 
                          array (
                            'type' => 'string',
                          ),
                          'NetworkType' => 
                          array (
                            'type' => 'string',
                          ),
                          'SecurityProtocol' => 
                          array (
                            'type' => 'string',
                          ),
                          'SaslMechanism' => 
                          array (
                            'type' => 'string',
                          ),
                          'SaslUser' => 
                          array (
                            'type' => 'string',
                          ),
                          'SaslPassword' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                    ),
                    'type' => 'object',
                  ),
                  'FilterPattern' => 
                  array (
                    'description' => '事件过滤规则，如果不指定表示匹配全部事件。',
                    'example' => '无',
                    'type' => 'string',
                  ),
                  'Transforms' => 
                  array (
                    'description' => 'Transform 相关配置',
                    'items' => 
                    array (
                      'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
                      'properties' => 
                      array (
                        'Arn' => 
                        array (
                          'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
                          'example' => 'acs:fc:cn-hangzhou:*****:services/demo-service.LATEST/functions/demo-func
',
                          'type' => 'string',
                        ),
                      ),
                      'type' => 'object',
                    ),
                    'type' => 'array',
                  ),
                  'Sink' => 
                  array (
                    'description' => '事件目标',
                    'properties' => 
                    array (
                      'SinkMNSParameters' => 
                      array (
                        'description' => 'MNS事件目标',
                        'properties' => 
                        array (
                          'QueueName' => 
                          array (
                            'description' => '目标服务类型为消息服务MNS。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息服务MNS的Queue的名称。',
                                'example' => 'MyQueue',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Body' => 
                          array (
                            'description' => '消息内容。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'IsBase64Encode' => 
                          array (
                            'description' => '是否开启Base64编码。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '开启Base64编码。',
                                'example' => 'true',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '事件转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkRabbitMQParameters' => 
                      array (
                        'description' => 'Sink Rabbitmq的参数',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '目标服务类型为消息队列RabbitMQ版。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息队列RabbitMQ版的实例ID。',
                                'example' => 'e5c9b727-e06c-4d7e-84d5-f8ce644e****',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'VirtualHostName' => 
                          array (
                            'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                                'example' => 'rabbit-host
',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'TargetType' => 
                          array (
                            'description' => '目标类型。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '目标类型。取值说明如下：
Exchange：Exchange模式。
Queue：Queue模式。',
                                'example' => 'Exchange/Queue',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Exchange' => 
                          array (
                            'description' => 'Exchange模式。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息队列RabbitMQ版实例的Exchange的名称。',
                                'example' => 'a_exchange',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'RoutingKey' => 
                          array (
                            'description' => '消息的路由规则。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息的路由规则。',
                                'example' => 'housekeeping',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'QueueName' => 
                          array (
                            'description' => 'Queue模式。
仅当参数TargetType配置为Queue时，需配置此参数。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '实例的Queue的名称。',
                                'example' => 'MyQueue',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Body' => 
                          array (
                            'description' => '消息内容。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'MessageId' => 
                          array (
                            'description' => '消息ID。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Properties' => 
                          array (
                            'description' => '过滤属性。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkFcParameters' => 
                      array (
                        'description' => '函数目标',
                        'properties' => 
                        array (
                          'ServiceName' => 
                          array (
                            'description' => '服务的名称',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '服务的名称',
                                'example' => 'myService',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'FunctionName' => 
                          array (
                            'description' => '函数名称',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '函数名称',
                                'example' => 'mFunction',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Concurrency' => 
                          array (
                            'description' => '投递并发度，最小1',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '投递并发度，最小1',
                                'example' => '1',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Qualifier' => 
                          array (
                            'description' => '函数所属服务的别名',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '函数所属服务的别名',
                                'example' => 'LATEST',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'InvocationType' => 
                          array (
                            'description' => '同步或则异步。
Sync：同步。
Async：异步。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '调用类型',
                                'example' => 'Async',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Body' => 
                          array (
                            'description' => '发送给函数的内容体',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'title' => '函数目标',
                        'type' => 'object',
                      ),
                      'SinkKafkaParameters' => 
                      array (
                        'description' => 'Sink kafak 参数',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '目标服务类型为消息队列Kafka版。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '实例ID。',
                                'example' => 'Defaut_1283278472_s****',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Topic' => 
                          array (
                            'description' => '主题名称',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '主题名称',
                                'example' => 'topic-test',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Acks' => 
                          array (
                            'description' => '确认信息',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '确认信息',
                                'example' => '1',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Key' => 
                          array (
                            'description' => '消息的标识',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息的标识',
                                'example' => 'key',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Value' => 
                          array (
                            'description' => '消息内容',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkRocketMQParameters' => 
                      array (
                        'description' => 'Sink RocketMQ Parameters',
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'description' => '目标服务类型为消息队列RocketMQ版。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息队列RocketMQ版的实例ID。',
                                'example' => 'MQ_INST_164901546557****_BAAN****',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Topic' => 
                          array (
                            'description' => '消息队列RocketMQ版实例的Topic。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '消息队列RocketMQ版实例的Topic名称。',
                                'example' => 'Mytopic',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Body' => 
                          array (
                            'description' => '消息内容。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Properties' => 
                          array (
                            'description' => '过滤属性。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Keys' => 
                          array (
                            'description' => '过滤属性。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Tags' => 
                          array (
                            'description' => '过滤属性。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'InstanceType' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'InstanceEndpoint' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'InstanceUsername' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'InstancePassword' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'VpcId' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'VSwitchIds' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'SecurityGroupId' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Network' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkSLSParameters' => 
                      array (
                        'description' => 'Sink SLS Parameters',
                        'properties' => 
                        array (
                          'Project' => 
                          array (
                            'description' => '日志服务SLS的日志项目。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '日志服务SLS的日志项目。',
                                'example' => 'test-project
',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'LogStore' => 
                          array (
                            'description' => '日志服务SLS的日志库。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '日志服务SLS的日志库。',
                                'example' => 'test-logstore',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Topic' => 
                          array (
                            'description' => '日志所在的topic，对应SLS 保留字段“topic”。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '日志所在的topic，对应SLS 保留字段“topic”。',
                                'example' => 'testTopic',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Body' => 
                          array (
                            'description' => '消息内容。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '转换前的值。',
                                'example' => '{
      "key": "value"
}',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式',
                                'example' => 'TEMPLATE',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => 'The value of ${key} is ${value}!
',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'RoleName' => 
                          array (
                            'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                                'example' => 'testRole',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'ContentType' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'ContentSchema' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkFnfParameters' => 
                      array (
                        'description' => 'Sink Fnf 参数',
                        'properties' => 
                        array (
                          'FlowName' => 
                          array (
                            'description' => '流程名称',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '流程名称',
                                'example' => 'test-streaming-fnf',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'ExecutionName' => 
                          array (
                            'description' => '执行名称',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '执行名称',
                                'example' => '123',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Input' => 
                          array (
                            'description' => '执行输入信息',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '执行输入信息',
                                'example' => '123',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'RoleName' => 
                          array (
                            'description' => '角色配置',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '角色配置',
                                'example' => 'Al****FNF-x****',
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'description' => '转换的格式。默认为CONSTANT。',
                                'example' => 'CONSTANT',
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'description' => '模板样式。',
                                'example' => '无',
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkDataHubParameters' => 
                      array (
                        'properties' => 
                        array (
                          'Project' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Topic' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'TopicType' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'TopicSchema' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'Body' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'RoleName' => 
                          array (
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'type' => 'string',
                              ),
                              'Form' => 
                              array (
                                'type' => 'string',
                              ),
                              'Template' => 
                              array (
                                'type' => 'string',
                              ),
                            ),
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkCustomizedKafkaParameters' => 
                      array (
                        'properties' => 
                        array (
                          'InstanceId' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'SinkCustomizedKafkaConnectorParameters' => 
                      array (
                        'properties' => 
                        array (
                          'ConnectorPackageUrl' => 
                          array (
                            'type' => 'string',
                          ),
                          'ConnectorParameters' => 
                          array (
                            'properties' => 
                            array (
                              'Name' => 
                              array (
                                'type' => 'string',
                              ),
                              'Config' => 
                              array (
                                'type' => 'object',
                              ),
                            ),
                            'type' => 'object',
                          ),
                          'WorkerParameters' => 
                          array (
                            'type' => 'object',
                          ),
                        ),
                        'type' => 'object',
                      ),
                    ),
                    'type' => 'object',
                  ),
                  'RunOptions' => 
                  array (
                    'description' => '运行环境参数。',
                    'properties' => 
                    array (
                      'MaximumTasks' => 
                      array (
                        'description' => '并发数',
                        'example' => '2',
                        'format' => 'int32',
                        'type' => 'integer',
                      ),
                      'RetryStrategy' => 
                      array (
                        'description' => '事件推送失败时的重试策略。',
                        'properties' => 
                        array (
                          'PushRetryStrategy' => 
                          array (
                            'description' => '重试策略：BACKOFF_RETRY（退避重试）和EXPONENTIALDECAY_RETRY（指数衰减重试）',
                            'example' => 'BACKOFF_RETRY',
                            'type' => 'string',
                          ),
                          'MaximumEventAgeInSeconds' => 
                          array (
                            'description' => '最大重试时间',
                            'example' => '512',
                            'format' => 'float',
                            'type' => 'number',
                          ),
                          'MaximumRetryAttempts' => 
                          array (
                            'description' => '最大重试次数',
                            'example' => '2',
                            'format' => 'float',
                            'type' => 'number',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'ErrorsTolerance' => 
                      array (
                        'description' => '异常容忍策略：NONE（不容忍异常）、ALL（容忍所有异常）',
                        'example' => 'ALL',
                        'type' => 'string',
                      ),
                      'DeadLetterQueue' => 
                      array (
                        'description' => '是否启用死信队列。默认不启用死信队列，超过重试策略后的消息将被丢弃。',
                        'properties' => 
                        array (
                          'Arn' => 
                          array (
                            'description' => '死信队列ARN',
                            'example' => 'acs:ram::155020394332****:role/edskmstoecs',
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'BatchWindow' => 
                      array (
                        'description' => '攒批窗口。',
                        'properties' => 
                        array (
                          'CountBasedWindow' => 
                          array (
                            'description' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                            'example' => '100',
                            'format' => 'int32',
                            'type' => 'integer',
                          ),
                          'TimeBasedWindow' => 
                          array (
                            'description' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                            'example' => '10',
                            'format' => 'int32',
                            'type' => 'integer',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'LogDelivery' => 
                      array (
                        'properties' => 
                        array (
                          'SLSLogParameters' => 
                          array (
                            'items' => 
                            array (
                              'properties' => 
                              array (
                                'ProjectName' => 
                                array (
                                  'type' => 'string',
                                ),
                                'LogstoreName' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'type' => 'array',
                          ),
                          'KafkaLogParameters' => 
                          array (
                            'items' => 
                            array (
                              'properties' => 
                              array (
                                'Endpoint' => 
                                array (
                                  'type' => 'string',
                                ),
                                'InstanceId' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Topic' => 
                                array (
                                  'type' => 'string',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'type' => 'array',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'ScaledObject' => 
                      array (
                        'properties' => 
                        array (
                          'MinReplicaCount' => 
                          array (
                            'format' => 'int32',
                            'type' => 'integer',
                          ),
                          'MaxReplicaCount' => 
                          array (
                            'format' => 'int32',
                            'type' => 'integer',
                          ),
                          'Triggers' => 
                          array (
                            'items' => 
                            array (
                              'properties' => 
                              array (
                                'Type' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Metadata' => 
                                array (
                                  'properties' => 
                                  array (
                                    'Type' => 
                                    array (
                                      'type' => 'string',
                                    ),
                                    'Value' => 
                                    array (
                                      'format' => 'int32',
                                      'type' => 'integer',
                                    ),
                                  ),
                                  'type' => 'object',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'type' => 'array',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'RoleName' => 
                      array (
                        'type' => 'string',
                      ),
                      'Network' => 
                      array (
                        'properties' => 
                        array (
                          'VpcId' => 
                          array (
                            'type' => 'string',
                          ),
                          'VSwitchIds' => 
                          array (
                            'items' => 
                            array (
                              'type' => 'string',
                            ),
                            'type' => 'array',
                          ),
                          'SecurityGroupId' => 
                          array (
                            'type' => 'string',
                          ),
                        ),
                        'type' => 'object',
                      ),
                      'ResourceSpec' => 
                      array (
                        'properties' => 
                        array (
                          'Resources' => 
                          array (
                            'items' => 
                            array (
                              'properties' => 
                              array (
                                'Type' => 
                                array (
                                  'type' => 'string',
                                ),
                                'Value' => 
                                array (
                                  'format' => 'int32',
                                  'type' => 'integer',
                                ),
                              ),
                              'type' => 'object',
                            ),
                            'type' => 'array',
                          ),
                        ),
                        'type' => 'object',
                      ),
                    ),
                    'type' => 'object',
                  ),
                  'Status' => 
                  array (
                    'description' => '获取到的事件流的状态。',
                    'example' => 'RUNNING',
                    'type' => 'string',
                  ),
                  'DetailedStatus' => 
                  array (
                    'properties' => 
                    array (
                      'TPS' => 
                      array (
                        'format' => 'double',
                        'type' => 'number',
                      ),
                      'DelayTime' => 
                      array (
                        'format' => 'int64',
                        'type' => 'integer',
                      ),
                      'DiffOffset' => 
                      array (
                        'format' => 'int64',
                        'type' => 'integer',
                      ),
                      'Extensions' => 
                      array (
                        'type' => 'object',
                      ),
                    ),
                    'type' => 'object',
                  ),
                ),
                'type' => 'object',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The event streaming [xxxx] not existed!\\",\\n  \\"RequestId\\": \\"7892F480-58C9-5067-AB35-8A7BEF****\\",\\n  \\"Data\\": {\\n    \\"EventStreamingName\\": \\"rocketmq-sync\\",\\n    \\"Description\\": \\"RocketMQ-to-RocketMQ\\",\\n    \\"Source\\": {\\n      \\"SourceMNSParameters\\": {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"QueueName\\": \\"demo\\",\\n        \\"IsBase64Decode\\": true\\n      },\\n      \\"SourceRabbitMQParameters\\": {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"InstanceId\\": \\"i-f8z9a9mcgwri1c1i****\\",\\n        \\"VirtualHostName\\": \\"eb-connect\\",\\n        \\"QueueName\\": \\"comp\\"\\n      },\\n      \\"SourceRocketMQParameters\\": {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"InstanceId\\": \\"i-f8zbher64dlm58pl****\\",\\n        \\"Topic\\": \\"topic_add_anima\\",\\n        \\"Tag\\": \\"v1\\",\\n        \\"Offset\\": \\"CONSUMEFROMLASTOFFSET\\",\\n        \\"GroupID\\": \\"GID_group1\\",\\n        \\"Timestamp\\": 1636597951964,\\n        \\"InstanceType\\": \\"2\\",\\n        \\"InstanceEndpoint\\": \\"reg****-vpc.cn-zhangjiakou.aliyuncs.com\\\\n\\",\\n        \\"AuthType\\": \\"ACL\\",\\n        \\"InstanceUsername\\": \\"xxxa\\",\\n        \\"InstancePassword\\": \\"xxxa\\",\\n        \\"InstanceVpcId\\": \\"vpc-m5e3sv4b12345****\\\\n\\",\\n        \\"InstanceVSwitchIds\\": \\"vsw-m5ev8asdc6h12****\\\\n\\",\\n        \\"InstanceSecurityGroupId\\": \\"sg-m5edtu24f12345****\\\\n\\",\\n        \\"InstanceNetwork\\": \\"PublicNetwork\\",\\n        \\"BodyDataType\\": \\"\\",\\n        \\"FilterType\\": \\"\\",\\n        \\"FilterSql\\": \\"\\",\\n        \\"VpcId\\": \\"\\",\\n        \\"VSwitchIds\\": \\"\\",\\n        \\"SecurityGroupId\\": \\"\\",\\n        \\"Network\\": \\"\\"\\n      },\\n      \\"SourceKafkaParameters\\": {\\n        \\"RegionId\\": \\"cn-hangzhou\\",\\n        \\"InstanceId\\": \\"i-bp1fbtrnqmjvgq66****\\",\\n        \\"Topic\\": \\"topic_empower_1642473600414\\",\\n        \\"ConsumerGroup\\": \\"GID_TEST\\",\\n        \\"OffsetReset\\": \\"latest\\",\\n        \\"Network\\": \\"Default\\",\\n        \\"VpcId\\": \\"vpc-2zehizpoendb3****\\",\\n        \\"VSwitchIds\\": \\"vsw-wz9qqeovkwjxlu9uc****\\",\\n        \\"SecurityGroupId\\": \\"sg-2vcgdxz7o1n9zapp****\\",\\n        \\"ValueDataType\\": \\"Text\\"\\n      },\\n      \\"SourceMQTTParameters\\": {\\n        \\"RegionId\\": \\"cn-shanghai\\",\\n        \\"InstanceId\\": \\"i-2ze06wqdwk0uq14k****\\",\\n        \\"Topic\\": \\"TOPIC-cainiao-pcs-wms-instock-noPrealertPrintLabel\\",\\n        \\"BodyDataType\\": \\"\\"\\n      },\\n      \\"SourceDTSParameters\\": {\\n        \\"TaskId\\": \\"f86e5814-b223-482c-b768-3b873297****\\",\\n        \\"BrokerUrl\\": \\"无\\",\\n        \\"Topic\\": \\"TP_TEST_UNDERWRITE_ISSUE\\",\\n        \\"Sid\\": \\"HD1\\",\\n        \\"Username\\": \\"admin\\",\\n        \\"Password\\": \\"admin\\",\\n        \\"InitCheckPoint\\": \\"1620962769\\"\\n      },\\n      \\"SourceSLSParameters\\": {\\n        \\"Project\\": \\"dmmzk\\",\\n        \\"LogStore\\": \\"waf-logstore\\",\\n        \\"ConsumerGroup\\": \\"无\\",\\n        \\"ConsumePosition\\": \\"begin\\",\\n        \\"RoleName\\": \\"testRole\\"\\n      },\\n      \\"SourcePrometheusParameters\\": {\\n        \\"RegionId\\": \\"\\",\\n        \\"ClusterId\\": \\"c83555068b6******ad213f565f209\\\\n\\",\\n        \\"DataType\\": \\"json\\",\\n        \\"Labels\\": \\"__name__=.*\\\\n\\"\\n      },\\n      \\"SourceCustomizedKafkaParameters\\": {\\n        \\"InstanceId\\": \\"\\"\\n      },\\n      \\"SourceCustomizedKafkaConnectorParameters\\": {\\n        \\"ConnectorPackageUrl\\": \\"\\",\\n        \\"ConnectorParameters\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Config\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"WorkerParameters\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      },\\n      \\"SourceApacheKafkaParameters\\": {\\n        \\"Bootstraps\\": \\"\\",\\n        \\"Topic\\": \\"\\",\\n        \\"ConsumerGroup\\": \\"\\",\\n        \\"OffsetReset\\": \\"\\",\\n        \\"ValueDataType\\": \\"\\",\\n        \\"VpcId\\": \\"\\",\\n        \\"VSwitchIds\\": \\"\\",\\n        \\"SecurityGroupId\\": \\"\\",\\n        \\"NetworkType\\": \\"\\",\\n        \\"SecurityProtocol\\": \\"\\",\\n        \\"SaslMechanism\\": \\"\\",\\n        \\"SaslUser\\": \\"\\",\\n        \\"SaslPassword\\": \\"\\"\\n      }\\n    },\\n    \\"FilterPattern\\": \\"无\\",\\n    \\"Transforms\\": [\\n      {\\n        \\"Arn\\": \\"acs:fc:cn-hangzhou:*****:services/demo-service.LATEST/functions/demo-func\\\\n\\"\\n      }\\n    ],\\n    \\"Sink\\": {\\n      \\"SinkMNSParameters\\": {\\n        \\"QueueName\\": {\\n          \\"Value\\": \\"MyQueue\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Body\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\"\\n        },\\n        \\"IsBase64Encode\\": {\\n          \\"Value\\": \\"true\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        }\\n      },\\n      \\"SinkRabbitMQParameters\\": {\\n        \\"InstanceId\\": {\\n          \\"Value\\": \\"e5c9b727-e06c-4d7e-84d5-f8ce644e****\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"VirtualHostName\\": {\\n          \\"Value\\": \\"rabbit-host\\\\n\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"TargetType\\": {\\n          \\"Value\\": \\"Exchange/Queue\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Exchange\\": {\\n          \\"Value\\": \\"a_exchange\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"RoutingKey\\": {\\n          \\"Value\\": \\"housekeeping\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"QueueName\\": {\\n          \\"Value\\": \\"MyQueue\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Body\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\"\\n        },\\n        \\"MessageId\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\"\\n        },\\n        \\"Properties\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n        }\\n      },\\n      \\"SinkFcParameters\\": {\\n        \\"ServiceName\\": {\\n          \\"Value\\": \\"myService\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"FunctionName\\": {\\n          \\"Value\\": \\"mFunction\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Concurrency\\": {\\n          \\"Value\\": \\"1\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Qualifier\\": {\\n          \\"Value\\": \\"LATEST\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"InvocationType\\": {\\n          \\"Value\\": \\"Async\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Body\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n        }\\n      },\\n      \\"SinkKafkaParameters\\": {\\n        \\"InstanceId\\": {\\n          \\"Value\\": \\"Defaut_1283278472_s****\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Topic\\": {\\n          \\"Value\\": \\"topic-test\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Acks\\": {\\n          \\"Value\\": \\"1\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Key\\": {\\n          \\"Value\\": \\"key\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Value\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n        }\\n      },\\n      \\"SinkRocketMQParameters\\": {\\n        \\"InstanceId\\": {\\n          \\"Value\\": \\"MQ_INST_164901546557****_BAAN****\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Topic\\": {\\n          \\"Value\\": \\"Mytopic\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Body\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n        },\\n        \\"Properties\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n        },\\n        \\"Keys\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\"\\n        },\\n        \\"Tags\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\"\\n        },\\n        \\"InstanceType\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"InstanceEndpoint\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"InstanceUsername\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"InstancePassword\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"VpcId\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"VSwitchIds\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"SecurityGroupId\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"Network\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        }\\n      },\\n      \\"SinkSLSParameters\\": {\\n        \\"Project\\": {\\n          \\"Value\\": \\"test-project\\\\n\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"LogStore\\": {\\n          \\"Value\\": \\"test-logstore\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Topic\\": {\\n          \\"Value\\": \\"testTopic\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Body\\": {\\n          \\"Value\\": \\"{\\\\n      \\\\\\"key\\\\\\": \\\\\\"value\\\\\\"\\\\n}\\",\\n          \\"Form\\": \\"TEMPLATE\\",\\n          \\"Template\\": \\"The value of ${key} is ${value}!\\\\n\\"\\n        },\\n        \\"RoleName\\": {\\n          \\"Value\\": \\"testRole\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"ContentType\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"ContentSchema\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        }\\n      },\\n      \\"SinkFnfParameters\\": {\\n        \\"FlowName\\": {\\n          \\"Value\\": \\"test-streaming-fnf\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"ExecutionName\\": {\\n          \\"Value\\": \\"123\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"Input\\": {\\n          \\"Value\\": \\"123\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        },\\n        \\"RoleName\\": {\\n          \\"Value\\": \\"Al****FNF-x****\\",\\n          \\"Form\\": \\"CONSTANT\\",\\n          \\"Template\\": \\"无\\"\\n        }\\n      },\\n      \\"SinkDataHubParameters\\": {\\n        \\"Project\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"Topic\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"TopicType\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"TopicSchema\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"Body\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        },\\n        \\"RoleName\\": {\\n          \\"Value\\": \\"\\",\\n          \\"Form\\": \\"\\",\\n          \\"Template\\": \\"\\"\\n        }\\n      },\\n      \\"SinkCustomizedKafkaParameters\\": {\\n        \\"InstanceId\\": \\"\\"\\n      },\\n      \\"SinkCustomizedKafkaConnectorParameters\\": {\\n        \\"ConnectorPackageUrl\\": \\"\\",\\n        \\"ConnectorParameters\\": {\\n          \\"Name\\": \\"\\",\\n          \\"Config\\": {\\n            \\"test\\": \\"test\\",\\n            \\"test2\\": 1\\n          }\\n        },\\n        \\"WorkerParameters\\": {\\n          \\"test\\": \\"test\\",\\n          \\"test2\\": 1\\n        }\\n      }\\n    },\\n    \\"RunOptions\\": {\\n      \\"MaximumTasks\\": 2,\\n      \\"RetryStrategy\\": {\\n        \\"PushRetryStrategy\\": \\"BACKOFF_RETRY\\",\\n        \\"MaximumEventAgeInSeconds\\": 512,\\n        \\"MaximumRetryAttempts\\": 2\\n      },\\n      \\"ErrorsTolerance\\": \\"ALL\\",\\n      \\"DeadLetterQueue\\": {\\n        \\"Arn\\": \\"acs:ram::155020394332****:role/edskmstoecs\\"\\n      },\\n      \\"BatchWindow\\": {\\n        \\"CountBasedWindow\\": 100,\\n        \\"TimeBasedWindow\\": 10\\n      },\\n      \\"LogDelivery\\": {\\n        \\"SLSLogParameters\\": [\\n          {\\n            \\"ProjectName\\": \\"\\",\\n            \\"LogstoreName\\": \\"\\"\\n          }\\n        ],\\n        \\"KafkaLogParameters\\": [\\n          {\\n            \\"Endpoint\\": \\"\\",\\n            \\"InstanceId\\": \\"\\",\\n            \\"Topic\\": \\"\\"\\n          }\\n        ]\\n      },\\n      \\"ScaledObject\\": {\\n        \\"MinReplicaCount\\": 0,\\n        \\"MaxReplicaCount\\": 0,\\n        \\"Triggers\\": [\\n          {\\n            \\"Type\\": \\"\\",\\n            \\"Metadata\\": {\\n              \\"Type\\": \\"\\",\\n              \\"Value\\": 0\\n            }\\n          }\\n        ]\\n      },\\n      \\"RoleName\\": \\"\\",\\n      \\"Network\\": {\\n        \\"VpcId\\": \\"\\",\\n        \\"VSwitchIds\\": [\\n          \\"\\"\\n        ],\\n        \\"SecurityGroupId\\": \\"\\"\\n      },\\n      \\"ResourceSpec\\": {\\n        \\"Resources\\": [\\n          {\\n            \\"Type\\": \\"\\",\\n            \\"Value\\": 0\\n          }\\n        ]\\n      }\\n    },\\n    \\"Status\\": \\"RUNNING\\",\\n    \\"DetailedStatus\\": {\\n      \\"TPS\\": 0,\\n      \\"DelayTime\\": 0,\\n      \\"DiffOffset\\": 0,\\n      \\"Extensions\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    }\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '获取一个事件流的详细信息。',
      'title' => '获取一个事件流的详细信息',
    ),
    'UpdateEventStreaming' => 
    array (
      'summary' => '修改一个事件流的基础信息、事件源信息、事件过滤模式或事件目标信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '154147',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
          1 => 'FEATUREeventbridge70XW1X',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventStreamingName',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '事件流的名称。',
            'example' => 'myeventstreaming',
            'required' => true,
            'title' => '名称',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件流的描述。',
            'example' => 'rocketmq2mns',
            'required' => false,
            'title' => '描述',
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'FilterPattern',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件过滤规则，如果不指定表示匹配全部事件。',
            'example' => '无',
            'required' => true,
            'title' => '过滤模式',
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'Source',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '事件提供方。必须选择一种Source，且最多只能选择一种Source进行填选。',
            'properties' => 
            array (
              'SourceMNSParameters' => 
              array (
                'description' => 'Source MNS 参数',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-hangzhou',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'QueueName' => 
                  array (
                    'description' => '队列名称',
                    'example' => 'queue_api_1642474203601',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'IsBase64Decode' => 
                  array (
                    'description' => '是否开启Base64编码。默认为true。',
                    'example' => 'true',
                    'required' => false,
                    'type' => 'boolean',
                  ),
                ),
                'required' => false,
                'title' => 'Source MNS 参数',
                'type' => 'object',
              ),
              'SourceRabbitMQParameters' => 
              array (
                'description' => 'Source RabbitMQ源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-hangzhou',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '消息队列RabbitMQ版的实例的ID。',
                    'example' => 'i-f8z9lqkldlb4oxsxwwub',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VirtualHostName' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                    'example' => 'eb-connect
',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'QueueName' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的Queue的名称。',
                    'example' => 'demo',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'title' => 'Source RabbitmQ源',
                'type' => 'object',
              ),
              'SourceKafkaParameters' => 
              array (
                'description' => 'Source Kafka源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-zhangjiakou',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'example' => 'i-8vbh4a5b9yfhgkkzm****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => 'Topic名称。',
                    'example' => 'topic_empower_1641539400786',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConsumerGroup' => 
                  array (
                    'description' => '订阅该Topic的消费者所对应的Group ID。',
                    'example' => 'DEFAULT_GROUP',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'OffsetReset' => 
                  array (
                    'description' => '偏移量。',
                    'example' => 'latest',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Network' => 
                  array (
                    'description' => '网络配置 ：默认值Default，vpc网络是PublicNetwork',
                    'example' => 'Default',
                    'required' => false,
                    'type' => 'string',
                    'enum' => 
                    array (
                      0 => 'PublicNetwork',
                      1 => 'Default',
                    ),
                  ),
                  'VpcId' => 
                  array (
                    'description' => '专有网络VPC的ID。',
                    'example' => 'vpc-2ze6p0o345nykmekxt****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'description' => '交换机ID。',
                    'example' => 'vsw-wz9t1l1e8eu2om****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '安全组ID。',
                    'example' => 'sg-uf6jcm3y5hcs7hkl****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ValueDataType' => 
                  array (
                    'description' => '编解码参数枚举值，有3个枚举值，命名如下
  a. Json：现有逻辑，bytes按utf8解码成字符串，解析为json
  b. Text：bytes按utf8解码成字符串，直接放入payload
  c. Binary：bytes按base64编码成字符串，放入payload',
                    'example' => 'Text',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'title' => 'Source Kafka源',
                'type' => 'object',
              ),
              'SourceRocketMQParameters' => 
              array (
                'description' => 'Source RocketMQ源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '消息队列RocketMQ版的地域ID。',
                    'example' => 'cn-shanghai',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '消息队列RocketMQ版的实例ID。',
                    'example' => 'i-f8z9a9mcgwri1c1id****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => 'topic名称。',
                    'example' => 'TOPIC-cainiao-pcs-order-process-inBoundConditionCheck',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Tag' => 
                  array (
                    'description' => '消息的过滤标签。',
                    'example' => 'test',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Offset' => 
                  array (
                    'description' => '消息的消费位点。取值说明如下：
- CONSUMEFROMLASTOFFSET：从最新位点开始消费。
- CONSUMEFROMFIRSTOFFSET：从最早位点开始消费。
- CONSUMEFROMTIMESTAMP：从指定时间点的位点开始消费。

默认值：CONSUMEFROMLAST_OFFSET。',
                    'example' => 'CONSUMEFROMLASTOFFSET',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'GroupID' => 
                  array (
                    'description' => '消息队列RocketMQ版的Group ID。',
                    'example' => 'GID_test',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Timestamp' => 
                  array (
                    'description' => '时间戳。仅当参数Offset取值为CONSUMEFROMTIMESTAMP时，该参数有效。',
                    'example' => '1670656652009',
                    'format' => 'int64',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => '实例类型',
                    'example' => '2',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceEndpoint' => 
                  array (
                    'description' => '实例接入点',
                    'example' => 'reg****-vpc.cn-zhangjiakou.aliyuncs.com
',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceUsername' => 
                  array (
                    'description' => '实例用户名。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstancePassword' => 
                  array (
                    'description' => '实例密码。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'AuthType' => 
                  array (
                    'description' => '鉴权类型。',
                    'example' => 'ACL',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceVpcId' => 
                  array (
                    'description' => '实例VPC信息。',
                    'example' => 'vpc-m5e3sv4b12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceVSwitchIds' => 
                  array (
                    'description' => '实例交换机信息。',
                    'example' => 'vsw-m5ev8asdc6h12****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceSecurityGroupId' => 
                  array (
                    'description' => '实例安全组信息。',
                    'example' => 'sg-m5edtu24f12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceNetwork' => 
                  array (
                    'description' => '实例网络信息：

PublicNetwork
PrivateNetwork',
                    'example' => 'PublicNetwork',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'BodyDataType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'FilterType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'FilterSql' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VpcId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Network' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'title' => 'Source RocketMQ源',
                'type' => 'object',
              ),
              'SourceMQTTParameters' => 
              array (
                'description' => 'Source MQTT源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-shanghai',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'example' => 'i-bp1dsudbecqwt61j****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => 'Topic名称。',
                    'example' => 'topic_empower_1642400400779',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceDTSParameters' => 
              array (
                'description' => 'Source DTS源',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务ID。',
                    'example' => 'f86e5814-b223-482c-b768-3b873297****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'BrokerUrl' => 
                  array (
                    'description' => '数据订阅通道的网络地址及端口号信息。',
                    'example' => '无',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => '数据订阅通道的订阅Topic。',
                    'example' => 'LTC_CACHE_PRD',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Sid' => 
                  array (
                    'description' => '消费组ID。',
                    'example' => 'hkprdb',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Username' => 
                  array (
                    'description' => '消费组的账号。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Password' => 
                  array (
                    'description' => '消费组的账号密码。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InitCheckPoint' => 
                  array (
                    'description' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳。',
                    'example' => '1620962769',
                    'format' => 'int64',
                    'required' => false,
                    'type' => 'integer',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceSLSParameters' => 
              array (
                'description' => 'Source SLS源',
                'properties' => 
                array (
                  'RoleName' => 
                  array (
                    'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                    'example' => 'testRole
',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourcePrometheusParameters' => 
              array (
                'description' => 'Source Prometheus 事件源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ClusterId' => 
                  array (
                    'description' => '集群id',
                    'example' => 'c83555068b6******ad213f565f209
',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'DataType' => 
                  array (
                    'description' => '数据类型',
                    'example' => 'json',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Labels' => 
                  array (
                    'description' => '标签',
                    'example' => '__name__=.*
',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceCustomizedKafkaParameters' => 
              array (
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceCustomizedKafkaConnectorParameters' => 
              array (
                'properties' => 
                array (
                  'ConnectorPackageUrl' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConnectorParameters' => 
                  array (
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Config' => 
                      array (
                        'required' => false,
                        'type' => 'object',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'WorkerParameters' => 
                  array (
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceApacheKafkaParameters' => 
              array (
                'properties' => 
                array (
                  'Bootstraps' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConsumerGroup' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'OffsetReset' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ValueDataType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VpcId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'NetworkType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityProtocol' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SaslMechanism' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SaslUser' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SaslPassword' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
            ),
            'required' => true,
            'title' => '源',
            'type' => 'object',
          ),
        ),
        4 => 
        array (
          'name' => 'Sink',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '事件目标。必须选择一种Sink，且最多只能选择一种Sink进行填选。',
            'properties' => 
            array (
              'SinkMNSParameters' => 
              array (
                'description' => 'MNS事件目标',
                'properties' => 
                array (
                  'QueueName' => 
                  array (
                    'description' => '目标服务类型为消息服务MNS。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息服务MNS的Queue的名称。',
                        'example' => 'MyQueue',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'IsBase64Encode' => 
                  array (
                    'description' => '是否开启Base64编码。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '开启Base64编码。',
                        'example' => 'true',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '事件转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '事件源名称',
                'type' => 'object',
              ),
              'SinkFcParameters' => 
              array (
                'description' => '函数目标。',
                'properties' => 
                array (
                  'ServiceName' => 
                  array (
                    'description' => '服务的名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '服务的名称。',
                        'example' => 'myService',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'FunctionName' => 
                  array (
                    'description' => '函数名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '函数名称。',
                        'example' => 'mFunction',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Concurrency' => 
                  array (
                    'description' => '投递并发度，最小1。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '投递并发度，最小1。',
                        'example' => '1',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Qualifier' => 
                  array (
                    'description' => '函数所属服务的别名。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '函数所属服务的别名。',
                        'example' => 'LATEST',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'InvocationType' => 
                  array (
                    'description' => '同步或则异步。
Sync：同步。
Async：异步。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '调用类型。',
                        'example' => 'Async',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '发送给函数的内容体。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '函数目标',
                'type' => 'object',
              ),
              'SinkRabbitMQParameters' => 
              array (
                'description' => 'Sink Rabbitmq的参数。',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '目标服务类型为消息队列RabbitMQ版。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RabbitMQ版的实例ID。',
                        'example' => 'amqp-cn-2r42e73o****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VirtualHostName' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                        'example' => 'rabbit-host
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '目标类型。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '目标类型。取值说明如下：
- Exchange：Exchange模式。
- Queue：Queue模式。',
                        'example' => 'Exchange/Queue',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Exchange' => 
                  array (
                    'description' => 'Exchange模式。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RabbitMQ版实例的Exchange的名称。',
                        'example' => 'a_exchange',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoutingKey' => 
                  array (
                    'description' => '消息的路由规则。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息的路由规则。',
                        'example' => 'housekeeping',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'QueueName' => 
                  array (
                    'description' => 'Queue模式。
仅当参数TargetType配置为Queue时，需配置此参数。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例的Queue的名称。',
                        'example' => 'MyQueue',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'MessageId' => 
                  array (
                    'description' => '消息ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Properties' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '是否新增',
                'type' => 'object',
              ),
              'SinkKafkaParameters' => 
              array (
                'description' => 'Sink kafak 参数',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '目标服务类型为消息队列Kafka版。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例ID。',
                        'example' => 'Defaut_1283278472_s****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => '主题名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '主题名称。',
                        'example' => 'test',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Acks' => 
                  array (
                    'description' => '写入Kafka确认模式：
- acks=0：无需服务端的Response、性能较高、丢数据风险较大。
- acks=1：服务端主节点写成功即返回Response、性能中等、丢数据风险中等、主节点宕机可能导致数据丢失；
- acks=all：服务端主节点写成功且备节点同步成功才返回Response、性能较差、数据较为安全、主节点和备节点都宕机才会导致数据丢失。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '写入Kafka确认模式：
- acks=0：无需服务端的Response、性能较高、丢数据风险较大。
- acks=1：服务端主节点写成功即返回Response、性能中等、丢数据风险中等、主节点宕机可能导致数据丢失；
- acks=all：服务端主节点写成功且备节点同步成功才返回Response、性能较差、数据较为安全、主节点和备节点都宕机才会导致数据丢失。',
                        'example' => '1',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Key' => 
                  array (
                    'description' => '消息的标识。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息的标识。',
                        'example' => 'key',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Value' => 
                  array (
                    'description' => '消息体内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '描述信息',
                'type' => 'object',
              ),
              'SinkRocketMQParameters' => 
              array (
                'description' => 'Sink RocketMQ Parameters',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '目标服务类型为消息队列RocketMQ版。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RocketMQ版的实例ID。',
                        'example' => 'MQ_INST_164901546557****_BAAN****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息队列RocketMQ版实例的Topic。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RocketMQ版实例的Topic。',
                        'example' => 'Mytopic',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Properties' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Keys' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '	
{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Tags' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '事件源类型',
                'type' => 'object',
              ),
              'SinkSLSParameters' => 
              array (
                'description' => 'Sink SLS Parameters',
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'description' => '日志服务SLS的日志项目。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '日志服务SLS的日志项目。',
                        'example' => 'test-project
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'LogStore' => 
                  array (
                    'description' => '日志服务SLS的日志库。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '日志服务SLS的日志库。',
                        'example' => 'test-logstore
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => '日志所在的topic，对应SLS 保留字段“topic”。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '日志所在的topic，对应SLS 保留字段“topic”。',
                        'example' => 'testTopic',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '发送给SLS的内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                        'example' => 'testRole',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkFnfParameters' => 
              array (
                'description' => 'Sink Fnf 参数',
                'properties' => 
                array (
                  'FlowName' => 
                  array (
                    'description' => '流程名称',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '流程名称',
                        'example' => 'test-streaming-fnf
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ExecutionName' => 
                  array (
                    'description' => '执行名称',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '执行名称',
                        'example' => '123',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Input' => 
                  array (
                    'description' => '执行输入信息',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '执行输入信息',
                        'example' => '123',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色配置',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '角色配置',
                        'example' => 'Al****FNF-x****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkPrometheusParameters' => 
              array (
                'description' => 'Sink Prometheus 参数',
                'properties' => 
                array (
                  'URL' => 
                  array (
                    'description' => 'Prometheus Remote Write URL 地址',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'Prometheus Remote Write URL 地址',
                        'example' => 'https://cn-hangzhou.arms.aliyuncs.com/prometheus/167275****/c5b7faeb2e8994641*****d5c559f/cn-hangzhou/api/v3/write
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'AuthorizationType' => 
                  array (
                    'description' => '鉴权方式',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '鉴权方式',
                        'example' => 'BASIC_AUTH',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Username' => 
                  array (
                    'description' => '用户名',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '用户名',
                        'example' => '***admin',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Password' => 
                  array (
                    'description' => '密码',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '密码',
                        'example' => 'abc',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Data' => 
                  array (
                    'description' => '指标内容',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '指标内容',
                        'example' => '$.data',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为JSONPATH。',
                        'example' => 'JSONPATH',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => '网络类型',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '网络类型',
                        'example' => 'PrivateNetwork',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VpcId' => 
                  array (
                    'description' => 'VPC ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'VPC ID。',
                        'example' => 'vpc-adw1awdw*****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '交换机Id',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '交换机Id',
                        'example' => 'vsw-dwaafds****
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '安全组ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '安全组ID。',
                        'example' => 'sg-mw43*****
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkDataHubParameters' => 
              array (
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'TopicType' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'TopicSchema' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoleName' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ContentType' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ContentSchema' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkCustomizedKafkaParameters' => 
              array (
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkCustomizedKafkaConnectorParameters' => 
              array (
                'properties' => 
                array (
                  'ConnectorPackageUrl' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConnectorParameters' => 
                  array (
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Config' => 
                      array (
                        'required' => false,
                        'type' => 'object',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'WorkerParameters' => 
                  array (
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
            ),
            'required' => true,
            'title' => '事件源名称',
            'type' => 'object',
          ),
        ),
        5 => 
        array (
          'name' => 'RunOptions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '运行环境参数。',
            'properties' => 
            array (
              'MaximumTasks' => 
              array (
                'description' => '并发数。',
                'example' => '2',
                'format' => 'int64',
                'required' => false,
                'title' => '并发数',
                'type' => 'integer',
              ),
              'ErrorsTolerance' => 
              array (
                'description' => '异常容忍策略：NONE（不容忍异常）、ALL（容忍所有异常）。',
                'example' => 'ALL',
                'required' => false,
                'title' => '异常容忍策略：NONE（不容忍异常）、ALL（容忍所有异常）',
                'type' => 'string',
              ),
              'RetryStrategy' => 
              array (
                'description' => '事件推送失败时的重试策略。',
                'properties' => 
                array (
                  'PushRetryStrategy' => 
                  array (
                    'description' => '重试策略：BACKOFF_RETRY（退避重试）和EXPONENTIAL_DECAY_RETRY（指数衰减重试）。',
                    'example' => 'BACKOFF_RETRY',
                    'required' => false,
                    'title' => '重试策略：BACKOFF_RETRY（退避重试）和EXPONENTIAL_DECAY_RETRY（指数衰减重试）',
                    'type' => 'string',
                  ),
                  'MaximumEventAgeInSeconds' => 
                  array (
                    'description' => '最大重试时间。',
                    'example' => '512',
                    'format' => 'int64',
                    'required' => false,
                    'title' => '最大重试时间',
                    'type' => 'integer',
                  ),
                  'MaximumRetryAttempts' => 
                  array (
                    'description' => '最大重试次数。',
                    'example' => '2',
                    'format' => 'int64',
                    'required' => false,
                    'title' => '最大重试次数',
                    'type' => 'integer',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'DeadLetterQueue' => 
              array (
                'description' => '是否启用死信队列。默认不启用死信队列，超过重试策略后的消息将被丢弃。',
                'properties' => 
                array (
                  'Arn' => 
                  array (
                    'description' => '死信队列ARN。',
                    'example' => 'acs:ram::131733464781****:role/rdstoecsassumekms
',
                    'required' => false,
                    'title' => '死信队列ARN',
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'BatchWindow' => 
              array (
                'description' => '攒批窗口。',
                'properties' => 
                array (
                  'CountBasedWindow' => 
                  array (
                    'description' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                    'example' => '100',
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'TimeBasedWindow' => 
                  array (
                    'description' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                    'example' => '10',
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'LogDelivery' => 
              array (
                'properties' => 
                array (
                  'SLSLogParameters' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'ProjectName' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'LogstoreName' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                  'KafkaLogParameters' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'Endpoint' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'InstanceId' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'Topic' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'ScaledObject' => 
              array (
                'properties' => 
                array (
                  'MinReplicaCount' => 
                  array (
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'MaxReplicaCount' => 
                  array (
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'Triggers' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'Metadata' => 
                        array (
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'required' => false,
                              'type' => 'string',
                            ),
                            'Value' => 
                            array (
                              'format' => 'int32',
                              'required' => false,
                              'type' => 'integer',
                            ),
                          ),
                          'required' => false,
                          'type' => 'object',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'RoleName' => 
              array (
                'required' => false,
                'type' => 'string',
              ),
              'Network' => 
              array (
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'items' => 
                    array (
                      'required' => false,
                      'type' => 'string',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'ResourceSpec' => 
              array (
                'properties' => 
                array (
                  'Resources' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'Value' => 
                        array (
                          'format' => 'int32',
                          'required' => false,
                          'type' => 'integer',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        6 => 
        array (
          'name' => 'Transforms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Transform 相关配置',
            'items' => 
            array (
              'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
              'properties' => 
              array (
                'Arn' => 
                array (
                  'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
                  'example' => 'acs:fc:cn-hangzhou:*****:services/demo-service.LATEST/functions/demo-func',
                  'required' => false,
                  'type' => 'string',
                ),
              ),
              'required' => false,
              'type' => 'object',
            ),
            'required' => false,
            'type' => 'array',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'example' => 'The name [xxxx] of event streaming in request is already exist!',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'example' => '0FDD73AA-7A2D-5BD4-B4C0-88AFEBF5F0F5',
                'type' => 'string',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The name [xxxx] of event streaming in request is already exist!\\",\\n  \\"RequestId\\": \\"0FDD73AA-7A2D-5BD4-B4C0-88AFEBF5F0F5\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '修改一个事件流的基础信息、事件源信息、事件过滤模式或事件目标信息。',
      'title' => '修改一个事件流',
    ),
    'CreateEventStreaming' => 
    array (
      'summary' => '创建一个事件流。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '154145',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeUWT8SO',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventStreamingName',
          'in' => 'formData',
          'allowEmptyValue' => false,
          'schema' => 
          array (
            'description' => '事件流的名称。',
            'example' => 'myeventstreaming',
            'required' => true,
            'title' => '名称',
            'type' => 'string',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件流的描述。',
            'example' => 'rocketmq2mns',
            'required' => false,
            'title' => '描述',
            'type' => 'string',
          ),
        ),
        2 => 
        array (
          'name' => 'FilterPattern',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件过滤规则，如果不指定表示匹配全部事件。',
            'example' => '无',
            'required' => true,
            'title' => '过滤模式',
            'type' => 'string',
          ),
        ),
        3 => 
        array (
          'name' => 'Source',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '事件提供方。必须选择一种Source，且最多只能选择一种Source进行填选。',
            'properties' => 
            array (
              'SourceMNSParameters' => 
              array (
                'description' => 'Source MNS 参数',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域id。',
                    'example' => 'cn-beijing',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'QueueName' => 
                  array (
                    'description' => '队列名称',
                    'example' => 'queue_api_1642474203601',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'IsBase64Decode' => 
                  array (
                    'description' => '是否开启Base64编码。默认为true。',
                    'example' => 'true',
                    'required' => false,
                    'type' => 'boolean',
                  ),
                ),
                'required' => false,
                'title' => 'Source MNS 参数',
                'type' => 'object',
              ),
              'SourceRabbitMQParameters' => 
              array (
                'description' => 'Source RabbitmQ源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域id，您可以调用[describeregions](~~62010~~)查询。',
                    'example' => 'cn-hangzhou',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的实例ID。',
                    'example' => 'gtm-cn-k2c2yfg****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VirtualHostName' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                    'example' => 'eb-connect',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'QueueName' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的Queue的名称。',
                    'example' => 'demo',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'title' => 'Source RabbitmQ源',
                'type' => 'object',
              ),
              'SourceKafkaParameters' => 
              array (
                'description' => 'Source Kafka源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-hangzhou',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'example' => 'r-8vb64581862c****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => 'Topic名称。',
                    'example' => 'popvip_center_robot_order',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConsumerGroup' => 
                  array (
                    'description' => '订阅该Topic的消费者所对应的Group ID。',
                    'example' => 'DEFAULT_GROUP',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'OffsetReset' => 
                  array (
                    'description' => '偏移量。',
                    'example' => 'latest',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Network' => 
                  array (
                    'description' => '网络配置 ：默认值Default，VPC网络是PublicNetwork。',
                    'example' => 'Default',
                    'required' => false,
                    'type' => 'string',
                    'enum' => 
                    array (
                      0 => 'PublicNetwork',
                      1 => 'Default',
                    ),
                  ),
                  'VpcId' => 
                  array (
                    'description' => 'VPC ID。',
                    'example' => 'vpc-8vblalsi0vbhizr77****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'description' => '虚拟交换机ID。',
                    'example' => 'vsw-bp179l3llg3jjxwrq72****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '安全组ID。',
                    'example' => 'sg-bp1iv19sp1msc7zot4****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ValueDataType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'title' => 'Source Kafka源',
                'type' => 'object',
              ),
              'SourceRocketMQParameters' => 
              array (
                'description' => 'Source RocketMQ源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-qingdao',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '消息队列RocketMQ版的实例所属地域。',
                    'example' => 'default_C56C36026****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息服务的主题。',
                    'example' => 'Topic_publicRule_api_1667273421288',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Tag' => 
                  array (
                    'description' => '消息的过滤标签。',
                    'example' => 'test',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Offset' => 
                  array (
                    'description' => '消息的消费位点。取值说明如下：
- CONSUME_FROM_LAST_OFFSET：从最新位点开始消费。
- CONSUME_FROM_FIRST_OFFSET：从最早位点开始消费。
- CONSUME_FROM_TIMESTAMP：从指定时间点的位点开始消费。

默认值：CONSUME_FROM_LAST_OFFSET。',
                    'example' => 'CONSUMEFROMLAST_OFFSET',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'GroupID' => 
                  array (
                    'description' => '消息队列RocketMQ版的Group ID。',
                    'example' => 'GID_group1',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Timestamp' => 
                  array (
                    'description' => '时间戳。仅当参数Offset取值为CONSUME_FROM_TIMESTAMP时，该参数有效。',
                    'example' => '1670656652009',
                    'format' => 'int64',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => '实例类型。',
                    'example' => '2',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceEndpoint' => 
                  array (
                    'description' => '实例接入点。',
                    'example' => 'reg****-vpc.cn-zhangjiakou.aliyuncs.com',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceUsername' => 
                  array (
                    'description' => '实例用户名。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstancePassword' => 
                  array (
                    'description' => '实例密码。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Network' => 
                  array (
                    'description' => '网络类型：PublicNetwork,PrivateNetwork。',
                    'example' => 'PrivateNetwork',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'FilterType' => 
                  array (
                    'description' => '消息过滤类型。',
                    'example' => 'Tag',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'FilterSql' => 
                  array (
                    'description' => 'sql过滤语句。',
                    'example' => 'index > 10',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'AuthType' => 
                  array (
                    'description' => '鉴权类型。',
                    'example' => 'ACL',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VpcId' => 
                  array (
                    'description' => '跨境任务VPC ID。',
                    'example' => 'vpc-m5e3sv4b12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'description' => '跨境任务VSwitchIds。',
                    'example' => 'vsw-m5ev8asdc6h12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '跨境任务安全组。',
                    'example' => 'sg-m5edtu24f12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceVpcId' => 
                  array (
                    'description' => '实例VPC信息。',
                    'example' => 'vpc-m5e3sv4b12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceVSwitchIds' => 
                  array (
                    'description' => '实例交换机信息。',
                    'example' => 'vsw-m5ev8asdc6h123456****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceSecurityGroupId' => 
                  array (
                    'description' => '实例安全组信息。',
                    'example' => 'sg-m5edtu24f12345****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceNetwork' => 
                  array (
                    'description' => '实例网络信息：
- PublicNetwork
- PrivateNetwork',
                    'example' => 'PublicNetwork',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'BodyDataType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'title' => 'Source RocketMQ源',
                'type' => 'object',
              ),
              'SourceMQTTParameters' => 
              array (
                'description' => 'Source MQTT源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'description' => '地域ID。',
                    'example' => 'cn-shenzhen',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'example' => 'r-bp1b5ncun5lqer****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息的Topic。',
                    'example' => 'CANAL_VICUTU_UAT',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'BodyDataType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceDTSParameters' => 
              array (
                'description' => 'Source DTS源',
                'properties' => 
                array (
                  'TaskId' => 
                  array (
                    'description' => '任务id。',
                    'example' => 'f86e5814-b223-482c-b768-3b873297****',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'BrokerUrl' => 
                  array (
                    'description' => '数据订阅通道的网络地址及端口号信息。',
                    'example' => '无',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'description' => '数据订阅通道的订阅Topic。',
                    'example' => 'LTC_CACHE_PRD',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Sid' => 
                  array (
                    'description' => '消费组ID。',
                    'example' => 'HD3',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Username' => 
                  array (
                    'description' => '消费组的账号。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Password' => 
                  array (
                    'description' => '消费组的账号密码。',
                    'example' => 'admin',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'InitCheckPoint' => 
                  array (
                    'description' => '消费位点，即SDK客户端消费第一条数据的时间戳，格式为Unix时间戳。',
                    'example' => '1620962769',
                    'format' => 'int64',
                    'required' => false,
                    'type' => 'integer',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceSLSParameters' => 
              array (
                'description' => 'Source SLS源',
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'description' => '日志服务SLS的日志项目。',
                    'example' => 'test',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'LogStore' => 
                  array (
                    'description' => '日志服务SLS的日志库。',
                    'example' => 'sas-log',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConsumePosition' => 
                  array (
                    'description' => '起始消费位点，可以选择最早或最新位点，分别对应“begin”，“end”，也可以从指定时间开始消费，以秒为单位。',
                    'example' => 'end',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                    'example' => 'testRole',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourcePrometheusParameters' => 
              array (
                'description' => 'Source Prometheus 事件源',
                'properties' => 
                array (
                  'RegionId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ClusterId' => 
                  array (
                    'description' => '集群id',
                    'example' => 'c83555068b6******ad213f565f209',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'DataType' => 
                  array (
                    'description' => '数据类型',
                    'example' => 'json',
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Labels' => 
                  array (
                    'description' => '标签',
                    'example' => '__name__=.*',
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceCustomizedKafkaParameters' => 
              array (
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceCustomizedKafkaConnectorParameters' => 
              array (
                'properties' => 
                array (
                  'ConnectorPackageUrl' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'WorkerParameters' => 
                  array (
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ConnectorParameters' => 
                  array (
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Config' => 
                      array (
                        'required' => false,
                        'type' => 'object',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SourceApacheKafkaParameters' => 
              array (
                'properties' => 
                array (
                  'Bootstraps' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'Topic' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConsumerGroup' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'OffsetReset' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ValueDataType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VpcId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'NetworkType' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SecurityProtocol' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SaslMechanism' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SaslUser' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'SaslPassword' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
            ),
            'required' => true,
            'title' => '源',
            'type' => 'object',
          ),
        ),
        4 => 
        array (
          'name' => 'Sink',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '事件目标。必须选择一种Sink，且最多只能选择一种Sink进行填选。',
            'properties' => 
            array (
              'SinkMNSParameters' => 
              array (
                'description' => 'MNS事件目标',
                'properties' => 
                array (
                  'QueueName' => 
                  array (
                    'description' => '目标服务类型为消息服务MNS。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息服务MNS的Queue的名称。',
                        'example' => 'MyQueue',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'IsBase64Encode' => 
                  array (
                    'description' => '是否开启Base64编码。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '开启Base64编码。',
                        'example' => 'true',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '事件转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '事件源名称',
                'type' => 'object',
              ),
              'SinkRabbitMQParameters' => 
              array (
                'description' => 'Sink Rabbitmq的参数',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '目标服务类型为消息队列RabbitMQ版。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RabbitMQ版的实例ID。',
                        'example' => 'a5ff91ad4f3f24947887fe184fc2****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VirtualHostName' => 
                  array (
                    'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RabbitMQ版实例的Vhost的名称。',
                        'example' => 'rabbit-host',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'TargetType' => 
                  array (
                    'description' => '目标类型。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '目标类型。取值说明如下：
- Exchange：Exchange模式。
- Queue：Queue模式。',
                        'example' => 'Exchange/Queue',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Exchange' => 
                  array (
                    'description' => 'Exchange模式。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RabbitMQ版实例的Exchange的名称。',
                        'example' => 'a_exchange',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoutingKey' => 
                  array (
                    'description' => '消息的路由规则。
仅当参数TargetType配置为Exchange时，需配置此参数。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息的路由规则。',
                        'example' => 'housekeeping',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'QueueName' => 
                  array (
                    'description' => 'Queue模式。
仅当参数TargetType配置为Queue时，需配置此参数。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例的Queue的名称。',
                        'example' => 'MyQueue',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'MessageId' => 
                  array (
                    'description' => '消息ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Properties' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '是否新增',
                'type' => 'object',
              ),
              'SinkKafkaParameters' => 
              array (
                'description' => 'Sink kafak 参数',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '目标服务类型为消息队列Kafka版。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例ID。',
                        'example' => 'Defaut_1283278472_s****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => '主题名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '主题的名称。',
                        'example' => 'test',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Acks' => 
                  array (
                    'description' => '写入Kafka确认模式：
- acks=0：无需服务端的Response、性能较高、丢数据风险较大。
- acks=1：服务端主节点写成功即返回Response、性能中等、丢数据风险中等、主节点宕机可能导致数据丢失；
- acks=all：服务端主节点写成功且备节点同步成功才返回Response、性能较差、数据较为安全、主节点和备节点都宕机才会导致数据丢失。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '写入Kafka确认模式：
- acks=0：无需服务端的Response、性能较高、丢数据风险较大。
- acks=1：服务端主节点写成功即返回Response、性能中等、丢数据风险中等、主节点宕机可能导致数据丢失；
- acks=all：服务端主节点写成功且备节点同步成功才返回Response、性能较差、数据较为安全、主节点和备节点都宕机才会导致数据丢失。',
                        'example' => '1',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Key' => 
                  array (
                    'description' => '消息键。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息键。',
                        'example' => 'key',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Value' => 
                  array (
                    'description' => '消息体。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '描述信息',
                'type' => 'object',
              ),
              'SinkFcParameters' => 
              array (
                'description' => '函数目标。',
                'properties' => 
                array (
                  'ServiceName' => 
                  array (
                    'description' => '服务名。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '服务名。',
                        'example' => 'myService',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'FunctionName' => 
                  array (
                    'description' => '函数名。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '函数名。',
                        'example' => 'myFunction',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Concurrency' => 
                  array (
                    'description' => '投递并发度，最小1。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '投递并发度，最小1。',
                        'example' => '1',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Qualifier' => 
                  array (
                    'description' => '服务版本。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '服务版本。',
                        'example' => 'LATEST',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'InvocationType' => 
                  array (
                    'description' => '同步或则异步。
Sync：同步。
Async：异步。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '同步或则异步。
Sync：同步。
Async：异步。',
                        'example' => 'Async',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '发送给函数的内容体。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '函数目标',
                'type' => 'object',
              ),
              'SinkRocketMQParameters' => 
              array (
                'description' => 'Sink RocketMQ Parameters',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '目标服务类型为消息队列RocketMQ版。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RocketMQ版的实例ID。',
                        'example' => 'MQ_INST_164901546557****_BAAN****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息队列RocketMQ版实例的Topic。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '消息队列RocketMQ版实例的Topic名称。',
                        'example' => 'Mytopic',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Properties' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Keys' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Tags' => 
                  array (
                    'description' => '过滤属性。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
  "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => '实例类型。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例类型。',
                        'example' => '2',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'InstanceEndpoint' => 
                  array (
                    'description' => '实例接入点。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例接入点。',
                        'example' => 'vbr-8vbsvkkbpf3vb0zef****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'InstanceUsername' => 
                  array (
                    'description' => '实例用户名。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例用户名。',
                        'example' => 'admin
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'InstancePassword' => 
                  array (
                    'description' => '实例密码。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '实例密码。',
                        'example' => 'admin',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VpcId' => 
                  array (
                    'description' => 'VPC的ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'VPC的ID。',
                        'example' => 'vbr-8vb835n3zf9shwlvb****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '事件转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VSwitchIds' => 
                  array (
                    'description' => '交换机ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '交换机ID。',
                        'example' => 'vbr-8vb835n3zf9shwl****mp
',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '安全组ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '安全组ID。',
                        'example' => 'b4bf375515f6440f942e3a20c33d****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Network' => 
                  array (
                    'description' => '网络类型。           
- PublicNetwork
- PrivateNetwork',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '网络类型。           
- PublicNetwork
- PrivateNetwork',
                        'example' => 'PublicNetwork',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'title' => '事件源类型',
                'type' => 'object',
              ),
              'SinkSLSParameters' => 
              array (
                'description' => 'Sink SLS Parameters',
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'description' => '日志服务SLS的日志项目。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '日志服务SLS的日志项目。',
                        'example' => 'test-project',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'LogStore' => 
                  array (
                    'description' => '日志服务SLS的日志库。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '日志服务SLS的日志库。',
                        'example' => '	test-logstore',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => '日志所在的Topic，对应SLS 保留字段“__topic__”。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '日志所在的Topic，对应SLS 保留字段“__topic__”。',
                        'example' => 'testTopic',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => '发送给SLS的内容。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '转换前的值。',
                        'example' => '{
      "key": "value"
}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => 'The value of ${key} is ${value}!
',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '授权事件总线EventBridge使用此角色读取SLS日志内容时，需满足条件：在RAM控制台创建服务所使用的角色时，需要选择“阿里云服务”，并且“受信服务”需要选择“事件总线”。',
                        'example' => 'testRole',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ContentType' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ContentSchema' => 
                  array (
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkDataHubParameters' => 
              array (
                'description' => 'Sink DataHub 参数',
                'properties' => 
                array (
                  'Project' => 
                  array (
                    'description' => 'DataHub项目名。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'DataHub项目名。',
                        'example' => 'demo-project',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Topic' => 
                  array (
                    'description' => 'DataHub Topic名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'DataHub Topic名称。',
                        'example' => 'demo-topic',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'TopicType' => 
                  array (
                    'description' => 'topic 类型。                     
- TUPLE
- BLOB',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'topic 类型。                     
- TUPLE
- BLOB',
                        'example' => 'TUPLE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'TopicSchema' => 
                  array (
                    'description' => 'TUBLE类型，topic内容模式。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'TUBLE类型，topic内容模式。',
                        'example' => '{"k1":"value1","k2":"value2"}',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'TEMPLATE',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '{"k1":"${k1}","k2":"${k2}"}',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Body' => 
                  array (
                    'description' => 'BLOB类型，Record内容模板。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'BLOB类型，Record内容模板。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。',
                        'example' => 'ORIGINAL',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '任务角色名。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '任务角色名称。',
                        'example' => 'test-role',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkFnfParameters' => 
              array (
                'description' => 'Sink Fnf 参数',
                'properties' => 
                array (
                  'FlowName' => 
                  array (
                    'description' => '流程名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '流程名称。',
                        'example' => 'test-streaming-fnf',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'ExecutionName' => 
                  array (
                    'description' => '执行名称。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '执行名称。',
                        'example' => '123',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Input' => 
                  array (
                    'description' => '执行输入信息',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '执行输入信息',
                        'example' => '123',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'RoleName' => 
                  array (
                    'description' => '角色配置',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '角色配置',
                        'example' => 'Al****FNF-x****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkPrometheusParameters' => 
              array (
                'description' => 'Sink Prometheus 参数',
                'properties' => 
                array (
                  'URL' => 
                  array (
                    'description' => 'Prometheus Remote Write URL 地址',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'Prometheus Remote Write URL 地址',
                        'example' => 'https://cn-hangzhou.arms.aliyuncs.com/prometheus/167275****/c5b7faeb2e8994641*****d5c559f/cn-hangzhou/api/v3/write',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'AuthorizationType' => 
                  array (
                    'description' => '鉴权方式',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '鉴权方式',
                        'example' => 'BASIC_AUTH',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Username' => 
                  array (
                    'description' => '用户名',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '用户名',
                        'example' => '****admin',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Password' => 
                  array (
                    'description' => '密码',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '密码',
                        'example' => '*****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'Data' => 
                  array (
                    'description' => '指标内容',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '指标内容',
                        'example' => '$.data',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为JSAONPATH。',
                        'example' => 'JSAONPATH',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '模板样式。',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'NetworkType' => 
                  array (
                    'description' => '网络类型',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '网络类型',
                        'example' => 'PrivateNetwork',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VpcId' => 
                  array (
                    'description' => 'vpc的Id',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => 'vpc的Id',
                        'example' => 'i-2ze7u5i17mbqtx1p****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'VSwitchId' => 
                  array (
                    'description' => '交换机Id',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '交换机Id',
                        'example' => 'vsw-dwaafds****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'description' => '安全组ID。',
                    'properties' => 
                    array (
                      'Value' => 
                      array (
                        'description' => '安全组ID。',
                        'example' => 'sg-mw43*****',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Form' => 
                      array (
                        'description' => '转换的格式。默认为CONSTANT。',
                        'example' => 'CONSTANT',
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Template' => 
                      array (
                        'description' => '无',
                        'example' => '无',
                        'required' => false,
                        'type' => 'string',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkCustomizedKafkaParameters' => 
              array (
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'SinkCustomizedKafkaConnectorParameters' => 
              array (
                'properties' => 
                array (
                  'ConnectorPackageUrl' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'ConnectorParameters' => 
                  array (
                    'properties' => 
                    array (
                      'Name' => 
                      array (
                        'required' => false,
                        'type' => 'string',
                      ),
                      'Config' => 
                      array (
                        'required' => false,
                        'type' => 'object',
                      ),
                    ),
                    'required' => false,
                    'type' => 'object',
                  ),
                  'WorkerParameters' => 
                  array (
                    'required' => false,
                    'type' => 'object',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
            ),
            'required' => true,
            'title' => '事件源名称',
            'type' => 'object',
          ),
        ),
        5 => 
        array (
          'name' => 'RunOptions',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '运行环境参数。',
            'properties' => 
            array (
              'MaximumTasks' => 
              array (
                'description' => '并发数。',
                'example' => '2',
                'format' => 'int64',
                'required' => false,
                'title' => '并发数',
                'type' => 'integer',
              ),
              'ErrorsTolerance' => 
              array (
                'description' => '异常容忍策略：
- NONE：不容忍异常。
- ALL：容忍所有异常。',
                'example' => 'ALL',
                'required' => false,
                'title' => '异常容忍策略：NONE（不容忍异常）、ALL（容忍所有异常）',
                'type' => 'string',
              ),
              'RetryStrategy' => 
              array (
                'description' => '事件推送失败时的重试策略。',
                'properties' => 
                array (
                  'PushRetryStrategy' => 
                  array (
                    'description' => '重试策略：
- BACKOFF_RETRY：退避重试。
- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                    'example' => 'BACKOFF_RETRY',
                    'required' => false,
                    'title' => '重试策略：BACKOFF_RETRY（退避重试）和EXPONENTIAL_DECAY_RETRY（指数衰减重试）',
                    'type' => 'string',
                  ),
                  'MaximumEventAgeInSeconds' => 
                  array (
                    'description' => '最大重试时间。',
                    'example' => '512',
                    'format' => 'int64',
                    'required' => false,
                    'title' => '最大重试时间',
                    'type' => 'integer',
                  ),
                  'MaximumRetryAttempts' => 
                  array (
                    'description' => '最大重试次数。',
                    'example' => '2',
                    'format' => 'int64',
                    'required' => false,
                    'title' => '最大重试次数',
                    'type' => 'integer',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'DeadLetterQueue' => 
              array (
                'description' => '是否启用死信队列。默认不启用死信队列，超过重试策略后的消息将被丢弃。',
                'properties' => 
                array (
                  'Arn' => 
                  array (
                    'description' => '死信队列ARN。',
                    'example' => 'acs:ram::131733464781****:role/rdstoecsassumekms',
                    'required' => false,
                    'title' => '死信队列ARN',
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'BatchWindow' => 
              array (
                'description' => '攒批窗口。',
                'properties' => 
                array (
                  'CountBasedWindow' => 
                  array (
                    'description' => '窗口中最大可容纳的事件数量。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                    'example' => '100',
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'TimeBasedWindow' => 
                  array (
                    'description' => '窗口中最大可容纳的时间范围内的事件（单位秒）。当达到此阈值，会触发窗口内的数据往下游推送。当存在多个窗口时，有一个窗口满足即触发。',
                    'example' => '10',
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'ResourceSpec' => 
              array (
                'properties' => 
                array (
                  'Resources' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'Value' => 
                        array (
                          'format' => 'int32',
                          'required' => false,
                          'type' => 'integer',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'LogDelivery' => 
              array (
                'properties' => 
                array (
                  'SLSLogParameters' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'ProjectName' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'LogstoreName' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                  'KafkaLogParameters' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'Endpoint' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'InstanceId' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'Topic' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'ScaledObject' => 
              array (
                'properties' => 
                array (
                  'MinReplicaCount' => 
                  array (
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'MaxReplicaCount' => 
                  array (
                    'format' => 'int32',
                    'required' => false,
                    'type' => 'integer',
                  ),
                  'Triggers' => 
                  array (
                    'items' => 
                    array (
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'required' => false,
                          'type' => 'string',
                        ),
                        'Metadata' => 
                        array (
                          'properties' => 
                          array (
                            'Type' => 
                            array (
                              'required' => false,
                              'type' => 'string',
                            ),
                            'Value' => 
                            array (
                              'format' => 'int32',
                              'required' => false,
                              'type' => 'integer',
                            ),
                          ),
                          'required' => false,
                          'type' => 'object',
                        ),
                      ),
                      'required' => false,
                      'type' => 'object',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
              'RoleName' => 
              array (
                'required' => false,
                'type' => 'string',
              ),
              'Network' => 
              array (
                'properties' => 
                array (
                  'VpcId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                  'VSwitchIds' => 
                  array (
                    'items' => 
                    array (
                      'required' => false,
                      'type' => 'string',
                    ),
                    'required' => false,
                    'type' => 'array',
                  ),
                  'SecurityGroupId' => 
                  array (
                    'required' => false,
                    'type' => 'string',
                  ),
                ),
                'required' => false,
                'type' => 'object',
              ),
            ),
            'required' => false,
            'type' => 'object',
          ),
        ),
        6 => 
        array (
          'name' => 'Transforms',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Transform 相关配置',
            'items' => 
            array (
              'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
              'properties' => 
              array (
                'Arn' => 
                array (
                  'description' => '云产品的 ARN，比如函数计算中函数的 ARN',
                  'example' => 'acs:fc:cn-hangzhou:*****:services/demo-service.LATEST/functions/demo-func',
                  'required' => false,
                  'type' => 'string',
                ),
              ),
              'required' => false,
              'type' => 'object',
            ),
            'required' => false,
            'type' => 'array',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'properties' => 
            array (
              'Message' => 
              array (
                'description' => '错误信息。',
                'example' => 'The name [xxxx] of event streaming in request is already exist!',
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'example' => 'B896B484-F16D-59DE-9E23-DD0E5C36****',
                'type' => 'string',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'properties' => 
                array (
                  'EventStreamingARN' => 
                  array (
                    'description' => '事件流在阿里云上的统一资源标识（ARN）。',
                    'example' => 'acs:eventbridge:cn-hangzhou:164901546557****:eventstreaming/myeventstreaming',
                    'type' => 'string',
                  ),
                ),
                'type' => 'object',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：
- Success：表示成功。                                
- 其它：表示错误码。错误码详情，请参见错误码。',
                'example' => 'Success',
                'type' => 'string',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'example' => 'true',
                'type' => 'boolean',
              ),
            ),
            'type' => 'object',
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"The name [xxxx] of event streaming in request is already exist!\\",\\n  \\"RequestId\\": \\"B896B484-F16D-59DE-9E23-DD0E5C36****\\",\\n  \\"Data\\": {\\n    \\"EventStreamingARN\\": \\"acs:eventbridge:cn-hangzhou:164901546557****:eventstreaming/myeventstreaming\\"\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'description' => '创建一个事件流。',
      'title' => '创建一个事件流',
    ),
    'UpdateApiDestination' => 
    array (
      'summary' => '更新API 端点。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '163678',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API 端点描述信息，最大长度255个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
            'maxLength' => 255,
          ),
        ),
        1 => 
        array (
          'name' => 'ApiDestinationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要更新的API 端点名称，最大长度127个字符。最小长度2个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'api-destination-name',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        2 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接配置名称。最大长度127个字符。最小长度2个字符。

提示 ：
需要先调用Connection接口创建连接配置，ConnectionName填写已存在的连接名称',
            'type' => 'string',
            'required' => false,
            'example' => 'connection-name',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        3 => 
        array (
          'name' => 'HttpApiParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'API 端点的配置信息',
            'type' => 'object',
            'properties' => 
            array (
              'Endpoint' => 
              array (
                'description' => 'API 端点的接入点地址。最大长度127个字符。',
                'type' => 'string',
                'required' => false,
                'example' => 'http://127.0.0.1:8001/api',
                'maxLength' => 127,
              ),
              'Method' => 
              array (
                'description' => 'HTTP请求方法。

- GET
- POST
- HEAD
- DELETE
- PUT
- PATCH',
                'type' => 'string',
                'required' => false,
                'example' => 'POST',
              ),
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID',
                'type' => 'string',
                'example' => '382E6272-8E9C-5681-AC96-A8AF0BFAC1A5',
              ),
              'Message' => 
              array (
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'ApiDestinationName' => 
              array (
                'description' => 'API端点名称。',
                'type' => 'string',
                'example' => 'api-destination-name',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ApiDestinationNotExist',
            'errorMessage' => 'The api-destination not existed!',
          ),
          2 => 
          array (
            'errorCode' => 'HttpApiParametersIsNull',
            'errorMessage' => 'HttpApiParameters is null!',
          ),
          3 => 
          array (
            'errorCode' => 'EndpointIsBlank',
            'errorMessage' => 'Endpoint is blank!',
          ),
          4 => 
          array (
            'errorCode' => 'Method',
            'errorMessage' => 'Method is blank!',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointLengthExceed',
            'errorMessage' => 'Endpoint length cannot exceed 127!',
          ),
          6 => 
          array (
            'errorCode' => 'ConnectionNotExist',
            'errorMessage' => 'The Connection not existed!',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"382E6272-8E9C-5681-AC96-A8AF0BFAC1A5\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"ApiDestinationName\\": \\"api-destination-name\\"\\n}","type":"json"}]',
      'title' => '更新API 端点',
      'description' => '用于更新API 端点相关配置信息。',
    ),
    'CreateApiDestination' => 
    array (
      'summary' => '创建API端点信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '163676',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiDestinationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API名称，最大长度127个字符。最小长度2个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'api-destination-name',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接配置名称。最大长度127个字符。最小长度2个字符。

<notice>需要先调用Connection接口创建连接配置，ConnectionName填写已存在的连接名称。></notice>',
            'type' => 'string',
            'required' => true,
            'example' => 'connection-name',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API描述，不超过255个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '连接配置描述信息',
            'maxLength' => 255,
          ),
        ),
        3 => 
        array (
          'name' => 'HttpApiParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'API端点的配置信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Endpoint' => 
              array (
                'description' => 'API端点的接入点地址。最大长度127个字符。',
                'type' => 'string',
                'required' => true,
                'example' => 'http://127.0.0.1:8001/api
',
                'maxLength' => 127,
              ),
              'Method' => 
              array (
                'description' => 'HTTP请求方法。

- GET
- POST
- HEAD
- DELETE
- PUT
- PATCH',
                'type' => 'string',
                'required' => true,
                'example' => 'POST',
              ),
            ),
            'required' => true,
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
                'example' => '5DAF96FB-A4B6-548C-B999-0BFDCB22****',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Date' => 
              array (
                'description' => '返回创建API端点成功数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApiDestinationName' => 
                  array (
                    'description' => 'API 端点名称。',
                    'type' => 'string',
                    'example' => 'ApiDestinationName',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'RequestParameterInvalid',
            'errorMessage' => 'The ApiDestination name is invalid! Only letters a~z or A~Z, numbers 0~9, underscore (_) and dash (-) are supported.',
          ),
          2 => 
          array (
            'errorCode' => 'ApiDestinationAlreadyExist',
            'errorMessage' => 'The api-destination already existed!',
          ),
          3 => 
          array (
            'errorCode' => 'ConnectionNotExist',
            'errorMessage' => 'The Connection not existed!',
          ),
          4 => 
          array (
            'errorCode' => 'HttpApiParametersIsNull',
            'errorMessage' => 'HttpApiParameters is null!',
          ),
          5 => 
          array (
            'errorCode' => 'EndpointIsBlank',
            'errorMessage' => 'Endpoint is blank!',
          ),
          6 => 
          array (
            'errorCode' => 'Method',
            'errorMessage' => 'Method is blank!',
          ),
          7 => 
          array (
            'errorCode' => 'EndpointLengthExceed',
            'errorMessage' => 'Endpoint length cannot exceed 127!',
          ),
          8 => 
          array (
            'errorCode' => 'ApiDestinationCountExceedLimit',
            'errorMessage' => 'The current count of api-destination is [{0}], which will exceed the limit quota.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5DAF96FB-A4B6-548C-B999-0BFDCB22****\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Date\\": {\\n    \\"ApiDestinationName\\": \\"ApiDestinationName\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建API端点信息',
      'description' => '用于创建API 端点信息。',
    ),
    'CreateConnection' => 
    array (
      'summary' => '创建连接配置信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '163691',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接配置名称。最大长度127个字符。最小长度2个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'connection-name',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接配置描述信息。最大长度255个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo',
            'maxLength' => 255,
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '网络配置的数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'NetworkType' => 
              array (
                'description' => '- 公网 ：PublicNetwork

- 专有网络 ：PrivateNetwork

><notice>选择专有网络时，VpcId、VswitcheId和SecurityGroupId必填。></notice>',
                'type' => 'string',
                'required' => true,
                'example' => 'PublicNetwork',
              ),
              'VpcId' => 
              array (
                'description' => '专有网络VPC的ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'eb-test/vpc-bp1symadadwnwg****',
              ),
              'VswitcheId' => 
              array (
                'description' => '交换机ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'vsw-bp1iu4x7aeradadown1og8,vsw-bp193sqmadadlaszpeq****',
              ),
              'SecurityGroupId' => 
              array (
                'description' => '安全组ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9****',
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'AuthParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '鉴权数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'AuthorizationType' => 
              array (
                'description' => '鉴权类型 ：

- BASIC：BASIC_AUTH。这种授权方式是浏览器遵守HTTP协议实现的基本授权方式，HTTP协议进行通信的过程中，HTTP协议定义了基本认证允许HTTP服务器对客户端进行用户身份证的方法。在请求头中添加 Authorization ：Basic空一格Base64加密（`用户名:密码`）固定格式。Username和Password是必填的。

- API KEY ：API_KEY_AUTH。固定的格式在请求头中添加Token ：Token值。ApiKeyName和ApiKeyValue是必填的。

- OAUTH ：OAUTH_AUTH。OAuth2.0是一种授权机制，正常情况，不使用OAuth2.0等授权机制的系统，客户端是可以直接访问资源服务器的资源的，为了用户安全访问数据，在访问中间添加了Access Token机制。客户端需要携带Access Token去访问受到保护的资源。所以OAuth2.0确保了资源不被恶意客户端访问，从而提高了系统的安全性。AuthorizationEndpoint、OAuthHttpParameters和HttpMethod是必填的。',
                'type' => 'string',
                'required' => false,
                'example' => 'BASIC_AUTH',
              ),
              'ApiKeyAuthParameters' => 
              array (
                'description' => 'API KEY的数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApiKeyName' => 
                  array (
                    'description' => 'Api key的key值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'Token',
                    'maxLength' => 127,
                  ),
                  'ApiKeyValue' => 
                  array (
                    'description' => 'Api key的value值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'adkjnakddh****',
                    'maxLength' => 127,
                  ),
                ),
                'required' => false,
              ),
              'BasicAuthParameters' => 
              array (
                'description' => 'Basic鉴权的数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'Password' => 
                  array (
                    'description' => 'basic鉴权的密码。',
                    'type' => 'string',
                    'required' => false,
                    'example' => '*******',
                    'maxLength' => 127,
                  ),
                  'Username' => 
                  array (
                    'description' => 'basic鉴权的用户名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'admin',
                    'maxLength' => 127,
                  ),
                ),
                'required' => false,
              ),
              'OAuthParameters' => 
              array (
                'description' => 'OAuth鉴权参数数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthorizationEndpoint' => 
                  array (
                    'description' => '授权的终端节点地址。最大长度127个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'http://localhost:8080/oauth/token',
                    'maxLength' => 127,
                  ),
                  'ClientParameters' => 
                  array (
                    'description' => '客户参数数据结构。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ClientID' => 
                      array (
                        'description' => '客户端的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ClientID',
                        'maxLength' => 127,
                      ),
                      'ClientSecret' => 
                      array (
                        'description' => '应用的客户端密钥secret。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Qo57Q~F249~S74GmNPA36pZJoJK4f4LY****',
                        'maxLength' => 127,
                      ),
                    ),
                    'required' => false,
                  ),
                  'HttpMethod' => 
                  array (
                    'description' => '探测类型的方法。取值：

- GET
- POST
- HEAD
- DELETE
- PUT
- PATCH',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'POST',
                  ),
                  'OAuthHttpParameters' => 
                  array (
                    'description' => 'Oauth鉴权的请求参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BodyParameters' => 
                      array (
                        'description' => 'body请求参数的数据结构列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'body请求参数的数据结构。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsValueSecret' => 
                            array (
                              'description' => '是否是鉴权。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'false',
                            ),
                            'Key' => 
                            array (
                              'description' => 'body请求参数的key。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'keyDemo',
                            ),
                            'Value' => 
                            array (
                              'description' => 'body请求参数的value。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'keyValue',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                      'HeaderParameters' => 
                      array (
                        'description' => '请求头的参数列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '请求头的参数数据结构。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsValueSecret' => 
                            array (
                              'description' => '是否是鉴权。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'false',
                            ),
                            'Key' => 
                            array (
                              'description' => '请求头的参数key。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'keyDemo',
                            ),
                            'Value' => 
                            array (
                              'description' => '请求头参数value。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'keyValue',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                      'QueryStringParameters' => 
                      array (
                        'description' => '请求路径参数的数据结构。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '请求路径参数的数据结构。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsValueSecret' => 
                            array (
                              'description' => '是否是鉴权。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'false',
                            ),
                            'Key' => 
                            array (
                              'description' => '请求路径参数key。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'keyDemo',
                            ),
                            'Value' => 
                            array (
                              'description' => '请求路径参数value。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'valueDemo',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '7DA60DED-CD36-5837-B848-C01A23D2****',
              ),
              'Message' => 
              array (
                'description' => '附加信息。取值说明如下：请求正常，返回success。                                 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConnectionName' => 
                  array (
                    'description' => '连接配置名称。',
                    'type' => 'string',
                    'example' => 'connection-demo',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ConnectionAlreadyExist',
            'errorMessage' => 'The Connection already existed!',
          ),
          2 => 
          array (
            'errorCode' => 'ConnectionCountExceedLimit',
            'errorMessage' => 'The current count of connection, which will exceed the limit quota.',
          ),
          3 => 
          array (
            'errorCode' => 'BasicRequiredParameterIsEmpty',
            'errorMessage' => 'Basic required parameters are empty, the required parameters are username and password!',
          ),
          4 => 
          array (
            'errorCode' => 'BasicUserNameLengthExceed',
            'errorMessage' => 'Basic username length cannot exceed 127!',
          ),
          5 => 
          array (
            'errorCode' => 'BasicPassWordLengthExceed',
            'errorMessage' => 'Basic password length cannot exceed 127!',
          ),
          6 => 
          array (
            'errorCode' => 'ApiKeyRequiredParameterIsEmpty',
            'errorMessage' => 'Api Key required parameters are empty, the required parameters are apiKeyName and apiKeyValue!',
          ),
          7 => 
          array (
            'errorCode' => 'ApiKeyNameLengthExceed',
            'errorMessage' => 'Api key name length cannot exceed 127!',
          ),
          8 => 
          array (
            'errorCode' => 'ApiKeyValueLengthExceed',
            'errorMessage' => 'Api key value length cannot exceed 127!',
          ),
          9 => 
          array (
            'errorCode' => 'OAuthRequiredParameterIsEmpty',
            'errorMessage' => 'OAuth required parameters are empty, the required parameters are authorizationEndpoint and httpMethod!',
          ),
          10 => 
          array (
            'errorCode' => 'AuthorizationEndpointLengthExceed',
            'errorMessage' => 'Authorization endpoint length cannot exceed 127!',
          ),
          11 => 
          array (
            'errorCode' => 'ClientIDLengthExceed',
            'errorMessage' => 'ClientID length cannot exceed 127!',
          ),
          12 => 
          array (
            'errorCode' => 'ClientSecretLengthExceed',
            'errorMessage' => 'ClientSecret length cannot exceed 127!',
          ),
          13 => 
          array (
            'errorCode' => 'OauthHttpParametersEmpty',
            'errorMessage' => 'OauthHttpParameters is Empty.',
          ),
          14 => 
          array (
            'errorCode' => 'SecretManagerAPICreateSecretNameFailed',
            'errorMessage' => 'Create secret manager api secret name failed',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7DA60DED-CD36-5837-B848-C01A23D2****\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Data\\": {\\n    \\"ConnectionName\\": \\"connection-demo\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建连接配置信息',
      'description' => '用于创建连接配置信息。',
    ),
    'DeleteApiDestination' => 
    array (
      'summary' => '删除API 端点。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '163683',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiDestinationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API 端点名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ApiDestinationName',
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
                'description' => '请求ID',
                'type' => 'string',
                'example' => '382E6272-8E9C-5681-AC96-A8AF0BFAC1A5',
              ),
              'Message' => 
              array (
                'description' => '附加信息。取值说明如下：请求正常，返回success。                                 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ApiDestinationNotExist',
            'errorMessage' => 'The api-destination not existed!',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"382E6272-8E9C-5681-AC96-A8AF0BFAC1A5\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => '删除API 端点',
      'description' => '用于删除指定API 端点。',
    ),
    'DeleteConnection' => 
    array (
      'summary' => '删除指定的连接配置信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '163693',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要删除的连接名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'connection-name',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '8EF25E37-1750-5D7A-BA56-F8AE081A69C8',
              ),
              'Message' => 
              array (
                'description' => '附加信息。取值说明如下：请求正常，返回success。                                 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ConnectionNotExist',
            'errorMessage' => 'The Connection not existed!',
          ),
          2 => 
          array (
            'errorCode' => 'ConnectionBoundApiDestination',
            'errorMessage' => 'The Connection has bound API Destination, deletion is not allowed.',
          ),
          3 => 
          array (
            'errorCode' => 'SecretManagerAPIDeleteSecretFailed',
            'errorMessage' => 'Delete secret manager api secret failed!',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8EF25E37-1750-5D7A-BA56-F8AE081A69C8\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\"\\n}","type":"json"}]',
      'title' => '删除指定的连接配置信息',
      'description' => '用于删除指定的连接配置信息。',
    ),
    'GetApiDestination' => 
    array (
      'summary' => '查询单个API 端点信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '163690',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiDestinationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API 端点名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'api-destination-name',
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
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'B896B484-F16D-59DE-9E23-DD0E5C361108',
              ),
              'Message' => 
              array (
                'description' => '附加信息。取值说明如下：请求正常，返回success。                                 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApiDestinationName' => 
                  array (
                    'description' => 'API 端点名称',
                    'type' => 'string',
                    'example' => 'demo',
                  ),
                  'ConnectionName' => 
                  array (
                    'description' => '连接配置名称',
                    'type' => 'string',
                    'example' => 'test-basic',
                  ),
                  'Description' => 
                  array (
                    'description' => 'API的描述信息。',
                    'type' => 'string',
                    'example' => 'demo',
                  ),
                  'HttpApiParameters' => 
                  array (
                    'description' => 'API 端点请求配置信息',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Endpoint' => 
                      array (
                        'description' => 'API 端点的接入点地址',
                        'type' => 'string',
                        'example' => 'http://127.0.0.1:8001/api
',
                      ),
                      'Method' => 
                      array (
                        'description' => 'HTTP请求方法。

- POST

- GET

- DELETE

- PUT

- HEAD

- TRACE

- PATCH',
                        'type' => 'string',
                        'example' => 'POST',
                      ),
                    ),
                  ),
                  'GmtCreate' => 
                  array (
                    'description' => '创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1649055710565',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ApiDestinationNotExist',
            'errorMessage' => 'The api-destination not existed!',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B896B484-F16D-59DE-9E23-DD0E5C361108\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Data\\": {\\n    \\"ApiDestinationName\\": \\"demo\\",\\n    \\"ConnectionName\\": \\"test-basic\\",\\n    \\"Description\\": \\"demo\\",\\n    \\"HttpApiParameters\\": {\\n      \\"Endpoint\\": \\"http://127.0.0.1:8001/api\\\\n\\",\\n      \\"Method\\": \\"POST\\"\\n    },\\n    \\"GmtCreate\\": 1649055710565\\n  }\\n}","type":"json"}]',
      'title' => '查询单个API 端点信息',
      'description' => '用于查询单个API 端点信息。',
    ),
    'GetConnection' => 
    array (
      'summary' => '查询单个连接配置信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '163694',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'connection-name',
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
                'description' => '返回的requestId',
                'type' => 'string',
                'example' => '34AD682D-5B91-5773-8132-AA38C130****',
              ),
              'Message' => 
              array (
                'description' => '接口请求返回的信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'HttpCode' => 
              array (
                'description' => 'HTTP状态码。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '200',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Connections' => 
                  array (
                    'description' => '连接配置信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '连接配置信息数据结构',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnectionName' => 
                        array (
                          'description' => '连接配置名称',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'Id' => 
                        array (
                          'description' => '数据源ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '5668',
                        ),
                        'Description' => 
                        array (
                          'description' => '连接配置描述信息',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1669648905',
                        ),
                        'NetworkParameters' => 
                        array (
                          'description' => '网络配置的数据结构',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'NetworkType' => 
                            array (
                              'description' => '- 公网 ：PublicNetwork

- 专有网络 ：PrivateNetwork',
                              'type' => 'string',
                              'example' => 'PublicNetwork',
                            ),
                            'VpcId' => 
                            array (
                              'description' => '专有网络VPC的ID',
                              'type' => 'string',
                              'example' => 'eb-test/vpc-bp1symadadwnwg****',
                            ),
                            'VswitcheId' => 
                            array (
                              'description' => '交换机ID',
                              'type' => 'string',
                              'example' => 'vsw-bp1iu4x7aeradadown****,vsw-bp193sqmadadlaszpeq****',
                            ),
                            'SecurityGroupId' => 
                            array (
                              'description' => '安全组ID',
                              'type' => 'string',
                              'example' => 'eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9****',
                            ),
                          ),
                        ),
                        'AuthParameters' => 
                        array (
                          'description' => '权限数据结构',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AuthorizationType' => 
                            array (
                              'description' => '权限类型 ：

- BASIC：BASIC_AUTH

- API KEY ：API_KEY_AUTH

- OAUTH ：OAUTH_AUTH',
                              'type' => 'string',
                              'example' => 'BASIC_AUTH',
                            ),
                            'ApiKeyAuthParameters' => 
                            array (
                              'description' => 'API KEY 的数据结构',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ApiKeyName' => 
                                array (
                                  'description' => 'Api key 的key值',
                                  'type' => 'string',
                                  'example' => 'key',
                                ),
                                'ApiKeyValue' => 
                                array (
                                  'description' => 'Api key的value值',
                                  'type' => 'string',
                                  'example' => 'value',
                                ),
                              ),
                            ),
                            'BasicAuthParameters' => 
                            array (
                              'description' => 'Basic 权限的数据结构',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Password' => 
                                array (
                                  'description' => 'basic 鉴权的密码',
                                  'type' => 'string',
                                  'example' => '********',
                                ),
                                'Username' => 
                                array (
                                  'description' => 'basic 鉴权的用户名',
                                  'type' => 'string',
                                  'example' => 'admin',
                                ),
                              ),
                            ),
                            'OAuthParameters' => 
                            array (
                              'description' => 'OAuth请求参数数据结构',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'AuthorizationEndpoint' => 
                                array (
                                  'description' => 'OAuth获取token的请求地址',
                                  'type' => 'string',
                                  'example' => 'http://localhost:8080/oauth/token',
                                ),
                                'HttpMethod' => 
                                array (
                                  'description' => '探测类型的方法。取值：

- GET
- POST
- HEAD',
                                  'type' => 'string',
                                  'example' => 'POST',
                                ),
                                'ClientParameters' => 
                                array (
                                  'description' => '客户参数数据结构',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ClientID' => 
                                    array (
                                      'description' => '客户端的ID',
                                      'type' => 'string',
                                      'example' => 'ClientID',
                                    ),
                                    'ClientSecret' => 
                                    array (
                                      'description' => '应用的客户端密钥secret',
                                      'type' => 'string',
                                      'example' => 'Qo57Q~F249~S74GmNPA36pZJoJK4f4****',
                                    ),
                                  ),
                                ),
                                'OAuthHttpParameters' => 
                                array (
                                  'description' => 'Oauth鉴权的请求参数',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'BodyParameters' => 
                                    array (
                                      'description' => '请求参数的数据结构列表',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '请求参数的数据结构列表',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'IsValueSecret' => 
                                          array (
                                            'description' => '是否是鉴权',
                                            'type' => 'string',
                                            'example' => 'false',
                                          ),
                                          'Key' => 
                                          array (
                                            'description' => 'body请求参数的key',
                                            'type' => 'string',
                                            'example' => 'keyDemo',
                                          ),
                                          'Value' => 
                                          array (
                                            'description' => 'body请求参数的value',
                                            'type' => 'string',
                                            'example' => 'valueDemo',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'HeaderParameters' => 
                                    array (
                                      'description' => '请求头的参数列表',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '请求头的参数列表',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'IsValueSecret' => 
                                          array (
                                            'description' => '是否是鉴',
                                            'type' => 'string',
                                            'example' => 'false',
                                          ),
                                          'Key' => 
                                          array (
                                            'description' => '请求头参数key',
                                            'type' => 'string',
                                            'example' => 'keyDemo',
                                          ),
                                          'Value' => 
                                          array (
                                            'description' => '请求头的参数value',
                                            'type' => 'string',
                                            'example' => 'keyDemo',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'QueryStringParameters' => 
                                    array (
                                      'description' => '请求路径参数的数据结构',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '请求路径参数的数据结构',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'IsValueSecret' => 
                                          array (
                                            'description' => '是否是鉴',
                                            'type' => 'string',
                                            'example' => 'false',
                                          ),
                                          'Key' => 
                                          array (
                                            'description' => '请求路径参数key',
                                            'type' => 'string',
                                            'example' => 'keyDemo',
                                          ),
                                          'Value' => 
                                          array (
                                            'description' => '请求路径参数value',
                                            'type' => 'string',
                                            'example' => 'valueDemo',
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
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ConnectionNotExist',
            'errorMessage' => 'The Connection name not existed!',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"34AD682D-5B91-5773-8132-AA38C130****\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"HttpCode\\": 200,\\n  \\"Data\\": {\\n    \\"Connections\\": [\\n      {\\n        \\"ConnectionName\\": \\"demo\\",\\n        \\"Id\\": 5668,\\n        \\"Description\\": \\"demo\\",\\n        \\"GmtCreate\\": 1669648905,\\n        \\"NetworkParameters\\": {\\n          \\"NetworkType\\": \\"PublicNetwork\\",\\n          \\"VpcId\\": \\"eb-test/vpc-bp1symadadwnwg****\\",\\n          \\"VswitcheId\\": \\"vsw-bp1iu4x7aeradadown****,vsw-bp193sqmadadlaszpeq****\\",\\n          \\"SecurityGroupId\\": \\"eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9****\\"\\n        },\\n        \\"AuthParameters\\": {\\n          \\"AuthorizationType\\": \\"BASIC_AUTH\\",\\n          \\"ApiKeyAuthParameters\\": {\\n            \\"ApiKeyName\\": \\"key\\",\\n            \\"ApiKeyValue\\": \\"value\\"\\n          },\\n          \\"BasicAuthParameters\\": {\\n            \\"Password\\": \\"********\\",\\n            \\"Username\\": \\"admin\\"\\n          },\\n          \\"OAuthParameters\\": {\\n            \\"AuthorizationEndpoint\\": \\"http://localhost:8080/oauth/token\\",\\n            \\"HttpMethod\\": \\"POST\\",\\n            \\"ClientParameters\\": {\\n              \\"ClientID\\": \\"ClientID\\",\\n              \\"ClientSecret\\": \\"Qo57Q~F249~S74GmNPA36pZJoJK4f4****\\"\\n            },\\n            \\"OAuthHttpParameters\\": {\\n              \\"BodyParameters\\": [\\n                {\\n                  \\"IsValueSecret\\": \\"false\\",\\n                  \\"Key\\": \\"keyDemo\\",\\n                  \\"Value\\": \\"valueDemo\\"\\n                }\\n              ],\\n              \\"HeaderParameters\\": [\\n                {\\n                  \\"IsValueSecret\\": \\"false\\",\\n                  \\"Key\\": \\"keyDemo\\",\\n                  \\"Value\\": \\"keyDemo\\"\\n                }\\n              ],\\n              \\"QueryStringParameters\\": [\\n                {\\n                  \\"IsValueSecret\\": \\"false\\",\\n                  \\"Key\\": \\"keyDemo\\",\\n                  \\"Value\\": \\"valueDemo\\"\\n                }\\n              ]\\n            }\\n          }\\n        }\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询单个连接配置信息',
      'description' => '用于查询单个连接配置信息。',
    ),
    'ListApiDestinations' => 
    array (
      'summary' => '获取API 端点列表信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '163689',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ApiDestinationNamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API端点名称前缀。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'api-demo',
          ),
        ),
        1 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '连接配置名称。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'connection-name',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和nextToken搭配使用实现翻页能力。

默认值是10。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定MaxResults时，如果还有多余的返回值则会返回NextToken。

NextToken值默认是从0开始计算的，默认值是0。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
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
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '96D7C0AB-DCE5-5E82-96B8-4725E170****',
              ),
              'Message' => 
              array (
                'description' => '附加信息。取值说明如下：请求正常，返回success。                                 请求异常，返回具体异常错误码。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Data' => 
              array (
                'description' => '返回的结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApiDestinations' => 
                  array (
                    'description' => 'API端点结果集。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'API端点数据结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ApiDestinationName' => 
                        array (
                          'description' => 'API端点名称。',
                          'type' => 'string',
                          'example' => 'api-destination-2',
                        ),
                        'ConnectionName' => 
                        array (
                          'description' => '连接配置名称。',
                          'type' => 'string',
                          'example' => 'connection-name',
                        ),
                        'Description' => 
                        array (
                          'description' => '连接配置描述信息。',
                          'type' => 'string',
                          'example' => 'demo',
                        ),
                        'HttpApiParameters' => 
                        array (
                          'description' => 'API端点请求配置信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Endpoint' => 
                            array (
                              'description' => 'API端点的接入点地址。',
                              'type' => 'string',
                              'example' => 'http://127.0.0.1:8001/api',
                            ),
                            'Method' => 
                            array (
                              'description' => 'HTTP请求方法。

- POST

- GET

- DELETE

- PUT

- HEAD

- TRACE

- PATCH',
                              'type' => 'string',
                              'example' => 'POST',
                            ),
                          ),
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1665223213000',
                        ),
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '2',
                  ),
                  'MaxResults' => 
                  array (
                    'description' => '限定每次返回的最大条数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"96D7C0AB-DCE5-5E82-96B8-4725E170****\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Data\\": {\\n    \\"ApiDestinations\\": [\\n      {\\n        \\"ApiDestinationName\\": \\"api-destination-2\\",\\n        \\"ConnectionName\\": \\"connection-name\\",\\n        \\"Description\\": \\"demo\\",\\n        \\"HttpApiParameters\\": {\\n          \\"Endpoint\\": \\"http://127.0.0.1:8001/api\\",\\n          \\"Method\\": \\"POST\\"\\n        },\\n        \\"GmtCreate\\": 1665223213000\\n      }\\n    ],\\n    \\"NextToken\\": \\"1\\",\\n    \\"Total\\": 2,\\n    \\"MaxResults\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取API 端点列表',
      'description' => '用于获取API 端点列表信息。',
    ),
    'ListConnections' => 
    array (
      'summary' => '获取连接配置列表。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '163695',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectionNamePrefix',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '获取指定连接配置名称的参数，支持前缀匹配查询',
            'type' => 'string',
            'required' => false,
            'example' => 'connection-name',
          ),
        ),
        1 => 
        array (
          'name' => 'MaxResults',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数，可以和nextToken搭配使用实现翻页能力。

- 默认值是10',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '当指定MaxResults时，如果还有多余的返回值则会返回NextToken。

- NextToken值默认是从0开始计算的，默认值是0。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'E3619976-8714-5D88-BBA2-6983D798A8BB',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Data' => 
              array (
                'description' => '返回连接配置的列表信息',
                'type' => 'object',
                'properties' => 
                array (
                  'Connections' => 
                  array (
                    'description' => '返回连接配置的列表信息',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回的连接配置的数据结构',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ConnectionName' => 
                        array (
                          'description' => '连接配置名称',
                          'type' => 'string',
                          'example' => 'connection-name',
                        ),
                        'Description' => 
                        array (
                          'description' => '连接配置描述信息',
                          'type' => 'string',
                          'example' => '连接配置描述信息',
                        ),
                        'Id' => 
                        array (
                          'description' => '连接配置的id',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1141093',
                        ),
                        'GmtCreate' => 
                        array (
                          'description' => '创建数据源的时间戳',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1592838994234',
                        ),
                        'NetworkParameters' => 
                        array (
                          'description' => '网络配置的数据结构',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'NetworkType' => 
                            array (
                              'description' => '- 公网 ：PublicNetwork

- 专有网络 ：PrivateNetwork',
                              'type' => 'string',
                              'example' => 'PublicNetwork',
                            ),
                            'VpcId' => 
                            array (
                              'description' => '专有网络VPC的ID。',
                              'type' => 'string',
                              'example' => 'eb-test/vpc-bp1symadadwnwgmqud',
                            ),
                            'VswitcheId' => 
                            array (
                              'description' => '交换机id',
                              'type' => 'string',
                              'example' => 'vsw-bp1iu4x7aeradadown1og8,vsw-bp193sqmadadlaszpeqbt2c',
                            ),
                            'SecurityGroupId' => 
                            array (
                              'description' => '安全组ID。',
                              'type' => 'string',
                              'example' => 'eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9rtyb',
                            ),
                          ),
                        ),
                        'AuthParameters' => 
                        array (
                          'description' => '权限数据结构',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'AuthorizationType' => 
                            array (
                              'description' => '权限类型 ：

- BASIC：BASIC_AUTH

- API KEY ：API_KEY_AUTH

- OAUTH ：OAUTH_AUTH',
                              'type' => 'string',
                              'example' => 'BASIC_AUTH',
                            ),
                            'ApiKeyAuthParameters' => 
                            array (
                              'description' => 'API KEY 的数据结构',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ApiKeyName' => 
                                array (
                                  'description' => 'Api key 的key值',
                                  'type' => 'string',
                                  'example' => 'Token',
                                ),
                                'ApiKeyValue' => 
                                array (
                                  'description' => 'Api key的value值',
                                  'type' => 'string',
                                  'example' => 'asdkjnqkwejooa',
                                ),
                              ),
                            ),
                            'BasicAuthParameters' => 
                            array (
                              'description' => 'Basic 权限的数据结构',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'Password' => 
                                array (
                                  'description' => 'basic 鉴权的密码',
                                  'type' => 'string',
                                  'example' => 'admin',
                                ),
                                'Username' => 
                                array (
                                  'description' => 'basic 鉴权的用户名',
                                  'type' => 'string',
                                  'example' => 'admin',
                                ),
                              ),
                            ),
                            'OAuthParameters' => 
                            array (
                              'description' => 'OAuth请求参数数据结构',
                              'type' => 'object',
                              'properties' => 
                              array (
                                'AuthorizationEndpoint' => 
                                array (
                                  'description' => 'OAuth获取token的请求地址',
                                  'type' => 'string',
                                  'example' => 'http://localhost:8080/oauth/token',
                                ),
                                'HttpMethod' => 
                                array (
                                  'description' => '探测类型的方法。取值：

- GET
- POST
- HEAD',
                                  'type' => 'string',
                                  'example' => 'POST',
                                ),
                                'ClientParameters' => 
                                array (
                                  'description' => '客户参数数据结构',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'ClientID' => 
                                    array (
                                      'description' => '客户端的ID',
                                      'type' => 'string',
                                      'example' => 'ClientID',
                                    ),
                                    'ClientSecret' => 
                                    array (
                                      'description' => '应用的客户端密钥secret。',
                                      'type' => 'string',
                                      'example' => 'ClientSecret',
                                    ),
                                  ),
                                ),
                                'OAuthHttpParameters' => 
                                array (
                                  'description' => 'Oauth鉴权的请求参数',
                                  'type' => 'object',
                                  'properties' => 
                                  array (
                                    'BodyParameters' => 
                                    array (
                                      'description' => '请求参数的数据结构列表',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => 'body请求参数的数据结构',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'IsValueSecret' => 
                                          array (
                                            'description' => '是否是鉴权',
                                            'type' => 'string',
                                            'example' => 'false',
                                          ),
                                          'Key' => 
                                          array (
                                            'description' => 'body请求参数的key',
                                            'type' => 'string',
                                            'example' => 'name',
                                          ),
                                          'Value' => 
                                          array (
                                            'description' => 'body请求参数的value',
                                            'type' => 'string',
                                            'example' => 'demo',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'HeaderParameters' => 
                                    array (
                                      'description' => '请求头的参数列表',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '请求头的参数数据结构',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'IsValueSecret' => 
                                          array (
                                            'description' => '是否是鉴',
                                            'type' => 'string',
                                            'example' => 'false',
                                          ),
                                          'Key' => 
                                          array (
                                            'description' => '请求头参数key',
                                            'type' => 'string',
                                            'example' => 'name',
                                          ),
                                          'Value' => 
                                          array (
                                            'description' => '请求头参数value',
                                            'type' => 'string',
                                            'example' => 'demo',
                                          ),
                                        ),
                                      ),
                                    ),
                                    'QueryStringParameters' => 
                                    array (
                                      'description' => '请求路径参数的数据结构',
                                      'type' => 'array',
                                      'items' => 
                                      array (
                                        'description' => '请求路径参数的实体类',
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'IsValueSecret' => 
                                          array (
                                            'description' => '是否是鉴',
                                            'type' => 'string',
                                            'example' => 'false',
                                          ),
                                          'Key' => 
                                          array (
                                            'description' => '请求路径参数key',
                                            'type' => 'string',
                                            'example' => 'name',
                                          ),
                                          'Value' => 
                                          array (
                                            'description' => '请求路径参数value',
                                            'type' => 'string',
                                            'example' => 'demo',
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
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => '0',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '1',
                  ),
                  'MaxResults' => 
                  array (
                    'description' => '页大小',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '10',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E3619976-8714-5D88-BBA2-6983D798A8BB\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Data\\": {\\n    \\"Connections\\": [\\n      {\\n        \\"ConnectionName\\": \\"connection-name\\",\\n        \\"Description\\": \\"连接配置描述信息\\",\\n        \\"Id\\": 1141093,\\n        \\"GmtCreate\\": 1592838994234,\\n        \\"NetworkParameters\\": {\\n          \\"NetworkType\\": \\"PublicNetwork\\",\\n          \\"VpcId\\": \\"eb-test/vpc-bp1symadadwnwgmqud\\",\\n          \\"VswitcheId\\": \\"vsw-bp1iu4x7aeradadown1og8,vsw-bp193sqmadadlaszpeqbt2c\\",\\n          \\"SecurityGroupId\\": \\"eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9rtyb\\"\\n        },\\n        \\"AuthParameters\\": {\\n          \\"AuthorizationType\\": \\"BASIC_AUTH\\",\\n          \\"ApiKeyAuthParameters\\": {\\n            \\"ApiKeyName\\": \\"Token\\",\\n            \\"ApiKeyValue\\": \\"asdkjnqkwejooa\\"\\n          },\\n          \\"BasicAuthParameters\\": {\\n            \\"Password\\": \\"admin\\",\\n            \\"Username\\": \\"admin\\"\\n          },\\n          \\"OAuthParameters\\": {\\n            \\"AuthorizationEndpoint\\": \\"http://localhost:8080/oauth/token\\",\\n            \\"HttpMethod\\": \\"POST\\",\\n            \\"ClientParameters\\": {\\n              \\"ClientID\\": \\"ClientID\\",\\n              \\"ClientSecret\\": \\"ClientSecret\\"\\n            },\\n            \\"OAuthHttpParameters\\": {\\n              \\"BodyParameters\\": [\\n                {\\n                  \\"IsValueSecret\\": \\"false\\",\\n                  \\"Key\\": \\"name\\",\\n                  \\"Value\\": \\"demo\\"\\n                }\\n              ],\\n              \\"HeaderParameters\\": [\\n                {\\n                  \\"IsValueSecret\\": \\"false\\",\\n                  \\"Key\\": \\"name\\",\\n                  \\"Value\\": \\"demo\\"\\n                }\\n              ],\\n              \\"QueryStringParameters\\": [\\n                {\\n                  \\"IsValueSecret\\": \\"false\\",\\n                  \\"Key\\": \\"name\\",\\n                  \\"Value\\": \\"demo\\"\\n                }\\n              ]\\n            }\\n          }\\n        }\\n      }\\n    ],\\n    \\"NextToken\\": \\"0\\",\\n    \\"Total\\": 1,\\n    \\"MaxResults\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取连接配置列表',
      'description' => '获取连接配置列表。',
    ),
    'UpdateConnection' => 
    array (
      'summary' => '更新连接配置信息。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '163692',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeRBNSGL',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ConnectionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '要更新的连接名称。最大长度127个字符。最小长度2个字符。',
            'type' => 'string',
            'required' => true,
            'example' => 'connection-name',
            'maxLength' => 127,
            'minLength' => 2,
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '描述信息。最大长度255个字符。',
            'type' => 'string',
            'required' => false,
            'example' => '连接配置描述信息',
            'maxLength' => 255,
          ),
        ),
        2 => 
        array (
          'name' => 'NetworkParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '网络配置的数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'NetworkType' => 
              array (
                'description' => '- 公网 ：PublicNetwork

-  专有网络 ：PrivateNetwork


> 选择专有网络时，VpcId、VswitcheId和SecurityGroupId必填。',
                'type' => 'string',
                'required' => true,
                'example' => 'PublicNetwork',
              ),
              'VpcId' => 
              array (
                'description' => '专有网络VPC的ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'eb-test/vpc-bp1symadadwnwgmqud
',
              ),
              'VswitcheId' => 
              array (
                'description' => '交换机ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'vsw-bp1iu4x7aeradadown1og8,vsw-bp193sqmadadlaszpeqbt2c',
              ),
              'SecurityGroupId' => 
              array (
                'description' => '安全组ID。',
                'type' => 'string',
                'required' => false,
                'example' => 'eb-167adad548759-security_grop/sg-bp1addad26peuh9qh9rtyb',
              ),
            ),
            'required' => true,
          ),
        ),
        3 => 
        array (
          'name' => 'AuthParameters',
          'in' => 'query',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '鉴权数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'AuthorizationType' => 
              array (
                'description' => '鉴权类型 ：

- BASIC：BASIC_AUTH。这种授权方式是浏览器遵守HTTP协议实现的基本授权方式，HTTP协议进行通信的过程中，HTTP协议定义了基本认证允许HTTP服务器对客户端进行用户身份证的方法。在请求头中添加 Authorization ：Basic空一格Base64加密（`用户名:密码`）固定格式。Username和Password是必填的。

- API KEY ：API_KEY_AUTH。固定的格式在请求头中添加Token ：Token值。ApiKeyName和ApiKeyValue是必填的

- OAUTH ：OAUTH_AUTH。OAuth2.0是一种授权机制，正常情况，不使用OAuth2.0等授权机制的系统，客户端是可以直接访问资源服务器的资源的，为了用户安全访问数据，在访问中间添加了Access Token机制。客户端需要携带Access Token去访问受到保护的资源。所以OAuth2.0确保了资源不被恶意客户端访问，从而提高了系统的安全性。AuthorizationEndpoint、OAuthHttpParameters和HttpMethod是必填的。',
                'type' => 'string',
                'required' => false,
                'example' => 'BASIC_AUTH',
              ),
              'ApiKeyAuthParameters' => 
              array (
                'description' => 'API Key鉴权的数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'ApiKeyName' => 
                  array (
                    'description' => 'API Key的key值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'name',
                    'maxLength' => 127,
                  ),
                  'ApiKeyValue' => 
                  array (
                    'description' => 'API Value的value值。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'demo',
                    'maxLength' => 127,
                  ),
                ),
                'required' => false,
              ),
              'BasicAuthParameters' => 
              array (
                'description' => 'Basic鉴权的数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'Password' => 
                  array (
                    'description' => 'basic鉴权的密码。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'admin',
                    'maxLength' => 127,
                  ),
                  'Username' => 
                  array (
                    'description' => 'basic鉴权的用户名。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'admin',
                    'maxLength' => 127,
                  ),
                ),
                'required' => false,
              ),
              'OAuthParameters' => 
              array (
                'description' => 'OAuth鉴权参数数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'AuthorizationEndpoint' => 
                  array (
                    'description' => 'OAuth获取token的请求地址。最大长度127个字符。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'http://localhost:8080/oauth/token',
                    'maxLength' => 127,
                  ),
                  'ClientParameters' => 
                  array (
                    'description' => '客户参数数据结构。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ClientID' => 
                      array (
                        'description' => '客户端的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ClientID',
                        'maxLength' => 127,
                      ),
                      'ClientSecret' => 
                      array (
                        'description' => '应用的客户端密钥secret。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ClientSecret',
                        'maxLength' => 127,
                      ),
                    ),
                    'required' => false,
                  ),
                  'HttpMethod' => 
                  array (
                    'description' => '探测类型的方法。取值：

- GET
- POST
- HEAD
- DELETE
- PUT
- PATCH',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'POST',
                  ),
                  'OAuthHttpParameters' => 
                  array (
                    'description' => 'OAuth鉴权的请求参数。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'BodyParameters' => 
                      array (
                        'description' => '请求参数的数据结构列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'body请求参数的数据结构。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsValueSecret' => 
                            array (
                              'description' => '是否是鉴权。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'false',
                            ),
                            'Key' => 
                            array (
                              'description' => 'body请求参数的key。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'name',
                            ),
                            'Value' => 
                            array (
                              'description' => 'body请求参数的value。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'demo',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                      'HeaderParameters' => 
                      array (
                        'description' => '请求头的参数列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '请求头的参数数据结构。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsValueSecret' => 
                            array (
                              'description' => '是否是鉴权。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'false',
                            ),
                            'Key' => 
                            array (
                              'description' => '请求头参数key。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'name',
                            ),
                            'Value' => 
                            array (
                              'description' => '请求头参数value。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'demo',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                      'QueryStringParameters' => 
                      array (
                        'description' => '请求路径参数的数据结构。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '请求路径参数的数据结构。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'IsValueSecret' => 
                            array (
                              'description' => '是否是鉴权。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'false',
                            ),
                            'Key' => 
                            array (
                              'description' => '请求路径参数key。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'name',
                            ),
                            'Value' => 
                            array (
                              'description' => '请求路径参数value。',
                              'type' => 'string',
                              'required' => false,
                              'example' => 'demo',
                            ),
                          ),
                          'required' => false,
                        ),
                        'required' => false,
                      ),
                    ),
                    'required' => false,
                  ),
                ),
                'required' => false,
              ),
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '8346BE8F-40F3-533D-A0B8-1359C31BD5BA',
              ),
              'Message' => 
              array (
                'description' => '返回信息。',
                'type' => 'string',
                'example' => 'success',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：200：成功。',
                'type' => 'string',
                'example' => '200',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'RequestParameterException',
            'errorMessage' => 'Request parameter exception',
          ),
          1 => 
          array (
            'errorCode' => 'ConnectionNotExist',
            'errorMessage' => 'The Connection not existed!',
          ),
          2 => 
          array (
            'errorCode' => 'SecretManagerAPIDeleteSecretFailed',
            'errorMessage' => 'Delete secret manager api secret failed!',
          ),
          3 => 
          array (
            'errorCode' => 'BasicRequiredParameterIsEmpty',
            'errorMessage' => 'Basic required parameters are empty, the required parameters are username and password!',
          ),
          4 => 
          array (
            'errorCode' => 'BasicUserNameLengthExceed',
            'errorMessage' => 'Basic username length cannot exceed 127!',
          ),
          5 => 
          array (
            'errorCode' => 'BasicPassWordLengthExceed',
            'errorMessage' => 'Basic password length cannot exceed 127!',
          ),
          6 => 
          array (
            'errorCode' => 'ApiKeyRequiredParameterIsEmpty',
            'errorMessage' => 'Api Key required parameters are empty, the required parameters are apiKeyName and apiKeyValue!',
          ),
          7 => 
          array (
            'errorCode' => 'ApiKeyNameLengthExceed',
            'errorMessage' => 'Api key name length cannot exceed 127!',
          ),
          8 => 
          array (
            'errorCode' => 'ApiKeyValueLengthExceed',
            'errorMessage' => 'Api key value length cannot exceed 127!',
          ),
          9 => 
          array (
            'errorCode' => 'OAuthRequiredParameterIsEmpty',
            'errorMessage' => 'OAuth required parameters are empty, the required parameters are authorizationEndpoint and httpMethod!',
          ),
          10 => 
          array (
            'errorCode' => 'AuthorizationEndpointLengthExceed',
            'errorMessage' => 'Authorization endpoint length cannot exceed 127!',
          ),
          11 => 
          array (
            'errorCode' => 'ClientIDLengthExceed',
            'errorMessage' => 'ClientID length cannot exceed 127!',
          ),
          12 => 
          array (
            'errorCode' => 'ClientSecretLengthExceed',
            'errorMessage' => 'ClientSecret length cannot exceed 127!',
          ),
          13 => 
          array (
            'errorCode' => 'OauthHttpParametersEmpty',
            'errorMessage' => 'OauthHttpParameters is Empty.',
          ),
          14 => 
          array (
            'errorCode' => 'SecretManagerAPICreateSecretNameFailed',
            'errorMessage' => 'Create secret manager api secret name failed!',
          ),
          15 => 
          array (
            'errorCode' => 'SecretManagerAPIGetSecretValueFailed',
            'errorMessage' => 'Get secret manager api secret value failed!',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => 'InternalError',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8346BE8F-40F3-533D-A0B8-1359C31BD5BA\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Code\\": \\"200\\"\\n}","type":"json"}]',
      'title' => '更新连接配置信息',
      'description' => '用于更新连接配置。',
    ),
    'CreateServiceLinkedRoleForProduct' => 
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'none',
        'abilityTreeCode' => '38602',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeHELDSX',
          1 => 'FEATUREeventbridgeR7SE45',
          2 => 'FEATUREeventbridgeS2QNZ9',
          3 => 'FEATUREeventbridge6VIARK',
          4 => 'FEATUREeventbridgeWAGKXS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProductName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云产品名称或者云产品关联的SLR名称',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'AliyunServiceRoleForEventBridgeSendToMNS',
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
                'description' => '响应消息，若成功请求为success',
                'type' => 'string',
                'example' => 'success',
              ),
              'RequestId' => 
              array (
                'description' => '阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => 'C36345A1-75F3-5A1A-BFCF-33B8271971FA',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'HttpCode' => 
              array (
                'type' => 'integer',
                'format' => 'int32',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"C36345A1-75F3-5A1A-BFCF-33B8271971FA\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 0\\n}","type":"json"}]',
      'title' => '根据产品关联的 SLR名称创建SLR',
      'summary' => '根据产品关联的 SLR名称创建SLR。',
      'description' => '根据产品关联的 SLR名称创建SLR。',
    ),
    'ListTargets' => 
    array (
      'summary' => '查询一个事件规则的所有投递目标。',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'list',
        'abilityTreeCode' => '38609',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EventBusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件总线的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'my-event-bus',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '限定每次返回的最大条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'RuleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '事件规则名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'tf-testacc-rule',
          ),
        ),
        3 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当指定Limit时，如果还有多余的返回值则会返回NextToken。',
            'type' => 'string',
            'required' => false,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'Arn',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'ARN资源描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:fc:cn-hangzhou:118609547428****:services/fc-connector.a1/functions/event',
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
                'example' => 'EventRuleNotExisted',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                'type' => 'string',
                'example' => '5DAF96FB-A4B6-548C-B999-0BFDCB22****',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Targets' => 
                  array (
                    'description' => '事件目标。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '目标target',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Type' => 
                        array (
                          'description' => '事件目标类型。更多信息，请参见[事件目标参数](~~183698~~)。',
                          'type' => 'string',
                          'example' => 'acs.fc.function ',
                        ),
                        'Endpoint' => 
                        array (
                          'description' => '投递端点链接。',
                          'type' => 'string',
                          'example' => 'acs:fc:cn-hangzhou:123456789098****:services/guide.LATEST/functions/HelloFC ',
                        ),
                        'ParamList' => 
                        array (
                          'description' => '事件目标的参数。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '事件目标的参数。',
                            'type' => 'object',
                            'properties' => 
                            array (
                              'Value' => 
                              array (
                                'description' => '事件目标参数的值。',
                                'type' => 'string',
                                'example' => '{\\"key\\"=\\"value\\"}',
                              ),
                              'Template' => 
                              array (
                                'description' => '事件目标参数模板样式。',
                                'type' => 'string',
                                'example' => 'The value of ${key} is ${value}! ',
                              ),
                              'Form' => 
                              array (
                                'description' => '事件目标参数的格式。',
                                'type' => 'string',
                                'example' => 'TEMPLATE',
                              ),
                              'ResourceKey' => 
                              array (
                                'description' => '事件目标的资源参数。',
                                'type' => 'string',
                                'example' => 'body',
                              ),
                            ),
                          ),
                        ),
                        'ErrorsTolerance' => 
                        array (
                          'description' => '容错策略。取值说明如下： ALL：允许容错。允许异常容错，当异常发生时不会阻塞执行，超过重试策略后会根据配置将消息投递至死信队列或直接丢弃。 NONE：禁止容错。不允许容错，当异常发生并超过重试策略配置时会阻塞执行。',
                          'type' => 'string',
                          'example' => 'ALL',
                        ),
                        'Id' => 
                        array (
                          'description' => '事件目标ID。',
                          'type' => 'string',
                          'example' => '1453',
                        ),
                        'EventBusName' => 
                        array (
                          'description' => '事件总线的名称。',
                          'type' => 'string',
                          'example' => 'sls-beijing-one1-tf',
                        ),
                        'RuleName' => 
                        array (
                          'description' => '事件规则的名称。',
                          'type' => 'string',
                          'example' => 'rule-uKAK2',
                        ),
                      ),
                    ),
                  ),
                  'NextToken' => 
                  array (
                    'description' => '如果还有多余的返回值则会返回NextToken。',
                    'type' => 'string',
                    'example' => '1',
                  ),
                  'Total' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '18',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口返回码：
- Success：表示成功。
-  其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功，返回值如下：
- true：请求成功。
- false：请求失败。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNotEnable',
            'errorMessage' => 'Service not enable',
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"EventRuleNotExisted\\",\\n  \\"RequestId\\": \\"5DAF96FB-A4B6-548C-B999-0BFDCB22****\\",\\n  \\"Data\\": {\\n    \\"Targets\\": [\\n      {\\n        \\"Type\\": \\"acs.fc.function \\",\\n        \\"Endpoint\\": \\"acs:fc:cn-hangzhou:123456789098****:services/guide.LATEST/functions/HelloFC \\",\\n        \\"ParamList\\": [\\n          {\\n            \\"Value\\": \\"{\\\\\\\\\\\\\\"key\\\\\\\\\\\\\\"=\\\\\\\\\\\\\\"value\\\\\\\\\\\\\\"}\\",\\n            \\"Template\\": \\"The value of ${key} is ${value}! \\",\\n            \\"Form\\": \\"TEMPLATE\\",\\n            \\"ResourceKey\\": \\"body\\"\\n          }\\n        ],\\n        \\"ErrorsTolerance\\": \\"ALL\\",\\n        \\"Id\\": \\"1453\\",\\n        \\"EventBusName\\": \\"sls-beijing-one1-tf\\",\\n        \\"RuleName\\": \\"rule-uKAK2\\"\\n      }\\n    ],\\n    \\"NextToken\\": \\"1\\",\\n    \\"Total\\": 18\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '查询一个事件规则的所有投递目标',
    ),
    'TestEventPattern' => 
    array (
      'summary' => '测试事件模式是否与提供的 JSON 格式事件匹配。',
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
        'operationType' => 'none',
        'abilityTreeCode' => '163686',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeS2QNZ9',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Event',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件',
            'type' => 'string',
            'required' => true,
            'example' => '{
    "datacontenttype": "application/json;charset=utf-8",
    "aliyunaccountid": "*****",
    "aliyunpublishtime": "2023-04-****:54:57.939Z",
    "data": {
        "resourceEventType": "****",
        "resourceCreateTime": "****",
        "resourceId": "sls-code-***-debug",
        "captureTime": "***"
    },
    "aliyunoriginalaccountid": "****",
    "specversion": "1.0",
    "aliyuneventbusname": "****",
    "id": "295e6bd2-bb72-4f70-****-204a0680ee41",
    "source": "acs.sls",
    "time": "2023-04-***:37:56Z",
    "aliyunregionid": "cn-***",
    "type": "sls:Config:****"
}',
          ),
        ),
        1 => 
        array (
          'name' => 'EventPattern',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '事件模式',
            'type' => 'string',
            'required' => true,
            'example' => '{"key1": "value1"}',
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
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID',
                'type' => 'string',
                'example' => '96D7C0AB-DCE5-5E82-96B8-4725E1706BB1',
              ),
              'Message' => 
              array (
                'description' => '错误信息',
                'type' => 'string',
                'example' => '无',
              ),
              'Code' => 
              array (
                'description' => '接口返回码：Success：表示成功。                                 其它：表示错误码。错误码详情，请参见错误码。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作成功返回true。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Result' => 
                  array (
                    'description' => 'true表示事件模式与提供的 JSON 格式事件匹配。false 表示不匹配。',
                    'type' => 'boolean',
                    'example' => 'true',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"96D7C0AB-DCE5-5E82-96B8-4725E1706BB1\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Result\\": true\\n  }\\n}","type":"json"}]',
      'title' => '测试事件模式是否与提供的 JSON 格式事件匹配',
      'description' => '测试事件模式是否与提供的 JSON 格式事件匹配。',
    ),
    'EventCenterCheckEnabledOnDefaultBus' => 
    array (
      'summary' => 'EventCenterCheckEnabledOnDefaultBus',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'abilityTreeCode' => '215978',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeNPJI6M',
          1 => 'FEATUREeventbridgeKIJSNP',
        ),
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
              'Message' => 
              array (
                'description' => '错误说明。',
                'type' => 'string',
                'example' => 'Unknown system error',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '382E6272-8E9C-5681-AC96-XXXXXXXXX',
              ),
              'Data' => 
              array (
                'description' => '返回数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Enabled' => 
                  array (
                    'description' => '是否可用，取值为true或false。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 Success表示成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true表示成功，false表示失败。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Unknown system error\\",\\n  \\"RequestId\\": \\"382E6272-8E9C-5681-AC96-XXXXXXXXX\\",\\n  \\"Data\\": {\\n    \\"Enabled\\": true\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '检查Default总线的事件分析功能是否启用',
    ),
    'EventCenterDisableOnDefaultBus' => 
    array (
      'summary' => 'EventCenterDisableOnDefaultBus',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'abilityTreeCode' => '215980',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeKIJSNP',
          1 => 'FEATUREeventbridgeNPJI6M',
        ),
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
              'Message' => 
              array (
                'description' => '错误说明。',
                'type' => 'string',
                'example' => 'Unknown system error',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '382E6272-8E9C-5681-AC96-XXXXXXXX',
              ),
              'Code' => 
              array (
                'description' => '状态码。说明 Success表示成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true表示成功，false表示失败。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Unknown system error\\",\\n  \\"RequestId\\": \\"382E6272-8E9C-5681-AC96-XXXXXXXX\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '关闭Default总线的事件分析功能',
    ),
    'EventCenterEnableOnDefaultBus' => 
    array (
      'summary' => 'EventCenterEnableOnDefaultBus',
      'methods' => 
      array (
        0 => 'post',
        1 => 'get',
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
        'abilityTreeCode' => '215979',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeKIJSNP',
          1 => 'FEATUREeventbridgeNPJI6M',
        ),
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
              'Message' => 
              array (
                'description' => '错误说明。',
                'type' => 'string',
                'example' => 'Unknown system error',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '1AD6D598-7506-5D2C-81EA-XXXXXXXX',
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true表示成功，false表示失败。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Unknown system error\\",\\n  \\"RequestId\\": \\"1AD6D598-7506-5D2C-81EA-XXXXXXXX\\",\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '启用Default总线的事件分析功能',
    ),
    'EventCenterQueryEvents' => 
    array (
      'summary' => 'EventCenterQueryEvents',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '220116',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREeventbridgeNPJI6M',
          1 => 'FEATUREeventbridgeKIJSNP',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'BusName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '总线名称',
            'type' => 'string',
            'required' => false,
            'example' => 'default',
            'default' => 'default',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于请求下一页检索的结果。',
            'type' => 'string',
            'required' => false,
            'example' => '100',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxResults',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '允许返回的最大结果数目。 取值范围：0~10000，默认100。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'maximum' => '10000',
            'minimum' => '0',
            'example' => '100',
            'default' => '100',
          ),
        ),
        3 => 
        array (
          'name' => 'Body',
          'in' => 'formData',
          'style' => 'json',
          'schema' => 
          array (
            'description' => 'Body参数',
            'type' => 'object',
            'properties' => 
            array (
              'SchemaId' => 
              array (
                'description' => 'Schema ID。',
                'type' => 'string',
                'required' => true,
                'example' => 'ecs:GeneralSchema',
              ),
              'QueryType' => 
              array (
                'description' => '查询类型：

- **timeseries**：查询时序数据
- **table**：查询表格数据
- **timeseries_and_table**：同时查询时序数据和表格数据',
                'type' => 'string',
                'required' => true,
                'example' => 'timeseries_and_table',
                'enum' => 
                array (
                  0 => 'timeseries',
                  1 => 'table',
                  2 => 'timeseries_and_table',
                ),
              ),
              'Parameters' => 
              array (
                'description' => '查询参数。',
                'type' => 'object',
                'properties' => 
                array (
                  'Breakdowns' => 
                  array (
                    'description' => '将数据集按照特定维度（列名）进一步拆分。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '可作为拆分维度的列名。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'source',
                    ),
                    'required' => false,
                  ),
                  'Calculations' => 
                  array (
                    'description' => '对指定的列用操作符计算。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Op' => 
                        array (
                          'description' => '操作符。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'COUNT_DISTINCT',
                          'enum' => 
                          array (
                            0 => 'COUNT',
                            1 => 'SUM',
                            2 => 'AVG',
                            3 => 'COUNT_DISTINCT',
                            4 => 'MAX',
                            5 => 'MIN',
                            6 => 'P50',
                            7 => 'P90',
                            8 => 'P95',
                            9 => 'P99',
                          ),
                        ),
                        'Column' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'source',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                  'Filters' => 
                  array (
                    'description' => '筛选条件列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Column' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'source',
                        ),
                        'Op' => 
                        array (
                          'description' => '操作符。',
                          'type' => 'string',
                          'required' => false,
                          'example' => '=',
                          'enum' => 
                          array (
                            0 => '=',
                            1 => '!=',
                            2 => '>',
                            3 => '>=',
                            4 => '<',
                            5 => '<=',
                            6 => 'exists',
                            7 => 'does-not-exist',
                            8 => 'starts-with',
                            9 => 'does-not-start-with',
                            10 => 'contains',
                            11 => 'does-not-contain',
                            12 => 'in',
                            13 => 'not-in',
                            14 => 'text-match',
                          ),
                        ),
                        'Values' => 
                        array (
                          'description' => '与操作符配合使用的值。',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '如值为字符串，则需要用加上单引号。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '\'acs.ecs\'',
                          ),
                          'required' => false,
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                  'FilterCombination' => 
                  array (
                    'description' => '筛选条件组合的逻辑。',
                    'type' => 'string',
                    'required' => false,
                    'example' => 'AND',
                    'enum' => 
                    array (
                      0 => 'AND',
                      1 => 'OR',
                    ),
                  ),
                  'Granularity' => 
                  array (
                    'description' => '时间粒度，即查询时序数据的最小时间单元，单位秒，最小值为1。
此参数为建议值，实际粒度以返回值为准。',
                    'type' => 'integer',
                    'required' => false,
                    'example' => '30',
                  ),
                  'Orders' => 
                  array (
                    'description' => '对查询结果排序，仅对QueryType为table的查询有意义。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Op' => 
                        array (
                          'description' => '操作符。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'AVG',
                          'enum' => 
                          array (
                            0 => 'COUNT',
                            1 => 'SUM',
                            2 => 'AVG',
                            3 => 'COUNT_DISTINCT',
                            4 => 'MAX',
                            5 => 'MIN',
                            6 => 'P50',
                            7 => 'P90',
                            8 => 'P95',
                            9 => 'P99',
                          ),
                        ),
                        'Column' => 
                        array (
                          'description' => '列名。',
                          'type' => 'string',
                          'required' => false,
                          'example' => 'source',
                        ),
                        'Desc' => 
                        array (
                          'description' => '是否降序排列',
                          'type' => 'boolean',
                          'required' => false,
                          'example' => 'true',
                        ),
                      ),
                      'required' => false,
                    ),
                    'required' => false,
                  ),
                  'Offset' => 
                  array (
                    'description' => '本次查询的起始位置，从 0 开始。',
                    'type' => 'integer',
                    'required' => false,
                    'example' => '0',
                  ),
                  'Limit' => 
                  array (
                    'description' => '查询事件的最大个数，取值范围为1~10000。',
                    'type' => 'integer',
                    'required' => false,
                    'example' => '100',
                  ),
                  'TimeRange' => 
                  array (
                    'description' => '时间范围，单位毫秒，最小值1000。',
                    'type' => 'integer',
                    'required' => false,
                    'example' => '1000000',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '查询事件的开始时间戳，单位毫秒。',
                    'type' => 'integer',
                    'required' => false,
                    'example' => '1687860901814',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '查询事件的结束时间戳，单位毫秒。',
                    'type' => 'integer',
                    'required' => false,
                    'example' => '1687861201814',
                  ),
                ),
                'required' => true,
              ),
            ),
            'required' => true,
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
              'Message' => 
              array (
                'description' => '错误信息。',
                'type' => 'string',
                'example' => 'Specified parameter Limit is not valid.',
              ),
              'RequestId' => 
              array (
                'description' => '本次请求的ID。',
                'type' => 'string',
                'example' => '5DAF96FB-A4B6-548C-B999-XXXXXXXX',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'NextToken' => 
                  array (
                    'title' => '表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                    'description' => '表示当前调用返回读取到的位置。空代表数据已经读取完毕。',
                    'type' => 'string',
                    'example' => '100',
                  ),
                  'MaxResults' => 
                  array (
                    'title' => '本次请求所返回的最大记录条数',
                    'description' => '本次请求所返回的最大记录条数',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'TotalCount' => 
                  array (
                    'title' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                    'description' => 'TotalCount本次请求条件下的数据总量，此参数为可选参数，默认可不返回',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '76',
                  ),
                  'TimeSeries' => 
                  array (
                    'description' => '对应查询类型为timeseries的查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RowData' => 
                        array (
                          'description' => '查询结果的条目，以k-v对表示。',
                          'type' => 'object',
                          'example' => '{
  "id":"xxx",
  "source":"acs.ecs"
}',
                        ),
                        'Time' => 
                        array (
                          'description' => '用于显示时间戳。',
                          'type' => 'string',
                          'example' => '1683561600000',
                        ),
                      ),
                    ),
                  ),
                  'Table' => 
                  array (
                    'description' => '对应查询类型为table的查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'RowData' => 
                        array (
                          'description' => '查询结果的条目，以k-v对表示。',
                          'type' => 'object',
                          'example' => '{
  "id":"xxx",
  "source":"acs.ecs"
}',
                        ),
                      ),
                    ),
                  ),
                ),
              ),
              'Code' => 
              array (
                'description' => '接口状态或POP错误码。取值说明如下：Success：成功。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Success' => 
              array (
                'description' => '操作是否成功。true表示成功，false表示失败。',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"Specified parameter Limit is not valid.\\",\\n  \\"RequestId\\": \\"5DAF96FB-A4B6-548C-B999-XXXXXXXX\\",\\n  \\"Data\\": {\\n    \\"NextToken\\": \\"100\\",\\n    \\"MaxResults\\": 100,\\n    \\"TotalCount\\": 76,\\n    \\"TimeSeries\\": [\\n      {\\n        \\"RowData\\": {\\n          \\"id\\": \\"xxx\\",\\n          \\"source\\": \\"acs.ecs\\"\\n        },\\n        \\"Time\\": \\"1683561600000\\"\\n      }\\n    ],\\n    \\"Table\\": [\\n      {\\n        \\"RowData\\": {\\n          \\"id\\": \\"xxx\\",\\n          \\"source\\": \\"acs.ecs\\"\\n        }\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"Success\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
      'title' => '在事件分析功能中查询事件',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'eventbridge-console.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'eventbridge-console.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'eventbridge-console.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'eventbridge-console.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'eventbridge-console.cn-wulanchabu.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'eventbridge-console.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'eventbridge-console.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'eventbridge-console.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-heyuan',
      'endpoint' => 'eventbridge-console.cn-heyuan.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-guangzhou',
      'endpoint' => 'eventbridge-console.cn-guangzhou.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'eventbridge-console.cn-chengdu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'eventbridge-console.cn-hongkong.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'eventbridge-console.ap-northeast-1.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-northeast-2',
      'endpoint' => 'eventbridge-console.ap-northeast-2.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'eventbridge-console.ap-southeast-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'eventbridge-console.ap-southeast-3.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'eventbridge-console.ap-southeast-5.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'eventbridge-console.ap-southeast-6.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'eventbridge-console.us-east-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'eventbridge-console.us-west-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'eventbridge-console.eu-west-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'eventbridge-console.eu-central-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'eventbridge-console.ap-south-1.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'ap-southeast-7',
      'endpoint' => 'eventbridge-console.ap-southeast-7.aliyuncs.com',
    ),
  ),
);
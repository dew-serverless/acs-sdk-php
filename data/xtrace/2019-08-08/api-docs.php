<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'xtrace',
    'version' => '2019-08-08',
  ),
  'directories' => 
  array (
    0 => 'GetTagKey',
    1 => 'GetTagVal',
    2 => 'GetTrace',
    3 => 'ListIpOrHosts',
    4 => 'ListServices',
    5 => 'ListSpanNames',
    6 => 'QueryMetric',
    7 => 'SearchTraces',
    8 => 
    array (
      'id' => 188134,
      'title' => '访问控制',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenXtraceService',
        1 => 'CheckCommercialStatus',
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
    'GetTagKey' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '55548',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceZX0L4J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称，又称为应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'appTest',
          ),
        ),
        2 => 
        array (
          'name' => 'SpanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Span名称，又称为Operation名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'createOrder',
          ),
        ),
        3 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间的时间戳，精确到毫秒（ms）。
><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。</notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1575561600000',
          ),
        ),
        4 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间的时间戳，精确到毫秒（ms）。
><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。</notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1575622455686',
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
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
              'TagKeys' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagKey' => 
                  array (
                    'description' => '标签键列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签键列表。',
                      'type' => 'string',
                      'example' => '{"TagKey":["date","resultCount","aTid"]}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"TagKeys\\": {\\n    \\"TagKey\\": [\\n      \\"{\\\\\\"TagKey\\\\\\":[\\\\\\"date\\\\\\",\\\\\\"resultCount\\\\\\",\\\\\\"aTid\\\\\\"]}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTagKeyResponse> \\n  <TagKeys> \\n    <TagKey>date</TagKey>  \\n    <TagKey>resultCount</TagKey>  \\n    <TagKey>aTid</TagKey>  \\n  </TagKeys>  \\n  <RequestId>7D6519C1-A92A-4F07-AC83-706D48204242</RequestId> \\n</GetTagKeyResponse>\\n","errorExample":""}]',
      'title' => '获取标签Key',
      'summary' => '调用GetTagKey接口获取标签键。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTagVal' => 
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
        'operationType' => 'get',
        'abilityTreeCode' => '55549',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceZX0L4J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称，又称为应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'appTest',
          ),
        ),
        2 => 
        array (
          'name' => 'SpanName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Span名称，又称为Operation名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'createOrder',
          ),
        ),
        3 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '标签键。

获取TagKey，请参见[GetTagKey](~~2399667~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'span.kind',
          ),
        ),
        4 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，精确到毫秒（ms）。
><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1575561600000',
          ),
        ),
        5 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，精确到毫秒（ms）。
><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1575622455686',
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
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
              'TagValues' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'TagValue' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '标签值列表。',
                      'type' => 'string',
                      'example' => '{"TagValue":["server"]}',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"TagValues\\": {\\n    \\"TagValue\\": [\\n      \\"{\\\\\\"TagValue\\\\\\":[\\\\\\"server\\\\\\"]}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTagValResponse> \\n  <RequestId>D36507D4-FD30-430B-BEC4-738661CFB86C</RequestId>  \\n  <TagValues> \\n    <TagValue>server</TagValue> \\n  </TagValues> \\n</GetTagValResponse>","errorExample":""}]',
      'title' => '获取标签Value',
      'summary' => '获取上报的链路数据中指定Tag Key对应的Tag Value。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetTrace' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TraceID',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '调用链ID，链路请求的唯一标识。可在控制台的**调用链分析**页面获取。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1c6881aab84191a4******',
          ),
        ),
        1 => 
        array (
          'name' => 'AppType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型，取值为`XTRACE`或空。',
            'type' => 'string',
            'required' => false,
            'example' => 'XTRACE',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
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
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
              'Spans' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Span' => 
                  array (
                    'description' => 'Span列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'span列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SpanId' => 
                        array (
                          'description' => 'Span ID。',
                          'type' => 'string',
                          'example' => 'fec891bb8f8XXX',
                        ),
                        'HaveStack' => 
                        array (
                          'description' => '是否有子Span。取值：

- `true`：有子Span。

- `false`：无子Span。',
                          'type' => 'boolean',
                          'example' => 'false',
                        ),
                        'ServiceIp' => 
                        array (
                          'description' => '服务IP地址，即Span所在的机器IP地址。',
                          'type' => 'string',
                          'example' => '192.168.XXX.XXX',
                        ),
                        'OperationName' => 
                        array (
                          'description' => 'Span名称。',
                          'type' => 'string',
                          'example' => '/api',
                        ),
                        'ParentSpanId' => 
                        array (
                          'description' => '父Span ID。',
                          'type' => 'string',
                          'example' => 'fec891bb8f8XXX',
                        ),
                        'ResultCode' => 
                        array (
                          'description' => '返回码。',
                          'type' => 'string',
                          'example' => '200',
                        ),
                        'Duration' => 
                        array (
                          'description' => '耗时，单位为毫秒（ms）。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1000',
                        ),
                        'RpcId' => 
                        array (
                          'description' => '表示Span之间的父子兄弟关系。 例如1.1是1.1.1的父亲Span， 而1.1.2和1.1.1是兄弟Span。',
                          'type' => 'string',
                          'example' => '1.1',
                        ),
                        'Timestamp' => 
                        array (
                          'description' => 'Span的产生时间戳。单位为微秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1689845513298000',
                        ),
                        'ServiceName' => 
                        array (
                          'description' => '服务名称，又称为应用名称。',
                          'type' => 'string',
                          'example' => 'server1',
                        ),
                        'TraceID' => 
                        array (
                          'description' => '调用链ID，链路请求的唯一标识。',
                          'type' => 'string',
                          'example' => '1c6881aab84191a4',
                        ),
                        'TagEntryList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'TagEntry' => 
                            array (
                              'description' => '标签列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => 'Span的标签键。',
                                    'type' => 'string',
                                    'example' => 'logLevel',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => 'Span的标签值。',
                                    'type' => 'string',
                                    'example' => 'Warning',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'LogEventList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'LogEvent' => 
                            array (
                              'description' => '日志事件列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '日志事件列表。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Timestamp' => 
                                  array (
                                    'description' => '日志事件的产生时间戳。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'example' => '1583683202047000',
                                  ),
                                  'TagEntryList' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'TagEntry' => 
                                      array (
                                        'description' => '标签列表。',
                                        'type' => 'array',
                                        'items' => 
                                        array (
                                          'description' => '标签列表。',
                                          'type' => 'object',
                                          'properties' => 
                                          array (
                                            'Key' => 
                                            array (
                                              'description' => '日志事件的标签键。',
                                              'type' => 'string',
                                              'example' => 'logLevel',
                                            ),
                                            'Value' => 
                                            array (
                                              'description' => '日志事件的标签值。',
                                              'type' => 'string',
                                              'example' => 'Warning',
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
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"Spans\\": {\\n    \\"Span\\": [\\n      {\\n        \\"SpanId\\": \\"fec891bb8f8XXX\\",\\n        \\"HaveStack\\": false,\\n        \\"ServiceIp\\": \\"192.168.XXX.XXX\\",\\n        \\"OperationName\\": \\"/api\\",\\n        \\"ParentSpanId\\": \\"fec891bb8f8XXX\\",\\n        \\"ResultCode\\": \\"200\\",\\n        \\"Duration\\": 1000,\\n        \\"RpcId\\": \\"1.1\\",\\n        \\"Timestamp\\": 1689845513298000,\\n        \\"ServiceName\\": \\"server1\\",\\n        \\"TraceID\\": \\"1c6881aab84191a4\\",\\n        \\"TagEntryList\\": {\\n          \\"TagEntry\\": [\\n            {\\n              \\"Key\\": \\"logLevel\\",\\n              \\"Value\\": \\"Warning\\"\\n            }\\n          ]\\n        },\\n        \\"LogEventList\\": {\\n          \\"LogEvent\\": [\\n            {\\n              \\"Timestamp\\": 1583683202047000,\\n              \\"TagEntryList\\": {\\n                \\"TagEntry\\": [\\n                  {\\n                    \\"Key\\": \\"logLevel\\",\\n                    \\"Value\\": \\"Warning\\"\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTraceResponse> \\n  <RequestId>1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED</RequestId>  \\n  <Spans> \\n    <Span> \\n      <HaveStack>false</HaveStack>  \\n      <ParentSpanId>fec891bb8f8XXX</ParentSpanId>  \\n      <ServiceIp>192.168.XXX.XXX</ServiceIp>  \\n      <ServiceName>server1</ServiceName>  \\n      <OperationName>/api</OperationName>  \\n      <RpcId>1.1</RpcId>  \\n      <TraceID>1c6881aab84191a4</TraceID>  \\n      <Duration>1000</Duration>  \\n      <Timestamp>1583683202047000</Timestamp>  \\n      <ResultCode>200</ResultCode>  \\n      <SpanId>fec891bb8f8XXX</SpanId>  \\n      <TagEntryList> \\n        <TagEntry> \\n          <Value>Warning</Value>  \\n          <Key>logLevel</Key> \\n        </TagEntry> \\n      </TagEntryList>  \\n      <LogEventList> \\n        <LogEvent> \\n          <Timestamp>1583683202047000</Timestamp>  \\n          <TagEntryList> \\n            <TagEntry> \\n              <Value>Warning</Value>  \\n              <Key>logLevel</Key> \\n            </TagEntry> \\n          </TagEntryList> \\n        </LogEvent> \\n      </LogEventList> \\n    </Span> \\n  </Spans> \\n</GetTraceResponse>","errorExample":""}]',
      'title' => '获取调用链路详情',
      'summary' => '调用GetTrace接口获取调用链路详情。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListIpOrHosts' => 
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
        'operationType' => 'list',
        'abilityTreeCode' => '55553',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceOGOOWE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用名称。若为空则查询该地域下所有应用的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => 'service1',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间的时间戳，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1583683200000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间的时间戳，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1583723776974',
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
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1******',
              ),
              'IpNames' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'IpName' => 
                  array (
                    'description' => 'IP地址列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'IP地址列表。',
                      'type' => 'string',
                      'example' => '[ "172.19.XXX.XXX", "10.0.X.X" ]',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1******\\",\\n  \\"IpNames\\": {\\n    \\"IpName\\": [\\n      \\"[ \\\\\\"172.19.XXX.XXX\\\\\\", \\\\\\"10.0.X.X\\\\\\" ]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListIpOrHostsResponse>\\n    <RequestId>23D9757C-CB58-41A5-BBE7-2A9A0652****</RequestId>\\n    <IpNames>\\n        <IpName>172.19.XXX.XXX</IpName>\\n        <IpName>10.0.X.X</IpName>\\n    </IpNames>\\n</ListIpOrHostsResponse>","errorExample":""}]',
      'title' => '获取IP地址或机器名',
      'summary' => '获取链路数据中的IP地址或者机器名称，可获取整个地域或某个应用下的所有IP地址。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListServices' => 
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
        'operationType' => 'list',
        'abilityTreeCode' => '55554',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceF2LCA8',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'AppType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型，取值为`XTRACE`或空。',
            'type' => 'string',
            'required' => false,
            'example' => 'XTRACE',
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
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
              'Services' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'Service' => 
                  array (
                    'description' => '应用列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '应用列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'ServiceName' => 
                        array (
                          'description' => '应用名称。',
                          'type' => 'string',
                          'example' => 'a3',
                        ),
                        'Pid' => 
                        array (
                          'description' => '应用ID。',
                          'type' => 'string',
                          'example' => 'XXXqn3ly@741623b4e915df8',
                        ),
                        'RegionId' => 
                        array (
                          'description' => '地域ID。',
                          'type' => 'string',
                          'example' => 'cn-beijing',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"Services\\": {\\n    \\"Service\\": [\\n      {\\n        \\"ServiceName\\": \\"a3\\",\\n        \\"Pid\\": \\"XXXqn3ly@741623b4e915df8\\",\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListServicesResponse> \\n  <Services> \\n    <Service> \\n      <ServiceName>a3</ServiceName>  \\n      <Pid>XXXqn3ly@741623b4e915df8</Pid>  \\n      <RegionId>cn-hangzhou</RegionId> \\n    </Service> \\n  </Services> \\n</ListServicesResponse>","errorExample":""}]',
      'title' => '获取应用列表',
      'summary' => '调用ListServices获取应用列表。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'ListSpanNames' => 
    array (
      'summary' => '获取指定地域下所有的Span名称，也可获取某个微服务的所有Span名称。',
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
        'operationType' => 'list',
        'abilityTreeCode' => '55555',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceZX0L4J',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务名称，又称为应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'service 1',
          ),
        ),
        2 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间的时间戳，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1714298814000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间的时间戳，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1714385214000',
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
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
              'SpanNames' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SpanName' => 
                  array (
                    'description' => 'Span名称列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => 'Span名称列表。',
                      'type' => 'string',
                      'example' => '{
    "SpanName": [
      "GET /**",
      "path_selection",
      "POST"
    ]
  }',
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
            'errorCode' => 'ParameterRegionIdMissing',
            'errorMessage' => '区域参数缺失',
          ),
          1 => 
          array (
            'errorCode' => 'InternalError',
            'errorMessage' => '内部错误,建议重试,如果多次重试报错请联系钉钉服务账号',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'APINotAuthorize',
            'errorMessage' => '当前用户无权限访问该接口',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ServiceNameNotExist',
            'errorMessage' => 'ServiceName不存在',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"SpanNames\\": {\\n    \\"SpanName\\": [\\n      \\"{\\\\n    \\\\\\"SpanName\\\\\\": [\\\\n      \\\\\\"GET /**\\\\\\",\\\\n      \\\\\\"path_selection\\\\\\",\\\\n      \\\\\\"POST\\\\\\"\\\\n    ]\\\\n  }\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSpanNamesResponse> \\n  <SpanNames> \\n    <SpanName>rpc0</SpanName>  \\n    <SpanName>rpc1.1</SpanName>  \\n    <SpanName>rpc1.1.1</SpanName> \\n  </SpanNames>  \\n  <RequestId>79C84C64-9951-477E-96F3-7FA44128C601</RequestId> \\n</ListSpanNamesResponse>","errorExample":""}]',
      'title' => '获取所有Span名称',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'QueryMetric' => 
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
        'abilityTreeCode' => '55557',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceOGOOWE',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'IntervalInSec',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '数据片的时间间隔，单位为毫秒，最小值为60000。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => true,
            'example' => '100000',
          ),
        ),
        1 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，精确到毫秒（ms）。

><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1575561600000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，精确到毫秒（ms）。

><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1575622455686',
          ),
        ),
        3 => 
        array (
          'name' => 'OrderBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序字段，根据查询返回字段中的某个字段排序。',
            'type' => 'string',
            'required' => false,
            'example' => 'count',
          ),
        ),
        4 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '返回数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        5 => 
        array (
          'name' => 'Metric',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指标名称，取值：

-  `appstat.incall`：链路统计。

- `appstat.sql`：SQL统计。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'appstat.incall',
          ),
        ),
        6 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序，取值：

- `ASC`：升序。

- `DESC`：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'ASC',
          ),
        ),
        7 => 
        array (
          'name' => 'ProxyUserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '代理用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'testefgag12',
          ),
        ),
        8 => 
        array (
          'name' => 'Filters',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '过滤字段列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '过滤字段列表',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '过滤字段的Key。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http.status_code',
                ),
                'Value' => 
                array (
                  'description' => '过滤字段的Value。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '200',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
        9 => 
        array (
          'name' => 'Dimensions',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '维度，即GroupBy分组。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '指标对应的维度。',
              'type' => 'string',
              'required' => false,
              'example' => 'pid',
            ),
            'required' => false,
            'example' => 'RT',
            'maxItems' => 5,
          ),
        ),
        10 => 
        array (
          'name' => 'Measures',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '查询字段。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '**Metric**取值为`appstat.incall`时，**Measures**取值：

- rt：响应时间。
- count：总数。
- error：错误数。
- exception：异常。
- errorrate：错误率。
- qps：每秒请求数。

**Metric**取值为`appstat.sql`时，**Measures**取值：

- rt：响应时间。
- count：总数。
- error：错误数。
- slowcount：慢调用次数。',
              'type' => 'string',
              'required' => false,
              'example' => 'rt',
            ),
            'required' => true,
            'example' => 'count',
            'maxItems' => 5,
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
              'Data' => 
              array (
                'description' => '返回统计信息。',
                'type' => 'string',
                'example' => '{ "Data": "{\\"data\\":[{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"}]}}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{ \\\\\\"Data\\\\\\": \\\\\\"{\\\\\\\\\\\\\\"data\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"date\\\\\\\\\\\\\\":1583686800000,\\\\\\\\\\\\\\"count\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"rt\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"rpc\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"childSpan3\\\\\\\\\\\\\\"}]}}\\",\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryMetricResponse> \\n  <RequestId>E2373982-D8CD-413D-B991-8EB678C01B4F</RequestId>  \\n  <Data>{\\"data\\":[{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":0.01,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":305.18,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":305.25,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":306.25,\\"rpc\\":\\"parentSpan\\"}],\\"actualSizeFromDB\\":0,\\"intervalInSec\\":3600,\\"resultSize\\":0,\\"successful\\":true}</Data> \\n</QueryMetricResponse>\\n","errorExample":""}]',
      'title' => '查询监控指标',
      'summary' => '调用QueryMetric查询相关监控指标。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'SearchTraces' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'StartTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '开始时间，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1714298814000',
          ),
        ),
        1 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结束时间，精确到毫秒（ms）。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1714385214000',
          ),
        ),
        2 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。
',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'cn-beijing',
          ),
        ),
        3 => 
        array (
          'name' => 'ServiceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '微服务名称，又称为应用名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'service 1',
          ),
        ),
        4 => 
        array (
          'name' => 'OperationName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Span名称，即某个跟踪点或埋点的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '/api',
          ),
        ),
        5 => 
        array (
          'name' => 'MinDuration',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '大于某个时间跨度范围，单位为秒（s）。例如，2表示大于2秒的数据。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        6 => 
        array (
          'name' => 'AppType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '应用类型，取值为`XTRACE`或空。',
            'type' => 'string',
            'required' => false,
            'example' => 'XTRACE',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页码，例如，5表示第5页。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页的查询数据条数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        9 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '按照时间正序或者倒序排列。默认为`false`。取值：

- `true`：倒序。

- `false` ：顺序。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        10 => 
        array (
          'name' => 'ServiceIp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Span对应主机的IP地址。',
            'type' => 'string',
            'required' => false,
            'example' => '192.163.XXX.XXX',
          ),
        ),
        11 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '标签列表。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签键。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'http.status_cod',
                ),
                'Value' => 
                array (
                  'description' => '标签值。',
                  'type' => 'string',
                  'required' => false,
                  'example' => '200',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 5,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'headers' => 
          array (
          ),
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
              ),
              'PageBean' => 
              array (
                'description' => '返回数据的位置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageSize' => 
                  array (
                    'description' => '每页显示的数据条数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '20',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '总条数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '500',
                  ),
                  'TraceInfos' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TraceInfo' => 
                      array (
                        'description' => '返回的调用链信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '返回的调用链信息。',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'OperationName' => 
                            array (
                              'description' => 'Span名称。',
                              'type' => 'string',
                              'example' => '/api',
                            ),
                            'ServiceIp' => 
                            array (
                              'description' => 'Span所在的主机IP地址或主机名称。',
                              'type' => 'string',
                              'example' => '192.163.XXX.XXX',
                            ),
                            'Duration' => 
                            array (
                              'description' => '耗时，单位为秒（s）。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '2',
                            ),
                            'Timestamp' => 
                            array (
                              'description' => 'Span产生时间，单位为毫秒（ms）。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1714306014000',
                            ),
                            'ServiceName' => 
                            array (
                              'description' => '微服务名称，又称为应用名称。',
                              'type' => 'string',
                              'example' => 'service1',
                            ),
                            'TraceID' => 
                            array (
                              'description' => '调用链ID。',
                              'type' => 'string',
                              'example' => '1c6881aab841******',
                            ),
                            'TagMap' => 
                            array (
                              'description' => '标签信息。',
                              'type' => 'object',
                              'example' => '{"env":"dev"}',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"PageBean\\": {\\n    \\"PageSize\\": 20,\\n    \\"PageNumber\\": 1,\\n    \\"TotalCount\\": 500,\\n    \\"TraceInfos\\": {\\n      \\"TraceInfo\\": [\\n        {\\n          \\"OperationName\\": \\"/api\\",\\n          \\"ServiceIp\\": \\"192.163.XXX.XXX\\",\\n          \\"Duration\\": 2,\\n          \\"Timestamp\\": 1714306014000,\\n          \\"ServiceName\\": \\"service1\\",\\n          \\"TraceID\\": \\"1c6881aab841******\\",\\n          \\"TagMap\\": {\\n            \\"env\\": \\"dev\\"\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SearchTracesResponse>\\n    <RequestId>1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED</RequestId>\\n    <PageBean>\\n        <PageSize>100</PageSize>\\n        <PageNumber>1</PageNumber>\\n        <TotalCount>1000</TotalCount>\\n        <TraceInfos>\\n            <OperationName>/api</OperationName>\\n            <ServiceIp>192.163.XXX.XXX</ServiceIp>\\n            <Duration>100</Duration>\\n            <Timestamp>1575561600000000</Timestamp>\\n            <ServiceName>service1</ServiceName>\\n            <TraceID>1c6881aab84191a4</TraceID>\\n        </TraceInfos>\\n    </PageBean>\\n</SearchTracesResponse>","errorExample":""}]',
      'title' => '查询调用链列表',
      'summary' => '调用SearchTraces查询调用链列表，可根据时间、应用名称、IP地址、Span名称、Tag等信息对调用链进行过滤查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OpenXtraceService' => 
    array (
      'summary' => '开通链路追踪服务。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '55556',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceQU1HZ6',
          1 => 'FEATURExtraceP9I50Y',
          2 => 'FEATURExtraceWNT0B5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
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
              'Result' => 
              array (
                'type' => 'string',
              ),
              'RequestId' => 
              array (
                'description' => '请求id。',
                'type' => 'string',
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1FC4****',
              ),
              'OrderId' => 
              array (
                'description' => '订单id。',
                'type' => 'string',
                'example' => '155709986',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Result\\": \\"\\",\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1FC4****\\",\\n  \\"OrderId\\": \\"155709986\\"\\n}","type":"json"}]',
      'title' => '开通XTrace',
    ),
    'CheckCommercialStatus' => 
    array (
      'summary' => '检查商业化状态。',
      'methods' => 
      array (
        0 => 'get',
        1 => 'post',
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
        'abilityTreeCode' => '201972',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATURExtraceQU1HZ6',
          1 => 'FEATURExtraceP9I50Y',
          2 => 'FEATURExtraceWNT0B5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RegionId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '地域ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'cn-beijing',
          ),
        ),
        1 => 
        array (
          'name' => 'Service',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '服务Code。',
            'type' => 'string',
            'required' => false,
            'example' => 'xtrace',
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
                'description' => 'Id of the request',
                'type' => 'string',
                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED',
              ),
              'Data' => 
              array (
                'description' => '查询结果',
                'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED\\",\\n  \\"Data\\": \\"true\\"\\n}","type":"json"}]',
      'title' => '检查商业化状态',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'xtrace.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'xtrace.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'xtrace.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'xtrace.cn-hangzhou.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'xtrace.cn-shanghai.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'xtrace.cn-shenzhen.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'xtrace.cn-hongkong.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'xtrace.ap-southeast-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'xtrace.us-west-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'xtrace.cn-shanghai-finance-1.aliyuncs.com',
    ),
  ),
);
<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'xtrace',
        'version' => '2019-08-08',
    ],
    'directories' => [
        'GetTagKey',
        'GetTagVal',
        'GetTrace',
        'ListIpOrHosts',
        'ListServices',
        'ListSpanNames',
        'QueryMetric',
        'SearchTraces',
        [
            'id' => 188134,
            'title' => '访问控制',
            'type' => 'directory',
            'children' => [
                'OpenXtraceService',
                'CheckCommercialStatus',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetTagKey' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '55548',
                'abilityTreeNodes' => [
                    'FEATURExtraceZX0L4J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务名称，又称为应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'appTest',
                    ],
                ],
                [
                    'name' => 'SpanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Span名称，又称为Operation名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createOrder',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间的时间戳，精确到毫秒（ms）。'."\n"
                            .'><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。</notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1575561600000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间的时间戳，精确到毫秒（ms）。'."\n"
                            .'><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。</notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1575622455686',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                            'TagKeys' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagKey' => [
                                        'description' => '标签键列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签键列表。',
                                            'type' => 'string',
                                            'example' => '{"TagKey":["date","resultCount","aTid"]}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"TagKeys\\": {\\n    \\"TagKey\\": [\\n      \\"{\\\\\\"TagKey\\\\\\":[\\\\\\"date\\\\\\",\\\\\\"resultCount\\\\\\",\\\\\\"aTid\\\\\\"]}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTagKeyResponse> \\n  <TagKeys> \\n    <TagKey>date</TagKey>  \\n    <TagKey>resultCount</TagKey>  \\n    <TagKey>aTid</TagKey>  \\n  </TagKeys>  \\n  <RequestId>7D6519C1-A92A-4F07-AC83-706D48204242</RequestId> \\n</GetTagKeyResponse>\\n","errorExample":""}]',
            'title' => '获取标签Key',
            'summary' => '调用GetTagKey接口获取标签键。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTagVal' => [
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
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '55549',
                'abilityTreeNodes' => [
                    'FEATURExtraceZX0L4J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务名称，又称为应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'appTest',
                    ],
                ],
                [
                    'name' => 'SpanName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Span名称，又称为Operation名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'createOrder',
                    ],
                ],
                [
                    'name' => 'TagKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签键。'."\n"
                            ."\n"
                            .'获取TagKey，请参见[GetTagKey](~~2399667~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'span.kind',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，精确到毫秒（ms）。'."\n"
                            .'><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1575561600000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，精确到毫秒（ms）。'."\n"
                            .'><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1575622455686',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                            'TagValues' => [
                                'type' => 'object',
                                'properties' => [
                                    'TagValue' => [
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '标签值列表。',
                                            'type' => 'string',
                                            'example' => '{"TagValue":["server"]}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"TagValues\\": {\\n    \\"TagValue\\": [\\n      \\"{\\\\\\"TagValue\\\\\\":[\\\\\\"server\\\\\\"]}\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTagValResponse> \\n  <RequestId>D36507D4-FD30-430B-BEC4-738661CFB86C</RequestId>  \\n  <TagValues> \\n    <TagValue>server</TagValue> \\n  </TagValues> \\n</GetTagValResponse>","errorExample":""}]',
            'title' => '获取标签Value',
            'summary' => '获取上报的链路数据中指定Tag Key对应的Tag Value。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTrace' => [
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
                    'name' => 'TraceID',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调用链ID，链路请求的唯一标识。可在控制台的**调用链分析**页面获取。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1c6881aab84191a4******',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型，取值为`XTRACE`或空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'XTRACE',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
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
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                            'Spans' => [
                                'type' => 'object',
                                'properties' => [
                                    'Span' => [
                                        'description' => 'Span列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'span列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SpanId' => [
                                                    'description' => 'Span ID。',
                                                    'type' => 'string',
                                                    'example' => 'fec891bb8f8XXX',
                                                ],
                                                'HaveStack' => [
                                                    'description' => '是否有子Span。取值：'."\n"
                                                        ."\n"
                                                        .'- `true`：有子Span。'."\n"
                                                        ."\n"
                                                        .'- `false`：无子Span。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'ServiceIp' => [
                                                    'description' => '服务IP地址，即Span所在的机器IP地址。',
                                                    'type' => 'string',
                                                    'example' => '192.168.XXX.XXX',
                                                ],
                                                'OperationName' => [
                                                    'description' => 'Span名称。',
                                                    'type' => 'string',
                                                    'example' => '/api',
                                                ],
                                                'ParentSpanId' => [
                                                    'description' => '父Span ID。',
                                                    'type' => 'string',
                                                    'example' => 'fec891bb8f8XXX',
                                                ],
                                                'ResultCode' => [
                                                    'description' => '返回码。',
                                                    'type' => 'string',
                                                    'example' => '200',
                                                ],
                                                'Duration' => [
                                                    'description' => '耗时，单位为毫秒（ms）。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'RpcId' => [
                                                    'description' => '表示Span之间的父子兄弟关系。 例如1.1是1.1.1的父亲Span， 而1.1.2和1.1.1是兄弟Span。',
                                                    'type' => 'string',
                                                    'example' => '1.1',
                                                ],
                                                'Timestamp' => [
                                                    'description' => 'Span的产生时间戳。单位为微秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1689845513298000',
                                                ],
                                                'ServiceName' => [
                                                    'description' => '服务名称，又称为应用名称。',
                                                    'type' => 'string',
                                                    'example' => 'server1',
                                                ],
                                                'TraceID' => [
                                                    'description' => '调用链ID，链路请求的唯一标识。',
                                                    'type' => 'string',
                                                    'example' => '1c6881aab84191a4',
                                                ],
                                                'TagEntryList' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'TagEntry' => [
                                                            'description' => '标签列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '标签列表。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Key' => [
                                                                        'description' => 'Span的标签键。',
                                                                        'type' => 'string',
                                                                        'example' => 'logLevel',
                                                                    ],
                                                                    'Value' => [
                                                                        'description' => 'Span的标签值。',
                                                                        'type' => 'string',
                                                                        'example' => 'Warning',
                                                                    ],
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'LogEventList' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'LogEvent' => [
                                                            'description' => '日志事件列表。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '日志事件列表。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'Timestamp' => [
                                                                        'description' => '日志事件的产生时间戳。',
                                                                        'type' => 'integer',
                                                                        'format' => 'int64',
                                                                        'example' => '1583683202047000',
                                                                    ],
                                                                    'TagEntryList' => [
                                                                        'type' => 'object',
                                                                        'properties' => [
                                                                            'TagEntry' => [
                                                                                'description' => '标签列表。',
                                                                                'type' => 'array',
                                                                                'items' => [
                                                                                    'description' => '标签列表。',
                                                                                    'type' => 'object',
                                                                                    'properties' => [
                                                                                        'Key' => [
                                                                                            'description' => '日志事件的标签键。',
                                                                                            'type' => 'string',
                                                                                            'example' => 'logLevel',
                                                                                        ],
                                                                                        'Value' => [
                                                                                            'description' => '日志事件的标签值。',
                                                                                            'type' => 'string',
                                                                                            'example' => 'Warning',
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
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"Spans\\": {\\n    \\"Span\\": [\\n      {\\n        \\"SpanId\\": \\"fec891bb8f8XXX\\",\\n        \\"HaveStack\\": false,\\n        \\"ServiceIp\\": \\"192.168.XXX.XXX\\",\\n        \\"OperationName\\": \\"/api\\",\\n        \\"ParentSpanId\\": \\"fec891bb8f8XXX\\",\\n        \\"ResultCode\\": \\"200\\",\\n        \\"Duration\\": 1000,\\n        \\"RpcId\\": \\"1.1\\",\\n        \\"Timestamp\\": 1689845513298000,\\n        \\"ServiceName\\": \\"server1\\",\\n        \\"TraceID\\": \\"1c6881aab84191a4\\",\\n        \\"TagEntryList\\": {\\n          \\"TagEntry\\": [\\n            {\\n              \\"Key\\": \\"logLevel\\",\\n              \\"Value\\": \\"Warning\\"\\n            }\\n          ]\\n        },\\n        \\"LogEventList\\": {\\n          \\"LogEvent\\": [\\n            {\\n              \\"Timestamp\\": 1583683202047000,\\n              \\"TagEntryList\\": {\\n                \\"TagEntry\\": [\\n                  {\\n                    \\"Key\\": \\"logLevel\\",\\n                    \\"Value\\": \\"Warning\\"\\n                  }\\n                ]\\n              }\\n            }\\n          ]\\n        }\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetTraceResponse> \\n  <RequestId>1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED</RequestId>  \\n  <Spans> \\n    <Span> \\n      <HaveStack>false</HaveStack>  \\n      <ParentSpanId>fec891bb8f8XXX</ParentSpanId>  \\n      <ServiceIp>192.168.XXX.XXX</ServiceIp>  \\n      <ServiceName>server1</ServiceName>  \\n      <OperationName>/api</OperationName>  \\n      <RpcId>1.1</RpcId>  \\n      <TraceID>1c6881aab84191a4</TraceID>  \\n      <Duration>1000</Duration>  \\n      <Timestamp>1583683202047000</Timestamp>  \\n      <ResultCode>200</ResultCode>  \\n      <SpanId>fec891bb8f8XXX</SpanId>  \\n      <TagEntryList> \\n        <TagEntry> \\n          <Value>Warning</Value>  \\n          <Key>logLevel</Key> \\n        </TagEntry> \\n      </TagEntryList>  \\n      <LogEventList> \\n        <LogEvent> \\n          <Timestamp>1583683202047000</Timestamp>  \\n          <TagEntryList> \\n            <TagEntry> \\n              <Value>Warning</Value>  \\n              <Key>logLevel</Key> \\n            </TagEntry> \\n          </TagEntryList> \\n        </LogEvent> \\n      </LogEventList> \\n    </Span> \\n  </Spans> \\n</GetTraceResponse>","errorExample":""}]',
            'title' => '获取调用链路详情',
            'summary' => '调用GetTrace接口获取调用链路详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListIpOrHosts' => [
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
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '55553',
                'abilityTreeNodes' => [
                    'FEATURExtraceOGOOWE',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称。若为空则查询该地域下所有应用的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间的时间戳，精确到毫秒（ms）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583683200000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间的时间戳，精确到毫秒（ms）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1583723776974',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1******',
                            ],
                            'IpNames' => [
                                'type' => 'object',
                                'properties' => [
                                    'IpName' => [
                                        'description' => 'IP地址列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'IP地址列表。',
                                            'type' => 'string',
                                            'example' => '[ "172.19.XXX.XXX", "10.0.X.X" ]',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1******\\",\\n  \\"IpNames\\": {\\n    \\"IpName\\": [\\n      \\"[ \\\\\\"172.19.XXX.XXX\\\\\\", \\\\\\"10.0.X.X\\\\\\" ]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListIpOrHostsResponse>\\n    <RequestId>23D9757C-CB58-41A5-BBE7-2A9A0652****</RequestId>\\n    <IpNames>\\n        <IpName>172.19.XXX.XXX</IpName>\\n        <IpName>10.0.X.X</IpName>\\n    </IpNames>\\n</ListIpOrHostsResponse>","errorExample":""}]',
            'title' => '获取IP地址或机器名',
            'summary' => '获取链路数据中的IP地址或者机器名称，可获取整个地域或某个应用下的所有IP地址。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListServices' => [
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
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '55554',
                'abilityTreeNodes' => [
                    'FEATURExtraceF2LCA8',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型，取值为`XTRACE`或空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'XTRACE',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                            'Services' => [
                                'type' => 'object',
                                'properties' => [
                                    'Service' => [
                                        'description' => '应用列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '应用列表。',
                                            'type' => 'object',
                                            'properties' => [
                                                'ServiceName' => [
                                                    'description' => '应用名称。',
                                                    'type' => 'string',
                                                    'example' => 'a3',
                                                ],
                                                'Pid' => [
                                                    'description' => '应用ID。',
                                                    'type' => 'string',
                                                    'example' => 'XXXqn3ly@741623b4e915df8',
                                                ],
                                                'RegionId' => [
                                                    'description' => '地域ID。',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"Services\\": {\\n    \\"Service\\": [\\n      {\\n        \\"ServiceName\\": \\"a3\\",\\n        \\"Pid\\": \\"XXXqn3ly@741623b4e915df8\\",\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListServicesResponse> \\n  <Services> \\n    <Service> \\n      <ServiceName>a3</ServiceName>  \\n      <Pid>XXXqn3ly@741623b4e915df8</Pid>  \\n      <RegionId>cn-hangzhou</RegionId> \\n    </Service> \\n  </Services> \\n</ListServicesResponse>","errorExample":""}]',
            'title' => '获取应用列表',
            'summary' => '调用ListServices获取应用列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListSpanNames' => [
            'summary' => '获取指定地域下所有的Span名称，也可获取某个微服务的所有Span名称。',
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
            'systemTags' => [
                'operationType' => 'list',
                'abilityTreeCode' => '55555',
                'abilityTreeNodes' => [
                    'FEATURExtraceZX0L4J',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务名称，又称为应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service 1',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间的时间戳，精确到毫秒（ms）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1714298814000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间的时间戳，精确到毫秒（ms）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1714385214000',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                            'SpanNames' => [
                                'type' => 'object',
                                'properties' => [
                                    'SpanName' => [
                                        'description' => 'Span名称列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'Span名称列表。',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'    "SpanName": ['."\n"
                                                .'      "GET /**",'."\n"
                                                .'      "path_selection",'."\n"
                                                .'      "POST"'."\n"
                                                .'    ]'."\n"
                                                .'  }',
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
                        'errorCode' => 'ParameterRegionIdMissing',
                        'errorMessage' => '区域参数缺失',
                    ],
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => '内部错误,建议重试,如果多次重试报错请联系钉钉服务账号',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'APINotAuthorize',
                        'errorMessage' => '当前用户无权限访问该接口',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ServiceNameNotExist',
                        'errorMessage' => 'ServiceName不存在',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"SpanNames\\": {\\n    \\"SpanName\\": [\\n      \\"{\\\\n    \\\\\\"SpanName\\\\\\": [\\\\n      \\\\\\"GET /**\\\\\\",\\\\n      \\\\\\"path_selection\\\\\\",\\\\n      \\\\\\"POST\\\\\\"\\\\n    ]\\\\n  }\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<ListSpanNamesResponse> \\n  <SpanNames> \\n    <SpanName>rpc0</SpanName>  \\n    <SpanName>rpc1.1</SpanName>  \\n    <SpanName>rpc1.1.1</SpanName> \\n  </SpanNames>  \\n  <RequestId>79C84C64-9951-477E-96F3-7FA44128C601</RequestId> \\n</ListSpanNamesResponse>","errorExample":""}]',
            'title' => '获取所有Span名称',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'QueryMetric' => [
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
                'abilityTreeCode' => '55557',
                'abilityTreeNodes' => [
                    'FEATURExtraceOGOOWE',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'IntervalInSec',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数据片的时间间隔，单位为毫秒，最小值为60000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '100000',
                    ],
                ],
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，精确到毫秒（ms）。'."\n"
                            ."\n"
                            .'><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1575561600000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，精确到毫秒（ms）。'."\n"
                            ."\n"
                            .'><notice>该字段类型为 Long，在序列化/反序列化的过程中可能导致精度丢失，请注意数值不得大于 9007199254740991。></notice>',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1575622455686',
                    ],
                ],
                [
                    'name' => 'OrderBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段，根据查询返回字段中的某个字段排序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'count',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '返回数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'Metric',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指标名称，取值：'."\n"
                            ."\n"
                            .'-  `appstat.incall`：链路统计。'."\n"
                            ."\n"
                            .'- `appstat.sql`：SQL统计。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'appstat.incall',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序，取值：'."\n"
                            ."\n"
                            .'- `ASC`：升序。'."\n"
                            ."\n"
                            .'- `DESC`：降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ASC',
                    ],
                ],
                [
                    'name' => 'ProxyUserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '代理用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testefgag12',
                    ],
                ],
                [
                    'name' => 'Filters',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '过滤字段列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '过滤字段列表',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '过滤字段的Key。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http.status_code',
                                ],
                                'Value' => [
                                    'description' => '过滤字段的Value。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '200',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'Dimensions',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '维度，即GroupBy分组。',
                        'type' => 'array',
                        'items' => [
                            'description' => '指标对应的维度。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'pid',
                        ],
                        'required' => false,
                        'example' => 'RT',
                        'maxItems' => 5,
                    ],
                ],
                [
                    'name' => 'Measures',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '查询字段。',
                        'type' => 'array',
                        'items' => [
                            'description' => '**Metric**取值为`appstat.incall`时，**Measures**取值：'."\n"
                                ."\n"
                                .'- rt：响应时间。'."\n"
                                .'- count：总数。'."\n"
                                .'- error：错误数。'."\n"
                                .'- exception：异常。'."\n"
                                .'- errorrate：错误率。'."\n"
                                .'- qps：每秒请求数。'."\n"
                                ."\n"
                                .'**Metric**取值为`appstat.sql`时，**Measures**取值：'."\n"
                                ."\n"
                                .'- rt：响应时间。'."\n"
                                .'- count：总数。'."\n"
                                .'- error：错误数。'."\n"
                                .'- slowcount：慢调用次数。',
                            'type' => 'string',
                            'required' => false,
                            'example' => 'rt',
                        ],
                        'required' => true,
                        'example' => 'count',
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'description' => '返回统计信息。',
                                'type' => 'string',
                                'example' => '{ "Data": "{\\"data\\":[{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"}]}}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Data\\": \\"{ \\\\\\"Data\\\\\\": \\\\\\"{\\\\\\\\\\\\\\"data\\\\\\\\\\\\\\":[{\\\\\\\\\\\\\\"date\\\\\\\\\\\\\\":1583686800000,\\\\\\\\\\\\\\"count\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"rt\\\\\\\\\\\\\\":0,\\\\\\\\\\\\\\"rpc\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"childSpan3\\\\\\\\\\\\\\"}]}}\\",\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\"\\n}","errorExample":""},{"type":"xml","example":"<QueryMetricResponse> \\n  <RequestId>E2373982-D8CD-413D-B991-8EB678C01B4F</RequestId>  \\n  <Data>{\\"data\\":[{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583686800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583690400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583694000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583697600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583701200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583704800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583708400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583712000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583715600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583719200000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583722800000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583726400000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583730000000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583733600000,\\"count\\":0,\\"rt\\":0,\\"rpc\\":\\"parentSpan\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":0.01,\\"rpc\\":\\"childSpan3\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":305.18,\\"rpc\\":\\"childSpan2\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":305.25,\\"rpc\\":\\"childSpan\\"},{\\"date\\":1583737200000,\\"count\\":100,\\"__time__\\":1583683200,\\"rt\\":306.25,\\"rpc\\":\\"parentSpan\\"}],\\"actualSizeFromDB\\":0,\\"intervalInSec\\":3600,\\"resultSize\\":0,\\"successful\\":true}</Data> \\n</QueryMetricResponse>\\n","errorExample":""}]',
            'title' => '查询监控指标',
            'summary' => '调用QueryMetric查询相关监控指标。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SearchTraces' => [
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
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'StartTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始时间，精确到毫秒（ms）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1714298814000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束时间，精确到毫秒（ms）。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1714385214000',
                    ],
                ],
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。'."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'ServiceName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '微服务名称，又称为应用名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'service 1',
                    ],
                ],
                [
                    'name' => 'OperationName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Span名称，即某个跟踪点或埋点的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/api',
                    ],
                ],
                [
                    'name' => 'MinDuration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '大于某个时间跨度范围，单位为秒（s）。例如，2表示大于2秒的数据。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'AppType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用类型，取值为`XTRACE`或空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'XTRACE',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码，例如，5表示第5页。',
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
                        'description' => '每页的查询数据条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'Reverse',
                    'in' => 'query',
                    'schema' => [
                        'description' => '按照时间正序或者倒序排列。默认为`false`。取值：'."\n"
                            ."\n"
                            .'- `true`：倒序。'."\n"
                            ."\n"
                            .'- `false` ：顺序。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ServiceIp',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Span对应主机的IP地址。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '192.163.XXX.XXX',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '标签列表。',
                        'type' => 'array',
                        'items' => [
                            'description' => '标签列表。',
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'http.status_cod',
                                ],
                                'Value' => [
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '200',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 5,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1F******',
                            ],
                            'PageBean' => [
                                'description' => '返回数据的位置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'PageSize' => [
                                        'description' => '每页显示的数据条数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20',
                                    ],
                                    'PageNumber' => [
                                        'description' => '页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalCount' => [
                                        'description' => '总条数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '500',
                                    ],
                                    'TraceInfos' => [
                                        'type' => 'object',
                                        'properties' => [
                                            'TraceInfo' => [
                                                'description' => '返回的调用链信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '返回的调用链信息。',
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'OperationName' => [
                                                            'description' => 'Span名称。',
                                                            'type' => 'string',
                                                            'example' => '/api',
                                                        ],
                                                        'ServiceIp' => [
                                                            'description' => 'Span所在的主机IP地址或主机名称。',
                                                            'type' => 'string',
                                                            'example' => '192.163.XXX.XXX',
                                                        ],
                                                        'Duration' => [
                                                            'description' => '耗时，单位为秒（s）。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '2',
                                                        ],
                                                        'Timestamp' => [
                                                            'description' => 'Span产生时间，单位为毫秒（ms）。',
                                                            'type' => 'integer',
                                                            'format' => 'int64',
                                                            'example' => '1714306014000',
                                                        ],
                                                        'ServiceName' => [
                                                            'description' => '微服务名称，又称为应用名称。',
                                                            'type' => 'string',
                                                            'example' => 'service1',
                                                        ],
                                                        'TraceID' => [
                                                            'description' => '调用链ID。',
                                                            'type' => 'string',
                                                            'example' => '1c6881aab841******',
                                                        ],
                                                        'TagMap' => [
                                                            'description' => '标签信息。',
                                                            'type' => 'object',
                                                            'example' => '{"env":"dev"}',
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
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1F******\\",\\n  \\"PageBean\\": {\\n    \\"PageSize\\": 20,\\n    \\"PageNumber\\": 1,\\n    \\"TotalCount\\": 500,\\n    \\"TraceInfos\\": {\\n      \\"TraceInfo\\": [\\n        {\\n          \\"OperationName\\": \\"/api\\",\\n          \\"ServiceIp\\": \\"192.163.XXX.XXX\\",\\n          \\"Duration\\": 2,\\n          \\"Timestamp\\": 1714306014000,\\n          \\"ServiceName\\": \\"service1\\",\\n          \\"TraceID\\": \\"1c6881aab841******\\",\\n          \\"TagMap\\": {\\n            \\"env\\": \\"dev\\"\\n          }\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<SearchTracesResponse>\\n    <RequestId>1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED</RequestId>\\n    <PageBean>\\n        <PageSize>100</PageSize>\\n        <PageNumber>1</PageNumber>\\n        <TotalCount>1000</TotalCount>\\n        <TraceInfos>\\n            <OperationName>/api</OperationName>\\n            <ServiceIp>192.163.XXX.XXX</ServiceIp>\\n            <Duration>100</Duration>\\n            <Timestamp>1575561600000000</Timestamp>\\n            <ServiceName>service1</ServiceName>\\n            <TraceID>1c6881aab84191a4</TraceID>\\n        </TraceInfos>\\n    </PageBean>\\n</SearchTracesResponse>","errorExample":""}]',
            'title' => '查询调用链列表',
            'summary' => '调用SearchTraces查询调用链列表，可根据时间、应用名称、IP地址、Span名称、Tag等信息对调用链进行过滤查询。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'OpenXtraceService' => [
            'summary' => '开通链路追踪服务。',
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
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '55556',
                'abilityTreeNodes' => [
                    'FEATURExtraceQU1HZ6',
                    'FEATURExtraceP9I50Y',
                    'FEATURExtraceWNT0B5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
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
                            'Result' => [
                                'type' => 'string',
                            ],
                            'RequestId' => [
                                'description' => '请求id。',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1FC4****',
                            ],
                            'OrderId' => [
                                'description' => '订单id。',
                                'type' => 'string',
                                'example' => '155709986',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Result\\": \\"\\",\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1FC4****\\",\\n  \\"OrderId\\": \\"155709986\\"\\n}","type":"json"}]',
            'title' => '开通XTrace',
        ],
        'CheckCommercialStatus' => [
            'summary' => '检查商业化状态。',
            'methods' => [
                'get',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'abilityTreeCode' => '201972',
                'abilityTreeNodes' => [
                    'FEATURExtraceQU1HZ6',
                    'FEATURExtraceP9I50Y',
                    'FEATURExtraceWNT0B5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'RegionId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '地域ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'cn-beijing',
                    ],
                ],
                [
                    'name' => 'Service',
                    'in' => 'query',
                    'schema' => [
                        'description' => '服务Code。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xtrace',
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED',
                            ],
                            'Data' => [
                                'description' => '查询结果',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E2B6A4C-6B83-4062-8B6F-AEEC1FC47DED\\",\\n  \\"Data\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '检查商业化状态',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'xtrace.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'xtrace.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'xtrace.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'xtrace.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'xtrace.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'xtrace.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'xtrace.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'xtrace.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'xtrace.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'xtrace.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];
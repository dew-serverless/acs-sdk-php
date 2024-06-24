<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Ons',
    'version' => '2019-02-14',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 121335,
      'title' => '服务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OpenOnsService',
      ),
    ),
    1 => 
    array (
      'id' => 121341,
      'title' => '消息',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsMessageTrace',
        1 => 'OnsMessageGetByMsgId',
        2 => 'OnsMessageGetByKey',
        3 => 'OnsMessagePageQueryByTopic',
        4 => 'OnsMessageDetail',
      ),
    ),
    2 => 
    array (
      'id' => 121347,
      'title' => '地域',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsRegionList',
      ),
    ),
    3 => 
    array (
      'id' => 121349,
      'title' => '实例',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsInstanceCreate',
        1 => 'OnsInstanceBaseInfo',
        2 => 'OnsInstanceUpdate',
        3 => 'OnsInstanceInServiceList',
        4 => 'OnsInstanceDelete',
      ),
    ),
    4 => 
    array (
      'id' => 121355,
      'title' => 'Topic',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsTopicCreate',
        1 => 'OnsTopicStatus',
        2 => 'OnsTopicList',
        3 => 'OnsTopicSubDetail',
        4 => 'OnsTopicDelete',
      ),
    ),
    5 => 
    array (
      'id' => 121362,
      'title' => 'Group',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsGroupCreate',
        1 => 'OnsGroupConsumerUpdate',
        2 => 'OnsGroupList',
        3 => 'OnsGroupSubDetail',
        4 => 'OnsGroupDelete',
      ),
    ),
    6 => 
    array (
      'id' => 121371,
      'title' => '标签',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ListTagResources',
        1 => 'TagResources',
        2 => 'UntagResources',
      ),
    ),
    7 => 
    array (
      'id' => 121375,
      'title' => '消费',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsConsumerStatus',
        1 => 'OnsConsumerAccumulate',
        2 => 'OnsConsumerGetConnection',
        3 => 'OnsConsumerResetOffset',
        4 => 'OnsConsumerTimeSpan',
        5 => 'OnsMessagePush',
      ),
    ),
    8 => 
    array (
      'id' => 121382,
      'title' => '消息收发数据统计',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsTrendTopicInputTps',
        1 => 'OnsTrendGroupOutputTps',
      ),
    ),
    9 => 
    array (
      'id' => 121389,
      'title' => '轨迹',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsTraceQueryByMsgId',
        1 => 'OnsTraceQueryByMsgKey',
        2 => 'OnsTraceGetResult',
      ),
    ),
    10 => 
    array (
      'id' => 121393,
      'title' => '死信',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsDLQMessagePageQueryByGroupId',
        1 => 'OnsDLQMessageGetById',
        2 => 'OnsDLQMessageResendById',
      ),
    ),
    11 => 
    array (
      'id' => 187862,
      'title' => '其他',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'OnsTopicUpdate',
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
    'OpenOnsService' => 
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '8C5B4603-8977-4513-AB60-9C3E2F88****',
              ),
              'OrderId' => 
              array (
                'description' => '订单ID。',
                'type' => 'string',
                'example' => '2068689****0272',
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
            'errorCode' => 'OrderOpend',
            'errorMessage' => '您已开通，请前往控制台使用。',
          ),
          1 => 
          array (
            'errorCode' => 'PermissionDenied',
            'errorMessage' => '当前子账号无权限，请为子账号授权。',
          ),
          2 => 
          array (
            'errorCode' => 'PriceWanHuaTongSys',
            'errorMessage' => '询价调用万花筒错误。',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"8C5B4603-8977-4513-AB60-9C3E2F88****\\",\\n  \\"OrderId\\": \\"2068689****0272\\"\\n}","errorExample":""},{"type":"xml","example":"<OpenOnsServiceResponse>\\n<RequestId>8C5B4603-8977-4513-AB60-9C3E2F88****</RequestId>\\n<OrderId>2068689****0272</OrderId>\\n</OpenOnsServiceResponse>","errorExample":""}]',
      'title' => '开通服务',
      'summary' => '调用OpenOnsService开通云消息队列 RocketMQ 版服务。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

本接口用于第一次使用云消息队列 RocketMQ 版的场景。开通服务后，您才能使用云消息队列 RocketMQ 版。

目前，仅可通过华东1（杭州）地域开通云消息队列 RocketMQ 版服务。开通服务不被计费。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OpenOnsService**接口，您还可以通过云消息队列 RocketMQ 版控制台开通服务，具体操作，请参见[开通消息队列服务](~~169006~~)。',
    ),
    'OnsMessageTrace' => 
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        1 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询消息轨迹的消息ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E05791C117818B4AAC23B1BB0CE****',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'EAE5BE23-37A1-4354-94D6-E44AE17E****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MessageTrack' => 
                  array (
                    'description' => '查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TrackType' => 
                        array (
                          'description' => '当前状态。取值说明如下：

- **CONSUMED**：已消费。
- **CONSUMED_BUT_FILTERED**：不符合Group ID的订阅条件，消息已被过滤，未消费。
- **NOT_CONSUME_YET**：暂未消费。
- **NOT_ONLINE**：客户端不在线。
- **UNKNOWN**：其他问题。',
                          'type' => 'string',
                          'example' => 'CONSUMED',
                        ),
                        'ConsumerGroup' => 
                        array (
                          'description' => '订阅该Topic的消费者所对应的Group ID。',
                          'type' => 'string',
                          'example' => 'GID_test_group_id',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '需查询的消息所对应的实例ID。',
                          'type' => 'string',
                          'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"EAE5BE23-37A1-4354-94D6-E44AE17E****\\",\\n  \\"Data\\": {\\n    \\"MessageTrack\\": [\\n      {\\n        \\"TrackType\\": \\"CONSUMED\\",\\n        \\"ConsumerGroup\\": \\"GID_test_group_id\\",\\n        \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsMessageTraceResponse>\\n<Data>\\n    <MessageTrack>\\n        <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n        <ConsumerGroup>GID_test_group_id</ConsumerGroup>\\n        <TrackType>CONSUMED</TrackType>\\n    </MessageTrack>\\n</Data>\\n<RequestId>EAE5BE23-37A1-4354-94D6-E44AE17****</RequestId>\\n</OnsMessageTraceResponse>","errorExample":""}]',
      'title' => '查看消息消费结果',
      'summary' => '调用OnsMessageTrace根据Message ID来判断目标消息是否曾被消费过。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 本接口一般在消费异常，需要判断消息消费状态，初步排查原因时使用。

- 本接口的实现基于云消息队列 RocketMQ 版的内部位点机制，在大部分场景下判断结果可信，但如果应用方进行过重置位点已经清除消息等操作，则判断结果可能有误。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsMessageTrace**接口，您还可以通过云消息队列 RocketMQ 版控制台查看消息的消费状态。具体操作，请参见[查询消息轨迹](~~43357~~)。',
    ),
    'OnsMessageGetByMsgId' => 
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
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E0578FE110F18B4AAC235C05F2*****',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'StoreSize' => 
                  array (
                    'description' => '消息大小。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '407',
                  ),
                  'ReconsumeTimes' => 
                  array (
                    'description' => '消息重试消费的次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'StoreTimestamp' => 
                  array (
                    'description' => '被服务端存储的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026708',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '消息ID，即Message ID。',
                    'type' => 'string',
                    'example' => '1E0578FE110F18B4AAC235C0C8460BA2',
                  ),
                  'StoreHost' => 
                  array (
                    'description' => '存储该消息的服务器实例。',
                    'type' => 'string',
                    'example' => '11.220.***.***:10911',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息的Topic。',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                  'PropertyList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MessageProperty' => 
                      array (
                        'description' => '消息属性列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Value' => 
                            array (
                              'description' => '消息属性的值。',
                              'type' => 'string',
                              'example' => 'TagA',
                            ),
                            'Name' => 
                            array (
                              'description' => '消息属性。取值说明如下：

- **TRACE_ON**：是否有消息轨迹
- **KEYS**：消息的Key属性
- **TAGS**：消息的Tag属性
- **INSTANCE_ID**：消息所在的实例的ID

更多概念信息，请参见[名词解释](~~29533~~)。',
                              'type' => 'string',
                              'example' => 'TAGS',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'BornTimestamp' => 
                  array (
                    'description' => '生成时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026630',
                  ),
                  'BodyCRC' => 
                  array (
                    'description' => '消息体CRC校验值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '914112295',
                  ),
                  'BornHost' => 
                  array (
                    'description' => '生成该消息的客户端实例。',
                    'type' => 'string',
                    'example' => '42.120.**.**:64646',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\",\\n  \\"Data\\": {\\n    \\"StoreSize\\": 407,\\n    \\"ReconsumeTimes\\": 1,\\n    \\"StoreTimestamp\\": 1570761026708,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"MsgId\\": \\"1E0578FE110F18B4AAC235C0C8460BA2\\",\\n    \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n    \\"Topic\\": \\"test-mq_topic\\",\\n    \\"PropertyList\\": {\\n      \\"MessageProperty\\": [\\n        {\\n          \\"Value\\": \\"TagA\\",\\n          \\"Name\\": \\"TAGS\\"\\n        }\\n      ]\\n    },\\n    \\"BornTimestamp\\": 1570761026630,\\n    \\"BodyCRC\\": 914112295,\\n    \\"BornHost\\": \\"42.120.**.**:64646\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsMessageGetByMsgIdResponse>\\n<Data>\\n    <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <ReconsumeTimes>1</ReconsumeTimes>\\n    <BornHost>42.120.**.**:64646</BornHost>\\n    <BodyCRC>914112295</BodyCRC>\\n    <StoreHost>11.220.***.***:10911</StoreHost>\\n    <StoreTimestamp>1570761026708</StoreTimestamp>\\n    <BornTimestamp>1570761026630</BornTimestamp>\\n    <Topic>test-mq_topic</Topic>\\n    <StoreSize>407</StoreSize>\\n    <PropertyList>\\n        <MessageProperty>\\n            <Name>TAGS</Name>\\n            <Value>TagA</Value>\\n        </MessageProperty>\\n    </PropertyList>\\n</Data>\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\n</OnsMessageGetByMsgIdResponse>","errorExample":""}]',
      'title' => '通过MsgId查询消息',
      'summary' => '通过传入 Message ID 查询指定消息的信息以及判断该指定的消息是否曾被消费过。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 如遇消息消费有问题，则可通过该接口查询具体发送的消息内容来排查问题。

- 根据Message ID查询消息的方式属于精确查询，查询条件需要的Message ID从每次消息发送成功的SendResult中获取，因此业务方必须存储每次发送消息的结果。查询到的信息包括发送时间、存储服务器和消息的Key和Tag等属性。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsMessageGetByMsgId**接口，您还可以通过消息队列RocketMQ版控制台查看消息的详细信息。具体操作，请参见[消息查询](~~29540~~)。',
    ),
    'OnsMessageGetByKey' => 
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        1 => 
        array (
          'name' => 'Key',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Message Key。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'messageKey1',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'OnsRestMessageDo' => 
                  array (
                    'description' => '查询结果列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'StoreSize' => 
                        array (
                          'description' => '消息大小。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '406',
                        ),
                        'ReconsumeTimes' => 
                        array (
                          'description' => '消息重试消费的次数。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'StoreTimestamp' => 
                        array (
                          'description' => '被Broker存储的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570760999811',
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'MQ_INST_111111111111_DOxxxxxx',
                        ),
                        'MsgId' => 
                        array (
                          'description' => '消息ID，即Message ID。',
                          'type' => 'string',
                          'example' => '1E0578FE110F18B4AAC235C05F2*****',
                        ),
                        'StoreHost' => 
                        array (
                          'description' => '存储该消息的服务器实例。',
                          'type' => 'string',
                          'example' => '11.193.***.***:10911',
                        ),
                        'Topic' => 
                        array (
                          'description' => '消息的Topic。',
                          'type' => 'string',
                          'example' => 'test-mq_topic',
                        ),
                        'PropertyList' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'MessageProperty' => 
                            array (
                              'description' => '消息属性列表。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Value' => 
                                  array (
                                    'description' => '消息属性的取值。',
                                    'type' => 'string',
                                    'example' => 'TagA',
                                  ),
                                  'Name' => 
                                  array (
                                    'description' => '消息属性。取值说明如下：

- **TRACE_ON**：是否有消息轨迹
- **KEYS**：消息的Key属性
- **TAGS**：消息的Tag属性
- **INSTANCE_ID**：消息所在的实例的ID

更多概念信息请参见[名词解释](~~29533~~)。',
                                    'type' => 'string',
                                    'example' => 'TAGS',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'BornTimestamp' => 
                        array (
                          'description' => '生成时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570760999721',
                        ),
                        'BodyCRC' => 
                        array (
                          'description' => '消息体CRC校验值。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '914112295',
                        ),
                        'BornHost' => 
                        array (
                          'description' => '生成该消息的客户端实例。',
                          'type' => 'string',
                          'example' => '42.120.***.***:59270',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\",\\n  \\"Data\\": {\\n    \\"OnsRestMessageDo\\": [\\n      {\\n        \\"StoreSize\\": 406,\\n        \\"ReconsumeTimes\\": 1,\\n        \\"StoreTimestamp\\": 1570760999811,\\n        \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n        \\"MsgId\\": \\"1E0578FE110F18B4AAC235C05F2*****\\",\\n        \\"StoreHost\\": \\"11.193.***.***:10911\\",\\n        \\"Topic\\": \\"test-mq_topic\\",\\n        \\"PropertyList\\": {\\n          \\"MessageProperty\\": [\\n            {\\n              \\"Value\\": \\"TagA\\",\\n              \\"Name\\": \\"TAGS\\"\\n            }\\n          ]\\n        },\\n        \\"BornTimestamp\\": 1570760999721,\\n        \\"BodyCRC\\": 914112295,\\n        \\"BornHost\\": \\"42.120.***.***:59270\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsMessageGetByKeyResponse>\\n<Data>\\n    <MsgId>1E0578FE110F18B4AAC235C05F2*****</MsgId>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <ReconsumeTimes>1</ReconsumeTimes>\\n    <BornHost>42.120.**.**:64646</BornHost>\\n    <BodyCRC>914112295</BodyCRC>\\n    <StoreHost>11.220.***.***:10911</StoreHost>\\n    <StoreTimestamp>1570761026708</StoreTimestamp>\\n    <BornTimestamp>1570761026630</BornTimestamp>\\n    <Topic>test-mq_topic</Topic>\\n    <StoreSize>407</StoreSize>\\n    <PropertyList>\\n        <MessageProperty>\\n            <Name>TAGS</Name>\\n            <Value>TagA</Value>\\n        </MessageProperty>\\n    </PropertyList>\\n</Data>\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\n</OnsMessageGetByKeyResponse>","errorExample":""}]',
      'title' => '根据Message Key查询消息',
      'summary' => '根据 Topic 和 Message Key 模糊查询消息信息列表。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 使用本接口根据Message Key查询消息的方式属于模糊查询。由于业务方的Key可能不唯一，所以查询结果可能为多条。

- 本接口用在业务方无法获取Message ID的场景，在该场景下的调用步骤如下所示：

    1. 调用本接口模糊查询得到Message ID列表。

    2. 调用**OnsMessageGetByMsgId**接口精确查询。**OnsMessageGetByMsgId**接口的详细信息，请参见[OnsMessageGetByMsgId](~~29607~~)。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsMessageGetByKey**接口，您还可以通过云消息队列 RocketMQ 版控制台查看消息的详细信息。具体操作，请参见[消息查询](~~29540~~)。',
    ),
    'OnsMessagePageQueryByTopic' => 
    array (
      'summary' => '分页查询指定时间段内指定Topic内存在的所有消息。',
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        1 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳，单位：毫秒。
通过**TaskId**进行后续取消息时，该参数设置的值不生效，默认以第一次查询时输入的起始时间为准。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570723200000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳，单位：毫秒。
通过**TaskId**进行后续取消息时，该参数设置的值不生效，默认以第一次查询时输入的终止时间为准。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570809600000',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询任务的ID，首次查询不需要输入，后续取消息必须传入，根据前一次的返回结果取出该字段。',
            'type' => 'string',
            'required' => false,
            'example' => '0BC1310300002A9F000021E4D7A48346',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前取第几页消息，从1开始递增，最大值为50，取消息时不可超过最大页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询，每页最多显示的消息数量，默认是20，最小5条，最多50条。
通过**TaskId**进行后续取消息时，该参数设置的值不生效，默认以第一次查询时输入的每页消息数量为准。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '查询结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '5DC2A47E-2B31-4722-96C8-FA59C9*****',
              ),
              'MsgFoundDo' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前位于第几页。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'MsgFoundList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OnsRestMessageDo' => 
                      array (
                        'description' => '当前页的消息集合，该类型与[OnsMessageGetByMsgId](~~29607~~)的返回结果一致。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'StoreSize' => 
                            array (
                              'description' => '消息大小。单位：KB。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '406',
                            ),
                            'ReconsumeTimes' => 
                            array (
                              'description' => '消息重试消费的次数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'StoreTimestamp' => 
                            array (
                              'description' => '消息被服务端存储的时间戳，单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570760999811',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '实例ID。',
                              'type' => 'string',
                              'example' => 'MQ_INST_111111111111_DOxxxxxx',
                            ),
                            'MsgId' => 
                            array (
                              'description' => '消息ID，即Message ID。',
                              'type' => 'string',
                              'example' => '1E0578FE110F18B4AAC235C05F2*****',
                            ),
                            'StoreHost' => 
                            array (
                              'description' => '存储该消息的服务器实例。',
                              'type' => 'string',
                              'example' => '11.193.***.***:10911',
                            ),
                            'Topic' => 
                            array (
                              'description' => '消息的Topic。',
                              'type' => 'string',
                              'example' => 'test-mq_topic',
                            ),
                            'PropertyList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MessageProperty' => 
                                array (
                                  'description' => '消息属性列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Value' => 
                                      array (
                                        'description' => '消息属性的取值。',
                                        'type' => 'string',
                                        'example' => 'TagA',
                                      ),
                                      'Name' => 
                                      array (
                                        'description' => '消息属性。取值说明如下：

- **TRACE_ON**：是否有消息轨迹。
- **KEYS**：消息的Key属性。
- **TAGS**：消息的Tag属性。
- **INSTANCE_ID**：消息所在的实例的ID。

更多概念信息，请参见[名词解释](~~29533~~)。',
                                        'type' => 'string',
                                        'example' => 'TAGS',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'BornTimestamp' => 
                            array (
                              'description' => '消息生成的时间戳，单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570760999721',
                            ),
                            'BodyCRC' => 
                            array (
                              'description' => '消息体CRC校验值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '914112295',
                            ),
                            'BornHost' => 
                            array (
                              'description' => '生成该消息的客户端实例。',
                              'type' => 'string',
                              'example' => '42.120.***.***:59270',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MaxPageCount' => 
                  array (
                    'description' => '查询结果最大页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '400',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '第一次新建查询时，返回的查询任务ID，用于后续取消息。',
                    'type' => 'string',
                    'example' => '0BC1310300002A9F000021E4D7A48346',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"5DC2A47E-2B31-4722-96C8-FA59C9*****\\",\\n  \\"MsgFoundDo\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"MsgFoundList\\": {\\n      \\"OnsRestMessageDo\\": [\\n        {\\n          \\"StoreSize\\": 406,\\n          \\"ReconsumeTimes\\": 1,\\n          \\"StoreTimestamp\\": 1570760999811,\\n          \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n          \\"MsgId\\": \\"1E0578FE110F18B4AAC235C05F2*****\\",\\n          \\"StoreHost\\": \\"11.193.***.***:10911\\",\\n          \\"Topic\\": \\"test-mq_topic\\",\\n          \\"PropertyList\\": {\\n            \\"MessageProperty\\": [\\n              {\\n                \\"Value\\": \\"TagA\\",\\n                \\"Name\\": \\"TAGS\\"\\n              }\\n            ]\\n          },\\n          \\"BornTimestamp\\": 1570760999721,\\n          \\"BodyCRC\\": 914112295,\\n          \\"BornHost\\": \\"42.120.***.***:59270\\"\\n        }\\n      ]\\n    },\\n    \\"MaxPageCount\\": 400,\\n    \\"TaskId\\": \\"0BC1310300002A9F000021E4D7A48346\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询Topic内所有消息',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 按Topic查询消息的方式属于范围查询，查询结果会通过分页的方式展示给调用方，仅适用于没有任何搜索条件（Message ID和Message Key）的查询场景。
- 根据Topic查询消息应尽可能缩短查询的时间区间，否则匹配的消息过多，将无法定位问题。调用流程如下所示：
  
    1. 传入Topic、起止时间以及每页的消息数量，进行分页查询。如果有消息，默认返回第一页的消息、总页数和查询任务ID。 
    2. 根据返回的结果中的查询任务ID，进行后续取消息，取消息时传入查询任务ID以及当前页数。此时输入的起止时间和每页消息数量不生效，默认以第一次查询时输入的参数值为准。',
      'responseParamsDescription' => ' ',
    ),
    'OnsMessageDetail' => 
    array (
      'summary' => '调用OnsMessageDetail查询某条消息的具体信息。',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '云消息队列 RocketMQ 版实例ID。',
            'type' => 'string',
            'required' => true,
            'enumValueTitles' => 
            array (
            ),
            'example' => 'MQ_INST_184681981******_BXig0x6A',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        2 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'example' => '1E0578FE110F18B4AAC235C0******',
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
            'title' => 'Schema of Response',
            'description' => 'Schema of Response',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EAE5BE23-37A1-4354-94D6-E44AE17E****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'StoreSize' => 
                  array (
                    'description' => '消息大小。单位：KB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'ReconsumeTimes' => 
                  array (
                    'description' => '消息重试消费的次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '0',
                  ),
                  'StoreTimestamp' => 
                  array (
                    'description' => '消息被服务端存储的时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026708',
                  ),
                  'Body' => 
                  array (
                    'description' => '消息体内容经过Base 64算法加密后的字符串。',
                    'type' => 'string',
                    'example' => 'aGVsbG8=',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '云消息队列 RocketMQ 版实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_184681981******_BXig0x6A',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '消息ID，即Message ID。',
                    'type' => 'string',
                    'example' => '1E0578FE110F18B4AAC235C05F2*****',
                  ),
                  'StoreHost' => 
                  array (
                    'description' => '存储该消息的服务器实例。',
                    'type' => 'string',
                    'example' => '11.220.***.***:10911',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息所属的Topic。',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                  'PropertyList' => 
                  array (
                    'description' => '消息属性列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Value' => 
                        array (
                          'description' => '消息属性的取值。',
                          'type' => 'string',
                          'example' => 'MSG_REGION',
                        ),
                        'Name' => 
                        array (
                          'description' => '消息属性。取值说明如下：

- **TRACE_ON**：是否有消息轨迹。
- **MSG_REGION**：消息的Topic所属实例的地域ID。
- **\\_\\_MESSAGE\\_DECODED\\_TIME**：消息被解码的时间。
- **\\_\\_BORNHOST**：消息生产者客户端的IP地址。
- **UNIQ_KEY**：消息的唯一标识，即Message ID。

更多概念信息请参见[名词解释](~~29533~~)。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
                        ),
                      ),
                    ),
                  ),
                  'BornTimestamp' => 
                  array (
                    'description' => '消息生成的时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026630',
                  ),
                  'BodyCRC' => 
                  array (
                    'description' => '消息体CRC校验值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '907060870',
                  ),
                  'BornHost' => 
                  array (
                    'description' => '生成该消息的客户端实例。',
                    'type' => 'string',
                    'example' => '42.120.**.**:64646',
                  ),
                  'BodyStr' => 
                  array (
                    'description' => '消息体内容。',
                    'type' => 'string',
                    'example' => 'hello',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EAE5BE23-37A1-4354-94D6-E44AE17E****\\",\\n  \\"Data\\": {\\n    \\"StoreSize\\": 2,\\n    \\"ReconsumeTimes\\": 0,\\n    \\"StoreTimestamp\\": 1570761026708,\\n    \\"Body\\": \\"aGVsbG8=\\",\\n    \\"InstanceId\\": \\"MQ_INST_184681981******_BXig0x6A\\",\\n    \\"MsgId\\": \\"1E0578FE110F18B4AAC235C05F2*****\\",\\n    \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n    \\"Topic\\": \\"test-mq_topic\\",\\n    \\"PropertyList\\": [\\n      {\\n        \\"Value\\": \\"MSG_REGION\\",\\n        \\"Name\\": \\"cn-hangzhou\\"\\n      }\\n    ],\\n    \\"BornTimestamp\\": 1570761026630,\\n    \\"BodyCRC\\": 907060870,\\n    \\"BornHost\\": \\"42.120.**.**:64646\\",\\n    \\"BodyStr\\": \\"hello\\"\\n  }\\n}","type":"json"}]',
      'title' => '查询消息详细信息',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
    ),
    'OnsRegionList' => 
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
        'operationType' => 'list',
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
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '72D14A84-45E5-4E01-A6DB-F63C4721****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'RegionDo' => 
                  array (
                    'description' => '查询结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'UpdateTime' => 
                        array (
                          'description' => '更新时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1411623866000',
                        ),
                        'RegionName' => 
                        array (
                          'description' => '地域名称。',
                          'type' => 'string',
                          'example' => '华东1（杭州）',
                        ),
                        'ChannelName' => 
                        array (
                          'description' => '渠道名称。',
                          'type' => 'string',
                          'example' => 'ALIYUN',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1411623866000',
                        ),
                        'Id' => 
                        array (
                          'description' => 'ID。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1',
                        ),
                        'OnsRegionId' => 
                        array (
                          'description' => '地域的ID。',
                          'type' => 'string',
                          'example' => 'cn-hangzhou',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"72D14A84-45E5-4E01-A6DB-F63C4721****\\",\\n  \\"Data\\": {\\n    \\"RegionDo\\": [\\n      {\\n        \\"UpdateTime\\": 1411623866000,\\n        \\"RegionName\\": \\"华东1（杭州）\\",\\n        \\"ChannelName\\": \\"ALIYUN\\",\\n        \\"CreateTime\\": 1411623866000,\\n        \\"Id\\": 1,\\n        \\"OnsRegionId\\": \\"cn-hangzhou\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsRegionListResponse>\\n<Data>\\n    <RegionDo>\\n        <RegionName>公网</RegionName>\\n        <OnsRegionId>mq-internet-access</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华北1（青岛）</RegionName>\\n        <OnsRegionId>cn-qingdao</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华南1（深圳）</RegionName>\\n        <OnsRegionId>cn-shenzhen</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华东1（杭州）</RegionName>\\n        <OnsRegionId>cn-hangzhou</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华北2（北京）</RegionName>\\n        <OnsRegionId>cn-beijing</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华东2（上海）</RegionName>\\n        <OnsRegionId>cn-shanghai</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>西南1（成都）</RegionName>\\n        <OnsRegionId>cn-chengdu</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华北3（张家口）</RegionName>\\n        <OnsRegionId>cn-zhangjiakou</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>华北5（呼和浩特）</RegionName>\\n        <OnsRegionId>cn-huhehaote</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>中国（香港）</RegionName>\\n        <OnsRegionId>cn-hongkong</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>新加坡</RegionName>\\n        <OnsRegionId>ap-southeast-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>日本（东京）</RegionName>\\n        <OnsRegionId>ap-northeast-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>马来西亚（吉隆坡）</RegionName>\\n        <OnsRegionId>ap-southeast-3</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>印度（孟买）</RegionName>\\n        <OnsRegionId>ap-south-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>阿联酋（迪拜）</RegionName>\\n        <OnsRegionId>me-east-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>德国（法兰克福）</RegionName>\\n        <OnsRegionId>eu-central-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>美国（硅谷）</RegionName>\\n        <OnsRegionId>us-west-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>美国（弗吉尼亚）</RegionName>\\n        <OnsRegionId>us-east-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>澳大利亚（悉尼）</RegionName>\\n        <OnsRegionId>ap-southeast-2</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>英国（伦敦）</RegionName>\\n        <OnsRegionId>eu-west-1</OnsRegionId>\\n    </RegionDo>\\n    <RegionDo>\\n        <RegionName>印度尼西亚（雅加达）</RegionName>\\n        <OnsRegionId>ap-southeast-5</OnsRegionId>\\n    </RegionDo>\\n</Data>\\n<RequestId>72D14A84-45E5-4E01-A6DB-F63C4721****</RequestId>\\n</OnsRegionListResponse>","errorExample":""}]',
      'title' => '获取地域信息列表',
      'summary' => '调用OnsRegionList获取云消息队列 RocketMQ 版目前开放服务的地域（Region）信息列表。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
在您使用SDK接入云消息队列 RocketMQ 版服务并进行管控操作时，需要依次指定两个地域的信息，第二个地域的信息才是通过OnsRegionList接口获取。具体场景如下：

- 将您的应用接入云消息队列 RocketMQ 版服务：根据您的应用的部署地域选择就近的API网关接入点，填写相应的**regionId**。该**regionId**实际上只用于接入阿里云OpenAPI网关，因为云消息队列 RocketMQ 版通过阿里云OpenAPI平台（即POP）来提供API服务。

- 连接要进行管控操作的地域：指定您要对哪个地域的云消息队列 RocketMQ 版资源进行操作，填写该地域相应的ID。此时要填写的地域ID，可通过**OnsRegionList**接口获取。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsInstanceCreate' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '备注说明',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例名称。取值说明如下：
- 实例名称在该实例所部署的地域下要唯一，不可重名。

- 长度限制为3~64个字符，可以是中文、英文、数字、短划线（-）以及下划线（_）。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '测试实例',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
              'Data' => 
              array (
                'description' => '返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceId' => 
                  array (
                    'description' => '创建的实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_188077086902****_BXSuW61e',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => '创建的实例类型，取值说明如下：

- **1**：标准版实例
',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\",\\n  \\"Data\\": {\\n    \\"InstanceId\\": \\"MQ_INST_188077086902****_BXSuW61e\\",\\n    \\"InstanceType\\": 1\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsInstanceCreateResponse>\\n<Data>\\n    <InstanceId>MQ_INST_188077086902****_BXSuW61e</InstanceId>\\n    <InstanceType>1</InstanceType>\\n</Data>\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\n</OnsInstanceCreateResponse>","errorExample":""}]',
      'title' => '创建实例',
      'summary' => '调用OnsInstanceCreate接口创建实例。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
实例是用于云消息队列 RocketMQ 版服务的虚拟机资源，用来存储Topic和Group信息。该接口一般在新业务发布需要创建新的服务资源的情况下使用。
  
该接口只支持创建标准版实例，不支持创建铂金版实例。云消息队列 RocketMQ 版控制台同时支持创建标准版实例和铂金版实例，具体操作，请参见[实例管理](~~200153~~)。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsInstanceCreate**接口，您还可以通过云消息队列 RocketMQ 版控制台创建实例。具体操作，请参见[实例管理](~~200153~~)。',
    ),
    'OnsInstanceBaseInfo' => 
    array (
      'summary' => '调用OnsInstanceBaseInfo接口查询实例基本信息和收发消息的接入点。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询实例的ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_138015630679****_BAAy1Hac',
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
              'InstanceBaseInfo' => 
              array (
                'description' => '实例信息对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'Endpoints' => 
                  array (
                    'description' => '各个协议的接入点。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TcpEndpoint' => 
                      array (
                        'description' => 'TCP协议内网接入点。',
                        'type' => 'string',
                        'example' => 'http://MQ_INST_138015630679****_BAAy1Hac.cn-chengdu.mq-internal.aliyuncs.com:8080',
                      ),
                      'TcpInternetEndpoint' => 
                      array (
                        'description' => 'TCP协议公网接入点。
- 仅西南１（成都）、华北1（青岛）或华南1（深圳）地域的实例支持TCP协议公网接入点。
- 若您需要使用TCP协议公网接入点，您需要将客户端SDK升级至对应版本：
     - TCP协议Java SDK：2.0.0.Final及以上版本。更多信息，请参见[Java SDK版本说明](~~325569~~)。
     - TCP协议C\\+\\+ SDK：3.0.0及以上版本。更多信息，请参见[C++ SDK版本说明](~~325570~~)。
- 使用TCP协议公网接入点需要收取公网流量费用。具体计费信息，请参见[公网流量费用](~~325571~~)。
 

',
                        'type' => 'string',
                        'example' => 'http://MQ_INST_138015630679****_BAAy1Hac.mq.cn-chengdu.aliyuncs.com:80',
                      ),
                      'HttpInternetEndpoint' => 
                      array (
                        'description' => 'HTTP协议公网接入点。',
                        'type' => 'string',
                        'example' => 'http://138015630679****.mqrest.cn-chengdu.aliyuncs.com',
                      ),
                      'HttpInternalEndpoint' => 
                      array (
                        'description' => 'HTTP协议内网接入点。',
                        'type' => 'string',
                        'example' => 'http://138015630679****.mqrest.cn-chengdu-internal.aliyuncs.com',
                      ),
                      'HttpInternetSecureEndpoint' => 
                      array (
                        'description' => 'HTTPS协议公网接入点。',
                        'type' => 'string',
                        'example' => 'https://138015630679****.mqrest.cn-chengdu.aliyuncs.com',
                      ),
                    ),
                  ),
                  'IndependentNaming' => 
                  array (
                    'description' => '实例是否有命名空间。取值说明如下：

- **true**：拥有独立命名空间，资源命名确保实例内唯一，跨实例之间可重名。

- **false**：无独立命名空间，实例内或者跨实例之间，资源命名必须全局唯一。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'MaxTps' => 
                  array (
                    'description' => '消息收发TPS上限。取值如下：
5000、10000、20000、50000、100000、200000、300000、500000、800000、1000000。

详细的解释以购买页的说明为准。
> 该参数仅适用于云消息队列 RocketMQ 版铂金版实例。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000',
                  ),
                  'Remark' => 
                  array (
                    'description' => '备注。',
                    'type' => 'string',
                    'example' => 'ons-cn-m7r1r5f****',
                  ),
                  'InstanceName' => 
                  array (
                    'description' => '实例名称。

长度限制为3～64 个字符，可以是中文、英文、数字、短划线（-）以及下划线（_）。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'ReleaseTime' => 
                  array (
                    'description' => '铂金版实例过期时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1603555200000',
                  ),
                  'TopicCapacity' => 
                  array (
                    'description' => '该实例下允许创建的Topic数量上限。取值如下：
25、50、100、300、500。
> 该参数仅适用于云消息队列 RocketMQ 版铂金版实例。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                  'InstanceStatus' => 
                  array (
                    'description' => '实例状态。取值说明如下：

- **0**：铂金版实例部署中

- **2**：标准版实例已欠费

- **5**：标准版实例或铂金版实例服务中

- **7**：铂金版实例升级中且服务可用',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '5',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_138015630679****_BAAy1Hac',
                  ),
                  'InstanceType' => 
                  array (
                    'description' => '实例类型。取值说明如下：

- **1**：标准版（后付费）实例

- **2**：铂金版（包年包月）实例

云消息队列 RocketMQ 版的实例类型和规格信息，请参见[实例规格](~~185261~~)。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '实例的创建时间。
该参数值的格式为毫秒级Unix时间戳。',
                    'type' => 'string',
                    'example' => '1570701259403',
                  ),
                  'spInstanceId' => 
                  array (
                    'description' => '实例的商品售卖ID。',
                    'type' => 'string',
                    'example' => 'ons-cn-m7r1r5f****',
                  ),
                  'spInstanceType' => 
                  array (
                    'description' => '实例的售卖类型。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'enumValueTitles' => 
                    array (
                      1 => '标准版（后付费）实例',
                      2 => '铂金版（包年包月）实例',
                    ),
                    'example' => '1',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '6CC46974-65E8-4C20-AB07-D20D102E****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"InstanceBaseInfo\\": {\\n    \\"Endpoints\\": {\\n      \\"TcpEndpoint\\": \\"http://MQ_INST_138015630679****_BAAy1Hac.cn-chengdu.mq-internal.aliyuncs.com:8080\\",\\n      \\"TcpInternetEndpoint\\": \\"http://MQ_INST_138015630679****_BAAy1Hac.mq.cn-chengdu.aliyuncs.com:80\\",\\n      \\"HttpInternetEndpoint\\": \\"http://138015630679****.mqrest.cn-chengdu.aliyuncs.com\\",\\n      \\"HttpInternalEndpoint\\": \\"http://138015630679****.mqrest.cn-chengdu-internal.aliyuncs.com\\",\\n      \\"HttpInternetSecureEndpoint\\": \\"https://138015630679****.mqrest.cn-chengdu.aliyuncs.com\\"\\n    },\\n    \\"IndependentNaming\\": true,\\n    \\"MaxTps\\": 10000,\\n    \\"Remark\\": \\"ons-cn-m7r1r5f****\\",\\n    \\"InstanceName\\": \\"test\\",\\n    \\"ReleaseTime\\": 1603555200000,\\n    \\"TopicCapacity\\": 50,\\n    \\"InstanceStatus\\": 5,\\n    \\"InstanceId\\": \\"MQ_INST_138015630679****_BAAy1Hac\\",\\n    \\"InstanceType\\": 2,\\n    \\"CreateTime\\": \\"1570701259403\\",\\n    \\"spInstanceId\\": \\"ons-cn-m7r1r5f****\\",\\n    \\"spInstanceType\\": 1\\n  },\\n  \\"RequestId\\": \\"6CC46974-65E8-4C20-AB07-D20D102E****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsInstanceBaseInfoResponse>\\n    <InstanceBaseInfo>\\n        <Endpoints>\\n            <TcpEndpoint>http://MQ_INST_138015630679****_BAAy1Hac.cn-chengdu.mq-internal.aliyuncs.com:8080</TcpEndpoint>\\n            <HttpInternetEndpoint>http://138015630679****.mqrest.cn-chengdu.aliyuncs.com</HttpInternetEndpoint>\\n            <HttpInternalEndpoint>http://138015630679****.mqrest.cn-chengdu-internal.aliyuncs.com</HttpInternalEndpoint>\\n            <HttpInternetSecureEndpoint>https://138015630679****.mqrest.cn-chengdu.aliyuncs.com</HttpInternetSecureEndpoint>\\n            <TcpInternetEndpoint>http://MQ_INST_138015630679****_BAAy1Hac.mq.cn-chengdu.aliyuncs.com:80</TcpInternetEndpoint>\\n        </Endpoints>\\n        <IndependentNaming>true</IndependentNaming>\\n        <MaxTps>10000</MaxTps>\\n        <Remark>onspre-cn-m7r1r5f****</Remark>\\n        <InstanceName>test</InstanceName>\\n        <ReleaseTime>1603555200000</ReleaseTime>\\n        <TopicCapacity>50</TopicCapacity>\\n        <InstanceStatus>5</InstanceStatus>\\n        <InstanceId>MQ_INST_138015630679****_BAAy1Hac</InstanceId>\\n        <InstanceType>2</InstanceType>\\n    </InstanceBaseInfo>\\n    <RequestId>6CC46974-65E8-4C20-AB07-D20D102E****</RequestId>\\n</OnsInstanceBaseInfoResponse>","errorExample":""}]',
      'title' => '查询实例基本信息和收发消息的接入点',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
客户端需要通过接入点接入云消息队列 RocketMQ 版完成消息的收发，可通过调用本接口查询实例接入点。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsInstanceUpdate' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新后的实例描述，传空值则不更新。',
            'type' => 'string',
            'required' => false,
            'example' => '备注更新',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '更新后的实例名称。取值说明如下：
- 实例名称在该实例所部署的地域下要唯一，不可重名。

- 长度限制为3~64个字符，可以是中文、英文、数字、短划线（-）以及下划线（_）。

- 传空值则不更新。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => '名字更新',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待更新名称或描述的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsInstanceUpdateResponse>\\r\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\r\\n</OnsInstanceUpdateResponse>","errorExample":""}]',
      'title' => '更新实例名称和描述',
      'summary' => '调用OnsInstanceUpdate接口更新实例名称和描述。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsInstanceUpdate**接口，您还可以通过云消息队列 RocketMQ 版控制台更新实例名称和描述。具体操作，请参见[实例管理](~~200153~~)。',
    ),
    'OnsInstanceInServiceList' => 
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '实例所绑定的标签列表。列表元素个数不得超过 20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '实例所绑定的标签。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '实例的标签键。**Key**和**Value**值必须同时输入或同时不输入。若同时输入表示根据Tag过滤符合条件的实例，若不输入表示查询所有实例。

- 如果输入该值，则取值不允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CartService',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。**Key**和**Value**值必须同时输入或同时不输入。若同时输入表示根据Tag过滤符合条件的实例，若不输入表示查询所有实例。

- 如果输入该值，取值允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'SericeA',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        1 => 
        array (
          'name' => 'NeedResourceInfo',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否需要资源统计信息。即实例下Topic的数量和Group的数量。',
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
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '0598E46F-DB06-40E2-AD7B-C45923EE****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'InstanceVO' => 
                  array (
                    'description' => '返回所有已发布的实例信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回所有已发布的实例信息列表。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'IndependentNaming' => 
                        array (
                          'description' => '实例是否有命名空间。取值说明如下：

- **true**：拥有独立命名空间，资源命名确保实例内唯一，跨实例之间可重名。

- **false**：无独立命名空间，实例内或者跨实例之间，资源命名必须全局唯一。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'InstanceName' => 
                        array (
                          'description' => '实例名称。',
                          'type' => 'string',
                          'example' => 'test1',
                        ),
                        'ReleaseTime' => 
                        array (
                          'description' => '铂金版实例的过期时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1551024000000',
                        ),
                        'InstanceStatus' => 
                        array (
                          'description' => '实例状态。取值说明如下：

- **0**：铂金版实例部署中

- **2**：标准版实例已欠费

- **5**：标准版实例或铂金版实例服务中

- **7**：铂金版实例升级中且服务可用',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '5',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => '实例所绑定的标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '实例所绑定的标签。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'CartService',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'ServiceA',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'MQ_INST_188077086902****_BXSuW61e',
                        ),
                        'InstanceType' => 
                        array (
                          'description' => '实例类型。取值说明如下：

- **1**：标准版实例

- **2**：铂金版实例

各类型实例的规格和差异说明，请参见[实例规格](~~185261~~)。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '2',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '实例的创建时间。
该参数值的格式为毫秒级Unix时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1640847284000',
                        ),
                        'TopicCount' => 
                        array (
                          'description' => '主题数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '1',
                        ),
                        'GroupCount' => 
                        array (
                          'description' => '消费者分组数量。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '3',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"0598E46F-DB06-40E2-AD7B-C45923EE****\\",\\n  \\"Data\\": {\\n    \\"InstanceVO\\": [\\n      {\\n        \\"IndependentNaming\\": true,\\n        \\"InstanceName\\": \\"test1\\",\\n        \\"ReleaseTime\\": 1551024000000,\\n        \\"InstanceStatus\\": 5,\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"CartService\\",\\n              \\"Value\\": \\"ServiceA\\"\\n            }\\n          ]\\n        },\\n        \\"InstanceId\\": \\"MQ_INST_188077086902****_BXSuW61e\\",\\n        \\"InstanceType\\": 2,\\n        \\"CreateTime\\": 1640847284000,\\n        \\"TopicCount\\": 1,\\n        \\"GroupCount\\": 3\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsInstanceInServiceListResponse>\\n<RequestId>0598E46F-DB06-40E2-AD7B-C45923EE****</RequestId>\\n<Data>\\n    <InstanceVO>\\n        <InstanceName>test1</InstanceName>\\n        <InstanceId>MQ_INST_188077086902****_BXSuW61e</InstanceId>\\n        <ReleaseTime>1551024000000</ReleaseTime>\\n        <InstanceStatus>5</InstanceStatus>\\n        <IndependentNaming>true</IndependentNaming>\\n        <InstanceType>2</InstanceType>\\n        <Tags>\\n            <Tag>\\n                <Value>ServiceA</Value>\\n                <Key>CartService</Key>\\n            </Tag>\\n        </Tags>\\n    </InstanceVO>\\n</Data>\\n</OnsInstanceInServiceListResponse>","errorExample":""}]',
      'title' => '查询指定地域下实例列表',
      'summary' => '查询当前账号在指定地域（Region）下所有的云消息队列 RocketMQ 版4.x实例信息。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsInstanceDelete' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsInstanceDeleteResponse>\\r\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\r\\n</OnsInstanceDeleteResponse>","errorExample":""}]',
      'title' => '删除实例',
      'summary' => '调用OnsInstanceDelete接口删除云消息队列 RocketMQ 版实例。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 该接口一般是在应用下线等资源回收场景下使用。待删除实例下的Topic和Group为空时才可删除。
- 实例删除后将无法恢复，请慎重调用。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsInstanceDelete**接口，您还可以通过云消息队列 RocketMQ 版控制台删除指定实例。具体操作，请参见[实例管理](~~200153~~)。',
    ),
    'OnsTopicCreate' => 
    array (
      'summary' => '调用OnsTopicCreate接口创建Topic。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需创建的Topic的名称，取值说明如下：

- 长度限制为3~64个字符，只能包含字母、数字、短划线（-）和下划线（_）。
- “CID”和“GID”是Group ID的保留字段，Topic名称不能以“CID”和“GID”开头。
- 如果创建的Topic所在的实例有命名空间，则Topic的名称需要保证实例内唯一，不能和本实例下已有的Topic名称或Group ID重复；跨实例之间可以重名，例如实例A的Topic名称可以和实例B的Topic名称重复，也可以和实例B的Group ID重复。
- 如果新建的Topic所在的实例无命名空间，则Topic的名称需要保证跨实例和跨地域全局唯一，全局范围内不能和已有的Topic名称或Group ID重复。

> 实例是否有命名空间，可以在云消息队列 RocketMQ 版控制台**实例详情**页面的**基础信息区域**查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'MessageType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息类型。取值说明如下：

- **0**：普通消息
- **1**：分区顺序消息
- **2**：全局顺序消息
- **4**：事务消息
- **5**：定时/延时消息

各类型消息的详细说明，请参见[消息类型列表](~~155952~~)。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需创建的Topic的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => '测试',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需创建的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B6949B58-223E-4B75-B4FE-7797C15E****',
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
            'errorCode' => '%s',
            'errorMessage' => '%s, please check and retry later',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B6949B58-223E-4B75-B4FE-7797C15E****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsTopicCreateResponse>\\r\\n<RequestId>B6949B58-223E-4B75-B4FE-7797C15E****</RequestId>\\r\\n</OnsTopicCreateResponse>","errorExample":""}]',
      'title' => '创建Topic',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
本接口一般是在发布新应用或业务扩展等需要创建新的Topic资源时使用。

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTopicCreate**接口，您还可以通过消息队列RocketMQ版控制台，创建Topic。具体操作，请参见[Topic管理](~~199535~~)。',
    ),
    'OnsTopicStatus' => 
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Topic名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '427EE49D-D762-41FB-8F3D-9BAC96C3****',
              ),
              'Data' => 
              array (
                'description' => '查询到的Topic的信息存储数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'Perm' => 
                  array (
                    'description' => '所有关系编号。取值说明如下：

- **2**：可以发布
- **4**：可以订阅
- **6**：可以发布和订阅',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '6',
                  ),
                  'LastTimeStamp' => 
                  array (
                    'description' => '当前Topic内最新一条消息的就绪时间，如果Topic内没有消息，则该参数返回值为0。

该参数值的格式为毫秒级Unix时间戳。

就绪消息及就绪时间具体含义，请参见[名词解释](~~29533~~)。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570864984364',
                  ),
                  'TotalCount' => 
                  array (
                    'description' => '当前Topic的所有分区存在的消息数总和。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '2310',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"427EE49D-D762-41FB-8F3D-9BAC96C3****\\",\\n  \\"Data\\": {\\n    \\"Perm\\": 6,\\n    \\"LastTimeStamp\\": 1570864984364,\\n    \\"TotalCount\\": 2310\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsTopicStatusResponse>\\n<Data>\\n    <Perm>6</Perm>\\n    <TotalCount>2310</TotalCount>\\n    <LastTimeStamp>1570864984364</LastTimeStamp>\\n</Data>\\n<RequestId>427EE49D-D762-41FB-8F3D-9BAC96C3****</RequestId>\\n</OnsTopicStatusResponse>","errorExample":""}]',
      'title' => '查询Topic状态',
      'summary' => '查询当前Topic下的消息总量以及Topic的状态。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>本接口一般用于判断Topic资源的使用率。调用本接口后返回的信息包含当前服务器上该Topic所有的消息数，以及最后消息写入时间。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsTopicList' => 
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询指定Topic时设置，若不输入，则查询所有Topic。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需获取的Topic信息列表所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
          ),
        ),
        2 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'allowEmptyValue' => false,
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Topic所绑定的标签列表。列表元素个数不得超过 20。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '返回的标签结构。',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => 'Topic的标签键。**Key**和**Value**值必须同时输入或同时不输入。若同时输入表示根据Tag过滤符合条件的Topic，若不输入表示查询所有Topic。

- 如果输入该值，则取值不允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CartService',
                ),
                'Value' => 
                array (
                  'description' => 'Topic的标签值。**Key**和**Value**值必须同时输入或同时不输入。若同时输入表示根据Tag过滤符合条件的Topic，若不输入表示查询所有Topic。

- 如果输入该值，取值允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ServiceA',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        3 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Topic资源创建者的用户ID，即阿里云账号的ID。',
            'type' => 'string',
            'required' => false,
            'example' => '138015630679****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回的数据结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '4A978869-7681-4529-B470-107E1379****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'PublishInfoDo' => 
                  array (
                    'description' => '返回指定实例的Topic信息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '返回的Topic的数据结构。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'MessageType' => 
                        array (
                          'description' => '消息类型。取值说明如下：

- **0**：普通消息
- **1**：分区顺序消息
- **2**：全局顺序消息
- **4**：事务消息
- **5**：定时/延时消息',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
                        ),
                        'RelationName' => 
                        array (
                          'description' => '所有关系名称，例如持有者、可订阅、可发布和可发布订阅。',
                          'type' => 'string',
                          'example' => '授权发布/订阅',
                        ),
                        'Owner' => 
                        array (
                          'description' => 'Topic所有者编号，为阿里云的账号ID。',
                          'type' => 'string',
                          'example' => '138015630679****',
                        ),
                        'IndependentNaming' => 
                        array (
                          'description' => 'Topic所在实例是否有命名空间。取值说明如下：

- **true**：拥有独立命名空间，资源命名确保实例内唯一，跨实例之间可重名。
- **false**：无独立命名空间，实例内或者跨实例之间，资源命名必须全局唯一。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注信息。',
                          'type' => 'string',
                          'example' => '测试',
                        ),
                        'Relation' => 
                        array (
                          'description' => '所有关系编号。取值说明如下：

- **1**：持有者
- **2**：可以发布
- **4**：可以订阅
- **6**：可以发布和订阅',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '6',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => '创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570700947000',
                        ),
                        'Topic' => 
                        array (
                          'description' => 'Topic名称。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => 'Topic所绑定的标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'description' => '标签结构定义。',
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'CartService',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'SrviceA',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'InstanceId' => 
                        array (
                          'description' => 'Topic所在的实例ID。',
                          'type' => 'string',
                          'example' => 'MQ_INST_188077086902****_BXSuW61e',
                        ),
                        'ServiceStatus' => 
                        array (
                          'description' => 'Topic异步创建的状态。取值说明如下：
- **0**：创建中。
- **1**：服务中。',
                          'type' => 'integer',
                          'format' => 'int32',
                          'example' => '0',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4A978869-7681-4529-B470-107E1379****\\",\\n  \\"Data\\": {\\n    \\"PublishInfoDo\\": [\\n      {\\n        \\"MessageType\\": 0,\\n        \\"RelationName\\": \\"授权发布/订阅\\",\\n        \\"Owner\\": \\"138015630679****\\",\\n        \\"IndependentNaming\\": true,\\n        \\"Remark\\": \\"测试\\",\\n        \\"Relation\\": 6,\\n        \\"CreateTime\\": 1570700947000,\\n        \\"Topic\\": \\"test\\",\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"CartService\\",\\n              \\"Value\\": \\"SrviceA\\"\\n            }\\n          ]\\n        },\\n        \\"InstanceId\\": \\"MQ_INST_188077086902****_BXSuW61e\\",\\n        \\"ServiceStatus\\": 0\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsTopicListResponse>\\n    <RequestId>4A978869-7681-4529-B470-107E1379****</RequestId>\\n    <Data>\\n        <MessageType>0</MessageType>\\n        <RelationName>授权发布/订阅</RelationName>\\n        <Owner>138015630679****</Owner>\\n        <IndependentNaming>true</IndependentNaming>\\n        <Remark>测试</Remark>\\n        <Relation>6</Relation>\\n        <CreateTime>1570700947000</CreateTime>\\n        <Topic>test</Topic>\\n        <Tags>\\n            <Key>CartService</Key>\\n            <Value>SrviceA</Value>\\n        </Tags>\\n        <InstanceId>MQ_INST_188077086902****_BXSuW61e</InstanceId>\\n        <ServiceStatus>0</ServiceStatus>\\n    </Data>\\n</OnsTopicListResponse>","errorExample":""}]',
      'title' => '获取Topic列表信息',
      'summary' => '查询账号下所有Topic的信息列表。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>本接口一般用于生成资源列表的场景，并不查看具体信息。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsTopicSubDetail' => 
    array (
      'summary' => '查看有哪些在线订阅组订阅了这个Topic。',
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
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
                'example' => '87B6207F-2908-42B5-A134-84956DCA****',
              ),
              'Data' => 
              array (
                'description' => '返回Data对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'SubscriptionDataList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SubscriptionDataList' => 
                      array (
                        'description' => '所有在线订阅组。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'GroupId' => 
                            array (
                              'description' => '订阅该Topic的Group ID。',
                              'type' => 'string',
                              'example' => 'GID_test',
                            ),
                            'MessageModel' => 
                            array (
                              'description' => '消费模式。取值说明如下：

- **CLUSTERING**：集群订阅
- **BROADCASTING**：广播订阅

消费模式的更多信息，请参见[集群消费和广播消费](~~43163~~)。
',
                              'type' => 'string',
                              'example' => 'CLUSTERING',
                            ),
                            'SubString' => 
                            array (
                              'description' => '订阅表达式。',
                              'type' => 'string',
                              'example' => '*',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'Topic' => 
                  array (
                    'description' => 'Topic名称。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"87B6207F-2908-42B5-A134-84956DCA****\\",\\n  \\"Data\\": {\\n    \\"SubscriptionDataList\\": {\\n      \\"SubscriptionDataList\\": [\\n        {\\n          \\"GroupId\\": \\"GID_test\\",\\n          \\"MessageModel\\": \\"CLUSTERING\\",\\n          \\"SubString\\": \\"*\\"\\n        }\\n      ]\\n    },\\n    \\"Topic\\": \\"test\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsTopicSubDetailResponse>\\n<Data>\\n    <Topic>test</Topic>\\n    <SubscriptionDataList>\\n        <SubscriptionDataList>\\n            <SubString>*</SubString>\\n            <MessageModel>CLUSTERING</MessageModel>\\n            <GroupId>GID_test</GroupId>\\n        </SubscriptionDataList>\\n    </SubscriptionDataList>\\n</Data>\\n<RequestId>87B6207F-2908-42B5-A134-84956DCA****</RequestId>\\n</OnsTopicSubDetailResponse>","errorExample":""}]',
      'title' => '查看Topic的订阅信息',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>该接口用于查询Group和Topic之间的订阅关系。如果Group ID对应的消费者实例不在线则查不到数据。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTopicSubDetail**接口，您还可以通过云消息队列 RocketMQ 版控制台查看Topic和Group的订阅关系。具体操作，请参见[查看订阅关系](~~90592~~)。',
    ),
    'OnsTopicDelete' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定删除的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需删除的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
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
                'example' => '4189D4A6-231A-4028-8D89-F66A76C1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"4189D4A6-231A-4028-8D89-F66A76C1****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsTopicDeleteResponse>\\r\\n<RequestId>4189D4A6-231A-4028-8D89-F66A76C1****</RequestId>\\r\\n</OnsTopicDeleteResponse>","errorExample":""}]',
      'title' => '删除Topic',
      'summary' => '调用OnsTopicDelete接口删除指定的Topic。',
      'description' => '><notice>
- 阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。
- 删除Topic将导致该Topic下所有的发布订阅关系同时被清理，请慎重调用。></notice>
本接口一般是在应用下线等资源回收场景下使用。
Topic删除时后台需要做资源回收，速度较慢，因此不建议删除后立即又重新创建。如果删除失败，请根据错误码进行处理。
',
      'requestParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作

除了调用**OnsTopicDelete**接口，您还可以通过云消息队列 RocketMQ 版控制台删除Topic。具体操作，请参见[Topic管理](~~199535~~)。',
    ),
    'OnsGroupCreate' => 
    array (
      'summary' => '调用OnsGroupCreate创建客户端Group ID。',
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '创建的消息消费集群的Group ID。取值说明如下：

- 长度限制为2~64个字符，只能包含字母、数字、短划线（-）和下划线（_）。

- 若创建的Group所在实例有命名空间，则Group ID需要保证实例内唯一，不能和本实例下已有的Group ID或Topic名称重复；跨实例之间可以重名，例如实例A的Group ID可以和实例B的Group ID重复，也可以和实例B的Topic名称重复。

- 若创建的Group所在实例无命名空间，则Group ID需要保证跨实例和跨地域全局唯一，全局范围内不能和已有的Group ID或Topic名称重复。


> - Group ID创建后，将无法再修改。
- 实例是否有命名空间，可以在消息队列RocketMQ版控制台**实例详情**页面的**基础信息区域**查看。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_groupId',
          ),
        ),
        1 => 
        array (
          'name' => 'Remark',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '备注。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需创建的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定创建的Group ID适用的协议。TCP协议和HTTP协议的Group ID不可以共用，需要分别创建。取值说明如下：

- **tcp**：默认值，表示创建的Group ID仅适用于TCP协议的消息收发。
- **http**：表示创建的Group ID仅适用于HTTP协议的消息收发。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
            'default' => 'tcp',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
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
            'errorCode' => '%s',
            'errorMessage' => '%s, please check and retry later',
          ),
          1 => 
          array (
            'errorCode' => 'Group.NumLimited',
            'errorMessage' => 'group count exceed limit.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsGroupCreateResponse>\\r\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\r\\n</OnsGroupCreateResponse>","errorExample":""}]',
      'title' => '创建客户端Group ID',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>本接口一般是在发布新应用、业务逻辑实现等需要新的Group的情况下使用。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsGroupCreate**接口，您还可以通过消息队列RocketMQ版控制台创建Group ID。具体操作，请参见[Group管理](~~200386~~)。',
    ),
    'OnsGroupConsumerUpdate' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配置的Group ID。 ',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_groupId',
          ),
        ),
        1 => 
        array (
          'name' => 'ReadEnable',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置Group ID对应的消费者集群是否有读取消息权限。取值说明如下：

- **true**：指定Group ID对应的消费者集群有读消息权限。

- **false**：指定Group ID对应的消费者集群没有读消息权限。

默认值为**true**。',
            'type' => 'boolean',
            'required' => true,
            'docRequired' => true,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配置的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsGroupConsumerUpdateResponse>\\r\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\r\\n</OnsGroupConsumerUpdateResponse>","errorExample":""}]',
      'title' => '配置消费集群的消息读取权限',
      'summary' => '配置指定Group ID对应的消费集群的消息读取权限。本接口一般用于禁止特定Group ID读取消息的场景。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsGroupList' => 
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
        'operationType' => 'list',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需获取资源列表的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '模糊查询指定Group ID时设置，否则查询所有Group ID。

如果输入GID\\_ABC查询，那么会以前后缀匹配的方式进行模糊查询，返回所有包含\\*GID\\_ABC\\*的Group ID，例如GID\\_test\\_GID\\_ABC\\_123、GID\\_ABC\\_356。',
            'type' => 'string',
            'required' => false,
            'example' => 'GID_test_group_id',
          ),
        ),
        2 => 
        array (
          'name' => 'GroupType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的Group ID适用的协议。TCP协议和HTTP协议的Group ID不可以共用，需要分别创建。取值说明如下：

- **tcp**：默认值，表示该Group ID仅适用于TCP协议的消息收发。
- **http**：表示该Group ID仅适用于HTTP协议的消息收发。',
            'type' => 'string',
            'required' => false,
            'example' => 'tcp',
            'default' => 'tcp',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => 'Group ID所绑定的标签列表。列表元素个数不得超过 20。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => 'Group ID的标签键。**Key**和**Value**值必须同时输入或同时不输入。若同时输入表示根据Tag过滤符合条件的Group ID，若不输入表示查询所有Group ID。

- 如果输入该值，则取值不允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'CartService',
                ),
                'Value' => 
                array (
                  'description' => 'Group ID的标签值。**Key**和**Value**值必须同时输入或同时不输入。若同时输入表示根据Tag过滤符合条件的Group ID，若不输入表示查询所有Group ID。

- 如果输入该值，取值允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'ServiceA',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
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
                'example' => '16996623-AC4A-43AF-9248-FD9D2D75****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'SubscribeInfoDo' => 
                  array (
                    'description' => '查询到的订阅关系集合。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Owner' => 
                        array (
                          'description' => '该发布信息的拥有者。',
                          'type' => 'string',
                          'example' => '138015630679****',
                        ),
                        'UpdateTime' => 
                        array (
                          'description' => '该Group ID的更新时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1570700979000',
                        ),
                        'IndependentNaming' => 
                        array (
                          'description' => '实例是否有命名空间。取值说明如下：

- **true**：拥有独立命名空间，资源命名确保实例内唯一，跨实例之间可重名。

- **false**：无独立命名空间，实例内或者跨实例之间，资源命名必须全局唯一。',
                          'type' => 'boolean',
                          'example' => 'true',
                        ),
                        'GroupId' => 
                        array (
                          'description' => 'Group ID即消费集群组ID。',
                          'type' => 'string',
                          'example' => 'GID_test_group_id',
                        ),
                        'Remark' => 
                        array (
                          'description' => '备注。',
                          'type' => 'string',
                          'example' => 'test',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Group ID的创建时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1568896605000',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Tag' => 
                            array (
                              'description' => 'Group ID所绑定的标签。',
                              'type' => 'array',
                              'items' => 
                              array (
                                'type' => 'object',
                                'properties' => 
                                array (
                                  'Key' => 
                                  array (
                                    'description' => '标签键。',
                                    'type' => 'string',
                                    'example' => 'CartService',
                                  ),
                                  'Value' => 
                                  array (
                                    'description' => '标签值。',
                                    'type' => 'string',
                                    'example' => 'ServiceA',
                                  ),
                                ),
                              ),
                            ),
                          ),
                        ),
                        'InstanceId' => 
                        array (
                          'description' => '实例ID。',
                          'type' => 'string',
                          'example' => 'MQ_INST_111111111111_DOxxxxxx',
                        ),
                        'GroupType' => 
                        array (
                          'description' => '查询的Group ID适用的协议。TCP协议和HTTP协议的Group ID不可以共用，需要分别创建。取值说明如下：

- **tcp**：表示该Group ID仅适用于TCP协议的消息收发。
- **http**：表示该Group ID仅适用于HTTP协议的消息收发。',
                          'type' => 'string',
                          'example' => 'tcp',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"16996623-AC4A-43AF-9248-FD9D2D75****\\",\\n  \\"Data\\": {\\n    \\"SubscribeInfoDo\\": [\\n      {\\n        \\"Owner\\": \\"138015630679****\\",\\n        \\"UpdateTime\\": 1570700979000,\\n        \\"IndependentNaming\\": true,\\n        \\"GroupId\\": \\"GID_test_group_id\\",\\n        \\"Remark\\": \\"test\\",\\n        \\"CreateTime\\": 1568896605000,\\n        \\"Tags\\": {\\n          \\"Tag\\": [\\n            {\\n              \\"Key\\": \\"CartService\\",\\n              \\"Value\\": \\"ServiceA\\"\\n            }\\n          ]\\n        },\\n        \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n        \\"GroupType\\": \\"tcp\\"\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsGroupListResponse>\\n<RequestId>16996623-AC4A-43AF-9248-FD9D2D75****</RequestId>\\n<Data>\\n    <SubscribeInfoDo>\\n        <Owner>138015630679****</Owner>\\n        <GroupType>tcp</GroupType>\\n        <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n        <CreateTime>1568896605000</CreateTime>\\n        <UpdateTime>1570700979000</UpdateTime>\\n        <IndependentNaming>true</IndependentNaming>\\n        <GroupId>GID_test_group_id</GroupId>\\n        <Remark>test</Remark>\\n        <Tags>\\n            <Tag>\\n                <Value>ServiceA</Value>\\n                <Key>CartService</Key>\\n            </Tag>\\n        </Tags>\\n    </SubscribeInfoDo>\\n</Data>\\n</OnsGroupListResponse>","errorExample":""}]',
      'title' => '获取Group ID列表信息',
      'summary' => '查询指定实例下所有的Group ID信息。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsGroupSubDetail' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID所属的实例ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
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
                'example' => '3364E875-013B-442A-BC3C-C1A84DC6****',
              ),
              'Data' => 
              array (
                'description' => '返回Data对象。',
                'type' => 'object',
                'properties' => 
                array (
                  'SubscriptionDataList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'SubscriptionDataList' => 
                      array (
                        'description' => '如果Group ID所对应的消费者不在线则查不到数据。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'SubString' => 
                            array (
                              'description' => '订阅表达式。',
                              'type' => 'string',
                              'example' => '*',
                            ),
                            'Topic' => 
                            array (
                              'description' => '订阅的Topic。',
                              'type' => 'string',
                              'example' => 'test-mq_topic',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'GroupId' => 
                  array (
                    'description' => '需查询的Group ID。',
                    'type' => 'string',
                    'example' => 'GID_test_group_id',
                  ),
                  'MessageModel' => 
                  array (
                    'description' => '消费模式。取值说明如下：

- **CLUSTERING**：集群订阅

- **BROADCASTING**：广播订阅

消费模式的更多信息，请参见[集群消费和广播消费](~~43163~~)。',
                    'type' => 'string',
                    'example' => 'CLUSTERING',
                  ),
                  'Online' => 
                  array (
                    'description' => '消费者是否在线。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"3364E875-013B-442A-BC3C-C1A84DC6****\\",\\n  \\"Data\\": {\\n    \\"SubscriptionDataList\\": {\\n      \\"SubscriptionDataList\\": [\\n        {\\n          \\"SubString\\": \\"*\\",\\n          \\"Topic\\": \\"test-mq_topic\\"\\n        }\\n      ]\\n    },\\n    \\"GroupId\\": \\"GID_test_group_id\\",\\n    \\"MessageModel\\": \\"CLUSTERING\\",\\n    \\"Online\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsGroupSubDetailResponse>\\n<Data>\\n    <MessageModel>CLUSTERING</MessageModel>\\n    <Online>true</Online>\\n    <SubscriptionDataList>\\n        <SubscriptionDataList>\\n            <SubString>*</SubString>\\n            <Topic>test-mq_topic</Topic>\\n        </SubscriptionDataList>\\n    </SubscriptionDataList>\\n    <GroupId>GID_test_group_id</GroupId>\\n</Data>\\n<RequestId>3364E875-013B-442A-BC3C-C1A84DC6****</RequestId>\\n</OnsGroupSubDetailResponse>","errorExample":""}]',
      'title' => '查看Group ID的订阅信息',
      'summary' => '查看Group订阅了哪些Topic，如果Group ID对应的消费者实例不在线则查不到数据。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsGroupSubDetail**接口，您还可以通过云消息队列 RocketMQ 版控制台查看Topic和Group的订阅关系。具体操作，请参见[查看订阅关系](~~90592~~)。',
    ),
    'OnsGroupDelete' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的消息消费集群的Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_groupId',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '待删除的Group所属的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsGroupDeleteResponse>\\r\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\r\\n</OnsGroupDeleteResponse>","errorExample":""}]',
      'title' => '删除Group',
      'summary' => '调用OnsGroupDelete删除Group。',
      'description' => '><notice>

- 阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。

- 删除Group后，由Group ID标识的消费者实例将立即停止接收消息，请慎重调用。
></notice>
本接口一般是在应用下线等资源回收场景下使用。Group删除时后台需要做资源回收，速度较慢，因此不建议删除后立即又重新创建。如果删除失败，请根据错误码进行处理。

',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsGroupDelete**接口，您还可以通过云消息队列 RocketMQ 版控制台删除Group ID。具体操作，请参见[Group管理](~~200386~~)。',
    ),
    'ListTagResources' => 
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
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的标签所绑定资源所在的实例ID。
> 如果您需查询的是Topic、Group的标签，则必须填写该参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。枚举类型。取值如下：

- **INSTANCE**
- **TOPIC**
- **GROUP**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TOPIC',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '下一页查询开始的Token。',
            'type' => 'string',
            'required' => false,
            'example' => 'caeba0****be03f84eb48b699f0a4883',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '标签列表。列表元素个数不得超过 20。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。

- 若输入该参数，则参数取值不允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'CartService',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。

- 若输入该参数，参数取值允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'ServiceA',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 21,
          ),
        ),
        4 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要查询的资源ID。

- 当需要查询的标签绑定的资源类型为实例时，该参数输入实例ID。

- 当需要查询的标签绑定的资源类型为Topic时，该参数输入Topic名称。

- 当需要查询的标签绑定的资源类型为Group时，该参数输入Group ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'test',
            ),
            'required' => false,
            'example' => 'TopicA',
            'maxItems' => 51,
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
              'NextToken' => 
              array (
                'description' => '下一页查询开始的Token。',
                'type' => 'string',
                'example' => 'caeba0****be03f84eb48b699f0a4883',
              ),
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '301D2CBE-66F8-403D-AEC0-82582478****',
              ),
              'TagResources' => 
              array (
                'description' => '由资源及其标签组成的集合，包含了资源ID、资源类型和标签键值等信息。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ResourceType' => 
                    array (
                      'description' => '资源类型。

- ALIYUN::MQ::INSTANCE：表示资源类型为实例。
- ALIYUN::MQ::TOPIC：表示资源类型为Topic。
- ALIYUN::MQ::GROUP：表示资源类型为Group。',
                      'type' => 'string',
                      'example' => 'ALIYUN::MQ::TOPIC',
                    ),
                    'InstanceId' => 
                    array (
                      'description' => '实例ID。',
                      'type' => 'string',
                      'example' => 'MQ_INST_188077086902****_BXSuW61e',
                    ),
                    'TagValue' => 
                    array (
                      'description' => '标签值。',
                      'type' => 'string',
                      'example' => 'ServiceA',
                    ),
                    'ResourceId' => 
                    array (
                      'description' => '资源ID。',
                      'type' => 'string',
                      'example' => 'TopicA',
                    ),
                    'TagKey' => 
                    array (
                      'description' => '标签键。',
                      'type' => 'string',
                      'example' => 'CartService',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"caeba0****be03f84eb48b699f0a4883\\",\\n  \\"RequestId\\": \\"301D2CBE-66F8-403D-AEC0-82582478****\\",\\n  \\"TagResources\\": [\\n    {\\n      \\"ResourceType\\": \\"ALIYUN::MQ::TOPIC\\",\\n      \\"InstanceId\\": \\"MQ_INST_188077086902****_BXSuW61e\\",\\n      \\"TagValue\\": \\"ServiceA\\",\\n      \\"ResourceId\\": \\"TopicA\\",\\n      \\"TagKey\\": \\"CartService\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<ListTagResourcesResponse>\\n<RequestId>301D2CBE-66F8-403D-AEC0-82582478****</RequestId>\\n<NextToken>caeba0****be03f84eb48b699f0a4883</NextToken>\\n<TagResources>\\n    <ResourceId>TopicA</ResourceId>\\n    <InstanceId>MQ_INST_188077086902****_BXSuW61e</InstanceId>\\n    <TagKey>CartService</TagKey>\\n    <ResourceType>ALIYUN::MQ::TOPIC</ResourceType>\\n    <TagValue>ServiceA</TagValue>\\n</TagResources>\\n</ListTagResourcesResponse>","errorExample":""}]',
      'title' => '查询资源绑定的标签列表',
      'summary' => '调用ListTagResources查询资源绑定的标签列表。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

调用**ListTagResources**接口时，标签键**Tag.N.Key**和资源ID **ResourceId.N**至少需要输入一个。您可以查询某资源下的所有标签，也可以根据指定标签键查询标签值及标签所绑定的资源。
- 若输入标签键**Tag.N.Key**，则可以查询标签值**Tag.N.Value**和标签所绑定的资源ID **ResourceId.N**。
- 若输入资源ID **ResourceId.N**，则可以查询指定资源下所有的标签信息，包括标签键**Tag.N.Key**及标签值**Tag.N.Value**。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**ListTagResources**接口，您还可以通过云消息队列 RocketMQ 版控制台查看资源的标签信息。具体操作，请参见[标签管理](~~172713~~)。',
    ),
    'TagResources' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所需绑定标签的资源所在的实例的ID。
> 如需为Topic或Group ID绑定标签，则必须填写该参数。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。枚举类型。取值：

- **INSTANCE**
- **TOPIC**
- **GROUP**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TOPIC',
          ),
        ),
        2 => 
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
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '资源的标签键。**Key**和**Value**值必须同时输入。

- 该值不允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'FinanceDept',
                ),
                'Value' => 
                array (
                  'description' => '资源的标签值。**Key**和**Value**值必须同时输入。

- 该值可以为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
                  'type' => 'string',
                  'required' => true,
                  'example' => 'FinanceJoshua',
                ),
              ),
              'required' => false,
            ),
            'required' => true,
            'maxItems' => 21,
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要绑定标签的资源ID。
 
- 当需要绑定标签的资源类型为实例时，该参数输入实例ID。
- 当需要绑定标签的资源类型为Topic时，该参数输入Topic名称。
- 当需要绑定标签的资源类型为Group时，该参数输入Group ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'TopicA',
            ),
            'required' => true,
            'example' => 'TopicA',
            'maxItems' => 51,
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
                'example' => '301D2CBE-66F8-403D-AEC0-82582478****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"301D2CBE-66F8-403D-AEC0-82582478****\\"\\n}","errorExample":""},{"type":"xml","example":"<TagResourcesResponse>\\r\\n<RequestId>301D2CBE-66F8-403D-AEC0-82582478****</RequestId>\\r\\n</TagResourcesResponse>","errorExample":""}]',
      'title' => '为资源绑定标签',
      'summary' => '调用TagResources为资源绑定标签。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>本接口一般在需要对云消息队列 RocketMQ 版的资源进行归类时使用，便于搜索和资源聚合。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**TagResources**接口，您还可以通过云消息队列 RocketMQ 版控制台为相关资源绑定标签。具体操作，请参见[标签管理](~~172713~~)。',
    ),
    'UntagResources' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '如需解除Topic和Group ID与标签的绑定关系，该参数为必填。',
            'type' => 'string',
            'required' => false,
            'docRequired' => false,
            'example' => 'MQ_INST_188077086902****_BX4jvZZG',
          ),
        ),
        1 => 
        array (
          'name' => 'ResourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '资源类型。枚举类型，目前支持的资源类型：

- **INSTANCE**
- **TOPIC**
- **GROUP**',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'TOPIC',
          ),
        ),
        2 => 
        array (
          'name' => 'All',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否删除资源绑定的全部标签。当请求中未设置**TagKey**时该参数有效。默认值**false**。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
            'default' => 'false',
          ),
        ),
        3 => 
        array (
          'name' => 'ResourceId',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源ID列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '需要解绑标签的资源ID。',
              'type' => 'string',
              'required' => false,
              'example' => 'TopicA',
            ),
            'required' => true,
            'example' => 'TopicA',
            'maxItems' => 51,
          ),
        ),
        4 => 
        array (
          'name' => 'TagKey',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'description' => '资源的标签键列表。',
            'type' => 'array',
            'items' => 
            array (
              'description' => '资源的标签键。

- 如果传入该值，则不允许为空字符串。
- 最多支持128个字符，不能以`aliyun`和`acs:`开头，不能包含`http://`或者`https://`。',
              'type' => 'string',
              'required' => false,
              'example' => 'CartService',
            ),
            'required' => false,
            'example' => 'CartService',
            'maxItems' => 21,
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
                'example' => '19780F2E-7841-4E0F-A5D9-C64A0530****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"19780F2E-7841-4E0F-A5D9-C64A0530****\\"\\n}","errorExample":""},{"type":"xml","example":"<UntagResourcesResponse>\\r\\n<RequestId>19780F2E-7841-4E0F-A5D9-C64A0530****</RequestId>\\r\\n</UntagResourcesResponse>","errorExample":""}]',
      'title' => '为资源解绑并删除标签',
      'summary' => '调用UntagResources为资源解绑并删除标签。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**UntagResources**接口，您还可以通过云消息队列 RocketMQ 版控制台为资源解绑和删除标签。具体操作，请参见[标签管理](~~172713~~)。',
    ),
    'OnsConsumerStatus' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'Detail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询详细信息。取值说明如下：

- **true**：要查询详细信息，即可获取返回参数**ConsumerConnectionInfoList**和**DetailInTopicList**信息。

- **false**：默认值，不查询详细信息，即返回参数**ConsumerConnectionInfoList**和**DetailInTopicList**为空。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'NeedJstack',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否打印Jstack信息。取值说明如下：
- **true**：要打印Jstack信息，可在**Jstack**返回参数中获取堆栈信息。
 >如需打印Jstack信息，请确保您的入参**Detail**设置为**true**。

- **false**：默认值，不打印Jstack信息，**Jstack**返回参数为空。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        3 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => '10EDC518-10E7-4B34-92FB-171235FA****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConsumeTps' => 
                  array (
                    'description' => '总消费TPS。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '0',
                  ),
                  'ConsumeModel' => 
                  array (
                    'description' => '消费模型。取值说明如下：

-  **CLUSTERING**：集群消费模式

- **BROADCASTING**：广播消费模式

两种订阅模式的详细信息，请参见[集群消费和广播消费](~~43163~~)。',
                    'type' => 'string',
                    'example' => 'CLUSTERING',
                  ),
                  'ConnectionSet' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ConnectionDo' => 
                      array (
                        'description' => '该集群当前在线客户端信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'RemoteIP' => 
                            array (
                              'description' => '宿主机IP地址或公网IP地址。',
                              'type' => 'string',
                              'example' => '42.120.74.**',
                            ),
                            'Version' => 
                            array (
                              'description' => '消费端版本。',
                              'type' => 'string',
                              'example' => 'V4_3_6_SNAPSHOT',
                            ),
                            'ClientAddr' => 
                            array (
                              'description' => '该消费实例的地址和端口。',
                              'type' => 'string',
                              'example' => '30.5.121.**',
                            ),
                            'Language' => 
                            array (
                              'description' => '消费端语言。',
                              'type' => 'string',
                              'example' => 'JAVA',
                            ),
                            'ClientId' => 
                            array (
                              'description' => '消费实例的ID。',
                              'type' => 'string',
                              'example' => '30.5.121.**@25560#-1999745829#-1737591554#458773089270275',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'TotalDiff' => 
                  array (
                    'description' => '集群总的消费堆积。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '197',
                  ),
                  'ConsumerConnectionInfoList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ConsumerConnectionInfoDo' => 
                      array (
                        'description' => '该集群在线客户端详细信息，包含Jstack、消费RT时间等信息。如需获取详细信息，请确保将**Detail**请求参数设置为**true**。否则返回值为空。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => 'test，此内容不推送到icms',
                          'type' => 'object',
                          'properties' => 
                          array (
                            'ConsumeModel' => 
                            array (
                              'description' => '消费模型。取值说明如下：

-  **CLUSTERING**：集群消费模式

- **BROADCASTING**：广播消费模式

两种订阅模式的详细信息，请参见[集群消费和广播消费](~~43163~~)。',
                              'type' => 'string',
                              'example' => 'CLUSTERING',
                            ),
                            'RunningDataList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ConsumerRunningDataDo' => 
                                array (
                                  'description' => '实时状态统计。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Rt' => 
                                      array (
                                        'description' => '消费RT时间，单位：毫秒。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0',
                                      ),
                                      'Topic' => 
                                      array (
                                        'description' => '订阅的Topic名称。',
                                        'type' => 'string',
                                        'example' => 'test-mq_topic',
                                      ),
                                      'FailedCountPerHour' => 
                                      array (
                                        'description' => '每小时内消费失败的消息数统计。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                      ),
                                      'OkTps' => 
                                      array (
                                        'description' => '消费消息成功的TPS统计。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0',
                                      ),
                                      'FailedTps' => 
                                      array (
                                        'description' => '消费消息失败的TPS统计。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'SubscriptionSet' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'SubscriptionData' => 
                                array (
                                  'description' => '订阅关系集合。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'SubString' => 
                                      array (
                                        'description' => '订阅该Topic的子类别Tag表达式。',
                                        'type' => 'string',
                                        'example' => '*',
                                      ),
                                      'SubVersion' => 
                                      array (
                                        'description' => '订阅关系版本号，为自增Long型。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1570701364301',
                                      ),
                                      'Topic' => 
                                      array (
                                        'description' => '订阅的Topic名称。',
                                        'type' => 'string',
                                        'example' => 'test-mq_topic',
                                      ),
                                      'TagsSet' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Tag' => 
                                          array (
                                            'description' => '订阅的Tag集合。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => '订阅的Tag集合。',
                                              'type' => 'string',
                                              'example' => 'ff',
                                            ),
                                          ),
                                        ),
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Jstack' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'ThreadTrackDo' => 
                                array (
                                  'description' => 'Jstack堆栈信息。如需获取Jstack信息，请确保将**NeedJstack**入参设置为**true**。否则返回值为空。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'description' => 'test——此内容不发布icms',
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'TrackList' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'Track' => 
                                          array (
                                            'description' => 'Jstack堆栈信息字符串。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'description' => 'Jstack堆栈信息字符串。',
                                              'type' => 'string',
                                              'example' => 'TID: 52 STATE: WAITING',
                                            ),
                                          ),
                                        ),
                                      ),
                                      'Thread' => 
                                      array (
                                        'description' => '线程名称。',
                                        'type' => 'string',
                                        'example' => 'ConsumeMessageThread_0',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'LastTimeStamp' => 
                            array (
                              'description' => '最后消费时间。

该参数值的格式为毫秒级Unix时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570701368114',
                            ),
                            'StartTimeStamp' => 
                            array (
                              'description' => '消费开始时间。

该参数值的格式为毫秒级Unix时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570701361528',
                            ),
                            'Language' => 
                            array (
                              'description' => '客户端语言。',
                              'type' => 'string',
                              'example' => 'JAVA',
                            ),
                            'ClientId' => 
                            array (
                              'description' => '消费实例的ID。',
                              'type' => 'string',
                              'example' => '30.5.**.**@25560#-1999745829#-1737591554#458773089270275',
                            ),
                            'Connection' => 
                            array (
                              'description' => '连接信息。',
                              'type' => 'string',
                              'example' => '**',
                            ),
                            'Version' => 
                            array (
                              'description' => '客户端版本号。',
                              'type' => 'string',
                              'example' => 'V4_3_6',
                            ),
                            'ConsumeType' => 
                            array (
                              'description' => '消费者消费消息的模式。取值说明如下：
- **PUSH**：云消息队列 RocketMQ 版服务端主动向消费者推送消息。
- **PULL**：消费者主动向云消息队列 RocketMQ 版服务端拉取消息。',
                              'type' => 'string',
                              'example' => 'PUSH',
                            ),
                            'ThreadCount' => 
                            array (
                              'description' => '消费线程数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '20',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'DetailInTopicList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DetailInTopicDo' => 
                      array (
                        'description' => '各个Topic的消费情况。如需获取详细信息，请确保将**Detail**请求参数设置为**true**。否则返回值为空。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DelayTime' => 
                            array (
                              'description' => '指定Topic的消费延迟时间。单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                            'TotalDiff' => 
                            array (
                              'description' => '该Topic消费总堆积数。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '0',
                            ),
                            'LastTimestamp' => 
                            array (
                              'description' => '最后消费时间。

该参数值的格式为毫秒级Unix时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570701259403',
                            ),
                            'Topic' => 
                            array (
                              'description' => 'Topic名称。',
                              'type' => 'string',
                              'example' => 'test-mq_topic',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'SubscriptionSame' => 
                  array (
                    'description' => '订阅关系是否一致。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'DelayTime' => 
                  array (
                    'description' => '指定Group ID所订阅的所有Topic中的最大消费延时时间。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100857',
                  ),
                  'LastTimestamp' => 
                  array (
                    'description' => '最后消费时间。

该参数值的格式为毫秒级Unix时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1566883844954',
                  ),
                  'Online' => 
                  array (
                    'description' => '是否在线。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'RebalanceOK' => 
                  array (
                    'description' => '客户端Rebalance是否正常。取值说明如下：

- **true**：正常

- **false**：不正常',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"10EDC518-10E7-4B34-92FB-171235FA****\\",\\n  \\"Data\\": {\\n    \\"ConsumeTps\\": 0,\\n    \\"ConsumeModel\\": \\"CLUSTERING\\",\\n    \\"ConnectionSet\\": {\\n      \\"ConnectionDo\\": [\\n        {\\n          \\"RemoteIP\\": \\"42.120.74.**\\",\\n          \\"Version\\": \\"V4_3_6_SNAPSHOT\\",\\n          \\"ClientAddr\\": \\"30.5.121.**\\",\\n          \\"Language\\": \\"JAVA\\",\\n          \\"ClientId\\": \\"30.5.121.**@25560#-1999745829#-1737591554#458773089270275\\"\\n        }\\n      ]\\n    },\\n    \\"TotalDiff\\": 197,\\n    \\"ConsumerConnectionInfoList\\": {\\n      \\"ConsumerConnectionInfoDo\\": [\\n        {\\n          \\"ConsumeModel\\": \\"CLUSTERING\\",\\n          \\"RunningDataList\\": {\\n            \\"ConsumerRunningDataDo\\": [\\n              {\\n                \\"Rt\\": 0,\\n                \\"Topic\\": \\"test-mq_topic\\",\\n                \\"FailedCountPerHour\\": 0,\\n                \\"OkTps\\": 0,\\n                \\"FailedTps\\": 0\\n              }\\n            ]\\n          },\\n          \\"SubscriptionSet\\": {\\n            \\"SubscriptionData\\": [\\n              {\\n                \\"SubString\\": \\"*\\",\\n                \\"SubVersion\\": 1570701364301,\\n                \\"Topic\\": \\"test-mq_topic\\",\\n                \\"TagsSet\\": {\\n                  \\"Tag\\": [\\n                    \\"ff\\"\\n                  ]\\n                }\\n              }\\n            ]\\n          },\\n          \\"Jstack\\": {\\n            \\"ThreadTrackDo\\": [\\n              {\\n                \\"TrackList\\": {\\n                  \\"Track\\": [\\n                    \\"TID: 52 STATE: WAITING\\"\\n                  ]\\n                },\\n                \\"Thread\\": \\"ConsumeMessageThread_0\\"\\n              }\\n            ]\\n          },\\n          \\"LastTimeStamp\\": 1570701368114,\\n          \\"StartTimeStamp\\": 1570701361528,\\n          \\"Language\\": \\"JAVA\\",\\n          \\"ClientId\\": \\"30.5.**.**@25560#-1999745829#-1737591554#458773089270275\\",\\n          \\"Connection\\": \\"**\\",\\n          \\"Version\\": \\"V4_3_6\\",\\n          \\"ConsumeType\\": \\"PUSH\\",\\n          \\"ThreadCount\\": 20\\n        }\\n      ]\\n    },\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"DetailInTopicList\\": {\\n      \\"DetailInTopicDo\\": [\\n        {\\n          \\"DelayTime\\": 0,\\n          \\"TotalDiff\\": 0,\\n          \\"LastTimestamp\\": 1570701259403,\\n          \\"Topic\\": \\"test-mq_topic\\"\\n        }\\n      ]\\n    },\\n    \\"SubscriptionSame\\": true,\\n    \\"DelayTime\\": 100857,\\n    \\"LastTimestamp\\": 1566883844954,\\n    \\"Online\\": true,\\n    \\"RebalanceOK\\": true\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsConsumerStatusResponse>\\n<data>\\n    <connectionSet>\\n        <bizVersion>V4_3_6</bizVersion>\\n        <clientAddr>30.5.***.*</clientAddr>\\n        <clientId>30.5.***.*@97730#-1999745829#-1737591554#729272961762836</clientId>\\n        <language>JAVA</language>\\n        <version>V4_3_6</version>\\n    </connectionSet>\\n    <consumeModel>CLUSTERING</consumeModel>\\n    <consumeTps>0</consumeTps>\\n    <consumerConnectionInfoList>\\n        <bizVersion>V4_3_6</bizVersion>\\n        <clientId>30.5.***.*@97730#-1999745829#-1737591554#729272961762836</clientId>\\n        <consumeType>PUSH</consumeType>\\n        <jstack>\\n            <thread>ConsumeMessageThread_4</thread>\\n            <trackList>TID: 44 STATE: WAITING</trackList>\\n            <trackList>sun.misc.Unsafe.park(Native Method)</trackList>\\n            <trackList>java.util.concurrent.locks.LockSupport.park(LockSupport.java:175)</trackList>\\n            <trackList>java.util.concurrent.locks.AbstractQueuedSynchronizer$ConditionObject.await(AbstractQueuedSynchronizer.java:2039)</trackList>\\n            <trackList>java.util.concurrent.LinkedBlockingQueue.take(LinkedBlockingQueue.java:442)</trackList>\\n            <trackList>java.util.concurrent.ThreadPoolExecutor.getTask(ThreadPoolExecutor.java:1074)</trackList>\\n            <trackList>java.util.concurrent.ThreadPoolExecutor.runWorker(ThreadPoolExecutor.java:1134)</trackList>\\n            <trackList>java.util.concurrent.ThreadPoolExecutor$Worker.run(ThreadPoolExecutor.java:624)</trackList>\\n            <trackList>java.lang.Thread.run(Thread.java:748)</trackList>\\n        </jstack>\\n        <language>JAVA</language>\\n        <lastTimeStamp>1570701368114</lastTimeStamp>\\n        <runningDataList>\\n            <failedCountPerHour>0</failedCountPerHour>\\n            <failedTps>0</failedTps>\\n            <okTps>0</okTps>\\n            <rt>0</rt>\\n            <topic>test-mq_topic</topic>\\n        </runningDataList>\\n        <startTimeStamp>1570701361528</startTimeStamp>\\n        <subscriptionSet>\\n            <subString>*</subString>\\n            <subVersion>1570701364301</subVersion>\\n            <topic>test-mq_topic</topic>\\n        </subscriptionSet>\\n        <threadCount>20</threadCount>\\n        <version>V4_3_6</version>\\n    </consumerConnectionInfoList>\\n    <delayTime>0</delayTime>\\n    <detailInTopicList>\\n        <delayTime>0</delayTime>\\n        <lastTimestamp>1570701259403</lastTimestamp>\\n        <topic>test-mq_topic</topic>\\n        <totalDiff>0</totalDiff>\\n    </detailInTopicList>\\n    <instanceId>MQ_INST_111111111111_DOxxxxxx</instanceId>\\n    <lastTimestamp>1570701368114</lastTimestamp>\\n    <online>true</online>\\n    <rebalanceOK>true</rebalanceOK>\\n    <subscriptionSame>true</subscriptionSame>\\n    <totalDiff>0</totalDiff>\\n</data>\\n<requestId>10EDC518-10E7-4B34-92FB-171235FA****</requestId>\\n</OnsConsumerStatusResponse>","errorExample":""}]',
      'title' => '查询Group ID消费状态',
      'summary' => '查询指定Group ID详细状态数据：订阅关系检查、消费TPS统计、负载均衡状态、消费端连接。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 本接口一般用于在粗略判断消费堆积以及客户端在线状态后，需要排查消费异常原因的场景。可以根据返回结果判断出指定Group ID的订阅关系是否一致、负载均衡是否正常以及获取在线客户端的Jstack信息等。
- 使用本接口需要调用大量后端接口以完成数据聚合，因此查询速度慢，不建议频繁调用。
',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsConsumerStatus**接口，您还可以通过云消息队列 RocketMQ 版控制台查看Group ID的详细数据。具体操作，请参见[查看消费者状态](~~94312~~)。',
    ),
    'OnsConsumerAccumulate' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_consumer_id',
          ),
        ),
        1 => 
        array (
          'name' => 'Detail',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否查询各个Topic的详细信息。取值说明如下：

- **true**：要查询详细信息，返回**DetailInTopicList**参数的详细信息。

- **false**：不查询详细信息（默认值），**DetailInTopicList**参数返回值为空。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'CE817BFF-B389-43CD-9419-95011AC9****',
              ),
              'Data' => 
              array (
                'description' => '指定Consumer的消费堆积情况。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConsumeTps' => 
                  array (
                    'description' => '该Group ID下消费者实例群组接收消息的总TPS。',
                    'type' => 'number',
                    'format' => 'float',
                    'example' => '10',
                  ),
                  'DelayTime' => 
                  array (
                    'description' => 'Group ID消费消息的最大延迟时间。取值为该Group ID订阅的所有Topic中，消费延迟时间最长的Topic的值。

单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '10000',
                  ),
                  'LastTimestamp' => 
                  array (
                    'description' => '该Group ID下消费者实例群组中最近消费的某条消息的生产时间。

单位：毫秒级的Unix时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1566231000000',
                  ),
                  'TotalDiff' => 
                  array (
                    'description' => '该Group ID订阅的所有Topic的消费堆积数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '100',
                  ),
                  'Online' => 
                  array (
                    'description' => '该Group ID下是否有消费者实例在线；只要有一个消费者实例在线，该Group ID状态即为在线。取值说明如下：

- **true**：状态为在线

- **false**：状态为不在线',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'DetailInTopicList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'DetailInTopicDo' => 
                      array (
                        'description' => '各个Topic具体情况。如果请求参数**Detail**取值为**fasle**，则该返回参数的返回值为空。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'DelayTime' => 
                            array (
                              'description' => '该Topic中消息消费的最大延迟时间。即Topic中最早一条未消费消息的就绪时间和当前的时间差。

单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '10000',
                            ),
                            'TotalDiff' => 
                            array (
                              'description' => '该Topic的消费堆积数量。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '100',
                            ),
                            'LastTimestamp' => 
                            array (
                              'description' => '该Topic中最近消费的某条消息的生产时间。

单位：毫秒级的Unix时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1566231000000',
                            ),
                            'Topic' => 
                            array (
                              'description' => 'Topic名称。',
                              'type' => 'string',
                              'example' => 'test-mq-topic',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CE817BFF-B389-43CD-9419-95011AC9****\\",\\n  \\"Data\\": {\\n    \\"ConsumeTps\\": 10,\\n    \\"DelayTime\\": 10000,\\n    \\"LastTimestamp\\": 1566231000000,\\n    \\"TotalDiff\\": 100,\\n    \\"Online\\": true,\\n    \\"DetailInTopicList\\": {\\n      \\"DetailInTopicDo\\": [\\n        {\\n          \\"DelayTime\\": 10000,\\n          \\"TotalDiff\\": 100,\\n          \\"LastTimestamp\\": 1566231000000,\\n          \\"Topic\\": \\"test-mq-topic\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsConsumerAccumulateResponse>\\n<Data>\\n    <DetailInTopicList>\\n        <DetailInTopicDo>\\n            <TotalDiff>100</TotalDiff>\\n            <LastTimestamp>1566231000000</LastTimestamp>\\n            <DelayTime>10000</DelayTime>\\n            <Topic>test-mq-topic</Topic>\\n        </DetailInTopicDo>\\n    </DetailInTopicList>\\n    <TotalDiff>100</TotalDiff>\\n    <LastTimestamp>1566231000000</LastTimestamp>\\n    <DelayTime>10000</DelayTime>\\n    <Online>true</Online>\\n    <ConsumeTps>10</ConsumeTps>\\n</Data>\\n<RequestId>0CCF6437-CBB0-4378-BFEC-E08AC258****</RequestId>\\n</OnsConsumerAccumulateResponse>","errorExample":""}]',
      'title' => '查询消息消费堆积情况',
      'summary' => '查询指定Group ID的消息消费堆积情况，包括当前消息堆积数量和消费延迟时间等。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>消费堆积查询一般在生产环境中需要关注Group ID消费进度时使用，用于粗略判断消息消费情况和延迟情况。您不仅可以查到该Group ID订阅的所有Topic的消息堆积情况，还可以查到每个Topic各自的消息堆积情况。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsConsumerAccumulate**接口，您还可以通过云消息队列 RocketMQ 版控制台查看Group ID的消息消费堆积情况。具体操作，请参见[查看消费者状态](~~94312~~)。',
    ),
    'OnsConsumerGetConnection' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_consumer_id',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'DE4140C7-F42D-473D-A5FF-B1E31692****',
              ),
              'Data' => 
              array (
                'description' => '返回参数数据结构。',
                'type' => 'object',
                'properties' => 
                array (
                  'ConnectionList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'ConnectionDo' => 
                      array (
                        'description' => '指定Group ID的连接信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Version' => 
                            array (
                              'description' => '消费端版本。
',
                              'type' => 'string',
                              'example' => 'V4_3_6',
                            ),
                            'ClientAddr' => 
                            array (
                              'description' => '该消费者实例的地址和端口。',
                              'type' => 'string',
                              'example' => '30.5.121.**',
                            ),
                            'Language' => 
                            array (
                              'description' => '消费者应用的开发语言。',
                              'type' => 'string',
                              'example' => 'JAVA',
                            ),
                            'ClientId' => 
                            array (
                              'description' => '消费者实例的ID。',
                              'type' => 'string',
                              'example' => '30.5.121.**@24813#-1999745829#-1737591554#453111174894656',
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
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DE4140C7-F42D-473D-A5FF-B1E31692****\\",\\n  \\"Data\\": {\\n    \\"ConnectionList\\": {\\n      \\"ConnectionDo\\": [\\n        {\\n          \\"Version\\": \\"V4_3_6\\",\\n          \\"ClientAddr\\": \\"30.5.121.**\\",\\n          \\"Language\\": \\"JAVA\\",\\n          \\"ClientId\\": \\"30.5.121.**@24813#-1999745829#-1737591554#453111174894656\\"\\n        }\\n      ]\\n    }\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsConsumerGetConnectionResponse>\\r\\n    <Data>\\r\\n        <ConnectionList>\\r\\n            <ConnectionDo>\\r\\n                <ClientAddr>30.5.121.**</ClientAddr>\\r\\n                <Language>JAVA</Language>\\r\\n                <Version>V4_3_6</Version>\\r\\n                <ClientId>30.5.121.**@24813#-1999745829#-1737591554#453111174894656</ClientId>\\r\\n            </ConnectionDo>\\r\\n        </ConnectionList>\\r\\n    </Data>\\r\\n    <RequestId>DE4140C7-F42D-473D-A5FF-B1E31692****</RequestId>\\r\\n</OnsConsumerGetConnectionResponse>","errorExample":""}]',
      'title' => '查询Group ID客户端连接情况',
      'summary' => '查询指定 Group ID 下当前客户端的连接情况。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

本接口一般用于在消费异常情况下，获取指定Group ID下客户端的连接信息，通过查看消费者状态初步诊断原因。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsConsumerGetConnection**接口，您还可以通过云消息队列 RocketMQ 版控制台查看指定Group ID下客户端的连接情况。具体操作，请参见[查看消费者状态](~~94312~~)。',
    ),
    'OnsConsumerResetOffset' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_consumer_id',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需重置位点的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq-topic',
          ),
        ),
        2 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息清理类型。取值说明如下：

- **0**：清除所有消息。该Group ID在消费该Topic下的消息时会跳过当前堆积（未被消费）的所有消息，从这之后发送的最新消息开始消费。
 
 对于程序返回"reconsumeLater"，即走重试流程的这部分消息来说，清除无效。
- **1**：清理到指定时间。请指定一个时间点，这个时间点之后发送的消息才会被消费。
 
 可选时间范围中的起始和终止时间分别是该Topic中储存的最早的和最晚的一条消息的生产时间。不能选择超过可选时间范围的时间点。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'ResetTimestamp',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '重置位点到指定的时间戳，仅在**Type**为**1**时生效。单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1591153871000',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'D52C68F8-EC5D-4294-BFFF-1A6A25AF****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D52C68F8-EC5D-4294-BFFF-1A6A25AF****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsConsumerResetOffsetResponse>\\r\\n    <RequestId>D52C68F8-EC5D-4294-BFFF-1A6A25AF****</RequestId>\\r\\n</OnsConsumerResetOffsetResponse>","errorExample":""}]',
      'title' => '重置Group ID消费位点',
      'summary' => '重置指定的Group ID的消费位点到指定时间戳。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
本接口一般用于清理堆积消息，或者回溯消费。有以下两种清理方式：

- 清理所有消息

- 清理消费进度到指定的时间',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsConsumerResetOffset**接口，您还可以通过云消息队列 RocketMQ 版控制台重置指定Group ID的消费位点。具体操作，请参见[重置消费位点](~~63390~~)。',
    ),
    'OnsConsumerTimeSpan' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID订阅的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'MaxTimeStamp' => 
                  array (
                    'description' => '整个Topic目前最早存储的消息的生产时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026804',
                  ),
                  'ConsumeTimeStamp' => 
                  array (
                    'description' => '当前Group消费该Topic的最新时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026400',
                  ),
                  'Topic' => 
                  array (
                    'description' => '需查询的Topic。',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                  'MinTimeStamp' => 
                  array (
                    'description' => '整个Topic目前最新存储的消息的生产时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570701231122',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '需查询的消费端Group ID所对应的实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\",\\n  \\"Data\\": {\\n    \\"MaxTimeStamp\\": 1570761026804,\\n    \\"ConsumeTimeStamp\\": 1570761026400,\\n    \\"Topic\\": \\"test-mq_topic\\",\\n    \\"MinTimeStamp\\": 1570701231122,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsConsumerTimeSpanResponse>\\n<Data>\\n    <MinTimeStamp>1570701231122</MinTimeStamp>\\n    <ConsumeTimeStamp>1570761026400</ConsumeTimeStamp>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <Topic>test-mq_topic</Topic>\\n    <MaxTimeStamp>1570761026804</MaxTimeStamp>\\n</Data>\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\n</OnsConsumerTimeSpanResponse>","errorExample":""}]',
      'title' => '查询Topic可重置时间范围',
      'summary' => '查询Topic可重置的时间范围，即该Topic中储存的最早的和最晚的消息的生产时间。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
使用本接口可以查询某个Topic在当前服务器上存储的最早和最晚的一条消息的时间，以及查询消费端最近消费的时间。本接口一般用于展示消费进度的概况，和**OnsConsumerAccumulate**接口配合使用。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'OnsMessagePush' => 
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
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Group ID。详细信息，请参见[名词解释](~~29533~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'ClientId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消费者实例的ID。您可调用[OnsConsumerGetConnection](~~29598~~)接口获取该ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '30.5.121.**@24813#-1999745829#-1737591554#453111174894656',
          ),
        ),
        2 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息的标识，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0BC1669963053CF68F733BB70396****',
          ),
        ),
        3 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息推送至的目标Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test-mq_topic',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '所需推送的消息所在的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'B8EDC90D-F726-4B9E-8BEF-F0DD25EC****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B8EDC90D-F726-4B9E-8BEF-F0DD25EC****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsMessagePushResponse>\\n    <RequestId>B8EDC90D-F726-4B9E-8BEF-F0DD25EC****</RequestId>\\n</OnsMessagePushResponse>","errorExample":""}]',
      'title' => '向指定的消费者推送消息',
      'summary' => '调用OnsMessagePush向指定的消费者推送消息。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
本接口主要用于消费验证的场景。通过传入的MsgId获取指定消息的消息体，再将消息体重新进行封装推送给消费者。此时重新发送的这条消息和原消息的消息内容相同，但并不是同一条消息且MsgId不同。',
    ),
    'OnsTrendTopicInputTps' => 
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的Topic名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询区间的起始时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570852800000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询区间的终止时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570868400000',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的类型。取值说明如下：

- **0**：查询指定时间段内Topic的写入量。
- **1**：查询指定时间段内Topic的TPS曲线数据。
',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '采样周期，单位：分钟，取值可为1、5、10。',
            'type' => 'integer',
            'format' => 'int64',
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
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'E213AD8A-0730-4B3D-A35A-340DA47D****',
              ),
              'Data' => 
              array (
                'description' => '数据集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Records' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StatsDataDo' => 
                      array (
                        'description' => '采集点信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Y' => 
                            array (
                              'description' => '纵轴，数据（TPS或者总量）。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0',
                            ),
                            'X' => 
                            array (
                              'description' => '横轴，时间戳，单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570852800000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'XUnit' => 
                  array (
                    'description' => '横轴单位。统计时间：ms。',
                    'type' => 'string',
                    'example' => 'ms',
                  ),
                  'YUnit' => 
                  array (
                    'description' => '纵轴单位。统计的消息生产数量msg，或者统计的消息生产TPS msg/min。',
                    'type' => 'string',
                    'example' => 'msg',
                  ),
                  'Title' => 
                  array (
                    'description' => 'Table的名称。',
                    'type' => 'string',
                    'example' => 'TopicXXX  Send Trend Chart',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"E213AD8A-0730-4B3D-A35A-340DA47D****\\",\\n  \\"Data\\": {\\n    \\"Records\\": {\\n      \\"StatsDataDo\\": [\\n        {\\n          \\"Y\\": 0,\\n          \\"X\\": 1570852800000\\n        }\\n      ]\\n    },\\n    \\"XUnit\\": \\"ms\\",\\n    \\"YUnit\\": \\"msg\\",\\n    \\"Title\\": \\"TopicXXX  Send Trend Chart\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsTrendTopicInputTpsResponse>\\n<Data>\\n    <Records>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570852800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570853400000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570854000000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570854600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570860600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570861200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570861800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570862400000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570863000000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570863600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570864200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>1</Y>\\n            <X>1570864800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570865400000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570866000000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570866600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570867200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570867800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570868400000</X>\\n        </StatsDataDo>\\n    </Records>\\n    <XUnit>time</XUnit>\\n    <YUnit>msg</YUnit>\\n    <Title>MQ_INST_111111111111_DOxxxxxx%test-mq_topic接收总量趋势图</Title>\\n</Data>\\n<RequestId>E213AD8A-0730-4B3D-A35A-340DA47D****</RequestId>\\n</OnsTrendTopicInputTpsResponse>","errorExample":""}]',
      'title' => '统计消息生产数据',
      'summary' => '查询一段时间内指定的Topic的消息写入报表数据。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
您可以使用本接口获取在线上环境统计的Topic的消息数据信息，可以根据需要选择查询指定时间段内Topic的写入量或者TPS曲线数据。

如果应用方消息量比较小，间隔不均匀，此时采用TPS查询可能会导致数据不明显，建议使用总量查询。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTrendTopicInputTps**接口，您还可以通过云消息队列 RocketMQ 版控制台查看指定Topic中生产消息的统计数据。具体操作，请参见[仪表盘](~~288246~~)。',
    ),
    'OnsTrendGroupOutputTps' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test',
          ),
        ),
        1 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要查询的Topic名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询区间的起始时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570852800000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询区间的终止时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570868400000',
          ),
        ),
        4 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的类型。取值说明如下：

- **0**：查询消费消息总量的统计曲线。
- **1**：查询消费消息TPS的统计曲线。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需统计数据的Group ID所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        6 => 
        array (
          'name' => 'Period',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '采样周期，单位：分钟，取值可为 1、5、10。',
            'type' => 'integer',
            'format' => 'int64',
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
              'RequestId' => 
              array (
                'description' => '公共参数，每个请求的ID都是唯一的，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'CE57AEDC-8FD2-43ED-8E3B-1F878077****',
              ),
              'Data' => 
              array (
                'description' => '数据集合。',
                'type' => 'object',
                'properties' => 
                array (
                  'Records' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'StatsDataDo' => 
                      array (
                        'description' => '采集点信息。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Y' => 
                            array (
                              'description' => '纵轴，数据（TPS或者总量）。',
                              'type' => 'number',
                              'format' => 'float',
                              'example' => '0',
                            ),
                            'X' => 
                            array (
                              'description' => '横轴，时间戳，单位：毫秒。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570867800000',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'XUnit' => 
                  array (
                    'description' => '横轴单位。统计时间：ms。',
                    'type' => 'string',
                    'example' => 'ms',
                  ),
                  'YUnit' => 
                  array (
                    'description' => '纵轴单位。统计的消息消费数量msg，或者统计的消息消费TPS msg/min。',
                    'type' => 'string',
                    'example' => 'msg',
                  ),
                  'Title' => 
                  array (
                    'description' => 'Table的名称。',
                    'type' => 'string',
                    'example' => 'TopicXXX@GID_XXXReceive Trend Chart',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"CE57AEDC-8FD2-43ED-8E3B-1F878077****\\",\\n  \\"Data\\": {\\n    \\"Records\\": {\\n      \\"StatsDataDo\\": [\\n        {\\n          \\"Y\\": 0,\\n          \\"X\\": 1570867800000\\n        }\\n      ]\\n    },\\n    \\"XUnit\\": \\"ms\\",\\n    \\"YUnit\\": \\"msg\\",\\n    \\"Title\\": \\"TopicXXX@GID_XXXReceive Trend Chart\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsTrendGroupOutputTpsResponse>\\n<Data>\\n    <Records>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570852800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570853400000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570854000000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570854600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570855200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570860600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570861200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570861800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570862400000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570863000000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570863600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570864200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>1</Y>\\n            <X>1570864800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570865400000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570866000000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570866600000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570867200000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570867800000</X>\\n        </StatsDataDo>\\n        <StatsDataDo>\\n            <Y>0</Y>\\n            <X>1570868400000</X>\\n        </StatsDataDo>\\n    </Records>\\n    <XUnit>time</XUnit>\\n    <YUnit>数量</YUnit>\\n    <Title>MQ_INST_111111111111_DOxxxxxx%test@MQ_INST_111111111111_DOxxxxxx%GID_test投递总量趋势图</Title>\\n</Data>\\n<RequestId>CE57AEDC-8FD2-43ED-8E3B-1F878077****</RequestId>\\n</OnsTrendGroupOutputTpsResponse>","errorExample":""}]',
      'title' => '统计消息消费数据',
      'summary' => '查询指定的Group ID在一段时间内消费消息的统计信息。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>线上环境生成消费数据报表时，可以使用本接口查询指定的Group ID在一段时间内的以下统计信息：

- 消费消息总量的统计曲线

- 消费消息TPS的统计曲线

如果应用方消息量比较小，间隔不均匀，此时采用TPS查询可能会导致数据不明显，建议查询消费消息总量。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTrendGroupOutputTps**接口，您还可以通过云消息队列 RocketMQ 版控制台查看指定Group ID下的消费消息的统计数据。具体操作，请参见[仪表盘](~~288246~~)。',
    ),
    'OnsTraceQueryByMsgId' => 
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '1E05791C117818B4AAC23B1BB0CE****',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的时间范围的起始时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570852800000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的时间范围的结束时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570968000000',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'B93332A3-160D-404F-880F-1F8736D1****',
              ),
              'QueryId' => 
              array (
                'description' => '该查询任务的ID，您需要根据该任务ID再调用[OnsTraceGetResult](~~59832~~)接口获取详细结果。',
                'type' => 'string',
                'example' => '272967562652883649157096685****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B93332A3-160D-404F-880F-1F8736D1****\\",\\n  \\"QueryId\\": \\"272967562652883649157096685****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsTraceQueryByMsgIdResponse>\\n<RequestId>B93332A3-160D-404F-880F-1F8736D1039F</RequestId>\\n<QueryId>272967562652883649157096685****</QueryId>\\n</OnsTraceQueryByMsgIdResponse>","errorExample":""}]',
      'title' => '根据MsgId创建轨迹查询任务',
      'summary' => '通过传入Topic名称和Message ID创建轨迹查询任务，得到该查询任务的ID。您需要再调用OnsTraceGetResult接口，传入返回的查询任务ID，获取消息轨迹的详细结果。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTraceQueryByMsgId**接口，您还可以通过云消息队列 RocketMQ 版控制台创建消息轨迹查询任务。具体操作，请参见[消息查询](~~29540~~)。',
    ),
    'OnsTraceQueryByMsgKey' => 
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
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'MsgKey',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Message Key。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'ORDERID_100',
          ),
        ),
        2 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的时间范围的起始时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570852800000',
          ),
        ),
        3 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询的时间范围的结束时间戳，单位：毫秒。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570968000000',
          ),
        ),
        4 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'F8654231-122A-4DBD-801F-38E35538****',
              ),
              'QueryId' => 
              array (
                'description' => '该查询任务的ID。您需要根据该任务ID再调用[OnsTraceGetResult](~~59832~~)接口获取详细结果。',
                'type' => 'string',
                'example' => '272967562652883649157096685****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"F8654231-122A-4DBD-801F-38E35538****\\",\\n  \\"QueryId\\": \\"272967562652883649157096685****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsTraceQueryByMsgKeyResponse>\\n<RequestId>F8654231-122A-4DBD-801F-38E35538****</RequestId>\\n<QueryId>272967562652883649157096685****</QueryId>\\n</OnsTraceQueryByMsgKeyResponse>","errorExample":""}]',
      'title' => '根据Message Key创建轨迹查询任务',
      'summary' => '通过传入Topic名称和Message Key创建轨迹查询任务，得到该查询任务的ID。您需要再调用OnsTraceGetResult接口，传入返回的查询任务ID，获取消息轨迹的详细结果。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTraceQueryByMsgKey**接口，您还可以通过云消息队列 RocketMQ 版控制台创建消息轨迹查询任务。具体操作，请参见[消息查询](~~29540~~)。',
    ),
    'OnsTraceGetResult' => 
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
          'name' => 'QueryId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要提取轨迹查询结果的任务ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '272967562652883649157096685****',
          ),
        ),
        1 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的Topic。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
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
                'example' => '84EE24D2-851F-40D6-B99E-4D6AB909****',
              ),
              'TraceData' => 
              array (
                'description' => '该查询任务的结果明细。',
                'type' => 'object',
                'properties' => 
                array (
                  'Status' => 
                  array (
                    'description' => '该查询任务的结果。取值说明如下：

- **finish**：查询完成
- **working**：查询中
- **removed**：任务已删除',
                    'type' => 'string',
                    'example' => 'finish',
                  ),
                  'MsgKey' => 
                  array (
                    'description' => '该查询任务对应的Message Key。',
                    'type' => 'string',
                    'example' => 'ORDERID_100',
                  ),
                  'UpdateTime' => 
                  array (
                    'description' => '该查询任务的最后更新时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570966877000',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '该查询任务的创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570966857000',
                  ),
                  'Topic' => 
                  array (
                    'description' => '该查询任务的Topic。',
                    'type' => 'string',
                    'example' => 'test',
                  ),
                  'UserId' => 
                  array (
                    'description' => '查询用户ID。',
                    'type' => 'string',
                    'example' => '27296756265288****',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '该查询任务对应的Message ID。',
                    'type' => 'string',
                    'example' => '1E05791C117818B4AAC23B1BB0CE****',
                  ),
                  'TraceList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'TraceMapDo' => 
                      array (
                        'description' => '该查询任务的匹配轨迹列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Status' => 
                            array (
                              'description' => '发送状态。取值说明如下：

- **SEND_SUCCESS**：发送成功
- **SEND_FAILED**：发送失败
- **SEND_ROLLBACK**：事务消息回滚
- **SEND_UNKNOWN**：事务消息未提交
- **SEND_DELAY**：定时（延时）消息定时中',
                              'type' => 'string',
                              'example' => 'SEND_SUCCESS',
                            ),
                            'MsgKey' => 
                            array (
                              'description' => '消息的Key ，即Message Key。',
                              'type' => 'string',
                              'example' => 'ORDERID_100',
                            ),
                            'PubTime' => 
                            array (
                              'description' => '消息发送时间。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570850870478',
                            ),
                            'SubList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'SubMapDo' => 
                                array (
                                  'description' => '消息的消费轨迹列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'ClientList' => 
                                      array (
                                        'type' => 'object',
                                        'properties' => 
                                        array (
                                          'SubClientInfoDo' => 
                                          array (
                                            'description' => '该Group ID客户端消费记录的明细列表。',
                                            'type' => 'array',
                                            'items' => 
                                            array (
                                              'type' => 'object',
                                              'properties' => 
                                              array (
                                                'Status' => 
                                                array (
                                                  'description' => '消费状态。取值说明如下：

- **CONSUME_FAILED**：消费失败
- **CONSUME_SUCCESS**：消费成功
- **CONSUME_NOT_RETURN**：消费未返回结果
- **SEND_UNKNOWN**：事务消息未提交
- **SEND_DELAY**：定时（延时）消息定时中',
                                                  'type' => 'string',
                                                  'example' => 'CONSUME_SUCCESS',
                                                ),
                                                'SubTime' => 
                                                array (
                                                  'description' => '消费开始时间戳。',
                                                  'type' => 'integer',
                                                  'format' => 'int64',
                                                  'example' => '1570851590511',
                                                ),
                                                'ReconsumeTimes' => 
                                                array (
                                                  'description' => '本次消费的投递轮次。',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '1',
                                                ),
                                                'SubGroupName' => 
                                                array (
                                                  'description' => '该客户端所属的Group ID。',
                                                  'type' => 'string',
                                                  'example' => 'GID_test',
                                                ),
                                                'ClientHost' => 
                                                array (
                                                  'description' => '消费客户端的客户端地址。',
                                                  'type' => 'string',
                                                  'example' => '30.5.**.**',
                                                ),
                                                'CostTime' => 
                                                array (
                                                  'description' => '本次消费耗时，单位毫秒。',
                                                  'type' => 'integer',
                                                  'format' => 'int32',
                                                  'example' => '43',
                                                ),
                                              ),
                                            ),
                                          ),
                                        ),
                                      ),
                                      'FailCount' => 
                                      array (
                                        'description' => '该Group ID消费失败次数统计。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                      ),
                                      'SubGroupName' => 
                                      array (
                                        'description' => '消费方Group ID。',
                                        'type' => 'string',
                                        'example' => 'GID_test',
                                      ),
                                      'SuccessCount' => 
                                      array (
                                        'description' => '该Group ID消费成功次数统计。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'Topic' => 
                            array (
                              'description' => '消息的Topic。',
                              'type' => 'string',
                              'example' => 'test',
                            ),
                            'CostTime' => 
                            array (
                              'description' => '发送耗时，单位毫秒。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '24',
                            ),
                            'Tag' => 
                            array (
                              'description' => '消息的Tag，即Message Tag。',
                              'type' => 'string',
                              'example' => 'TagA',
                            ),
                            'MsgId' => 
                            array (
                              'description' => '消息的ID，即Message ID。',
                              'type' => 'string',
                              'example' => '0BC1F01800002A9F000000531246****',
                            ),
                            'PubGroupName' => 
                            array (
                              'description' => '发送方客户端配置的Group ID。',
                              'type' => 'string',
                              'example' => 'GID_test',
                            ),
                            'BornHost' => 
                            array (
                              'description' => '消息发送方的客户端地址。',
                              'type' => 'string',
                              'example' => '30.5.**.**',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'QueryId' => 
                  array (
                    'description' => '查询任务ID。',
                    'type' => 'string',
                    'example' => '272967562652883649157096685****',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"84EE24D2-851F-40D6-B99E-4D6AB909****\\",\\n  \\"TraceData\\": {\\n    \\"Status\\": \\"finish\\",\\n    \\"MsgKey\\": \\"ORDERID_100\\",\\n    \\"UpdateTime\\": 1570966877000,\\n    \\"CreateTime\\": 1570966857000,\\n    \\"Topic\\": \\"test\\",\\n    \\"UserId\\": \\"27296756265288****\\",\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"MsgId\\": \\"1E05791C117818B4AAC23B1BB0CE****\\",\\n    \\"TraceList\\": {\\n      \\"TraceMapDo\\": [\\n        {\\n          \\"Status\\": \\"SEND_SUCCESS\\",\\n          \\"MsgKey\\": \\"ORDERID_100\\",\\n          \\"PubTime\\": 1570850870478,\\n          \\"SubList\\": {\\n            \\"SubMapDo\\": [\\n              {\\n                \\"ClientList\\": {\\n                  \\"SubClientInfoDo\\": [\\n                    {\\n                      \\"Status\\": \\"CONSUME_SUCCESS\\",\\n                      \\"SubTime\\": 1570851590511,\\n                      \\"ReconsumeTimes\\": 1,\\n                      \\"SubGroupName\\": \\"GID_test\\",\\n                      \\"ClientHost\\": \\"30.5.**.**\\",\\n                      \\"CostTime\\": 43\\n                    }\\n                  ]\\n                },\\n                \\"FailCount\\": 0,\\n                \\"SubGroupName\\": \\"GID_test\\",\\n                \\"SuccessCount\\": 1\\n              }\\n            ]\\n          },\\n          \\"Topic\\": \\"test\\",\\n          \\"CostTime\\": 24,\\n          \\"Tag\\": \\"TagA\\",\\n          \\"MsgId\\": \\"0BC1F01800002A9F000000531246****\\",\\n          \\"PubGroupName\\": \\"GID_test\\",\\n          \\"BornHost\\": \\"30.5.**.**\\"\\n        }\\n      ]\\n    },\\n    \\"QueryId\\": \\"272967562652883649157096685****\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsTraceGetResultResponse>\\n<TraceData>\\n    <MsgId>1E05791C117818B4AAC23B1BB0CE****</MsgId>\\n    <Status>finish</Status>\\n    <TraceList>\\n        <TraceMapDo>\\n            <BornHost>30.5.**.**</BornHost>\\n            <MsgId>0BC1F01800002A9F000000531246****</MsgId>\\n            <Status>SEND_SUCCESS</Status>\\n            <CostTime>24</CostTime>\\n            <PubTime>1570850870478</PubTime>\\n            <Tag>TagA</Tag>\\n            <Topic>test</Topic>\\n            <MsgKey>ORDERID_100</MsgKey>\\n            <PubGroupName>GID_test</PubGroupName>\\n            <SubList>\\n                <SubMapDo>\\n                    <ClientList>\\n                        <SubClientInfoDo>\\n                            <Status>CONSUME_SUCCESS</Status>\\n                            <CostTime>43</CostTime>\\n                            <ClientHost>30.5.**.**</ClientHost>\\n                            <ReconsumeTimes>1</ReconsumeTimes>\\n                            <SubTime>1570851590511</SubTime>\\n                            <SubGroupName>GID_test</SubGroupName>\\n                        </SubClientInfoDo>\\n                    </ClientList>\\n                    <SuccessCount>1</SuccessCount>\\n                    <FailCount>0</FailCount>\\n                    <SubGroupName>GID_test</SubGroupName>\\n                </SubMapDo>\\n            </SubList>\\n        </TraceMapDo>\\n    </TraceList>\\n    <CreateTime>1570966857000</CreateTime>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <Topic>test</Topic>\\n    <UpdateTime>1570966877000</UpdateTime>\\n    <QueryId>272967562652883649157096685****</QueryId>\\n    <UserId>27296756265288****</UserId>\\n</TraceData>\\n<RequestId>84EE24D2-851F-40D6-B99E-4D6AB909****</RequestId>\\n</OnsTraceGetResultResponse>","errorExample":""}]',
      'title' => '获取轨迹查询结果',
      'summary' => '通过传入轨迹查询任务的ID获取之前的轨迹查询结果。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 若您已根据Message ID或者Message Key创建了轨迹查询任务，并得到了查询任务的ID。您可调用本接口根据查询任务ID获取对应的轨迹结果的明细。轨迹查询任务通过[OnsTraceQueryByMsgId](~~445322~~)或[OnsTraceQueryByMsgKey](~~445324~~)接口创建，返回数据中的**QueryId**即为本接口中需要传入的查询任务ID。
- 因为消息轨迹查询任务耗时较多，创建任务后立即根据该接口获取结果可能为空，若遇到此情况，建议等待一段时间再重试。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsTraceGetResult**接口，您还可以通过云消息队列 RocketMQ 版控制台查看消息轨迹的查询结果。具体操作，请参见[查询消息轨迹](~~43357~~)。',
    ),
    'OnsDLQMessagePageQueryByGroupId' => 
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
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        1 => 
        array (
          'name' => 'BeginTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的起始时间戳，单位：毫秒。
通过**TaskId**进行后续取消息时，该参数设置的值不生效，默认以第一次查询时输入的起始时间为准。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570723200000',
          ),
        ),
        2 => 
        array (
          'name' => 'EndTime',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询范围的终止时间戳，单位：毫秒。
通过**TaskId**进行后续取消息时，该参数设置的值不生效，默认以第一次查询时输入的终止时间为准。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'docRequired' => true,
            'example' => '1570809600000',
          ),
        ),
        3 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询任务的ID，首次查询不需要输入，后续取消息必须传入，根据前一次的返回结果取出该字段。',
            'type' => 'string',
            'required' => false,
            'example' => '0BC1310300002A9F000021E4D7A48346',
          ),
        ),
        4 => 
        array (
          'name' => 'CurrentPage',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当前取第几页消息，从1开始递增，最大值为50，取消息时不可超过最大页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '2',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询，每页最多显示的消息数量，默认显示20条，最小5条，最多50条。
通过**TaskId**进行后续取消息时，该参数设置的值不生效，默认以第一次查询时输入的每页消息数量为准。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '5',
          ),
        ),
        6 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息所对应的实例ID。
',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => 'B00CD3C8-D81E-4A41-85E2-38F19252****',
              ),
              'MsgFoundDo' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'CurrentPage' => 
                  array (
                    'description' => '当前位于第几页。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'MsgFoundList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'OnsRestMessageDo' => 
                      array (
                        'description' => '当前页的消息集合，该类型与[OnsDLQMessageGetById](~~112667~~)的返回结果一致。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'StoreSize' => 
                            array (
                              'description' => '消息大小。单位：KB。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '406',
                            ),
                            'ReconsumeTimes' => 
                            array (
                              'description' => '消息重试消费的次数。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '1',
                            ),
                            'StoreTimestamp' => 
                            array (
                              'description' => '消息被服务端存储的时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570760999811',
                            ),
                            'InstanceId' => 
                            array (
                              'description' => '实例ID。',
                              'type' => 'string',
                              'example' => 'MQ_INST_111111111111_DOxxxxxx',
                            ),
                            'MsgId' => 
                            array (
                              'description' => '消息ID，即Message ID。',
                              'type' => 'string',
                              'example' => '1E0578FE110F18B4AAC235C05F2*****',
                            ),
                            'StoreHost' => 
                            array (
                              'description' => '存储该消息的服务器实例。',
                              'type' => 'string',
                              'example' => '11.193.***.***:10911',
                            ),
                            'Topic' => 
                            array (
                              'description' => '消息的Topic。',
                              'type' => 'string',
                              'example' => 'test-mq_topic',
                            ),
                            'PropertyList' => 
                            array (
                              'type' => 'object',
                              'properties' => 
                              array (
                                'MessageProperty' => 
                                array (
                                  'description' => '消息属性列表。',
                                  'type' => 'array',
                                  'items' => 
                                  array (
                                    'type' => 'object',
                                    'properties' => 
                                    array (
                                      'Value' => 
                                      array (
                                        'description' => '消息属性的取值。',
                                        'type' => 'string',
                                        'example' => 'TagA',
                                      ),
                                      'Name' => 
                                      array (
                                        'description' => '消息属性。取值说明如下：
- **TRACE_ON**：是否有消息轨迹。
- **KEYS**：消息的Key属性。
- **TAGS**：消息的Tag属性。
- **INSTANCE_ID**：消息所在的实例的ID。

更多概念信息，请参见[名词解释](~~29533~~)。',
                                        'type' => 'string',
                                        'example' => 'TAGS',
                                      ),
                                    ),
                                  ),
                                ),
                              ),
                            ),
                            'BornTimestamp' => 
                            array (
                              'description' => '消息生产的时间戳。',
                              'type' => 'integer',
                              'format' => 'int64',
                              'example' => '1570760999721',
                            ),
                            'BodyCRC' => 
                            array (
                              'description' => '消息体CRC校验值。',
                              'type' => 'integer',
                              'format' => 'int32',
                              'example' => '914112295',
                            ),
                            'BornHost' => 
                            array (
                              'description' => '生成该消息的生产者实例。',
                              'type' => 'string',
                              'example' => '42.120.***.***:59270',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'MaxPageCount' => 
                  array (
                    'description' => '查询结果最大页数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '400',
                  ),
                  'TaskId' => 
                  array (
                    'description' => '第一次新建查询时，返回的查询任务ID，用于后续取消息。',
                    'type' => 'string',
                    'example' => '0BC1310300002A9F000021E4D7A48346',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"B00CD3C8-D81E-4A41-85E2-38F19252****\\",\\n  \\"MsgFoundDo\\": {\\n    \\"CurrentPage\\": 1,\\n    \\"MsgFoundList\\": {\\n      \\"OnsRestMessageDo\\": [\\n        {\\n          \\"StoreSize\\": 406,\\n          \\"ReconsumeTimes\\": 1,\\n          \\"StoreTimestamp\\": 1570760999811,\\n          \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n          \\"MsgId\\": \\"1E0578FE110F18B4AAC235C05F2*****\\",\\n          \\"StoreHost\\": \\"11.193.***.***:10911\\",\\n          \\"Topic\\": \\"test-mq_topic\\",\\n          \\"PropertyList\\": {\\n            \\"MessageProperty\\": [\\n              {\\n                \\"Value\\": \\"TagA\\",\\n                \\"Name\\": \\"TAGS\\"\\n              }\\n            ]\\n          },\\n          \\"BornTimestamp\\": 1570760999721,\\n          \\"BodyCRC\\": 914112295,\\n          \\"BornHost\\": \\"42.120.***.***:59270\\"\\n        }\\n      ]\\n    },\\n    \\"MaxPageCount\\": 400,\\n    \\"TaskId\\": \\"0BC1310300002A9F000021E4D7A48346\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsDLQMessagePageQueryByGroupIdResponse>\\n    <MsgFoundDo>\\n        <MaxPageCount>400</MaxPageCount>\\n        <MsgFoundList>\\n            <OnsRestMessageDo>\\n                <MsgId>1E0578FE110F18B4AAC235C05F2*****</MsgId>\\n                <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n                <ReconsumeTimes>1</ReconsumeTimes>\\n                <BornHost>42.120.***.***:59270</BornHost>\\n                <StoreTimestamp>1570760999811</StoreTimestamp>\\n                <StoreHost>11.193.***.***:10911</StoreHost>\\n                <BodyCRC>914112295</BodyCRC>\\n                <Topic>test-mq_topic</Topic>\\n                <BornTimestamp>1570760999721</BornTimestamp>\\n                <StoreSize>406</StoreSize>\\n                <PropertyList>\\n                    <MessageProperty>\\n                        <Name>TAGS</Name>\\n                        <Value>TagA</Value>\\n                    </MessageProperty>\\n                </PropertyList>\\n            </OnsRestMessageDo>\\n        </MsgFoundList>\\n        <TaskId>0BC1310300002A9F000021E4D7A48346</TaskId>\\n        <CurrentPage>1</CurrentPage>\\n    </MsgFoundDo>\\n    <RequestId>5DC2A47E-2B31-4722-96C8-FA59C9*****</RequestId>\\n</OnsDLQMessagePageQueryByGroupIdResponse>","errorExample":""}]',
      'title' => '查询Group ID内所有死信消息',
      'summary' => '通过传入Group ID和时间段，分页查询指定时间段内该Group ID内存在的所有死信消息。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 按Group ID查询死信消息的方式属于范围查询，查询结果会通过分页的方式展示给调用方，仅适用于没有任何搜索条件Message ID查询场景。
- 根据Group ID查询死信消息应尽可能缩短查询的时间区间，否则匹配的消息过多，不利于定位问题。调用流程如下：
    1. 传入Group ID、起止时间以及每页的消息数量，进行分页查询。如果有消息，默认返回第一页的消息、总页数和查询任务 ID。
    2. 根据返回的结果中的查询任务ID，进行后续取消息，取消息时传入查询任务ID以及当前页数。此时输入的起止时间和每页消息数量不生效，默认以第一次查询时输入的参数值为准。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsDLQMessagePageQueryByGroupId**接口，您还可以通过云消息队列 RocketMQ 版控制台查看死信消息。具体操作，请参见[死信队列](~~87277~~)。',
    ),
    'OnsDLQMessageGetById' => 
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
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0BC16699165C03B925DB8A404E2D****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'description' => '为公共参数，每个请求的ID都是唯一的。',
                'type' => 'string',
                'example' => 'A07E3902-B92E-44A6-B6C5-6AA111111****',
              ),
              'Data' => 
              array (
                'description' => '查询结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'StoreSize' => 
                  array (
                    'description' => '消息大小。单位：KB。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '407',
                  ),
                  'ReconsumeTimes' => 
                  array (
                    'description' => '消息重试消费的次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'StoreTimestamp' => 
                  array (
                    'description' => '消息被服务端存储的时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026708',
                  ),
                  'InstanceId' => 
                  array (
                    'description' => '实例ID。',
                    'type' => 'string',
                    'example' => 'MQ_INST_111111111111_DOxxxxxx',
                  ),
                  'MsgId' => 
                  array (
                    'description' => '消息ID。',
                    'type' => 'string',
                    'example' => '0BC16699165C03B925DB8A404E2D****',
                  ),
                  'StoreHost' => 
                  array (
                    'description' => '存储该消息的服务器实例。',
                    'type' => 'string',
                    'example' => '11.220.***.***:10911',
                  ),
                  'Topic' => 
                  array (
                    'description' => '消息的Topic。',
                    'type' => 'string',
                    'example' => 'test-mq_topic',
                  ),
                  'PropertyList' => 
                  array (
                    'type' => 'object',
                    'properties' => 
                    array (
                      'MessageProperty' => 
                      array (
                        'description' => '消息属性列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'type' => 'object',
                          'properties' => 
                          array (
                            'Value' => 
                            array (
                              'description' => '消息属性的取值。',
                              'type' => 'string',
                              'example' => 'TagA',
                            ),
                            'Name' => 
                            array (
                              'description' => '消息属性。取值说明如下：
- **TRACE_ON**：是否有消息轨迹
- **KEYS**：消息的Key属性
- **TAGS**：消息的Tag属性
- **INSTANCE_ID**：消息所在的实例的ID

更多概念信息请参见[名词解释](~~29533~~)。',
                              'type' => 'string',
                              'example' => 'TAGS',
                            ),
                          ),
                        ),
                      ),
                    ),
                  ),
                  'BornTimestamp' => 
                  array (
                    'description' => '消息生成的时间戳。单位：毫秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1570761026630',
                  ),
                  'BodyCRC' => 
                  array (
                    'description' => '消息体CRC校验值。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '914112295',
                  ),
                  'BornHost' => 
                  array (
                    'description' => '生成该消息的生产者实例。',
                    'type' => 'string',
                    'example' => '42.120.**.**:64646',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A07E3902-B92E-44A6-B6C5-6AA111111****\\",\\n  \\"Data\\": {\\n    \\"StoreSize\\": 407,\\n    \\"ReconsumeTimes\\": 1,\\n    \\"StoreTimestamp\\": 1570761026708,\\n    \\"InstanceId\\": \\"MQ_INST_111111111111_DOxxxxxx\\",\\n    \\"MsgId\\": \\"0BC16699165C03B925DB8A404E2D****\\",\\n    \\"StoreHost\\": \\"11.220.***.***:10911\\",\\n    \\"Topic\\": \\"test-mq_topic\\",\\n    \\"PropertyList\\": {\\n      \\"MessageProperty\\": [\\n        {\\n          \\"Value\\": \\"TagA\\",\\n          \\"Name\\": \\"TAGS\\"\\n        }\\n      ]\\n    },\\n    \\"BornTimestamp\\": 1570761026630,\\n    \\"BodyCRC\\": 914112295,\\n    \\"BornHost\\": \\"42.120.**.**:64646\\"\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsDLQMessageGetByIdResponse>\\n<Data>\\n    <MsgId>1E0578FE110F18B4AAC235C0C8460BA2</MsgId>\\n    <InstanceId>MQ_INST_111111111111_DOxxxxxx</InstanceId>\\n    <ReconsumeTimes>1</ReconsumeTimes>\\n    <BornHost>42.120.**.**:64646</BornHost>\\n    <BodyCRC>914112295</BodyCRC>\\n    <StoreHost>11.220.***.***:10911</StoreHost>\\n    <StoreTimestamp>1570761026708</StoreTimestamp>\\n    <BornTimestamp>1570761026630</BornTimestamp>\\n    <Topic>test-mq_topic</Topic>\\n    <StoreSize>407</StoreSize>\\n    <PropertyList>\\n        <MessageProperty>\\n            <Name>TRACE_ON</Name>\\n            <Value>true</Value>\\n        </MessageProperty>\\n        <MessageProperty>\\n            <Name>RETRY_TOPIC</Name>\\n            <Value>MQ_INST_111111111111_DOxxxxxx%test-mq_topic</Value>\\n        </MessageProperty>\\n        <MessageProperty>\\n            <Name>KEYS</Name>\\n            <Value>ORDERID_993</Value>\\n        </MessageProperty>\\n        <MessageProperty>\\n            <Name>UNIQ_KEY</Name>\\n            <Value>1E0578FE110F18B4AAC235C0C84*****</Value>\\n        </MessageProperty>\\n        <MessageProperty>\\n            <Name>WAIT</Name>\\n            <Value>false</Value>\\n        </MessageProperty>\\n        <MessageProperty>\\n            <Name>TAGS</Name>\\n            <Value>TagA</Value>\\n        </MessageProperty>\\n        <MessageProperty>\\n            <Name>INSTANCE_ID</Name>\\n            <Value>MQ_INST_111111111111_DOxxxxxx</Value>\\n        </MessageProperty>\\n    </PropertyList>\\n</Data>\\n<RequestId>A07E3902-B92E-44A6-B6C5-6AA111111****</RequestId>\\n</OnsDLQMessageGetByIdResponse>","errorExample":""}]',
      'title' => '根据Message ID查询死信消息',
      'summary' => '通过传入Message ID查询指定的死信消息。包括存储时间、消息体、Key和Tag。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>
根据Message ID查询死信消息的方式属于精确查询。查询条件需要的Message ID从消息发送成功的SendResult中获取，或者从批量查询的接口中获取。查询到的信息包括死信消息的存储时间、消息体、Key和Tag等属性。',
      'responseParamsDescription' => ' ',
      'extraInfo' => '## 控制台操作
除了调用**OnsDLQMessageGetById**接口，您还可以通过云消息队列 RocketMQ 版控制台查看死信消息。具体操作，请参见[死信队列](~~87277~~)。',
    ),
    'OnsDLQMessageResendById' => 
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
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'MsgId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消息的ID，即Message ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0BC16699343051CD9F1D798E7734****',
          ),
        ),
        1 => 
        array (
          'name' => 'GroupId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询的消费端Group ID。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'GID_test_group_id',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需查询消息所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_188077086902****_BXSuW61e',
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
                'example' => 'D94CC769-4DC3-4690-A868-9D0631B1****',
              ),
              'Data' => 
              array (
                'type' => 'object',
                'properties' => 
                array (
                  'MsgId' => 
                  array (
                    'description' => '返回的消息列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '消息ID，即Message ID。',
                      'type' => 'string',
                      'example' => '0BC16699343051CD9F1D798E7734****',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"D94CC769-4DC3-4690-A868-9D0631B1****\\",\\n  \\"Data\\": {\\n    \\"MsgId\\": [\\n      \\"0BC16699343051CD9F1D798E7734****\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<OnsDLQMessageResendByIdResponse>\\r\\n<RequestId>D94CC769-4DC3-4690-A868-9D0631B1****</RequestId>\\r\\n</OnsDLQMessageResendByIdResponse>","errorExample":""}]',
      'title' => '重发指定的死信消息',
      'summary' => '重发指定Message ID的死信消息，使该消息能够被Consumer再次消费。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>

- 死信消息已达最大重试次数，若重发后再次消费失败，则死信队列中将增加一条Message ID相同的消息，可通过控制台死信队列的查询页面或者管控API查看该结果。您可通过同一Message ID的消息出现次数判断重发后依然消费失败的次数。
- 由于死信消息是经过重试逻辑依然消费失败的消息，通常意味着消费逻辑可能存在问题，故请先查明多次消费失败的原因，再调用本接口重新发送。
- 当前消息队列RocketMQ版不管理死信重发的状态，重发后消费成功的消息不会从死信队列中移除。需自行管理、判断消息是否需要重发。避免多次无意义地重发，从而造成重复消费。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => '> 如果重新投递失败，会返回投递失败的Message ID。',
      'extraInfo' => '## 控制台操作
除了调用**OnsDLQMessageResendById**接口，您还可以通过云消息队列 RocketMQ 版控制台重新投递指定的死信消息。具体操作，请参见[死信队列](~~87277~~)。',
    ),
    'OnsTopicUpdate' => 
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
      'deprecated' => true,
      'systemTags' => 
      array (
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Topic',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配置的Topic名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'Perm',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置该Topic的读写模式。取值说明如下：

- **6**：同时支持读写
- **4**：禁写
- **2**：禁读',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'docRequired' => true,
            'example' => '6',
          ),
        ),
        2 => 
        array (
          'name' => 'InstanceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需配置的Topic所对应的实例ID。',
            'type' => 'string',
            'required' => false,
            'docRequired' => true,
            'example' => 'MQ_INST_111111111111_DOxxxxxx',
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
                'example' => '81979ADA-4A78-4F64-9DEC-5700446D****',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'noSubstitutionReason' => '无替代API，历史原因导致该API被标记为弃用。',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"81979ADA-4A78-4F64-9DEC-5700446D****\\"\\n}","errorExample":""},{"type":"xml","example":"<OnsTopicUpdateResponse>\\r\\n<RequestId>81979ADA-4A78-4F64-9DEC-5700446D****</RequestId>\\r\\n</OnsTopicUpdateResponse>","errorExample":""}]',
      'title' => '配置Topic的读写模式',
      'summary' => '调用OnsTopicUpdate配置Topic的读写模式。',
      'description' => '><notice>阿里云提供的OpenAPI属于管控类API，用于管理和查询阿里云服务的相关资源。仅推荐在管控链路集成，消息收发的核心数据链路中严禁依赖OpenAPI实现，否则可能会导致链路产生风险。></notice>本接口一般用于禁读或禁写的场景。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'ons.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'ons.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'ons.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'ons.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'mq-internet-access',
      'endpoint' => 'ons.mq-internet-access.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'ons.cn-hangzhou.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'ons.cn-shanghai.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'ons.cn-shenzhen.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'ons.cn-chengdu.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'ons.cn-hongkong.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'ons.ap-northeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ons.ap-southeast-1.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'ons.ap-southeast-2.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'ons.ap-southeast-3.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'ons.ap-southeast-5.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'ap-southeast-6',
      'endpoint' => 'ons.ap-southeast-6.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'ons.us-east-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'ons.us-west-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'ons.eu-west-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'ons.eu-central-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'ons.ap-south-1.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'ons.me-east-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'ons.cn-hangzhou-finance.aliyuncs.com',
    ),
    23 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'ons.cn-shanghai-finance-1.aliyuncs.com',
    ),
    24 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'ons.cn-shenzhen-finance-1.aliyuncs.com',
    ),
    25 => 
    array (
      'regionId' => 'cn-beijing-finance-1',
      'endpoint' => 'ons.cn-beijing-finance-1.aliyuncs.com',
    ),
  ),
);
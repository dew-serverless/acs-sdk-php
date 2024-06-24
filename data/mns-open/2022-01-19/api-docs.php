<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'Mns-open',
    'version' => '2022-01-19',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 180332,
      'title' => '主题管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateTopic',
        1 => 'SetTopicAttributes',
        2 => 'GetTopicAttributes',
        3 => 'DeleteTopic',
        4 => 'ListTopic',
      ),
    ),
    1 => 
    array (
      'id' => 180338,
      'title' => '队列管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateQueue',
        1 => 'SetQueueAttributes',
        2 => 'GetQueueAttributes',
        3 => 'DeleteQueue',
        4 => 'ListQueue',
      ),
    ),
    2 => 
    array (
      'id' => 180344,
      'title' => '订阅管理',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'Subscribe',
        1 => 'SetSubscriptionAttributes',
        2 => 'GetSubscriptionAttributes',
        3 => 'Unsubscribe',
        4 => 'ListSubscriptionByTopic',
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
    'CreateTopic' => 
    array (
      'summary' => '调用CreateTopic接口创建主题。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需创建的topic的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'EnableLogging',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否开启日志管理功能。取值说明如下：

- True：启用。

- False：停用。
默认值：False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxMessageSize',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '发送到该主题的消息体最大长度。
取值范围：1024~ 65536，单位为Byte。
默认值：65536。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '10240',
          ),
        ),
        3 => 
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
              'description' => '标签列表。
',
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'description' => '标签的key',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'tag1',
                ),
                'Value' => 
                array (
                  'description' => '标签值',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'joyce.wang',
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123E62C',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123E62C\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '创建主题',
    ),
    'SetTopicAttributes' => 
    array (
      'summary' => '调用SetTopicAttributes接口来修改主题的属性。',
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
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Topic的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'EnableLogging',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志管理功能。取值说明如下：

- True：启用。

- False：停用。
默认值：False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
          ),
        ),
        2 => 
        array (
          'name' => 'MaxMessageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送到该主题的消息体最大长度。
取值范围：1024~ 65536，单位为Byte。
默认值：65536。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '65536',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '修改主题的属性',
    ),
    'GetTopicAttributes' => 
    array (
      'summary' => '调用GetTopicAttributes接口获取主题的属性。',
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
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主题的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-topic',
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'TopicName' => 
                  array (
                    'description' => '主题的名称。',
                    'type' => 'string',
                    'example' => 'demo-topic',
                  ),
                  'MessageCount' => 
                  array (
                    'description' => '当前该主题中消息数目。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'MaxMessageSize' => 
                  array (
                    'description' => '发送到该主题的消息体最大长度，单位为Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '65536',
                  ),
                  'MessageRetentionPeriod' => 
                  array (
                    'description' => '消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '86400',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => '主题的创建时间，从1970-01-01 00:00:00到现在的时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1449554277',
                  ),
                  'LastModifyTime' => 
                  array (
                    'description' => '修改主题属性信息的最近时间，从1970-01-01 00:00:00到现在的时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1449554460',
                  ),
                  'LoggingEnabled' => 
                  array (
                    'description' => '是否开启日志管理功能。

- True：启用。

- False：停用。',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                  'Tags' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'type' => 'string',
                        ),
                        'TagValue' => 
                        array (
                          'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TopicName\\": \\"demo-topic\\",\\n    \\"MessageCount\\": 0,\\n    \\"MaxMessageSize\\": 65536,\\n    \\"MessageRetentionPeriod\\": 86400,\\n    \\"CreateTime\\": 1449554277,\\n    \\"LastModifyTime\\": 1449554460,\\n    \\"LoggingEnabled\\": true,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取主题的属性',
    ),
    'DeleteTopic' => 
    array (
      'summary' => '调用DeleteTopic接口删除主题。',
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
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要删除的topic名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'tf-testAccMNSTopic-112965059402264645',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
      'title' => '删除主题',
    ),
    'ListTopic' => 
    array (
      'summary' => '调用ListTopic接口查询阿里云账号下的主题列表，可分页获取数据。',
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
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，查询第几页的返回结果。
取值范围：1~100000000。
若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，每页最多显示的返回结果数量。
取值范围：10~50。
若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于50，则系统默认按照参数值为50处理。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主题的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'test',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '分页页码，查询第几页的返回结果。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小，每页最多显示的返回结果数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'Total' => 
                  array (
                    'description' => '总结果数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '130',
                  ),
                  'PageData' => 
                  array (
                    'description' => '当前页返回结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据项',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TopicName' => 
                        array (
                          'description' => '主题的名称。',
                          'type' => 'string',
                          'example' => 'demo-topic',
                        ),
                        'MessageCount' => 
                        array (
                          'description' => '当前该主题中消息数目。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'MaxMessageSize' => 
                        array (
                          'description' => '发送到该主题的消息体最大长度，单位为Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '65536',
                        ),
                        'MessageRetentionPeriod' => 
                        array (
                          'description' => '消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '86400',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Subscription的创建时间，从1970-01-01 00:00:00到现在的。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1449554962',
                        ),
                        'LastModifyTime' => 
                        array (
                          'description' => '最近一次修改Subscription属性信息的时间，从1970-01-01 00:00:00到现在的秒值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1449554962',
                        ),
                        'LoggingEnabled' => 
                        array (
                          'description' => '是否开启日志管理功能。

- True：启用。

- False：停用。',
                          'type' => 'boolean',
                          'example' => 'True',
                        ),
                        'TopicUrl' => 
                        array (
                          'type' => 'string',
                        ),
                        'TopicInnerUrl' => 
                        array (
                          'type' => 'string',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagKey' => 
                              array (
                                'type' => 'string',
                              ),
                              'TagValue' => 
                              array (
                                'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 50,\\n    \\"Total\\": 130,\\n    \\"PageData\\": [\\n      {\\n        \\"TopicName\\": \\"demo-topic\\",\\n        \\"MessageCount\\": 0,\\n        \\"MaxMessageSize\\": 65536,\\n        \\"MessageRetentionPeriod\\": 86400,\\n        \\"CreateTime\\": 1449554962,\\n        \\"LastModifyTime\\": 1449554962,\\n        \\"LoggingEnabled\\": true,\\n        \\"TopicUrl\\": \\"\\",\\n        \\"TopicInnerUrl\\": \\"\\",\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"\\",\\n            \\"TagValue\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '查询阿里云账号下的主题列表',
    ),
    'CreateQueue' => 
    array (
      'summary' => '调用CreateQueue接口创建一个新的队列。',
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
        'operationType' => 'create',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称。',
            'type' => 'string',
            'required' => true,
            'example' => '06273500-249F-5863-121D-74D51123****',
          ),
        ),
        1 => 
        array (
          'name' => 'MaximumMessageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送到该Queue的消息体的最大长度。
取值范围：1024~65536，单位为Byte。
默认值：65536。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '65536',
          ),
        ),
        2 => 
        array (
          'name' => 'MessageRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除。
取值范围：60~604800，单位为秒。
默认值：345600。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '345600',
          ),
        ),
        3 => 
        array (
          'name' => 'VisibilityTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。
取值范围：1~43200，单位为秒。
默认值：30。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        4 => 
        array (
          'name' => 'PollingWaitSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当Queue中没有消息时，针对该Queue的ReceiveMessage请求最长的等待时间。
取值范围：0~30，单位为秒。
默认值：0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        5 => 
        array (
          'name' => 'EnableLogging',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志管理功能。取值说明如下：

- True：启用。

- False：停用。

默认值：False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'DelaySeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费。
取值范围：0~604800，单位为秒。
默认值：0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        7 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123E62C',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123E62C\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '创建队列',
    ),
    'SetQueueAttributes' => 
    array (
      'summary' => '调用SetQueueAttributes接口修改队列属性。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Queue名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testqueue',
          ),
        ),
        1 => 
        array (
          'name' => 'DelaySeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费。
取值范围：0~604800，单位为秒。
默认值：0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        2 => 
        array (
          'name' => 'MaximumMessageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '发送到该Queue的消息体的最大长度。
取值范围：1024~65536，单位为Byte。
默认值：65536。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1024',
          ),
        ),
        3 => 
        array (
          'name' => 'MessageRetentionPeriod',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除。
取值范围：60~604800，单位为秒。
默认值：345600。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '120',
          ),
        ),
        4 => 
        array (
          'name' => 'VisibilityTimeout',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。
取值范围：1~43200，单位为秒。
默认值：30。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '60',
          ),
        ),
        5 => 
        array (
          'name' => 'PollingWaitSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '当Queue中没有消息时，针对该Queue的ReceiveMessage请求最长的等待时间。
取值范围：0~30，单位为秒。
默认值：0。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '0',
          ),
        ),
        6 => 
        array (
          'name' => 'EnableLogging',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '是否开启日志管理功能。取值说明如下：

- True：启用。

- False：停用。
默认值：False。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'True',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '修改队列属性',
    ),
    'GetQueueAttributes' => 
    array (
      'summary' => '调用GetQueueAttributes接口获取某个已创建队列的属性。',
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
          'name' => 'QueueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'demo-queue',
          ),
        ),
        1 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'QueueName' => 
                  array (
                    'description' => 'Queue的名称。',
                    'type' => 'string',
                    'example' => 'demo-queue',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => 'Queue的创建时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1250700999',
                  ),
                  'LastModifyTime' => 
                  array (
                    'description' => '修改Queue属性信息最近时间，从1970-01-01 00:00:00到现在的时间。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1250700999',
                  ),
                  'DelaySeconds' => 
                  array (
                    'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '30',
                  ),
                  'MaximumMessageSize' => 
                  array (
                    'description' => '发送到该Queue的消息体的最大长度，单位为Byte。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '65536',
                  ),
                  'MessageRetentionPeriod' => 
                  array (
                    'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '65536',
                  ),
                  'VisibilityTimeout' => 
                  array (
                    'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。
取值范围：1~43200，单位为秒。
默认值：30。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '60',
                  ),
                  'PollingWaitSeconds' => 
                  array (
                    'description' => '当Queue消息量为空时，针对该Queue的ReceiveMessage请求最长的等待时间，单位为秒。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'ActiveMessages' => 
                  array (
                    'description' => '在该Queue中处于Active状态的消息总数，为近似值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'InactiveMessages' => 
                  array (
                    'description' => '在该Queue中处于Inactive状态的消息总数，为近似值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'DelayMessages' => 
                  array (
                    'description' => '在该Queue中处于Delayed状态的消息总数，为近似值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '0',
                  ),
                  'LoggingEnabled' => 
                  array (
                    'description' => '是否开启日志管理功能。

- True：启用。

- False：停用。',
                    'type' => 'boolean',
                    'example' => 'True',
                  ),
                  'Tags' => 
                  array (
                    'type' => 'array',
                    'items' => 
                    array (
                      'type' => 'object',
                      'properties' => 
                      array (
                        'TagKey' => 
                        array (
                          'type' => 'string',
                        ),
                        'TagValue' => 
                        array (
                          'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"QueueName\\": \\"demo-queue\\",\\n    \\"CreateTime\\": 1250700999,\\n    \\"LastModifyTime\\": 1250700999,\\n    \\"DelaySeconds\\": 30,\\n    \\"MaximumMessageSize\\": 65536,\\n    \\"MessageRetentionPeriod\\": 65536,\\n    \\"VisibilityTimeout\\": 60,\\n    \\"PollingWaitSeconds\\": 0,\\n    \\"ActiveMessages\\": 20,\\n    \\"InactiveMessages\\": 0,\\n    \\"DelayMessages\\": 0,\\n    \\"LoggingEnabled\\": true,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取队列属性',
    ),
    'DeleteQueue' => 
    array (
      'summary' => '调用DeleteQueue接口删除已创建的队列。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '队列名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'tf-testAccMNSQueue-525478433321945943',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '删除队列',
    ),
    'ListQueue' => 
    array (
      'summary' => '调用ListQueue接口，列出指定阿里云账号下的所有队列，可分页获取数据。',
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
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，查询第几页的返回结果。
取值范围：1~100000000。
若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，每页最多显示的返回结果数量。
取值范围：10~50。
若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于50，则系统默认按照参数值为50处理。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        2 => 
        array (
          'name' => 'QueueName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Queue名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-queue',
          ),
        ),
        3 => 
        array (
          'name' => 'Tag',
          'in' => 'query',
          'style' => 'repeatList',
          'schema' => 
          array (
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
              'properties' => 
              array (
                'Key' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
                'Value' => 
                array (
                  'type' => 'string',
                  'required' => false,
                ),
              ),
              'required' => false,
            ),
            'required' => false,
            'maxItems' => 20,
            'minItems' => 1,
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '分页页码，查询第几页的返回结果。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小，每页最多显示的返回结果数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'Size' => 
                  array (
                    'description' => '当前页结果数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Pages' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'Total' => 
                  array (
                    'description' => '总结果数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '130',
                  ),
                  'PageData' => 
                  array (
                    'description' => '当前页返回结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据项。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'QueueName' => 
                        array (
                          'description' => '队列名称。',
                          'type' => 'string',
                          'example' => 'demo-queue',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Queue的创建事件，从1970-01-01 00:00:00到现在的时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1250700999',
                        ),
                        'LastModifyTime' => 
                        array (
                          'description' => '修改Queue属性信息最近时间，从1970-01-01 00:00:00到现在的时间。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1250700999',
                        ),
                        'DelaySeconds' => 
                        array (
                          'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '30',
                        ),
                        'MaximumMessageSize' => 
                        array (
                          'description' => '发送到该Queue的消息体的最大长度，单位为Byte。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '65536',
                        ),
                        'MessageRetentionPeriod' => 
                        array (
                          'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '65536',
                        ),
                        'VisibilityTimeout' => 
                        array (
                          'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。
取值范围：1~43200，单位为秒。
默认值：30。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '60',
                        ),
                        'PollingWaitSeconds' => 
                        array (
                          'description' => '当Queue消息量为空时，针对该Queue的ReceiveMessage请求最长的等待时间，单位为秒。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'ActiveMessages' => 
                        array (
                          'description' => '在该Queue中处于Active状态的消息总数，为近似值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '20',
                        ),
                        'InactiveMessages' => 
                        array (
                          'description' => '在该Queue中处于Inactive状态的消息总数，为近似值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'DelayMessages' => 
                        array (
                          'description' => '在该Queue中处于Delayed状态的消息总数，为近似值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '0',
                        ),
                        'LoggingEnabled' => 
                        array (
                          'description' => '是否开启日志管理功能。

- True：启用。

- False：停用。',
                          'type' => 'boolean',
                          'example' => 'True',
                        ),
                        'Tags' => 
                        array (
                          'type' => 'array',
                          'items' => 
                          array (
                            'type' => 'object',
                            'properties' => 
                            array (
                              'TagKey' => 
                              array (
                                'type' => 'string',
                              ),
                              'TagValue' => 
                              array (
                                'type' => 'string',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 50,\\n    \\"Size\\": 20,\\n    \\"Pages\\": 3,\\n    \\"Total\\": 130,\\n    \\"PageData\\": [\\n      {\\n        \\"QueueName\\": \\"demo-queue\\",\\n        \\"CreateTime\\": 1250700999,\\n        \\"LastModifyTime\\": 1250700999,\\n        \\"DelaySeconds\\": 30,\\n        \\"MaximumMessageSize\\": 65536,\\n        \\"MessageRetentionPeriod\\": 65536,\\n        \\"VisibilityTimeout\\": 60,\\n        \\"PollingWaitSeconds\\": 0,\\n        \\"ActiveMessages\\": 20,\\n        \\"InactiveMessages\\": 0,\\n        \\"DelayMessages\\": 0,\\n        \\"LoggingEnabled\\": true,\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"\\",\\n            \\"TagValue\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列出指定阿里云账号下的所有队列',
    ),
    'Subscribe' => 
    array (
      'summary' => '调用Subscribe接口，为主题创建Subscription。',
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
      'operationType' => 'write',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主题的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'topic****1',
          ),
        ),
        1 => 
        array (
          'name' => 'SubscriptionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '订阅名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'testSubscription	',
          ),
        ),
        2 => 
        array (
          'name' => 'PushType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '终端类型。

- http：HTTP推送类型。

- queue：队列推送类型。

- mpush：移动推送类型。

- alisms：阿里短信推送类型。

- email：邮箱推送类型。',
            'type' => 'string',
            'required' => true,
            'example' => 'queue',
          ),
        ),
        3 => 
        array (
          'name' => 'Endpoint',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '此次订阅中接收消息的终端地址，不同终端类型的格式如下：
- HTTP 格式为： `http(s)://{实际url地址}`
- 队列 格式为： `{QueueName}`
- 移动推送 格式为： `{AppKey}`
- 阿里短信 格式为： `{phoneNumber}`
- 邮箱 格式为： `{emailAddress}`',
            'type' => 'string',
            'required' => true,
            'example' => 'http://*****.com/uri1/xxx',
          ),
        ),
        4 => 
        array (
          'name' => 'NotifyStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：

- BACKOFF_RETRY：退避重试。

- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
            'type' => 'string',
            'required' => false,
            'example' => 'BACKOFF_RETRY',
          ),
        ),
        5 => 
        array (
          'name' => 'NotifyContentFormat',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于定义向Endpoint推送的消息格式。
取值说明如下：

- XML

- JSON

- SIMPLIFIED',
            'type' => 'string',
            'required' => false,
            'example' => 'XML',
          ),
        ),
        6 => 
        array (
          'name' => 'MessageTag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '该订阅中消息过滤的标签（标签一致的消息才会被推送）。
取值范围：不超过16个字符的字符串。

默认不进行消息过滤。',
            'type' => 'string',
            'required' => false,
            'example' => 'important',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'string',
                'example' => '{\'Code\': 200, \'Success\': True}',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": \\"{\'Code\': 200, \'Success\': True}\\"\\n}","type":"json"}]',
      'title' => '为主题创建Subscription',
    ),
    'SetSubscriptionAttributes' => 
    array (
      'summary' => '调用SetSubscriptionAttributes接口修改Subscription的属性。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Topic的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'SubscriptionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Subscription的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'MySubscription',
          ),
        ),
        2 => 
        array (
          'name' => 'NotifyStrategy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：

- BACKOFF_RETRY：退避重试。

- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
            'type' => 'string',
            'required' => false,
            'example' => 'BACKOFF_RETRY',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '修改Subscription的属性',
    ),
    'GetSubscriptionAttributes' => 
    array (
      'summary' => '调用GetSubscriptionAttributes接口获取Subscription的属性。',
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
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Subscription订阅的主题名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'MyTopic',
          ),
        ),
        1 => 
        array (
          'name' => 'SubscriptionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Subscription的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'MySubscription',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'SubscriptionName' => 
                  array (
                    'description' => 'Subscription的名称。',
                    'type' => 'string',
                    'example' => 'MySubscription',
                  ),
                  'TopicOwner' => 
                  array (
                    'description' => 'Subscription订阅的主题所有者的AccountId。',
                    'type' => 'string',
                    'example' => '123456789098****',
                  ),
                  'TopicName' => 
                  array (
                    'description' => 'Subscription订阅的主题名称。',
                    'type' => 'string',
                    'example' => 'MyTopic',
                  ),
                  'Endpoint' => 
                  array (
                    'description' => '订阅的终端地址。',
                    'type' => 'string',
                    'example' => 'http://example.com',
                  ),
                  'FilterTag' => 
                  array (
                    'description' => '描述了该订阅中消息过滤的标签（仅标签一致的消息才会被推送）。',
                    'type' => 'string',
                    'example' => 'important',
                  ),
                  'CreateTime' => 
                  array (
                    'description' => 'Subscription的创建时间，从1970-01-01 00:00:00到现在的。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1449554806',
                  ),
                  'LastModifyTime' => 
                  array (
                    'description' => '最近一次修改Subscription属性信息的时间，从1970-01-01 00:00:00到现在的秒值。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1449554962',
                  ),
                  'NotifyStrategy' => 
                  array (
                    'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：

- BACKOFF_RETRY：退避重试。

- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                    'type' => 'string',
                    'example' => 'BACKOFF_RETRY',
                  ),
                  'NotifyContentFormat' => 
                  array (
                    'description' => '向Endpoint推送的消息内容格式。
取值说明如下：

- XML

- JSON

- SIMPLIFIED',
                    'type' => 'string',
                    'example' => 'XML',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SubscriptionName\\": \\"MySubscription\\",\\n    \\"TopicOwner\\": \\"123456789098****\\",\\n    \\"TopicName\\": \\"MyTopic\\",\\n    \\"Endpoint\\": \\"http://example.com\\",\\n    \\"FilterTag\\": \\"important\\",\\n    \\"CreateTime\\": 1449554806,\\n    \\"LastModifyTime\\": 1449554962,\\n    \\"NotifyStrategy\\": \\"BACKOFF_RETRY\\",\\n    \\"NotifyContentFormat\\": \\"XML\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取Subscription的属性',
    ),
    'Unsubscribe' => 
    array (
      'summary' => '调用Unsubscribe接口取消一个已创建的Subscription。',
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
      'operationType' => 'read',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Topic的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'SubscriptionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Subscription的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'MySubscription',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'Code' => 
                  array (
                    'description' => '响应code。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '200',
                  ),
                  'Message' => 
                  array (
                    'description' => '响应信息。',
                    'type' => 'string',
                    'example' => '无',
                  ),
                  'Success' => 
                  array (
                    'description' => '请求是否成功。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
      'title' => '取消已创建的Subscription',
    ),
    'ListSubscriptionByTopic' => 
    array (
      'summary' => '调用ListSubscriptionByTopic接口列出某个主题下的Subscription列表，可分页获取数据。',
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
          'name' => 'TopicName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '主题的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test',
          ),
        ),
        1 => 
        array (
          'name' => 'PageNum',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页页码，查询第几页的返回结果。
取值范围：1~100000000。
若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页大小，每页最多显示的返回结果数量。
取值范围：10~50。
若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于50，则系统默认按照参数值为50处理。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '20',
          ),
        ),
        3 => 
        array (
          'name' => 'SubscriptionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Subscription的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo-subscription',
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
                'description' => '请求的ID。',
                'type' => 'string',
                'example' => '06273500-249F-5863-121D-74D51123****',
              ),
              'Code' => 
              array (
                'description' => '响应code。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '200',
              ),
              'Status' => 
              array (
                'description' => '响应的状态。',
                'type' => 'string',
                'example' => 'Success',
              ),
              'Message' => 
              array (
                'description' => '响应信息。',
                'type' => 'string',
                'example' => 'operation success',
              ),
              'Success' => 
              array (
                'description' => '请求是否成功。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Data' => 
              array (
                'description' => '响应数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'PageNum' => 
                  array (
                    'description' => '分页页码，查询此页的返回结果。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页大小，每页最多显示的返回结果数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '50',
                  ),
                  'Size' => 
                  array (
                    'description' => '当前页结果数量。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '20',
                  ),
                  'Pages' => 
                  array (
                    'description' => '总页数',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '3',
                  ),
                  'Total' => 
                  array (
                    'description' => '总结果数。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '130',
                  ),
                  'PageData' => 
                  array (
                    'description' => '当前页返回结果。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据项',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'SubscriptionName' => 
                        array (
                          'description' => 'Subscription的名称。',
                          'type' => 'string',
                          'example' => 'MySubscription',
                        ),
                        'TopicOwner' => 
                        array (
                          'description' => 'Subscription订阅的主题所有者的AccountId。',
                          'type' => 'string',
                          'example' => '123456789098****',
                        ),
                        'TopicName' => 
                        array (
                          'description' => 'Subscription订阅的主题名称。',
                          'type' => 'string',
                          'example' => 'MyTopic',
                        ),
                        'Endpoint' => 
                        array (
                          'description' => '订阅的终端地址。',
                          'type' => 'string',
                          'example' => 'http://example.com',
                        ),
                        'FilterTag' => 
                        array (
                          'description' => '描述了该订阅中消息过滤的标签（仅标签一致的消息才会被推送）。',
                          'type' => 'string',
                          'example' => 'important
',
                        ),
                        'CreateTime' => 
                        array (
                          'description' => 'Subscription的创建时间，从1970-01-01 00:00:00到现在的。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1449554806
',
                        ),
                        'LastModifyTime' => 
                        array (
                          'description' => '最近一次修改Subscription属性信息的时间，从1970-01-01 00:00:00到现在的秒值。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1449554806
',
                        ),
                        'NotifyStrategy' => 
                        array (
                          'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：

- BACKOFF_RETRY：退避重试。

- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                          'type' => 'string',
                          'example' => 'BACKOFF_RETRY',
                        ),
                        'NotifyContentFormat' => 
                        array (
                          'description' => '向Endpoint推送的消息内容格式。
取值说明如下：

- XML

- JSON

- SIMPLIFIED',
                          'type' => 'string',
                          'example' => 'XML',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 50,\\n    \\"Size\\": 20,\\n    \\"Pages\\": 3,\\n    \\"Total\\": 130,\\n    \\"PageData\\": [\\n      {\\n        \\"SubscriptionName\\": \\"MySubscription\\",\\n        \\"TopicOwner\\": \\"123456789098****\\",\\n        \\"TopicName\\": \\"MyTopic\\",\\n        \\"Endpoint\\": \\"http://example.com\\",\\n        \\"FilterTag\\": \\"important\\\\n\\",\\n        \\"CreateTime\\": 1449554806,\\n        \\"LastModifyTime\\": 1449554806,\\n        \\"NotifyStrategy\\": \\"BACKOFF_RETRY\\",\\n        \\"NotifyContentFormat\\": \\"XML\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '列出主题下的Subscription列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'mns-open.cn-qingdao.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'mns-open.cn-beijing.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-zhangjiakou',
      'endpoint' => 'mns-open.cn-zhangjiakou.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-huhehaote',
      'endpoint' => 'mns-open.cn-huhehaote.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'mns-open.cn-hangzhou.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'mns-open.cn-shanghai.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'mns-open.cn-shenzhen.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'cn-chengdu',
      'endpoint' => 'mns-open.cn-chengdu.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'mns-open.cn-hongkong.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-northeast-1',
      'endpoint' => 'mns-open.ap-northeast-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'mns-open.ap-southeast-1.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-2',
      'endpoint' => 'mns-open.ap-southeast-2.aliyuncs.com',
    ),
    12 => 
    array (
      'regionId' => 'ap-southeast-3',
      'endpoint' => 'mns-open.ap-southeast-3.aliyuncs.com',
    ),
    13 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'mns-open.ap-southeast-5.aliyuncs.com',
    ),
    14 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'mns-open.us-east-1.aliyuncs.com',
    ),
    15 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'mns-open.us-west-1.aliyuncs.com',
    ),
    16 => 
    array (
      'regionId' => 'eu-west-1',
      'endpoint' => 'mns-open.eu-west-1.aliyuncs.com',
    ),
    17 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'mns-open.eu-central-1.aliyuncs.com',
    ),
    18 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'mns-open.ap-south-1.aliyuncs.com',
    ),
    19 => 
    array (
      'regionId' => 'me-east-1',
      'endpoint' => 'mns-open.me-east-1.aliyuncs.com',
    ),
    20 => 
    array (
      'regionId' => 'cn-hangzhou-finance',
      'endpoint' => 'mns-open.cn-hangzhou-finance.aliyuncs.com',
    ),
    21 => 
    array (
      'regionId' => 'cn-shanghai-finance-1',
      'endpoint' => 'mns-open.cn-shanghai-finance-1.aliyuncs.com',
    ),
    22 => 
    array (
      'regionId' => 'cn-shenzhen-finance-1',
      'endpoint' => 'mns-open.cn-shenzhen-finance-1.aliyuncs.com',
    ),
  ),
);
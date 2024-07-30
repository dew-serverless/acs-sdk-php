<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Mns-open',
        'version' => '2022-01-19',
    ],
    'directories' => [
        [
            'id' => 180332,
            'title' => '主题管理',
            'type' => 'directory',
            'children' => [
                'CreateTopic',
                'SetTopicAttributes',
                'GetTopicAttributes',
                'DeleteTopic',
                'ListTopic',
            ],
        ],
        [
            'id' => 180338,
            'title' => '队列管理',
            'type' => 'directory',
            'children' => [
                'CreateQueue',
                'SetQueueAttributes',
                'GetQueueAttributes',
                'DeleteQueue',
                'ListQueue',
            ],
        ],
        [
            'id' => 180344,
            'title' => '订阅管理',
            'type' => 'directory',
            'children' => [
                'Subscribe',
                'SetSubscriptionAttributes',
                'GetSubscriptionAttributes',
                'Unsubscribe',
                'ListSubscriptionByTopic',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateTopic' => [
            'summary' => '调用CreateTopic接口创建主题。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需创建的topic的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'EnableLogging',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否开启日志管理功能。取值说明如下：'."\n"
                            ."\n"
                            .'- True：启用。'."\n"
                            ."\n"
                            .'- False：停用。'."\n"
                            .'默认值：False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'MaxMessageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '发送到该主题的消息体最大长度。'."\n"
                            .'取值范围：1024~ 65536，单位为Byte。'."\n"
                            .'默认值：65536。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10240',
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
                            'description' => '标签列表。'."\n",
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'description' => '标签的key',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'tag1',
                                ],
                                'Value' => [
                                    'description' => '标签值',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'joyce.wang',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123E62C',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123E62C\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '创建主题',
        ],
        'SetTopicAttributes' => [
            'summary' => '调用SetTopicAttributes接口来修改主题的属性。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Topic的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'EnableLogging',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启日志管理功能。取值说明如下：'."\n"
                            ."\n"
                            .'- True：启用。'."\n"
                            ."\n"
                            .'- False：停用。'."\n"
                            .'默认值：False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                    ],
                ],
                [
                    'name' => 'MaxMessageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送到该主题的消息体最大长度。'."\n"
                            .'取值范围：1024~ 65536，单位为Byte。'."\n"
                            .'默认值：65536。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '65536',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '修改主题的属性',
        ],
        'GetTopicAttributes' => [
            'summary' => '调用GetTopicAttributes接口获取主题的属性。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主题的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-topic',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'TopicName' => [
                                        'description' => '主题的名称。',
                                        'type' => 'string',
                                        'example' => 'demo-topic',
                                    ],
                                    'MessageCount' => [
                                        'description' => '当前该主题中消息数目。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'MaxMessageSize' => [
                                        'description' => '发送到该主题的消息体最大长度，单位为Byte。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '65536',
                                    ],
                                    'MessageRetentionPeriod' => [
                                        'description' => '消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '86400',
                                    ],
                                    'CreateTime' => [
                                        'description' => '主题的创建时间，从1970-01-01 00:00:00到现在的时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1449554277',
                                    ],
                                    'LastModifyTime' => [
                                        'description' => '修改主题属性信息的最近时间，从1970-01-01 00:00:00到现在的时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1449554460',
                                    ],
                                    'LoggingEnabled' => [
                                        'description' => '是否开启日志管理功能。'."\n"
                                            ."\n"
                                            .'- True：启用。'."\n"
                                            ."\n"
                                            .'- False：停用。',
                                        'type' => 'boolean',
                                        'example' => 'True',
                                    ],
                                    'Tags' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'type' => 'string',
                                                ],
                                                'TagValue' => [
                                                    'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"TopicName\\": \\"demo-topic\\",\\n    \\"MessageCount\\": 0,\\n    \\"MaxMessageSize\\": 65536,\\n    \\"MessageRetentionPeriod\\": 86400,\\n    \\"CreateTime\\": 1449554277,\\n    \\"LastModifyTime\\": 1449554460,\\n    \\"LoggingEnabled\\": true,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取主题的属性',
        ],
        'DeleteTopic' => [
            'summary' => '调用DeleteTopic接口删除主题。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要删除的topic名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tf-testAccMNSTopic-112965059402264645',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  }\\n}","type":"json"}]',
            'title' => '删除主题',
        ],
        'ListTopic' => [
            'summary' => '调用ListTopic接口查询阿里云账号下的主题列表，可分页获取数据。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，查询第几页的返回结果。'."\n"
                            .'取值范围：1~100000000。'."\n"
                            .'若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，每页最多显示的返回结果数量。'."\n"
                            .'取值范围：10~50。'."\n"
                            .'若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于50，则系统默认按照参数值为50处理。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主题的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNum' => [
                                        'description' => '分页页码，查询第几页的返回结果。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页大小，每页最多显示的返回结果数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'Total' => [
                                        'description' => '总结果数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '130',
                                    ],
                                    'PageData' => [
                                        'description' => '当前页返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据项',
                                            'type' => 'object',
                                            'properties' => [
                                                'TopicName' => [
                                                    'description' => '主题的名称。',
                                                    'type' => 'string',
                                                    'example' => 'demo-topic',
                                                ],
                                                'MessageCount' => [
                                                    'description' => '当前该主题中消息数目。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'MaxMessageSize' => [
                                                    'description' => '发送到该主题的消息体最大长度，单位为Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '65536',
                                                ],
                                                'MessageRetentionPeriod' => [
                                                    'description' => '消息在主题中最长存活时间，从发送到该主题开始经过此参数指定的时间后，不论消息是否被成功推送给用户都将被删除，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '86400',
                                                ],
                                                'CreateTime' => [
                                                    'description' => 'Subscription的创建时间，从1970-01-01 00:00:00到现在的。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1449554962',
                                                ],
                                                'LastModifyTime' => [
                                                    'description' => '最近一次修改Subscription属性信息的时间，从1970-01-01 00:00:00到现在的秒值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1449554962',
                                                ],
                                                'LoggingEnabled' => [
                                                    'description' => '是否开启日志管理功能。'."\n"
                                                        ."\n"
                                                        .'- True：启用。'."\n"
                                                        ."\n"
                                                        .'- False：停用。',
                                                    'type' => 'boolean',
                                                    'example' => 'True',
                                                ],
                                                'TopicUrl' => [
                                                    'type' => 'string',
                                                ],
                                                'TopicInnerUrl' => [
                                                    'type' => 'string',
                                                ],
                                                'Tags' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TagKey' => [
                                                                'type' => 'string',
                                                            ],
                                                            'TagValue' => [
                                                                'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 50,\\n    \\"Total\\": 130,\\n    \\"PageData\\": [\\n      {\\n        \\"TopicName\\": \\"demo-topic\\",\\n        \\"MessageCount\\": 0,\\n        \\"MaxMessageSize\\": 65536,\\n        \\"MessageRetentionPeriod\\": 86400,\\n        \\"CreateTime\\": 1449554962,\\n        \\"LastModifyTime\\": 1449554962,\\n        \\"LoggingEnabled\\": true,\\n        \\"TopicUrl\\": \\"\\",\\n        \\"TopicInnerUrl\\": \\"\\",\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"\\",\\n            \\"TagValue\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '查询阿里云账号下的主题列表',
        ],
        'CreateQueue' => [
            'summary' => '调用CreateQueue接口创建一个新的队列。',
            'methods' => [
                'get',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'QueueName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '队列名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '06273500-249F-5863-121D-74D51123****',
                    ],
                ],
                [
                    'name' => 'MaximumMessageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送到该Queue的消息体的最大长度。'."\n"
                            .'取值范围：1024~65536，单位为Byte。'."\n"
                            .'默认值：65536。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '65536',
                    ],
                ],
                [
                    'name' => 'MessageRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除。'."\n"
                            .'取值范围：60~604800，单位为秒。'."\n"
                            .'默认值：345600。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '345600',
                    ],
                ],
                [
                    'name' => 'VisibilityTimeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。'."\n"
                            .'取值范围：1~43200，单位为秒。'."\n"
                            .'默认值：30。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'PollingWaitSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当Queue中没有消息时，针对该Queue的ReceiveMessage请求最长的等待时间。'."\n"
                            .'取值范围：0~30，单位为秒。'."\n"
                            .'默认值：0。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EnableLogging',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启日志管理功能。取值说明如下：'."\n"
                            ."\n"
                            .'- True：启用。'."\n"
                            ."\n"
                            .'- False：停用。'."\n"
                            ."\n"
                            .'默认值：False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'DelaySeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费。'."\n"
                            .'取值范围：0~604800，单位为秒。'."\n"
                            .'默认值：0。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123E62C',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123E62C\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '创建队列',
        ],
        'SetQueueAttributes' => [
            'summary' => '调用SetQueueAttributes接口修改队列属性。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'QueueName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Queue名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testqueue',
                    ],
                ],
                [
                    'name' => 'DelaySeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费。'."\n"
                            .'取值范围：0~604800，单位为秒。'."\n"
                            .'默认值：0。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MaximumMessageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送到该Queue的消息体的最大长度。'."\n"
                            .'取值范围：1024~65536，单位为Byte。'."\n"
                            .'默认值：65536。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1024',
                    ],
                ],
                [
                    'name' => 'MessageRetentionPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除。'."\n"
                            .'取值范围：60~604800，单位为秒。'."\n"
                            .'默认值：345600。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '120',
                    ],
                ],
                [
                    'name' => 'VisibilityTimeout',
                    'in' => 'query',
                    'schema' => [
                        'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。'."\n"
                            .'取值范围：1~43200，单位为秒。'."\n"
                            .'默认值：30。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '60',
                    ],
                ],
                [
                    'name' => 'PollingWaitSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当Queue中没有消息时，针对该Queue的ReceiveMessage请求最长的等待时间。'."\n"
                            .'取值范围：0~30，单位为秒。'."\n"
                            .'默认值：0。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'EnableLogging',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否开启日志管理功能。取值说明如下：'."\n"
                            ."\n"
                            .'- True：启用。'."\n"
                            ."\n"
                            .'- False：停用。'."\n"
                            .'默认值：False。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'True',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '修改队列属性',
        ],
        'GetQueueAttributes' => [
            'summary' => '调用GetQueueAttributes接口获取某个已创建队列的属性。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'QueueName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '队列名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'demo-queue',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'QueueName' => [
                                        'description' => 'Queue的名称。',
                                        'type' => 'string',
                                        'example' => 'demo-queue',
                                    ],
                                    'CreateTime' => [
                                        'description' => 'Queue的创建时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1250700999',
                                    ],
                                    'LastModifyTime' => [
                                        'description' => '修改Queue属性信息最近时间，从1970-01-01 00:00:00到现在的时间。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1250700999',
                                    ],
                                    'DelaySeconds' => [
                                        'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费，单位为秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '30',
                                    ],
                                    'MaximumMessageSize' => [
                                        'description' => '发送到该Queue的消息体的最大长度，单位为Byte。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '65536',
                                    ],
                                    'MessageRetentionPeriod' => [
                                        'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除，单位为秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '65536',
                                    ],
                                    'VisibilityTimeout' => [
                                        'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。'."\n"
                                            .'取值范围：1~43200，单位为秒。'."\n"
                                            .'默认值：30。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '60',
                                    ],
                                    'PollingWaitSeconds' => [
                                        'description' => '当Queue消息量为空时，针对该Queue的ReceiveMessage请求最长的等待时间，单位为秒。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'ActiveMessages' => [
                                        'description' => '在该Queue中处于Active状态的消息总数，为近似值。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'InactiveMessages' => [
                                        'description' => '在该Queue中处于Inactive状态的消息总数，为近似值。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'DelayMessages' => [
                                        'description' => '在该Queue中处于Delayed状态的消息总数，为近似值。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '0',
                                    ],
                                    'LoggingEnabled' => [
                                        'description' => '是否开启日志管理功能。'."\n"
                                            ."\n"
                                            .'- True：启用。'."\n"
                                            ."\n"
                                            .'- False：停用。',
                                        'type' => 'boolean',
                                        'example' => 'True',
                                    ],
                                    'Tags' => [
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'TagKey' => [
                                                    'type' => 'string',
                                                ],
                                                'TagValue' => [
                                                    'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"QueueName\\": \\"demo-queue\\",\\n    \\"CreateTime\\": 1250700999,\\n    \\"LastModifyTime\\": 1250700999,\\n    \\"DelaySeconds\\": 30,\\n    \\"MaximumMessageSize\\": 65536,\\n    \\"MessageRetentionPeriod\\": 65536,\\n    \\"VisibilityTimeout\\": 60,\\n    \\"PollingWaitSeconds\\": 0,\\n    \\"ActiveMessages\\": 20,\\n    \\"InactiveMessages\\": 0,\\n    \\"DelayMessages\\": 0,\\n    \\"LoggingEnabled\\": true,\\n    \\"Tags\\": [\\n      {\\n        \\"TagKey\\": \\"\\",\\n        \\"TagValue\\": \\"\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取队列属性',
        ],
        'DeleteQueue' => [
            'summary' => '调用DeleteQueue接口删除已创建的队列。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'QueueName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '队列名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'tf-testAccMNSQueue-525478433321945943',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '删除队列',
        ],
        'ListQueue' => [
            'summary' => '调用ListQueue接口，列出指定阿里云账号下的所有队列，可分页获取数据。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，查询第几页的返回结果。'."\n"
                            .'取值范围：1~100000000。'."\n"
                            .'若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，每页最多显示的返回结果数量。'."\n"
                            .'取值范围：10~50。'."\n"
                            .'若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于50，则系统默认按照参数值为50处理。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'QueueName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Queue名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-queue',
                    ],
                ],
                [
                    'name' => 'Tag',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'Key' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                                'Value' => [
                                    'type' => 'string',
                                    'required' => false,
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                        'maxItems' => 20,
                        'minItems' => 1,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNum' => [
                                        'description' => '分页页码，查询第几页的返回结果。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页大小，每页最多显示的返回结果数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'Size' => [
                                        'description' => '当前页结果数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'Pages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3',
                                    ],
                                    'Total' => [
                                        'description' => '总结果数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '130',
                                    ],
                                    'PageData' => [
                                        'description' => '当前页返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据项。',
                                            'type' => 'object',
                                            'properties' => [
                                                'QueueName' => [
                                                    'description' => '队列名称。',
                                                    'type' => 'string',
                                                    'example' => 'demo-queue',
                                                ],
                                                'CreateTime' => [
                                                    'description' => 'Queue的创建事件，从1970-01-01 00:00:00到现在的时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1250700999',
                                                ],
                                                'LastModifyTime' => [
                                                    'description' => '修改Queue属性信息最近时间，从1970-01-01 00:00:00到现在的时间。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1250700999',
                                                ],
                                                'DelaySeconds' => [
                                                    'description' => '发送到该Queue的所有消息的延迟时间，发送到队列的消息经过此参数设定的延时时间后，才能被消费，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '30',
                                                ],
                                                'MaximumMessageSize' => [
                                                    'description' => '发送到该Queue的消息体的最大长度，单位为Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '65536',
                                                ],
                                                'MessageRetentionPeriod' => [
                                                    'description' => '消息在该Queue中最长的存活时间，从发送到该队列开始经过此参数指定的时间后，不论消息是否被取出过都将被删除，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '65536',
                                                ],
                                                'VisibilityTimeout' => [
                                                    'description' => '消息从该Queue中取出后从Active状态变成Inactive状态后的持续时间。'."\n"
                                                        .'取值范围：1~43200，单位为秒。'."\n"
                                                        .'默认值：30。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '60',
                                                ],
                                                'PollingWaitSeconds' => [
                                                    'description' => '当Queue消息量为空时，针对该Queue的ReceiveMessage请求最长的等待时间，单位为秒。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'ActiveMessages' => [
                                                    'description' => '在该Queue中处于Active状态的消息总数，为近似值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '20',
                                                ],
                                                'InactiveMessages' => [
                                                    'description' => '在该Queue中处于Inactive状态的消息总数，为近似值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'DelayMessages' => [
                                                    'description' => '在该Queue中处于Delayed状态的消息总数，为近似值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '0',
                                                ],
                                                'LoggingEnabled' => [
                                                    'description' => '是否开启日志管理功能。'."\n"
                                                        ."\n"
                                                        .'- True：启用。'."\n"
                                                        ."\n"
                                                        .'- False：停用。',
                                                    'type' => 'boolean',
                                                    'example' => 'True',
                                                ],
                                                'Tags' => [
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'TagKey' => [
                                                                'type' => 'string',
                                                            ],
                                                            'TagValue' => [
                                                                'type' => 'string',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 50,\\n    \\"Size\\": 20,\\n    \\"Pages\\": 3,\\n    \\"Total\\": 130,\\n    \\"PageData\\": [\\n      {\\n        \\"QueueName\\": \\"demo-queue\\",\\n        \\"CreateTime\\": 1250700999,\\n        \\"LastModifyTime\\": 1250700999,\\n        \\"DelaySeconds\\": 30,\\n        \\"MaximumMessageSize\\": 65536,\\n        \\"MessageRetentionPeriod\\": 65536,\\n        \\"VisibilityTimeout\\": 60,\\n        \\"PollingWaitSeconds\\": 0,\\n        \\"ActiveMessages\\": 20,\\n        \\"InactiveMessages\\": 0,\\n        \\"DelayMessages\\": 0,\\n        \\"LoggingEnabled\\": true,\\n        \\"Tags\\": [\\n          {\\n            \\"TagKey\\": \\"\\",\\n            \\"TagValue\\": \\"\\"\\n          }\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '列出指定阿里云账号下的所有队列',
        ],
        'Subscribe' => [
            'summary' => '调用Subscribe接口，为主题创建Subscription。',
            'methods' => [
                'get',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主题的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'topic****1',
                    ],
                ],
                [
                    'name' => 'SubscriptionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '订阅名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'testSubscription	',
                    ],
                ],
                [
                    'name' => 'PushType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '终端类型。'."\n"
                            ."\n"
                            .'- http：HTTP推送类型。'."\n"
                            ."\n"
                            .'- queue：队列推送类型。'."\n"
                            ."\n"
                            .'- mpush：移动推送类型。'."\n"
                            ."\n"
                            .'- alisms：阿里短信推送类型。'."\n"
                            ."\n"
                            .'- email：邮箱推送类型。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'queue',
                    ],
                ],
                [
                    'name' => 'Endpoint',
                    'in' => 'query',
                    'schema' => [
                        'description' => '此次订阅中接收消息的终端地址，不同终端类型的格式如下：'."\n"
                            .'- HTTP 格式为： `http(s)://{实际url地址}`'."\n"
                            .'- 队列 格式为： `{QueueName}`'."\n"
                            .'- 移动推送 格式为： `{AppKey}`'."\n"
                            .'- 阿里短信 格式为： `{phoneNumber}`'."\n"
                            .'- 邮箱 格式为： `{emailAddress}`',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'http://*****.com/uri1/xxx',
                    ],
                ],
                [
                    'name' => 'NotifyStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：'."\n"
                            ."\n"
                            .'- BACKOFF_RETRY：退避重试。'."\n"
                            ."\n"
                            .'- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BACKOFF_RETRY',
                    ],
                ],
                [
                    'name' => 'NotifyContentFormat',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于定义向Endpoint推送的消息格式。'."\n"
                            .'取值说明如下：'."\n"
                            ."\n"
                            .'- XML'."\n"
                            ."\n"
                            .'- JSON'."\n"
                            ."\n"
                            .'- SIMPLIFIED',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'XML',
                    ],
                ],
                [
                    'name' => 'MessageTag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '该订阅中消息过滤的标签（标签一致的消息才会被推送）。'."\n"
                            .'取值范围：不超过16个字符的字符串。'."\n"
                            ."\n"
                            .'默认不进行消息过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'important',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'string',
                                'example' => '{\'Code\': 200, \'Success\': True}',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": \\"{\'Code\': 200, \'Success\': True}\\"\\n}","type":"json"}]',
            'title' => '为主题创建Subscription',
        ],
        'SetSubscriptionAttributes' => [
            'summary' => '调用SetSubscriptionAttributes接口修改Subscription的属性。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Topic的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SubscriptionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Subscription的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MySubscription',
                    ],
                ],
                [
                    'name' => 'NotifyStrategy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：'."\n"
                            ."\n"
                            .'- BACKOFF_RETRY：退避重试。'."\n"
                            ."\n"
                            .'- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'BACKOFF_RETRY',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '修改Subscription的属性',
        ],
        'GetSubscriptionAttributes' => [
            'summary' => '调用GetSubscriptionAttributes接口获取Subscription的属性。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Subscription订阅的主题名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MyTopic',
                    ],
                ],
                [
                    'name' => 'SubscriptionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Subscription的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MySubscription',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'SubscriptionName' => [
                                        'description' => 'Subscription的名称。',
                                        'type' => 'string',
                                        'example' => 'MySubscription',
                                    ],
                                    'TopicOwner' => [
                                        'description' => 'Subscription订阅的主题所有者的AccountId。',
                                        'type' => 'string',
                                        'example' => '123456789098****',
                                    ],
                                    'TopicName' => [
                                        'description' => 'Subscription订阅的主题名称。',
                                        'type' => 'string',
                                        'example' => 'MyTopic',
                                    ],
                                    'Endpoint' => [
                                        'description' => '订阅的终端地址。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                    'FilterTag' => [
                                        'description' => '描述了该订阅中消息过滤的标签（仅标签一致的消息才会被推送）。',
                                        'type' => 'string',
                                        'example' => 'important',
                                    ],
                                    'CreateTime' => [
                                        'description' => 'Subscription的创建时间，从1970-01-01 00:00:00到现在的。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1449554806',
                                    ],
                                    'LastModifyTime' => [
                                        'description' => '最近一次修改Subscription属性信息的时间，从1970-01-01 00:00:00到现在的秒值。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1449554962',
                                    ],
                                    'NotifyStrategy' => [
                                        'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：'."\n"
                                            ."\n"
                                            .'- BACKOFF_RETRY：退避重试。'."\n"
                                            ."\n"
                                            .'- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                                        'type' => 'string',
                                        'example' => 'BACKOFF_RETRY',
                                    ],
                                    'NotifyContentFormat' => [
                                        'description' => '向Endpoint推送的消息内容格式。'."\n"
                                            .'取值说明如下：'."\n"
                                            ."\n"
                                            .'- XML'."\n"
                                            ."\n"
                                            .'- JSON'."\n"
                                            ."\n"
                                            .'- SIMPLIFIED',
                                        'type' => 'string',
                                        'example' => 'XML',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"SubscriptionName\\": \\"MySubscription\\",\\n    \\"TopicOwner\\": \\"123456789098****\\",\\n    \\"TopicName\\": \\"MyTopic\\",\\n    \\"Endpoint\\": \\"http://example.com\\",\\n    \\"FilterTag\\": \\"important\\",\\n    \\"CreateTime\\": 1449554806,\\n    \\"LastModifyTime\\": 1449554962,\\n    \\"NotifyStrategy\\": \\"BACKOFF_RETRY\\",\\n    \\"NotifyContentFormat\\": \\"XML\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取Subscription的属性',
        ],
        'Unsubscribe' => [
            'summary' => '调用Unsubscribe接口取消一个已创建的Subscription。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Topic的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'SubscriptionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Subscription的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'MySubscription',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Code' => [
                                        'description' => '响应code。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '响应信息。',
                                        'type' => 'string',
                                        'example' => '无',
                                    ],
                                    'Success' => [
                                        'description' => '请求是否成功。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"Code\\": 200,\\n    \\"Message\\": \\"无\\",\\n    \\"Success\\": true\\n  }\\n}","type":"json"}]',
            'title' => '取消已创建的Subscription',
        ],
        'ListSubscriptionByTopic' => [
            'summary' => '调用ListSubscriptionByTopic接口列出某个主题下的Subscription列表，可分页获取数据。',
            'methods' => [
                'get',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'TopicName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '主题的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'PageNum',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页页码，查询第几页的返回结果。'."\n"
                            .'取值范围：1~100000000。'."\n"
                            .'若您设置的参数值小于1，则系统默认按照参数值为1处理；若您设置的参数值大于100000000，则系统默认按照参数值为100000000处理。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页大小，每页最多显示的返回结果数量。'."\n"
                            .'取值范围：10~50。'."\n"
                            .'若您设置的参数值小于10，则系统默认按照参数值为10处理；若您设置的参数值大于50，则系统默认按照参数值为50处理。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'SubscriptionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Subscription的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo-subscription',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求的ID。',
                                'type' => 'string',
                                'example' => '06273500-249F-5863-121D-74D51123****',
                            ],
                            'Code' => [
                                'description' => '响应code。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '200',
                            ],
                            'Status' => [
                                'description' => '响应的状态。',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'Message' => [
                                'description' => '响应信息。',
                                'type' => 'string',
                                'example' => 'operation success',
                            ],
                            'Success' => [
                                'description' => '请求是否成功。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Data' => [
                                'description' => '响应数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNum' => [
                                        'description' => '分页页码，查询此页的返回结果。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页大小，每页最多显示的返回结果数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '50',
                                    ],
                                    'Size' => [
                                        'description' => '当前页结果数量。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '20',
                                    ],
                                    'Pages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '3',
                                    ],
                                    'Total' => [
                                        'description' => '总结果数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '130',
                                    ],
                                    'PageData' => [
                                        'description' => '当前页返回结果。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据项',
                                            'type' => 'object',
                                            'properties' => [
                                                'SubscriptionName' => [
                                                    'description' => 'Subscription的名称。',
                                                    'type' => 'string',
                                                    'example' => 'MySubscription',
                                                ],
                                                'TopicOwner' => [
                                                    'description' => 'Subscription订阅的主题所有者的AccountId。',
                                                    'type' => 'string',
                                                    'example' => '123456789098****',
                                                ],
                                                'TopicName' => [
                                                    'description' => 'Subscription订阅的主题名称。',
                                                    'type' => 'string',
                                                    'example' => 'MyTopic',
                                                ],
                                                'Endpoint' => [
                                                    'description' => '订阅的终端地址。',
                                                    'type' => 'string',
                                                    'example' => 'http://example.com',
                                                ],
                                                'FilterTag' => [
                                                    'description' => '描述了该订阅中消息过滤的标签（仅标签一致的消息才会被推送）。',
                                                    'type' => 'string',
                                                    'example' => 'important'."\n",
                                                ],
                                                'CreateTime' => [
                                                    'description' => 'Subscription的创建时间，从1970-01-01 00:00:00到现在的。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1449554806'."\n",
                                                ],
                                                'LastModifyTime' => [
                                                    'description' => '最近一次修改Subscription属性信息的时间，从1970-01-01 00:00:00到现在的秒值。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1449554806'."\n",
                                                ],
                                                'NotifyStrategy' => [
                                                    'description' => '向Endpoint推送消息错误时的重试策略。取值说明如下：'."\n"
                                                        ."\n"
                                                        .'- BACKOFF_RETRY：退避重试。'."\n"
                                                        ."\n"
                                                        .'- EXPONENTIAL_DECAY_RETRY：指数衰减重试。',
                                                    'type' => 'string',
                                                    'example' => 'BACKOFF_RETRY',
                                                ],
                                                'NotifyContentFormat' => [
                                                    'description' => '向Endpoint推送的消息内容格式。'."\n"
                                                        .'取值说明如下：'."\n"
                                                        ."\n"
                                                        .'- XML'."\n"
                                                        ."\n"
                                                        .'- JSON'."\n"
                                                        ."\n"
                                                        .'- SIMPLIFIED',
                                                    'type' => 'string',
                                                    'example' => 'XML',
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
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"06273500-249F-5863-121D-74D51123****\\",\\n  \\"Code\\": 200,\\n  \\"Status\\": \\"Success\\",\\n  \\"Message\\": \\"operation success\\",\\n  \\"Success\\": true,\\n  \\"Data\\": {\\n    \\"PageNum\\": 1,\\n    \\"PageSize\\": 50,\\n    \\"Size\\": 20,\\n    \\"Pages\\": 3,\\n    \\"Total\\": 130,\\n    \\"PageData\\": [\\n      {\\n        \\"SubscriptionName\\": \\"MySubscription\\",\\n        \\"TopicOwner\\": \\"123456789098****\\",\\n        \\"TopicName\\": \\"MyTopic\\",\\n        \\"Endpoint\\": \\"http://example.com\\",\\n        \\"FilterTag\\": \\"important\\\\n\\",\\n        \\"CreateTime\\": 1449554806,\\n        \\"LastModifyTime\\": 1449554806,\\n        \\"NotifyStrategy\\": \\"BACKOFF_RETRY\\",\\n        \\"NotifyContentFormat\\": \\"XML\\"\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '列出主题下的Subscription列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'mns-open.cn-qingdao.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'mns-open.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'mns-open.cn-zhangjiakou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'mns-open.cn-huhehaote.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'mns-open.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'mns-open.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'mns-open.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'mns-open.cn-chengdu.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'mns-open.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'mns-open.ap-northeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'mns-open.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'mns-open.ap-southeast-2.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'mns-open.ap-southeast-3.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'mns-open.ap-southeast-5.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'mns-open.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'mns-open.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'mns-open.eu-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'mns-open.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'mns-open.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'mns-open.me-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'mns-open.cn-hangzhou-finance.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'mns-open.cn-shanghai-finance-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'mns-open.cn-shenzhen-finance-1.aliyuncs.com',
        ],
    ],
];
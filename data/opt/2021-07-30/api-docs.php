<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'opt',
        'version' => '2021-07-30',
    ],
    'directories' => [
        [
            'id' => 74350,
            'title' => '服务',
            'type' => 'directory',
            'children' => [
                'GetOpenStatus',
            ],
        ],
        [
            'id' => 74352,
            'title' => 'License',
            'type' => 'directory',
            'children' => [
                'GetOrderInfo',
                'GetOrderUsage',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetOpenStatus' => [
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
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '结果状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '结果消息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '详细数据，mpStatus：数学规划服务开通状态，1开通，0未开通；pk：云账号id；parentPk：父账号id。',
                                'type' => 'object',
                                'example' => '{"gmtModified":"2021-07-27T04:00:00.000+00:00","mpStatus":1,"id":11,"pk":"1084126944995576","gmtCreate":"2021-07-27T04:00:00.000+00:00","parentPk":"1084126944995576"}',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一标识',
                                'type' => 'string',
                                'example' => '0EB-FCAC-1B78-BBB8-500ED951E9EB',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'LicenseKeyInvaild',
                        'errorMessage' => 'The license key format is invalid, or the license key does not belong to the user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The user has not passed RAM verification and is not authorized to perform the operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrencyOverLimit',
                        'errorMessage' => 'The concurrency exceeds the upper limit allowed by the license key.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'LicenseKeyExpired',
                        'errorMessage' => 'LicenseKey has expired.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": {\\n    \\"gmtModified\\": \\"2021-07-27T04:00:00.000+00:00\\",\\n    \\"mpStatus\\": 1,\\n    \\"id\\": 11,\\n    \\"pk\\": \\"1084126944995576\\",\\n    \\"gmtCreate\\": \\"2021-07-27T04:00:00.000+00:00\\",\\n    \\"parentPk\\": \\"1084126944995576\\"\\n  },\\n  \\"RequestId\\": \\"0EB-FCAC-1B78-BBB8-500ED951E9EB\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOpenStatusResponse>\\n    <Message>Success</Message>\\n    <RequestId>D66E40EB-FCAC-1B78-BBB8-500ED951E9EB</RequestId>\\n    <Data>\\n        <gmtModified>2021-07-27T04:00:00.000+00:00</gmtModified>\\n        <mpStatus>1</mpStatus>\\n        <id>11</id>\\n        <pk>1084126944995576</pk>\\n        <gmtCreate>2021-07-27T04:00:00.000+00:00</gmtCreate>\\n        <parentPk>1084126944995576</parentPk>\\n    </Data>\\n    <Code>0</Code>\\n    <Success>true</Success>\\n</GetOpenStatusResponse>","errorExample":""}]',
            'title' => '获取所有服务的开通状态',
            'summary' => '获取优化求解器内所有服务的开通状态，目前包含数学规划服务。',
        ],
        'GetOrderInfo' => [
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
                    'name' => 'RelService',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买的优化求解器License类别信息，包含一种类别：'."\n"
                            ."\n"
                            .'- `MP`：数学规划',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MP',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买的求解器版本信息，目前仅支持一种：'."\n"
                            ."\n"
                            .'- `1`：本地运行版',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1',
                        'minimum' => '1',
                        'example' => '1',
                        'enum' => [
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'ListReleased',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否包含已释放的实例',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '返回结果码',
                                'type' => 'string',
                                'example' => '0',
                            ],
                            'Message' => [
                                'description' => '返回结果信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回业务数据，licenseKey：授权证书key；currentConcurrency：并发度；instanceId：实例id；totalDays：总购买天数；currentDays：当前剩余天数。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'currentConcurrency' => [
                                            'description' => '并发度',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'totalDays' => [
                                            'description' => '总购买天数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'currentDays' => [
                                            'description' => '当前剩余天数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'licenseKey' => [
                                            'description' => '授权证书key',
                                            'type' => 'string',
                                            'example' => 'xxxxxxxx',
                                        ],
                                        'instanceId' => [
                                            'description' => '实例id',
                                            'type' => 'string',
                                            'example' => 'opt_mplicense_public_cn-xxxxxx',
                                        ],
                                        'bizType' => [
                                            'description' => '商品类型',
                                            'type' => 'string',
                                            'example' => '0',
                                        ],
                                        'remark' => [
                                            'description' => '实例备注',
                                            'type' => 'string',
                                            'example' => 'remark',
                                        ],
                                    ],
                                ],
                                'example' => '{"licenseKey":"eems7ri3b1u5nui*****","currentConcurrency":2,"instanceId":"opt_mplicense_public_cn-****","totalDays":124,"currentDays":103}',
                            ],
                            'RequestId' => [
                                'description' => '请求唯一标识',
                                'type' => 'string',
                                'example' => '5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'LicenseKeyInvaild',
                        'errorMessage' => 'The license key format is invalid, or the license key does not belong to the user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The user has not passed RAM verification and is not authorized to perform the operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrencyOverLimit',
                        'errorMessage' => 'The concurrency exceeds the upper limit allowed by the license key.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'LicenseKeyExpired',
                        'errorMessage' => 'LicenseKey has expired.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"0\\",\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": [\\n    {\\n      \\"currentConcurrency\\": 1,\\n      \\"totalDays\\": 10,\\n      \\"currentDays\\": 1,\\n      \\"licenseKey\\": \\"xxxxxxxx\\",\\n      \\"instanceId\\": \\"opt_mplicense_public_cn-xxxxxx\\",\\n      \\"bizType\\": \\"0\\",\\n      \\"remark\\": \\"remark\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOrderInfoResponse>\\n    <Message>Success</Message>\\n    <RequestId>3FCE6765-742C-1CE7-A44B-83D35C07F286</RequestId>\\n    <Data>\\n        <licenseKey>eems7ri3b1u5nuil***</licenseKey>\\n        <currentConcurrency>2</currentConcurrency>\\n        <instanceId>opt_mplicense_public_cn-****</instanceId>\\n        <totalDays>124</totalDays>\\n        <currentDays>103</currentDays>\\n    </Data>\\n    <Code>0</Code>\\n    <Success>true</Success>\\n</GetOrderInfoResponse>","errorExample":""}]',
            'title' => '查询购买License的信息',
            'summary' => '获取购买License的信息。',
        ],
        'GetOrderUsage' => [
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
                    'name' => 'RelService',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买的优化求解器License类别信息，包含一种类别：'."\n"
                            ."\n"
                            .'- `MP`：数学规划',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'MP',
                    ],
                ],
                [
                    'name' => 'ResourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定购买的求解器版本信息，目前仅支持一种：'."\n"
                            ."\n"
                            .'- `1`：本地运行版',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1',
                        'minimum' => '1',
                        'example' => '1',
                        'enum' => [
                            '1',
                        ],
                    ],
                ],
                [
                    'name' => 'LicenseKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '求解器LicenseKey',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'eya5169y2bg96zef03s7',
                    ],
                ],
                [
                    'name' => 'TimeRange',
                    'in' => 'query',
                    'schema' => [
                        'description' => '* `1`：前后一天'."\n"
                            .'* `2`：前后一周'."\n"
                            .'* `3`：前后一月',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回结果信息',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'Data' => [
                                'description' => '返回使用量数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据项，其中具体字段含义如下：'."\n"
                                        ."\n"
                                        .'- `dateTime`：对应时间'."\n"
                                        .'- `actualConcurrency`: 实际并发'."\n"
                                        .'- `maxConcurrency`: 最大并发',
                                    'type' => 'object',
                                    'example' => '[{"dateTime":"2021-08-17 15:00:00","actualConcurrency":0,"maxConcurrency":2},{"dateTime":"2021-08-17 16:00:00","actualConcurrency":0,"maxConcurrency":2},{"dateTime":"2021-08-17 17:00:00","actualConcurrency":0,"maxConcurrency":2}]',
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求唯一标识',
                                'type' => 'string',
                                'example' => '5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31',
                            ],
                            'Success' => [
                                'description' => '请求是否成功',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidParameter',
                        'errorMessage' => 'The parameter is invalid. Please check again.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'LicenseKeyInvaild',
                        'errorMessage' => 'The license key format is invalid, or the license key does not belong to the user.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The user has not passed RAM verification and is not authorized to perform the operation.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrencyOverLimit',
                        'errorMessage' => 'The concurrency exceeds the upper limit allowed by the license key.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'LicenseKeyExpired',
                        'errorMessage' => 'LicenseKey has expired.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalError',
                        'errorMessage' => 'The request processing has failed due to some unknown error.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"Data\\": [\\n    [\\n      {\\n        \\"dateTime\\": \\"2021-08-17 15:00:00\\",\\n        \\"actualConcurrency\\": 0,\\n        \\"maxConcurrency\\": 2\\n      },\\n      {\\n        \\"dateTime\\": \\"2021-08-17 16:00:00\\",\\n        \\"actualConcurrency\\": 0,\\n        \\"maxConcurrency\\": 2\\n      },\\n      {\\n        \\"dateTime\\": \\"2021-08-17 17:00:00\\",\\n        \\"actualConcurrency\\": 0,\\n        \\"maxConcurrency\\": 2\\n      }\\n    ]\\n  ],\\n  \\"RequestId\\": \\"5D6653C5-CA2B-14EC-9CF0-50AA0FF49C31\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOrderUsageResponse>\\n    <Message>Success</Message>\\n    <RequestId>B26B09CF-8F7F-1E6D-8E21-CD37A1BB32DB</RequestId>\\n    <Data>\\n        <dateTime>2021-08-17 15:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 16:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 17:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 18:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 19:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 20:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 21:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 22:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-17 23:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 00:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 01:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 02:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 03:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 04:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 05:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 06:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 07:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 08:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 09:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 10:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 11:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 12:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 13:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 14:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 15:00:00</dateTime>\\n        <actualConcurrency>0</actualConcurrency>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 16:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 17:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 18:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 19:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 20:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 21:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 22:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-18 23:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 00:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 01:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 02:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 03:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 04:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 05:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 06:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 07:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 08:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 09:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 10:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 11:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 12:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 13:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 14:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Data>\\n        <dateTime>2021-08-19 15:00:00</dateTime>\\n        <maxConcurrency>2</maxConcurrency>\\n    </Data>\\n    <Success>true</Success>\\n</GetOrderUsageResponse>","errorExample":""}]',
            'title' => '查询License使用情况',
            'summary' => '获取License使用量。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'opt.cn-beijing.aliyuncs.com',
        ],
    ],
];
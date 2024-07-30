<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'Dypnsapi-intl',
        'version' => '2017-07-25',
    ],
    'directories' => [
        'StartVerification',
        'SearchVerification',
        'CheckVerification',
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'StartVerification' => [
            'summary' => '通过指定的通道向最终用户发送验证码，支持的通道有短信、语音、和whatsapp。',
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
                'abilityTreeCode' => '171584',
                'abilityTreeNodes' => [
                    'FEATUREdypnsL4YHVT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Channel',
                    'in' => 'query',
                    'schema' => [
                        'description' => '认证通道，包括短信（SMS)、语音（VOCIE）、whatsApp(WHATSAPP)。',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [],
                        'example' => 'SMS',
                    ],
                ],
                [
                    'name' => 'To',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信号码。号码格式为：国际区号+号码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '6212345****01',
                    ],
                ],
                [
                    'name' => 'ServiceSid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '控制台配置的ServiceID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'FA00000000000001',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62',
                            ],
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Model' => [
                                'description' => '请求结果数据，如果请求成功则返回。',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "verifyCode": "",'."\n"
                                    .'    "verificationId": "",'."\n"
                                    .'    "status": ""'."\n"
                                    .'  }',
                            ],
                            'Code' => [
                                'description' => '返回code。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    .' '."\n"
                                    .'- **false**：调用失败。',
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
                        'errorCode' => 'Invalid.Parameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"verifyCode\\": \\"\\",\\n    \\"verificationId\\": \\"\\",\\n    \\"status\\": \\"\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '发送验证码',
        ],
        'SearchVerification' => [
            'summary' => '查询验证结果详情。',
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
                'abilityTreeCode' => '171585',
                'abilityTreeNodes' => [
                    'FEATUREdypnsL4YHVT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceSid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '控制台配置的ServiceID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FA00000000000001',
                    ],
                ],
                [
                    'name' => 'To',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信号码。号码格式为：国际区号+号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6212345****01',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'VerificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送验证码接口返回的唯一认证ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'rJXlaR2q5LpKfREtpRPMBfDVQvELZwmBbK5yVR7gr3nLbNAcolLGPYCJaVHt/i+I',
                    ],
                ],
                [
                    'name' => 'SendDate',
                    'in' => 'query',
                    'schema' => [
                        'description' => '短信发送日期，格式为毫秒时间戳。支持查询最近30天的记录。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1677600000000,',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页的大小。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'CurrentPage',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页数。取值从1开始。',
                        'type' => 'integer',
                        'format' => 'int64',
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
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62'."\n",
                            ],
                            'Message' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Model' => [
                                'description' => '请求结果数据。',
                                'type' => 'object',
                                'example' => '{'."\n"
                                    .'    "records": ['."\n"
                                    .'      {'."\n"
                                    .'        "sendDate":,'."\n"
                                    .'        "channel": "",'."\n"
                                    .'        "serviceSid": "",'."\n"
                                    .'        "to": "",'."\n"
                                    .'        "updatedDate":,'."\n"
                                    .'        "verificationId": "",'."\n"
                                    .'        "status": ""'."\n"
                                    .'      }'."\n"
                                    .'    ],'."\n"
                                    .'    "pageNo": ,'."\n"
                                    .'    "totalPage": 1,'."\n"
                                    .'    "pageSize": 20,'."\n"
                                    .'    "totalCount": 1,'."\n"
                                    .'  }',
                            ],
                            'Code' => [
                                'description' => '返回code。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .' - **false**：调用失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62\\\\n\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '查询验证结果',
        ],
        'CheckVerification' => [
            'summary' => '调用CheckVerification接口完成验证码校验。',
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
                'abilityTreeCode' => '171586',
                'abilityTreeNodes' => [
                    'FEATUREdypnsL4YHVT',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ServiceSid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '控制台配置的ServiceID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FA00000000000001',
                    ],
                ],
                [
                    'name' => 'To',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收短信号码。号码格式为：国际区号+号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6212345****01',
                    ],
                ],
                [
                    'name' => 'Code',
                    'in' => 'query',
                    'schema' => [
                        'description' => '验证码。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1234',
                    ],
                ],
                [
                    'name' => 'VerificationId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '发送验证码接口返回的唯一认证ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'rJXlaR2q5LpKfREtpRPMBfDVQvELZwmBbK5yVR7gr3nLbNAcolLGPYCJaVHt/i+I',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62',
                            ],
                            'Message' => [
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Model' => [
                                'description' => '请求结果数据,请求正确返回。',
                                'type' => 'object',
                                'example' => ' {'."\n"
                                    .'    "phoneNumber": "",'."\n"
                                    .'    "channel": "",'."\n"
                                    .'    "verificationId": "",'."\n"
                                    .'    "status": "approved"'."\n"
                                    .'  }',
                            ],
                            'Code' => [
                                'description' => '接口返回状态码。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Success' => [
                                'description' => '是否调用成功。'."\n"
                                    ."\n"
                                    .'- **true**：调用成功。'."\n"
                                    ."\n"
                                    .'- **false**：调用失败。',
                                'type' => 'string',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'Invalid.Parameters',
                        'errorMessage' => 'The parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"HF14955E-EEB5-3CE4-AE50-00F7FC8C1D62\\",\\n  \\"Message\\": \\"OK\\",\\n  \\"Model\\": {\\n    \\"phoneNumber\\": \\"\\",\\n    \\"channel\\": \\"\\",\\n    \\"verificationId\\": \\"\\",\\n    \\"status\\": \\"approved\\"\\n  },\\n  \\"Code\\": \\"OK\\",\\n  \\"Success\\": \\"true\\"\\n}","type":"json"}]',
            'title' => '校验验证码',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'dypnsapi-intl.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
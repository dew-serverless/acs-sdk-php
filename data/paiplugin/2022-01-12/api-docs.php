<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PaiPlugin',
        'version' => '2022-01-12',
    ],
    'directories' => [
        [
            'id' => 157210,
            'title' => '基本信息',
            'type' => 'directory',
            'children' => [
                'GetUser',
                'GetMessageConfig',
            ],
        ],
        [
            'id' => 157213,
            'title' => '短信签名',
            'type' => 'directory',
            'children' => [
                'CreateSignature',
                'DeleteSignature',
                'ListSignatures',
                'GetSignature',
            ],
        ],
        [
            'id' => 157218,
            'title' => '短信模板',
            'type' => 'directory',
            'children' => [
                'CreateTemplate',
                'DeleteTemplate',
                'ListTemplates',
                'GetTemplate',
            ],
        ],
        [
            'id' => 157223,
            'title' => '发送短信',
            'type' => 'directory',
            'children' => [
                'SendMessage',
                'ListMessages',
                'ListMessageMetrics',
            ],
        ],
        [
            'id' => 157227,
            'title' => '短信回执',
            'type' => 'directory',
            'children' => [
                'SmsReport',
                'SmsUp',
                'UpdateReportUrl',
                'UpdateUploadUrl',
            ],
        ],
        [
            'id' => 167354,
            'title' => '运营活动',
            'type' => 'directory',
            'children' => [
                'CreateCampaign',
                'DeleteCampaign',
                'ListCampaigns',
                'GetCampaign',
                'UpdateCampaign',
            ],
        ],
        [
            'id' => 167360,
            'title' => '算法任务',
            'type' => 'directory',
            'children' => [
                'ListAlgorithms',
                'GetAlgorithm',
                'CreateTrainingJob',
                'DeleteTrainingJob',
                'ListTrainingJobs',
                'GetTrainingJob',
                'CreateInferenceJob',
                'DeleteInferenceJob',
                'ListInferenceJobs',
                'GetInferenceJob',
            ],
        ],
        [
            'id' => 167371,
            'title' => '人群管理',
            'type' => 'directory',
            'children' => [
                'CreateGroup',
                'DeleteGroup',
                'ListGroups',
                'GetGroup',
            ],
        ],
        [
            'id' => 167376,
            'title' => '发送计划',
            'type' => 'directory',
            'children' => [
                'CreateSchedule',
                'DeleteSchedule',
                'ListSchedules',
                'GetSchedule',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'GetUser' => [
            'summary' => '获取用户产品状态等基本信息。',
            'path' => '/api/v2/users',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '128719',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取账号状态。',
                        'description' => '成功获取基本信息。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'AccountStatus' => [
                                        'title' => '账号状态。'."\n"
                                            .'- 0 : 正常使用。'."\n"
                                            .'- 1 : 因欠费等原因暂时停用。'."\n"
                                            .'- 2 : 已释放产品。',
                                        'description' => '账号状态。'."\n"
                                            .'- 0 : 正常使用。'."\n"
                                            .'- 1 : 因欠费等原因暂时停用。'."\n"
                                            .'- 2 : 已释放产品。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"AccountStatus\\": 0\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取基本信息',
        ],
        'GetMessageConfig' => [
            'summary' => '获取用户短信配置，如回执接口，上行短信接口等。',
            'path' => '/api/v2/users/messageConfig',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129012',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取短信配置。',
                        'description' => '成功获取短信配置。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'SmsReportUrl' => [
                                        'title' => '短信发送状态回执接收服务地址。',
                                        'description' => '短信发送状态回执接收服务地址。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                    'SmsUpUrl' => [
                                        'title' => '上行短信消息接收服务地址。',
                                        'description' => '上行短信消息接收服务地址。',
                                        'type' => 'string',
                                        'example' => 'http://example.com',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SmsReportUrl\\": \\"http://example.com\\",\\n    \\"SmsUpUrl\\": \\"http://example.com\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取短信配置',
        ],
        'CreateSignature' => [
            'summary' => '发起注册签名请求，可通过控制台或GetSignature查看签名审核状态。',
            'path' => '/api/v2/signatures',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '123190',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Description' => [
                                'title' => '申请说明。',
                                'description' => '申请说明。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '申请说明',
                            ],
                            'Name' => [
                                'title' => '签名名称。',
                                'description' => '签名名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '用户增长',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => '成功发起注册签名请求，可通过控制台或GetSignature获取审核状态。',
                        'description' => '成功发起注册签名请求，可通过控制台或GetSignature获取审核状态。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Id' => [
                                        'title' => '签名ID。',
                                        'description' => '签名ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '签名名称。',
                                        'description' => '签名名称。',
                                        'type' => 'string',
                                        'example' => '用户增长',
                                    ],
                                    'Status' => [
                                        'title' => '签名审核状态。'."\n"
                                            .'- 0：审核中。'."\n"
                                            .'- 1：审核通过。'."\n"
                                            .'- 2：审核不通过。',
                                        'description' => '签名审核状态。'."\n"
                                            .'- 0：审核中。'."\n"
                                            .'- 1：审核通过。'."\n"
                                            .'- 2：审核不通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => '0',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"用户增长\\",\\n    \\"Status\\": 0,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"0\\"\\n}","type":"json"}]',
            'title' => '注册签名',
        ],
        'DeleteSignature' => [
            'summary' => '删除签名。',
            'path' => '/api/v2/signatures/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '123196',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '签名ID，可通过ListSignatures查询账号下的签名列表，获取签名ID。',
                        'description' => '签名ID，可通过ListSignatures查询账号下的签名列表，获取签名ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '996e466b-6808-49c7-998c-47b57bb85dd4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功删除签名。',
                        'description' => '成功删除签名。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除签名',
        ],
        'ListSignatures' => [
            'summary' => '获取签名注册记录列表。',
            'path' => '/api/v2/signatures',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '123212',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '签名名称过滤。',
                        'description' => '签名名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用户增长',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '签名审核状态过滤。'."\n"
                            .'- 0：审核中。'."\n"
                            .'- 1：审核通过。'."\n"
                            .'- 2：审核不通过。',
                        'description' => '签名审核状态过滤。'."\n"
                            .'- 0：审核中。'."\n"
                            .'- 1：审核通过。'."\n"
                            .'- 2：审核不通过。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取签名列表。',
                        'description' => '成功获取签名列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'Signatures' => [
                                        'title' => '分页返回的签名列表。',
                                        'description' => '分页返回的签名列表',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'Id' => [
                                                    'title' => '签名Id。',
                                                    'description' => '签名ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '签名名称。',
                                                    'description' => '签名名称。',
                                                    'type' => 'string',
                                                    'example' => '用户增长',
                                                ],
                                                'Status' => [
                                                    'title' => '签名审核状态。'."\n"
                                                        .'- 0：审核中。'."\n"
                                                        .'- 1：审核通过。'."\n"
                                                        .'- 2：审核不通过。',
                                                    'description' => '签名审核状态。'."\n"
                                                        .'- 0：审核中。'."\n"
                                                        .'- 1：审核通过。'."\n"
                                                        .'- 2：审核不通过。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '账号下全部签名注册记录数量。',
                                        'description' => '账号下全部签名注册记录数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Signatures\\": [\\n      {\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"用户增长\\",\\n        \\"Status\\": 0,\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取签名列表',
        ],
        'GetSignature' => [
            'summary' => '获取签名的详细信息。',
            'path' => '/api/v2/signatures/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '123202',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '签名Id，可通过ListSignatures查询账号下的签名列表，获取签名Id。',
                        'description' => '签名Id，可通过ListSignatures查询账号下的签名列表，获取签名Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取签名详情。',
                        'description' => '成功获取签名详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Description' => [
                                        'title' => '申请说明。',
                                        'description' => '申请说明。',
                                        'type' => 'string',
                                        'example' => '申请说明',
                                    ],
                                    'Id' => [
                                        'title' => '签名Id。',
                                        'description' => '签名Id。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '签名名称。',
                                        'description' => '签名名称。',
                                        'type' => 'string',
                                        'example' => '用户增长',
                                    ],
                                    'Reason' => [
                                        'title' => '审核建议。',
                                        'description' => '审核建议。',
                                        'type' => 'string',
                                        'example' => '同意',
                                    ],
                                    'Status' => [
                                        'title' => '签名审核状态。'."\n"
                                            .'- 0：审核中。'."\n"
                                            .'- 1：审核通过。'."\n"
                                            .'- 2：审核不通过。',
                                        'description' => '签名审核状态。'."\n"
                                            .'- 0：审核中。'."\n"
                                            .'- 1：审核通过。'."\n"
                                            .'- 2：审核不通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Description\\": \\"申请说明\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"用户增长\\",\\n    \\"Reason\\": \\"同意\\",\\n    \\"Status\\": 0,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取签名详情',
        ],
        'CreateTemplate' => [
            'summary' => '调用CreateTemplate来创建模板。',
            'path' => '/api/v2/templates',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '123191',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Content' => [
                                'title' => '模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，营销短信必须在结尾添加“回T退订”。',
                                'description' => '模板内容，请注意控制总字数在70个字以内，超出部分按长短信收费，按67个字为单位记一条短信，必须在结尾添加”回T退订“。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '模板内容',
                            ],
                            'Description' => [
                                'title' => '申请说明。',
                                'description' => '申请说明。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '申请说明',
                            ],
                            'Name' => [
                                'title' => '模板名称。',
                                'description' => '模板名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '模板召回-20220101',
                            ],
                            'Signature' => [
                                'title' => '签名名称，同时只能指定签名名称或签名ID其中之一。',
                                'description' => '签名名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PAI',
                            ],
                            'SignatureId' => [
                                'title' => '签名ID，可通过ListSignatures获取审核状态为已通过的签名列表，获取签名ID。',
                                'description' => '签名ID，可通过ListSignatures获取审核状态为已通过的签名列表，获取签名ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                            ],
                            'Type' => [
                                'title' => '模板类型。'."\n"
                                    .'- 0 : 验证码。'."\n"
                                    .'- 1 : 短信通知。'."\n"
                                    .'- 2 : 推广短信。',
                                'description' => '模板类型。'."\n"
                                    .'- 0：验证码。'."\n"
                                    .'- 1：短信通知。'."\n"
                                    .'- 2：推广短信。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => '成功发起注册模板请求，可通过控制台或GetTemplate获取审核状态。',
                        'description' => '成功发起注册模板请求，可通过控制台或GetTemplate获取审核状态。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Content' => [
                                        'title' => '模板内容。',
                                        'description' => '模板内容。',
                                        'type' => 'string',
                                        'example' => '模板内容',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Description' => [
                                        'title' => '申请说明。',
                                        'description' => '申请说明。',
                                        'type' => 'string',
                                        'example' => '申请说明',
                                    ],
                                    'Id' => [
                                        'title' => '模板ID。',
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '模板名称。',
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => '模板召回-20220101',
                                    ],
                                    'Reason' => [
                                        'title' => '审核意见。',
                                        'description' => '审核意见。',
                                        'type' => 'string',
                                        'example' => '同意',
                                    ],
                                    'Signature' => [
                                        'title' => '签名。',
                                        'description' => '签名。',
                                        'type' => 'string',
                                        'example' => 'PAI通知',
                                    ],
                                    'SignatureId' => [
                                        'title' => '签名ID。',
                                        'description' => '签名ID。',
                                        'type' => 'string',
                                        'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                                    ],
                                    'Status' => [
                                        'title' => '审核状态。'."\n"
                                            .'- 0 : 审核中。'."\n"
                                            .'- 1 : 审核通过。'."\n"
                                            .'- 2 : 审核不通过。',
                                        'description' => '审核状态。'."\n"
                                            .'- 0 : 审核中。'."\n"
                                            .'- 1 : 审核通过。'."\n"
                                            .'- 2 : 审核不通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'TemplateCode' => [
                                        'title' => '模板Code。',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => 'SMS_123456',
                                    ],
                                    'Type' => [
                                        'title' => '模板类型。'."\n"
                                            .'- 0 : 验证码。'."\n"
                                            .'- 1 : 短信通知。'."\n"
                                            .'- 2 : 推广短信。',
                                        'description' => '模板类型。'."\n"
                                            .'- 0：验证码。'."\n"
                                            .'- 1：短信通知。'."\n"
                                            .'- 2：推广短信。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Content\\": \\"模板内容\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Description\\": \\"申请说明\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"模板召回-20220101\\",\\n    \\"Reason\\": \\"同意\\",\\n    \\"Signature\\": \\"PAI通知\\",\\n    \\"SignatureId\\": \\"5480e3e7-f578-42d2-8ce8-217dec75f2e6\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"Type\\": 1,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '注册模板',
        ],
        'DeleteTemplate' => [
            'summary' => '删除短信模板。',
            'path' => '/api/v2/templates/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '123197',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模板Id，可通过ListTemplates查询账号下的模板列表，获取模板Id。',
                        'description' => '模板ID，可通过ListTemplates查询账号下的模板列表，获取模板ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功删除模板。',
                        'description' => '成功删除模板。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除模板',
        ],
        'ListTemplates' => [
            'summary' => '获取模板注册记录列表。',
            'path' => '/api/v2/templates',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '123213',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板内容过滤。',
                        'description' => '模板内容过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '七夕',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板名称过滤。',
                        'description' => '模板名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '召回',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '审核状态过滤。'."\n"
                            .'- 0 : 审核中。'."\n"
                            .'- 1 : 审核通过。'."\n"
                            .'- 2 : 审核不通过。',
                        'description' => '审核状态过滤。'."\n"
                            .'- 0 : 审核中。'."\n"
                            .'- 1 : 审核通过。'."\n"
                            .'- 2 : 审核不通过。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板类型过滤。'."\n"
                            .'- 0 : 验证码。'."\n"
                            .'- 1 : 短信通知。'."\n"
                            .'- 2 : 推广短信。',
                        'description' => '模板类型过滤。'."\n"
                            .'- 0 : 验证码。'."\n"
                            .'- 1 : 短信通知。'."\n"
                            .'- 2 : 推广短信。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取模板列表。',
                        'description' => '成功获取模板列表，可通过控制台或GetTemplate获取审核状态。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'Templates' => [
                                        'title' => '分页返回的模板列表。',
                                        'description' => '分页返回的模板列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Content' => [
                                                    'title' => '模板内容。',
                                                    'description' => '模板内容。',
                                                    'type' => 'string',
                                                    'example' => '模板内容',
                                                ],
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'Description' => [
                                                    'title' => '申请说明。',
                                                    'description' => '申请说明。',
                                                    'type' => 'string',
                                                    'example' => '申请说明',
                                                ],
                                                'Id' => [
                                                    'title' => '模板Id。',
                                                    'description' => '模板ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '签名名称。',
                                                    'description' => '模板名称。',
                                                    'type' => 'string',
                                                    'example' => '模板召回-20220101',
                                                ],
                                                'Reason' => [
                                                    'title' => '审核意见。',
                                                    'description' => '审核意见。',
                                                    'type' => 'string',
                                                    'example' => '同意',
                                                ],
                                                'SignatureId' => [
                                                    'title' => '签名Id。',
                                                    'description' => '签名ID。',
                                                    'type' => 'string',
                                                    'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                                                ],
                                                'Status' => [
                                                    'title' => '审核状态。'."\n"
                                                        .'- 0 : 审核中。'."\n"
                                                        .'- 1 : 审核通过。'."\n"
                                                        .'- 2 : 审核不通过。',
                                                    'description' => '审核状态。'."\n"
                                                        .'- 0 : 审核中。'."\n"
                                                        .'- 1 : 审核通过。'."\n"
                                                        .'- 2 : 审核不通过。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'TemplateCode' => [
                                                    'title' => '模板Code。',
                                                    'description' => '模板Code。',
                                                    'type' => 'string',
                                                    'example' => 'SMS_123456',
                                                ],
                                                'Type' => [
                                                    'title' => '模板类型。'."\n"
                                                        .'- 0 : 验证码。'."\n"
                                                        .'- 1 : 短信通知。'."\n"
                                                        .'- 2 : 推广短信。',
                                                    'description' => '模板类型。'."\n"
                                                        .'- 0：验证码。'."\n"
                                                        .'- 1：短信通知。'."\n"
                                                        .'- 2：推广短信。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '全部模板注册记录数量。',
                                        'description' => '全部模板注册记录数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Templates\\": [\\n      {\\n        \\"Content\\": \\"模板内容\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Description\\": \\"申请说明\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"模板召回-20220101\\",\\n        \\"Reason\\": \\"同意\\",\\n        \\"SignatureId\\": \\"5480e3e7-f578-42d2-8ce8-217dec75f2e6\\",\\n        \\"Status\\": 0,\\n        \\"TemplateCode\\": \\"SMS_123456\\",\\n        \\"Type\\": 1,\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取模板列表',
        ],
        'GetTemplate' => [
            'summary' => '获取模板详细内容。',
            'path' => '/api/v2/templates/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '123203',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模板Id，可通过ListTemplates查询账号下的模板列表，获取模板Id。',
                        'description' => '模板ID，可通过ListTemplates查询账号下的模板列表，获取模板ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取模板详情。',
                        'description' => '成功获取模板详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Content' => [
                                        'title' => '模板内容。',
                                        'description' => '模板内容。',
                                        'type' => 'string',
                                        'example' => '心仪的TA刚刚给你留言了',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Description' => [
                                        'title' => '申请说明。',
                                        'description' => '申请说明。',
                                        'type' => 'string',
                                        'example' => '申请说明',
                                    ],
                                    'Id' => [
                                        'title' => '模板Id。',
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '签名名称。',
                                        'description' => '模板名称。',
                                        'type' => 'string',
                                        'example' => '模板召回-20220101',
                                    ],
                                    'Reason' => [
                                        'title' => '审核意见。',
                                        'description' => '审核意见。',
                                        'type' => 'string',
                                        'example' => '同意',
                                    ],
                                    'SignatureId' => [
                                        'title' => '签名Id。',
                                        'description' => '签名ID。',
                                        'type' => 'string',
                                        'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                                    ],
                                    'Status' => [
                                        'title' => '审核状态。'."\n"
                                            .'- 0 : 审核中。'."\n"
                                            .'- 1 : 审核通过。'."\n"
                                            .'- 2 : 审核不通过。',
                                        'description' => '审核状态。'."\n"
                                            .'- 0 : 审核中。'."\n"
                                            .'- 1 : 审核通过。'."\n"
                                            .'- 2 : 审核不通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'TemplateCode' => [
                                        'title' => '模板Code。',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => 'SMS_123456',
                                    ],
                                    'Type' => [
                                        'title' => '模板类型。'."\n"
                                            .'- 0 : 验证码。'."\n"
                                            .'- 1 : 短信通知。'."\n"
                                            .'- 2 : 推广短信。',
                                        'description' => '模板类型。'."\n"
                                            .'- 0：验证码。'."\n"
                                            .'- 1：短信通知。'."\n"
                                            .'- 2：推广短信。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Content\\": \\"心仪的TA刚刚给你留言了\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Description\\": \\"申请说明\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"模板召回-20220101\\",\\n    \\"Reason\\": \\"同意\\",\\n    \\"SignatureId\\": \\"5480e3e7-f578-42d2-8ce8-217dec75f2e6\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"Type\\": 1,\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取模板详情',
        ],
        'SendMessage' => [
            'summary' => '发送短信，使用前须注册签名和模板。',
            'path' => '/api/v2/messages',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '123215',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'GroupId' => [
                                'title' => '人群Id，用于关联人群。',
                                'description' => '人群ID，用于关联人群。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '10ed87f5-3ca8-4a43-9d83-b30519be7241',
                            ],
                            'OutIds' => [
                                'title' => '外部拓展字段，示例：["1234567890"]。',
                                'description' => '外部拓展字段，示例：["1234567890"]。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1234567890',
                                ],
                                'required' => false,
                            ],
                            'PhoneNumbers' => [
                                'title' => '手机号，每个手机号对应一个模板变量、上行拓展码和外部拓展字段，个数最大为1000，示例：["1234567890"]。',
                                'description' => '手机号，每个手机号对应一个模板变量、上行拓展码和外部拓展字段，号码个数最大为1000，示例：["1234567890"]。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1234567890',
                                ],
                                'required' => false,
                            ],
                            'ScheduleId' => [
                                'title' => '触达计划Id，用于关联触达计划。',
                                'description' => '发送计划ID，用于关联发送计划。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '08d19262-bd76-48fd-80e8-6a225ac388c1',
                            ],
                            'SignName' => [
                                'title' => '签名名称。',
                                'description' => '签名名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PAI通知',
                            ],
                            'SignatureId' => [
                                'title' => '签名Id，同时只能指定签名名称或签名Id其中之一。',
                                'description' => '签名ID，同时只能指定签名名称或签名ID其中之一。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                            ],
                            'SmsUpExtendCodes' => [
                                'title' => '短信上行拓展码，示例：["1234567890"]。',
                                'description' => '短信上行拓展码，示例：["1234567890"]。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1234567890',
                                ],
                                'required' => false,
                            ],
                            'TemplateCode' => [
                                'title' => '模板Code。',
                                'description' => '模板Code。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'SMS_123456',
                            ],
                            'TemplateId' => [
                                'title' => '模板Id，同时只能指定模板Code或模板Id其中之一。',
                                'description' => '模板ID，同时只能指定模板Code或模板ID其中之一。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3',
                            ],
                            'TemplateParams' => [
                                'title' => '短信模板变量对应的实际值，JSON格式。支持传入多个参数，示例：[{"name":"张三","number":"15038****76"}]。',
                                'description' => '短信模板变量对应的实际值，JSON格式。支持传入多个参数，示例：[{"name":"张三","number":"15038****76"}]。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '{"name":"张三","number":"15038****76"}',
                                ],
                                'required' => false,
                            ],
                            'PaymentType' => [
                                'description' => '计费类型（为空时默认后付费）。'."\n"
                                    ."\n"
                                    .'- PayAsYouGo：后付费'."\n"
                                    .'- Subscription：预付费',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PayAsYouGo',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => '成功发送短信。',
                        'description' => '成功发送短信。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Messages' => [
                                        'title' => '短信结果列表，列表中手机号的顺序与输入请求手机号顺序一一对应。',
                                        'description' => '短信结果列表，列表中手机号的顺序与输入请求手机号顺序一一对应。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '短信Id，可使用ListMessages查询短信状态。',
                                                    'description' => '短信ID，可使用ListMessages查询短信状态。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'PhoneNumber' => [
                                                    'title' => '手机号码。',
                                                    'description' => '手机号码。',
                                                    'type' => 'string',
                                                    'example' => '1234567890',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RequestId' => [
                                        'title' => '短信批处理Id，可使用ListMessages查询短信状态。',
                                        'description' => '短信批处理ID，可使用ListMessages查询短信状态。',
                                        'type' => 'string',
                                        'example' => '62a72a20-8a9b-4060-a510-0c30a9340cba',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Messages\\": [\\n      {\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"PhoneNumber\\": \\"1234567890\\"\\n      }\\n    ],\\n    \\"RequestId\\": \\"62a72a20-8a9b-4060-a510-0c30a9340cba\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '发送短信',
        ],
        'ListMessages' => [
            'summary' => '按指定过滤条件获取指定日期的短信发送状态。',
            'path' => '/api/v2/messages',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '123210',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Datetime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发送日期，格式为20220101。',
                        'description' => '发送日期，格式为yyyymmdd。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20220101',
                    ],
                ],
                [
                    'name' => 'ErrorCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '短信错误码过滤。',
                        'description' => '短信错误码过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DELIVERED',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关联人群Id过滤。',
                        'description' => '关联人群ID过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10ed87f5-3ca8-4a43-9d83-b30519be7241',
                    ],
                ],
                [
                    'name' => 'MessageId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '短信Id过滤，短信Id为SendMessage成功返回的Id。',
                        'description' => '短信ID过滤，短信ID为SendMessage成功返回的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '手机号码过滤。',
                        'description' => '手机号码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1234567890',
                    ],
                ],
                [
                    'name' => 'RequestId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '短信批处理Id过滤，短信批处理Id为SendMessage成功返回的RequestId。',
                        'description' => '短信批处理ID过滤，短信批处理ID为SendMessage成功返回的RequestId。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '62a72a20-8a9b-4060-a510-0c30a9340cba',
                    ],
                ],
                [
                    'name' => 'ScheduleId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关联触达计划Id过滤。',
                        'description' => '关联发送计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '08d19262-bd76-48fd-80e8-6a225ac388c1',
                    ],
                ],
                [
                    'name' => 'Signature',
                    'in' => 'query',
                    'schema' => [
                        'title' => '签名名称过滤。',
                        'description' => '签名名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PAI通知',
                    ],
                ],
                [
                    'name' => 'SignatureId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '签名Id过滤，同时只能指定签名名称或签名Id其中之一。',
                        'description' => '签名ID，同时只能指定签名名称或签名ID其中之一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '短信发送状态过滤。'."\n"
                            .'- 0 : 发送中。'."\n"
                            .'- 1 : 发送成功。'."\n"
                            .'- 2 : 发送失败。',
                        'description' => '短信发送状态。'."\n"
                            .'- 0 : 发送中。'."\n"
                            .'- 1 : 发送成功。'."\n"
                            .'- 2 : 发送失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板号过滤。',
                        'description' => '模板号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMS_123456',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板Id过滤，同时只能指定模板Code或模板Id其中之一。',
                        'description' => '模板ID，同时只能指定模板Code或模板ID其中之一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板类型过滤。'."\n"
                            .'- 0 : 验证码。'."\n"
                            .'- 1 : 短信通知。'."\n"
                            .'- 2 : 推广短信。',
                        'description' => '模板类型过滤。'."\n"
                            .'- 0 : 验证码。'."\n"
                            .'- 1 : 短信通知。'."\n"
                            .'- 2 : 推广短信。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取短信发送详情列表。',
                        'description' => '成功。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Messages' => [
                                        'title' => '短信列表。',
                                        'description' => '短信列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ErrorCode' => [
                                                    'title' => '短信错误码。',
                                                    'description' => '短信错误码。',
                                                    'type' => 'string',
                                                    'example' => 'DELIVERED',
                                                ],
                                                'GroupId' => [
                                                    'title' => '关联人群Id，未关联则为空。',
                                                    'description' => '关联人群ID。',
                                                    'type' => 'string',
                                                    'example' => '51d20163-1b10-4af2-8a23-58ad52201f2f',
                                                ],
                                                'Id' => [
                                                    'title' => '短信序列号。',
                                                    'description' => '短信序列号。',
                                                    'type' => 'string',
                                                    'example' => '92d05e19-751b-4346-a7c5-8808bb49b8a2',
                                                ],
                                                'OutId' => [
                                                    'title' => '外部拓展字段。',
                                                    'description' => '外部拓展字段。',
                                                    'type' => 'string',
                                                    'example' => '1234567890',
                                                ],
                                                'PhoneNumber' => [
                                                    'title' => '手机号码。',
                                                    'description' => '手机号码。',
                                                    'type' => 'string',
                                                    'example' => '1234567890',
                                                ],
                                                'ScheduleId' => [
                                                    'title' => '关联触达计划Id，未关联则为空。',
                                                    'description' => '关联发送计划ID。',
                                                    'type' => 'string',
                                                    'example' => '0604d49d-fd23-4515-bb26-9b537cbf1f6d',
                                                ],
                                                'Signature' => [
                                                    'title' => '签名名称。',
                                                    'description' => '签名名称。',
                                                    'type' => 'string',
                                                    'example' => 'PAI通知',
                                                ],
                                                'Status' => [
                                                    'title' => '短信发送状态。'."\n"
                                                        .'- 0 : 发送中。'."\n"
                                                        .'- 1 : 发送成功。'."\n"
                                                        .'- 2 : 发送失败。',
                                                    'description' => '短信发送状态。'."\n"
                                                        .'- 0 : 发送中。'."\n"
                                                        .'- 1 : 发送成功。'."\n"
                                                        .'- 2 : 发送失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'TemplateCode' => [
                                                    'title' => '模板号。',
                                                    'description' => '模板号。',
                                                    'type' => 'string',
                                                    'example' => 'SMS_123456',
                                                ],
                                                'TemplateParams' => [
                                                    'title' => '模板参数。',
                                                    'description' => '模板参数。',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'TemplateType' => [
                                                    'title' => '模板类型。'."\n"
                                                        .'- 0 : 验证码。'."\n"
                                                        .'- 1 : 短信通知。'."\n"
                                                        .'- 2 : 推广短信。',
                                                    'description' => '模板类型。'."\n"
                                                        .'- 0 : 验证码。'."\n"
                                                        .'- 1 : 短信通知。'."\n"
                                                        .'- 2 : 推广短信。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '2',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '短信数量。',
                                        'description' => '短信数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败,原因见errmsg',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Messages\\": [\\n      {\\n        \\"ErrorCode\\": \\"DELIVERED\\",\\n        \\"GroupId\\": \\"51d20163-1b10-4af2-8a23-58ad52201f2f\\",\\n        \\"Id\\": \\"92d05e19-751b-4346-a7c5-8808bb49b8a2\\",\\n        \\"OutId\\": \\"1234567890\\",\\n        \\"PhoneNumber\\": \\"1234567890\\",\\n        \\"ScheduleId\\": \\"0604d49d-fd23-4515-bb26-9b537cbf1f6d\\",\\n        \\"Signature\\": \\"PAI通知\\",\\n        \\"Status\\": 0,\\n        \\"TemplateCode\\": \\"SMS_123456\\",\\n        \\"TemplateParams\\": \\"{}\\",\\n        \\"TemplateType\\": 2\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取短信列表',
        ],
        'ListMessageMetrics' => [
            'summary' => '获取短信发送统计数据，可按指定条件获取分类别详细数据。',
            'path' => '/api/v2/messages/metrics',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '123209',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'EndDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束日期，格式20220102。',
                        'description' => '结束日期，格式20220102。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20210321',
                    ],
                ],
                [
                    'name' => 'GroupId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关联人群Id。',
                        'description' => '关联人群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10ed87f5-3ca8-4a43-9d83-b30519be7241',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ScheduleId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关联触达计划Id。',
                        'description' => '关联触达计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '08d19262-bd76-48fd-80e8-6a225ac388c1',
                    ],
                ],
                [
                    'name' => 'Signature',
                    'in' => 'query',
                    'schema' => [
                        'title' => '签名名称。',
                        'description' => '签名名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PAI通知',
                    ],
                ],
                [
                    'name' => 'SignatureId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '签名Id，同时只能指定签名名称或签名Id其中之一。',
                        'description' => '签名ID，同时只能指定签名名称或签名ID其中之一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b1fe24e2-6a1b-42c6-901e-bfb2e898b5f3',
                    ],
                ],
                [
                    'name' => 'StartDate',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始日期，格式20220102。',
                        'description' => '开始日期，格式20220102。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '20210321',
                    ],
                ],
                [
                    'name' => 'TemplateCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板号。',
                        'description' => '模板号。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SMS_123456',
                    ],
                ],
                [
                    'name' => 'TemplateId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板Id，同时只能指定模板Code或模板Id其中之一。',
                        'description' => '模板ID，同时只能指定模板Code或模板ID其中之一。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5480e3e7-f578-42d2-8ce8-217dec75f2e6',
                    ],
                ],
                [
                    'name' => 'TemplateType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模板类型。'."\n"
                            .'- 0 : 验证码。'."\n"
                            .'- 1 : 短信通知。'."\n"
                            .'- 2 : 推广短信。',
                        'description' => '模板类型。'."\n"
                            .'- 0 : 验证码。'."\n"
                            .'- 1 : 短信通知。'."\n"
                            .'- 2 : 推广短信。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取短信发送统计列表。',
                        'description' => '成功获取短信发送统计列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Metrics' => [
                                        'title' => '分页返回的统计数据条目列表。',
                                        'description' => '分页返回的统计数据条目列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Date' => [
                                                    'title' => '发送日期。',
                                                    'description' => '发送日期。',
                                                    'type' => 'string',
                                                    'example' => '20210321',
                                                ],
                                                'Fail' => [
                                                    'title' => '发送失败。',
                                                    'description' => '发送失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Pending' => [
                                                    'title' => '发送中。',
                                                    'description' => '发送中。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Rate' => [
                                                    'title' => '发送成功率。',
                                                    'description' => '发送成功率。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.8',
                                                ],
                                                'Success' => [
                                                    'title' => '发送成功。',
                                                    'description' => '发送成功。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Total' => [
                                                    'title' => '总计短信数量。',
                                                    'description' => '总计短信数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总统计数据条目数量。',
                                        'description' => '总统计数据条目数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Metrics\\": [\\n      {\\n        \\"Date\\": \\"20210321\\",\\n        \\"Fail\\": 0,\\n        \\"Pending\\": 0,\\n        \\"Rate\\": 0.8,\\n        \\"Success\\": 0,\\n        \\"Total\\": 0\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 0\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取短信发送统计',
            'description' => '获取 [开始日期, 结束日期] 闭区间内的数据，返回数据按日期升序排列，发送统计为空的日期不返回。'."\n"
                ."\n"
                .'发送数据在48小时内会随实际短信发送状态不断更新，最终数据以48小时后数据为准。',
        ],
        'SmsReport' => [
            'summary' => '短信发送状态报告接口定义。',
            'description' => '您可以指定HTTP URL来接收由短信服务推送的短信发送状态报告，然后SmsReport使用HTTP服务接收消息传递报告。'."\n"
                .'您可以使用UpdateReportUrl更新您的接收服务URL。',
            'path' => '/api/v2/recall/report',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'biz_id' => [
                                    'title' => '发送回执ID，即发送流水号。',
                                    'description' => '发送回执ID，即发送流水号。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '12345',
                                ],
                                'err_code' => [
                                    'title' => '状态报告编码。',
                                    'description' => '状态报告编码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DELIVERED',
                                ],
                                'err_msg' => [
                                    'title' => '状态报告说明。',
                                    'description' => '状态报告说明。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '用户接收成功',
                                ],
                                'message_id' => [
                                    'title' => '短信Id。调用发送接口SendMessage发送短信时，返回值中的Id字段。可使用短信Id在接口ListMessages查询具体的发送状态。',
                                    'description' => '短信ID。调用发送接口SendMessage发送短信时，返回值中的ID字段。可使用短信ID在接口ListMessages查询具体的发送状态。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '123',
                                ],
                                'out_id' => [
                                    'title' => '外部拓展字段。',
                                    'description' => '外部拓展字段。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '123',
                                ],
                                'phone_number' => [
                                    'title' => '手机号码。',
                                    'description' => '手机号码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1390000****',
                                ],
                                'report_time' => [
                                    'title' => '状态报告时间。',
                                    'description' => '状态报告时间。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2017-09-01 00:00:00',
                                ],
                                'request_id' => [
                                    'title' => '短信批处理Id。调用发送接口SendMessage发送短信时，返回值中的RequestId字段。可使用短信批处理Id在接口ListMessages查询具体的发送状态。',
                                    'description' => '短信批处理ID。调用发送接口SendMessage发送短信时，返回值中的RequestId字段。可使用短信批处理ID在接口ListMessages查询具体的发送状态。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '62a72a20-8a9b-4060-a510-0c30a9340cba',
                                ],
                                'send_time' => [
                                    'title' => '发送时间。',
                                    'description' => '发送时间。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2017-09-01 00:00:00',
                                ],
                                'sign_name' => [
                                    'title' => '签名。',
                                    'description' => '签名。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '签名',
                                ],
                                'sms_size' => [
                                    'title' => '短信长度。短信长度不超过70个字，按照一条短信计费；超过70个字，即为长短信，按照67字/条拆分成多条计费。',
                                    'description' => '短信长度。短信长度不超过70个字，按照一条短信计费；超过70个字，即为长短信，按照67字/条拆分成多条计费。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1',
                                ],
                                'success' => [
                                    'title' => '是否接收成功。'."\n"
                                        .'- true : 接收成功。'."\n"
                                        .'- false : 接收失败。',
                                    'description' => '是否接收成功。'."\n"
                                        .'- true : 接收成功。'."\n"
                                        .'- false : 接收失败。',
                                    'type' => 'boolean',
                                    'required' => false,
                                    'example' => 'true',
                                ],
                                'template_code' => [
                                    'title' => '模板号。',
                                    'description' => '模板号。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'SMS_123456',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取短信回执。',
                        'description' => '成功获取短信回执。',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'title' => '应答编码。',
                                'description' => '应答编码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'msg' => [
                                'title' => '描述信息。',
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => '接受成功',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见msg。',
                        'description' => '失败，原因见msg。',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'title' => '应答编码。',
                                'description' => '应答编码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'msg' => [
                                'title' => '描述信息。',
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => '接受成功',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": 0,\\n  \\"msg\\": \\"接受成功\\"\\n}","type":"json"}]',
            'title' => '回执接口定义',
            'extraInfo' => '第一次推送失败后，间隔1分钟、5分钟、10分钟、30分钟、60分钟、60分钟、60分钟、60分钟、60分钟后会进行重推，直至推送成功为止。如果推送10次后仍失败，不再重试。',
        ],
        'SmsUp' => [
            'summary' => '上行短信消息接口定义。',
            'description' => '您可以通过HTTP批量推送方式拉取上行短信消息（SmsUp）。'."\n"
                .'您可以通过UpdateUploadUrl更新您的上行短信消息接收地址。',
            'path' => '/api/v2/recall/up',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'content' => [
                                    'title' => '发送内容。',
                                    'description' => '发送内容。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '内容',
                                ],
                                'dest_code' => [
                                    'title' => '上行短信扩展号码，系统后台自动生成，不支持自定义传入。',
                                    'description' => '上行短信扩展号码，系统后台自动生成，不支持自定义传入。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1234',
                                ],
                                'phone_number' => [
                                    'title' => '手机号码。',
                                    'description' => '手机号码。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '1390000****',
                                ],
                                'send_time' => [
                                    'title' => '发送时间。',
                                    'description' => '发送时间。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '2017-09-01 00:00:00',
                                ],
                                'sequence_id' => [
                                    'title' => '序列号。',
                                    'description' => '序列号。',
                                    'type' => 'integer',
                                    'format' => 'int32',
                                    'required' => false,
                                    'example' => '1234567890',
                                ],
                                'sign_name' => [
                                    'title' => '签名信息。',
                                    'description' => '签名信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '签名',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取短信上行信息。',
                        'description' => '成功获取短信上行信息。',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'title' => '应答编码。',
                                'description' => '应答编码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'msg' => [
                                'title' => '描述信息。',
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => '接受成功',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见msg。',
                        'description' => '失败，原因见msg。',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'title' => '应答编码。',
                                'description' => '应答编码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'msg' => [
                                'title' => '描述信息。',
                                'description' => '描述信息。',
                                'type' => 'string',
                                'example' => '接受成功',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": 0,\\n  \\"msg\\": \\"接受成功\\"\\n}","type":"json"}]',
            'title' => '上行接口定义',
            'extraInfo' => '第一次推送失败后，间隔1分钟、5分钟、10分钟、30分钟、60分钟、60分钟、60分钟、60分钟、60分钟后会进行重推，直至推送成功为止。如果推送10次后仍失败，不再重试。',
        ],
        'UpdateReportUrl' => [
            'summary' => '更新短信发送状态回执接收服务地址。',
            'path' => '/api/v2/users/reportUrl',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '128725',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Url' => [
                                'title' => '可公开访问的地址。',
                                'description' => '可公开访问的地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'http://example.com',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功更新回执Url。',
                        'description' => '成功更新回执Url。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '更新回执地址',
            'description' => '更新成功一分钟后生效。',
        ],
        'UpdateUploadUrl' => [
            'summary' => '更新上行信息接收服务地址。',
            'path' => '/api/v2/users/uploadUrl',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '128726',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Url' => [
                                'title' => '可公开访问的地址。',
                                'description' => '可公开访问的地址。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'http://example.com',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功更新上行Url。',
                        'description' => '成功更新上行Url。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '更新上行地址',
            'description' => '更新成功一分钟后生效。',
        ],
        'CreateCampaign' => [
            'summary' => '创建运营活动。',
            'path' => '/api/v2/campaigns',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '131222',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '运营活动名称。',
                                'description' => '运营活动名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VIP客户',
                            ],
                            'Remark' => [
                                'title' => '备注。',
                                'description' => '备注。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '双十一活动',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功创建运营活动。',
                        'description' => '成功创建运营活动。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Id' => [
                                        'title' => '运营活动Id。',
                                        'description' => '运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '运营活动名称。',
                                        'description' => '运营活动名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '双十一活动',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"双十一活动\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '创建运营活动',
        ],
        'DeleteCampaign' => [
            'summary' => '删除运营活动。',
            'path' => '/api/v2/campaigns/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '131223',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'path',
                        'description' => '运营活动ID，可通过ListCampaigns获取运营活动列表获取相应ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功删除运营活动。',
                        'description' => '成功删除运营活动。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除运营活动',
        ],
        'ListCampaigns' => [
            'summary' => '获取运营活动列表。',
            'path' => '/api/v2/campaigns',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '131225',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '运营活动名称过滤。',
                        'description' => '运营活动名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VIP客户',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'title' => '运营活动备注过滤。',
                        'description' => '运营活动备注过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '充值大于一万',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取运营活动列表。',
                        'description' => '成功获取运营活动列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Campaigns' => [
                                        'title' => '运营活动列表。',
                                        'description' => '运营活动列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'Id' => [
                                                    'title' => '运营活动Id。',
                                                    'description' => '运营活动ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '运营活动名称。',
                                                    'description' => '运营活动名称。',
                                                    'type' => 'string',
                                                    'example' => 'VIP客户',
                                                ],
                                                'Remark' => [
                                                    'title' => '备注。',
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '双十一活动',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总运营活动数量。',
                                        'description' => '总运营活动数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Campaigns\\": [\\n      {\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"Remark\\": \\"双十一活动\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取运营活动列表',
        ],
        'GetCampaign' => [
            'summary' => '获取运营活动详细内容。',
            'path' => '/api/v2/campaigns/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '131224',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '运营活动Id，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动Id。',
                        'description' => '运营活动ID，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取运营活动详情。',
                        'description' => '成功获取运营活动详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Id' => [
                                        'title' => '运营活动Id。',
                                        'description' => '运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '运营活动名称。',
                                        'description' => '运营活动名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '双十一活动',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"双十一活动\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取运营活动详情',
        ],
        'UpdateCampaign' => [
            'summary' => '更新运营活动名称和备注。',
            'path' => '/api/v2/campaigns/{Id}',
            'methods' => [
                'put',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'abilityTreeCode' => '131226',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '运营活动Id，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动Id。',
                        'description' => '运营活动ID，可通过ListCampaigns查询账号下的运营活动列表，获取运营活动ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '996e466b-6808-49c7-998c-47b57bb85dd4',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'title' => '运营活动名称。',
                                'description' => '运营活动名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VIP客户',
                            ],
                            'Remark' => [
                                'title' => '备注。',
                                'description' => '备注。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '双十一活动',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功更新运营活动。',
                        'description' => '成功更新运营活动。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Id' => [
                                        'title' => '运营活动Id。',
                                        'description' => '运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '运营活动名称。',
                                        'description' => '运营活动名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '双十一活动',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"双十一活动\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '更新运营活动',
        ],
        'ListAlgorithms' => [
            'summary' => '获取当前可用算法列表。',
            'path' => '/api/v2/algorithms',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129064',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'title' => '算法Id过滤。',
                        'description' => '算法ID过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'sms_recall',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '算法名称过滤。',
                        'description' => '算法名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '短信召回',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取算法列表。',
                        'description' => '成功获取算法列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithms' => [
                                        'title' => '算法列表。',
                                        'description' => '算法列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '算法Id。',
                                                    'description' => '算法ID。',
                                                    'type' => 'string',
                                                    'example' => 'sms_recall',
                                                ],
                                                'Name' => [
                                                    'title' => '算法名称。',
                                                    'description' => '算法名称。',
                                                    'type' => 'string',
                                                    'example' => '短信召回',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总算法数量。',
                                        'description' => '总算法数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithms\\": [\\n      {\\n        \\"Id\\": \\"sms_recall\\",\\n        \\"Name\\": \\"短信召回\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取算法列表',
        ],
        'GetAlgorithm' => [
            'summary' => '获取算法详细参数信息。',
            'path' => '/api/v2/algorithms/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129059',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '模板Id，可通过ListAlgorithms查询当前可用算法，使用获取的算法Id。',
                        'description' => '算法ID，可通过ListAlgorithms查询当前可用算法，使用获取的算法ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取算法详情。',
                        'description' => '成功获取算法详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'title' => '算法说明。',
                                        'description' => '算法说明。',
                                        'type' => 'string',
                                        'example' => '算法说明',
                                    ],
                                    'Id' => [
                                        'title' => '算法Id。',
                                        'description' => '算法ID。',
                                        'type' => 'string',
                                        'example' => 'sms_recall',
                                    ],
                                    'InferUserConfigMap' => [
                                        'title' => '预测所需参数名与对应的参数说明。',
                                        'description' => '预测所需参数名与对应的参数说明。',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Name' => [
                                        'title' => '算法名称。',
                                        'description' => '算法名称。',
                                        'type' => 'string',
                                        'example' => '短信召回',
                                    ],
                                    'TrainUserConfigMap' => [
                                        'title' => '训练所需参数名与对应的参数说明。',
                                        'description' => '训练所需参数名与对应的参数说明。',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Description\\": \\"算法说明\\",\\n    \\"Id\\": \\"sms_recall\\",\\n    \\"InferUserConfigMap\\": \\"{}\\",\\n    \\"Name\\": \\"短信召回\\",\\n    \\"TrainUserConfigMap\\": \\"{}\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取算法详情',
        ],
        'CreateTrainingJob' => [
            'summary' => '创建训练任务。',
            'path' => '/api/v2/training/jobs',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '129054',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Algorithm' => [
                                'title' => '关联算法ID。',
                                'description' => '关联算法ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user_recall',
                            ],
                            'CampaignId' => [
                                'title' => '关联运营活动ID。',
                                'description' => '关联运营活动ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                            ],
                            'DataPath' => [
                                'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                                'description' => '训练数据路径。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://bucket.region.aliyuncs.com/folder/',
                            ],
                            'Name' => [
                                'title' => '训练任务名称。',
                                'description' => '训练任务名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VIP客户',
                            ],
                            'Remark' => [
                                'title' => '备注。',
                                'description' => '备注。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '充值大于一万',
                            ],
                            'UserConfig' => [
                                'title' => '用户配置。',
                                'description' => '用户配置，用于设置start\\_date、end\\_date等参数，划定建模数据的时间范围。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{'."\n"
                                    .'      "start_date": "20210101",'."\n"
                                    .'      "end_date": "20210131"'."\n"
                                    .'}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功注册训练任务，可通过控制台或GetTrainingJob获取任务执行状态。',
                        'description' => '成功注册训练任务，可通过控制台或GetTrainingJob获取任务执行状态。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithm' => [
                                        'title' => '关联算法ID。',
                                        'description' => '关联算法ID。',
                                        'type' => 'string',
                                        'example' => 'user_recall',
                                    ],
                                    'CampaignId' => [
                                        'title' => '关联运营活动ID。',
                                        'description' => '关联运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'DataPath' => [
                                        'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                                        'description' => '训练数据路径。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                    ],
                                    'History' => [
                                        'title' => '训练任务日志。',
                                        'description' => '训练任务日志。',
                                        'type' => 'string',
                                        'example' => 'Error: Parameter are not found.',
                                    ],
                                    'Id' => [
                                        'title' => '训练任务ID。',
                                        'description' => '训练任务ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '训练任务名称。',
                                        'description' => '训练任务名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '充值大于一万',
                                    ],
                                    'Status' => [
                                        'title' => '训练任务状态。'."\n"
                                            .'- 0: 队列中。'."\n"
                                            .'- 1: 已提交。'."\n"
                                            .'- 2: 运行中。'."\n"
                                            .'- 3: 成功。'."\n"
                                            .'- 4: 失败。',
                                        'description' => '训练任务状态。'."\n"
                                            .'- 0: 队列中。'."\n"
                                            .'- 1: 已提交。'."\n"
                                            .'- 2: 运行中。'."\n"
                                            .'- 3: 成功。'."\n"
                                            .'- 4: 失败。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'TrainingScheduleId' => [
                                        'title' => '关联训练计划ID。',
                                        'description' => '关联训练计划ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'UserConfig' => [
                                        'title' => '用户配置。',
                                        'description' => '用户配置。',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'      "start_date": "20210101",'."\n"
                                            .'      "end_date": "20210131"'."\n"
                                            .'}',
                                    ],
                                    'HasModelInfo' => [
                                        'description' => '是否存有特征重要性、模式、决策树等特征信息。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"History\\": \\"Error: Parameter are not found.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TrainingScheduleId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{\\\\n      \\\\\\"start_date\\\\\\": \\\\\\"20210101\\\\\\",\\\\n      \\\\\\"end_date\\\\\\": \\\\\\"20210131\\\\\\"\\\\n}\\",\\n    \\"HasModelInfo\\": false\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '创建训练任务',
            'description' => '在使用前需要在网页端一键授权OSS访问权限，并将需要访问的OSS Bucket添加pai=plugin的标签，请参考[OSS添加标签](https://help.aliyun.com/document_detail/133826.html)。',
        ],
        'DeleteTrainingJob' => [
            'summary' => '删除训练任务。',
            'path' => '/api/v2/training/jobs/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '129058',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '训练任务Id，可通过ListTrainingJobs查询账号下的训练任务列表，获取训练任务Id。',
                        'description' => '训练任务ID，可通过ListTrainingJobs查询账号下的训练任务列表，获取训练任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'b8e300a1-ff80-4ae4-bdc5-0c33dbcd76db',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功删除训练任务。',
                        'description' => '成功删除训练任务。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除训练任务',
        ],
        'ListTrainingJobs' => [
            'summary' => '获取训练任务列表。',
            'path' => '/api/v2/training/jobs',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129068',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CampaignId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '归属运营活动过滤。',
                        'description' => '归属运营活动过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '训练任务名称过滤。',
                        'description' => '训练任务名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VIP客户',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '训练任务列表的页码。起始值为1，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页查询时设置的每页显示的训练任务数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'title' => '训练任务备注过滤。',
                        'description' => '训练任务备注过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '充值大于一万',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '训练任务状态过滤。'."\n"
                            .'- 0: 队列中。'."\n"
                            .'- 1: 已提交。'."\n"
                            .'- 2: 运行中。'."\n"
                            .'- 3: 成功。'."\n"
                            .'- 4: 失败。',
                        'description' => '训练任务状态过滤，取值如下：'."\n"
                            .'- 0: 队列中。'."\n"
                            .'- 1: 已提交。'."\n"
                            .'- 2: 运行中。'."\n"
                            .'- 3: 成功。'."\n"
                            .'- 4: 失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'TrainingScheduleId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '归属训练计划过滤。',
                        'description' => '归属训练计划过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                    ],
                ],
                [
                    'name' => 'CampaignName',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'title' => '关联运营活动名称',
                        'description' => '关联运营活动名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '双11活动',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取训练任务列表。',
                        'description' => '成功获取训练任务列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '返回查询的训练任务列表的页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '返回每页显示的训练任务数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总训练任务数量。',
                                        'description' => '总训练任务数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'TrainingJobs' => [
                                        'title' => '训练任务列表。',
                                        'description' => '训练任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Algorithm' => [
                                                    'title' => '关联算法ID。',
                                                    'description' => '关联算法ID。',
                                                    'type' => 'string',
                                                    'example' => 'user_recall',
                                                ],
                                                'CampaignId' => [
                                                    'title' => '关联运营活动ID。',
                                                    'description' => '关联运营活动ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'DataPath' => [
                                                    'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                                                    'description' => '训练数据路径。',
                                                    'type' => 'string',
                                                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                                ],
                                                'History' => [
                                                    'title' => '训练任务日志。',
                                                    'description' => '训练任务日志。',
                                                    'type' => 'string',
                                                    'example' => 'Error: Unknown parameter.',
                                                ],
                                                'Id' => [
                                                    'title' => '训练任务ID。',
                                                    'description' => '训练任务Id。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '训练任务名称。',
                                                    'description' => '训练任务名称。',
                                                    'type' => 'string',
                                                    'example' => 'VIP客户',
                                                ],
                                                'Remark' => [
                                                    'title' => '备注。',
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '充值大于一万',
                                                ],
                                                'Status' => [
                                                    'title' => '训练任务状态。'."\n"
                                                        .'- 0: 队列中。'."\n"
                                                        .'- 1: 已提交。'."\n"
                                                        .'- 2: 运行中。'."\n"
                                                        .'- 3: 成功。'."\n"
                                                        .'- 4: 失败。',
                                                    'description' => '训练任务状态，可能值：'."\n"
                                                        .'- 0: 队列中。'."\n"
                                                        .'- 1: 已提交。'."\n"
                                                        .'- 2: 运行中。'."\n"
                                                        .'- 3: 成功。'."\n"
                                                        .'- 4: 失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'TrainingScheduleId' => [
                                                    'title' => '关联训练计划ID。',
                                                    'description' => '关联训练计划ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'UserConfig' => [
                                                    'title' => '用户配置。',
                                                    'description' => '用户配置。',
                                                    'type' => 'string',
                                                    'example' => '{\\"end_date\\":\\"20220408\\",\\"op_target\\":\\"sms\\",\\"start_date\\":\\"20220101\\"}',
                                                ],
                                                'HasModelInfo' => [
                                                    'description' => '是否存有特征重要性、模式、决策树等特征信息。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                    'default' => 'true',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10,\\n    \\"TrainingJobs\\": [\\n      {\\n        \\"Algorithm\\": \\"user_recall\\",\\n        \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n        \\"History\\": \\"Error: Unknown parameter.\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"Remark\\": \\"充值大于一万\\",\\n        \\"Status\\": 3,\\n        \\"TrainingScheduleId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"UserConfig\\": \\"{\\\\\\\\\\\\\\"end_date\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20220408\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"op_target\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"sms\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"start_date\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"20220101\\\\\\\\\\\\\\"}\\",\\n        \\"HasModelInfo\\": true\\n      }\\n    ]\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取训练任务列表',
        ],
        'GetTrainingJob' => [
            'summary' => '获取训练任务详情。',
            'path' => '/api/v2/training/jobs/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129063',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '训练任务ID，可通过ListTrainingJobs查询账号下的训练任务列表，获取训练任务ID。',
                        'description' => '训练任务ID。如何获取训练任务ID，请参见[ListTrainingJobs](~~429059~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取训练任务详情。',
                        'description' => '成功获取训练任务详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithm' => [
                                        'title' => '关联算法ID。',
                                        'description' => '关联算法ID。',
                                        'type' => 'string',
                                        'example' => 'user_recall',
                                    ],
                                    'CampaignId' => [
                                        'title' => '关联运营活动ID。',
                                        'description' => '关联运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'DataPath' => [
                                        'title' => '训练数据路径，指定路径前需确保已在控制台完成一键授权。',
                                        'description' => '训练数据路径。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                    ],
                                    'History' => [
                                        'title' => '训练任务日志。',
                                        'description' => '训练任务日志。',
                                        'type' => 'string',
                                        'example' => 'Error: Missing column.',
                                    ],
                                    'Id' => [
                                        'title' => '训练任务ID。',
                                        'description' => '训练任务ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '训练任务名称。',
                                        'description' => '训练任务名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '充值大于一万',
                                    ],
                                    'Status' => [
                                        'title' => '训练任务状态。'."\n"
                                            .'- 0: 队列中。'."\n"
                                            .'- 1: 已提交。'."\n"
                                            .'- 2: 运行中。'."\n"
                                            .'- 3: 成功。'."\n"
                                            .'- 4: 失败。',
                                        'description' => '训练任务状态，可能值：'."\n"
                                            .'- 0: 队列中。'."\n"
                                            .'- 1: 已提交。'."\n"
                                            .'- 2: 运行中。'."\n"
                                            .'- 3: 成功。'."\n"
                                            .'- 4: 失败。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'TrainingScheduleId' => [
                                        'title' => '关联训练计划ID。',
                                        'description' => '关联训练计划ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'UserConfig' => [
                                        'title' => '用户配置。',
                                        'description' => '用户配置。',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'HasModelInfo' => [
                                        'description' => '是否存有特征重要性、模式、决策树等特征信息。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"History\\": \\"Error: Missing column.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TrainingScheduleId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{}\\",\\n    \\"HasModelInfo\\": false\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取训练任务详情',
        ],
        'CreateInferenceJob' => [
            'summary' => '创建预测任务。',
            'path' => '/api/v2/inference/jobs',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '129052',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Algorithm' => [
                                'title' => '关联算法。',
                                'description' => '关联算法ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user_recall',
                            ],
                            'CampaignId' => [
                                'title' => '关联运营活动Id。',
                                'description' => '关联运营活动ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                            ],
                            'DataPath' => [
                                'title' => '预测数据路径。',
                                'description' => '预测数据路径。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://bucket.region.aliyuncs.com/folder/',
                            ],
                            'Name' => [
                                'title' => '预测任务名称。',
                                'description' => '预测任务名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VIP客户',
                            ],
                            'Remark' => [
                                'title' => '备注。',
                                'description' => '备注。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '充值大于一万',
                            ],
                            'TargetPath' => [
                                'title' => '输出数据路径，需要为空目录。',
                                'description' => '输出数据路径，需要为空目录。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://bucket.region.aliyuncs.com/folder/',
                            ],
                            'TrainingJobId' => [
                                'title' => '关联训练任务。',
                                'description' => '关联训练任务。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '123',
                            ],
                            'UserConfig' => [
                                'title' => '用户配置。',
                                'description' => '用户配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '{}',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功发起注册预测任务请求，可通过控制台或GetInferenceJob获取任务执行状态。',
                        'description' => '成功发起注册预测任务请求，可通过控制台或GetInferenceJob获取任务执行状态。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithm' => [
                                        'title' => '关联算法。',
                                        'description' => '关联算法ID。',
                                        'type' => 'string',
                                        'example' => 'user_recall',
                                    ],
                                    'CampaignId' => [
                                        'title' => '关联运营活动Id。',
                                        'description' => '关联运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'DataPath' => [
                                        'title' => '预测数据路径。',
                                        'description' => '预测数据路径。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                    ],
                                    'GroupId' => [
                                        'title' => '关联人群Id，如果任务失败则人群无效。',
                                        'description' => '关联人群ID，如果任务失败则人群无效。',
                                        'type' => 'string',
                                        'example' => 'bdb0b117-3354-4ceb-ba75-e022dd9370d8',
                                    ],
                                    'History' => [
                                        'title' => '预测任务日志。',
                                        'description' => '预测任务日志。',
                                        'type' => 'string',
                                        'example' => 'Error: Missing Column.',
                                    ],
                                    'Id' => [
                                        'title' => '预测任务Id。',
                                        'description' => '预测任务ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '预测任务名称。',
                                        'description' => '预测任务名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '充值大于一万',
                                    ],
                                    'Status' => [
                                        'title' => '预测任务状态。',
                                        'description' => '预测任务状态。'."\n"
                                            .'- 0: 队列中。'."\n"
                                            .'- 1: 已提交。'."\n"
                                            .'- 2: 运行中。'."\n"
                                            .'- 3: 成功。'."\n"
                                            .'- 4: 失败。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'TargetPath' => [
                                        'title' => '输出数据路径，需要为空目录。',
                                        'description' => '输出数据路径，需要为空目录。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                    ],
                                    'TrainingJobId' => [
                                        'title' => '关联训练任务。',
                                        'description' => '关联训练任务。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'UserConfig' => [
                                        'title' => '用户配置。',
                                        'description' => '用户配置。',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"GroupId\\": \\"bdb0b117-3354-4ceb-ba75-e022dd9370d8\\",\\n    \\"History\\": \\"Error: Missing Column.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TargetPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"TrainingJobId\\": \\"123\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{}\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '创建预测任务',
            'description' => '在使用前需要在网页端一键授权OSS访问权限，并将需要访问的OSS Bucket添加pai=plugin的标签，请参考[OSS添加标签](https://help.aliyun.com/document_detail/133826.html)。  '."\n"
                .'预测任务输出的csv文件不包含header，每列分别表示：user\\_id，item\\_id，phone，score。',
        ],
        'DeleteInferenceJob' => [
            'summary' => '删除预测任务。',
            'path' => '/api/v2/inference/jobs/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '129056',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '预测任务Id，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务Id。',
                        'description' => '预测任务ID，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功删除预测任务Id。',
                        'description' => '成功删除预测任务。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除预测任务',
        ],
        'ListInferenceJobs' => [
            'summary' => '获取预测任务列表。',
            'path' => '/api/v2/inference/jobs',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129066',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'CampaignId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '归属运营活动过滤。',
                        'description' => '归属运营活动过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预测任务名称过滤。',
                        'description' => '预测任务名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VIP客户',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预测任务备注过滤。',
                        'description' => '预测任务备注过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '充值大于一万',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '预测任务状态过滤。'."\n"
                            .'- 0: 队列中。'."\n"
                            .'- 1: 已提交。'."\n"
                            .'- 2: 运行中。'."\n"
                            .'- 3: 成功。'."\n"
                            .'- 4: 失败。',
                        'description' => '预测任务状态过滤。'."\n"
                            .'- 0: 队列中。'."\n"
                            .'- 1: 已提交。'."\n"
                            .'- 2: 运行中。'."\n"
                            .'- 3: 成功。'."\n"
                            .'- 4: 失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'CampaignName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'example' => '双11活动',
                    ],
                ],
                [
                    'name' => 'TrainingJobName',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test_job',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取预测任务列表。',
                        'description' => '成功获取预测任务列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'InferenceJobs' => [
                                        'title' => '预测任务列表。',
                                        'description' => '预测任务列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Algorithm' => [
                                                    'title' => '关联算法。',
                                                    'description' => '关联算法。',
                                                    'type' => 'string',
                                                    'example' => 'user_recall',
                                                ],
                                                'CampaignId' => [
                                                    'title' => '关联运营活动ID。',
                                                    'description' => '关联运营活动ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'DataPath' => [
                                                    'title' => '预测数据路径，当预测人群数据分布在多个csv文件时可指定目录，指定路径前需确保已在控制台完成一键授权。',
                                                    'description' => '预测数据路径。',
                                                    'type' => 'string',
                                                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                                ],
                                                'GroupId' => [
                                                    'title' => '预测人群，人群来源必须为多列csv，当同时指定DataPath与GroupId时，以GroupId为准。',
                                                    'description' => '关联人群ID，如果任务失败则人群无效。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'History' => [
                                                    'title' => '预测任务日志。',
                                                    'description' => '预测任务日志。',
                                                    'type' => 'string',
                                                    'example' => 'Error: Missing Column.',
                                                ],
                                                'Id' => [
                                                    'title' => '预测任务ID。',
                                                    'description' => '预测任务ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '预测任务名称。',
                                                    'description' => '预测任务名称。',
                                                    'type' => 'string',
                                                    'example' => 'VIP客户',
                                                ],
                                                'Remark' => [
                                                    'title' => '备注。',
                                                    'description' => '备注。',
                                                    'type' => 'string',
                                                    'example' => '充值大于一万',
                                                ],
                                                'Status' => [
                                                    'title' => '预测任务状态。'."\n"
                                                        .'- 0: 队列中。'."\n"
                                                        .'- 1: 已提交。'."\n"
                                                        .'- 2: 运行中。'."\n"
                                                        .'- 3: 成功。'."\n"
                                                        .'- 4: 失败。',
                                                    'description' => '预测任务状态。'."\n"
                                                        .'- 0: 队列中。'."\n"
                                                        .'- 1: 已提交。'."\n"
                                                        .'- 2: 运行中。'."\n"
                                                        .'- 3: 成功。'."\n"
                                                        .'- 4: 失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '3',
                                                ],
                                                'TargetGroupId' => [
                                                    'title' => '关联目标人群ID，如果任务失败则人群无效。',
                                                    'description' => '关联目标人群ID，如果任务失败则人群无效。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'TargetPath' => [
                                                    'title' => '输出数据路径，需要为空目录，指定路径前需确保已在控制台完成一键授权。',
                                                    'description' => '输出数据路径，需要为空目录。',
                                                    'type' => 'string',
                                                    'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                                ],
                                                'TrainingJobId' => [
                                                    'title' => '关联训练任务。',
                                                    'description' => '关联训练任务。',
                                                    'type' => 'string',
                                                    'example' => '123',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'UserConfig' => [
                                                    'title' => '用户配置。',
                                                    'description' => '用户配置。',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总预测任务数量。',
                                        'description' => '总预测任务数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"InferenceJobs\\": [\\n      {\\n        \\"Algorithm\\": \\"user_recall\\",\\n        \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n        \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"History\\": \\"Error: Missing Column.\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"Remark\\": \\"充值大于一万\\",\\n        \\"Status\\": 3,\\n        \\"TargetGroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"TargetPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n        \\"TrainingJobId\\": \\"123\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"UserConfig\\": \\"{}\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取预测任务列表',
        ],
        'GetInferenceJob' => [
            'summary' => '获取预测任务详情。',
            'path' => '/api/v2/inference/jobs/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129061',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '预测任务Id，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务Id。',
                        'description' => '预测任务Id，可通过ListInferenceJobs查询账号下的预测任务列表，获取预测任务Id。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取预测任务详情。',
                        'description' => '成功获取预测任务详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithm' => [
                                        'title' => '关联算法。',
                                        'description' => '关联算法。',
                                        'type' => 'string',
                                        'example' => 'user_recall',
                                    ],
                                    'CampaignId' => [
                                        'title' => '关联运营活动Id。',
                                        'description' => '关联运营活动Id。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'DataPath' => [
                                        'title' => '预测数据路径。',
                                        'description' => '预测数据路径。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                    ],
                                    'GroupId' => [
                                        'title' => '关联人群Id，如果任务失败则人群无效。',
                                        'description' => '关联人群Id，如果任务失败则人群无效。',
                                        'type' => 'string',
                                        'example' => '0197261b-30e6-467b-83d6-7f72af868b03',
                                    ],
                                    'History' => [
                                        'title' => '预测任务日志。',
                                        'description' => '预测任务日志。',
                                        'type' => 'string',
                                        'example' => 'Error: Missing Column.',
                                    ],
                                    'Id' => [
                                        'title' => '预测任务Id。',
                                        'description' => '预测任务Id。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '预测任务名称。',
                                        'description' => '预测任务名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'Remark' => [
                                        'title' => '备注。',
                                        'description' => '备注。',
                                        'type' => 'string',
                                        'example' => '充值大于一万',
                                    ],
                                    'Status' => [
                                        'title' => '预测任务状态。',
                                        'description' => '预测任务状态。'."\n"
                                            .'- 0: 队列中。'."\n"
                                            .'- 1: 已提交。'."\n"
                                            .'- 2: 运行中。'."\n"
                                            .'- 3: 成功。'."\n"
                                            .'- 4: 失败。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'TargetPath' => [
                                        'title' => '输出数据路径，需要为空目录。',
                                        'description' => '输出数据路径，需要为空目录。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/',
                                    ],
                                    'TrainingJobId' => [
                                        'title' => '关联训练任务。',
                                        'description' => '关联训练任务。',
                                        'type' => 'string',
                                        'example' => '123',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'UserConfig' => [
                                        'title' => '用户配置。',
                                        'description' => '用户配置。',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"DataPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"GroupId\\": \\"0197261b-30e6-467b-83d6-7f72af868b03\\",\\n    \\"History\\": \\"Error: Missing Column.\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"Remark\\": \\"充值大于一万\\",\\n    \\"Status\\": 3,\\n    \\"TargetPath\\": \\"https://bucket.region.aliyuncs.com/folder/\\",\\n    \\"TrainingJobId\\": \\"123\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"UserConfig\\": \\"{}\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取预测任务详情',
        ],
        'CreateGroup' => [
            'summary' => '创建人群。',
            'path' => '/api/v2/groups',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '129051',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'Algorithm' => [
                                'title' => '关联算法，人群来源为算法。',
                                'description' => '关联算法，人群来源为算法时需指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'user_recall',
                            ],
                            'Column' => [
                                'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'phone',
                            ],
                            'Filter' => [
                                'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                                'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'ds=20220101',
                            ],
                            'InferenceJobId' => [
                                'title' => '预测任务Id，人群来源为算法。',
                                'description' => '预测任务ID，人群来源为算法。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                            ],
                            'Name' => [
                                'title' => '人群名称。',
                                'description' => '人群名称。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'VIP客户',
                            ],
                            'PhoneNumber' => [
                                'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'Project' => [
                                'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'project',
                            ],
                            'Remark' => [
                                'title' => '人群备注。',
                                'description' => '人群备注。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '充值大于10万',
                            ],
                            'Source' => [
                                'title' => '人群来源。'."\n"
                                    .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                    .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                    .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                    .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                    .'- 4: 算法。',
                                'description' => '人群来源。'."\n"
                                    .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                    .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                    .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                    .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                    .'- 4: 算法。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'Table' => [
                                'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vip_recall',
                            ],
                            'Text' => [
                                'title' => '文本，人群来源为文本时需指定。',
                                'description' => '文本，人群来源为文本时需指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '1390000****',
                            ],
                            'Uri' => [
                                'title' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                                'description' => '文件地址，人群来源为文本文件，CSV文件时需指定。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功发起注册人群请求，可通过控制台或GetGroup获取人群检查状态。',
                        'description' => '成功发起注册人群请求，可通过控制台或GetGroup获取人群检查状态。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithm' => [
                                        'title' => '关联算法，人群来源为算法。',
                                        'description' => '关联算法，人群来源为算法。',
                                        'type' => 'string',
                                        'example' => 'user_recall',
                                    ],
                                    'Amount' => [
                                        'title' => '人群数量。',
                                        'description' => '人群数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Column' => [
                                        'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                        'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                        'type' => 'string',
                                        'example' => 'phone',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Filter' => [
                                        'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                                        'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                                        'type' => 'string',
                                        'example' => 'ds=20220101',
                                    ],
                                    'Id' => [
                                        'title' => '人群Id。',
                                        'description' => '人群Id。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'InferenceJobId' => [
                                        'title' => '预测任务Id，人群来源为算法。',
                                        'description' => '预测任务Id，人群来源为算法。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '人群名称。',
                                        'description' => '人群名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'PhoneNumber' => [
                                        'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                        'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                        'type' => 'boolean',
                                        'example' => '1390000****',
                                    ],
                                    'Project' => [
                                        'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                        'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                        'type' => 'string',
                                        'example' => 'project',
                                    ],
                                    'Remark' => [
                                        'title' => '人群备注。',
                                        'description' => '人群备注。',
                                        'type' => 'string',
                                        'example' => '充值大于10万',
                                    ],
                                    'Source' => [
                                        'title' => '人群来源。'."\n"
                                            .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                            .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                            .'- 4: 算法。',
                                        'description' => '人群来源。'."\n"
                                            .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                            .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                            .'- 4: 算法。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Status' => [
                                        'title' => '人群状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 已通过。'."\n"
                                            .'- 2: 未通过。',
                                        'description' => '人群状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 已通过。'."\n"
                                            .'- 2: 未通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Table' => [
                                        'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                        'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                        'type' => 'string',
                                        'example' => 'recall',
                                    ],
                                    'Text' => [
                                        'title' => '文本，人群来源为文本时需指定。',
                                        'description' => '文本，人群来源为文本时需指定。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Uri' => [
                                        'title' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                                        'description' => '文件地址，人群来源为文本文件，CSV文件时需指定。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"Amount\\": 0,\\n    \\"Column\\": \\"phone\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Filter\\": \\"ds=20220101\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"InferenceJobId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"PhoneNumber\\": true,\\n    \\"Project\\": \\"project\\",\\n    \\"Remark\\": \\"充值大于10万\\",\\n    \\"Source\\": 0,\\n    \\"Status\\": 0,\\n    \\"Table\\": \\"recall\\",\\n    \\"Text\\": \\"1390000****\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Uri\\": \\"https://bucket.region.aliyuncs.com/folder/file\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '创建人群',
            'description' => '在使用前需要在网页端一键授权OSS访问权限，并将需要访问的OSS Bucket添加pai=plugin的标签，请参考[OSS添加标签](https://help.aliyun.com/document_detail/133826.html)。',
        ],
        'DeleteGroup' => [
            'summary' => '删除人群。',
            'path' => '/api/v2/groups/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '129055',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'path',
                        'description' => '人群ID，可通过ListGroups获取人群列表，获取相应ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功。',
                        'description' => '成功。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除人群',
        ],
        'ListGroups' => [
            'summary' => '获取人群列表。',
            'path' => '/api/v2/groups',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129065',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '人群名称过滤。',
                        'description' => '人群名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'VIP客户',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否包含手机号过滤。',
                        'description' => '是否包含手机号过滤。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Remark',
                    'in' => 'query',
                    'schema' => [
                        'title' => '人群备注过滤。',
                        'description' => '人群备注过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '充值大于一万',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'title' => '来源过滤。',
                        'description' => '来源过滤。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '审核状态过滤。',
                        'description' => '审核状态过滤。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取人群列表。',
                        'description' => '成功获取人群列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Groups' => [
                                        'title' => '人群列表。',
                                        'description' => '人群列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Algorithm' => [
                                                    'title' => '关联算法，人群来源为算法。',
                                                    'description' => '关联算法，人群来源为算法。',
                                                    'type' => 'string',
                                                    'example' => 'user_recall',
                                                ],
                                                'Amount' => [
                                                    'title' => '人群数量。',
                                                    'description' => '人群数量。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Column' => [
                                                    'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                                    'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                                    'type' => 'string',
                                                    'example' => 'phone',
                                                ],
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'Filter' => [
                                                    'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                                                    'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                                                    'type' => 'string',
                                                    'example' => 'ds=2022',
                                                ],
                                                'Id' => [
                                                    'title' => '人群Id。',
                                                    'description' => '人群ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'InferenceJobId' => [
                                                    'title' => '预测任务Id，人群来源为算法。',
                                                    'description' => '预测任务ID，人群来源为算法。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '人群名称。',
                                                    'description' => '人群名称。',
                                                    'type' => 'string',
                                                    'example' => 'VIP客户',
                                                ],
                                                'PhoneNumber' => [
                                                    'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                                    'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Project' => [
                                                    'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                                    'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                                    'type' => 'string',
                                                    'example' => 'project',
                                                ],
                                                'Remark' => [
                                                    'title' => '人群备注。',
                                                    'description' => '人群备注。',
                                                    'type' => 'string',
                                                    'example' => '充值大于10万',
                                                ],
                                                'Source' => [
                                                    'title' => '人群来源。'."\n"
                                                        .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                                        .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                                        .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                                        .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                                        .'- 4: 算法。',
                                                    'description' => '人群来源。'."\n"
                                                        .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                                        .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                                        .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                                        .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                                        .'- 4: 算法。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Status' => [
                                                    'title' => '人群状态。'."\n"
                                                        .'- 0: 检查中。'."\n"
                                                        .'- 1: 已通过。'."\n"
                                                        .'- 2: 未通过。',
                                                    'description' => '人群状态。'."\n"
                                                        .'- 0: 检查中。'."\n"
                                                        .'- 1: 已通过。'."\n"
                                                        .'- 2: 未通过。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'Table' => [
                                                    'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                                    'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                                    'type' => 'string',
                                                    'example' => 'recall',
                                                ],
                                                'Text' => [
                                                    'title' => '文本，人群来源为文本时需指定。',
                                                    'description' => '文本，人群来源为文本时需指定。',
                                                    'type' => 'string',
                                                    'example' => '1390000****',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'Uri' => [
                                                    'title' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                                                    'description' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                                                    'type' => 'string',
                                                    'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'TotalCount' => [
                                        'title' => '总人群数量。',
                                        'description' => '总人群数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Groups\\": [\\n      {\\n        \\"Algorithm\\": \\"user_recall\\",\\n        \\"Amount\\": 0,\\n        \\"Column\\": \\"phone\\",\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Filter\\": \\"ds=2022\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"InferenceJobId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"VIP客户\\",\\n        \\"PhoneNumber\\": true,\\n        \\"Project\\": \\"project\\",\\n        \\"Remark\\": \\"充值大于10万\\",\\n        \\"Source\\": 0,\\n        \\"Status\\": 0,\\n        \\"Table\\": \\"recall\\",\\n        \\"Text\\": \\"1390000****\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"Uri\\": \\"https://bucket.region.aliyuncs.com/folder/file\\"\\n      }\\n    ],\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"TotalCount\\": 10\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取人群列表',
        ],
        'GetGroup' => [
            'summary' => '获取人群详情。',
            'path' => '/api/v2/groups/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129060',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '人群Id，可通过ListGroups查询账号下的人群列表，获取人群Id。',
                        'description' => '人群ID，可通过ListGroups查询账号下的人群列表，获取人群ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取人群详情。',
                        'description' => '成功获取人群详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'Algorithm' => [
                                        'title' => '关联算法，人群来源为算法。',
                                        'description' => '关联算法，人群来源为算法。',
                                        'type' => 'string',
                                        'example' => 'user_recall',
                                    ],
                                    'Amount' => [
                                        'title' => '人群数量。',
                                        'description' => '人群数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'CampaignId' => [
                                        'title' => '关联运营活动Id。',
                                        'description' => '关联运营活动ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Column' => [
                                        'title' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                        'description' => '手机号列名，人群来源为CSV文件，MaxCompute，并且包含手机号时需指定。',
                                        'type' => 'string',
                                        'example' => 'education',
                                    ],
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Filter' => [
                                        'title' => '过滤条件，人群来源为MaxCompute时可指定。',
                                        'description' => '过滤条件，人群来源为MaxCompute时可指定。',
                                        'type' => 'string',
                                        'example' => 'ds=2022',
                                    ],
                                    'History' => [
                                        'title' => '历史记录。',
                                        'description' => '历史记录。',
                                        'type' => 'string',
                                        'example' => 'Project not found - \'sms_test\'',
                                    ],
                                    'Id' => [
                                        'title' => '人群Id。',
                                        'description' => '人群ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'InferenceJobId' => [
                                        'title' => '预测任务Id，人群来源为算法。',
                                        'description' => '预测任务ID，人群来源为算法。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '人群名称。',
                                        'description' => '人群名称。',
                                        'type' => 'string',
                                        'example' => 'VIP客户',
                                    ],
                                    'PhoneNumber' => [
                                        'title' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                        'description' => '是否包含手机号，包含手机号的人群可用于触达计划。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Project' => [
                                        'title' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                        'description' => 'MaxCompute(ODPS)项目名，人群来源为MaxCompute时需指定。',
                                        'type' => 'string',
                                        'example' => 'project',
                                    ],
                                    'Remark' => [
                                        'title' => '人群备注。',
                                        'description' => '人群备注。',
                                        'type' => 'string',
                                        'example' => '充值大于10万',
                                    ],
                                    'Source' => [
                                        'title' => '人群来源。'."\n"
                                            .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                            .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 2: 多列CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 3: MaxCompute表，需指定手机号列名。'."\n"
                                            .'- 4: 算法。',
                                        'description' => '人群来源。'."\n"
                                            .'- 0: 文本，每行一个手机号，最多100个。'."\n"
                                            .'- 1: 文本文件，每行一个手机号，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 2: CSV文件，需指定手机号列名，可通过控制台上传或指定自定义OSS地址，指定自定义OSS地址前需确保已在控制台完成一键授权。'."\n"
                                            .'- 3: MaxCompute(ODPS)表，需指定手机号列名。'."\n"
                                            .'- 4: 算法。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Status' => [
                                        'title' => '人群状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 已通过。'."\n"
                                            .'- 2: 未通过。',
                                        'description' => '人群状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 已通过。'."\n"
                                            .'- 2: 未通过。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'Table' => [
                                        'title' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                        'description' => 'MaxCompute(ODPS)表名，人群来源为MaxCompute时需指定。',
                                        'type' => 'string',
                                        'example' => 'recall',
                                    ],
                                    'Text' => [
                                        'title' => '文本，人群来源为文本时需指定。',
                                        'description' => '文本，人群来源为文本时需指定。',
                                        'type' => 'string',
                                        'example' => '1390000****',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'Uri' => [
                                        'title' => '文件地址，人群来源为文本文件，CSV文件时需指定。',
                                        'description' => '文件地址，人群来源为文本文件，CSV文件，MaxCompute时需指定。',
                                        'type' => 'string',
                                        'example' => 'https://bucket.region.aliyuncs.com/folder/file',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"Algorithm\\": \\"user_recall\\",\\n    \\"Amount\\": 0,\\n    \\"CampaignId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Column\\": \\"education\\",\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Filter\\": \\"ds=2022\\",\\n    \\"History\\": \\"Project not found - \'sms_test\'\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"InferenceJobId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"VIP客户\\",\\n    \\"PhoneNumber\\": true,\\n    \\"Project\\": \\"project\\",\\n    \\"Remark\\": \\"充值大于10万\\",\\n    \\"Source\\": 0,\\n    \\"Status\\": 0,\\n    \\"Table\\": \\"recall\\",\\n    \\"Text\\": \\"1390000****\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"Uri\\": \\"https://bucket.region.aliyuncs.com/folder/file\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取人群详情',
        ],
        'CreateSchedule' => [
            'summary' => '创建触达计划。',
            'path' => '/api/v2/schedules',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'abilityTreeCode' => '129053',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'title' => '请求参数的主体信息。',
                        'description' => '请求参数的主体信息。',
                        'type' => 'object',
                        'properties' => [
                            'EndTime' => [
                                'title' => '终止时间（UTC+8）。',
                                'description' => '终止时间（UTC+8）。',
                                'type' => 'string',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '2020-01-01',
                            ],
                            'ExecuteTime' => [
                                'title' => '执行时间 (UTC+8)，为空立即执行。',
                                'description' => '执行时间 (UTC+8)，为空立即执行。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2020-01-01 12:00:00',
                            ],
                            'GroupId' => [
                                'title' => '人群ID。',
                                'description' => '人群ID。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                            ],
                            'Name' => [
                                'title' => '触达计划名称。',
                                'description' => '触达计划名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '增长-2021-0101',
                            ],
                            'RepeatCycle' => [
                                'title' => '重复周期，按重复周期与重复周期单位执行。',
                                'description' => '重复周期，按重复周期与重复周期单位执行。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'RepeatCycleUnit' => [
                                'title' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                    .'- 0: 从不（默认）。'."\n"
                                    .'- 1: 小时。'."\n"
                                    .'- 2: 天。'."\n"
                                    .'- 3: 周。'."\n"
                                    .'- 4: 月。',
                                'description' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                    .'- 0: 从不（默认）。'."\n"
                                    .'- 1: 小时。'."\n"
                                    .'- 2: 天。'."\n"
                                    .'- 3: 周。'."\n"
                                    .'- 4: 月。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '0',
                            ],
                            'RepeatTimes' => [
                                'title' => '重复次数。'."\n"
                                    .'- 0: 不设终止时间（默认）。'."\n"
                                    .'- N: 重复N次后终止。',
                                'description' => '重复次数。'."\n"
                                    .'- -1: 不设终止时间（默认）。'."\n"
                                    .'- 0: 不重复。'."\n"
                                    .'- N: 重复N次后终止。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1',
                            ],
                            'SignName' => [
                                'title' => '签名。',
                                'description' => '签名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PAI',
                            ],
                            'SignatureId' => [
                                'title' => '签名ID，或指定签名。',
                                'description' => '签名Id，或指定签名。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                            ],
                            'TemplateCode' => [
                                'title' => '模板Code。',
                                'description' => '模板Code。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'SMS_123456',
                            ],
                            'TemplateId' => [
                                'title' => '模板ID，或指定模板Code。',
                                'description' => '模板Id，或指定模板Code。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                            ],
                            'AISendStartDate' => [
                                'description' => '智能发送开始时间。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2020-01-01 12:00:00'."\n",
                            ],
                            'AISendEndDate' => [
                                'description' => '智能发送结束时间。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '2020-01-01 12:00:00'."\n",
                            ],
                            'PaymentType' => [
                                'description' => '计费类型（为空时默认后付费）。'."\n"
                                    ."\n"
                                    .'- PayAsYouGo：后付费'."\n"
                                    .'- Subscription：预付费',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PayAsYouGo',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => '成功注册短信触达计划，可通过控制台或GetSchedule获取短信触达计划检查与触达情况。',
                        'description' => '成功注册触达计划，可通过控制台或GetSchedule获取触达计划检查与触达情况。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'EndTime' => [
                                        'title' => '终止时间（UTC+8）。',
                                        'description' => '终止时间（UTC+8）。',
                                        'type' => 'string',
                                        'format' => 'int32',
                                        'example' => '2020-01-01',
                                    ],
                                    'ExecuteTime' => [
                                        'title' => '执行时间 (UTC+8)，为空立即执行。',
                                        'description' => '执行时间 (UTC+8)，为空立即执行。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'GroupId' => [
                                        'title' => '人群ID。',
                                        'description' => '人群ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Id' => [
                                        'title' => '触达计划ID。',
                                        'description' => '触达计划ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '触达计划名称。',
                                        'description' => '触达计划名称。',
                                        'type' => 'string',
                                        'example' => '增长-2021-0101',
                                    ],
                                    'RepeatCycle' => [
                                        'title' => '重复周期，按重复周期与重复周期单位执行。',
                                        'description' => '重复周期，按重复周期与重复周期单位执行。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RepeatCycleUnit' => [
                                        'title' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                            .'- 0: 从不（默认）。'."\n"
                                            .'- 1: 小时。'."\n"
                                            .'- 2: 天。'."\n"
                                            .'- 3: 周。'."\n"
                                            .'- 4: 月。',
                                        'description' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                            .'- 0: 从不（默认）。'."\n"
                                            .'- 1: 小时。'."\n"
                                            .'- 2: 天。'."\n"
                                            .'- 3: 周。'."\n"
                                            .'- 4: 月。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RepeatTimes' => [
                                        'title' => '重复次数。'."\n"
                                            .'- 0: 不设终止时间（默认）。'."\n"
                                            .'- N: 重复N次后终止。',
                                        'description' => '重复次数。'."\n"
                                            .'- -1: 不设终止时间（默认）。'."\n"
                                            .'- 0: 不重复。'."\n"
                                            .'- N: 重复N次后终止。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'SignName' => [
                                        'title' => '签名。',
                                        'description' => '签名。',
                                        'type' => 'string',
                                        'example' => 'PAI',
                                    ],
                                    'SignatureId' => [
                                        'title' => '签名ID，或指定签名。',
                                        'description' => '签名ID，或指定签名。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Status' => [
                                        'title' => '状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 检查成功。'."\n"
                                            .'- 2: 检查失败。'."\n"
                                            .'- 3: 发送中。'."\n"
                                            .'- 4: 发送成功。'."\n"
                                            .'- 5: 发送失败。',
                                        'description' => '状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 检查成功。'."\n"
                                            .'- 2: 检查失败。'."\n"
                                            .'- 3: 发送中。'."\n"
                                            .'- 4: 发送成功。'."\n"
                                            .'- 5: 发送失败。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'TemplateCode' => [
                                        'title' => '模板Code。',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => 'SMS_123456',
                                    ],
                                    'TemplateId' => [
                                        'title' => '模板ID，或指定模板Code。',
                                        'description' => '模板ID，或指定模板Code。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"EndTime\\": \\"2020-01-01\\",\\n    \\"ExecuteTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"增长-2021-0101\\",\\n    \\"RepeatCycle\\": 0,\\n    \\"RepeatCycleUnit\\": 0,\\n    \\"RepeatTimes\\": 1,\\n    \\"SignName\\": \\"PAI\\",\\n    \\"SignatureId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"TemplateId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '创建触达计划',
        ],
        'DeleteSchedule' => [
            'summary' => '删除发送计划。',
            'path' => '/api/v2/schedules/{Id}',
            'methods' => [
                'delete',
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'abilityTreeCode' => '129057',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '触达计划Id，可通过ListSchedules查询账号下的触达计划列表，获取触达计划Id。',
                        'description' => '触达计划ID，可通过ListSchedules查询账号下的触达计划列表，获取触达计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功删除触达计划。',
                        'description' => '成功删除触达计划。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": \\"OK\\",\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '删除发送计划',
        ],
        'ListSchedules' => [
            'summary' => '获取发送计划列表。',
            'path' => '/api/v2/schedules',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129067',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '触达计划名称过滤。',
                        'description' => '触达计划名称过滤。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用户增长',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '分页数，从1开始，默认为1。',
                        'description' => '分页数，从1开始，默认为1。',
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
                        'title' => '分页大小，默认为10。',
                        'description' => '分页大小，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'title' => '发送状态过滤。'."\n"
                            .'- 0：检查中。'."\n"
                            .'- 1：检查成功。'."\n"
                            .'- 2：检查失败。'."\n"
                            .'- 3：发送中。'."\n"
                            .'- 4：发送成功。'."\n"
                            .'- 5：发送失败。',
                        'description' => '发送状态过滤。'."\n"
                            .'- 0: 检查中。'."\n"
                            .'- 1: 检查成功。'."\n"
                            .'- 2: 检查失败。'."\n"
                            .'- 3: 发送中。'."\n"
                            .'- 4: 发送成功。'."\n"
                            .'- 5: 发送失败。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '成功获取短信触达计划列表。',
                        'description' => '成功获取触达计划列表。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'PageNumber' => [
                                        'title' => '分页数，从1开始，默认为1。',
                                        'description' => '分页数，从1开始，默认为1。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'title' => '分页大小，默认为10。',
                                        'description' => '分页大小，默认为10。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                    'Schedules' => [
                                        'title' => '触达计划列表。',
                                        'description' => '触达计划列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'CreatedTime' => [
                                                    'title' => '创建时间 (UTC+8)。',
                                                    'description' => '创建时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'EndTime' => [
                                                    'title' => '终止时间（UTC+8）。',
                                                    'description' => '终止时间（UTC+8）。',
                                                    'type' => 'string',
                                                    'format' => 'int32',
                                                    'example' => '2020-01-01',
                                                ],
                                                'ExecuteTime' => [
                                                    'title' => '执行时间 (UTC+8)，为空立即执行。',
                                                    'description' => '执行时间 (UTC+8)，为空立即执行。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                                'GroupId' => [
                                                    'title' => '人群ID。',
                                                    'description' => '人群ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Id' => [
                                                    'title' => '触达计划ID。',
                                                    'description' => '触达计划ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Name' => [
                                                    'title' => '触达计划名称。',
                                                    'description' => '触达计划名称。',
                                                    'type' => 'string',
                                                    'example' => '增长-2021-0101',
                                                ],
                                                'RepeatCycle' => [
                                                    'title' => '重复周期，按重复周期与重复周期单位执行。',
                                                    'description' => '重复周期，按重复周期与重复周期单位执行。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'RepeatCycleUnit' => [
                                                    'title' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                                        .'- 0: 从不（默认）。'."\n"
                                                        .'- 1: 小时。'."\n"
                                                        .'- 2: 天。'."\n"
                                                        .'- 3: 周。'."\n"
                                                        .'- 4: 月。',
                                                    'description' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                                        .'- 0: 从不（默认）。'."\n"
                                                        .'- 1: 小时。'."\n"
                                                        .'- 2: 天。'."\n"
                                                        .'- 3: 周。'."\n"
                                                        .'- 4: 月。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'RepeatTimes' => [
                                                    'title' => '重复次数。'."\n"
                                                        .'- 0: 不设终止时间（默认）。'."\n"
                                                        .'- N: 重复N次后终止。',
                                                    'description' => '重复次数。'."\n"
                                                        .'- -1: 不设终止时间（默认）。'."\n"
                                                        .'- 0: 不重复。'."\n"
                                                        .'- N: 重复N次后终止。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'SignName' => [
                                                    'title' => '签名。',
                                                    'description' => '签名。',
                                                    'type' => 'string',
                                                    'example' => 'PAI',
                                                ],
                                                'SignatureId' => [
                                                    'title' => '签名ID，或指定签名。',
                                                    'description' => '签名ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'Status' => [
                                                    'title' => '状态。'."\n"
                                                        .'- 0: 检查中。'."\n"
                                                        .'- 1: 检查成功。'."\n"
                                                        .'- 2: 检查失败。'."\n"
                                                        .'- 3: 发送中。'."\n"
                                                        .'- 4: 发送成功。'."\n"
                                                        .'- 5: 发送失败。',
                                                    'description' => '状态。'."\n"
                                                        .'- 0: 检查中。'."\n"
                                                        .'- 1: 检查成功。'."\n"
                                                        .'- 2: 检查失败。'."\n"
                                                        .'- 3: 发送中。'."\n"
                                                        .'- 4: 发送成功。'."\n"
                                                        .'- 5: 发送失败。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'TemplateCode' => [
                                                    'title' => '模板Code。',
                                                    'description' => '模板Code。',
                                                    'type' => 'string',
                                                    'example' => 'SMS_123456',
                                                ],
                                                'TemplateId' => [
                                                    'title' => '模板ID，或指定模板Code。',
                                                    'description' => '模板ID。',
                                                    'type' => 'string',
                                                    'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                                ],
                                                'UpdatedTime' => [
                                                    'title' => '更新时间 (UTC+8)。',
                                                    'description' => '更新时间 (UTC+8)。',
                                                    'type' => 'string',
                                                    'example' => '2020-01-01 12:00:00',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalCount' => [
                                        'title' => '触达计划数量。',
                                        'description' => '触达计划数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10,\\n    \\"Schedules\\": [\\n      {\\n        \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"EndTime\\": \\"2020-01-01\\",\\n        \\"ExecuteTime\\": \\"2020-01-01 12:00:00\\",\\n        \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Name\\": \\"增长-2021-0101\\",\\n        \\"RepeatCycle\\": 0,\\n        \\"RepeatCycleUnit\\": 0,\\n        \\"RepeatTimes\\": 1,\\n        \\"SignName\\": \\"PAI\\",\\n        \\"SignatureId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"Status\\": 0,\\n        \\"TemplateCode\\": \\"SMS_123456\\",\\n        \\"TemplateId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n        \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\"\\n      }\\n    ],\\n    \\"TotalCount\\": 0\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取发送计划列表',
        ],
        'GetSchedule' => [
            'summary' => '获取发送计划详情。',
            'path' => '/api/v2/schedules/{Id}',
            'methods' => [
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
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'abilityTreeCode' => '129062',
                'abilityTreeNodes' => [
                    'FEATURElearn5SOS0Q',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'path',
                    'schema' => [
                        'title' => '短信触达计划ID，可通过ListSchedules查询账号下的短信触达计划列表，获取短信触达计划ID。',
                        'description' => '触达计划ID，可通过ListSchedules查询账号下的触达计划列表，获取触达计划ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0bddaf8f-5628-427a-8652-5e24f6b4c35d',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'headers' => [],
                    'schema' => [
                        'title' => '成功获取短信触达计划详情。',
                        'description' => '成功获取触达计划详情。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedTime' => [
                                        'title' => '创建时间 (UTC+8)。',
                                        'description' => '创建时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'EndTime' => [
                                        'title' => '终止时间（UTC+8）。',
                                        'description' => '终止时间（UTC+8）。',
                                        'type' => 'string',
                                        'format' => 'int32',
                                        'example' => '2020-01-01',
                                    ],
                                    'ExecuteTime' => [
                                        'title' => '执行时间 (UTC+8)，为空立即执行。',
                                        'description' => '执行时间 (UTC+8)，为空立即执行。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'GroupId' => [
                                        'title' => '人群ID。',
                                        'description' => '人群ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'History' => [
                                        'title' => '历史记录。',
                                        'description' => '历史记录。',
                                        'type' => 'string',
                                        'example' => 'string',
                                    ],
                                    'Id' => [
                                        'title' => '触达计划ID。',
                                        'description' => '触达计划ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Name' => [
                                        'title' => '触达计划名称。',
                                        'description' => '触达计划名称。',
                                        'type' => 'string',
                                        'example' => '增长-2021-0101',
                                    ],
                                    'RepeatCycle' => [
                                        'title' => '重复周期，按重复周期与重复周期单位执行。',
                                        'description' => '重复周期，按重复周期与重复周期单位执行。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RepeatCycleUnit' => [
                                        'title' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                            .'- 0: 从不（默认）。'."\n"
                                            .'- 1: 小时。'."\n"
                                            .'- 2: 天。'."\n"
                                            .'- 3: 周。'."\n"
                                            .'- 4: 月。',
                                        'description' => '重复周期单位，若指定执行时间，则重复周期生效。'."\n"
                                            .'- 0: 从不（默认）。'."\n"
                                            .'- 1: 小时。'."\n"
                                            .'- 2: 天。'."\n"
                                            .'- 3: 周。'."\n"
                                            .'- 4: 月。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'RepeatTimes' => [
                                        'title' => '重复次数。'."\n"
                                            .'- 0: 不设终止时间（默认）。'."\n"
                                            .'- N: 重复N次后终止。',
                                        'description' => '重复次数。'."\n"
                                            .'- -1: 不设终止时间（默认）。'."\n"
                                            .'- 0: 不重复。'."\n"
                                            .'- N: 重复N次后终止。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'SignName' => [
                                        'title' => '签名。',
                                        'description' => '签名。',
                                        'type' => 'string',
                                        'example' => 'PAI',
                                    ],
                                    'SignatureId' => [
                                        'title' => '签名ID，或指定签名。',
                                        'description' => '签名ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'Status' => [
                                        'title' => '状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 检查成功。'."\n"
                                            .'- 2: 检查失败。'."\n"
                                            .'- 3: 发送中。'."\n"
                                            .'- 4: 发送成功。'."\n"
                                            .'- 5: 发送失败。',
                                        'description' => '状态。'."\n"
                                            .'- 0: 检查中。'."\n"
                                            .'- 1: 检查成功。'."\n"
                                            .'- 2: 检查失败。'."\n"
                                            .'- 3: 发送中。'."\n"
                                            .'- 4: 发送成功。'."\n"
                                            .'- 5: 发送失败。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'TemplateCode' => [
                                        'title' => '模板Code。',
                                        'description' => '模板Code。',
                                        'type' => 'string',
                                        'example' => 'SMS_123456',
                                    ],
                                    'TemplateId' => [
                                        'title' => '模板ID，或指定模板Code。',
                                        'description' => '模板ID。',
                                        'type' => 'string',
                                        'example' => '0a54e195-03e2-40bd-869d-b71cb302783e',
                                    ],
                                    'UpdatedTime' => [
                                        'title' => '更新时间 (UTC+8)。',
                                        'description' => '更新时间 (UTC+8)。',
                                        'type' => 'string',
                                        'example' => '2020-01-01 12:00:00',
                                    ],
                                    'PaymentType' => [
                                        'type' => 'string',
                                        'example' => 'Subscription',
                                    ],
                                ],
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
                400 => [
                    'schema' => [
                        'title' => '失败，原因见ErrorMessage，错误码见Data。',
                        'description' => '失败，原因见ErrorMessage，错误码见Data。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '返回数据。',
                                'description' => '返回数据。',
                                'type' => 'string',
                            ],
                            'ErrorCode' => [
                                'title' => '错误码。',
                                'description' => '错误码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '0',
                            ],
                            'ErrorMessage' => [
                                'title' => '错误信息。',
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'RequestId' => [
                                'title' => '请求ID。',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'f8651828-609d-4de8-ab49-ab781d7fd85a',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"CreatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"EndTime\\": \\"2020-01-01\\",\\n    \\"ExecuteTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"GroupId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"History\\": \\"string\\",\\n    \\"Id\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Name\\": \\"增长-2021-0101\\",\\n    \\"RepeatCycle\\": 0,\\n    \\"RepeatCycleUnit\\": 0,\\n    \\"RepeatTimes\\": 1,\\n    \\"SignName\\": \\"PAI\\",\\n    \\"SignatureId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"Status\\": 0,\\n    \\"TemplateCode\\": \\"SMS_123456\\",\\n    \\"TemplateId\\": \\"0a54e195-03e2-40bd-869d-b71cb302783e\\",\\n    \\"UpdatedTime\\": \\"2020-01-01 12:00:00\\",\\n    \\"PaymentType\\": \\"Subscription\\"\\n  },\\n  \\"ErrorCode\\": 0,\\n  \\"ErrorMessage\\": \\"OK\\",\\n  \\"RequestId\\": \\"f8651828-609d-4de8-ab49-ab781d7fd85a\\"\\n}","type":"json"}]',
            'title' => '获取发送计划详情',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paiplugin.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
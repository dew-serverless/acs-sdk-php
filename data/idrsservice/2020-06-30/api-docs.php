<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'idrsservice',
        'version' => '2020-06-30',
    ],
    'directories' => [
        [
            'id' => 168945,
            'title' => '签名',
            'type' => 'directory',
            'children' => [
                'CreateSignature',
            ],
        ],
        [
            'id' => 168947,
            'title' => '水印',
            'type' => 'directory',
            'children' => [
                'GetWatermark',
            ],
        ],
        [
            'id' => 168949,
            'title' => '检测流程',
            'type' => 'directory',
            'children' => [
                'GetDetectProcess',
                'GetDetectProcessJsonFile',
            ],
        ],
        [
            'id' => 168952,
            'title' => '双录结果',
            'type' => 'directory',
            'children' => [
                'GetRecordResult',
            ],
        ],
        [
            'id' => 168954,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'AssociateRoom',
                'CreateApp',
                'CreateDepartment',
                'CreateDetectProcess',
                'CreateRule',
                'CreateTaskGroup',
                'CreateUserDepartments',
                'CreateWatermark',
                'DeleteApp',
                'DeleteDepartment',
                'DeleteDetectProcess',
                'DeleteRule',
                'DeleteUser',
                'DeleteUserDepartments',
                'DeleteWatermark',
                'GetApp',
                'GetDepartment',
                'GetDetection',
                'GetPreSignedUrl',
                'GetRule',
                'GetTask',
                'GetTaskGroup',
                'GetUser',
                'GetVideoMergeTask',
                'ListApps',
                'ListDepartments',
                'ListDetections',
                'ListDetectProcesses',
                'ListFiles',
                'ListRecordResults',
                'ListRules',
                'ListTaskGroups',
                'ListTaskItems',
                'ListTasks',
                'ListUsers',
                'ListWatermarks',
                'RenameDetectProcess',
                'UpdateApp',
                'UpdateDepartment',
                'UpdateDetectProcess',
                'UpdateRule',
                'UpdateUser',
                'UpdateWatermark',
                'UploadReport',
                'GetRecordsByFeeId',
                'GetStatisticsRecordsByFeeId',
                'AsrSentence',
                'FaceCompare',
                'TtsCommon',
                'TtsTask',
                'LeaveRoom',
                'FaceRecognize',
                'FaceLiveness',
                'CreateTtsQuestionGroup',
                'GetAsrResult',
                'JoinRoom',
                'CreateTtsQuestion',
                'AsrTask',
                'GetTtsQuestionByGroupId',
                'GetRecordsByOuterBusinessId',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateSignature' => [
            'summary' => '创建rtc签名',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '质检应用Id',
                        'description' => '质检应用 ID',
                        'type' => 'string',
                        'required' => true,
                        'maximum' => '9223372036854775807',
                        'exclusiveMaximum' => true,
                        'minimum' => '0',
                        'exclusiveMinimum' => true,
                        'example' => '5bbfb884-1186-4d48-906b-88d586770f6b',
                    ],
                ],
                [
                    'name' => 'ExpireTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '过期时间，单位秒，默认时间300s',
                        'description' => '过期时间，单位秒，默认时间 300s',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '300',
                    ],
                ],
                [
                    'name' => 'Uid',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'rtc用户id',
                        'description' => 'rtc 用户 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '550070734466****',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.001',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<MrtcSignDTO>',
                        'description' => 'ApiResult<MrtcSignDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'RtcAppId' => [
                                        'description' => 'mrtc 应用 ID',
                                        'type' => 'string',
                                        'example' => '124325213125435',
                                    ],
                                    'RtcWorkspaceId' => [
                                        'description' => 'mrtc 工作空间',
                                        'type' => 'string',
                                        'example' => 'my_workspace',
                                    ],
                                    'RtcBizName' => [
                                        'description' => 'mrtc 业务名',
                                        'type' => 'string',
                                        'example' => '音视频biz',
                                    ],
                                    'RtcSign' => [
                                        'description' => 'mrtc 签名',
                                        'type' => 'string',
                                        'example' => '字符串签名token',
                                    ],
                                    'ExpireTime' => [
                                        'description' => '过期时间（单位：毫秒）',
                                        'type' => 'string',
                                        'example' => '300',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '无',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"RtcAppId\\": \\"124325213125435\\",\\n    \\"RtcWorkspaceId\\": \\"my_workspace\\",\\n    \\"RtcBizName\\": \\"音视频biz\\",\\n    \\"RtcSign\\": \\"字符串签名token\\",\\n    \\"ExpireTime\\": \\"300\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '创建 mrtc 签名',
        ],
        'GetWatermark' => [
            'summary' => '根据ID查询水印信息',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'WatermarkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '728fd812a876ec04818858982baebe6f',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.003',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<WatermarkDTO>',
                        'description' => 'ApiResult<WatermarkDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '水印id',
                                        'description' => '水印 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'CreatedAt' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Value' => [
                                        'title' => '水印信息',
                                        'description' => '水印信息',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Name' => [
                                        'title' => '水印名称',
                                        'description' => '水印名称',
                                        'type' => 'string',
                                        'example' => '名称',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '-',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Value\\": \\"{}\\",\\n    \\"Name\\": \\"名称\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取水印信息',
        ],
        'GetDetectProcess' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b87****',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '0q1c45cd-3eee-1e60-b505-2e330b8755d3',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Draft' => [
                                        'description' => '	'."\n"
                                            .'流程配置草稿内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-12-04T14:47:59.000+08:00',
                                    ],
                                    'Md5' => [
                                        'description' => '流程配置正式内容的 MD5',
                                        'type' => 'string',
                                        'example' => '987d563d38f5aef27feca8702c689bb1',
                                    ],
                                    'UpdatedAt' => [
                                        'description' => '更新时间',
                                        'type' => 'string',
                                        'example' => '2020-12-04T14:47:59.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '检测流程名称',
                                        'type' => 'string',
                                        'example' => 'Android检测流程',
                                    ],
                                    'NewVersion' => [
                                        'description' => '是否有新版本',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Content' => [
                                        'description' => '流程配置正式内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"0q1c45cd-3eee-1e60-b505-2e330b8755d3\\",\\n  \\"Data\\": {\\n    \\"Draft\\": \\"{}\\",\\n    \\"CreatedAt\\": \\"2020-12-04T14:47:59.000+08:00\\",\\n    \\"Md5\\": \\"987d563d38f5aef27feca8702c689bb1\\",\\n    \\"UpdatedAt\\": \\"2020-12-04T14:47:59.000+08:00\\",\\n    \\"Name\\": \\"Android检测流程\\",\\n    \\"NewVersion\\": true,\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId/>\\n<Message/>\\n<Data>\\n    <NewVersion>true</NewVersion>\\n    <Draft>{}</Draft>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-12-04T14:47:59.000+08:00</CreatedAt>\\n    <Id>0f1c45cd-3eee-4e60-b505-2e330b8755d3</Id>\\n    <UpdatedAt>2020-12-04T14:47:59.000+08:00</UpdatedAt>\\n    <Md5>987d563d38f5aef27feca8702c689bb1</Md5>\\n    <Name>Android检测流程</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '获取检测流程信息',
            'summary' => '通过 GetDetectProcess 获取检测流程。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDetectProcessJsonFile' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'hpsk3wdo-2020122319',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'B2695011-0604-5557-9E00-B74F58AB3F2B',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"B2695011-0604-5557-9E00-B74F58AB3F2B\\",\\n  \\"Data\\": \\"-\\",\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '获取检测流程配置的 JSON 文件',
        ],
        'GetRecordResult' => [
            'summary' => '根据ID查询录制信息',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '双录 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<RecordDTO>',
                        'description' => 'ApiResult<RecordDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '双录记录id',
                                        'description' => '双录记录 ID',
                                        'type' => 'string',
                                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                    ],
                                    'CreatedAt' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'DetectProcessName' => [
                                        'title' => '业务检测流程名',
                                        'description' => '业务检测流程名',
                                        'type' => 'string',
                                        'example' => 'XX流程',
                                    ],
                                    'DepartmentName' => [
                                        'title' => '部门名',
                                        'description' => '部门名',
                                        'type' => 'string',
                                        'example' => 'XX部门',
                                    ],
                                    'AppName' => [
                                        'title' => '应用名',
                                        'description' => '应用名',
                                        'type' => 'string',
                                        'example' => 'XX应用',
                                    ],
                                    'VideoUrl' => [
                                        'title' => '视频地址',
                                        'description' => '视频地址',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4',
                                    ],
                                    'MetaUrl' => [
                                        'title' => 'meta地址',
                                        'description' => 'meta 地址',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                    ],
                                    'ResultUrl' => [
                                        'title' => '结果地址',
                                        'description' => '结果地址',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                    ],
                                    'RecordAt' => [
                                        'title' => '录制时间',
                                        'description' => '录制时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Duration' => [
                                        'title' => '时长',
                                        'description' => '时长',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '22',
                                    ],
                                    'Status' => [
                                        'title' => '检测状态',
                                        'description' => '检测状态',
                                        'type' => 'string',
                                        'example' => 'completed',
                                    ],
                                    'RoomId' => [
                                        'title' => 'mrtc房间id',
                                        'description' => 'mrtc 房间 ID',
                                        'type' => 'string',
                                        'example' => '641981583353***',
                                    ],
                                    'RecordRoomList' => [
                                        'title' => '远程双录文件地址列表',
                                        'description' => '远程双录文件地址列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '房间列表',
                                            'type' => 'object',
                                            'properties' => [
                                                'Role' => [
                                                    'title' => '角色',
                                                    'description' => '角色',
                                                    'type' => 'string',
                                                    'example' => '21343',
                                                ],
                                                'RoomVideoUrl' => [
                                                    'title' => '视频地址',
                                                    'description' => '视频地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4',
                                                ],
                                                'RoomMetaUrl' => [
                                                    'title' => 'meta地址',
                                                    'description' => 'meta 地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                                ],
                                                'RoomResultUrl' => [
                                                    'title' => '结果地址',
                                                    'description' => '结果地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                                ],
                                                'RecordType' => [
                                                    'title' => '录制视频类型',
                                                    'description' => '录制视频类型',
                                                    'type' => 'string',
                                                    'example' => 'Mix',
                                                ],
                                                'RoomRecordAt' => [
                                                    'title' => '录制时间',
                                                    'description' => '录制时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'RoomStatus' => [
                                                    'title' => '检测状态',
                                                    'description' => '检测状态',
                                                    'type' => 'string',
                                                    'example' => 'runnable',
                                                ],
                                                'RtcRecordId' => [
                                                    'description' => 'mrtc录制ID',
                                                    'type' => 'string',
                                                    'example' => 'record_65703154805715668342'."\n",
                                                ],
                                                'OuterBusinessId' => [
                                                    'description' => '业务ID，用户自定义',
                                                    'type' => 'string',
                                                    'example' => 'ads32efef43',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'OuterBusinessId' => [
                                        'description' => '业务ID，用户自定义',
                                        'type' => 'string',
                                        'example' => 'ads32efef43',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '异常信息',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '无',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"DetectProcessName\\": \\"XX流程\\",\\n    \\"DepartmentName\\": \\"XX部门\\",\\n    \\"AppName\\": \\"XX应用\\",\\n    \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n    \\"MetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n    \\"ResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n    \\"RecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Duration\\": 22,\\n    \\"Status\\": \\"completed\\",\\n    \\"RoomId\\": \\"641981583353***\\",\\n    \\"RecordRoomList\\": [\\n      {\\n        \\"Role\\": \\"21343\\",\\n        \\"RoomVideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n        \\"RoomMetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n        \\"RoomResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n        \\"RecordType\\": \\"Mix\\",\\n        \\"RoomRecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"RoomStatus\\": \\"runnable\\",\\n        \\"RtcRecordId\\": \\"record_65703154805715668342\\\\n\\",\\n        \\"OuterBusinessId\\": \\"ads32efef43\\"\\n      }\\n    ],\\n    \\"OuterBusinessId\\": \\"ads32efef43\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取双录结果',
        ],
        'AssociateRoom' => [
            'summary' => '关联MRTC房间',
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
            'operationType' => 'readAndWrite',
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '质检应用id',
                        'description' => '质检应用 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5bbfb884-1186-4d48-906b-88d586770f6b',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '部门id',
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '5bbfb884-1186-4d48-906b-88d586770f6b',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Mrtc房间id',
                        'description' => 'mrtc 房间 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '5500707344661',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.002',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<String>',
                        'description' => 'ApiResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'string',
                                'example' => '{\'Name\': u\'\\u4ee3\\u7406\\u4eba\', \'CreatedAt\': \'2021-11-11T15:27:39.449+08:00\', \'Channel\': \'063756\', \'Id\': \'5ead2d7f-9e2c-4521-bac4-e37bd44b6a56\'}',
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": \\"{\'Name\': u\'\\\\\\\\u4ee3\\\\\\\\u7406\\\\\\\\u4eba\', \'CreatedAt\': \'2021-11-11T15:27:39.449+08:00\', \'Channel\': \'063756\', \'Id\': \'5ead2d7f-9e2c-4521-bac4-e37bd44b6a56\'}\\",\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"-\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => 'mrtc录制信息上传',
        ],
        'CreateApp' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '测试应用',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.test.app',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4367c30a-c686-4bb2-a45d-5affb87f7aca',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于保证请求的幂等性。由客户端生成该参数值，要保证在不同请求间唯一，最大不超过64个ASCII字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '4367c30a-c686-4bb2-a45d-5affb87****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'CreatorName' => [
                                        'description' => '创建者名称',
                                        'type' => 'string',
                                        'example' => '李李',
                                    ],
                                    'Disabled' => [
                                        'description' => '是否禁用',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '应用名',
                                        'type' => 'string',
                                        'example' => '应用1',
                                    ],
                                    'Id' => [
                                        'description' => '应用 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'data' => [
                                'type' => 'object',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'errors' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'message' => [
                                            'type' => 'string',
                                        ],
                                        'field' => [
                                            'type' => 'string',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"CreatorName\\": \\"李李\\",\\n    \\"Disabled\\": false,\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"应用1\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <Disabled>false</Disabled>\\n    <CreatorName>李李</CreatorName>\\n    <Name>应用1</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'CreateApp',
            'summary' => '调用 CreateApp 创建应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDepartment' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Description',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '说明',
                    ],
                ],
                [
                    'name' => 'Label',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '标签',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '部门名称',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端幂等参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '11111111',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'description' => '部门描述',
                                        'type' => 'string',
                                        'example' => '这是一个部门',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '测试',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '部门名称',
                                        'type' => 'string',
                                        'example' => '技术部',
                                    ],
                                    'Id' => [
                                        'description' => '部门 ID',
                                        'type' => 'string',
                                        'example' => '63bb629d-92bf-4cdc-ad0b-3032c926d23f',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"11111111\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Description\\": \\"这是一个部门\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"技术部\\",\\n    \\"Id\\": \\"63bb629d-92bf-4cdc-ad0b-3032c926d23f\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Message>11111111</Message>\\n<Data>\\n    <Description>这是一个部门</Description>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Id>63bb629d-92bf-4cdc-ad0b-3032c926d23f</Id>\\n    <Name>技术部</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'CreateDepartment',
            'summary' => '调用 CreateDepartment 创建部门。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateDetectProcess' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测流程名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Android检测流程',
                    ],
                ],
                [
                    'name' => 'Draft',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程配置草稿内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程配置正式内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型：remote（远程双录），local（本地双录）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOCAL',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '0q1c45cd-3eee-1e60-b505-2e330b8755d3',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Draft' => [
                                        'description' => '流程配置草稿内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-12-04T14:47:59.000+08:00',
                                    ],
                                    'Disabled' => [
                                        'description' => '有效状态',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Md5' => [
                                        'description' => '流程配置正式内容的 MD5',
                                        'type' => 'string',
                                        'example' => '987d563d38f5aef27feca8702c689bb1',
                                    ],
                                    'Name' => [
                                        'description' => '检测流程的名称',
                                        'type' => 'string',
                                        'example' => 'Android检测流程',
                                    ],
                                    'Content' => [
                                        'description' => '流程配置正式内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"0q1c45cd-3eee-1e60-b505-2e330b8755d3\\",\\n  \\"Data\\": {\\n    \\"Draft\\": \\"{}\\",\\n    \\"CreatedAt\\": \\"2020-12-04T14:47:59.000+08:00\\",\\n    \\"Disabled\\": false,\\n    \\"Md5\\": \\"987d563d38f5aef27feca8702c689bb1\\",\\n    \\"Name\\": \\"Android检测流程\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0q1c45cd-3eee-1e60-b505-2e330b8755d3</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <Draft>{}</Draft>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-12-04T14:47:59.000+08:00</CreatedAt>\\n    <Id>0f1c45cd-3eee-4e60-b505-2e330b8755d3</Id>\\n    <Disabled>false</Disabled>\\n    <Md5>987d563d38f5aef27feca8702c689bb1</Md5>\\n    <Name>Android检测流程</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'CreateDetectProcess',
            'summary' => '调用 CreateDetectProcess 创建检测流程。',
            'requestParamsDescription' => '配置内容的 JSON 格式如下：'."\n"
                .'``` json'."\n"
                .'{'."\n"
                .'    "name":"mmm",'."\n"
                .'    "isUploadMeta":true,'."\n"
                .'    "type":"Local",'."\n"
                .'    "phases":['."\n"
                .'        {'."\n"
                .'            "voice":{'."\n"
                .'                "mp3":{'."\n"
                .'                    "playFilePath":"",'."\n"
                .'                    "playFileName":""'."\n"
                .'                },'."\n"
                .'                "tts":{'."\n"
                .'                    "ttsText":"请把手机放置于支架上，对准保险代理和投保人。距离一米，并适当调整距离前后距离和角度，确保代理人和投保人完全出现在视频中。",'."\n"
                .'                    "fontName":"xiaoyun/xiaogang",'."\n"
                .'                    "speed":"1.5"'."\n"
                .'                },'."\n"
                .'                "type":"tts"'."\n"
                .'            },'."\n"
                .'            "id":"双录前的提醒1",'."\n"
                .'            "detections":{'."\n"
                .'                "aiDetections":['."\n"
                ."\n"
                .'                ],'."\n"
                .'                "faceDetections":['."\n"
                .'                    {'."\n"
                .'                        "duration":1,'."\n"
                .'                        "isRequired":true,'."\n"
                .'                        "role":['."\n"
                .'                            "role1",'."\n"
                .'                            "role2"'."\n"
                .'                        ],'."\n"
                .'                        "isGlobal":true,'."\n"
                .'                        "id":"face_recognize"'."\n"
                .'                    }'."\n"
                .'                ]'."\n"
                .'            }'."\n"
                .'        }'."\n"
                .'    ]'."\n"
                .'}'."\n"
                ."\n"
                .'```'."\n",
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateRule' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'default',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测规则内容，格式请参考示例值',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '[{"sequence":1,"actions":[{"name":"id_card_recognize"}]},{"sequence":2,"actions":[{"name":"document_title_recognize"},{"name":"flip_action_recognize"},{"name":"sign_action_recognize"}]},{"sequence":3,"actions":[{"name":"sign_recognize"}]},{"sequence":0,"actions":[{"name":"face_track"},{"name":"speech_to_text"}]}]',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '幂等校验参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Name' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'Content' => [
                                        'description' => '规则内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Name\\": \\"default\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <Content>{}</Content>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <Name>default</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'CreateRule',
            'summary' => '调用 CreateRule 创建检测规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateTaskGroup' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '所属应用 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'ExpireAt',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务过期时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-10-10',
                    ],
                ],
                [
                    'name' => 'GroupName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务组名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '任务组',
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则 ID',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'RunnableTimeFrom',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可执行的时间范围',
                        'type' => 'string',
                        'required' => false,
                        'example' => '17:00',
                    ],
                ],
                [
                    'name' => 'RunnableTimeTo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '可执行的时间范围',
                        'type' => 'string',
                        'required' => false,
                        'example' => '18:00',
                    ],
                ],
                [
                    'name' => 'TriggerPeriod',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行周期，immediately-立刻，weekly-每周，monthly-每月',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'immediately',
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端幂等参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
                [
                    'name' => 'Day',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '周期执行，比如每周3执行',
                        'type' => 'array',
                        'items' => [
                            'description' => '无',
                            'type' => 'integer',
                            'format' => 'int32',
                            'required' => false,
                            'example' => '无',
                        ],
                        'required' => false,
                        'example' => '3',
                        'maxItems' => 100,
                    ],
                ],
                [
                    'name' => 'VideoInfo',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '视频信息。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'VideoUrl' => [
                                    'description' => '视频地址',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '18/mrtc//641905591891464_record_64190559189146412713.mp4',
                                ],
                                'VideoMetaUrl' => [
                                    'description' => '视频 meta 地址',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '18/mrtc//641905591891464_record_64190559189146412713.mp4.meta',
                                ],
                                'RuleId' => [
                                    'description' => '规则id',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                ],
                            ],
                            'required' => false,
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => 'runnable',
                                    ],
                                    'CompletedTasks' => [
                                        'description' => '已完成任务数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'TotalTasks' => [
                                        'description' => '总任务数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '任务组名',
                                        'type' => 'string',
                                        'example' => '任务组',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'RuleName' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'RuleId' => [
                                        'description' => '规则 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'TaskIds' => [
                                        'description' => '任务 ID 列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务组下的任务 ID 列表',
                                            'type' => 'string',
                                            'example' => '["1"]',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"runnable\\",\\n    \\"CompletedTasks\\": 0,\\n    \\"TotalTasks\\": 1,\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"任务组\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"RuleName\\": \\"default\\",\\n    \\"RuleId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"TaskIds\\": [\\n      \\"[\\\\\\"1\\\\\\"]\\"\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<Message/>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Status>runnable</Status>\\n    <TaskIds/>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <RuleId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RuleId>\\n    <TotalTasks/>\\n    <CompletedTasks>0</CompletedTasks>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <RuleName>default</RuleName>\\n    <Name>任务组</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'CreateTaskGroup',
            'summary' => '调用 CreateTaskGroup 创建任务组。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'CreateUserDepartments' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户 ID',
                        'type' => 'array',
                        'items' => [
                            'description' => '无',
                            'type' => 'string',
                            'required' => false,
                            'example' => '无',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'array',
                        'items' => [
                            'description' => '无',
                            'type' => 'string',
                            'required' => false,
                            'example' => '无',
                        ],
                        'required' => true,
                        'maxItems' => 10000,
                    ],
                ],
                [
                    'name' => 'ClientToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端幂等参数',
                        'type' => 'string',
                        'required' => false,
                        'example' => '无',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '0B576AAB-A638-5029-9A54-A7C1DB5AC0B3',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"0B576AAB-A638-5029-9A54-A7C1DB5AC0B3\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '创建用户部门关系',
            'summary' => '调用 CreateUserDepartments 创建用户部门关系。',
        ],
        'CreateWatermark' => [
            'summary' => '创建水印',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印配置信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '文字水印',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<WatermarkDTO>',
                        'description' => 'ApiResult<WatermarkDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '水印id',
                                        'description' => '水印 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'CreatedAt' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Value' => [
                                        'title' => '水印信息',
                                        'description' => '水印信息',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Name' => [
                                        'title' => '水印名称',
                                        'description' => '水印名称',
                                        'type' => 'string',
                                        'example' => '名称',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '-',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Value\\": \\"{}\\",\\n    \\"Name\\": \\"名称\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '创建水印信息',
        ],
        'DeleteApp' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'data' => [
                                'type' => 'object',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'errors' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'message' => [
                                            'type' => 'string',
                                        ],
                                        'field' => [
                                            'type' => 'string',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '删除应用',
            'summary' => '调用 DeleteApp 删除应用。',
        ],
        'DeleteDepartment' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '删除部门',
            'summary' => '调用 DeleteDepartment 删除部门。',
        ],
        'DeleteDetectProcess' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '1fdc45cd-3eee-4e60-b505-2e330b8755d3',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'example' => '-',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"1fdc45cd-3eee-4e60-b505-2e330b8755d3\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>1fdc45cd-3eee-4e60-b505-2e330b8755d3</RequestId>\\n<Message>-</Message>\\n<Data>-</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'DeleteDetectProcess',
            'summary' => '调用 DeleteDetectProcess 删除检测流程。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteRule' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'Content' => [
                                        'description' => '规则内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"default\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <Name>default</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'DeleteRule',
            'summary' => '调用 DeleteRule 删除检测规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteUser' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Errors' => [
                                'description' => '无',
                                'type' => 'array',
                                'items' => [
                                    'description' => '无',
                                    'type' => 'object',
                                    'properties' => [
                                        'Message' => [
                                            'description' => '无',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'Field' => [
                                            'description' => '无',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Errors\\": [\\n    {\\n      \\"Message\\": \\"无\\",\\n      \\"Field\\": \\"无\\"\\n    }\\n  ],\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Errors>\\n    <Field>-</Field>\\n    <Message>-</Message>\\n</Errors>\\n<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>-</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '删除用户',
            'summary' => '调用 DeleteUser 删除用户。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteUserDepartments' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'UserId',
                    'in' => 'formData',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '用户 ID',
                        'type' => 'array',
                        'items' => [
                            'description' => '无',
                            'type' => 'string',
                            'required' => false,
                            'example' => '无',
                        ],
                        'required' => true,
                        'maxItems' => 1000,
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'style' => 'repeatList',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'array',
                        'items' => [
                            'description' => '无',
                            'type' => 'string',
                            'required' => false,
                            'example' => '无',
                        ],
                        'required' => true,
                        'maxItems' => 10000,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '48A2B2E2-9995-5220-B77C-871119CB05CC',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"48A2B2E2-9995-5220-B77C-871119CB05CC\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '删除用户部门关系',
            'summary' => '调用 DeleteUserDepartments 删除用户部门关系。',
        ],
        'DeleteWatermark' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
            ],
            'parameters' => [
                [
                    'name' => 'WatermarkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'e5a923e0e727f212813a195e274b02c6',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<WatermarkDTO>',
                        'description' => 'ApiResult<WatermarkDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '水印id',
                                        'description' => '水印 ID',
                                        'type' => 'string',
                                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                    ],
                                    'CreatedAt' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Value' => [
                                        'title' => '水印信息',
                                        'description' => '水印信息',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Name' => [
                                        'title' => '水印名称',
                                        'description' => '水印名称',
                                        'type' => 'string',
                                        'example' => '名称',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '-',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Value\\": \\"{}\\",\\n    \\"Name\\": \\"名称\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '删除水印信息',
        ],
        'GetApp' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包名',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'com.a.test',
                    ],
                ],
                [
                    'name' => 'DeviceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设备 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'xxx-xxx-xxx',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.002',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '1',
                                    ],
                                    'Disabled' => [
                                        'description' => '关闭状态',
                                        'type' => 'string',
                                        'example' => 'false',
                                    ],
                                    'Name' => [
                                        'description' => '应用名称',
                                        'type' => 'string',
                                        'example' => '应用',
                                    ],
                                    'Config' => [
                                        'description' => '客户端相关配置',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'FeeId' => [
                                        'description' => '对账 ID',
                                        'type' => 'string',
                                        'example' => 'ff1d7783-e087-4d62-92df-3a163eca7c07',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"CreatedAt\\": \\"1\\",\\n    \\"Disabled\\": \\"false\\",\\n    \\"Name\\": \\"应用\\",\\n    \\"Config\\": \\"{}\\",\\n    \\"FeeId\\": \\"ff1d7783-e087-4d62-92df-3a163eca7c07\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <CreatedAt>1</CreatedAt>\\n    <Disabled>false</Disabled>\\n    <Name>应用</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'GetApp',
            'summary' => '调用 GetApp 获取应用。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDepartment' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'Description' => [
                                        'description' => '描述',
                                        'type' => 'string',
                                        'example' => '描述',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'UpdatedAt' => [
                                        'description' => '更新日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '姓名',
                                        'type' => 'string',
                                        'example' => '名称',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '请求状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Description\\": \\"描述\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"UpdatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"名称\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <Description>描述</Description>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <UpdatedAt>2020-07-14T14:01:41.000+08:00</UpdatedAt>\\n    <Name>名称</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'GetDepartment',
            'summary' => '调用GetDepartment获取部门。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetDetection' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '-',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => 'runnable',
                                    ],
                                    'DepartmentName' => [
                                        'description' => '部门名称',
                                        'type' => 'string',
                                        'example' => '部门',
                                    ],
                                    'Tasks' => [
                                        'description' => '任务列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '-',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '任务状态',
                                                    'type' => 'string',
                                                    'example' => 'runnable',
                                                ],
                                                'VideoMetaUrl' => [
                                                    'description' => '视频 meta 地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyun.com/1.mp4.meta',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Id' => [
                                                    'description' => '任务 ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'VideoUrl' => [
                                                    'description' => '视频地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyun.com/1.mp4',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'RecordingType' => [
                                        'description' => '录制类型',
                                        'type' => 'string',
                                        'example' => 'local',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'DepartmentId' => [
                                        'description' => '部门 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'RuleName' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'RuleId' => [
                                        'description' => '规则 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"runnable\\",\\n    \\"DepartmentName\\": \\"部门\\",\\n    \\"Tasks\\": [\\n      {\\n        \\"Status\\": \\"runnable\\",\\n        \\"VideoMetaUrl\\": \\"http://oss.aliyun.com/1.mp4.meta\\",\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"VideoUrl\\": \\"http://oss.aliyun.com/1.mp4\\"\\n      }\\n    ],\\n    \\"RecordingType\\": \\"local\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"DepartmentId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"RuleName\\": \\"default\\",\\n    \\"RuleId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Status>runnable</Status>\\n    <Tasks>\\n        <Status>runnable</Status>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <VideoMetaUrl>http://oss.aliyun.com/1.mp4.meta</VideoMetaUrl>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <VideoUrl>http://oss.aliyun.com/1.mp4</VideoUrl>\\n    </Tasks>\\n    <RecordingType>local</RecordingType>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <RuleId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RuleId>\\n    <DepartmentName>部门</DepartmentName>\\n    <DepartmentId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</DepartmentId>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <RuleName>default</RuleName>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'GetDetection',
            'summary' => '调用 GetDetection 获取检测信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPreSignedUrl' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.001',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
                [
                    'name' => 'Prefix',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test.mp4',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '无',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'string',
                                'example' => 'http://shuanglu-pre.oss-cn-beijing.aliyuncs.com/13ba4081-84f3-42b0-af93-10a64319f8ef/test.txt',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": \\"http://shuanglu-pre.oss-cn-beijing.aliyuncs.com/13ba4081-84f3-42b0-af93-10a64319f8ef/test.txt\\",\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>-</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'GetPreSignedUrl',
            'summary' => '调用 GetPreSignedUrl 获取上传文件需要的预签名 URL。',
            'description' => '上传文件到 OSS，可以先获取预签名的 URL，再进行 PUT。'."\n"
                ."\n"
                .'PUT 操作等价的 curl 命令，可参照：'."\n"
                .'`curl -X PUT -H \'Content-Type:\' --data-binary @/tmp/test.txt \'http://shuanglu-pre.oss-cn-beijing.aliyuncs.com/13ba4081-84f3-42b0-af93-10a64319f8ef/test.txt?Expires=1604659193&OSSAccessKeyId=LTEI4FcsdDhFc7h78gqB****&Signature=+8lNqlW7ijIGLwNcyR****\'`',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetRule' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'Content' => [
                                        'description' => '规则内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"default\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId/>\\n<Data>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <Name>default</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'GetRule',
            'summary' => '调用 GetRule 获取检测规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetTask' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => '	{"version":"1.0.0"}',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Data' => [
                                'description' => '任务数据',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'example' => 'runnable',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Id' => [
                                        'description' => '检测任务 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'VideoUrl' => [
                                        'description' => '检测结果视频 URL',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"runnable\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '获取指定任务信息',
            'summary' => '调用 GetTask 获取指定任务信息。',
        ],
        'GetTaskGroup' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务组 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '-',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => 'runnable',
                                    ],
                                    'CompletedTasks' => [
                                        'description' => '已完成任务数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalTasks' => [
                                        'description' => '总任务数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => '名称',
                                    ],
                                    'TaskIds' => [
                                        'description' => '-',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '任务 ID 列表',
                                            'type' => 'string',
                                            'example' => '["1"]',
                                        ],
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'RuleId' => [
                                        'description' => '规则 ID',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'RuleName' => [
                                        'description' => '规则名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Status\\": \\"runnable\\",\\n    \\"CompletedTasks\\": 1,\\n    \\"TotalTasks\\": 1,\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"名称\\",\\n    \\"TaskIds\\": [\\n      \\"[\\\\\\"1\\\\\\"]\\"\\n    ],\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"RuleId\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"RuleName\\": \\"default\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message/>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Status>runnable</Status>\\n    <TaskIds>[\\"1\\"]</TaskIds>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <RuleId>2020-07-14T14:01:41.000+08:00</RuleId>\\n    <TotalTasks>1</TotalTasks>\\n    <CompletedTasks>1</CompletedTasks>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <RuleName>default</RuleName>\\n    <Name>名称</Name>\\n</Data>\\n<Code/>","errorExample":""}]',
            'title' => 'GetTaskGroup',
            'summary' => '调用 GetTaskGroup 获取任务组。',
            'description' => '**1**',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetUser' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '返回信息。',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID。',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'Email' => [
                                        'description' => '电子邮件地址',
                                        'type' => 'string',
                                        'example' => 'xxx@aa.com',
                                    ],
                                    'PhoneNumber' => [
                                        'description' => '手机号码',
                                        'type' => 'string',
                                        'example' => '187000023323',
                                    ],
                                    'Departments' => [
                                        'description' => '部门列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '无',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => '描述',
                                                    'type' => 'string',
                                                    'example' => '描述',
                                                ],
                                                'GmtCreate' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Name' => [
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => '名称',
                                                ],
                                                'GmtModified' => [
                                                    'description' => '更新日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Id' => [
                                                    'description' => '部门 ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'UpdatedAt' => [
                                        'description' => '更新日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Source' => [
                                        'description' => '来源',
                                        'type' => 'string',
                                        'example' => 'ram',
                                    ],
                                    'Role' => [
                                        'description' => '角色',
                                        'type' => 'string',
                                        'example' => 'admin',
                                    ],
                                    'Name' => [
                                        'description' => '姓名',
                                        'type' => 'string',
                                        'example' => '姓名',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'Username' => [
                                        'description' => '用户名',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Email\\": \\"xxx@aa.com\\",\\n    \\"PhoneNumber\\": \\"187000023323\\",\\n    \\"Departments\\": [\\n      {\\n        \\"Description\\": \\"描述\\",\\n        \\"GmtCreate\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Name\\": \\"名称\\",\\n        \\"GmtModified\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n      }\\n    ],\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"UpdatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Source\\": \\"ram\\",\\n    \\"Role\\": \\"admin\\",\\n    \\"Name\\": \\"姓名\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"Username\\": \\"test\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Role>admin</Role>\\n    <Departments>\\n        <GmtCreate>2020-07-14T14:01:41.000+08:00</GmtCreate>\\n        <Description>描述</Description>\\n        <GmtModified>2020-07-14T14:01:41.000+08:00</GmtModified>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <Name>名称</Name>\\n    </Departments>\\n    <Email>xxx@aa.com</Email>\\n    <Username>test</Username>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <PhoneNumber>187000023323</PhoneNumber>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <UpdatedAt>2020-07-14T14:01:41.000+08:00</UpdatedAt>\\n    <Source>ram</Source>\\n    <Name>姓名</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '查询用户信息',
            'summary' => '调用 GetUser 获取指定用户信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetVideoMergeTask' => [
            'summary' => '查询视频合并任务',
            'methods' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '任务 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<VideoMergeTaskDTO>',
                        'description' => 'ApiResult<VideoMergeTaskDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '89A61EB9-2FF8-595D-89D3-845C8B615011',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'MergeFileId' => [
                                        'description' => '视频合并后的合流视频地址',
                                        'type' => 'string',
                                        'example' => 'http://xxx.mp4',
                                    ],
                                    'ClientTraceId' => [
                                        'description' => '客户端流量调用id',
                                        'type' => 'string',
                                        'example' => '2fr4fa55-2364-4d79-aeb4-c093ec4a4fd4',
                                    ],
                                    'TaskId' => [
                                        'description' => '任务id',
                                        'type' => 'string',
                                        'example' => '368cfa55-2364-4d79-aeb4-c0956c4a45cd',
                                    ],
                                    'Duration' => [
                                        'description' => '时长',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '22',
                                    ],
                                    'Width' => [
                                        'description' => '视频宽',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0.6',
                                    ],
                                    'Height' => [
                                        'description' => '视频画面高',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0.6',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"89A61EB9-2FF8-595D-89D3-845C8B615011\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"MergeFileId\\": \\"http://xxx.mp4\\",\\n    \\"ClientTraceId\\": \\"2fr4fa55-2364-4d79-aeb4-c093ec4a4fd4\\",\\n    \\"TaskId\\": \\"368cfa55-2364-4d79-aeb4-c0956c4a45cd\\",\\n    \\"Duration\\": 22,\\n    \\"Width\\": 0.6,\\n    \\"Height\\": 0.6\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取视频合并结果',
        ],
        'ListApps' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '1000000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '10',
                        'example' => '10',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '无',
                                            'type' => 'object',
                                            'properties' => [
                                                'DepartmentName' => [
                                                    'description' => '部门名称',
                                                    'type' => 'string',
                                                    'example' => '部门',
                                                ],
                                                'PackageName' => [
                                                    'description' => '包名',
                                                    'type' => 'string',
                                                    'example' => 'com.aaa.test',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'DepartmentId' => [
                                                    'description' => '部门 ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'Disabled' => [
                                                    'description' => '是否禁用',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Name' => [
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => '应用',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '11',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总条目数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"DepartmentName\\": \\"部门\\",\\n        \\"PackageName\\": \\"com.aaa.test\\",\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"DepartmentId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"Disabled\\": false,\\n        \\"Name\\": \\"应用\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 11,\\n    \\"TotalElements\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>11</TotalPages>\\n    <Items>\\n        <PackageName>com.aaa.test</PackageName>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <DepartmentName>部门</DepartmentName>\\n        <DepartmentId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</DepartmentId>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <Disabled>false</Disabled>\\n        <Name>应用</Name>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListApps',
            'summary' => '调用 ListApps 获取应用列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDepartments' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '部门名称',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '无',
                                            'type' => 'object',
                                            'properties' => [
                                                'Description' => [
                                                    'description' => ' 描述',
                                                    'type' => 'string',
                                                    'example' => '描述',
                                                ],
                                                'Administrators' => [
                                                    'description' => '管理员列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '无',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Name' => [
                                                                'description' => '用户姓名',
                                                                'type' => 'string',
                                                                'example' => 'user',
                                                            ],
                                                            'Id' => [
                                                                'description' => '用户 ID',
                                                                'type' => 'string',
                                                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'UpdatedAt' => [
                                                    'description' => '更新日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Name' => [
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => '名称',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '11',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总条目数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"Description\\": \\"描述\\",\\n        \\"Administrators\\": [\\n          {\\n            \\"Name\\": \\"user\\",\\n            \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n          }\\n        ],\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"UpdatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Name\\": \\"名称\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 11,\\n    \\"TotalElements\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>11</TotalPages>\\n    <Items>\\n        <Description>描述</Description>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <UpdatedAt>2020-07-14T14:01:41.000+08:00</UpdatedAt>\\n        <Name>名称</Name>\\n    </Items>\\n    <Items>\\n        <Administrators>\\n            <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n            <Name>user</Name>\\n        </Administrators>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListDepartments',
            'summary' => '调用 ListDepartments 获取部门列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDetections' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'CreateDateFrom',
                    'in' => 'query',
                    'schema' => [
                        'description' => '开始日期',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-10-10',
                    ],
                ],
                [
                    'name' => 'CreateDateTo',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结束日期',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-10-11',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '10',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'RecordingType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '类型：remote（远程双录），local（本地双录）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'local',
                        'enum' => [
                            'local',
                            'remote',
                        ],
                    ],
                ],
                [
                    'name' => 'RuleId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Errors' => [
                                'description' => '-',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                        'Field' => [
                                            'description' => '字段',
                                            'type' => 'string',
                                            'example' => 'status',
                                        ],
                                    ],
                                ],
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '-',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据项',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'runnable',
                                                ],
                                                'DepartmentName' => [
                                                    'description' => '部门名称',
                                                    'type' => 'string',
                                                    'example' => '部门名称',
                                                ],
                                                'Tasks' => [
                                                    'description' => '任务数',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '任务数',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Status' => [
                                                                'description' => '任务状态',
                                                                'type' => 'string',
                                                                'example' => 'runnable',
                                                            ],
                                                            'VideoMetaUrl' => [
                                                                'description' => '检测结果视频 meta 地址',
                                                                'type' => 'string',
                                                                'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                                            ],
                                                            'CreatedAt' => [
                                                                'description' => '任务创建日期',
                                                                'type' => 'string',
                                                                'example' => '2020-07-14T14:01:41.000+08:00',
                                                            ],
                                                            'Id' => [
                                                                'description' => '任务 ID',
                                                                'type' => 'string',
                                                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                            ],
                                                            'VideoUrl' => [
                                                                'description' => '检测结果视频地址',
                                                                'type' => 'string',
                                                                'example' => 'http://oss.aliyuncs.com/1.mp4',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RecordingType' => [
                                                    'description' => '录制类型',
                                                    'type' => 'string',
                                                    'example' => 'local',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'DepartmentId' => [
                                                    'description' => '部门 ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'RuleName' => [
                                                    'description' => '规则名称',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'RuleId' => [
                                                    'description' => '规则 ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '11',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总条目数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Errors\\": [\\n    {\\n      \\"Message\\": \\"-\\",\\n      \\"Field\\": \\"status\\"\\n    }\\n  ],\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"Status\\": \\"runnable\\",\\n        \\"DepartmentName\\": \\"部门名称\\",\\n        \\"Tasks\\": [\\n          {\\n            \\"Status\\": \\"runnable\\",\\n            \\"VideoMetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n            \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n            \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n            \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\"\\n          }\\n        ],\\n        \\"RecordingType\\": \\"local\\",\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"DepartmentId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"RuleName\\": \\"default\\",\\n        \\"RuleId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 11,\\n    \\"TotalElements\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Errors>\\n    <Field>status</Field>\\n    <Message>-</Message>\\n</Errors>\\n<Message/>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>11</TotalPages>\\n    <Items>\\n        <Status>runnable</Status>\\n        <RecordingType>local</RecordingType>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <RuleId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RuleId>\\n        <DepartmentName>部门名称</DepartmentName>\\n        <DepartmentId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</DepartmentId>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <RuleName>default</RuleName>\\n    </Items>\\n    <Items>\\n        <Tasks>\\n            <Status>runnable</Status>\\n            <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n            <VideoMetaUrl>http://oss.aliyuncs.com/1.mp4.meta</VideoMetaUrl>\\n            <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n            <VideoUrl>http://oss.aliyuncs.com/1.mp4</VideoUrl>\\n        </Tasks>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListDetections',
            'summary' => '调用 ListDetections 获取检测结果列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListDetectProcesses' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '500',
                        'minimum' => '10',
                        'example' => '10',
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测流程名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '检测流程名称',
                    ],
                ],
                [
                    'name' => 'PublishStatus',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '是否发布',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '类型：remote（远程双录），local（本地双录）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOCAL',
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '排序',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
                [
                    'name' => 'SortKey',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序字段:CONTENT发布时间、DRAFT草稿时间',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'CONTENT',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'bf1c45cd-3eee-4e60-b505-2e330bf755d3',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据项',
                                            'type' => 'object',
                                            'properties' => [
                                                'Draft' => [
                                                    'description' => '流程配置正式内容',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'FileUrl' => [
                                                    'description' => '可访问的文件 URL',
                                                    'type' => 'string',
                                                    'example' => 'http://abc.com/123.json',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2020-12-04T14:47:59.000+08:00',
                                                ],
                                                'Md5' => [
                                                    'description' => '流程配置正式内容的 MD5',
                                                    'type' => 'string',
                                                    'example' => '987d563d38f5aef27feca8702c689bb1',
                                                ],
                                                'UpdatedAt' => [
                                                    'description' => '更新时间',
                                                    'type' => 'string',
                                                    'example' => '2020-12-04T14:48:59.000+08:00',
                                                ],
                                                'DraftAt' => [
                                                    'title' => '保存时间',
                                                    'description' => '保存时间',
                                                    'type' => 'string',
                                                    'example' => '2020-12-04T14:48:59.000+08:00',
                                                ],
                                                'ContentAt' => [
                                                    'title' => '发布时间',
                                                    'description' => '发布时间',
                                                    'type' => 'string',
                                                    'example' => '2020-12-04T14:48:59.000+08:00',
                                                ],
                                                'NewVersion' => [
                                                    'description' => '是否更新版本',
                                                    'type' => 'boolean',
                                                    'example' => 'true',
                                                ],
                                                'Name' => [
                                                    'description' => '检测流程名称',
                                                    'type' => 'string',
                                                    'example' => 'Android检测流程',
                                                ],
                                                'Content' => [
                                                    'description' => '流程配置正式内容',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                                ],
                                                'Published' => [
                                                    'description' => '是否已发布 true：已发布：false：未发布',
                                                    'type' => 'boolean',
                                                    'example' => 'True',
                                                ],
                                                'Type' => [
                                                    'description' => '标识本地双录和远程双录（LOCAL 或 REMOTE）',
                                                    'type' => 'string',
                                                    'example' => 'REMOTE',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"bf1c45cd-3eee-4e60-b505-2e330bf755d3\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"Draft\\": \\"{}\\",\\n        \\"FileUrl\\": \\"http://abc.com/123.json\\",\\n        \\"CreatedAt\\": \\"2020-12-04T14:47:59.000+08:00\\",\\n        \\"Md5\\": \\"987d563d38f5aef27feca8702c689bb1\\",\\n        \\"UpdatedAt\\": \\"2020-12-04T14:48:59.000+08:00\\",\\n        \\"DraftAt\\": \\"2020-12-04T14:48:59.000+08:00\\",\\n        \\"ContentAt\\": \\"2020-12-04T14:48:59.000+08:00\\",\\n        \\"NewVersion\\": true,\\n        \\"Name\\": \\"Android检测流程\\",\\n        \\"Content\\": \\"{}\\",\\n        \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\",\\n        \\"Published\\": true,\\n        \\"Type\\": \\"REMOTE\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 10,\\n    \\"TotalElements\\": 100\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>bf1c45cd-3eee-4e60-b505-2e330bf755d3</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <TotalElements>100</TotalElements>\\n    <TotalPages>10</TotalPages>\\n    <Items>\\n        <NewVersion>true</NewVersion>\\n        <FileUrl>http://abc.com/123.json</FileUrl>\\n        <Draft>{}</Draft>\\n        <Content>{}</Content>\\n        <CreatedAt>2020-12-04T14:47:59.000+08:00</CreatedAt>\\n        <Id>0f1c45cd-3eee-4e60-b505-2e330b8755d3</Id>\\n        <UpdatedAt>2020-12-04T14:48:59.000+08:00</UpdatedAt>\\n        <Name>Android检测流程</Name>\\n        <Md5>987d563d38f5aef27feca8702c689bb1</Md5>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListDetectProcesses',
            'summary' => '调用 ListDetectProcesses 获取检测流程列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListFiles' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'Prefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '路径前缀',
                        'type' => 'string',
                        'required' => false,
                        'example' => '20220110/',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '数量',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '500',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'string',
                                'example' => '[\'d0388a41-30c6-4c74-af83-a1f923ce1725/process/\', \'d0388a41-30c6-4c74-af83-a1f923ce1725/video_12_14_09_05_41.mp4\', \'d0388a41-30c6-4c74-af83-a1f923ce1725/video_12_14_09_05_41.mp4.meta\']',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": \\"[\'d0388a41-30c6-4c74-af83-a1f923ce1725/process/\', \'d0388a41-30c6-4c74-af83-a1f923ce1725/video_12_14_09_05_41.mp4\', \'d0388a41-30c6-4c74-af83-a1f923ce1725/video_12_14_09_05_41.mp4.meta\']\\",\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>-</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListFiles',
            'summary' => '调用 ListFiles 获取文件列表。',
            'requestParamsDescription' => '该文件是由用户提供的存量的待质检的mp4文件，由开发人员提前上传至指定目录，在控制台中供展示和选择',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListRecordResults' => [
            'summary' => '多规则查询',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'RecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '双录 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                    ],
                ],
                [
                    'name' => 'CreateDateFrom',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'yyyy-MM-dd',
                        'description' => '查询起始日期，格式 yyyy-MM-dd',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-10-10',
                    ],
                ],
                [
                    'name' => 'CreateDateTo',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'yyyy-MM-dd',
                        'description' => '查询结束日期，格式 yyyy-MM-dd',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-10-11',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '90c2459a-4c73-4ab7-8a6b-e550d62fbd8c',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标识本地双录和远程双录（LOCAL 或 REMOTE）',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOCAL',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
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
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'OuterBusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID，用户自定义',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ads32efef43',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<RecordDTO>',
                        'description' => 'ApiResult<RecordDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'TotalElements' => [
                                        'title' => '总数据项数',
                                        'description' => '总数据项数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                    'TotalPages' => [
                                        'title' => '总页数',
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '11',
                                    ],
                                    'Items' => [
                                        'title' => '当前页面数据项',
                                        'description' => '当前页面数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据项',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '双录记录id',
                                                    'description' => '双录记录 ID',
                                                    'type' => 'string',
                                                    'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                                ],
                                                'CreatedAt' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'DetectProcessName' => [
                                                    'title' => '业务检测流程名',
                                                    'description' => '业务检测流程名',
                                                    'type' => 'string',
                                                    'example' => 'process name',
                                                ],
                                                'DepartmentName' => [
                                                    'title' => '部门名',
                                                    'description' => '部门名',
                                                    'type' => 'string',
                                                    'example' => 'XX部门',
                                                ],
                                                'AppName' => [
                                                    'title' => '应用名',
                                                    'description' => '应用名',
                                                    'type' => 'string',
                                                    'example' => 'myapp',
                                                ],
                                                'VideoUrl' => [
                                                    'title' => '视频地址',
                                                    'description' => '视频地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4',
                                                ],
                                                'MetaUrl' => [
                                                    'title' => 'meta地址',
                                                    'description' => 'meta 地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                                ],
                                                'ResultUrl' => [
                                                    'title' => '结果地址',
                                                    'description' => '结果地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                                ],
                                                'RecordAt' => [
                                                    'title' => '录制时间',
                                                    'description' => '录制时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Duration' => [
                                                    'title' => '时长',
                                                    'description' => '时长',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '22',
                                                ],
                                                'Status' => [
                                                    'title' => '检测状态',
                                                    'description' => '检测状态',
                                                    'type' => 'string',
                                                    'example' => 'runnable',
                                                ],
                                                'RoomId' => [
                                                    'title' => 'mrtc房间id',
                                                    'description' => 'mrtc 房间 ID',
                                                    'type' => 'string',
                                                    'example' => '642662467657798',
                                                ],
                                                'RtcRecordId' => [
                                                    'description' => 'mrtc录制ID',
                                                    'type' => 'string',
                                                    'example' => 'record_65703154805715668342',
                                                ],
                                                'OuterBusinessId' => [
                                                    'description' => '业务ID，用户自定义',
                                                    'type' => 'string',
                                                    'example' => 'fasfasda',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '无',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"TotalElements\\": 10,\\n    \\"TotalPages\\": 11,\\n    \\"Items\\": [\\n      {\\n        \\"Id\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"DetectProcessName\\": \\"process name\\",\\n        \\"DepartmentName\\": \\"XX部门\\",\\n        \\"AppName\\": \\"myapp\\",\\n        \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n        \\"MetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n        \\"ResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n        \\"RecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Duration\\": 22,\\n        \\"Status\\": \\"runnable\\",\\n        \\"RoomId\\": \\"642662467657798\\",\\n        \\"RtcRecordId\\": \\"record_65703154805715668342\\",\\n        \\"OuterBusinessId\\": \\"fasfasda\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取所有双录结果',
        ],
        'ListRules' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '100',
                        'minimum' => '10',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '无',
                                            'type' => 'object',
                                            'properties' => [
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Name' => [
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                                'Content' => [
                                                    'description' => '规则内容',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总条目数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Name\\": \\"default\\",\\n        \\"Content\\": \\"{}\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 1,\\n    \\"TotalElements\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <Content>{}</Content>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <Name>default</Name>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListRules',
            'summary' => '调用 ListRules 获取规则列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTaskGroups' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '1000',
                        'minimum' => '10',
                        'example' => '10',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '状态：runnable，completed',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'runnable',
                        'enum' => [
                            'wait',
                            'runnable',
                            'completed',
                        ],
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '-',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '-',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'runnable',
                                                ],
                                                'CompletedTasks' => [
                                                    'description' => '完成任务数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '0',
                                                ],
                                                'TotalTasks' => [
                                                    'description' => '总任务数',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Name' => [
                                                    'description' => '名称',
                                                    'type' => 'string',
                                                    'example' => '任务名称',
                                                ],
                                                'TaskIds' => [
                                                    'description' => '任务 ID 列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '任务组下的任务 ID 列表',
                                                        'type' => 'string',
                                                        'example' => '{}',
                                                    ],
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'RuleId' => [
                                                    'description' => '规则 ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'RuleName' => [
                                                    'description' => '规则名称',
                                                    'type' => 'string',
                                                    'example' => 'default',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalElements' => [
                                        'description' => '条目数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"Status\\": \\"runnable\\",\\n        \\"CompletedTasks\\": 0,\\n        \\"TotalTasks\\": 1,\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Name\\": \\"任务名称\\",\\n        \\"TaskIds\\": [\\n          \\"{}\\"\\n        ],\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"RuleId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"RuleName\\": \\"default\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 1,\\n    \\"TotalElements\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId/>\\n<Data>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <Status>runnable</Status>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <RuleId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RuleId>\\n        <TotalTasks>1</TotalTasks>\\n        <CompletedTasks>0</CompletedTasks>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <RuleName>default</RuleName>\\n        <Name>任务名称</Name>\\n        <TaskIds>1</TaskIds>\\n        <TaskIds>2</TaskIds>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListTaskGroups',
            'summary' => '调用 ListTaskGroups 获取任务组列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTaskItems' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'array',
                                'items' => [
                                    'description' => '无',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '状态',
                                            'type' => 'string',
                                            'example' => 'completed',
                                        ],
                                        'CreatedAt' => [
                                            'description' => '创建日期',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'Message' => [
                                            'description' => '检测失败时的错误信息',
                                            'type' => 'string',
                                            'example' => '检测失败',
                                        ],
                                        'Output' => [
                                            'description' => '检测结果输出，该结果是一个 JSON 格式。不同的检测项格式不一样。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'Name' => [
                                            'description' => '检测项名称',
                                            'type' => 'string',
                                            'example' => '身份证识别',
                                        ],
                                        'SegmentSeq' => [
                                            'description' => '检测的视频分段号码',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": [\\n    {\\n      \\"Status\\": \\"completed\\",\\n      \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"Message\\": \\"检测失败\\",\\n      \\"Output\\": \\"{}\\",\\n      \\"Name\\": \\"身份证识别\\",\\n      \\"SegmentSeq\\": 1\\n    }\\n  ],\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Status>completed</Status>\\n    <SegmentSeq>1</SegmentSeq>\\n    <Message>检测失败</Message>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Output>{}</Output>\\n    <Name>身份证识别</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListTaskItems',
            'summary' => '调用 ListTaskItems 获取任务子项列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListTasks' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页号',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '10',
                        'example' => '10',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'TaskGroupId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务组 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '-',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '-',
                                            'type' => 'object',
                                            'properties' => [
                                                'Status' => [
                                                    'description' => '状态',
                                                    'type' => 'string',
                                                    'example' => 'runnable',
                                                ],
                                                'VideoMetaUrl' => [
                                                    'description' => '视频 meta 地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4.meta?expire=2010323&sign=sf2324',
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                ],
                                                'VideoUrl' => [
                                                    'description' => '视频地址',
                                                    'type' => 'string',
                                                    'example' => 'http://oss.aliyuncs.com/1.mp4?expire=2010323&sign=sf2324',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalElements' => [
                                        'description' => '条目数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"Status\\": \\"runnable\\",\\n        \\"VideoMetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta?expire=2010323&sign=sf2324\\",\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n        \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4?expire=2010323&sign=sf2324\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 1,\\n    \\"TotalElements\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <TotalElements>1</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <Status>runnable</Status>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <VideoMetaUrl>http://oss.aliyuncs.com/1.mp4.meta?expire=2010323&amp;sign=sf2324</VideoMetaUrl>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n        <VideoUrl>http://oss.aliyuncs.com/1.mp4?expire=2010323&amp;sign=sf2324</VideoUrl>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'ListTasks',
            'summary' => '调用 ListTasks 获取任务列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListUsers' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页码',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '10000',
                        'minimum' => '1',
                        'example' => '1',
                        'isFileTransferUrl' => false,
                        'default' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页大小',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '500',
                        'minimum' => '10',
                        'example' => '10',
                        'isFileTransferUrl' => false,
                        'default' => '10',
                    ],
                ],
                [
                    'name' => 'Username',
                    'in' => 'query',
                    'schema' => [
                        'description' => '搜索指定用户名',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'tom',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '响应信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'Items' => [
                                        'description' => '数据',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '无',
                                            'type' => 'object',
                                            'properties' => [
                                                'RamUsername' => [
                                                    'description' => 'RAM 用户名',
                                                    'type' => 'string',
                                                    'example' => 'xxx',
                                                ],
                                                'Email' => [
                                                    'description' => '电子邮件',
                                                    'type' => 'string',
                                                    'example' => 'a@a.com',
                                                ],
                                                'PhoneNumber' => [
                                                    'description' => '手机号码',
                                                    'type' => 'string',
                                                    'example' => '186000000',
                                                ],
                                                'Departments' => [
                                                    'description' => '所属部门列表',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '无',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'Description' => [
                                                                'description' => '描述',
                                                                'type' => 'string',
                                                                'example' => '部门',
                                                            ],
                                                            'CreatedAt' => [
                                                                'description' => '创建日期',
                                                                'type' => 'string',
                                                                'example' => '2020-07-14T14:01:41.000+08:00',
                                                            ],
                                                            'UpdatedAt' => [
                                                                'description' => '更新日期',
                                                                'type' => 'string',
                                                                'example' => '2020-07-14T14:01:41.000+08:00',
                                                            ],
                                                            'Name' => [
                                                                'description' => '部门名称',
                                                                'type' => 'string',
                                                                'example' => '不明',
                                                            ],
                                                            'Id' => [
                                                                'description' => 'ID',
                                                                'type' => 'string',
                                                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'CreatedAt' => [
                                                    'description' => '创建日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'UpdatedAt' => [
                                                    'description' => '更新日期',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Source' => [
                                                    'description' => '用户来源',
                                                    'type' => 'string',
                                                    'example' => 'ram',
                                                ],
                                                'Role' => [
                                                    'description' => '角色',
                                                    'type' => 'string',
                                                    'example' => 'admin',
                                                ],
                                                'Name' => [
                                                    'description' => '姓名',
                                                    'type' => 'string',
                                                    'example' => '高x',
                                                ],
                                                'Id' => [
                                                    'description' => 'ID',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Username' => [
                                                    'description' => '用户名',
                                                    'type' => 'string',
                                                    'example' => 'xxx',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TotalPages' => [
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'TotalElements' => [
                                        'description' => '总条数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"Items\\": [\\n      {\\n        \\"RamUsername\\": \\"xxx\\",\\n        \\"Email\\": \\"a@a.com\\",\\n        \\"PhoneNumber\\": \\"186000000\\",\\n        \\"Departments\\": [\\n          {\\n            \\"Description\\": \\"部门\\",\\n            \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n            \\"UpdatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n            \\"Name\\": \\"不明\\",\\n            \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n          }\\n        ],\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"UpdatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Source\\": \\"ram\\",\\n        \\"Role\\": \\"admin\\",\\n        \\"Name\\": \\"高x\\",\\n        \\"Id\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Username\\": \\"xxx\\"\\n      }\\n    ],\\n    \\"TotalPages\\": 1,\\n    \\"TotalElements\\": 10\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <TotalElements>10</TotalElements>\\n    <TotalPages>1</TotalPages>\\n    <Items>\\n        <Role>admin</Role>\\n        <Email>a@a.com</Email>\\n        <Username>xxx</Username>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <RamUsername>xxx</RamUsername>\\n        <PhoneNumber>186000000</PhoneNumber>\\n        <Id>2020-07-14T14:01:41.000+08:00</Id>\\n        <UpdatedAt>2020-07-14T14:01:41.000+08:00</UpdatedAt>\\n        <Source>ram</Source>\\n        <Name>高x</Name>\\n        <Departments>\\n            <Description>部门</Description>\\n            <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n            <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n            <UpdatedAt>2020-07-14T14:01:41.000+08:00</UpdatedAt>\\n            <Name>不明</Name>\\n        </Departments>\\n    </Items>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => '查询用户列表',
            'summary' => '调用ListUsers获取用户列表。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListWatermarks' => [
            'summary' => '获取水印列表',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'list',
            ],
            'parameters' => [
                [
                    'name' => 'PageIndex',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页码',
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
                        'description' => '页大小',
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
                        'title' => 'ApiResult<PageDTO<WatermarkDTO>>',
                        'description' => 'ApiResult<PageDTO<WatermarkDTO>>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'TotalElements' => [
                                        'title' => '总数据项数',
                                        'description' => '总数据项数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'TotalPages' => [
                                        'title' => '总页数',
                                        'description' => '总页数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Items' => [
                                        'title' => '当前页面数据项',
                                        'description' => '当前页面数据项',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '-',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '水印id',
                                                    'description' => '水印 ID',
                                                    'type' => 'string',
                                                    'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                                ],
                                                'CreatedAt' => [
                                                    'title' => '创建时间',
                                                    'description' => '创建时间',
                                                    'type' => 'string',
                                                    'example' => '2020-07-14T14:01:41.000+08:00',
                                                ],
                                                'Value' => [
                                                    'title' => '水印信息',
                                                    'description' => '水印信息',
                                                    'type' => 'string',
                                                    'example' => '{}',
                                                ],
                                                'Name' => [
                                                    'title' => '水印名称',
                                                    'description' => '水印名称',
                                                    'type' => 'string',
                                                    'example' => '名称',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '-',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"TotalElements\\": 1,\\n    \\"TotalPages\\": 1,\\n    \\"Items\\": [\\n      {\\n        \\"Id\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n        \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n        \\"Value\\": \\"{}\\",\\n        \\"Name\\": \\"名称\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '列表展示水印信息',
        ],
        'RenameDetectProcess' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '1q1c45cd-3eee-1e60-b505-2e330b8755d2',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '新名称',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => 'db1c45cd-3eee-1e60-b505-2e330b8755d2',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Draft' => [
                                        'description' => '流程配置草稿内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-12-04T14:47:59.000+08:00',
                                    ],
                                    'Md5' => [
                                        'description' => '流程配置正式内容的 MD5',
                                        'type' => 'string',
                                        'example' => '987d563d38f5aef27feca8702c689bb1',
                                    ],
                                    'Name' => [
                                        'description' => '检测流程名称',
                                        'type' => 'string',
                                        'example' => 'Android检测流程',
                                    ],
                                    'Content' => [
                                        'description' => '流程配置正式内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"db1c45cd-3eee-1e60-b505-2e330b8755d2\\",\\n  \\"Data\\": {\\n    \\"Draft\\": \\"{}\\",\\n    \\"CreatedAt\\": \\"2020-12-04T14:47:59.000+08:00\\",\\n    \\"Md5\\": \\"987d563d38f5aef27feca8702c689bb1\\",\\n    \\"Name\\": \\"Android检测流程\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b8755d3\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>db1c45cd-3eee-1e60-b505-2e330b8755d2</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <Draft>{}</Draft>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-12-04T14:47:59.000+08:00</CreatedAt>\\n    <Id>0f1c45cd-3eee-4e60-b505-2e330b8755d3</Id>\\n    <Name>Android检测流程</Name>\\n    <Md5>987d563d38f5aef27feca8702c689bb1</Md5>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'RenameDetectProcess',
            'summary' => '调用 RenameDetectProcess 对检测流程重命名。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateApp' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '名称',
                    ],
                ],
                [
                    'name' => 'Disabled',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否被禁用',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'PackageName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '包名，用户移动端 SDK 校验',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'com.aliyun.idrs.sdk',
                    ],
                ],
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Data' => [
                                'description' => '返回数据',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
                '5XX' => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'type' => 'string',
                            ],
                            'data' => [
                                'type' => 'object',
                            ],
                            'requestId' => [
                                'type' => 'string',
                            ],
                            'message' => [
                                'type' => 'string',
                            ],
                            'errors' => [
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'message' => [
                                            'type' => 'string',
                                        ],
                                        'field' => [
                                            'type' => 'string',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '更新应用',
            'summary' => '调用 UpdateApp 更新应用。',
        ],
        'UpdateDepartment' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => '描述',
                    ],
                ],
                [
                    'name' => 'Label',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '标签',
                        'type' => 'string',
                        'required' => false,
                        'example' => '标签',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '名称',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'example' => '无',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>-</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'UpdateDepartment',
            'summary' => '调用 UpdateDepartment 更新部门。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateDetectProcess' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0f1c45cd-3eee-4e60-b505-2e330b8755d3',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测流程名称',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Android检测流程',
                    ],
                ],
                [
                    'name' => 'Draft',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程配置草稿内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程配置正式内容',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '-',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '0c1c45cd-3eee-4e60-b505-2e330b8755d3',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Draft' => [
                                        'description' => '流程配置草稿内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'CreatedAt' => [
                                        'description' => '流程配置正式内容',
                                        'type' => 'string',
                                        'example' => '2020-12-04T14:47:59.000+08:00',
                                    ],
                                    'Md5' => [
                                        'description' => '流程配置正式内容的 MD5',
                                        'type' => 'string',
                                        'example' => '987d563d38f5aef27feca8702c689bb1',
                                    ],
                                    'Name' => [
                                        'description' => '检测流程名称',
                                        'type' => 'string',
                                        'example' => 'Android检测流程',
                                    ],
                                    'Content' => [
                                        'description' => '流程配置正式内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => 'cd1c45cd-3eee-4e60-b505-2e330b8755d3',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"-\\",\\n  \\"RequestId\\": \\"0c1c45cd-3eee-4e60-b505-2e330b8755d3\\",\\n  \\"Data\\": {\\n    \\"Draft\\": \\"{}\\",\\n    \\"CreatedAt\\": \\"2020-12-04T14:47:59.000+08:00\\",\\n    \\"Md5\\": \\"987d563d38f5aef27feca8702c689bb1\\",\\n    \\"Name\\": \\"Android检测流程\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"cd1c45cd-3eee-4e60-b505-2e330b8755d3\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<RequestId>0c1c45cd-3eee-4e60-b505-2e330b8755d3</RequestId>\\n<Message>-</Message>\\n<Data>\\n    <Draft>{}</Draft>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-12-04T14:47:59.000+08:00</CreatedAt>\\n    <Id>cd1c45cd-3eee-4e60-b505-2e330b8755d3</Id>\\n    <Name>Android检测流程</Name>\\n    <Md5>987d563d38f5aef27feca8702c689bb1</Md5>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'UpdateDetectProcess',
            'summary' => '调用UpdateDetectProcess更新检测流程。',
            'description' => '********',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateRule' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'Id',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '规则名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '名称',
                    ],
                ],
                [
                    'name' => 'Content',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请按检测规则格式录入',
                        'type' => 'string',
                        'required' => false,
                        'example' => '规则内容',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Data' => [
                                'description' => '无',
                                'type' => 'object',
                                'properties' => [
                                    'CreatedAt' => [
                                        'description' => '创建日期',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Name' => [
                                        'description' => '名称',
                                        'type' => 'string',
                                        'example' => 'default',
                                    ],
                                    'Content' => [
                                        'description' => '检测规则内容',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Data\\": {\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Name\\": \\"default\\",\\n    \\"Content\\": \\"{}\\",\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\"\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","errorExample":""},{"type":"xml","example":"<Message>-</Message>\\n<RequestId>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</RequestId>\\n<Data>\\n    <Content>{}</Content>\\n    <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n    <Id>59b0bbfe-929b-4a8c-9833-3ce70b4bad38</Id>\\n    <Name>default</Name>\\n</Data>\\n<Code>OK</Code>","errorExample":""}]',
            'title' => 'UpdateRule',
            'summary' => '调用 UpdateRule 更新规则。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdateUser' => [
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'Email',
                    'in' => 'query',
                    'schema' => [
                        'description' => '邮箱',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'xxx@xxx.com',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '姓名',
                        'type' => 'string',
                        'required' => false,
                        'example' => '用户姓名',
                    ],
                ],
                [
                    'name' => 'PhoneNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '手机号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '手机号',
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'description' => '角色',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'Id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户 ID',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '无',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'example' => '{\'Id\': \'5073e5f4-99c6-4bb1-bd6c-30ab12f11059\', \'CreatedAt\': \'2021-12-29T11:31:53.072+08:00\'}',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"无\\",\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Data\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"OK\\"\\n}","type":"json"}]',
            'title' => '更新用户',
            'summary' => '调用UpdateUser更新用户。',
        ],
        'UpdateWatermark' => [
            'summary' => '更新水印信息',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
            ],
            'parameters' => [
                [
                    'name' => 'WatermarkId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'd4ba1e0428a8df069316060cef41948a',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '名称',
                    ],
                ],
                [
                    'name' => 'Value',
                    'in' => 'query',
                    'schema' => [
                        'description' => '水印配置',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<WatermarkDTO>',
                        'description' => 'ApiResult<WatermarkDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBBD5016B',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '水印id',
                                        'description' => '水印 ID',
                                        'type' => 'string',
                                        'example' => 'f3bd31c0-0001-4b4b-977d-7cfa64b585f5',
                                    ],
                                    'CreatedAt' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Value' => [
                                        'title' => '水印信息',
                                        'description' => '水印信息',
                                        'type' => 'string',
                                        'example' => '{}',
                                    ],
                                    'Name' => [
                                        'title' => '水印名称',
                                        'description' => '水印名称',
                                        'type' => 'string',
                                        'example' => '名称',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '-',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBBD5016B\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"f3bd31c0-0001-4b4b-977d-7cfa64b585f5\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Value\\": \\"{}\\",\\n    \\"Name\\": \\"名称\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '更新水印信息',
        ],
        'UploadReport' => [
            'summary' => '上报双录RTC信息',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'DepartmentId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '部门 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '	 59b0bbfe-929b-4a8c-9833-3ce70b4bad34',
                    ],
                ],
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '应用 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '90c2459a-4c73-4ab7-8a6b-e550d62fbd8c',
                    ],
                ],
                [
                    'name' => 'DetectProcessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务流程 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'iuhptk3w-2021122017',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mrtc 房间 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6000028888875',
                    ],
                ],
                [
                    'name' => 'VideoUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '要上传的视频地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://mogo-apps-sh.oss-cn-shanghai-internal.aliyuncs.com/tmp/d2720028b53d384c6d3fca32e45209d1_20_src.mp4',
                    ],
                ],
                [
                    'name' => 'MetaUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'meta 文件地址',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://abc.oss.aliyuncs.com/1/12_03_20_03_36toubaoren.mp4.meta',
                    ],
                ],
                [
                    'name' => 'ResultUrl',
                    'in' => 'query',
                    'schema' => [
                        'description' => '检测流程的完整 URL',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'http://abc.oss.aliyuncs.com/1/12_03_20_03_36toubaoren.mp4.json',
                    ],
                ],
                [
                    'name' => 'RecordAt',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'yyyy-MM-dd hh:mm:ss',
                        'description' => '录制开始时间，格式 yyyy-MM-dd\'T\'HH:mm:ss\'Z\'',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2022-01-04T08%3A45%3A37Z',
                    ],
                ],
                [
                    'name' => 'Duration',
                    'in' => 'query',
                    'schema' => [
                        'description' => '视频时长',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标识本地双录和远程双录（LOCAL 或 REMOTE）'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'LOCAL',
                    ],
                ],
                [
                    'name' => 'ClientVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端版本号',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1.0.003',
                    ],
                ],
                [
                    'name' => 'FeeId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对账 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6c94f2a7-632d-4ea0-aa06-a97800a9060f',
                    ],
                ],
                [
                    'name' => 'ClientBaseParam',
                    'in' => 'query',
                    'schema' => [
                        'description' => '客户端基础参数，记录 SDK 版本号等信息',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"version":"1.0.0"}',
                    ],
                ],
                [
                    'name' => 'RtcRecordId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mrtc录制ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'record_6570315480571566****',
                    ],
                ],
                [
                    'name' => 'OuterBusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID，用户自定义',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ads32efef43',
                    ],
                ],
                [
                    'name' => 'Role',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用户自定义角色',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'VideoType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '标识单流还是混流',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'MIX',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<RecordDTO>',
                        'description' => 'ApiResult<RecordDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '84118BF0-56F7-54D2-8C1A-35BBBB*****',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '双录记录id',
                                        'description' => '双录记录 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce7****',
                                    ],
                                    'CreatedAt' => [
                                        'title' => '创建时间',
                                        'description' => '创建时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'VideoUrl' => [
                                        'title' => '视频地址',
                                        'description' => '视频地址',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4',
                                    ],
                                    'MetaUrl' => [
                                        'title' => 'meta地址',
                                        'description' => 'meta 地址',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                    ],
                                    'ResultUrl' => [
                                        'title' => '结果地址',
                                        'description' => '结果地址',
                                        'type' => 'string',
                                        'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                    ],
                                    'RecordAt' => [
                                        'title' => '录制时间',
                                        'description' => '录制时间',
                                        'type' => 'string',
                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                    ],
                                    'Duration' => [
                                        'title' => '时长',
                                        'description' => '时长',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '12',
                                    ],
                                    'RtcRecordId' => [
                                        'description' => 'mrtc录制ID',
                                        'type' => 'string',
                                        'example' => 'record_6570315480571566****'."\n",
                                    ],
                                    'OuterBusinessId' => [
                                        'description' => '业务ID，用户自定义',
                                        'type' => 'string',
                                        'example' => 'ads32efef43',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => '无',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '无',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"84118BF0-56F7-54D2-8C1A-35BBBB*****\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce7****\\",\\n    \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n    \\"MetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n    \\"ResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n    \\"RecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n    \\"Duration\\": 12,\\n    \\"RtcRecordId\\": \\"record_6570315480571566****\\\\n\\",\\n    \\"OuterBusinessId\\": \\"ads32efef43\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"无\\",\\n      \\"Message\\": \\"无\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"<UploadReportResponse>\\n    <RequestId>84118BF0-56F7-54D2-8C1A-35BBBB*****</RequestId>\\n    <Code>OK</Code>\\n    <Message>无</Message>\\n    <Data>\\n        <Id>59b0bbfe-929b-4a8c-9833-3ce7****</Id>\\n        <CreatedAt>2020-07-14T14:01:41.000+08:00</CreatedAt>\\n        <VideoUrl>http://oss.aliyuncs.com/1.mp4</VideoUrl>\\n        <MetaUrl>http://oss.aliyuncs.com/1.mp4.meta</MetaUrl>\\n        <ResultUrl>http://oss.aliyuncs.com/1.mp4.json</ResultUrl>\\n        <RecordAt>2020-07-14T14:01:41.000+08:00</RecordAt>\\n        <Duration>12</Duration>\\n        <RtcRecordId>record_6570315480571566****\\n</RtcRecordId>\\n        <OuterBusinessId>ads32efef43</OuterBusinessId>\\n    </Data>\\n    <Success>true</Success>\\n    <HttpCode>200</HttpCode>\\n    <Errors>\\n        <Field>无</Field>\\n        <Message>无</Message>\\n    </Errors>\\n</UploadReportResponse>","errorExample":""}]',
            'title' => '上报双录结果',
        ],
        'GetRecordsByFeeId' => [
            'summary' => '根据feeid查询上报结果信息接口',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FeeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '对账 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6c94f2a7-632d-4ea0-aa06-a97800a9060f',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<List<Record>>',
                        'description' => 'ApiResult<List<Record>>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '0B576AAB-A638-5029-9A54-A7C1DB5AC0B3',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '双录记录id',
                                            'description' => '双录记录id',
                                            'type' => 'string',
                                            'example' => '63bb629d-92bf-4cdc-ad0b-3032c926d23f',
                                        ],
                                        'CreatedAt' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'DetectProcessName' => [
                                            'title' => '业务检测流程名',
                                            'description' => '业务检测流程名',
                                            'type' => 'string',
                                            'example' => 'XX流程',
                                        ],
                                        'DepartmentName' => [
                                            'title' => '部门名',
                                            'description' => '部门名',
                                            'type' => 'string',
                                            'example' => '部门',
                                        ],
                                        'AppName' => [
                                            'title' => '应用名',
                                            'description' => '应用名',
                                            'type' => 'string',
                                            'example' => 'XX应用',
                                        ],
                                        'VideoUrl' => [
                                            'title' => '视频地址',
                                            'description' => '视频地址',
                                            'type' => 'string',
                                            'example' => 'http://oss.aliyuncs.com/1.mp4',
                                        ],
                                        'MetaUrl' => [
                                            'title' => 'meta地址',
                                            'description' => 'meta地址',
                                            'type' => 'string',
                                            'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                        ],
                                        'ResultUrl' => [
                                            'title' => '结果地址',
                                            'description' => '结果地址',
                                            'type' => 'string',
                                            'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                        ],
                                        'RecordAt' => [
                                            'title' => '录制时间',
                                            'description' => '录制时间',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'Duration' => [
                                            'title' => '时长',
                                            'description' => '时长',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '22',
                                        ],
                                        'Status' => [
                                            'title' => '检测状态',
                                            'description' => '检测状态',
                                            'type' => 'string',
                                            'example' => 'completed',
                                        ],
                                        'RoomId' => [
                                            'title' => 'mrtc房间id',
                                            'description' => 'mrtc房间id',
                                            'type' => 'string',
                                            'example' => '654078150345590',
                                        ],
                                        'RecordRoomList' => [
                                            'title' => '远程双录文件地址列表',
                                            'description' => '远程双录文件地址列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '远程双录文件地址列表',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Role' => [
                                                        'title' => '角色',
                                                        'description' => '角色',
                                                        'type' => 'string',
                                                        'example' => '21343',
                                                    ],
                                                    'RecordType' => [
                                                        'title' => '录制视频类型',
                                                        'description' => '录制视频类型',
                                                        'type' => 'string',
                                                        'example' => 'Mix',
                                                    ],
                                                    'RoomVideoUrl' => [
                                                        'title' => '视频地址',
                                                        'description' => '视频地址',
                                                        'type' => 'string',
                                                        'example' => 'http://oss.aliyuncs.com/1.mp4',
                                                    ],
                                                    'RoomMetaUrl' => [
                                                        'title' => 'meta地址',
                                                        'description' => 'meta地址',
                                                        'type' => 'string',
                                                        'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                                    ],
                                                    'RoomResultUrl' => [
                                                        'title' => '结果地址',
                                                        'description' => '结果地址',
                                                        'type' => 'string',
                                                        'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                                    ],
                                                    'RoomRecordAt' => [
                                                        'title' => '录制时间',
                                                        'description' => '录制时间',
                                                        'type' => 'string',
                                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                                    ],
                                                    'RoomStatus' => [
                                                        'title' => '检测状态',
                                                        'description' => '检测状态',
                                                        'type' => 'string',
                                                        'example' => 'runnable',
                                                    ],
                                                    'RtcRecordId' => [
                                                        'description' => 'mrtc录制ID',
                                                        'type' => 'string',
                                                        'example' => 'record_65703154805715668342',
                                                    ],
                                                    'OuterBusinessId' => [
                                                        'description' => '业务ID，用户自定义',
                                                        'type' => 'string',
                                                        'example' => 'ads32efef43',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OuterBusinessId' => [
                                            'description' => '业务ID，用户自定义',
                                            'type' => 'string',
                                            'example' => 'ads32efef43',
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0942',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0B576AAB-A638-5029-9A54-A7C1DB5AC0B3\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": \\"63bb629d-92bf-4cdc-ad0b-3032c926d23f\\",\\n      \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"DetectProcessName\\": \\"XX流程\\",\\n      \\"DepartmentName\\": \\"部门\\",\\n      \\"AppName\\": \\"XX应用\\",\\n      \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n      \\"MetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n      \\"ResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n      \\"RecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"Duration\\": 22,\\n      \\"Status\\": \\"completed\\",\\n      \\"RoomId\\": \\"654078150345590\\",\\n      \\"RecordRoomList\\": [\\n        {\\n          \\"Role\\": \\"21343\\",\\n          \\"RecordType\\": \\"Mix\\",\\n          \\"RoomVideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n          \\"RoomMetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n          \\"RoomResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n          \\"RoomRecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n          \\"RoomStatus\\": \\"runnable\\",\\n          \\"RtcRecordId\\": \\"record_65703154805715668342\\",\\n          \\"OuterBusinessId\\": \\"ads32efef43\\"\\n        }\\n      ],\\n      \\"OuterBusinessId\\": \\"ads32efef43\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0942\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据feeid获取上报记录',
        ],
        'GetStatisticsRecordsByFeeId' => [
            'summary' => '根据feeid查询上报计量信息接口',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'FeeId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '对账 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ab7ce59f-a68a-4a6f-82a6-6460fadc9a70',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<List<StatisticsRecord>>',
                        'description' => 'ApiResult<List<StatisticsRecord>>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'CAD43A24-D34C-5848-BEB0-3D184F6687B1',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'DeviceId' => [
                                            'description' => '设备id',
                                            'type' => 'string',
                                            'example' => '7f3dfb9aa0dd0261',
                                        ],
                                        'TenantId' => [
                                            'description' => '租户id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'AppId' => [
                                            'description' => 'appid',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'DepartmentId' => [
                                            'description' => '部门id',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'DeviceType' => [
                                            'description' => '终端设备类型，0:Android，1：iOS',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'CreatedAt' => [
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'UpdatedAt' => [
                                            'description' => '更新时间',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'BeginAt' => [
                                            'description' => '开始检测时间，时间格式yyyy-MM-dd HH:mm:ss',
                                            'type' => 'string',
                                            'example' => '2022-05-23 10:33:12',
                                        ],
                                        'EndAt' => [
                                            'description' => '结束检测时间，时间格式yyyy-MM-dd HH:mm:ss',
                                            'type' => 'string',
                                            'example' => '2022-03-24 11:39:46',
                                        ],
                                        'Hour' => [
                                            'title' => '2020050811',
                                            'description' => '时间段',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2020050811',
                                        ],
                                        'DetectionDuration' => [
                                            'title' => '检测时长，s',
                                            'description' => '检测时长，s',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1200',
                                        ],
                                        'ChargeDuration' => [
                                            'title' => '计费时长，min',
                                            'description' => '计费时长，min',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '12',
                                        ],
                                        'Type' => [
                                            'description' => '类型：remote（远程双录），local（本地双录）',
                                            'type' => 'string',
                                            'example' => 'REMOTE',
                                        ],
                                        'FeeId' => [
                                            'description' => '对账 ID',
                                            'type' => 'string',
                                            'example' => 'ff1d7783-e087-4d62-92df-3a163eca7c07',
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '无',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => '-',
                                        ],
                                        'Message' => [
                                            'description' => '错误消息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"CAD43A24-D34C-5848-BEB0-3D184F6687B1\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": [\\n    {\\n      \\"DeviceId\\": \\"7f3dfb9aa0dd0261\\",\\n      \\"TenantId\\": 1,\\n      \\"AppId\\": 12,\\n      \\"DepartmentId\\": 12,\\n      \\"DeviceType\\": 0,\\n      \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"UpdatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"BeginAt\\": \\"2022-05-23 10:33:12\\",\\n      \\"EndAt\\": \\"2022-03-24 11:39:46\\",\\n      \\"Hour\\": 2020050811,\\n      \\"DetectionDuration\\": 1200,\\n      \\"ChargeDuration\\": 12,\\n      \\"Type\\": \\"REMOTE\\",\\n      \\"FeeId\\": \\"ff1d7783-e087-4d62-92df-3a163eca7c07\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"-\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据feeid获取计费信息',
        ],
        'AsrSentence' => [
            'summary' => '一句话识别',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AsrRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '任务请求参数',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'title' => '应用信息',
                                'description' => '应用 ID',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'd61be709-49d2-4cf1-b219-cd6181f72db8',
                            ],
                            'FileUrl' => [
                                'title' => '语音文件地址',
                                'description' => '可访问的文件 URL',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'http://shuanglu-record-finance.oss-cn-shanghai.aliyuncs.com/record/4x5avhil/047730_30307_0/2022-02-12-10-20****',
                            ],
                            'Format' => [
                                'title' => '音频编码格式',
                                'description' => '音频编码格式，默认值：PCM。'."\n"
                                    ."\n"
                                    .'支持格式：PCM编码、16bit采样位数、单声道',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PCM',
                            ],
                            'SampleRate' => [
                                'title' => '音频采样率',
                                'description' => '音频采样率，默认值：16000 Hz。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '16000',
                            ],
                            'EnablePunctuationPrediction' => [
                                'title' => '是否在后处理中添加标点。取值：true、false。默认：false（不开启）。',
                                'description' => '是否在后处理中添加标点，默认值：False。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'EnableInverseTextNormalization' => [
                                'title' => '是否在后处理中执行ITN。取值：true、false。默认：false（不开启）。',
                                'description' => '是否在后处理中执行ITN（逆文本规整，inverse text normalization）。设置为True时，中文数字将转为阿拉伯数字输出，默认值：False。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                            'EnableVoiceDetection' => [
                                'title' => '是否在后处理中执行ITN。取值：true、false。默认：false（不开启）。',
                                'description' => '是否启动语音检测。默认值：False。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'false',
                                'default' => 'false',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<AsrResponseDTO>',
                        'description' => 'ApiResult<AsrResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '双录端处理asr任务ID',
                                        'description' => '双录端处理asr任务ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'TaskId' => [
                                        'title' => '智能语音asr任务ID',
                                        'description' => '智能语音asr任务ID',
                                        'type' => 'string',
                                        'example' => '368cfa55-2364-4d79-aeb4-c0956c4a45cd',
                                    ],
                                    'Name' => [
                                        'title' => '智能语音asr任务名称',
                                        'description' => '智能语音asr任务名称',
                                        'type' => 'string',
                                        'example' => '任务1',
                                    ],
                                    'Code' => [
                                        'title' => '智能语音asr任务code',
                                        'description' => '智能语音asr任务code',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20000000',
                                    ],
                                    'Message' => [
                                        'title' => '智能语音asr任务message',
                                        'description' => '智能语音asr任务message',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'Result' => [
                                        'title' => 'asr识别出的文本',
                                        'description' => 'asr识别出的文本',
                                        'type' => 'string',
                                        'example' => '北京的天气',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"TaskId\\": \\"368cfa55-2364-4d79-aeb4-c0956c4a45cd\\",\\n    \\"Name\\": \\"任务1\\",\\n    \\"Code\\": 20000000,\\n    \\"Message\\": \\"-\\",\\n    \\"Result\\": \\"北京的天气\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '一句话识别',
        ],
        'FaceCompare' => [
            'summary' => '人脸对比',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'FaceRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'title' => '应用信息',
                                'description' => '应用id',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'd61be709-49d2-4cf1-b219-cd6181f72***',
                            ],
                            'SourceImage' => [
                                'title' => '人脸照片 base64',
                                'description' => '照片Base64编码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                            ],
                            'TargetImage' => [
                                'title' => '底库照片 base64',
                                'description' => '底库照片Base64编码。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<FaceResponseDTO>',
                        'description' => 'ApiResult<FaceResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求 ID',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4ba***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'RequestId' => [
                                        'description' => '请求 ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4bad38',
                                    ],
                                    'Code' => [
                                        'description' => '状态码',
                                        'type' => 'string',
                                        'example' => '200',
                                    ],
                                    'Message' => [
                                        'description' => '信息。',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'Passed' => [
                                        'description' => '认证是否通过。'."\n"
                                            ."\n"
                                            .'- T：通过。'."\n"
                                            .'- F：不通过。',
                                        'type' => 'string',
                                        'example' => 'T',
                                    ],
                                    'VerifyScore' => [
                                        'description' => '人脸比对分。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '60.86',
                                    ],
                                    'Status' => [
                                        'description' => '状态',
                                        'type' => 'string',
                                        'example' => 'completed',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP 状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4ba***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4bad38\\",\\n    \\"Code\\": \\"200\\",\\n    \\"Message\\": \\"-\\",\\n    \\"Passed\\": \\"T\\",\\n    \\"VerifyScore\\": 60.86,\\n    \\"Status\\": \\"completed\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '人脸对比',
        ],
        'TtsCommon' => [
            'summary' => '语音合成',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'TtsRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'title' => 'appid',
                                'description' => 'appid',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'd61be709-49d2-4cf1-b219-cd6181f72***',
                            ],
                            'Text' => [
                                'title' => '文本',
                                'description' => '文本',
                                'type' => 'string',
                                'required' => false,
                                'example' => '北京的天气',
                            ],
                            'Voice' => [
                                'title' => '发音人',
                                'description' => '发音人',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'Xiaoyun',
                            ],
                            'Format' => [
                                'title' => '音频编码格式',
                                'description' => '音频编码格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'WAV',
                            ],
                            'Volume' => [
                                'title' => '音量',
                                'description' => '音量',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '50',
                            ],
                            'SampleRate' => [
                                'title' => '音频采样率',
                                'description' => '音频采样率',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '16000',
                            ],
                            'SpeechRate' => [
                                'title' => '语速',
                                'description' => '语速',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '50',
                            ],
                            'PitchRate' => [
                                'title' => '语调',
                                'description' => '语调',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '50',
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<TtsResponseDTO>',
                        'description' => 'ApiResult<TtsResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => 'c761f0ec-107c-43dc-8565-45330e10e11b',
                            ],
                            'Code' => [
                                'description' => '返回码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'title' => '双录端处理tts任务ID',
                                        'description' => '双录端处理tts任务ID',
                                        'type' => 'string',
                                        'example' => '63bb629d-92bf-4cdc-ad0b-3032c926****',
                                    ],
                                    'TaskId' => [
                                        'title' => '智能语音tts任务ID',
                                        'description' => '智能语音tts任务ID',
                                        'type' => 'string',
                                        'example' => '368cfa55-2364-4d79-aeb4-c0956c4a****',
                                    ],
                                    'Name' => [
                                        'title' => '智能语音tts任务名称',
                                        'description' => '智能语音tts任务名称',
                                        'type' => 'string',
                                        'example' => '任务1',
                                    ],
                                    'Code' => [
                                        'title' => '智能语音tts任务code',
                                        'description' => '智能语音tts任务code',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '20000000',
                                    ],
                                    'Message' => [
                                        'title' => '智能语音tts任务message',
                                        'description' => '智能语音tts任务message',
                                        'type' => 'string',
                                        'example' => '-',
                                    ],
                                    'PublicUrl' => [
                                        'title' => '双录端语音合成结果可公网下载地址',
                                        'description' => '双录端语音合成结果可公网下载地址',
                                        'type' => 'string',
                                        'example' => 'http://idrs-daily.oss-cn-beijing.aliyuncs.com/mode/android/model.zip?Expires=1607004612&OSSAccessKeyId=LTAI4FcsdDhFc7h78gqB****&Signature=XXXXX',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"c761f0ec-107c-43dc-8565-45330e10e11b\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"63bb629d-92bf-4cdc-ad0b-3032c926****\\",\\n    \\"TaskId\\": \\"368cfa55-2364-4d79-aeb4-c0956c4a****\\",\\n    \\"Name\\": \\"任务1\\",\\n    \\"Code\\": 20000000,\\n    \\"Message\\": \\"-\\",\\n    \\"PublicUrl\\": \\"http://idrs-daily.oss-cn-beijing.aliyuncs.com/mode/android/model.zip?Expires=1607004612&OSSAccessKeyId=LTAI4FcsdDhFc7h78gqB****&Signature=XXXXX\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '语音合成',
        ],
        'TtsTask' => [
            'summary' => '单向视频双录-语音合成推送任务',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '任务请求参数',
                        'type' => 'object',
                        'properties' => [
                            'RoomId' => [
                                'description' => 'mrtc 房间 ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '655259585579***',
                            ],
                            'Key' => [
                                'description' => 'TTS问题KEY',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'd9ee5df9-20bf-47bf-987a-76b26984b***',
                            ],
                            'Timestamp' => [
                                'description' => '时间戳',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1662271315039',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<H5TtsResponseDTO>',
                        'description' => 'ApiResult<H5TtsResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '唯一请求识别码',
                                'type' => 'string',
                                'example' => '16A4A091-98BE-55F4-92D1-21590658***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Question' => [
                                        'description' => '问题',
                                        'type' => 'string',
                                        'example' => '北京的天气如何',
                                    ],
                                    'Answer' => [
                                        'description' => '回复',
                                        'type' => 'string',
                                        'example' => '晴朗',
                                    ],
                                    'Duration' => [
                                        'description' => '合成的音频时长，单位毫秒',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '727',
                                    ],
                                    'SpeechRate' => [
                                        'description' => '语速',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '64',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"16A4A091-98BE-55F4-92D1-21590658***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Question\\": \\"北京的天气如何\\",\\n    \\"Answer\\": \\"晴朗\\",\\n    \\"Duration\\": 727,\\n    \\"SpeechRate\\": 64\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '提交TTS任务',
        ],
        'LeaveRoom' => [
            'summary' => '单向视频双录-通知离开房间',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'RoomId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mrtc 房间 ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '661940620884***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<String>',
                        'description' => 'ApiResult<String>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID，一次请求的唯一标识。'."\n",
                                'type' => 'string',
                                'example' => '8F5F961D-07AA-5293-BFFE-32CDC251***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'string',
                                'example' => '无',
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8F5F961D-07AA-5293-BFFE-32CDC251***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"无\\",\\n  \\"Data\\": \\"无\\",\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '离开MRTC房间',
        ],
        'FaceRecognize' => [
            'summary' => '单向视频双录-人脸识别静默活体',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'FaceRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '双录质检应用ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'd61be709-49d2-4cf1-b219-cd6181f72***',
                            ],
                            'SourceImage' => [
                                'description' => '照片Base64编码。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                            ],
                            'TargetImage' => [
                                'description' => '底库照片Base64编码。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                            ],
                            'Liveness' => [
                                'description' => '是否检测真人',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<FaceRecognizeResponseDTO>',
                        'description' => 'ApiResult<FaceRecognizeResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4ba***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'ComparePassed' => [
                                        'title' => '识别是否通过',
                                        'description' => '识别是否通过',
                                        'type' => 'string',
                                        'example' => 'T ',
                                    ],
                                    'CompareScore' => [
                                        'title' => '分值',
                                        'description' => '分值',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '32.435',
                                    ],
                                    'LivenessPassed' => [
                                        'title' => '识别是否通过',
                                        'description' => '识别是否通过',
                                        'type' => 'string',
                                        'example' => 'T',
                                    ],
                                    'LivenessScore' => [
                                        'title' => '分值',
                                        'description' => '分值',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '56.34',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4ba***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"ComparePassed\\": \\"T \\",\\n    \\"CompareScore\\": 32.435,\\n    \\"LivenessPassed\\": \\"T\\",\\n    \\"LivenessScore\\": 56.34\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '人脸识别',
        ],
        'FaceLiveness' => [
            'summary' => '单向视频双录-静默活体',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'FaceRequest',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '双录质检应用ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'd61be709-49d2-4cf1-b219-cd6181f72***',
                            ],
                            'SourceImage' => [
                                'description' => '照片Base64编码。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '/9j/4AAQSkZJRgABAQAASxxxxxxx',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<FaceLivenessResponseDTO>',
                        'description' => 'ApiResult<FaceLivenessResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => '7AC54DAF-38F8-58C7-8383-3131FEDDA***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'PublicId' => [
                                        'title' => '人脸任务ID',
                                        'description' => '人脸任务ID',
                                        'type' => 'string',
                                        'example' => 'd61be709-49d2-4cf1-b219-cd6181f72***'."\n",
                                    ],
                                    'Code' => [
                                        'title' => '人脸接口返回的code',
                                        'description' => '人脸接口返回的code',
                                        'type' => 'string',
                                        'example' => '2000000',
                                    ],
                                    'Message' => [
                                        'title' => '人脸接口返回的错误信息',
                                        'description' => '人脸接口返回的错误信息',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                    'Passed' => [
                                        'title' => '识别是否通过',
                                        'description' => '识别是否通过',
                                        'type' => 'string',
                                        'example' => 'T',
                                    ],
                                    'Score' => [
                                        'title' => '分值',
                                        'description' => '分值',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '3.24324324324',
                                    ],
                                    'Status' => [
                                        'title' => '任务状态',
                                        'description' => '任务状态',
                                        'type' => 'string',
                                        'example' => 'COMPLETED',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"7AC54DAF-38F8-58C7-8383-3131FEDDA***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"PublicId\\": \\"d61be709-49d2-4cf1-b219-cd6181f72***\\\\n\\",\\n    \\"Code\\": \\"2000000\\",\\n    \\"Message\\": \\"success\\",\\n    \\"Passed\\": \\"T\\",\\n    \\"Score\\": 3.24324324324,\\n    \\"Status\\": \\"COMPLETED\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '静默活体检测',
        ],
        'CreateTtsQuestionGroup' => [
            'summary' => '单向视频双录-创建TTS问题组',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'Voice' => [
                                'description' => '发音人',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'xiaoyun',
                            ],
                            'Format' => [
                                'description' => '音频编码格式',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PCM',
                            ],
                            'Volume' => [
                                'description' => '音量大小，取值范围：0~100。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '50',
                            ],
                            'SampleRate' => [
                                'description' => '音频采样率',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '16000',
                            ],
                            'SpeechRate' => [
                                'description' => '语速，取值范围：-500~500。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '50',
                            ],
                            'PitchRate' => [
                                'description' => '音调，取值范围：-500~500。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '50',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<IdResponseDTO>',
                        'description' => 'ApiResult<IdResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '为保证一致，建议统一使用requestid',
                                'type' => 'string',
                                'example' => 'B2AADC9E-2A58-5918-AE4E-FF59E19D7***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => 'TTS任务组唯一ID',
                                        'type' => 'string',
                                        'example' => '63bb629d-92bf-4cdc-ad0b-3032c926d***',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B2AADC9E-2A58-5918-AE4E-FF59E19D7***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"63bb629d-92bf-4cdc-ad0b-3032c926d***\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '创建TTS问题组',
        ],
        'GetAsrResult' => [
            'summary' => '单向视频双录-获取语音识别结果',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'AsrTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务id',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'B2AADC9E-2A58-5918-AE4E-FF59E19D7***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<ResultResponseDTO>',
                        'description' => 'ApiResult<ResultResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '唯一请求识别码',
                                'type' => 'string',
                                'example' => 'C14ED32C-B9E4-54E7-BA85-C2B562C5B***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => 'asr识别出的文本',
                                        'type' => 'string',
                                        'example' => '北京的天气',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C14ED32C-B9E4-54E7-BA85-C2B562C5B***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Result\\": \\"北京的天气\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '获取ASR任务结果',
        ],
        'JoinRoom' => [
            'summary' => '单向视频双录-通知加入房间',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'AppId',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '双录质检应用id',
                        'type' => 'string',
                        'required' => true,
                        'example' => '4a29b426-742f-4078-8386-79b440b***',
                    ],
                ],
                [
                    'name' => 'RoomId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mrtc 房间 ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '66194***681868',
                    ],
                ],
                [
                    'name' => 'StreamId',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mrtc 视频流或音频流ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12312***2412',
                    ],
                ],
                [
                    'name' => 'RoomToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'mrtc 房间密码',
                        'type' => 'string',
                        'required' => false,
                        'example' => '006f4***b269',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<JoinRoomResponseDTO>',
                        'description' => 'ApiResult<JoinRoomResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D15744FC-97D2-5D61-A18C-8CC4FA0A3***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误消息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'RoomId' => [
                                        'description' => 'mrtc 房间 ID',
                                        'type' => 'string',
                                        'example' => '641981583353***',
                                    ],
                                    'StreamId' => [
                                        'description' => 'mrtc 视频流或音频流ID',
                                        'type' => 'string',
                                        'example' => '12312***412',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D15744FC-97D2-5D61-A18C-8CC4FA0A3***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"RoomId\\": \\"641981583353***\\",\\n    \\"StreamId\\": \\"12312***412\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '加入MRTC房间',
        ],
        'CreateTtsQuestion' => [
            'summary' => '单向视频双录-创建TTS问题',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
            ],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'QuestionGroupId' => [
                                'description' => 'TTS问题组ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '47584ba4-9781-496b-8e6f-c8525a213***'."\n",
                            ],
                            'Question' => [
                                'description' => '问题',
                                'type' => 'string',
                                'required' => true,
                                'example' => '您可以根据自己需求填写',
                            ],
                            'Answer' => [
                                'description' => '回复',
                                'type' => 'string',
                                'required' => true,
                                'example' => '您可以根据自己需求填写',
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<IdResponseDTO>',
                        'description' => 'ApiResult<IdResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'D9AA9055-F73D-592C-832B-5AEECB093***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Id' => [
                                        'description' => 'ID',
                                        'type' => 'string',
                                        'example' => '59b0bbfe-929b-4a8c-9833-3ce70b4ba***',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D9AA9055-F73D-592C-832B-5AEECB093***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Id\\": \\"59b0bbfe-929b-4a8c-9833-3ce70b4ba***\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '创建TTS问题',
        ],
        'AsrTask' => [
            'summary' => '单向视频双录-语音识别任务',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
            ],
            'parameters' => [
                [
                    'name' => 'Request',
                    'in' => 'formData',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求参数',
                        'type' => 'object',
                        'properties' => [
                            'AppId' => [
                                'description' => '双录质检应用ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'd9ee5df9-20bf-47bf-987a-76b26984b***',
                            ],
                            'RoomId' => [
                                'description' => 'mrtc 房间 ID',
                                'type' => 'string',
                                'required' => true,
                                'example' => '662027426755***',
                            ],
                            'Timestamp' => [
                                'description' => '时间戳',
                                'type' => 'integer',
                                'format' => 'int64',
                                'required' => false,
                                'example' => '1656388156399',
                            ],
                            'Event' => [
                                'description' => '事件类型，开始START，结束END',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'START',
                            ],
                            'AsrTaskId' => [
                                'description' => '任务id',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'd9ee5df9-20bf-47bf-987a-76b26984b***'."\n",
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<IdResponseDTO>',
                        'description' => 'ApiResult<IdResponseDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '阿里云为该请求生成的唯一标识符。',
                                'type' => 'string',
                                'example' => 'DF4B0162-A5E0-5F85-BEFD-CAC36E876***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'Result' => [
                                        'description' => '检测结果',
                                        'type' => 'string',
                                        'example' => '北京的天气',
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DF4B0162-A5E0-5F85-BEFD-CAC36E876***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"Result\\": \\"北京的天气\\"\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '提交ASR任务',
        ],
        'GetTtsQuestionByGroupId' => [
            'summary' => '根据TTS问题组ID获取TTS问题信息',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'GroupId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'TTS问题组ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => '47584ba4-9781-496b-8e6f-c8525a213***',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<GetQuestionsDTO>',
                        'description' => 'ApiResult<GetQuestionsDTO>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '为公共参数，每个请求的id都是唯一的',
                                'type' => 'string',
                                'example' => 'D2DFCDC3-1ECF-599D-8EDA-8F598E5A9***',
                            ],
                            'Code' => [
                                'description' => '状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'description' => '错误信息。',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'description' => '数据',
                                'type' => 'object',
                                'properties' => [
                                    'GroupId' => [
                                        'description' => 'TTS问题组ID'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => '47584ba4-9781-496b-8e6f-c8525a213***',
                                    ],
                                    'Questions' => [
                                        'description' => '问题列表',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '问题信息',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'description' => '问题id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1',
                                                ],
                                                'TenantId' => [
                                                    'description' => '租户id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '2',
                                                ],
                                                'QuestionGroupId' => [
                                                    'description' => '问题组id',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '47584ba4-9781-496b-8e6f-c8525a213***',
                                                ],
                                                'QuestionKey' => [
                                                    'description' => '问题key',
                                                    'type' => 'string',
                                                    'example' => '47584ba4-9781-496b-8e6f-c8525a213***',
                                                ],
                                                'Question' => [
                                                    'description' => '问题。',
                                                    'type' => 'string',
                                                    'example' => '北京的天气如何',
                                                ],
                                                'Answer' => [
                                                    'description' => '回复',
                                                    'type' => 'string',
                                                    'example' => '晴朗',
                                                ],
                                                'Duration' => [
                                                    'description' => '合成的音频时长，单位毫秒',
                                                    'type' => 'number',
                                                    'format' => 'double',
                                                    'example' => '674',
                                                ],
                                                'OssUrl' => [
                                                    'description' => '下载地址',
                                                    'type' => 'string',
                                                    'example' => 'https://pts-data-f***.pcm',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D2DFCDC3-1ECF-599D-8EDA-8F598E5A9***\\",\\n  \\"Code\\": 0,\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": {\\n    \\"GroupId\\": \\"47584ba4-9781-496b-8e6f-c8525a213***\\",\\n    \\"Questions\\": [\\n      {\\n        \\"Id\\": 1,\\n        \\"TenantId\\": 2,\\n        \\"QuestionGroupId\\": 0,\\n        \\"QuestionKey\\": \\"47584ba4-9781-496b-8e6f-c8525a213***\\",\\n        \\"Question\\": \\"北京的天气如何\\",\\n        \\"Answer\\": \\"晴朗\\",\\n        \\"Duration\\": 674,\\n        \\"OssUrl\\": \\"https://pts-data-f***.pcm\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200\\n}","type":"json"}]',
            'title' => '根据TTS问题组ID获取此ID下所有的TTS信息',
        ],
        'GetRecordsByOuterBusinessId' => [
            'summary' => '根据OuterBusinessId查询上报结果信息接口',
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
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'OuterBusinessId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务ID，用户自定义',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ads32efef43',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'ApiResult<List<Record>>',
                        'description' => 'ApiResult<List<Record>>',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'requestId',
                                'description' => 'requestId',
                                'type' => 'string',
                                'example' => '0f1c45cd-3eee-4e60-b505-2e330b875***',
                            ],
                            'Code' => [
                                'title' => 'code',
                                'description' => 'code',
                                'type' => 'string',
                                'example' => 'OK',
                            ],
                            'Message' => [
                                'title' => '提示',
                                'description' => '提示',
                                'type' => 'string',
                                'example' => '-',
                            ],
                            'Data' => [
                                'title' => '数据',
                                'description' => '数据',
                                'type' => 'array',
                                'items' => [
                                    'description' => '数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => '双录记录id',
                                            'description' => '双录记录id',
                                            'type' => 'string',
                                            'example' => '0f1c45cd-3eee-4e60-b505-2e330b875***',
                                        ],
                                        'CreatedAt' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'DetectProcessName' => [
                                            'title' => '业务检测流程名',
                                            'description' => '业务检测流程名',
                                            'type' => 'string',
                                            'example' => 'XX流程',
                                        ],
                                        'DepartmentName' => [
                                            'title' => '部门名',
                                            'description' => '部门名',
                                            'type' => 'string',
                                            'example' => 'XX部门',
                                        ],
                                        'AppName' => [
                                            'title' => '应用名',
                                            'description' => '应用名',
                                            'type' => 'string',
                                            'example' => 'XX应用',
                                        ],
                                        'VideoUrl' => [
                                            'title' => '视频地址',
                                            'description' => '视频地址',
                                            'type' => 'string',
                                            'example' => 'http://oss.aliyuncs.com/1.mp4',
                                        ],
                                        'MetaUrl' => [
                                            'title' => 'meta地址',
                                            'description' => 'meta地址',
                                            'type' => 'string',
                                            'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                        ],
                                        'ResultUrl' => [
                                            'title' => '结果地址',
                                            'description' => '结果地址',
                                            'type' => 'string',
                                            'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                        ],
                                        'RecordAt' => [
                                            'title' => '录制时间',
                                            'description' => '录制时间',
                                            'type' => 'string',
                                            'example' => '2020-07-14T14:01:41.000+08:00',
                                        ],
                                        'Duration' => [
                                            'title' => '时长',
                                            'description' => '时长',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '22',
                                        ],
                                        'Status' => [
                                            'title' => '检测状态',
                                            'description' => '检测状态',
                                            'type' => 'string',
                                            'example' => 'COMPLETED',
                                        ],
                                        'RoomId' => [
                                            'title' => 'mrtc房间id',
                                            'description' => 'mrtc房间id',
                                            'type' => 'string',
                                            'example' => '641981583353***',
                                        ],
                                        'RecordRoomList' => [
                                            'title' => '远程双录文件地址列表',
                                            'description' => '远程双录文件地址列表',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '房间列表',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Role' => [
                                                        'title' => '角色',
                                                        'description' => '角色',
                                                        'type' => 'string',
                                                        'example' => 'user',
                                                    ],
                                                    'RecordType' => [
                                                        'title' => '录制视频类型',
                                                        'description' => '录制视频类型',
                                                        'type' => 'string',
                                                        'example' => 'Mix',
                                                    ],
                                                    'RoomVideoUrl' => [
                                                        'title' => '视频地址',
                                                        'description' => '视频地址',
                                                        'type' => 'string',
                                                        'example' => 'http://oss.aliyuncs.com/1.mp4',
                                                    ],
                                                    'RoomMetaUrl' => [
                                                        'title' => 'meta地址',
                                                        'description' => 'meta地址',
                                                        'type' => 'string',
                                                        'example' => 'http://oss.aliyuncs.com/1.mp4.meta',
                                                    ],
                                                    'RoomResultUrl' => [
                                                        'title' => '结果地址',
                                                        'description' => '结果地址',
                                                        'type' => 'string',
                                                        'example' => 'http://oss.aliyuncs.com/1.mp4.json',
                                                    ],
                                                    'RoomRecordAt' => [
                                                        'title' => '录制时间',
                                                        'description' => '录制时间',
                                                        'type' => 'string',
                                                        'example' => '2020-07-14T14:01:41.000+08:00',
                                                    ],
                                                    'RoomStatus' => [
                                                        'title' => '检测状态',
                                                        'description' => '检测状态',
                                                        'type' => 'string',
                                                        'example' => '1',
                                                    ],
                                                    'RtcRecordId' => [
                                                        'description' => 'mrtc录制ID',
                                                        'type' => 'string',
                                                        'example' => 'record_65703154805715668342',
                                                    ],
                                                    'OuterBusinessId' => [
                                                        'description' => '业务ID，用户自定义',
                                                        'type' => 'string',
                                                        'example' => 'ads32efef43',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'OuterBusinessId' => [
                                            'description' => '业务ID，用户自定义',
                                            'type' => 'string',
                                            'example' => 'ads32efef43',
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'title' => '给 pop 使用的',
                                'description' => '给 pop 使用的',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                            'HttpCode' => [
                                'description' => 'http状态码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Errors' => [
                                'title' => '错误列表',
                                'description' => '错误列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '错误列表',
                                    'type' => 'object',
                                    'properties' => [
                                        'Field' => [
                                            'description' => '错误 ID',
                                            'type' => 'string',
                                            'example' => 'A1899517-BB99-5D3E-A71B-97524DCB0***',
                                        ],
                                        'Message' => [
                                            'description' => '错误信息',
                                            'type' => 'string',
                                            'example' => '-',
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
                        'errorCode' => 'InvalidRequest',
                        'errorMessage' => 'The request is invalid.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'Unauthorized',
                        'errorMessage' => 'The request requires user authentication.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'Forbidden',
                        'errorMessage' => 'Access to this resource on the server is denied.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ResourceNotFound',
                        'errorMessage' => 'The specified resource does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal server error occurred.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0f1c45cd-3eee-4e60-b505-2e330b875***\\",\\n  \\"Code\\": \\"OK\\",\\n  \\"Message\\": \\"-\\",\\n  \\"Data\\": [\\n    {\\n      \\"Id\\": \\"0f1c45cd-3eee-4e60-b505-2e330b875***\\",\\n      \\"CreatedAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"DetectProcessName\\": \\"XX流程\\",\\n      \\"DepartmentName\\": \\"XX部门\\",\\n      \\"AppName\\": \\"XX应用\\",\\n      \\"VideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n      \\"MetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n      \\"ResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n      \\"RecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n      \\"Duration\\": 22,\\n      \\"Status\\": \\"COMPLETED\\",\\n      \\"RoomId\\": \\"641981583353***\\",\\n      \\"RecordRoomList\\": [\\n        {\\n          \\"Role\\": \\"user\\",\\n          \\"RecordType\\": \\"Mix\\",\\n          \\"RoomVideoUrl\\": \\"http://oss.aliyuncs.com/1.mp4\\",\\n          \\"RoomMetaUrl\\": \\"http://oss.aliyuncs.com/1.mp4.meta\\",\\n          \\"RoomResultUrl\\": \\"http://oss.aliyuncs.com/1.mp4.json\\",\\n          \\"RoomRecordAt\\": \\"2020-07-14T14:01:41.000+08:00\\",\\n          \\"RoomStatus\\": \\"1\\",\\n          \\"RtcRecordId\\": \\"record_65703154805715668342\\",\\n          \\"OuterBusinessId\\": \\"ads32efef43\\"\\n        }\\n      ],\\n      \\"OuterBusinessId\\": \\"ads32efef43\\"\\n    }\\n  ],\\n  \\"Success\\": true,\\n  \\"HttpCode\\": 200,\\n  \\"Errors\\": [\\n    {\\n      \\"Field\\": \\"A1899517-BB99-5D3E-A71B-97524DCB0***\\",\\n      \\"Message\\": \\"-\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '根据业务ID获取双录记录',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-2-pop',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-pop',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-gov-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-nu16-b01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-edge-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-fujian',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-haidian-cm12-c01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-bj-b01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-prod-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-2',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-internal-test-3',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-test-306',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong-finance-pop',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote-nebula-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-north-2-gov-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao-nebula',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et15-b01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-et2-b01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-inner',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-internal-test-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-inner',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-st4-d01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-su18-b01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wuhan',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-yushanfang',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangbei-na61-b01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou-na62-a01',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhengzhou-nebula-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1-oxs',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'rus-west-1-pop',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'idrsservice.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'idrsservice.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'idrsservice.cn-shanghai-finance-1.aliyuncs.com',
        ],
    ],
];
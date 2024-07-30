<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'grace',
        'version' => '2022-06-06',
    ],
    'directories' => [
        'UploadFileByURL',
        'UploadFileByOSS',
        'AnalyzeFile',
        'GetFile',
    ],
    'components' => [
        'schemas' => [
            'AnalysisConfig' => [
                'title' => 'analysisConfig',
                'type' => 'object',
                'properties' => [
                    'highHeapUsageThreshold' => [
                        'title' => 'highHeapUsageThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highHumongousUsageThreshold' => [
                        'title' => 'highHumongousUsageThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'longPauseThreshold' => [
                        'title' => 'longPauseThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highOldUsageThreshold' => [
                        'title' => 'highOldUsageThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highMetaspaceUsageThreshold' => [
                        'title' => 'highMetaspaceUsageThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highPromotionThreshold' => [
                        'title' => 'highPromotionThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'tooManyOldGCThreshold' => [
                        'title' => 'tooManyOldGCThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'timeRange' => [
                        'title' => 'timeRange',
                        'type' => 'object',
                        'properties' => [
                            'end' => [
                                'title' => 'end',
                                'type' => 'number',
                                'format' => 'double',
                            ],
                            'start' => [
                                'title' => 'start',
                                'type' => 'number',
                                'format' => 'double',
                            ],
                        ],
                    ],
                    'fullGCFrequentIntervalThreshold' => [
                        'title' => 'fullGCFrequentIntervalThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'badThroughputThreshold' => [
                        'title' => 'badThroughputThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'smallGenerationThreshold' => [
                        'title' => 'smallGenerationThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'oldGCFrequentIntervalThreshold' => [
                        'title' => 'oldGCFrequentIntervalThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'youngGCFrequentIntervalThreshold' => [
                        'title' => 'youngGCFrequentIntervalThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'longConcurrentThreshold' => [
                        'title' => 'longConcurrentThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'lowUsrThreshold' => [
                        'title' => 'lowUsrThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'highSysThreshold' => [
                        'title' => 'highSysThreshold',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
            'FileInfo' => [
                'title' => '文件信息',
                'description' => '文件信息',
                'type' => 'object',
                'properties' => [
                    'type' => [
                        'title' => '文件类型',
                        'description' => '文件类型',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'gc_log' => 'GC_LOG',
                            'thread_dump' => 'THREAD_DMP',
                            'heap_dump' => 'HEAP_DUMP',
                        ],
                        'example' => 'HEAP_DUMP'."\n",
                    ],
                    'size' => [
                        'title' => '文件大小，单位byte',
                        'description' => '文件大小，单位byte',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '254799093',
                    ],
                    'creationTime' => [
                        'title' => '创建时间',
                        'description' => '创建时间',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1683788649000',
                    ],
                    'displayName' => [
                        'title' => '文件展示名字',
                        'description' => '文件展示名字',
                        'type' => 'string',
                        'example' => 'myheap.bin',
                    ],
                    'analyzeProgress' => [
                        'title' => '分析进度',
                        'description' => '分析进度',
                        'type' => 'object',
                        'properties' => [
                            'message' => [
                                'title' => '分析详情',
                                'description' => '分析详情',
                                'type' => 'string',
                                'example' => 'Trying to analyze....',
                            ],
                            'percent' => [
                                'title' => '分析进度',
                                'description' => '分析进度',
                                'type' => 'number',
                                'format' => 'double',
                                'example' => '1.0',
                            ],
                            'state' => [
                                'title' => '分析状态',
                                'description' => '分析状态',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'IN_PROGRESS' => 'IN_PROGRESS',
                                    'SUCCESS' => 'SUCCESS',
                                    'NOT_STARTED' => 'NOT_STARTED',
                                    'ERROR' => 'ERROR',
                                ],
                                'example' => 'IN_PROGRESS',
                            ],
                        ],
                        'enumValueTitles' => [],
                    ],
                    'labels' => [
                        'title' => '文件标签',
                        'description' => '文件标签',
                        'type' => 'string',
                        'example' => 'source:local',
                    ],
                    'shared' => [
                        'title' => '是否允许共享访问',
                        'description' => '是否允许共享访问',
                        'type' => 'boolean',
                        'example' => 'true',
                    ],
                    'transferState' => [
                        'title' => '文件传输状态',
                        'description' => '文件传输状态',
                        'type' => 'string',
                        'enumValueTitles' => [
                            'IN_PROGRESS' => 'IN_PROGRESS',
                            'SUCCESS' => 'SUCCESS',
                            'NOT_STARTED' => 'NOT_STARTED',
                            'ERROR' => 'ERROR',
                        ],
                        'example' => 'ERROR',
                    ],
                    'name' => [
                        'title' => '文件名',
                        'description' => '文件名',
                        'type' => 'string',
                        'example' => '1995846817640449-1683529779418-file.log',
                    ],
                    'transferProgress' => [
                        'title' => '传输进度',
                        'description' => '传输进度',
                        'type' => 'object',
                        'properties' => [
                            'totalSize' => [
                                'title' => '总大小，单位byte',
                                'description' => '总大小，单位byte',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '3069',
                            ],
                            'transferredSize' => [
                                'title' => '已传输大小，单位byte',
                                'description' => '已传输大小，单位byte',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '22',
                            ],
                        ],
                    ],
                    'requestId' => [
                        'title' => '请求ID',
                        'description' => '请求ID',
                        'type' => 'string',
                        'example' => 'B14EABCD-5181-582F-8EB7-6DB142FB529F',
                    ],
                ],
            ],
            'PhaseStatisticItem' => [
                'title' => 'A short description of struct',
                'description' => 'GC阶段的信息',
                'type' => 'object',
                'properties' => [
                    'name' => [
                        'title' => 'name',
                        'type' => 'string',
                    ],
                    'count' => [
                        'title' => 'count',
                        'type' => 'integer',
                        'format' => 'int32',
                    ],
                    'intervalAvg' => [
                        'title' => 'intervalAvg',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'intervalMin' => [
                        'title' => 'intervalMin',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'durationAvg' => [
                        'title' => 'durationAvg',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'durationMax' => [
                        'title' => 'durationMax',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                    'durationTotal' => [
                        'title' => 'durationTotal',
                        'type' => 'number',
                        'format' => 'double',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'UploadFileByURL' => [
            'summary' => '通过URL上传文件',
            'path' => '/UploadFileByURL',
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
            'consumes' => [],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'url',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件下载链接url',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://bucket.oss-cn-hangzhou.aliyuncs.com/file.log',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'heap_dump',
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '显示名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'atp_stack.log',
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
                            'requestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'D052C0F4-5884-5B01-A8CC-D63B9A549B6C',
                            ],
                            'name' => [
                                'title' => '若创建接口为异步实现，则需返回明确的JobId。',
                                'description' => '文件名称',
                                'type' => 'string',
                                'example' => '1597871211794192-1682567255445-bbbbb',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'IdempotentParameterMismatch',
                        'errorMessage' => 'The request uses the same client token as a previous, but non-identical request. Do not reuse a client token with different requests, unless the requests are identical.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"D052C0F4-5884-5B01-A8CC-D63B9A549B6C\\",\\n  \\"name\\": \\"1597871211794192-1682567255445-bbbbb\\"\\n}","type":"json"}]',
            'title' => '通过URL上传文件',
        ],
        'UploadFileByOSS' => [
            'summary' => '通过OSS上传文件到ATP平台。',
            'path' => '/UploadFileByOSS',
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
                    'name' => 'endpoint',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'oss endpoint',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'https://oss-cn-hangzhou.aliyuncs.com',
                    ],
                ],
                [
                    'name' => 'bucketName',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'ossbucket名字',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'mybucket',
                    ],
                ],
                [
                    'name' => 'objectName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '对象名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'heap.bin',
                    ],
                ],
                [
                    'name' => 'type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件类型',
                        'type' => 'string',
                        'required' => true,
                        'enumValueTitles' => [
                            'gc_log' => 'gc_log',
                            'thread_dump' => 'thread_dump',
                            'heap_dump' => 'heap_dump',
                        ],
                        'example' => 'thread_dump',
                    ],
                ],
                [
                    'name' => 'displayName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '显示名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'heap.bin',
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
                            'name' => [
                                'title' => 'Id of the request',
                                'description' => '文件名称',
                                'type' => 'string',
                                'example' => '1597871211794192-1665457027646-grace-storage1-heap.bin',
                            ],
                            'requestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'E7D6CC4E-C216-5313-A9A5-B5DA619ED431',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"name\\": \\"1597871211794192-1665457027646-grace-storage1-heap.bin\\",\\n  \\"requestId\\": \\"E7D6CC4E-C216-5313-A9A5-B5DA619ED431\\"\\n}","type":"json"}]',
            'title' => '通过OSS上传文件',
        ],
        'AnalyzeFile' => [
            'summary' => '分析文件。',
            'path' => '/AnalyzeFile',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '文件名称',
                        'type' => 'string',
                        'required' => false,
                        'example' => '123-456-file.log',
                    ],
                ],
                [
                    'name' => 'token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '共享访问文件token',
                        'type' => 'string',
                        'required' => false,
                        'example' => '6e54e9d5-3147-458e-a85d-bae8722de747',
                    ],
                ],
                [
                    'name' => 'keepUnreachableObjects',
                    'in' => 'query',
                    'schema' => [
                        'description' => '是否保留不可达对象',
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
                            'requestId' => [
                                'description' => '请求id',
                                'type' => 'string',
                                'example' => 'B14EC7CC-5181-582F-8EB7-6DB142FB529F',
                            ],
                            'fileName' => [
                                'description' => '文件名称',
                                'type' => 'string',
                                'example' => '207076258906603549-1667270208299-heap_dump_11.195.186.232_1667269965442.bin',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"B14EC7CC-5181-582F-8EB7-6DB142FB529F\\",\\n  \\"fileName\\": \\"207076258906603549-1667270208299-heap_dump_11.195.186.232_1667269965442.bin\\"\\n}","type":"json"}]',
            'title' => '分析文件',
        ],
        'GetFile' => [
            'summary' => '获取文件信息。',
            'path' => '/GetFile',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实例 ID。',
                        'description' => '文件名称',
                        'type' => 'string',
                        'required' => true,
                        'example' => '1597871211794192-1682563156700-402185-1682563123810-bbbbb',
                    ],
                ],
                [
                    'name' => 'token',
                    'in' => 'query',
                    'schema' => [
                        'description' => '共享访问token',
                        'type' => 'string',
                        'required' => false,
                        'example' => '924cb178-32e6-453a-a553-83289f9f494c',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '文件信息',
                        '$ref' => '#/components/schemas/FileInfo',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"type\\": \\"\\",\\n  \\"size\\": 0,\\n  \\"creationTime\\": 0,\\n  \\"displayName\\": \\"\\",\\n  \\"analyzeProgress\\": {\\n    \\"message\\": \\"\\",\\n    \\"percent\\": 0,\\n    \\"state\\": \\"\\"\\n  },\\n  \\"labels\\": \\"\\",\\n  \\"shared\\": true,\\n  \\"transferState\\": \\"\\",\\n  \\"name\\": \\"\\",\\n  \\"transferProgress\\": {\\n    \\"totalSize\\": 0,\\n    \\"transferredSize\\": 0\\n  },\\n  \\"requestId\\": \\"\\"\\n}","type":"json"}]',
            'title' => '获取文件信息',
        ],
    ],
    'endpoints' => [],
];
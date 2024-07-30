<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'PTS',
        'version' => '2020-10-20',
    ],
    'directories' => [
        [
            'id' => 94910,
            'title' => 'PTS压测',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 94911,
                    'title' => '压测基线',
                    'type' => 'directory',
                    'children' => [
                        'CreatePtsSceneBaseLineFromReport',
                        'DeletePtsSceneBaseLine',
                        'UpdatePtsSceneBaseLine',
                        'GetPtsSceneBaseLine',
                    ],
                ],
                [
                    'id' => 94916,
                    'title' => '压测报告',
                    'type' => 'directory',
                    'children' => [
                        'ListPtsReports',
                        'GetPtsReportDetails',
                        'GetPtsReportsBySceneId',
                        'GetPtsDebugSampleLogs',
                    ],
                ],
                [
                    'id' => 94919,
                    'title' => '压测执行',
                    'type' => 'directory',
                    'children' => [
                        'StartDebugPtsScene',
                        'StartPtsScene',
                        'StopDebugPtsScene',
                        'StopPtsScene',
                        'GetPtsSceneRunningData',
                        'GetPtsSceneRunningStatus',
                        'AdjustPtsSceneSpeed',
                    ],
                ],
                [
                    'id' => 94926,
                    'title' => '压测场景',
                    'type' => 'directory',
                    'children' => [
                        'CreatePtsScene',
                        'SavePtsScene',
                        'DeletePtsScene',
                        'DeletePtsScenes',
                        'ModifyPtsScene',
                        'GetPtsScene',
                        'ListPtsScene',
                    ],
                ],
            ],
        ],
        [
            'id' => 94889,
            'title' => 'JMeter压测',
            'type' => 'directory',
            'children' => [
                [
                    'id' => 94890,
                    'title' => '压测报告',
                    'type' => 'directory',
                    'children' => [
                        'GetJMeterReportDetails',
                        'GetJMeterLogs',
                        'GetJMeterSampleMetrics',
                        'GetJMeterSamplingLogs',
                        'ListJMeterReports',
                    ],
                ],
                [
                    'id' => 94895,
                    'title' => '压测执行',
                    'type' => 'directory',
                    'children' => [
                        'StartDebuggingJMeterScene',
                        'StartTestingJMeterScene',
                        'StopDebuggingJMeterScene',
                        'StopTestingJMeterScene',
                        'GetJMeterSceneRunningData',
                        'AdjustJMeterSceneSpeed',
                    ],
                ],
                [
                    'id' => 94901,
                    'title' => '压测场景',
                    'type' => 'directory',
                    'children' => [
                        'RemoveOpenJMeterScene',
                        'SaveOpenJMeterScene',
                        'GetOpenJMeterScene',
                        'ListOpenJMeterScenes',
                    ],
                ],
                [
                    'id' => 94906,
                    'title' => '压测环境',
                    'type' => 'directory',
                    'children' => [
                        'RemoveEnv',
                        'SaveEnv',
                        'ListEnvs',
                    ],
                ],
            ],
        ],
        [
            'id' => 167110,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GetAllRegions',
                'GetUserVpcs',
                'GetUserVpcSecurityGroup',
                'GetUserVpcVSwitch',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreatePtsSceneBaseLineFromReport' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'VCB78HB',
                    ],
                ],
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '报告ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'HNB78HB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，如成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F7D2CE0-AE4C-4143-954A-8E4595AF86A6',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
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
                        'errorCode' => 'CreatePtsSceneBaseLineFromReportFail',
                        'errorMessage' => 'The scene or the report cannot be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"4F7D2CE0-AE4C-4143-954A-8E4595AF86A6\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<CreatePtsSceneBaseLineFromReportResponse>\\n    <Message/>\\n    <RequestId>4F7D2CE0-AE4C-4143-954A-8E4595AF86A6</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</CreatePtsSceneBaseLineFromReportResponse>","errorExample":""}]',
            'title' => '创建场景基线',
            'summary' => '将一个报告数据设置为场景基线。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeletePtsSceneBaseLine' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NHGV4CDG',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '	'."\n"
                                    .'错误提示信息，如成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F7D2XE0-AE4C-4143-955A-8E4595AF86A6',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
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
                        'errorCode' => 'DeletePtsSceneBaseLineFail',
                        'errorMessage' => 'The scene cannot be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"4F7D2XE0-AE4C-4143-955A-8E4595AF86A6\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeletePtsSceneBaseLineResponse>\\n    <Message/>\\n    <RequestId>4F7D2XE0-AE4C-4143-955A-8E4595AF86A6</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeletePtsSceneBaseLineResponse>","errorExample":""}]',
            'title' => '删除场景基线',
            'summary' => '删除场景设置的基线信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'UpdatePtsSceneBaseLine' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NB54CV',
                    ],
                ],
                [
                    'name' => 'SceneBaseline',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '场景基线数据。可以直接使用amazon-pts-api中的二方包的SceneBaseline类的toJSONString传作为入参。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '{"avgRt":1,"avgTps":1,"failCountBiz":1,"failCountReq":1,"seg90Rt":1,"seg99Rt":2,"successRateBiz":0.5,"successRateReq":1}',
                    ],
                ],
                [
                    'name' => 'ApiBaselines',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => 'API基线数据。可以直接使用amazon-pts-api中的二方包的ApiBaseLine类的list数组的toJSONString传作为入参。',
                        'type' => 'object',
                        'required' => false,
                        'example' => '[{"avgRt":1,"avgTps":1,"failCountBiz":1,"failCountReq":182381,"id":362447,"maxRt":3051,"minRt":0,"name":"1-1","seg50Rt":1,"seg75Rt":1,"seg90Rt":1,"seg99Rt":3,"successRateBiz":1,"successRateReq":0,"timingConnAvg":0},{"avgRt":1.06,"avgTps":1,"failCountBiz":0,"failCountReq":151143,"id":362446,"maxRt":3068,"minRt":0,"name":"dd","seg50Rt":1,"seg75Rt":1,"seg90Rt":1,"seg99Rt":2,"successRateBiz":1,"successRateReq":0}]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，如成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F7D2CE0-AE4C-4143-955A-8E4595AF86A6',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
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
                        'errorCode' => 'UpdatePtsSceneBaseLineFail',
                        'errorMessage' => 'The scene cannot be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"4F7D2CE0-AE4C-4143-955A-8E4595AF86A6\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<UpdatePtsSceneBaseLineResponse>\\n    <Message/>\\n    <RequestId>4F7D2CE0-AE4C-4143-955A-8E4595AF86A6</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</UpdatePtsSceneBaseLineResponse>","errorExample":""}]',
            'title' => '修改场景基线',
            'summary' => '更新一个场景的基线数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPtsSceneBaseLine' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NB54CV',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SceneId' => [
                                'description' => '场景ID。',
                                'type' => 'string',
                                'example' => 'NHG67BF',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F7D2CE0-AE4C-4143-955A-8E4595AF86A6',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，如成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Baseline' => [
                                'description' => '基线数据。',
                                'type' => 'object',
                                'properties' => [
                                    'SceneBaseline' => [
                                        'description' => '场景基线数据。',
                                        'type' => 'object',
                                        'properties' => [
                                            'FailCountBiz' => [
                                                'description' => '业务失败数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1000',
                                            ],
                                            'SuccessRateBiz' => [
                                                'description' => '业务成功率。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '0.1',
                                            ],
                                            'AvgRt' => [
                                                'description' => '平均RT。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '10',
                                            ],
                                            'FailCountReq' => [
                                                'description' => '请求失败数。',
                                                'type' => 'integer',
                                                'format' => 'int64',
                                                'example' => '1000',
                                            ],
                                            'AvgTps' => [
                                                'description' => '平均TPS。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '1000',
                                            ],
                                            'Seg99Rt' => [
                                                'description' => '99分位RT。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '10',
                                            ],
                                            'SuccessRateReq' => [
                                                'description' => '请求成功率。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '0.9',
                                            ],
                                            'Seg90Rt' => [
                                                'description' => '90分位RT。',
                                                'type' => 'number',
                                                'format' => 'float',
                                                'example' => '10',
                                            ],
                                        ],
                                    ],
                                    'Name' => [
                                        'description' => '场景名。',
                                        'type' => 'string',
                                        'example' => '压测场景',
                                    ],
                                    'ApiBaselines' => [
                                        'description' => 'API的基线数据。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FailCountBiz' => [
                                                    'description' => '业务失败数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'AvgTps' => [
                                                    'description' => '平均TPS。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '1000',
                                                ],
                                                'MinRt' => [
                                                    'description' => '最小RT。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '8',
                                                ],
                                                'Seg99Rt' => [
                                                    'description' => '99分位RT。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '50',
                                                ],
                                                'MaxRt' => [
                                                    'description' => '最大RT。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '50',
                                                ],
                                                'Seg90Rt' => [
                                                    'description' => '90分位RT。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '40',
                                                ],
                                                'SuccessRateBiz' => [
                                                    'description' => '业务成功率。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.1',
                                                ],
                                                'AvgRt' => [
                                                    'description' => '平均RT。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '10',
                                                ],
                                                'FailCountReq' => [
                                                    'description' => '请求失败数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '100',
                                                ],
                                                'Name' => [
                                                    'description' => 'API名称。',
                                                    'type' => 'string',
                                                    'example' => '下单API',
                                                ],
                                                'SuccessRateReq' => [
                                                    'description' => '请求成功率。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '0.9',
                                                ],
                                                'Id' => [
                                                    'description' => 'API的ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '76543',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
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
                        'errorCode' => 'GetPtsSceneBaseLineFail',
                        'errorMessage' => 'The scene information cannot be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SceneId\\": \\"NHG67BF\\",\\n  \\"RequestId\\": \\"4F7D2CE0-AE4C-4143-955A-8E4595AF86A6\\",\\n  \\"Message\\": \\"空\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Baseline\\": {\\n    \\"SceneBaseline\\": {\\n      \\"FailCountBiz\\": 1000,\\n      \\"SuccessRateBiz\\": 0.1,\\n      \\"AvgRt\\": 10,\\n      \\"FailCountReq\\": 1000,\\n      \\"AvgTps\\": 1000,\\n      \\"Seg99Rt\\": 10,\\n      \\"SuccessRateReq\\": 0.9,\\n      \\"Seg90Rt\\": 10\\n    },\\n    \\"Name\\": \\"压测场景\\",\\n    \\"ApiBaselines\\": [\\n      {\\n        \\"FailCountBiz\\": 100,\\n        \\"AvgTps\\": 1000,\\n        \\"MinRt\\": 8,\\n        \\"Seg99Rt\\": 50,\\n        \\"MaxRt\\": 50,\\n        \\"Seg90Rt\\": 40,\\n        \\"SuccessRateBiz\\": 0.1,\\n        \\"AvgRt\\": 10,\\n        \\"FailCountReq\\": 100,\\n        \\"Name\\": \\"下单API\\",\\n        \\"SuccessRateReq\\": 0.9,\\n        \\"Id\\": 76543\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetPtsSceneBaseLineResponse>\\n    <SceneId>NHG67BF</SceneId>\\n    <RequestId>4F7D2CE0-AE4C-4143-955A-8E4595AF86A6</RequestId>\\n    <Message/>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Baseline>\\n        <SceneBaseline>\\n            <FailCountBiz>1000</FailCountBiz>\\n            <SuccessRateBiz>0.1</SuccessRateBiz>\\n            <AvgRt>10</AvgRt>\\n            <FailCountReq>1000</FailCountReq>\\n            <AvgTps>1000</AvgTps>\\n            <Seg99Rt>10</Seg99Rt>\\n            <SuccessRateReq>0.9</SuccessRateReq>\\n            <Seg90Rt>10</Seg90Rt>\\n        </SceneBaseline>\\n        <Name>压测场景</Name>\\n        <ApiBaselines>\\n            <FailCountBiz>100</FailCountBiz>\\n            <AvgTps>1000</AvgTps>\\n            <MinRt>8</MinRt>\\n            <Seg99Rt>50</Seg99Rt>\\n            <MaxRt>50</MaxRt>\\n            <Seg90Rt>40</Seg90Rt>\\n            <SuccessRateBiz>0.1</SuccessRateBiz>\\n            <AvgRt>10</AvgRt>\\n            <FailCountReq>100</FailCountReq>\\n            <Name>下单API</Name>\\n            <SuccessRateReq>0.9</SuccessRateReq>\\n            <Id>76543</Id>\\n        </ApiBaselines>\\n    </Baseline>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetPtsSceneBaseLineResponse>","errorExample":""}]',
            'title' => '查询场景基线',
            'summary' => '查询场景设置的基线数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPtsReports' => [
            'summary' => '根据条件列出PTS报告的概要信息。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '请求第N页的报告信息，N从1开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '每页请求的报告数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '20',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '要查看的报告的场景id',
                        'description' => '要查看的报告的场景ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '1PDAL8H',
                    ],
                ],
                [
                    'name' => 'ReportId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '报告ID',
                        'description' => '报告ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7RLPM3Y2',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '报告的起始时间，单位为ms',
                        'description' => '报告的起始时间戳，单位为ms。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1637115303000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '报告的结束时间',
                        'description' => '报告的结束时间戳，单位为ms。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1637115306000',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '报告关键字',
                        'description' => '报告关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '根据条件查询到的报告总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E4LR80-15P1-555A-9ZZF-B736AZO5E5ID',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空字符串。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '每一页返回的报告数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '返回的是第N页的报告信息，N从1开始。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Reports' => [
                                'description' => '报告信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报告详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ReportName' => [
                                            'title' => '报告名称',
                                            'description' => '报告名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Duration' => [
                                            'title' => '压测持续时间',
                                            'description' => '压测持续时间。',
                                            'type' => 'string',
                                            'example' => '10分钟',
                                        ],
                                        'ReportId' => [
                                            'title' => '报告id',
                                            'description' => '报告ID。',
                                            'type' => 'string',
                                            'example' => '7RLPM3Y2',
                                        ],
                                        'Vum' => [
                                            'title' => '消耗的vum',
                                            'description' => '消耗的VUM。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'ActualStartTime' => [
                                            'title' => '压测开始时间',
                                            'description' => '压测开始时间戳，单位为ms。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637157073000',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'true: 成功。'."\n"
                                    .'false: 失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'ReportNotExist',
                        'errorMessage' => 'The report does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"A8E4LR80-15P1-555A-9ZZF-B736AZO5E5ID\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Reports\\": [\\n    {\\n      \\"ReportName\\": \\"test\\",\\n      \\"Duration\\": \\"10分钟\\",\\n      \\"ReportId\\": \\"7RLPM3Y2\\",\\n      \\"Vum\\": 1000,\\n      \\"ActualStartTime\\": 1637157073000\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListPtsReportsResponse>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message/>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Reports>\\n        <ReportName>test</ReportName>\\n        <Duration>10分钟</Duration>\\n        <ReportId>7R4RE352</ReportId>\\n        <Vum>1000</Vum>\\n        <ActualStartTime>1637157073000</ActualStartTime>\\n    </Reports>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListPtsReportsResponse>","errorExample":""}]',
            'title' => '查询PTS报告列表',
        ],
        'GetPtsReportDetails' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'G5HCVS',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每次启动场景生成的任务ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'OH5HA3VB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC4E3177-6745-4925-B423-4E89VV34221A',
                            ],
                            'ReportOverView' => [
                                'description' => '报告概要信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ReportName' => [
                                        'description' => '报告名。',
                                        'type' => 'string',
                                        'example' => '下单场景',
                                    ],
                                    'EndTime' => [
                                        'description' => '压测结束时间。',
                                        'type' => 'string',
                                        'example' => '1988203944',
                                    ],
                                    'StartTime' => [
                                        'description' => '开始时间。',
                                        'type' => 'string',
                                        'example' => '1988202944',
                                    ],
                                    'AgentCount' => [
                                        'description' => '引擎数。施压需要的机器数，一个机器一个IP。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'ReportId' => [
                                        'description' => '报告ID。',
                                        'type' => 'string',
                                        'example' => 'GHB56VD',
                                    ],
                                    'Vum' => [
                                        'description' => '消耗的VUM。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                ],
                            ],
                            'SceneMetrics' => [
                                'description' => '场景维度的指标信息。',
                                'type' => 'object',
                                'properties' => [
                                    'FailCountBiz' => [
                                        'description' => '全场景业务失败数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '35',
                                    ],
                                    'AllCount' => [
                                        'description' => '全场景总请求数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100000',
                                    ],
                                    'SuccessRateBiz' => [
                                        'description' => '全场景业务成功率。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0.97',
                                    ],
                                    'AvgRt' => [
                                        'description' => '全场景平均RT。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '23',
                                    ],
                                    'FailCountReq' => [
                                        'description' => '全场景请求失败数。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '34',
                                    ],
                                    'AvgTps' => [
                                        'description' => '全场景平均TPS。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '78',
                                    ],
                                    'Seg99Rt' => [
                                        'description' => '99分位RT。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '56',
                                    ],
                                    'SuccessRateReq' => [
                                        'description' => '全场景请求成功率',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '0.99',
                                    ],
                                    'Seg90Rt' => [
                                        'description' => '90分位RT。',
                                        'type' => 'number',
                                        'format' => 'float',
                                        'example' => '35',
                                    ],
                                ],
                            ],
                            'ApiMetricsList' => [
                                'description' => '压测场景中每个API的指标信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FailCountBiz' => [
                                            'description' => '业务失败数。定义了检查点时，不符合条件为失败。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '30',
                                        ],
                                        'Seg75Rt' => [
                                            'description' => '75分位RT。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '26',
                                        ],
                                        'AllCount' => [
                                            'description' => '总请求个数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'AvgTps' => [
                                            'description' => '平均TPS。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '55',
                                        ],
                                        'MinRt' => [
                                            'description' => '最小RT，单位ms。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '10',
                                        ],
                                        'Seg99Rt' => [
                                            'description' => '99分位RT。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '35',
                                        ],
                                        'Seg50Rt' => [
                                            'description' => '50分位RT。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '39',
                                        ],
                                        'MaxRt' => [
                                            'description' => '最大RT，单位ms。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '50',
                                        ],
                                        'Seg90Rt' => [
                                            'description' => '90分位RT。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '23',
                                        ],
                                        'SuccessRateBiz' => [
                                            'description' => '业务成功率。等于业务成功数/总请求数。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '0.98',
                                        ],
                                        'AvgRt' => [
                                            'description' => '平均RT，单位ms。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '34.5',
                                        ],
                                        'FailCountReq' => [
                                            'description' => '请求失败数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '40',
                                        ],
                                        'SuccessRateReq' => [
                                            'description' => '请求成功率。等于请求成功数/总请求数。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '0.99',
                                        ],
                                        'ApiName' => [
                                            'description' => 'API名',
                                            'type' => 'string',
                                            'example' => '下单',
                                        ],
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'SceneSnapShot' => [
                                'description' => '场景快照信息。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '场景状态。',
                                        'type' => 'string',
                                        'example' => 'STOPPED',
                                    ],
                                    'LoadConfig' => [
                                        'description' => '施压配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ApiLoadConfigList' => [
                                                'description' => 'API的RPS起始信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'RpsBegin' => [
                                                            'description' => '起始RPS。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'RpsLimit' => [
                                                            'description' => '最大RPS。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MaxRunningTime' => [
                                                'description' => '运行时长，单位分钟。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'RelationLoadConfigList' => [
                                                'description' => '链路起始和最大并发配置。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ConcurrencyBegin' => [
                                                            'description' => '起始并发。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'ConcurrencyLimit' => [
                                                            'description' => '最大并发。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '20',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Configuration' => [
                                                'description' => '全场景的并发或RPS限制信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AllRpsBegin' => [
                                                        'description' => '全场景起始RPS。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '80',
                                                    ],
                                                    'AllConcurrencyBegin' => [
                                                        'description' => '全场景起始并发。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '10',
                                                    ],
                                                    'AllConcurrencyLimit' => [
                                                        'description' => '全场景最大并发。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '10',
                                                    ],
                                                    'AllRpsLimit' => [
                                                        'description' => '全场景最大RPS。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '160',
                                                    ],
                                                ],
                                            ],
                                            'AgentCount' => [
                                                'description' => '施压使用的机器数。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TestMode' => [
                                                'description' => '施压模式。',
                                                'type' => 'string',
                                                'example' => 'tps_mode',
                                            ],
                                        ],
                                    ],
                                    'FileParameterList' => [
                                        'description' => '场景使用的文件信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FileOssAddress' => [
                                                    'description' => '文件的OSS地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://www.sss.ccv',
                                                ],
                                                'FileName' => [
                                                    'description' => '文件名。',
                                                    'type' => 'string',
                                                    'example' => 'city.csv',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ModifiedTime' => [
                                        'description' => '修改时间。',
                                        'type' => 'string',
                                        'example' => '2020-10-10 10:10:10',
                                    ],
                                    'AdvanceSetting' => [
                                        'description' => '场景高级设置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'LogRate' => [
                                                'description' => '日志采样率。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'DomainBindingList' => [
                                                'description' => '域名和IP的绑定关系。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Domain' => [
                                                            'description' => '域名。',
                                                            'type' => 'string',
                                                            'example' => 'www.xxx.com',
                                                        ],
                                                        'Ips' => [
                                                            'description' => '域名绑定的IP。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '域名绑定的IP。',
                                                                'type' => 'string',
                                                                'example' => '[1.1.1.1]',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ConnectionTimeoutInSecond' => [
                                                'description' => '全场景超时时间。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '5',
                                            ],
                                            'SuccessCode' => [
                                                'description' => '自定义成功状态码。',
                                                'type' => 'string',
                                                'example' => '429,404',
                                            ],
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2023-11-28 16:11:20',
                                    ],
                                    'RelationList' => [
                                        'description' => '链路信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RelationName' => [
                                                    'description' => '链路名。',
                                                    'type' => 'string',
                                                    'example' => '下单链路',
                                                ],
                                                'FileParameterExplainList' => [
                                                    'description' => '链路中使用到的文件参数说明。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'CycleOnce' => [
                                                                'description' => '是否只循环一次。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'FileParamName' => [
                                                                'description' => '文件中的参数名。',
                                                                'type' => 'string',
                                                                'example' => 'address,name',
                                                            ],
                                                            'FileName' => [
                                                                'description' => '文件名。',
                                                                'type' => 'string',
                                                                'example' => 'city.csv',
                                                            ],
                                                            'BaseFile' => [
                                                                'description' => '是否作为基准列。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ApiList' => [
                                                    'description' => 'API信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ApiId' => [
                                                                'description' => 'API ID。',
                                                                'type' => 'string',
                                                                'example' => 'MNB45',
                                                            ],
                                                            'CheckPointList' => [
                                                                'description' => 'API的所有检查点。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'CheckType' => [
                                                                            'description' => '检查类型。',
                                                                            'type' => 'string',
                                                                            'example' => 'EXPORTED_PARAM',
                                                                        ],
                                                                        'Operator' => [
                                                                            'description' => '比较符号。',
                                                                            'type' => 'string',
                                                                            'example' => 'ctn',
                                                                        ],
                                                                        'ExpectValue' => [
                                                                            'description' => '期望值。',
                                                                            'type' => 'string',
                                                                            'example' => '111',
                                                                        ],
                                                                        'CheckPoint' => [
                                                                            'description' => '检查点。',
                                                                            'type' => 'string',
                                                                            'example' => 'userId',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'HeaderList' => [
                                                                'description' => '压测URL的Header信息。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'HeaderValue' => [
                                                                            'description' => '参数值。',
                                                                            'type' => 'string',
                                                                            'example' => '1111',
                                                                        ],
                                                                        'HeaderName' => [
                                                                            'description' => '参数名。',
                                                                            'type' => 'string',
                                                                            'example' => 'userName',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'TimeoutInSecond' => [
                                                                'description' => '超时时间。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '5',
                                                            ],
                                                            'ExportList' => [
                                                                'description' => '导出参数列表。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'ExportType' => [
                                                                            'description' => '导出参数来源。',
                                                                            'type' => 'string',
                                                                            'example' => 'BODY_JSON',
                                                                        ],
                                                                        'ExportValue' => [
                                                                            'description' => '导出参数解析表达式。',
                                                                            'type' => 'string',
                                                                            'example' => 'data.userId',
                                                                        ],
                                                                        'ExportName' => [
                                                                            'description' => '导出参数名。',
                                                                            'type' => 'string',
                                                                            'example' => 'userId',
                                                                        ],
                                                                        'Count' => [
                                                                            'description' => '导出参数匹配项。',
                                                                            'type' => 'string',
                                                                            'example' => '1',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'Url' => [
                                                                'description' => '压测的URL。',
                                                                'type' => 'string',
                                                                'example' => 'https://www.xxx.com',
                                                            ],
                                                            'Method' => [
                                                                'description' => '请求方法。',
                                                                'type' => 'string',
                                                                'example' => 'GET',
                                                            ],
                                                            'Body' => [
                                                                'description' => '请求的Body信息。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'BodyValue' => [
                                                                        'description' => 'body值。',
                                                                        'type' => 'string',
                                                                        'example' => '{key:value}',
                                                                    ],
                                                                    'ContentType' => [
                                                                        'description' => 'body类型。',
                                                                        'type' => 'string',
                                                                        'example' => 'application/x-www-form-urlencoded',
                                                                    ],
                                                                ],
                                                            ],
                                                            'RedirectCountLimit' => [
                                                                'description' => '重定向次数。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '5',
                                                            ],
                                                            'ApiName' => [
                                                                'description' => 'API名称。',
                                                                'type' => 'string',
                                                                'example' => '测试API',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RelationId' => [
                                                    'description' => '链路ID。',
                                                    'type' => 'string',
                                                    'example' => 'HGBN4D',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SceneName' => [
                                        'description' => '场景名。',
                                        'type' => 'string',
                                        'example' => '下单场景',
                                    ],
                                    'SceneId' => [
                                        'description' => '场景ID。',
                                        'type' => 'string',
                                        'example' => '7HBNS3',
                                    ],
                                    'GlobalParameterList' => [
                                        'description' => '全局变量。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParamName' => [
                                                    'description' => '参数名。',
                                                    'type' => 'string',
                                                    'example' => 'userName',
                                                ],
                                                'ParamValue' => [
                                                    'description' => '参数值。',
                                                    'type' => 'string',
                                                    'example' => 'lisi',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'GetPtsReportDetailsFail',
                        'errorMessage' => 'Report does not exist',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"DC4E3177-6745-4925-B423-4E89VV34221A\\",\\n  \\"ReportOverView\\": {\\n    \\"ReportName\\": \\"下单场景\\",\\n    \\"EndTime\\": \\"1988203944\\",\\n    \\"StartTime\\": \\"1988202944\\",\\n    \\"AgentCount\\": 1,\\n    \\"ReportId\\": \\"GHB56VD\\",\\n    \\"Vum\\": 100\\n  },\\n  \\"SceneMetrics\\": {\\n    \\"FailCountBiz\\": 35,\\n    \\"AllCount\\": 100000,\\n    \\"SuccessRateBiz\\": 0.97,\\n    \\"AvgRt\\": 23,\\n    \\"FailCountReq\\": 34,\\n    \\"AvgTps\\": 78,\\n    \\"Seg99Rt\\": 56,\\n    \\"SuccessRateReq\\": 0.99,\\n    \\"Seg90Rt\\": 35\\n  },\\n  \\"ApiMetricsList\\": [\\n    {\\n      \\"FailCountBiz\\": 30,\\n      \\"Seg75Rt\\": 26,\\n      \\"AllCount\\": 1000,\\n      \\"AvgTps\\": 55,\\n      \\"MinRt\\": 10,\\n      \\"Seg99Rt\\": 35,\\n      \\"Seg50Rt\\": 39,\\n      \\"MaxRt\\": 50,\\n      \\"Seg90Rt\\": 23,\\n      \\"SuccessRateBiz\\": 0.98,\\n      \\"AvgRt\\": 34.5,\\n      \\"FailCountReq\\": 40,\\n      \\"SuccessRateReq\\": 0.99,\\n      \\"ApiName\\": \\"下单\\"\\n    }\\n  ],\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"SceneSnapShot\\": {\\n    \\"Status\\": \\"STOPPED\\",\\n    \\"LoadConfig\\": {\\n      \\"ApiLoadConfigList\\": [\\n        {\\n          \\"RpsBegin\\": 10,\\n          \\"RpsLimit\\": 10\\n        }\\n      ],\\n      \\"MaxRunningTime\\": 2,\\n      \\"RelationLoadConfigList\\": [\\n        {\\n          \\"ConcurrencyBegin\\": 10,\\n          \\"ConcurrencyLimit\\": 20\\n        }\\n      ],\\n      \\"Configuration\\": {\\n        \\"AllRpsBegin\\": 80,\\n        \\"AllConcurrencyBegin\\": 10,\\n        \\"AllConcurrencyLimit\\": 10,\\n        \\"AllRpsLimit\\": 160\\n      },\\n      \\"AgentCount\\": 1,\\n      \\"TestMode\\": \\"tps_mode\\"\\n    },\\n    \\"FileParameterList\\": [\\n      {\\n        \\"FileOssAddress\\": \\"https://www.sss.ccv\\",\\n        \\"FileName\\": \\"city.csv\\"\\n      }\\n    ],\\n    \\"ModifiedTime\\": \\"2020-10-10 10:10:10\\",\\n    \\"AdvanceSetting\\": {\\n      \\"LogRate\\": 1,\\n      \\"DomainBindingList\\": [\\n        {\\n          \\"Domain\\": \\"www.xxx.com\\",\\n          \\"Ips\\": [\\n            \\"[1.1.1.1]\\"\\n          ]\\n        }\\n      ],\\n      \\"ConnectionTimeoutInSecond\\": 5,\\n      \\"SuccessCode\\": \\"429,404\\"\\n    },\\n    \\"CreateTime\\": \\"2023-11-28 16:11:20\\",\\n    \\"RelationList\\": [\\n      {\\n        \\"RelationName\\": \\"下单链路\\",\\n        \\"FileParameterExplainList\\": [\\n          {\\n            \\"CycleOnce\\": true,\\n            \\"FileParamName\\": \\"address,name\\",\\n            \\"FileName\\": \\"city.csv\\",\\n            \\"BaseFile\\": true\\n          }\\n        ],\\n        \\"ApiList\\": [\\n          {\\n            \\"ApiId\\": \\"MNB45\\",\\n            \\"CheckPointList\\": [\\n              {\\n                \\"CheckType\\": \\"EXPORTED_PARAM\\",\\n                \\"Operator\\": \\"ctn\\",\\n                \\"ExpectValue\\": \\"111\\",\\n                \\"CheckPoint\\": \\"userId\\"\\n              }\\n            ],\\n            \\"HeaderList\\": [\\n              {\\n                \\"HeaderValue\\": \\"1111\\",\\n                \\"HeaderName\\": \\"userName\\"\\n              }\\n            ],\\n            \\"TimeoutInSecond\\": 5,\\n            \\"ExportList\\": [\\n              {\\n                \\"ExportType\\": \\"BODY_JSON\\",\\n                \\"ExportValue\\": \\"data.userId\\",\\n                \\"ExportName\\": \\"userId\\",\\n                \\"Count\\": \\"1\\"\\n              }\\n            ],\\n            \\"Url\\": \\"https://www.xxx.com\\",\\n            \\"Method\\": \\"GET\\",\\n            \\"Body\\": {\\n              \\"BodyValue\\": \\"{key:value}\\",\\n              \\"ContentType\\": \\"application/x-www-form-urlencoded\\"\\n            },\\n            \\"RedirectCountLimit\\": 5,\\n            \\"ApiName\\": \\"测试API\\"\\n          }\\n        ],\\n        \\"RelationId\\": \\"HGBN4D\\"\\n      }\\n    ],\\n    \\"SceneName\\": \\"下单场景\\",\\n    \\"SceneId\\": \\"7HBNS3\\",\\n    \\"GlobalParameterList\\": [\\n      {\\n        \\"ParamName\\": \\"userName\\",\\n        \\"ParamValue\\": \\"lisi\\"\\n      }\\n    ]\\n  },\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetPtsReportDetailsResponse>\\n    <Message/>\\n    <RequestId>DC4E3177-6745-4925-B423-4E89VV34221A</RequestId>\\n    <ReportOverView>\\n        <ReportName>下单场景</ReportName>\\n        <AgentCount>1</AgentCount>\\n        <EndTime>1988203944</EndTime>\\n        <StartTime>1988202944</StartTime>\\n        <ReportId>GHB56VD</ReportId>\\n        <Vum>100</Vum>\\n    </ReportOverView>\\n    <SceneMetrics>\\n        <AllCount>100000</AllCount>\\n        <SuccessRateBiz>0.97</SuccessRateBiz>\\n        <Seg99Rt>56</Seg99Rt>\\n        <FailCountBiz>35</FailCountBiz>\\n        <SuccessRateReq>0.99</SuccessRateReq>\\n        <Seg90Rt>35</Seg90Rt>\\n        <FailCountReq>34</FailCountReq>\\n        <AvgTps>78</AvgTps>\\n        <AvgRt>23</AvgRt>\\n    </SceneMetrics>\\n    <ApiMetricsList>\\n        <Seg50Rt>39</Seg50Rt>\\n        <AllCount>1000</AllCount>\\n        <SuccessRateBiz>0.98</SuccessRateBiz>\\n        <Seg99Rt>35</Seg99Rt>\\n        <FailCountBiz>30</FailCountBiz>\\n        <Seg75Rt>26</Seg75Rt>\\n        <SuccessRateReq>0.99</SuccessRateReq>\\n        <MinRt>10</MinRt>\\n        <Seg90Rt>23</Seg90Rt>\\n        <FailCountReq>40</FailCountReq>\\n        <MaxRt>50</MaxRt>\\n        <AvgTps>55</AvgTps>\\n        <AvgRt>34.5</AvgRt>\\n    </ApiMetricsList>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <SceneSnapShot>\\n        <Status>STOPPED</Status>\\n        <SceneId>7HBNS3</SceneId>\\n        <ModifiedTime>2020-10-10 10:10:10</ModifiedTime>\\n        <SceneName>下单场景</SceneName>\\n        <CreateTime>12684449000</CreateTime>\\n        <RelationList>\\n            <RelationId>HGBN4D</RelationId>\\n            <RelationName>下单链路</RelationName>\\n            <ApiList>\\n                <ApiName>测试API</ApiName>\\n                <RedirectCountLimit>5</RedirectCountLimit>\\n                <Method>GET</Method>\\n                <TimeoutInSecond>5</TimeoutInSecond>\\n                <ApiId>MNB45</ApiId>\\n                <Url>https://www.aliyundoc.com</Url>\\n                <ExportList>\\n                    <ExportType>BODY_JSON</ExportType>\\n                    <ExportName>userId</ExportName>\\n                    <Count>1</Count>\\n                    <ExportValue>data.userId</ExportValue>\\n                </ExportList>\\n                <CheckPointList>\\n                    <Operator>ctn</Operator>\\n                    <ExpectValue>111</ExpectValue>\\n                    <CheckType>EXPORTED_PARAM</CheckType>\\n                    <CheckPoint>userId</CheckPoint>\\n                </CheckPointList>\\n                <HeaderList>\\n                    <HeaderValue>userName</HeaderValue>\\n                    <HeaderName>1111</HeaderName>\\n                </HeaderList>\\n                <Body>\\n                    <ContentType>application/x-www-form-urlencoded</ContentType>\\n                    <BodyValue>{key:value}</BodyValue>\\n                </Body>\\n            </ApiList>\\n            <FileParameterExplainList>\\n                <BaseFile>true</BaseFile>\\n                <CycleOnce>true</CycleOnce>\\n                <FileParamName>address,name</FileParamName>\\n                <FileName>city.csv</FileName>\\n            </FileParameterExplainList>\\n        </RelationList>\\n        <FileParameterList>\\n            <FileName>city.csv</FileName>\\n            <FileOssAddress>https://www.sss.ccv</FileOssAddress>\\n        </FileParameterList>\\n        <GlobalParameterList>\\n            <ParamValue>lisi</ParamValue>\\n            <ParamName>userName</ParamName>\\n        </GlobalParameterList>\\n        <LoadConfig>\\n            <AgentCount>1</AgentCount>\\n            <TestMode>tps_mode</TestMode>\\n            <MaxRunningTime>2</MaxRunningTime>\\n            <ApiLoadConfigList>\\n                <RpsLimit>10</RpsLimit>\\n                <RpsBegin>10</RpsBegin>\\n            </ApiLoadConfigList>\\n            <RelationLoadConfigList>\\n                <ConcurrencyLimit>20</ConcurrencyLimit>\\n                <ConcurrencyBegin>10</ConcurrencyBegin>\\n            </RelationLoadConfigList>\\n            <Configuration>\\n                <AllRpsBegin>80</AllRpsBegin>\\n                <AllRpsLimit>160</AllRpsLimit>\\n                <AllConcurrencyBegin>10</AllConcurrencyBegin>\\n                <AllConcurrencyLimit>10</AllConcurrencyLimit>\\n            </Configuration>\\n        </LoadConfig>\\n        <AdvanceSetting>\\n            <LogRate>1</LogRate>\\n            <ConnectionTimeoutInSecond>5</ConnectionTimeoutInSecond>\\n            <SuccessCode>429,404</SuccessCode>\\n            <DomainBindingList>\\n                <Domain>www.aliyundoc.com</Domain>\\n                <Ips>[1.1.1.1]</Ips>\\n            </DomainBindingList>\\n        </AdvanceSetting>\\n    </SceneSnapShot>\\n    <Success>true</Success>\\n</GetPtsReportDetailsResponse>","errorExample":""}]',
            'title' => '查询报告',
            'summary' => '获取场景压测后的报告详情。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPtsReportsBySceneId' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NGBCD4K',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页操作中当前显示第几页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示报告条数，取值范围5~100。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '5',
                        'example' => '10',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC4E3177-6745-4925-B423-4E89VV34221A',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'ReportOverViewList' => [
                                'description' => '报告概览信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ReportName' => [
                                            'description' => '报告名称。',
                                            'type' => 'string',
                                            'example' => '下单场景',
                                        ],
                                        'EndTime' => [
                                            'description' => '压测结束时间。',
                                            'type' => 'string',
                                            'example' => '2021-02-26 16:38:30',
                                        ],
                                        'StartTime' => [
                                            'description' => '压测开始时间。',
                                            'type' => 'string',
                                            'example' => '2021-02-26 16:28:30',
                                        ],
                                        'AgentCount' => [
                                            'description' => '施压机器数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'ReportId' => [
                                            'description' => '报告ID。',
                                            'type' => 'string',
                                            'example' => 'NGGB5FV',
                                        ],
                                        'Vum' => [
                                            'description' => '消耗VUM。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'GetPtsReportsBySceneIdFail',
                        'errorMessage' => 'The scene has not started',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"DC4E3177-6745-4925-B423-4E89VV34221A\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"ReportOverViewList\\": [\\n    {\\n      \\"ReportName\\": \\"下单场景\\",\\n      \\"EndTime\\": \\"2021-02-26 16:38:30\\",\\n      \\"StartTime\\": \\"2021-02-26 16:28:30\\",\\n      \\"AgentCount\\": 1,\\n      \\"ReportId\\": \\"NGGB5FV\\",\\n      \\"Vum\\": 100\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetPtsReportsBySceneIdResponse>\\n    <Message/>\\n    <RequestId>DC4E3177-6745-4925-B423-4E89VV34221A</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <ReportOverViewList>\\n        <ReportName>下单场景</ReportName>\\n        <AgentCount>1</AgentCount>\\n        <EndTime>2021-02-26 16:38:30</EndTime>\\n        <StartTime>2021-02-26 16:28:30</StartTime>\\n        <ReportId>NGGB5FV</ReportId>\\n        <Vum>100</Vum>\\n    </ReportOverViewList>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetPtsReportsBySceneIdResponse>","errorExample":""}]',
            'title' => '查询场景关联的所有报告',
            'summary' => '场景压测产生多个场景，可批量查询关联的所有报告。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPtsDebugSampleLogs' => [
            'summary' => '查询PTS场景调试任务的采样日志。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '调试任务ID',
                        'type' => 'string',
                        'required' => false,
                        'example' => ' NJJBH8B',
                    ],
                ],
                [
                    'name' => 'PageNumber',
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
                        'description' => '每页显示记录条数。',
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
                        'title' => 'Schema of Response',
                        'description' => '响应内容',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'SamplingLogs' => [
                                'title' => 'samplingLogs',
                                'description' => '采样日志',
                                'type' => 'array',
                                'items' => [
                                    'description' => '采样日志',
                                    'type' => 'object',
                                    'properties' => [
                                        'HttpRequestMethod' => [
                                            'title' => 'httpRequestMethod',
                                            'description' => '请求方法',
                                            'type' => 'string',
                                            'example' => 'GET',
                                        ],
                                        'HttpResponseStatus' => [
                                            'title' => 'httpResponseStatus',
                                            'description' => '响应状态码',
                                            'type' => 'string',
                                            'example' => '200',
                                        ],
                                        'Timestamp' => [
                                            'title' => 'timestamp',
                                            'description' => '时间戳, ms',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1650253024471',
                                        ],
                                        'ExportConfig' => [
                                            'title' => 'exportConfig',
                                            'description' => '出参设置',
                                            'type' => 'string',
                                            'example' => '{\\"skuId\\":\\"{R:json@$.page.list[0].skuId}\\"}',
                                        ],
                                        'HttpResponseFailMsg' => [
                                            'title' => 'httpResponseFailMsg',
                                            'description' => '响应错误信息',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'CheckResult' => [
                                            'title' => 'checkResult',
                                            'description' => '断言检查结果',
                                            'type' => 'string',
                                            'example' => '[{"checkPointType":"StatusCode","checker":{"expect":"200","operate":"eq","parsedExpectValue":"200","realValue":"200"},"hit":true,"point":"状态码"}]',
                                        ],
                                        'HttpResponseBody' => [
                                            'title' => 'httpResponseBody',
                                            'description' => '响应体',
                                            'type' => 'string',
                                            'example' => '{"timestamp":1679903049155,"status":404,"error":"Not Found","message":"No message available","path":"/"}',
                                        ],
                                        'ChainId' => [
                                            'title' => 'chainId',
                                            'description' => '链路ID',
                                            'type' => 'string',
                                            'example' => '65354719',
                                        ],
                                        'HttpRequestHeaders' => [
                                            'title' => 'httpRequestHeaders',
                                            'description' => '请求头',
                                            'type' => 'string',
                                            'example' => '[{"name":"v2","sensitive":false,"value":"1"},{"name":"x-pts-test","sensitive":false,"value":"2"}]',
                                        ],
                                        'Rt' => [
                                            'title' => 'rt',
                                            'description' => '响应时间, ms',
                                            'type' => 'string',
                                            'example' => '230',
                                        ],
                                        'HttpResponseHeaders' => [
                                            'title' => 'httpResponseHeaders',
                                            'description' => '响应头',
                                            'type' => 'string',
                                            'example' => '[{"valuePos":18,"name":"transfer-encoding","buffer":{"empty":false,"full":false},"sensitive":false,"value":"chunked"},{"valuePos":13,"name":"Content-Type","buffer":{"empty":false,"full":false},"sensitive":false,"value":"application/json;charset=UTF-8"},{"valuePos":5,"name":"Date","buffer":{"empty":false,"full":false},"sensitive":false,"value":"Mon, 27 Mar 2023 07:44:08 GMT"}]',
                                        ],
                                        'HttpStartTime' => [
                                            'title' => 'httpStartTime',
                                            'description' => '请求开始时间',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '12',
                                        ],
                                        'ExportContent' => [
                                            'title' => 'exportContent',
                                            'description' => '导出参数内容',
                                            'type' => 'string',
                                            'example' => '{"skuId":"1"}',
                                        ],
                                        'ImportContent' => [
                                            'title' => 'importContent',
                                            'description' => '参数导入内容',
                                            'type' => 'string',
                                            'example' => '""',
                                        ],
                                        'HttpTiming' => [
                                            'title' => 'httpTiming',
                                            'description' => 'HTTP用时瀑布流',
                                            'type' => 'string',
                                            'example' => '{"traceId":"0:1:10a94f66pts-2069351-allsparktask","requests":[{"lease":{"conn":{"duration":-1,"finish":-1,"operation":"conn","start":-1},"dns":{"duration":-1,"finish":-1,"operation":"dns","start":-1},"duration":-1,"finish":-1,"operation":"lease","start":32277914755},"recv":{"duration":225975,"finish":32283700284,"message":"","operation":"recv","start":32283474309},"sent":{"duration":594179,"finish":32278776504,"message":"","operation":"sent","start":32278182325},"tag":"GET http://tomcodemall.com:30080/api/product/skuinfo/list?key=2&vv=4&t4=%EF%BB%BF101"}],"message":""}',
                                        ],
                                        'HttpRequestBody' => [
                                            'title' => 'httpRequestBody',
                                            'description' => '请求体',
                                            'type' => 'string',
                                            'example' => '{"loginacct":"acce"}',
                                        ],
                                        'NodeId' => [
                                            'title' => 'nodeId',
                                            'description' => '节点ID',
                                            'type' => 'string',
                                            'example' => '1345531',
                                        ],
                                        'HttpRequestUrl' => [
                                            'title' => 'httpRequestUrl',
                                            'description' => '请求URL',
                                            'type' => 'string',
                                            'example' => 'http://www.example.com',
                                        ],
                                        'ChainName' => [
                                            'description' => '链路名称',
                                            'type' => 'string',
                                            'example' => '串联链路',
                                        ],
                                    ],
                                ],
                            ],
                            'PageNumber' => [
                                'description' => '页码',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '当前分页包含的条目数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'GetPtsDebugSampleLogsFail',
                        'errorMessage' => 'planId not exist',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"SamplingLogs\\": [\\n    {\\n      \\"HttpRequestMethod\\": \\"GET\\",\\n      \\"HttpResponseStatus\\": \\"200\\",\\n      \\"Timestamp\\": 1650253024471,\\n      \\"ExportConfig\\": \\"{\\\\\\\\\\\\\\"skuId\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"{R:json@$.page.list[0].skuId}\\\\\\\\\\\\\\"}\\",\\n      \\"HttpResponseFailMsg\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"CheckResult\\": \\"[{\\\\\\"checkPointType\\\\\\":\\\\\\"StatusCode\\\\\\",\\\\\\"checker\\\\\\":{\\\\\\"expect\\\\\\":\\\\\\"200\\\\\\",\\\\\\"operate\\\\\\":\\\\\\"eq\\\\\\",\\\\\\"parsedExpectValue\\\\\\":\\\\\\"200\\\\\\",\\\\\\"realValue\\\\\\":\\\\\\"200\\\\\\"},\\\\\\"hit\\\\\\":true,\\\\\\"point\\\\\\":\\\\\\"状态码\\\\\\"}]\\",\\n      \\"HttpResponseBody\\": \\"{\\\\\\"timestamp\\\\\\":1679903049155,\\\\\\"status\\\\\\":404,\\\\\\"error\\\\\\":\\\\\\"Not Found\\\\\\",\\\\\\"message\\\\\\":\\\\\\"No message available\\\\\\",\\\\\\"path\\\\\\":\\\\\\"/\\\\\\"}\\",\\n      \\"ChainId\\": \\"65354719\\",\\n      \\"HttpRequestHeaders\\": \\"[{\\\\\\"name\\\\\\":\\\\\\"v2\\\\\\",\\\\\\"sensitive\\\\\\":false,\\\\\\"value\\\\\\":\\\\\\"1\\\\\\"},{\\\\\\"name\\\\\\":\\\\\\"x-pts-test\\\\\\",\\\\\\"sensitive\\\\\\":false,\\\\\\"value\\\\\\":\\\\\\"2\\\\\\"}]\\",\\n      \\"Rt\\": \\"230\\",\\n      \\"HttpResponseHeaders\\": \\"[{\\\\\\"valuePos\\\\\\":18,\\\\\\"name\\\\\\":\\\\\\"transfer-encoding\\\\\\",\\\\\\"buffer\\\\\\":{\\\\\\"empty\\\\\\":false,\\\\\\"full\\\\\\":false},\\\\\\"sensitive\\\\\\":false,\\\\\\"value\\\\\\":\\\\\\"chunked\\\\\\"},{\\\\\\"valuePos\\\\\\":13,\\\\\\"name\\\\\\":\\\\\\"Content-Type\\\\\\",\\\\\\"buffer\\\\\\":{\\\\\\"empty\\\\\\":false,\\\\\\"full\\\\\\":false},\\\\\\"sensitive\\\\\\":false,\\\\\\"value\\\\\\":\\\\\\"application/json;charset=UTF-8\\\\\\"},{\\\\\\"valuePos\\\\\\":5,\\\\\\"name\\\\\\":\\\\\\"Date\\\\\\",\\\\\\"buffer\\\\\\":{\\\\\\"empty\\\\\\":false,\\\\\\"full\\\\\\":false},\\\\\\"sensitive\\\\\\":false,\\\\\\"value\\\\\\":\\\\\\"Mon, 27 Mar 2023 07:44:08 GMT\\\\\\"}]\\",\\n      \\"HttpStartTime\\": 12,\\n      \\"ExportContent\\": \\"{\\\\\\"skuId\\\\\\":\\\\\\"1\\\\\\"}\\",\\n      \\"ImportContent\\": \\"\\\\\\"\\\\\\"\\",\\n      \\"HttpTiming\\": \\"{\\\\\\"traceId\\\\\\":\\\\\\"0:1:10a94f66pts-2069351-allsparktask\\\\\\",\\\\\\"requests\\\\\\":[{\\\\\\"lease\\\\\\":{\\\\\\"conn\\\\\\":{\\\\\\"duration\\\\\\":-1,\\\\\\"finish\\\\\\":-1,\\\\\\"operation\\\\\\":\\\\\\"conn\\\\\\",\\\\\\"start\\\\\\":-1},\\\\\\"dns\\\\\\":{\\\\\\"duration\\\\\\":-1,\\\\\\"finish\\\\\\":-1,\\\\\\"operation\\\\\\":\\\\\\"dns\\\\\\",\\\\\\"start\\\\\\":-1},\\\\\\"duration\\\\\\":-1,\\\\\\"finish\\\\\\":-1,\\\\\\"operation\\\\\\":\\\\\\"lease\\\\\\",\\\\\\"start\\\\\\":32277914755},\\\\\\"recv\\\\\\":{\\\\\\"duration\\\\\\":225975,\\\\\\"finish\\\\\\":32283700284,\\\\\\"message\\\\\\":\\\\\\"\\\\\\",\\\\\\"operation\\\\\\":\\\\\\"recv\\\\\\",\\\\\\"start\\\\\\":32283474309},\\\\\\"sent\\\\\\":{\\\\\\"duration\\\\\\":594179,\\\\\\"finish\\\\\\":32278776504,\\\\\\"message\\\\\\":\\\\\\"\\\\\\",\\\\\\"operation\\\\\\":\\\\\\"sent\\\\\\",\\\\\\"start\\\\\\":32278182325},\\\\\\"tag\\\\\\":\\\\\\"GET http://tomcodemall.com:30080/api/product/skuinfo/list?key=2&vv=4&t4=%EF%BB%BF101\\\\\\"}],\\\\\\"message\\\\\\":\\\\\\"\\\\\\"}\\",\\n      \\"HttpRequestBody\\": \\"{\\\\\\"loginacct\\\\\\":\\\\\\"acce\\\\\\"}\\",\\n      \\"NodeId\\": \\"1345531\\",\\n      \\"HttpRequestUrl\\": \\"http://www.example.com\\",\\n      \\"ChainName\\": \\"串联链路\\"\\n    }\\n  ],\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100,\\n  \\"Success\\": true,\\n  \\"Code\\": \\"4001\\",\\n  \\"Message\\": \\"空\\"\\n}","type":"json"}]',
            'title' => '获取PTS场景调试日志',
        ],
        'StartDebugPtsScene' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NHBGB8B',
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
                                'example' => 'C1905194-EE28-4F78-AD81-85A40D52D1BC',
                            ],
                            'Message' => [
                                'description' => '错误提示消息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PlanId' => [
                                'description' => '任务ID。',
                                'type' => 'string',
                                'example' => ' NJJBH8B',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'StartDebugPtsSceneFail',
                        'errorMessage' => 'The scene does not exit',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"C1905194-EE28-4F78-AD81-85A40D52D1BC\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PlanId\\": \\" NJJBH8B\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartDebugPtsSceneResponse>\\n    <RequestId>C1905194-EE28-4F78-AD81-85A40D52D1BC</RequestId>\\n    <Message/>\\n    <PlanId> NJJBH8B</PlanId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StartDebugPtsSceneResponse>","errorExample":""}]',
            'title' => '启动场景调试',
            'summary' => '启动场景的调试，了解配置信息是否通。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StartPtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待启动的场景ID，每次成功创建场景后返回的SceneID，在场景列表页也可查看。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FGSRA3',
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
                                'example' => 'BD12DCC9-5E48-4E77-9657-8D34D8C0F97B',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，如果是成功，该字段为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PlanId' => [
                                'description' => '执行场景成功，返回的压测计划ID。',
                                'type' => 'string',
                                'example' => 'SFVAFE',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'StartPtsSceneFail',
                        'errorMessage' => 'Scene not exist',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"BD12DCC9-5E48-4E77-9657-8D34D8C0F97B\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PlanId\\": \\"SFVAFE\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartPtsSceneResponse>\\n    <RequestId>BD12DCC9-5E48-4E77-9657-8D34D8C0F97B</RequestId>\\n    <Message/>\\n    <PlanId>SFVAFE</PlanId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StartPtsSceneResponse>","errorExample":""}]',
            'title' => '启动场景',
            'summary' => '启动场景入参为场景ID。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopDebugPtsScene' => [
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'RDDCF7',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'FVDC7HB',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0AE6505C-55CE-444A-B73B-810D0ED27C66',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'StopDebugPtsSceneFail',
                        'errorMessage' => 'The scene does not exit',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"0AE6505C-55CE-444A-B73B-810D0ED27C66\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopDebugPtsSceneResponse>\\n    <Message/>\\n    <RequestId>0AE6505C-55CE-444A-B73B-810D0ED27C66</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StopDebugPtsSceneResponse>","errorExample":""}]',
            'title' => '停止场景调试',
            'summary' => '停止正在调试中的场景。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'StopPtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待停止的场景ID，每次成功创建场景后返回的SceneID，在PTS控制台的场景列表页也可查看。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'GV4DEBG',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，成功该字段为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6F2ED8-E31B-497F-85AB-C4E358A5F6F9',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'StopPtsSceneFail',
                        'errorMessage' => 'The scene 11434 has no plan',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"DD6F2ED8-E31B-497F-85AB-C4E358A5F6F9\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopPtsSceneResponse>\\n    <IsSuccess>true</IsSuccess>\\n    <RequestId>DD6F2ED8-E31B-497F-85AB-C4E358A5F6F9</RequestId>\\n    <Message/>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StopPtsSceneResponse>","errorExample":""}]',
            'title' => '停止场景',
            'summary' => '停止场景入参为场景ID。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPtsSceneRunningData' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NKKI6GB',
                    ],
                ],
                [
                    'name' => 'PlanId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NHBGVF8',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '场景状态。缺省值为7。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'TotalRequestCount' => [
                                'description' => '总请求数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8900',
                            ],
                            'HasReport' => [
                                'description' => '是否生成报告。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                            'ConcurrencyLimit' => [
                                'description' => '并发限制。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '20',
                            ],
                            'Message' => [
                                'description' => '错误提示消息。',
                                'type' => 'string',
                                'example' => 'no message',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC4E3177-6745-4925-B423-4E89VV34221A',
                            ],
                            'BeginTime' => [
                                'description' => '压测开始时间，时间戳ms。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1651895518339',
                            ],
                            'AgentLocation' => [
                                'description' => '施压机位置信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Region' => [
                                            'description' => '地区。',
                                            'type' => 'string',
                                            'example' => '华东地区',
                                        ],
                                        'Isp' => [
                                            'description' => '提供商。',
                                            'type' => 'string',
                                            'example' => '阿里巴巴',
                                        ],
                                        'Count' => [
                                            'description' => '施压机台数。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '10',
                                        ],
                                        'Province' => [
                                            'description' => '省份。',
                                            'type' => 'string',
                                            'example' => '山东省',
                                        ],
                                    ],
                                ],
                            ],
                            'Seg90Rt' => [
                                'description' => '90分位RT。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '45',
                            ],
                            'ResponseBps' => [
                                'description' => '响应体大小。',
                                'type' => 'string',
                                'example' => '8kb',
                            ],
                            'TotalAgents' => [
                                'description' => '所有机器数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Vum' => [
                                'description' => '消耗VUM。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'AverageRt' => [
                                'description' => '平均RT。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '45',
                            ],
                            'ChainMonitorDataList' => [
                                'description' => 'API的压测信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'TimePoint' => [
                                            'description' => '时间点。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1278908899',
                                        ],
                                        'ApiId' => [
                                            'description' => 'API 的ID。',
                                            'type' => 'string',
                                            'example' => 'ANBDC8B',
                                        ],
                                        'MinRt' => [
                                            'description' => '最小RT。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '16',
                                        ],
                                        'Qps2XX' => [
                                            'description' => '请求成功的RPS。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '78',
                                        ],
                                        'MaxRt' => [
                                            'description' => '最大RT。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '56',
                                        ],
                                        'ConfigQps' => [
                                            'description' => '配置RPS。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '78',
                                        ],
                                        'FailedCount' => [
                                            'description' => '请求失败总数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '456',
                                        ],
                                        'FailedQps' => [
                                            'description' => '请求失败的RPS。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '15',
                                        ],
                                        'AverageRt' => [
                                            'description' => '平均RT。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '46',
                                        ],
                                        'CheckPointResult' => [
                                            'description' => '检查点结果。',
                                            'type' => 'object',
                                            'properties' => [
                                                'SucceedBusinessCount' => [
                                                    'description' => '业务成功数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '908',
                                                ],
                                                'SucceedBusinessQps' => [
                                                    'description' => '业务成功RPS。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '89',
                                                ],
                                                'FailedBusinessCount' => [
                                                    'description' => '业务失败数。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1000',
                                                ],
                                                'FailedBusinessQps' => [
                                                    'description' => '业务失败RPS。',
                                                    'type' => 'number',
                                                    'format' => 'float',
                                                    'example' => '78',
                                                ],
                                            ],
                                        ],
                                        'Count2XX' => [
                                            'description' => '请求成功数。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '7890',
                                        ],
                                        'RealQps' => [
                                            'description' => '实际RPS。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '23',
                                        ],
                                        'ApiName' => [
                                            'description' => 'API的名称。',
                                            'type' => 'string',
                                            'example' => '第一个API',
                                        ],
                                        'NodeId' => [
                                            'description' => 'API的ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '78509',
                                        ],
                                        'Concurrency' => [
                                            'description' => '并发。',
                                            'type' => 'number',
                                            'format' => 'float',
                                            'example' => '100',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestBps' => [
                                'description' => '请求体大小。',
                                'type' => 'string',
                                'example' => '89kb',
                            ],
                            'FailedBusinessCount' => [
                                'description' => '业务失败数据。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '78',
                            ],
                            'Concurrency' => [
                                'description' => '并发。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'FailedRequestCount' => [
                                'description' => '请求失败数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '90',
                            ],
                            'TpsLimit' => [
                                'description' => '配置TPS限制。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '80',
                            ],
                            'AliveAgents' => [
                                'description' => '健康引擎数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalRealQps' => [
                                'description' => '总QPS。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'GetPtsSceneRunningDataFail',
                        'errorMessage' => 'The scene does not exit',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": 6,\\n  \\"TotalRequestCount\\": 8900,\\n  \\"HasReport\\": false,\\n  \\"ConcurrencyLimit\\": 20,\\n  \\"Message\\": \\"no message\\",\\n  \\"RequestId\\": \\"DC4E3177-6745-4925-B423-4E89VV34221A\\",\\n  \\"BeginTime\\": 1651895518339,\\n  \\"AgentLocation\\": [\\n    {\\n      \\"Region\\": \\"华东地区\\",\\n      \\"Isp\\": \\"阿里巴巴\\",\\n      \\"Count\\": 10,\\n      \\"Province\\": \\"山东省\\"\\n    }\\n  ],\\n  \\"Seg90Rt\\": 45,\\n  \\"ResponseBps\\": \\"8kb\\",\\n  \\"TotalAgents\\": 10,\\n  \\"Code\\": \\"4001\\",\\n  \\"Success\\": true,\\n  \\"Vum\\": 100,\\n  \\"AverageRt\\": 45,\\n  \\"ChainMonitorDataList\\": [\\n    {\\n      \\"TimePoint\\": 1278908899,\\n      \\"ApiId\\": \\"ANBDC8B\\",\\n      \\"MinRt\\": 16,\\n      \\"Qps2XX\\": 78,\\n      \\"MaxRt\\": 56,\\n      \\"ConfigQps\\": 78,\\n      \\"FailedCount\\": 456,\\n      \\"FailedQps\\": 15,\\n      \\"AverageRt\\": 46,\\n      \\"CheckPointResult\\": {\\n        \\"SucceedBusinessCount\\": 908,\\n        \\"SucceedBusinessQps\\": 89,\\n        \\"FailedBusinessCount\\": 1000,\\n        \\"FailedBusinessQps\\": 78\\n      },\\n      \\"Count2XX\\": 7890,\\n      \\"RealQps\\": 23,\\n      \\"ApiName\\": \\"第一个API\\",\\n      \\"NodeId\\": 78509,\\n      \\"Concurrency\\": 100\\n    }\\n  ],\\n  \\"RequestBps\\": \\"89kb\\",\\n  \\"FailedBusinessCount\\": 78,\\n  \\"Concurrency\\": 10,\\n  \\"HttpStatusCode\\": 400,\\n  \\"FailedRequestCount\\": 90,\\n  \\"TpsLimit\\": 80,\\n  \\"AliveAgents\\": 10,\\n  \\"TotalRealQps\\": 10\\n}","errorExample":""},{"type":"xml","example":"<GetPtsSceneRunningDataResponse>\\n    <Status>6</Status>\\n    <HasReport>false</HasReport>\\n    <ConcurrencyLimit>20</ConcurrencyLimit>\\n    <TotalRequestCount>8900</TotalRequestCount>\\n    <RequestId>DC4E3177-6745-4925-B423-4E89VV34221A</RequestId>\\n    <Message/>\\n    <BeginTime>189009880000</BeginTime>\\n    <AgentLocation>\\n        <Isp>阿里巴巴</Isp>\\n        <Region>华东地区</Region>\\n        <Count>10</Count>\\n        <Province>山东省</Province>\\n    </AgentLocation>\\n    <Seg90Rt>45</Seg90Rt>\\n    <TotalAgents>10</TotalAgents>\\n    <ResponseBps>8kb</ResponseBps>\\n    <Code>4001</Code>\\n    <Success>true</Success>\\n    <Vum>100</Vum>\\n    <AverageRt>45</AverageRt>\\n    <ChainMonitorDataList>\\n        <ApiId>ANBDC8B</ApiId>\\n        <ApiName>第一个API</ApiName>\\n        <AverageRt>46</AverageRt>\\n        <Concurrency>100</Concurrency>\\n        <FailedQps>15</FailedQps>\\n        <RealQps>23</RealQps>\\n        <TimePoint>1278908899</TimePoint>\\n        <NodeId>78509</NodeId>\\n        <FailedCount>456</FailedCount>\\n        <Qps2XX>78</Qps2XX>\\n        <MinRt>16</MinRt>\\n        <MaxRt>56</MaxRt>\\n        <ConfigQps>78</ConfigQps>\\n        <Count2XX>7890</Count2XX>\\n        <CheckPointResult>\\n            <FailedBusinessCount>1000</FailedBusinessCount>\\n            <FailedBusinessQps>78</FailedBusinessQps>\\n            <SucceedBusinessQps>89</SucceedBusinessQps>\\n            <SucceedBusinessCount>908</SucceedBusinessCount>\\n        </CheckPointResult>\\n    </ChainMonitorDataList>\\n    <RequestBps>89kb</RequestBps>\\n    <Concurrency>10</Concurrency>\\n    <FailedBusinessCount>78</FailedBusinessCount>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <FailedRequestCount>90</FailedRequestCount>\\n    <TpsLimit>80</TpsLimit>\\n    <AliveAgents>10</AliveAgents>\\n</GetPtsSceneRunningDataResponse>","errorExample":""}]',
            'title' => '获取压测实时数据',
            'summary' => '场景压测或调试中获取场景的运行时数据。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPtsSceneRunningStatus' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NHBG6V',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '场景状态。包括：'."\n"
                                    ."\n"
                                    .'- CREATED'."\n"
                                    .'- SYNCING'."\n"
                                    .'- SYNC_DONE'."\n"
                                    .'- UPLOADING'."\n"
                                    .'- UPLOADED'."\n"
                                    .'- PREPARING'."\n"
                                    .'- READY'."\n"
                                    .'- RUNNING'."\n"
                                    .'- STOPPING '."\n"
                                    .'- STOPPED',
                                'type' => 'string',
                                'example' => 'RUNNING',
                            ],
                            'ModifiedTime' => [
                                'description' => '修改时间。',
                                'type' => 'string',
                                'example' => '2021-03-26 16:03:56',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC4E3177-6745-4925-B423-4E89VV34221A',
                            ],
                            'Message' => [
                                'description' => '错误提示消息，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '创建或者修改场景入参必须是实体类Scene的JSON串',
                            ],
                            'SceneName' => [
                                'description' => '场景名。',
                                'type' => 'string',
                                'example' => '下单场景',
                            ],
                            'CreateTime' => [
                                'description' => '创建时间。',
                                'type' => 'string',
                                'example' => '2021-03-01 16:05:56',
                            ],
                            'HttpStatusCode' => [
                                'description' => '请求状态码，若成功则不返回任何数据。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Code' => [
                                'description' => '系统状态码，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'GetPtsSceneRunningStatusFail',
                        'errorMessage' => 'The scene does not exist',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"RUNNING\\",\\n  \\"ModifiedTime\\": \\"2021-03-26 16:03:56\\",\\n  \\"RequestId\\": \\"DC4E3177-6745-4925-B423-4E89VV34221A\\",\\n  \\"Message\\": \\"创建或者修改场景入参必须是实体类Scene的JSON串\\",\\n  \\"SceneName\\": \\"下单场景\\",\\n  \\"CreateTime\\": \\"2021-03-01 16:05:56\\",\\n  \\"HttpStatusCode\\": 400,\\n  \\"Code\\": \\"4001\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<GetPtsSceneRunningStatusResponse>\\n    <Status>RUNNING</Status>\\n    <ModifiedTime>2021-03-26 16:03:56</ModifiedTime>\\n    <RequestId>DC4E3177-6745-4925-B423-4E89VV34221A</RequestId>\\n    <Message>创建或者修改场景入参必须是实体类Scene的JSON串</Message>\\n    <SceneName>下单场景</SceneName>\\n    <CreateTime>2021-03-01 16:05:56</CreateTime>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <Code>4001</Code>\\n    <Success>false</Success>\\n</GetPtsSceneRunningStatusResponse>","errorExample":""}]',
            'title' => '获取场景运行时状态',
            'summary' => '场景启动压测后，获取运行时状态。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'AdjustPtsSceneSpeed' => [
            'summary' => '调整PTS场景压力值。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告id',
                        'description' => '场景id',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYXXX12H',
                    ],
                ],
                [
                    'name' => 'ApiSpeedList',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '调速配置',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                            'properties' => [
                                'ApiId' => [
                                    'description' => 'API ID。可以根据此ID在Relation中找到对应的API信息。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'DYXXX12H',
                                ],
                                'Speed' => [
                                    'description' => '您需要调整到的压力值。并发模式即并发值，RPS模式即RPS值。',
                                    'type' => 'integer',
                                    'format' => 'int64',
                                    'required' => false,
                                    'example' => '30',
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
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F7D2CE0-XXXX-4143-955A-8E4595AF86A6',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"4F7D2CE0-XXXX-4143-955A-8E4595AF86A6\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => 'PTS场景调速',
            'description' => '并发模式，每个串联链路只传第一个API的并发值即可，以此作为串联链路并发值。'."\n"
                ."\n"
                .'RPS模式，支持调整每个API的RPS值。同串联链路中，需要保证RPS按API排列顺序递减。',
        ],
        'CreatePtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Scene',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景信息。更多信息，请参见[参数说明](~~201321~~) 。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"loadConfig":{"agentCount":1,"apiLoadConfigList":[{"rpsBegin":10,"rpsLimit":100}],"configuration":{"allRpsBegin":10,"allRpsLimit":100},"maxRunningTime":1,"testMode":"tps_mode"},"relationList":[{"apiList":[{"apiName":"链路1的第一个API","body":{"bodyValue":"{\\"key1\\":\\"111\\",\\"key2\\":\\"222\\"}","contentType":"application/x-www-form-urlencoded"},"checkPointList":[{"checkPoint":"userId","checkType":"EXPORTED_PARAM","expectValue":"111","operator":"ctn"}],"exportList":[{"exportName":"userId","exportType":"STATUS_CODE"}],"headerList":[{"headerName":"userName","headerValue":"张三"}],"method":"GET","url":"https://www.aliyundoc.com"}],"relationName":"链路1"}],"sceneName":"xing-测试OpenAPI-1"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SceneId' => [
                                'description' => '创建成功的场景ID。',
                                'type' => 'string',
                                'example' => 'SDR3CX',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '4F7D2CE0-AE4C-4143-955A-8E4595AF86A6',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，如果成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '创建或者修改场景入参必须是实体类Scene的JSON串',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码，成功则不返回任何数据。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Code' => [
                                'description' => '系统状态码，成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'CreateSceneFail',
                        'errorMessage' => 'Create scene cannot be empty',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SceneId\\": \\"SDR3CX\\",\\n  \\"RequestId\\": \\"4F7D2CE0-AE4C-4143-955A-8E4595AF86A6\\",\\n  \\"Message\\": \\"创建或者修改场景入参必须是实体类Scene的JSON串\\",\\n  \\"HttpStatusCode\\": 400,\\n  \\"Code\\": \\"4001\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<CreatePtsSceneResponse>\\n    <SceneId>SDR3CX</SceneId>\\n    <RequestId>4F7D2CE0-AE4C-4143-955A-8E4595AF86A6</RequestId>\\n    <Message>创建或者修改场景入参必须是实体类Scene的JSON串</Message>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <Code>4001</Code>\\n    <Success>false</Success>\\n</CreatePtsSceneResponse>","errorExample":""}]',
            'title' => '创建场景',
            'summary' => '创建压测场景。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'SavePtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Scene',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '场景详细信息',
                        'description' => '场景详细信息。',
                        'type' => 'object',
                        'properties' => [
                            'SceneId' => [
                                'title' => '场景ID，不传为新建，传递为修改',
                                'description' => '场景ID。没有传场景ID表示新建场景，传场景ID表示更新场景。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'IUYAHGJ',
                            ],
                            'SceneName' => [
                                'title' => '场景名',
                                'description' => '场景名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'test',
                            ],
                            'RelationList' => [
                                'title' => '链路配置',
                                'description' => '链路配置。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RelationName' => [
                                            'title' => '链路名',
                                            'description' => '链路名。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => '链路1',
                                        ],
                                        'RelationId' => [
                                            'title' => '链路id',
                                            'description' => '链路ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                        'ApiList' => [
                                            'title' => '链路下的API信息',
                                            'description' => '链路下的API信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'ApiName' => [
                                                        'title' => 'API名',
                                                        'description' => 'API名称。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'api',
                                                    ],
                                                    'Url' => [
                                                        'title' => '压测URL',
                                                        'description' => '压测URL。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'http://www.example.com',
                                                    ],
                                                    'Method' => [
                                                        'title' => '请求方法',
                                                        'description' => '请求方法。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'GET',
                                                    ],
                                                    'ApiId' => [
                                                        'title' => 'API的id',
                                                        'description' => 'API的ID。',
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '1',
                                                    ],
                                                    'ExportList' => [
                                                        'title' => '出参',
                                                        'description' => '出参。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'ExportType' => [
                                                                    'title' => '出参来源 请求体(BODY_TEXT)，请求体(BODY_JSON)，请求头(HEADER)，响应状态码(STATUS_CODE)',
                                                                    'description' => '出参来源。包括：'."\n"
                                                                        ."\n"
                                                                        .'- 请求体（BODY_TEXT）'."\n"
                                                                        .'- 请求体（BODY_JSON）'."\n"
                                                                        .'- 请求头（HEADER）'."\n"
                                                                        .'- 响应状态码（STATUS_CODE）',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'BODY_JSON',
                                                                ],
                                                                'ExportName' => [
                                                                    'title' => '出参名',
                                                                    'description' => '出参名。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'test',
                                                                ],
                                                                'Count' => [
                                                                    'title' => '第几个匹配项，可以是数字 或 random（ BODY_TEXT情况下才需要count）',
                                                                    'description' => '第几个匹配项。可以是数字或Random，当出参来源为请求体（BODY_TEXT）时需要填写该项。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => '0',
                                                                ],
                                                                'ExportValue' => [
                                                                    'title' => '出参的解析表达式',
                                                                    'description' => '出参的解析表达式。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'data.itemlist[0]',
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'HeaderList' => [
                                                        'title' => 'headerList',
                                                        'description' => 'Header请求头。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'HeaderName' => [
                                                                    'title' => 'header参数名',
                                                                    'description' => 'Header参数名。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'Accept-Encoding',
                                                                ],
                                                                'HeaderValue' => [
                                                                    'title' => '参数对应的值',
                                                                    'description' => '参数对应的值。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'gzip, deflate, br',
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'CheckPointList' => [
                                                        'title' => '检查点',
                                                        'description' => '检查点。',
                                                        'type' => 'array',
                                                        'items' => [
                                                            'type' => 'object',
                                                            'properties' => [
                                                                'Operator' => [
                                                                    'title' => '检查条件 CheckPointOperator 中',
                                                                    'description' => '检查点条件。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'ctn',
                                                                ],
                                                                'ExpectValue' => [
                                                                    'title' => '检查内容，即期望值',
                                                                    'description' => '检查内容，即期望值。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => '111',
                                                                ],
                                                                'CheckType' => [
                                                                    'title' => '检查点类型 响应body(BODY_TEXT)，响应header(HEADER)， 响应状态码(STATUS_CODE) ，出参（EXPORTED_PARAM）',
                                                                    'description' => '检查点类型。包括：'."\n"
                                                                        ."\n"
                                                                        .'- 响应Body（BODY_TEXT）'."\n"
                                                                        .'- 响应Header（HEADER）'."\n"
                                                                        .'- 响应状态码（STATUS_CODE）'."\n"
                                                                        .'- 出参（EXPORTED_PARAM）',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'EXPORTED_PARAM',
                                                                ],
                                                                'CheckPoint' => [
                                                                    'title' => '检查对象 type=HEADER 时，表示header中的字段，type=EXPORTED_PARAM ，表示出参名',
                                                                    'description' => '检查对象。'."\n"
                                                                        ."\n"
                                                                        .'当`type=HEADER`时，表示Header中的字段；当`type=EXPORTED_PARAM` 时，表示出参名。',
                                                                    'type' => 'string',
                                                                    'required' => false,
                                                                    'example' => 'userId',
                                                                ],
                                                            ],
                                                            'required' => false,
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'TimeoutInSecond' => [
                                                        'title' => 'API超时时间，单位秒，默认5s，范围[1-60]',
                                                        'description' => 'API超时时间。单位秒，默认5s，取值范围[1-60]。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => false,
                                                        'example' => '5',
                                                    ],
                                                    'Body' => [
                                                        'title' => '请求body',
                                                        'description' => '请求Body。',
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ContentType' => [
                                                                'title' => 'body 类型，默认 application/x-www-form-urlencoded',
                                                                'description' => 'Body类型，默认`application/x-www-form-urlencoded`。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => 'application/x-www-form-urlencoded',
                                                            ],
                                                            'BodyValue' => [
                                                                'title' => 'body 的实际内容 形式 {"key1":"value2","key2":"value2"}',
                                                                'description' => 'body的实际内容。例如， {"key1":"value2","key2":"value2"}。',
                                                                'type' => 'string',
                                                                'required' => false,
                                                                'example' => '{\\"global\\":\\"${global}\\",\\"name\\":\\"${name}\\"}',
                                                            ],
                                                        ],
                                                        'required' => false,
                                                    ],
                                                    'RedirectCountLimit' => [
                                                        'title' => '重定向次数，只能是0（允许重定向）或者10（不允许重定向）',
                                                        'description' => '重定向次数。只能是0（允许重定向）或者10（不允许重定向），用户根据自己的情况配置。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'required' => true,
                                                        'example' => '0',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => true,
                                        ],
                                        'FileParameterExplainList' => [
                                            'title' => '链路中的文件参数配置信息',
                                            'description' => '链路中的文件参数配置信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'type' => 'object',
                                                'properties' => [
                                                    'FileName' => [
                                                        'title' => '文件名',
                                                        'description' => '文件名。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'fileName.csv',
                                                    ],
                                                    'FileParamName' => [
                                                        'title' => '文件使用的参数列名',
                                                        'description' => '文件使用的参数列名。',
                                                        'type' => 'string',
                                                        'required' => true,
                                                        'example' => 'name,uid,age',
                                                    ],
                                                    'BaseFile' => [
                                                        'title' => '是否作为基准文件',
                                                        'description' => '是否作为基准文件。',
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                        'example' => 'true',
                                                    ],
                                                    'CycleOnce' => [
                                                        'title' => '文件是否轮询一次',
                                                        'description' => '文件是否轮询一次。',
                                                        'type' => 'boolean',
                                                        'required' => false,
                                                        'example' => 'true',
                                                    ],
                                                ],
                                                'required' => false,
                                            ],
                                            'required' => false,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'LoadConfig' => [
                                'title' => '施压配置',
                                'description' => '施压配置。',
                                'type' => 'object',
                                'properties' => [
                                    'TestMode' => [
                                        'title' => '施压模式，并发模式(concurrency_mode) 和RPS模式(tps_mode)',
                                        'description' => '施压模式。包括：'."\n"
                                            ."\n"
                                            .'- 并发模式（concurrency_mode）'."\n"
                                            .'- RPS模式（tps_mode）',
                                        'type' => 'string',
                                        'required' => true,
                                        'example' => 'concurrency_mode',
                                    ],
                                    'Configuration' => [
                                        'title' => '场景施压量级配置信息',
                                        'description' => '场景施压量级配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'AllRpsBegin' => [
                                                'title' => '所有API的起始RPS总值，均分给每个API，在RPS模式下使用，若不设置该值，则apiLoadConfig必须填写',
                                                'description' => '所有API的起始RPS总值。'."\n"
                                                    ."\n"
                                                    .'均分给每个API，在RPS模式下使用，若不设置该值，则**apiLoadConfig**必须填写。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '100',
                                            ],
                                            'AllRpsLimit' => [
                                                'title' => '所有API的最大RPS总值，均分给每个API，在RPS模式下使用，若不设置该值，则apiLoadConfig必须填写',
                                                'description' => '所有API的最大RPS总值。'."\n"
                                                    ."\n"
                                                    .'均分给每个API，在RPS模式下使用，若不设置该值，则**apiLoadConfig**必须填写。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '100',
                                            ],
                                            'AllConcurrencyBegin' => [
                                                'title' => '所有链路的起始并发总值，均分给每个链路，在并发模式下使用，若不设置该值，则relationLoadConfig必须填写',
                                                'description' => '所有链路的起始并发总值。'."\n"
                                                    ."\n"
                                                    .'均分给每个链路，在并发模式下使用，若不设置该值，则**relationLoadConfig**必须填写。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '100',
                                            ],
                                            'AllConcurrencyLimit' => [
                                                'title' => '所有链路的最大并发总值，均分给每个链路，在并发模式下使用，若不设置该值，则relationLoadConfig必须填写',
                                                'description' => '所有链路的最大并发总值。'."\n"
                                                    ."\n"
                                                    .'均分给每个链路，在并发模式下使用，若不设置该值，则**relationLoadConfig**必须填写。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'required' => false,
                                                'example' => '100',
                                            ],
                                        ],
                                        'required' => true,
                                    ],
                                    'MaxRunningTime' => [
                                        'title' => '施压时长，单位分钟，[1-1440]',
                                        'description' => '施压时长。单位分钟，取值范围[1-1440]。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => true,
                                        'example' => '10',
                                    ],
                                    'AutoStep' => [
                                        'title' => '是否自动递增，只有在并发模式下有效，即 testMode=concurrency_mode 时',
                                        'description' => '是否自动递增。只有在并发模式下有效，即`testMode=concurrency_mode`时有效。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'AgentCount' => [
                                        'title' => '指定机器数，并发必须大于250(RPS大于2000)才能使用，最大扩展机器数不能超过 最大并发/250(最大RPS/2000)',
                                        'description' => '指定机器数。并发需要＞250（RPS＞2000）时使用，最大扩展机器数不能超过最大并发数/250（最大RPS/2000）。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1',
                                    ],
                                    'Increment' => [
                                        'title' => '递增百分比，取值范围[10,100]，且是整十倍；只有在并发模式且是自动递增模式下有效，即 testMode=concurrency_mode 且 autoStep=true 时',
                                        'description' => '递增百分比。取值范围[10,100]，取值需是10的倍数。'."\n"
                                            ."\n"
                                            .'只在并发模式且同时是自动递增模式下有效，即`testMode=concurrency_mode`且`autoStep=true`时有效。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '30',
                                    ],
                                    'KeepTime' => [
                                        'title' => '单量级持续时长，单位分钟，一定是小于施压时长 maxRunningTime',
                                        'description' => '单量级持续时长。单位分钟，该时长需小于施压时长**maxRunningTime**。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '3',
                                    ],
                                    'ApiLoadConfigList' => [
                                        'title' => 'API的起始、最大RPS值设置，在RPS模式下使用',
                                        'description' => 'API的起始、最大RPS值设置，在RPS模式下使用。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ApiId' => [
                                                    'title' => 'apiId',
                                                    'description' => 'API ID。',
                                                    'type' => 'string',
                                                    'required' => true,
                                                    'example' => '1',
                                                ],
                                                'RpsLimit' => [
                                                    'title' => '最大RPS值',
                                                    'description' => '最大RPS值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => true,
                                                    'example' => '100',
                                                ],
                                                'RpsBegin' => [
                                                    'title' => '起始RPS值',
                                                    'description' => '起始RPS值。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => true,
                                                    'example' => '100',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'VpcLoadConfig' => [
                                        'title' => 'VPC配置',
                                        'description' => 'VPC配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'VpcId' => [
                                                'title' => 'vpcId',
                                                'description' => 'VPC ID。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'vpc-akjhsdajgjsfggahjkga',
                                            ],
                                            'VSwitchId' => [
                                                'title' => '交换机的Id',
                                                'description' => '交换机 ID。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'vsw-skjfhlahsljkhsfalkjdoiw',
                                            ],
                                            'SecurityGroupId' => [
                                                'title' => '安全组的Id',
                                                'description' => '安全组 ID。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'sg-jkasgfieiajidsjakjscb',
                                            ],
                                            'RegionId' => [
                                                'title' => 'regionId',
                                                'description' => '地域ID。',
                                                'type' => 'string',
                                                'required' => true,
                                                'example' => 'cn-beijing',
                                            ],
                                        ],
                                        'required' => false,
                                    ],
                                    'RelationLoadConfigList' => [
                                        'title' => '链路的起始、最大并发值设置，在并发模式下使用',
                                        'description' => '链路的起始、最大并发值设置，在并发模式下使用。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RelationId' => [
                                                    'title' => '链路id',
                                                    'description' => '链路ID。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => '1',
                                                ],
                                                'ConcurrencyLimit' => [
                                                    'title' => '最大并发',
                                                    'description' => '最大并发数。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => true,
                                                    'example' => '100',
                                                ],
                                                'ConcurrencyBegin' => [
                                                    'title' => 'concurrencyBegin',
                                                    'description' => '起始并发。',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'required' => true,
                                                    'example' => '100',
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                ],
                                'required' => true,
                            ],
                            'AdvanceSetting' => [
                                'title' => '高级设置',
                                'description' => '高级设置。',
                                'type' => 'object',
                                'properties' => [
                                    'LogRate' => [
                                        'title' => '日志采样率，[1,50]，且是10的倍数',
                                        'description' => '日志采样率。取值范围[1,50]，大于2时取值需要是10的倍数，即[1,10,20,30,40,50]。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '1',
                                    ],
                                    'DomainBindingList' => [
                                        'title' => '域名绑定IP关系',
                                        'description' => '域名绑定IP关系。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Domain' => [
                                                    'title' => '域名',
                                                    'description' => '域名。',
                                                    'type' => 'string',
                                                    'required' => false,
                                                    'example' => 'www.example.com',
                                                ],
                                                'Ips' => [
                                                    'title' => '对应的IP',
                                                    'description' => '对应的IP。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'string',
                                                        'required' => false,
                                                        'example' => '["192.168.1.1","192.168.1.2"]',
                                                    ],
                                                    'required' => false,
                                                ],
                                            ],
                                            'required' => false,
                                        ],
                                        'required' => false,
                                    ],
                                    'ConnectionTimeoutInSecond' => [
                                        'title' => '超时时间，单位秒',
                                        'description' => '超时时间，单位秒。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'required' => false,
                                        'example' => '5',
                                    ],
                                    'SuccessCode' => [
                                        'title' => '新增成功状态码，多个用英文逗号隔开',
                                        'description' => '新增成功状态码，多个需用半角逗号（,）隔开。',
                                        'type' => 'string',
                                        'required' => false,
                                        'example' => '205',
                                    ],
                                ],
                                'required' => false,
                            ],
                            'GlobalParameterList' => [
                                'title' => '全局自定义参数',
                                'description' => '全局自定义参数。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'ParamName' => [
                                            'title' => '参数名',
                                            'description' => '参数名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'global',
                                        ],
                                        'ParamValue' => [
                                            'title' => '全局参数值，不可参数化',
                                            'description' => '全局参数值，不可参数化。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '11111',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'FileParameterList' => [
                                'title' => '文件参数',
                                'description' => '文件参数。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'FileName' => [
                                            'title' => '文件名',
                                            'description' => '文件名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'test.csv',
                                        ],
                                        'FileOssAddress' => [
                                            'title' => '文件的oss地址，必须是公网可访问的',
                                            'description' => '您自己的OSS文件地址，要求公网可访问。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'https://jmeter-pts-testing-version.oss-cn-shanghai.aliyuncs.com/param-file.csv',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误信息提示，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'SceneId' => [
                                'title' => '场景ID',
                                'description' => '场景ID',
                                'type' => 'string',
                                'example' => 'IUYAHGJ',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ModifyPtsSceneFail',
                        'errorMessage' => 'The scene does not exit',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"SceneId\\": \\"IUYAHGJ\\"\\n}","errorExample":""},{"type":"xml","example":"<SavePtsSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <SceneId>IUYAHGJ</SceneId>\\n</SavePtsSceneResponse>","errorExample":""}]',
            'title' => '保存或修改场景',
            'summary' => '保存或修改场景。',
        ],
        'DeletePtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待删除的场景ID。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'XANH3H',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '创建或修改场景入参必须是实体类Scene的JSON串',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A3ED870E-C3BF-44F4-B460-A30785E0256B',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码，成功则不返回任何数据。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'Code' => [
                                'description' => '系统状态码，成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'DeletePtsSceneFail',
                        'errorMessage' => 'Delete Scene failed, please check the scene ID is correct',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"创建或修改场景入参必须是实体类Scene的JSON串\\",\\n  \\"RequestId\\": \\"A3ED870E-C3BF-44F4-B460-A30785E0256B\\",\\n  \\"HttpStatusCode\\": 400,\\n  \\"Code\\": \\"4001\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<DeletePtsSceneResponse>\\n    <Message>创建或修改场景入参必须是实体类Scene的JSON串</Message>\\n    <RequestId>A3ED870E-C3BF-44F4-B460-A30785E0256B</RequestId>\\n    <HttpStatusCode>400</HttpStatusCode>\\n    <Code>4001</Code>\\n    <Success>false</Success>\\n</DeletePtsSceneResponse>","errorExample":""}]',
            'title' => '删除场景',
            'summary' => '删除场景，一次删除一个。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeletePtsScenes' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneIds',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'description' => '待删除场景ID的列表。更多信息，请参见[参数说明](~~201321~~)。',
                        'type' => 'array',
                        'items' => [
                            'description' => '场景ID集合。',
                            'type' => 'string',
                            'required' => false,
                            'example' => '["5DG9WQJ","9HG9TYJ"]',
                        ],
                        'required' => true,
                        'docRequired' => true,
                        'example' => '["XVB4DF","AFG3CV"]',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则不显示此参数。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '35290A5B-AB50-46BD-81E0-E316F86128C4',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
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
                        'errorCode' => 'DeletePtsScenesFail',
                        'errorMessage' => 'Scene is running',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"35290A5B-AB50-46BD-81E0-E316F86128C4\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<DeletePtsScenesResponse>\\n    <Message>空</Message>\\n    <RequestId>35290A5B-AB50-46BD-81E0-E316F86128C4</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</DeletePtsScenesResponse>","errorExample":""}]',
            'title' => '批量删除场景',
            'summary' => '一次批量删除多个场景。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ModifyPtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Scene',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '场景详细信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'SD6YZCI',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示消息。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '449ADAFB-8DA4-4317-A284-4922D04DE828',
                            ],
                            'HttpStatusCode' => [
                                'description' => '请求状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
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
                        'errorCode' => 'ModifyPtsSceneFail',
                        'errorMessage' => 'The scene does not exit',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"449ADAFB-8DA4-4317-A284-4922D04DE828\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ModifyPtsSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>449ADAFB-8DA4-4317-A284-4922D04DE828</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ModifyPtsSceneResponse>","errorExample":""}]',
            'title' => '修改场景',
            'summary' => '修改场景配置信息，比如URL、施压信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetPtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '场景ID。更多信息，请参见[OpenAPI创建接口参数说明](~~201321~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'NKJBSH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC4E3177-6745-4925-B423-4E89VV34221A',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Scene' => [
                                'description' => '场景结构。',
                                'type' => 'object',
                                'properties' => [
                                    'Status' => [
                                        'description' => '场景状态。',
                                        'type' => 'string',
                                        'example' => 'Draft：草稿'."\n"
                                            .'WaitStart：待启动'."\n"
                                            .'Debugging：调试中'."\n"
                                            .'Running：运行中'."\n",
                                    ],
                                    'LoadConfig' => [
                                        'description' => '施压配置信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ApiLoadConfigList' => [
                                                'description' => 'API施压配置信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'RpsBegin' => [
                                                            'description' => '起始RPS。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'RpsLimit' => [
                                                            'description' => '最大RPS。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '20',
                                                        ],
                                                        'ApiId' => [
                                                            'description' => 'API ID。可以根据此ID在Relation中找到对应的API信息。',
                                                            'type' => 'string',
                                                            'example' => 'GBFDCV8',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'MaxRunningTime' => [
                                                'description' => '运行时长，单位分钟。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'RelationLoadConfigList' => [
                                                'description' => '链路施压配置信息。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'ConcurrencyBegin' => [
                                                            'description' => '起始并发。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '10',
                                                        ],
                                                        'ConcurrencyLimit' => [
                                                            'description' => '最大并发。',
                                                            'type' => 'integer',
                                                            'format' => 'int32',
                                                            'example' => '20',
                                                        ],
                                                        'RelationId' => [
                                                            'description' => '链路ID。',
                                                            'type' => 'string',
                                                            'example' => 'HNBGS7M',
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'Configuration' => [
                                                'description' => '全场景并发或RPS配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'AllRpsBegin' => [
                                                        'description' => '起始RPS。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '100',
                                                    ],
                                                    'AllConcurrencyBegin' => [
                                                        'description' => '起始并发。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '100',
                                                    ],
                                                    'AllConcurrencyLimit' => [
                                                        'description' => '最大并发。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '200',
                                                    ],
                                                    'AllRpsLimit' => [
                                                        'description' => '最大RPS。',
                                                        'type' => 'integer',
                                                        'format' => 'int32',
                                                        'example' => '200',
                                                    ],
                                                ],
                                            ],
                                            'AgentCount' => [
                                                'description' => '施压机器。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'TestMode' => [
                                                'description' => ' 施压模式。TPS表示施压模式为RPS模式。'."\n"
                                                    ."\n"
                                                    .'>该返回结果为CONCURRENCY/TPS。',
                                                'type' => 'string',
                                                'example' => 'TPS',
                                            ],
                                            'AutoStep' => [
                                                'description' => '是否为自动递增模式。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'Increment' => [
                                                'description' => '递增百分比，取值范围[10,100]，且是整十倍。只有在并发模式且是自动递增模式下有效，即 testMode=concurrency_mode 且 autoStep=true 时。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'KeepTime' => [
                                                'description' => '单量级持续时长，单位分钟，一定是小于施压时长 maxRunningTime。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '2',
                                            ],
                                            'VpcLoadConfig' => [
                                                'description' => 'VPC配置，VPC压测模式下生效。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'VpcId' => [
                                                        'description' => '专有网络ID。',
                                                        'type' => 'string',
                                                        'example' => 'vpc-akjhsdajgjsfggahjkga',
                                                    ],
                                                    'VSwitchId' => [
                                                        'description' => '虚拟交换机ID。',
                                                        'type' => 'string',
                                                        'example' => 'vsw-skjfhlahsljkhsfalkjdoiw',
                                                    ],
                                                    'SecurityGroupId' => [
                                                        'description' => '安全组 ID。',
                                                        'type' => 'string',
                                                        'example' => 'sg-jkasgfieiajidsjakjscb',
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
                                    'FileParameterList' => [
                                        'description' => '文件参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'FileOssAddress' => [
                                                    'description' => '您自己的OSS文件地址，要求公网可访问。',
                                                    'type' => 'string',
                                                    'example' => 'https://test.oss-cn-shanghai.aliyuncs.com/json.jar',
                                                ],
                                                'FileName' => [
                                                    'description' => '文件名。',
                                                    'type' => 'string',
                                                    'example' => 'city.csv',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'ModifiedTime' => [
                                        'description' => '最新修改时间。',
                                        'type' => 'string',
                                        'example' => '2021-03-26 15:30:30',
                                    ],
                                    'AdvanceSetting' => [
                                        'description' => '高级设置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'LogRate' => [
                                                'description' => '日志采样率。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'DomainBindingList' => [
                                                'description' => '域名和IP绑定关系。',
                                                'type' => 'array',
                                                'items' => [
                                                    'type' => 'object',
                                                    'properties' => [
                                                        'Domain' => [
                                                            'description' => '域名。',
                                                            'type' => 'string',
                                                            'example' => 'www.aliyundoc.com',
                                                        ],
                                                        'Ips' => [
                                                            'description' => '绑定IP。',
                                                            'type' => 'array',
                                                            'items' => [
                                                                'description' => '绑定IP。',
                                                                'type' => 'string',
                                                                'example' => '[1.1.1.1]',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                            'ConnectionTimeoutInSecond' => [
                                                'description' => '场景超时时间，单位s。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '5',
                                            ],
                                            'SuccessCode' => [
                                                'description' => '自定义成功状态码。',
                                                'type' => 'string',
                                                'example' => '429,304',
                                            ],
                                        ],
                                    ],
                                    'CreateTime' => [
                                        'description' => '创建时间。',
                                        'type' => 'string',
                                        'example' => '2021-02-26 15:30:30',
                                    ],
                                    'RelationList' => [
                                        'description' => '链路信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'RelationName' => [
                                                    'description' => '链路名。',
                                                    'type' => 'string',
                                                    'example' => '下单链路',
                                                ],
                                                'FileParameterExplainList' => [
                                                    'description' => '文件参数说明。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'CycleOnce' => [
                                                                'description' => '是否循环一次。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                            'FileParamName' => [
                                                                'description' => '文件中的参数名。',
                                                                'type' => 'string',
                                                                'example' => 'userName,age',
                                                            ],
                                                            'FileName' => [
                                                                'description' => '文件名。',
                                                                'type' => 'string',
                                                                'example' => 'city.csv',
                                                            ],
                                                            'BaseFile' => [
                                                                'description' => '是否作为基准列。',
                                                                'type' => 'boolean',
                                                                'example' => 'true',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'ApiList' => [
                                                    'description' => 'API信息。',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'type' => 'object',
                                                        'properties' => [
                                                            'ApiId' => [
                                                                'description' => 'API ID。可以根据此ID在Relation中找到对应的API信息。',
                                                                'type' => 'string',
                                                                'example' => 'GBFDCV8',
                                                            ],
                                                            'CheckPointList' => [
                                                                'description' => '所有检查点。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'CheckType' => [
                                                                            'description' => '检查类型。',
                                                                            'type' => 'string',
                                                                            'example' => 'EXPORTED_PARAM',
                                                                        ],
                                                                        'Operator' => [
                                                                            'description' => '比较符号。',
                                                                            'type' => 'string',
                                                                            'example' => 'ctn',
                                                                        ],
                                                                        'ExpectValue' => [
                                                                            'description' => '期望值。',
                                                                            'type' => 'string',
                                                                            'example' => '111',
                                                                        ],
                                                                        'CheckPoint' => [
                                                                            'description' => '检查点。',
                                                                            'type' => 'string',
                                                                            'example' => 'userId',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'HeaderList' => [
                                                                'description' => 'Header信息。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'HeaderValue' => [
                                                                            'description' => '参数值。',
                                                                            'type' => 'string',
                                                                            'example' => '1111',
                                                                        ],
                                                                        'HeaderName' => [
                                                                            'description' => '参数名。',
                                                                            'type' => 'string',
                                                                            'example' => 'userId',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'TimeoutInSecond' => [
                                                                'description' => '超时时间，单位秒。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '5',
                                                            ],
                                                            'ExportList' => [
                                                                'description' => '所有导出参数。',
                                                                'type' => 'array',
                                                                'items' => [
                                                                    'type' => 'object',
                                                                    'properties' => [
                                                                        'ExportType' => [
                                                                            'description' => '导出参数来源。',
                                                                            'type' => 'string',
                                                                            'example' => 'BODY_JSON',
                                                                        ],
                                                                        'ExportValue' => [
                                                                            'description' => '解释表达式。',
                                                                            'type' => 'string',
                                                                            'example' => 'username',
                                                                        ],
                                                                        'ExportName' => [
                                                                            'description' => '导出参数名。',
                                                                            'type' => 'string',
                                                                            'example' => 'data.username',
                                                                        ],
                                                                        'Count' => [
                                                                            'description' => '导出参数匹配项。',
                                                                            'type' => 'string',
                                                                            'example' => '0',
                                                                        ],
                                                                    ],
                                                                ],
                                                            ],
                                                            'Url' => [
                                                                'description' => '请求URL。',
                                                                'type' => 'string',
                                                                'example' => 'https://www.aliyundoc.com',
                                                            ],
                                                            'Method' => [
                                                                'description' => '请求方法。',
                                                                'type' => 'string',
                                                                'example' => 'GET',
                                                            ],
                                                            'Body' => [
                                                                'description' => 'Body内容。',
                                                                'type' => 'object',
                                                                'properties' => [
                                                                    'BodyValue' => [
                                                                        'description' => 'Body值。',
                                                                        'type' => 'string',
                                                                        'example' => '{\\"key1\\":\\"111\\",\\"key2\\":\\"222\\"}',
                                                                    ],
                                                                    'ContentType' => [
                                                                        'description' => 'Body类型。',
                                                                        'type' => 'string',
                                                                        'example' => 'application/x-www-form-urlencoded',
                                                                    ],
                                                                ],
                                                            ],
                                                            'RedirectCountLimit' => [
                                                                'description' => '重定向次数。',
                                                                'type' => 'integer',
                                                                'format' => 'int32',
                                                                'example' => '5',
                                                            ],
                                                            'ApiName' => [
                                                                'description' => 'API名称。',
                                                                'type' => 'string',
                                                                'example' => '下单',
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                                'RelationId' => [
                                                    'description' => '链路ID。',
                                                    'type' => 'string',
                                                    'example' => 'HNBGS7M',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'SceneName' => [
                                        'description' => '场景名。',
                                        'type' => 'string',
                                        'example' => '下单场景',
                                    ],
                                    'SceneId' => [
                                        'description' => '场景ID。',
                                        'type' => 'string',
                                        'example' => 'BGFJ7GV',
                                    ],
                                    'GlobalParameterList' => [
                                        'description' => '全局参数。',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'ParamName' => [
                                                    'description' => '参数名。',
                                                    'type' => 'string',
                                                    'example' => 'userName',
                                                ],
                                                'ParamValue' => [
                                                    'description' => '参数值。',
                                                    'type' => 'string',
                                                    'example' => 'lisi',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Headers' => [
                                        'description' => '场景所设置的全局Header',
                                        'type' => 'array',
                                        'items' => [
                                            'type' => 'object',
                                            'properties' => [
                                                'Name' => [
                                                    'description' => 'Header的名称',
                                                    'type' => 'string',
                                                    'example' => 'key1',
                                                ],
                                                'Value' => [
                                                    'description' => 'Header的值',
                                                    'type' => 'string',
                                                    'example' => 'value1',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    ."\n"
                                    .'- `true`：成功'."\n"
                                    .'- `false`：失败',
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
                        'errorCode' => 'GetPtsSceneFail',
                        'errorMessage' => 'The scene does not exit',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"DC4E3177-6745-4925-B423-4E89VV34221A\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Scene\\": {\\n    \\"Status\\": \\"Draft：草稿\\\\nWaitStart：待启动\\\\nDebugging：调试中\\\\nRunning：运行中\\\\n\\",\\n    \\"LoadConfig\\": {\\n      \\"ApiLoadConfigList\\": [\\n        {\\n          \\"RpsBegin\\": 10,\\n          \\"RpsLimit\\": 20,\\n          \\"ApiId\\": \\"GBFDCV8\\"\\n        }\\n      ],\\n      \\"MaxRunningTime\\": 2,\\n      \\"RelationLoadConfigList\\": [\\n        {\\n          \\"ConcurrencyBegin\\": 10,\\n          \\"ConcurrencyLimit\\": 20,\\n          \\"RelationId\\": \\"HNBGS7M\\"\\n        }\\n      ],\\n      \\"Configuration\\": {\\n        \\"AllRpsBegin\\": 100,\\n        \\"AllConcurrencyBegin\\": 100,\\n        \\"AllConcurrencyLimit\\": 200,\\n        \\"AllRpsLimit\\": 200\\n      },\\n      \\"AgentCount\\": 1,\\n      \\"TestMode\\": \\"TPS\\",\\n      \\"AutoStep\\": false,\\n      \\"Increment\\": 10,\\n      \\"KeepTime\\": 2,\\n      \\"VpcLoadConfig\\": {\\n        \\"VpcId\\": \\"vpc-akjhsdajgjsfggahjkga\\",\\n        \\"VSwitchId\\": \\"vsw-skjfhlahsljkhsfalkjdoiw\\",\\n        \\"SecurityGroupId\\": \\"sg-jkasgfieiajidsjakjscb\\",\\n        \\"RegionId\\": \\"cn-beijing\\"\\n      }\\n    },\\n    \\"FileParameterList\\": [\\n      {\\n        \\"FileOssAddress\\": \\"https://test.oss-cn-shanghai.aliyuncs.com/json.jar\\",\\n        \\"FileName\\": \\"city.csv\\"\\n      }\\n    ],\\n    \\"ModifiedTime\\": \\"2021-03-26 15:30:30\\",\\n    \\"AdvanceSetting\\": {\\n      \\"LogRate\\": 1,\\n      \\"DomainBindingList\\": [\\n        {\\n          \\"Domain\\": \\"www.aliyundoc.com\\",\\n          \\"Ips\\": [\\n            \\"[1.1.1.1]\\"\\n          ]\\n        }\\n      ],\\n      \\"ConnectionTimeoutInSecond\\": 5,\\n      \\"SuccessCode\\": \\"429,304\\"\\n    },\\n    \\"CreateTime\\": \\"2021-02-26 15:30:30\\",\\n    \\"RelationList\\": [\\n      {\\n        \\"RelationName\\": \\"下单链路\\",\\n        \\"FileParameterExplainList\\": [\\n          {\\n            \\"CycleOnce\\": true,\\n            \\"FileParamName\\": \\"userName,age\\",\\n            \\"FileName\\": \\"city.csv\\",\\n            \\"BaseFile\\": true\\n          }\\n        ],\\n        \\"ApiList\\": [\\n          {\\n            \\"ApiId\\": \\"GBFDCV8\\",\\n            \\"CheckPointList\\": [\\n              {\\n                \\"CheckType\\": \\"EXPORTED_PARAM\\",\\n                \\"Operator\\": \\"ctn\\",\\n                \\"ExpectValue\\": \\"111\\",\\n                \\"CheckPoint\\": \\"userId\\"\\n              }\\n            ],\\n            \\"HeaderList\\": [\\n              {\\n                \\"HeaderValue\\": \\"1111\\",\\n                \\"HeaderName\\": \\"userId\\"\\n              }\\n            ],\\n            \\"TimeoutInSecond\\": 5,\\n            \\"ExportList\\": [\\n              {\\n                \\"ExportType\\": \\"BODY_JSON\\",\\n                \\"ExportValue\\": \\"username\\",\\n                \\"ExportName\\": \\"data.username\\",\\n                \\"Count\\": \\"0\\"\\n              }\\n            ],\\n            \\"Url\\": \\"https://www.aliyundoc.com\\",\\n            \\"Method\\": \\"GET\\",\\n            \\"Body\\": {\\n              \\"BodyValue\\": \\"{\\\\\\\\\\\\\\"key1\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"111\\\\\\\\\\\\\\",\\\\\\\\\\\\\\"key2\\\\\\\\\\\\\\":\\\\\\\\\\\\\\"222\\\\\\\\\\\\\\"}\\",\\n              \\"ContentType\\": \\"application/x-www-form-urlencoded\\"\\n            },\\n            \\"RedirectCountLimit\\": 5,\\n            \\"ApiName\\": \\"下单\\"\\n          }\\n        ],\\n        \\"RelationId\\": \\"HNBGS7M\\"\\n      }\\n    ],\\n    \\"SceneName\\": \\"下单场景\\",\\n    \\"SceneId\\": \\"BGFJ7GV\\",\\n    \\"GlobalParameterList\\": [\\n      {\\n        \\"ParamName\\": \\"userName\\",\\n        \\"ParamValue\\": \\"lisi\\"\\n      }\\n    ],\\n    \\"Headers\\": [\\n      {\\n        \\"Name\\": \\"key1\\",\\n        \\"Value\\": \\"value1\\"\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetPtsSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>DC4E3177-6745-4925-B423-4E89VV34221A</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Scene>\\n        <Status>Running</Status>\\n        <LoadConfig>\\n            <ApiLoadConfigList>\\n                <RpsBegin>10</RpsBegin>\\n                <RpsLimit>20</RpsLimit>\\n                <ApiId>GBFDCV8</ApiId>\\n            </ApiLoadConfigList>\\n            <MaxRunningTime>2</MaxRunningTime>\\n            <RelationLoadConfigList>\\n                <ConcurrencyBegin>10</ConcurrencyBegin>\\n                <ConcurrencyLimit>20</ConcurrencyLimit>\\n                <RelationId>HNBGS7M</RelationId>\\n            </RelationLoadConfigList>\\n            <Configuration>\\n                <AllRpsBegin>100</AllRpsBegin>\\n                <AllConcurrencyBegin>100</AllConcurrencyBegin>\\n                <AllConcurrencyLimit>200</AllConcurrencyLimit>\\n                <AllRpsLimit>200</AllRpsLimit>\\n            </Configuration>\\n            <AgentCount>1</AgentCount>\\n            <TestMode>TPS</TestMode>\\n        </LoadConfig>\\n        <FileParameterList>\\n            <FileOssAddress>https://oss.ccccc</FileOssAddress>\\n            <FileName>city.csv</FileName>\\n        </FileParameterList>\\n        <ModifiedTime>2021-03-26 15:30:30</ModifiedTime>\\n        <AdvanceSetting>\\n            <LogRate>1</LogRate>\\n            <DomainBindingList>\\n                <Domain>www.aliyundoc.com</Domain>\\n                <Ips>[1.1.1.1]</Ips>\\n            </DomainBindingList>\\n            <ConnectionTimeoutInSecond>5</ConnectionTimeoutInSecond>\\n            <SuccessCode>429,304</SuccessCode>\\n        </AdvanceSetting>\\n        <CreateTime>2021-02-26 15:30:30</CreateTime>\\n        <RelationList>\\n            <RelationName>下单链路</RelationName>\\n            <FileParameterExplainList>\\n                <CycleOnce>true</CycleOnce>\\n                <FileParamName>userName,age</FileParamName>\\n                <FileName>city.csv</FileName>\\n                <BaseFile>true</BaseFile>\\n            </FileParameterExplainList>\\n            <ApiList>\\n                <ApiId>GBFDCV8</ApiId>\\n                <CheckPointList>\\n                    <CheckType>EXPORTED_PARAM</CheckType>\\n                    <Operator>ctn</Operator>\\n                    <ExpectValue>111</ExpectValue>\\n                    <CheckPoint>userId</CheckPoint>\\n                </CheckPointList>\\n                <HeaderList>\\n                    <HeaderValue>1111</HeaderValue>\\n                    <HeaderName>userId</HeaderName>\\n                </HeaderList>\\n                <TimeoutInSecond>5</TimeoutInSecond>\\n                <ExportList>\\n                    <ExportType>BODY_JSON</ExportType>\\n                    <ExportValue>username</ExportValue>\\n                    <ExportName>data.username</ExportName>\\n                    <Count>0</Count>\\n                </ExportList>\\n                <Url>https://www.aliyundoc.com</Url>\\n                <Method>GET</Method>\\n                <Body>\\n                    <BodyValue>{\\\\\\"key1\\\\\\":\\\\\\"111\\\\\\",\\\\\\"key2\\\\\\":\\\\\\"222\\\\\\"}</BodyValue>\\n                    <ContentType>application/x-www-form-urlencoded</ContentType>\\n                </Body>\\n                <RedirectCountLimit>5</RedirectCountLimit>\\n                <ApiName>下单</ApiName>\\n            </ApiList>\\n            <RelationId>HNBGS7M</RelationId>\\n        </RelationList>\\n        <SceneName>下单场景</SceneName>\\n        <SceneId>BGFJ7GV</SceneId>\\n        <GlobalParameterList>\\n            <ParamName>userName</ParamName>\\n            <ParamValue>lisi</ParamValue>\\n        </GlobalParameterList>\\n    </Scene>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetPtsSceneResponse>","errorExample":""}]',
            'title' => '查询场景',
            'summary' => '查询场景的结构、施压等信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'ListPtsScene' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'abilityTreeCode' => '22660',
                'abilityTreeNodes' => [
                    'FEATUREptsFQKRPS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第几页，取值范围1~1073741824。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示场景条数，取值范围10~1000。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '10',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'KeyWord',
                    'in' => 'query',
                    'schema' => [
                        'description' => '关键字，可以通过对场景名**SceneName**进行模糊搜索或者对场景ID**SceneId**进行精确搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '测试下单',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '创建或者修改场景入参必须是实体类scene的JSON串',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DD6F2ED8-E31B-497F-85AB-C4E358A5F667',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码，若成功则不返回任何数据。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '400',
                            ],
                            'SceneViewList' => [
                                'description' => '查询的场景列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateTime' => [
                                            'description' => '场景创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-02-26 15:28:39',
                                        ],
                                        'SceneId' => [
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => 'DFGVS3S',
                                        ],
                                        'SceneName' => [
                                            'description' => '场景名。',
                                            'type' => 'string',
                                            'example' => '测试下单线上',
                                        ],
                                        'Status' => [
                                            'description' => 'PTS场景状态',
                                            'type' => 'string',
                                            'example' => 'Draft：草稿'."\n"
                                                .'WaitStart：待启动'."\n"
                                                .'Debugging：调试中'."\n"
                                                .'Running：运行中'."\n",
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'false',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ListPtsSceneFail',
                        'errorMessage' => 'Keyword length cannot exceed 30 characters',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"创建或者修改场景入参必须是实体类scene的JSON串\\",\\n  \\"RequestId\\": \\"DD6F2ED8-E31B-497F-85AB-C4E358A5F667\\",\\n  \\"HttpStatusCode\\": 400,\\n  \\"SceneViewList\\": [\\n    {\\n      \\"CreateTime\\": \\"2021-02-26 15:28:39\\",\\n      \\"SceneId\\": \\"DFGVS3S\\",\\n      \\"SceneName\\": \\"测试下单线上\\",\\n      \\"Status\\": \\"Draft：草稿\\\\nWaitStart：待启动\\\\nDebugging：调试中\\\\nRunning：运行中\\\\n\\"\\n    }\\n  ],\\n  \\"Code\\": \\"4001\\",\\n  \\"Success\\": false\\n}","errorExample":""},{"type":"xml","example":"<ListJMeterReportsResponse>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Reports>\\n        <ReportName>test</ReportName>\\n        <Duration>10分钟</Duration>\\n        <ReportId>7R4RE352</ReportId>\\n        <Vum>1000</Vum>\\n        <ActualStartTime>1637157073000</ActualStartTime>\\n    </Reports>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListJMeterReportsResponse>","errorExample":""}]',
            'title' => '分页查询场景',
            'summary' => '分页查询场景概览信息。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetJMeterReportDetails' => [
            'summary' => '查询JMeter报告详情。',
            'methods' => [
                'post',
                'get',
            ],
            'schemes' => [
                'https',
            ],
            'security' => [
                [
                    'AK' => [],
                ],
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '待查的压测报告ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'KS2YE3J2',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'GetJMeterReportDetailsResponse',
                        'description' => 'GetJMeterReportDetailsResponse',
                        'type' => 'object',
                        'properties' => [
                            'ReportOverView' => [
                                'title' => '报告概览信息',
                                'description' => '报告概览信息',
                                'type' => 'object',
                                'properties' => [
                                    'ReportId' => [
                                        'title' => '报告ID',
                                        'description' => '报告ID',
                                        'type' => 'string',
                                        'example' => 'GHB56VD',
                                    ],
                                    'ReportName' => [
                                        'title' => '报告名',
                                        'description' => '报告名',
                                        'type' => 'string',
                                        'example' => '下单场景-20220202222222',
                                    ],
                                    'StartTime' => [
                                        'title' => '启动时间',
                                        'description' => '启动时间',
                                        'type' => 'string',
                                        'example' => '2023-05-03 10:35:11',
                                    ],
                                    'EndTime' => [
                                        'title' => '停止时间',
                                        'description' => '停止时间',
                                        'type' => 'string',
                                        'example' => '2023-05-03 10:45:11',
                                    ],
                                    'AgentCount' => [
                                        'title' => '实际使用的引擎数',
                                        'description' => '实际使用的引擎数',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'Vum' => [
                                        'title' => '消耗的VUM',
                                        'description' => '消耗的VUM',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '4452',
                                    ],
                                ],
                            ],
                            'SceneMetrics' => [
                                'title' => '全场景维度的信息',
                                'description' => '全场景维度的信息',
                                'type' => 'object',
                                'properties' => [
                                    'AvgTps' => [
                                        'title' => '平均TPS',
                                        'description' => '平均TPS',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '78',
                                    ],
                                    'AvgRt' => [
                                        'title' => '平均RT',
                                        'description' => '平均RT，单位毫秒',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '23',
                                    ],
                                    'Seg90Rt' => [
                                        'title' => '90分为RT',
                                        'description' => '90分位RT，单位毫秒',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '35',
                                    ],
                                    'Seg99Rt' => [
                                        'title' => '99分为RT',
                                        'description' => '99分位RT，单位毫秒',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '56',
                                    ],
                                    'SuccessRateReq' => [
                                        'title' => '请求成功率',
                                        'description' => '请求成功率，为小于等于100的非负数',
                                        'type' => 'number',
                                        'format' => 'double',
                                        'example' => '99.98',
                                    ],
                                    'FailCountReq' => [
                                        'title' => '请求失败数',
                                        'description' => '请求失败数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '34',
                                    ],
                                    'AllCount' => [
                                        'title' => '请求总数',
                                        'description' => '请求总数',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '717',
                                    ],
                                ],
                            ],
                            'SamplerMetricsList' => [
                                'title' => 'API维度的信息',
                                'description' => '接口维度的信息',
                                'type' => 'array',
                                'items' => [
                                    'description' => '接口维度的信息，一个接口一条数据',
                                    'type' => 'object',
                                    'properties' => [
                                        'ApiName' => [
                                            'title' => 'api名',
                                            'description' => '接口名',
                                            'type' => 'string',
                                            'example' => '登录',
                                        ],
                                        'AvgTps' => [
                                            'title' => '平均TPS',
                                            'description' => '平均TPS',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '12',
                                        ],
                                        'AvgRt' => [
                                            'title' => '平均RT',
                                            'description' => '平均RT，单位毫秒',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '44.2',
                                        ],
                                        'Seg75Rt' => [
                                            'title' => '75分为RT',
                                            'description' => '75分位RT，单位毫秒',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '22.4',
                                        ],
                                        'Seg90Rt' => [
                                            'title' => '90分为RT',
                                            'description' => '90分位RT，单位毫秒',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '65',
                                        ],
                                        'Seg99Rt' => [
                                            'title' => '99分为RT',
                                            'description' => '99分位RT，单位毫秒',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '77',
                                        ],
                                        'MaxRt' => [
                                            'title' => '最大RT',
                                            'description' => '最大RT，单位毫秒',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '78',
                                        ],
                                        'MinRt' => [
                                            'title' => '最小RT',
                                            'description' => '最小RT，单位毫秒',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '11',
                                        ],
                                        'SuccessRateReq' => [
                                            'title' => '请求成功率',
                                            'description' => '请求成功率，为小于等于100的非负数',
                                            'type' => 'number',
                                            'format' => 'double',
                                            'example' => '100',
                                        ],
                                        'FailCountReq' => [
                                            'title' => '请求失败数',
                                            'description' => '请求失败数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '10',
                                        ],
                                        'AllCount' => [
                                            'title' => '请求总数',
                                            'description' => '请求总数',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '731',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '4001',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '查询报告失败',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DocumentUrl' => [
                                'description' => '文档链接。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'CodeKey' => [
                                'title' => '对应于美杜莎的key。若无此codeKey，或者codeKey对应的内容获取失败/空,则获取返回的message内容作为默认信息展示',
                                'description' => '对应于美杜莎的key。若无此codeKey，或者codeKey对应的内容获取失败/空,则获取返回的message内容作为默认信息展示',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'DynamicCtx' => [
                                'title' => '返回的信息,动态内容,用于替换动态内容,通过&&进行分隔,顺序替换',
                                'description' => '返回的信息,动态内容,用于替换动态内容,通过&&进行分隔,顺序替换',
                                'type' => 'string',
                                'example' => '空',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"ReportOverView\\": {\\n    \\"ReportId\\": \\"GHB56VD\\",\\n    \\"ReportName\\": \\"下单场景-20220202222222\\",\\n    \\"StartTime\\": \\"2023-05-03 10:35:11\\",\\n    \\"EndTime\\": \\"2023-05-03 10:45:11\\",\\n    \\"AgentCount\\": 1,\\n    \\"Vum\\": 4452\\n  },\\n  \\"SceneMetrics\\": {\\n    \\"AvgTps\\": 78,\\n    \\"AvgRt\\": 23,\\n    \\"Seg90Rt\\": 35,\\n    \\"Seg99Rt\\": 56,\\n    \\"SuccessRateReq\\": 99.98,\\n    \\"FailCountReq\\": 34,\\n    \\"AllCount\\": 717\\n  },\\n  \\"SamplerMetricsList\\": [\\n    {\\n      \\"ApiName\\": \\"登录\\",\\n      \\"AvgTps\\": 12,\\n      \\"AvgRt\\": 44.2,\\n      \\"Seg75Rt\\": 22.4,\\n      \\"Seg90Rt\\": 65,\\n      \\"Seg99Rt\\": 77,\\n      \\"MaxRt\\": 78,\\n      \\"MinRt\\": 11,\\n      \\"SuccessRateReq\\": 100,\\n      \\"FailCountReq\\": 10,\\n      \\"AllCount\\": 731\\n    }\\n  ],\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Code\\": \\"4001\\",\\n  \\"Message\\": \\"查询报告失败\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"DocumentUrl\\": \\"空\\",\\n  \\"CodeKey\\": \\"空\\",\\n  \\"DynamicCtx\\": \\"空\\"\\n}","type":"json"}]',
            'title' => '获取JMeter报告详情',
        ],
        'GetJMeterLogs' => [
            'summary' => '获得JMeter运行日志。默认查询第0台机器的日志，并返回机器总数。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '请求第N页的日志信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10000000',
                        'exclusiveMaximum' => false,
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'allowEmptyValue' => false,
                    'schema' => [
                        'description' => '请求N条记录。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告ID',
                        'description' => '报告ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'KS2YE3J2',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '开始时间，单位秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1637115306000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '结束时间，单位秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1637115309000',
                    ],
                ],
                [
                    'name' => 'AgentIndex',
                    'in' => 'query',
                    'schema' => [
                        'title' => '第几台引擎，起始为0',
                        'description' => '非法Index直接返回第0台引擎的日志。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Level',
                    'in' => 'query',
                    'schema' => [
                        'title' => '日志等级',
                        'description' => '日志等级。包括：'."\n"
                            ."\n"
                            .'- ERROR：错误'."\n"
                            .'- WARN：警告'."\n"
                            .'- INFO：信息，默认值'."\n"
                            .'- DEBUG：调试'."\n"
                            .'- TRACE：跟踪',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'INFO',
                    ],
                ],
                [
                    'name' => 'Thread',
                    'in' => 'query',
                    'schema' => [
                        'title' => '线程名',
                        'description' => '线程名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'main',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关键字',
                        'description' => '关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '日志记录总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '返回日志记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '返回第N页的日志信息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Logs' => [
                                'title' => '日志内容',
                                'description' => '日志内容',
                                'type' => 'array',
                                'items' => [
                                    'description' => '返回日志记录。',
                                    'type' => 'object',
                                    'example' => '[{"timeTS":1637308493226, "instanceId":0, "level":"INFO", "logger":"org.apache.jmeter.util.JMeterUtils",  "thread":"main", "time":"2021-11-19T15:54Z", "logText":"Setting Locale to en_EN"}]',
                                ],
                                'example' => '{ "timeTS":1637114804326, "instanceId":0, "level":"INFO", "logger":"org.apache.jmeter.util.JMeterUtils", "sceneId":251546, 	"planId":1501546, "thread":"main", "time":"2021-11-17T10:06Z", "taskId":15015460000, "logText":"Setting Locale to en_EN\\n" }',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'AgentCount' => [
                                'title' => '引擎数量，想要获得第几台引擎的日志可以根据引擎数量传值',
                                'description' => '引擎数量。若想获得第N台引擎的日志，可以根据引擎数量进行传值。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '3',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'ReportNotExist',
                        'errorMessage' => 'The report does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Logs\\": [\\n    [\\n      {\\n        \\"timeTS\\": 1637308493226,\\n        \\"instanceId\\": 0,\\n        \\"level\\": \\"INFO\\",\\n        \\"logger\\": \\"org.apache.jmeter.util.JMeterUtils\\",\\n        \\"thread\\": \\"main\\",\\n        \\"time\\": \\"2021-11-19T15:54Z\\",\\n        \\"logText\\": \\"Setting Locale to en_EN\\"\\n      }\\n    ]\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"AgentCount\\": 3\\n}","errorExample":""},{"type":"xml","example":"<GetJMeterLogsResponse>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Logs/>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <AgentCount>3</AgentCount>\\n</GetJMeterLogsResponse>","errorExample":""}]',
            'title' => '获得JMeter运行日志',
        ],
        'GetJMeterSampleMetrics' => [
            'summary' => '根据条件获得JMeter采样器聚合数据。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告ID',
                        'description' => '报告ID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '7R4RE352',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1637157070000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1637157073000',
                    ],
                ],
                [
                    'name' => 'SamplerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '采样器索引，从0开始。-1返回全场景',
                        'description' => '采样器索引。从0开始，-1返回全场景。',
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
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'SampleMetricList' => [
                                'title' => '采样器聚合数据列表',
                                'description' => '采样器聚合数据列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '采样器聚合数据列表。',
                                    'type' => 'string',
                                    'example' => '[       {         "statusCodes":[           {             "count":26,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":2389,         "requestBytes":3536,         "reqSuccessCount":26,         "reqSuccessRtMin":12,         "reqSuccessRtAvg":21,         "reqSuccessTps":17.56756756756757,         "rtMin":12,         "rtAvg":21,         "totalCount":26,         "concurrency":103.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":64922,         "reqFailureTps":0.0,         "tps":17.56756756756757,         "responseBps":43866,         "reqSuccessRtMax":30,         "totalVum":13,         "rtMax":30,         "taskId":1475183,         "timestamp":1649681740000       },       {         "statusCodes":[           {             "count":13,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":1782,         "requestBytes":5304,         "reqSuccessCount":13,         "reqSuccessRtMin":11,         "reqSuccessRtAvg":23,         "reqSuccessTps":13.10483870967742,         "rtMin":11,         "rtAvg":24,         "totalCount":13,         "concurrency":411.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":97383,         "reqFailureTps":0.0,         "tps":13.10483870967742,         "responseBps":32723,         "reqSuccessRtMax":37,         "totalVum":21,         "rtMax":37,         "taskId":1475183,         "timestamp":1649681741000       },       {         "statusCodes":[           {             "count":7,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":952,         "requestBytes":6256,         "reqSuccessCount":7,         "reqSuccessRtMin":19,         "reqSuccessRtAvg":20,         "reqSuccessTps":7.0,         "rtMin":19,         "rtAvg":20,         "totalCount":7,         "concurrency":500.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":114862,         "reqFailureTps":0.0,         "tps":7.0,         "responseBps":17479,         "reqSuccessRtMax":21,         "totalVum":29,         "rtMax":21,         "taskId":1475183,         "timestamp":1649681742000       },       {         "statusCodes":[           {             "count":12,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":1632,         "requestBytes":7888,         "reqSuccessCount":12,         "reqSuccessRtMin":15,         "reqSuccessRtAvg":24,         "reqSuccessTps":12.0,         "rtMin":15,         "rtAvg":25,         "totalCount":12,         "concurrency":500.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":144826,         "reqFailureTps":0.0,         "tps":12.0,         "responseBps":29964,         "reqSuccessRtMax":45,         "totalVum":38,         "rtMax":45,         "taskId":1475183,         "timestamp":1649681743000       },       {         "statusCodes":[           {             "count":10,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":1360,         "requestBytes":9248,         "reqSuccessCount":10,         "reqSuccessRtMin":14,         "reqSuccessRtAvg":21,         "reqSuccessTps":10.0,         "rtMin":14,         "rtAvg":22,         "totalCount":10,         "concurrency":500.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":169796,         "reqFailureTps":0.0,         "tps":10.0,         "responseBps":24970,         "reqSuccessRtMax":29,         "totalVum":46,         "rtMax":29,         "taskId":1475183,         "timestamp":1649681744000       },       {         "statusCodes":[           {             "count":9,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":1224,         "requestBytes":10472,         "reqSuccessCount":9,         "reqSuccessRtMin":11,         "reqSuccessRtAvg":23,         "reqSuccessTps":9.0,         "rtMin":11,         "rtAvg":23,         "totalCount":9,         "concurrency":500.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":192269,         "reqFailureTps":0.0,         "tps":9.0,         "responseBps":22473,         "reqSuccessRtMax":45,         "totalVum":54,         "rtMax":45,         "taskId":1475183,         "timestamp":1649681745000       },       {         "statusCodes":[           {             "count":14,             "name":"200"           }         ],         "reqFailureRtMin":0,         "requestBps":1904,         "requestBytes":12376,         "reqSuccessCount":14,         "reqSuccessRtMin":10,         "reqSuccessRtAvg":20,         "reqSuccessTps":14.0,         "rtMin":10,         "rtAvg":21,         "totalCount":14,         "concurrency":500.0,         "bucket":"d9fb4ee42f0e8eb3",         "reqFailureCount":0,         "reqFailureRtMax":0,         "responseBytes":227227,         "reqFailureTps":0.0,         "tps":14.0,         "responseBps":34958,         "reqSuccessRtMax":34,         "totalVum":63,         "rtMax":34,         "taskId":1475183,         "timestamp":1649681746000       }]',
                                ],
                            ],
                            'SamplerMap' => [
                                'title' => '采样器列表，可根据该列表传递需要查询的采样器',
                                'description' => '采样器列表，可根据该列表传递需要查询的采样器。',
                                'type' => 'object',
                                'example' => '{0:"Http Request"}',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'ReportNotExist',
                        'errorMessage' => 'The report does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"SampleMetricList\\": [\\n    \\"[       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":26,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":2389,         \\\\\\"requestBytes\\\\\\":3536,         \\\\\\"reqSuccessCount\\\\\\":26,         \\\\\\"reqSuccessRtMin\\\\\\":12,         \\\\\\"reqSuccessRtAvg\\\\\\":21,         \\\\\\"reqSuccessTps\\\\\\":17.56756756756757,         \\\\\\"rtMin\\\\\\":12,         \\\\\\"rtAvg\\\\\\":21,         \\\\\\"totalCount\\\\\\":26,         \\\\\\"concurrency\\\\\\":103.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":64922,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":17.56756756756757,         \\\\\\"responseBps\\\\\\":43866,         \\\\\\"reqSuccessRtMax\\\\\\":30,         \\\\\\"totalVum\\\\\\":13,         \\\\\\"rtMax\\\\\\":30,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681740000       },       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":13,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":1782,         \\\\\\"requestBytes\\\\\\":5304,         \\\\\\"reqSuccessCount\\\\\\":13,         \\\\\\"reqSuccessRtMin\\\\\\":11,         \\\\\\"reqSuccessRtAvg\\\\\\":23,         \\\\\\"reqSuccessTps\\\\\\":13.10483870967742,         \\\\\\"rtMin\\\\\\":11,         \\\\\\"rtAvg\\\\\\":24,         \\\\\\"totalCount\\\\\\":13,         \\\\\\"concurrency\\\\\\":411.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":97383,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":13.10483870967742,         \\\\\\"responseBps\\\\\\":32723,         \\\\\\"reqSuccessRtMax\\\\\\":37,         \\\\\\"totalVum\\\\\\":21,         \\\\\\"rtMax\\\\\\":37,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681741000       },       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":7,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":952,         \\\\\\"requestBytes\\\\\\":6256,         \\\\\\"reqSuccessCount\\\\\\":7,         \\\\\\"reqSuccessRtMin\\\\\\":19,         \\\\\\"reqSuccessRtAvg\\\\\\":20,         \\\\\\"reqSuccessTps\\\\\\":7.0,         \\\\\\"rtMin\\\\\\":19,         \\\\\\"rtAvg\\\\\\":20,         \\\\\\"totalCount\\\\\\":7,         \\\\\\"concurrency\\\\\\":500.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":114862,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":7.0,         \\\\\\"responseBps\\\\\\":17479,         \\\\\\"reqSuccessRtMax\\\\\\":21,         \\\\\\"totalVum\\\\\\":29,         \\\\\\"rtMax\\\\\\":21,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681742000       },       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":12,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":1632,         \\\\\\"requestBytes\\\\\\":7888,         \\\\\\"reqSuccessCount\\\\\\":12,         \\\\\\"reqSuccessRtMin\\\\\\":15,         \\\\\\"reqSuccessRtAvg\\\\\\":24,         \\\\\\"reqSuccessTps\\\\\\":12.0,         \\\\\\"rtMin\\\\\\":15,         \\\\\\"rtAvg\\\\\\":25,         \\\\\\"totalCount\\\\\\":12,         \\\\\\"concurrency\\\\\\":500.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":144826,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":12.0,         \\\\\\"responseBps\\\\\\":29964,         \\\\\\"reqSuccessRtMax\\\\\\":45,         \\\\\\"totalVum\\\\\\":38,         \\\\\\"rtMax\\\\\\":45,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681743000       },       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":10,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":1360,         \\\\\\"requestBytes\\\\\\":9248,         \\\\\\"reqSuccessCount\\\\\\":10,         \\\\\\"reqSuccessRtMin\\\\\\":14,         \\\\\\"reqSuccessRtAvg\\\\\\":21,         \\\\\\"reqSuccessTps\\\\\\":10.0,         \\\\\\"rtMin\\\\\\":14,         \\\\\\"rtAvg\\\\\\":22,         \\\\\\"totalCount\\\\\\":10,         \\\\\\"concurrency\\\\\\":500.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":169796,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":10.0,         \\\\\\"responseBps\\\\\\":24970,         \\\\\\"reqSuccessRtMax\\\\\\":29,         \\\\\\"totalVum\\\\\\":46,         \\\\\\"rtMax\\\\\\":29,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681744000       },       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":9,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":1224,         \\\\\\"requestBytes\\\\\\":10472,         \\\\\\"reqSuccessCount\\\\\\":9,         \\\\\\"reqSuccessRtMin\\\\\\":11,         \\\\\\"reqSuccessRtAvg\\\\\\":23,         \\\\\\"reqSuccessTps\\\\\\":9.0,         \\\\\\"rtMin\\\\\\":11,         \\\\\\"rtAvg\\\\\\":23,         \\\\\\"totalCount\\\\\\":9,         \\\\\\"concurrency\\\\\\":500.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":192269,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":9.0,         \\\\\\"responseBps\\\\\\":22473,         \\\\\\"reqSuccessRtMax\\\\\\":45,         \\\\\\"totalVum\\\\\\":54,         \\\\\\"rtMax\\\\\\":45,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681745000       },       {         \\\\\\"statusCodes\\\\\\":[           {             \\\\\\"count\\\\\\":14,             \\\\\\"name\\\\\\":\\\\\\"200\\\\\\"           }         ],         \\\\\\"reqFailureRtMin\\\\\\":0,         \\\\\\"requestBps\\\\\\":1904,         \\\\\\"requestBytes\\\\\\":12376,         \\\\\\"reqSuccessCount\\\\\\":14,         \\\\\\"reqSuccessRtMin\\\\\\":10,         \\\\\\"reqSuccessRtAvg\\\\\\":20,         \\\\\\"reqSuccessTps\\\\\\":14.0,         \\\\\\"rtMin\\\\\\":10,         \\\\\\"rtAvg\\\\\\":21,         \\\\\\"totalCount\\\\\\":14,         \\\\\\"concurrency\\\\\\":500.0,         \\\\\\"bucket\\\\\\":\\\\\\"d9fb4ee42f0e8eb3\\\\\\",         \\\\\\"reqFailureCount\\\\\\":0,         \\\\\\"reqFailureRtMax\\\\\\":0,         \\\\\\"responseBytes\\\\\\":227227,         \\\\\\"reqFailureTps\\\\\\":0.0,         \\\\\\"tps\\\\\\":14.0,         \\\\\\"responseBps\\\\\\":34958,         \\\\\\"reqSuccessRtMax\\\\\\":34,         \\\\\\"totalVum\\\\\\":63,         \\\\\\"rtMax\\\\\\":34,         \\\\\\"taskId\\\\\\":1475183,         \\\\\\"timestamp\\\\\\":1649681746000       }]\\"\\n  ],\\n  \\"SamplerMap\\": {\\n    \\"test\\": \\"test\\",\\n    \\"test2\\": 1\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetJMeterSampleMetricsResponse>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <SampleMetricList>[{ \\"statusCodes\\":Array[1],         \\"requestBytes\\":1001638,         \\"reqFailureCount\\":0,         \\"bucket\\":\\"e29e69b15e584bef\\",         \\"reqFailureTps\\":0,         \\"nodeId\\":0,         \\"rtMax\\":698,         \\"reqFailureRtMin\\":0,         \\"reqSuccessTps\\":4132.800798801797,         \\"rtAvg\\":55,         \\"totalCount\\":8278,         \\"rtMin\\":29,         \\"reqFailureRtMax\\":0,         \\"timestamp\\":1637308496000,         \\"requestBps\\":500069,         \\"reqSuccessCount\\":8278,         \\"reqSuccessRtAvg\\":55,         \\"reqSuccessRtMin\\":29,         \\"responseBytes\\":20670166,         \\"tps\\":4132.800798801797,         \\"responseBps\\":10319604,         \\"reqSuccessRtMax\\":698,         \\"taskId\\":1214920     }]</SampleMetricList>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetJMeterSampleMetricsResponse>","errorExample":""}]',
            'title' => 'JMeter采样器聚合数据',
        ],
        'GetJMeterSamplingLogs' => [
            'summary' => '根据条件获得JMeter采样器的采样日志。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求第N页采样日志信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10000000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求N条采样日志记录。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '开始时间，单位毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1637157073000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '结束时间，单位毫秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'docRequired' => true,
                        'example' => '1637157076000',
                    ],
                ],
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告ID',
                        'description' => '报告ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '7R4RE352',
                    ],
                ],
                [
                    'name' => 'AgentId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '压测引擎编号',
                        'description' => '压测引擎编号，该字段暂未启用。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '14238000',
                    ],
                ],
                [
                    'name' => 'SamplerId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '第几个采样器，从0开始',
                        'description' => '第N个采样器，从0开始。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'Success',
                    'in' => 'query',
                    'schema' => [
                        'title' => '采样结果是否成功',
                        'description' => '采样结果是否成功。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'Thread',
                    'in' => 'query',
                    'schema' => [
                        'title' => '线程',
                        'description' => '线程名。支持模糊搜索，按空格分词。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'main',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '关键字',
                        'description' => '关键字，可以通过对场景名（**SceneName**）进行模糊搜索或者对场景ID（**SceneId**）进行精确搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
                [
                    'name' => 'MinRT',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最小响应时间，单位ms',
                        'description' => '最小响应时间，单位为ms。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'MaxRT',
                    'in' => 'query',
                    'schema' => [
                        'title' => '最大响应时间，单位ms',
                        'description' => '最大响应时间，单位为ms。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1000',
                    ],
                ],
                [
                    'name' => 'ResponseCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '响应码。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '200',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '日志记录总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '返回日志记录数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '返回第N页日志信息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'SampleResults' => [
                                'title' => '采样器的采样结果',
                                'description' => '采样器的采样结果',
                                'type' => 'array',
                                'items' => [
                                    'description' => '采样器的采样结果。',
                                    'type' => 'string',
                                    'example' => '{         "assertionResults":[],         "endTimeTS":1650280351514,         "dataEncoding":"utf-8",         "latency":11,         "samplerData":"GET http://testdomain/\\n\\nGET data:\\n\\n\\n[no cookies]\\n",         "httpMethod":"GET",         "subResults":[],         "idleTime":0,         "cookies":"",         "responseCode":"200",         "responseDataAsString":"response data",         "startTimeTS":1650280351503,         "requestByteCount":136,         "instanceId":0,         "samplerId":0,         "connectTime":0,         "sceneId":276685,         "startTime":"2022-04-18T19:12Z",         "planId":1736797,         "requestData":"",         "contentType":"text/html",         "responseDataTruncated":false,         "dataType":"text",         "mediaType":"text/html",         "requestDataTruncated":false,         "responseByteCount":2497,         "threadName":"线程组 1-1",         "url":"http:/testdomain",         "requestHeaders":"Connection: keep-alive\\nx-pts-test: 1\\nHost: testdomain\\nUser-Agent: Apache-HttpClient/4.5.6 (Java/11.0.7.7-AJDK)\\n",         "responseHeaders":"HTTP/1.1 200 OK\\nContent-Length: 2381\\nContent-Type: text/html\\nServer: bfe\\nDate: Mon, 18 Apr 2022 11:12:31 GMT\\n",         "success":true,         "headersSize":116,         "bodySize":2381,         "endTime":"2022-04-18T19:12Z",         "responseMessage":"OK",         "taskId":17367970000,         "elapsedTime":11       }',
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'ReportNotExist',
                        'errorMessage' => 'The report does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"HttpStatusCode\\": 200,\\n  \\"SampleResults\\": [\\n    \\"{         \\\\\\"assertionResults\\\\\\":[],         \\\\\\"endTimeTS\\\\\\":1650280351514,         \\\\\\"dataEncoding\\\\\\":\\\\\\"utf-8\\\\\\",         \\\\\\"latency\\\\\\":11,         \\\\\\"samplerData\\\\\\":\\\\\\"GET http://testdomain/\\\\\\\\n\\\\\\\\nGET data:\\\\\\\\n\\\\\\\\n\\\\\\\\n[no cookies]\\\\\\\\n\\\\\\",         \\\\\\"httpMethod\\\\\\":\\\\\\"GET\\\\\\",         \\\\\\"subResults\\\\\\":[],         \\\\\\"idleTime\\\\\\":0,         \\\\\\"cookies\\\\\\":\\\\\\"\\\\\\",         \\\\\\"responseCode\\\\\\":\\\\\\"200\\\\\\",         \\\\\\"responseDataAsString\\\\\\":\\\\\\"response data\\\\\\",         \\\\\\"startTimeTS\\\\\\":1650280351503,         \\\\\\"requestByteCount\\\\\\":136,         \\\\\\"instanceId\\\\\\":0,         \\\\\\"samplerId\\\\\\":0,         \\\\\\"connectTime\\\\\\":0,         \\\\\\"sceneId\\\\\\":276685,         \\\\\\"startTime\\\\\\":\\\\\\"2022-04-18T19:12Z\\\\\\",         \\\\\\"planId\\\\\\":1736797,         \\\\\\"requestData\\\\\\":\\\\\\"\\\\\\",         \\\\\\"contentType\\\\\\":\\\\\\"text/html\\\\\\",         \\\\\\"responseDataTruncated\\\\\\":false,         \\\\\\"dataType\\\\\\":\\\\\\"text\\\\\\",         \\\\\\"mediaType\\\\\\":\\\\\\"text/html\\\\\\",         \\\\\\"requestDataTruncated\\\\\\":false,         \\\\\\"responseByteCount\\\\\\":2497,         \\\\\\"threadName\\\\\\":\\\\\\"线程组 1-1\\\\\\",         \\\\\\"url\\\\\\":\\\\\\"http:/testdomain\\\\\\",         \\\\\\"requestHeaders\\\\\\":\\\\\\"Connection: keep-alive\\\\\\\\nx-pts-test: 1\\\\\\\\nHost: testdomain\\\\\\\\nUser-Agent: Apache-HttpClient/4.5.6 (Java/11.0.7.7-AJDK)\\\\\\\\n\\\\\\",         \\\\\\"responseHeaders\\\\\\":\\\\\\"HTTP/1.1 200 OK\\\\\\\\nContent-Length: 2381\\\\\\\\nContent-Type: text/html\\\\\\\\nServer: bfe\\\\\\\\nDate: Mon, 18 Apr 2022 11:12:31 GMT\\\\\\\\n\\\\\\",         \\\\\\"success\\\\\\":true,         \\\\\\"headersSize\\\\\\":116,         \\\\\\"bodySize\\\\\\":2381,         \\\\\\"endTime\\\\\\":\\\\\\"2022-04-18T19:12Z\\\\\\",         \\\\\\"responseMessage\\\\\\":\\\\\\"OK\\\\\\",         \\\\\\"taskId\\\\\\":17367970000,         \\\\\\"elapsedTime\\\\\\":11       }\\"\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetJMeterSamplingLogsResponse>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <SampleResults>{endTimeTS=1637308494609, dataEncoding=utf-8, latency=35, samplerData=GET http://www.baidu.com/, httpMethod=GET, idleTime=0, responseCode=200, responseDataAsString=你就知道, startTimeTS=1637308494574, requestByteCount=121, samplerId=0, connectTime=19, sceneId=252136, startTime=2021-11-19T15:54Z, planId=1505314, requestData=, contentType=text/html, responseDataTruncated=false, dataType=text, samplerLabel=HTTP Request, mediaType=text/html, url=http://www.baidu.com/, threadName=Thread Group 1-1,  responseHeaders=HTTP/1.1 200 OK, requestHeaders=Connection: keep-alive Host: www.baidu.com User-Agent: Apache-HttpClient/4.5.6 (Java/11.0.7.7-AJDK) , success=true, bodySize=2381}</SampleResults>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetJMeterSamplingLogsResponse>","errorExample":""}]',
            'title' => 'JMeter采样器日志',
        ],
        'ListJMeterReports' => [
            'summary' => '根据条件列出JMeter报告的概要信息。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求第N页的报告信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '50',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求报告数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '20',
                        'minimum' => '1',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '要查看的报告的场景id',
                        'description' => '需查看的报告的场景ID。',
                        'type' => 'string',
                        'required' => false,
                        'docRequired' => false,
                        'example' => '10YPA8H',
                    ],
                ],
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告ID',
                        'description' => '报告ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7R4RE352',
                    ],
                ],
                [
                    'name' => 'BeginTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告的起始时间，单位为ms',
                        'description' => '查询的起始时间，单位为ms。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1637115303000',
                    ],
                ],
                [
                    'name' => 'EndTime',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告的结束时间',
                        'description' => '查询的结束时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'maximum' => '9223372036854775807',
                        'minimum' => '0',
                        'example' => '1637115306000',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告关键字',
                        'description' => '报告关键字。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '按条件查询到的报告总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '返回报告数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '返回第N页的报告信息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Reports' => [
                                'description' => '报告信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '报告详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ReportName' => [
                                            'title' => '报告名称',
                                            'description' => '报告名称。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Duration' => [
                                            'title' => '压测持续时间',
                                            'description' => '压测持续时间。',
                                            'type' => 'string',
                                            'example' => '10分钟',
                                        ],
                                        'ReportId' => [
                                            'title' => '报告id',
                                            'description' => '报告ID。',
                                            'type' => 'string',
                                            'example' => '7R4RE352',
                                        ],
                                        'Vum' => [
                                            'title' => '消耗的vum',
                                            'description' => '消耗的VUM。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'ActualStartTime' => [
                                            'title' => '压测开始时间',
                                            'description' => '压测开始时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637157073000',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'ReportNotExist',
                        'errorMessage' => 'The report does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Reports\\": [\\n    {\\n      \\"ReportName\\": \\"test\\",\\n      \\"Duration\\": \\"10分钟\\",\\n      \\"ReportId\\": \\"7R4RE352\\",\\n      \\"Vum\\": 1000,\\n      \\"ActualStartTime\\": 1637157073000\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListJMeterReportsResponse>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Reports>\\n        <ReportName>test</ReportName>\\n        <Duration>10分钟</Duration>\\n        <ReportId>7R4RE352</ReportId>\\n        <Vum>1000</Vum>\\n        <ActualStartTime>1637157073000</ActualStartTime>\\n    </Reports>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListJMeterReportsResponse>","errorExample":""}]',
            'title' => 'JMeter报告列表',
        ],
        'StartDebuggingJMeterScene' => [
            'summary' => '开始调试JMeter场景。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '需调试的场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'ReportId' => [
                                'description' => '调试生成的报告ID。',
                                'type' => 'string',
                                'example' => 'MH0SU1I',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"ReportId\\": \\"MH0SU1I\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartDebuggingJMeterSceneResponse>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <ReportId>MH0SU1I</ReportId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StartDebuggingJMeterSceneResponse>","errorExample":""}]',
            'title' => '调试场景',
        ],
        'StartTestingJMeterScene' => [
            'summary' => '开始压测JMeter场景。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '需启动压测的场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'ReportId' => [
                                'description' => '报告ID。',
                                'type' => 'string',
                                'example' => 'MH0SU1I',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"ReportId\\": \\"MH0SU1I\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StartTestingJMeterSceneResponse>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <ReportId>MH0SU1I</ReportId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StartTestingJMeterSceneResponse>","errorExample":""}]',
            'title' => '压测场景',
        ],
        'StopDebuggingJMeterScene' => [
            'summary' => '停止JMeter场景调试。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '需停止调试的场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopDebuggingJMeterSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StopDebuggingJMeterSceneResponse>","errorExample":""}]',
            'title' => '停止调试',
        ],
        'StopTestingJMeterScene' => [
            'summary' => '停止JMeter场景压测。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '需停止压测的场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<StopTestingJMeterSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</StopTestingJMeterSceneResponse>","errorExample":""}]',
            'title' => '停止压测',
        ],
        'GetJMeterSceneRunningData' => [
            'summary' => '根据场景ID获取JMeter场景压测过程中的数据。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'DocumentUrl' => [
                                'description' => '文档链接。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RunningData' => [
                                'title' => '运行中的数据',
                                'description' => '运行中的数据。',
                                'type' => 'object',
                                'properties' => [
                                    'SceneId' => [
                                        'title' => '场景id',
                                        'description' => '场景ID。',
                                        'type' => 'string',
                                        'example' => 'DYYPZIH',
                                    ],
                                    'ErrorMessage' => [
                                        'title' => '压测流程的失败信息',
                                        'description' => '压测流程的失败信息',
                                        'type' => 'string',
                                        'example' => '引擎租用失败',
                                    ],
                                    'ReportId' => [
                                        'title' => '压测任务id，也即报告id',
                                        'description' => '压测任务id，也即报告id',
                                        'type' => 'string',
                                        'example' => 'DYYPLDKS',
                                    ],
                                    'HasError' => [
                                        'title' => '压测流程是否出错',
                                        'description' => '压测流程是否出错',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'SceneName' => [
                                        'title' => '场景名称',
                                        'description' => '场景名称。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'HoldFor' => [
                                        'title' => '压测计划持续时间，单位s',
                                        'description' => '压测计划持续时间，单位为s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '600',
                                    ],
                                    'AgentCount' => [
                                        'title' => '压测引擎数量',
                                        'description' => '压测引擎数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'AgentIdList' => [
                                        'title' => '压测引擎列表',
                                        'description' => '压测引擎列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '压测引擎列表。',
                                            'type' => 'string',
                                            'example' => '["116.19.153.94_3088020"]',
                                        ],
                                    ],
                                    'Concurrency' => [
                                        'title' => '并发量',
                                        'description' => '并发量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'HasReport' => [
                                        'title' => '是否生成了报告',
                                        'description' => '当前是否已经生成报告。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'IsDebugging' => [
                                        'title' => '是否是调试',
                                        'description' => '是否调试。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Status' => [
                                        'title' => '状态',
                                        'description' => '场景压测状态。',
                                        'type' => 'string',
                                        'example' => 'RUNNING',
                                    ],
                                    'Vum' => [
                                        'title' => '目前消耗的vum',
                                        'description' => '目前消耗的VUM。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '100',
                                    ],
                                    'StartTimeTS' => [
                                        'title' => '压测计划开始时间戳，单位ms',
                                        'description' => '压测计划开始时间戳，单位为ms。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1639970040000',
                                    ],
                                    'StageName' => [
                                        'title' => '当前所处阶段',
                                        'description' => '当前所处阶段。',
                                        'type' => 'string',
                                        'example' => '任务执行',
                                    ],
                                    'AllSampleStat' => [
                                        'title' => '场景整体的采样状态',
                                        'description' => '场景整体的采样状态。',
                                        'type' => 'object',
                                        'example' => '{ "failTps":0,"successRtAvg":33,"successRtMin":29,"successRtSum":99407,         "rtAvg":33.459104678559406,"rtMin":29,"failRtMax":0,"duration":997,         "samplerId":-1, "successRtMax":133,"fullStat":{       "requestBytesSum":629926,"successRtAvg":33,"successRtMin":29,"successRtSum":174551,"count":5206,"rtSeg99":53, "successTps":2397.9732842008293,"rtSeg90":36, "rtSeg50":32,            "rtSeg99Sum":53,"rtAvg":33.528812908182864, "rtMin":29,             "failRtMax":0,"duration":2171, "successCount":5206,            "rtSegStatCount":1,"tps":2397.9732842008293 }, "successCount":2971, "failRtSum":0,"failCount":0,"count":2971,"concurrency":100, "successTps":2979.939819458375,"tps":2979.939819458375,"failRtAvg":0,         "failRtMin":0,  "rtMax":133}',
                                    ],
                                    'SampleStatList' => [
                                        'title' => '每一个采样器的状态',
                                        'description' => '每一个采样器的状态。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '每一个采样器的状态。',
                                            'type' => 'object',
                                            'example' => '{ "failTps":0,"successRtAvg":33,"successRtMin":29,"successRtSum":99407,         "rtAvg":33.459104678559406,"rtMin":29,"failRtMax":0,"duration":997,         "samplerId":-1, "successRtMax":133,"fullStat":{       "requestBytesSum":629926,"successRtAvg":33,"successRtMin":29,"successRtSum":174551,"count":5206,"rtSeg99":53, "successTps":2397.9732842008293,"rtSeg90":36, "rtSeg50":32,            "rtSeg99Sum":53,"rtAvg":33.528812908182864, "rtMin":29,             "failRtMax":0,"duration":2171, "successCount":5206,            "rtSegStatCount":1,"tps":2397.9732842008293 }, "successCount":2971, "failRtSum":0,"failCount":0,"count":2971,"concurrency":100, "successTps":2979.939819458375,"tps":2979.939819458375,"failRtAvg":0,         "failRtMin":0,  "rtMax":133}',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'ReportNotExist',
                        'errorMessage' => 'The report does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"HttpStatusCode\\": 200,\\n  \\"DocumentUrl\\": \\"空\\",\\n  \\"RunningData\\": {\\n    \\"SceneId\\": \\"DYYPZIH\\",\\n    \\"ErrorMessage\\": \\"引擎租用失败\\",\\n    \\"ReportId\\": \\"DYYPLDKS\\",\\n    \\"HasError\\": false,\\n    \\"SceneName\\": \\"test\\",\\n    \\"HoldFor\\": 600,\\n    \\"AgentCount\\": 2,\\n    \\"AgentIdList\\": [\\n      \\"[\\\\\\"116.19.153.94_3088020\\\\\\"]\\"\\n    ],\\n    \\"Concurrency\\": 1000,\\n    \\"HasReport\\": false,\\n    \\"IsDebugging\\": false,\\n    \\"Status\\": \\"RUNNING\\",\\n    \\"Vum\\": 100,\\n    \\"StartTimeTS\\": 1639970040000,\\n    \\"StageName\\": \\"任务执行\\",\\n    \\"AllSampleStat\\": {\\n      \\"failTps\\": 0,\\n      \\"successRtAvg\\": 33,\\n      \\"successRtMin\\": 29,\\n      \\"successRtSum\\": 99407,\\n      \\"rtAvg\\": 33.459104678559406,\\n      \\"rtMin\\": 29,\\n      \\"failRtMax\\": 0,\\n      \\"duration\\": 997,\\n      \\"samplerId\\": -1,\\n      \\"successRtMax\\": 133,\\n      \\"fullStat\\": {\\n        \\"requestBytesSum\\": 629926,\\n        \\"successRtAvg\\": 33,\\n        \\"successRtMin\\": 29,\\n        \\"successRtSum\\": 174551,\\n        \\"count\\": 5206,\\n        \\"rtSeg99\\": 53,\\n        \\"successTps\\": 2397.9732842008293,\\n        \\"rtSeg90\\": 36,\\n        \\"rtSeg50\\": 32,\\n        \\"rtSeg99Sum\\": 53,\\n        \\"rtAvg\\": 33.528812908182864,\\n        \\"rtMin\\": 29,\\n        \\"failRtMax\\": 0,\\n        \\"duration\\": 2171,\\n        \\"successCount\\": 5206,\\n        \\"rtSegStatCount\\": 1,\\n        \\"tps\\": 2397.9732842008293\\n      },\\n      \\"successCount\\": 2971,\\n      \\"failRtSum\\": 0,\\n      \\"failCount\\": 0,\\n      \\"count\\": 2971,\\n      \\"concurrency\\": 100,\\n      \\"successTps\\": 2979.939819458375,\\n      \\"tps\\": 2979.939819458375,\\n      \\"failRtAvg\\": 0,\\n      \\"failRtMin\\": 0,\\n      \\"rtMax\\": 133\\n    },\\n    \\"SampleStatList\\": [\\n      {\\n        \\"failTps\\": 0,\\n        \\"successRtAvg\\": 33,\\n        \\"successRtMin\\": 29,\\n        \\"successRtSum\\": 99407,\\n        \\"rtAvg\\": 33.459104678559406,\\n        \\"rtMin\\": 29,\\n        \\"failRtMax\\": 0,\\n        \\"duration\\": 997,\\n        \\"samplerId\\": -1,\\n        \\"successRtMax\\": 133,\\n        \\"fullStat\\": {\\n          \\"requestBytesSum\\": 629926,\\n          \\"successRtAvg\\": 33,\\n          \\"successRtMin\\": 29,\\n          \\"successRtSum\\": 174551,\\n          \\"count\\": 5206,\\n          \\"rtSeg99\\": 53,\\n          \\"successTps\\": 2397.9732842008293,\\n          \\"rtSeg90\\": 36,\\n          \\"rtSeg50\\": 32,\\n          \\"rtSeg99Sum\\": 53,\\n          \\"rtAvg\\": 33.528812908182864,\\n          \\"rtMin\\": 29,\\n          \\"failRtMax\\": 0,\\n          \\"duration\\": 2171,\\n          \\"successCount\\": 5206,\\n          \\"rtSegStatCount\\": 1,\\n          \\"tps\\": 2397.9732842008293\\n        },\\n        \\"successCount\\": 2971,\\n        \\"failRtSum\\": 0,\\n        \\"failCount\\": 0,\\n        \\"count\\": 2971,\\n        \\"concurrency\\": 100,\\n        \\"successTps\\": 2979.939819458375,\\n        \\"tps\\": 2979.939819458375,\\n        \\"failRtAvg\\": 0,\\n        \\"failRtMin\\": 0,\\n        \\"rtMax\\": 133\\n      }\\n    ]\\n  }\\n}","errorExample":""},{"type":"xml","example":"<GetJMeterSceneRunningDataResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <DocumentUrl>空</DocumentUrl>\\n    <RunningData>\\n        <SceneId>DYYPZIH</SceneId>\\n        <SceneName>test</SceneName>\\n        <HoldFor>600</HoldFor>\\n        <AgentCount>2</AgentCount>\\n        <AgentIdList>[\\"116.19.153.94_3088020\\"]</AgentIdList>\\n        <Concurrency>1000</Concurrency>\\n        <HasReport>false</HasReport>\\n        <IsDebugging>false</IsDebugging>\\n        <Status>RUNNING</Status>\\n        <Vum>100</Vum>\\n        <StartTimeTS>1639970040000</StartTimeTS>\\n        <StageName>任务执行</StageName>\\n        <SampleStatList/>\\n    </RunningData>\\n</GetJMeterSceneRunningDataResponse>","errorExample":""}]',
            'title' => '获得压测运行时数据',
        ],
        'AdjustJMeterSceneSpeed' => [
            'summary' => '调整jmeter压力大小',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'ReportId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '报告id',
                        'description' => '报告ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
                [
                    'name' => 'Speed',
                    'in' => 'query',
                    'schema' => [
                        'title' => '要调整到的压力值',
                        'description' => '您需要调整到的压力值。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'minimum' => '1',
                        'example' => '100',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示消息。',
                                'type' => 'string',
                                'example' => 'success',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DC4E31DDA77-6745-4925-B423-4E89VV34221A',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'ReportId' => [
                                'title' => '报告ID',
                                'description' => '报告ID。',
                                'type' => 'string',
                                'example' => 'DYYPZIH',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"success\\",\\n  \\"RequestId\\": \\"DC4E31DDA77-6745-4925-B423-4E89VV34221A\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"ReportId\\": \\"DYYPZIH\\"\\n}","type":"json"}]',
            'title' => '压测中调整JMeter线程数',
        ],
        'RemoveOpenJMeterScene' => [
            'summary' => '移除JMeter场景。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景ID',
                        'description' => '需删除的场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RemoveOpenJMeterSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</RemoveOpenJMeterSceneResponse>","errorExample":""}]',
            'title' => '移除场景',
        ],
        'SaveOpenJMeterScene' => [
            'summary' => '新建或更新JMeter场景。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'OpenJMeterScene',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '场景详情',
                        'description' => '场景详情。',
                        'type' => 'object',
                        'properties' => [
                            'SceneName' => [
                                'title' => '场景名',
                                'description' => '场景名。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'test',
                            ],
                            'EnvironmentId' => [
                                'title' => '关联的环境id',
                                'description' => '关联的环境ID。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'I8PZIH',
                            ],
                            'JmeterPluginLabel' => [
                                'title' => 'jmeter插件的环境标签',
                                'description' => 'jmeter插件标签。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test',
                                'maxLength' => 32,
                                'pattern' => '^[A-Z0-9]+$',
                            ],
                            'TestFile' => [
                                'title' => '测试文件',
                                'description' => '测试文件。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'test.jmx',
                            ],
                            'FileList' => [
                                'title' => '文件列表',
                                'description' => '文件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文件详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FileName' => [
                                            'title' => '文件名',
                                            'description' => '文件名。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'test.jmx',
                                        ],
                                        'FileOssAddress' => [
                                            'title' => '文件公网可访问的oss地址',
                                            'description' => '文件在公网可访问的OSS地址。'."\n"
                                                .'>目前仅支持上海地域。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'https://test.cn-shanghai.aliyuncs.com/test.jmx',
                                        ],
                                        'Md5' => [
                                            'title' => '文件的MD5',
                                            'description' => '文件的MD5。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'DA70F97A74D76B6A3BEF9CC8AE0D89EB',
                                        ],
                                        'FileId' => [
                                            'title' => '文件id',
                                            'description' => '文件ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                            'example' => '61232',
                                        ],
                                        'SplitCsv' => [
                                            'title' => '是否切分，仅针对csv有效',
                                            'description' => '是否切分，仅针对CSV有效。',
                                            'type' => 'boolean',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                        'FileSize' => [
                                            'title' => '文件大小，单位byte',
                                            'description' => '文件大小，文件总大小不超过500 M，单位Byte。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'required' => false,
                                            'example' => '28880',
                                        ],
                                        'Tags' => [
                                            'title' => '文件tag',
                                            'description' => '文件标签。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '空',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                            ],
                            'JMeterProperties' => [
                                'title' => 'Jmeter属性',
                                'description' => 'JMeter属性。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '属性详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '属性名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'https.sessioncontext.shared',
                                        ],
                                        'Value' => [
                                            'description' => '属性值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'false',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'RampUp' => [
                                'title' => '预热时间',
                                'description' => '预热时间，单位秒。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '600',
                            ],
                            'Steps' => [
                                'title' => '预热阶段',
                                'description' => '预热阶段。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '3',
                            ],
                            'Concurrency' => [
                                'title' => '最大并发',
                                'description' => '最大并发，并发上限由用户的资源包决定。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '1000',
                            ],
                            'Duration' => [
                                'title' => '压测持续时间',
                                'description' => '压测持续时间，最长压测时间不超过一天，单位秒，取值范围为 60~86400。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '600',
                            ],
                            'SceneId' => [
                                'title' => '场景ID',
                                'description' => '场景ID。没有传场景ID表示新建场景，传场景ID表示更新场景。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DYYPZIH',
                            ],
                            'IsVpcTest' => [
                                'title' => '是否为VPC测试，默认为false表示公网测试，此值为true时VPC相关配置才生效',
                                'description' => '是否为VPC测试。默认为false，表示公网测试。当此值为true时，VPC相关配置才会生效。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                                'default' => 'false',
                            ],
                            'DnsCacheConfig' => [
                                'title' => 'DNS配置',
                                'description' => 'DNS配置。',
                                'type' => 'object',
                                'properties' => [
                                    'ClearCacheEachIteration' => [
                                        'description' => '每次循环是否清空缓存。',
                                        'type' => 'boolean',
                                        'required' => false,
                                        'example' => 'true',
                                    ],
                                    'DnsServers' => [
                                        'description' => 'DNS服务器。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => 'DNS服务器详情。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '[8.8.8.8]',
                                        ],
                                        'required' => false,
                                    ],
                                    'HostTable' => [
                                        'description' => '域名绑定。',
                                        'type' => 'object',
                                        'required' => false,
                                        'additionalProperties' => [
                                            'type' => 'string',
                                            'example' => '"ns.server.om":"8.8.8.8"',
                                            'description' => '域名绑定详情。',
                                        ],
                                    ],
                                ],
                                'required' => false,
                            ],
                            'AgentCount' => [
                                'title' => '施压引擎数量',
                                'description' => '施压机数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => true,
                                'example' => '2',
                            ],
                            'RegionId' => [
                                'title' => 'region的id，VPC压测时配置',
                                'description' => '地域ID，在VPC压测时配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'cn-beijing',
                            ],
                            'VpcId' => [
                                'title' => 'vpc的id，VPC压测时配置',
                                'description' => 'VPC的ID，在VPC压测时配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vpc-2ze2sahjdgahsebjkqhf4pyj',
                            ],
                            'SecurityGroupId' => [
                                'title' => '安全组id，VPC压测时配置',
                                'description' => '安全组ID，在VPC压测时配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'sg-2zeid0dd7bhahsgdahspaly',
                            ],
                            'VSwitchId' => [
                                'title' => '交换机id，VPC压测时配置',
                                'description' => '交换机ID，在VPC压测时配置。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'vsw-2zehsgdhsahw1r',
                            ],
                            'SyncTimerType' => [
                                'title' => 'synchronizing timer 类型',
                                'description' => 'JMeter中的同步定时器类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'GLOBAL',
                            ],
                            'ConstantThroughputTimerType' => [
                                'title' => 'constantThroughputTimerType',
                                'description' => 'JMeter中的固定吞吐量定时器类型。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'GLOBAL',
                            ],
                            'Mode' => [
                                'title' => '压力模式',
                                'description' => '施压模型。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'CONCURRENCY',
                            ],
                            'StartRps' => [
                                'description' => '起始的RPS，RPS模式下生效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'MaxRps' => [
                                'description' => '最大RPS，RPS模式下生效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '100',
                            ],
                            'StartConcurrency' => [
                                'description' => '起始并发，并发模式下生效。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'required' => false,
                                'example' => '10',
                            ],
                            'RegionalCondition' => [
                                'description' => '施压机地域定制',
                                'type' => 'array',
                                'items' => [
                                    'description' => '单地域施压机数量',
                                    'type' => 'object',
                                    'properties' => [
                                        'Region' => [
                                            'description' => '地域id',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'Amount' => [
                                            'description' => '施压机数量，所有地域施压机数量之和需要等于场景的AgentCount值。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'required' => false,
                                            'example' => '1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'SceneId' => [
                                'title' => '场景id',
                                'description' => '创建或更新的场景ID。',
                                'type' => 'string',
                                'example' => 'DYYPZIH',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SaveOpenJMeterSceneFail',
                        'errorMessage' => 'The scene cannot be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"SceneId\\": \\"DYYPZIH\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SaveOpenJMeterSceneResponse>\\n    <SceneId>DYYPZIH</SceneId>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SaveOpenJMeterSceneResponse>","errorExample":""}]',
            'title' => '保存场景',
        ],
        'GetOpenJMeterScene' => [
            'summary' => '获得JMeter场景详情。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景ID',
                        'description' => '场景ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'DYYPZIH',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Scene' => [
                                'title' => '场景详情',
                                'description' => '场景详情。',
                                'type' => 'object',
                                'properties' => [
                                    'SceneName' => [
                                        'title' => '场景名',
                                        'description' => '场景名。',
                                        'type' => 'string',
                                        'example' => 'test',
                                    ],
                                    'SceneId' => [
                                        'title' => '场景id',
                                        'description' => '场景ID。',
                                        'type' => 'string',
                                        'example' => 'DYYPZIH',
                                    ],
                                    'EnvironmentId' => [
                                        'title' => '环境id',
                                        'description' => '环境ID。',
                                        'type' => 'string',
                                        'example' => 'EEDT7',
                                    ],
                                    'BaseInfo' => [
                                        'title' => '基本信息',
                                        'description' => '基本信息。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Remark' => [
                                                'title' => '备注',
                                                'description' => '备注。',
                                                'type' => 'string',
                                                'example' => '小心压测',
                                            ],
                                            'Principal' => [
                                                'title' => '场景压测负责人',
                                                'description' => '场景压测负责人。',
                                                'type' => 'string',
                                                'example' => 'test-person',
                                            ],
                                            'Resource' => [
                                                'title' => '场景来源',
                                                'description' => '场景来源。',
                                                'type' => 'string',
                                                'example' => 'create',
                                            ],
                                            'CreateName' => [
                                                'title' => '创建人名',
                                                'description' => '创建人名。',
                                                'type' => 'string',
                                                'example' => '张三',
                                            ],
                                            'ModifyName' => [
                                                'title' => '修改人名',
                                                'description' => '修改人名。',
                                                'type' => 'string',
                                                'example' => '里斯',
                                            ],
                                            'OperateType' => [
                                                'title' => '操作类型',
                                                'description' => '操作类型。',
                                                'type' => 'string',
                                                'example' => '保存去压测',
                                            ],
                                        ],
                                    ],
                                    'FileList' => [
                                        'title' => '文件列表',
                                        'description' => '文件列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '文件详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Id' => [
                                                    'title' => '文件ID',
                                                    'description' => '文件ID。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '61660',
                                                ],
                                                'FileName' => [
                                                    'title' => '文件名',
                                                    'description' => '文件名。',
                                                    'type' => 'string',
                                                    'example' => 'json.jar',
                                                ],
                                                'FileOssAddress' => [
                                                    'title' => '文件地址',
                                                    'description' => '文件的OSS地址。',
                                                    'type' => 'string',
                                                    'example' => 'https://test.oss-cn-shanghai.aliyuncs.com/json.jar',
                                                ],
                                                'SplitCsv' => [
                                                    'title' => 'csv文件是否切分',
                                                    'description' => '是否切分。',
                                                    'type' => 'boolean',
                                                    'example' => 'false',
                                                ],
                                                'Md5' => [
                                                    'title' => '文件的md5值',
                                                    'description' => 'JAR包的MD5值。',
                                                    'type' => 'string',
                                                    'example' => '43B584026CE5E570F3DE638FA7EEF9E0',
                                                ],
                                                'FileSize' => [
                                                    'title' => '文件大小',
                                                    'description' => '文件大小，单位为Byte。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '700',
                                                ],
                                                'FileType' => [
                                                    'title' => '文件类型',
                                                    'description' => '文件类型。',
                                                    'type' => 'string',
                                                    'example' => 'jar',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TestFile' => [
                                        'title' => '测试文件',
                                        'description' => '测试文件。',
                                        'type' => 'string',
                                        'example' => 'baidu.jmx',
                                    ],
                                    'IsVpcTest' => [
                                        'title' => '是否为VPC压测',
                                        'description' => '是否为VPC压测。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'Duration' => [
                                        'title' => '压测持续时间，单位为s',
                                        'description' => '压测持续时间，单位为s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '600',
                                    ],
                                    'DnsCacheConfig' => [
                                        'title' => 'DNS配置',
                                        'description' => 'DNS配置。',
                                        'type' => 'object',
                                        'properties' => [
                                            'ClearCacheEachIteration' => [
                                                'title' => '是否清除缓存',
                                                'description' => '是否清除缓存。',
                                                'type' => 'boolean',
                                                'example' => 'false',
                                            ],
                                            'DnsServers' => [
                                                'title' => 'DNS服务器',
                                                'description' => 'DNS服务器',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => 'DNS服务器。',
                                                    'type' => 'string',
                                                    'example' => '["8.8.8.8"]',
                                                ],
                                            ],
                                            'HostTable' => [
                                                'title' => '域名绑定',
                                                'description' => '域名绑定。',
                                                'type' => 'object',
                                                'example' => '{"server.com":"6.6.6.6"}',
                                            ],
                                        ],
                                    ],
                                    'Concurrency' => [
                                        'title' => '最大并发，并发模式下生效',
                                        'description' => '最大并发。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1000',
                                    ],
                                    'AgentCount' => [
                                        'title' => '施压机数量',
                                        'description' => '施压机数量。一台施压机最多支持500并发。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                    'RampUp' => [
                                        'title' => '递增时间，单位s',
                                        'description' => '递增时间，单位为s。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'Steps' => [
                                        'title' => '递增阶梯数。预热时间和预热阶段数都不配置时 使用固定压力值 只配置预热时间，不配置阶段数时 使用均匀递增 预热时间和阶段数都配置时，并且steps<rampUp 使用阶梯递增 不能只配置steps，不配置rampUp 如果这样配置，默认使用固定压力值',
                                        'description' => '递增阶梯数。预热时间和预热阶段数都不进行配置时，使用固定压力值；只配置预热时间，不配置阶段数时，使用均匀递增；预热时间和阶段数都进行配置时，且Steps<rampUp，使用阶梯递增。不可只配置Steps，而不配置rampUp。如果使用此配置，则默认使用固定压力值。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '3',
                                    ],
                                    'RegionId' => [
                                        'title' => 'VPC压测时配置',
                                        'description' => '地域ID，在VPC压测时配置。',
                                        'type' => 'string',
                                        'example' => 'cn-beijing',
                                    ],
                                    'VpcId' => [
                                        'title' => 'vpc的id，VPC压测时配置',
                                        'description' => 'VPC的ID，在VPC压测时配置。',
                                        'type' => 'string',
                                        'example' => 'vpc-2ze2sahjdgahsebjkqhf4pyj',
                                    ],
                                    'SecurityGroupId' => [
                                        'title' => '安全组id，VPC压测时配置',
                                        'description' => '安全组ID，在VPC压测时配置。',
                                        'type' => 'string',
                                        'example' => 'sg-2zeid0dd7bhahsgdahspaly',
                                    ],
                                    'VSwitchId' => [
                                        'title' => '交换机id，VPC压测时配置',
                                        'description' => '交换机ID，在VPC压测时配置。',
                                        'type' => 'string',
                                        'example' => 'vsw-2zehsgdhsahw1r',
                                    ],
                                    'SyncTimerType' => [
                                        'title' => 'synchronizing timer 类型',
                                        'description' => '同步定时器类型。',
                                        'type' => 'string',
                                        'example' => 'GLOBAL',
                                    ],
                                    'ConstantThroughputTimerType' => [
                                        'title' => 'constantThroughputTimerType',
                                        'description' => '固定吞吐量定时器类型。',
                                        'type' => 'string',
                                        'example' => 'STAND_ALONE',
                                    ],
                                    'Pool' => [
                                        'title' => '压力来源。“”表示公网，intranet-vpc表示VPC',
                                        'description' => '压力来源。“”表示公网，intranet-vpc表示VPC',
                                        'type' => 'string',
                                        'example' => 'VPC',
                                    ],
                                    'Mode' => [
                                        'title' => '施压模式，concurrency_mode表示并发压测,tps_mode表示RPS压测',
                                        'description' => '施压模式，concurrency_mode表示并发压测,tps_mode表示RPS压测',
                                        'type' => 'string',
                                        'example' => 'concurrency_mode',
                                    ],
                                    'StartRps' => [
                                        'description' => '起始的RPS，RPS模式下生效。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'true',
                                    ],
                                    'MaxRps' => [
                                        'description' => '最大RPS，RPS模式下生效。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'true',
                                    ],
                                    'StartConcurrency' => [
                                        'description' => '起始并发，并发模式下生效。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => 'true',
                                    ],
                                    'RegionalCondition' => [
                                        'description' => '施压机地域定制',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '单地域施压机数量',
                                            'type' => 'object',
                                            'properties' => [
                                                'Region' => [
                                                    'description' => '地域id',
                                                    'type' => 'string',
                                                    'example' => 'cn-hangzhou',
                                                ],
                                                'Amount' => [
                                                    'description' => '施压机数量',
                                                    'type' => 'integer',
                                                    'format' => 'int32',
                                                    'example' => '1',
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Scene\\": {\\n    \\"SceneName\\": \\"test\\",\\n    \\"SceneId\\": \\"DYYPZIH\\",\\n    \\"EnvironmentId\\": \\"EEDT7\\",\\n    \\"BaseInfo\\": {\\n      \\"Remark\\": \\"小心压测\\",\\n      \\"Principal\\": \\"test-person\\",\\n      \\"Resource\\": \\"create\\",\\n      \\"CreateName\\": \\"张三\\",\\n      \\"ModifyName\\": \\"里斯\\",\\n      \\"OperateType\\": \\"保存去压测\\"\\n    },\\n    \\"FileList\\": [\\n      {\\n        \\"Id\\": 61660,\\n        \\"FileName\\": \\"json.jar\\",\\n        \\"FileOssAddress\\": \\"https://test.oss-cn-shanghai.aliyuncs.com/json.jar\\",\\n        \\"SplitCsv\\": false,\\n        \\"Md5\\": \\"43B584026CE5E570F3DE638FA7EEF9E0\\",\\n        \\"FileSize\\": 700,\\n        \\"FileType\\": \\"jar\\"\\n      }\\n    ],\\n    \\"TestFile\\": \\"baidu.jmx\\",\\n    \\"IsVpcTest\\": false,\\n    \\"Duration\\": 600,\\n    \\"DnsCacheConfig\\": {\\n      \\"ClearCacheEachIteration\\": false,\\n      \\"DnsServers\\": [\\n        \\"[\\\\\\"8.8.8.8\\\\\\"]\\"\\n      ],\\n      \\"HostTable\\": {\\n        \\"server.com\\": \\"6.6.6.6\\"\\n      }\\n    },\\n    \\"Concurrency\\": 1000,\\n    \\"AgentCount\\": 2,\\n    \\"RampUp\\": 100,\\n    \\"Steps\\": 3,\\n    \\"RegionId\\": \\"cn-beijing\\",\\n    \\"VpcId\\": \\"vpc-2ze2sahjdgahsebjkqhf4pyj\\",\\n    \\"SecurityGroupId\\": \\"sg-2zeid0dd7bhahsgdahspaly\\",\\n    \\"VSwitchId\\": \\"vsw-2zehsgdhsahw1r\\",\\n    \\"SyncTimerType\\": \\"GLOBAL\\",\\n    \\"ConstantThroughputTimerType\\": \\"STAND_ALONE\\",\\n    \\"Pool\\": \\"VPC\\",\\n    \\"Mode\\": \\"concurrency_mode\\",\\n    \\"StartRps\\": 0,\\n    \\"MaxRps\\": 0,\\n    \\"StartConcurrency\\": 0,\\n    \\"RegionalCondition\\": [\\n      {\\n        \\"Region\\": \\"cn-hangzhou\\",\\n        \\"Amount\\": 1\\n      }\\n    ]\\n  },\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<GetOpenJMeterSceneResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Scene>\\n        <SceneName>test</SceneName>\\n        <SceneId>DYYPZIH</SceneId>\\n        <EnvironmentId>EEDT7</EnvironmentId>\\n        <BaseInfo>\\n            <Remark>小心压测</Remark>\\n            <Principal>test-person</Principal>\\n            <Resource>create</Resource>\\n            <CreateName>张三</CreateName>\\n            <ModifyName>里斯</ModifyName>\\n            <OperateType>保存去压测</OperateType>\\n        </BaseInfo>\\n        <FileList>\\n            <Id>61660</Id>\\n            <FileName>json.jar</FileName>\\n            <FileOssAddress>https://test.oss-cn-shanghai.aliyuncs.com/json.jar</FileOssAddress>\\n            <SplitCsv>false</SplitCsv>\\n            <Md5>43B584026CE5E570F3DE638FA7EEF9E0</Md5>\\n            <FileSize>700</FileSize>\\n            <FileType>jar</FileType>\\n        </FileList>\\n        <TestFile>baidu.jmx</TestFile>\\n        <IsVpcTest>false</IsVpcTest>\\n        <Duration>600</Duration>\\n        <DnsCacheConfig>\\n            <ClearCacheEachIteration>false</ClearCacheEachIteration>\\n            <DnsServers>[\\"8.8.8.8\\"]</DnsServers>\\n        </DnsCacheConfig>\\n        <Concurrency>1000</Concurrency>\\n        <AgentCount>2</AgentCount>\\n        <RampUp>100</RampUp>\\n        <Steps>3</Steps>\\n        <RegionId>cn-beijing</RegionId>\\n        <VpcId>vpc-2ze2sahjdgahsebjkqhf4pyj</VpcId>\\n        <SecurityGroupId>sg-2zeid0dd7bhahsgdahspaly</SecurityGroupId>\\n        <VSwitchId>vsw-2zehsgdhsahw1r</VSwitchId>\\n        <SyncTimerType>GLOBAL</SyncTimerType>\\n        <ConstantThroughputTimerType>STAND_ALONE</ConstantThroughputTimerType>\\n    </Scene>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</GetOpenJMeterSceneResponse>","errorExample":""}]',
            'title' => '场景详情',
        ],
        'ListOpenJMeterScenes' => [
            'summary' => '根据条件获得JMeter场景列表。',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求的第N页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483647',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求的场景数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '1000',
                        'minimum' => '10',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SceneId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景id',
                        'description' => '场景ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DYYPZIH',
                    ],
                ],
                [
                    'name' => 'SceneName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '场景名',
                        'description' => '场景名。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'JMeterScene' => [
                                'description' => '场景信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '场景详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DurationStr' => [
                                            'title' => '压测持续时间',
                                            'description' => '压测持续时间。',
                                            'type' => 'string',
                                            'example' => '10分钟',
                                        ],
                                        'SceneId' => [
                                            'title' => '场景id',
                                            'description' => '场景ID。',
                                            'type' => 'string',
                                            'example' => 'DYYPZIH',
                                        ],
                                        'SceneName' => [
                                            'title' => '场景名',
                                            'description' => '场景名。',
                                            'type' => 'string',
                                            'example' => 'test',
                                        ],
                                        'Status' => [
                                            'description' => '场景状态。包括：'."\n"
                                                .'- PREPARING: 准备中'."\n"
                                                .'- PREPARED: 准备完成'."\n"
                                                .'- STARTING: 启动中'."\n"
                                                .'- RUNNING: 执行中'."\n"
                                                .'- STOPPING: 停止中'."\n"
                                                .'- STOPPED: 待启动',
                                            'type' => 'string',
                                            'example' => 'STOPPED',
                                        ],
                                    ],
                                ],
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'PageNumber' => [
                                'description' => '返回场景第N页。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '返回场景数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '返回场景总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'SceneNotExist',
                        'errorMessage' => 'The scene does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"JMeterScene\\": [\\n    {\\n      \\"DurationStr\\": \\"10分钟\\",\\n      \\"SceneId\\": \\"DYYPZIH\\",\\n      \\"SceneName\\": \\"test\\",\\n      \\"Status\\": \\"STOPPED\\"\\n    }\\n  ],\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true,\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100\\n}","errorExample":""},{"type":"xml","example":"<ListOpenJMeterScenesResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <JMeterScene>\\n        <DurationStr>10分钟</DurationStr>\\n        <SceneId>DYYPZIH</SceneId>\\n        <SceneName>test</SceneName>\\n    </JMeterScene>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n    <PageNumber>1</PageNumber>\\n    <PageSize>10</PageSize>\\n    <TotalCount>100</TotalCount>\\n</ListOpenJMeterScenesResponse>","errorExample":""}]',
            'title' => 'JMeter场景列表',
        ],
        'RemoveEnv' => [
            'summary' => '根据JMeter环境ID移除JMeter环境。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'EnvId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '要删除的环境ID',
                        'description' => '需删除的环境ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '10YPA8H',
                        'maxLength' => 20,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功。'."\n"
                                    .'- false：失败。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                503 => [
                    [
                        'errorCode' => 'EnvNotExist',
                        'errorMessage' => 'The env does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<RemoveEnvResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</RemoveEnvResponse>","errorExample":""}]',
            'title' => '移除环境',
        ],
        'SaveEnv' => [
            'summary' => '新建或更新JMeter环境。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'style' => 'json',
                    'schema' => [
                        'title' => '环境',
                        'description' => '环境。',
                        'type' => 'object',
                        'properties' => [
                            'EnvId' => [
                                'title' => '环境id，不填表示新建环境，填了表示修改该环境',
                                'description' => '环境ID。若不填，表示新建环境；若填写，表示修改该环境。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '10YPA8H',
                                'maxLength' => 20,
                            ],
                            'EnvName' => [
                                'title' => '环境名称',
                                'description' => '环境名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'test-create',
                                'maxLength' => 50,
                                'minLength' => 1,
                            ],
                            'Files' => [
                                'title' => '环境依赖的文件',
                                'description' => '环境依赖的文件。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '文件详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'FileName' => [
                                            'title' => '文件名',
                                            'description' => '文件名。建议与**FileOssAddress**的文件名保持一致。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'json.jar',
                                            'maxLength' => 100,
                                            'minLength' => 1,
                                        ],
                                        'FileOssAddress' => [
                                            'title' => '文件oss地址，目前只支持上海region的oss地址',
                                            'description' => '您自己的OSS文件地址，要求公网可访问。'."\n"
                                                .'>目前只支持上海地域的OSS地址。',
                                            'type' => 'string',
                                            'required' => true,
                                            'example' => 'https://test.oss-cn-shanghai.aliyuncs.com/json.jar',
                                            'maxLength' => 200,
                                            'minLength' => 1,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => true,
                                'maxItems' => 80,
                                'minItems' => 0,
                            ],
                            'Properties' => [
                                'title' => 'jmeter属性',
                                'description' => 'JMeter属性。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '属性详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '属性名',
                                            'description' => '属性名。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'remote_hosts',
                                            'maxLength' => 1024,
                                            'minLength' => 1,
                                        ],
                                        'Value' => [
                                            'title' => '属性值',
                                            'description' => '属性值。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '127.0.0.1',
                                            'maxLength' => 1024,
                                            'minLength' => 1,
                                        ],
                                        'Description' => [
                                            'title' => '描述',
                                            'description' => '描述。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => '远程主机',
                                            'maxLength' => 1024,
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'JmeterPluginLabel' => [
                                'title' => 'jmeter插件的环境标签',
                                'description' => '插件标签。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'test',
                                'maxLength' => 32,
                                'pattern' => '^[A-Z0-9]+$',
                            ],
                        ],
                        'required' => true,
                        'docRequired' => true,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'EnvId' => [
                                'title' => '操作的环境id',
                                'description' => '操作环境的ID。',
                                'type' => 'string',
                                'example' => '10YPA8H',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                503 => [
                    [
                        'errorCode' => 'SaveEnvFail',
                        'errorMessage' => 'The env cannot be empty.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"HttpStatusCode\\": 200,\\n  \\"EnvId\\": \\"10YPA8H\\",\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<SaveEnvResponse>\\n    <Message>空</Message>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <EnvId>10YPA8H</EnvId>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</SaveEnvResponse>","errorExample":""}]',
            'title' => '保存环境',
        ],
        'ListEnvs' => [
            'summary' => '根据条件列出JMeter环境。',
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
            'systemTags' => [],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求第N页的环境信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '10000000',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '当前页的请求环境数，即一页所包含的环境数量。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '200',
                        'minimum' => '5',
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'EnvId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '环境ID',
                        'description' => '需查询的环境ID（为精确查询）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10YPA8H',
                    ],
                ],
                [
                    'name' => 'EnvName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '环境名',
                        'description' => '需查询的环境名称关键字（模糊查询）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'test-create',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回示例。',
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '查询到的环境总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'A8E16480-15C1-555A-922F-B736A005E52D',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '返回环境数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '返回第N页环境信息。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'Envs' => [
                                'title' => '环境列表',
                                'description' => '环境列表',
                                'type' => 'array',
                                'items' => [
                                    'description' => '环境列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'CreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '创建时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637053715165',
                                        ],
                                        'RunningScenes' => [
                                            'title' => '关联的场景id',
                                            'description' => '运行中的场景ID。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '场景ID详情。',
                                                'type' => 'string',
                                                'example' => '[10YPA8H, 0PYP8WH]',
                                            ],
                                        ],
                                        'EnvVersion' => [
                                            'title' => '依赖的jmeter版本',
                                            'description' => '所依赖的JMeter版本。',
                                            'type' => 'string',
                                            'example' => '5.0',
                                        ],
                                        'ModifiedTime' => [
                                            'title' => '修改时间',
                                            'description' => '修改时间。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1637053719165',
                                        ],
                                        'Files' => [
                                            'title' => '包含的jar包',
                                            'description' => '包含的JAR包。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '文件详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'FileSize' => [
                                                        'title' => '文件大小，单位为Byte',
                                                        'description' => '文件大小，单位为Byte。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '788',
                                                    ],
                                                    'Md5' => [
                                                        'title' => 'jar包的md5值',
                                                        'description' => 'JAR包的MD5值。',
                                                        'type' => 'string',
                                                        'example' => '43B584026CE5E570F3DE638FA7EEF9E0',
                                                    ],
                                                    'FileName' => [
                                                        'title' => '文件名',
                                                        'description' => '文件名。',
                                                        'type' => 'string',
                                                        'example' => 'json.jar',
                                                    ],
                                                    'FileOssAddress' => [
                                                        'title' => '文件的oss地址',
                                                        'description' => '文件的OSS地址。',
                                                        'type' => 'string',
                                                        'example' => 'https://test.oss-cn-shanghai.aliyuncs.com/json.jar',
                                                    ],
                                                    'FileId' => [
                                                        'title' => '文件ID',
                                                        'description' => '文件ID。',
                                                        'type' => 'integer',
                                                        'format' => 'int64',
                                                        'example' => '61660',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'RelatedScenes' => [
                                            'title' => '关联的场景',
                                            'description' => '关联的场景。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '关联的场景详情。',
                                                'type' => 'string',
                                                'example' => '[10YPA8H, 0PYP8WH]',
                                            ],
                                        ],
                                        'UsedCapacity' => [
                                            'title' => '环境的文件总大小',
                                            'description' => '环境文件的总大小。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '26668',
                                        ],
                                        'EnvName' => [
                                            'title' => '环境名',
                                            'description' => '环境名。',
                                            'type' => 'string',
                                            'example' => 'test-create',
                                        ],
                                        'EnvId' => [
                                            'title' => '环境ID',
                                            'description' => '环境ID。',
                                            'type' => 'string',
                                            'example' => '86S1LH',
                                        ],
                                        'Properties' => [
                                            'title' => 'jmeter属性',
                                            'description' => 'JMeter属性。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '属性详情。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Name' => [
                                                        'title' => '属性名',
                                                        'description' => '属性名。',
                                                        'type' => 'string',
                                                        'example' => 'remote_hosts',
                                                    ],
                                                    'Value' => [
                                                        'title' => '属性值',
                                                        'description' => '属性值。',
                                                        'type' => 'string',
                                                        'example' => '127.0.0.1',
                                                    ],
                                                    'Description' => [
                                                        'title' => '描述',
                                                        'description' => '描述。',
                                                        'type' => 'string',
                                                        'example' => '远程主机',
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                503 => [
                    [
                        'errorCode' => 'EnvNotExist',
                        'errorMessage' => 'The env does not exist.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"RequestId\\": \\"A8E16480-15C1-555A-922F-B736A005E52D\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"Envs\\": [\\n    {\\n      \\"CreateTime\\": 1637053715165,\\n      \\"RunningScenes\\": [\\n        \\"[10YPA8H, 0PYP8WH]\\"\\n      ],\\n      \\"EnvVersion\\": \\"5.0\\",\\n      \\"ModifiedTime\\": 1637053719165,\\n      \\"Files\\": [\\n        {\\n          \\"FileSize\\": 788,\\n          \\"Md5\\": \\"43B584026CE5E570F3DE638FA7EEF9E0\\",\\n          \\"FileName\\": \\"json.jar\\",\\n          \\"FileOssAddress\\": \\"https://test.oss-cn-shanghai.aliyuncs.com/json.jar\\",\\n          \\"FileId\\": 61660\\n        }\\n      ],\\n      \\"RelatedScenes\\": [\\n        \\"[10YPA8H, 0PYP8WH]\\"\\n      ],\\n      \\"UsedCapacity\\": 26668,\\n      \\"EnvName\\": \\"test-create\\",\\n      \\"EnvId\\": \\"86S1LH\\",\\n      \\"Properties\\": [\\n        {\\n          \\"Name\\": \\"remote_hosts\\",\\n          \\"Value\\": \\"127.0.0.1\\",\\n          \\"Description\\": \\"远程主机\\"\\n        }\\n      ]\\n    }\\n  ],\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","errorExample":""},{"type":"xml","example":"<ListEnvsResponse>\\n    <TotalCount>100</TotalCount>\\n    <RequestId>A8E16480-15C1-555A-922F-B736A005E52D</RequestId>\\n    <Message>空</Message>\\n    <PageSize>10</PageSize>\\n    <PageNumber>1</PageNumber>\\n    <Envs>\\n        <CreateTime>1637053715165</CreateTime>\\n        <RunningScenes>[10YPA8H, 0PYP8WH]</RunningScenes>\\n        <EnvVersion>5.0</EnvVersion>\\n        <ModifiedTime>1637053719165</ModifiedTime>\\n        <Files>\\n            <FileSize>788</FileSize>\\n            <Md5>43B584026CE5E570F3DE638FA7EEF9E0</Md5>\\n            <FileName>json.jar</FileName>\\n            <FileOssAddress>https://test.oss-cn-shanghai.aliyuncs.com/json.jar</FileOssAddress>\\n            <FileId>61660</FileId>\\n        </Files>\\n        <RelatedScenes>[10YPA8H, 0PYP8WH]</RelatedScenes>\\n        <UsedCapacity>26668</UsedCapacity>\\n        <EnvName>test-create</EnvName>\\n        <EnvId>86S1LH</EnvId>\\n        <Properties>\\n            <Name>remote_hosts</Name>\\n            <Value>127.0.0.1</Value>\\n            <Description>远程主机</Description>\\n        </Properties>\\n    </Envs>\\n    <HttpStatusCode>200</HttpStatusCode>\\n    <Code>200</Code>\\n    <Success>true</Success>\\n</ListEnvsResponse>","errorExample":""}]',
            'title' => '环境列表',
        ],
        'GetAllRegions' => [
            'summary' => '获取所有的region',
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
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
                            'Message' => [
                                'description' => '错误提示消息，若成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '73D16B8D-0FCD-5596-B7BE-A47042989318',
                            ],
                            'AllRegions' => [
                                'description' => '地域列表信息。',
                                'type' => 'object',
                                'additionalProperties' => [
                                    'type' => 'string',
                                    'description' => '地域信息。',
                                    'example' => '{'."\n"
                                        .'    "cn-shenzhen": "华南1(深圳)",'."\n"
                                        .'    "cn-qingdao": "华北1(青岛)",'."\n"
                                        .'    "cn-beijing": "华北2(北京)",'."\n"
                                        .'    "cn-shanghai": "华东2(上海)",'."\n"
                                        .'    "cn-hongkong": "中国香港",'."\n"
                                        .'    "ap-southeast-1": "新加坡",'."\n"
                                        .'    "cn-huhehaote": "华北5(呼和浩特)",'."\n"
                                        .'    "cn-zhangjiakou": "华北3(张家口)",'."\n"
                                        .'    "cn-hangzhou": "华东1(杭州)",'."\n"
                                        .'    "cn-chengdu": "西南1(成都)"'."\n"
                                        .'  }',
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码，成功则不返回任何数据。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'True',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Code',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Message\\": \\"空\\",\\n  \\"RequestId\\": \\"73D16B8D-0FCD-5596-B7BE-A47042989318\\",\\n  \\"AllRegions\\": {\\n    \\"key\\": \\"{\\\\n    \\\\\\"cn-shenzhen\\\\\\": \\\\\\"华南1(深圳)\\\\\\",\\\\n    \\\\\\"cn-qingdao\\\\\\": \\\\\\"华北1(青岛)\\\\\\",\\\\n    \\\\\\"cn-beijing\\\\\\": \\\\\\"华北2(北京)\\\\\\",\\\\n    \\\\\\"cn-shanghai\\\\\\": \\\\\\"华东2(上海)\\\\\\",\\\\n    \\\\\\"cn-hongkong\\\\\\": \\\\\\"中国香港\\\\\\",\\\\n    \\\\\\"ap-southeast-1\\\\\\": \\\\\\"新加坡\\\\\\",\\\\n    \\\\\\"cn-huhehaote\\\\\\": \\\\\\"华北5(呼和浩特)\\\\\\",\\\\n    \\\\\\"cn-zhangjiakou\\\\\\": \\\\\\"华北3(张家口)\\\\\\",\\\\n    \\\\\\"cn-hangzhou\\\\\\": \\\\\\"华东1(杭州)\\\\\\",\\\\n    \\\\\\"cn-chengdu\\\\\\": \\\\\\"西南1(成都)\\\\\\"\\\\n  }\\"\\n  },\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取VPC可用Region列表',
        ],
        'GetUserVpcs' => [
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
                [
                    'APP' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时设置的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483646',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示记录条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'vpc-2ze22asdfuwiea2ebjkqhf4pyj',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'TotalCount' => [
                                'description' => '总条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Vpcs' => [
                                'description' => 'VPC列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'VPC的详细信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-uf6gc56wdjpafoiwej6adqb4qn72xtw',
                                        ],
                                        'RegionId' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'example' => 'cn-hangzhou',
                                        ],
                                        'VpcName' => [
                                            'description' => 'VPC名称。',
                                            'type' => 'string',
                                            'example' => 'shanghai-vpc',
                                        ],
                                        'CidrBlock' => [
                                            'description' => 'VPC的IPv4网段。',
                                            'type' => 'string',
                                            'example' => '172.16.80.0/20',
                                        ],
                                        'Description' => [
                                            'description' => 'VPC的描述信息。',
                                            'type' => 'string',
                                            'example' => '空',
                                        ],
                                        'ResourceGroupId' => [
                                            'description' => 'VPC所属的资源组ID。',
                                            'type' => 'string',
                                            'example' => 'rg-acfm3fzmgkehpewjertna',
                                        ],
                                        'VSwitchIds' => [
                                            'description' => '交换机列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '交换机ID。',
                                                'type' => 'string',
                                                'example' => 'vsw-bp1s21fe8r3esdslplvcv5240',
                                            ],
                                        ],
                                        'RouterTableIds' => [
                                            'description' => '路由表ID列表。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '路由表ID。',
                                                'type' => 'string',
                                                'example' => 'vtb-bp11tkmteho3svealseipea6h',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'CEE46204-E1CF-5F48-B094-67362DD4B73F',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '每页显示记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询时设置的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Code',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"TotalCount\\": 100,\\n  \\"Vpcs\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-uf6gc56wdjpafoiwej6adqb4qn72xtw\\",\\n      \\"RegionId\\": \\"cn-hangzhou\\",\\n      \\"VpcName\\": \\"shanghai-vpc\\",\\n      \\"CidrBlock\\": \\"172.16.80.0/20\\",\\n      \\"Description\\": \\"空\\",\\n      \\"ResourceGroupId\\": \\"rg-acfm3fzmgkehpewjertna\\",\\n      \\"VSwitchIds\\": [\\n        \\"vsw-bp1s21fe8r3esdslplvcv5240\\"\\n      ],\\n      \\"RouterTableIds\\": [\\n        \\"vtb-bp11tkmteho3svealseipea6h\\"\\n      ]\\n    }\\n  ],\\n  \\"RequestId\\": \\"CEE46204-E1CF-5F48-B094-67362DD4B73F\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取VPC列表',
        ],
        'GetUserVpcSecurityGroup' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '第几页。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483646',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-bp10xjz7c7oqjgasodihj1kx7t',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'SecurityGroupCount' => [
                                'description' => '安全组数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '9',
                            ],
                            'SecurityGroupList' => [
                                'description' => '安全组列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '安全组详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-uf6tar2ohlasdhsatjln37h30bv',
                                        ],
                                        'Description' => [
                                            'description' => '安全组描述信息。',
                                            'type' => 'string',
                                            'example' => '空',
                                        ],
                                        'SecurityGroupId' => [
                                            'description' => '安全组 ID。',
                                            'type' => 'string',
                                            'example' => 'sg-bp16bt3zuugxpfjkasdfvthxth8',
                                        ],
                                        'SecurityGroupName' => [
                                            'description' => '安全组名。',
                                            'type' => 'string',
                                            'example' => 'my-security-group',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '61B15017-1A68-5C47-834F-87E2BBC44F2C',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，如成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '每页显示条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'PageNumber' => [
                                'description' => '第几页。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败'."\n",
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Code',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"SecurityGroupCount\\": 9,\\n  \\"SecurityGroupList\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-uf6tar2ohlasdhsatjln37h30bv\\",\\n      \\"Description\\": \\"空\\",\\n      \\"SecurityGroupId\\": \\"sg-bp16bt3zuugxpfjkasdfvthxth8\\",\\n      \\"SecurityGroupName\\": \\"my-security-group\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"61B15017-1A68-5C47-834F-87E2BBC44F2C\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 10,\\n  \\"PageNumber\\": 1,\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取安全组列表',
        ],
        'GetUserVpcVSwitch' => [
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
                [
                    'APP' => [],
                ],
                [
                    'PrivateKey' => [],
                ],
                [
                    'BearerToken' => [],
                ],
            ],
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '分页查询时的页码。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '2147483646',
                        'minimum' => '1',
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '每页显示记录条数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'docRequired' => true,
                        'maximum' => '100',
                        'minimum' => '1',
                        'example' => '1',
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
                        'example' => 'cn-hangzhou',
                    ],
                ],
                [
                    'name' => 'VpcId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '专有网络ID。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'vpc-2ze22scdz2ebdfjasdfjkqhf4pyj',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'type' => 'object',
                        'properties' => [
                            'VSwitchCount' => [
                                'description' => '交换机的数量。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '6',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '0235E5FC-4C7C-5F0C-843C-FC674F15F947',
                            ],
                            'Message' => [
                                'description' => '错误提示信息，若成功则为空。',
                                'type' => 'string',
                                'example' => '空',
                            ],
                            'PageSize' => [
                                'description' => '每页显示记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '5',
                            ],
                            'PageNumber' => [
                                'description' => '分页查询时的页码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'VSwitchList' => [
                                'description' => '交换机列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '交换机信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'VpcId' => [
                                            'description' => '专有网络ID。',
                                            'type' => 'string',
                                            'example' => 'vpc-wz9bpdaebft6j23fesdf84v2f1um3a',
                                        ],
                                        'MaxAgentCount' => [
                                            'description' => '最大可添加施压机数量。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1000',
                                        ],
                                        'AvailableIpAddressCount' => [
                                            'description' => '交换机中可用的IP地址数量。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1000',
                                        ],
                                        'VSwitchId' => [
                                            'description' => '交换机ID。',
                                            'type' => 'string',
                                            'example' => 'vsw-bp1eil9df23rsd8l1sevebiszooj',
                                        ],
                                        'VSwitchName' => [
                                            'description' => '虚拟交换机名称',
                                            'type' => 'string',
                                            'example' => 'my-vswitch',
                                        ],
                                    ],
                                ],
                            ],
                            'HttpStatusCode' => [
                                'description' => 'HTTP状态码。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '200',
                            ],
                            'Code' => [
                                'description' => '系统状态码。',
                                'type' => 'string',
                                'example' => '200',
                            ],
                            'Success' => [
                                'description' => '是否成功。'."\n"
                                    .'- true：成功'."\n"
                                    .'- false：失败',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                403 => [
                    [
                        'errorCode' => 'Code',
                        'errorMessage' => 'The specified parameter is invalid.',
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"VSwitchCount\\": 6,\\n  \\"RequestId\\": \\"0235E5FC-4C7C-5F0C-843C-FC674F15F947\\",\\n  \\"Message\\": \\"空\\",\\n  \\"PageSize\\": 5,\\n  \\"PageNumber\\": 1,\\n  \\"VSwitchList\\": [\\n    {\\n      \\"VpcId\\": \\"vpc-wz9bpdaebft6j23fesdf84v2f1um3a\\",\\n      \\"MaxAgentCount\\": 1000,\\n      \\"AvailableIpAddressCount\\": 1000,\\n      \\"VSwitchId\\": \\"vsw-bp1eil9df23rsd8l1sevebiszooj\\",\\n      \\"VSwitchName\\": \\"my-vswitch\\"\\n    }\\n  ],\\n  \\"HttpStatusCode\\": 200,\\n  \\"Code\\": \\"200\\",\\n  \\"Success\\": true\\n}","type":"json"}]',
            'title' => '获取虚拟交换机列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-zhangjiakou',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-huhehaote',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-chengdu',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-northeast-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-2',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-3',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-west-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'me-east-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou-finance',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai-finance-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen-finance-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing-finance-1',
            'endpoint' => 'pts.aliyuncs.com',
        ],
    ],
];
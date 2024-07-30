<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'sophonsoar',
        'version' => '2022-07-28',
    ],
    'directories' => [
        [
            'id' => 187418,
            'title' => '剧本编排',
            'type' => 'directory',
            'children' => [
                'VerifyPythonFile',
                'VerifyPlaybook',
                'TriggerSophonPlaybook',
                'TriggerPlaybook',
                'RunPython3Script',
                'RevertPlaybookRelease',
                'RenamePlaybookNode',
                'QueryTreeData',
                'PublishPlaybook',
                'ModifyPlaybookInstanceStatus',
                'ModifyPlaybookInputOutput',
                'ModifyPlaybook',
                'ModifyComponentAsset',
                'DescriberPython3ScriptLogs',
                'DescribeSophonCommands',
                'DescribeSoarTaskAndActions',
                'DescribeSoarRecords',
                'DescribeSoarRecordInOutput',
                'DescribeSoarRecordActionOutputList',
                'DescribePopApiVersionList',
                'DescribePopApiItemList',
                'DescribePopApi',
                'DescribePlaybooks',
                'DescribePlaybookReleases',
                'DescribePlaybookNumberMetrics',
                'DescribePlaybookNodesOutput',
                'DescribePlaybookMetrics',
                'DescribePlaybookInputOutput',
                'DescribePlaybook',
                'DescribeNodeUsedInfos',
                'DescribeNodeParamTags',
                'DescribeLatestRecordSchema',
                'DescribeField',
                'DescribeExecutePlaybooks',
                'DescribeEnumItems',
                'DescribeDistinctReleases',
                'DescribeComponentPlaybook',
                'DescribeComponentList',
                'DescribeComponentAssets',
                'DescribeComponentAssetForm',
                'DescribeApiList',
                'DeletePlaybook',
                'DeleteComponentAsset',
                'DebugPlaybook',
                'ComparePlaybooks',
                'BatchModifyInstanceStatus',
                'CreatePlaybook',
                'DescribeComponentsJs',
            ],
        ],
        [
            'id' => 187467,
            'title' => '处置任务',
            'type' => 'directory',
            'children' => [
                'DescribeProcessTasks',
                'TriggerProcessTask',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'VerifyPythonFile' => [
            'summary' => '校验Python代码片段的语法是否正确。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Content',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要校验的python代码片段。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'import logging'."\n"
                            .'def execute (params):'."\n"
                            .'  success=True'."\n"
                            .'  message=\'OK\''."\n"
                            .'  data=[]'."\n"
                            .'  return (success,message,data)',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PythonVerifyDTO>',
                        'description' => '返回校验后的代码提示信息',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'F72685FB-A6E6-5A9A-97F7-6DC1056E63CE',
                            ],
                            'Syntax' => [
                                'description' => 'python代码的校验结果集，如果为空，则表示代码语法正确',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'StartLineNumber' => [
                                            'description' => '报错代码的启始行数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'StartColumn' => [
                                            'description' => '报错代码的启始列数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '2',
                                        ],
                                        'EndLineNumber' => [
                                            'description' => '报错代码的结束行数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'EndColumn' => [
                                            'description' => '报错代码的结束列数',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '5',
                                        ],
                                        'Message' => [
                                            'description' => '代码的具体报错信息',
                                            'type' => 'string',
                                            'example' => 'undefined name \'ab\'',
                                        ],
                                        'Severity' => [
                                            'description' => '代码的错误等级'."\n"
                                                ."\n"
                                                .'- 4 表示一般错误'."\n"
                                                .'- 8 表示严重错误',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'enumValueTitles' => [
                                                4 => '一般错误',
                                                8 => '严重错误',
                                            ],
                                            'example' => '4',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                491 => [
                    [
                        'errorCode' => 'Playbook.External.ParamError',
                        'errorMessage' => 'The parameters of the request interface are wrong. Please verify the parameters and request again.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F72685FB-A6E6-5A9A-97F7-6DC1056E63CE\\",\\n  \\"Syntax\\": [\\n    {\\n      \\"StartLineNumber\\": 2,\\n      \\"StartColumn\\": 2,\\n      \\"EndLineNumber\\": 5,\\n      \\"EndColumn\\": 5,\\n      \\"Message\\": \\"undefined name \'ab\'\\",\\n      \\"Severity\\": 4\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '校验python代码片段',
        ],
        'VerifyPlaybook' => [
            'summary' => '校验剧本的配置是否正确，编排的逻辑是否合理。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9fcd3829-80ff-4681-be1e-4d2662c35fed',
                    ],
                ],
                [
                    'name' => 'TaskFlow',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本编辑配置',
                        'description' => '剧本的xml配置',
                        'type' => 'string',
                        'required' => true,
                        'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<CheckTaskInfo>>',
                        'description' => '剧本校验的返回信息',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '0DFC9403-54EB-5672-B690-9AA93C9EBB54',
                            ],
                            'CheckTaskInfos' => [
                                'title' => '传输的数据',
                                'description' => '校验的结果信息',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'RiskLevel' => [
                                            'description' => '校验信息的提示等级。取值：'."\n"
                                                .'- warn：警告提示，在剧本运行过程中可能出现问题。'."\n"
                                                .'- error：错误提示，剧本无法编译通过。'."\n"
                                                .'- remind：建议提示，不影响剧本的发布与运行，建议优化剧本格式。',
                                            'type' => 'string',
                                            'example' => 'error',
                                        ],
                                        'NodeName' => [
                                            'description' => '剧本的节点名称。',
                                            'type' => 'string',
                                            'example' => 'python3_3',
                                        ],
                                        'Detail' => [
                                            'description' => '检查未通过时的具体错误信息',
                                            'type' => 'string',
                                            'example' => 'Node [python3_3] doesn\'t have the asset information',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0DFC9403-54EB-5672-B690-9AA93C9EBB54\\",\\n  \\"CheckTaskInfos\\": [\\n    {\\n      \\"RiskLevel\\": \\"error\\",\\n      \\"NodeName\\": \\"python3_3\\",\\n      \\"Detail\\": \\"Node [python3_3] doesn\'t have the asset information\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '校验剧本配置',
        ],
        'TriggerSophonPlaybook' => [
            'summary' => '用于触发运行剧本或响应命令。',
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
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'CommandName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '想要触发的命令名称。'."\n"
                            .'>调用[DescribeSophonCommands](~~DescribeSophonCommands~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf_process_command',
                    ],
                ],
                [
                    'name' => 'InputParams',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发命令或剧本的输入参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'    "param1": "xx.xx.xx.xx",'."\n"
                            .'    "param2": "7d"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'SophonTaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '业务的自定义ID，如果触发剧本时不指定，会产生一个随机的ID，用于排查与定位问题。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f916b93e-e814-459f-9662-xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f916b93e-e814-459f-9662-xxxxxxxxxx',
                    ],
                ],
                [
                    'name' => 'TriggerType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '触发类型，取值：'."\n"
                            ."\n"
                            .'- **command**：触发命令任务'."\n"
                            .'- **playbook**：触发剧本任务',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'playbook',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<SophonTaskResult>',
                        'description' => '请求返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '传输的数据',
                                'description' => '触发命令或剧本后的返回详情。',
                                'type' => 'object',
                                'properties' => [
                                    'SophonTaskId' => [
                                        'description' => '业务的自定义ID，如果触发剧本时不指定，会产生一个随机的ID，用于排查与定位问题。',
                                        'type' => 'string',
                                        'example' => 'a7c6d055-a72f-4676-bc89-3cd9edc0284c',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '0DFC9403-54EB-5672-B690-9AA93C9EBB54',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SophonTaskId\\": \\"a7c6d055-a72f-4676-bc89-3cd9edc0284c\\"\\n  },\\n  \\"RequestId\\": \\"0DFC9403-54EB-5672-B690-9AA93C9EBB54\\"\\n}","type":"json"}]',
            'title' => '触发剧本或响应命令',
            'description' => '请确保在使用该接口前，已充分了解响应编排产品的收费方式和[价格](https://www.aliyun.com/price/product#/sas/detail/sas)。',
        ],
        'TriggerPlaybook' => [
            'summary' => '用于触发已启用的自定义剧本或预定义剧本。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2a687089-d4dd-47d4-9709-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'InputParam',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的入参',
                        'description' => '剧本的输入参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'    "input1": "xx.xx.xx.xx",'."\n"
                            .'    "input2": "7d"'."\n"
                            .'}'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookTriggerDTO>',
                        'description' => '请求返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'BD5A8DB6-A42C-532B-BCE8-83E69550CD59',
                            ],
                            'TriggerUuid' => [
                                'description' => '剧本运行的UUID，可用于获取剧本的运行结果。',
                                'type' => 'string',
                                'example' => '55E63C57-D6C8-5036-A770-5CB10AC807AA',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD5A8DB6-A42C-532B-BCE8-83E69550CD59\\",\\n  \\"TriggerUuid\\": \\"55E63C57-D6C8-5036-A770-5CB10AC807AA\\"\\n}","type":"json"}]',
            'title' => '触发剧本',
            'description' => '请确保在使用该接口前，已充分了解响应编排产品的收费方式和[价格](https://www.aliyun.com/price/product#/sas/detail/sas)。',
        ],
        'RunPython3Script' => [
            'summary' => '用于提交一段python3的代码片段并执行，只能用于数据处理。',
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
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'PythonScript',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'python3的脚本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'import logging'."\n"
                            .'def execute (params):'."\n"
                            .'  #ip = params[\'ip\']'."\n"
                            .'  #logging.info("enter execute,ip is "+ip)'."\n"
                            .'  success=True'."\n"
                            .'  message=\'OK\''."\n"
                            .'  data=[]'."\n"
                            .'  return (success,message,data)',
                    ],
                ],
                [
                    'name' => 'Params',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'python3脚本的入参。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'    "input1": "xx.xx.xx.xx",'."\n"
                            .'    "input2": "7d"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8baa6cff-319e-4ede-97bc-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'NodeName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '剧本的节点名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'python3_3',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'F210521C-D9BF-5264-8369-83EDDC617DB0',
                            ],
                            'RunResult' => [
                                'title' => '传输的数据',
                                'description' => '运行脚本的结果数据。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "requestUuid": "fe240b98-27b1-4a36-aec1-550b894318d9",'."\n"
                                    .'    "content": {'."\n"
                                    .'        "resultData": [],'."\n"
                                    .'        "success": true'."\n"
                                    .'    }'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F210521C-D9BF-5264-8369-83EDDC617DB0\\",\\n  \\"RunResult\\": \\"{\\\\n    \\\\\\"requestUuid\\\\\\": \\\\\\"fe240b98-27b1-4a36-aec1-550b894318d9\\\\\\",\\\\n    \\\\\\"content\\\\\\": {\\\\n        \\\\\\"resultData\\\\\\": [],\\\\n        \\\\\\"success\\\\\\": true\\\\n    }\\\\n}\\"\\n}","type":"json"}]',
            'title' => '运行python3脚本',
            'description' => '请确保在使用该接口前，已充分了解响应编排产品的收费方式和[价格](https://www.aliyun.com/price/product#/sas/detail/sas)。',
            'responseParamsDescription' => '**RunResult**参数为JSONObject格式，包含的字段为：'."\n"
                ."\n"
                .'- **requestUuid**：表示该次请求的UUID，用于查询运行日志'."\n"
                .'- **content**：表示脚本运行的结果，由用户定义',
        ],
        'RevertPlaybookRelease' => [
            'summary' => '用于回滚剧本到指定的版本，同时可以指定回滚时是否发布该版本。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '185295a1-c987-4b64-8796-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'PlayReleaseId',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的发布记录ID',
                        'description' => '剧本发布版本的ID。'."\n"
                            .'>调用[DescribePlaybookReleases](~~DescribePlaybookReleases~~)接口可以获取该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '3f97b56e-064e-47e7-a309-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'IsPublish',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '是否回滚发布',
                        'description' => '回滚版本后，是否直接发布。'."\n"
                            .'- **true**（默认）：发布并回滚'."\n"
                            .'- **false**：不发布，只回滚',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B3FED5B9-190A-5952-93A4-24FBF0F0C573',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B3FED5B9-190A-5952-93A4-24FBF0F0C573\\"\\n}","type":"json"}]',
            'title' => '回滚剧本版本',
        ],
        'RenamePlaybookNode' => [
            'summary' => '用户在编排剧本过程中，使用该接口可重命名剧本中某一节点的名称，对该节点的引用路径也会随之改变。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1c-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'NewNodeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '节点的新名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'waf_process',
                    ],
                ],
                [
                    'name' => 'OldNodeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组件节点名',
                        'description' => '要修改的节点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'firewall_process',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1E1EC464-3BD7-518F-9937-BCC12E6855FE',
                            ],
                            'RenameResult' => [
                                'title' => '传输的数据',
                                'description' => '返回的新节点名称。',
                                'type' => 'string',
                                'example' => 'waf_process',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E1EC464-3BD7-518F-9937-BCC12E6855FE\\",\\n  \\"RenameResult\\": \\"waf_process\\"\\n}","type":"json"}]',
            'title' => '重命令节点命称',
        ],
        'QueryTreeData' => [
            'summary' => '用于一次性获取所有的剧本列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'EF2ECA2D-D8E6-5021-BF5C-19DD6D52C5B2',
                            ],
                            'Playbooks' => [
                                'title' => '传输的数据',
                                'description' => '返回的剧本信息列表，为JSONString的格式。包含以下字段：'."\n"
                                    ."\n"
                                    .'- **active**：表示剧本是否启动，**true**表示已启动，**false**表示未启动'."\n"
                                    .'- **displayName**：表示剧本的名称。'."\n"
                                    .'- **playbookUuid**：表示剧本的UUID。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'    {'."\n"
                                    .'        "playbook": {'."\n"
                                    .'            "active": false,'."\n"
                                    .'            "displayName": "test_playbook",'."\n"
                                    .'            "playbookUuid": "09a20455-3d3a-424c-a1df-xxxxxx"'."\n"
                                    .'        }'."\n"
                                    .'    }'."\n"
                                    .']',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EF2ECA2D-D8E6-5021-BF5C-19DD6D52C5B2\\",\\n  \\"Playbooks\\": \\"[\\\\n    {\\\\n        \\\\\\"playbook\\\\\\": {\\\\n            \\\\\\"active\\\\\\": false,\\\\n            \\\\\\"displayName\\\\\\": \\\\\\"test_playbook\\\\\\",\\\\n            \\\\\\"playbookUuid\\\\\\": \\\\\\"09a20455-3d3a-424c-a1df-xxxxxx\\\\\\"\\\\n        }\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
            'title' => '获取所有剧本的列表',
        ],
        'PublishPlaybook' => [
            'summary' => '用于把剧本配置发布线上，发布后，剧本会以新的逻辑来运行。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1c-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的描述',
                        'description' => '本次发布版本的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a waf processing playbook',
                        'maxLength' => 128,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C513FCEA-D71F-5E50-ADC4-FCF8C5DCF6BF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C513FCEA-D71F-5E50-ADC4-FCF8C5DCF6BF\\"\\n}","type":"json"}]',
            'title' => '发布剧本',
        ],
        'ModifyPlaybookInstanceStatus' => [
            'summary' => '用于修改剧本的启动与停止状态。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9fcd3829-80ff-4681-be1e-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本启禁用状态',
                        'description' => '剧本的状态标识。取值：'."\n"
                            ."\n"
                            .'- **1**：表示启动剧本。'."\n"
                            ."\n"
                            .'- **0**：表示停止剧本。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认值**zh**。取值：'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C2A32830-2842-5F8F-B4ED-E4783E400BBE',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C2A32830-2842-5F8F-B4ED-E4783E400BBE\\"\\n}","type":"json"}]',
            'title' => '修改剧本的启停状态',
        ],
        'ModifyPlaybookInputOutput' => [
            'summary' => '用于修改剧本的输入参数与输出参数。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8baa6cff-319e-4ede-97bc-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'InputParams',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '入参配置',
                        'description' => '剧本的入参配置，为JSONArray格式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '['."\n"
                            .'    {'."\n"
                            .'        "typeName": "String",'."\n"
                            .'        "dataClass": "normal",'."\n"
                            .'        "dataType": "String",'."\n"
                            .'        "description": "period",'."\n"
                            .'        "example": "",'."\n"
                            .'        "name": "period",'."\n"
                            .'        "required": false'."\n"
                            .'    }'."\n"
                            .']',
                    ],
                ],
                [
                    'name' => 'OutputParams',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '出参配置',
                        'description' => '剧本暂不支持出参配置，固定为空值。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '[]',
                    ],
                ],
                [
                    'name' => 'ParamType',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '剧本的入参类型。'."\n"
                            .'- **template-ip**：IP请求模板。'."\n"
                            .'- **template-file**：文件请求模板。'."\n"
                            .'- **template-process**：进程请求模板。'."\n"
                            .'- **custom**：自定义参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'custom',
                    ],
                ],
                [
                    'name' => 'ExeConfig',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '剧本的执行方式，为JSONObject格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'   "executeMode":"mul",'."\n"
                            .'  "cron":"0 0 1 */1 * ?"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '8DDC07CE-D41B-5142-8D91-469462719C77',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8DDC07CE-D41B-5142-8D91-469462719C77\\"\\n}","type":"json"}]',
            'title' => '修改剧本的出入参数',
            'requestParamsDescription' => '**InputParams**为JSONArray格式，具体参数说明：'."\n"
                .'- typeName：参数类型名称。'."\n"
                .'- dataClass：参数类型等级，可选值，**normal**表示普通参数，**custom**表示复杂参数。'."\n"
                .'- dataType：参数类型，可选值，**string、long、int、ip、file、account**。'."\n"
                .'- description：参数的描述说明。'."\n"
                .'- example：参数的示例。'."\n"
                .'- name：参数名称。'."\n"
                .'- required：参数是否必填，可选值，**true**表示必填，**false**表示不必填。'."\n"
                ."\n"
                .'**ExeConfig**为JSONObject格式，具体参数说明：'."\n"
                .'- executeMode：执行方式，固定为**mul**。'."\n"
                .'- cron：CRON表达式，遵循CRON标准。',
        ],
        'ModifyPlaybook' => [
            'summary' => '用于修改剧本的配置信息。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8baa6cff-319e-4ede-97bc-1586c35e61f8',
                    ],
                ],
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的展示名称',
                        'description' => '剧本的展示名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'aliyun_waf_test_playbook',
                    ],
                ],
                [
                    'name' => 'Taskflow',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本编辑配置',
                        'description' => '剧本的xml配置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的描述',
                        'description' => '剧本的描述',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo test task',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '9B584F84-D66A-5525-8E7B-05612A903ABF',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B584F84-D66A-5525-8E7B-05612A903ABF\\"\\n}","type":"json"}]',
            'title' => '编辑剧本',
        ],
        'ModifyComponentAsset' => [
            'summary' => '当一个组件需要配置资产时，该接口用户修改组件的资产信息。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AssetConfig',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资产的配置',
                        'description' => '组件资产的配置，为JSONObject格式。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '{'."\n"
                            .'    "name": "test asset",'."\n"
                            .'    "componentName": "SLS",'."\n"
                            .'    "params": ['."\n"
                            .'        {'."\n"
                            .'            "name": "end_point",'."\n"
                            .'            "value": "xxx"'."\n"
                            .'        },'."\n"
                            .'        {'."\n"
                            .'            "name": "sub_id",'."\n"
                            .'            "value": "xxxx"'."\n"
                            .'        },'."\n"
                            .'        {'."\n"
                            .'            "name": "access_key",'."\n"
                            .'            "value": "xxxx"'."\n"
                            .'        }'."\n"
                            .'    ]'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1C5F11E9-464E-51F0-9296-43BB312A0557',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C5F11E9-464E-51F0-9296-43BB312A0557\\"\\n}","type":"json"}]',
            'title' => '修改组件资产',
            'requestParamsDescription' => '**AssetConfig**字段参数说明：'."\n"
                .'- **name**：资产的名称。'."\n"
                .'- **componentName**：组件的名称。'."\n"
                .'- **params**：配置信息，取值如下：'."\n"
                .'    - **end_point**：连接信息。'."\n"
                .'    - **sub_id**：账号accessID。'."\n"
                .'    - **access_key**：账号的accessKey。',
        ],
        'DescriberPython3ScriptLogs' => [
            'summary' => '在提交pyhton脚本的任务后，通过返回的requestUuid来获取运行日志。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RequestUuid',
                    'in' => 'query',
                    'schema' => [
                        'description' => '运行python3脚本时，返回的UUID。'."\n"
                            .'>调用[RunPython3Script](~~RunPython3Script~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '69edc2b4-c95c-424f-9114-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'D22D8A0C-6E86-57B2-A142-929184122AB1',
                            ],
                            'RunResult' => [
                                'title' => '传输的数据',
                                'description' => 'python3的运行日志。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "logs": ['."\n"
                                    .'        {'."\n"
                                    .'            "message": "function input is {}"'."\n"
                                    .'        }'."\n"
                                    .'    ]'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D22D8A0C-6E86-57B2-A142-929184122AB1\\",\\n  \\"RunResult\\": \\"{\\\\n    \\\\\\"logs\\\\\\": [\\\\n        {\\\\n            \\\\\\"message\\\\\\": \\\\\\"function input is {}\\\\\\"\\\\n        }\\\\n    ]\\\\n}\\"\\n}","type":"json"}]',
            'title' => '获取pyhton脚本运行日志',
        ],
        'DescribeSophonCommands' => [
            'summary' => '用于获取处置实体的命令。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '命令名称，支持模糊搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'waf_process',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<SophonCommandBO>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'Data' => [
                                'title' => '传输的数据',
                                'description' => '返回的命令列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '命令详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '命令名称。',
                                            'type' => 'string',
                                            'example' => 'waf_process_ip_v2',
                                        ],
                                        'DisplayName' => [
                                            'description' => '命令的显示名称。',
                                            'type' => 'string',
                                            'example' => 'WAF Process IP',
                                        ],
                                        'ParamConfig' => [
                                            'description' => '参数配置信息。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '参数配置信息。',
                                                'type' => 'object',
                                                'properties' => [
                                                    'Necessary' => [
                                                        'description' => '是否必填，取值：'."\n"
                                                            .'- **true**（默认）：必填。'."\n"
                                                            ."\n"
                                                            .'- **false**：非必填。',
                                                        'type' => 'boolean',
                                                        'example' => 'true',
                                                    ],
                                                    'Field' => [
                                                        'description' => '参数字段名称。',
                                                        'type' => 'string',
                                                        'example' => 'ip',
                                                    ],
                                                    'Value' => [
                                                        'description' => '参数值。',
                                                        'type' => 'string',
                                                        'example' => '12.xx.xx.xx',
                                                    ],
                                                    'CheckField' => [
                                                        'description' => '字段格式校验，正则匹配的方式，如果为空，表示不进行校验。',
                                                        'type' => 'string',
                                                        'example' => '[0-9]{4}\\.[0-9]{4}\\.[0-9]{4}\\.[0-9]{4}',
                                                    ],
                                                ],
                                            ],
                                        ],
                                        'Description' => [
                                            'description' => '命令描述。',
                                            'type' => 'string',
                                            'example' => 'This is a action of processing for WAF',
                                        ],
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1E1EC464-3BD7-518F-9937-BCC12E6855FE',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Name\\": \\"waf_process_ip_v2\\",\\n      \\"DisplayName\\": \\"WAF Process IP\\",\\n      \\"ParamConfig\\": [\\n        {\\n          \\"Necessary\\": true,\\n          \\"Field\\": \\"ip\\",\\n          \\"Value\\": \\"12.xx.xx.xx\\",\\n          \\"CheckField\\": \\"[0-9]{4}\\\\\\\\.[0-9]{4}\\\\\\\\.[0-9]{4}\\\\\\\\.[0-9]{4}\\"\\n        }\\n      ],\\n      \\"Description\\": \\"This is a action of processing for WAF\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"1E1EC464-3BD7-518F-9937-BCC12E6855FE\\"\\n}","type":"json"}]',
            'title' => '获取处置命令',
        ],
        'DescribeSoarTaskAndActions' => [
            'summary' => '用于获取剧本的一次运行过程中，组件的执行记录列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'RequestUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务请求的UUID',
                        'description' => '剧本任务的UUID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1077f2f9-25e8-42d9-bfdf-1528e1313f6d',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<SaoExecuteInfo>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '18017A93-3D5D-503A-8308-914543F1CBA3',
                            ],
                            'Details' => [
                                'title' => '传输的数据',
                                'description' => '任务执行详情。',
                                'type' => 'object',
                                'properties' => [
                                    'TriggerType' => [
                                        'description' => '触发类型，取值：'."\n"
                                            ."\n"
                                            .'- **debug**：剧本调试的任务。'."\n"
                                            .'- **manual**：手动触发的任务。'."\n"
                                            .'- **siem**：事件触发的任务。',
                                        'type' => 'string',
                                        'example' => 'siem',
                                    ],
                                    'TaskName' => [
                                        'description' => '剧本任务的名称，同剧本的UUID。',
                                        'type' => 'string',
                                        'example' => '92af3c79-1754-4646-9366-9ddbd1e45536',
                                    ],
                                    'StartTime' => [
                                        'description' => '剧本运行的开始时间，格式：13位的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1699868848645',
                                    ],
                                    'EndTime' => [
                                        'description' => '剧本运行的结束时间，格式：13位的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1699868848767',
                                    ],
                                    'Status' => [
                                        'description' => '剧本执行的任务状态，取值为：'."\n"
                                            ."\n"
                                            .'- **success**：表示执行成功'."\n"
                                            .'- **fail**：表示执行失败'."\n"
                                            .'- **running**：表示正在运行',
                                        'type' => 'string',
                                        'example' => 'success',
                                    ],
                                    'RequestUuid' => [
                                        'description' => '剧本任务的请求ID，每次任务运行的唯一ID。',
                                        'type' => 'string',
                                        'example' => '17f75844-75cc-4174-86da-cec07a690142',
                                    ],
                                    'TriggerUser' => [
                                        'description' => '触发剧本任务的阿里云账号ID。',
                                        'type' => 'string',
                                        'example' => '127xxxx4392',
                                    ],
                                    'ErrorMsg' => [
                                        'description' => '剧本任务的错误信息，任务成功时，该字段为空。',
                                        'type' => 'string',
                                        'example' => 'stime not match',
                                    ],
                                    'RawEventReq' => [
                                        'description' => '剧本任务的请求参数。',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'    "input1": "xx.xx.xx.xx",'."\n"
                                            .'    "input2": "7d"'."\n"
                                            .'}',
                                    ],
                                    'ResultLevel' => [
                                        'description' => '剧本调试任务的标志为，当任务为调试任务时，值为**DEBUG**，其余为空。',
                                        'type' => 'string',
                                        'example' => 'DEBUG',
                                    ],
                                    'ResultMessage' => [
                                        'description' => '剧本的返回信息，由用户在剧本中自己定义。',
                                        'type' => 'string',
                                        'example' => 'deubug playbook finished',
                                    ],
                                    'TaskTenantId' => [
                                        'description' => '剧本任务所属的阿里云账户ID。',
                                        'type' => 'string',
                                        'example' => '127xxxx4392',
                                    ],
                                    'Actions' => [
                                        'description' => '剧本执行的组件动作列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '剧本执行的组件动作详情。',
                                            'type' => 'object',
                                            'properties' => [
                                                'Component' => [
                                                    'description' => '组件的名称。',
                                                    'type' => 'string',
                                                    'example' => 'DataFormat',
                                                ],
                                                'Action' => [
                                                    'description' => '组件的动作名称。',
                                                    'type' => 'string',
                                                    'example' => 'formatdata',
                                                ],
                                                'StartTime' => [
                                                    'description' => '组件运行的开始时间，格式：13位的时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1699868848731',
                                                ],
                                                'EndTime' => [
                                                    'description' => '剧本运行的结束时间，格式：13位的时间戳。',
                                                    'type' => 'integer',
                                                    'format' => 'int64',
                                                    'example' => '1699868848766',
                                                ],
                                                'Status' => [
                                                    'description' => '组件的运行结果，取值为：'."\n"
                                                        ."\n"
                                                        .'- **success**：表示执行成功。'."\n"
                                                        .'- **fail**：表示执行失败。',
                                                    'type' => 'string',
                                                    'example' => 'success',
                                                ],
                                                'RequestUuid' => [
                                                    'description' => '剧本任务的请求ID，每次任务运行的唯一ID',
                                                    'type' => 'string',
                                                    'example' => '8dac16c6-7411-4116-8d70-xxxxxxx',
                                                ],
                                                'TriggerUser' => [
                                                    'description' => '执行剧本任务的阿里云账户ID。',
                                                    'type' => 'string',
                                                    'example' => '127xxxx4392'."\n",
                                                ],
                                                'TaskName' => [
                                                    'description' => '剧本任务的名称，同剧本的UUID。',
                                                    'type' => 'string',
                                                    'example' => 'ed127287-6699-4e4d-b986-xxxxxxx',
                                                ],
                                                'TaskStatus' => [
                                                    'description' => '触发组件动作的执行状态。'."\n"
                                                        .'> 该参数已不启用，只返回空值。',
                                                    'type' => 'string',
                                                    'example' => 'NULL',
                                                ],
                                                'ActionUuid' => [
                                                    'description' => '组件动作执行记录的UUID。',
                                                    'type' => 'string',
                                                    'example' => '091be399-a937-4276-af78-xxxxxxxx',
                                                ],
                                                'AssetName' => [
                                                    'description' => '组件使用的资产名称。',
                                                    'type' => 'string',
                                                    'example' => 'SLS Asset',
                                                ],
                                                'NodeName' => [
                                                    'description' => '组件的自定义节点名称。',
                                                    'type' => 'string',
                                                    'example' => 'DataFormat_1',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'TaskFlowMd5' => [
                                        'description' => '运行剧本配置的MD5值。',
                                        'type' => 'string',
                                        'example' => 'ed127287-6699-4e4d-b986-9f770879xxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"18017A93-3D5D-503A-8308-914543F1CBA3\\",\\n  \\"Details\\": {\\n    \\"TriggerType\\": \\"siem\\",\\n    \\"TaskName\\": \\"92af3c79-1754-4646-9366-9ddbd1e45536\\",\\n    \\"StartTime\\": 1699868848645,\\n    \\"EndTime\\": 1699868848767,\\n    \\"Status\\": \\"success\\",\\n    \\"RequestUuid\\": \\"17f75844-75cc-4174-86da-cec07a690142\\",\\n    \\"TriggerUser\\": \\"127xxxx4392\\",\\n    \\"ErrorMsg\\": \\"stime not match\\",\\n    \\"RawEventReq\\": \\"{\\\\n    \\\\\\"input1\\\\\\": \\\\\\"xx.xx.xx.xx\\\\\\",\\\\n    \\\\\\"input2\\\\\\": \\\\\\"7d\\\\\\"\\\\n}\\",\\n    \\"ResultLevel\\": \\"DEBUG\\",\\n    \\"ResultMessage\\": \\"deubug playbook finished\\",\\n    \\"TaskTenantId\\": \\"127xxxx4392\\",\\n    \\"Actions\\": [\\n      {\\n        \\"Component\\": \\"DataFormat\\",\\n        \\"Action\\": \\"formatdata\\",\\n        \\"StartTime\\": 1699868848731,\\n        \\"EndTime\\": 1699868848766,\\n        \\"Status\\": \\"success\\",\\n        \\"RequestUuid\\": \\"8dac16c6-7411-4116-8d70-xxxxxxx\\",\\n        \\"TriggerUser\\": \\"127xxxx4392\\\\n\\",\\n        \\"TaskName\\": \\"ed127287-6699-4e4d-b986-xxxxxxx\\",\\n        \\"TaskStatus\\": \\"NULL\\",\\n        \\"ActionUuid\\": \\"091be399-a937-4276-af78-xxxxxxxx\\",\\n        \\"AssetName\\": \\"SLS Asset\\",\\n        \\"NodeName\\": \\"DataFormat_1\\"\\n      }\\n    ],\\n    \\"TaskFlowMd5\\": \\"ed127287-6699-4e4d-b986-9f770879xxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本的组件执行记录',
        ],
        'DescribeSoarRecords' => [
            'summary' => '用于获取剧本的执行记录列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本的UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8f55e76d-b5d5-4720-9cd7-xxxxx',
                    ],
                ],
                [
                    'name' => 'TaskflowMd5',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务的版本ID',
                        'description' => '剧本配置的MD5值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be0a4ef084dd174abe478df52xxxxx',
                    ],
                ],
                [
                    'name' => 'StartMillis',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务开始时间',
                        'description' => '任务运行的开始时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1683526284584',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务结束时间',
                        'description' => '任务运行的结束时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1683772744953',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TriggerUser',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行剧本任务的阿里云账户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127xxxx4392',
                    ],
                ],
                [
                    'name' => 'TaskStatus',
                    'in' => 'query',
                    'schema' => [
                        'description' => '任务的运行状态，取值：'."\n"
                            ."\n"
                            .'- **success**：成功任务。'."\n"
                            .'- **failed**：失败任务。'."\n"
                            .'- **inprogress**：运行中任务',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'inprogress',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
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
                        'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。'."\n"
                            .'> 建议PageSize取值不要为空。',
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
                        'title' => 'SophonResult<List<SaoExecuteInfo>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '601C2DAC-6A67-5237-BEE8-5BF1CEE96296',
                            ],
                            'SoarExecuteRecords' => [
                                'title' => '传输的数据',
                                'description' => '执行记录结果集。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '执行记录详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TriggerType' => [
                                            'description' => '剧本任务的类型，取值：'."\n"
                                                ."\n"
                                                .'- **debug**：表示调试任务。'."\n"
                                                .'- **manual**：表示手动任务。'."\n"
                                                .'- **siem**：表示事件或告警触发的任务。',
                                            'type' => 'string',
                                            'example' => 'debug',
                                        ],
                                        'TaskName' => [
                                            'description' => '剧本任务的名称，同剧本的UUID。',
                                            'type' => 'string',
                                            'example' => '82848ebc-eaff-4791-acd4-xxxxx',
                                        ],
                                        'StartTime' => [
                                            'description' => '任务运行的开始时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1675823338433',
                                        ],
                                        'EndTime' => [
                                            'description' => '组件运行的结束时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1686294686000',
                                        ],
                                        'Status' => [
                                            'description' => '剧本执行的任务状态，取值为：'."\n"
                                                ."\n"
                                                .'- **success**：表示执行成功。'."\n"
                                                .'- **fail**：表示执行失败。'."\n"
                                                .'- **running**：表示正在运行',
                                            'type' => 'string',
                                            'example' => 'success',
                                        ],
                                        'RequestUuid' => [
                                            'description' => '剧本任务的请求ID，每次任务运行的唯一ID。',
                                            'type' => 'string',
                                            'example' => 'ba1ec480-aa90-4bb6-a1a7-9e311ae79321',
                                        ],
                                        'TriggerUser' => [
                                            'description' => '执行剧本任务的阿里云账户ID。',
                                            'type' => 'string',
                                            'example' => '127xxxx4392',
                                        ],
                                        'ErrorMsg' => [
                                            'description' => '剧本任务的错误信息，任务成功时，该字段为空。',
                                            'type' => 'string',
                                            'example' => 'stime not match',
                                        ],
                                        'RawEventReq' => [
                                            'description' => '剧本任务的请求参数。',
                                            'type' => 'string',
                                            'example' => '{'."\n"
                                                .'    "input1": "xx.xx.xx.xx",'."\n"
                                                .'    "input2": "7d"'."\n"
                                                .'}',
                                        ],
                                        'ResultMessage' => [
                                            'description' => '剧本的返回信息，由用户在剧本中自己定义。',
                                            'type' => 'string',
                                            'example' => 'Playbook finish',
                                        ],
                                        'TaskType' => [
                                            'description' => '剧本任务的类型，取值：'."\n"
                                                ."\n"
                                                .'- **general**：表示普通剧本任务。'."\n"
                                                .'- **standard**：表示组件运行任务。',
                                            'type' => 'string',
                                            'example' => 'standard',
                                        ],
                                        'TaskflowMd5' => [
                                            'description' => '剧本配置的MD5值。',
                                            'type' => 'string',
                                            'example' => 'dea65a3db87fb9bd84bbxxxxx',
                                        ],
                                    ],
                                ],
                            ],
                            'Page' => [
                                'description' => '页面显示的信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '查询到的信息总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '22',
                                        'default' => '0',
                                    ],
                                    'PageNumber' => [
                                        'description' => '分页查询时，当前页的页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                        'default' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页查询时，每页显示的条目数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                        'default' => '10',
                                    ],
                                ],
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"601C2DAC-6A67-5237-BEE8-5BF1CEE96296\\",\\n  \\"SoarExecuteRecords\\": [\\n    {\\n      \\"TriggerType\\": \\"debug\\",\\n      \\"TaskName\\": \\"82848ebc-eaff-4791-acd4-xxxxx\\",\\n      \\"StartTime\\": 1675823338433,\\n      \\"EndTime\\": 1686294686000,\\n      \\"Status\\": \\"success\\",\\n      \\"RequestUuid\\": \\"ba1ec480-aa90-4bb6-a1a7-9e311ae79321\\",\\n      \\"TriggerUser\\": \\"127xxxx4392\\",\\n      \\"ErrorMsg\\": \\"stime not match\\",\\n      \\"RawEventReq\\": \\"{\\\\n    \\\\\\"input1\\\\\\": \\\\\\"xx.xx.xx.xx\\\\\\",\\\\n    \\\\\\"input2\\\\\\": \\\\\\"7d\\\\\\"\\\\n}\\",\\n      \\"ResultMessage\\": \\"Playbook finish\\",\\n      \\"TaskType\\": \\"standard\\",\\n      \\"TaskflowMd5\\": \\"dea65a3db87fb9bd84bbxxxxx\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 22,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本执行记录',
        ],
        'DescribeSoarRecordInOutput' => [
            'summary' => '当用户执行剧本任务后，通过该接口可获取组件动作的输入数据与输出数据。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ActionUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '动作的UUID',
                        'description' => '组件动作的UUID。'."\n"
                            .'>调用[DescribeSoarTaskAndActions](~~DescribeSoarTaskAndActions~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '0531ff66-dd05-4f24-84bf-xxxxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '372D8B41-AF8D-573A-9B3F-0924950F241F',
                            ],
                            'InOutputInfo' => [
                                'title' => '传输的数据',
                                'description' => '组件动作的执行结果。',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "actionUuid": "3896a25d-4967-493c-942e-4e60f27da1f7-xxxxx",'."\n"
                                    .'    "outputSummary": {'."\n"
                                    .'        "datalist": ['."\n"
                                    .'            {'."\n"
                                    .'                "a": "a"'."\n"
                                    .'            }'."\n"
                                    .'        ],'."\n"
                                    .'        "total_data_successful": 1,'."\n"
                                    .'        "total_data": 1,'."\n"
                                    .'        "total_exe_successful": 1,'."\n"
                                    .'        "total_exe": 1,'."\n"
                                    .'        "total_data_with_dup": 1,'."\n"
                                    .'        "status": true'."\n"
                                    .'    },'."\n"
                                    .'    "outputSchema": {'."\n"
                                    .'        "a": "String",'."\n"
                                    .'        "startTime": "DateTime"'."\n"
                                    .'    },'."\n"
                                    .'    "inputParams": {'."\n"
                                    .'        "inputData": ['."\n"
                                    .'            {'."\n"
                                    .'                "outputFields": {'."\n"
                                    .'                    "a": "a"'."\n"
                                    .'                }'."\n"
                                    .'            }'."\n"
                                    .'        ],'."\n"
                                    .'        "totalSize": 1'."\n"
                                    .'    },'."\n"
                                    .'    "startTime": "2023-11-13 17:47:28.645",'."\n"
                                    .'    "taskName": "92af3c79-1754-4646-9366-9ddbxxxxx"'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"372D8B41-AF8D-573A-9B3F-0924950F241F\\",\\n  \\"InOutputInfo\\": \\"{\\\\n    \\\\\\"actionUuid\\\\\\": \\\\\\"3896a25d-4967-493c-942e-4e60f27da1f7-xxxxx\\\\\\",\\\\n    \\\\\\"outputSummary\\\\\\": {\\\\n        \\\\\\"datalist\\\\\\": [\\\\n            {\\\\n                \\\\\\"a\\\\\\": \\\\\\"a\\\\\\"\\\\n            }\\\\n        ],\\\\n        \\\\\\"total_data_successful\\\\\\": 1,\\\\n        \\\\\\"total_data\\\\\\": 1,\\\\n        \\\\\\"total_exe_successful\\\\\\": 1,\\\\n        \\\\\\"total_exe\\\\\\": 1,\\\\n        \\\\\\"total_data_with_dup\\\\\\": 1,\\\\n        \\\\\\"status\\\\\\": true\\\\n    },\\\\n    \\\\\\"outputSchema\\\\\\": {\\\\n        \\\\\\"a\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"startTime\\\\\\": \\\\\\"DateTime\\\\\\"\\\\n    },\\\\n    \\\\\\"inputParams\\\\\\": {\\\\n        \\\\\\"inputData\\\\\\": [\\\\n            {\\\\n                \\\\\\"outputFields\\\\\\": {\\\\n                    \\\\\\"a\\\\\\": \\\\\\"a\\\\\\"\\\\n                }\\\\n            }\\\\n        ],\\\\n        \\\\\\"totalSize\\\\\\": 1\\\\n    },\\\\n    \\\\\\"startTime\\\\\\": \\\\\\"2023-11-13 17:47:28.645\\\\\\",\\\\n    \\\\\\"taskName\\\\\\": \\\\\\"92af3c79-1754-4646-9366-9ddbxxxxx\\\\\\"\\\\n}\\"\\n}","type":"json"}]',
            'title' => '获取组件运行时数据',
            'responseParamsDescription' => '**InOutputInfo**为JSONString格式，其中包含字段如下：'."\n"
                .'- **actionUuid**：组件动作执行记录的UUID'."\n"
                .'- **startTime**：组件动作的开始执行时间'."\n"
                .'- **taskName**：组件动作对应的剧本任务名称'."\n"
                .'- **outputSchema**：动作输出数据的元信息，为JSON格式，编排剧本时定义'."\n"
                .'- **outputSummary**：动作的输出参数，为JSON格式，包含字段如下：'."\n"
                .'   - **datalist**：输出的数据详情'."\n"
                .'  - **total_data_successful**：执行成功的条目数'."\n"
                .'  - **total_data**：执行的总条目数'."\n"
                .'  - **total_exe_successful**：执行成功的次数'."\n"
                .'  - **total_exe**：总执行次数'."\n"
                .'  - **total_data_with_dup**：重复的数据次数'."\n"
                .'  - **status**：执行是否成功，**true**表示成功，**false**表示失败'."\n"
                .'-  **inputParams**：动作的输入数据，为JSON格式，包含字段如下：'."\n"
                .'   - **inputData**：动作的具体输入数据'."\n"
                .'   - **totalSize**：动作的输入数据条目数',
        ],
        'DescribeSoarRecordActionOutputList' => [
            'summary' => '用于获取剧本任务中，某一组件执行动作时，输出的数据列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ActionUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '动作的UUID',
                        'description' => '组件动作的UUID。'."\n"
                            .'>调用[DescribeSoarTaskAndActions](~~DescribeSoarTaskAndActions~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2202c90d-fa93-4726-bc32-xxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型，默认值为**zh**。取值：'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。'."\n"
                            .'> 建议PageSize取值不要为空。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6A2BF9CF-3E32-5E45-A79B-8F67E0A4FE90',
                            ],
                            'ActionOutputs' => [
                                'title' => '传输的数据',
                                'description' => '组件动作执行时的输出数据，为JSONArray格式。'."\n"
                                    ."\n"
                                    .'> 输出数据的具体格式，由编写剧本时配置的组件来确定。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'    {'."\n"
                                    .'        "a": "a",'."\n"
                                    .'        "taskname": "92af3c79-1754-4646-9366-9ddbd1e45536_xxxx",'."\n"
                                    .'        "log_time": 1699868849000'."\n"
                                    .'    }'."\n"
                                    .']',
                            ],
                            'PageNumber' => [
                                'description' => '当前分页的页码数。默认值为1。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '1',
                            ],
                            'PageSize' => [
                                'description' => '分页展示时，每个分页包含的列表条目数。默认为10。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '10',
                            ],
                            'TotalCount' => [
                                'description' => '总页数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6A2BF9CF-3E32-5E45-A79B-8F67E0A4FE90\\",\\n  \\"ActionOutputs\\": \\"[\\\\n    {\\\\n        \\\\\\"a\\\\\\": \\\\\\"a\\\\\\",\\\\n        \\\\\\"taskname\\\\\\": \\\\\\"92af3c79-1754-4646-9366-9ddbd1e45536_xxxx\\\\\\",\\\\n        \\\\\\"log_time\\\\\\": 1699868849000\\\\n    }\\\\n]\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
            'title' => '获取组件执行的输出数据列表',
        ],
        'DescribePopApiVersionList' => [
            'summary' => '用于获取某一云产品OpenAPI接口的版本信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PopCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云产品接口的POP CODE。'."\n"
                            .'>调用[DescribeApiList](~~DescribeApiList~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Sas',
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OpenAPI的参数信息所在环境，固定值为**online**。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'online',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<ListPopVersionResponse>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'DBCDB0E1-4D0E-55A9-A44D-A62ADE7E2FDA',
                            ],
                            'PopCode' => [
                                'description' => '阿里云产品接口的POP CODE。',
                                'type' => 'string',
                                'example' => 'Sas',
                            ],
                            'Total' => [
                                'description' => '总记录条数。',
                                'type' => 'integer',
                                'format' => 'int32',
                                'example' => '100',
                            ],
                            'VersionList' => [
                                'description' => '接口的版本列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '接口版本信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PopCode' => [
                                            'description' => '阿里云产品接口的POP CODE。',
                                            'type' => 'string',
                                            'example' => 'Sas',
                                        ],
                                        'Version' => [
                                            'description' => '阿里云产品接口的版本号。',
                                            'type' => 'string',
                                            'example' => '2018-12-03',
                                        ],
                                        'ApiName' => [
                                            'description' => '阿里云产品接口的名称。',
                                            'type' => 'string',
                                            'example' => 'DescribePopApiVersionList',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DBCDB0E1-4D0E-55A9-A44D-A62ADE7E2FDA\\",\\n  \\"PopCode\\": \\"Sas\\",\\n  \\"Total\\": 100,\\n  \\"VersionList\\": [\\n    {\\n      \\"PopCode\\": \\"Sas\\",\\n      \\"Version\\": \\"2018-12-03\\",\\n      \\"ApiName\\": \\"DescribePopApiVersionList\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取OpenAPI的版本列表',
        ],
        'DescribePopApiItemList' => [
            'summary' => '用于获取某一云产品OpenAPI接口的接口名称列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PopCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云产品接口的POP CODE。'."\n"
                            .'>调用[DescribeApiList](~~DescribeApiList~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Sas',
                    ],
                ],
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API的版本号。'."\n"
                            .'>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2018-12-03',
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OpenAPI的参数信息所在环境，固定值为online。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'online',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云产品接口的名称，支持模糊搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DescribePopApiItemList',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<ListPopApiNamesResponse>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6336D603-7028-52DE-AD88-E34AA5248355',
                            ],
                            'PopCode' => [
                                'description' => '阿里云产品接口的POP CODE。',
                                'type' => 'string',
                                'example' => 'Sas',
                            ],
                            'Version' => [
                                'description' => '阿里云产品接口的版本号。',
                                'type' => 'string',
                                'example' => '2018-12-03',
                            ],
                            'Total' => [
                                'description' => '总记录条数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '100',
                            ],
                            'Names' => [
                                'description' => '产品API列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => 'API名称。',
                                    'type' => 'string',
                                    'example' => 'DescribeAppVulScanCycle',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6336D603-7028-52DE-AD88-E34AA5248355\\",\\n  \\"PopCode\\": \\"Sas\\",\\n  \\"Version\\": \\"2018-12-03\\",\\n  \\"Total\\": 100,\\n  \\"Names\\": [\\n    \\"DescribeAppVulScanCycle\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取OpenAPI的接口名称列表',
        ],
        'DescribePopApi' => [
            'summary' => '用于获取OpenAPI的接口详情。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PopCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云产品接口的POP CODE。'."\n"
                            .'>调用[DescribeApiList](~~DescribeApiList~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'Sas',
                    ],
                ],
                [
                    'name' => 'ApiVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'API的版本号。'."\n"
                            .'>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2021-10-01',
                    ],
                ],
                [
                    'name' => 'Env',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'OpenAPI的参数信息所在环境，固定值为online。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'online',
                    ],
                ],
                [
                    'name' => 'ApiName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '阿里云产品API名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DescribeInstanceInfo',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<ListApiMetaResponse>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '1A01B0BA-CFC4-5813-9EB0-A5DA15FA95AE',
                            ],
                            'PopCode' => [
                                'description' => '阿里云产品接口的POP CODE。',
                                'type' => 'string',
                                'example' => 'Sas',
                            ],
                            'Version' => [
                                'description' => 'API版本号。',
                                'type' => 'string',
                                'example' => '2019-09-10',
                            ],
                            'ApiName' => [
                                'description' => 'API的名称。',
                                'type' => 'string',
                                'example' => 'AddAssetCleanConfig',
                            ],
                            'OpenApiMetaList' => [
                                'description' => 'API的信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '信息详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '参数名称。',
                                            'type' => 'string',
                                            'example' => 'DescribePopApi',
                                        ],
                                        'Required' => [
                                            'description' => '该参数是否必填。'."\n"
                                                ."\n"
                                                .'- true：必填。'."\n"
                                                .'- false：非必填。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                        'ExampleValue' => [
                                            'description' => '示例值。',
                                            'type' => 'string',
                                            'example' => '12.xx.xx.xx',
                                        ],
                                        'Description' => [
                                            'description' => '参数的描述。',
                                            'type' => 'string',
                                            'example' => 'demo parameter',
                                        ],
                                        'Type' => [
                                            'description' => '参数字段的数据类型，取值如下：'."\n"
                                                ."\n"
                                                .'- **string**：字符串'."\n"
                                                .'- **boolean**：布尔值'."\n"
                                                .'- **integer**：整型'."\n"
                                                .'- **long**：长整型',
                                            'type' => 'string',
                                            'example' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A01B0BA-CFC4-5813-9EB0-A5DA15FA95AE\\",\\n  \\"PopCode\\": \\"Sas\\",\\n  \\"Version\\": \\"2019-09-10\\",\\n  \\"ApiName\\": \\"AddAssetCleanConfig\\",\\n  \\"OpenApiMetaList\\": [\\n    {\\n      \\"Name\\": \\"DescribePopApi\\",\\n      \\"Required\\": false,\\n      \\"ExampleValue\\": \\"12.xx.xx.xx\\",\\n      \\"Description\\": \\"demo parameter\\",\\n      \\"Type\\": \\"string\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取OpenAPI接口详情',
        ],
        'DescribePlaybooks' => [
            'summary' => '用于获取剧本列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'Active',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本的状态',
                        'description' => '剧本的启用状态，取值：'."\n"
                            ."\n"
                            .'- **1**：表示剧本已启用。'."\n"
                            .'- **0**：表示剧本未启用',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'OwnType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本的类型',
                        'description' => '剧本的类型，取值：'."\n"
                            ."\n"
                            .'- **preset**：预定义剧本。'."\n"
                            .'- **user**：自定义剧本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'user',
                    ],
                ],
                [
                    'name' => 'StartMillis',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '查询的开始时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1683526277415',
                    ],
                ],
                [
                    'name' => 'EndMillis',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '查询的结束时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1683858064361',
                    ],
                ],
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>通过UUID可查询某一具体的剧本信息。'."\n"
                            .'> - 调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '8baa6cff-319e-4ede-97bc-1xxxxxx',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本名称',
                        'description' => '剧本的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo_playbook',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文'."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。'."\n"
                            .'> 建议PageSize取值不要为空。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Sort',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序依据 1-上次修改时间 2-最近执行时间',
                        'description' => '排序依据 1-上次修改时间 2-最近执行时间',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序逻辑：desc asc,默认desc',
                        'description' => '排序逻辑：desc asc,默认desc',
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<PlaybookCloudDTO>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '138B5AB7-7F2B-5814-87A3-E3ECFE1F207E',
                            ],
                            'Playbooks' => [
                                'title' => '传输的数据',
                                'description' => '剧本的列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '剧本的信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'title' => '剧本的名称',
                                            'description' => '剧本的展示名称。',
                                            'type' => 'string',
                                            'example' => 'demo_playbook',
                                        ],
                                        'PlaybookUuid' => [
                                            'title' => '剧本的UUID',
                                            'description' => '剧本的UUID。',
                                            'type' => 'string',
                                            'example' => 'bb5a8640-a14f-44ef-8376-cxxxxx',
                                        ],
                                        'OwnType' => [
                                            'title' => '剧本的权限类型',
                                            'description' => '剧本的类型，取值：'."\n"
                                                ."\n"
                                                .'- **preset**：预定义剧本。'."\n"
                                                .'- **user**：自定义剧本。',
                                            'type' => 'string',
                                            'example' => 'user',
                                        ],
                                        'Active' => [
                                            'title' => '剧本的启用状态',
                                            'description' => '剧本的状态标识。取值：'."\n"
                                                ."\n"
                                                .'- **1**：表示启动剧本。'."\n"
                                                ."\n"
                                                .'- **0**：表示停止剧本。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '1',
                                        ],
                                        'LastRuntime' => [
                                            'title' => '剧本的最后执行时间',
                                            'description' => '剧本的最后执行时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683526277415',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '剧本创建时间',
                                            'description' => '剧本创建时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1683526277415',
                                        ],
                                        'GmtModified' => [
                                            'title' => '剧本修改时间',
                                            'description' => '剧本修改时间',
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                            'Page' => [
                                'description' => '分页查询信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '查询到的信息总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageNumber' => [
                                        'description' => '分页查询时，当前页的页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页查询时，每页显示的条目数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"138B5AB7-7F2B-5814-87A3-E3ECFE1F207E\\",\\n  \\"Playbooks\\": [\\n    {\\n      \\"DisplayName\\": \\"demo_playbook\\",\\n      \\"PlaybookUuid\\": \\"bb5a8640-a14f-44ef-8376-cxxxxx\\",\\n      \\"OwnType\\": \\"user\\",\\n      \\"Active\\": 1,\\n      \\"LastRuntime\\": 1683526277415,\\n      \\"GmtCreate\\": 1683526277415,\\n      \\"GmtModified\\": \\"\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本列表',
        ],
        'DescribePlaybookReleases' => [
            'summary' => '用于获取剧本发布的线上版本的信息列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1c-xxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            ."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。'."\n"
                            .'> 建议PageSize取值不要为空。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
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
                        'title' => 'SophonResult<List<SaoReleaseInfo>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3DFBE11C-6EB6-5166-92D6-3397796AFE1E',
                            ],
                            'Records' => [
                                'title' => '传输的数据',
                                'description' => '剧本的版本信息列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'description' => '记录 ID',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '80xxx',
                                        ],
                                        'GmtCreate' => [
                                            'title' => '创建时间',
                                            'description' => '版本创建时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1655277397000',
                                        ],
                                        'GmtModified' => [
                                            'title' => '修改时间',
                                            'description' => '版本修改时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1691460804000',
                                        ],
                                        'Creator' => [
                                            'title' => '创建人',
                                            'description' => '发布版本的阿里云账户ID。',
                                            'type' => 'string',
                                            'example' => '145xxxx985',
                                        ],
                                        'Description' => [
                                            'title' => '描述信息',
                                            'description' => '版本的描述信息。',
                                            'type' => 'string',
                                            'example' => 'This is a new version',
                                        ],
                                        'TaskflowMd5' => [
                                            'title' => 'taskflow的MD5信息，用于比较是否 有变化',
                                            'description' => '发布版本的剧本配置的MD5值。',
                                            'type' => 'string',
                                            'example' => 'be0a4ef084dd174abe47xxxxx',
                                        ],
                                    ],
                                ],
                            ],
                            'Page' => [
                                'description' => '页面显示的信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '查询到的信息总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'PageNumber' => [
                                        'description' => '分页查询时，当前页的页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页查询时，每页显示的条目数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3DFBE11C-6EB6-5166-92D6-3397796AFE1E\\",\\n  \\"Records\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"GmtCreate\\": 1655277397000,\\n      \\"GmtModified\\": 1691460804000,\\n      \\"Creator\\": \\"145xxxx985\\",\\n      \\"Description\\": \\"This is a new version\\",\\n      \\"TaskflowMd5\\": \\"be0a4ef084dd174abe47xxxxx\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本发布的版本列表',
        ],
        'DescribePlaybookNumberMetrics' => [
            'summary' => '用于获取响应编排产品的统计信息，包含剧本数量、启用数量等内容。',
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
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookMetrics>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'Metrics' => [
                                'title' => '传输的数据',
                                'description' => '统计信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalNum' => [
                                        'description' => '剧本总数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'StartUpNum' => [
                                        'description' => '启用剧本数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '50',
                                    ],
                                ],
                            ],
                            'RequestId' => [
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'D4CC979E-3D5B-5A6A-BC87-C93C9E861C7B',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Metrics\\": {\\n    \\"TotalNum\\": 100,\\n    \\"StartUpNum\\": 50\\n  },\\n  \\"RequestId\\": \\"D4CC979E-3D5B-5A6A-BC87-C93C9E861C7B\\"\\n}","type":"json"}]',
            'title' => '获取响应编排统计信息',
        ],
        'DescribePlaybookNodesOutput' => [
            'summary' => '用于获取组件输出的历史数据。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1c-xxxxx',
                    ],
                ],
                [
                    'name' => 'NodeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组件节点名',
                        'description' => '组件节点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'DataFormat_1',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            ."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookNodeOutput>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'A491170C-FE1F-520E-83D4-72ED205B72ED',
                            ],
                            'PlaybookNodesOutput' => [
                                'title' => '传输的数据',
                                'description' => '节点输出数据。',
                                'type' => 'object',
                                'properties' => [
                                    'NodeName' => [
                                        'description' => '剧本的节点名称。',
                                        'type' => 'string',
                                        'example' => 'DataFormat_1',
                                    ],
                                    'NodeOutput' => [
                                        'description' => '组件输出的历史数据，为JSON格式，如果不存在，则为空。',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'    "datalist": ['."\n"
                                            .'        {'."\n"
                                            .'            "score": "10",'."\n"
                                            .'            "ip": "1.1.1.1"'."\n"
                                            .'        }'."\n"
                                            .'    ],'."\n"
                                            .'    "total_data_successful": 1,'."\n"
                                            .'    "filter_total_data": 1,'."\n"
                                            .'    "total_data": 1,'."\n"
                                            .'    "total_exe_successful": 1,'."\n"
                                            .'    "total_exe": 1,'."\n"
                                            .'    "total_data_with_dup": 1,'."\n"
                                            .'    "filter_total_data_successful": 1,'."\n"
                                            .'    "status": true'."\n"
                                            .'}',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A491170C-FE1F-520E-83D4-72ED205B72ED\\",\\n  \\"PlaybookNodesOutput\\": {\\n    \\"NodeName\\": \\"DataFormat_1\\",\\n    \\"NodeOutput\\": \\"{\\\\n    \\\\\\"datalist\\\\\\": [\\\\n        {\\\\n            \\\\\\"score\\\\\\": \\\\\\"10\\\\\\",\\\\n            \\\\\\"ip\\\\\\": \\\\\\"1.1.1.1\\\\\\"\\\\n        }\\\\n    ],\\\\n    \\\\\\"total_data_successful\\\\\\": 1,\\\\n    \\\\\\"filter_total_data\\\\\\": 1,\\\\n    \\\\\\"total_data\\\\\\": 1,\\\\n    \\\\\\"total_exe_successful\\\\\\": 1,\\\\n    \\\\\\"total_exe\\\\\\": 1,\\\\n    \\\\\\"total_data_with_dup\\\\\\": 1,\\\\n    \\\\\\"filter_total_data_successful\\\\\\": 1,\\\\n    \\\\\\"status\\\\\\": true\\\\n}\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取组件输出的历史数据',
            'responseParamsDescription' => '**NodeOutput**为JSONObject格式，包含的字段说明：'."\n"
                .'  - **datalist**：输出的数据详情'."\n"
                .'  - **total_data_successful**：执行成功的条目数'."\n"
                .'  - **total_data**：执行的总条目数'."\n"
                .'  - **total_exe_successful**：执行成功的次数'."\n"
                .'  - **total_exe**：总执行次数'."\n"
                .'  - **total_data_with_dup**：重复的数据次数'."\n"
                .'  - **status**：执行是否成功，**true**表示成功，**false**表示失败',
        ],
        'DescribePlaybookMetrics' => [
            'summary' => '获取某一剧本的元信息，包括名字、描述、运行次数、失败率等。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '2a687089-d4dd-47d4-9709-xxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookCloudDTO>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '567D3D0B-2153-5860-BF9A-F9DEED55FB73',
                            ],
                            'Metrics' => [
                                'title' => '传输的数据',
                                'description' => '剧本的信息详情。',
                                'type' => 'object',
                                'properties' => [
                                    'DisplayName' => [
                                        'title' => '剧本的名称',
                                        'description' => '剧本的名称。',
                                        'type' => 'string',
                                        'example' => 'demo name',
                                    ],
                                    'PlaybookUuid' => [
                                        'title' => '剧本的UUID',
                                        'description' => '剧本的UUID。',
                                        'type' => 'string',
                                        'example' => '0fbc9bdb-9ae3-4ef4-a709-xxxxx',
                                    ],
                                    'OwnType' => [
                                        'title' => '剧本的权限类型',
                                        'description' => '剧本的类型，取值：'."\n"
                                            ."\n"
                                            .'- **preset**：预定义剧本。'."\n"
                                            .'- **user**：自定义剧本。',
                                        'type' => 'string',
                                        'example' => 'user',
                                    ],
                                    'Active' => [
                                        'title' => '剧本的启用状态',
                                        'description' => '剧本的启用状态，取值：'."\n"
                                            ."\n"
                                            .'- **1**：表示剧本已启用。'."\n"
                                            .'- **0**：表示剧本未启用',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'LastRuntime' => [
                                        'title' => '剧本的最后执行时间',
                                        'description' => '剧本的最后执行时间，格式：13位的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1683526277415',
                                    ],
                                    'GmtCreate' => [
                                        'title' => '剧本创建时间',
                                        'description' => '剧本创建时间，格式：13位的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1655277397000',
                                    ],
                                    'HistoryMd5' => [
                                        'title' => '剧本历史版本数',
                                        'description' => '剧本历史版本个数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'SuccNum' => [
                                        'title' => '剧本执行成功数',
                                        'description' => '剧本任务执行成功数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'FailNum' => [
                                        'title' => '剧本执行失败数',
                                        'description' => '剧本任务执行失败数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                    'Description' => [
                                        'description' => '剧本的描述信息。',
                                        'type' => 'string',
                                        'example' => 'This is a playbook for waf processing',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"567D3D0B-2153-5860-BF9A-F9DEED55FB73\\",\\n  \\"Metrics\\": {\\n    \\"DisplayName\\": \\"demo name\\",\\n    \\"PlaybookUuid\\": \\"0fbc9bdb-9ae3-4ef4-a709-xxxxx\\",\\n    \\"OwnType\\": \\"user\\",\\n    \\"Active\\": 1,\\n    \\"LastRuntime\\": 1683526277415,\\n    \\"GmtCreate\\": 1655277397000,\\n    \\"HistoryMd5\\": 10,\\n    \\"SuccNum\\": 100,\\n    \\"FailNum\\": 10,\\n    \\"Description\\": \\"This is a playbook for waf processing\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本的元信息',
        ],
        'DescribePlaybookInputOutput' => [
            'summary' => '用于获取剧本的输入参数与输出参数的配置信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '167574',
                'abilityTreeNodes' => [
                    'FEATUREsas104PTS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b724d2b0-3c3b-4223-9bfd-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            ."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookInputOutputDTO>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '688B4CCD-5272-5DCF-9D76-FE5EFEF545F8',
                            ],
                            'Config' => [
                                'title' => '传输的数据',
                                'description' => '配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'ParamType' => [
                                        'title' => '输入类型',
                                        'description' => '剧本的入参类型。'."\n"
                                            .'- **template-ip**：IP请求模板。'."\n"
                                            .'- **template-file**：文件请求模板。'."\n"
                                            .'- **template-process**：进程请求模板。'."\n"
                                            .'- **custom**：自定义参数。',
                                        'type' => 'string',
                                        'example' => 'custom',
                                    ],
                                    'ExeConfig' => [
                                        'title' => '输入类型',
                                        'description' => '剧本的执行方式，为JSONObject格式。',
                                        'type' => 'string',
                                        'example' => '{'."\n"
                                            .'   "executeMode":"mul",'."\n"
                                            .'  "cron":"0 0 1 */1 * ?"'."\n"
                                            .'}',
                                    ],
                                    'InputParams' => [
                                        'title' => '入参配置',
                                        'description' => '剧本的入参配置，为JSONArray格式。',
                                        'type' => 'string',
                                        'example' => '['."\n"
                                            .'    {'."\n"
                                            .'        "typeName": "String",'."\n"
                                            .'        "dataClass": "normal",'."\n"
                                            .'        "dataType": "String",'."\n"
                                            .'        "description": "period",'."\n"
                                            .'        "example": "",'."\n"
                                            .'        "name": "period",'."\n"
                                            .'        "required": false'."\n"
                                            .'    }'."\n"
                                            .']',
                                    ],
                                    'OutputParams' => [
                                        'title' => '出参配置',
                                        'description' => '剧本暂不支持出参配置，固定为空值。',
                                        'type' => 'string',
                                        'example' => '[]',
                                    ],
                                    'PlaybookUuid' => [
                                        'description' => '剧本的UUID。',
                                        'type' => 'string',
                                        'example' => '9030076b-6733-4842-b05a-xxxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"688B4CCD-5272-5DCF-9D76-FE5EFEF545F8\\",\\n  \\"Config\\": {\\n    \\"ParamType\\": \\"custom\\",\\n    \\"ExeConfig\\": \\"{\\\\n   \\\\\\"executeMode\\\\\\":\\\\\\"mul\\\\\\",\\\\n  \\\\\\"cron\\\\\\":\\\\\\"0 0 1 */1 * ?\\\\\\"\\\\n}\\",\\n    \\"InputParams\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n    \\"OutputParams\\": \\"[]\\",\\n    \\"PlaybookUuid\\": \\"9030076b-6733-4842-b05a-xxxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本的出入参数配置',
            'responseParamsDescription' => '**InputParams**为JSONArray格式，具体参数说明：'."\n"
                .'- typeName：参数类型名称。'."\n"
                .'- dataClass：参数类型等级，可选值，**normal**表示普通参数，**custom**表示复杂参数。'."\n"
                .'- dataType：参数类型，可选值，**string、long、int、ip、file、account**。'."\n"
                .'- description：参数的描述说明。'."\n"
                .'- example：参数的示例。'."\n"
                .'- name：参数名称。'."\n"
                .'- required：参数是否必填，可选值，**true**表示必填，**false**表示不必填',
        ],
        'DescribePlaybook' => [
            'summary' => '用于获取剧本的xml配置信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '9030076b-6733-4842-b05a-xxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            ."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'TaskflowMd5',
                    'in' => 'query',
                    'schema' => [
                        'description' => '剧本配置的MD5值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '7a8f608dc64c242632aa578xxxxx',
                    ],
                ],
                [
                    'name' => 'DebugFlag',
                    'in' => 'query',
                    'schema' => [
                        'description' => '线上版本与调试版本的标记，取值：'."\n"
                            ."\n"
                            .'- **1**：表示获取调试版本'."\n"
                            .'- **0**：表示获取线上发布版本',
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
                        'title' => 'SophonResult<PlaybookDetailDTO>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '2989BC59-E9F0-5C83-B453-B368857649C8',
                            ],
                            'Playbook' => [
                                'title' => '传输的数据',
                                'description' => '剧本的配置信息。',
                                'type' => 'object',
                                'properties' => [
                                    'GmtCreate' => [
                                        'description' => '剧本的创建时间，格式：13位的时间戳。',
                                        'type' => 'string',
                                        'example' => '1665288858000',
                                    ],
                                    'GmtModified' => [
                                        'description' => '剧本的修改时间，格式：13位的时间戳。',
                                        'type' => 'string',
                                        'example' => '1677482519000',
                                    ],
                                    'PlaybookUuid' => [
                                        'description' => '剧本UUID。',
                                        'type' => 'string',
                                        'example' => '8db257d3-e2b2-44fd-b2cc-xxxxx',
                                    ],
                                    'Taskflow' => [
                                        'description' => '剧本的XML配置。',
                                        'type' => 'string',
                                        'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>',
                                    ],
                                    'TaskflowType' => [
                                        'description' => '剧本的配置格式。'."\n"
                                            .'- **xml**：XML格式。'."\n"
                                            .'- **x6**：JSON格式。',
                                        'type' => 'string',
                                        'example' => 'xml',
                                    ],
                                    'Creator' => [
                                        'description' => '创建剧本的阿里云账户ID。',
                                        'type' => 'string',
                                        'example' => '124xxxxx3435',
                                    ],
                                    'OwnType' => [
                                        'description' => '剧本的类型，取值：'."\n"
                                            ."\n"
                                            .'- **preset**：预定义剧本。'."\n"
                                            .'- **user**：自定义剧本。',
                                        'type' => 'string',
                                        'example' => 'preset',
                                    ],
                                    'SuccessExeNum' => [
                                        'description' => '剧本成功运行次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '100',
                                    ],
                                    'FailExeNum' => [
                                        'description' => '剧本失败运行次数。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'LastExeTime' => [
                                        'description' => '剧本的最后运行时间，格式：13位的时间戳。',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1665288858000',
                                    ],
                                    'Modifier' => [
                                        'description' => '修改剧本的阿里云账户ID。',
                                        'type' => 'string',
                                        'example' => '124xxxxx3435',
                                    ],
                                    'DisplayName' => [
                                        'description' => '剧本的展示名称。',
                                        'type' => 'string',
                                        'example' => 'demo_test',
                                    ],
                                    'InputParams' => [
                                        'description' => '剧本的入参配置，为JSONArray格式。'."\n"
                                            .'>参考[DescribePlaybookInputOutput](~~DescribePlaybookInputOutput~~)接口的格式说明。',
                                        'type' => 'string',
                                        'example' => '['."\n"
                                            .'    {'."\n"
                                            .'        "typeName": "String",'."\n"
                                            .'        "dataClass": "normal",'."\n"
                                            .'        "dataType": "String",'."\n"
                                            .'        "description": "period",'."\n"
                                            .'        "example": "",'."\n"
                                            .'        "name": "period",'."\n"
                                            .'        "required": false'."\n"
                                            .'    }'."\n"
                                            .']',
                                    ],
                                    'Description' => [
                                        'description' => '剧本的描述信息。',
                                        'type' => 'string',
                                        'example' => 'demo playbook',
                                    ],
                                    'OnlineActive' => [
                                        'description' => '剧本的启停标记，取值：'."\n"
                                            ."\n"
                                            .'- **0**：表示剧本已停止'."\n"
                                            .'- **1**：表示剧本已启用',
                                        'type' => 'boolean',
                                        'example' => '0',
                                    ],
                                    'OnlineReleaseTaskflowMd5' => [
                                        'description' => '剧本最新发布版本的MD5值。',
                                        'type' => 'string',
                                        'example' => 'asdfsdfe232-e2b2-44fd-b2cc-xxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2989BC59-E9F0-5C83-B453-B368857649C8\\",\\n  \\"Playbook\\": {\\n    \\"GmtCreate\\": \\"1665288858000\\",\\n    \\"GmtModified\\": \\"1677482519000\\",\\n    \\"PlaybookUuid\\": \\"8db257d3-e2b2-44fd-b2cc-xxxxx\\",\\n    \\"Taskflow\\": \\"<?xml version=\\\\\\"1.0\\\\\\" encoding=\\\\\\"UTF-8\\\\\\"?><bpmn:definitions xmlns:xsi=\\\\\\"http://www.w3.org/2001/XMLSchema-instance\\\\\\" xmlns:bpmn=\\\\\\"http://www.omg.org/spec/BPMN/20100524/MODEL\\\\\\" xmlns:bpmndi=\\\\\\"http://www.omg.org/spec/BPMN/20100524/DI\\\\\\" xmlns:dc=\\\\\\"http://www.omg.org/spec/DD/20100524/DC\\\\\\" targetNamespace=\\\\\\"http://bpmn.io/schema/bpmn\\\\\\" id=\\\\\\"Definitions_1\\\\\\"><bpmn:process id=\\\\\\"Process_1\\\\\\" isExecutable=\\\\\\"false\\\\\\"><bpmn:startEvent id=\\\\\\"StartEvent_1\\\\\\"/></bpmn:process><bpmndi:BPMNDiagram id=\\\\\\"BPMNDiagram_1\\\\\\"><bpmndi:BPMNPlane id=\\\\\\"BPMNPlane_1\\\\\\" bpmnElement=\\\\\\"Process_1\\\\\\"><bpmndi:BPMNShape id=\\\\\\"_BPMNShape_StartEvent_2\\\\\\" bpmnElement=\\\\\\"StartEvent_1\\\\\\"><dc:Bounds height=\\\\\\"36.0\\\\\\" width=\\\\\\"36.0\\\\\\" x=\\\\\\"173.0\\\\\\" y=\\\\\\"102.0\\\\\\"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>\\",\\n    \\"TaskflowType\\": \\"xml\\",\\n    \\"Creator\\": \\"124xxxxx3435\\",\\n    \\"OwnType\\": \\"preset\\",\\n    \\"SuccessExeNum\\": 100,\\n    \\"FailExeNum\\": 1,\\n    \\"LastExeTime\\": 1665288858000,\\n    \\"Modifier\\": \\"124xxxxx3435\\",\\n    \\"DisplayName\\": \\"demo_test\\",\\n    \\"InputParams\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n    \\"Description\\": \\"demo playbook\\",\\n    \\"OnlineActive\\": true,\\n    \\"OnlineReleaseTaskflowMd5\\": \\"asdfsdfe232-e2b2-44fd-b2cc-xxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取剧本配置',
        ],
        'DescribeNodeUsedInfos' => [
            'summary' => '用于获取剧本中，某一节点正在被哪些节点引用。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1c-xxxx',
                    ],
                ],
                [
                    'name' => 'NodeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组件节点名',
                        'description' => '组件的节点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'python3_2',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh**：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '3B10F836-C2B1-54FA-AB59-7591B548FB59',
                            ],
                            'NodeUsedInfos' => [
                                'title' => '传输的数据',
                                'description' => '节点的引用信息，返回为JSON格式，包含的字段：'."\n"
                                    ."\n"
                                    .'- **action**：引用的动作，包含信息：'."\n"
                                    .'   - **name**：引用的节点名称'."\n"
                                    .'   - **inputParams**：引用的参数配置',
                                'type' => 'string',
                                'example' => '{'."\n"
                                    .'    "action": ['."\n"
                                    .'        {'."\n"
                                    .'            "name": "query_books",'."\n"
                                    .'            "inputParams": ['."\n"
                                    .'                {'."\n"
                                    .'                    "referInfos": ['."\n"
                                    .'                        "${play_group.datalist.*.ids}"'."\n"
                                    .'                    ],'."\n"
                                    .'                    "name": "querySql"'."\n"
                                    .'                }'."\n"
                                    .'            ]'."\n"
                                    .'        }'."\n"
                                    .'    ]'."\n"
                                    .'}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3B10F836-C2B1-54FA-AB59-7591B548FB59\\",\\n  \\"NodeUsedInfos\\": \\"{\\\\n    \\\\\\"action\\\\\\": [\\\\n        {\\\\n            \\\\\\"name\\\\\\": \\\\\\"query_books\\\\\\",\\\\n            \\\\\\"inputParams\\\\\\": [\\\\n                {\\\\n                    \\\\\\"referInfos\\\\\\": [\\\\n                        \\\\\\"${play_group.datalist.*.ids}\\\\\\"\\\\n                    ],\\\\n                    \\\\\\"name\\\\\\": \\\\\\"querySql\\\\\\"\\\\n                }\\\\n            ]\\\\n        }\\\\n    ]\\\\n}\\"\\n}","type":"json"}]',
            'title' => '获取剧本节点的引用信息',
        ],
        'DescribeNodeParamTags' => [
            'summary' => '用于编排剧本时，组件输入的可引用路径。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1c-xxxxxxx',
                    ],
                ],
                [
                    'name' => 'NodeName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组件节点名',
                        'description' => '组件节点名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'python3_2',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<ParamReferredPathsInfo>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6BE94351-712A-505D-A40A-BC77CC8254A9',
                            ],
                            'ParamReferredPaths' => [
                                'title' => '传输的数据',
                                'description' => '推荐的路径配置。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '路径信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'ParamName' => [
                                            'description' => '上游节点名称。',
                                            'type' => 'string',
                                            'example' => 'DataFormat_1',
                                        ],
                                        'ReferredPath' => [
                                            'description' => '路径数组。',
                                            'type' => 'array',
                                            'items' => [
                                                'description' => '引用路径配置。',
                                                'type' => 'string',
                                                'example' => 'filter_1.datalist.*.score',
                                            ],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6BE94351-712A-505D-A40A-BC77CC8254A9\\",\\n  \\"ParamReferredPaths\\": [\\n    {\\n      \\"ParamName\\": \\"DataFormat_1\\",\\n      \\"ReferredPath\\": [\\n        \\"filter_1.datalist.*.score\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取组件的推荐输入',
        ],
        'DescribeLatestRecordSchema' => [
            'summary' => '用于根据剧本最新一次的执行记录，动态生成剧本各节点的输出结构信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'c5c88b5e-97ca-435d-8c20-xxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：'."\n"
                            ."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookNodeSchema>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '10B92EE1-4597-593B-A131-7A17D25EF5C9',
                            ],
                            'PlaybookNodeSchema' => [
                                'title' => '传输的数据',
                                'description' => '剧本输出结构信息。',
                                'type' => 'object',
                                'properties' => [
                                    'NodeSchema' => [
                                        'description' => '结构信息。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '结构信息。',
                                            'type' => 'object',
                                            'properties' => [
                                                'NodeName' => [
                                                    'description' => '节点的名称。',
                                                    'type' => 'string',
                                                    'example' => 'DataFormat_1',
                                                ],
                                                'ComponentName' => [
                                                    'description' => '组件的名称。',
                                                    'type' => 'string',
                                                    'example' => 'DataFormat',
                                                ],
                                                'ActionName' => [
                                                    'description' => '组件的动作名称。',
                                                    'type' => 'string',
                                                    'example' => 'formatedata',
                                                ],
                                                'OutputFields' => [
                                                    'description' => '输出字段',
                                                    'type' => 'array',
                                                    'items' => [
                                                        'description' => '输出字段的引用路径',
                                                        'type' => 'string',
                                                        'example' => 'play_group.datalist.*.ids',
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
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"10B92EE1-4597-593B-A131-7A17D25EF5C9\\",\\n  \\"PlaybookNodeSchema\\": {\\n    \\"NodeSchema\\": [\\n      {\\n        \\"NodeName\\": \\"DataFormat_1\\",\\n        \\"ComponentName\\": \\"DataFormat\\",\\n        \\"ActionName\\": \\"formatedata\\",\\n        \\"OutputFields\\": [\\n          \\"play_group.datalist.*.ids\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
            'title' => '获取最新执行记录结构信息',
        ],
        'DescribeField' => [
            'summary' => '用于获取产品全局的，通用的配置信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'QueryKey',
                    'in' => 'query',
                    'schema' => [
                        'title' => '全局配置的KEY值',
                        'description' => '全局配置的KEY值，取值：'."\n"
                            ."\n"
                            .'- **soar_filed_tags**：可以获取剧本的输入模板。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'soar_filed_tags',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<SystemConfigView>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'BCDE6498-83CC-50A1-8307-3D5A539C42F8',
                            ],
                            'Name' => [
                                'description' => '全局配置的名称。',
                                'type' => 'string',
                                'example' => 'soar_filed_tags',
                            ],
                            'Fields' => [
                                'description' => '配置的内容。',
                                'type' => 'string',
                                'example' => '["ip","name","hostinfo","md5"]',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCDE6498-83CC-50A1-8307-3D5A539C42F8\\",\\n  \\"Name\\": \\"soar_filed_tags\\",\\n  \\"Fields\\": \\"[\\\\\\"ip\\\\\\",\\\\\\"name\\\\\\",\\\\\\"hostinfo\\\\\\",\\\\\\"md5\\\\\\"]\\"\\n}","type":"json"}]',
            'title' => '获取全局配置信息',
        ],
        'DescribeExecutePlaybooks' => [
            'summary' => '用于配置自动响应计划时，获取可执行的剧本列表。',
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '172464',
                'abilityTreeNodes' => [
                    'FEATUREsas104PTS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'InputMode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '入参类型筛选',
                        'description' => '剧本入参的实体类型，当要想询多个实体类型时，以逗号分隔。'."\n"
                            .'- **ip**：IP实体。'."\n"
                            .'- **file**：文件实体。'."\n"
                            .'- **process**：进程实体。'."\n"
                            .'- **incident**：事件实体。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ip,file,process,host',
                    ],
                ],
                [
                    'name' => 'PlaybookName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本的名字',
                        'description' => '剧本的名称，支持模糊搜索。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'demo_test',
                    ],
                ],
                [
                    'name' => 'Uuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本的UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'f916b93e-e814-459f-9662-xxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
                [
                    'name' => 'ParamType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '剧本的入参类型。'."\n"
                            .'- **template-ip**：IP请求模板。'."\n"
                            .'- **template-file**：文件请求模板。'."\n"
                            .'- **template-process**：进程请求模板。'."\n"
                            .'- **custom**：自定义参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'custom',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<PlaybookExecuteMetrics>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '88A39217-2802-5B1E-BA2B-CF1BBC43C1F5',
                            ],
                            'PlaybookMetrics' => [
                                'title' => '传输的数据',
                                'description' => '剧本列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '剧本摘要信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'description' => '剧本的描述信息。',
                                            'type' => 'string',
                                            'example' => 'a demo playbook',
                                        ],
                                        'DisplayName' => [
                                            'description' => '剧本的名称。',
                                            'type' => 'string',
                                            'example' => 'demo_playbook',
                                        ],
                                        'Uuid' => [
                                            'description' => '剧本的UUID。',
                                            'type' => 'string',
                                            'example' => 'c5c88b5e-97ca-435d-8c20-2xxxxx',
                                        ],
                                        'ParamConfig' => [
                                            'description' => '剧本的入参配置，为JSONArray格式。'."\n"
                                                .'>参考[DescribePlaybookInputOutput](~~DescribePlaybookInputOutput~~)接口的格式说明。',
                                            'type' => 'string',
                                            'example' => '['."\n"
                                                .'    {'."\n"
                                                .'        "typeName": "String",'."\n"
                                                .'        "dataClass": "normal",'."\n"
                                                .'        "dataType": "String",'."\n"
                                                .'        "description": "period",'."\n"
                                                .'        "example": "",'."\n"
                                                .'        "name": "period",'."\n"
                                                .'        "required": false'."\n"
                                                .'    }'."\n"
                                                .']',
                                        ],
                                        'ParamType' => [
                                            'description' => '剧本的入参类型。'."\n"
                                                .'- **template-ip**：IP请求模板。'."\n"
                                                .'- **template-file**：文件请求模板。'."\n"
                                                .'- **template-process**：进程请求模板。'."\n"
                                                .'- **custom**：自定义参数。',
                                            'type' => 'string',
                                            'example' => 'custom',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88A39217-2802-5B1E-BA2B-CF1BBC43C1F5\\",\\n  \\"PlaybookMetrics\\": [\\n    {\\n      \\"Description\\": \\"a demo playbook\\",\\n      \\"DisplayName\\": \\"demo_playbook\\",\\n      \\"Uuid\\": \\"c5c88b5e-97ca-435d-8c20-2xxxxx\\",\\n      \\"ParamConfig\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n      \\"ParamType\\": \\"custom\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取可执行的剧本列表',
        ],
        'DescribeEnumItems' => [
            'summary' => '用于获取产品需要的一些枚举信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'EnumType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '枚举类型',
                        'description' => '枚举值的类型，支持的取值：'."\n"
                            .'- **process**：表示处置场景枚举',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'process',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            .'- **zh_cn**：默认值，中文（简体）。'."\n"
                            .'- **en_us**：英文（美国）。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<EnumDTO>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'E7698CFB-4E1C-5840-8EC9-691B86729E94',
                            ],
                            'Data' => [
                                'title' => '传输的数据',
                                'description' => '枚举信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '枚举的键值对。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Key' => [
                                            'description' => '枚举的KEY值。',
                                            'type' => 'string',
                                            'example' => 'system_xxxxx_process_book',
                                        ],
                                        'Value' => [
                                            'description' => '枚举的VALUE值。',
                                            'type' => 'string',
                                            'example' => 'system_xxxxx_process_book',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7698CFB-4E1C-5840-8EC9-691B86729E94\\",\\n  \\"Data\\": [\\n    {\\n      \\"Key\\": \\"system_xxxxx_process_book\\",\\n      \\"Value\\": \\"system_xxxxx_process_book\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取枚举信息',
        ],
        'DescribeDistinctReleases' => [
            'summary' => '获取去重后的剧本发布的版本信息列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '172028',
                'abilityTreeNodes' => [
                    'FEATUREsas104PTS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'bc0b8424-535c-4ed5-bd94-xxxxxx',
                    ],
                ],
                [
                    'name' => 'TaskflowMd5',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本XML配置的MD5值。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'be0a4ef084dd174abe47xxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<SaoReleaseInfo>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '145CACF6-D276-5197-8549-CB1AD76E2AC8',
                            ],
                            'Records' => [
                                'title' => '传输的数据',
                                'description' => '版本记录信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '版本信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'title' => '描述信息',
                                            'description' => '版本的描述信息。',
                                            'type' => 'string',
                                            'example' => 'demo version',
                                        ],
                                        'TaskflowMd5' => [
                                            'title' => 'taskflow的MD5信息，用于比较是否 有变化',
                                            'description' => '版本的XML配置的MD5值。',
                                            'type' => 'string',
                                            'example' => '17cf53049bc8efa941207xxxxx',
                                        ],
                                        'TaskflowType' => [
                                            'type' => 'string',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"145CACF6-D276-5197-8549-CB1AD76E2AC8\\",\\n  \\"Records\\": [\\n    {\\n      \\"Description\\": \\"demo version\\",\\n      \\"TaskflowMd5\\": \\"17cf53049bc8efa941207xxxxx\\",\\n      \\"TaskflowType\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取去重的版本列表',
        ],
        'DescribeComponentPlaybook' => [
            'summary' => '用于获取用户可以使用的预定义组件列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'ac343acc-1a61-4084-9a1cxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<PlaybookCloudDTO>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'C5F5D6C9-DF1A-5381-92B1-39676F777D20',
                            ],
                            'Playbooks' => [
                                'title' => '传输的数据',
                                'description' => '预定义组件列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '预定义剧本信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'DisplayName' => [
                                            'title' => '剧本的名称',
                                            'description' => '预定义组件的名称。',
                                            'type' => 'string',
                                            'example' => 'AegisKillQuara',
                                        ],
                                        'InputParams' => [
                                            'title' => '剧本的入参',
                                            'description' => '剧本的入参配置，为JSONArray格式。'."\n"
                                                .'>参考[DescribePlaybookInputOutput](~~DescribePlaybookInputOutput~~)接口的格式说明。',
                                            'type' => 'string',
                                            'example' => '['."\n"
                                                .'    {'."\n"
                                                .'        "typeName": "String",'."\n"
                                                .'        "dataClass": "normal",'."\n"
                                                .'        "dataType": "String",'."\n"
                                                .'        "description": "period",'."\n"
                                                .'        "example": "",'."\n"
                                                .'        "name": "period",'."\n"
                                                .'        "required": false'."\n"
                                                .'    }'."\n"
                                                .']',
                                        ],
                                        'Description' => [
                                            'title' => '剧本描述',
                                            'description' => '预定义组件的描述信息。',
                                            'type' => 'string',
                                            'example' => 'aegis_kill_process',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C5F5D6C9-DF1A-5381-92B1-39676F777D20\\",\\n  \\"Playbooks\\": [\\n    {\\n      \\"DisplayName\\": \\"AegisKillQuara\\",\\n      \\"InputParams\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n      \\"Description\\": \\"aegis_kill_process\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取预定义组件列表',
        ],
        'DescribeComponentList' => [
            'summary' => '用于获取用户可使用的普通组件的列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'b724d2b0-3c3b-4223-9bfd-xxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B0A255B3-495C-56FB-8B6B-DB073F80388A',
                            ],
                            'Components' => [
                                'title' => '传输的数据',
                                'description' => '组件信息，为JSONArray格式。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'    {'."\n"
                                    .'        "actions": ['."\n"
                                    .'            {'."\n"
                                    .'                "description": "mysql component",'."\n"
                                    .'                "name": "storeIdb",'."\n"
                                    .'                "parameters": ['."\n"
                                    .'                    {'."\n"
                                    .'                        "description": "update the mysql db",'."\n"
                                    .'                        "name": "updateSql",'."\n"
                                    .'                        "required": false'."\n"
                                    .'                    }'."\n"
                                    .'                ]'."\n"
                                    .'            }'."\n"
                                    .'        ],'."\n"
                                    .'        "basic": {'."\n"
                                    .'            "description": "mysq sql component for 5.6",'."\n"
                                    .'            "logo": "https://img.alicdn.com/tfs/TB1H89IpH3nBKNjSZFMXXaUSFXa-200-200.svg",'."\n"
                                    .'            "name": "Mysql"'."\n"
                                    .'        }'."\n"
                                    .'    }'."\n"
                                    .']',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B0A255B3-495C-56FB-8B6B-DB073F80388A\\",\\n  \\"Components\\": \\"[\\\\n    {\\\\n        \\\\\\"actions\\\\\\": [\\\\n            {\\\\n                \\\\\\"description\\\\\\": \\\\\\"mysql component\\\\\\",\\\\n                \\\\\\"name\\\\\\": \\\\\\"storeIdb\\\\\\",\\\\n                \\\\\\"parameters\\\\\\": [\\\\n                    {\\\\n                        \\\\\\"description\\\\\\": \\\\\\"update the mysql db\\\\\\",\\\\n                        \\\\\\"name\\\\\\": \\\\\\"updateSql\\\\\\",\\\\n                        \\\\\\"required\\\\\\": false\\\\n                    }\\\\n                ]\\\\n            }\\\\n        ],\\\\n        \\\\\\"basic\\\\\\": {\\\\n            \\\\\\"description\\\\\\": \\\\\\"mysq sql component for 5.6\\\\\\",\\\\n            \\\\\\"logo\\\\\\": \\\\\\"https://img.alicdn.com/tfs/TB1H89IpH3nBKNjSZFMXXaUSFXa-200-200.svg\\\\\\",\\\\n            \\\\\\"name\\\\\\": \\\\\\"Mysql\\\\\\"\\\\n        }\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
            'title' => '获取组件列表',
            'responseParamsDescription' => '**Components**参数为JSON格式，包含字段如下：'."\n"
                .'- **actions**：组件的可执行动作，为JSONArray格式，说明如下：'."\n"
                ."\n"
                .'  - **description**：动作的描述'."\n"
                .'  - **name**：动作的名称'."\n"
                .'  - **parameters**：动作的入参，JSONObject格式，包含字段：'."\n"
                .'    - **description**：入参的描述'."\n"
                .'    - **name**：入参的名称'."\n"
                .'    - **required**：入参是否必填，true为必填，false为非必填'."\n"
                ."\n"
                .'- **basic**：组件的基础信息，包含字段：'."\n"
                ."\n"
                .'- **description**：组件的描述信息'."\n"
                .'- **logo**：组件logo的地址信息'."\n"
                .'- **name**：组件的名称',
        ],
        'DescribeComponentAssets' => [
            'summary' => '用于获取某一组件的资产信息列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ComponentName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组件的名称',
                        'description' => '组件的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'python3',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<SaoAsset>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'BFEFB76D-DD0E-5529-BD57-0DAC10B9B30F',
                            ],
                            'ComponentAssets' => [
                                'title' => '传输的数据',
                                'description' => '资产列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '资产信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Id' => [
                                            'title' => 'This field was generated by MyBatis Generator.',
                                            'description' => '资产的唯一标识ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '7xx',
                                        ],
                                        'GmtCreate' => [
                                            'title' => 'This field was generated by MyBatis Generator.',
                                            'description' => '资产的创建时间，格式为UTC格式，yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2023-03-23T14:38Z',
                                        ],
                                        'GmtModified' => [
                                            'title' => 'This field was generated by MyBatis Generator.',
                                            'description' => '资产的修改时间，格式为UTC格式，yyyy-MM-ddTHH:mm:ssZ。',
                                            'type' => 'string',
                                            'example' => '2023-03-23T14:38Z',
                                        ],
                                        'Name' => [
                                            'title' => 'This field was generated by MyBatis Generator.',
                                            'description' => '资产的名称。',
                                            'type' => 'string',
                                            'example' => 'test asset',
                                        ],
                                        'Componentname' => [
                                            'title' => 'This field was generated by MyBatis Generator.',
                                            'description' => '资产所属的组件名称。',
                                            'type' => 'string',
                                            'example' => 'pyhton3',
                                        ],
                                        'Params' => [
                                            'title' => 'This field was generated by MyBatis Generator.',
                                            'description' => '资产配置信息，为JSON格式。DescribeComponentAssetForm'."\n"
                                                .'>资产信息的格式通过[DescribeComponentAssetForm](~~DescribeComponentAssetForm~~)接口获取。',
                                            'type' => 'string',
                                            'example' => '['."\n"
                                                .'    {'."\n"
                                                .'        "name": "authMethod",'."\n"
                                                .'        "value": "ak"'."\n"
                                                .'    },'."\n"
                                                .'    {'."\n"
                                                .'        "name": "accessKeyId",'."\n"
                                                .'        "value": "xxxxxxx"'."\n"
                                                .'    },'."\n"
                                                .'    {'."\n"
                                                .'        "name": "accessKeySecret",'."\n"
                                                .'        "value": "xxxxx"'."\n"
                                                .'    },'."\n"
                                                .'    {'."\n"
                                                .'        "name": "roleArn",'."\n"
                                                .'        "value": ""'."\n"
                                                .'    }'."\n"
                                                .']',
                                        ],
                                        'AssetUuid' => [
                                            'description' => '资产的UUID。',
                                            'type' => 'string',
                                            'example' => 'ff6fe161-93e2-464c-a326-fxxxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFEFB76D-DD0E-5529-BD57-0DAC10B9B30F\\",\\n  \\"ComponentAssets\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"GmtCreate\\": \\"2023-03-23T14:38Z\\",\\n      \\"GmtModified\\": \\"2023-03-23T14:38Z\\",\\n      \\"Name\\": \\"test asset\\",\\n      \\"Componentname\\": \\"pyhton3\\",\\n      \\"Params\\": \\"[\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"authMethod\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"ak\\\\\\"\\\\n    },\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"accessKeyId\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"xxxxxxx\\\\\\"\\\\n    },\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"accessKeySecret\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"xxxxx\\\\\\"\\\\n    },\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"roleArn\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"\\\\\\"\\\\n    }\\\\n]\\",\\n      \\"AssetUuid\\": \\"ff6fe161-93e2-464c-a326-fxxxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取组件的资产列表',
        ],
        'DescribeComponentAssetForm' => [
            'summary' => '用于获取组件的资产元信息，即资产信息是由哪些字段组成的。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'ComponentName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '组件的名称',
                        'description' => '组件的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'python3',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '9D1651AC-31CC-5CC4-A14E-626B3FCC1022',
                            ],
                            'ComponentAssetForm' => [
                                'title' => '传输的数据',
                                'description' => '组件资产的配置元信息，为JSONArray格式，包含字段：'."\n"
                                    ."\n"
                                    .'- **name**：参数的名称'."\n"
                                    .'- **defaultValue**：参数的默认值'."\n"
                                    .'- **description**：参数描述信息'."\n"
                                    .'- **required**：参数是否必填，**true**表示必填，**false**表示非必填',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'    {'."\n"
                                    .'        "defaultValue": "",'."\n"
                                    .'        "description": "assetname",'."\n"
                                    .'        "name": "assetname",'."\n"
                                    .'        "required": true'."\n"
                                    .'    }'."\n"
                                    .']',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9D1651AC-31CC-5CC4-A14E-626B3FCC1022\\",\\n  \\"ComponentAssetForm\\": \\"[\\\\n    {\\\\n        \\\\\\"defaultValue\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"assetname\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"assetname\\\\\\",\\\\n        \\\\\\"required\\\\\\": true\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
            'title' => '获取组件资产元信息',
        ],
        'DescribeApiList' => [
            'summary' => '用于获取OpenAPI的产品列表。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<ListApiItemResponse>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '4A15D31E-B38B-5F7F-8DC0-1C74408875AA',
                            ],
                            'ApiList' => [
                                'description' => '产品列表信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '产品信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PopCode' => [
                                            'description' => '阿里云产品接口的POP CODE。',
                                            'type' => 'string',
                                            'example' => 'Sas',
                                        ],
                                        'ProductName' => [
                                            'description' => '阿里云产品名称。',
                                            'type' => 'string',
                                            'example' => 'Cloud Security Center',
                                        ],
                                        'DocUrl' => [
                                            'description' => '阿里云产品接口文档链接。',
                                            'type' => 'string',
                                            'example' => 'https://xxxxx',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A15D31E-B38B-5F7F-8DC0-1C74408875AA\\",\\n  \\"ApiList\\": [\\n    {\\n      \\"PopCode\\": \\"Sas\\",\\n      \\"ProductName\\": \\"Cloud Security Center\\",\\n      \\"DocUrl\\": \\"https://xxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取OpenAPI列表',
        ],
        'DeletePlaybook' => [
            'summary' => '用于删除指定的自定义剧本。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'e99dab31-499b-4307-9248-xxxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '6F3CA8A9-B5BB-506A-9182-FFE80A6E0584',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6F3CA8A9-B5BB-506A-9182-FFE80A6E0584\\"\\n}","type":"json"}]',
            'title' => '删除剧本',
        ],
        'DeleteComponentAsset' => [
            'summary' => '用于删除组件配置的资产信息。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'delete',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'AssetId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '资产的ID',
                        'description' => '组件的资产ID。'."\n"
                            .'>调用[DescribeComponentAssets](~~DescribeComponentAssets~~)接口可以获取该参数。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => true,
                        'example' => '12x',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '39C38A34-8532-5D44-B88A-7263B435C316',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39C38A34-8532-5D44-B88A-7263B435C316\\"\\n}","type":"json"}]',
            'title' => '删除资产信息',
        ],
        'DebugPlaybook' => [
            'summary' => '用于调试运行剧本。',
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
                'riskType' => 'none',
                'chargeType' => 'paid',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f916b93e-e814-459f-9662-xxxxx',
                    ],
                ],
                [
                    'name' => 'Record',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的入参',
                        'description' => '调试剧本时的输入参数，由用户自定义。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{'."\n"
                            .'   "param1":"a",'."\n"
                            .'   "param2":"b"'."\n"
                            .'}',
                    ],
                ],
                [
                    'name' => 'Taskflow',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本流程',
                        'description' => '剧本的xml配置。'."\n"
                            .'>调用[DescribePlaybook](~~DescribePlaybook~~)接口可以获取该配置。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>'."\n",
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookTriggerDTO>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '75E56B2C-C8FA-5A2F-AA08-8745E2AC33EF',
                            ],
                            'RequestUuid' => [
                                'description' => '调试任务的运行UUID，可用于查询任务的运行结果等信息。',
                                'type' => 'string',
                                'example' => '6d412cfa-0905-4567-8a83-xxxxxx',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75E56B2C-C8FA-5A2F-AA08-8745E2AC33EF\\",\\n  \\"RequestUuid\\": \\"6d412cfa-0905-4567-8a83-xxxxxx\\"\\n}","type":"json"}]',
            'title' => '调试剧本',
        ],
        'ComparePlaybooks' => [
            'summary' => '用于比较发布的两个版本的剧本配置信息。',
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
            'operationType' => 'read',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '剧本的UUID',
                        'description' => '剧本的UUID。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'f916b93e-e814-459f-9662-xxxxx',
                    ],
                ],
                [
                    'name' => 'OldPlaybookReleaseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '老版本的ID',
                        'description' => '用于比较的第一个发布版本UUID。'."\n"
                            .'>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => 'sflk23423-e814-459f-9662-xxxxx',
                    ],
                ],
                [
                    'name' => 'NewPlaybookReleaseId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '新版本的ID',
                        'description' => '用于比较的第二个发布版本UUID。'."\n"
                            .'>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => 'sfdf2395-e814-459f-9662-xxxxx',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。'."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<CompareResult>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '2EC05B06-BF3C-5F3E-8FE8-3B1FAD76087A',
                            ],
                            'CompareResult' => [
                                'title' => '传输的数据',
                                'description' => '比较结果。',
                                'type' => 'object',
                                'properties' => [
                                    'Same' => [
                                        'description' => '两个版本是否相同的标记，**true**表示相同，**false**表示不相同。',
                                        'type' => 'boolean',
                                        'example' => 'false',
                                    ],
                                    'New' => [
                                        'description' => '用于比较的第二个版本，是否为新增版本：'."\n"
                                            ."\n"
                                            .'- **true**：表示为新增版本'."\n"
                                            .'- **false**：表示不是新增版本',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Description' => [
                                        'description' => '比较结果的描述信息。',
                                        'type' => 'string',
                                        'example' => 'The first version adds one node compared to the second version',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2EC05B06-BF3C-5F3E-8FE8-3B1FAD76087A\\",\\n  \\"CompareResult\\": {\\n    \\"Same\\": false,\\n    \\"New\\": true,\\n    \\"Description\\": \\"The first version adds one node compared to the second version\\"\\n  }\\n}","type":"json"}]',
            'title' => '比较剧本版本信息',
        ],
        'BatchModifyInstanceStatus' => [
            'summary' => '用于批量修改剧本的启用与停止状态。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'update',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'PlaybookUuid',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本UUID',
                        'description' => '剧本的UUID，如果操作多个剧本，UUID以逗号分隔。'."\n"
                            .'>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '8baa6cff-319e-4ede-97bc-1xxxxxx,s8df2e-s8dfs-xxxx',
                    ],
                ],
                [
                    'name' => 'Active',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本启禁用状态',
                        'description' => '剧本启动停止状态：'."\n"
                            ."\n"
                            .'- **0**：表示停止剧本'."\n"
                            .'- **1**：表示启用剧本',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '358E012F-B516-599D-9ED0-A1A361CDE615',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"358E012F-B516-599D-9ED0-A1A361CDE615\\"\\n}","type":"json"}]',
            'title' => '批量修改剧本状态',
        ],
        'CreatePlaybook' => [
            'summary' => '用于创建一个初始化的剧本。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '167210',
                'abilityTreeNodes' => [
                    'FEATUREsas104PTS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'DisplayName',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本名称',
                        'description' => '剧本的名称。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'test09',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '剧本的描述',
                        'description' => '剧本的描述信息。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'This is a new version',
                    ],
                ],
                [
                    'name' => 'TaskflowType',
                    'in' => 'formData',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
                [
                    'name' => 'Lang',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文'."\n"
                            .'- **en**：英文',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<PlaybookCloudDTO>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'B09B40B2-F11E-512C-B755-423F2056C17B',
                            ],
                            'Data' => [
                                'title' => '传输的数据',
                                'description' => '创建的返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'PlaybookUuid' => [
                                        'title' => '剧本的UUID',
                                        'description' => '新创建剧本的UUID。',
                                        'type' => 'string',
                                        'example' => '9e38111e-9794-4784-9ca8-xxxxxxx',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B09B40B2-F11E-512C-B755-423F2056C17B\\",\\n  \\"Data\\": {\\n    \\"PlaybookUuid\\": \\"9e38111e-9794-4784-9ca8-xxxxxxx\\"\\n  }\\n}","type":"json"}]',
            'title' => '创建剧本',
        ],
        'DescribeComponentsJs' => [
            'summary' => '用于获取组件的JS文件，组件会以返回的JS文件来进行页面的渲染。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                    'name' => 'Lang',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求和接收消息的语言类型。取值：'."\n"
                            ."\n"
                            .'- **zh**（默认）：中文。'."\n"
                            ."\n"
                            .'- **en**：英文。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'zh',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<String>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '58A518BC-E4A8-5BD7-AFEA-366046ED9073',
                            ],
                            'ComponentsJs' => [
                                'title' => '传输的数据',
                                'description' => '组件JS文件的配置信息。',
                                'type' => 'string',
                                'example' => '['."\n"
                                    .'    {'."\n"
                                    .'        "js": "https://xxxxx.oss-cn-zhangjiakou.aliyuncs.com/componentUpload/xxxxx",'."\n"
                                    .'        "name": "python3",'."\n"
                                    .'        "ownType": "sys"'."\n"
                                    .'    }'."\n"
                                    .']',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58A518BC-E4A8-5BD7-AFEA-366046ED9073\\",\\n  \\"ComponentsJs\\": \\"[\\\\n    {\\\\n        \\\\\\"js\\\\\\": \\\\\\"https://xxxxx.oss-cn-zhangjiakou.aliyuncs.com/componentUpload/xxxxx\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"python3\\\\\\",\\\\n        \\\\\\"ownType\\\\\\": \\\\\\"sys\\\\\\"\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
            'title' => '获取组件的JS文件',
            'responseParamsDescription' => '**ComponentsJs**参数为JSONArray格式，包含的字段如下：'."\n"
                ."\n"
                .'- **js**：表示JS文件的地址'."\n"
                .'- **name**：表示组件的名称'."\n"
                .'- **ownType**：表示组件的类型，暂时不开放基他类型的组件，固定为**sys**',
        ],
        'DescribeProcessTasks' => [
            'summary' => '用户在使用响应编排的功能进行事件处置时，处置中心会生成相应的处置任务，该接口用于获取处置任务的列表信息。',
            'methods' => [
                'get',
            ],
            'schemes' => [
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
                'riskType' => 'none',
                'chargeType' => 'free',
                'abilityTreeCode' => '186031',
                'abilityTreeNodes' => [
                    'FEATUREsas104PTS',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'ProcessStrategyUuid',
                    'in' => 'query',
                    'schema' => [
                        'title' => '处置策略ID',
                        'description' => '处置策略的UUID。'."\n"
                            .'>调用[ListDisposeStrategy](~~2584440~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '92af3c79-1754-4646-9366-9ddbd1e45536_xxxx',
                    ],
                ],
                [
                    'name' => 'EntityName',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体的名称',
                        'description' => '处置的实体的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '127.0.0.1',
                    ],
                ],
                [
                    'name' => 'EntityType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '实体的类型',
                        'description' => '处置的实体类型，取值：'."\n"
                            ."\n"
                            .'- **ip**：表示IP类型实体'."\n"
                            .'- **file**：表示文件类型实体'."\n"
                            .'- **process**：表示进程类型实体',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ip',
                    ],
                ],
                [
                    'name' => 'SceneCode',
                    'in' => 'query',
                    'schema' => [
                        'title' => '处置场景',
                        'description' => '处置任务的场景CODE。'."\n"
                            .'>调用[DescribeEnumItems](~~DescribeEnumItems~~)接口可以获取该参数，接口的入参**EnumType**为**process**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'event_xxx_whole_process',
                    ],
                ],
                [
                    'name' => 'TaskStatus',
                    'in' => 'query',
                    'schema' => [
                        'title' => '任务状态 list',
                        'description' => '处置任务的状态列表，为数据字符串的格式，取值：'."\n"
                            ."\n"
                            .'- **11**：表示处置中'."\n"
                            .'- **21**：表示封禁中'."\n"
                            .'- **22**：表示隔离中'."\n"
                            .'- **23**：已结束'."\n"
                            .'- **24**：已加白'."\n"
                            .'- **20**：成功'."\n"
                            .'- **90**：失败'."\n"
                            .'- **91**：解封失败'."\n"
                            .'- **92**：解除隔离失败',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["11","21"]',
                    ],
                ],
                [
                    'name' => 'Scope',
                    'in' => 'query',
                    'schema' => [
                        'title' => '作用域',
                        'description' => '处置的阿里云账户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '125xxxxx9870',
                    ],
                ],
                [
                    'name' => 'Source',
                    'in' => 'query',
                    'schema' => [
                        'title' => '处置来源 list',
                        'description' => '处置任务的触发来源，为数组字符串格式，取值：'."\n"
                            ."\n"
                            .'- **system**：手动处置事件触发'."\n"
                            .'- **custom**：自动响应规则，事件触发'."\n"
                            .'- **custom_alert**：自动响应规则，告警触发'."\n"
                            .'- **soar-manual**：SOAR手动调用剧本触发'."\n"
                            .'- **soar-mdr**：由安全管家服务触发',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["system"]',
                    ],
                ],
                [
                    'name' => 'ProcessActionStart',
                    'in' => 'query',
                    'schema' => [
                        'title' => '处置时间的查询开始时间',
                        'description' => '处置时间的查询开始时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1700031183572',
                    ],
                ],
                [
                    'name' => 'ProcessActionEnd',
                    'in' => 'query',
                    'schema' => [
                        'title' => '处置时间的查询结束时间',
                        'description' => '处置时间的查询结束时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1700031183572',
                    ],
                ],
                [
                    'name' => 'ProcessRemoveStart',
                    'in' => 'query',
                    'schema' => [
                        'title' => '解封时间的查询开始时间',
                        'description' => '解封时间的查询开始时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1700031183572',
                    ],
                ],
                [
                    'name' => 'ProcessRemoveEnd',
                    'in' => 'query',
                    'schema' => [
                        'title' => '解封时间的查询结束时间',
                        'description' => '解封时间的查询结束时间，格式：13位的时间戳。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1700031183572',
                    ],
                ],
                [
                    'name' => 'ParamContent',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊查询',
                        'description' => '模糊匹配，会查询实体、处置场景、处置参数字段。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12.x.x.x',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。'."\n"
                            .'> 建议PageSize取值不要为空。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'YunCode',
                    'in' => 'query',
                    'schema' => [
                        'description' => '处置任务关联的云产品，为数据字符串格式，取值：'."\n"
                            ."\n"
                            .'- **WAF**：表示Web应用防火墙'."\n"
                            .'- **CFW**：表示云防火墙'."\n"
                            .'- **Aegis**：表示云安全中心',
                        'type' => 'string',
                        'required' => false,
                        'example' => '["WAF"]',
                    ],
                ],
                [
                    'name' => 'TaskId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '处置任务的唯一标识。'."\n"
                            ."\n"
                            .'> 用于查询某具体任务，参数可由接口的返回值中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '150xxxxxxxxx95066',
                    ],
                ],
                [
                    'name' => 'OrderField',
                    'in' => 'query',
                    'schema' => [
                        'description' => '结果的排序字段。'."\n"
                            ."\n"
                            .'> 排序的字段，由接口的返回结果中获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'gmtCreate',
                    ],
                ],
                [
                    'name' => 'Direction',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序方向，取值：'."\n"
                            ."\n"
                            .'- **desc**：递减（默认）'."\n"
                            .'- **asc**：递增',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'desc',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<List<ProcessTaskDTO>>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => 'E7698CFB-4E1C-5840-8EC9-691B86729E94',
                            ],
                            'ProcessTasks' => [
                                'title' => '传输的数据',
                                'description' => '处置任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '处置任务详情。',
                                    'type' => 'object',
                                    'properties' => [
                                        'TaskId' => [
                                            'description' => '处置任务的唯一标识。',
                                            'type' => 'string',
                                            'example' => '150xxxxxxxxx95066',
                                        ],
                                        'Creator' => [
                                            'title' => '任务的创建人',
                                            'description' => '提交处置任务的阿里云账户ID。',
                                            'type' => 'string',
                                            'example' => '123xxxx355',
                                        ],
                                        'GmtCreateMillis' => [
                                            'title' => '任务创建时间',
                                            'description' => '处置任务的创建时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1700031183572',
                                        ],
                                        'GmtModifiedMillis' => [
                                            'title' => '任务修复时间',
                                            'description' => '处置任务的修改时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1700031183572',
                                        ],
                                        'YunCode' => [
                                            'title' => '关联产品',
                                            'description' => '处置任务关联的云产品CODE。',
                                            'type' => 'string',
                                            'example' => 'WAF',
                                        ],
                                        'EntityName' => [
                                            'title' => '处置的实体名称',
                                            'description' => '处置的实体名称。',
                                            'type' => 'string',
                                            'example' => '1.1.1.x',
                                        ],
                                        'EntityType' => [
                                            'title' => '处置的实体类型',
                                            'description' => '处置的实体类型。',
                                            'type' => 'string',
                                            'example' => 'ip',
                                        ],
                                        'TaskStatus' => [
                                            'title' => '任务状态',
                                            'description' => '处置任务的状态。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '11',
                                        ],
                                        'Scope' => [
                                            'title' => '作战域',
                                            'description' => '处置的阿里云账户ID。',
                                            'type' => 'string',
                                            'example' => '123xxxxx234',
                                        ],
                                        'InputParams' => [
                                            'title' => '任务的入参',
                                            'description' => '处置任务的输入参数。',
                                            'type' => 'string',
                                            'example' => '{"groupuuid":"c6a9b1df-f4ac-4078-bef4-99xxxxxx"}',
                                        ],
                                        'SceneCode' => [
                                            'title' => '处置场景',
                                            'description' => '处置任务的场景CODE。',
                                            'type' => 'string',
                                            'example' => 'event_xxx_whole_process',
                                        ],
                                        'SceneName' => [
                                            'title' => '处置场景名称',
                                            'description' => '处置任务的场景名称。',
                                            'type' => 'string',
                                            'example' => 'waf_whole_process',
                                        ],
                                        'ProcessTime' => [
                                            'title' => '处置时间',
                                            'description' => '处置任务的下发时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1700031183572',
                                        ],
                                        'RemoveTime' => [
                                            'title' => '解除时间',
                                            'description' => '处置任务的解封时间，格式：13位的时间戳。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1700031183572',
                                        ],
                                        'ProcessStrategyUuid' => [
                                            'title' => '关联的策略ID',
                                            'description' => '关联的策略ID。',
                                            'type' => 'string',
                                            'example' => '92af3c79-1754-4646-9366-9ddbd1e45536_xxxx',
                                        ],
                                        'Source' => [
                                            'description' => '处置任务的提交来源。',
                                            'type' => 'string',
                                            'example' => 'system',
                                        ],
                                        'ErrCode' => [
                                            'description' => '错误码。',
                                            'type' => 'string',
                                            'example' => 'sts_openapi.Info.DefenseSceneNotSupported',
                                        ],
                                        'ErrMsg' => [
                                            'description' => '错误信息。',
                                            'type' => 'string',
                                            'example' => 'ParamError : The parameters of your request are invalid',
                                        ],
                                        'ErrTip' => [
                                            'description' => '错误提示。',
                                            'type' => 'string',
                                            'example' => 'Verify that the input parameters of the components are correct',
                                        ],
                                    ],
                                ],
                            ],
                            'Page' => [
                                'description' => '页面显示的信息。',
                                'type' => 'object',
                                'properties' => [
                                    'TotalCount' => [
                                        'description' => '查询到的信息总数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '30',
                                    ],
                                    'PageNumber' => [
                                        'description' => '分页查询时，当前页的页码。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '1',
                                    ],
                                    'PageSize' => [
                                        'description' => '分页查询时，每页显示的条目数量。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '10',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7698CFB-4E1C-5840-8EC9-691B86729E94\\",\\n  \\"ProcessTasks\\": [\\n    {\\n      \\"TaskId\\": \\"150xxxxxxxxx95066\\",\\n      \\"Creator\\": \\"123xxxx355\\",\\n      \\"GmtCreateMillis\\": 1700031183572,\\n      \\"GmtModifiedMillis\\": 1700031183572,\\n      \\"YunCode\\": \\"WAF\\",\\n      \\"EntityName\\": \\"1.1.1.x\\",\\n      \\"EntityType\\": \\"ip\\",\\n      \\"TaskStatus\\": 11,\\n      \\"Scope\\": \\"123xxxxx234\\",\\n      \\"InputParams\\": \\"{\\\\\\"groupuuid\\\\\\":\\\\\\"c6a9b1df-f4ac-4078-bef4-99xxxxxx\\\\\\"}\\",\\n      \\"SceneCode\\": \\"event_xxx_whole_process\\",\\n      \\"SceneName\\": \\"waf_whole_process\\",\\n      \\"ProcessTime\\": 1700031183572,\\n      \\"RemoveTime\\": 1700031183572,\\n      \\"ProcessStrategyUuid\\": \\"92af3c79-1754-4646-9366-9ddbd1e45536_xxxx\\",\\n      \\"Source\\": \\"system\\",\\n      \\"ErrCode\\": \\"sts_openapi.Info.DefenseSceneNotSupported\\",\\n      \\"ErrMsg\\": \\"ParamError : The parameters of your request are invalid\\",\\n      \\"ErrTip\\": \\"Verify that the input parameters of the components are correct\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 30,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
            'title' => '获取处置任务列表',
        ],
        'TriggerProcessTask' => [
            'summary' => '用户在使用响应编排的功能进行事件处置时，处置中心会生成相应的处置任务，该接口用于对生成的处置任务执行后续的解除封禁、重试封禁、解除隔离等动作。',
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
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'create',
                'riskType' => 'high',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'TaskId',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '处置任务的唯一标识。'."\n"
                            .'>调用[DescribeProcessTasks](~~DescribeProcessTasks~~)接口可以获取该参数。',
                        'type' => 'string',
                        'required' => true,
                        'example' => '15355xxxxxx82894882',
                    ],
                ],
                [
                    'name' => 'ActionType',
                    'in' => 'query',
                    'schema' => [
                        'title' => '处置类型',
                        'description' => '处置动作的类型，取值如下：'."\n"
                            ."\n"
                            .'- **remove**：表示解除封禁或隔离'."\n"
                            .'- **retry**：表示重新提交任务',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'remove',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'SophonResult<Void>',
                        'description' => '返回信息。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '接口请求的requestId',
                                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                                'type' => 'string',
                                'example' => '58A518BC-E4A8-5BD7-AFEA-366046ED9073',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58A518BC-E4A8-5BD7-AFEA-366046ED9073\\"\\n}","type":"json"}]',
            'title' => '执行处置动作',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'public',
            'endpoint' => 'sophonsoar.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'sophonsoar.ap-southeast-1.aliyuncs.com',
        ],
    ],
];
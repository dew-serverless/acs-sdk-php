<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'sophonsoar',
    'version' => '2022-07-28',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 187418,
      'title' => '剧本编排',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'VerifyPythonFile',
        1 => 'VerifyPlaybook',
        2 => 'TriggerSophonPlaybook',
        3 => 'TriggerPlaybook',
        4 => 'RunPython3Script',
        5 => 'RevertPlaybookRelease',
        6 => 'RenamePlaybookNode',
        7 => 'QueryTreeData',
        8 => 'PublishPlaybook',
        9 => 'ModifyPlaybookInstanceStatus',
        10 => 'ModifyPlaybookInputOutput',
        11 => 'ModifyPlaybook',
        12 => 'ModifyComponentAsset',
        13 => 'DescriberPython3ScriptLogs',
        14 => 'DescribeSophonCommands',
        15 => 'DescribeSoarTaskAndActions',
        16 => 'DescribeSoarRecords',
        17 => 'DescribeSoarRecordInOutput',
        18 => 'DescribeSoarRecordActionOutputList',
        19 => 'DescribePopApiVersionList',
        20 => 'DescribePopApiItemList',
        21 => 'DescribePopApi',
        22 => 'DescribePlaybooks',
        23 => 'DescribePlaybookReleases',
        24 => 'DescribePlaybookNumberMetrics',
        25 => 'DescribePlaybookNodesOutput',
        26 => 'DescribePlaybookMetrics',
        27 => 'DescribePlaybookInputOutput',
        28 => 'DescribePlaybook',
        29 => 'DescribeNodeUsedInfos',
        30 => 'DescribeNodeParamTags',
        31 => 'DescribeLatestRecordSchema',
        32 => 'DescribeField',
        33 => 'DescribeExecutePlaybooks',
        34 => 'DescribeEnumItems',
        35 => 'DescribeDistinctReleases',
        36 => 'DescribeComponentPlaybook',
        37 => 'DescribeComponentList',
        38 => 'DescribeComponentAssets',
        39 => 'DescribeComponentAssetForm',
        40 => 'DescribeApiList',
        41 => 'DeletePlaybook',
        42 => 'DeleteComponentAsset',
        43 => 'DebugPlaybook',
        44 => 'ComparePlaybooks',
        45 => 'BatchModifyInstanceStatus',
        46 => 'CreatePlaybook',
        47 => 'DescribeComponentsJs',
      ),
    ),
    1 => 
    array (
      'id' => 187467,
      'title' => '处置任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'DescribeProcessTasks',
        1 => 'TriggerProcessTask',
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
    'VerifyPythonFile' => 
    array (
      'summary' => '校验Python代码片段的语法是否正确。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Content',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要校验的python代码片段。',
            'type' => 'string',
            'required' => true,
            'example' => 'import logging
def execute (params):
  success=True
  message=\'OK\'
  data=[]
  return (success,message,data)',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PythonVerifyDTO>',
            'description' => '返回校验后的代码提示信息',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'F72685FB-A6E6-5A9A-97F7-6DC1056E63CE',
              ),
              'Syntax' => 
              array (
                'description' => 'python代码的校验结果集，如果为空，则表示代码语法正确',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'StartLineNumber' => 
                    array (
                      'description' => '报错代码的启始行数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'StartColumn' => 
                    array (
                      'description' => '报错代码的启始列数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '2',
                    ),
                    'EndLineNumber' => 
                    array (
                      'description' => '报错代码的结束行数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'EndColumn' => 
                    array (
                      'description' => '报错代码的结束列数',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '5',
                    ),
                    'Message' => 
                    array (
                      'description' => '代码的具体报错信息',
                      'type' => 'string',
                      'example' => 'undefined name \'ab\'',
                    ),
                    'Severity' => 
                    array (
                      'description' => '代码的错误等级

- 4 表示一般错误
- 8 表示严重错误',
                      'type' => 'integer',
                      'format' => 'int32',
                      'enumValueTitles' => 
                      array (
                        4 => '一般错误',
                        8 => '严重错误',
                      ),
                      'example' => '4',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        491 => 
        array (
          0 => 
          array (
            'errorCode' => 'Playbook.External.ParamError',
            'errorMessage' => 'The parameters of the request interface are wrong. Please verify the parameters and request again.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F72685FB-A6E6-5A9A-97F7-6DC1056E63CE\\",\\n  \\"Syntax\\": [\\n    {\\n      \\"StartLineNumber\\": 2,\\n      \\"StartColumn\\": 2,\\n      \\"EndLineNumber\\": 5,\\n      \\"EndColumn\\": 5,\\n      \\"Message\\": \\"undefined name \'ab\'\\",\\n      \\"Severity\\": 4\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '校验python代码片段',
    ),
    'VerifyPlaybook' => 
    array (
      'summary' => '校验剧本的配置是否正确，编排的逻辑是否合理。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '9fcd3829-80ff-4681-be1e-4d2662c35fed',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskFlow',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本编辑配置',
            'description' => '剧本的xml配置',
            'type' => 'string',
            'required' => true,
            'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<CheckTaskInfo>>',
            'description' => '剧本校验的返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '0DFC9403-54EB-5672-B690-9AA93C9EBB54',
              ),
              'CheckTaskInfos' => 
              array (
                'title' => '传输的数据',
                'description' => '校验的结果信息',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'RiskLevel' => 
                    array (
                      'description' => '校验信息的提示等级。取值：
- warn：警告提示，在剧本运行过程中可能出现问题。
- error：错误提示，剧本无法编译通过。
- remind：建议提示，不影响剧本的发布与运行，建议优化剧本格式。',
                      'type' => 'string',
                      'example' => 'error',
                    ),
                    'NodeName' => 
                    array (
                      'description' => '剧本的节点名称。',
                      'type' => 'string',
                      'example' => 'python3_3',
                    ),
                    'Detail' => 
                    array (
                      'description' => '检查未通过时的具体错误信息',
                      'type' => 'string',
                      'example' => 'Node [python3_3] doesn\'t have the asset information',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0DFC9403-54EB-5672-B690-9AA93C9EBB54\\",\\n  \\"CheckTaskInfos\\": [\\n    {\\n      \\"RiskLevel\\": \\"error\\",\\n      \\"NodeName\\": \\"python3_3\\",\\n      \\"Detail\\": \\"Node [python3_3] doesn\'t have the asset information\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '校验剧本配置',
    ),
    'TriggerSophonPlaybook' => 
    array (
      'summary' => '用于触发运行剧本或响应命令。',
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
        'operationType' => 'update',
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'CommandName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '想要触发的命令名称。
>调用[DescribeSophonCommands](~~DescribeSophonCommands~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf_process_command',
          ),
        ),
        1 => 
        array (
          'name' => 'InputParams',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发命令或剧本的输入参数。',
            'type' => 'string',
            'required' => true,
            'example' => '{
    "param1": "xx.xx.xx.xx",
    "param2": "7d"
}',
          ),
        ),
        2 => 
        array (
          'name' => 'SophonTaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '业务的自定义ID，如果触发剧本时不指定，会产生一个随机的ID，用于排查与定位问题。',
            'type' => 'string',
            'required' => false,
            'example' => 'f916b93e-e814-459f-9662-xxxxxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'f916b93e-e814-459f-9662-xxxxxxxxxx',
          ),
        ),
        4 => 
        array (
          'name' => 'TriggerType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '触发类型，取值：

- **command**：触发命令任务
- **playbook**：触发剧本任务',
            'type' => 'string',
            'required' => false,
            'example' => 'playbook',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<SophonTaskResult>',
            'description' => '请求返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '传输的数据',
                'description' => '触发命令或剧本后的返回详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'SophonTaskId' => 
                  array (
                    'description' => '业务的自定义ID，如果触发剧本时不指定，会产生一个随机的ID，用于排查与定位问题。',
                    'type' => 'string',
                    'example' => 'a7c6d055-a72f-4676-bc89-3cd9edc0284c',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '0DFC9403-54EB-5672-B690-9AA93C9EBB54',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": {\\n    \\"SophonTaskId\\": \\"a7c6d055-a72f-4676-bc89-3cd9edc0284c\\"\\n  },\\n  \\"RequestId\\": \\"0DFC9403-54EB-5672-B690-9AA93C9EBB54\\"\\n}","type":"json"}]',
      'title' => '触发剧本或响应命令',
      'description' => '请确保在使用该接口前，已充分了解响应编排产品的收费方式和[价格](https://www.aliyun.com/price/product#/sas/detail/sas)。',
    ),
    'TriggerPlaybook' => 
    array (
      'summary' => '用于触发已启用的自定义剧本或预定义剧本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2a687089-d4dd-47d4-9709-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'InputParam',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的入参',
            'description' => '剧本的输入参数。',
            'type' => 'string',
            'required' => true,
            'example' => '{
    "input1": "xx.xx.xx.xx",
    "input2": "7d"
}
',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookTriggerDTO>',
            'description' => '请求返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'BD5A8DB6-A42C-532B-BCE8-83E69550CD59',
              ),
              'TriggerUuid' => 
              array (
                'description' => '剧本运行的UUID，可用于获取剧本的运行结果。',
                'type' => 'string',
                'example' => '55E63C57-D6C8-5036-A770-5CB10AC807AA',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BD5A8DB6-A42C-532B-BCE8-83E69550CD59\\",\\n  \\"TriggerUuid\\": \\"55E63C57-D6C8-5036-A770-5CB10AC807AA\\"\\n}","type":"json"}]',
      'title' => '触发剧本',
      'description' => '请确保在使用该接口前，已充分了解响应编排产品的收费方式和[价格](https://www.aliyun.com/price/product#/sas/detail/sas)。',
    ),
    'RunPython3Script' => 
    array (
      'summary' => '用于提交一段python3的代码片段并执行，只能用于数据处理。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PythonScript',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'python3的脚本。',
            'type' => 'string',
            'required' => false,
            'example' => 'import logging
def execute (params):
  #ip = params[\'ip\']
  #logging.info("enter execute,ip is "+ip)
  success=True
  message=\'OK\'
  data=[]
  return (success,message,data)',
          ),
        ),
        1 => 
        array (
          'name' => 'Params',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'python3脚本的入参。',
            'type' => 'string',
            'required' => false,
            'example' => '{
    "input1": "xx.xx.xx.xx",
    "input2": "7d"
}',
          ),
        ),
        2 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '8baa6cff-319e-4ede-97bc-xxxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'NodeName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '剧本的节点名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'python3_3',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'F210521C-D9BF-5264-8369-83EDDC617DB0',
              ),
              'RunResult' => 
              array (
                'title' => '传输的数据',
                'description' => '运行脚本的结果数据。',
                'type' => 'string',
                'example' => '{
    "requestUuid": "fe240b98-27b1-4a36-aec1-550b894318d9",
    "content": {
        "resultData": [],
        "success": true
    }
}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"F210521C-D9BF-5264-8369-83EDDC617DB0\\",\\n  \\"RunResult\\": \\"{\\\\n    \\\\\\"requestUuid\\\\\\": \\\\\\"fe240b98-27b1-4a36-aec1-550b894318d9\\\\\\",\\\\n    \\\\\\"content\\\\\\": {\\\\n        \\\\\\"resultData\\\\\\": [],\\\\n        \\\\\\"success\\\\\\": true\\\\n    }\\\\n}\\"\\n}","type":"json"}]',
      'title' => '运行python3脚本',
      'description' => '请确保在使用该接口前，已充分了解响应编排产品的收费方式和[价格](https://www.aliyun.com/price/product#/sas/detail/sas)。',
      'responseParamsDescription' => '**RunResult**参数为JSONObject格式，包含的字段为：

- **requestUuid**：表示该次请求的UUID，用于查询运行日志
- **content**：表示脚本运行的结果，由用户定义',
    ),
    'RevertPlaybookRelease' => 
    array (
      'summary' => '用于回滚剧本到指定的版本，同时可以指定回滚时是否发布该版本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '185295a1-c987-4b64-8796-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'PlayReleaseId',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的发布记录ID',
            'description' => '剧本发布版本的ID。
>调用[DescribePlaybookReleases](~~DescribePlaybookReleases~~)接口可以获取该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '3f97b56e-064e-47e7-a309-xxxxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'IsPublish',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '是否回滚发布',
            'description' => '回滚版本后，是否直接发布。
- **true**（默认）：发布并回滚
- **false**：不发布，只回滚',
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
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B3FED5B9-190A-5952-93A4-24FBF0F0C573',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B3FED5B9-190A-5952-93A4-24FBF0F0C573\\"\\n}","type":"json"}]',
      'title' => '回滚剧本版本',
    ),
    'RenamePlaybookNode' => 
    array (
      'summary' => '用户在编排剧本过程中，使用该接口可重命名剧本中某一节点的名称，对该节点的引用路径也会随之改变。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1c-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NewNodeName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '节点的新名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'waf_process',
          ),
        ),
        2 => 
        array (
          'name' => 'OldNodeName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件节点名',
            'description' => '要修改的节点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'firewall_process',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '1E1EC464-3BD7-518F-9937-BCC12E6855FE',
              ),
              'RenameResult' => 
              array (
                'title' => '传输的数据',
                'description' => '返回的新节点名称。',
                'type' => 'string',
                'example' => 'waf_process',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1E1EC464-3BD7-518F-9937-BCC12E6855FE\\",\\n  \\"RenameResult\\": \\"waf_process\\"\\n}","type":"json"}]',
      'title' => '重命令节点命称',
    ),
    'QueryTreeData' => 
    array (
      'summary' => '用于一次性获取所有的剧本列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'EF2ECA2D-D8E6-5021-BF5C-19DD6D52C5B2',
              ),
              'Playbooks' => 
              array (
                'title' => '传输的数据',
                'description' => '返回的剧本信息列表，为JSONString的格式。包含以下字段：

- **active**：表示剧本是否启动，**true**表示已启动，**false**表示未启动
- **displayName**：表示剧本的名称。
- **playbookUuid**：表示剧本的UUID。',
                'type' => 'string',
                'example' => '[
    {
        "playbook": {
            "active": false,
            "displayName": "test_playbook",
            "playbookUuid": "09a20455-3d3a-424c-a1df-xxxxxx"
        }
    }
]',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"EF2ECA2D-D8E6-5021-BF5C-19DD6D52C5B2\\",\\n  \\"Playbooks\\": \\"[\\\\n    {\\\\n        \\\\\\"playbook\\\\\\": {\\\\n            \\\\\\"active\\\\\\": false,\\\\n            \\\\\\"displayName\\\\\\": \\\\\\"test_playbook\\\\\\",\\\\n            \\\\\\"playbookUuid\\\\\\": \\\\\\"09a20455-3d3a-424c-a1df-xxxxxx\\\\\\"\\\\n        }\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
      'title' => '获取所有剧本的列表',
    ),
    'PublishPlaybook' => 
    array (
      'summary' => '用于把剧本配置发布线上，发布后，剧本会以新的逻辑来运行。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1c-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的描述',
            'description' => '本次发布版本的描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a waf processing playbook',
            'maxLength' => 128,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'C513FCEA-D71F-5E50-ADC4-FCF8C5DCF6BF',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C513FCEA-D71F-5E50-ADC4-FCF8C5DCF6BF\\"\\n}","type":"json"}]',
      'title' => '发布剧本',
    ),
    'ModifyPlaybookInstanceStatus' => 
    array (
      'summary' => '用于修改剧本的启动与停止状态。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '9fcd3829-80ff-4681-be1e-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Active',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本启禁用状态',
            'description' => '剧本的状态标识。取值：

- **1**：表示启动剧本。

- **0**：表示停止剧本。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认值**zh**。取值：
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'C2A32830-2842-5F8F-B4ED-E4783E400BBE',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C2A32830-2842-5F8F-B4ED-E4783E400BBE\\"\\n}","type":"json"}]',
      'title' => '修改剧本的启停状态',
    ),
    'ModifyPlaybookInputOutput' => 
    array (
      'summary' => '用于修改剧本的输入参数与输出参数。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '8baa6cff-319e-4ede-97bc-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'InputParams',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '入参配置',
            'description' => '剧本的入参配置，为JSONArray格式。',
            'type' => 'string',
            'required' => true,
            'example' => '[
    {
        "typeName": "String",
        "dataClass": "normal",
        "dataType": "String",
        "description": "period",
        "example": "",
        "name": "period",
        "required": false
    }
]',
          ),
        ),
        2 => 
        array (
          'name' => 'OutputParams',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '出参配置',
            'description' => '剧本暂不支持出参配置，固定为空值。',
            'type' => 'string',
            'required' => true,
            'example' => '[]',
          ),
        ),
        3 => 
        array (
          'name' => 'ParamType',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '剧本的入参类型。
- **template-ip**：IP请求模板。
- **template-file**：文件请求模板。
- **template-process**：进程请求模板。
- **custom**：自定义参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'custom',
          ),
        ),
        4 => 
        array (
          'name' => 'ExeConfig',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '剧本的执行方式，为JSONObject格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{
   "executeMode":"mul",
  "cron":"0 0 1 */1 * ?"
}',
          ),
        ),
        5 => 
        array (
          'name' => 'Lang',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '8DDC07CE-D41B-5142-8D91-469462719C77',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"8DDC07CE-D41B-5142-8D91-469462719C77\\"\\n}","type":"json"}]',
      'title' => '修改剧本的出入参数',
      'requestParamsDescription' => '**InputParams**为JSONArray格式，具体参数说明：
- typeName：参数类型名称。
- dataClass：参数类型等级，可选值，**normal**表示普通参数，**custom**表示复杂参数。
- dataType：参数类型，可选值，**string、long、int、ip、file、account**。
- description：参数的描述说明。
- example：参数的示例。
- name：参数名称。
- required：参数是否必填，可选值，**true**表示必填，**false**表示不必填。

**ExeConfig**为JSONObject格式，具体参数说明：
- executeMode：执行方式，固定为**mul**。
- cron：CRON表达式，遵循CRON标准。',
    ),
    'ModifyPlaybook' => 
    array (
      'summary' => '用于修改剧本的配置信息。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '8baa6cff-319e-4ede-97bc-1586c35e61f8',
          ),
        ),
        1 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的展示名称',
            'description' => '剧本的展示名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'aliyun_waf_test_playbook',
          ),
        ),
        2 => 
        array (
          'name' => 'Taskflow',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本编辑配置',
            'description' => '剧本的xml配置。',
            'type' => 'string',
            'required' => false,
            'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>',
          ),
        ),
        3 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的描述',
            'description' => '剧本的描述',
            'type' => 'string',
            'required' => false,
            'example' => 'demo test task',
          ),
        ),
        4 => 
        array (
          'name' => 'Lang',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '9B584F84-D66A-5525-8E7B-05612A903ABF',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9B584F84-D66A-5525-8E7B-05612A903ABF\\"\\n}","type":"json"}]',
      'title' => '编辑剧本',
    ),
    'ModifyComponentAsset' => 
    array (
      'summary' => '当一个组件需要配置资产时，该接口用户修改组件的资产信息。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AssetConfig',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资产的配置',
            'description' => '组件资产的配置，为JSONObject格式。',
            'type' => 'string',
            'required' => true,
            'example' => '{
    "name": "test asset",
    "componentName": "SLS",
    "params": [
        {
            "name": "end_point",
            "value": "xxx"
        },
        {
            "name": "sub_id",
            "value": "xxxx"
        },
        {
            "name": "access_key",
            "value": "xxxx"
        }
    ]
}',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '1C5F11E9-464E-51F0-9296-43BB312A0557',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1C5F11E9-464E-51F0-9296-43BB312A0557\\"\\n}","type":"json"}]',
      'title' => '修改组件资产',
      'requestParamsDescription' => '**AssetConfig**字段参数说明：
- **name**：资产的名称。
- **componentName**：组件的名称。
- **params**：配置信息，取值如下：
    - **end_point**：连接信息。
    - **sub_id**：账号accessID。
    - **access_key**：账号的accessKey。',
    ),
    'DescriberPython3ScriptLogs' => 
    array (
      'summary' => '在提交pyhton脚本的任务后，通过返回的requestUuid来获取运行日志。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RequestUuid',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '运行python3脚本时，返回的UUID。
>调用[RunPython3Script](~~RunPython3Script~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '69edc2b4-c95c-424f-9114-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'D22D8A0C-6E86-57B2-A142-929184122AB1',
              ),
              'RunResult' => 
              array (
                'title' => '传输的数据',
                'description' => 'python3的运行日志。',
                'type' => 'string',
                'example' => '{
    "logs": [
        {
            "message": "function input is {}"
        }
    ]
}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"D22D8A0C-6E86-57B2-A142-929184122AB1\\",\\n  \\"RunResult\\": \\"{\\\\n    \\\\\\"logs\\\\\\": [\\\\n        {\\\\n            \\\\\\"message\\\\\\": \\\\\\"function input is {}\\\\\\"\\\\n        }\\\\n    ]\\\\n}\\"\\n}","type":"json"}]',
      'title' => '获取pyhton脚本运行日志',
    ),
    'DescribeSophonCommands' => 
    array (
      'summary' => '用于获取处置实体的命令。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '命令名称，支持模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'waf_process',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<SophonCommandBO>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Data' => 
              array (
                'title' => '传输的数据',
                'description' => '返回的命令列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '命令详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '命令名称。',
                      'type' => 'string',
                      'example' => 'waf_process_ip_v2',
                    ),
                    'DisplayName' => 
                    array (
                      'description' => '命令的显示名称。',
                      'type' => 'string',
                      'example' => 'WAF Process IP',
                    ),
                    'ParamConfig' => 
                    array (
                      'description' => '参数配置信息。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '参数配置信息。',
                        'type' => 'object',
                        'properties' => 
                        array (
                          'Necessary' => 
                          array (
                            'description' => '是否必填，取值：
- **true**（默认）：必填。

- **false**：非必填。',
                            'type' => 'boolean',
                            'example' => 'true',
                          ),
                          'Field' => 
                          array (
                            'description' => '参数字段名称。',
                            'type' => 'string',
                            'example' => 'ip',
                          ),
                          'Value' => 
                          array (
                            'description' => '参数值。',
                            'type' => 'string',
                            'example' => '12.xx.xx.xx',
                          ),
                          'CheckField' => 
                          array (
                            'description' => '字段格式校验，正则匹配的方式，如果为空，表示不进行校验。',
                            'type' => 'string',
                            'example' => '[0-9]{4}\\.[0-9]{4}\\.[0-9]{4}\\.[0-9]{4}',
                          ),
                        ),
                      ),
                    ),
                    'Description' => 
                    array (
                      'description' => '命令描述。',
                      'type' => 'string',
                      'example' => 'This is a action of processing for WAF',
                    ),
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '1E1EC464-3BD7-518F-9937-BCC12E6855FE',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Data\\": [\\n    {\\n      \\"Name\\": \\"waf_process_ip_v2\\",\\n      \\"DisplayName\\": \\"WAF Process IP\\",\\n      \\"ParamConfig\\": [\\n        {\\n          \\"Necessary\\": true,\\n          \\"Field\\": \\"ip\\",\\n          \\"Value\\": \\"12.xx.xx.xx\\",\\n          \\"CheckField\\": \\"[0-9]{4}\\\\\\\\.[0-9]{4}\\\\\\\\.[0-9]{4}\\\\\\\\.[0-9]{4}\\"\\n        }\\n      ],\\n      \\"Description\\": \\"This is a action of processing for WAF\\"\\n    }\\n  ],\\n  \\"RequestId\\": \\"1E1EC464-3BD7-518F-9937-BCC12E6855FE\\"\\n}","type":"json"}]',
      'title' => '获取处置命令',
    ),
    'DescribeSoarTaskAndActions' => 
    array (
      'summary' => '用于获取剧本的一次运行过程中，组件的执行记录列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'RequestUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务请求的UUID',
            'description' => '剧本任务的UUID。',
            'type' => 'string',
            'required' => false,
            'example' => '1077f2f9-25e8-42d9-bfdf-1528e1313f6d',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<SaoExecuteInfo>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '18017A93-3D5D-503A-8308-914543F1CBA3',
              ),
              'Details' => 
              array (
                'title' => '传输的数据',
                'description' => '任务执行详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'TriggerType' => 
                  array (
                    'description' => '触发类型，取值：

- **debug**：剧本调试的任务。
- **manual**：手动触发的任务。
- **siem**：事件触发的任务。',
                    'type' => 'string',
                    'example' => 'siem',
                  ),
                  'TaskName' => 
                  array (
                    'description' => '剧本任务的名称，同剧本的UUID。',
                    'type' => 'string',
                    'example' => '92af3c79-1754-4646-9366-9ddbd1e45536',
                  ),
                  'StartTime' => 
                  array (
                    'description' => '剧本运行的开始时间，格式：13位的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1699868848645',
                  ),
                  'EndTime' => 
                  array (
                    'description' => '剧本运行的结束时间，格式：13位的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1699868848767',
                  ),
                  'Status' => 
                  array (
                    'description' => '剧本执行的任务状态，取值为：

- **success**：表示执行成功
- **fail**：表示执行失败
- **running**：表示正在运行',
                    'type' => 'string',
                    'example' => 'success',
                  ),
                  'RequestUuid' => 
                  array (
                    'description' => '剧本任务的请求ID，每次任务运行的唯一ID。',
                    'type' => 'string',
                    'example' => '17f75844-75cc-4174-86da-cec07a690142',
                  ),
                  'TriggerUser' => 
                  array (
                    'description' => '触发剧本任务的阿里云账号ID。',
                    'type' => 'string',
                    'example' => '127xxxx4392',
                  ),
                  'ErrorMsg' => 
                  array (
                    'description' => '剧本任务的错误信息，任务成功时，该字段为空。',
                    'type' => 'string',
                    'example' => 'stime not match',
                  ),
                  'RawEventReq' => 
                  array (
                    'description' => '剧本任务的请求参数。',
                    'type' => 'string',
                    'example' => '{
    "input1": "xx.xx.xx.xx",
    "input2": "7d"
}',
                  ),
                  'ResultLevel' => 
                  array (
                    'description' => '剧本调试任务的标志为，当任务为调试任务时，值为**DEBUG**，其余为空。',
                    'type' => 'string',
                    'example' => 'DEBUG',
                  ),
                  'ResultMessage' => 
                  array (
                    'description' => '剧本的返回信息，由用户在剧本中自己定义。',
                    'type' => 'string',
                    'example' => 'deubug playbook finished',
                  ),
                  'TaskTenantId' => 
                  array (
                    'description' => '剧本任务所属的阿里云账户ID。',
                    'type' => 'string',
                    'example' => '127xxxx4392',
                  ),
                  'Actions' => 
                  array (
                    'description' => '剧本执行的组件动作列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '剧本执行的组件动作详情。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'Component' => 
                        array (
                          'description' => '组件的名称。',
                          'type' => 'string',
                          'example' => 'DataFormat',
                        ),
                        'Action' => 
                        array (
                          'description' => '组件的动作名称。',
                          'type' => 'string',
                          'example' => 'formatdata',
                        ),
                        'StartTime' => 
                        array (
                          'description' => '组件运行的开始时间，格式：13位的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1699868848731',
                        ),
                        'EndTime' => 
                        array (
                          'description' => '剧本运行的结束时间，格式：13位的时间戳。',
                          'type' => 'integer',
                          'format' => 'int64',
                          'example' => '1699868848766',
                        ),
                        'Status' => 
                        array (
                          'description' => '组件的运行结果，取值为：

- **success**：表示执行成功。
- **fail**：表示执行失败。',
                          'type' => 'string',
                          'example' => 'success',
                        ),
                        'RequestUuid' => 
                        array (
                          'description' => '剧本任务的请求ID，每次任务运行的唯一ID',
                          'type' => 'string',
                          'example' => '8dac16c6-7411-4116-8d70-xxxxxxx',
                        ),
                        'TriggerUser' => 
                        array (
                          'description' => '执行剧本任务的阿里云账户ID。',
                          'type' => 'string',
                          'example' => '127xxxx4392
',
                        ),
                        'TaskName' => 
                        array (
                          'description' => '剧本任务的名称，同剧本的UUID。',
                          'type' => 'string',
                          'example' => 'ed127287-6699-4e4d-b986-xxxxxxx',
                        ),
                        'TaskStatus' => 
                        array (
                          'description' => '触发组件动作的执行状态。
> 该参数已不启用，只返回空值。',
                          'type' => 'string',
                          'example' => 'NULL',
                        ),
                        'ActionUuid' => 
                        array (
                          'description' => '组件动作执行记录的UUID。',
                          'type' => 'string',
                          'example' => '091be399-a937-4276-af78-xxxxxxxx',
                        ),
                        'AssetName' => 
                        array (
                          'description' => '组件使用的资产名称。',
                          'type' => 'string',
                          'example' => 'SLS Asset',
                        ),
                        'NodeName' => 
                        array (
                          'description' => '组件的自定义节点名称。',
                          'type' => 'string',
                          'example' => 'DataFormat_1',
                        ),
                      ),
                    ),
                  ),
                  'TaskFlowMd5' => 
                  array (
                    'description' => '运行剧本配置的MD5值。',
                    'type' => 'string',
                    'example' => 'ed127287-6699-4e4d-b986-9f770879xxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"18017A93-3D5D-503A-8308-914543F1CBA3\\",\\n  \\"Details\\": {\\n    \\"TriggerType\\": \\"siem\\",\\n    \\"TaskName\\": \\"92af3c79-1754-4646-9366-9ddbd1e45536\\",\\n    \\"StartTime\\": 1699868848645,\\n    \\"EndTime\\": 1699868848767,\\n    \\"Status\\": \\"success\\",\\n    \\"RequestUuid\\": \\"17f75844-75cc-4174-86da-cec07a690142\\",\\n    \\"TriggerUser\\": \\"127xxxx4392\\",\\n    \\"ErrorMsg\\": \\"stime not match\\",\\n    \\"RawEventReq\\": \\"{\\\\n    \\\\\\"input1\\\\\\": \\\\\\"xx.xx.xx.xx\\\\\\",\\\\n    \\\\\\"input2\\\\\\": \\\\\\"7d\\\\\\"\\\\n}\\",\\n    \\"ResultLevel\\": \\"DEBUG\\",\\n    \\"ResultMessage\\": \\"deubug playbook finished\\",\\n    \\"TaskTenantId\\": \\"127xxxx4392\\",\\n    \\"Actions\\": [\\n      {\\n        \\"Component\\": \\"DataFormat\\",\\n        \\"Action\\": \\"formatdata\\",\\n        \\"StartTime\\": 1699868848731,\\n        \\"EndTime\\": 1699868848766,\\n        \\"Status\\": \\"success\\",\\n        \\"RequestUuid\\": \\"8dac16c6-7411-4116-8d70-xxxxxxx\\",\\n        \\"TriggerUser\\": \\"127xxxx4392\\\\n\\",\\n        \\"TaskName\\": \\"ed127287-6699-4e4d-b986-xxxxxxx\\",\\n        \\"TaskStatus\\": \\"NULL\\",\\n        \\"ActionUuid\\": \\"091be399-a937-4276-af78-xxxxxxxx\\",\\n        \\"AssetName\\": \\"SLS Asset\\",\\n        \\"NodeName\\": \\"DataFormat_1\\"\\n      }\\n    ],\\n    \\"TaskFlowMd5\\": \\"ed127287-6699-4e4d-b986-9f770879xxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本的组件执行记录',
    ),
    'DescribeSoarRecords' => 
    array (
      'summary' => '用于获取剧本的执行记录列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本的UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '8f55e76d-b5d5-4720-9cd7-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskflowMd5',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务的版本ID',
            'description' => '剧本配置的MD5值。',
            'type' => 'string',
            'required' => false,
            'example' => 'be0a4ef084dd174abe478df52xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'StartMillis',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务开始时间',
            'description' => '任务运行的开始时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1683526284584',
          ),
        ),
        3 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务结束时间',
            'description' => '任务运行的结束时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1683772744953',
          ),
        ),
        4 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        5 => 
        array (
          'name' => 'TriggerUser',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行剧本任务的阿里云账户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '127xxxx4392',
          ),
        ),
        6 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '任务的运行状态，取值：

- **success**：成功任务。
- **failed**：失败任务。
- **inprogress**：运行中任务',
            'type' => 'string',
            'required' => false,
            'example' => 'inprogress',
          ),
        ),
        7 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        8 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。
> 建议PageSize取值不要为空。',
            'type' => 'integer',
            'format' => 'int32',
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
            'title' => 'SophonResult<List<SaoExecuteInfo>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '601C2DAC-6A67-5237-BEE8-5BF1CEE96296',
              ),
              'SoarExecuteRecords' => 
              array (
                'title' => '传输的数据',
                'description' => '执行记录结果集。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '执行记录详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TriggerType' => 
                    array (
                      'description' => '剧本任务的类型，取值：

- **debug**：表示调试任务。
- **manual**：表示手动任务。
- **siem**：表示事件或告警触发的任务。',
                      'type' => 'string',
                      'example' => 'debug',
                    ),
                    'TaskName' => 
                    array (
                      'description' => '剧本任务的名称，同剧本的UUID。',
                      'type' => 'string',
                      'example' => '82848ebc-eaff-4791-acd4-xxxxx',
                    ),
                    'StartTime' => 
                    array (
                      'description' => '任务运行的开始时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1675823338433',
                    ),
                    'EndTime' => 
                    array (
                      'description' => '组件运行的结束时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1686294686000',
                    ),
                    'Status' => 
                    array (
                      'description' => '剧本执行的任务状态，取值为：

- **success**：表示执行成功。
- **fail**：表示执行失败。
- **running**：表示正在运行',
                      'type' => 'string',
                      'example' => 'success',
                    ),
                    'RequestUuid' => 
                    array (
                      'description' => '剧本任务的请求ID，每次任务运行的唯一ID。',
                      'type' => 'string',
                      'example' => 'ba1ec480-aa90-4bb6-a1a7-9e311ae79321',
                    ),
                    'TriggerUser' => 
                    array (
                      'description' => '执行剧本任务的阿里云账户ID。',
                      'type' => 'string',
                      'example' => '127xxxx4392',
                    ),
                    'ErrorMsg' => 
                    array (
                      'description' => '剧本任务的错误信息，任务成功时，该字段为空。',
                      'type' => 'string',
                      'example' => 'stime not match',
                    ),
                    'RawEventReq' => 
                    array (
                      'description' => '剧本任务的请求参数。',
                      'type' => 'string',
                      'example' => '{
    "input1": "xx.xx.xx.xx",
    "input2": "7d"
}',
                    ),
                    'ResultMessage' => 
                    array (
                      'description' => '剧本的返回信息，由用户在剧本中自己定义。',
                      'type' => 'string',
                      'example' => 'Playbook finish',
                    ),
                    'TaskType' => 
                    array (
                      'description' => '剧本任务的类型，取值：

- **general**：表示普通剧本任务。
- **standard**：表示组件运行任务。',
                      'type' => 'string',
                      'example' => 'standard',
                    ),
                    'TaskflowMd5' => 
                    array (
                      'description' => '剧本配置的MD5值。',
                      'type' => 'string',
                      'example' => 'dea65a3db87fb9bd84bbxxxxx',
                    ),
                  ),
                ),
              ),
              'Page' => 
              array (
                'description' => '页面显示的信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '查询到的信息总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '22',
                    'default' => '0',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '分页查询时，当前页的页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                    'default' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时，每页显示的条目数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                    'default' => '10',
                  ),
                ),
                'required' => true,
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"601C2DAC-6A67-5237-BEE8-5BF1CEE96296\\",\\n  \\"SoarExecuteRecords\\": [\\n    {\\n      \\"TriggerType\\": \\"debug\\",\\n      \\"TaskName\\": \\"82848ebc-eaff-4791-acd4-xxxxx\\",\\n      \\"StartTime\\": 1675823338433,\\n      \\"EndTime\\": 1686294686000,\\n      \\"Status\\": \\"success\\",\\n      \\"RequestUuid\\": \\"ba1ec480-aa90-4bb6-a1a7-9e311ae79321\\",\\n      \\"TriggerUser\\": \\"127xxxx4392\\",\\n      \\"ErrorMsg\\": \\"stime not match\\",\\n      \\"RawEventReq\\": \\"{\\\\n    \\\\\\"input1\\\\\\": \\\\\\"xx.xx.xx.xx\\\\\\",\\\\n    \\\\\\"input2\\\\\\": \\\\\\"7d\\\\\\"\\\\n}\\",\\n      \\"ResultMessage\\": \\"Playbook finish\\",\\n      \\"TaskType\\": \\"standard\\",\\n      \\"TaskflowMd5\\": \\"dea65a3db87fb9bd84bbxxxxx\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 22,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本执行记录',
    ),
    'DescribeSoarRecordInOutput' => 
    array (
      'summary' => '当用户执行剧本任务后，通过该接口可获取组件动作的输入数据与输出数据。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ActionUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '动作的UUID',
            'description' => '组件动作的UUID。
>调用[DescribeSoarTaskAndActions](~~DescribeSoarTaskAndActions~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '0531ff66-dd05-4f24-84bf-xxxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '372D8B41-AF8D-573A-9B3F-0924950F241F',
              ),
              'InOutputInfo' => 
              array (
                'title' => '传输的数据',
                'description' => '组件动作的执行结果。',
                'type' => 'string',
                'example' => '{
    "actionUuid": "3896a25d-4967-493c-942e-4e60f27da1f7-xxxxx",
    "outputSummary": {
        "datalist": [
            {
                "a": "a"
            }
        ],
        "total_data_successful": 1,
        "total_data": 1,
        "total_exe_successful": 1,
        "total_exe": 1,
        "total_data_with_dup": 1,
        "status": true
    },
    "outputSchema": {
        "a": "String",
        "startTime": "DateTime"
    },
    "inputParams": {
        "inputData": [
            {
                "outputFields": {
                    "a": "a"
                }
            }
        ],
        "totalSize": 1
    },
    "startTime": "2023-11-13 17:47:28.645",
    "taskName": "92af3c79-1754-4646-9366-9ddbxxxxx"
}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"372D8B41-AF8D-573A-9B3F-0924950F241F\\",\\n  \\"InOutputInfo\\": \\"{\\\\n    \\\\\\"actionUuid\\\\\\": \\\\\\"3896a25d-4967-493c-942e-4e60f27da1f7-xxxxx\\\\\\",\\\\n    \\\\\\"outputSummary\\\\\\": {\\\\n        \\\\\\"datalist\\\\\\": [\\\\n            {\\\\n                \\\\\\"a\\\\\\": \\\\\\"a\\\\\\"\\\\n            }\\\\n        ],\\\\n        \\\\\\"total_data_successful\\\\\\": 1,\\\\n        \\\\\\"total_data\\\\\\": 1,\\\\n        \\\\\\"total_exe_successful\\\\\\": 1,\\\\n        \\\\\\"total_exe\\\\\\": 1,\\\\n        \\\\\\"total_data_with_dup\\\\\\": 1,\\\\n        \\\\\\"status\\\\\\": true\\\\n    },\\\\n    \\\\\\"outputSchema\\\\\\": {\\\\n        \\\\\\"a\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"startTime\\\\\\": \\\\\\"DateTime\\\\\\"\\\\n    },\\\\n    \\\\\\"inputParams\\\\\\": {\\\\n        \\\\\\"inputData\\\\\\": [\\\\n            {\\\\n                \\\\\\"outputFields\\\\\\": {\\\\n                    \\\\\\"a\\\\\\": \\\\\\"a\\\\\\"\\\\n                }\\\\n            }\\\\n        ],\\\\n        \\\\\\"totalSize\\\\\\": 1\\\\n    },\\\\n    \\\\\\"startTime\\\\\\": \\\\\\"2023-11-13 17:47:28.645\\\\\\",\\\\n    \\\\\\"taskName\\\\\\": \\\\\\"92af3c79-1754-4646-9366-9ddbxxxxx\\\\\\"\\\\n}\\"\\n}","type":"json"}]',
      'title' => '获取组件运行时数据',
      'responseParamsDescription' => '**InOutputInfo**为JSONString格式，其中包含字段如下：
- **actionUuid**：组件动作执行记录的UUID
- **startTime**：组件动作的开始执行时间
- **taskName**：组件动作对应的剧本任务名称
- **outputSchema**：动作输出数据的元信息，为JSON格式，编排剧本时定义
- **outputSummary**：动作的输出参数，为JSON格式，包含字段如下：
   - **datalist**：输出的数据详情
  - **total_data_successful**：执行成功的条目数
  - **total_data**：执行的总条目数
  - **total_exe_successful**：执行成功的次数
  - **total_exe**：总执行次数
  - **total_data_with_dup**：重复的数据次数
  - **status**：执行是否成功，**true**表示成功，**false**表示失败
-  **inputParams**：动作的输入数据，为JSON格式，包含字段如下：
   - **inputData**：动作的具体输入数据
   - **totalSize**：动作的输入数据条目数',
    ),
    'DescribeSoarRecordActionOutputList' => 
    array (
      'summary' => '用于获取剧本任务中，某一组件执行动作时，输出的数据列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ActionUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '动作的UUID',
            'description' => '组件动作的UUID。
>调用[DescribeSoarTaskAndActions](~~DescribeSoarTaskAndActions~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2202c90d-fa93-4726-bc32-xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型，默认值为**zh**。取值：
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。
> 建议PageSize取值不要为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '6A2BF9CF-3E32-5E45-A79B-8F67E0A4FE90',
              ),
              'ActionOutputs' => 
              array (
                'title' => '传输的数据',
                'description' => '组件动作执行时的输出数据，为JSONArray格式。

> 输出数据的具体格式，由编写剧本时配置的组件来确定。',
                'type' => 'string',
                'example' => '[
    {
        "a": "a",
        "taskname": "92af3c79-1754-4646-9366-9ddbd1e45536_xxxx",
        "log_time": 1699868849000
    }
]',
              ),
              'PageNumber' => 
              array (
                'description' => '当前分页的页码数。默认值为1。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '1',
              ),
              'PageSize' => 
              array (
                'description' => '分页展示时，每个分页包含的列表条目数。默认为10。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '10',
              ),
              'TotalCount' => 
              array (
                'description' => '总页数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6A2BF9CF-3E32-5E45-A79B-8F67E0A4FE90\\",\\n  \\"ActionOutputs\\": \\"[\\\\n    {\\\\n        \\\\\\"a\\\\\\": \\\\\\"a\\\\\\",\\\\n        \\\\\\"taskname\\\\\\": \\\\\\"92af3c79-1754-4646-9366-9ddbd1e45536_xxxx\\\\\\",\\\\n        \\\\\\"log_time\\\\\\": 1699868849000\\\\n    }\\\\n]\\",\\n  \\"PageNumber\\": 1,\\n  \\"PageSize\\": 10,\\n  \\"TotalCount\\": 100\\n}","type":"json"}]',
      'title' => '获取组件执行的输出数据列表',
    ),
    'DescribePopApiVersionList' => 
    array (
      'summary' => '用于获取某一云产品OpenAPI接口的版本信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PopCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云产品接口的POP CODE。
>调用[DescribeApiList](~~DescribeApiList~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'Sas',
          ),
        ),
        1 => 
        array (
          'name' => 'Env',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OpenAPI的参数信息所在环境，固定值为**online**。',
            'type' => 'string',
            'required' => true,
            'example' => 'online',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<ListPopVersionResponse>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'DBCDB0E1-4D0E-55A9-A44D-A62ADE7E2FDA',
              ),
              'PopCode' => 
              array (
                'description' => '阿里云产品接口的POP CODE。',
                'type' => 'string',
                'example' => 'Sas',
              ),
              'Total' => 
              array (
                'description' => '总记录条数。',
                'type' => 'integer',
                'format' => 'int32',
                'example' => '100',
              ),
              'VersionList' => 
              array (
                'description' => '接口的版本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '接口版本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PopCode' => 
                    array (
                      'description' => '阿里云产品接口的POP CODE。',
                      'type' => 'string',
                      'example' => 'Sas',
                    ),
                    'Version' => 
                    array (
                      'description' => '阿里云产品接口的版本号。',
                      'type' => 'string',
                      'example' => '2018-12-03',
                    ),
                    'ApiName' => 
                    array (
                      'description' => '阿里云产品接口的名称。',
                      'type' => 'string',
                      'example' => 'DescribePopApiVersionList',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DBCDB0E1-4D0E-55A9-A44D-A62ADE7E2FDA\\",\\n  \\"PopCode\\": \\"Sas\\",\\n  \\"Total\\": 100,\\n  \\"VersionList\\": [\\n    {\\n      \\"PopCode\\": \\"Sas\\",\\n      \\"Version\\": \\"2018-12-03\\",\\n      \\"ApiName\\": \\"DescribePopApiVersionList\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取OpenAPI的版本列表',
    ),
    'DescribePopApiItemList' => 
    array (
      'summary' => '用于获取某一云产品OpenAPI接口的接口名称列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PopCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云产品接口的POP CODE。
>调用[DescribeApiList](~~DescribeApiList~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'Sas',
          ),
        ),
        1 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API的版本号。
>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2018-12-03',
          ),
        ),
        2 => 
        array (
          'name' => 'Env',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OpenAPI的参数信息所在环境，固定值为online。',
            'type' => 'string',
            'required' => true,
            'example' => 'online',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        4 => 
        array (
          'name' => 'ApiName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云产品接口的名称，支持模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'DescribePopApiItemList',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<ListPopApiNamesResponse>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '6336D603-7028-52DE-AD88-E34AA5248355',
              ),
              'PopCode' => 
              array (
                'description' => '阿里云产品接口的POP CODE。',
                'type' => 'string',
                'example' => 'Sas',
              ),
              'Version' => 
              array (
                'description' => '阿里云产品接口的版本号。',
                'type' => 'string',
                'example' => '2018-12-03',
              ),
              'Total' => 
              array (
                'description' => '总记录条数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '100',
              ),
              'Names' => 
              array (
                'description' => '产品API列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => 'API名称。',
                  'type' => 'string',
                  'example' => 'DescribeAppVulScanCycle',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6336D603-7028-52DE-AD88-E34AA5248355\\",\\n  \\"PopCode\\": \\"Sas\\",\\n  \\"Version\\": \\"2018-12-03\\",\\n  \\"Total\\": 100,\\n  \\"Names\\": [\\n    \\"DescribeAppVulScanCycle\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取OpenAPI的接口名称列表',
    ),
    'DescribePopApi' => 
    array (
      'summary' => '用于获取OpenAPI的接口详情。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PopCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云产品接口的POP CODE。
>调用[DescribeApiList](~~DescribeApiList~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'Sas',
          ),
        ),
        1 => 
        array (
          'name' => 'ApiVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'API的版本号。
>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2021-10-01',
          ),
        ),
        2 => 
        array (
          'name' => 'Env',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'OpenAPI的参数信息所在环境，固定值为online。',
            'type' => 'string',
            'required' => true,
            'example' => 'online',
          ),
        ),
        3 => 
        array (
          'name' => 'ApiName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '阿里云产品API名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'DescribeInstanceInfo',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<ListApiMetaResponse>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '1A01B0BA-CFC4-5813-9EB0-A5DA15FA95AE',
              ),
              'PopCode' => 
              array (
                'description' => '阿里云产品接口的POP CODE。',
                'type' => 'string',
                'example' => 'Sas',
              ),
              'Version' => 
              array (
                'description' => 'API版本号。',
                'type' => 'string',
                'example' => '2019-09-10',
              ),
              'ApiName' => 
              array (
                'description' => 'API的名称。',
                'type' => 'string',
                'example' => 'AddAssetCleanConfig',
              ),
              'OpenApiMetaList' => 
              array (
                'description' => 'API的信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '信息详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '参数名称。',
                      'type' => 'string',
                      'example' => 'DescribePopApi',
                    ),
                    'Required' => 
                    array (
                      'description' => '该参数是否必填。

- true：必填。
- false：非必填。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                    'ExampleValue' => 
                    array (
                      'description' => '示例值。',
                      'type' => 'string',
                      'example' => '12.xx.xx.xx',
                    ),
                    'Description' => 
                    array (
                      'description' => '参数的描述。',
                      'type' => 'string',
                      'example' => 'demo parameter',
                    ),
                    'Type' => 
                    array (
                      'description' => '参数字段的数据类型，取值如下：

- **string**：字符串
- **boolean**：布尔值
- **integer**：整型
- **long**：长整型',
                      'type' => 'string',
                      'example' => 'string',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"1A01B0BA-CFC4-5813-9EB0-A5DA15FA95AE\\",\\n  \\"PopCode\\": \\"Sas\\",\\n  \\"Version\\": \\"2019-09-10\\",\\n  \\"ApiName\\": \\"AddAssetCleanConfig\\",\\n  \\"OpenApiMetaList\\": [\\n    {\\n      \\"Name\\": \\"DescribePopApi\\",\\n      \\"Required\\": false,\\n      \\"ExampleValue\\": \\"12.xx.xx.xx\\",\\n      \\"Description\\": \\"demo parameter\\",\\n      \\"Type\\": \\"string\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取OpenAPI接口详情',
    ),
    'DescribePlaybooks' => 
    array (
      'summary' => '用于获取剧本列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Active',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本的状态',
            'description' => '剧本的启用状态，取值：

- **1**：表示剧本已启用。
- **0**：表示剧本未启用',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'OwnType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本的类型',
            'description' => '剧本的类型，取值：

- **preset**：预定义剧本。
- **user**：自定义剧本。',
            'type' => 'string',
            'required' => false,
            'example' => 'user',
          ),
        ),
        2 => 
        array (
          'name' => 'StartMillis',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '查询的开始时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1683526277415',
          ),
        ),
        3 => 
        array (
          'name' => 'EndMillis',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '查询的结束时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1683858064361',
          ),
        ),
        4 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>通过UUID可查询某一具体的剧本信息。
> - 调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '8baa6cff-319e-4ede-97bc-1xxxxxx',
          ),
        ),
        5 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本名称',
            'description' => '剧本的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo_playbook',
          ),
        ),
        6 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定请求和接收消息的语言类型，默认为**zh**。取值：
- **zh**：中文
- **en**：英文
',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        7 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。
> 建议PageSize取值不要为空。',
            'type' => 'string',
            'required' => false,
            'example' => '10',
          ),
        ),
        8 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        9 => 
        array (
          'name' => 'Sort',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序依据 1-上次修改时间 2-最近执行时间',
            'description' => '排序依据 1-上次修改时间 2-最近执行时间',
            'type' => 'string',
            'required' => false,
          ),
        ),
        10 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序逻辑：desc asc,默认desc',
            'description' => '排序逻辑：desc asc,默认desc',
            'type' => 'string',
            'required' => false,
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<PlaybookCloudDTO>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '138B5AB7-7F2B-5814-87A3-E3ECFE1F207E',
              ),
              'Playbooks' => 
              array (
                'title' => '传输的数据',
                'description' => '剧本的列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '剧本的信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'title' => '剧本的名称',
                      'description' => '剧本的展示名称。',
                      'type' => 'string',
                      'example' => 'demo_playbook',
                    ),
                    'PlaybookUuid' => 
                    array (
                      'title' => '剧本的UUID',
                      'description' => '剧本的UUID。',
                      'type' => 'string',
                      'example' => 'bb5a8640-a14f-44ef-8376-cxxxxx',
                    ),
                    'OwnType' => 
                    array (
                      'title' => '剧本的权限类型',
                      'description' => '剧本的类型，取值：

- **preset**：预定义剧本。
- **user**：自定义剧本。',
                      'type' => 'string',
                      'example' => 'user',
                    ),
                    'Active' => 
                    array (
                      'title' => '剧本的启用状态',
                      'description' => '剧本的状态标识。取值：

- **1**：表示启动剧本。

- **0**：表示停止剧本。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '1',
                    ),
                    'LastRuntime' => 
                    array (
                      'title' => '剧本的最后执行时间',
                      'description' => '剧本的最后执行时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1683526277415',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '剧本创建时间',
                      'description' => '剧本创建时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1683526277415',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '剧本修改时间',
                      'description' => '剧本修改时间',
                      'type' => 'string',
                    ),
                  ),
                ),
              ),
              'Page' => 
              array (
                'description' => '分页查询信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '查询到的信息总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '分页查询时，当前页的页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时，每页显示的条目数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"138B5AB7-7F2B-5814-87A3-E3ECFE1F207E\\",\\n  \\"Playbooks\\": [\\n    {\\n      \\"DisplayName\\": \\"demo_playbook\\",\\n      \\"PlaybookUuid\\": \\"bb5a8640-a14f-44ef-8376-cxxxxx\\",\\n      \\"OwnType\\": \\"user\\",\\n      \\"Active\\": 1,\\n      \\"LastRuntime\\": 1683526277415,\\n      \\"GmtCreate\\": 1683526277415,\\n      \\"GmtModified\\": \\"\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本列表',
    ),
    'DescribePlaybookReleases' => 
    array (
      'summary' => '用于获取剧本发布的线上版本的信息列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1c-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。
> 建议PageSize取值不要为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        3 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<SaoReleaseInfo>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '3DFBE11C-6EB6-5166-92D6-3397796AFE1E',
              ),
              'Records' => 
              array (
                'title' => '传输的数据',
                'description' => '剧本的版本信息列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'description' => '记录 ID',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '80xxx',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => '创建时间',
                      'description' => '版本创建时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1655277397000',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => '修改时间',
                      'description' => '版本修改时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1691460804000',
                    ),
                    'Creator' => 
                    array (
                      'title' => '创建人',
                      'description' => '发布版本的阿里云账户ID。',
                      'type' => 'string',
                      'example' => '145xxxx985',
                    ),
                    'Description' => 
                    array (
                      'title' => '描述信息',
                      'description' => '版本的描述信息。',
                      'type' => 'string',
                      'example' => 'This is a new version',
                    ),
                    'TaskflowMd5' => 
                    array (
                      'title' => 'taskflow的MD5信息，用于比较是否 有变化',
                      'description' => '发布版本的剧本配置的MD5值。',
                      'type' => 'string',
                      'example' => 'be0a4ef084dd174abe47xxxxx',
                    ),
                  ),
                ),
              ),
              'Page' => 
              array (
                'description' => '页面显示的信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '查询到的信息总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '分页查询时，当前页的页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时，每页显示的条目数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3DFBE11C-6EB6-5166-92D6-3397796AFE1E\\",\\n  \\"Records\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"GmtCreate\\": 1655277397000,\\n      \\"GmtModified\\": 1691460804000,\\n      \\"Creator\\": \\"145xxxx985\\",\\n      \\"Description\\": \\"This is a new version\\",\\n      \\"TaskflowMd5\\": \\"be0a4ef084dd174abe47xxxxx\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 100,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本发布的版本列表',
    ),
    'DescribePlaybookNumberMetrics' => 
    array (
      'summary' => '用于获取响应编排产品的统计信息，包含剧本数量、启用数量等内容。',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookMetrics>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'Metrics' => 
              array (
                'title' => '传输的数据',
                'description' => '统计信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalNum' => 
                  array (
                    'description' => '剧本总数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'StartUpNum' => 
                  array (
                    'description' => '启用剧本数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '50',
                  ),
                ),
              ),
              'RequestId' => 
              array (
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'D4CC979E-3D5B-5A6A-BC87-C93C9E861C7B',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"Metrics\\": {\\n    \\"TotalNum\\": 100,\\n    \\"StartUpNum\\": 50\\n  },\\n  \\"RequestId\\": \\"D4CC979E-3D5B-5A6A-BC87-C93C9E861C7B\\"\\n}","type":"json"}]',
      'title' => '获取响应编排统计信息',
    ),
    'DescribePlaybookNodesOutput' => 
    array (
      'summary' => '用于获取组件输出的历史数据。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1c-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件节点名',
            'description' => '组件节点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'DataFormat_1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookNodeOutput>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'A491170C-FE1F-520E-83D4-72ED205B72ED',
              ),
              'PlaybookNodesOutput' => 
              array (
                'title' => '传输的数据',
                'description' => '节点输出数据。',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeName' => 
                  array (
                    'description' => '剧本的节点名称。',
                    'type' => 'string',
                    'example' => 'DataFormat_1',
                  ),
                  'NodeOutput' => 
                  array (
                    'description' => '组件输出的历史数据，为JSON格式，如果不存在，则为空。',
                    'type' => 'string',
                    'example' => '{
    "datalist": [
        {
            "score": "10",
            "ip": "1.1.1.1"
        }
    ],
    "total_data_successful": 1,
    "filter_total_data": 1,
    "total_data": 1,
    "total_exe_successful": 1,
    "total_exe": 1,
    "total_data_with_dup": 1,
    "filter_total_data_successful": 1,
    "status": true
}',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"A491170C-FE1F-520E-83D4-72ED205B72ED\\",\\n  \\"PlaybookNodesOutput\\": {\\n    \\"NodeName\\": \\"DataFormat_1\\",\\n    \\"NodeOutput\\": \\"{\\\\n    \\\\\\"datalist\\\\\\": [\\\\n        {\\\\n            \\\\\\"score\\\\\\": \\\\\\"10\\\\\\",\\\\n            \\\\\\"ip\\\\\\": \\\\\\"1.1.1.1\\\\\\"\\\\n        }\\\\n    ],\\\\n    \\\\\\"total_data_successful\\\\\\": 1,\\\\n    \\\\\\"filter_total_data\\\\\\": 1,\\\\n    \\\\\\"total_data\\\\\\": 1,\\\\n    \\\\\\"total_exe_successful\\\\\\": 1,\\\\n    \\\\\\"total_exe\\\\\\": 1,\\\\n    \\\\\\"total_data_with_dup\\\\\\": 1,\\\\n    \\\\\\"filter_total_data_successful\\\\\\": 1,\\\\n    \\\\\\"status\\\\\\": true\\\\n}\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取组件输出的历史数据',
      'responseParamsDescription' => '**NodeOutput**为JSONObject格式，包含的字段说明：
  - **datalist**：输出的数据详情
  - **total_data_successful**：执行成功的条目数
  - **total_data**：执行的总条目数
  - **total_exe_successful**：执行成功的次数
  - **total_exe**：总执行次数
  - **total_data_with_dup**：重复的数据次数
  - **status**：执行是否成功，**true**表示成功，**false**表示失败',
    ),
    'DescribePlaybookMetrics' => 
    array (
      'summary' => '获取某一剧本的元信息，包括名字、描述、运行次数、失败率等。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '2a687089-d4dd-47d4-9709-xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookCloudDTO>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '567D3D0B-2153-5860-BF9A-F9DEED55FB73',
              ),
              'Metrics' => 
              array (
                'title' => '传输的数据',
                'description' => '剧本的信息详情。',
                'type' => 'object',
                'properties' => 
                array (
                  'DisplayName' => 
                  array (
                    'title' => '剧本的名称',
                    'description' => '剧本的名称。',
                    'type' => 'string',
                    'example' => 'demo name',
                  ),
                  'PlaybookUuid' => 
                  array (
                    'title' => '剧本的UUID',
                    'description' => '剧本的UUID。',
                    'type' => 'string',
                    'example' => '0fbc9bdb-9ae3-4ef4-a709-xxxxx',
                  ),
                  'OwnType' => 
                  array (
                    'title' => '剧本的权限类型',
                    'description' => '剧本的类型，取值：

- **preset**：预定义剧本。
- **user**：自定义剧本。',
                    'type' => 'string',
                    'example' => 'user',
                  ),
                  'Active' => 
                  array (
                    'title' => '剧本的启用状态',
                    'description' => '剧本的启用状态，取值：

- **1**：表示剧本已启用。
- **0**：表示剧本未启用',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'LastRuntime' => 
                  array (
                    'title' => '剧本的最后执行时间',
                    'description' => '剧本的最后执行时间，格式：13位的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1683526277415',
                  ),
                  'GmtCreate' => 
                  array (
                    'title' => '剧本创建时间',
                    'description' => '剧本创建时间，格式：13位的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1655277397000',
                  ),
                  'HistoryMd5' => 
                  array (
                    'title' => '剧本历史版本数',
                    'description' => '剧本历史版本个数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'SuccNum' => 
                  array (
                    'title' => '剧本执行成功数',
                    'description' => '剧本任务执行成功数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'FailNum' => 
                  array (
                    'title' => '剧本执行失败数',
                    'description' => '剧本任务执行失败数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
                  ),
                  'Description' => 
                  array (
                    'description' => '剧本的描述信息。',
                    'type' => 'string',
                    'example' => 'This is a playbook for waf processing',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"567D3D0B-2153-5860-BF9A-F9DEED55FB73\\",\\n  \\"Metrics\\": {\\n    \\"DisplayName\\": \\"demo name\\",\\n    \\"PlaybookUuid\\": \\"0fbc9bdb-9ae3-4ef4-a709-xxxxx\\",\\n    \\"OwnType\\": \\"user\\",\\n    \\"Active\\": 1,\\n    \\"LastRuntime\\": 1683526277415,\\n    \\"GmtCreate\\": 1655277397000,\\n    \\"HistoryMd5\\": 10,\\n    \\"SuccNum\\": 100,\\n    \\"FailNum\\": 10,\\n    \\"Description\\": \\"This is a playbook for waf processing\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本的元信息',
    ),
    'DescribePlaybookInputOutput' => 
    array (
      'summary' => '用于获取剧本的输入参数与输出参数的配置信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '167574',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas104PTS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'b724d2b0-3c3b-4223-9bfd-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookInputOutputDTO>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '688B4CCD-5272-5DCF-9D76-FE5EFEF545F8',
              ),
              'Config' => 
              array (
                'title' => '传输的数据',
                'description' => '配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'ParamType' => 
                  array (
                    'title' => '输入类型',
                    'description' => '剧本的入参类型。
- **template-ip**：IP请求模板。
- **template-file**：文件请求模板。
- **template-process**：进程请求模板。
- **custom**：自定义参数。',
                    'type' => 'string',
                    'example' => 'custom',
                  ),
                  'ExeConfig' => 
                  array (
                    'title' => '输入类型',
                    'description' => '剧本的执行方式，为JSONObject格式。',
                    'type' => 'string',
                    'example' => '{
   "executeMode":"mul",
  "cron":"0 0 1 */1 * ?"
}',
                  ),
                  'InputParams' => 
                  array (
                    'title' => '入参配置',
                    'description' => '剧本的入参配置，为JSONArray格式。',
                    'type' => 'string',
                    'example' => '[
    {
        "typeName": "String",
        "dataClass": "normal",
        "dataType": "String",
        "description": "period",
        "example": "",
        "name": "period",
        "required": false
    }
]',
                  ),
                  'OutputParams' => 
                  array (
                    'title' => '出参配置',
                    'description' => '剧本暂不支持出参配置，固定为空值。',
                    'type' => 'string',
                    'example' => '[]',
                  ),
                  'PlaybookUuid' => 
                  array (
                    'description' => '剧本的UUID。',
                    'type' => 'string',
                    'example' => '9030076b-6733-4842-b05a-xxxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"688B4CCD-5272-5DCF-9D76-FE5EFEF545F8\\",\\n  \\"Config\\": {\\n    \\"ParamType\\": \\"custom\\",\\n    \\"ExeConfig\\": \\"{\\\\n   \\\\\\"executeMode\\\\\\":\\\\\\"mul\\\\\\",\\\\n  \\\\\\"cron\\\\\\":\\\\\\"0 0 1 */1 * ?\\\\\\"\\\\n}\\",\\n    \\"InputParams\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n    \\"OutputParams\\": \\"[]\\",\\n    \\"PlaybookUuid\\": \\"9030076b-6733-4842-b05a-xxxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本的出入参数配置',
      'responseParamsDescription' => '**InputParams**为JSONArray格式，具体参数说明：
- typeName：参数类型名称。
- dataClass：参数类型等级，可选值，**normal**表示普通参数，**custom**表示复杂参数。
- dataType：参数类型，可选值，**string、long、int、ip、file、account**。
- description：参数的描述说明。
- example：参数的示例。
- name：参数名称。
- required：参数是否必填，可选值，**true**表示必填，**false**表示不必填',
    ),
    'DescribePlaybook' => 
    array (
      'summary' => '用于获取剧本的xml配置信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '9030076b-6733-4842-b05a-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskflowMd5',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '剧本配置的MD5值。',
            'type' => 'string',
            'required' => false,
            'example' => '7a8f608dc64c242632aa578xxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'DebugFlag',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '线上版本与调试版本的标记，取值：

- **1**：表示获取调试版本
- **0**：表示获取线上发布版本',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookDetailDTO>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '2989BC59-E9F0-5C83-B453-B368857649C8',
              ),
              'Playbook' => 
              array (
                'title' => '传输的数据',
                'description' => '剧本的配置信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'GmtCreate' => 
                  array (
                    'description' => '剧本的创建时间，格式：13位的时间戳。',
                    'type' => 'string',
                    'example' => '1665288858000',
                  ),
                  'GmtModified' => 
                  array (
                    'description' => '剧本的修改时间，格式：13位的时间戳。',
                    'type' => 'string',
                    'example' => '1677482519000',
                  ),
                  'PlaybookUuid' => 
                  array (
                    'description' => '剧本UUID。',
                    'type' => 'string',
                    'example' => '8db257d3-e2b2-44fd-b2cc-xxxxx',
                  ),
                  'Taskflow' => 
                  array (
                    'description' => '剧本的XML配置。',
                    'type' => 'string',
                    'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>',
                  ),
                  'TaskflowType' => 
                  array (
                    'description' => '剧本的配置格式。
- **xml**：XML格式。
- **x6**：JSON格式。',
                    'type' => 'string',
                    'example' => 'xml',
                  ),
                  'Creator' => 
                  array (
                    'description' => '创建剧本的阿里云账户ID。',
                    'type' => 'string',
                    'example' => '124xxxxx3435',
                  ),
                  'OwnType' => 
                  array (
                    'description' => '剧本的类型，取值：

- **preset**：预定义剧本。
- **user**：自定义剧本。',
                    'type' => 'string',
                    'example' => 'preset',
                  ),
                  'SuccessExeNum' => 
                  array (
                    'description' => '剧本成功运行次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '100',
                  ),
                  'FailExeNum' => 
                  array (
                    'description' => '剧本失败运行次数。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'LastExeTime' => 
                  array (
                    'description' => '剧本的最后运行时间，格式：13位的时间戳。',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1665288858000',
                  ),
                  'Modifier' => 
                  array (
                    'description' => '修改剧本的阿里云账户ID。',
                    'type' => 'string',
                    'example' => '124xxxxx3435',
                  ),
                  'DisplayName' => 
                  array (
                    'description' => '剧本的展示名称。',
                    'type' => 'string',
                    'example' => 'demo_test',
                  ),
                  'InputParams' => 
                  array (
                    'description' => '剧本的入参配置，为JSONArray格式。
>参考[DescribePlaybookInputOutput](~~DescribePlaybookInputOutput~~)接口的格式说明。',
                    'type' => 'string',
                    'example' => '[
    {
        "typeName": "String",
        "dataClass": "normal",
        "dataType": "String",
        "description": "period",
        "example": "",
        "name": "period",
        "required": false
    }
]',
                  ),
                  'Description' => 
                  array (
                    'description' => '剧本的描述信息。',
                    'type' => 'string',
                    'example' => 'demo playbook',
                  ),
                  'OnlineActive' => 
                  array (
                    'description' => '剧本的启停标记，取值：

- **0**：表示剧本已停止
- **1**：表示剧本已启用',
                    'type' => 'boolean',
                    'example' => '0',
                  ),
                  'OnlineReleaseTaskflowMd5' => 
                  array (
                    'description' => '剧本最新发布版本的MD5值。',
                    'type' => 'string',
                    'example' => 'asdfsdfe232-e2b2-44fd-b2cc-xxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2989BC59-E9F0-5C83-B453-B368857649C8\\",\\n  \\"Playbook\\": {\\n    \\"GmtCreate\\": \\"1665288858000\\",\\n    \\"GmtModified\\": \\"1677482519000\\",\\n    \\"PlaybookUuid\\": \\"8db257d3-e2b2-44fd-b2cc-xxxxx\\",\\n    \\"Taskflow\\": \\"<?xml version=\\\\\\"1.0\\\\\\" encoding=\\\\\\"UTF-8\\\\\\"?><bpmn:definitions xmlns:xsi=\\\\\\"http://www.w3.org/2001/XMLSchema-instance\\\\\\" xmlns:bpmn=\\\\\\"http://www.omg.org/spec/BPMN/20100524/MODEL\\\\\\" xmlns:bpmndi=\\\\\\"http://www.omg.org/spec/BPMN/20100524/DI\\\\\\" xmlns:dc=\\\\\\"http://www.omg.org/spec/DD/20100524/DC\\\\\\" targetNamespace=\\\\\\"http://bpmn.io/schema/bpmn\\\\\\" id=\\\\\\"Definitions_1\\\\\\"><bpmn:process id=\\\\\\"Process_1\\\\\\" isExecutable=\\\\\\"false\\\\\\"><bpmn:startEvent id=\\\\\\"StartEvent_1\\\\\\"/></bpmn:process><bpmndi:BPMNDiagram id=\\\\\\"BPMNDiagram_1\\\\\\"><bpmndi:BPMNPlane id=\\\\\\"BPMNPlane_1\\\\\\" bpmnElement=\\\\\\"Process_1\\\\\\"><bpmndi:BPMNShape id=\\\\\\"_BPMNShape_StartEvent_2\\\\\\" bpmnElement=\\\\\\"StartEvent_1\\\\\\"><dc:Bounds height=\\\\\\"36.0\\\\\\" width=\\\\\\"36.0\\\\\\" x=\\\\\\"173.0\\\\\\" y=\\\\\\"102.0\\\\\\"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>\\",\\n    \\"TaskflowType\\": \\"xml\\",\\n    \\"Creator\\": \\"124xxxxx3435\\",\\n    \\"OwnType\\": \\"preset\\",\\n    \\"SuccessExeNum\\": 100,\\n    \\"FailExeNum\\": 1,\\n    \\"LastExeTime\\": 1665288858000,\\n    \\"Modifier\\": \\"124xxxxx3435\\",\\n    \\"DisplayName\\": \\"demo_test\\",\\n    \\"InputParams\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n    \\"Description\\": \\"demo playbook\\",\\n    \\"OnlineActive\\": true,\\n    \\"OnlineReleaseTaskflowMd5\\": \\"asdfsdfe232-e2b2-44fd-b2cc-xxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取剧本配置',
    ),
    'DescribeNodeUsedInfos' => 
    array (
      'summary' => '用于获取剧本中，某一节点正在被哪些节点引用。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1c-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件节点名',
            'description' => '组件的节点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'python3_2',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh**：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '3B10F836-C2B1-54FA-AB59-7591B548FB59',
              ),
              'NodeUsedInfos' => 
              array (
                'title' => '传输的数据',
                'description' => '节点的引用信息，返回为JSON格式，包含的字段：

- **action**：引用的动作，包含信息：
   - **name**：引用的节点名称
   - **inputParams**：引用的参数配置',
                'type' => 'string',
                'example' => '{
    "action": [
        {
            "name": "query_books",
            "inputParams": [
                {
                    "referInfos": [
                        "${play_group.datalist.*.ids}"
                    ],
                    "name": "querySql"
                }
            ]
        }
    ]
}',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"3B10F836-C2B1-54FA-AB59-7591B548FB59\\",\\n  \\"NodeUsedInfos\\": \\"{\\\\n    \\\\\\"action\\\\\\": [\\\\n        {\\\\n            \\\\\\"name\\\\\\": \\\\\\"query_books\\\\\\",\\\\n            \\\\\\"inputParams\\\\\\": [\\\\n                {\\\\n                    \\\\\\"referInfos\\\\\\": [\\\\n                        \\\\\\"${play_group.datalist.*.ids}\\\\\\"\\\\n                    ],\\\\n                    \\\\\\"name\\\\\\": \\\\\\"querySql\\\\\\"\\\\n                }\\\\n            ]\\\\n        }\\\\n    ]\\\\n}\\"\\n}","type":"json"}]',
      'title' => '获取剧本节点的引用信息',
    ),
    'DescribeNodeParamTags' => 
    array (
      'summary' => '用于编排剧本时，组件输入的可引用路径。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1c-xxxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件节点名',
            'description' => '组件节点名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'python3_2',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<ParamReferredPathsInfo>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '6BE94351-712A-505D-A40A-BC77CC8254A9',
              ),
              'ParamReferredPaths' => 
              array (
                'title' => '传输的数据',
                'description' => '推荐的路径配置。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '路径信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'ParamName' => 
                    array (
                      'description' => '上游节点名称。',
                      'type' => 'string',
                      'example' => 'DataFormat_1',
                    ),
                    'ReferredPath' => 
                    array (
                      'description' => '路径数组。',
                      'type' => 'array',
                      'items' => 
                      array (
                        'description' => '引用路径配置。',
                        'type' => 'string',
                        'example' => 'filter_1.datalist.*.score',
                      ),
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6BE94351-712A-505D-A40A-BC77CC8254A9\\",\\n  \\"ParamReferredPaths\\": [\\n    {\\n      \\"ParamName\\": \\"DataFormat_1\\",\\n      \\"ReferredPath\\": [\\n        \\"filter_1.datalist.*.score\\"\\n      ]\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取组件的推荐输入',
    ),
    'DescribeLatestRecordSchema' => 
    array (
      'summary' => '用于根据剧本最新一次的执行记录，动态生成剧本各节点的输出结构信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'c5c88b5e-97ca-435d-8c20-xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置请求和接收消息的语言类型，默认为**zh**。取值：

- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookNodeSchema>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '10B92EE1-4597-593B-A131-7A17D25EF5C9',
              ),
              'PlaybookNodeSchema' => 
              array (
                'title' => '传输的数据',
                'description' => '剧本输出结构信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeSchema' => 
                  array (
                    'description' => '结构信息。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '结构信息。',
                      'type' => 'object',
                      'properties' => 
                      array (
                        'NodeName' => 
                        array (
                          'description' => '节点的名称。',
                          'type' => 'string',
                          'example' => 'DataFormat_1',
                        ),
                        'ComponentName' => 
                        array (
                          'description' => '组件的名称。',
                          'type' => 'string',
                          'example' => 'DataFormat',
                        ),
                        'ActionName' => 
                        array (
                          'description' => '组件的动作名称。',
                          'type' => 'string',
                          'example' => 'formatedata',
                        ),
                        'OutputFields' => 
                        array (
                          'description' => '输出字段',
                          'type' => 'array',
                          'items' => 
                          array (
                            'description' => '输出字段的引用路径',
                            'type' => 'string',
                            'example' => 'play_group.datalist.*.ids',
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"10B92EE1-4597-593B-A131-7A17D25EF5C9\\",\\n  \\"PlaybookNodeSchema\\": {\\n    \\"NodeSchema\\": [\\n      {\\n        \\"NodeName\\": \\"DataFormat_1\\",\\n        \\"ComponentName\\": \\"DataFormat\\",\\n        \\"ActionName\\": \\"formatedata\\",\\n        \\"OutputFields\\": [\\n          \\"play_group.datalist.*.ids\\"\\n        ]\\n      }\\n    ]\\n  }\\n}","type":"json"}]',
      'title' => '获取最新执行记录结构信息',
    ),
    'DescribeField' => 
    array (
      'summary' => '用于获取产品全局的，通用的配置信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'QueryKey',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '全局配置的KEY值',
            'description' => '全局配置的KEY值，取值：

- **soar_filed_tags**：可以获取剧本的输入模板。',
            'type' => 'string',
            'required' => true,
            'example' => 'soar_filed_tags',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<SystemConfigView>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'BCDE6498-83CC-50A1-8307-3D5A539C42F8',
              ),
              'Name' => 
              array (
                'description' => '全局配置的名称。',
                'type' => 'string',
                'example' => 'soar_filed_tags',
              ),
              'Fields' => 
              array (
                'description' => '配置的内容。',
                'type' => 'string',
                'example' => '["ip","name","hostinfo","md5"]',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BCDE6498-83CC-50A1-8307-3D5A539C42F8\\",\\n  \\"Name\\": \\"soar_filed_tags\\",\\n  \\"Fields\\": \\"[\\\\\\"ip\\\\\\",\\\\\\"name\\\\\\",\\\\\\"hostinfo\\\\\\",\\\\\\"md5\\\\\\"]\\"\\n}","type":"json"}]',
      'title' => '获取全局配置信息',
    ),
    'DescribeExecutePlaybooks' => 
    array (
      'summary' => '用于配置自动响应计划时，获取可执行的剧本列表。',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '172464',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas104PTS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'InputMode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '入参类型筛选',
            'description' => '剧本入参的实体类型，当要想询多个实体类型时，以逗号分隔。
- **ip**：IP实体。
- **file**：文件实体。
- **process**：进程实体。
- **incident**：事件实体。',
            'type' => 'string',
            'required' => false,
            'example' => 'ip,file,process,host',
          ),
        ),
        1 => 
        array (
          'name' => 'PlaybookName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本的名字',
            'description' => '剧本的名称，支持模糊搜索。',
            'type' => 'string',
            'required' => false,
            'example' => 'demo_test',
          ),
        ),
        2 => 
        array (
          'name' => 'Uuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本的UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'f916b93e-e814-459f-9662-xxxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
        4 => 
        array (
          'name' => 'ParamType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '剧本的入参类型。
- **template-ip**：IP请求模板。
- **template-file**：文件请求模板。
- **template-process**：进程请求模板。
- **custom**：自定义参数。',
            'type' => 'string',
            'required' => false,
            'example' => 'custom',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<PlaybookExecuteMetrics>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '88A39217-2802-5B1E-BA2B-CF1BBC43C1F5',
              ),
              'PlaybookMetrics' => 
              array (
                'title' => '传输的数据',
                'description' => '剧本列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '剧本摘要信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'description' => '剧本的描述信息。',
                      'type' => 'string',
                      'example' => 'a demo playbook',
                    ),
                    'DisplayName' => 
                    array (
                      'description' => '剧本的名称。',
                      'type' => 'string',
                      'example' => 'demo_playbook',
                    ),
                    'Uuid' => 
                    array (
                      'description' => '剧本的UUID。',
                      'type' => 'string',
                      'example' => 'c5c88b5e-97ca-435d-8c20-2xxxxx',
                    ),
                    'ParamConfig' => 
                    array (
                      'description' => '剧本的入参配置，为JSONArray格式。
>参考[DescribePlaybookInputOutput](~~DescribePlaybookInputOutput~~)接口的格式说明。',
                      'type' => 'string',
                      'example' => '[
    {
        "typeName": "String",
        "dataClass": "normal",
        "dataType": "String",
        "description": "period",
        "example": "",
        "name": "period",
        "required": false
    }
]',
                    ),
                    'ParamType' => 
                    array (
                      'description' => '剧本的入参类型。
- **template-ip**：IP请求模板。
- **template-file**：文件请求模板。
- **template-process**：进程请求模板。
- **custom**：自定义参数。',
                      'type' => 'string',
                      'example' => 'custom',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"88A39217-2802-5B1E-BA2B-CF1BBC43C1F5\\",\\n  \\"PlaybookMetrics\\": [\\n    {\\n      \\"Description\\": \\"a demo playbook\\",\\n      \\"DisplayName\\": \\"demo_playbook\\",\\n      \\"Uuid\\": \\"c5c88b5e-97ca-435d-8c20-2xxxxx\\",\\n      \\"ParamConfig\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n      \\"ParamType\\": \\"custom\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取可执行的剧本列表',
    ),
    'DescribeEnumItems' => 
    array (
      'summary' => '用于获取产品需要的一些枚举信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'EnumType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '枚举类型',
            'description' => '枚举值的类型，支持的取值：
- **process**：表示处置场景枚举',
            'type' => 'string',
            'required' => true,
            'example' => 'process',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：
- **zh_cn**：默认值，中文（简体）。
- **en_us**：英文（美国）。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<EnumDTO>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'E7698CFB-4E1C-5840-8EC9-691B86729E94',
              ),
              'Data' => 
              array (
                'title' => '传输的数据',
                'description' => '枚举信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '枚举的键值对。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Key' => 
                    array (
                      'description' => '枚举的KEY值。',
                      'type' => 'string',
                      'example' => 'system_xxxxx_process_book',
                    ),
                    'Value' => 
                    array (
                      'description' => '枚举的VALUE值。',
                      'type' => 'string',
                      'example' => 'system_xxxxx_process_book',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7698CFB-4E1C-5840-8EC9-691B86729E94\\",\\n  \\"Data\\": [\\n    {\\n      \\"Key\\": \\"system_xxxxx_process_book\\",\\n      \\"Value\\": \\"system_xxxxx_process_book\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取枚举信息',
    ),
    'DescribeDistinctReleases' => 
    array (
      'summary' => '获取去重后的剧本发布的版本信息列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '172028',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas104PTS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'bc0b8424-535c-4ed5-bd94-xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'TaskflowMd5',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本XML配置的MD5值。',
            'type' => 'string',
            'required' => false,
            'example' => 'be0a4ef084dd174abe47xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<SaoReleaseInfo>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '145CACF6-D276-5197-8549-CB1AD76E2AC8',
              ),
              'Records' => 
              array (
                'title' => '传输的数据',
                'description' => '版本记录信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '版本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'title' => '描述信息',
                      'description' => '版本的描述信息。',
                      'type' => 'string',
                      'example' => 'demo version',
                    ),
                    'TaskflowMd5' => 
                    array (
                      'title' => 'taskflow的MD5信息，用于比较是否 有变化',
                      'description' => '版本的XML配置的MD5值。',
                      'type' => 'string',
                      'example' => '17cf53049bc8efa941207xxxxx',
                    ),
                    'TaskflowType' => 
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
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"145CACF6-D276-5197-8549-CB1AD76E2AC8\\",\\n  \\"Records\\": [\\n    {\\n      \\"Description\\": \\"demo version\\",\\n      \\"TaskflowMd5\\": \\"17cf53049bc8efa941207xxxxx\\",\\n      \\"TaskflowType\\": \\"\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取去重的版本列表',
    ),
    'DescribeComponentPlaybook' => 
    array (
      'summary' => '用于获取用户可以使用的预定义组件列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'ac343acc-1a61-4084-9a1cxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<PlaybookCloudDTO>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'C5F5D6C9-DF1A-5381-92B1-39676F777D20',
              ),
              'Playbooks' => 
              array (
                'title' => '传输的数据',
                'description' => '预定义组件列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '预定义剧本信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'DisplayName' => 
                    array (
                      'title' => '剧本的名称',
                      'description' => '预定义组件的名称。',
                      'type' => 'string',
                      'example' => 'AegisKillQuara',
                    ),
                    'InputParams' => 
                    array (
                      'title' => '剧本的入参',
                      'description' => '剧本的入参配置，为JSONArray格式。
>参考[DescribePlaybookInputOutput](~~DescribePlaybookInputOutput~~)接口的格式说明。',
                      'type' => 'string',
                      'example' => '[
    {
        "typeName": "String",
        "dataClass": "normal",
        "dataType": "String",
        "description": "period",
        "example": "",
        "name": "period",
        "required": false
    }
]',
                    ),
                    'Description' => 
                    array (
                      'title' => '剧本描述',
                      'description' => '预定义组件的描述信息。',
                      'type' => 'string',
                      'example' => 'aegis_kill_process',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"C5F5D6C9-DF1A-5381-92B1-39676F777D20\\",\\n  \\"Playbooks\\": [\\n    {\\n      \\"DisplayName\\": \\"AegisKillQuara\\",\\n      \\"InputParams\\": \\"[\\\\n    {\\\\n        \\\\\\"typeName\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"dataClass\\\\\\": \\\\\\"normal\\\\\\",\\\\n        \\\\\\"dataType\\\\\\": \\\\\\"String\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"example\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"period\\\\\\",\\\\n        \\\\\\"required\\\\\\": false\\\\n    }\\\\n]\\",\\n      \\"Description\\": \\"aegis_kill_process\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取预定义组件列表',
    ),
    'DescribeComponentList' => 
    array (
      'summary' => '用于获取用户可使用的普通组件的列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'b724d2b0-3c3b-4223-9bfd-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B0A255B3-495C-56FB-8B6B-DB073F80388A',
              ),
              'Components' => 
              array (
                'title' => '传输的数据',
                'description' => '组件信息，为JSONArray格式。',
                'type' => 'string',
                'example' => '[
    {
        "actions": [
            {
                "description": "mysql component",
                "name": "storeIdb",
                "parameters": [
                    {
                        "description": "update the mysql db",
                        "name": "updateSql",
                        "required": false
                    }
                ]
            }
        ],
        "basic": {
            "description": "mysq sql component for 5.6",
            "logo": "https://img.alicdn.com/tfs/TB1H89IpH3nBKNjSZFMXXaUSFXa-200-200.svg",
            "name": "Mysql"
        }
    }
]',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B0A255B3-495C-56FB-8B6B-DB073F80388A\\",\\n  \\"Components\\": \\"[\\\\n    {\\\\n        \\\\\\"actions\\\\\\": [\\\\n            {\\\\n                \\\\\\"description\\\\\\": \\\\\\"mysql component\\\\\\",\\\\n                \\\\\\"name\\\\\\": \\\\\\"storeIdb\\\\\\",\\\\n                \\\\\\"parameters\\\\\\": [\\\\n                    {\\\\n                        \\\\\\"description\\\\\\": \\\\\\"update the mysql db\\\\\\",\\\\n                        \\\\\\"name\\\\\\": \\\\\\"updateSql\\\\\\",\\\\n                        \\\\\\"required\\\\\\": false\\\\n                    }\\\\n                ]\\\\n            }\\\\n        ],\\\\n        \\\\\\"basic\\\\\\": {\\\\n            \\\\\\"description\\\\\\": \\\\\\"mysq sql component for 5.6\\\\\\",\\\\n            \\\\\\"logo\\\\\\": \\\\\\"https://img.alicdn.com/tfs/TB1H89IpH3nBKNjSZFMXXaUSFXa-200-200.svg\\\\\\",\\\\n            \\\\\\"name\\\\\\": \\\\\\"Mysql\\\\\\"\\\\n        }\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
      'title' => '获取组件列表',
      'responseParamsDescription' => '**Components**参数为JSON格式，包含字段如下：
- **actions**：组件的可执行动作，为JSONArray格式，说明如下：

  - **description**：动作的描述
  - **name**：动作的名称
  - **parameters**：动作的入参，JSONObject格式，包含字段：
    - **description**：入参的描述
    - **name**：入参的名称
    - **required**：入参是否必填，true为必填，false为非必填

- **basic**：组件的基础信息，包含字段：

- **description**：组件的描述信息
- **logo**：组件logo的地址信息
- **name**：组件的名称',
    ),
    'DescribeComponentAssets' => 
    array (
      'summary' => '用于获取某一组件的资产信息列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ComponentName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件的名称',
            'description' => '组件的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'python3',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<SaoAsset>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'BFEFB76D-DD0E-5529-BD57-0DAC10B9B30F',
              ),
              'ComponentAssets' => 
              array (
                'title' => '传输的数据',
                'description' => '资产列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '资产信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Id' => 
                    array (
                      'title' => 'This field was generated by MyBatis Generator.',
                      'description' => '资产的唯一标识ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '7xx',
                    ),
                    'GmtCreate' => 
                    array (
                      'title' => 'This field was generated by MyBatis Generator.',
                      'description' => '资产的创建时间，格式为UTC格式，yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2023-03-23T14:38Z',
                    ),
                    'GmtModified' => 
                    array (
                      'title' => 'This field was generated by MyBatis Generator.',
                      'description' => '资产的修改时间，格式为UTC格式，yyyy-MM-ddTHH:mm:ssZ。',
                      'type' => 'string',
                      'example' => '2023-03-23T14:38Z',
                    ),
                    'Name' => 
                    array (
                      'title' => 'This field was generated by MyBatis Generator.',
                      'description' => '资产的名称。',
                      'type' => 'string',
                      'example' => 'test asset',
                    ),
                    'Componentname' => 
                    array (
                      'title' => 'This field was generated by MyBatis Generator.',
                      'description' => '资产所属的组件名称。',
                      'type' => 'string',
                      'example' => 'pyhton3',
                    ),
                    'Params' => 
                    array (
                      'title' => 'This field was generated by MyBatis Generator.',
                      'description' => '资产配置信息，为JSON格式。DescribeComponentAssetForm
>资产信息的格式通过[DescribeComponentAssetForm](~~DescribeComponentAssetForm~~)接口获取。',
                      'type' => 'string',
                      'example' => '[
    {
        "name": "authMethod",
        "value": "ak"
    },
    {
        "name": "accessKeyId",
        "value": "xxxxxxx"
    },
    {
        "name": "accessKeySecret",
        "value": "xxxxx"
    },
    {
        "name": "roleArn",
        "value": ""
    }
]',
                    ),
                    'AssetUuid' => 
                    array (
                      'description' => '资产的UUID。',
                      'type' => 'string',
                      'example' => 'ff6fe161-93e2-464c-a326-fxxxxxx',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"BFEFB76D-DD0E-5529-BD57-0DAC10B9B30F\\",\\n  \\"ComponentAssets\\": [\\n    {\\n      \\"Id\\": 0,\\n      \\"GmtCreate\\": \\"2023-03-23T14:38Z\\",\\n      \\"GmtModified\\": \\"2023-03-23T14:38Z\\",\\n      \\"Name\\": \\"test asset\\",\\n      \\"Componentname\\": \\"pyhton3\\",\\n      \\"Params\\": \\"[\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"authMethod\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"ak\\\\\\"\\\\n    },\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"accessKeyId\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"xxxxxxx\\\\\\"\\\\n    },\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"accessKeySecret\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"xxxxx\\\\\\"\\\\n    },\\\\n    {\\\\n        \\\\\\"name\\\\\\": \\\\\\"roleArn\\\\\\",\\\\n        \\\\\\"value\\\\\\": \\\\\\"\\\\\\"\\\\n    }\\\\n]\\",\\n      \\"AssetUuid\\": \\"ff6fe161-93e2-464c-a326-fxxxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取组件的资产列表',
    ),
    'DescribeComponentAssetForm' => 
    array (
      'summary' => '用于获取组件的资产元信息，即资产信息是由哪些字段组成的。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ComponentName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '组件的名称',
            'description' => '组件的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'python3',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '9D1651AC-31CC-5CC4-A14E-626B3FCC1022',
              ),
              'ComponentAssetForm' => 
              array (
                'title' => '传输的数据',
                'description' => '组件资产的配置元信息，为JSONArray格式，包含字段：

- **name**：参数的名称
- **defaultValue**：参数的默认值
- **description**：参数描述信息
- **required**：参数是否必填，**true**表示必填，**false**表示非必填',
                'type' => 'string',
                'example' => '[
    {
        "defaultValue": "",
        "description": "assetname",
        "name": "assetname",
        "required": true
    }
]',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"9D1651AC-31CC-5CC4-A14E-626B3FCC1022\\",\\n  \\"ComponentAssetForm\\": \\"[\\\\n    {\\\\n        \\\\\\"defaultValue\\\\\\": \\\\\\"\\\\\\",\\\\n        \\\\\\"description\\\\\\": \\\\\\"assetname\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"assetname\\\\\\",\\\\n        \\\\\\"required\\\\\\": true\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
      'title' => '获取组件资产元信息',
    ),
    'DescribeApiList' => 
    array (
      'summary' => '用于获取OpenAPI的产品列表。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文。
- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<ListApiItemResponse>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '4A15D31E-B38B-5F7F-8DC0-1C74408875AA',
              ),
              'ApiList' => 
              array (
                'description' => '产品列表信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '产品信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PopCode' => 
                    array (
                      'description' => '阿里云产品接口的POP CODE。',
                      'type' => 'string',
                      'example' => 'Sas',
                    ),
                    'ProductName' => 
                    array (
                      'description' => '阿里云产品名称。',
                      'type' => 'string',
                      'example' => 'Cloud Security Center',
                    ),
                    'DocUrl' => 
                    array (
                      'description' => '阿里云产品接口文档链接。',
                      'type' => 'string',
                      'example' => 'https://xxxxx',
                    ),
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"4A15D31E-B38B-5F7F-8DC0-1C74408875AA\\",\\n  \\"ApiList\\": [\\n    {\\n      \\"PopCode\\": \\"Sas\\",\\n      \\"ProductName\\": \\"Cloud Security Center\\",\\n      \\"DocUrl\\": \\"https://xxxxx\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取OpenAPI列表',
    ),
    'DeletePlaybook' => 
    array (
      'summary' => '用于删除指定的自定义剧本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'e99dab31-499b-4307-9248-xxxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '6F3CA8A9-B5BB-506A-9182-FFE80A6E0584',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"6F3CA8A9-B5BB-506A-9182-FFE80A6E0584\\"\\n}","type":"json"}]',
      'title' => '删除剧本',
    ),
    'DeleteComponentAsset' => 
    array (
      'summary' => '用于删除组件配置的资产信息。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'delete',
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'AssetId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '资产的ID',
            'description' => '组件的资产ID。
>调用[DescribeComponentAssets](~~DescribeComponentAssets~~)接口可以获取该参数。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => true,
            'example' => '12x',
          ),
        ),
        1 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '39C38A34-8532-5D44-B88A-7263B435C316',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"39C38A34-8532-5D44-B88A-7263B435C316\\"\\n}","type":"json"}]',
      'title' => '删除资产信息',
    ),
    'DebugPlaybook' => 
    array (
      'summary' => '用于调试运行剧本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'paid',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'f916b93e-e814-459f-9662-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Record',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的入参',
            'description' => '调试剧本时的输入参数，由用户自定义。',
            'type' => 'string',
            'required' => false,
            'example' => '{
   "param1":"a",
   "param2":"b"
}',
          ),
        ),
        2 => 
        array (
          'name' => 'Taskflow',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本流程',
            'description' => '剧本的xml配置。
>调用[DescribePlaybook](~~DescribePlaybook~~)接口可以获取该配置。',
            'type' => 'string',
            'required' => true,
            'example' => '<?xml version="1.0" encoding="UTF-8"?><bpmn:definitions xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:bpmn="http://www.omg.org/spec/BPMN/20100524/MODEL" xmlns:bpmndi="http://www.omg.org/spec/BPMN/20100524/DI" xmlns:dc="http://www.omg.org/spec/DD/20100524/DC" targetNamespace="http://bpmn.io/schema/bpmn" id="Definitions_1"><bpmn:process id="Process_1" isExecutable="false"><bpmn:startEvent id="StartEvent_1"/></bpmn:process><bpmndi:BPMNDiagram id="BPMNDiagram_1"><bpmndi:BPMNPlane id="BPMNPlane_1" bpmnElement="Process_1"><bpmndi:BPMNShape id="_BPMNShape_StartEvent_2" bpmnElement="StartEvent_1"><dc:Bounds height="36.0" width="36.0" x="173.0" y="102.0"/></bpmndi:BPMNShape></bpmndi:BPMNPlane></bpmndi:BPMNDiagram></bpmn:definitions>
',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookTriggerDTO>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '75E56B2C-C8FA-5A2F-AA08-8745E2AC33EF',
              ),
              'RequestUuid' => 
              array (
                'description' => '调试任务的运行UUID，可用于查询任务的运行结果等信息。',
                'type' => 'string',
                'example' => '6d412cfa-0905-4567-8a83-xxxxxx',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"75E56B2C-C8FA-5A2F-AA08-8745E2AC33EF\\",\\n  \\"RequestUuid\\": \\"6d412cfa-0905-4567-8a83-xxxxxx\\"\\n}","type":"json"}]',
      'title' => '调试剧本',
    ),
    'ComparePlaybooks' => 
    array (
      'summary' => '用于比较发布的两个版本的剧本配置信息。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '剧本的UUID',
            'description' => '剧本的UUID。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => 'f916b93e-e814-459f-9662-xxxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'OldPlaybookReleaseId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '老版本的ID',
            'description' => '用于比较的第一个发布版本UUID。
>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => 'sflk23423-e814-459f-9662-xxxxx',
          ),
        ),
        2 => 
        array (
          'name' => 'NewPlaybookReleaseId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '新版本的ID',
            'description' => '用于比较的第二个发布版本UUID。
>调用[DescribePopApiVersionList](~~DescribePopApiVersionList~~)接口可以获取该参数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => 'sfdf2395-e814-459f-9662-xxxxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。
- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<CompareResult>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '2EC05B06-BF3C-5F3E-8FE8-3B1FAD76087A',
              ),
              'CompareResult' => 
              array (
                'title' => '传输的数据',
                'description' => '比较结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'Same' => 
                  array (
                    'description' => '两个版本是否相同的标记，**true**表示相同，**false**表示不相同。',
                    'type' => 'boolean',
                    'example' => 'false',
                  ),
                  'New' => 
                  array (
                    'description' => '用于比较的第二个版本，是否为新增版本：

- **true**：表示为新增版本
- **false**：表示不是新增版本',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Description' => 
                  array (
                    'description' => '比较结果的描述信息。',
                    'type' => 'string',
                    'example' => 'The first version adds one node compared to the second version',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"2EC05B06-BF3C-5F3E-8FE8-3B1FAD76087A\\",\\n  \\"CompareResult\\": {\\n    \\"Same\\": false,\\n    \\"New\\": true,\\n    \\"Description\\": \\"The first version adds one node compared to the second version\\"\\n  }\\n}","type":"json"}]',
      'title' => '比较剧本版本信息',
    ),
    'BatchModifyInstanceStatus' => 
    array (
      'summary' => '用于批量修改剧本的启用与停止状态。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PlaybookUuid',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本UUID',
            'description' => '剧本的UUID，如果操作多个剧本，UUID以逗号分隔。
>调用[DescribePlaybooks](~~DescribePlaybooks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '8baa6cff-319e-4ede-97bc-1xxxxxx,s8df2e-s8dfs-xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Active',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本启禁用状态',
            'description' => '剧本启动停止状态：

- **0**：表示停止剧本
- **1**：表示启用剧本',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'example' => '1',
          ),
        ),
        2 => 
        array (
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '358E012F-B516-599D-9ED0-A1A361CDE615',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"358E012F-B516-599D-9ED0-A1A361CDE615\\"\\n}","type":"json"}]',
      'title' => '批量修改剧本状态',
    ),
    'CreatePlaybook' => 
    array (
      'summary' => '用于创建一个初始化的剧本。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'create',
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '167210',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas104PTS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'DisplayName',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本名称',
            'description' => '剧本的名称。',
            'type' => 'string',
            'required' => true,
            'example' => 'test09',
          ),
        ),
        1 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '剧本的描述',
            'description' => '剧本的描述信息。',
            'type' => 'string',
            'required' => false,
            'example' => 'This is a new version',
          ),
        ),
        2 => 
        array (
          'name' => 'TaskflowType',
          'in' => 'formData',
          'schema' => 
          array (
            'type' => 'string',
            'required' => false,
          ),
        ),
        3 => 
        array (
          'name' => 'Lang',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '接收消息的语言类型。取值：

- **zh**（默认）：中文
- **en**：英文',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<PlaybookCloudDTO>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'B09B40B2-F11E-512C-B755-423F2056C17B',
              ),
              'Data' => 
              array (
                'title' => '传输的数据',
                'description' => '创建的返回结果。',
                'type' => 'object',
                'properties' => 
                array (
                  'PlaybookUuid' => 
                  array (
                    'title' => '剧本的UUID',
                    'description' => '新创建剧本的UUID。',
                    'type' => 'string',
                    'example' => '9e38111e-9794-4784-9ca8-xxxxxxx',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"B09B40B2-F11E-512C-B755-423F2056C17B\\",\\n  \\"Data\\": {\\n    \\"PlaybookUuid\\": \\"9e38111e-9794-4784-9ca8-xxxxxxx\\"\\n  }\\n}","type":"json"}]',
      'title' => '创建剧本',
    ),
    'DescribeComponentsJs' => 
    array (
      'summary' => '用于获取组件的JS文件，组件会以返回的JS文件来进行页面的渲染。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
          'name' => 'Lang',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求和接收消息的语言类型。取值：

- **zh**（默认）：中文。

- **en**：英文。',
            'type' => 'string',
            'required' => false,
            'example' => 'zh',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<String>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '58A518BC-E4A8-5BD7-AFEA-366046ED9073',
              ),
              'ComponentsJs' => 
              array (
                'title' => '传输的数据',
                'description' => '组件JS文件的配置信息。',
                'type' => 'string',
                'example' => '[
    {
        "js": "https://xxxxx.oss-cn-zhangjiakou.aliyuncs.com/componentUpload/xxxxx",
        "name": "python3",
        "ownType": "sys"
    }
]',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58A518BC-E4A8-5BD7-AFEA-366046ED9073\\",\\n  \\"ComponentsJs\\": \\"[\\\\n    {\\\\n        \\\\\\"js\\\\\\": \\\\\\"https://xxxxx.oss-cn-zhangjiakou.aliyuncs.com/componentUpload/xxxxx\\\\\\",\\\\n        \\\\\\"name\\\\\\": \\\\\\"python3\\\\\\",\\\\n        \\\\\\"ownType\\\\\\": \\\\\\"sys\\\\\\"\\\\n    }\\\\n]\\"\\n}","type":"json"}]',
      'title' => '获取组件的JS文件',
      'responseParamsDescription' => '**ComponentsJs**参数为JSONArray格式，包含的字段如下：

- **js**：表示JS文件的地址
- **name**：表示组件的名称
- **ownType**：表示组件的类型，暂时不开放基他类型的组件，固定为**sys**',
    ),
    'DescribeProcessTasks' => 
    array (
      'summary' => '用户在使用响应编排的功能进行事件处置时，处置中心会生成相应的处置任务，该接口用于获取处置任务的列表信息。',
      'methods' => 
      array (
        0 => 'get',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'riskType' => 'none',
        'chargeType' => 'free',
        'abilityTreeCode' => '186031',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREsas104PTS',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'ProcessStrategyUuid',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '处置策略ID',
            'description' => '处置策略的UUID。
>调用[ListDisposeStrategy](~~2584440~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => false,
            'example' => '92af3c79-1754-4646-9366-9ddbd1e45536_xxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'EntityName',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体的名称',
            'description' => '处置的实体的名称。',
            'type' => 'string',
            'required' => false,
            'example' => '127.0.0.1',
          ),
        ),
        2 => 
        array (
          'name' => 'EntityType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '实体的类型',
            'description' => '处置的实体类型，取值：

- **ip**：表示IP类型实体
- **file**：表示文件类型实体
- **process**：表示进程类型实体',
            'type' => 'string',
            'required' => false,
            'example' => 'ip',
          ),
        ),
        3 => 
        array (
          'name' => 'SceneCode',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '处置场景',
            'description' => '处置任务的场景CODE。
>调用[DescribeEnumItems](~~DescribeEnumItems~~)接口可以获取该参数，接口的入参**EnumType**为**process**。',
            'type' => 'string',
            'required' => false,
            'example' => 'event_xxx_whole_process',
          ),
        ),
        4 => 
        array (
          'name' => 'TaskStatus',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '任务状态 list',
            'description' => '处置任务的状态列表，为数据字符串的格式，取值：

- **11**：表示处置中
- **21**：表示封禁中
- **22**：表示隔离中
- **23**：已结束
- **24**：已加白
- **20**：成功
- **90**：失败
- **91**：解封失败
- **92**：解除隔离失败',
            'type' => 'string',
            'required' => false,
            'example' => '["11","21"]',
          ),
        ),
        5 => 
        array (
          'name' => 'Scope',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '作用域',
            'description' => '处置的阿里云账户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '125xxxxx9870',
          ),
        ),
        6 => 
        array (
          'name' => 'Source',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '处置来源 list',
            'description' => '处置任务的触发来源，为数组字符串格式，取值：

- **system**：手动处置事件触发
- **custom**：自动响应规则，事件触发
- **custom_alert**：自动响应规则，告警触发
- **soar-manual**：SOAR手动调用剧本触发
- **soar-mdr**：由安全管家服务触发',
            'type' => 'string',
            'required' => false,
            'example' => '["system"]',
          ),
        ),
        7 => 
        array (
          'name' => 'ProcessActionStart',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '处置时间的查询开始时间',
            'description' => '处置时间的查询开始时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1700031183572',
          ),
        ),
        8 => 
        array (
          'name' => 'ProcessActionEnd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '处置时间的查询结束时间',
            'description' => '处置时间的查询结束时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1700031183572',
          ),
        ),
        9 => 
        array (
          'name' => 'ProcessRemoveStart',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '解封时间的查询开始时间',
            'description' => '解封时间的查询开始时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1700031183572',
          ),
        ),
        10 => 
        array (
          'name' => 'ProcessRemoveEnd',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '解封时间的查询结束时间',
            'description' => '解封时间的查询结束时间，格式：13位的时间戳。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1700031183572',
          ),
        ),
        11 => 
        array (
          'name' => 'ParamContent',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊查询',
            'description' => '模糊匹配，会查询实体、处置场景、处置参数字段。',
            'type' => 'string',
            'required' => false,
            'example' => '12.x.x.x',
          ),
        ),
        12 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '指定分页查询时，每页显示的数据最大条数。每页默认显示的数据条数为20条，PageSize参数值为空时，将默认返回10条数据。
> 建议PageSize取值不要为空。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        13 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '设置从返回结果的第几页开始显示查询结果。默认值为1，表示从第1页开始显示。',
            'type' => 'string',
            'required' => false,
            'example' => '1',
          ),
        ),
        14 => 
        array (
          'name' => 'YunCode',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '处置任务关联的云产品，为数据字符串格式，取值：

- **WAF**：表示Web应用防火墙
- **CFW**：表示云防火墙
- **Aegis**：表示云安全中心',
            'type' => 'string',
            'required' => false,
            'example' => '["WAF"]',
          ),
        ),
        15 => 
        array (
          'name' => 'TaskId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '处置任务的唯一标识。

> 用于查询某具体任务，参数可由接口的返回值中获取。',
            'type' => 'string',
            'required' => false,
            'example' => '150xxxxxxxxx95066',
          ),
        ),
        16 => 
        array (
          'name' => 'OrderField',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '结果的排序字段。

> 排序的字段，由接口的返回结果中获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'gmtCreate',
          ),
        ),
        17 => 
        array (
          'name' => 'Direction',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序方向，取值：

- **desc**：递减（默认）
- **asc**：递增',
            'type' => 'string',
            'required' => false,
            'example' => 'desc',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<List<ProcessTaskDTO>>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => 'E7698CFB-4E1C-5840-8EC9-691B86729E94',
              ),
              'ProcessTasks' => 
              array (
                'title' => '传输的数据',
                'description' => '处置任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '处置任务详情。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'TaskId' => 
                    array (
                      'description' => '处置任务的唯一标识。',
                      'type' => 'string',
                      'example' => '150xxxxxxxxx95066',
                    ),
                    'Creator' => 
                    array (
                      'title' => '任务的创建人',
                      'description' => '提交处置任务的阿里云账户ID。',
                      'type' => 'string',
                      'example' => '123xxxx355',
                    ),
                    'GmtCreateMillis' => 
                    array (
                      'title' => '任务创建时间',
                      'description' => '处置任务的创建时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1700031183572',
                    ),
                    'GmtModifiedMillis' => 
                    array (
                      'title' => '任务修复时间',
                      'description' => '处置任务的修改时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1700031183572',
                    ),
                    'YunCode' => 
                    array (
                      'title' => '关联产品',
                      'description' => '处置任务关联的云产品CODE。',
                      'type' => 'string',
                      'example' => 'WAF',
                    ),
                    'EntityName' => 
                    array (
                      'title' => '处置的实体名称',
                      'description' => '处置的实体名称。',
                      'type' => 'string',
                      'example' => '1.1.1.x',
                    ),
                    'EntityType' => 
                    array (
                      'title' => '处置的实体类型',
                      'description' => '处置的实体类型。',
                      'type' => 'string',
                      'example' => 'ip',
                    ),
                    'TaskStatus' => 
                    array (
                      'title' => '任务状态',
                      'description' => '处置任务的状态。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '11',
                    ),
                    'Scope' => 
                    array (
                      'title' => '作战域',
                      'description' => '处置的阿里云账户ID。',
                      'type' => 'string',
                      'example' => '123xxxxx234',
                    ),
                    'InputParams' => 
                    array (
                      'title' => '任务的入参',
                      'description' => '处置任务的输入参数。',
                      'type' => 'string',
                      'example' => '{"groupuuid":"c6a9b1df-f4ac-4078-bef4-99xxxxxx"}',
                    ),
                    'SceneCode' => 
                    array (
                      'title' => '处置场景',
                      'description' => '处置任务的场景CODE。',
                      'type' => 'string',
                      'example' => 'event_xxx_whole_process',
                    ),
                    'SceneName' => 
                    array (
                      'title' => '处置场景名称',
                      'description' => '处置任务的场景名称。',
                      'type' => 'string',
                      'example' => 'waf_whole_process',
                    ),
                    'ProcessTime' => 
                    array (
                      'title' => '处置时间',
                      'description' => '处置任务的下发时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1700031183572',
                    ),
                    'RemoveTime' => 
                    array (
                      'title' => '解除时间',
                      'description' => '处置任务的解封时间，格式：13位的时间戳。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1700031183572',
                    ),
                    'ProcessStrategyUuid' => 
                    array (
                      'title' => '关联的策略ID',
                      'description' => '关联的策略ID。',
                      'type' => 'string',
                      'example' => '92af3c79-1754-4646-9366-9ddbd1e45536_xxxx',
                    ),
                    'Source' => 
                    array (
                      'description' => '处置任务的提交来源。',
                      'type' => 'string',
                      'example' => 'system',
                    ),
                    'ErrCode' => 
                    array (
                      'description' => '错误码。',
                      'type' => 'string',
                      'example' => 'sts_openapi.Info.DefenseSceneNotSupported',
                    ),
                    'ErrMsg' => 
                    array (
                      'description' => '错误信息。',
                      'type' => 'string',
                      'example' => 'ParamError : The parameters of your request are invalid',
                    ),
                    'ErrTip' => 
                    array (
                      'description' => '错误提示。',
                      'type' => 'string',
                      'example' => 'Verify that the input parameters of the components are correct',
                    ),
                  ),
                ),
              ),
              'Page' => 
              array (
                'description' => '页面显示的信息。',
                'type' => 'object',
                'properties' => 
                array (
                  'TotalCount' => 
                  array (
                    'description' => '查询到的信息总数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '30',
                  ),
                  'PageNumber' => 
                  array (
                    'description' => '分页查询时，当前页的页码。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '1',
                  ),
                  'PageSize' => 
                  array (
                    'description' => '分页查询时，每页显示的条目数量。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '10',
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
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"E7698CFB-4E1C-5840-8EC9-691B86729E94\\",\\n  \\"ProcessTasks\\": [\\n    {\\n      \\"TaskId\\": \\"150xxxxxxxxx95066\\",\\n      \\"Creator\\": \\"123xxxx355\\",\\n      \\"GmtCreateMillis\\": 1700031183572,\\n      \\"GmtModifiedMillis\\": 1700031183572,\\n      \\"YunCode\\": \\"WAF\\",\\n      \\"EntityName\\": \\"1.1.1.x\\",\\n      \\"EntityType\\": \\"ip\\",\\n      \\"TaskStatus\\": 11,\\n      \\"Scope\\": \\"123xxxxx234\\",\\n      \\"InputParams\\": \\"{\\\\\\"groupuuid\\\\\\":\\\\\\"c6a9b1df-f4ac-4078-bef4-99xxxxxx\\\\\\"}\\",\\n      \\"SceneCode\\": \\"event_xxx_whole_process\\",\\n      \\"SceneName\\": \\"waf_whole_process\\",\\n      \\"ProcessTime\\": 1700031183572,\\n      \\"RemoveTime\\": 1700031183572,\\n      \\"ProcessStrategyUuid\\": \\"92af3c79-1754-4646-9366-9ddbd1e45536_xxxx\\",\\n      \\"Source\\": \\"system\\",\\n      \\"ErrCode\\": \\"sts_openapi.Info.DefenseSceneNotSupported\\",\\n      \\"ErrMsg\\": \\"ParamError : The parameters of your request are invalid\\",\\n      \\"ErrTip\\": \\"Verify that the input parameters of the components are correct\\"\\n    }\\n  ],\\n  \\"Page\\": {\\n    \\"TotalCount\\": 30,\\n    \\"PageNumber\\": 1,\\n    \\"PageSize\\": 10\\n  }\\n}","type":"json"}]',
      'title' => '获取处置任务列表',
    ),
    'TriggerProcessTask' => 
    array (
      'summary' => '用户在使用响应编排的功能进行事件处置时，处置中心会生成相应的处置任务，该接口用于对生成的处置任务执行后续的解除封禁、重试封禁、解除隔离等动作。',
      'methods' => 
      array (
        0 => 'post',
      ),
      'schemes' => 
      array (
        0 => 'https',
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
        'operationType' => 'create',
        'riskType' => 'high',
        'chargeType' => 'free',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskId',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '处置任务的唯一标识。
>调用[DescribeProcessTasks](~~DescribeProcessTasks~~)接口可以获取该参数。',
            'type' => 'string',
            'required' => true,
            'example' => '15355xxxxxx82894882',
          ),
        ),
        1 => 
        array (
          'name' => 'ActionType',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '处置类型',
            'description' => '处置动作的类型，取值如下：

- **remove**：表示解除封禁或隔离
- **retry**：表示重新提交任务',
            'type' => 'string',
            'required' => true,
            'example' => 'remove',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'SophonResult<Void>',
            'description' => '返回信息。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '接口请求的requestId',
                'description' => '本次调用请求的ID，是由阿里云为该请求生成的唯一标识符，可用于排查和定位问题。',
                'type' => 'string',
                'example' => '58A518BC-E4A8-5BD7-AFEA-366046ED9073',
              ),
            ),
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"58A518BC-E4A8-5BD7-AFEA-366046ED9073\\"\\n}","type":"json"}]',
      'title' => '执行处置动作',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'public',
      'endpoint' => 'sophonsoar.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'sophonsoar.ap-southeast-1.aliyuncs.com',
    ),
  ),
);
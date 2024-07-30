<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'RPC',
        'product' => 'fnf',
        'version' => '2019-03-15',
    ],
    'directories' => [
        [
            'id' => 121154,
            'title' => '流程',
            'type' => 'directory',
            'children' => [
                'CreateFlow',
                'DeleteFlow',
                'UpdateFlow',
                'DescribeFlow',
                'ListFlows',
            ],
        ],
        [
            'id' => 186068,
            'title' => '执行',
            'type' => 'directory',
            'children' => [
                'StartExecution',
                'StopExecution',
                'DescribeExecution',
                'ListExecutions',
                'GetExecutionHistory',
                'StartSyncExecution',
            ],
        ],
        [
            'id' => 121148,
            'title' => '任务',
            'type' => 'directory',
            'children' => [
                'ReportTaskFailed',
                'ReportTaskSucceeded',
            ],
        ],
        [
            'id' => 121162,
            'title' => '定时调度',
            'type' => 'directory',
            'children' => [
                'CreateSchedule',
                'DeleteSchedule',
                'UpdateSchedule',
                'DescribeSchedule',
                'ListSchedules',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'CreateFlow' => [
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
                'abilityTreeCode' => '98854',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'Definition',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '旧版：'."\n"
                            .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                            ."\n"
                            .'新版：'."\n"
                            .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程描述。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my test flow',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程类型，取值：**FDL**。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'enumValueTitles' => [
                            'FDL' => '流程描述语言',
                        ],
                        'example' => 'FDL',
                    ],
                ],
                [
                    'name' => 'RoleArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，Serverless 工作流服务扮演该角色（AssumeRole）操作相关的流程资源。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram:${region}:${accountID}:${role}',
                    ],
                ],
                [
                    'name' => 'ExternalStorageLocation',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '外部存储位置。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '/path',
                    ],
                ],
                [
                    'name' => 'ExecutionMode',
                    'in' => 'formData',
                    'schema' => [
                        'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                        'description' => '执行模式，枚举类型，可以是Express和Standard；考虑到向前兼容，空串等价于Standard 执行模式。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Express' => '快速执行模式',
                            'Standard' => '标准执行模式',
                        ],
                        'example' => 'Standard',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '流程类型。',
                                'type' => 'string',
                                'enumValueTitles' => [
                                    'FDL' => '流程描述语言',
                                ],
                                'example' => 'FDL',
                            ],
                            'Definition' => [
                                'description' => '流程定义，考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                                'type' => 'string',
                                'example' => '旧版：'."\n"
                                    .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                    ."\n"
                                    .'新版：'."\n"
                                    .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                            ],
                            'RoleArn' => [
                                'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，Serverless 工作流服务扮演该角色（AssumeRole）操作相关的流程资源。',
                                'type' => 'string',
                                'example' => 'acs:ram:${region}:${accountID}:${role}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。当有`http status code`返回时，Serverless工作流都会返回请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestID',
                            ],
                            'Description' => [
                                'description' => '流程描述信息。',
                                'type' => 'string',
                                'example' => 'my test flow',
                            ],
                            'Name' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'CreatedTime' => [
                                'description' => '流程创建时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'LastModifiedTime' => [
                                'description' => '流程最近一次的更改时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'Id' => [
                                'description' => '流程的唯一标识。',
                                'type' => 'string',
                                'example' => 'e589e092-e2c0-4dee-b306-3574ddfdddf5****',
                            ],
                            'ExecutionMode' => [
                                'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                                'description' => '执行模式，枚举类型，可以是Express和Standard，考虑到向前兼容，该字段可能为空字符串，这种情况等价于Standard模式。',
                                'type' => 'string',
                                'example' => 'Standard',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'FlowAlreadyExists',
                        'errorMessage' => 'Flow %s already exists.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"FDL\\",\\n  \\"Definition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"RoleArn\\": \\"acs:ram:${region}:${accountID}:${role}\\",\\n  \\"RequestId\\": \\"testRequestID\\",\\n  \\"Description\\": \\"my test flow\\",\\n  \\"Name\\": \\"my_flow_name\\",\\n  \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddfdddf5****\\",\\n  \\"ExecutionMode\\": \\"Standard\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '创建一个流程',
            'summary' => '创建一个流程。',
            'description' => '## 接口说明'."\n"
                .'- 每个用户所能创建的流程个数受资源限制（详见[使用限制](~~122093~~)），如果您有特殊需求，可以提工单进行调整。'."\n"
                .'- 流程在用户级别是按照名称来区分的，即单一账号下不可以存在同名流程。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DeleteFlow' => [
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
                'abilityTreeCode' => '98856',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '要删除的流程名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrentUpdateError',
                        'errorMessage' => 'Update conflict, please retry.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除一个已存在的流程',
            'summary' => '删除一个已存在的流程。',
            'description' => '## 接口说明'."\n"
                .'删除动作为异步删除，API调用成功后您将收到成功的返回。待删除后您重新建立的同名流程不会受到历史的流程影响。删除流程后，所有的历史执行信息将无法再查询，处于执行中的每个执行将会完成最近的一个步骤后停止。',
        ],
        'UpdateFlow' => [
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
                'abilityTreeCode' => '98869',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '已创建的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'Definition',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '旧版：'."\n"
                            .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                            ."\n"
                            .'新版：'."\n"
                            .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my test flow',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程类型，取值：**FDL**。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'FDL',
                    ],
                ],
                [
                    'name' => 'RoleArn',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，流程执行引擎扮演该角色（AssumeRole）调用相关的流程资源API。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'acs:ram:${region}:${accountID}:${role}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '流程类型。',
                                'type' => 'string',
                                'example' => 'FDL',
                            ],
                            'Definition' => [
                                'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                                'type' => 'string',
                                'example' => '旧版：'."\n"
                                    .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                    ."\n"
                                    .'新版：'."\n"
                                    .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                            ],
                            'RoleArn' => [
                                'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，流程执行引擎扮演该角色（AssumeRole）调用相关的流程资源API。',
                                'type' => 'string',
                                'example' => 'acs:ram:${region}:${accountID}:${role}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestID',
                            ],
                            'Description' => [
                                'description' => '流程描述。',
                                'type' => 'string',
                                'example' => 'my test flow',
                            ],
                            'ExternalStorageLocation' => [
                                'description' => '外部存储位置。',
                                'type' => 'string',
                                'example' => '/path',
                            ],
                            'Name' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'CreatedTime' => [
                                'description' => '流程创建时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'LastModifiedTime' => [
                                'description' => '流程最近一次的更改时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'Id' => [
                                'description' => '流程的唯一ID。',
                                'type' => 'string',
                                'example' => 'e589e092-e2c0-4dee-b306-3574ddfdddf5****',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrentUpdateError',
                        'errorMessage' => 'Update conflict, please retry.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"FDL\\",\\n  \\"Definition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"RoleArn\\": \\"acs:ram:${region}:${accountID}:${role}\\",\\n  \\"RequestId\\": \\"testRequestID\\",\\n  \\"Description\\": \\"my test flow\\",\\n  \\"ExternalStorageLocation\\": \\"/path\\",\\n  \\"Name\\": \\"my_flow_name\\",\\n  \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddfdddf5****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新一个已有流程',
            'summary' => '更新一个流程的内容。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'DescribeFlow' => [
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
                'abilityTreeCode' => '98859',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Type' => [
                                'description' => '流程类型。',
                                'type' => 'string',
                                'example' => 'FDL',
                            ],
                            'Definition' => [
                                'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                                'type' => 'string',
                                'example' => '旧版：'."\n"
                                    .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                    ."\n"
                                    .'新版：'."\n"
                                    .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                            ],
                            'RoleArn' => [
                                'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，Serverless 工作流服务扮演该角色（AssumeRole）操作相关的流程资源。',
                                'type' => 'string',
                                'example' => 'acs:ram:${region}:${accountID}:${role}',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Description' => [
                                'description' => '流程描述。',
                                'type' => 'string',
                                'example' => 'my test flow',
                            ],
                            'Name' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'CreatedTime' => [
                                'description' => '流程创建时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'LastModifiedTime' => [
                                'description' => '流程最近一次的更改时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'Id' => [
                                'description' => '流程的唯一ID。',
                                'type' => 'string',
                                'example' => 'e589e092-e2c0-4dee-b306-3574ddfdddf5****',
                            ],
                            'ExecutionMode' => [
                                'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                                'description' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                                'type' => 'string',
                                'example' => 'Standard',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"FDL\\",\\n  \\"Definition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"RoleArn\\": \\"acs:ram:${region}:${accountID}:${role}\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"my test flow\\",\\n  \\"Name\\": \\"my_flow_name\\",\\n  \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddfdddf5****\\",\\n  \\"ExecutionMode\\": \\"Standard\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取一个流程的相关信息',
            'summary' => '获取一个流程的相关信息。',
        ],
        'ListFlows' => [
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
                'abilityTreeCode' => '98863',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程查询开始名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flow_nextxxx',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数量。取值范围\\[1,1000]。',
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
                        'description' => '流程列表。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下次查询起始Key，如果没有其他数据则不返回。',
                                'type' => 'string',
                                'example' => 'flow_nextxxx',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Flows' => [
                                'description' => '流程列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '流程列表。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '流程类型。',
                                            'type' => 'string',
                                            'example' => 'FDL',
                                        ],
                                        'Definition' => [
                                            'description' => '流程定义，遵循FDL语法标准。',
                                            'type' => 'string',
                                            'example' => 'version: v1.0\\ntype: flow\\nname: test\\nsteps:\\n - type: pass\\n name: mypass',
                                        ],
                                        'RoleArn' => [
                                            'description' => '流程执行所需资源描述符信息。',
                                            'type' => 'string',
                                            'example' => 'acs:ram::${accountID}:${role}',
                                        ],
                                        'Description' => [
                                            'description' => '流程描述。',
                                            'type' => 'string',
                                            'example' => 'my test flow',
                                        ],
                                        'Name' => [
                                            'description' => '流程名称。',
                                            'type' => 'string',
                                            'example' => 'my_flow_name',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '流程创建时间。',
                                            'type' => 'string',
                                            'example' => '2019-01-01T01:01:01.001Z',
                                        ],
                                        'LastModifiedTime' => [
                                            'description' => '流程最后更改时间。',
                                            'type' => 'string',
                                            'example' => '2019-01-01T01:01:01.001Z',
                                        ],
                                        'Id' => [
                                            'description' => '流程的唯一ID。',
                                            'type' => 'string',
                                            'example' => 'e589e092-e2c0-4dee-b306-3574ddf5****',
                                        ],
                                        'ExecutionMode' => [
                                            'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                                            'description' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                                            'type' => 'string',
                                            'example' => 'Standard',
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
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"flow_nextxxx\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Flows\\": [\\n    {\\n      \\"Type\\": \\"FDL\\",\\n      \\"Definition\\": \\"version: v1.0\\\\\\\\ntype: flow\\\\\\\\nname: test\\\\\\\\nsteps:\\\\\\\\n - type: pass\\\\\\\\n name: mypass\\",\\n      \\"RoleArn\\": \\"acs:ram::${accountID}:${role}\\",\\n      \\"Description\\": \\"my test flow\\",\\n      \\"Name\\": \\"my_flow_name\\",\\n      \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddf5****\\",\\n      \\"ExecutionMode\\": \\"Standard\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '批量查询流程信息',
            'summary' => '批量查询流程信息。',
        ],
        'StartExecution' => [
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
                'abilityTreeCode' => '98867',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始执行的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ExecutionName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行名称，在同一流程内唯一。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_exec_name',
                    ],
                ],
                [
                    'name' => 'Input',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行的输入，为JSON对象格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key":"value"}',
                    ],
                ],
                [
                    'name' => 'CallbackFnFTaskToken',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '流程执行结束后回调**TaskToken**相关任务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '12',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '执行状态。取值说明如下：'."\n"
                                    .'- **Starting**'."\n"
                                    .'- **Running**'."\n"
                                    .'- **Stopped**'."\n"
                                    .'- **Succeeded**'."\n"
                                    .'- **Failed**'."\n"
                                    .'- **TimedOut**',
                                'type' => 'string',
                                'example' => 'Succeeded',
                            ],
                            'StoppedTime' => [
                                'description' => '执行停止时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'StartedTime' => [
                                'description' => '执行开始时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'FlowDefinition' => [
                                'description' => '执行的流程定义。',
                                'type' => 'string',
                                'example' => '旧版：'."\n"
                                    .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                    ."\n"
                                    .'新版：'."\n"
                                    .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                            ],
                            'Output' => [
                                'description' => '执行的输出，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                            'FlowName' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'Name' => [
                                'description' => '执行名称。',
                                'type' => 'string',
                                'example' => 'my_exec_name',
                            ],
                            'Input' => [
                                'description' => '执行的输入，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'ExecutionAlreadyExists',
                        'errorMessage' => 'Execution %s for flow %s already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name\\",\\n  \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '异步调用开始一个流程的执行',
            'summary' => '开始一个流程的执行。',
            'description' => '## 接口说明'."\n"
                .'- 流程必须已经存在，当前仅支持 Standard 执行模式的流程。'."\n"
                .'- 如果没有指定执行名称，则服务会自动生成执行名称并开始执行。'."\n"
                .'- 如果有同名执行正在进行，则不会开始新的执行，直接返回正在进行中的同名执行。'."\n"
                .'- 如果同名执行已经结束（成功或者失败），则会返回`ExecutionAlreadyExists`。'."\n"
                .'- 如果没有同名执行，则开始新的执行。',
        ],
        'StopExecution' => [
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
                'abilityTreeCode' => '98868',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要停止的流程名称，可以通过**ListFlows**的返回值获取。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ExecutionName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '需要停止的执行名称，可以通过**ListExecutions**的返回值获取。在同一流程内唯一。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_exec_name',
                    ],
                ],
                [
                    'name' => 'Cause',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '停止错误原因。长度为1~4096个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'for test',
                    ],
                ],
                [
                    'name' => 'Error',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '停止错误代码。长度为1~128个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'nill',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '执行状态。取值说明如下：'."\n"
                                    .'- **Starting**'."\n"
                                    .'- **Running**'."\n"
                                    .'- **Stopped**'."\n"
                                    .'- **Succeeded**'."\n"
                                    .'- **Failed**'."\n"
                                    .'- **TimedOut**',
                                'type' => 'string',
                                'example' => 'Running',
                            ],
                            'StoppedTime' => [
                                'description' => '执行停止时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'StartedTime' => [
                                'description' => '执行开始时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'FlowDefinition' => [
                                'description' => '执行的流程定义。',
                                'type' => 'string',
                                'example' => '旧版：'."\n"
                                    .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                    ."\n"
                                    .'新版：'."\n"
                                    .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                            ],
                            'Output' => [
                                'description' => '执行的输出，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                            'FlowName' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'Name' => [
                                'description' => '执行名称。',
                                'type' => 'string',
                                'example' => 'my_exec_name',
                            ],
                            'Input' => [
                                'description' => '执行的输入，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'ExecutionAlreadyCompleted',
                        'errorMessage' => 'Execution \'%s\' for flow \'%s\' has already completed.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ExecutionNotExists',
                        'errorMessage' => 'Execution %s for flow %s does not exist.',
                    ],
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrentUpdateError',
                        'errorMessage' => 'Update conflict, please retry.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Running\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name\\",\\n  \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<StopExecutionResponse>\\n    <Status>Running</Status>\\n    <StoppedTime>2019-01-01T01:01:01.001Z</StoppedTime>\\n    <RequestId>testRequestId</RequestId>\\n    <StartedTime>2019-01-01T01:01:01.001Z</StartedTime>\\n    <FlowDefinition>version: v1.0\\\\ntype: flow\\\\nname: test\\\\nsteps:\\\\n - type: pass\\\\n name: mypass</FlowDefinition>\\n    <Output>{\\"key\\":\\"value\\"}</Output>\\n    <FlowName>flow</FlowName>\\n    <Name>exec</Name>\\n    <Input>{\\"key\\":\\"value\\"}</Input>\\n</StopExecutionResponse>","errorExample":""}]',
            'title' => '停止一个正在执行的流程',
            'summary' => '停止一个正在执行的流程。',
            'description' => '## 接口说明'."\n"
                .'流程必须为执行中。',
        ],
        'DescribeExecution' => [
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
                'abilityTreeCode' => '98858',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ExecutionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行名称，在同一流程内唯一。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_exec_name',
                    ],
                ],
                [
                    'name' => 'WaitTimeSeconds',
                    'in' => 'query',
                    'schema' => [
                        'description' => '请求长轮询的最长等待时间。取值范围\\[0,60]，单位为秒。取值说明如下：'."\n"
                            .'- 取值等于0：请求立即返回当前执行状态。'."\n"
                            .'- 取值大于0：请求在服务端长轮询等待执行结束，最长等待设定的秒数。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'Status' => [
                                'description' => '执行状态。取值说明如下：'."\n"
                                    .'- **Starting**'."\n"
                                    .'- **Running**'."\n"
                                    .'- **Stopped**'."\n"
                                    .'- **Succeeded**'."\n"
                                    .'- **Failed**'."\n"
                                    .'- **TimedOut**',
                                'type' => 'string',
                                'example' => 'Succeeded',
                            ],
                            'StoppedTime' => [
                                'description' => '执行停止时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'StartedTime' => [
                                'description' => '执行开始时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'FlowDefinition' => [
                                'description' => '执行的流程定义。',
                                'type' => 'string',
                                'example' => '旧版：'."\n"
                                    .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                    ."\n"
                                    .'新版：'."\n"
                                    .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                            ],
                            'Output' => [
                                'description' => '执行的输出，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                            'FlowName' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'Name' => [
                                'description' => '执行名称。',
                                'type' => 'string',
                                'example' => 'my_exec_name',
                            ],
                            'Input' => [
                                'description' => '执行的输入，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ExecutionNotExists',
                        'errorMessage' => 'Execution %s for flow %s does not exist.',
                    ],
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name\\",\\n  \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取一次执行的状态信息',
            'summary' => '获取一次执行的状态信息，支持长轮询模式，长轮询最长等待时间由 WaitTimeSeconds 参数指定。',
        ],
        'ListExecutions' => [
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
                'abilityTreeCode' => '98862',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行查询开始名称，根据本接口返回获取。首次查询非必填。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flow_xxx',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数量。取值范围\\[1,100]。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '1',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要过滤的执行状态。取值说明如下：'."\n"
                            .'- **Starting**'."\n"
                            .'- **Running**'."\n"
                            .'- **Stopped**'."\n"
                            .'- **Succeeded**'."\n"
                            .'- **Failed**'."\n"
                            .'- **TimedOut**',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Succeeded',
                    ],
                ],
                [
                    'name' => 'StartedTimeBegin',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选某个执行的起始时间后的所有执行，格式为UTC RFC3339。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-12-02T02:39:20.402Z',
                    ],
                ],
                [
                    'name' => 'StartedTimeEnd',
                    'in' => 'query',
                    'schema' => [
                        'description' => '筛选某个执行的起始时间前的所有执行，格式为UTC RFC3339。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '2020-12-02T02:23:54.817Z',
                    ],
                ],
                [
                    'name' => 'ExecutionNamePrefix',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行的名称前缀。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'run',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下个查询起始Key，如无其他数据则不返回。',
                                'type' => 'string',
                                'example' => 'exec2',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Executions' => [
                                'description' => '执行信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '执行信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Status' => [
                                            'description' => '执行的状态。',
                                            'type' => 'string',
                                            'example' => 'Succeeded',
                                        ],
                                        'StoppedTime' => [
                                            'description' => '执行停止时间。',
                                            'type' => 'string',
                                            'example' => '2019-01-01T01:01:01.001Z',
                                        ],
                                        'StartedTime' => [
                                            'description' => '执行开始时间。',
                                            'type' => 'string',
                                            'example' => '2019-01-01T01:01:01.001Z',
                                        ],
                                        'FlowDefinition' => [
                                            'description' => '执行的流程定义。',
                                            'type' => 'string',
                                            'example' => '旧版：'."\n"
                                                .'"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"'."\n"
                                                ."\n"
                                                .'新版：'."\n"
                                                .'"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                                        ],
                                        'Output' => [
                                            'description' => '执行的输出，为JSON对象格式。',
                                            'type' => 'string',
                                            'example' => '{"key":"value"}',
                                        ],
                                        'FlowName' => [
                                            'description' => '流程名称。',
                                            'type' => 'string',
                                            'example' => 'my_flow_name',
                                        ],
                                        'Name' => [
                                            'description' => '执行名称。',
                                            'type' => 'string',
                                            'example' => 'my_exec_name',
                                        ],
                                        'Input' => [
                                            'description' => '执行的输入，为JSON对象格式。',
                                            'type' => 'string',
                                            'example' => '{"key":"value"}',
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
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"exec2\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Executions\\": [\\n    {\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n      \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n      \\"FlowName\\": \\"my_flow_name\\",\\n      \\"Name\\": \\"my_exec_name\\",\\n      \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取一个流程的历史执行',
            'summary' => '获取一个流程的所有历史执行。',
            'description' => '## 接口说明'."\n"
                ."\n"
                .'当您删除流程后，即便后续创建了同名流程，系统将不再支持查询原流程所有的执行历史。',
            'requestParamsDescription' => ' ',
            'responseParamsDescription' => ' ',
            'extraInfo' => ' ',
        ],
        'GetExecutionHistory' => [
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
                'operationType' => 'create',
                'abilityTreeCode' => '98861',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ExecutionName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '执行名称，在同一流程内唯一。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_exec_name',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => 'Event查询开始名称，根据本接口返回获取。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flow_xxx',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数量。取值范围\\[1,1000]。',
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
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '首次查询非必填，该字段是以返回的**ScheduleEventId**作为下次查询的Token；无数据时，该字段不返回。',
                                'type' => 'string',
                                'example' => '3',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Events' => [
                                'description' => '事件信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '事件信息。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'description' => '执行步骤类型。取值说明如下：'."\n"
                                                .'- **StepEntered**'."\n"
                                                .'- **StepStarted**'."\n"
                                                .'- **StepSucceeded**'."\n"
                                                .'- **StepFailed**'."\n"
                                                .'- **StepExited**'."\n"
                                                .'- **BranchEntered**'."\n"
                                                .'- **BranchExited**'."\n"
                                                .'- **IterationEntered**'."\n"
                                                .'- **IterationExited**'."\n"
                                                .'- **TaskScheduled**'."\n"
                                                .'- **TaskStarted**'."\n"
                                                .'- **TaskSubmitted**'."\n"
                                                .'- **TaskSubmitFailed**'."\n"
                                                .'- **TaskSucceeded**'."\n"
                                                .'- **TaskFailed**'."\n"
                                                .'- **TaskTimedOut**'."\n"
                                                .'- **ExecutionStarted**'."\n"
                                                .'- **ExecutionStopped**'."\n"
                                                .'- **ExecutionSucceeded**'."\n"
                                                .'- **ExecutionFailed**'."\n"
                                                .'- **ExecutionTimedOut**',
                                            'type' => 'string',
                                            'example' => 'TaskSucceeded',
                                        ],
                                        'EventId' => [
                                            'description' => '执行步骤ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '2',
                                        ],
                                        'Time' => [
                                            'description' => '事件更新时间。',
                                            'type' => 'string',
                                            'example' => '2019-01-01T01:01:01.001Z',
                                        ],
                                        'ScheduleEventId' => [
                                            'description' => '调度步骤ID。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '1',
                                        ],
                                        'EventDetail' => [
                                            'description' => '执行步骤详情。',
                                            'type' => 'string',
                                            'example' => '{}',
                                        ],
                                        'StepName' => [
                                            'description' => '执行步骤名称。',
                                            'type' => 'string',
                                            'example' => 'passStep',
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
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'ExecutionNotExists',
                        'errorMessage' => 'Execution %s for flow %s does not exist.',
                    ],
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"3\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Events\\": [\\n    {\\n      \\"Type\\": \\"TaskSucceeded\\",\\n      \\"EventId\\": 2,\\n      \\"Time\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"ScheduleEventId\\": 1,\\n      \\"EventDetail\\": \\"{}\\",\\n      \\"StepName\\": \\"passStep\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取一次执行的步骤详情',
            'summary' => '获取指定执行过程中的每个步骤详细信息。',
        ],
        'StartSyncExecution' => [
            'summary' => '同步调用开始一个流程的执行。',
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
                'operationType' => 'update',
                'riskType' => 'high',
                'chargeType' => 'paid',
                'abilityTreeCode' => '195751',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '开始执行的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ExecutionName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行名称。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。'."\n"
                            ."\n"
                            .'不同于StartExecution接口，考虑到同步调用的特殊性，在同步执行模式下，不再要求执行名称在同一流程内唯一，调用侧可以选择提供执行名称，对本次执行进行标识，系统会在当前执行名称后添加UUID，具体形式如 {ExecutionName}:{UUID}，如果用户没有指定相关的执行名称信息，那么系统会自动生成标识本次执行的ExecutionName。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my_exec_name',
                    ],
                ],
                [
                    'name' => 'Input',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '执行的输入，为JSON对象格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key":"value"}',
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
                                'example' => 'testRequestId',
                            ],
                            'FlowName' => [
                                'description' => '流程名称。',
                                'type' => 'string',
                                'example' => 'my_flow_name',
                            ],
                            'Name' => [
                                'description' => '流程执行名称。',
                                'type' => 'string',
                                'example' => 'my_exec_name:{UUID}',
                            ],
                            'Status' => [
                                'description' => '执行状态。取值说明如下：'."\n"
                                    .'- **Starting**'."\n"
                                    .'- **Running**'."\n"
                                    .'- **Stopped**'."\n"
                                    .'- **Succeeded**'."\n"
                                    .'- **Failed**'."\n"
                                    .'- **TimedOut**',
                                'type' => 'string',
                                'example' => 'Succeeded',
                            ],
                            'ErrorCode' => [
                                'description' => '执行错误时的错误码。',
                                'type' => 'string',
                                'example' => 'ActionNotSupported',
                            ],
                            'ErrorMessage' => [
                                'description' => '执行超时。',
                                'type' => 'string',
                                'example' => 'Standard execution is not supported',
                            ],
                            'Output' => [
                                'description' => '执行的输出，为JSON对象格式。',
                                'type' => 'string',
                                'example' => '{"key":"value"}',
                            ],
                            'StartedTime' => [
                                'description' => '执行开始时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                            'StoppedTime' => [
                                'description' => '执行停止时间。',
                                'type' => 'string',
                                'example' => '2019-01-01T01:01:01.001Z',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'ExecutionAlreadyExists',
                        'errorMessage' => 'Execution %s for flow %s already exists.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation %s is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version %s is not supported yet. Please check.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources does not belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name:{UUID}\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"ErrorCode\\": \\"ActionNotSupported\\",\\n  \\"ErrorMessage\\": \\"Standard execution is not supported\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\"\\n}","type":"json"}]',
            'title' => '同步调用开始一个流程的执行',
            'description' => '- 仅支持 Express 执行模式的流程。',
        ],
        'ReportTaskFailed' => [
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
                'operationType' => 'get',
                'abilityTreeCode' => '98865',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TaskToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '汇报任务指定的令牌。TaskToken会传递给被调用的服务，比如消息队列MNS或函数计算FC。对于MNS，用户可以从接收到的消息中获取，对于FC，用户可以从Event中获取。'."\n"
                            .'详情请参见[服务集成模式](~~2592915~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'djEjYSNkZTdkYWZjMi0zMGRlLTRlMDMtOTA2OC0yMTMxYmM5NGJlZTIjNSMvV1ZHYks3RTc0WUsra25nQTNYSmtFa0t6****',
                    ],
                ],
                [
                    'name' => 'Error',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '失败错误代码。长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'nill',
                    ],
                ],
                [
                    'name' => 'Cause',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '失败错误原因。长度为1~4096个字符。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'emptyString',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'EventId' => [
                                'description' => '事件ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'TaskAlreadyCompleted',
                        'errorMessage' => 'Task %s has already completed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'TaskInvalidState',
                        'errorMessage' => 'Task is in an invalid state, please retry.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EventId\\": 1,\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '汇报指定的任务执行失败',
            'summary' => '汇报指定的任务执行失败。',
            'description' => '## 接口说明'."\n"
                .'在旧版Serverless 工作流中，使用该接口回调`pattern: waitForCallback`的任务步骤，表明当前任务执行失败。'."\n"
                ."\n"
                .'在新版云工作流中，使用该接口回调`TaskMode: WaitForCustomCallback`的任务步骤，表明当前任务执行失败。',
        ],
        'ReportTaskSucceeded' => [
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
                'operationType' => 'get',
                'abilityTreeCode' => '98866',
                'abilityTreeNodes' => [
                    'FEATUREfnf8CPMA5',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'TaskToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '汇报任务指定的令牌。TaskToken会传递给被调用的服务，比如消息队列MNS或函数计算FC。对于MNS，用户可以从接收到的消息中获取，对于FC，用户可以从Event中获取。详情请参见[服务集成模式](~~2592915~~)。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'djEjYSNkZTdkYWZjMi0zMGRlLTRlMDMtOTA2OC0yMTMxYmM5NGJlZTIjNSMvV1ZHYks3RTc0WUsra25nQTNYSmtFa0t6U****',
                    ],
                ],
                [
                    'name' => 'Output',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '汇报任务指定的输出信息。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '{"key":"value"}',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'EventId' => [
                                'description' => '事件ID。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '1',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'EntityTooLarge',
                        'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'TaskAlreadyCompleted',
                        'errorMessage' => 'Task %s has already completed.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                    [
                        'errorCode' => 'InvalidAccessKeyID',
                        'errorMessage' => 'The AccessKey ID %s is invalid.',
                    ],
                    [
                        'errorCode' => 'RequestTimeTooSkewed',
                        'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
                    ],
                    [
                        'errorCode' => 'SignatureNotMatch',
                        'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'TaskInvalidState',
                        'errorMessage' => 'Task is in an invalid state, please retry.',
                    ],
                ],
                415 => [
                    [
                        'errorCode' => 'UnsupportedMediaType',
                        'errorMessage' => 'The content type must be "application/json".',
                    ],
                ],
                429 => [
                    [
                        'errorCode' => 'ResourceThrottled',
                        'errorMessage' => 'The request is throttled. Please try again later.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"EventId\\": 1,\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '汇报指定的任务执行成功',
            'summary' => '汇报指定的任务执行成功。',
            'description' => '## 接口说明'."\n"
                .'在旧版Serverless 工作流中，使用该接口回调pattern: waitForCallback的任务步骤，表明当前任务执行成功。'."\n"
                ."\n"
                .'在新版云工作流中，使用该接口回调TaskMode: WaitForCustomCallback的任务步骤，表明当前任务执行成功。',
        ],
        'CreateSchedule' => [
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
                'abilityTreeCode' => '98855',
                'abilityTreeNodes' => [
                    'FEATUREfnf06LH4G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度绑定的工作流名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ScheduleName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度的名称。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_schedule_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my test schedule',
                    ],
                ],
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度的触发消息，必须为JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key": "value"}',
                    ],
                ],
                [
                    'name' => 'CronExpression',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Cron表达式。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => '0 * * * * *',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用定时调度。取值说明如下：'."\n"
                            .'- **true**：启用。'."\n"
                            .'- **false**：禁用。'."\n",
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
                [
                    'name' => 'SignatureVersion',
                    'in' => 'query',
                    'schema' => [
                        'type' => 'string',
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Description' => [
                                'description' => '定时调度的描述。',
                                'type' => 'string',
                                'example' => 'test description',
                            ],
                            'ScheduleId' => [
                                'description' => '定时调度的ID。',
                                'type' => 'string',
                                'example' => 'testScheduleId',
                            ],
                            'Payload' => [
                                'description' => '定时调度的触发消息。',
                                'type' => 'string',
                                'example' => '{"key": "value"}',
                            ],
                            'ScheduleName' => [
                                'description' => '定时调度的名称。',
                                'type' => 'string',
                                'example' => 'testScheduleName',
                            ],
                            'CreatedTime' => [
                                'description' => '定时调度的创建时间。',
                                'type' => 'string',
                                'example' => '2020-01-01T01:01:01.001Z',
                            ],
                            'LastModifiedTime' => [
                                'description' => '定时调度最近一次的更改时间。',
                                'type' => 'string',
                                'example' => '2020-01-01T01:01:01.001Z',
                            ],
                            'CronExpression' => [
                                'description' => 'Cron表达式。',
                                'type' => 'string',
                                'example' => '0 * * * * *',
                            ],
                            'Enable' => [
                                'description' => '是否启用定时调度。',
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
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrentUpdateError',
                        'errorMessage' => 'Update conflict, please retry.',
                    ],
                    [
                        'errorCode' => 'ScheduleAlreadyExists',
                        'errorMessage' => 'The schedule %s already exists in flow %s.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"test description\\",\\n  \\"ScheduleId\\": \\"testScheduleId\\",\\n  \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n  \\"ScheduleName\\": \\"testScheduleName\\",\\n  \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"CronExpression\\": \\"0 * * * * *\\",\\n  \\"Enable\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '创建一个定时调度',
            'summary' => '创建一个定时调度。',
        ],
        'DeleteSchedule' => [
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
                'abilityTreeCode' => '98857',
                'abilityTreeNodes' => [
                    'FEATUREfnf06LH4G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待删除调度任务绑定的流程名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'flow',
                    ],
                ],
                [
                    'name' => 'ScheduleName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '待删除调度的名称。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'testScheduleName',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                        ],
                    ],
                ],
            ],
            'errorCodes' => [
                400 => [
                    [
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                    [
                        'errorCode' => 'ScheduleNotExists',
                        'errorMessage' => 'The schedule %s for flow %s does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrentUpdateError',
                        'errorMessage' => 'Update conflict, please retry.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '删除一个定时调度',
            'summary' => '删除一个定时调度。',
        ],
        'UpdateSchedule' => [
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
                'abilityTreeCode' => '98870',
                'abilityTreeNodes' => [
                    'FEATUREfnf06LH4G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度绑定的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'ScheduleName',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度的名称。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_schedule_name',
                    ],
                ],
                [
                    'name' => 'Description',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度的描述。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'my test schedule',
                    ],
                ],
                [
                    'name' => 'Payload',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '定时调度的触发消息，必须为JSON格式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '{"key": "value"}',
                    ],
                ],
                [
                    'name' => 'CronExpression',
                    'in' => 'formData',
                    'schema' => [
                        'description' => 'Cron表达式。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '0 * * * * *',
                    ],
                ],
                [
                    'name' => 'Enable',
                    'in' => 'formData',
                    'schema' => [
                        'description' => '是否启用定时调度。取值说明如下：'."\n"
                            .'- **true**：启用。'."\n"
                            .'- **false**：禁用。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'true',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Description' => [
                                'description' => '定时调度的描述。',
                                'type' => 'string',
                                'example' => 'my test schedule',
                            ],
                            'ScheduleId' => [
                                'description' => '定时调度的ID。',
                                'type' => 'string',
                                'example' => 'testScheduleId',
                            ],
                            'Payload' => [
                                'description' => '定时调度的触发消息。',
                                'type' => 'string',
                                'example' => '{"key": "value"}',
                            ],
                            'ScheduleName' => [
                                'description' => '定时调度的名称。',
                                'type' => 'string',
                                'example' => 'my_schedule_name',
                            ],
                            'CreatedTime' => [
                                'description' => '定时调度的创建时间。',
                                'type' => 'string',
                                'example' => '2020-01-01T01:01:01.001Z',
                            ],
                            'LastModifiedTime' => [
                                'description' => '定时调度最近一次的更新时间。',
                                'type' => 'string',
                                'example' => '2020-01-01T01:01:01.001Z',
                            ],
                            'CronExpression' => [
                                'description' => 'Cron表达式。',
                                'type' => 'string',
                                'example' => '0 * * * * *',
                            ],
                            'Enable' => [
                                'description' => '是否启用定时调度。取值说明如下：'."\n"
                                    .'- **true**：启用。'."\n"
                                    .'- **false**：禁用。',
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
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                    [
                        'errorCode' => 'ScheduleNotExists',
                        'errorMessage' => 'The schedule %s for flow %s does not exist.',
                    ],
                ],
                409 => [
                    [
                        'errorCode' => 'ConcurrentUpdateError',
                        'errorMessage' => 'Update conflict, please retry.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"my test schedule\\",\\n  \\"ScheduleId\\": \\"testScheduleId\\",\\n  \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n  \\"ScheduleName\\": \\"my_schedule_name\\",\\n  \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"CronExpression\\": \\"0 * * * * *\\",\\n  \\"Enable\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '更新一个定时调度',
            'summary' => '更新一个定时调度。',
        ],
        'DescribeSchedule' => [
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
                'abilityTreeCode' => '98860',
                'abilityTreeNodes' => [
                    'FEATUREfnf06LH4G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时调度绑定的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_test_flow',
                    ],
                ],
                [
                    'name' => 'ScheduleName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时调度的名称。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_schedule_name',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Description' => [
                                'description' => '定时调度的描述。',
                                'type' => 'string',
                                'example' => 'test description',
                            ],
                            'ScheduleId' => [
                                'description' => '定时调度的ID。',
                                'type' => 'string',
                                'example' => 'testScheduleId',
                            ],
                            'Payload' => [
                                'description' => '定时调度的触发消息。',
                                'type' => 'string',
                                'example' => '{"key": "value"}',
                            ],
                            'ScheduleName' => [
                                'description' => '定时调度的名称。',
                                'type' => 'string',
                                'example' => 'my_schedule_name',
                            ],
                            'CreatedTime' => [
                                'description' => '定时调度的创建时间。',
                                'type' => 'string',
                                'example' => '2020-01-01T01:01:01.001Z',
                            ],
                            'LastModifiedTime' => [
                                'description' => '定时调度最近一次的更改时间。',
                                'type' => 'string',
                                'example' => '2020-01-01T01:01:01.001Z',
                            ],
                            'CronExpression' => [
                                'description' => 'Cron表达式。',
                                'type' => 'string',
                                'example' => '0 * * * * *',
                            ],
                            'Enable' => [
                                'description' => '是否启用定时调度。取值说明如下：'."\n"
                                    .'- **true**：启用。'."\n"
                                    .'- **false**：禁用。',
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
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                    [
                        'errorCode' => 'ScheduleNotExists',
                        'errorMessage' => 'The schedule %s for flow %s does not exist.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"test description\\",\\n  \\"ScheduleId\\": \\"testScheduleId\\",\\n  \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n  \\"ScheduleName\\": \\"my_schedule_name\\",\\n  \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"CronExpression\\": \\"0 * * * * *\\",\\n  \\"Enable\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取一个定时调度',
            'summary' => '获取一个定时调度信息。',
        ],
        'ListSchedules' => [
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
                'abilityTreeCode' => '98864',
                'abilityTreeNodes' => [
                    'FEATUREfnf06LH4G',
                ],
            ],
            'parameters' => [
                [
                    'name' => 'FlowName',
                    'in' => 'query',
                    'schema' => [
                        'description' => '定时调度绑定的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：'."\n"
                            ."\n"
                            .'- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。'."\n"
                            .'- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。'."\n"
                            .'- 区分大小写。'."\n"
                            .'- 长度为1~128个字符。',
                        'type' => 'string',
                        'required' => true,
                        'docRequired' => true,
                        'example' => 'my_flow_name',
                    ],
                ],
                [
                    'name' => 'NextToken',
                    'in' => 'query',
                    'schema' => [
                        'description' => '首次查询非必填，**NextToken**是以**FlowName**作为下次查询的Token，无下一页数据时，该字段不返回。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testNextToken',
                    ],
                ],
                [
                    'name' => 'Limit',
                    'in' => 'query',
                    'schema' => [
                        'description' => '查询数量。取值范围\\[1,1000]。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'docRequired' => false,
                        'maximum' => '1000',
                        'minimum' => '1',
                        'example' => '1',
                        'default' => '60',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回数据。',
                        'type' => 'object',
                        'properties' => [
                            'NextToken' => [
                                'description' => '下一次查询的开始Token。',
                                'type' => 'string',
                                'example' => 'testNextToken',
                            ],
                            'RequestId' => [
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'testRequestId',
                            ],
                            'Schedules' => [
                                'description' => '定时调度信息。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '定时调度信息。'."\n",
                                    'type' => 'object',
                                    'properties' => [
                                        'Description' => [
                                            'description' => '定时调度的描述。',
                                            'type' => 'string',
                                            'example' => 'test description',
                                        ],
                                        'ScheduleId' => [
                                            'description' => '定时调度的ID。',
                                            'type' => 'string',
                                            'example' => 'testScheduleId',
                                        ],
                                        'Payload' => [
                                            'description' => '定时调度的触发消息。',
                                            'type' => 'string',
                                            'example' => '{"key": "value"}',
                                        ],
                                        'ScheduleName' => [
                                            'description' => '定时调度的名称。',
                                            'type' => 'string',
                                            'example' => 'my_schedule_name',
                                        ],
                                        'CreatedTime' => [
                                            'description' => '定时调度的创建时间。',
                                            'type' => 'string',
                                            'example' => '2020-01-01T01:01:01.001Z',
                                        ],
                                        'LastModifiedTime' => [
                                            'description' => '定时调度最近一次的更改时间。',
                                            'type' => 'string',
                                            'example' => '2020-01-01T01:01:01.001Z',
                                        ],
                                        'CronExpression' => [
                                            'description' => 'Cron表达式。',
                                            'type' => 'string',
                                            'example' => '0 * * * * *',
                                        ],
                                        'Enable' => [
                                            'description' => '是否启用定时调度。取值说明如下：'."\n"
                                                .'- **true**：启用。'."\n"
                                                .'- **false**：禁用。',
                                            'type' => 'boolean',
                                            'example' => 'true',
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
                        'errorCode' => 'ActionNotSupported',
                        'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
                    ],
                    [
                        'errorCode' => 'APIVersionNotSupported',
                        'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
                    ],
                    [
                        'errorCode' => 'InvalidArgument',
                        'errorMessage' => 'Parameter error.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredHeader',
                        'errorMessage' => 'The HTTP header \'%s\' must be specified.',
                    ],
                    [
                        'errorCode' => 'MissingRequiredParams',
                        'errorMessage' => 'The HTTP query \'%s\' must be specified.',
                    ],
                ],
                403 => [
                    [
                        'errorCode' => 'AccessDenied',
                        'errorMessage' => 'The resources doesn\'t belong to you.',
                    ],
                ],
                [
                    [
                        'errorCode' => 'FlowNotExists',
                        'errorMessage' => 'Flow  %s does not exist.',
                    ],
                ],
                412 => [
                    [
                        'errorCode' => 'PreconditionFailed',
                        'errorMessage' => 'The resource to be modified has been changed.',
                    ],
                ],
                500 => [
                    [
                        'errorCode' => 'InternalServerError',
                        'errorMessage' => 'An internal error has occurred. Please retry.',
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"testNextToken\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Schedules\\": [\\n    {\\n      \\"Description\\": \\"test description\\",\\n      \\"ScheduleId\\": \\"testScheduleId\\",\\n      \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n      \\"ScheduleName\\": \\"my_schedule_name\\",\\n      \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n      \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n      \\"CronExpression\\": \\"0 * * * * *\\",\\n      \\"Enable\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取定时调度列表',
            'summary' => '获取定时调度列表。',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-qingdao',
            'endpoint' => 'cn-qingdao.fnf.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'cn-beijing.fnf.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'cn-hangzhou.fnf.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'cn-shanghai.fnf.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'cn-shenzhen.fnf.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'ap-southeast-1.fnf.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'us-west-1.fnf.aliyuncs.com',
        ],
    ],
];
<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'RPC',
    'product' => 'fnf',
    'version' => '2019-03-15',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 121154,
      'title' => '流程',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateFlow',
        1 => 'DeleteFlow',
        2 => 'UpdateFlow',
        3 => 'DescribeFlow',
        4 => 'ListFlows',
      ),
    ),
    1 => 
    array (
      'id' => 186068,
      'title' => '执行',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'StartExecution',
        1 => 'StopExecution',
        2 => 'DescribeExecution',
        3 => 'ListExecutions',
        4 => 'GetExecutionHistory',
        5 => 'StartSyncExecution',
      ),
    ),
    2 => 
    array (
      'id' => 121148,
      'title' => '任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'ReportTaskFailed',
        1 => 'ReportTaskSucceeded',
      ),
    ),
    3 => 
    array (
      'id' => 121162,
      'title' => '定时调度',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreateSchedule',
        1 => 'DeleteSchedule',
        2 => 'UpdateSchedule',
        3 => 'DescribeSchedule',
        4 => 'ListSchedules',
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
    'CreateFlow' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '98854',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Definition',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程描述。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my test flow',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程类型，取值：**FDL**。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'enumValueTitles' => 
            array (
              'FDL' => '流程描述语言',
            ),
            'example' => 'FDL',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，Serverless 工作流服务扮演该角色（AssumeRole）操作相关的流程资源。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram:${region}:${accountID}:${role}',
          ),
        ),
        5 => 
        array (
          'name' => 'ExternalStorageLocation',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '外部存储位置。',
            'type' => 'string',
            'required' => false,
            'example' => '/path',
          ),
        ),
        6 => 
        array (
          'name' => 'ExecutionMode',
          'in' => 'formData',
          'schema' => 
          array (
            'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
            'description' => '执行模式，枚举类型，可以是Express和Standard；考虑到向前兼容，空串等价于Standard 执行模式。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Express' => '快速执行模式',
              'Standard' => '标准执行模式',
            ),
            'example' => 'Standard',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '流程类型。',
                'type' => 'string',
                'enumValueTitles' => 
                array (
                  'FDL' => '流程描述语言',
                ),
                'example' => 'FDL',
              ),
              'Definition' => 
              array (
                'description' => '流程定义，考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                'type' => 'string',
                'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
              ),
              'RoleArn' => 
              array (
                'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，Serverless 工作流服务扮演该角色（AssumeRole）操作相关的流程资源。',
                'type' => 'string',
                'example' => 'acs:ram:${region}:${accountID}:${role}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。当有`http status code`返回时，Serverless工作流都会返回请求ID。',
                'type' => 'string',
                'example' => 'testRequestID',
              ),
              'Description' => 
              array (
                'description' => '流程描述信息。',
                'type' => 'string',
                'example' => 'my test flow',
              ),
              'Name' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'CreatedTime' => 
              array (
                'description' => '流程创建时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'LastModifiedTime' => 
              array (
                'description' => '流程最近一次的更改时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'Id' => 
              array (
                'description' => '流程的唯一标识。',
                'type' => 'string',
                'example' => 'e589e092-e2c0-4dee-b306-3574ddfdddf5****',
              ),
              'ExecutionMode' => 
              array (
                'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                'description' => '执行模式，枚举类型，可以是Express和Standard，考虑到向前兼容，该字段可能为空字符串，这种情况等价于Standard模式。',
                'type' => 'string',
                'example' => 'Standard',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowAlreadyExists',
            'errorMessage' => 'Flow %s already exists.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"FDL\\",\\n  \\"Definition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"RoleArn\\": \\"acs:ram:${region}:${accountID}:${role}\\",\\n  \\"RequestId\\": \\"testRequestID\\",\\n  \\"Description\\": \\"my test flow\\",\\n  \\"Name\\": \\"my_flow_name\\",\\n  \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddfdddf5****\\",\\n  \\"ExecutionMode\\": \\"Standard\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建一个流程',
      'summary' => '创建一个流程。',
      'description' => '## 接口说明
- 每个用户所能创建的流程个数受资源限制（详见[使用限制](~~122093~~)），如果您有特殊需求，可以提工单进行调整。
- 流程在用户级别是按照名称来区分的，即单一账号下不可以存在同名流程。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DeleteFlow' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '98856',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '要删除的流程名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentUpdateError',
            'errorMessage' => 'Update conflict, please retry.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除一个已存在的流程',
      'summary' => '删除一个已存在的流程。',
      'description' => '## 接口说明
删除动作为异步删除，API调用成功后您将收到成功的返回。待删除后您重新建立的同名流程不会受到历史的流程影响。删除流程后，所有的历史执行信息将无法再查询，处于执行中的每个执行将会完成最近的一个步骤后停止。',
    ),
    'UpdateFlow' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '98869',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '已创建的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'Definition',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
            'type' => 'string',
            'required' => false,
            'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'my test flow',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程类型，取值：**FDL**。',
            'type' => 'string',
            'required' => false,
            'example' => 'FDL',
          ),
        ),
        4 => 
        array (
          'name' => 'RoleArn',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，流程执行引擎扮演该角色（AssumeRole）调用相关的流程资源API。',
            'type' => 'string',
            'required' => false,
            'example' => 'acs:ram:${region}:${accountID}:${role}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '流程类型。',
                'type' => 'string',
                'example' => 'FDL',
              ),
              'Definition' => 
              array (
                'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                'type' => 'string',
                'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
              ),
              'RoleArn' => 
              array (
                'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，流程执行引擎扮演该角色（AssumeRole）调用相关的流程资源API。',
                'type' => 'string',
                'example' => 'acs:ram:${region}:${accountID}:${role}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestID',
              ),
              'Description' => 
              array (
                'description' => '流程描述。',
                'type' => 'string',
                'example' => 'my test flow',
              ),
              'ExternalStorageLocation' => 
              array (
                'description' => '外部存储位置。',
                'type' => 'string',
                'example' => '/path',
              ),
              'Name' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'CreatedTime' => 
              array (
                'description' => '流程创建时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'LastModifiedTime' => 
              array (
                'description' => '流程最近一次的更改时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'Id' => 
              array (
                'description' => '流程的唯一ID。',
                'type' => 'string',
                'example' => 'e589e092-e2c0-4dee-b306-3574ddfdddf5****',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentUpdateError',
            'errorMessage' => 'Update conflict, please retry.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"FDL\\",\\n  \\"Definition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"RoleArn\\": \\"acs:ram:${region}:${accountID}:${role}\\",\\n  \\"RequestId\\": \\"testRequestID\\",\\n  \\"Description\\": \\"my test flow\\",\\n  \\"ExternalStorageLocation\\": \\"/path\\",\\n  \\"Name\\": \\"my_flow_name\\",\\n  \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddfdddf5****\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新一个已有流程',
      'summary' => '更新一个流程的内容。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'DescribeFlow' => 
    array (
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
        'abilityTreeCode' => '98859',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流程名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Type' => 
              array (
                'description' => '流程类型。',
                'type' => 'string',
                'example' => 'FDL',
              ),
              'Definition' => 
              array (
                'description' => '流程定义，遵循Flow Definition Language (FDL)语法标准。考虑到向前兼容，当系统支持两种规范的流程定义规范。',
                'type' => 'string',
                'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
              ),
              'RoleArn' => 
              array (
                'description' => '流程执行依赖的授权角色资源描述符信息。用于在执行流程时，Serverless 工作流服务扮演该角色（AssumeRole）操作相关的流程资源。',
                'type' => 'string',
                'example' => 'acs:ram:${region}:${accountID}:${role}',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Description' => 
              array (
                'description' => '流程描述。',
                'type' => 'string',
                'example' => 'my test flow',
              ),
              'Name' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'CreatedTime' => 
              array (
                'description' => '流程创建时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'LastModifiedTime' => 
              array (
                'description' => '流程最近一次的更改时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'Id' => 
              array (
                'description' => '流程的唯一ID。',
                'type' => 'string',
                'example' => 'e589e092-e2c0-4dee-b306-3574ddfdddf5****',
              ),
              'ExecutionMode' => 
              array (
                'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                'description' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                'type' => 'string',
                'example' => 'Standard',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Type\\": \\"FDL\\",\\n  \\"Definition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"RoleArn\\": \\"acs:ram:${region}:${accountID}:${role}\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"my test flow\\",\\n  \\"Name\\": \\"my_flow_name\\",\\n  \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddfdddf5****\\",\\n  \\"ExecutionMode\\": \\"Standard\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一个流程的相关信息',
      'summary' => '获取一个流程的相关信息。',
    ),
    'ListFlows' => 
    array (
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
        'abilityTreeCode' => '98863',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流程查询开始名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'flow_nextxxx',
          ),
        ),
        1 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量。取值范围\\[1,1000]。',
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
            'description' => '流程列表。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下次查询起始Key，如果没有其他数据则不返回。',
                'type' => 'string',
                'example' => 'flow_nextxxx',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Flows' => 
              array (
                'description' => '流程列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '流程列表。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '流程类型。',
                      'type' => 'string',
                      'example' => 'FDL',
                    ),
                    'Definition' => 
                    array (
                      'description' => '流程定义，遵循FDL语法标准。',
                      'type' => 'string',
                      'example' => 'version: v1.0\\ntype: flow\\nname: test\\nsteps:\\n - type: pass\\n name: mypass',
                    ),
                    'RoleArn' => 
                    array (
                      'description' => '流程执行所需资源描述符信息。',
                      'type' => 'string',
                      'example' => 'acs:ram::${accountID}:${role}',
                    ),
                    'Description' => 
                    array (
                      'description' => '流程描述。',
                      'type' => 'string',
                      'example' => 'my test flow',
                    ),
                    'Name' => 
                    array (
                      'description' => '流程名称。',
                      'type' => 'string',
                      'example' => 'my_flow_name',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '流程创建时间。',
                      'type' => 'string',
                      'example' => '2019-01-01T01:01:01.001Z',
                    ),
                    'LastModifiedTime' => 
                    array (
                      'description' => '流程最后更改时间。',
                      'type' => 'string',
                      'example' => '2019-01-01T01:01:01.001Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '流程的唯一ID。',
                      'type' => 'string',
                      'example' => 'e589e092-e2c0-4dee-b306-3574ddf5****',
                    ),
                    'ExecutionMode' => 
                    array (
                      'title' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                      'description' => '执行模式，枚举类型，可以是Express和Standard，空串等价于Standard',
                      'type' => 'string',
                      'example' => 'Standard',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"flow_nextxxx\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Flows\\": [\\n    {\\n      \\"Type\\": \\"FDL\\",\\n      \\"Definition\\": \\"version: v1.0\\\\\\\\ntype: flow\\\\\\\\nname: test\\\\\\\\nsteps:\\\\\\\\n - type: pass\\\\\\\\n name: mypass\\",\\n      \\"RoleArn\\": \\"acs:ram::${accountID}:${role}\\",\\n      \\"Description\\": \\"my test flow\\",\\n      \\"Name\\": \\"my_flow_name\\",\\n      \\"CreatedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"LastModifiedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"Id\\": \\"e589e092-e2c0-4dee-b306-3574ddf5****\\",\\n      \\"ExecutionMode\\": \\"Standard\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '批量查询流程信息',
      'summary' => '批量查询流程信息。',
    ),
    'StartExecution' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '98867',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始执行的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ExecutionName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行名称，在同一流程内唯一。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_exec_name',
          ),
        ),
        2 => 
        array (
          'name' => 'Input',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行的输入，为JSON对象格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key":"value"}',
          ),
        ),
        3 => 
        array (
          'name' => 'CallbackFnFTaskToken',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '流程执行结束后回调**TaskToken**相关任务。',
            'type' => 'string',
            'required' => false,
            'example' => '12',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '执行状态。取值说明如下：
- **Starting**
- **Running**
- **Stopped**
- **Succeeded**
- **Failed**
- **TimedOut**',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'StoppedTime' => 
              array (
                'description' => '执行停止时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'StartedTime' => 
              array (
                'description' => '执行开始时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'FlowDefinition' => 
              array (
                'description' => '执行的流程定义。',
                'type' => 'string',
                'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
              ),
              'Output' => 
              array (
                'description' => '执行的输出，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
              'FlowName' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'Name' => 
              array (
                'description' => '执行名称。',
                'type' => 'string',
                'example' => 'my_exec_name',
              ),
              'Input' => 
              array (
                'description' => '执行的输入，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'ExecutionAlreadyExists',
            'errorMessage' => 'Execution %s for flow %s already exists.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name\\",\\n  \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '异步调用开始一个流程的执行',
      'summary' => '开始一个流程的执行。',
      'description' => '## 接口说明
- 流程必须已经存在，当前仅支持 Standard 执行模式的流程。
- 如果没有指定执行名称，则服务会自动生成执行名称并开始执行。
- 如果有同名执行正在进行，则不会开始新的执行，直接返回正在进行中的同名执行。
- 如果同名执行已经结束（成功或者失败），则会返回`ExecutionAlreadyExists`。
- 如果没有同名执行，则开始新的执行。',
    ),
    'StopExecution' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '98868',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要停止的流程名称，可以通过**ListFlows**的返回值获取。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。

',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ExecutionName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '需要停止的执行名称，可以通过**ListExecutions**的返回值获取。在同一流程内唯一。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_exec_name',
          ),
        ),
        2 => 
        array (
          'name' => 'Cause',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '停止错误原因。长度为1~4096个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'for test',
          ),
        ),
        3 => 
        array (
          'name' => 'Error',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '停止错误代码。长度为1~128个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'nill',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '执行状态。取值说明如下：
- **Starting**
- **Running**
- **Stopped**
- **Succeeded**
- **Failed**
- **TimedOut**',
                'type' => 'string',
                'example' => 'Running',
              ),
              'StoppedTime' => 
              array (
                'description' => '执行停止时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'StartedTime' => 
              array (
                'description' => '执行开始时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'FlowDefinition' => 
              array (
                'description' => '执行的流程定义。',
                'type' => 'string',
                'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
              ),
              'Output' => 
              array (
                'description' => '执行的输出，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
              'FlowName' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'Name' => 
              array (
                'description' => '执行名称。',
                'type' => 'string',
                'example' => 'my_exec_name',
              ),
              'Input' => 
              array (
                'description' => '执行的输入，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'ExecutionAlreadyCompleted',
            'errorMessage' => 'Execution \'%s\' for flow \'%s\' has already completed.',
          ),
          4 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          6 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ExecutionNotExists',
            'errorMessage' => 'Execution %s for flow %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentUpdateError',
            'errorMessage' => 'Update conflict, please retry.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Running\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name\\",\\n  \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"<StopExecutionResponse>\\n    <Status>Running</Status>\\n    <StoppedTime>2019-01-01T01:01:01.001Z</StoppedTime>\\n    <RequestId>testRequestId</RequestId>\\n    <StartedTime>2019-01-01T01:01:01.001Z</StartedTime>\\n    <FlowDefinition>version: v1.0\\\\ntype: flow\\\\nname: test\\\\nsteps:\\\\n - type: pass\\\\n name: mypass</FlowDefinition>\\n    <Output>{\\"key\\":\\"value\\"}</Output>\\n    <FlowName>flow</FlowName>\\n    <Name>exec</Name>\\n    <Input>{\\"key\\":\\"value\\"}</Input>\\n</StopExecutionResponse>","errorExample":""}]',
      'title' => '停止一个正在执行的流程',
      'summary' => '停止一个正在执行的流程。',
      'description' => '## 接口说明
流程必须为执行中。',
    ),
    'DescribeExecution' => 
    array (
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
        'abilityTreeCode' => '98858',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ExecutionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行名称，在同一流程内唯一。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_exec_name',
          ),
        ),
        2 => 
        array (
          'name' => 'WaitTimeSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '请求长轮询的最长等待时间。取值范围\\[0,60]，单位为秒。取值说明如下：
- 取值等于0：请求立即返回当前执行状态。
- 取值大于0：请求在服务端长轮询等待执行结束，最长等待设定的秒数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'Status' => 
              array (
                'description' => '执行状态。取值说明如下：
- **Starting**
- **Running**
- **Stopped**
- **Succeeded**
- **Failed**
- **TimedOut**',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'StoppedTime' => 
              array (
                'description' => '执行停止时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'StartedTime' => 
              array (
                'description' => '执行开始时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'FlowDefinition' => 
              array (
                'description' => '执行的流程定义。',
                'type' => 'string',
                'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
              ),
              'Output' => 
              array (
                'description' => '执行的输出，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
              'FlowName' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'Name' => 
              array (
                'description' => '执行名称。',
                'type' => 'string',
                'example' => 'my_exec_name',
              ),
              'Input' => 
              array (
                'description' => '执行的输入，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          1 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
          3 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          4 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          5 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          2 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
          3 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ExecutionNotExists',
            'errorMessage' => 'Execution %s for flow %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name\\",\\n  \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一次执行的状态信息',
      'summary' => '获取一次执行的状态信息，支持长轮询模式，长轮询最长等待时间由 WaitTimeSeconds 参数指定。',
    ),
    'ListExecutions' => 
    array (
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
        'abilityTreeCode' => '98862',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行查询开始名称，根据本接口返回获取。首次查询非必填。',
            'type' => 'string',
            'required' => false,
            'example' => 'flow_xxx',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量。取值范围\\[1,100]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        3 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要过滤的执行状态。取值说明如下：
- **Starting**
- **Running**
- **Stopped**
- **Succeeded**
- **Failed**
- **TimedOut**',
            'type' => 'string',
            'required' => false,
            'example' => 'Succeeded',
          ),
        ),
        4 => 
        array (
          'name' => 'StartedTimeBegin',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选某个执行的起始时间后的所有执行，格式为UTC RFC3339。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-12-02T02:39:20.402Z',
          ),
        ),
        5 => 
        array (
          'name' => 'StartedTimeEnd',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '筛选某个执行的起始时间前的所有执行，格式为UTC RFC3339。',
            'type' => 'string',
            'required' => false,
            'example' => '2020-12-02T02:23:54.817Z',
          ),
        ),
        6 => 
        array (
          'name' => 'ExecutionNamePrefix',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行的名称前缀。',
            'type' => 'string',
            'required' => false,
            'example' => 'run',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下个查询起始Key，如无其他数据则不返回。',
                'type' => 'string',
                'example' => 'exec2',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Executions' => 
              array (
                'description' => '执行信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '执行信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Status' => 
                    array (
                      'description' => '执行的状态。',
                      'type' => 'string',
                      'example' => 'Succeeded',
                    ),
                    'StoppedTime' => 
                    array (
                      'description' => '执行停止时间。',
                      'type' => 'string',
                      'example' => '2019-01-01T01:01:01.001Z',
                    ),
                    'StartedTime' => 
                    array (
                      'description' => '执行开始时间。',
                      'type' => 'string',
                      'example' => '2019-01-01T01:01:01.001Z',
                    ),
                    'FlowDefinition' => 
                    array (
                      'description' => '执行的流程定义。',
                      'type' => 'string',
                      'example' => '旧版：
"type: flow\\nversion: v1\\nname: my_flow_name\\nsteps:\\n  - type: pass\\n    name: mypass"

新版：
"Type: StateMachine\\nSpecVersion: v1\\nName: my_flow_name\\nStartAt: my_state\\nStates:\\n  - Type: Pass\\n    Name: my_state\\n    End: true"',
                    ),
                    'Output' => 
                    array (
                      'description' => '执行的输出，为JSON对象格式。',
                      'type' => 'string',
                      'example' => '{"key":"value"}',
                    ),
                    'FlowName' => 
                    array (
                      'description' => '流程名称。',
                      'type' => 'string',
                      'example' => 'my_flow_name',
                    ),
                    'Name' => 
                    array (
                      'description' => '执行名称。',
                      'type' => 'string',
                      'example' => 'my_exec_name',
                    ),
                    'Input' => 
                    array (
                      'description' => '执行的输入，为JSON对象格式。',
                      'type' => 'string',
                      'example' => '{"key":"value"}',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"exec2\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Executions\\": [\\n    {\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"FlowDefinition\\": \\"旧版：\\\\n\\\\\\"type: flow\\\\\\\\nversion: v1\\\\\\\\nname: my_flow_name\\\\\\\\nsteps:\\\\\\\\n  - type: pass\\\\\\\\n    name: mypass\\\\\\"\\\\n\\\\n新版：\\\\n\\\\\\"Type: StateMachine\\\\\\\\nSpecVersion: v1\\\\\\\\nName: my_flow_name\\\\\\\\nStartAt: my_state\\\\\\\\nStates:\\\\\\\\n  - Type: Pass\\\\\\\\n    Name: my_state\\\\\\\\n    End: true\\\\\\"\\",\\n      \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n      \\"FlowName\\": \\"my_flow_name\\",\\n      \\"Name\\": \\"my_exec_name\\",\\n      \\"Input\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一个流程的历史执行',
      'summary' => '获取一个流程的所有历史执行。',
      'description' => '## 接口说明

当您删除流程后，即便后续创建了同名流程，系统将不再支持查询原流程所有的执行历史。',
      'requestParamsDescription' => ' ',
      'responseParamsDescription' => ' ',
      'extraInfo' => ' ',
    ),
    'GetExecutionHistory' => 
    array (
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
        'operationType' => 'create',
        'abilityTreeCode' => '98861',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ExecutionName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '执行名称，在同一流程内唯一。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_exec_name',
          ),
        ),
        2 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => 'Event查询开始名称，根据本接口返回获取。',
            'type' => 'string',
            'required' => false,
            'example' => 'flow_xxx',
          ),
        ),
        3 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量。取值范围\\[1,1000]。',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '首次查询非必填，该字段是以返回的**ScheduleEventId**作为下次查询的Token；无数据时，该字段不返回。',
                'type' => 'string',
                'example' => '3',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Events' => 
              array (
                'description' => '事件信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '事件信息。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'description' => '执行步骤类型。取值说明如下：
- **StepEntered**
- **StepStarted**
- **StepSucceeded**
- **StepFailed**
- **StepExited**
- **BranchEntered**
- **BranchExited**
- **IterationEntered**
- **IterationExited**
- **TaskScheduled**
- **TaskStarted**
- **TaskSubmitted**
- **TaskSubmitFailed**
- **TaskSucceeded**
- **TaskFailed**
- **TaskTimedOut**
- **ExecutionStarted**
- **ExecutionStopped**
- **ExecutionSucceeded**
- **ExecutionFailed**
- **ExecutionTimedOut**',
                      'type' => 'string',
                      'example' => 'TaskSucceeded',
                    ),
                    'EventId' => 
                    array (
                      'description' => '执行步骤ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '2',
                    ),
                    'Time' => 
                    array (
                      'description' => '事件更新时间。',
                      'type' => 'string',
                      'example' => '2019-01-01T01:01:01.001Z',
                    ),
                    'ScheduleEventId' => 
                    array (
                      'description' => '调度步骤ID。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '1',
                    ),
                    'EventDetail' => 
                    array (
                      'description' => '执行步骤详情。',
                      'type' => 'string',
                      'example' => '{}',
                    ),
                    'StepName' => 
                    array (
                      'description' => '执行步骤名称。',
                      'type' => 'string',
                      'example' => 'passStep',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'ExecutionNotExists',
            'errorMessage' => 'Execution %s for flow %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"3\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Events\\": [\\n    {\\n      \\"Type\\": \\"TaskSucceeded\\",\\n      \\"EventId\\": 2,\\n      \\"Time\\": \\"2019-01-01T01:01:01.001Z\\",\\n      \\"ScheduleEventId\\": 1,\\n      \\"EventDetail\\": \\"{}\\",\\n      \\"StepName\\": \\"passStep\\"\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一次执行的步骤详情',
      'summary' => '获取指定执行过程中的每个步骤详细信息。',
    ),
    'StartSyncExecution' => 
    array (
      'summary' => '同步调用开始一个流程的执行。',
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
        'operationType' => 'update',
        'riskType' => 'high',
        'chargeType' => 'paid',
        'abilityTreeCode' => '195751',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '开始执行的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ExecutionName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行名称。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。

不同于StartExecution接口，考虑到同步调用的特殊性，在同步执行模式下，不再要求执行名称在同一流程内唯一，调用侧可以选择提供执行名称，对本次执行进行标识，系统会在当前执行名称后添加UUID，具体形式如 {ExecutionName}:{UUID}，如果用户没有指定相关的执行名称信息，那么系统会自动生成标识本次执行的ExecutionName。',
            'type' => 'string',
            'required' => false,
            'example' => 'my_exec_name',
          ),
        ),
        2 => 
        array (
          'name' => 'Input',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '执行的输入，为JSON对象格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key":"value"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'FlowName' => 
              array (
                'description' => '流程名称。',
                'type' => 'string',
                'example' => 'my_flow_name',
              ),
              'Name' => 
              array (
                'description' => '流程执行名称。',
                'type' => 'string',
                'example' => 'my_exec_name:{UUID}',
              ),
              'Status' => 
              array (
                'description' => '执行状态。取值说明如下：
- **Starting**
- **Running**
- **Stopped**
- **Succeeded**
- **Failed**
- **TimedOut**',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'ErrorCode' => 
              array (
                'description' => '执行错误时的错误码。',
                'type' => 'string',
                'example' => 'ActionNotSupported',
              ),
              'ErrorMessage' => 
              array (
                'description' => '执行超时。',
                'type' => 'string',
                'example' => 'Standard execution is not supported',
              ),
              'Output' => 
              array (
                'description' => '执行的输出，为JSON对象格式。',
                'type' => 'string',
                'example' => '{"key":"value"}',
              ),
              'StartedTime' => 
              array (
                'description' => '执行开始时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
              'StoppedTime' => 
              array (
                'description' => '执行停止时间。',
                'type' => 'string',
                'example' => '2019-01-01T01:01:01.001Z',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          1 => 
          array (
            'errorCode' => 'ExecutionAlreadyExists',
            'errorMessage' => 'Execution %s for flow %s already exists.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation %s is incorrect. Please check.',
          ),
          6 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version %s is not supported yet. Please check.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          1 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          2 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
          3 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources does not belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"FlowName\\": \\"my_flow_name\\",\\n  \\"Name\\": \\"my_exec_name:{UUID}\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"ErrorCode\\": \\"ActionNotSupported\\",\\n  \\"ErrorMessage\\": \\"Standard execution is not supported\\",\\n  \\"Output\\": \\"{\\\\\\"key\\\\\\":\\\\\\"value\\\\\\"}\\",\\n  \\"StartedTime\\": \\"2019-01-01T01:01:01.001Z\\",\\n  \\"StoppedTime\\": \\"2019-01-01T01:01:01.001Z\\"\\n}","type":"json"}]',
      'title' => '同步调用开始一个流程的执行',
      'description' => '- 仅支持 Express 执行模式的流程。',
    ),
    'ReportTaskFailed' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '98865',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '汇报任务指定的令牌。TaskToken会传递给被调用的服务，比如消息队列MNS或函数计算FC。对于MNS，用户可以从接收到的消息中获取，对于FC，用户可以从Event中获取。
详情请参见[服务集成模式](~~2592915~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'djEjYSNkZTdkYWZjMi0zMGRlLTRlMDMtOTA2OC0yMTMxYmM5NGJlZTIjNSMvV1ZHYks3RTc0WUsra25nQTNYSmtFa0t6****',
          ),
        ),
        1 => 
        array (
          'name' => 'Error',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '失败错误代码。长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'nill',
          ),
        ),
        2 => 
        array (
          'name' => 'Cause',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '失败错误原因。长度为1~4096个字符。',
            'type' => 'string',
            'required' => false,
            'example' => 'emptyString',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
          6 => 
          array (
            'errorCode' => 'TaskAlreadyCompleted',
            'errorMessage' => 'Task %s has already completed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskInvalidState',
            'errorMessage' => 'Task is in an invalid state, please retry.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EventId\\": 1,\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '汇报指定的任务执行失败',
      'summary' => '汇报指定的任务执行失败。',
      'description' => '## 接口说明
在旧版Serverless 工作流中，使用该接口回调`pattern: waitForCallback`的任务步骤，表明当前任务执行失败。

在新版云工作流中，使用该接口回调`TaskMode: WaitForCustomCallback`的任务步骤，表明当前任务执行失败。',
    ),
    'ReportTaskSucceeded' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'systemTags' => 
      array (
        'operationType' => 'get',
        'abilityTreeCode' => '98866',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf8CPMA5',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'TaskToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '汇报任务指定的令牌。TaskToken会传递给被调用的服务，比如消息队列MNS或函数计算FC。对于MNS，用户可以从接收到的消息中获取，对于FC，用户可以从Event中获取。详情请参见[服务集成模式](~~2592915~~)。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'djEjYSNkZTdkYWZjMi0zMGRlLTRlMDMtOTA2OC0yMTMxYmM5NGJlZTIjNSMvV1ZHYks3RTc0WUsra25nQTNYSmtFa0t6U****',
          ),
        ),
        1 => 
        array (
          'name' => 'Output',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '汇报任务指定的输出信息。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '{"key":"value"}',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'EventId' => 
              array (
                'description' => '事件ID。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '1',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'EntityTooLarge',
            'errorMessage' => 'The payload size exceeds maximum allowed size (%s bytes).',
          ),
          3 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          5 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
          6 => 
          array (
            'errorCode' => 'TaskAlreadyCompleted',
            'errorMessage' => 'Task %s has already completed.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidAccessKeyID',
            'errorMessage' => 'The AccessKey ID %s is invalid.',
          ),
          2 => 
          array (
            'errorCode' => 'RequestTimeTooSkewed',
            'errorMessage' => 'The difference between the request time %s and the current time %s is too large.',
          ),
          3 => 
          array (
            'errorCode' => 'SignatureNotMatch',
            'errorMessage' => 'The request signature we calculated does not match the signature you provided. Check your access key and signing method.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'TaskInvalidState',
            'errorMessage' => 'Task is in an invalid state, please retry.',
          ),
        ),
        415 => 
        array (
          0 => 
          array (
            'errorCode' => 'UnsupportedMediaType',
            'errorMessage' => 'The content type must be "application/json".',
          ),
        ),
        429 => 
        array (
          0 => 
          array (
            'errorCode' => 'ResourceThrottled',
            'errorMessage' => 'The request is throttled. Please try again later.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"EventId\\": 1,\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '汇报指定的任务执行成功',
      'summary' => '汇报指定的任务执行成功。',
      'description' => '## 接口说明
在旧版Serverless 工作流中，使用该接口回调pattern: waitForCallback的任务步骤，表明当前任务执行成功。

在新版云工作流中，使用该接口回调TaskMode: WaitForCustomCallback的任务步骤，表明当前任务执行成功。',
    ),
    'CreateSchedule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'create',
        'abilityTreeCode' => '98855',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf06LH4G',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度绑定的工作流名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ScheduleName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度的名称。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_schedule_name',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度的描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'my test schedule',
          ),
        ),
        3 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度的触发消息，必须为JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key": "value"}',
          ),
        ),
        4 => 
        array (
          'name' => 'CronExpression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Cron表达式。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => '0 * * * * *',
          ),
        ),
        5 => 
        array (
          'name' => 'Enable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启用定时调度。取值说明如下：
- **true**：启用。
- **false**：禁用。
',
            'type' => 'boolean',
            'required' => false,
            'example' => 'true',
          ),
        ),
        6 => 
        array (
          'name' => 'SignatureVersion',
          'in' => 'query',
          'schema' => 
          array (
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Description' => 
              array (
                'description' => '定时调度的描述。',
                'type' => 'string',
                'example' => 'test description',
              ),
              'ScheduleId' => 
              array (
                'description' => '定时调度的ID。',
                'type' => 'string',
                'example' => 'testScheduleId',
              ),
              'Payload' => 
              array (
                'description' => '定时调度的触发消息。',
                'type' => 'string',
                'example' => '{"key": "value"}',
              ),
              'ScheduleName' => 
              array (
                'description' => '定时调度的名称。',
                'type' => 'string',
                'example' => 'testScheduleName',
              ),
              'CreatedTime' => 
              array (
                'description' => '定时调度的创建时间。',
                'type' => 'string',
                'example' => '2020-01-01T01:01:01.001Z',
              ),
              'LastModifiedTime' => 
              array (
                'description' => '定时调度最近一次的更改时间。',
                'type' => 'string',
                'example' => '2020-01-01T01:01:01.001Z',
              ),
              'CronExpression' => 
              array (
                'description' => 'Cron表达式。',
                'type' => 'string',
                'example' => '0 * * * * *',
              ),
              'Enable' => 
              array (
                'description' => '是否启用定时调度。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentUpdateError',
            'errorMessage' => 'Update conflict, please retry.',
          ),
          1 => 
          array (
            'errorCode' => 'ScheduleAlreadyExists',
            'errorMessage' => 'The schedule %s already exists in flow %s.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"test description\\",\\n  \\"ScheduleId\\": \\"testScheduleId\\",\\n  \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n  \\"ScheduleName\\": \\"testScheduleName\\",\\n  \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"CronExpression\\": \\"0 * * * * *\\",\\n  \\"Enable\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '创建一个定时调度',
      'summary' => '创建一个定时调度。',
    ),
    'DeleteSchedule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'delete',
        'abilityTreeCode' => '98857',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf06LH4G',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除调度任务绑定的流程名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'flow',
          ),
        ),
        1 => 
        array (
          'name' => 'ScheduleName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '待删除调度的名称。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'testScheduleName',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ScheduleNotExists',
            'errorMessage' => 'The schedule %s for flow %s does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentUpdateError',
            'errorMessage' => 'Update conflict, please retry.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '删除一个定时调度',
      'summary' => '删除一个定时调度。',
    ),
    'UpdateSchedule' => 
    array (
      'methods' => 
      array (
        0 => 'post',
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
      'operationType' => 'readAndWrite',
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'update',
        'abilityTreeCode' => '98870',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf06LH4G',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度绑定的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'ScheduleName',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度的名称。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_schedule_name',
          ),
        ),
        2 => 
        array (
          'name' => 'Description',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度的描述。',
            'type' => 'string',
            'required' => false,
            'example' => 'my test schedule',
          ),
        ),
        3 => 
        array (
          'name' => 'Payload',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '定时调度的触发消息，必须为JSON格式。',
            'type' => 'string',
            'required' => false,
            'example' => '{"key": "value"}',
          ),
        ),
        4 => 
        array (
          'name' => 'CronExpression',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => 'Cron表达式。',
            'type' => 'string',
            'required' => false,
            'example' => '0 * * * * *',
          ),
        ),
        5 => 
        array (
          'name' => 'Enable',
          'in' => 'formData',
          'schema' => 
          array (
            'description' => '是否启用定时调度。取值说明如下：
- **true**：启用。
- **false**：禁用。',
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
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Description' => 
              array (
                'description' => '定时调度的描述。',
                'type' => 'string',
                'example' => 'my test schedule',
              ),
              'ScheduleId' => 
              array (
                'description' => '定时调度的ID。',
                'type' => 'string',
                'example' => 'testScheduleId',
              ),
              'Payload' => 
              array (
                'description' => '定时调度的触发消息。',
                'type' => 'string',
                'example' => '{"key": "value"}',
              ),
              'ScheduleName' => 
              array (
                'description' => '定时调度的名称。',
                'type' => 'string',
                'example' => 'my_schedule_name',
              ),
              'CreatedTime' => 
              array (
                'description' => '定时调度的创建时间。',
                'type' => 'string',
                'example' => '2020-01-01T01:01:01.001Z',
              ),
              'LastModifiedTime' => 
              array (
                'description' => '定时调度最近一次的更新时间。',
                'type' => 'string',
                'example' => '2020-01-01T01:01:01.001Z',
              ),
              'CronExpression' => 
              array (
                'description' => 'Cron表达式。',
                'type' => 'string',
                'example' => '0 * * * * *',
              ),
              'Enable' => 
              array (
                'description' => '是否启用定时调度。取值说明如下：
- **true**：启用。
- **false**：禁用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          2 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ScheduleNotExists',
            'errorMessage' => 'The schedule %s for flow %s does not exist.',
          ),
        ),
        409 => 
        array (
          0 => 
          array (
            'errorCode' => 'ConcurrentUpdateError',
            'errorMessage' => 'Update conflict, please retry.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"my test schedule\\",\\n  \\"ScheduleId\\": \\"testScheduleId\\",\\n  \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n  \\"ScheduleName\\": \\"my_schedule_name\\",\\n  \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"CronExpression\\": \\"0 * * * * *\\",\\n  \\"Enable\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '更新一个定时调度',
      'summary' => '更新一个定时调度。',
    ),
    'DescribeSchedule' => 
    array (
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
        'abilityTreeCode' => '98860',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf06LH4G',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时调度绑定的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_test_flow',
          ),
        ),
        1 => 
        array (
          'name' => 'ScheduleName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时调度的名称。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_schedule_name',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Description' => 
              array (
                'description' => '定时调度的描述。',
                'type' => 'string',
                'example' => 'test description',
              ),
              'ScheduleId' => 
              array (
                'description' => '定时调度的ID。',
                'type' => 'string',
                'example' => 'testScheduleId',
              ),
              'Payload' => 
              array (
                'description' => '定时调度的触发消息。',
                'type' => 'string',
                'example' => '{"key": "value"}',
              ),
              'ScheduleName' => 
              array (
                'description' => '定时调度的名称。',
                'type' => 'string',
                'example' => 'my_schedule_name',
              ),
              'CreatedTime' => 
              array (
                'description' => '定时调度的创建时间。',
                'type' => 'string',
                'example' => '2020-01-01T01:01:01.001Z',
              ),
              'LastModifiedTime' => 
              array (
                'description' => '定时调度最近一次的更改时间。',
                'type' => 'string',
                'example' => '2020-01-01T01:01:01.001Z',
              ),
              'CronExpression' => 
              array (
                'description' => 'Cron表达式。',
                'type' => 'string',
                'example' => '0 * * * * *',
              ),
              'Enable' => 
              array (
                'description' => '是否启用定时调度。取值说明如下：
- **true**：启用。
- **false**：禁用。',
                'type' => 'boolean',
                'example' => 'true',
              ),
            ),
          ),
        ),
      ),
      'errorCodes' => 
      array (
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
          1 => 
          array (
            'errorCode' => 'ScheduleNotExists',
            'errorMessage' => 'The schedule %s for flow %s does not exist.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Description\\": \\"test description\\",\\n  \\"ScheduleId\\": \\"testScheduleId\\",\\n  \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n  \\"ScheduleName\\": \\"my_schedule_name\\",\\n  \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n  \\"CronExpression\\": \\"0 * * * * *\\",\\n  \\"Enable\\": true\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取一个定时调度',
      'summary' => '获取一个定时调度信息。',
    ),
    'ListSchedules' => 
    array (
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
        'abilityTreeCode' => '98864',
        'abilityTreeNodes' => 
        array (
          0 => 'FEATUREfnf06LH4G',
        ),
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'FlowName',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '定时调度绑定的流程名称。该名称在同一地域内唯一，创建后不可修改。取值说明如下：

- 支持英文字符（a~z）或（A~Z）、数字（0~9）、下划线（_）和短划线（-）。
- 首字母必须为英文字母（a~z）、（A~Z）或下划线（_）。
- 区分大小写。
- 长度为1~128个字符。',
            'type' => 'string',
            'required' => true,
            'docRequired' => true,
            'example' => 'my_flow_name',
          ),
        ),
        1 => 
        array (
          'name' => 'NextToken',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '首次查询非必填，**NextToken**是以**FlowName**作为下次查询的Token，无下一页数据时，该字段不返回。',
            'type' => 'string',
            'required' => false,
            'example' => 'testNextToken',
          ),
        ),
        2 => 
        array (
          'name' => 'Limit',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '查询数量。取值范围\\[1,1000]。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'docRequired' => false,
            'maximum' => '1000',
            'minimum' => '1',
            'example' => '1',
            'default' => '60',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回数据。',
            'type' => 'object',
            'properties' => 
            array (
              'NextToken' => 
              array (
                'description' => '下一次查询的开始Token。',
                'type' => 'string',
                'example' => 'testNextToken',
              ),
              'RequestId' => 
              array (
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'testRequestId',
              ),
              'Schedules' => 
              array (
                'description' => '定时调度信息。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '定时调度信息。
',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Description' => 
                    array (
                      'description' => '定时调度的描述。',
                      'type' => 'string',
                      'example' => 'test description',
                    ),
                    'ScheduleId' => 
                    array (
                      'description' => '定时调度的ID。',
                      'type' => 'string',
                      'example' => 'testScheduleId',
                    ),
                    'Payload' => 
                    array (
                      'description' => '定时调度的触发消息。',
                      'type' => 'string',
                      'example' => '{"key": "value"}',
                    ),
                    'ScheduleName' => 
                    array (
                      'description' => '定时调度的名称。',
                      'type' => 'string',
                      'example' => 'my_schedule_name',
                    ),
                    'CreatedTime' => 
                    array (
                      'description' => '定时调度的创建时间。',
                      'type' => 'string',
                      'example' => '2020-01-01T01:01:01.001Z',
                    ),
                    'LastModifiedTime' => 
                    array (
                      'description' => '定时调度最近一次的更改时间。',
                      'type' => 'string',
                      'example' => '2020-01-01T01:01:01.001Z',
                    ),
                    'CronExpression' => 
                    array (
                      'description' => 'Cron表达式。',
                      'type' => 'string',
                      'example' => '0 * * * * *',
                    ),
                    'Enable' => 
                    array (
                      'description' => '是否启用定时调度。取值说明如下：
- **true**：启用。
- **false**：禁用。',
                      'type' => 'boolean',
                      'example' => 'true',
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
        400 => 
        array (
          0 => 
          array (
            'errorCode' => 'ActionNotSupported',
            'errorMessage' => 'The requested API operation \'%s\' is incorrect. Please check.',
          ),
          1 => 
          array (
            'errorCode' => 'APIVersionNotSupported',
            'errorMessage' => 'The requested API version \'%s\' is not supported yet. Please check.',
          ),
          2 => 
          array (
            'errorCode' => 'InvalidArgument',
            'errorMessage' => 'Parameter error.',
          ),
          3 => 
          array (
            'errorCode' => 'MissingRequiredHeader',
            'errorMessage' => 'The HTTP header \'%s\' must be specified.',
          ),
          4 => 
          array (
            'errorCode' => 'MissingRequiredParams',
            'errorMessage' => 'The HTTP query \'%s\' must be specified.',
          ),
        ),
        403 => 
        array (
          0 => 
          array (
            'errorCode' => 'AccessDenied',
            'errorMessage' => 'The resources doesn\'t belong to you.',
          ),
        ),
        404 => 
        array (
          0 => 
          array (
            'errorCode' => 'FlowNotExists',
            'errorMessage' => 'Flow  %s does not exist.',
          ),
        ),
        412 => 
        array (
          0 => 
          array (
            'errorCode' => 'PreconditionFailed',
            'errorMessage' => 'The resource to be modified has been changed.',
          ),
        ),
        500 => 
        array (
          0 => 
          array (
            'errorCode' => 'InternalServerError',
            'errorMessage' => 'An internal error has occurred. Please retry.',
          ),
        ),
      ),
      'staticInfo' => 
      array (
        'returnType' => 'synchronous',
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"NextToken\\": \\"testNextToken\\",\\n  \\"RequestId\\": \\"testRequestId\\",\\n  \\"Schedules\\": [\\n    {\\n      \\"Description\\": \\"test description\\",\\n      \\"ScheduleId\\": \\"testScheduleId\\",\\n      \\"Payload\\": \\"{\\\\\\"key\\\\\\": \\\\\\"value\\\\\\"}\\",\\n      \\"ScheduleName\\": \\"my_schedule_name\\",\\n      \\"CreatedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n      \\"LastModifiedTime\\": \\"2020-01-01T01:01:01.001Z\\",\\n      \\"CronExpression\\": \\"0 * * * * *\\",\\n      \\"Enable\\": true\\n    }\\n  ]\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取定时调度列表',
      'summary' => '获取定时调度列表。',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-qingdao',
      'endpoint' => 'cn-qingdao.fnf.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'cn-beijing.fnf.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'cn-hangzhou.fnf.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'cn-shanghai.fnf.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'cn-shenzhen.fnf.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'ap-southeast-1.fnf.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'us-west-1.fnf.aliyuncs.com',
    ),
  ),
);
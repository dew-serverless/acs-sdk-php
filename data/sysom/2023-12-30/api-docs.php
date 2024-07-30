<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'SysOM',
        'version' => '2023-12-30',
    ],
    'directories' => [
        'AuthDiagnosis',
        'InvokeDiagnosis',
        'GetDiagnosisResult',
        [
            'id' => 192454,
            'title' => '其他',
            'type' => 'directory',
            'children' => [
                'GenerateCopilotResponse',
            ],
        ],
    ],
    'components' => [
        'schemas' => [],
    ],
    'apis' => [
        'AuthDiagnosis' => [
            'summary' => '本接口用于授权 SysOM 对本账号下的 ECS 实例进行诊断，只有在调用本接口对特定的ECS进行授权后，才可以调用 InvokeDiagnosis 接口对其发起诊断。',
            'path' => '/api/v1/openapi/diagnosis/auth',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'write',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数。',
                        'type' => 'object',
                        'properties' => [
                            'instances' => [
                                'title' => '授权诊断的机器列表',
                                'description' => '授权诊断的机器列表',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'instance' => [
                                            'description' => '实例ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'i-wz9b9vucz1iubsz8sjqo',
                                        ],
                                        'region' => [
                                            'description' => '地域ID。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'cn-hangzhou',
                                        ],
                                    ],
                                    'required' => false,
                                    'example' => 'i-wz9gdv7qmdhntqmc4rjd',
                                ],
                                'required' => true,
                                'docRequired' => true,
                            ],
                        ],
                        'required' => false,
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'title' => 'Id of the request',
                                'description' => '状态码'."\n"
                                    .'- `code == Success` 则代表授权成功；'."\n"
                                    .'- 其它状态码代表授权失败，授权失败时查看 `message` 字段获取详细的错误信息；',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'message' => [
                                'description' => '错误信息'."\n"
                                    .'- 如果 `code == Success`，则本字段为空；'."\n"
                                    .'- 否则本字段包含请求错误信息。',
                                'type' => 'string',
                                'example' => 'SysomOpenAPIAssumeRoleException: EntityNotExist.Role The role not exists: acs:ram::xxxxx:role/aliyunserviceroleforsysom',
                            ],
                            'data' => [
                                'description' => '本接口没有返回数据',
                                'type' => 'any',
                                'example' => '{}',
                            ],
                            'request_id' => [
                                'description' => '请求 RequestId',
                                'type' => 'string',
                                'example' => '35F91AAB-5FDF-5A22-B211-C7C6B00817D0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": \\"Success\\",\\n  \\"message\\": \\"SysomOpenAPIAssumeRoleException: EntityNotExist.Role The role not exists: acs:ram::xxxxx:role/aliyunserviceroleforsysom\\",\\n  \\"data\\": \\"{}\\",\\n  \\"request_id\\": \\"35F91AAB-5FDF-5A22-B211-C7C6B00817D0\\"\\n}","type":"json"}]',
            'title' => '授权诊断',
            'description' => '><notice>诊断功能需要在 RAM 用户下创建服务角色，调用本接口会自定检查服务角色是否创建，如果服务角色不存在则会自动创建，这要求调用本接口的 RAM 用户具有 ram:CreateServiceLinkedRole 权限</notice>'."\n"
                ."\n"
                .'调用本接口授权 SysOM 对 ECS 进行诊断有如下注意事项：'."\n"
                .'- 一次授权有效期为 7 天，7 天之后授权会失效，需要再次调用本接口进行授权；'."\n"
                .'- 调用本接口进行授权时如果SysOM服务关联角色（AliyunServiceRoleForSysom）不存在会自动创建，这要求调用本接口的RAM用户具有 `ram:CreateServiceLinkedRole` 权限。'."\n"
                .'- 调用本接口对特定实例进行授权，会自动给目标ecs实例打上标签 `sysom:diagnosis`，sysom只允许对打了这个标签的实例进行诊断。',
        ],
        'InvokeDiagnosis' => [
            'summary' => '对指定的 ECS 实例发起诊断。',
            'path' => '/api/v1/openapi/diagnosis/invoke_diagnosis',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求体参数',
                        'type' => 'object',
                        'properties' => [
                            'service_name' => [
                                'title' => '诊断类型',
                                'description' => '诊断类型，用于区分不同类型的诊断',
                                'type' => 'string',
                                'required' => true,
                                'docRequired' => true,
                                'enumValueTitles' => [
                                    'iofsstat' => 'IO流量分析',
                                    'jruntime' => 'Java运行时分析',
                                    'oomcheck' => '内存OOM诊断',
                                    'iohang' => 'IO Hang诊断',
                                    'pingtrace' => '网络时延诊断',
                                    'rtdelay' => 'RT时延分析',
                                    'memgraph' => '内存大盘诊断',
                                    'retran' => '网络重传诊断',
                                    'jitter' => '网络抖动诊断',
                                    'iolatency' => 'IO时延分析',
                                    'procdiag' => '应用抖动诊断',
                                    'loadtask' => '系统负载诊断',
                                    'filecache' => '内存Cache分析诊断',
                                    'schedmoni' => '调度抖动诊断',
                                    'packetdrop' => '网络丢包诊断',
                                ],
                                'example' => 'memgraph',
                            ],
                            'channel' => [
                                'title' => '诊断通道，固定为 openapi_cloud_assist',
                                'description' => '诊断通道（目前固定为ecs通道）',
                                'type' => 'string',
                                'required' => true,
                                'enumValueTitles' => [
                                    'ecs' => 'ECS通道',
                                ],
                                'example' => 'ecs',
                            ],
                            'params' => [
                                'description' => '诊断参数，不同类型的诊断要求传递不同的诊断参数，每种诊断所需的参数参见下面的请求参数补充说明。'."\n"
                                    ."\n"
                                    .'><notice>请传递 json 格式的字符串></notice>',
                                'type' => 'string',
                                'required' => true,
                                'example' => '{'."\n"
                                    .'    "instance": "i-wz9gdv7qmdhusamc4dl01",'."\n"
                                    .'    "uid": "xxxxxxxxxxxxxx",'."\n"
                                    .'    "region": "cn-shenzhen"'."\n"
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
                        'title' => 'Schema of Response',
                        'description' => 'Schema of Response',
                        'type' => 'object',
                        'properties' => [
                            'code' => [
                                'description' => '状态码'."\n"
                                    .'- `code == Success` 则代表授权成功；'."\n"
                                    .'- 其它状态码代表授权失败，授权失败时查看 `message` 字段获取详细的错误信息；',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'message' => [
                                'description' => '错误信息'."\n"
                                    .'- 如果 `code == Success`，则本字段为空；'."\n"
                                    .'- 否则本字段包含请求错误信息。',
                                'type' => 'string',
                                'example' => 'SysomOpenAPIAssumeRoleException: EntityNotExist.Role The role not exists: acs:ram::xxxxx:role/aliyunserviceroleforsysom',
                            ],
                            'data' => [
                                'description' => '返回结果。',
                                'type' => 'object',
                                'properties' => [
                                    'task_id' => [
                                        'description' => '诊断任务ID，可以凭借该ID调用 `GetDiagnosisResult` 接口查询诊断结果',
                                        'type' => 'string',
                                        'example' => 'ihqhAcrt',
                                    ],
                                ],
                            ],
                            'request_id' => [
                                'description' => '请求 RequestId',
                                'type' => 'string',
                                'example' => '43A910E9-A739-525E-855D-A32C257F1826',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": \\"Success\\",\\n  \\"message\\": \\"SysomOpenAPIAssumeRoleException: EntityNotExist.Role The role not exists: acs:ram::xxxxx:role/aliyunserviceroleforsysom\\",\\n  \\"data\\": {\\n    \\"task_id\\": \\"ihqhAcrt\\"\\n  },\\n  \\"request_id\\": \\"43A910E9-A739-525E-855D-A32C257F1826\\"\\n}","type":"json"}]',
            'title' => '发起诊断',
            'description' => '对目标 ECS 实例进行诊断有如下要求：'."\n"
                .'- 目标 ECS 实例状态必须为运行中（Running）；'."\n"
                .'- 目标 ECS 实例必须已经安装云助手，如果未安装，请参考 [安装云助手Agent](https://help.aliyun.com/zh/ecs/user-guide/install-the-cloud-assistant-agent) 进行安装；'."\n"
                .'- 必须调用 AuthDiagnosis 接口授权 SysOM 对目标 ECS 进行诊断，如果没有授权本接口会直接失败；'."\n"
                .'- 本接口依赖于SysOM服务关联角色（AliyunServiceRoleForSysom）已经创建，本接口不会主动创建服务角色，如果服务角色不存在需要首先调用 AuthDiagnosis 进行授权，该接口会创建前述服务角色。',
            'requestParamsDescription' => '## 诊断参数说明'."\n"
                ."\n"
                .'### 内存大盘诊断（memgraph）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                ."\n"
                .'### 内存Cache分析诊断（filecache）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                       |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ---------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断    |'."\n"
                .'| value    | string   | 容器     | 否       |        | 请输入你要诊断的容器ID,Pod名,cgroup                        |'."\n"
                .'| type     | string   | 诊断类型 | 否       | all    | 请输入需要诊断的类型(容器,POD,cgroup, host, all(所有容器)) |'."\n"
                ."\n"
                .'### 内存OOM诊断（oomcheck）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                .'| time     | string   | 诊断时间 | 否       |        | 请输入需要诊断OOM的时间点，默认为最近一次               |'."\n"
                ."\n"
                .'### 系统负载诊断（loadtask）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                ."\n"
                .'### 调度抖动诊断（schedmoni）参数'."\n"
                ."\n"
                .'| 参数名称  | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| --------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance  | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                .'| timeout   | string   | 诊断时间 | 否       | 20     | 本次的期望的诊断时间，默认20秒                          |'."\n"
                .'| threshold | string   | 诊断阈值 | 否       | 20     | 延迟的阈值，超过这个阈值就记录，默认20ms                |'."\n"
                ."\n"
                .'### IO延迟诊断（iolatency）参数'."\n"
                ."\n"
                .'| 参数名称  | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                         |'."\n"
                .'| --------- | -------- | -------- | -------- | ------ | ------------------------------------------------------------ |'."\n"
                .'| instance  | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID，我们将在会这台机器内部发起IO时延诊断 |'."\n"
                .'| timeout   | string   | 诊断时长 | 否       | 10     | 请输入你要诊断的时长,单位秒                                  |'."\n"
                .'| threshold | string   | 时间阈值 | 否       | 1000   | 保留IO延迟大于设定时间阈值的IO（时间单位：ms）               |'."\n"
                .'| disk      | string   | 目标磁盘 | 否       | ""     | 请输入你要诊断的磁盘,如vda,sdb,缺省为所有磁盘                |'."\n"
                ."\n"
                .'### IO流量分析诊断（iofsstat）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                         |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------------ |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID，我们将在会这台机器内部发起IO流量统计 |'."\n"
                .'| timeout  | string   | 诊断时长 | 否       | 15     | 诊断时长,也是IO流量统计周期,单位秒,建议不超过60秒            |'."\n"
                .'| disk     | string   | 目标磁盘 | 否       | ""     | 请输入你要诊断的磁盘,如vda,sda,缺省为所有磁盘                |'."\n"
                ."\n"
                .'### IO Hang诊断（iohang）参数'."\n"
                ."\n"
                .'| 参数名称  | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                         |'."\n"
                .'| --------- | -------- | -------- | -------- | ------ | ------------------------------------------------------------ |'."\n"
                .'| instance  | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID，我们将在会这台机器内部发起IO HANG诊断 |'."\n"
                .'| timeout   | string   | 诊断时长 | 否       | 10     | 请输入你要诊断的时长,单位秒                                  |'."\n"
                .'| threshold | string   | 时间阈值 | 否       | 5000   | 保留IO HANG住时间超过阈值的IO,单位毫秒                       |'."\n"
                .'| disk      | string   | 目标磁盘 | 否       | ""     | 请输入你要诊断的磁盘,如vda,sda,缺省为所有磁盘                |'."\n"
                ."\n"
                .'### 网络丢包诊断（packetdrop）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                .'| time     | string   | 运行时间 | 否       | 10     | 请输入你要诊断的时间，单位秒                            |'."\n"
                ."\n"
                .'### 网络重传诊断（retran）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                .'| time     | string   | 运行时间 | 否       | 10     | 请输入你要诊断的时间，单位秒                            |'."\n"
                ."\n"
                .'### 网络抖动诊断（jitter）参数'."\n"
                ."\n"
                .'| 参数名称 | 参数类型 | 参数说明 | 是否必填 | 默认值 | 备注                                                    |'."\n"
                .'| -------- | -------- | -------- | -------- | ------ | ------------------------------------------------------- |'."\n"
                .'| instance | string   | 实例ID   | 是       |        | 请输入你要诊断的实例ID， 我们将在会这台机器内部发起诊断 |'."\n"
                .'| time     | string   | 运行时间 | 否       | 10     | 请输入你要诊断的时间，单位秒                            |'."\n"
                ."\n"
                .'### 网络时延诊断（pingtrace）参数'."\n"
                ."\n"
                .'| 参数名称        | 参数类型 | 参数说明   | 是否必填 | 默认值 | 备注                                                         |'."\n"
                .'| --------------- | -------- | ---------- | -------- | ------ | ------------------------------------------------------------ |'."\n"
                .'| origin_instance | string   | 源实例ID   | 是       |        | 请输入你要诊断的源实例ID， 我们将在会这台机器内部发起SysAK诊断 |'."\n"
                .'| target_instance | string   | 目标实例ID | 是       |        | 请输入你要诊断的目标实例ID， 我们将在会这台机器内部发起SysAK诊断 |'."\n"
                .'| pkg_num         | string   | 追踪包数   | 否       | 100    | 请输入你要追踪的包数                                         |'."\n"
                .'| time_gap        | string   | 间隔毫秒数 | 否       | 1000   | 请输入发包间隔                                               |'."\n"
                .'| type            | string   | 报文协议   | 否       | icmp   | 请输入报文协议(icmp,tcp,udp)                                 |',
        ],
        'GetDiagnosisResult' => [
            'summary' => '获取诊断结果。',
            'path' => '/api/v1/openapi/diagnosis/get_diagnosis_results',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
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
                    'name' => 'task_id',
                    'in' => 'query',
                    'schema' => [
                        'description' => '诊断任务ID',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'quzuYl23',
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
                            'code' => [
                                'description' => '状态码'."\n"
                                    .'- `code == Success` 则代表授权成功；'."\n"
                                    .'- 其它状态码代表授权失败，授权失败时查看 `message` 字段获取详细的错误信息；',
                                'type' => 'string',
                                'example' => 'Success',
                            ],
                            'message' => [
                                'description' => '错误信息'."\n"
                                    .'- 如果 `code == Success`，则本字段为空；'."\n"
                                    .'- 否则本字段包含请求错误信息。',
                                'type' => 'string',
                                'example' => '""',
                            ],
                            'data' => [
                                'description' => '返回数据。',
                                'type' => 'object',
                                'properties' => [
                                    'task_id' => [
                                        'description' => '任务ID。',
                                        'type' => 'string',
                                        'example' => 'grcuU21a',
                                    ],
                                    'status' => [
                                        'description' => '诊断任务执行状态。'."\n"
                                            .'取值：'."\n"
                                            .'- **Ready**：就绪'."\n"
                                            .'- **Running**：正在执行'."\n"
                                            .'- **Success**：执行成功'."\n"
                                            .'- **Fail**：执行失败',
                                        'type' => 'string',
                                        'example' => 'Running',
                                        'enum' => [
                                            'Success',
                                            'Fail',
                                            'Ready',
                                            'Running',
                                        ],
                                    ],
                                    'service_name' => [
                                        'description' => '诊断类型',
                                        'type' => 'string',
                                        'example' => 'memgraph',
                                    ],
                                    'command' => [
                                        'description' => '诊断命令',
                                        'type' => 'any',
                                        'example' => '{'."\n"
                                            .'    "jobs":['."\n"
                                            .'        {'."\n"
                                            .'            "cmd":"mkdir -p /var/log/sysak && sysak podmem -r 100  -a -j /var/log/sysak/podmem.json > /dev/null 2>&1 && cat /var/log/sysak/podmem.json",'."\n"
                                            .'            "instance":"172.20.12.174",'."\n"
                                            .'            "fetch_file_list":['."\n"
                                            ."\n"
                                            .'            ]'."\n"
                                            .'        }'."\n"
                                            .'    ],'."\n"
                                            .'    "in_order":true,'."\n"
                                            .'    "offline_mode":false,'."\n"
                                            .'    "offline_results":['."\n"
                                            ."\n"
                                            .'    ]'."\n"
                                            .'}',
                                    ],
                                    'params' => [
                                        'description' => '诊断参数',
                                        'type' => 'any',
                                        'example' => '{'."\n"
                                            .'    "type":"all",'."\n"
                                            .'    "value":"",'."\n"
                                            .'    "channel":"ssh",'."\n"
                                            .'    "instance":"172.1.2.174",'."\n"
                                            .'    "service_name":"filecache"'."\n"
                                            .'}',
                                    ],
                                    'code' => [
                                        'description' => '错误码（0表示无错误）',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '0',
                                    ],
                                    'err_msg' => [
                                        'description' => '错误信息',
                                        'type' => 'string',
                                        'example' => 'Diagnosis failed',
                                    ],
                                    'result' => [
                                        'description' => '诊断结果',
                                        'type' => 'any',
                                        'example' => '{'."\n"
                                            .'    "summary":"  memory cgroup leak",'."\n"
                                            .'    "dataMemEvent":{'."\n"
                                            .'        "data":['."\n"
                                            .'            {'."\n"
                                            .'                "key":"Util",'."\n"
                                            .'                "value":20'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"MemLeak",'."\n"
                                            .'                "value":"OK"'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"MemcgLeak",'."\n"
                                            .'                "value":"NG"'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"MemFrag",'."\n"
                                            .'                "value":"OK"'."\n"
                                            .'            }'."\n"
                                            .'        ]'."\n"
                                            .'    },'."\n"
                                            .'    "dataMemOverView":{'."\n"
                                            .'        "data":['."\n"
                                            .'            {'."\n"
                                            .'                "key":"app",'."\n"
                                            .'                "value":10937332'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"free",'."\n"
                                            .'                "value":806800'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"kernel",'."\n"
                                            .'                "value":4527660'."\n"
                                            .'            }'."\n"
                                            .'        ]'."\n"
                                            .'    },'."\n"
                                            .'    "dataKerMem":{'."\n"
                                            .'        "data":['."\n"
                                            .'            {'."\n"
                                            .'                "key":"SReclaimable",'."\n"
                                            .'                "value":3411292'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"VmallocUsed",'."\n"
                                            .'                "value":30980'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"allocPage",'."\n"
                                            .'                "value":177732'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"KernelStack",'."\n"
                                            .'                "value":9280'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"PageTables",'."\n"
                                            .'                "value":38056'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"SUnreclaim",'."\n"
                                            .'                "value":170248'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"reserved",'."\n"
                                            .'                "value":690072'."\n"
                                            .'            }'."\n"
                                            .'        ]'."\n"
                                            .'    },'."\n"
                                            .'    "dataUserMem":{'."\n"
                                            .'        "data":['."\n"
                                            .'            {'."\n"
                                            .'                "key":"filecache",'."\n"
                                            .'                "value":8010008'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"anon",'."\n"
                                            .'                "value":2468608'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"mlock",'."\n"
                                            .'                "value":0'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"huge1G",'."\n"
                                            .'                "value":0'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"huge2M",'."\n"
                                            .'                "value":0'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"buffers",'."\n"
                                            .'                "value":458608'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":"shmem",'."\n"
                                            .'                "value":2284'."\n"
                                            .'            }'."\n"
                                            .'        ]'."\n"
                                            .'    },'."\n"
                                            .'    "dataCacheList":{'."\n"
                                            .'        "data":['."\n"
                                            .'            {'."\n"
                                            .'                "key":0,'."\n"
                                            .'                "Name":"/var/lib/mysql/sysom/sys_handler_log.ibd",'."\n"
                                            .'                "cached":576764,'."\n"
                                            .'                "Task":"mysqld_78575 "'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":1,'."\n"
                                            .'                "Name":"/var/log/sysom/sysom-migration-access.log",'."\n"
                                            .'                "cached":276688,'."\n"
                                            .'                "Task":"gunicorn_33647 ,gunicorn_460836 ,gunicorn_559934 ,gunicorn_731758 ,gunicorn_2362682 "'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":2,'."\n"
                                            .'                "Name":"/var/log/sysom/sysom-rtdemo-access.log",'."\n"
                                            .'                "cached":229404,'."\n"
                                            .'                "Task":"gunicorn_60718 ,gunicorn_720734 ,gunicorn_722168 "'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":3,'."\n"
                                            .'                "Name":"/var/log/sysom/sysom-monitor-server-access.log",'."\n"
                                            .'                "cached":197368,'."\n"
                                            .'                "Task":"gunicorn_33682 ,gunicorn_671155 ,gunicorn_714998 "'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":4,'."\n"
                                            .'                "Name":"/var/log/sysom/sysom-channel-access.log",'."\n"
                                            .'                "cached":180276,'."\n"
                                            .'                "Task":"gunicorn_33233 ,gunicorn_499735 ,gunicorn_725497 "'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":5,'."\n"
                                            .'                "Name":"total cached of close file",'."\n"
                                            .'                "cached":3729668,'."\n"
                                            .'                "Task":""'."\n"
                                            .'            }'."\n"
                                            .'        ]'."\n"
                                            .'    },'."\n"
                                            .'    "dataProcMemList":{'."\n"
                                            .'        "data":['."\n"
                                            .'            {'."\n"
                                            .'                "key":0,'."\n"
                                            .'                "task":"mysqld",'."\n"
                                            .'                "MemTotal":240856,'."\n"
                                            .'                "RssAnon":218248,'."\n"
                                            .'                "RssFile":22608'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":1,'."\n"
                                            .'                "task":"systemd-journal",'."\n"
                                            .'                "MemTotal":150248,'."\n"
                                            .'                "RssAnon":74300,'."\n"
                                            .'                "RssFile":75944'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":2,'."\n"
                                            .'                "task":"gunicorn",'."\n"
                                            .'                "MemTotal":144640,'."\n"
                                            .'                "RssAnon":114200,'."\n"
                                            .'                "RssFile":30440'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":3,'."\n"
                                            .'                "task":"gunicorn",'."\n"
                                            .'                "MemTotal":141480,'."\n"
                                            .'                "RssAnon":111040,'."\n"
                                            .'                "RssFile":30440'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":4,'."\n"
                                            .'                "task":"grafana-server",'."\n"
                                            .'                "MemTotal":103660,'."\n"
                                            .'                "RssAnon":42732,'."\n"
                                            .'                "RssFile":60928'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":5,'."\n"
                                            .'                "task":"gunicorn",'."\n"
                                            .'                "MemTotal":97444,'."\n"
                                            .'                "RssAnon":76256,'."\n"
                                            .'                "RssFile":21188'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":6,'."\n"
                                            .'                "task":"gunicorn",'."\n"
                                            .'                "MemTotal":97260,'."\n"
                                            .'                "RssAnon":76072,'."\n"
                                            .'                "RssFile":21188'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":7,'."\n"
                                            .'                "task":"prometheus",'."\n"
                                            .'                "MemTotal":95356,'."\n"
                                            .'                "RssAnon":45376,'."\n"
                                            .'                "RssFile":49980'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":8,'."\n"
                                            .'                "task":"gunicorn",'."\n"
                                            .'                "MemTotal":90144,'."\n"
                                            .'                "RssAnon":76456,'."\n"
                                            .'                "RssFile":13688'."\n"
                                            .'            },'."\n"
                                            .'            {'."\n"
                                            .'                "key":9,'."\n"
                                            .'                "task":"gunicorn",'."\n"
                                            .'                "MemTotal":89796,'."\n"
                                            .'                "RssAnon":76108,'."\n"
                                            .'                "RssFile":13688'."\n"
                                            .'            }'."\n"
                                            .'        ]'."\n"
                                            .'    }'."\n"
                                            .'}',
                                    ],
                                    'url' => [
                                        'description' => '诊断详情URL',
                                        'type' => 'string',
                                        'example' => '/diagnose/detail/qe3Z34sa',
                                    ],
                                ],
                            ],
                            'request_id' => [
                                'description' => '请求 RequestId',
                                'type' => 'string',
                                'example' => '9515E5A0-8905-59B0-9BBF-5F0BE568C3A0',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"code\\": \\"Success\\",\\n  \\"message\\": \\"\\\\\\"\\\\\\"\\",\\n  \\"data\\": {\\n    \\"task_id\\": \\"grcuU21a\\",\\n    \\"status\\": \\"Running\\",\\n    \\"service_name\\": \\"memgraph\\",\\n    \\"command\\": \\"{\\\\n    \\\\\\"jobs\\\\\\":[\\\\n        {\\\\n            \\\\\\"cmd\\\\\\":\\\\\\"mkdir -p /var/log/sysak && sysak podmem -r 100  -a -j /var/log/sysak/podmem.json > /dev/null 2>&1 && cat /var/log/sysak/podmem.json\\\\\\",\\\\n            \\\\\\"instance\\\\\\":\\\\\\"172.20.12.174\\\\\\",\\\\n            \\\\\\"fetch_file_list\\\\\\":[\\\\n\\\\n            ]\\\\n        }\\\\n    ],\\\\n    \\\\\\"in_order\\\\\\":true,\\\\n    \\\\\\"offline_mode\\\\\\":false,\\\\n    \\\\\\"offline_results\\\\\\":[\\\\n\\\\n    ]\\\\n}\\",\\n    \\"params\\": \\"{\\\\n    \\\\\\"type\\\\\\":\\\\\\"all\\\\\\",\\\\n    \\\\\\"value\\\\\\":\\\\\\"\\\\\\",\\\\n    \\\\\\"channel\\\\\\":\\\\\\"ssh\\\\\\",\\\\n    \\\\\\"instance\\\\\\":\\\\\\"172.1.2.174\\\\\\",\\\\n    \\\\\\"service_name\\\\\\":\\\\\\"filecache\\\\\\"\\\\n}\\",\\n    \\"code\\": 0,\\n    \\"err_msg\\": \\"Diagnosis failed\\",\\n    \\"result\\": \\"{\\\\n    \\\\\\"summary\\\\\\":\\\\\\"  memory cgroup leak\\\\\\",\\\\n    \\\\\\"dataMemEvent\\\\\\":{\\\\n        \\\\\\"data\\\\\\":[\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"Util\\\\\\",\\\\n                \\\\\\"value\\\\\\":20\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"MemLeak\\\\\\",\\\\n                \\\\\\"value\\\\\\":\\\\\\"OK\\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"MemcgLeak\\\\\\",\\\\n                \\\\\\"value\\\\\\":\\\\\\"NG\\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"MemFrag\\\\\\",\\\\n                \\\\\\"value\\\\\\":\\\\\\"OK\\\\\\"\\\\n            }\\\\n        ]\\\\n    },\\\\n    \\\\\\"dataMemOverView\\\\\\":{\\\\n        \\\\\\"data\\\\\\":[\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"app\\\\\\",\\\\n                \\\\\\"value\\\\\\":10937332\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"free\\\\\\",\\\\n                \\\\\\"value\\\\\\":806800\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"kernel\\\\\\",\\\\n                \\\\\\"value\\\\\\":4527660\\\\n            }\\\\n        ]\\\\n    },\\\\n    \\\\\\"dataKerMem\\\\\\":{\\\\n        \\\\\\"data\\\\\\":[\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"SReclaimable\\\\\\",\\\\n                \\\\\\"value\\\\\\":3411292\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"VmallocUsed\\\\\\",\\\\n                \\\\\\"value\\\\\\":30980\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"allocPage\\\\\\",\\\\n                \\\\\\"value\\\\\\":177732\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"KernelStack\\\\\\",\\\\n                \\\\\\"value\\\\\\":9280\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"PageTables\\\\\\",\\\\n                \\\\\\"value\\\\\\":38056\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"SUnreclaim\\\\\\",\\\\n                \\\\\\"value\\\\\\":170248\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"reserved\\\\\\",\\\\n                \\\\\\"value\\\\\\":690072\\\\n            }\\\\n        ]\\\\n    },\\\\n    \\\\\\"dataUserMem\\\\\\":{\\\\n        \\\\\\"data\\\\\\":[\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"filecache\\\\\\",\\\\n                \\\\\\"value\\\\\\":8010008\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"anon\\\\\\",\\\\n                \\\\\\"value\\\\\\":2468608\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"mlock\\\\\\",\\\\n                \\\\\\"value\\\\\\":0\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"huge1G\\\\\\",\\\\n                \\\\\\"value\\\\\\":0\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"huge2M\\\\\\",\\\\n                \\\\\\"value\\\\\\":0\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"buffers\\\\\\",\\\\n                \\\\\\"value\\\\\\":458608\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":\\\\\\"shmem\\\\\\",\\\\n                \\\\\\"value\\\\\\":2284\\\\n            }\\\\n        ]\\\\n    },\\\\n    \\\\\\"dataCacheList\\\\\\":{\\\\n        \\\\\\"data\\\\\\":[\\\\n            {\\\\n                \\\\\\"key\\\\\\":0,\\\\n                \\\\\\"Name\\\\\\":\\\\\\"/var/lib/mysql/sysom/sys_handler_log.ibd\\\\\\",\\\\n                \\\\\\"cached\\\\\\":576764,\\\\n                \\\\\\"Task\\\\\\":\\\\\\"mysqld_78575 \\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":1,\\\\n                \\\\\\"Name\\\\\\":\\\\\\"/var/log/sysom/sysom-migration-access.log\\\\\\",\\\\n                \\\\\\"cached\\\\\\":276688,\\\\n                \\\\\\"Task\\\\\\":\\\\\\"gunicorn_33647 ,gunicorn_460836 ,gunicorn_559934 ,gunicorn_731758 ,gunicorn_2362682 \\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":2,\\\\n                \\\\\\"Name\\\\\\":\\\\\\"/var/log/sysom/sysom-rtdemo-access.log\\\\\\",\\\\n                \\\\\\"cached\\\\\\":229404,\\\\n                \\\\\\"Task\\\\\\":\\\\\\"gunicorn_60718 ,gunicorn_720734 ,gunicorn_722168 \\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":3,\\\\n                \\\\\\"Name\\\\\\":\\\\\\"/var/log/sysom/sysom-monitor-server-access.log\\\\\\",\\\\n                \\\\\\"cached\\\\\\":197368,\\\\n                \\\\\\"Task\\\\\\":\\\\\\"gunicorn_33682 ,gunicorn_671155 ,gunicorn_714998 \\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":4,\\\\n                \\\\\\"Name\\\\\\":\\\\\\"/var/log/sysom/sysom-channel-access.log\\\\\\",\\\\n                \\\\\\"cached\\\\\\":180276,\\\\n                \\\\\\"Task\\\\\\":\\\\\\"gunicorn_33233 ,gunicorn_499735 ,gunicorn_725497 \\\\\\"\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":5,\\\\n                \\\\\\"Name\\\\\\":\\\\\\"total cached of close file\\\\\\",\\\\n                \\\\\\"cached\\\\\\":3729668,\\\\n                \\\\\\"Task\\\\\\":\\\\\\"\\\\\\"\\\\n            }\\\\n        ]\\\\n    },\\\\n    \\\\\\"dataProcMemList\\\\\\":{\\\\n        \\\\\\"data\\\\\\":[\\\\n            {\\\\n                \\\\\\"key\\\\\\":0,\\\\n                \\\\\\"task\\\\\\":\\\\\\"mysqld\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":240856,\\\\n                \\\\\\"RssAnon\\\\\\":218248,\\\\n                \\\\\\"RssFile\\\\\\":22608\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":1,\\\\n                \\\\\\"task\\\\\\":\\\\\\"systemd-journal\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":150248,\\\\n                \\\\\\"RssAnon\\\\\\":74300,\\\\n                \\\\\\"RssFile\\\\\\":75944\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":2,\\\\n                \\\\\\"task\\\\\\":\\\\\\"gunicorn\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":144640,\\\\n                \\\\\\"RssAnon\\\\\\":114200,\\\\n                \\\\\\"RssFile\\\\\\":30440\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":3,\\\\n                \\\\\\"task\\\\\\":\\\\\\"gunicorn\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":141480,\\\\n                \\\\\\"RssAnon\\\\\\":111040,\\\\n                \\\\\\"RssFile\\\\\\":30440\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":4,\\\\n                \\\\\\"task\\\\\\":\\\\\\"grafana-server\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":103660,\\\\n                \\\\\\"RssAnon\\\\\\":42732,\\\\n                \\\\\\"RssFile\\\\\\":60928\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":5,\\\\n                \\\\\\"task\\\\\\":\\\\\\"gunicorn\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":97444,\\\\n                \\\\\\"RssAnon\\\\\\":76256,\\\\n                \\\\\\"RssFile\\\\\\":21188\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":6,\\\\n                \\\\\\"task\\\\\\":\\\\\\"gunicorn\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":97260,\\\\n                \\\\\\"RssAnon\\\\\\":76072,\\\\n                \\\\\\"RssFile\\\\\\":21188\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":7,\\\\n                \\\\\\"task\\\\\\":\\\\\\"prometheus\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":95356,\\\\n                \\\\\\"RssAnon\\\\\\":45376,\\\\n                \\\\\\"RssFile\\\\\\":49980\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":8,\\\\n                \\\\\\"task\\\\\\":\\\\\\"gunicorn\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":90144,\\\\n                \\\\\\"RssAnon\\\\\\":76456,\\\\n                \\\\\\"RssFile\\\\\\":13688\\\\n            },\\\\n            {\\\\n                \\\\\\"key\\\\\\":9,\\\\n                \\\\\\"task\\\\\\":\\\\\\"gunicorn\\\\\\",\\\\n                \\\\\\"MemTotal\\\\\\":89796,\\\\n                \\\\\\"RssAnon\\\\\\":76108,\\\\n                \\\\\\"RssFile\\\\\\":13688\\\\n            }\\\\n        ]\\\\n    }\\\\n}\\",\\n    \\"url\\": \\"/diagnose/detail/qe3Z34sa\\"\\n  },\\n  \\"request_id\\": \\"9515E5A0-8905-59B0-9BBF-5F0BE568C3A0\\"\\n}","type":"json"}]',
            'title' => '获取诊断结果',
            'description' => '诊断的流程是异步的，因此调用本接口时，诊断可能还在执行没有结束，可以通过返回数据中 `data.status` 字段进行判断，当 `data.status == Success ` 时，表示诊断成功，可以从 `data.result` 中读取到诊断的结果。',
        ],
        'GenerateCopilotResponse' => [
            'summary' => '本接口用于请求os-copilot服务',
            'path' => '/api/v1/copilot/generate_copilot_response',
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
            'consumes' => [
                'application/json',
            ],
            'produces' => [
                'application/json',
            ],
            'operationType' => 'readAndWrite',
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'none',
                'riskType' => 'none',
                'chargeType' => 'free',
            ],
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body',
                        'type' => 'object',
                        'properties' => [
                            'llmParamString' => [
                                'title' => '对接copilot llm服务的入参，参考标准LLM接口入参dict，需要转化成string并传入llmParamString中',
                                'description' => '对接copilot llm服务的入参，参考标准LLM接口入参dict，需要转化成string并传入llmParamString中',
                                'type' => 'string',
                                'required' => false,
                                'example' => '"{\\"model\\":\\"Qwen-7B-Chat\\",\\"temperature\\":0.9,\\"max_tokens\\":1000,\\"top_p\\":1,\\"frequency_penalty\\":0.0,\\"presence_penalty\\":0.6,\\"messages\\":[{\\"role\\":\\"user\\",\\"content\\":\\"我是os工程师\\"},{\\"role\\":\\"assistant\\",\\"content\\":\\"您好。我是AI语言模型，很高兴为您服 务。有什么我能帮助您的呢\\"},{\\"role\\":\\"user\\",\\"content\\":\\"你知道什么是alinux吗\\"}]}"',
                            ],
                        ],
                        'required' => false,
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
                                'description' => 'Id of the request',
                                'type' => 'string',
                                'example' => '2D693121-C925-5154-8DF6-C09A8B369822',
                            ],
                            'code' => [
                                'title' => '错误码',
                                'description' => '错误码',
                                'type' => 'string',
                                'example' => 'SysomOpenAPI.ServerError',
                            ],
                            'massage' => [
                                'title' => '错误码描述，若无错误则为空',
                                'description' => '错误码描述，若无错误则为空',
                                'type' => 'string',
                                'example' => 'Requests for llm service failed',
                            ],
                            'data' => [
                                'title' => 'llm服务返回的data，字符串类型，如为dict需自行转换解析',
                                'description' => 'llm服务返回的data，字符串类型，如为dict需自行转换解析',
                                'type' => 'string',
                                'example' => '{\'choices\': [{\'finish_reason\': \'stop\', \'index\': 0, \'message\': {\'content\': \'Alinux是一个基于Linux的开源操作系统，它主要由阿里巴巴集团开发和维护，专为大规模云计算和大数据处理环境设计。这个系统针对高并发、低延迟以及资源利用率优化进行了深度定制和改良，以适应阿里内部复杂且庞大的业务需求。由于其在性能和稳定性方面的优秀表现，Alinux也在逐渐被外部的一些企业和研究机构采用，特别是在需要处理高负载场景的领域。与标准Linux发行版相比，Alinux可能包含特定的内核补丁、优化工具集以及其他阿里巴巴内部研发的特性。然而，值得注意的是，尽管名称中的“Ali”可能让人联想到与阿里巴巴的紧密关系，但Alinux作为一个项目，已经于2021年成为开放原子开源基金会（OpenAtom Foundation）下的一个子项目，即 OpenAnolis，这标志着它的社区化和广泛化的进程。\', \'role\': \'assistant\'}}], \'model\': \'Qwen1.5\', \'sentiment\': [], \'status_code\': 200, \'time\': 6.836989402770996, \'usage\': {\'completion_tokens\': 180, \'prompt_tokens\': 176, \'time_dict\': {\'auto_regression_time\': 0.03798324399524265, \'speed\': 26.327398474054736, \'total_generate_time\': 6.836983919143677}, \'total_tokens\': 356}}',
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [
                'returnType' => 'synchronous',
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"requestId\\": \\"2D693121-C925-5154-8DF6-C09A8B369822\\",\\n  \\"code\\": \\"SysomOpenAPI.ServerError\\",\\n  \\"massage\\": \\"Requests for llm service failed\\",\\n  \\"data\\": \\"{\'choices\': [{\'finish_reason\': \'stop\', \'index\': 0, \'message\': {\'content\': \'Alinux是一个基于Linux的开源操作系统，它主要由阿里巴巴集团开发和维护，专为大规模云计算和大数据处理环境设计。这个系统针对高并发、低延迟以及资源利用率优化进行了深度定制和改良，以适应阿里内部复杂且庞大的业务需求。由于其在性能和稳定性方面的优秀表现，Alinux也在逐渐被外部的一些企业和研究机构采用，特别是在需要处理高负载场景的领域。与标准Linux发行版相比，Alinux可能包含特定的内核补丁、优化工具集以及其他阿里巴巴内部研发的特性。然而，值得注意的是，尽管名称中的“Ali”可能让人联想到与阿里巴巴的紧密关系，但Alinux作为一个项目，已经于2021年成为开放原子开源基金会（OpenAtom Foundation）下的一个子项目，即 OpenAnolis，这标志着它的社区化和广泛化的进程。\', \'role\': \'assistant\'}}], \'model\': \'Qwen1.5\', \'sentiment\': [], \'status_code\': 200, \'time\': 6.836989402770996, \'usage\': {\'completion_tokens\': 180, \'prompt_tokens\': 176, \'time_dict\': {\'auto_regression_time\': 0.03798324399524265, \'speed\': 26.327398474054736, \'total_generate_time\': 6.836983919143677}, \'total_tokens\': 356}}\\"\\n}","type":"json"}]',
            'title' => '请求copilot服务',
            'description' => '- 需要按通用LLM服务输入参数填充参数，转为string后赋给llmParamString'."\n"
                .'- 返回数据需将string转为dict后使用，参考通用LLM服务返回格式',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'sysom.cn-hangzhou.aliyuncs.com',
        ],
    ],
];
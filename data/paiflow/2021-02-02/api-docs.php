<?php return [
    'version' => '1.0',
    'info' => [
        'style' => 'ROA',
        'product' => 'PAIFlow',
        'version' => '2021-02-02',
    ],
    'directories' => [
        [
            'id' => 168663,
            'title' => '工作流任务',
            'type' => 'directory',
            'children' => [
                'CreatePipelineRun',
                'DeletePipelineRun',
                'StartPipelineRun',
                'UpdatePipelineRun',
                'GetPipelineRun',
                'ListPipelineRunNodeLogs',
                'GetPipelineRunNode',
                'ListPipelineRunNodeOutputs',
                'ListPipelineRunNodeStatus',
                'ListPipelineRunsStatus',
                'ListPipelineRuns',
                'TerminatePipelineRun',
                'RerunPipelineRun',
            ],
        ],
        [
            'id' => 164779,
            'title' => '工作流',
            'type' => 'directory',
            'children' => [
                'CreatePipeline',
                'DeletePipeline',
                'UpdatePipeline',
                'GetPipeline',
                'ListPipelines',
            ],
        ],
    ],
    'components' => [
        'schemas' => [
            'BriefPipelineRun' => [
                'title' => 'BriefPipelineRun',
                'type' => 'object',
                'properties' => [
                    'PipelineRunId' => [
                        'title' => '工作流任务ID。',
                        'type' => 'string',
                        'example' => 'flow-j94y**********lf7a',
                    ],
                    'Name' => [
                        'title' => '工作流任务名字。',
                        'type' => 'string',
                        'example' => 'testName',
                    ],
                    'Status' => [
                        'title' => '需要过滤的工作流任务的状态，目前有如下几种状态：  Initialized Running Succeeded Failed Suspended Terminated Unknown Skipped Terminating',
                        'type' => 'string',
                        'example' => 'Succeeded',
                    ],
                    'UserId' => [
                        'title' => '创建用户ID。',
                        'type' => 'string',
                        'example' => '155**********904',
                    ],
                    'ParentUserId' => [
                        'title' => '用户主账户的ID。',
                        'type' => 'string',
                        'example' => '155**********904',
                    ],
                    'StartedAt' => [
                        'title' => '工作流任务的开始UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'FinishedAt' => [
                        'title' => '工作流任务的结束UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'NodeId' => [
                        'title' => '工作流任务的根节点ID。',
                        'type' => 'string',
                        'example' => 'node-n06d**********fc53',
                    ],
                    'Duration' => [
                        'title' => '工作流任务的运行时长，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '394',
                    ],
                    'WorkspaceId' => [
                        'title' => '所属工作空间ID。',
                        'type' => 'string',
                        'example' => '1***60',
                    ],
                    'Message' => [
                        'title' => '工作流任务失败提示信息。',
                        'type' => 'string',
                        'example' => 'error message',
                    ],
                    'SourceType' => [
                        'title' => '工作流任务的来源类型。',
                        'type' => 'string',
                        'example' => 'SDK',
                    ],
                    'SourceId' => [
                        'title' => '工作流任务的来源ID。',
                        'type' => 'string',
                        'example' => 'exp-abcd*********hxfu',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'GmtModifiedTime' => [
                        'title' => '最近修改UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'PipelineId' => [
                        'title' => '工作流ID。',
                        'type' => 'string',
                        'example' => 'pipeline-j94y**********lf7a',
                    ],
                    'Accessibility' => [
                        'title' => '工作流任务的可见性。',
                        'type' => 'string',
                        'example' => 'PUBLIC',
                    ],
                ],
            ],
            'FullPipelineRun' => [
                'title' => 'PipelineRun描述',
                'type' => 'object',
                'properties' => [
                    'PipelineRunId' => [
                        'title' => '工作流任务ID。',
                        'type' => 'string',
                        'example' => 'flow-j94y**********lf7a',
                    ],
                    'Name' => [
                        'title' => '工作流任务名字。',
                        'type' => 'string',
                        'example' => 'testName',
                    ],
                    'Status' => [
                        'title' => '需要过滤的工作流任务的状态，目前有如下几种状态：  Initialized Running Succeeded Failed Suspended Terminated Unknown Skipped Terminating',
                        'type' => 'string',
                        'example' => 'Succeeded',
                    ],
                    'Manifest' => [
                        'title' => '工作流任务的定义。',
                        'type' => 'string',
                        'example' => '{"ApiVersion":"core/v1","Metadata":{"NodeId":"node-n06d**********fc53","Provider":"155**********904","Name":"flow-j94y**********lf7a","Version":"v1","Identifier":"9fe11111-****-****-****-****ec811861","Namespace":null,"DisplayName":"name","NodeType":"Dag"},"Spec":{}}',
                    ],
                    'Arguments' => [
                        'title' => '工作流任务的参数。',
                        'type' => 'string',
                        'example' => '{"arguments":{"parameters":[{"name":"execution","value":{"endpoint":"******","odpsProject":"******"}}]}}',
                    ],
                    'UserId' => [
                        'title' => '创建用户ID。',
                        'type' => 'string',
                        'example' => '155**********904',
                    ],
                    'ParentUserId' => [
                        'title' => '用户主账户的ID。',
                        'type' => 'string',
                        'example' => '155**********904',
                    ],
                    'StartedAt' => [
                        'title' => '工作流任务的开始UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'FinishedAt' => [
                        'title' => '工作流任务的结束UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'NodeId' => [
                        'title' => '工作流任务的根节点ID。',
                        'type' => 'string',
                        'example' => 'node-n06d**********fc53',
                    ],
                    'Duration' => [
                        'title' => '工作流任务的运行时长，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '394',
                    ],
                    'WorkspaceId' => [
                        'title' => '所属工作空间ID。',
                        'type' => 'string',
                        'example' => '1***60',
                    ],
                    'Message' => [
                        'title' => '工作流任务失败提示信息。',
                        'type' => 'string',
                        'example' => 'error message',
                    ],
                    'SourceType' => [
                        'title' => '工作流任务的来源类型。',
                        'type' => 'string',
                        'example' => 'SDK',
                    ],
                    'SourceId' => [
                        'title' => '工作流任务的来源ID。',
                        'type' => 'string',
                        'example' => 'exp-abcd*********hxfu',
                    ],
                    'Options' => [
                        'title' => '工作流任务选项，格式为JSON。',
                        'type' => 'string',
                        'example' => '{"mlflow":{"experimentId":"exp-**********"}}',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'GmtModifiedTime' => [
                        'title' => '最近修改UTC时间，格式iso8601。',
                        'type' => 'string',
                        'format' => 'iso8601',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'PipelineId' => [
                        'title' => '工作流ID。',
                        'type' => 'string',
                        'example' => 'pipeline-j94y**********lf7a',
                    ],
                    'Accessibility' => [
                        'title' => '工作流任务的可见性。',
                        'type' => 'string',
                        'example' => 'PUBLIC',
                    ],
                ],
            ],
            'Node' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'ApiVersion' => [
                        'title' => '工作流定义的版本。',
                        'type' => 'string',
                        'example' => 'core/v1',
                    ],
                    'Metadata' => [
                        'title' => '节点的元信息。',
                        'type' => 'object',
                        'properties' => [
                            'NodeId' => [
                                'title' => '节点的ID。',
                                'type' => 'string',
                                'example' => 'node-wcs9z********27ps3',
                            ],
                            'Provider' => [
                                'title' => '节点所对应的工作流的提供方，通常情况下指代工作流的上传者（官方提供的工作流Provider为pai）。',
                                'type' => 'string',
                                'example' => '15577********904',
                            ],
                            'Name' => [
                                'title' => '节点的名字。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                            'Version' => [
                                'title' => '节点所对应的工作流的版本。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'Identifier' => [
                                'title' => '节点所对应的工作流的标识名。',
                                'type' => 'string',
                                'example' => 'composite-pipeline',
                            ],
                            'NodeType' => [
                                'title' => '节点的类型，包含有以下类型：  Task，具体运行的一个节点 ；Dag，复合类型节点，本质是一个由子节点组成的Dag图；Loop，循环节点',
                                'type' => 'string',
                                'example' => 'Dag',
                            ],
                            'RelatedNodeIds' => [
                                'title' => 'Alink逻辑节点所对应的物理节点ID / Alink物理节点所对应的逻辑节点ID',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'example' => 'node-wcs9z********27ps3',
                                ],
                            ],
                            'DisplayName' => [
                                'title' => '节点的展示名称（可能会被修改）。',
                                'type' => 'string',
                                'example' => 'test',
                            ],
                        ],
                    ],
                    'Spec' => [
                        'title' => '节点的执行体信息。',
                        'type' => 'object',
                        'properties' => [
                            'HasPipelines' => [
                                'title' => '该节点是否含有子节点：  true：该节点为复合类型节点，如果需要进一步查询其子节点信息，需要传入更深的Depth参数。 false：该节点为实际运行的节点。',
                                'type' => 'boolean',
                                'example' => 'true',
                            ],
                            'Dependencies' => [
                                'title' => '节点与其他节点的依赖关系。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                    'example' => 'node-ab*****dsfsd',
                                ],
                            ],
                            'Pipelines' => [
                                'title' => '子工作流列表。',
                                'type' => 'array',
                                'items' => [
                                    '$ref' => '#/components/schemas/Node',
                                ],
                            ],
                            'Inputs' => [
                                'title' => '节点的输入信息。',
                                '$ref' => '#/components/schemas/NodeIO',
                            ],
                            'Outputs' => [
                                'title' => '节点的输出信息。',
                                '$ref' => '#/components/schemas/NodeIO',
                            ],
                            'When' => [
                                'title' => '节点的条件判断信息。',
                                'type' => 'string',
                                'example' => '{{inputs.parameters.parentInput}} == 12',
                            ],
                            'WithItems' => [
                                'title' => '定义了一个数组，每一项会扩展为一个节点。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'string',
                                ],
                            ],
                            'WithParam' => [
                                'title' => '定义了对一个参数的引用，参数值是一个数组，每一项会扩展为一个节点。',
                                'type' => 'string',
                                'example' => '{{pipelines.step1.outputs.parameters.outputparam}}',
                            ],
                            'WithSequence' => [
                                'title' => '定义了一个数字序列，序列每一项会扩展为一个节点。',
                                'type' => 'object',
                                'properties' => [
                                    'Start' => [
                                        'title' => '起始数字',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '1',
                                    ],
                                    'End' => [
                                        'title' => '结束数字',
                                        'type' => 'integer',
                                        'format' => 'int64',
                                        'example' => '5',
                                    ],
                                    'Format' => [
                                        'title' => '展现格式',
                                        'type' => 'string',
                                        'example' => 'test%02X',
                                    ],
                                ],
                            ],
                            'Parallelism' => [
                                'title' => '节点的并行度。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '8',
                            ],
                        ],
                    ],
                    'StatusInfo' => [
                        'title' => '节点的执行状态信息。',
                        'type' => 'object',
                        'properties' => [
                            'FinishedAt' => [
                                'title' => '节点执行的结束时间。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2021-10-15T10:40:54.000Z',
                            ],
                            'StartedAt' => [
                                'title' => '节点执行的开始时间。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2021-10-15T10:39:58.000Z',
                            ],
                            'Status' => [
                                'title' => '节点的运行状态：  Succeed：运行成功。 Running：运行中。 Failed：运行失败。 Skipped：跳过（前序节点失败导致）。 ReadyToSchedule：准备运行（前序节点未完成导致）。 Unknown：未知。',
                                'type' => 'string',
                                'example' => 'Succeeded',
                            ],
                            'Conditions' => [
                                'title' => '节点的运行状况。',
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'Type' => [
                                            'title' => '类型。',
                                            'type' => 'string',
                                            'example' => 'Completed',
                                        ],
                                        'Status' => [
                                            'title' => '状态。',
                                            'type' => 'string',
                                            'example' => 'True',
                                        ],
                                    ],
                                ],
                            ],
                            'Progress' => [
                                'title' => '节点的运行进度。',
                                'type' => 'string',
                                'example' => '9/9',
                            ],
                        ],
                    ],
                ],
            ],
            'NodeIO' => [
                'title' => 'A short description of struct',
                'type' => 'object',
                'properties' => [
                    'Artifacts' => [
                        'title' => '节点的产物，例如输入、输出的数据等。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                    'Parameters' => [
                        'title' => '节点的参数列表。',
                        'type' => 'array',
                        'items' => [
                            'type' => 'object',
                        ],
                    ],
                ],
            ],
            'Pipeline' => [
                'title' => 'Pipeline的结构定义。',
                'type' => 'object',
                'properties' => [
                    'PipelineId' => [
                        'title' => 'Pipeline ID。',
                        'type' => 'string',
                        'example' => 'pipeline-hynm2bv8**********',
                    ],
                    'GmtCreateTime' => [
                        'title' => '创建UTC时间，日期格式iso8601。',
                        'type' => 'string',
                        'example' => '2021-01-21T17:12:35.232Z',
                    ],
                    'GmtModifiedTime' => [
                        'title' => '修改UTC时间，日期格式iso8601。',
                        'type' => 'string',
                        'example' => '2021-01-21T17:12:35.232Z',
                    ],
                    'Provider' => [
                        'title' => '用户自定义Pipeline时，为用户ID。 官方Pipeline为pai。',
                        'type' => 'string',
                        'example' => '132668**********',
                    ],
                    'Identifier' => [
                        'title' => 'Pipeline标识。',
                        'type' => 'string',
                        'example' => 'SqlWrite',
                    ],
                    'Version' => [
                        'title' => 'Pipeline版本。',
                        'type' => 'string',
                        'example' => 'v1',
                    ],
                    'Uuid' => [
                        'title' => 'Pipeline当前版本标识，用户每次更新，会生成该uuid。',
                        'type' => 'string',
                        'example' => 'q8dp9hkl**********',
                    ],
                    'WorkspaceId' => [
                        'title' => 'AI工作空间ID。',
                        'type' => 'string',
                        'example' => '72***',
                    ],
                ],
            ],
            'Run' => [
                'title' => 'Run的结构定义。',
                'description' => 'Run的结构定义。',
                'type' => 'object',
                'properties' => [
                    'RunId' => [
                        'title' => 'Run ID。',
                        'type' => 'string',
                        'example' => 'flow-r2b034bh**********',
                    ],
                    'Name' => [
                        'title' => 'Run的名称。',
                        'type' => 'string',
                        'example' => 'MyName',
                    ],
                    'Status' => [
                        'title' => 'Run的状态，目前如下几种状态。  Initialized Running Succeeded Failed Suspended Terminated Unknown Skipped Terminating',
                        'type' => 'string',
                        'example' => 'Running',
                    ],
                    'UserId' => [
                        'title' => '创建人ID。',
                        'type' => 'string',
                        'example' => '155**********904',
                    ],
                    'ParentUserId' => [
                        'title' => 'Owner ID。',
                        'type' => 'string',
                        'example' => '155**********904',
                    ],
                    'StartedAt' => [
                        'title' => 'Run运行开始时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1638430932001',
                    ],
                    'FinishedAt' => [
                        'title' => 'Run运行完成时间。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '1638430932100',
                    ],
                    'NodeId' => [
                        'title' => '节点ID。',
                        'type' => 'string',
                        'example' => 'node-sdk**********uhrf',
                    ],
                    'Duration' => [
                        'title' => '运行时长，单位为秒。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'example' => '100',
                    ],
                    'WorkspaceId' => [
                        'title' => '所属工作空间ID。',
                        'type' => 'string',
                        'example' => '78***',
                    ],
                    'Message' => [
                        'title' => '错误信息。',
                        'type' => 'string',
                        'example' => 'error message',
                    ],
                    'Source' => [
                        'title' => '来源。',
                        'type' => 'string',
                        'example' => 'PaiStudio',
                    ],
                    'ExperimentId' => [
                        'title' => '实验ID。',
                        'type' => 'string',
                        'example' => 'experiment-ybpy***',
                    ],
                    'GmtCreateTime' => [
                        'title' => 'Run的创建UTC时间，格式iso8601。',
                        'type' => 'string',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'GmtModifiedTime' => [
                        'title' => 'Run最近修改的UTC时间，格式iso8601。',
                        'type' => 'string',
                        'example' => '2021-01-30T12:51:33.028Z',
                    ],
                    'Accessibility' => [
                        'title' => '实验可见度，目前有PUBLIC（公开）、PRIVATE（私有）。',
                        'type' => 'string',
                        'example' => 'PUBLIC',
                    ],
                ],
            ],
        ],
    ],
    'apis' => [
        'CreatePipelineRun' => [
            'summary' => '创建工作流任务。',
            'path' => '/api/v1/pipelineruns',
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
            'produces' => [],
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '工作流任务。',
                        'type' => 'object',
                        'properties' => [
                            'PipelineId' => [
                                'title' => 'Pipeline的id; PipelineId和PipelineManifest 二选一',
                                'description' => '工作流的ID。'."\n"
                                    .'PipelineId和PipelineManifest二选一。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'flow-rer7y***',
                            ],
                            'Name' => [
                                'title' => 'Run的名字，若为空，则自动生成名字',
                                'description' => '工作流任务名字。若为空，则自动生成名字。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'testName',
                            ],
                            'PipelineManifest' => [
                                'title' => 'Pipeline内容; PipelineId和PipelineManifest 二选一一',
                                'description' => '工作流定义，具体样例见下方请求参数补充说明。'."\n"
                                    .'PipelineId和PipelineManifest二选一。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'apiVersion: "core/v1"*********'."\n",
                            ],
                            'Arguments' => [
                                'title' => '参数',
                                'description' => '参数。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'arguments:   parameters:   - name: "execution_maxcompute"     value:       endpoint: "http://service***"       odpsProject: "pai***"',
                            ],
                            'NoConfirmRequired' => [
                                'title' => 'true代表直接启动; false代表只创建run但先不启动',
                                'description' => '是否直接启动pipelineRun，取值如下：'."\n"
                                    .'- true代表直接启动（默认）。'."\n"
                                    .'- false代表只创建run，但先不启动。',
                                'type' => 'boolean',
                                'required' => false,
                                'example' => 'true',
                            ],
                            'WorkspaceId' => [
                                'title' => '项目空间id',
                                'description' => '工作空间ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => true,
                                'example' => '84***',
                            ],
                            'SourceType' => [
                                'title' => '来源，支持如下值：SDK; PAI_STUDIO; M6; UNKNOWN;',
                                'description' => '工作流任务来源类型，支持如下值：'."\n"
                                    .'- UNKNOWN（默认）'."\n"
                                    .'- SDK'."\n"
                                    .'- DESIGNER'."\n"
                                    .'- M6',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'UNKNOWN',
                            ],
                            'SourceId' => [
                                'title' => '实验id',
                                'description' => '来源ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'experiment-ybpy***',
                            ],
                            'Options' => [
                                'title' => '选项，json格式',
                                'description' => '创建工作流任务选项，格式为JSON。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => '{"mlflow":{"experimentId":"exp-1jdk***"}}',
                            ],
                            'Accessibility' => [
                                'title' => 'PUBLIC 公开；PRIVATE 私有',
                                'description' => '工作空间可见性：'."\n"
                                    .'- PUBLIC（默认）'."\n"
                                    .'- PRIVATE'."\n"
                                    ."\n",
                                'type' => 'string',
                                'required' => false,
                                'example' => 'PUBLIC',
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
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
                            ],
                            'PipelineRunId' => [
                                'title' => 'run的id',
                                'description' => '工作流任务ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'flow-rbvg***',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\",\\n  \\"PipelineRunId\\": \\"flow-rbvg***\\"\\n}","type":"json"}]',
            'title' => '创建工作流任务	',
            'requestParamsDescription' => '工作流定义样例：该工作流由读数据表（`data_source`），类型转换（`type_transform`）组成。'."\n"
                ."\n"
                .'```'."\n"
                .'apiVersion: "core/v1"'."\n"
                .'metadata:'."\n"
                .'  provider: "1557702098******"'."\n"
                .'  version: "v1"'."\n"
                .'  identifier: "my_pipeline"'."\n"
                .'  name: "source-transform"'."\n"
                .'spec:'."\n"
                .'  inputs:'."\n"
                .'    parameters:'."\n"
                .'    - name: "execution_maxcompute"'."\n"
                .'      type: "Map"'."\n"
                .'  pipelines:'."\n"
                .'  - apiVersion: "core/v1"'."\n"
                .'    metadata:'."\n"
                .'      provider: "pai"'."\n"
                .'      version: "v1"'."\n"
                .'      identifier: "data_source"'."\n"
                .'      name: "data_source"'."\n"
                .'      displayName: "读数据表-1"'."\n"
                .'    spec:'."\n"
                .'      arguments:'."\n"
                .'        parameters:'."\n"
                .'        - name: "inputTableName"'."\n"
                .'          value: "pai_online_project.wumai_data"'."\n"
                .'        - name: "partition"'."\n"
                .'          value: "20220101"'."\n"
                .'        - name: "execution"'."\n"
                .'          from: "{{inputs.parameters.execution_maxcompute}}"'."\n"
                .'  - apiVersion: "core/v1"'."\n"
                .'    metadata:'."\n"
                .'      provider: "pai"'."\n"
                .'      version: "v1"'."\n"
                .'      identifier: "type_transform"'."\n"
                .'      name: "type_transform"'."\n"
                .'      displayName: "类型转换-1"'."\n"
                .'    spec:'."\n"
                .'      arguments:'."\n"
                .'        artifacts:'."\n"
                .'        - name: "inputTable"'."\n"
                .'          from: "{{pipelines.data_source.outputs.artifacts.outputTable}}"'."\n"
                .'        parameters:'."\n"
                .'        - name: "cols_to_double"'."\n"
                .'          value: "time,hour,pm2,pm10,so2,co,no2"'."\n"
                .'        - name: "execution"'."\n"
                .'          from: "{{inputs.parameters.execution_maxcompute}}"'."\n"
                .'      dependencies:'."\n"
                .'      - "data_source"'."\n"
                .'```',
        ],
        'DeletePipelineRun' => [
            'summary' => '删除工作流任务。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'PipelineRunId',
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-hynm2bv8wqhp5esfxq',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '删除工作流任务	',
            'description' => '调用该接口时，工作流任务需要处于以下状态：'."\n"
                .'- Initialized：初始化完成'."\n"
                .'- Terminated：已终止'."\n"
                .'- Succeeded：成功'."\n"
                .'- Failed：失败',
        ],
        'StartPipelineRun' => [
            'summary' => '启动工作流任务。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/start',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-rbvg5wzljzjhc9ks92',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '启动工作流任务	',
        ],
        'UpdatePipelineRun' => [
            'summary' => '更新工作流任务。目前仅支持修改工作流任务名称。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-rbvg5wzljzjhc9ks92',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '工作流任务。',
                        'type' => 'object',
                        'properties' => [
                            'Name' => [
                                'description' => '输入更新后的工作流任务名称。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'testName',
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
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '更新工作流任务',
        ],
        'GetPipelineRun' => [
            'summary' => '获取工作流任务详情信息。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
            'deprecated' => false,
            'systemTags' => [
                'operationType' => 'get',
            ],
            'parameters' => [
                [
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'run的id',
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'run-rbvg**********ks92'."\n",
                    ],
                ],
                [
                    'name' => 'Verbose',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否返回详细信息，目前详细信息包含： RuntimeManifest',
                        'description' => '是否返回详细信息，取值如下。'."\n"
                            .'- 关闭开关：不显示详细信息。'."\n"
                            .'- 打开开关：显示详细信息，目前详细信息包含Manifest字段。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false'."\n",
                    ],
                ],
                [
                    'name' => 'ManifestType',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'description' => '具体返回哪种类型的Manifest信息，取值如下。'."\n"
                            .'- Raw（默认）：用户提交的原始Manifest。'."\n"
                            .'- Frozen：针对每个Pipeline生成唯一Uuid，将其版本固化下来。即使遇到子Pipeline定义三元组不变进行升级，依然会使用一开始的版本(Uuid)，不受影响；即可基于该Manifest进行重跑。'."\n"
                            .'- Rendered：将相关信息进行注入和渲染，包括：补全运行环境信息并优化等。',
                        'type' => 'string',
                        'required' => false,
                        'enumValueTitles' => [
                            'Raw' => 'Raw',
                            'Frozen' => 'Frozen',
                            'Rendered' => 'Rendered',
                        ],
                        'example' => 'Raw',
                        'default' => 'Raw',
                        'enum' => [
                            'Raw',
                            'Frozen',
                            'Expanded',
                            'Rendered',
                            'Runtime',
                        ],
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被分享的工作流任务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA'."\n",
                            ],
                            'PipelineRunId' => [
                                'description' => '工作流任务ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'flow-j94y**********lf7a'."\n",
                            ],
                            'Name' => [
                                'description' => '工作流任务名字。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'testName',
                            ],
                            'Status' => [
                                'description' => '工作流任务状态，可能值如下：'."\n"
                                    ."\n"
                                    .'- Initialized'."\n"
                                    .'- Running'."\n"
                                    .'- Succeeded'."\n"
                                    .'- Failed'."\n"
                                    .'- Suspended'."\n"
                                    .'- Terminated'."\n"
                                    .'- Unknown'."\n"
                                    .'- Skipped'."\n"
                                    .'- Terminating',
                                'type' => 'string',
                                'example' => 'Succeeded',
                            ],
                            'Manifest' => [
                                'description' => '工作流任务的定义。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '{"ApiVersion":"core/v1","Metadata":{"NodeId":"node-n06d**********fc53","Provider":"155**********904","Name":"flow-j94y**********lf7a","Version":"v1","Identifier":"9fe11111-****-****-****-****ec811861","Namespace":null,"DisplayName":"name","NodeType":"Dag"},"Spec":{}}',
                            ],
                            'Arguments' => [
                                'description' => '工作流任务的参数。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '{"arguments":{"parameters":[{"name":"execution","value":{"endpoint":"http://service.******","odpsProject":"******","spec":{"endpoint":"http://service.******","odpsProject":"*****"},"resourceType":"MaxCompute"}}]}}',
                            ],
                            'UserId' => [
                                'description' => '创建用户ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '155**********904'."\n",
                            ],
                            'ParentUserId' => [
                                'description' => '创建用户阿里云账号的ID。',
                                'type' => 'string',
                                'example' => '155**********904'."\n",
                            ],
                            'StartedAt' => [
                                'description' => '工作流任务的开始UTC时间，格式ISO8601。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2021-01-30T12:51:33.028Z'."\n",
                            ],
                            'FinishedAt' => [
                                'description' => '工作流任务的结束UTC时间，格式ISO8601。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2021-01-30T12:52:33.028Z'."\n",
                            ],
                            'NodeId' => [
                                'description' => '工作流任务的节点ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'node-n06d**********fc53'."\n",
                            ],
                            'Duration' => [
                                'description' => '工作流任务的运行时长，单位为秒。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '60',
                            ],
                            'WorkspaceId' => [
                                'description' => '所属工作空间ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '15945',
                            ],
                            'Message' => [
                                'description' => '工作流任务失败提示信息。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'error message'."\n",
                            ],
                            'SourceType' => [
                                'description' => '工作流任务来源类型，可能值：'."\n"
                                    .'- UNKNOWN（默认）：未指定来源类型时的默认值。'."\n"
                                    .'- SDK：通过SDK创建的工作流任务。'."\n"
                                    .'- DESIGNER：通过Designer创建的工作流任务。'."\n"
                                    .'- M6：通过其他网站创建的工作流任务。',
                                'type' => 'string',
                                'example' => 'UNKNOWN',
                            ],
                            'SourceId' => [
                                'description' => '工作流任务的来源ID。',
                                'type' => 'string',
                                'example' => 'abcd*********hxfu'."\n",
                            ],
                            'Options' => [
                                'description' => '工作流任务选项，格式为JSON。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '{"mlflow":{"experimentId":"exp-**********"}}'."\n",
                            ],
                            'GmtCreateTime' => [
                                'description' => '创建UTC时间，格式ISO8601。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2021-01-30T12:51:33.028Z'."\n",
                            ],
                            'GmtModifiedTime' => [
                                'description' => '最近修改UTC时间，格式ISO8601。',
                                'type' => 'string',
                                'format' => 'iso8601',
                                'example' => '2021-01-30T12:51:33.028Z'."\n",
                            ],
                            'PipelineId' => [
                                'description' => '工作流ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'pipeline-j94y**********lf7a'."\n",
                            ],
                            'Accessibility' => [
                                'description' => '工作流任务的可见性，目前支持：'."\n"
                                    .'- PUBLIC'."\n"
                                    .'- PRIVATE',
                                'type' => 'string',
                                'example' => 'PUBLIC',
                            ],
                            'PipelineRunUri' => [
                                'description' => '工作流任务详情URL。',
                                'type' => 'string',
                                'example' => 'https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\\\n\\",\\n  \\"PipelineRunId\\": \\"flow-j94y**********lf7a\\\\n\\",\\n  \\"Name\\": \\"testName\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"Manifest\\": \\"{\\\\\\"ApiVersion\\\\\\":\\\\\\"core/v1\\\\\\",\\\\\\"Metadata\\\\\\":{\\\\\\"NodeId\\\\\\":\\\\\\"node-n06d**********fc53\\\\\\",\\\\\\"Provider\\\\\\":\\\\\\"155**********904\\\\\\",\\\\\\"Name\\\\\\":\\\\\\"flow-j94y**********lf7a\\\\\\",\\\\\\"Version\\\\\\":\\\\\\"v1\\\\\\",\\\\\\"Identifier\\\\\\":\\\\\\"9fe11111-****-****-****-****ec811861\\\\\\",\\\\\\"Namespace\\\\\\":null,\\\\\\"DisplayName\\\\\\":\\\\\\"name\\\\\\",\\\\\\"NodeType\\\\\\":\\\\\\"Dag\\\\\\"},\\\\\\"Spec\\\\\\":{}}\\",\\n  \\"Arguments\\": \\"{\\\\\\"arguments\\\\\\":{\\\\\\"parameters\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"execution\\\\\\",\\\\\\"value\\\\\\":{\\\\\\"endpoint\\\\\\":\\\\\\"http://service.******\\\\\\",\\\\\\"odpsProject\\\\\\":\\\\\\"******\\\\\\",\\\\\\"spec\\\\\\":{\\\\\\"endpoint\\\\\\":\\\\\\"http://service.******\\\\\\",\\\\\\"odpsProject\\\\\\":\\\\\\"*****\\\\\\"},\\\\\\"resourceType\\\\\\":\\\\\\"MaxCompute\\\\\\"}}]}}\\",\\n  \\"UserId\\": \\"155**********904\\\\n\\",\\n  \\"ParentUserId\\": \\"155**********904\\\\n\\",\\n  \\"StartedAt\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n  \\"FinishedAt\\": \\"2021-01-30T12:52:33.028Z\\\\n\\",\\n  \\"NodeId\\": \\"node-n06d**********fc53\\\\n\\",\\n  \\"Duration\\": 60,\\n  \\"WorkspaceId\\": \\"15945\\",\\n  \\"Message\\": \\"error message\\\\n\\",\\n  \\"SourceType\\": \\"UNKNOWN\\",\\n  \\"SourceId\\": \\"abcd*********hxfu\\\\n\\",\\n  \\"Options\\": \\"{\\\\\\"mlflow\\\\\\":{\\\\\\"experimentId\\\\\\":\\\\\\"exp-**********\\\\\\"}}\\\\n\\",\\n  \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n  \\"PipelineId\\": \\"pipeline-j94y**********lf7a\\\\n\\",\\n  \\"Accessibility\\": \\"PUBLIC\\",\\n  \\"PipelineRunUri\\": \\"https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****\\"\\n}","type":"json"}]',
            'title' => '获取工作流任务信息	',
        ],
        'ListPipelineRunNodeLogs' => [
            'summary' => '获取工作流任务节点运行产生的日志。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/logs',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Run id',
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-73186********nku43',
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Node id',
                        'description' => '工作流任务节点ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'node-hh5yc********mz8ms',
                    ],
                ],
                [
                    'name' => 'Offset',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前偏移量',
                        'description' => '页数（偏移量），默认值为0。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '0',
                    ],
                ],
                [
                    'name' => 'PageSize',
                    'in' => 'query',
                    'schema' => [
                        'title' => '每页返回的log数目',
                        'description' => '每页返回的日志数目。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '100',
                    ],
                ],
                [
                    'name' => 'FromTimeInSeconds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '开始时间',
                        'description' => '查询时间范围的开始时间，格式为时间戳，单位为秒。'."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1612180056',
                    ],
                ],
                [
                    'name' => 'Keyword',
                    'in' => 'query',
                    'schema' => [
                        'title' => '搜索词',
                        'description' => '搜索词。支持模糊匹配。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'abc',
                    ],
                ],
                [
                    'name' => 'Reverse',
                    'in' => 'query',
                    'schema' => [
                        'title' => '是否倒排',
                        'description' => '是否倒排，取值如下：'."\n"
                            .'- false（默认值）：正序排列日志。'."\n"
                            .'- true：倒序排列日志。',
                        'type' => 'boolean',
                        'required' => false,
                        'example' => 'false',
                    ],
                ],
                [
                    'name' => 'ToTimeInSeconds',
                    'in' => 'query',
                    'schema' => [
                        'title' => '结束时间',
                        'description' => '查询时间范围的结束时间，格式为时间戳，单位为秒。'."\n"
                            ."\n",
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '1612180056',
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被分享的工作流任务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结构体',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求 ID',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'title' => '符合过滤条件的作业数量',
                                'description' => '符合过滤条件的作业数量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '10',
                            ],
                            'Logs' => [
                                'title' => '日志列表',
                                'description' => '查询返回的日志列表。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '查询到的日志行。'."\n"
                                        ."\n",
                                    'type' => 'string',
                                    'example' => 'abc',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 10,\\n  \\"Logs\\": [\\n    \\"abc\\"\\n  ]\\n}","type":"json"}]',
            'title' => '获取工作流任务节点日志	',
        ],
        'GetPipelineRunNode' => [
            'summary' => '工作流任务中包含多个节点，通过该接口获取节点的详细信息。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'run 的 id',
                        'description' => '工作流任务的ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-ebppc********5lwea',
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'node 的 id',
                        'description' => '工作流任务中一个节点的ID。如何查看节点ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'node-wcs9z********27ps3',
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'title' => '查询深度',
                        'description' => '查询节点详细信息的深度（层数），当Depth为2时，将会返回该节点及其下一层的所有子节点的详细信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'description' => '节点类型，取值如下。'."\n"
                            .'* Logical（默认值）：表示逻辑节点，用户提交节点的都是逻辑节点。'."\n"
                            .'* Physical：表示物理节点，对应一个执行特定逻辑的容器的运行，逻辑节点在后台运行时会转换为物理节点。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Logical',
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被分享的工作流任务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回体结构',
                        'description' => '返回体结构。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求 id',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '0a981ea816**********42244e7ba2',
                            ],
                            'ApiVersion' => [
                                'title' => 'api 版本',
                                'description' => '工作流定义的版本。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => 'core/v1',
                            ],
                            'Metadata' => [
                                'title' => 'node 的元信息',
                                'description' => '节点的元信息。'."\n"
                                    ."\n",
                                'type' => 'object',
                                'properties' => [
                                    'NodeId' => [
                                        'title' => '节点 id',
                                        'description' => '节点的ID。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'node-wcs9z********27ps3',
                                    ],
                                    'Provider' => [
                                        'title' => '提供方',
                                        'description' => '节点所对应的工作流的提供方，通常情况下指代工作流的上传者（官方提供的工作流Provider为PAI）。',
                                        'type' => 'string',
                                        'example' => '15577********904',
                                    ],
                                    'Name' => [
                                        'title' => '名字',
                                        'description' => '节点的名称。',
                                        'type' => 'string',
                                        'example' => 'flow-ebppc********5lwea',
                                    ],
                                    'Version' => [
                                        'title' => '版本',
                                        'description' => '节点所对应的工作流的版本。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'v1',
                                    ],
                                    'Identifier' => [
                                        'title' => '标识符',
                                        'description' => '节点所对应的工作流的标识名。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'composite-pipeline',
                                    ],
                                    'NodeType' => [
                                        'title' => '节点类型',
                                        'description' => '节点的类型，可能值：'."\n"
                                            ."\n"
                                            .'- Pod：具体运行的一个节点。'."\n"
                                            .'- Dag：复合类型节点，本质是一个由子节点组成的Dag图。',
                                        'type' => 'string',
                                        'example' => 'Dag',
                                    ],
                                    'RelatedNodeIds' => [
                                        'title' => 'Alink逻辑节点所对应的物理节点ID / Alink物理节点所对应的逻辑节点ID',
                                        'description' => 'Alink逻辑节点所对应的物理节点ID或Alink物理节点所对应的逻辑节点ID。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '节点ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'node-wcs9z********27ps3',
                                        ],
                                    ],
                                    'DisplayName' => [
                                        'title' => '展示名称',
                                        'description' => '节点的展示名称（可能会被修改）。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => 'flow-ebppc********5lwea',
                                    ],
                                ],
                            ],
                            'Spec' => [
                                'title' => '算法体',
                                'description' => '节点的定义。',
                                'type' => 'object',
                                'properties' => [
                                    'HasPipelines' => [
                                        'title' => '是否有子 pipeline',
                                        'description' => '该节点是否含有子节点，可能值：'."\n"
                                            .'- true：该节点为复合类型节点，如果需要进一步查询其子节点信息，需要传入更深的Depth参数。'."\n"
                                            .'- false：该节点为实际运行的节点。',
                                        'type' => 'boolean',
                                        'example' => 'true',
                                    ],
                                    'Dependencies' => [
                                        'title' => '依赖',
                                        'description' => '节点与其他节点的依赖关系。'."\n"
                                            ."\n",
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '所依赖的其他节点对应工作流的名称。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '"single-node-sub1"',
                                        ],
                                    ],
                                    'Pipelines' => [
                                        'title' => '子 pipeline 列表',
                                        'description' => '子节点列表。'."\n"
                                            ."\n\n",
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '子节点的详细信息。'."\n"
                                                ."\n",
                                            'type' => 'object',
                                            'example' => '详细结构参见Pipeline相关接口描述。'."\n",
                                        ],
                                    ],
                                    'Inputs' => [
                                        'description' => '节点的输入信息。'."\n"
                                            ."\n",
                                        'type' => 'object',
                                        'properties' => [
                                            'Artifacts' => [
                                                'description' => '节点的输入产物列表。	',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '节点的输入产物。'."\n"
                                                        ."\n",
                                                    'type' => 'object',
                                                    'example' => '{"Name":"input","Value":"******"}',
                                                ],
                                            ],
                                            'Parameters' => [
                                                'description' => '节点的输入参数列表。',
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '节点的输入参数。',
                                                    'type' => 'object',
                                                    'example' => '{"Name":"inputTable","Value":"******"}',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'Outputs' => [
                                        'description' => '节点的输出信息。'."\n"
                                            ."\n",
                                        'type' => 'object',
                                        'properties' => [
                                            'Artifacts' => [
                                                'description' => '节点的输出产物列表。'."\n"
                                                    ."\n",
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '节点的输出产物。'."\n"
                                                        ."\n",
                                                    'type' => 'object',
                                                    'example' => '{"Name":"output","Value":"******"}',
                                                ],
                                            ],
                                            'Parameters' => [
                                                'description' => '节点的输出参数列表。'."\n"
                                                    ."\n",
                                                'type' => 'array',
                                                'items' => [
                                                    'description' => '节点的输出参数。'."\n"
                                                        ."\n",
                                                    'type' => 'object',
                                                    'example' => '{"Name":"outputTable","Value":"******"}',
                                                ],
                                            ],
                                        ],
                                    ],
                                    'When' => [
                                        'description' => '节点运行的判断条件。'."\n"
                                            .'- 如果运行条件返回为真，就执行该节点。'."\n"
                                            .'- 如果运行条件返回为假，该节点被跳过，状态为Skipped。',
                                        'type' => 'string',
                                        'example' => '”{{inputs.parameters.skip}} == false“',
                                    ],
                                    'WithItems' => [
                                        'description' => '将工作流节点扩展为多个工作流节点。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '数据集中的一项，会扩展为一个工作流节点。',
                                            'type' => 'string',
                                            'example' => 'abc',
                                        ],
                                    ],
                                    'WithParam' => [
                                        'description' => '指向一个参数，该参数的值是一个数组，数组的每一项会扩展为一个工作流节点。',
                                        'type' => 'string',
                                        'example' => '"{{pipelines.generate.outputs.result}}"',
                                    ],
                                    'WithSequence' => [
                                        'description' => '指向一个数字序列，序列中的每一项会扩展为一个工作流节点。',
                                        'type' => 'object',
                                        'properties' => [
                                            'Start' => [
                                                'description' => '数字序列的起始数字。',
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '1',
                                            ],
                                            'End' => [
                                                'description' => '数字序列的结束数字。'."\n"
                                                    ."\n",
                                                'type' => 'integer',
                                                'format' => 'int32',
                                                'example' => '10',
                                            ],
                                            'Format' => [
                                                'description' => '对数字序列的值进行格式化。',
                                                'type' => 'string',
                                                'example' => '"2020-05-%d"',
                                            ],
                                        ],
                                    ],
                                    'Parallelism' => [
                                        'description' => '节点并行度上限。',
                                        'type' => 'integer',
                                        'format' => 'int32',
                                        'example' => '2',
                                    ],
                                ],
                            ],
                            'StatusInfo' => [
                                'title' => 'node 运行状态',
                                'description' => '节点的执行状态信息。'."\n"
                                    ."\n",
                                'type' => 'object',
                                'properties' => [
                                    'FinishedAt' => [
                                        'title' => '结束时间',
                                        'description' => '节点执行的结束时间。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => '2021-10-15T10:40:54.000Z',
                                    ],
                                    'StartedAt' => [
                                        'title' => '开始时间',
                                        'description' => '节点执行的开始时间。'."\n"
                                            ."\n",
                                        'type' => 'string',
                                        'example' => '2021-10-15T10:39:58.000Z',
                                    ],
                                    'Status' => [
                                        'title' => '状态',
                                        'description' => '节点的运行状态，可能值：'."\n"
                                            .'- Succeeded：运行成功。'."\n"
                                            .'- Running：运行中。'."\n"
                                            .'- Failed：运行失败。'."\n"
                                            .'- Skipped：跳过（前序节点失败导致）。'."\n"
                                            .'- ReadyToSchedule：准备运行（前序节点未完成导致）。'."\n"
                                            .'- Unknown：未知。',
                                        'type' => 'string',
                                        'example' => 'Succeeded',
                                    ],
                                    'Conditions' => [
                                        'description' => '节点的运行状况列表。',
                                        'type' => 'array',
                                        'items' => [
                                            'description' => '节点的详细运行状况。',
                                            'type' => 'object',
                                            'example' => '{"ArtifactArchived": "true"}',
                                        ],
                                    ],
                                    'Progress' => [
                                        'description' => '节点的运行进度。',
                                        'type' => 'string',
                                        'example' => '9/9',
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0a981ea816**********42244e7ba2\\",\\n  \\"ApiVersion\\": \\"core/v1\\",\\n  \\"Metadata\\": {\\n    \\"NodeId\\": \\"node-wcs9z********27ps3\\",\\n    \\"Provider\\": \\"15577********904\\",\\n    \\"Name\\": \\"flow-ebppc********5lwea\\",\\n    \\"Version\\": \\"v1\\",\\n    \\"Identifier\\": \\"composite-pipeline\\",\\n    \\"NodeType\\": \\"Dag\\",\\n    \\"RelatedNodeIds\\": [\\n      \\"node-wcs9z********27ps3\\"\\n    ],\\n    \\"DisplayName\\": \\"flow-ebppc********5lwea\\"\\n  },\\n  \\"Spec\\": {\\n    \\"HasPipelines\\": true,\\n    \\"Dependencies\\": [\\n      \\"\\\\\\"single-node-sub1\\\\\\"\\"\\n    ],\\n    \\"Pipelines\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ],\\n    \\"Inputs\\": {\\n      \\"Artifacts\\": [\\n        {\\n          \\"Name\\": \\"input\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ],\\n      \\"Parameters\\": [\\n        {\\n          \\"Name\\": \\"inputTable\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ]\\n    },\\n    \\"Outputs\\": {\\n      \\"Artifacts\\": [\\n        {\\n          \\"Name\\": \\"output\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ],\\n      \\"Parameters\\": [\\n        {\\n          \\"Name\\": \\"outputTable\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ]\\n    },\\n    \\"When\\": \\"”{{inputs.parameters.skip}} == false“\\",\\n    \\"WithItems\\": [\\n      \\"abc\\"\\n    ],\\n    \\"WithParam\\": \\"\\\\\\"{{pipelines.generate.outputs.result}}\\\\\\"\\",\\n    \\"WithSequence\\": {\\n      \\"Start\\": 1,\\n      \\"End\\": 10,\\n      \\"Format\\": \\"\\\\\\"2020-05-%d\\\\\\"\\"\\n    },\\n    \\"Parallelism\\": 2\\n  },\\n  \\"StatusInfo\\": {\\n    \\"FinishedAt\\": \\"2021-10-15T10:40:54.000Z\\",\\n    \\"StartedAt\\": \\"2021-10-15T10:39:58.000Z\\",\\n    \\"Status\\": \\"Succeeded\\",\\n    \\"Conditions\\": [\\n      {\\n        \\"ArtifactArchived\\": \\"true\\"\\n      }\\n    ],\\n    \\"Progress\\": \\"9/9\\"\\n  }\\n}","type":"json"}]',
            'title' => '获取工作流任务节点信息	',
            'description' => 'PAIFlow支持复合形式的工作流，这些工作流在运行时也会体现为复合形式的节点。想要获取到这类节点的详细信息，可以传入Depth参数（默认值为2），可以递归地获取到所查询节点及其内含有的Depth层数的子节点的详细信息。'."\n"
                ."\n"
                .'工作流的每次运行会存在一个虚拟的根节点，这个根节点可以通过GetRun接口返回获取。调用GetNode接口查询该根节点，可以获取到对应运行的所有节点的详细信息及其组织结构。',
        ],
        'ListPipelineRunNodeOutputs' => [
            'summary' => '获取工作流任务节点输出。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/outputs',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Run id',
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-n06dn********rfc53',
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Node id',
                        'description' => '工作流任务节点ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'node-n06dn********rfc53',
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'title' => '节点往下拿多少层子节点',
                        'description' => '查询节点详细信息的深度（层数），当Depth为2时，将会返回该节点及其下一层的所有子节点的信息。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => true,
                        'maximum' => '99999',
                        'minimum' => '1',
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'title' => '节点名字',
                        'description' => '查询的工作流任务节点的名称。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'myName',
                    ],
                ],
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'title' => '当前页，页码从1开始',
                        'description' => '当前页，起始值为1。',
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
                        'title' => '每页返回的输出数目',
                        'description' => '每页返回的输出数目。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '20',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序字段',
                        'description' => '用于排序返回结果的字段，目前支持如下字段：'."\n"
                            .'- Name'."\n"
                            .'- Type'."\n"
                            .'- GmtCreateTime',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'GmtCreateTime',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'title' => '排序顺序， 顺序：ASC，倒序：DESC',
                        'description' => '排序顺序，取值如下，与SortBy一起使用。'."\n"
                            .'- DESC（默认值）：降序排列。'."\n"
                            .'- ASC：升序排列。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'artifact 类型',
                        'description' => '工作流任务节点产物（Artifact）的类型：'."\n"
                            .'- Model：模型。'."\n"
                            .'- DataSet：数据集。'."\n"
                            .'- Metrics：度量数据。'."\n"
                            .'- ModelEvaluation：模型评估结果。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DataSet',
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被分享的工作流任务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => '返回结构',
                        'description' => '返回结构体。'."\n"
                            ."\n",
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'title' => '符合过滤条件的作业数量',
                                'description' => '符合过滤条件的作业数量。'."\n"
                                    ."\n",
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '2',
                            ],
                            'Outputs' => [
                                'title' => '输出列表',
                                'description' => '工作流任务节点的输出产物列表。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流任务节点的的输出产物。'."\n"
                                        ."\n",
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'title' => '名字',
                                            'description' => '工作流任务节点的输出产物名称。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'model_******',
                                        ],
                                        'Type' => [
                                            'title' => '类型',
                                            'description' => '输出产物的类型，可能值：'."\n"
                                                .'- Model：模型。'."\n"
                                                .'- DataSet：数据集。'."\n"
                                                .'- Metrics：度量数据。'."\n"
                                                .'- ModelEvaluation：模型评估结果。',
                                            'type' => 'string',
                                            'example' => 'Model',
                                        ],
                                        'GmtCreateTime' => [
                                            'title' => '创建时间',
                                            'description' => '输出产物的创建时间。',
                                            'type' => 'string',
                                            'example' => '2021-01-30T12:51:33.028Z',
                                        ],
                                        'Id' => [
                                            'title' => 'id',
                                            'description' => '输出产物的ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'artifact-ty1xwv*******s8zf',
                                        ],
                                        'NodeId' => [
                                            'title' => '输出所属节点 id',
                                            'description' => '输出产物所属的工作流任务节点的ID。',
                                            'type' => 'string',
                                            'example' => 'node-obpzu*******418grb7',
                                        ],
                                        'ExpandedArtifactIndex' => [
                                            'title' => '被扩展artifact的索引号，以0开始',
                                            'description' => '被扩展的输出产物的索引号，起始值为0。',
                                            'type' => 'integer',
                                            'format' => 'int64',
                                            'example' => '0',
                                        ],
                                        'ExpandableArtifactName' => [
                                            'title' => '可扩展artifact的名字',
                                            'description' => '被扩展的输出产物的名称。',
                                            'type' => 'string',
                                            'example' => 'inputArtifact',
                                        ],
                                        'Info' => [
                                            'title' => 'artifact内容',
                                            'description' => '输出产物的信息。'."\n"
                                                ."\n",
                                            'type' => 'object',
                                            'example' => '{         "metadata": {           "type": {             "Model": {               "locationType": "MaxComputeOfflineModel",               "modelType": "OfflineModel"             }           }         }',
                                        ],
                                        'Producer' => [
                                            'title' => 'rtifact生产者',
                                            'description' => '输出产物的生产者。',
                                            'type' => 'string',
                                            'example' => 'id-3d25-************-77856',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 2,\\n  \\"Outputs\\": [\\n    {\\n      \\"Name\\": \\"model_******\\",\\n      \\"Type\\": \\"Model\\",\\n      \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n      \\"Id\\": \\"artifact-ty1xwv*******s8zf\\",\\n      \\"NodeId\\": \\"node-obpzu*******418grb7\\",\\n      \\"ExpandedArtifactIndex\\": 0,\\n      \\"ExpandableArtifactName\\": \\"inputArtifact\\",\\n      \\"Info\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Producer\\": \\"id-3d25-************-77856\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取工作流任务节点输出	',
        ],
        'ListPipelineRunNodeStatus' => [
            'summary' => '获取工作流任务节点运行状态。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/status',
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
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '工作流任务ID',
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-rbvg5wzljzjhc9****',
                    ],
                ],
                [
                    'name' => 'NodeId',
                    'in' => 'path',
                    'schema' => [
                        'title' => '节点ID',
                        'description' => '工作流任务的节点ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'node-kdkfkfds****',
                    ],
                ],
                [
                    'name' => 'Depth',
                    'in' => 'query',
                    'schema' => [
                        'title' => '深度',
                        'description' => '查询节点深度，当深度为N时，返回指定节点的N-1层子节点运行状态。',
                        'type' => 'integer',
                        'format' => 'int64',
                        'required' => false,
                        'example' => '2',
                    ],
                ],
                [
                    'name' => 'Type',
                    'in' => 'query',
                    'allowEmptyValue' => true,
                    'schema' => [
                        'title' => '类型',
                        'description' => '节点类型，取值如下：'."\n"
                            .'* Logical（默认值）：表示逻辑节点，用户提交节点的都是逻辑节点。'."\n"
                            .'* Physical：表示物理节点，对应一个执行特定逻辑的容器的运行，逻辑节点在后台运行时会转换为物理节点。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Logical',
                    ],
                ],
                [
                    'name' => 'TokenId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '被分享的工作流任务的ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******'."\n",
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => '请求ID',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E'."\n",
                            ],
                            'Status' => [
                                'title' => '工作流任务的节点状态列表',
                                'description' => '工作流任务节点状态列表。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'type' => 'object',
                                    'properties' => [
                                        'NodeId' => [
                                            'title' => '工作流中节点ID',
                                            'description' => '工作流任务的节点ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'node-1jlzg7ncv0j6i3****',
                                        ],
                                        'NodeName' => [
                                            'title' => '工作流中节点名字',
                                            'description' => '工作流任务的节点名字。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'sql',
                                        ],
                                        'Status' => [
                                            'title' => '节点运行状态',
                                            'description' => '节点运行状态。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'Succeeded',
                                        ],
                                        'StartedAt' => [
                                            'title' => '节点开始运行时间',
                                            'description' => '节点的开始运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2021-01-21T17:12:35.232Z',
                                        ],
                                        'FinishedAt' => [
                                            'title' => '节点结束运行时间',
                                            'description' => '节点的结束运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2021-01-21T17:12:40.232Z',
                                        ],
                                        'RuntimeInfo' => [
                                            'title' => '节点运行时信息',
                                            'description' => '节点运行时信息，格式为转义后的Map，用户可以自定义输出多个KV对，相同的Key值会取最后输出的Value。当信息为空时，返回“{}”。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '{\\"DLC_INSTANCE_IDS\\": \\"i-12224afdfsaf,i-22224afdfsaf,i-13224afdfsaf\\"}'."\n",
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\\\n\\",\\n  \\"Status\\": [\\n    {\\n      \\"NodeId\\": \\"node-1jlzg7ncv0j6i3****\\",\\n      \\"NodeName\\": \\"sql\\",\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StartedAt\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"FinishedAt\\": \\"2021-01-21T17:12:40.232Z\\",\\n      \\"RuntimeInfo\\": \\"{\\\\\\\\\\\\\\"DLC_INSTANCE_IDS\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"i-12224afdfsaf,i-22224afdfsaf,i-13224afdfsaf\\\\\\\\\\\\\\"}\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取工作流任务节点状态	',
        ],
        'ListPipelineRunsStatus' => [
            'summary' => '批量获取工作流任务或节点的状态。',
            'path' => '/api/v1/pipelineruns',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '查询请求。',
                        'type' => 'object',
                        'properties' => [
                            'PipelineRuns' => [
                                'description' => '要查询的工作流任务列表，PipelineRuns参数与Nodes参数两选一，优先Nodes。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流任务的ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                                    'type' => 'string',
                                    'required' => false,
                                    'example' => 'flow-hynm2bv8wqhp5esfxq',
                                ],
                                'required' => false,
                            ],
                            'Nodes' => [
                                'description' => '要查询的节点列表，Nodes参数与PipelineRuns参数两选一，优先Nodes。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '要查询的节点。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PipelineRunId' => [
                                            'description' => '工作流任务的ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'flow-hynm2bv8wqhp5esfxq',
                                        ],
                                        'NodeId' => [
                                            'description' => '工作流任务节点的ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
                                            'type' => 'string',
                                            'required' => false,
                                            'example' => 'node-hynm2bv8wqhp5esfx1',
                                        ],
                                    ],
                                    'required' => false,
                                ],
                                'required' => false,
                            ],
                            'WorkspaceId' => [
                                'description' => '工作空间的ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                                'type' => 'string',
                                'required' => false,
                                'example' => '948**'."\n",
                            ],
                            'OutputType' => [
                                'description' => '工作流任务节点产物（Artifact）的类型，取值如下：'."\n"
                                    .'- Model：模型。'."\n"
                                    .'- DataSet：数据集。'."\n"
                                    .'- Metrics：度量数据。'."\n"
                                    .'- ModelEvaluation：模型评估结果。',
                                'type' => 'string',
                                'required' => false,
                                'example' => 'DataSet',
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
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。'."\n"
                                    ."\n",
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                            'PipelineRuns' => [
                                'description' => '工作流任务列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流任务。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PipelineRunId' => [
                                            'title' => 'run的id',
                                            'description' => '工作流任务ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'flow-hynm2bv8wqhp5esfxq',
                                        ],
                                        'Status' => [
                                            'title' => 'run状态',
                                            'description' => '工作流任务状态。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'Name' => [
                                            'title' => 'run名字',
                                            'description' => '工作流任务名字。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'myName',
                                        ],
                                        'UserId' => [
                                            'title' => '用户id',
                                            'description' => '工作流所属用户ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '1557702098194904',
                                        ],
                                        'ParentUserId' => [
                                            'title' => '父账户id',
                                            'description' => '工作流所属主账户ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '1557702098194904',
                                        ],
                                        'NodeId' => [
                                            'title' => '节点id',
                                            'description' => '节点ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'node-98odqfpcjzwdf3caq3',
                                        ],
                                        'SourceId' => [
                                            'title' => '实验id',
                                            'description' => '工作流任务来源ID。',
                                            'type' => 'string',
                                            'example' => 'lmi7d24h3kr0xczjlu',
                                        ],
                                        'IsDeleted' => [
                                            'title' => '是否被删除',
                                            'description' => '是否被删除，可能值：'."\n"
                                                .'- true：代表已被删除。'."\n"
                                                .'- false：代表未被删除。',
                                            'type' => 'boolean',
                                            'example' => 'false',
                                        ],
                                    ],
                                ],
                            ],
                            'Nodes' => [
                                'description' => '工作流任务节点列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流任务节点。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PipelineRunId' => [
                                            'title' => '运行Id',
                                            'description' => '工作流任务ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'flow-hynm2bv8wqhp5esfxq',
                                        ],
                                        'NodeId' => [
                                            'title' => '节点Id',
                                            'description' => '工作流任务节点ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'node-hynm2bv8wqhp5esfx1',
                                        ],
                                        'Status' => [
                                            'title' => '状态',
                                            'description' => '工作流任务节点状态。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'Running',
                                        ],
                                        'InputArtifactArchived' => [
                                            'title' => '输入artifact是否已保存',
                                            'description' => '输入Artifact是否已保存：'."\n"
                                                .'- true：表示已保存。'."\n"
                                                .'- false：表示未保存。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'OutputArtifactArchived' => [
                                            'title' => '输出artifact是否已保存',
                                            'description' => '输出Artifact是否已保存：'."\n"
                                                .'- true：表示已保存。'."\n"
                                                .'- false：表示未保存。',
                                            'type' => 'boolean',
                                            'example' => 'true',
                                        ],
                                        'StartedAt' => [
                                            'title' => '修改 UTC 时间，日期格式 iso8601',
                                            'description' => '工作流任务节点的开始运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'format' => 'iso8601',
                                            'example' => '2021-01-21T17:12:35.232Z',
                                        ],
                                        'FinishedAt' => [
                                            'title' => '修改 UTC 时间，日期格式 iso8601',
                                            'description' => '工作流任务节点的结束运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'format' => 'iso8601',
                                            'example' => '2021-01-21T17:12:35.232Z',
                                        ],
                                        'NodeName' => [
                                            'title' => '节点名',
                                            'description' => '工作流任务节点名。',
                                            'type' => 'string',
                                            'example' => 'dataSource',
                                        ],
                                    ],
                                ],
                            ],
                            'Outputs' => [
                                'description' => '工作流任务节点的输出产物列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流任务节点的输出产物。',
                                    'type' => 'object',
                                    'properties' => [
                                        'Name' => [
                                            'description' => '工作流任务节点的输出产物名称。',
                                            'type' => 'string',
                                            'example' => 'model_******',
                                        ],
                                        'Type' => [
                                            'description' => '输出产物的类型，可能值：'."\n"
                                                .'- Model：模型。'."\n"
                                                .'- DataSet：数据集。'."\n"
                                                .'- Metrics：度量数据。'."\n"
                                                .'- ModelEvaluation：模型评估结果。',
                                            'type' => 'string',
                                            'example' => 'DataSet',
                                        ],
                                        'Metadata' => [
                                            'description' => '输出产物的元数据。',
                                            'type' => 'object',
                                        ],
                                        'GmtCreateTime' => [
                                            'description' => '输出产物的创建时间。',
                                            'type' => 'string',
                                            'format' => 'iso8601',
                                            'example' => '2021-01-30T12:51:33.028Z',
                                        ],
                                        'Id' => [
                                            'description' => '输出产物的ID。',
                                            'type' => 'string',
                                            'example' => 'artifact-ty1xwv*******s8zf',
                                        ],
                                        'Producer' => [
                                            'description' => '输出产物的生产者。',
                                            'type' => 'string',
                                            'example' => 'id-3d25-************-77856',
                                        ],
                                        'NodeId' => [
                                            'description' => '输出产物所属的工作流任务节点的ID。',
                                            'type' => 'string',
                                            'example' => 'node-obpzu*******418grb7'."\n",
                                        ],
                                        'PipelineRunId' => [
                                            'description' => '输出产物所属的工作流任务的ID。',
                                            'type' => 'string',
                                            'example' => 'flow-dsjfk******jdskls',
                                        ],
                                        'Value' => [
                                            'description' => '输出产物的值。',
                                            'type' => 'string',
                                            'example' => '{\\"name\\": \\"model_flow_*********_node_**********_model\\", \\"location\\": {\\"name\\": \\"model_flow_**********_node_***********_model\\", \\"endpoint\\": \\"http://service.odps.aliyun.com/api\\", \\"project\\": \\"********\\"}}',
                                        ],
                                        'ExpandedArtifactIndex' => [
                                            'description' => '输出产物被扩展Artifact的索引号，起始值为0。',
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '0',
                                        ],
                                        'ExpandableArtifactName' => [
                                            'description' => '输出产物可扩展Artifact的名称。',
                                            'type' => 'string',
                                            'example' => 'inputArtifact',
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"PipelineRuns\\": [\\n    {\\n      \\"PipelineRunId\\": \\"flow-hynm2bv8wqhp5esfxq\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Name\\": \\"myName\\",\\n      \\"UserId\\": \\"1557702098194904\\",\\n      \\"ParentUserId\\": \\"1557702098194904\\",\\n      \\"NodeId\\": \\"node-98odqfpcjzwdf3caq3\\",\\n      \\"SourceId\\": \\"lmi7d24h3kr0xczjlu\\",\\n      \\"IsDeleted\\": false\\n    }\\n  ],\\n  \\"Nodes\\": [\\n    {\\n      \\"PipelineRunId\\": \\"flow-hynm2bv8wqhp5esfxq\\",\\n      \\"NodeId\\": \\"node-hynm2bv8wqhp5esfx1\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"InputArtifactArchived\\": true,\\n      \\"OutputArtifactArchived\\": true,\\n      \\"StartedAt\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"FinishedAt\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"NodeName\\": \\"dataSource\\"\\n    }\\n  ],\\n  \\"Outputs\\": [\\n    {\\n      \\"Name\\": \\"model_******\\",\\n      \\"Type\\": \\"DataSet\\",\\n      \\"Metadata\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n      \\"Id\\": \\"artifact-ty1xwv*******s8zf\\",\\n      \\"Producer\\": \\"id-3d25-************-77856\\",\\n      \\"NodeId\\": \\"node-obpzu*******418grb7\\\\n\\",\\n      \\"PipelineRunId\\": \\"flow-dsjfk******jdskls\\",\\n      \\"Value\\": \\"{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"model_flow_*********_node_**********_model\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"location\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"model_flow_**********_node_***********_model\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"endpoint\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"http://service.odps.aliyun.com/api\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"project\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"********\\\\\\\\\\\\\\"}}\\",\\n      \\"ExpandedArtifactIndex\\": 0,\\n      \\"ExpandableArtifactName\\": \\"inputArtifact\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '批量获取工作流任务状态',
        ],
        'ListPipelineRuns' => [
            'summary' => '获取工作流任务列表，支持过滤、排序和分页查询。',
            'path' => '/api/v1/pipelineruns',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流任务列表的页码。起始值为1，默认为1。',
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
                        'description' => '分页查询时设置的每页显示的工作流任务数量，默认为10。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'SourceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流任务来源ID。请在工作流详情页面查看工作流任务来源ID，详情请参见[管理工作流](~~480625~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'ybpy**********fb2z'."\n",
                    ],
                ],
                [
                    'name' => 'Name',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流任务名称。'."\n"
                            ."\n",
                        'type' => 'string',
                        'required' => false,
                        'example' => 'testName',
                    ],
                ],
                [
                    'name' => 'Order',
                    'in' => 'query',
                    'schema' => [
                        'description' => '排序的顺序，取值如下，与SortBy一起使用。'."\n"
                            .'- ASC：升序。'."\n"
                            .'- DESC（默认值）：降序。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'DESC',
                    ],
                ],
                [
                    'name' => 'SourceType',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流任务来源类型，支持如下值：'."\n"
                            .'- UNKNOWN（默认）：未指定来源类型时的默认值。'."\n"
                            .'- SDK：通过SDK创建的工作流任务。'."\n"
                            .'- DESIGNER：通过Designer创建的工作流任务。'."\n"
                            .'- M6：通过其他网站创建的工作流任务。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'UNKNOWN',
                    ],
                ],
                [
                    'name' => 'Status',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要过滤的工作流任务的状态，目前有如下几种状态：'."\n"
                            ."\n"
                            .'- Initialized'."\n"
                            .'- Running'."\n"
                            .'- Succeeded'."\n"
                            .'- Failed'."\n"
                            .'- Terminated'."\n"
                            .'- Unknown'."\n"
                            .'- Skipped'."\n"
                            .'- Terminating',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'Succeeded',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '104623',
                    ],
                ],
                [
                    'name' => 'UserId',
                    'in' => 'query',
                    'schema' => [
                        'title' => '用户id',
                        'description' => '用户ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '155**********904'."\n",
                    ],
                ],
                [
                    'name' => 'PipelineIds',
                    'in' => 'query',
                    'schema' => [
                        'title' => 'Pipeline的id集合，只有Source为M6可以使用该参数',
                        'description' => '工作流的ID集合，多个工作流ID使用半角逗号（,）分隔。如何获取工作流ID，请参见[ListPipelines](~~438051~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'flow-rer7**********0otv, flow-hynm**********sfef',
                    ],
                ],
                [
                    'name' => 'SortBy',
                    'in' => 'query',
                    'schema' => [
                        'description' => '用于排序的字段。目前有如下字段支持用于排序：'."\n"
                            ."\n"
                            .'- PipelineId'."\n"
                            .'- UserId'."\n"
                            .'- ParentUserId'."\n"
                            .'- StartedAt'."\n"
                            .'- FinishedAt'."\n"
                            .'- WorkflowServiceId'."\n"
                            .'- Duration'."\n"
                            .'- GmtCreateTime'."\n"
                            .'- GmtModifiedTime',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'PipelineId',
                    ],
                ],
                [
                    'name' => 'PipelineRunId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '工作流任务ID，如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => false,
                        'example' => "\n"
                            .'flow-14vioac3k1s07k****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                            'TotalCount' => [
                                'description' => '返回的工作流任务总量。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '15',
                            ],
                            'PipelineRuns' => [
                                'description' => '返回的工作流任务列表。'."\n"
                                    ."\n",
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流任务的详情。'."\n"
                                        ."\n",
                                    'type' => 'object',
                                    'properties' => [
                                        'PipelineRunId' => [
                                            'description' => '工作流任务ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'flow-j94y**********lf7a'."\n",
                                        ],
                                        'Name' => [
                                            'description' => '工作流任务名字。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'testName'."\n",
                                        ],
                                        'Status' => [
                                            'description' => '工作流任务状态，目前有下面几种状态：'."\n"
                                                ."\n"
                                                .'- Initialized'."\n"
                                                .'- Running'."\n"
                                                .'- Succeeded'."\n"
                                                .'- Failed'."\n"
                                                .'- Suspended'."\n"
                                                .'- Terminated'."\n"
                                                .'- Unknown'."\n"
                                                .'- Skipped'."\n"
                                                .'- Terminating',
                                            'type' => 'string',
                                            'example' => 'Succeeded',
                                        ],
                                        'UserId' => [
                                            'description' => '创建用户ID。',
                                            'type' => 'string',
                                            'example' => '155**********904',
                                        ],
                                        'ParentUserId' => [
                                            'description' => '创建用户主账户的ID。',
                                            'type' => 'string',
                                            'example' => '155**********904',
                                        ],
                                        'StartedAt' => [
                                            'description' => '工作流任务的开始UTC时间，格式iso8601。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2021-01-30T12:51:33.028Z'."\n",
                                        ],
                                        'FinishedAt' => [
                                            'description' => '工作流任务的结束UTC时间，格式iso8601。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2021-01-30T12:52:33.028Z'."\n",
                                        ],
                                        'NodeId' => [
                                            'description' => '工作流任务的节点ID。',
                                            'type' => 'string',
                                            'example' => 'node-n06d**********fc53'."\n",
                                        ],
                                        'Duration' => [
                                            'description' => '工作流任务的运行时长，单位为秒。'."\n"
                                                ."\n",
                                            'type' => 'integer',
                                            'format' => 'int32',
                                            'example' => '60',
                                        ],
                                        'WorkspaceId' => [
                                            'description' => '所属工作空间ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '15945',
                                        ],
                                        'Message' => [
                                            'description' => '工作流任务失败提示信息。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'error message'."\n",
                                        ],
                                        'SourceType' => [
                                            'description' => '工作流任务来源类型，支持如下值：'."\n"
                                                .'- UNKNOWN'."\n"
                                                .'- SDK'."\n"
                                                .'- DESIGNER'."\n"
                                                .'- M6'."\n",
                                            'type' => 'string',
                                            'example' => 'UNKNOWN',
                                        ],
                                        'SourceId' => [
                                            'description' => '工作流任务的来源ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'abcd*********hxfu'."\n",
                                        ],
                                        'GmtCreateTime' => [
                                            'description' => '创建UTC时间，格式iso8601。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2021-01-30T12:51:33.028Z'."\n",
                                        ],
                                        'GmtModifiedTime' => [
                                            'description' => '最近修改UTC时间，格式iso8601。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => '2021-01-30T12:51:33.028Z'."\n",
                                        ],
                                        'PipelineId' => [
                                            'description' => '工作流ID。'."\n"
                                                ."\n",
                                            'type' => 'string',
                                            'example' => 'pipeline-j94y**********lf7a'."\n",
                                        ],
                                        'Accessibility' => [
                                            'description' => '工作流任务的可见性，目前支持：'."\n"
                                                .'- PUBLIC'."\n"
                                                .'- PRIVATE',
                                            'type' => 'string',
                                            'example' => 'PUBLIC',
                                        ],
                                        'PipelineRunUri' => [
                                            'description' => '工作流任务详情URL。',
                                            'type' => 'string',
                                            'example' => 'https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****',
                                        ],
                                    ],
                                ],
                                'required' => true,
                            ],
                        ],
                    ],
                ],
            ],
            'staticInfo' => [],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 15,\\n  \\"PipelineRuns\\": [\\n    {\\n      \\"PipelineRunId\\": \\"flow-j94y**********lf7a\\\\n\\",\\n      \\"Name\\": \\"testName\\\\n\\",\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"UserId\\": \\"155**********904\\",\\n      \\"ParentUserId\\": \\"155**********904\\",\\n      \\"StartedAt\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n      \\"FinishedAt\\": \\"2021-01-30T12:52:33.028Z\\\\n\\",\\n      \\"NodeId\\": \\"node-n06d**********fc53\\\\n\\",\\n      \\"Duration\\": 60,\\n      \\"WorkspaceId\\": \\"15945\\",\\n      \\"Message\\": \\"error message\\\\n\\",\\n      \\"SourceType\\": \\"UNKNOWN\\",\\n      \\"SourceId\\": \\"abcd*********hxfu\\\\n\\",\\n      \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n      \\"PipelineId\\": \\"pipeline-j94y**********lf7a\\\\n\\",\\n      \\"Accessibility\\": \\"PUBLIC\\",\\n      \\"PipelineRunUri\\": \\"https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****\\"\\n    }\\n  ]\\n}","type":"json"}]',
            'title' => '获取工作流任务列表',
        ],
        'TerminatePipelineRun' => [
            'summary' => '终止工作流任务。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/termination',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'title' => 'Run id',
                        'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'flow-rbvg5wzljzjhc9ks92',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
            'title' => '终止工作流任务	',
        ],
        'RerunPipelineRun' => [
            'summary' => '重新执行工作流任务。',
            'path' => '/api/v1/pipelineruns/{PipelineRunId}/rerun',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineRunId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID，如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'run-rbvg5wzljzjhc9ks92',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结果。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\"\\n}","type":"json"}]',
            'title' => '开始工作流任务',
        ],
        'CreatePipeline' => [
            'summary' => '创建工作流（Pipeline）。工作流是由一系列节点组成的有向无环图，定义了一个机器学习流程。',
            'path' => '/api/v1/pipelines',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求body。',
                        'type' => 'object',
                        'properties' => [
                            'WorkspaceId' => [
                                'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                                'type' => 'string',
                                'required' => true,
                                'example' => '72***',
                            ],
                            'Manifest' => [
                                'description' => '工作流定义，具体样例见下方请求参数补充说明。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'apiVersion: "core/v1"*********',
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
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681******',
                            ],
                            'PipelineId' => [
                                'description' => '工作流ID。',
                                'type' => 'string',
                                'example' => 'pipeline-hynm2bv8**********',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681******\\",\\n  \\"PipelineId\\": \\"pipeline-hynm2bv8**********\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePipelineResponse>\\n    <RequestId>DA869D1B-035A-43B2-ACC1-C56681BD9FAA</RequestId>\\n    <PipelineId>pipeline-hynm2bv8**********</PipelineId>\\n</CreatePipelineResponse>","errorExample":""}]',
            'title' => '创建工作流',
            'requestParamsDescription' => '工作流定义样例：该工作流由读数据表（`data_source`），类型转换（`type_transform`）组成。'."\n"
                ."\n"
                .'```'."\n"
                .'apiVersion: "core/v1"'."\n"
                .'metadata:'."\n"
                .'  provider: "166233998075****"'."\n"
                .'  version: "v1"'."\n"
                .'  identifier: "my_pipeline"'."\n"
                .'  name: "source-transform"'."\n"
                .'spec:'."\n"
                .'  inputs:'."\n"
                .'    parameters:'."\n"
                .'    - name: "execution_maxcompute"'."\n"
                .'      value:'."\n"
                .'        spec:'."\n"
                .'          endpoint: "http://service.cn.maxcompute.aliyun-inc.com/api"'."\n"
                .'          odpsProject: "test_i****"'."\n"
                .'      type: "Map"'."\n"
                .'  pipelines:'."\n"
                .'  - apiVersion: "core/v1"'."\n"
                .'    metadata:'."\n"
                .'      provider: "pai"'."\n"
                .'      version: "v1"'."\n"
                .'      identifier: "data_source"'."\n"
                .'      name: "data-source"'."\n"
                .'      displayName: "读数据表-1"'."\n"
                .'    spec:'."\n"
                .'      arguments:'."\n"
                .'        parameters:'."\n"
                .'        - name: "inputTableName"'."\n"
                .'          value: "pai_online_project.wumai_data"'."\n"
                .'        - name: "execution"'."\n"
                .'          from: "{{inputs.parameters.execution_maxcompute}}"'."\n"
                .'  - apiVersion: "core/v1"'."\n"
                .'    metadata:'."\n"
                .'      provider: "pai"'."\n"
                .'      version: "v1"'."\n"
                .'      identifier: "type_transform"'."\n"
                .'      name: "type-transform"'."\n"
                .'      displayName: "类型转换-1"'."\n"
                .'    spec:'."\n"
                .'      arguments:'."\n"
                .'        artifacts:'."\n"
                .'        - name: "inputTable"'."\n"
                .'          from: "{{pipelines.data_source.outputs.artifacts.outputTable}}"'."\n"
                .'        parameters:'."\n"
                .'        - name: "cols_to_double"'."\n"
                .'          value: "time,hour,pm2,pm10,so2,co,no2"'."\n"
                .'        - name: "execution"'."\n"
                .'          from: "{{inputs.parameters.execution_maxcompute}}"'."\n"
                .'      dependencies:'."\n"
                .'      - "data_source"'."\n"
                .'```'."\n"
                .'其中关键参数配置如下：'."\n"
                ."\n"
                .'- **provider**：替换为您的账号ID。'."\n"
                .'- **odpsProject**：替换为绑定到工作空间中的MaxCompute资源名称。如何查询MaxCompute资源名称，请参见[管理工作空间](~~430481~~)。',
        ],
        'DeletePipeline' => [
            'summary' => '删除工作流。',
            'path' => '/api/v1/pipelines/{PipelineId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID。如何获取工作流ID，请参见[ListPipelines](~~438051~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pipeline-hynm2bv8wqhp5e****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\"\\n}","errorExample":""},{"type":"xml","example":"<DeletePipelineResponse>\\n    <RequestId>DA869D1B-035A-43B2-ACC1-C56681BD9FAA</RequestId>\\n</DeletePipelineResponse>","errorExample":""}]',
            'title' => '删除工作流',
            'description' => '如果指定的工作流作为共享工作流被用户订阅、或者作为子工作流被其它工作流引用，则不允许删除。',
        ],
        'UpdatePipeline' => [
            'summary' => '更新工作流的定义。',
            'path' => '/api/v1/pipelines/{PipelineId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pipeline-hynm2bv8**********',
                    ],
                ],
                [
                    'name' => 'body',
                    'in' => 'body',
                    'style' => 'json',
                    'schema' => [
                        'description' => '请求Body。',
                        'type' => 'object',
                        'properties' => [
                            'Manifest' => [
                                'description' => '工作流定义，具体样例见下方请求参数补充说明。',
                                'type' => 'string',
                                'required' => true,
                                'example' => 'apiVersion: "core/v1"*********',
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
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681******',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681******\\"\\n}","type":"json"}]',
            'title' => '更新工作流',
            'requestParamsDescription' => '工作流定义样例：该工作流由读数据表（`data_source`），类型转换（`type_transform`）组成。'."\n"
                ."\n"
                .'```'."\n"
                .'apiVersion: "core/v1"'."\n"
                .'metadata:'."\n"
                .'  provider: "166233998075****"'."\n"
                .'  version: "v1"'."\n"
                .'  identifier: "my_pipeline"'."\n"
                .'  name: "source-transform"'."\n"
                .'spec:'."\n"
                .'  inputs:'."\n"
                .'    parameters:'."\n"
                .'    - name: "execution_maxcompute"'."\n"
                .'      value:'."\n"
                .'        spec:'."\n"
                .'          endpoint: "http://service.cn.maxcompute.aliyun-inc.com/api"'."\n"
                .'          odpsProject: "test_i****"'."\n"
                .'      type: "Map"'."\n"
                .'  pipelines:'."\n"
                .'  - apiVersion: "core/v1"'."\n"
                .'    metadata:'."\n"
                .'      provider: "pai"'."\n"
                .'      version: "v1"'."\n"
                .'      identifier: "data_source"'."\n"
                .'      name: "data-source"'."\n"
                .'      displayName: "读数据表-1"'."\n"
                .'    spec:'."\n"
                .'      arguments:'."\n"
                .'        parameters:'."\n"
                .'        - name: "inputTableName"'."\n"
                .'          value: "pai_online_project.wumai_data"'."\n"
                .'        - name: "execution"'."\n"
                .'          from: "{{inputs.parameters.execution_maxcompute}}"'."\n"
                .'  - apiVersion: "core/v1"'."\n"
                .'    metadata:'."\n"
                .'      provider: "pai"'."\n"
                .'      version: "v1"'."\n"
                .'      identifier: "type_transform"'."\n"
                .'      name: "type-transform"'."\n"
                .'      displayName: "类型转换-1"'."\n"
                .'    spec:'."\n"
                .'      arguments:'."\n"
                .'        artifacts:'."\n"
                .'        - name: "inputTable"'."\n"
                .'          from: "{{pipelines.data_source.outputs.artifacts.outputTable}}"'."\n"
                .'        parameters:'."\n"
                .'        - name: "cols_to_double"'."\n"
                .'          value: "time,hour,pm2,pm10,so2,co,no2"'."\n"
                .'        - name: "execution"'."\n"
                .'          from: "{{inputs.parameters.execution_maxcompute}}"'."\n"
                .'      dependencies:'."\n"
                .'      - "data_source"'."\n"
                .'```'."\n"
                .'其中关键参数配置如下：'."\n"
                .'- **provider**：替换为您的账号ID。'."\n"
                .'- **odpsProject**：替换为绑定到工作空间中的MaxCompute资源名称。如何查询MaxCompute资源名称，请参见[管理工作空间](~~430481~~)。',
        ],
        'GetPipeline' => [
            'summary' => '获取Pipeline信息。',
            'path' => '/api/v1/pipelines/{PipelineId}',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PipelineId',
                    'in' => 'path',
                    'schema' => [
                        'description' => '工作流ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                        'type' => 'string',
                        'required' => true,
                        'example' => 'pipeline-hynm2bv8wqhp5e****',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => '63EDFF2F-4D51-46F0-9D65-2F8F393B****',
                            ],
                            'PipelineId' => [
                                'description' => '工作流ID。',
                                'type' => 'string',
                                'example' => 'pipeline-hynm2bv8wqhp5e****',
                            ],
                            'Provider' => [
                                'description' => '自定义工作流，为用户ID。官方工作流为PAI。',
                                'type' => 'string',
                                'example' => '132668941337****',
                            ],
                            'Identifier' => [
                                'description' => '工作流标识。',
                                'type' => 'string',
                                'example' => 'SqlWrite',
                            ],
                            'Version' => [
                                'description' => '工作流版本。',
                                'type' => 'string',
                                'example' => 'v1',
                            ],
                            'Manifest' => [
                                'description' => '工作流定义。',
                                'type' => 'string',
                                'example' => 'apiVersion: ****',
                            ],
                            'GmtCreateTime' => [
                                'description' => '创建UTC时间，日期格式ISO8601。',
                                'type' => 'string',
                                'example' => '2021-01-21T17:12:35.232Z',
                            ],
                            'GmtModifiedTime' => [
                                'description' => '最后修改UTC时间，日期格式ISO8601。',
                                'type' => 'string',
                                'example' => '2021-01-21T17:12:35.232Z',
                            ],
                            'Uuid' => [
                                'description' => '工作流当前版本标识，用户每次更新，会生成该Uuid。',
                                'type' => 'string',
                                'example' => 'q8dp9hklueznhg****',
                            ],
                            'WorkspaceId' => [
                                'description' => '工作空间ID。',
                                'type' => 'string',
                                'example' => '726**',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63EDFF2F-4D51-46F0-9D65-2F8F393B****\\",\\n  \\"PipelineId\\": \\"pipeline-hynm2bv8wqhp5e****\\",\\n  \\"Provider\\": \\"132668941337****\\",\\n  \\"Identifier\\": \\"SqlWrite\\",\\n  \\"Version\\": \\"v1\\",\\n  \\"Manifest\\": \\"apiVersion: ****\\",\\n  \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"Uuid\\": \\"q8dp9hklueznhg****\\",\\n  \\"WorkspaceId\\": \\"726**\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取工作流',
            'responseParamsDescription' => '返回参数Manifest补充说明'."\n"
                .'```'."\n"
                .'apiVersion: "core/v1"'."\n"
                .'metadata:'."\n"
                .'  version: "v1"'."\n"
                .'  # 工作流的提供方。'."\n"
                .'  provider: "132668**********"'."\n"
                .'  identifier: "my***"'."\n"
                .'spec:'."\n"
                .'  inputs:'."\n"
                .'    parameters:'."\n"
                .'    - name: "inputTableName"'."\n"
                .'      value: "myDefault"'."\n"
                .'      # 类型，支持String， Double， Bool， Int， Map， List。'."\n"
                .'      type: "String"'."\n"
                .'      desc: "Table Name"'."\n"
                .'      # 参数是否必填，默认false。'."\n"
                .'      required: false'."\n"
                .'  outputs:'."\n"
                .'    artifacts:'."\n"
                .'    - name: "outputTable"'."\n"
                .'      metadata:'."\n"
                .'        # 类型，支持DataSet，Model，ModelEvaluation，Any，DataStream，Raw（原始数据），本例为DataSet。'."\n"
                .'        type:'."\n"
                .'          DataSet:'."\n"
                .'            locationType: "MaxComputeTable"'."\n"
                .'      desc: "Source MaxCompute Table Output Port"'."\n"
                .'  container:'."\n"
                .'    image: "registry.***.com/***/***:v*"'."\n"
                .'    command:'."\n"
                .'    - "bash"'."\n"
                .'    - "***.sh"'."\n"
                .'    volumeMounts:'."\n"
                .'    - name: "download-volume"'."\n"
                .'      path: "/***"'."\n"
                .'  initContainers:'."\n"
                .'  - image: "registry.***.com/***/***:v*"'."\n"
                .'    command:'."\n"
                .'    - "***.sh"'."\n"
                .'    args:'."\n"
                .'    - "--***"'."\n"
                .'    name: "initdownload"'."\n"
                .'    volumeMounts:'."\n"
                .'    - name: "download-volume"'."\n"
                .'      path: "/downloadPath"'."\n"
                .'  volumes:'."\n"
                .'  - name: "download-volume"'."\n"
                .'    emptyDir: {}'."\n"
                .'```',
        ],
        'ListPipelines' => [
            'summary' => '获取工作流列表。',
            'path' => '/api/v1/pipelines',
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
            'deprecated' => false,
            'parameters' => [
                [
                    'name' => 'PageNumber',
                    'in' => 'query',
                    'schema' => [
                        'description' => '页数。',
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
                        'description' => '每页大小。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'required' => false,
                        'example' => '10',
                    ],
                ],
                [
                    'name' => 'PipelineIdentifier',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要过滤的工作流标识。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'SqlWriteTable_2',
                    ],
                ],
                [
                    'name' => 'PipelineProvider',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要过滤的工作流提供者。PAI官方提供的工作流，Provider为pai，您创建的工作流，该值为您的云账号ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'pai',
                    ],
                ],
                [
                    'name' => 'PipelineVersion',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要过滤的工作流版本。',
                        'type' => 'string',
                        'required' => false,
                        'example' => 'v1',
                    ],
                ],
                [
                    'name' => 'WorkspaceId',
                    'in' => 'query',
                    'schema' => [
                        'description' => '需要过滤的工作空间ID。',
                        'type' => 'string',
                        'required' => false,
                        'example' => '726**',
                    ],
                ],
                [
                    'name' => 'FuzzyMatching',
                    'in' => 'query',
                    'schema' => [
                        'title' => '模糊匹配',
                        'description' => '是否模糊匹配。',
                        'type' => 'boolean',
                        'required' => false,
                        'enumValueTitles' => [
                            'true' => 'true',
                            'false' => 'false',
                        ],
                        'example' => 'false',
                    ],
                ],
            ],
            'responses' => [
                200 => [
                    'schema' => [
                        'title' => 'Schema of Response',
                        'description' => '返回结构体。',
                        'type' => 'object',
                        'properties' => [
                            'RequestId' => [
                                'title' => 'Id of the request',
                                'description' => '请求ID。',
                                'type' => 'string',
                                'example' => 'DA869D1B-035A-43B2-ACC1-C56681B****',
                            ],
                            'Pipelines' => [
                                'description' => '工作流列表。',
                                'type' => 'array',
                                'items' => [
                                    'description' => '工作流。',
                                    'type' => 'object',
                                    'properties' => [
                                        'PipelineId' => [
                                            'description' => '工作流ID。',
                                            'type' => 'string',
                                            'example' => 'pipeline-c0h44g3wlwkj8o*****',
                                        ],
                                        'GmtCreateTime' => [
                                            'description' => '创建UTC时间，日期格式iso8601。',
                                            'type' => 'string',
                                            'example' => '2021-01-06T14:32:50Z',
                                        ],
                                        'GmtModifiedTime' => [
                                            'description' => '修改UTC时间，日期格式iso8601。',
                                            'type' => 'string',
                                            'example' => '2021-01-06T22:26:24Z',
                                        ],
                                        'Provider' => [
                                            'description' => '工作流提供者。PAI平台提供的工作流Provider为pai。',
                                            'type' => 'string',
                                            'example' => 'pai',
                                        ],
                                        'Identifier' => [
                                            'description' => '工作流标识。',
                                            'type' => 'string',
                                            'example' => 'SqlWriteTable_2',
                                        ],
                                        'Version' => [
                                            'description' => '工作流版本。',
                                            'type' => 'string',
                                            'example' => 'v1',
                                        ],
                                        'Uuid' => [
                                            'description' => '工作流当前版本标识，用户每次更新，会生成该uuid。',
                                            'type' => 'string',
                                            'example' => 'q8dp9hklueznh*****',
                                        ],
                                        'WorkspaceId' => [
                                            'description' => '工作空间ID。',
                                            'type' => 'string',
                                            'example' => '726**',
                                        ],
                                    ],
                                ],
                            ],
                            'TotalCount' => [
                                'description' => '总数。',
                                'type' => 'integer',
                                'format' => 'int64',
                                'example' => '15',
                            ],
                        ],
                    ],
                ],
            ],
            'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681B****\\",\\n  \\"Pipelines\\": [\\n    {\\n      \\"PipelineId\\": \\"pipeline-c0h44g3wlwkj8o*****\\",\\n      \\"GmtCreateTime\\": \\"2021-01-06T14:32:50Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-06T22:26:24Z\\",\\n      \\"Provider\\": \\"pai\\",\\n      \\"Identifier\\": \\"SqlWriteTable_2\\",\\n      \\"Version\\": \\"v1\\",\\n      \\"Uuid\\": \\"q8dp9hklueznh*****\\",\\n      \\"WorkspaceId\\": \\"726**\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 15\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
            'title' => '获取工作流列表',
        ],
    ],
    'endpoints' => [
        [
            'regionId' => 'cn-beijing',
            'endpoint' => 'paiflow.cn-beijing.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hangzhou',
            'endpoint' => 'paiflow.cn-hangzhou.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shanghai',
            'endpoint' => 'paiflow.cn-shanghai.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-shenzhen',
            'endpoint' => 'paiflow.cn-shenzhen.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-hongkong',
            'endpoint' => 'paiflow.cn-hongkong.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-1',
            'endpoint' => 'paiflow.ap-southeast-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-east-1',
            'endpoint' => 'paiflow.us-east-1.aliyuncs.com',
        ],
        [
            'regionId' => 'us-west-1',
            'endpoint' => 'paiflow.us-west-1.aliyuncs.com',
        ],
        [
            'regionId' => 'eu-central-1',
            'endpoint' => 'paiflow.eu-central-1.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-south-1',
            'endpoint' => 'paiflow.ap-south-1.aliyuncs.com',
        ],
        [
            'regionId' => 'cn-wulanchabu',
            'endpoint' => 'paiflow.cn-wulanchabu.aliyuncs.com',
        ],
        [
            'regionId' => 'ap-southeast-5',
            'endpoint' => 'paiflow.ap-southeast-5.aliyuncs.com',
        ],
    ],
];
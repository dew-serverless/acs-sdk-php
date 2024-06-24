<?php return array (
  'version' => '1.0',
  'info' => 
  array (
    'style' => 'ROA',
    'product' => 'PAIFlow',
    'version' => '2021-02-02',
  ),
  'directories' => 
  array (
    0 => 
    array (
      'id' => 168663,
      'title' => '工作流任务',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePipelineRun',
        1 => 'DeletePipelineRun',
        2 => 'StartPipelineRun',
        3 => 'UpdatePipelineRun',
        4 => 'GetPipelineRun',
        5 => 'ListPipelineRunNodeLogs',
        6 => 'GetPipelineRunNode',
        7 => 'ListPipelineRunNodeOutputs',
        8 => 'ListPipelineRunNodeStatus',
        9 => 'ListPipelineRunsStatus',
        10 => 'ListPipelineRuns',
        11 => 'TerminatePipelineRun',
        12 => 'RerunPipelineRun',
      ),
    ),
    1 => 
    array (
      'id' => 164779,
      'title' => '工作流',
      'type' => 'directory',
      'children' => 
      array (
        0 => 'CreatePipeline',
        1 => 'DeletePipeline',
        2 => 'UpdatePipeline',
        3 => 'GetPipeline',
        4 => 'ListPipelines',
      ),
    ),
  ),
  'components' => 
  array (
    'schemas' => 
    array (
      'BriefPipelineRun' => 
      array (
        'title' => 'BriefPipelineRun',
        'type' => 'object',
        'properties' => 
        array (
          'PipelineRunId' => 
          array (
            'title' => '工作流任务ID。',
            'type' => 'string',
            'example' => 'flow-j94y**********lf7a',
          ),
          'Name' => 
          array (
            'title' => '工作流任务名字。',
            'type' => 'string',
            'example' => 'testName',
          ),
          'Status' => 
          array (
            'title' => '需要过滤的工作流任务的状态，目前有如下几种状态：  Initialized Running Succeeded Failed Suspended Terminated Unknown Skipped Terminating',
            'type' => 'string',
            'example' => 'Succeeded',
          ),
          'UserId' => 
          array (
            'title' => '创建用户ID。',
            'type' => 'string',
            'example' => '155**********904',
          ),
          'ParentUserId' => 
          array (
            'title' => '用户主账户的ID。',
            'type' => 'string',
            'example' => '155**********904',
          ),
          'StartedAt' => 
          array (
            'title' => '工作流任务的开始UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'FinishedAt' => 
          array (
            'title' => '工作流任务的结束UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'NodeId' => 
          array (
            'title' => '工作流任务的根节点ID。',
            'type' => 'string',
            'example' => 'node-n06d**********fc53',
          ),
          'Duration' => 
          array (
            'title' => '工作流任务的运行时长，单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '394',
          ),
          'WorkspaceId' => 
          array (
            'title' => '所属工作空间ID。',
            'type' => 'string',
            'example' => '1***60',
          ),
          'Message' => 
          array (
            'title' => '工作流任务失败提示信息。',
            'type' => 'string',
            'example' => 'error message',
          ),
          'SourceType' => 
          array (
            'title' => '工作流任务的来源类型。',
            'type' => 'string',
            'example' => 'SDK',
          ),
          'SourceId' => 
          array (
            'title' => '工作流任务的来源ID。',
            'type' => 'string',
            'example' => 'exp-abcd*********hxfu',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '最近修改UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'PipelineId' => 
          array (
            'title' => '工作流ID。',
            'type' => 'string',
            'example' => 'pipeline-j94y**********lf7a',
          ),
          'Accessibility' => 
          array (
            'title' => '工作流任务的可见性。',
            'type' => 'string',
            'example' => 'PUBLIC',
          ),
        ),
      ),
      'FullPipelineRun' => 
      array (
        'title' => 'PipelineRun描述',
        'type' => 'object',
        'properties' => 
        array (
          'PipelineRunId' => 
          array (
            'title' => '工作流任务ID。',
            'type' => 'string',
            'example' => 'flow-j94y**********lf7a',
          ),
          'Name' => 
          array (
            'title' => '工作流任务名字。',
            'type' => 'string',
            'example' => 'testName',
          ),
          'Status' => 
          array (
            'title' => '需要过滤的工作流任务的状态，目前有如下几种状态：  Initialized Running Succeeded Failed Suspended Terminated Unknown Skipped Terminating',
            'type' => 'string',
            'example' => 'Succeeded',
          ),
          'Manifest' => 
          array (
            'title' => '工作流任务的定义。',
            'type' => 'string',
            'example' => '{"ApiVersion":"core/v1","Metadata":{"NodeId":"node-n06d**********fc53","Provider":"155**********904","Name":"flow-j94y**********lf7a","Version":"v1","Identifier":"9fe11111-****-****-****-****ec811861","Namespace":null,"DisplayName":"name","NodeType":"Dag"},"Spec":{}}',
          ),
          'Arguments' => 
          array (
            'title' => '工作流任务的参数。',
            'type' => 'string',
            'example' => '{"arguments":{"parameters":[{"name":"execution","value":{"endpoint":"******","odpsProject":"******"}}]}}',
          ),
          'UserId' => 
          array (
            'title' => '创建用户ID。',
            'type' => 'string',
            'example' => '155**********904',
          ),
          'ParentUserId' => 
          array (
            'title' => '用户主账户的ID。',
            'type' => 'string',
            'example' => '155**********904',
          ),
          'StartedAt' => 
          array (
            'title' => '工作流任务的开始UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'FinishedAt' => 
          array (
            'title' => '工作流任务的结束UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'NodeId' => 
          array (
            'title' => '工作流任务的根节点ID。',
            'type' => 'string',
            'example' => 'node-n06d**********fc53',
          ),
          'Duration' => 
          array (
            'title' => '工作流任务的运行时长，单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '394',
          ),
          'WorkspaceId' => 
          array (
            'title' => '所属工作空间ID。',
            'type' => 'string',
            'example' => '1***60',
          ),
          'Message' => 
          array (
            'title' => '工作流任务失败提示信息。',
            'type' => 'string',
            'example' => 'error message',
          ),
          'SourceType' => 
          array (
            'title' => '工作流任务的来源类型。',
            'type' => 'string',
            'example' => 'SDK',
          ),
          'SourceId' => 
          array (
            'title' => '工作流任务的来源ID。',
            'type' => 'string',
            'example' => 'exp-abcd*********hxfu',
          ),
          'Options' => 
          array (
            'title' => '工作流任务选项，格式为JSON。',
            'type' => 'string',
            'example' => '{"mlflow":{"experimentId":"exp-**********"}}',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '最近修改UTC时间，格式iso8601。',
            'type' => 'string',
            'format' => 'iso8601',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'PipelineId' => 
          array (
            'title' => '工作流ID。',
            'type' => 'string',
            'example' => 'pipeline-j94y**********lf7a',
          ),
          'Accessibility' => 
          array (
            'title' => '工作流任务的可见性。',
            'type' => 'string',
            'example' => 'PUBLIC',
          ),
        ),
      ),
      'Node' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'ApiVersion' => 
          array (
            'title' => '工作流定义的版本。',
            'type' => 'string',
            'example' => 'core/v1',
          ),
          'Metadata' => 
          array (
            'title' => '节点的元信息。',
            'type' => 'object',
            'properties' => 
            array (
              'NodeId' => 
              array (
                'title' => '节点的ID。',
                'type' => 'string',
                'example' => 'node-wcs9z********27ps3',
              ),
              'Provider' => 
              array (
                'title' => '节点所对应的工作流的提供方，通常情况下指代工作流的上传者（官方提供的工作流Provider为pai）。',
                'type' => 'string',
                'example' => '15577********904',
              ),
              'Name' => 
              array (
                'title' => '节点的名字。',
                'type' => 'string',
                'example' => 'test',
              ),
              'Version' => 
              array (
                'title' => '节点所对应的工作流的版本。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'Identifier' => 
              array (
                'title' => '节点所对应的工作流的标识名。',
                'type' => 'string',
                'example' => 'composite-pipeline',
              ),
              'NodeType' => 
              array (
                'title' => '节点的类型，包含有以下类型：  Task，具体运行的一个节点 ；Dag，复合类型节点，本质是一个由子节点组成的Dag图；Loop，循环节点',
                'type' => 'string',
                'example' => 'Dag',
              ),
              'RelatedNodeIds' => 
              array (
                'title' => 'Alink逻辑节点所对应的物理节点ID / Alink物理节点所对应的逻辑节点ID',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'example' => 'node-wcs9z********27ps3',
                ),
              ),
              'DisplayName' => 
              array (
                'title' => '节点的展示名称（可能会被修改）。',
                'type' => 'string',
                'example' => 'test',
              ),
            ),
          ),
          'Spec' => 
          array (
            'title' => '节点的执行体信息。',
            'type' => 'object',
            'properties' => 
            array (
              'HasPipelines' => 
              array (
                'title' => '该节点是否含有子节点：  true：该节点为复合类型节点，如果需要进一步查询其子节点信息，需要传入更深的Depth参数。 false：该节点为实际运行的节点。',
                'type' => 'boolean',
                'example' => 'true',
              ),
              'Dependencies' => 
              array (
                'title' => '节点与其他节点的依赖关系。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                  'example' => 'node-ab*****dsfsd',
                ),
              ),
              'Pipelines' => 
              array (
                'title' => '子工作流列表。',
                'type' => 'array',
                'items' => 
                array (
                  '$ref' => '#/components/schemas/Node',
                ),
              ),
              'Inputs' => 
              array (
                'title' => '节点的输入信息。',
                '$ref' => '#/components/schemas/NodeIO',
              ),
              'Outputs' => 
              array (
                'title' => '节点的输出信息。',
                '$ref' => '#/components/schemas/NodeIO',
              ),
              'When' => 
              array (
                'title' => '节点的条件判断信息。',
                'type' => 'string',
                'example' => '{{inputs.parameters.parentInput}} == 12',
              ),
              'WithItems' => 
              array (
                'title' => '定义了一个数组，每一项会扩展为一个节点。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'string',
                ),
              ),
              'WithParam' => 
              array (
                'title' => '定义了对一个参数的引用，参数值是一个数组，每一项会扩展为一个节点。',
                'type' => 'string',
                'example' => '{{pipelines.step1.outputs.parameters.outputparam}}',
              ),
              'WithSequence' => 
              array (
                'title' => '定义了一个数字序列，序列每一项会扩展为一个节点。',
                'type' => 'object',
                'properties' => 
                array (
                  'Start' => 
                  array (
                    'title' => '起始数字',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '1',
                  ),
                  'End' => 
                  array (
                    'title' => '结束数字',
                    'type' => 'integer',
                    'format' => 'int64',
                    'example' => '5',
                  ),
                  'Format' => 
                  array (
                    'title' => '展现格式',
                    'type' => 'string',
                    'example' => 'test%02X',
                  ),
                ),
              ),
              'Parallelism' => 
              array (
                'title' => '节点的并行度。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '8',
              ),
            ),
          ),
          'StatusInfo' => 
          array (
            'title' => '节点的执行状态信息。',
            'type' => 'object',
            'properties' => 
            array (
              'FinishedAt' => 
              array (
                'title' => '节点执行的结束时间。',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2021-10-15T10:40:54.000Z',
              ),
              'StartedAt' => 
              array (
                'title' => '节点执行的开始时间。',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2021-10-15T10:39:58.000Z',
              ),
              'Status' => 
              array (
                'title' => '节点的运行状态：  Succeed：运行成功。 Running：运行中。 Failed：运行失败。 Skipped：跳过（前序节点失败导致）。 ReadyToSchedule：准备运行（前序节点未完成导致）。 Unknown：未知。',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'Conditions' => 
              array (
                'title' => '节点的运行状况。',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Type' => 
                    array (
                      'title' => '类型。',
                      'type' => 'string',
                      'example' => 'Completed',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态。',
                      'type' => 'string',
                      'example' => 'True',
                    ),
                  ),
                ),
              ),
              'Progress' => 
              array (
                'title' => '节点的运行进度。',
                'type' => 'string',
                'example' => '9/9',
              ),
            ),
          ),
        ),
      ),
      'NodeIO' => 
      array (
        'title' => 'A short description of struct',
        'type' => 'object',
        'properties' => 
        array (
          'Artifacts' => 
          array (
            'title' => '节点的产物，例如输入、输出的数据等。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
            ),
          ),
          'Parameters' => 
          array (
            'title' => '节点的参数列表。',
            'type' => 'array',
            'items' => 
            array (
              'type' => 'object',
            ),
          ),
        ),
      ),
      'Pipeline' => 
      array (
        'title' => 'Pipeline的结构定义。',
        'type' => 'object',
        'properties' => 
        array (
          'PipelineId' => 
          array (
            'title' => 'Pipeline ID。',
            'type' => 'string',
            'example' => 'pipeline-hynm2bv8**********',
          ),
          'GmtCreateTime' => 
          array (
            'title' => '创建UTC时间，日期格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35.232Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => '修改UTC时间，日期格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-21T17:12:35.232Z',
          ),
          'Provider' => 
          array (
            'title' => '用户自定义Pipeline时，为用户ID。 官方Pipeline为pai。',
            'type' => 'string',
            'example' => '132668**********',
          ),
          'Identifier' => 
          array (
            'title' => 'Pipeline标识。',
            'type' => 'string',
            'example' => 'SqlWrite',
          ),
          'Version' => 
          array (
            'title' => 'Pipeline版本。',
            'type' => 'string',
            'example' => 'v1',
          ),
          'Uuid' => 
          array (
            'title' => 'Pipeline当前版本标识，用户每次更新，会生成该uuid。',
            'type' => 'string',
            'example' => 'q8dp9hkl**********',
          ),
          'WorkspaceId' => 
          array (
            'title' => 'AI工作空间ID。',
            'type' => 'string',
            'example' => '72***',
          ),
        ),
      ),
      'Run' => 
      array (
        'title' => 'Run的结构定义。',
        'description' => 'Run的结构定义。',
        'type' => 'object',
        'properties' => 
        array (
          'RunId' => 
          array (
            'title' => 'Run ID。',
            'type' => 'string',
            'example' => 'flow-r2b034bh**********',
          ),
          'Name' => 
          array (
            'title' => 'Run的名称。',
            'type' => 'string',
            'example' => 'MyName',
          ),
          'Status' => 
          array (
            'title' => 'Run的状态，目前如下几种状态。  Initialized Running Succeeded Failed Suspended Terminated Unknown Skipped Terminating',
            'type' => 'string',
            'example' => 'Running',
          ),
          'UserId' => 
          array (
            'title' => '创建人ID。',
            'type' => 'string',
            'example' => '155**********904',
          ),
          'ParentUserId' => 
          array (
            'title' => 'Owner ID。',
            'type' => 'string',
            'example' => '155**********904',
          ),
          'StartedAt' => 
          array (
            'title' => 'Run运行开始时间。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1638430932001',
          ),
          'FinishedAt' => 
          array (
            'title' => 'Run运行完成时间。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '1638430932100',
          ),
          'NodeId' => 
          array (
            'title' => '节点ID。',
            'type' => 'string',
            'example' => 'node-sdk**********uhrf',
          ),
          'Duration' => 
          array (
            'title' => '运行时长，单位为秒。',
            'type' => 'integer',
            'format' => 'int64',
            'example' => '100',
          ),
          'WorkspaceId' => 
          array (
            'title' => '所属工作空间ID。',
            'type' => 'string',
            'example' => '78***',
          ),
          'Message' => 
          array (
            'title' => '错误信息。',
            'type' => 'string',
            'example' => 'error message',
          ),
          'Source' => 
          array (
            'title' => '来源。',
            'type' => 'string',
            'example' => 'PaiStudio',
          ),
          'ExperimentId' => 
          array (
            'title' => '实验ID。',
            'type' => 'string',
            'example' => 'experiment-ybpy***',
          ),
          'GmtCreateTime' => 
          array (
            'title' => 'Run的创建UTC时间，格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'GmtModifiedTime' => 
          array (
            'title' => 'Run最近修改的UTC时间，格式iso8601。',
            'type' => 'string',
            'example' => '2021-01-30T12:51:33.028Z',
          ),
          'Accessibility' => 
          array (
            'title' => '实验可见度，目前有PUBLIC（公开）、PRIVATE（私有）。',
            'type' => 'string',
            'example' => 'PUBLIC',
          ),
        ),
      ),
    ),
  ),
  'apis' => 
  array (
    'CreatePipelineRun' => 
    array (
      'summary' => '创建工作流任务。',
      'path' => '/api/v1/pipelineruns',
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
      'consumes' => 
      array (
      ),
      'produces' => 
      array (
      ),
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '工作流任务。',
            'type' => 'object',
            'properties' => 
            array (
              'PipelineId' => 
              array (
                'title' => 'Pipeline的id; PipelineId和PipelineManifest 二选一',
                'description' => '工作流的ID。
PipelineId和PipelineManifest二选一。

',
                'type' => 'string',
                'required' => false,
                'example' => 'flow-rer7y***',
              ),
              'Name' => 
              array (
                'title' => 'Run的名字，若为空，则自动生成名字',
                'description' => '工作流任务名字。若为空，则自动生成名字。

',
                'type' => 'string',
                'required' => false,
                'example' => 'testName',
              ),
              'PipelineManifest' => 
              array (
                'title' => 'Pipeline内容; PipelineId和PipelineManifest 二选一一',
                'description' => '工作流定义，具体样例见下方请求参数补充说明。
PipelineId和PipelineManifest二选一。',
                'type' => 'string',
                'required' => false,
                'example' => 'apiVersion: "core/v1"*********
',
              ),
              'Arguments' => 
              array (
                'title' => '参数',
                'description' => '参数。

',
                'type' => 'string',
                'required' => false,
                'example' => 'arguments:   parameters:   - name: "execution_maxcompute"     value:       endpoint: "http://service***"       odpsProject: "pai***"',
              ),
              'NoConfirmRequired' => 
              array (
                'title' => 'true代表直接启动; false代表只创建run但先不启动',
                'description' => '是否直接启动pipelineRun，取值如下：
- true代表直接启动（默认）。
- false代表只创建run，但先不启动。',
                'type' => 'boolean',
                'required' => false,
                'example' => 'true',
              ),
              'WorkspaceId' => 
              array (
                'title' => '项目空间id',
                'description' => '工作空间ID。

',
                'type' => 'string',
                'required' => true,
                'example' => '84***',
              ),
              'SourceType' => 
              array (
                'title' => '来源，支持如下值：SDK; PAI_STUDIO; M6; UNKNOWN;',
                'description' => '工作流任务来源类型，支持如下值：
- UNKNOWN（默认）
- SDK
- DESIGNER
- M6',
                'type' => 'string',
                'required' => false,
                'example' => 'UNKNOWN',
              ),
              'SourceId' => 
              array (
                'title' => '实验id',
                'description' => '来源ID。

',
                'type' => 'string',
                'required' => false,
                'example' => 'experiment-ybpy***',
              ),
              'Options' => 
              array (
                'title' => '选项，json格式',
                'description' => '创建工作流任务选项，格式为JSON。

',
                'type' => 'string',
                'required' => false,
                'example' => '{"mlflow":{"experimentId":"exp-1jdk***"}}',
              ),
              'Accessibility' => 
              array (
                'title' => 'PUBLIC 公开；PRIVATE 私有',
                'description' => '工作空间可见性：
- PUBLIC（默认）
- PRIVATE

',
                'type' => 'string',
                'required' => false,
                'example' => 'PUBLIC',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
              ),
              'PipelineRunId' => 
              array (
                'title' => 'run的id',
                'description' => '工作流任务ID。

',
                'type' => 'string',
                'example' => 'flow-rbvg***',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\",\\n  \\"PipelineRunId\\": \\"flow-rbvg***\\"\\n}","type":"json"}]',
      'title' => '创建工作流任务	',
      'requestParamsDescription' => '工作流定义样例：该工作流由读数据表（`data_source`），类型转换（`type_transform`）组成。

```
apiVersion: "core/v1"
metadata:
  provider: "1557702098******"
  version: "v1"
  identifier: "my_pipeline"
  name: "source-transform"
spec:
  inputs:
    parameters:
    - name: "execution_maxcompute"
      type: "Map"
  pipelines:
  - apiVersion: "core/v1"
    metadata:
      provider: "pai"
      version: "v1"
      identifier: "data_source"
      name: "data_source"
      displayName: "读数据表-1"
    spec:
      arguments:
        parameters:
        - name: "inputTableName"
          value: "pai_online_project.wumai_data"
        - name: "partition"
          value: "20220101"
        - name: "execution"
          from: "{{inputs.parameters.execution_maxcompute}}"
  - apiVersion: "core/v1"
    metadata:
      provider: "pai"
      version: "v1"
      identifier: "type_transform"
      name: "type_transform"
      displayName: "类型转换-1"
    spec:
      arguments:
        artifacts:
        - name: "inputTable"
          from: "{{pipelines.data_source.outputs.artifacts.outputTable}}"
        parameters:
        - name: "cols_to_double"
          value: "time,hour,pm2,pm10,so2,co,no2"
        - name: "execution"
          from: "{{inputs.parameters.execution_maxcompute}}"
      dependencies:
      - "data_source"
```',
    ),
    'DeletePipelineRun' => 
    array (
      'summary' => '删除工作流任务。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}',
      'methods' => 
      array (
        0 => 'delete',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'PipelineRunId',
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-hynm2bv8wqhp5esfxq',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '删除工作流任务	',
      'description' => '调用该接口时，工作流任务需要处于以下状态：
- Initialized：初始化完成
- Terminated：已终止
- Succeeded：成功
- Failed：失败',
    ),
    'StartPipelineRun' => 
    array (
      'summary' => '启动工作流任务。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/start',
      'methods' => 
      array (
        0 => 'put',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-rbvg5wzljzjhc9ks92',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '启动工作流任务	',
    ),
    'UpdatePipelineRun' => 
    array (
      'summary' => '更新工作流任务。目前仅支持修改工作流任务名称。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}',
      'methods' => 
      array (
        0 => 'put',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-rbvg5wzljzjhc9ks92',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '工作流任务。',
            'type' => 'object',
            'properties' => 
            array (
              'Name' => 
              array (
                'description' => '输入更新后的工作流任务名称。',
                'type' => 'string',
                'required' => true,
                'example' => 'testName',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '更新工作流任务',
    ),
    'GetPipelineRun' => 
    array (
      'summary' => '获取工作流任务详情信息。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}',
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
      'deprecated' => false,
      'systemTags' => 
      array (
        'operationType' => 'get',
      ),
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'run的id',
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'run-rbvg**********ks92
',
          ),
        ),
        1 => 
        array (
          'name' => 'Verbose',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否返回详细信息，目前详细信息包含： RuntimeManifest',
            'description' => '是否返回详细信息，取值如下。
- 关闭开关：不显示详细信息。
- 打开开关：显示详细信息，目前详细信息包含Manifest字段。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false
',
          ),
        ),
        2 => 
        array (
          'name' => 'ManifestType',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'description' => '具体返回哪种类型的Manifest信息，取值如下。
- Raw（默认）：用户提交的原始Manifest。
- Frozen：针对每个Pipeline生成唯一Uuid，将其版本固化下来。即使遇到子Pipeline定义三元组不变进行升级，依然会使用一开始的版本(Uuid)，不受影响；即可基于该Manifest进行重跑。
- Rendered：将相关信息进行注入和渲染，包括：补全运行环境信息并优化等。',
            'type' => 'string',
            'required' => false,
            'enumValueTitles' => 
            array (
              'Raw' => 'Raw',
              'Frozen' => 'Frozen',
              'Rendered' => 'Rendered',
            ),
            'example' => 'Raw',
            'default' => 'Raw',
            'enum' => 
            array (
              0 => 'Raw',
              1 => 'Frozen',
              2 => 'Expanded',
              3 => 'Rendered',
              4 => 'Runtime',
            ),
          ),
        ),
        3 => 
        array (
          'name' => 'TokenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被分享的工作流任务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA
',
              ),
              'PipelineRunId' => 
              array (
                'description' => '工作流任务ID。

',
                'type' => 'string',
                'example' => 'flow-j94y**********lf7a
',
              ),
              'Name' => 
              array (
                'description' => '工作流任务名字。

',
                'type' => 'string',
                'example' => 'testName',
              ),
              'Status' => 
              array (
                'description' => '工作流任务状态，可能值如下：

- Initialized
- Running
- Succeeded
- Failed
- Suspended
- Terminated
- Unknown
- Skipped
- Terminating',
                'type' => 'string',
                'example' => 'Succeeded',
              ),
              'Manifest' => 
              array (
                'description' => '工作流任务的定义。

',
                'type' => 'string',
                'example' => '{"ApiVersion":"core/v1","Metadata":{"NodeId":"node-n06d**********fc53","Provider":"155**********904","Name":"flow-j94y**********lf7a","Version":"v1","Identifier":"9fe11111-****-****-****-****ec811861","Namespace":null,"DisplayName":"name","NodeType":"Dag"},"Spec":{}}',
              ),
              'Arguments' => 
              array (
                'description' => '工作流任务的参数。

',
                'type' => 'string',
                'example' => '{"arguments":{"parameters":[{"name":"execution","value":{"endpoint":"http://service.******","odpsProject":"******","spec":{"endpoint":"http://service.******","odpsProject":"*****"},"resourceType":"MaxCompute"}}]}}',
              ),
              'UserId' => 
              array (
                'description' => '创建用户ID。

',
                'type' => 'string',
                'example' => '155**********904
',
              ),
              'ParentUserId' => 
              array (
                'description' => '创建用户阿里云账号的ID。',
                'type' => 'string',
                'example' => '155**********904
',
              ),
              'StartedAt' => 
              array (
                'description' => '工作流任务的开始UTC时间，格式ISO8601。',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2021-01-30T12:51:33.028Z
',
              ),
              'FinishedAt' => 
              array (
                'description' => '工作流任务的结束UTC时间，格式ISO8601。',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2021-01-30T12:52:33.028Z
',
              ),
              'NodeId' => 
              array (
                'description' => '工作流任务的节点ID。

',
                'type' => 'string',
                'example' => 'node-n06d**********fc53
',
              ),
              'Duration' => 
              array (
                'description' => '工作流任务的运行时长，单位为秒。

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '60',
              ),
              'WorkspaceId' => 
              array (
                'description' => '所属工作空间ID。

',
                'type' => 'string',
                'example' => '15945',
              ),
              'Message' => 
              array (
                'description' => '工作流任务失败提示信息。

',
                'type' => 'string',
                'example' => 'error message
',
              ),
              'SourceType' => 
              array (
                'description' => '工作流任务来源类型，可能值：
- UNKNOWN（默认）：未指定来源类型时的默认值。
- SDK：通过SDK创建的工作流任务。
- DESIGNER：通过Designer创建的工作流任务。
- M6：通过其他网站创建的工作流任务。',
                'type' => 'string',
                'example' => 'UNKNOWN',
              ),
              'SourceId' => 
              array (
                'description' => '工作流任务的来源ID。',
                'type' => 'string',
                'example' => 'abcd*********hxfu
',
              ),
              'Options' => 
              array (
                'description' => '工作流任务选项，格式为JSON。

',
                'type' => 'string',
                'example' => '{"mlflow":{"experimentId":"exp-**********"}}
',
              ),
              'GmtCreateTime' => 
              array (
                'description' => '创建UTC时间，格式ISO8601。',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2021-01-30T12:51:33.028Z
',
              ),
              'GmtModifiedTime' => 
              array (
                'description' => '最近修改UTC时间，格式ISO8601。',
                'type' => 'string',
                'format' => 'iso8601',
                'example' => '2021-01-30T12:51:33.028Z
',
              ),
              'PipelineId' => 
              array (
                'description' => '工作流ID。

',
                'type' => 'string',
                'example' => 'pipeline-j94y**********lf7a
',
              ),
              'Accessibility' => 
              array (
                'description' => '工作流任务的可见性，目前支持：
- PUBLIC
- PRIVATE',
                'type' => 'string',
                'example' => 'PUBLIC',
              ),
              'PipelineRunUri' => 
              array (
                'description' => '工作流任务详情URL。',
                'type' => 'string',
                'example' => 'https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\\\n\\",\\n  \\"PipelineRunId\\": \\"flow-j94y**********lf7a\\\\n\\",\\n  \\"Name\\": \\"testName\\",\\n  \\"Status\\": \\"Succeeded\\",\\n  \\"Manifest\\": \\"{\\\\\\"ApiVersion\\\\\\":\\\\\\"core/v1\\\\\\",\\\\\\"Metadata\\\\\\":{\\\\\\"NodeId\\\\\\":\\\\\\"node-n06d**********fc53\\\\\\",\\\\\\"Provider\\\\\\":\\\\\\"155**********904\\\\\\",\\\\\\"Name\\\\\\":\\\\\\"flow-j94y**********lf7a\\\\\\",\\\\\\"Version\\\\\\":\\\\\\"v1\\\\\\",\\\\\\"Identifier\\\\\\":\\\\\\"9fe11111-****-****-****-****ec811861\\\\\\",\\\\\\"Namespace\\\\\\":null,\\\\\\"DisplayName\\\\\\":\\\\\\"name\\\\\\",\\\\\\"NodeType\\\\\\":\\\\\\"Dag\\\\\\"},\\\\\\"Spec\\\\\\":{}}\\",\\n  \\"Arguments\\": \\"{\\\\\\"arguments\\\\\\":{\\\\\\"parameters\\\\\\":[{\\\\\\"name\\\\\\":\\\\\\"execution\\\\\\",\\\\\\"value\\\\\\":{\\\\\\"endpoint\\\\\\":\\\\\\"http://service.******\\\\\\",\\\\\\"odpsProject\\\\\\":\\\\\\"******\\\\\\",\\\\\\"spec\\\\\\":{\\\\\\"endpoint\\\\\\":\\\\\\"http://service.******\\\\\\",\\\\\\"odpsProject\\\\\\":\\\\\\"*****\\\\\\"},\\\\\\"resourceType\\\\\\":\\\\\\"MaxCompute\\\\\\"}}]}}\\",\\n  \\"UserId\\": \\"155**********904\\\\n\\",\\n  \\"ParentUserId\\": \\"155**********904\\\\n\\",\\n  \\"StartedAt\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n  \\"FinishedAt\\": \\"2021-01-30T12:52:33.028Z\\\\n\\",\\n  \\"NodeId\\": \\"node-n06d**********fc53\\\\n\\",\\n  \\"Duration\\": 60,\\n  \\"WorkspaceId\\": \\"15945\\",\\n  \\"Message\\": \\"error message\\\\n\\",\\n  \\"SourceType\\": \\"UNKNOWN\\",\\n  \\"SourceId\\": \\"abcd*********hxfu\\\\n\\",\\n  \\"Options\\": \\"{\\\\\\"mlflow\\\\\\":{\\\\\\"experimentId\\\\\\":\\\\\\"exp-**********\\\\\\"}}\\\\n\\",\\n  \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n  \\"PipelineId\\": \\"pipeline-j94y**********lf7a\\\\n\\",\\n  \\"Accessibility\\": \\"PUBLIC\\",\\n  \\"PipelineRunUri\\": \\"https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****\\"\\n}","type":"json"}]',
      'title' => '获取工作流任务信息	',
    ),
    'ListPipelineRunNodeLogs' => 
    array (
      'summary' => '获取工作流任务节点运行产生的日志。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/logs',
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
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Run id',
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-73186********nku43',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Node id',
            'description' => '工作流任务节点ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'node-hh5yc********mz8ms',
          ),
        ),
        2 => 
        array (
          'name' => 'Offset',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前偏移量',
            'description' => '页数（偏移量），默认值为0。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '0',
          ),
        ),
        3 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页返回的log数目',
            'description' => '每页返回的日志数目。

',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '100',
          ),
        ),
        4 => 
        array (
          'name' => 'FromTimeInSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '开始时间',
            'description' => '查询时间范围的开始时间，格式为时间戳，单位为秒。
',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1612180056',
          ),
        ),
        5 => 
        array (
          'name' => 'Keyword',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '搜索词',
            'description' => '搜索词。支持模糊匹配。

',
            'type' => 'string',
            'required' => false,
            'example' => 'abc',
          ),
        ),
        6 => 
        array (
          'name' => 'Reverse',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '是否倒排',
            'description' => '是否倒排，取值如下：
- false（默认值）：正序排列日志。
- true：倒序排列日志。',
            'type' => 'boolean',
            'required' => false,
            'example' => 'false',
          ),
        ),
        7 => 
        array (
          'name' => 'ToTimeInSeconds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '结束时间',
            'description' => '查询时间范围的结束时间，格式为时间戳，单位为秒。

',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '1612180056',
          ),
        ),
        8 => 
        array (
          'name' => 'TokenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被分享的工作流任务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => '返回结构体',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 ID',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的作业数量',
                'description' => '符合过滤条件的作业数量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '10',
              ),
              'Logs' => 
              array (
                'title' => '日志列表',
                'description' => '查询返回的日志列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '查询到的日志行。

',
                  'type' => 'string',
                  'example' => 'abc',
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 10,\\n  \\"Logs\\": [\\n    \\"abc\\"\\n  ]\\n}","type":"json"}]',
      'title' => '获取工作流任务节点日志	',
    ),
    'GetPipelineRunNode' => 
    array (
      'summary' => '工作流任务中包含多个节点，通过该接口获取节点的详细信息。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}',
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
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'run 的 id',
            'description' => '工作流任务的ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-ebppc********5lwea',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'node 的 id',
            'description' => '工作流任务中一个节点的ID。如何查看节点ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'node-wcs9z********27ps3',
          ),
        ),
        2 => 
        array (
          'name' => 'Depth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '查询深度',
            'description' => '查询节点详细信息的深度（层数），当Depth为2时，将会返回该节点及其下一层的所有子节点的详细信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '节点类型，取值如下。
* Logical（默认值）：表示逻辑节点，用户提交节点的都是逻辑节点。
* Physical：表示物理节点，对应一个执行特定逻辑的容器的运行，逻辑节点在后台运行时会转换为物理节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'Logical',
          ),
        ),
        4 => 
        array (
          'name' => 'TokenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被分享的工作流任务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******
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
            'title' => '返回体结构',
            'description' => '返回体结构。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求 id',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '0a981ea816**********42244e7ba2',
              ),
              'ApiVersion' => 
              array (
                'title' => 'api 版本',
                'description' => '工作流定义的版本。

',
                'type' => 'string',
                'example' => 'core/v1',
              ),
              'Metadata' => 
              array (
                'title' => 'node 的元信息',
                'description' => '节点的元信息。

',
                'type' => 'object',
                'properties' => 
                array (
                  'NodeId' => 
                  array (
                    'title' => '节点 id',
                    'description' => '节点的ID。

',
                    'type' => 'string',
                    'example' => 'node-wcs9z********27ps3',
                  ),
                  'Provider' => 
                  array (
                    'title' => '提供方',
                    'description' => '节点所对应的工作流的提供方，通常情况下指代工作流的上传者（官方提供的工作流Provider为PAI）。',
                    'type' => 'string',
                    'example' => '15577********904',
                  ),
                  'Name' => 
                  array (
                    'title' => '名字',
                    'description' => '节点的名称。',
                    'type' => 'string',
                    'example' => 'flow-ebppc********5lwea',
                  ),
                  'Version' => 
                  array (
                    'title' => '版本',
                    'description' => '节点所对应的工作流的版本。

',
                    'type' => 'string',
                    'example' => 'v1',
                  ),
                  'Identifier' => 
                  array (
                    'title' => '标识符',
                    'description' => '节点所对应的工作流的标识名。

',
                    'type' => 'string',
                    'example' => 'composite-pipeline',
                  ),
                  'NodeType' => 
                  array (
                    'title' => '节点类型',
                    'description' => '节点的类型，可能值：

- Pod：具体运行的一个节点。
- Dag：复合类型节点，本质是一个由子节点组成的Dag图。',
                    'type' => 'string',
                    'example' => 'Dag',
                  ),
                  'RelatedNodeIds' => 
                  array (
                    'title' => 'Alink逻辑节点所对应的物理节点ID / Alink物理节点所对应的逻辑节点ID',
                    'description' => 'Alink逻辑节点所对应的物理节点ID或Alink物理节点所对应的逻辑节点ID。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点ID。

',
                      'type' => 'string',
                      'example' => 'node-wcs9z********27ps3',
                    ),
                  ),
                  'DisplayName' => 
                  array (
                    'title' => '展示名称',
                    'description' => '节点的展示名称（可能会被修改）。

',
                    'type' => 'string',
                    'example' => 'flow-ebppc********5lwea',
                  ),
                ),
              ),
              'Spec' => 
              array (
                'title' => '算法体',
                'description' => '节点的定义。',
                'type' => 'object',
                'properties' => 
                array (
                  'HasPipelines' => 
                  array (
                    'title' => '是否有子 pipeline',
                    'description' => '该节点是否含有子节点，可能值：
- true：该节点为复合类型节点，如果需要进一步查询其子节点信息，需要传入更深的Depth参数。
- false：该节点为实际运行的节点。',
                    'type' => 'boolean',
                    'example' => 'true',
                  ),
                  'Dependencies' => 
                  array (
                    'title' => '依赖',
                    'description' => '节点与其他节点的依赖关系。

',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '所依赖的其他节点对应工作流的名称。

',
                      'type' => 'string',
                      'example' => '"single-node-sub1"',
                    ),
                  ),
                  'Pipelines' => 
                  array (
                    'title' => '子 pipeline 列表',
                    'description' => '子节点列表。


',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '子节点的详细信息。

',
                      'type' => 'object',
                      'example' => '详细结构参见Pipeline相关接口描述。
',
                    ),
                  ),
                  'Inputs' => 
                  array (
                    'description' => '节点的输入信息。

',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Artifacts' => 
                      array (
                        'description' => '节点的输入产物列表。	',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '节点的输入产物。

',
                          'type' => 'object',
                          'example' => '{"Name":"input","Value":"******"}',
                        ),
                      ),
                      'Parameters' => 
                      array (
                        'description' => '节点的输入参数列表。',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '节点的输入参数。',
                          'type' => 'object',
                          'example' => '{"Name":"inputTable","Value":"******"}',
                        ),
                      ),
                    ),
                  ),
                  'Outputs' => 
                  array (
                    'description' => '节点的输出信息。

',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Artifacts' => 
                      array (
                        'description' => '节点的输出产物列表。

',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '节点的输出产物。

',
                          'type' => 'object',
                          'example' => '{"Name":"output","Value":"******"}',
                        ),
                      ),
                      'Parameters' => 
                      array (
                        'description' => '节点的输出参数列表。

',
                        'type' => 'array',
                        'items' => 
                        array (
                          'description' => '节点的输出参数。

',
                          'type' => 'object',
                          'example' => '{"Name":"outputTable","Value":"******"}',
                        ),
                      ),
                    ),
                  ),
                  'When' => 
                  array (
                    'description' => '节点运行的判断条件。
- 如果运行条件返回为真，就执行该节点。
- 如果运行条件返回为假，该节点被跳过，状态为Skipped。',
                    'type' => 'string',
                    'example' => '”{{inputs.parameters.skip}} == false“',
                  ),
                  'WithItems' => 
                  array (
                    'description' => '将工作流节点扩展为多个工作流节点。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '数据集中的一项，会扩展为一个工作流节点。',
                      'type' => 'string',
                      'example' => 'abc',
                    ),
                  ),
                  'WithParam' => 
                  array (
                    'description' => '指向一个参数，该参数的值是一个数组，数组的每一项会扩展为一个工作流节点。',
                    'type' => 'string',
                    'example' => '"{{pipelines.generate.outputs.result}}"',
                  ),
                  'WithSequence' => 
                  array (
                    'description' => '指向一个数字序列，序列中的每一项会扩展为一个工作流节点。',
                    'type' => 'object',
                    'properties' => 
                    array (
                      'Start' => 
                      array (
                        'description' => '数字序列的起始数字。',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '1',
                      ),
                      'End' => 
                      array (
                        'description' => '数字序列的结束数字。

',
                        'type' => 'integer',
                        'format' => 'int32',
                        'example' => '10',
                      ),
                      'Format' => 
                      array (
                        'description' => '对数字序列的值进行格式化。',
                        'type' => 'string',
                        'example' => '"2020-05-%d"',
                      ),
                    ),
                  ),
                  'Parallelism' => 
                  array (
                    'description' => '节点并行度上限。',
                    'type' => 'integer',
                    'format' => 'int32',
                    'example' => '2',
                  ),
                ),
              ),
              'StatusInfo' => 
              array (
                'title' => 'node 运行状态',
                'description' => '节点的执行状态信息。

',
                'type' => 'object',
                'properties' => 
                array (
                  'FinishedAt' => 
                  array (
                    'title' => '结束时间',
                    'description' => '节点执行的结束时间。

',
                    'type' => 'string',
                    'example' => '2021-10-15T10:40:54.000Z',
                  ),
                  'StartedAt' => 
                  array (
                    'title' => '开始时间',
                    'description' => '节点执行的开始时间。

',
                    'type' => 'string',
                    'example' => '2021-10-15T10:39:58.000Z',
                  ),
                  'Status' => 
                  array (
                    'title' => '状态',
                    'description' => '节点的运行状态，可能值：
- Succeeded：运行成功。
- Running：运行中。
- Failed：运行失败。
- Skipped：跳过（前序节点失败导致）。
- ReadyToSchedule：准备运行（前序节点未完成导致）。
- Unknown：未知。',
                    'type' => 'string',
                    'example' => 'Succeeded',
                  ),
                  'Conditions' => 
                  array (
                    'description' => '节点的运行状况列表。',
                    'type' => 'array',
                    'items' => 
                    array (
                      'description' => '节点的详细运行状况。',
                      'type' => 'object',
                      'example' => '{"ArtifactArchived": "true"}',
                    ),
                  ),
                  'Progress' => 
                  array (
                    'description' => '节点的运行进度。',
                    'type' => 'string',
                    'example' => '9/9',
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"0a981ea816**********42244e7ba2\\",\\n  \\"ApiVersion\\": \\"core/v1\\",\\n  \\"Metadata\\": {\\n    \\"NodeId\\": \\"node-wcs9z********27ps3\\",\\n    \\"Provider\\": \\"15577********904\\",\\n    \\"Name\\": \\"flow-ebppc********5lwea\\",\\n    \\"Version\\": \\"v1\\",\\n    \\"Identifier\\": \\"composite-pipeline\\",\\n    \\"NodeType\\": \\"Dag\\",\\n    \\"RelatedNodeIds\\": [\\n      \\"node-wcs9z********27ps3\\"\\n    ],\\n    \\"DisplayName\\": \\"flow-ebppc********5lwea\\"\\n  },\\n  \\"Spec\\": {\\n    \\"HasPipelines\\": true,\\n    \\"Dependencies\\": [\\n      \\"\\\\\\"single-node-sub1\\\\\\"\\"\\n    ],\\n    \\"Pipelines\\": [\\n      {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      }\\n    ],\\n    \\"Inputs\\": {\\n      \\"Artifacts\\": [\\n        {\\n          \\"Name\\": \\"input\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ],\\n      \\"Parameters\\": [\\n        {\\n          \\"Name\\": \\"inputTable\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ]\\n    },\\n    \\"Outputs\\": {\\n      \\"Artifacts\\": [\\n        {\\n          \\"Name\\": \\"output\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ],\\n      \\"Parameters\\": [\\n        {\\n          \\"Name\\": \\"outputTable\\",\\n          \\"Value\\": \\"******\\"\\n        }\\n      ]\\n    },\\n    \\"When\\": \\"”{{inputs.parameters.skip}} == false“\\",\\n    \\"WithItems\\": [\\n      \\"abc\\"\\n    ],\\n    \\"WithParam\\": \\"\\\\\\"{{pipelines.generate.outputs.result}}\\\\\\"\\",\\n    \\"WithSequence\\": {\\n      \\"Start\\": 1,\\n      \\"End\\": 10,\\n      \\"Format\\": \\"\\\\\\"2020-05-%d\\\\\\"\\"\\n    },\\n    \\"Parallelism\\": 2\\n  },\\n  \\"StatusInfo\\": {\\n    \\"FinishedAt\\": \\"2021-10-15T10:40:54.000Z\\",\\n    \\"StartedAt\\": \\"2021-10-15T10:39:58.000Z\\",\\n    \\"Status\\": \\"Succeeded\\",\\n    \\"Conditions\\": [\\n      {\\n        \\"ArtifactArchived\\": \\"true\\"\\n      }\\n    ],\\n    \\"Progress\\": \\"9/9\\"\\n  }\\n}","type":"json"}]',
      'title' => '获取工作流任务节点信息	',
      'description' => 'PAIFlow支持复合形式的工作流，这些工作流在运行时也会体现为复合形式的节点。想要获取到这类节点的详细信息，可以传入Depth参数（默认值为2），可以递归地获取到所查询节点及其内含有的Depth层数的子节点的详细信息。

工作流的每次运行会存在一个虚拟的根节点，这个根节点可以通过GetRun接口返回获取。调用GetNode接口查询该根节点，可以获取到对应运行的所有节点的详细信息及其组织结构。',
    ),
    'ListPipelineRunNodeOutputs' => 
    array (
      'summary' => '获取工作流任务节点输出。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/outputs',
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
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Run id',
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-n06dn********rfc53',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Node id',
            'description' => '工作流任务节点ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'node-n06dn********rfc53',
          ),
        ),
        2 => 
        array (
          'name' => 'Depth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点往下拿多少层子节点',
            'description' => '查询节点详细信息的深度（层数），当Depth为2时，将会返回该节点及其下一层的所有子节点的信息。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => true,
            'maximum' => '99999',
            'minimum' => '1',
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '节点名字',
            'description' => '查询的工作流任务节点的名称。',
            'type' => 'string',
            'required' => false,
            'example' => 'myName',
          ),
        ),
        4 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '当前页，页码从1开始',
            'description' => '当前页，起始值为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        5 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '每页返回的输出数目',
            'description' => '每页返回的输出数目。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '20',
          ),
        ),
        6 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序字段',
            'description' => '用于排序返回结果的字段，目前支持如下字段：
- Name
- Type
- GmtCreateTime',
            'type' => 'string',
            'required' => false,
            'example' => 'GmtCreateTime',
          ),
        ),
        7 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '排序顺序， 顺序：ASC，倒序：DESC',
            'description' => '排序顺序，取值如下，与SortBy一起使用。
- DESC（默认值）：降序排列。
- ASC：升序排列。',
            'type' => 'string',
            'required' => false,
            'example' => 'DESC',
          ),
        ),
        8 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'artifact 类型',
            'description' => '工作流任务节点产物（Artifact）的类型：
- Model：模型。
- DataSet：数据集。
- Metrics：度量数据。
- ModelEvaluation：模型评估结果。',
            'type' => 'string',
            'required' => false,
            'example' => 'DataSet',
          ),
        ),
        9 => 
        array (
          'name' => 'TokenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被分享的工作流任务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******
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
            'title' => '返回结构',
            'description' => '返回结构体。

',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
              'TotalCount' => 
              array (
                'title' => '符合过滤条件的作业数量',
                'description' => '符合过滤条件的作业数量。

',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '2',
              ),
              'Outputs' => 
              array (
                'title' => '输出列表',
                'description' => '工作流任务节点的输出产物列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流任务节点的的输出产物。

',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'title' => '名字',
                      'description' => '工作流任务节点的输出产物名称。

',
                      'type' => 'string',
                      'example' => 'model_******',
                    ),
                    'Type' => 
                    array (
                      'title' => '类型',
                      'description' => '输出产物的类型，可能值：
- Model：模型。
- DataSet：数据集。
- Metrics：度量数据。
- ModelEvaluation：模型评估结果。',
                      'type' => 'string',
                      'example' => 'Model',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'title' => '创建时间',
                      'description' => '输出产物的创建时间。',
                      'type' => 'string',
                      'example' => '2021-01-30T12:51:33.028Z',
                    ),
                    'Id' => 
                    array (
                      'title' => 'id',
                      'description' => '输出产物的ID。

',
                      'type' => 'string',
                      'example' => 'artifact-ty1xwv*******s8zf',
                    ),
                    'NodeId' => 
                    array (
                      'title' => '输出所属节点 id',
                      'description' => '输出产物所属的工作流任务节点的ID。',
                      'type' => 'string',
                      'example' => 'node-obpzu*******418grb7',
                    ),
                    'ExpandedArtifactIndex' => 
                    array (
                      'title' => '被扩展artifact的索引号，以0开始',
                      'description' => '被扩展的输出产物的索引号，起始值为0。',
                      'type' => 'integer',
                      'format' => 'int64',
                      'example' => '0',
                    ),
                    'ExpandableArtifactName' => 
                    array (
                      'title' => '可扩展artifact的名字',
                      'description' => '被扩展的输出产物的名称。',
                      'type' => 'string',
                      'example' => 'inputArtifact',
                    ),
                    'Info' => 
                    array (
                      'title' => 'artifact内容',
                      'description' => '输出产物的信息。

',
                      'type' => 'object',
                      'example' => '{         "metadata": {           "type": {             "Model": {               "locationType": "MaxComputeOfflineModel",               "modelType": "OfflineModel"             }           }         }',
                    ),
                    'Producer' => 
                    array (
                      'title' => 'rtifact生产者',
                      'description' => '输出产物的生产者。',
                      'type' => 'string',
                      'example' => 'id-3d25-************-77856',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 2,\\n  \\"Outputs\\": [\\n    {\\n      \\"Name\\": \\"model_******\\",\\n      \\"Type\\": \\"Model\\",\\n      \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n      \\"Id\\": \\"artifact-ty1xwv*******s8zf\\",\\n      \\"NodeId\\": \\"node-obpzu*******418grb7\\",\\n      \\"ExpandedArtifactIndex\\": 0,\\n      \\"ExpandableArtifactName\\": \\"inputArtifact\\",\\n      \\"Info\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"Producer\\": \\"id-3d25-************-77856\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取工作流任务节点输出	',
    ),
    'ListPipelineRunNodeStatus' => 
    array (
      'summary' => '获取工作流任务节点运行状态。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/nodes/{NodeId}/status',
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
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '工作流任务ID',
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-rbvg5wzljzjhc9****',
          ),
        ),
        1 => 
        array (
          'name' => 'NodeId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => '节点ID',
            'description' => '工作流任务的节点ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'node-kdkfkfds****',
          ),
        ),
        2 => 
        array (
          'name' => 'Depth',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '深度',
            'description' => '查询节点深度，当深度为N时，返回指定节点的N-1层子节点运行状态。',
            'type' => 'integer',
            'format' => 'int64',
            'required' => false,
            'example' => '2',
          ),
        ),
        3 => 
        array (
          'name' => 'Type',
          'in' => 'query',
          'allowEmptyValue' => true,
          'schema' => 
          array (
            'title' => '类型',
            'description' => '节点类型，取值如下：
* Logical（默认值）：表示逻辑节点，用户提交节点的都是逻辑节点。
* Physical：表示物理节点，对应一个执行特定逻辑的容器的运行，逻辑节点在后台运行时会转换为物理节点。',
            'type' => 'string',
            'required' => false,
            'example' => 'Logical',
          ),
        ),
        4 => 
        array (
          'name' => 'TokenId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '被分享的工作流任务的ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'https://pai.console.aliyun.com/?regionId=cn-hangzhou&workspaceId=102******&mode=noSidebar#/paiflow/pipeline-runs/flow-6y7******?Token=eyJ0e******
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => '请求ID',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E
',
              ),
              'Status' => 
              array (
                'title' => '工作流任务的节点状态列表',
                'description' => '工作流任务节点状态列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'type' => 'object',
                  'properties' => 
                  array (
                    'NodeId' => 
                    array (
                      'title' => '工作流中节点ID',
                      'description' => '工作流任务的节点ID。

',
                      'type' => 'string',
                      'example' => 'node-1jlzg7ncv0j6i3****',
                    ),
                    'NodeName' => 
                    array (
                      'title' => '工作流中节点名字',
                      'description' => '工作流任务的节点名字。

',
                      'type' => 'string',
                      'example' => 'sql',
                    ),
                    'Status' => 
                    array (
                      'title' => '节点运行状态',
                      'description' => '节点运行状态。

',
                      'type' => 'string',
                      'example' => 'Succeeded',
                    ),
                    'StartedAt' => 
                    array (
                      'title' => '节点开始运行时间',
                      'description' => '节点的开始运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。

',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'FinishedAt' => 
                    array (
                      'title' => '节点结束运行时间',
                      'description' => '节点的结束运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。

',
                      'type' => 'string',
                      'example' => '2021-01-21T17:12:40.232Z',
                    ),
                    'RuntimeInfo' => 
                    array (
                      'title' => '节点运行时信息',
                      'description' => '节点运行时信息，格式为转义后的Map，用户可以自定义输出多个KV对，相同的Key值会取最后输出的Value。当信息为空时，返回“{}”。

',
                      'type' => 'string',
                      'example' => '{\\"DLC_INSTANCE_IDS\\": \\"i-12224afdfsaf,i-22224afdfsaf,i-13224afdfsaf\\"}
',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\\\n\\",\\n  \\"Status\\": [\\n    {\\n      \\"NodeId\\": \\"node-1jlzg7ncv0j6i3****\\",\\n      \\"NodeName\\": \\"sql\\",\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"StartedAt\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"FinishedAt\\": \\"2021-01-21T17:12:40.232Z\\",\\n      \\"RuntimeInfo\\": \\"{\\\\\\\\\\\\\\"DLC_INSTANCE_IDS\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"i-12224afdfsaf,i-22224afdfsaf,i-13224afdfsaf\\\\\\\\\\\\\\"}\\\\n\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取工作流任务节点状态	',
    ),
    'ListPipelineRunsStatus' => 
    array (
      'summary' => '批量获取工作流任务或节点的状态。',
      'path' => '/api/v1/pipelineruns',
      'methods' => 
      array (
        0 => 'put',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '查询请求。',
            'type' => 'object',
            'properties' => 
            array (
              'PipelineRuns' => 
              array (
                'description' => '要查询的工作流任务列表，PipelineRuns参数与Nodes参数两选一，优先Nodes。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流任务的ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                  'type' => 'string',
                  'required' => false,
                  'example' => 'flow-hynm2bv8wqhp5esfxq',
                ),
                'required' => false,
              ),
              'Nodes' => 
              array (
                'description' => '要查询的节点列表，Nodes参数与PipelineRuns参数两选一，优先Nodes。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '要查询的节点。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PipelineRunId' => 
                    array (
                      'description' => '工作流任务的ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'flow-hynm2bv8wqhp5esfxq',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '工作流任务节点的ID。如何获取节点ID，请参见[ListPipelineRuns](~~438042~~)。',
                      'type' => 'string',
                      'required' => false,
                      'example' => 'node-hynm2bv8wqhp5esfx1',
                    ),
                  ),
                  'required' => false,
                ),
                'required' => false,
              ),
              'WorkspaceId' => 
              array (
                'description' => '工作空间的ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                'type' => 'string',
                'required' => false,
                'example' => '948**
',
              ),
              'OutputType' => 
              array (
                'description' => '工作流任务节点产物（Artifact）的类型，取值如下：
- Model：模型。
- DataSet：数据集。
- Metrics：度量数据。
- ModelEvaluation：模型评估结果。',
                'type' => 'string',
                'required' => false,
                'example' => 'DataSet',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。

',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
              'PipelineRuns' => 
              array (
                'description' => '工作流任务列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流任务。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PipelineRunId' => 
                    array (
                      'title' => 'run的id',
                      'description' => '工作流任务ID。

',
                      'type' => 'string',
                      'example' => 'flow-hynm2bv8wqhp5esfxq',
                    ),
                    'Status' => 
                    array (
                      'title' => 'run状态',
                      'description' => '工作流任务状态。

',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'Name' => 
                    array (
                      'title' => 'run名字',
                      'description' => '工作流任务名字。

',
                      'type' => 'string',
                      'example' => 'myName',
                    ),
                    'UserId' => 
                    array (
                      'title' => '用户id',
                      'description' => '工作流所属用户ID。

',
                      'type' => 'string',
                      'example' => '1557702098194904',
                    ),
                    'ParentUserId' => 
                    array (
                      'title' => '父账户id',
                      'description' => '工作流所属主账户ID。

',
                      'type' => 'string',
                      'example' => '1557702098194904',
                    ),
                    'NodeId' => 
                    array (
                      'title' => '节点id',
                      'description' => '节点ID。

',
                      'type' => 'string',
                      'example' => 'node-98odqfpcjzwdf3caq3',
                    ),
                    'SourceId' => 
                    array (
                      'title' => '实验id',
                      'description' => '工作流任务来源ID。',
                      'type' => 'string',
                      'example' => 'lmi7d24h3kr0xczjlu',
                    ),
                    'IsDeleted' => 
                    array (
                      'title' => '是否被删除',
                      'description' => '是否被删除，可能值：
- true：代表已被删除。
- false：代表未被删除。',
                      'type' => 'boolean',
                      'example' => 'false',
                    ),
                  ),
                ),
              ),
              'Nodes' => 
              array (
                'description' => '工作流任务节点列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流任务节点。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PipelineRunId' => 
                    array (
                      'title' => '运行Id',
                      'description' => '工作流任务ID。

',
                      'type' => 'string',
                      'example' => 'flow-hynm2bv8wqhp5esfxq',
                    ),
                    'NodeId' => 
                    array (
                      'title' => '节点Id',
                      'description' => '工作流任务节点ID。

',
                      'type' => 'string',
                      'example' => 'node-hynm2bv8wqhp5esfx1',
                    ),
                    'Status' => 
                    array (
                      'title' => '状态',
                      'description' => '工作流任务节点状态。

',
                      'type' => 'string',
                      'example' => 'Running',
                    ),
                    'InputArtifactArchived' => 
                    array (
                      'title' => '输入artifact是否已保存',
                      'description' => '输入Artifact是否已保存：
- true：表示已保存。
- false：表示未保存。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'OutputArtifactArchived' => 
                    array (
                      'title' => '输出artifact是否已保存',
                      'description' => '输出Artifact是否已保存：
- true：表示已保存。
- false：表示未保存。',
                      'type' => 'boolean',
                      'example' => 'true',
                    ),
                    'StartedAt' => 
                    array (
                      'title' => '修改 UTC 时间，日期格式 iso8601',
                      'description' => '工作流任务节点的开始运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。

',
                      'type' => 'string',
                      'format' => 'iso8601',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'FinishedAt' => 
                    array (
                      'title' => '修改 UTC 时间，日期格式 iso8601',
                      'description' => '工作流任务节点的结束运行时间。按照ISO8601标准表示，使用UTC+0时间。格式为：yyyy-MM-ddTHH:mmZ。

',
                      'type' => 'string',
                      'format' => 'iso8601',
                      'example' => '2021-01-21T17:12:35.232Z',
                    ),
                    'NodeName' => 
                    array (
                      'title' => '节点名',
                      'description' => '工作流任务节点名。',
                      'type' => 'string',
                      'example' => 'dataSource',
                    ),
                  ),
                ),
              ),
              'Outputs' => 
              array (
                'description' => '工作流任务节点的输出产物列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流任务节点的输出产物。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'Name' => 
                    array (
                      'description' => '工作流任务节点的输出产物名称。',
                      'type' => 'string',
                      'example' => 'model_******',
                    ),
                    'Type' => 
                    array (
                      'description' => '输出产物的类型，可能值：
- Model：模型。
- DataSet：数据集。
- Metrics：度量数据。
- ModelEvaluation：模型评估结果。',
                      'type' => 'string',
                      'example' => 'DataSet',
                    ),
                    'Metadata' => 
                    array (
                      'description' => '输出产物的元数据。',
                      'type' => 'object',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'description' => '输出产物的创建时间。',
                      'type' => 'string',
                      'format' => 'iso8601',
                      'example' => '2021-01-30T12:51:33.028Z',
                    ),
                    'Id' => 
                    array (
                      'description' => '输出产物的ID。',
                      'type' => 'string',
                      'example' => 'artifact-ty1xwv*******s8zf',
                    ),
                    'Producer' => 
                    array (
                      'description' => '输出产物的生产者。',
                      'type' => 'string',
                      'example' => 'id-3d25-************-77856',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '输出产物所属的工作流任务节点的ID。',
                      'type' => 'string',
                      'example' => 'node-obpzu*******418grb7
',
                    ),
                    'PipelineRunId' => 
                    array (
                      'description' => '输出产物所属的工作流任务的ID。',
                      'type' => 'string',
                      'example' => 'flow-dsjfk******jdskls',
                    ),
                    'Value' => 
                    array (
                      'description' => '输出产物的值。',
                      'type' => 'string',
                      'example' => '{\\"name\\": \\"model_flow_*********_node_**********_model\\", \\"location\\": {\\"name\\": \\"model_flow_**********_node_***********_model\\", \\"endpoint\\": \\"http://service.odps.aliyun.com/api\\", \\"project\\": \\"********\\"}}',
                    ),
                    'ExpandedArtifactIndex' => 
                    array (
                      'description' => '输出产物被扩展Artifact的索引号，起始值为0。',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '0',
                    ),
                    'ExpandableArtifactName' => 
                    array (
                      'description' => '输出产物可扩展Artifact的名称。',
                      'type' => 'string',
                      'example' => 'inputArtifact',
                    ),
                  ),
                ),
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"PipelineRuns\\": [\\n    {\\n      \\"PipelineRunId\\": \\"flow-hynm2bv8wqhp5esfxq\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"Name\\": \\"myName\\",\\n      \\"UserId\\": \\"1557702098194904\\",\\n      \\"ParentUserId\\": \\"1557702098194904\\",\\n      \\"NodeId\\": \\"node-98odqfpcjzwdf3caq3\\",\\n      \\"SourceId\\": \\"lmi7d24h3kr0xczjlu\\",\\n      \\"IsDeleted\\": false\\n    }\\n  ],\\n  \\"Nodes\\": [\\n    {\\n      \\"PipelineRunId\\": \\"flow-hynm2bv8wqhp5esfxq\\",\\n      \\"NodeId\\": \\"node-hynm2bv8wqhp5esfx1\\",\\n      \\"Status\\": \\"Running\\",\\n      \\"InputArtifactArchived\\": true,\\n      \\"OutputArtifactArchived\\": true,\\n      \\"StartedAt\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"FinishedAt\\": \\"2021-01-21T17:12:35.232Z\\",\\n      \\"NodeName\\": \\"dataSource\\"\\n    }\\n  ],\\n  \\"Outputs\\": [\\n    {\\n      \\"Name\\": \\"model_******\\",\\n      \\"Type\\": \\"DataSet\\",\\n      \\"Metadata\\": {\\n        \\"test\\": \\"test\\",\\n        \\"test2\\": 1\\n      },\\n      \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\",\\n      \\"Id\\": \\"artifact-ty1xwv*******s8zf\\",\\n      \\"Producer\\": \\"id-3d25-************-77856\\",\\n      \\"NodeId\\": \\"node-obpzu*******418grb7\\\\n\\",\\n      \\"PipelineRunId\\": \\"flow-dsjfk******jdskls\\",\\n      \\"Value\\": \\"{\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"model_flow_*********_node_**********_model\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"location\\\\\\\\\\\\\\": {\\\\\\\\\\\\\\"name\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"model_flow_**********_node_***********_model\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"endpoint\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"http://service.odps.aliyun.com/api\\\\\\\\\\\\\\", \\\\\\\\\\\\\\"project\\\\\\\\\\\\\\": \\\\\\\\\\\\\\"********\\\\\\\\\\\\\\"}}\\",\\n      \\"ExpandedArtifactIndex\\": 0,\\n      \\"ExpandableArtifactName\\": \\"inputArtifact\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '批量获取工作流任务状态',
    ),
    'ListPipelineRuns' => 
    array (
      'summary' => '获取工作流任务列表，支持过滤、排序和分页查询。',
      'path' => '/api/v1/pipelineruns',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流任务列表的页码。起始值为1，默认为1。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '分页查询时设置的每页显示的工作流任务数量，默认为10。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'SourceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流任务来源ID。请在工作流详情页面查看工作流任务来源ID，详情请参见[管理工作流](~~480625~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'ybpy**********fb2z
',
          ),
        ),
        3 => 
        array (
          'name' => 'Name',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流任务名称。

',
            'type' => 'string',
            'required' => false,
            'example' => 'testName',
          ),
        ),
        4 => 
        array (
          'name' => 'Order',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '排序的顺序，取值如下，与SortBy一起使用。
- ASC：升序。
- DESC（默认值）：降序。',
            'type' => 'string',
            'required' => false,
            'example' => 'DESC',
          ),
        ),
        5 => 
        array (
          'name' => 'SourceType',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流任务来源类型，支持如下值：
- UNKNOWN（默认）：未指定来源类型时的默认值。
- SDK：通过SDK创建的工作流任务。
- DESIGNER：通过Designer创建的工作流任务。
- M6：通过其他网站创建的工作流任务。',
            'type' => 'string',
            'required' => false,
            'example' => 'UNKNOWN',
          ),
        ),
        6 => 
        array (
          'name' => 'Status',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要过滤的工作流任务的状态，目前有如下几种状态：

- Initialized
- Running
- Succeeded
- Failed
- Terminated
- Unknown
- Skipped
- Terminating',
            'type' => 'string',
            'required' => false,
            'example' => 'Succeeded',
          ),
        ),
        7 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作空间ID。如何获取工作空间ID，请参见 [ListWorkspaces](~~449124~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '104623',
          ),
        ),
        8 => 
        array (
          'name' => 'UserId',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '用户id',
            'description' => '用户ID。',
            'type' => 'string',
            'required' => false,
            'example' => '155**********904
',
          ),
        ),
        9 => 
        array (
          'name' => 'PipelineIds',
          'in' => 'query',
          'schema' => 
          array (
            'title' => 'Pipeline的id集合，只有Source为M6可以使用该参数',
            'description' => '工作流的ID集合，多个工作流ID使用半角逗号（,）分隔。如何获取工作流ID，请参见[ListPipelines](~~438051~~)。',
            'type' => 'string',
            'required' => false,
            'example' => 'flow-rer7**********0otv, flow-hynm**********sfef',
          ),
        ),
        10 => 
        array (
          'name' => 'SortBy',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '用于排序的字段。目前有如下字段支持用于排序：

- PipelineId
- UserId
- ParentUserId
- StartedAt
- FinishedAt
- WorkflowServiceId
- Duration
- GmtCreateTime
- GmtModifiedTime',
            'type' => 'string',
            'required' => false,
            'example' => 'PipelineId',
          ),
        ),
        11 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '工作流任务ID，如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => false,
            'example' => '
flow-14vioac3k1s07k****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
              'TotalCount' => 
              array (
                'description' => '返回的工作流任务总量。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
              'PipelineRuns' => 
              array (
                'description' => '返回的工作流任务列表。

',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流任务的详情。

',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PipelineRunId' => 
                    array (
                      'description' => '工作流任务ID。

',
                      'type' => 'string',
                      'example' => 'flow-j94y**********lf7a
',
                    ),
                    'Name' => 
                    array (
                      'description' => '工作流任务名字。

',
                      'type' => 'string',
                      'example' => 'testName
',
                    ),
                    'Status' => 
                    array (
                      'description' => '工作流任务状态，目前有下面几种状态：

- Initialized
- Running
- Succeeded
- Failed
- Suspended
- Terminated
- Unknown
- Skipped
- Terminating',
                      'type' => 'string',
                      'example' => 'Succeeded',
                    ),
                    'UserId' => 
                    array (
                      'description' => '创建用户ID。',
                      'type' => 'string',
                      'example' => '155**********904',
                    ),
                    'ParentUserId' => 
                    array (
                      'description' => '创建用户主账户的ID。',
                      'type' => 'string',
                      'example' => '155**********904',
                    ),
                    'StartedAt' => 
                    array (
                      'description' => '工作流任务的开始UTC时间，格式iso8601。

',
                      'type' => 'string',
                      'example' => '2021-01-30T12:51:33.028Z
',
                    ),
                    'FinishedAt' => 
                    array (
                      'description' => '工作流任务的结束UTC时间，格式iso8601。

',
                      'type' => 'string',
                      'example' => '2021-01-30T12:52:33.028Z
',
                    ),
                    'NodeId' => 
                    array (
                      'description' => '工作流任务的节点ID。',
                      'type' => 'string',
                      'example' => 'node-n06d**********fc53
',
                    ),
                    'Duration' => 
                    array (
                      'description' => '工作流任务的运行时长，单位为秒。

',
                      'type' => 'integer',
                      'format' => 'int32',
                      'example' => '60',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '所属工作空间ID。

',
                      'type' => 'string',
                      'example' => '15945',
                    ),
                    'Message' => 
                    array (
                      'description' => '工作流任务失败提示信息。

',
                      'type' => 'string',
                      'example' => 'error message
',
                    ),
                    'SourceType' => 
                    array (
                      'description' => '工作流任务来源类型，支持如下值：
- UNKNOWN
- SDK
- DESIGNER
- M6
',
                      'type' => 'string',
                      'example' => 'UNKNOWN',
                    ),
                    'SourceId' => 
                    array (
                      'description' => '工作流任务的来源ID。

',
                      'type' => 'string',
                      'example' => 'abcd*********hxfu
',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'description' => '创建UTC时间，格式iso8601。

',
                      'type' => 'string',
                      'example' => '2021-01-30T12:51:33.028Z
',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'description' => '最近修改UTC时间，格式iso8601。

',
                      'type' => 'string',
                      'example' => '2021-01-30T12:51:33.028Z
',
                    ),
                    'PipelineId' => 
                    array (
                      'description' => '工作流ID。

',
                      'type' => 'string',
                      'example' => 'pipeline-j94y**********lf7a
',
                    ),
                    'Accessibility' => 
                    array (
                      'description' => '工作流任务的可见性，目前支持：
- PUBLIC
- PRIVATE',
                      'type' => 'string',
                      'example' => 'PUBLIC',
                    ),
                    'PipelineRunUri' => 
                    array (
                      'description' => '工作流任务详情URL。',
                      'type' => 'string',
                      'example' => 'https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****',
                    ),
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
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\",\\n  \\"TotalCount\\": 15,\\n  \\"PipelineRuns\\": [\\n    {\\n      \\"PipelineRunId\\": \\"flow-j94y**********lf7a\\\\n\\",\\n      \\"Name\\": \\"testName\\\\n\\",\\n      \\"Status\\": \\"Succeeded\\",\\n      \\"UserId\\": \\"155**********904\\",\\n      \\"ParentUserId\\": \\"155**********904\\",\\n      \\"StartedAt\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n      \\"FinishedAt\\": \\"2021-01-30T12:52:33.028Z\\\\n\\",\\n      \\"NodeId\\": \\"node-n06d**********fc53\\\\n\\",\\n      \\"Duration\\": 60,\\n      \\"WorkspaceId\\": \\"15945\\",\\n      \\"Message\\": \\"error message\\\\n\\",\\n      \\"SourceType\\": \\"UNKNOWN\\",\\n      \\"SourceId\\": \\"abcd*********hxfu\\\\n\\",\\n      \\"GmtCreateTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-30T12:51:33.028Z\\\\n\\",\\n      \\"PipelineId\\": \\"pipeline-j94y**********lf7a\\\\n\\",\\n      \\"Accessibility\\": \\"PUBLIC\\",\\n      \\"PipelineRunUri\\": \\"https://pai.console.aliyun.com/?regionId=cn-shanghai&workspaceId=24****#/studio/task/detail/flow-dsfbjt4k07lvp1****\\"\\n    }\\n  ]\\n}","type":"json"}]',
      'title' => '获取工作流任务列表',
    ),
    'TerminatePipelineRun' => 
    array (
      'summary' => '终止工作流任务。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/termination',
      'methods' => 
      array (
        0 => 'put',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'title' => 'Run id',
            'description' => '工作流任务ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'flow-rbvg5wzljzjhc9ks92',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '473469C7-****-****-****-A3DC0DE3C83E',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"473469C7-****-****-****-A3DC0DE3C83E\\"\\n}","type":"json"}]',
      'title' => '终止工作流任务	',
    ),
    'RerunPipelineRun' => 
    array (
      'summary' => '重新执行工作流任务。',
      'path' => '/api/v1/pipelineruns/{PipelineRunId}/rerun',
      'methods' => 
      array (
        0 => 'put',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineRunId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID，如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'run-rbvg5wzljzjhc9ks92',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结果。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\"\\n}","type":"json"}]',
      'title' => '开始工作流任务',
    ),
    'CreatePipeline' => 
    array (
      'summary' => '创建工作流（Pipeline）。工作流是由一系列节点组成的有向无环图，定义了一个机器学习流程。',
      'path' => '/api/v1/pipelines',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求body。',
            'type' => 'object',
            'properties' => 
            array (
              'WorkspaceId' => 
              array (
                'description' => '工作空间ID。如何获取工作空间ID，请参见[ListWorkspaces](~~449124~~)。',
                'type' => 'string',
                'required' => true,
                'example' => '72***',
              ),
              'Manifest' => 
              array (
                'description' => '工作流定义，具体样例见下方请求参数补充说明。',
                'type' => 'string',
                'required' => true,
                'example' => 'apiVersion: "core/v1"*********',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681******',
              ),
              'PipelineId' => 
              array (
                'description' => '工作流ID。',
                'type' => 'string',
                'example' => 'pipeline-hynm2bv8**********',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681******\\",\\n  \\"PipelineId\\": \\"pipeline-hynm2bv8**********\\"\\n}","errorExample":""},{"type":"xml","example":"<CreatePipelineResponse>\\n    <RequestId>DA869D1B-035A-43B2-ACC1-C56681BD9FAA</RequestId>\\n    <PipelineId>pipeline-hynm2bv8**********</PipelineId>\\n</CreatePipelineResponse>","errorExample":""}]',
      'title' => '创建工作流',
      'requestParamsDescription' => '工作流定义样例：该工作流由读数据表（`data_source`），类型转换（`type_transform`）组成。

```
apiVersion: "core/v1"
metadata:
  provider: "166233998075****"
  version: "v1"
  identifier: "my_pipeline"
  name: "source-transform"
spec:
  inputs:
    parameters:
    - name: "execution_maxcompute"
      value:
        spec:
          endpoint: "http://service.cn.maxcompute.aliyun-inc.com/api"
          odpsProject: "test_i****"
      type: "Map"
  pipelines:
  - apiVersion: "core/v1"
    metadata:
      provider: "pai"
      version: "v1"
      identifier: "data_source"
      name: "data-source"
      displayName: "读数据表-1"
    spec:
      arguments:
        parameters:
        - name: "inputTableName"
          value: "pai_online_project.wumai_data"
        - name: "execution"
          from: "{{inputs.parameters.execution_maxcompute}}"
  - apiVersion: "core/v1"
    metadata:
      provider: "pai"
      version: "v1"
      identifier: "type_transform"
      name: "type-transform"
      displayName: "类型转换-1"
    spec:
      arguments:
        artifacts:
        - name: "inputTable"
          from: "{{pipelines.data_source.outputs.artifacts.outputTable}}"
        parameters:
        - name: "cols_to_double"
          value: "time,hour,pm2,pm10,so2,co,no2"
        - name: "execution"
          from: "{{inputs.parameters.execution_maxcompute}}"
      dependencies:
      - "data_source"
```
其中关键参数配置如下：

- **provider**：替换为您的账号ID。
- **odpsProject**：替换为绑定到工作空间中的MaxCompute资源名称。如何查询MaxCompute资源名称，请参见[管理工作空间](~~430481~~)。',
    ),
    'DeletePipeline' => 
    array (
      'summary' => '删除工作流。',
      'path' => '/api/v1/pipelines/{PipelineId}',
      'methods' => 
      array (
        0 => 'delete',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID。如何获取工作流ID，请参见[ListPipelines](~~438051~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pipeline-hynm2bv8wqhp5e****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681BD9FAA',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681BD9FAA\\"\\n}","errorExample":""},{"type":"xml","example":"<DeletePipelineResponse>\\n    <RequestId>DA869D1B-035A-43B2-ACC1-C56681BD9FAA</RequestId>\\n</DeletePipelineResponse>","errorExample":""}]',
      'title' => '删除工作流',
      'description' => '如果指定的工作流作为共享工作流被用户订阅、或者作为子工作流被其它工作流引用，则不允许删除。',
    ),
    'UpdatePipeline' => 
    array (
      'summary' => '更新工作流的定义。',
      'path' => '/api/v1/pipelines/{PipelineId}',
      'methods' => 
      array (
        0 => 'put',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pipeline-hynm2bv8**********',
          ),
        ),
        1 => 
        array (
          'name' => 'body',
          'in' => 'body',
          'style' => 'json',
          'schema' => 
          array (
            'description' => '请求Body。',
            'type' => 'object',
            'properties' => 
            array (
              'Manifest' => 
              array (
                'description' => '工作流定义，具体样例见下方请求参数补充说明。',
                'type' => 'string',
                'required' => true,
                'example' => 'apiVersion: "core/v1"*********',
              ),
            ),
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
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681******',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"errorExample":"","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681******\\"\\n}","type":"json"}]',
      'title' => '更新工作流',
      'requestParamsDescription' => '工作流定义样例：该工作流由读数据表（`data_source`），类型转换（`type_transform`）组成。

```
apiVersion: "core/v1"
metadata:
  provider: "166233998075****"
  version: "v1"
  identifier: "my_pipeline"
  name: "source-transform"
spec:
  inputs:
    parameters:
    - name: "execution_maxcompute"
      value:
        spec:
          endpoint: "http://service.cn.maxcompute.aliyun-inc.com/api"
          odpsProject: "test_i****"
      type: "Map"
  pipelines:
  - apiVersion: "core/v1"
    metadata:
      provider: "pai"
      version: "v1"
      identifier: "data_source"
      name: "data-source"
      displayName: "读数据表-1"
    spec:
      arguments:
        parameters:
        - name: "inputTableName"
          value: "pai_online_project.wumai_data"
        - name: "execution"
          from: "{{inputs.parameters.execution_maxcompute}}"
  - apiVersion: "core/v1"
    metadata:
      provider: "pai"
      version: "v1"
      identifier: "type_transform"
      name: "type-transform"
      displayName: "类型转换-1"
    spec:
      arguments:
        artifacts:
        - name: "inputTable"
          from: "{{pipelines.data_source.outputs.artifacts.outputTable}}"
        parameters:
        - name: "cols_to_double"
          value: "time,hour,pm2,pm10,so2,co,no2"
        - name: "execution"
          from: "{{inputs.parameters.execution_maxcompute}}"
      dependencies:
      - "data_source"
```
其中关键参数配置如下：
- **provider**：替换为您的账号ID。
- **odpsProject**：替换为绑定到工作空间中的MaxCompute资源名称。如何查询MaxCompute资源名称，请参见[管理工作空间](~~430481~~)。',
    ),
    'GetPipeline' => 
    array (
      'summary' => '获取Pipeline信息。',
      'path' => '/api/v1/pipelines/{PipelineId}',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PipelineId',
          'in' => 'path',
          'schema' => 
          array (
            'description' => '工作流ID。如何获取工作流任务ID，请参见[ListPipelineRuns](~~438042~~)。',
            'type' => 'string',
            'required' => true,
            'example' => 'pipeline-hynm2bv8wqhp5e****',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => '63EDFF2F-4D51-46F0-9D65-2F8F393B****',
              ),
              'PipelineId' => 
              array (
                'description' => '工作流ID。',
                'type' => 'string',
                'example' => 'pipeline-hynm2bv8wqhp5e****',
              ),
              'Provider' => 
              array (
                'description' => '自定义工作流，为用户ID。官方工作流为PAI。',
                'type' => 'string',
                'example' => '132668941337****',
              ),
              'Identifier' => 
              array (
                'description' => '工作流标识。',
                'type' => 'string',
                'example' => 'SqlWrite',
              ),
              'Version' => 
              array (
                'description' => '工作流版本。',
                'type' => 'string',
                'example' => 'v1',
              ),
              'Manifest' => 
              array (
                'description' => '工作流定义。',
                'type' => 'string',
                'example' => 'apiVersion: ****',
              ),
              'GmtCreateTime' => 
              array (
                'description' => '创建UTC时间，日期格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'GmtModifiedTime' => 
              array (
                'description' => '最后修改UTC时间，日期格式ISO8601。',
                'type' => 'string',
                'example' => '2021-01-21T17:12:35.232Z',
              ),
              'Uuid' => 
              array (
                'description' => '工作流当前版本标识，用户每次更新，会生成该Uuid。',
                'type' => 'string',
                'example' => 'q8dp9hklueznhg****',
              ),
              'WorkspaceId' => 
              array (
                'description' => '工作空间ID。',
                'type' => 'string',
                'example' => '726**',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"63EDFF2F-4D51-46F0-9D65-2F8F393B****\\",\\n  \\"PipelineId\\": \\"pipeline-hynm2bv8wqhp5e****\\",\\n  \\"Provider\\": \\"132668941337****\\",\\n  \\"Identifier\\": \\"SqlWrite\\",\\n  \\"Version\\": \\"v1\\",\\n  \\"Manifest\\": \\"apiVersion: ****\\",\\n  \\"GmtCreateTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"GmtModifiedTime\\": \\"2021-01-21T17:12:35.232Z\\",\\n  \\"Uuid\\": \\"q8dp9hklueznhg****\\",\\n  \\"WorkspaceId\\": \\"726**\\"\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取工作流',
      'responseParamsDescription' => '返回参数Manifest补充说明
```
apiVersion: "core/v1"
metadata:
  version: "v1"
  # 工作流的提供方。
  provider: "132668**********"
  identifier: "my***"
spec:
  inputs:
    parameters:
    - name: "inputTableName"
      value: "myDefault"
      # 类型，支持String， Double， Bool， Int， Map， List。
      type: "String"
      desc: "Table Name"
      # 参数是否必填，默认false。
      required: false
  outputs:
    artifacts:
    - name: "outputTable"
      metadata:
        # 类型，支持DataSet，Model，ModelEvaluation，Any，DataStream，Raw（原始数据），本例为DataSet。
        type:
          DataSet:
            locationType: "MaxComputeTable"
      desc: "Source MaxCompute Table Output Port"
  container:
    image: "registry.***.com/***/***:v*"
    command:
    - "bash"
    - "***.sh"
    volumeMounts:
    - name: "download-volume"
      path: "/***"
  initContainers:
  - image: "registry.***.com/***/***:v*"
    command:
    - "***.sh"
    args:
    - "--***"
    name: "initdownload"
    volumeMounts:
    - name: "download-volume"
      path: "/downloadPath"
  volumes:
  - name: "download-volume"
    emptyDir: {}
```',
    ),
    'ListPipelines' => 
    array (
      'summary' => '获取工作流列表。',
      'path' => '/api/v1/pipelines',
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
      'deprecated' => false,
      'parameters' => 
      array (
        0 => 
        array (
          'name' => 'PageNumber',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '页数。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '1',
          ),
        ),
        1 => 
        array (
          'name' => 'PageSize',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '每页大小。',
            'type' => 'integer',
            'format' => 'int32',
            'required' => false,
            'example' => '10',
          ),
        ),
        2 => 
        array (
          'name' => 'PipelineIdentifier',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要过滤的工作流标识。',
            'type' => 'string',
            'required' => false,
            'example' => 'SqlWriteTable_2',
          ),
        ),
        3 => 
        array (
          'name' => 'PipelineProvider',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要过滤的工作流提供者。PAI官方提供的工作流，Provider为pai，您创建的工作流，该值为您的云账号ID。',
            'type' => 'string',
            'required' => false,
            'example' => 'pai',
          ),
        ),
        4 => 
        array (
          'name' => 'PipelineVersion',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要过滤的工作流版本。',
            'type' => 'string',
            'required' => false,
            'example' => 'v1',
          ),
        ),
        5 => 
        array (
          'name' => 'WorkspaceId',
          'in' => 'query',
          'schema' => 
          array (
            'description' => '需要过滤的工作空间ID。',
            'type' => 'string',
            'required' => false,
            'example' => '726**',
          ),
        ),
        6 => 
        array (
          'name' => 'FuzzyMatching',
          'in' => 'query',
          'schema' => 
          array (
            'title' => '模糊匹配',
            'description' => '是否模糊匹配。',
            'type' => 'boolean',
            'required' => false,
            'enumValueTitles' => 
            array (
              'true' => 'true',
              'false' => 'false',
            ),
            'example' => 'false',
          ),
        ),
      ),
      'responses' => 
      array (
        200 => 
        array (
          'schema' => 
          array (
            'title' => 'Schema of Response',
            'description' => '返回结构体。',
            'type' => 'object',
            'properties' => 
            array (
              'RequestId' => 
              array (
                'title' => 'Id of the request',
                'description' => '请求ID。',
                'type' => 'string',
                'example' => 'DA869D1B-035A-43B2-ACC1-C56681B****',
              ),
              'Pipelines' => 
              array (
                'description' => '工作流列表。',
                'type' => 'array',
                'items' => 
                array (
                  'description' => '工作流。',
                  'type' => 'object',
                  'properties' => 
                  array (
                    'PipelineId' => 
                    array (
                      'description' => '工作流ID。',
                      'type' => 'string',
                      'example' => 'pipeline-c0h44g3wlwkj8o*****',
                    ),
                    'GmtCreateTime' => 
                    array (
                      'description' => '创建UTC时间，日期格式iso8601。',
                      'type' => 'string',
                      'example' => '2021-01-06T14:32:50Z',
                    ),
                    'GmtModifiedTime' => 
                    array (
                      'description' => '修改UTC时间，日期格式iso8601。',
                      'type' => 'string',
                      'example' => '2021-01-06T22:26:24Z',
                    ),
                    'Provider' => 
                    array (
                      'description' => '工作流提供者。PAI平台提供的工作流Provider为pai。',
                      'type' => 'string',
                      'example' => 'pai',
                    ),
                    'Identifier' => 
                    array (
                      'description' => '工作流标识。',
                      'type' => 'string',
                      'example' => 'SqlWriteTable_2',
                    ),
                    'Version' => 
                    array (
                      'description' => '工作流版本。',
                      'type' => 'string',
                      'example' => 'v1',
                    ),
                    'Uuid' => 
                    array (
                      'description' => '工作流当前版本标识，用户每次更新，会生成该uuid。',
                      'type' => 'string',
                      'example' => 'q8dp9hklueznh*****',
                    ),
                    'WorkspaceId' => 
                    array (
                      'description' => '工作空间ID。',
                      'type' => 'string',
                      'example' => '726**',
                    ),
                  ),
                ),
              ),
              'TotalCount' => 
              array (
                'description' => '总数。',
                'type' => 'integer',
                'format' => 'int64',
                'example' => '15',
              ),
            ),
          ),
        ),
      ),
      'responseDemo' => '[{"type":"json","example":"{\\n  \\"RequestId\\": \\"DA869D1B-035A-43B2-ACC1-C56681B****\\",\\n  \\"Pipelines\\": [\\n    {\\n      \\"PipelineId\\": \\"pipeline-c0h44g3wlwkj8o*****\\",\\n      \\"GmtCreateTime\\": \\"2021-01-06T14:32:50Z\\",\\n      \\"GmtModifiedTime\\": \\"2021-01-06T22:26:24Z\\",\\n      \\"Provider\\": \\"pai\\",\\n      \\"Identifier\\": \\"SqlWriteTable_2\\",\\n      \\"Version\\": \\"v1\\",\\n      \\"Uuid\\": \\"q8dp9hklueznh*****\\",\\n      \\"WorkspaceId\\": \\"726**\\"\\n    }\\n  ],\\n  \\"TotalCount\\": 15\\n}","errorExample":""},{"type":"xml","example":"","errorExample":""}]',
      'title' => '获取工作流列表',
    ),
  ),
  'endpoints' => 
  array (
    0 => 
    array (
      'regionId' => 'cn-beijing',
      'endpoint' => 'paiflow.cn-beijing.aliyuncs.com',
    ),
    1 => 
    array (
      'regionId' => 'cn-hangzhou',
      'endpoint' => 'paiflow.cn-hangzhou.aliyuncs.com',
    ),
    2 => 
    array (
      'regionId' => 'cn-shanghai',
      'endpoint' => 'paiflow.cn-shanghai.aliyuncs.com',
    ),
    3 => 
    array (
      'regionId' => 'cn-shenzhen',
      'endpoint' => 'paiflow.cn-shenzhen.aliyuncs.com',
    ),
    4 => 
    array (
      'regionId' => 'cn-hongkong',
      'endpoint' => 'paiflow.cn-hongkong.aliyuncs.com',
    ),
    5 => 
    array (
      'regionId' => 'ap-southeast-1',
      'endpoint' => 'paiflow.ap-southeast-1.aliyuncs.com',
    ),
    6 => 
    array (
      'regionId' => 'us-east-1',
      'endpoint' => 'paiflow.us-east-1.aliyuncs.com',
    ),
    7 => 
    array (
      'regionId' => 'us-west-1',
      'endpoint' => 'paiflow.us-west-1.aliyuncs.com',
    ),
    8 => 
    array (
      'regionId' => 'eu-central-1',
      'endpoint' => 'paiflow.eu-central-1.aliyuncs.com',
    ),
    9 => 
    array (
      'regionId' => 'ap-south-1',
      'endpoint' => 'paiflow.ap-south-1.aliyuncs.com',
    ),
    10 => 
    array (
      'regionId' => 'cn-wulanchabu',
      'endpoint' => 'paiflow.cn-wulanchabu.aliyuncs.com',
    ),
    11 => 
    array (
      'regionId' => 'ap-southeast-5',
      'endpoint' => 'paiflow.ap-southeast-5.aliyuncs.com',
    ),
  ),
);